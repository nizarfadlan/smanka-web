
+function ($) {
  'use strict';

  // terbang CLASS DEFINITION
  // ======================

  var terbang = function (element, options) {
    this.options             = options
    this.$body               = $(document.body)
    this.$element            = $(element)
    this.$dialog             = this.$element.find('.terbang-dialog')
    this.$backdrop           = null
    this.isShown             = null
    this.originalBodyPad     = null
    this.scrollbarWidth      = 0
    this.ignoreBackdropClick = false

    if (this.options.remote) {
      this.$element
        .find('.terbang-content')
        .load(this.options.remote, $.proxy(function () {
          this.$element.trigger('loaded.bs.terbang')
        }, this))
    }
  }

  terbang.VERSION  = '3.3.7'

  terbang.TRANSITION_DURATION = 300
  terbang.BACKDROP_TRANSITION_DURATION = 150

  terbang.DEFAULTS = {
    backdrop: true,
    keyboard: true,
    show: true
  }

  terbang.prototype.toggle = function (_relatedTarget) {
    return this.isShown ? this.hide() : this.show(_relatedTarget)
  }

  terbang.prototype.show = function (_relatedTarget) {
    var that = this
    var e    = $.Event('show.bs.terbang', { relatedTarget: _relatedTarget })

    this.$element.trigger(e)

    if (this.isShown || e.isDefaultPrevented()) return

    this.isShown = true

    this.checkScrollbar()
    this.setScrollbar()
    this.$body.addClass('terbang-open')

    this.escape()
    this.resize()

    this.$element.on('click.dismiss.bs.terbang', '[data-dismiss="terbang"]', $.proxy(this.hide, this))

    this.$dialog.on('mousedown.dismiss.bs.terbang', function () {
      that.$element.one('mouseup.dismiss.bs.terbang', function (e) {
        if ($(e.target).is(that.$element)) that.ignoreBackdropClick = true
      })
    })

    this.backdrop(function () {
      var transition = $.support.transition && that.$element.hasClass('fade')

      if (!that.$element.parent().length) {
        that.$element.appendTo(that.$body) // don't move terbangs dom position
      }

      that.$element
        .show()
        .scrollTop(0)

      that.adjustDialog()

      if (transition) {
        that.$element[0].offsetWidth // force reflow
      }

      that.$element.addClass('in')

      that.enforceFocus()

      var e = $.Event('shown.bs.terbang', { relatedTarget: _relatedTarget })

      transition ?
        that.$dialog // wait for terbang to slide in
          .one('bsTransitionEnd', function () {
            that.$element.trigger('focus').trigger(e)
          })
          .emulateTransitionEnd(terbang.TRANSITION_DURATION) :
        that.$element.trigger('focus').trigger(e)
    })
  }

  terbang.prototype.hide = function (e) {
    if (e) e.preventDefault()

    e = $.Event('hide.bs.terbang')

    this.$element.trigger(e)

    if (!this.isShown || e.isDefaultPrevented()) return

    this.isShown = false

    this.escape()
    this.resize()

    $(document).off('focusin.bs.terbang')

    this.$element
      .removeClass('in')
      .off('click.dismiss.bs.terbang')
      .off('mouseup.dismiss.bs.terbang')

    this.$dialog.off('mousedown.dismiss.bs.terbang')

    $.support.transition && this.$element.hasClass('fade') ?
      this.$element
        .one('bsTransitionEnd', $.proxy(this.hideterbang, this))
        .emulateTransitionEnd(terbang.TRANSITION_DURATION) :
      this.hideterbang()
  }

  terbang.prototype.enforceFocus = function () {
    $(document)
      .off('focusin.bs.terbang') // guard against infinite focus loop
      .on('focusin.bs.terbang', $.proxy(function (e) {
        if (document !== e.target &&
            this.$element[0] !== e.target &&
            !this.$element.has(e.target).length) {
          this.$element.trigger('focus')
        }
      }, this))
  }

  terbang.prototype.escape = function () {
    if (this.isShown && this.options.keyboard) {
      this.$element.on('keydown.dismiss.bs.terbang', $.proxy(function (e) {
        e.which == 27 && this.hide()
      }, this))
    } else if (!this.isShown) {
      this.$element.off('keydown.dismiss.bs.terbang')
    }
  }

  terbang.prototype.resize = function () {
    if (this.isShown) {
      $(window).on('resize.bs.terbang', $.proxy(this.handleUpdate, this))
    } else {
      $(window).off('resize.bs.terbang')
    }
  }

  terbang.prototype.hideterbang = function () {
    var that = this
    this.$element.hide()
    this.backdrop(function () {
      that.$body.removeClass('terbang-open')
      that.resetAdjustments()
      that.resetScrollbar()
      that.$element.trigger('hidden.bs.terbang')
    })
  }

  terbang.prototype.removeBackdrop = function () {
    this.$backdrop && this.$backdrop.remove()
    this.$backdrop = null
  }

  terbang.prototype.backdrop = function (callback) {
    var that = this
    var animate = this.$element.hasClass('fade') ? 'fade' : ''

    if (this.isShown && this.options.backdrop) {
      var doAnimate = $.support.transition && animate

      this.$backdrop = $(document.createElement('div'))
        .addClass('terbang-backdrop ' + animate)
        .appendTo(this.$body)

      this.$element.on('click.dismiss.bs.terbang', $.proxy(function (e) {
        if (this.ignoreBackdropClick) {
          this.ignoreBackdropClick = false
          return
        }
        if (e.target !== e.currentTarget) return
        this.options.backdrop == 'static'
          ? this.$element[0].focus()
          : this.hide()
      }, this))

      if (doAnimate) this.$backdrop[0].offsetWidth // force reflow

      this.$backdrop.addClass('in')

      if (!callback) return

      doAnimate ?
        this.$backdrop
          .one('bsTransitionEnd', callback)
          .emulateTransitionEnd(terbang.BACKDROP_TRANSITION_DURATION) :
        callback()

    } else if (!this.isShown && this.$backdrop) {
      this.$backdrop.removeClass('in')

      var callbackRemove = function () {
        that.removeBackdrop()
        callback && callback()
      }
      $.support.transition && this.$element.hasClass('fade') ?
        this.$backdrop
          .one('bsTransitionEnd', callbackRemove)
          .emulateTransitionEnd(terbang.BACKDROP_TRANSITION_DURATION) :
        callbackRemove()

    } else if (callback) {
      callback()
    }
  }

  // these following methods are used to handle overflowing terbangs

  terbang.prototype.handleUpdate = function () {
    this.adjustDialog()
  }

  terbang.prototype.adjustDialog = function () {
    var terbangIsOverflowing = this.$element[0].scrollHeight > document.documentElement.clientHeight

    this.$element.css({
      paddingLeft:  !this.bodyIsOverflowing && terbangIsOverflowing ? this.scrollbarWidth : '',
      paddingRight: this.bodyIsOverflowing && !terbangIsOverflowing ? this.scrollbarWidth : ''
    })
  }

  terbang.prototype.resetAdjustments = function () {
    this.$element.css({
      paddingLeft: '',
      paddingRight: ''
    })
  }

  terbang.prototype.checkScrollbar = function () {
    var fullWindowWidth = window.innerWidth
    if (!fullWindowWidth) { // workaround for missing window.innerWidth in IE8
      var documentElementRect = document.documentElement.getBoundingClientRect()
      fullWindowWidth = documentElementRect.right - Math.abs(documentElementRect.left)
    }
    this.bodyIsOverflowing = document.body.clientWidth < fullWindowWidth
    this.scrollbarWidth = this.measureScrollbar()
  }

  terbang.prototype.setScrollbar = function () {
    var bodyPad = parseInt((this.$body.css('padding-right') || 0), 10)
    this.originalBodyPad = document.body.style.paddingRight || ''
    if (this.bodyIsOverflowing) this.$body.css('padding-right', bodyPad + this.scrollbarWidth)
  }

  terbang.prototype.resetScrollbar = function () {
    this.$body.css('padding-right', this.originalBodyPad)
  }

  terbang.prototype.measureScrollbar = function () { // thx walsh
    var scrollDiv = document.createElement('div')
    scrollDiv.className = 'terbang-scrollbar-measure'
    this.$body.append(scrollDiv)
    var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth
    this.$body[0].removeChild(scrollDiv)
    return scrollbarWidth
  }


  // terbang PLUGIN DEFINITION
  // =======================

  function Plugin(option, _relatedTarget) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.terbang')
      var options = $.extend({}, terbang.DEFAULTS, $this.data(), typeof option == 'object' && option)

      if (!data) $this.data('bs.terbang', (data = new terbang(this, options)))
      if (typeof option == 'string') data[option](_relatedTarget)
      else if (options.show) data.show(_relatedTarget)
    })
  }

  var old = $.fn.terbang

  $.fn.terbang             = Plugin
  $.fn.terbang.Constructor = terbang


  // terbang NO CONFLICT
  // =================

  $.fn.terbang.noConflict = function () {
    $.fn.terbang = old
    return this
  }


  // terbang DATA-API
  // ==============

  $(document).on('click.bs.terbang.data-api', '[data-toggle="terbang"]', function (e) {
    var $this   = $(this)
    var href    = $this.attr('href')
    var $target = $($this.attr('data-target') || (href && href.replace(/.*(?=#[^\s]+$)/, ''))) // strip for ie7
    var option  = $target.data('bs.terbang') ? 'toggle' : $.extend({ remote: !/#/.test(href) && href }, $target.data(), $this.data())

    if ($this.is('a')) e.preventDefault()

    $target.one('show.bs.terbang', function (showEvent) {
      if (showEvent.isDefaultPrevented()) return // only register focus restorer if terbang will actually get shown
      $target.one('hidden.bs.terbang', function () {
        $this.is(':visible') && $this.trigger('focus')
      })
    })
    Plugin.call($target, option, this)
  })

}(jQuery);
