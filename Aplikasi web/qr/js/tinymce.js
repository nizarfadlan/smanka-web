tinymce.init({
	file_browser_callback: function(field, url, type, win) {
   tinyMCE.activeEditor.windowManager.open({
    file: 'kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
    title: 'EkoTimo',
    width: 900,
    height: 700,
    inline: true,
    close_previous: false
   }, {
    window: win,
    input: field
   });
   return false;
  },

    selector: 'textarea#eko',
    theme: 'modern',
    plugins: [
        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools',
    ],
	
    toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
    toolbar2: 'print preview media | forecolor backcolor emoticons',
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
});