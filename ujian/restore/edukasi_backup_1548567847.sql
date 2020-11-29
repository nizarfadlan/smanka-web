

CREATE TABLE `acak` (
  `id_acak` int(11) NOT NULL AUTO_INCREMENT,
  `aktif` int(1) NOT NULL,
  PRIMARY KEY (`id_acak`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO acak VALUES("1","1");



CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_sekolah` varchar(200) NOT NULL,
  `alamat` varchar(400) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `kepala_sekolah` varchar(250) NOT NULL,
  `nip` varchar(200) NOT NULL,
  `id` varchar(10) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO admin VALUES("1","admin","21232f297a57a5a743894a0e4a801fc3","Wadah Edukasi","Software Developer","logo2.png","Eko Timo BP.,S.Pt.","NIP. 123456","dataku");



CREATE TABLE `aktif` (
  `id_aktif` int(11) NOT NULL AUTO_INCREMENT,
  `kode` int(1) NOT NULL,
  PRIMARY KEY (`id_aktif`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO aktif VALUES("1","1");



CREATE TABLE `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `aktif` int(1) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO client VALUES("1","1");



CREATE TABLE `ijin` (
  `id_token` varchar(11) NOT NULL,
  `token` varchar(6) NOT NULL,
  PRIMARY KEY (`id_token`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO ijin VALUES("token123","FYSGTJ");



CREATE TABLE `jawaban` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_mapel` varchar(20) NOT NULL,
  `urutan` varchar(5) NOT NULL,
  `tanya` varchar(5) NOT NULL,
  `j1` varchar(1) NOT NULL,
  `j2` varchar(1) NOT NULL,
  `j3` varchar(1) NOT NULL,
  `j4` varchar(1) NOT NULL,
  `j5` varchar(1) NOT NULL,
  `jawab` varchar(100) NOT NULL,
  `kunci` varchar(100) NOT NULL,
  `kunci2` varchar(300) NOT NULL,
  `kunci3` varchar(300) NOT NULL,
  `nilai` int(1) NOT NULL,
  `user` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `waktu_awal` time NOT NULL,
  `waktu_update` time NOT NULL,
  `sisa_waktu` varchar(10) NOT NULL,
  `total_waktu` varchar(10) NOT NULL,
  `ragu` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=516 DEFAULT CHARSET=latin1;

INSERT INTO jawaban VALUES("421","MATMIPA12","1","29","E","C","A","D","B","C","A","","","0","105","1","27-01-2019","05:35:46","05:35:51","7195","7200","0");
INSERT INTO jawaban VALUES("422","MATMIPA12","2","6","A","D","C","E","B","C","C","","","1","105","1","27-01-2019","05:35:46","05:35:54","7192","7200","0");
INSERT INTO jawaban VALUES("423","MATMIPA12","3","30","A","B","E","D","C","D","C","","","0","105","1","27-01-2019","05:35:46","05:35:58","7188","7200","0");
INSERT INTO jawaban VALUES("424","MATMIPA12","4","11","A","D","E","B","C","B","A","","","0","105","1","27-01-2019","05:35:46","05:36:51","7135","7200","0");
INSERT INTO jawaban VALUES("425","MATMIPA12","5","21","C","D","B","A","E","","C","","","0","105","1","27-01-2019","05:35:46","05:39:09","6997","7200","0");
INSERT INTO jawaban VALUES("426","MATMIPA12","6","8","C","A","E","B","D","","B","","","0","105","1","27-01-2019","05:35:46","05:40:04","6942","7200","0");
INSERT INTO jawaban VALUES("427","MATMIPA12","7","12","B","A","D","E","C","","B","","","0","105","1","27-01-2019","05:35:46","05:40:17","6929","7200","0");
INSERT INTO jawaban VALUES("428","MATMIPA12","8","23","C","B","E","A","D","E","B","","","0","105","1","27-01-2019","05:35:46","05:44:13","6693","7200","0");
INSERT INTO jawaban VALUES("429","MATMIPA12","9","7","D","C","A","E","B","","D","","","0","105","1","27-01-2019","05:35:46","05:44:28","6678","7200","0");
INSERT INTO jawaban VALUES("430","MATMIPA12","10","19","C","B","A","D","E","","A","","","0","105","1","27-01-2019","05:35:46","05:44:30","6676","7200","0");
INSERT INTO jawaban VALUES("431","MATMIPA12","11","24","A","C","E","B","D","","A","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("432","MATMIPA12","12","1","C","D","B","A","E","","C","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("433","MATMIPA12","13","10","C","B","A","D","E","","C","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("434","MATMIPA12","14","14","B","A","C","D","E","","A","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("435","MATMIPA12","15","20","A","C","B","D","E","","B","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("436","MATMIPA12","16","4","A","C","B","E","D","","A","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("437","MATMIPA12","17","16","B","A","C","E","D","","C","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("438","MATMIPA12","18","28","C","B","E","A","D","","B","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("439","MATMIPA12","19","3","E","B","C","A","D","","B","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("440","MATMIPA12","20","26","A","D","C","B","E","","A","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("441","MATMIPA12","21","27","B","D","A","E","C","","B","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("442","MATMIPA12","22","17","C","E","D","A","B","","C","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("443","MATMIPA12","23","15","E","D","A","B","C","","C","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("444","MATMIPA12","24","13","C","B","E","A","D","","B","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("445","MATMIPA12","25","18","D","C","A","B","E","","B","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("446","MATMIPA12","26","22","E","D","A","C","B","","D","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("447","MATMIPA12","27","25","E","A","B","C","D","","C","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("448","MATMIPA12","28","2","D","E","C","A","B","","C","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("449","MATMIPA12","29","9","A","B","C","D","E","","A","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("450","MATMIPA12","30","5","B","C","A","D","E","","B","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("451","MATMIPA12","31","33","","","","","","","25","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("452","MATMIPA12","32","35","","","","","","","25","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("453","MATMIPA12","33","31","","","","","","","1/2","0,5","0.5","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("454","MATMIPA12","34","32","","","","","","","25","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("455","MATMIPA12","35","34","","","","","","","25","","","0","105","1","27-01-2019","05:35:46","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("456","BHSINDO12","1","15","B","E","D","C","A","E","E","","","1","105","1","27-01-2019","06:25:50","06:25:55","7195","7200","0");
INSERT INTO jawaban VALUES("457","BHSINDO12","2","49","D","B","C","A","E","A","E","","","0","105","1","27-01-2019","06:25:50","06:25:57","7193","7200","0");
INSERT INTO jawaban VALUES("458","BHSINDO12","3","34","E","A","B","C","D","B","E","","","0","105","1","27-01-2019","06:25:50","06:25:59","7191","7200","0");
INSERT INTO jawaban VALUES("459","BHSINDO12","4","2","B","C","A","D","E","A","E","","","0","105","1","27-01-2019","06:25:50","06:29:57","6953","7200","0");
INSERT INTO jawaban VALUES("460","BHSINDO12","5","42","E","B","C","A","D","A","E","","","0","105","1","27-01-2019","06:25:50","06:30:00","6950","7200","0");
INSERT INTO jawaban VALUES("461","BHSINDO12","6","53","C","E","D","B","A","E","E","","","1","105","1","27-01-2019","06:25:50","06:30:03","6947","7200","0");
INSERT INTO jawaban VALUES("462","BHSINDO12","7","26","B","C","E","A","D","B","E","","","0","105","1","27-01-2019","06:25:50","06:30:05","6945","7200","0");
INSERT INTO jawaban VALUES("463","BHSINDO12","8","6","E","A","D","B","C","","E","","","0","105","1","27-01-2019","06:25:50","06:30:34","6916","7200","0");
INSERT INTO jawaban VALUES("464","BHSINDO12","9","7","E","C","A","D","B","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("465","BHSINDO12","10","58","E","B","A","C","D","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("466","BHSINDO12","11","14","A","E","C","D","B","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("467","BHSINDO12","12","54","A","E","D","C","B","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("468","BHSINDO12","13","5","E","D","C","B","A","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("469","BHSINDO12","14","18","B","D","C","E","A","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("470","BHSINDO12","15","13","A","D","C","B","E","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("471","BHSINDO12","16","4","A","B","C","E","D","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("472","BHSINDO12","17","47","E","D","B","A","C","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("473","BHSINDO12","18","30","C","A","D","B","E","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("474","BHSINDO12","19","44","A","D","B","C","E","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("475","BHSINDO12","20","29","C","B","D","A","E","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("476","BHSINDO12","21","59","C","E","D","B","A","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("477","BHSINDO12","22","8","E","C","D","B","A","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("478","BHSINDO12","23","36","E","B","D","C","A","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("479","BHSINDO12","24","3","C","B","A","E","D","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("480","BHSINDO12","25","12","A","D","C","B","E","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("481","BHSINDO12","26","37","E","A","D","C","B","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("482","BHSINDO12","27","24","D","E","A","B","C","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("483","BHSINDO12","28","1","C","A","E","B","D","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("484","BHSINDO12","29","55","A","E","C","B","D","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("485","BHSINDO12","30","31","A","B","D","C","E","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("486","BHSINDO12","31","11","B","D","A","C","E","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("487","BHSINDO12","32","32","C","E","D","B","A","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("488","BHSINDO12","33","45","A","C","E","D","B","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("489","BHSINDO12","34","40","A","B","C","D","E","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("490","BHSINDO12","35","46","E","C","D","B","A","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("491","BHSINDO12","36","41","D","C","E","B","A","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("492","BHSINDO12","37","48","E","D","C","A","B","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("493","BHSINDO12","38","56","E","A","C","B","D","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("494","BHSINDO12","39","10","E","A","D","C","B","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("495","BHSINDO12","40","50","C","E","A","D","B","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("496","BHSINDO12","41","28","E","B","A","D","C","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("497","BHSINDO12","42","20","C","E","D","A","B","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("498","BHSINDO12","43","17","D","B","C","E","A","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("499","BHSINDO12","44","35","E","D","C","B","A","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("500","BHSINDO12","45","16","A","D","B","E","C","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("501","BHSINDO12","46","21","C","D","A","E","B","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("502","BHSINDO12","47","52","C","A","D","B","E","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("503","BHSINDO12","48","57","E","C","B","D","A","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("504","BHSINDO12","49","38","A","B","C","E","D","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("505","BHSINDO12","50","60","C","D","E","A","B","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("506","BHSINDO12","51","25","B","C","E","A","D","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("507","BHSINDO12","52","19","E","B","A","C","D","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("508","BHSINDO12","53","22","C","A","D","B","E","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("509","BHSINDO12","54","33","A","C","E","D","B","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("510","BHSINDO12","55","9","E","B","A","C","D","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("511","BHSINDO12","56","43","B","C","A","D","E","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("512","BHSINDO12","57","51","E","C","D","B","A","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("513","BHSINDO12","58","39","A","B","E","D","C","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("514","BHSINDO12","59","23","A","D","B","E","C","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");
INSERT INTO jawaban VALUES("515","BHSINDO12","60","27","D","E","C","A","B","","E","","","0","105","1","27-01-2019","06:25:50","00:00:00","","7200","0");



CREATE TABLE `kop` (
  `id_kop` int(11) NOT NULL AUTO_INCREMENT,
  `pemerintah` varchar(300) NOT NULL,
  `dinas` varchar(300) NOT NULL,
  `nama_sekolah` varchar(300) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `tambahan` varchar(300) NOT NULL,
  `id` varchar(12) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kop`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO kop VALUES("1","WADAH EDUKASI","SOFTWARE DEVELOPER","DISESUAIKAN KEBUTUHAN","Alamat : BPI Blok E2 Plantaran Kaliwungu Selatan Kendal Jawa Tengah","Surat Elektronik : eko.timo.bp@gmail.com Call/SMS/WA: 08999997725","kop123","logo2.png");



CREATE TABLE `pengacak` (
  `id_pengacak` int(11) NOT NULL AUTO_INCREMENT,
  `a1` varchar(1) NOT NULL,
  `b1` varchar(1) NOT NULL,
  `c1` varchar(1) NOT NULL,
  `d1` varchar(1) NOT NULL,
  `e1` varchar(1) NOT NULL,
  PRIMARY KEY (`id_pengacak`)
) ENGINE=MyISAM AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

INSERT INTO pengacak VALUES("1","A","B","C","D","E");
INSERT INTO pengacak VALUES("2","A","B","C","E","D");
INSERT INTO pengacak VALUES("3","A","B","D","C","E");
INSERT INTO pengacak VALUES("4","A","B","D","E","C");
INSERT INTO pengacak VALUES("5","A","B","E","C","D");
INSERT INTO pengacak VALUES("6","A","B","E","D","C");
INSERT INTO pengacak VALUES("7","A","C","D","B","E");
INSERT INTO pengacak VALUES("8","A","C","D","E","B");
INSERT INTO pengacak VALUES("9","A","C","B","E","D");
INSERT INTO pengacak VALUES("10","A","C","B","D","E");
INSERT INTO pengacak VALUES("11","A","C","E","B","D");
INSERT INTO pengacak VALUES("12","A","C","E","D","B");
INSERT INTO pengacak VALUES("13","A","D","B","C","E");
INSERT INTO pengacak VALUES("14","A","D","B","E","C");
INSERT INTO pengacak VALUES("15","A","D","C","B","E");
INSERT INTO pengacak VALUES("16","A","D","C","E","B");
INSERT INTO pengacak VALUES("17","A","D","E","B","C");
INSERT INTO pengacak VALUES("18","A","D","E","C","B");
INSERT INTO pengacak VALUES("19","A","E","B","C","D");
INSERT INTO pengacak VALUES("20","A","E","B","D","C");
INSERT INTO pengacak VALUES("21","A","E","C","B","D");
INSERT INTO pengacak VALUES("22","A","E","C","D","B");
INSERT INTO pengacak VALUES("23","A","E","D","B","C");
INSERT INTO pengacak VALUES("24","A","E","D","C","B");
INSERT INTO pengacak VALUES("25","B","A","C","D","E");
INSERT INTO pengacak VALUES("26","B","A","C","E","D");
INSERT INTO pengacak VALUES("27","B","A","D","C","E");
INSERT INTO pengacak VALUES("28","B","A","D","E","C");
INSERT INTO pengacak VALUES("29","B","A","E","C","D");
INSERT INTO pengacak VALUES("30","B","A","E","D","C");
INSERT INTO pengacak VALUES("31","B","C","D","A","E");
INSERT INTO pengacak VALUES("32","B","C","D","E","A");
INSERT INTO pengacak VALUES("33","B","C","A","E","D");
INSERT INTO pengacak VALUES("34","B","C","A","D","E");
INSERT INTO pengacak VALUES("35","B","C","E","A","D");
INSERT INTO pengacak VALUES("36","B","C","E","D","A");
INSERT INTO pengacak VALUES("37","B","D","A","C","E");
INSERT INTO pengacak VALUES("38","B","D","A","E","C");
INSERT INTO pengacak VALUES("39","B","D","C","A","E");
INSERT INTO pengacak VALUES("40","B","D","C","E","A");
INSERT INTO pengacak VALUES("41","B","D","E","A","C");
INSERT INTO pengacak VALUES("42","B","D","E","C","A");
INSERT INTO pengacak VALUES("43","B","E","A","C","D");
INSERT INTO pengacak VALUES("44","B","E","A","D","C");
INSERT INTO pengacak VALUES("45","B","E","C","A","D");
INSERT INTO pengacak VALUES("46","B","E","C","D","A");
INSERT INTO pengacak VALUES("47","B","E","D","A","C");
INSERT INTO pengacak VALUES("48","B","E","D","C","A");
INSERT INTO pengacak VALUES("49","C","B","A","D","E");
INSERT INTO pengacak VALUES("50","C","B","A","E","D");
INSERT INTO pengacak VALUES("51","C","B","D","A","E");
INSERT INTO pengacak VALUES("52","C","B","D","E","A");
INSERT INTO pengacak VALUES("53","C","B","E","A","D");
INSERT INTO pengacak VALUES("54","C","B","E","D","A");
INSERT INTO pengacak VALUES("55","C","A","D","B","E");
INSERT INTO pengacak VALUES("56","C","A","D","E","B");
INSERT INTO pengacak VALUES("57","C","A","B","E","D");
INSERT INTO pengacak VALUES("58","C","A","B","D","E");
INSERT INTO pengacak VALUES("59","C","A","E","B","D");
INSERT INTO pengacak VALUES("60","C","A","E","D","B");
INSERT INTO pengacak VALUES("61","C","D","B","A","E");
INSERT INTO pengacak VALUES("62","C","D","B","E","A");
INSERT INTO pengacak VALUES("63","C","D","A","B","E");
INSERT INTO pengacak VALUES("64","C","D","A","E","B");
INSERT INTO pengacak VALUES("65","C","D","E","B","A");
INSERT INTO pengacak VALUES("66","C","D","E","A","B");
INSERT INTO pengacak VALUES("67","C","E","B","A","D");
INSERT INTO pengacak VALUES("68","C","E","B","D","A");
INSERT INTO pengacak VALUES("69","C","E","A","B","D");
INSERT INTO pengacak VALUES("70","C","E","A","D","B");
INSERT INTO pengacak VALUES("71","C","E","D","B","A");
INSERT INTO pengacak VALUES("72","C","E","D","A","B");
INSERT INTO pengacak VALUES("73","D","B","C","A","E");
INSERT INTO pengacak VALUES("74","D","B","C","E","A");
INSERT INTO pengacak VALUES("75","D","B","A","C","E");
INSERT INTO pengacak VALUES("76","D","B","A","E","C");
INSERT INTO pengacak VALUES("77","D","B","E","C","A");
INSERT INTO pengacak VALUES("78","D","B","E","A","C");
INSERT INTO pengacak VALUES("79","D","C","A","B","E");
INSERT INTO pengacak VALUES("80","D","C","A","E","B");
INSERT INTO pengacak VALUES("81","D","C","B","E","A");
INSERT INTO pengacak VALUES("82","D","C","B","A","E");
INSERT INTO pengacak VALUES("83","D","C","E","B","A");
INSERT INTO pengacak VALUES("84","D","C","E","A","B");
INSERT INTO pengacak VALUES("85","D","A","B","C","E");
INSERT INTO pengacak VALUES("86","D","A","B","E","C");
INSERT INTO pengacak VALUES("87","D","A","C","B","E");
INSERT INTO pengacak VALUES("88","D","A","C","E","B");
INSERT INTO pengacak VALUES("89","D","A","E","B","C");
INSERT INTO pengacak VALUES("90","D","A","E","C","B");
INSERT INTO pengacak VALUES("91","D","E","B","C","A");
INSERT INTO pengacak VALUES("92","D","E","B","A","C");
INSERT INTO pengacak VALUES("93","D","E","C","B","A");
INSERT INTO pengacak VALUES("94","D","E","C","A","B");
INSERT INTO pengacak VALUES("95","D","E","A","B","C");
INSERT INTO pengacak VALUES("96","D","E","A","C","B");
INSERT INTO pengacak VALUES("97","E","B","C","D","A");
INSERT INTO pengacak VALUES("98","E","B","C","A","D");
INSERT INTO pengacak VALUES("99","E","B","D","C","A");
INSERT INTO pengacak VALUES("100","E","B","D","A","C");
INSERT INTO pengacak VALUES("101","E","B","A","C","D");
INSERT INTO pengacak VALUES("102","E","B","A","D","C");
INSERT INTO pengacak VALUES("103","E","C","D","B","A");
INSERT INTO pengacak VALUES("104","E","C","D","A","B");
INSERT INTO pengacak VALUES("105","E","C","B","A","D");
INSERT INTO pengacak VALUES("106","E","C","B","D","A");
INSERT INTO pengacak VALUES("107","E","C","A","B","D");
INSERT INTO pengacak VALUES("108","E","C","A","D","B");
INSERT INTO pengacak VALUES("109","E","D","B","C","A");
INSERT INTO pengacak VALUES("110","E","D","B","A","C");
INSERT INTO pengacak VALUES("111","E","D","C","B","A");
INSERT INTO pengacak VALUES("112","E","D","C","A","B");
INSERT INTO pengacak VALUES("113","E","D","A","B","C");
INSERT INTO pengacak VALUES("114","E","D","A","C","B");
INSERT INTO pengacak VALUES("115","E","A","B","C","D");
INSERT INTO pengacak VALUES("116","E","A","B","D","C");
INSERT INTO pengacak VALUES("117","E","A","C","B","D");
INSERT INTO pengacak VALUES("118","E","A","C","D","B");
INSERT INTO pengacak VALUES("119","E","A","D","B","C");
INSERT INTO pengacak VALUES("120","E","A","D","C","B");



CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) NOT NULL,
  `no_ujian` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jurusan` varchar(22) NOT NULL,
  `mapel_pil` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL DEFAULT '',
  `foto` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_peserta`)
) ENGINE=MyISAM AUTO_INCREMENT=504 DEFAULT CHARSET=latin1;

INSERT INTO peserta VALUES("449","1123","101","ANGGORO MAULIDUN","XII","MIPA","fisika","ekotimo","101.jpg");
INSERT INTO peserta VALUES("450","1124","102","ANGGRE DIAN PRAMUDITA","XII","MIPA","biologi","ekotimo","102.jpg");
INSERT INTO peserta VALUES("451","1125","103","ANJA BINTAN MARWA","XII","MIPA","kimia","ekotimo","103.jpg");
INSERT INTO peserta VALUES("452","1127","104","AZIZ SETYAWAN","XII","MIPA","biologi","ekotimo","104.jpg");
INSERT INTO peserta VALUES("453","1128","105","FADHILA PUTRI MAHARANI","XII","MIPA","fisika","ekotimo","105.jpg");
INSERT INTO peserta VALUES("454","1129","106","FADILAH ALYA RAHMA","XII","MIPA","fisika","ekotimo","106.jpg");
INSERT INTO peserta VALUES("455","1130","107","FAHRISH ILMAN MAULANA","XII","MIPA","biologi","ekotimo","107.jpg");
INSERT INTO peserta VALUES("456","1131","108","HANI RETNO PANGESTIKA","XII","IPS","geografi","ekotimo","108.jpg");
INSERT INTO peserta VALUES("457","1132","109","MUHAMMAD RIXZUL AZIZ","XII","IPS","geografi","ekotimo","109.jpg");
INSERT INTO peserta VALUES("458","1133","110","MUTIARA SEPTINOVA","XII","IPS","ekonomi","ekotimo","110.jpg");
INSERT INTO peserta VALUES("459","1134","111","NUGROHO YOGA PANGESTU","XII","IPS","ekonomi","ekotimo","111.jpg");
INSERT INTO peserta VALUES("460","1135","112","SALMAN AL FARISI","XII","IPS","sosiologi","ekotimo","112.jpg");
INSERT INTO peserta VALUES("461","1136","113","HARISH AZKA RIZALDI","XII","IPS","sosiologi","ekotimo","113.jpg");
INSERT INTO peserta VALUES("462","1137","114","IIN NURFIKASARI","XII","IPS","geografi","ekotimo","114.jpg");
INSERT INTO peserta VALUES("463","1139","115","INDRI HASTUTI","XII","IPS","ekonomi","ekotimo","115.jpg");
INSERT INTO peserta VALUES("464","1140","116","IVAN ALANA RAKA AMANULLAH","XII","IPS","ekonomi","ekotimo","116.jpg");
INSERT INTO peserta VALUES("465","1141","117","MUHAMMAD ZHAFRAN SHODUQ","XII","IPS","ekonomi","ekotimo","117.jpg");
INSERT INTO peserta VALUES("466","1143","118","NASYWA DWI AURELIA","XII","IPS","ekonomi","ekotimo","118.jpg");
INSERT INTO peserta VALUES("467","1145","119","RAMADINA PUTRIYANI","XII","IPS","geografi","ekotimo","");
INSERT INTO peserta VALUES("468","1146","120","RIF'AH ULYA","XII","IPS","geografi","ekotimo","");
INSERT INTO peserta VALUES("469","1147","121","AFIDA DEFI MAULIDA","XII","IPS","sosiologi","ekotimo","");
INSERT INTO peserta VALUES("470","1148","122","ALFINA ROSA D","XII","IPS","sosiologi","ekotimo","");
INSERT INTO peserta VALUES("471","1149","123","ANDINA AHYA PRAMESWARI","XII","IPS","geografi","ekotimo","");
INSERT INTO peserta VALUES("472","1150","124","ARYA BAGAS SAMUDERA","XII","IPS","ekonomi","ekotimo","");
INSERT INTO peserta VALUES("473","1151","125","AULIYA RAHMA PUTRI","XII","IPS","ekonomi","ekotimo","");
INSERT INTO peserta VALUES("474","1152","126","CITRA WAHYU BANOWATI","XII","IPS","ekonomi","ekotimo","");
INSERT INTO peserta VALUES("475","1153","127","DWI CAHYANING KOLBU","XII","IPS","ekonomi","ekotimo","");
INSERT INTO peserta VALUES("476","1154","128","DWI KARTIKA","XII","IPS","geografi","ekotimo","");
INSERT INTO peserta VALUES("477","1155","129","EKSESA NETRI","XII","IPS","geografi","ekotimo","");
INSERT INTO peserta VALUES("478","1156","130","FALDHINO JOELYASYA","XII","IPS","ekonomi","ekotimo","");
INSERT INTO peserta VALUES("479","1157","131","FIIA YASINTA","XII","MIPA","fisika","ekotimo","");
INSERT INTO peserta VALUES("480","1158","132","FINA LUTFIANA MAULIDAH","XII","MIPA","biologi","ekotimo","");
INSERT INTO peserta VALUES("481","1159","133","IRA RAHMAWATI","XII","MIPA","kimia","ekotimo","");
INSERT INTO peserta VALUES("482","1160","134","IVANNA HANUM CHARISSA","XII","MIPA","biologi","ekotimo","");
INSERT INTO peserta VALUES("483","1161","135","JAYADI AKMAL SAID","XII","MIPA","fisika","ekotimo","");
INSERT INTO peserta VALUES("484","1162","136","JULIA DWI ASTUTIK","XII","MIPA","fisika","ekotimo","");
INSERT INTO peserta VALUES("485","1163","137","KHOIRIYATUN NISA","XII","MIPA","biologi","ekotimo","");
INSERT INTO peserta VALUES("486","1164","138","LAILATUL FADHILA","XII","MIPA","fisika","ekotimo","");
INSERT INTO peserta VALUES("487","1165","139","M. ISNA AL FACHREZZY","XII","MIPA","biologi","ekotimo","");
INSERT INTO peserta VALUES("488","1166","140","MUHAMMAD MUZAYYIN MAHBUB","XII","MIPA","kimia","ekotimo","");
INSERT INTO peserta VALUES("489","1167","141","MUHAMMAD SYAMSUL HUDA","XII","MIPA","biologi","ekotimo","");
INSERT INTO peserta VALUES("490","1168","142","NIZAR IZZUDIN YATIM FADLAN","XII","MIPA","fisika","ekotimo","");
INSERT INTO peserta VALUES("491","1169","143","NURIL ACHMADI RIZQI CHAQIKI","XII","MIPA","fisika","ekotimo","");
INSERT INTO peserta VALUES("492","1170","144","OVELLA AYU MIRANDATI","XII","MIPA","biologi","ekotimo","");
INSERT INTO peserta VALUES("493","1171","145","PUTRI ANANDA FATIMAH","XII","MIPA","fisika","ekotimo","");
INSERT INTO peserta VALUES("494","1172","146","PUTRI DESVIA MAHARANI","XII","MIPA","biologi","ekotimo","");
INSERT INTO peserta VALUES("495","1173","147","REGIA NAOMI","XII","MIPA","kimia","ekotimo","");
INSERT INTO peserta VALUES("496","1174","148","ROSSA YULIA PUTRI","XII","MIPA","biologi","ekotimo","");
INSERT INTO peserta VALUES("497","1175","149","SHABRINA KHAIRU ZAIDA","XII","IPS","geografi","ekotimo","");
INSERT INTO peserta VALUES("498","1176","150","TIARA AYU MAULINA YA`IF","XII","IPS","geografi","ekotimo","");
INSERT INTO peserta VALUES("499","1177","151","TUTUT VIONAKHAN","XII","IPS","ekonomi","ekotimo","");
INSERT INTO peserta VALUES("500","1178","152","VIA AMALIA SARI","XII","IPS","ekonomi","ekotimo","");
INSERT INTO peserta VALUES("501","1179","153","VICKY ANANDA AGUS SAPUTRO","XII","IPS","sosiologi","ekotimo","");
INSERT INTO peserta VALUES("502","1180","154","VIKA NAFIA ZAKIANA","XII","IPS","sosiologi","ekotimo","");
INSERT INTO peserta VALUES("503","1181","155","WAHYUNI","XII","IPS","geografi","ekotimo","");



CREATE TABLE `ragu` (
  `status` int(1) NOT NULL,
  PRIMARY KEY (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO ragu VALUES("1");



CREATE TABLE `selesai` (
  `id_selesai` int(11) NOT NULL AUTO_INCREMENT,
  `no_ujian` varchar(25) NOT NULL,
  `id_mapel` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_selesai`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO selesai VALUES("13","105","BHSINDO12","1");



CREATE TABLE `soal` (
  `id_soal` int(5) NOT NULL AUTO_INCREMENT,
  `no_soal` int(5) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `id_mapel` varchar(25) NOT NULL,
  `pertanyaan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `A` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `B` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `C` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `D` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `E` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kunci` varchar(1) NOT NULL,
  `waktu` int(5) NOT NULL,
  `jumlah_soal` int(5) NOT NULL,
  PRIMARY KEY (`id_soal`)
) ENGINE=MyISAM AUTO_INCREMENT=12340 DEFAULT CHARSET=latin1;

INSERT INTO soal VALUES("12100","1","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 1","jawaban A Bindo nomer 1","jawaban Bindo B nomer 1","jawaban Bindo C nomer 1","jawaban Bindo D nomer 1","jawaban Bindo E nomer 1","E","120","60");
INSERT INTO soal VALUES("12101","2","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 2","jawaban A Bindo nomer 2","jawaban Bindo B nomer 2","jawaban Bindo C nomer 2","jawaban Bindo D nomer 2","jawaban Bindo E nomer 2","E","120","60");
INSERT INTO soal VALUES("12102","3","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 3","jawaban A Bindo nomer 3","jawaban Bindo B nomer 3","jawaban Bindo C nomer 3","jawaban Bindo D nomer 3","jawaban Bindo E nomer 3","E","120","60");
INSERT INTO soal VALUES("12103","4","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 4","jawaban A Bindo nomer 4","jawaban Bindo B nomer 4","jawaban Bindo C nomer 4","jawaban Bindo D nomer 4","jawaban Bindo E nomer 4","E","120","60");
INSERT INTO soal VALUES("12104","5","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak <b>bahasa Indonesia</b> nomer 5","jawaban A Bindo nomer 5","jawaban Bindo B nomer 5","jawaban Bindo C nomer 5","jawaban Bindo D nomer 5","jawaban Bindo E nomer 5","E","120","60");
INSERT INTO soal VALUES("12105","6","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak<i> bahasa Indonesia nomer 6</i>","jawaban A Bindo nomer 6","jawaban Bindo B nomer 6","jawaban Bindo C nomer 6","jawaban Bindo D nomer 6","jawaban Bindo E nomer 6","E","120","60");
INSERT INTO soal VALUES("12106","7","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 7","jawaban A Bindo nomer 7","jawaban Bindo B nomer 7","jawaban Bindo C nomer 7","jawaban Bindo D nomer 7","jawaban Bindo E nomer 7","E","120","60");
INSERT INTO soal VALUES("12107","8","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 8","jawaban A Bindo nomer 8","jawaban Bindo B nomer 8","jawaban Bindo C nomer 8","jawaban Bindo D nomer 8","jawaban Bindo E nomer 8","E","120","60");
INSERT INTO soal VALUES("12108","9","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal<u> Acak bahasa Indonesia</u> nomer 9","jawaban A Bindo nomer 9","jawaban Bindo B nomer 9","jawaban Bindo C nomer 9","jawaban Bindo D nomer 9","jawaban Bindo E nomer 9","E","120","60");
INSERT INTO soal VALUES("12109","10","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 10","jawaban A Bindo nomer 10","jawaban Bindo B nomer 10","jawaban Bindo C nomer 10","jawaban Bindo D nomer 10","jawaban Bindo E nomer 10","E","120","60");
INSERT INTO soal VALUES("12110","11","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 11","jawaban A Bindo nomer 11","jawaban Bindo B nomer 11","jawaban Bindo C nomer 11","jawaban Bindo D nomer 11","jawaban Bindo E nomer 11","E","120","60");
INSERT INTO soal VALUES("12111","12","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 12","jawaban A Bindo nomer 12","jawaban Bindo B nomer 12","jawaban Bindo C nomer 12","jawaban Bindo D nomer 12","jawaban Bindo E nomer 12","E","120","60");
INSERT INTO soal VALUES("12112","13","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 13","jawaban A Bindo nomer 13","jawaban Bindo B nomer 13","jawaban Bindo C nomer 13","jawaban Bindo D nomer 13","jawaban Bindo E nomer 13","E","120","60");
INSERT INTO soal VALUES("12113","14","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 14","jawaban A Bindo nomer 14","jawaban Bindo B nomer 14","jawaban Bindo C nomer 14","jawaban Bindo D nomer 14","jawaban Bindo E nomer 14","E","120","60");
INSERT INTO soal VALUES("12114","15","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 15","jawaban A Bindo nomer 15","jawaban Bindo B nomer 15","jawaban Bindo C nomer 15","jawaban Bindo D nomer 15","jawaban Bindo E nomer 15","E","120","60");
INSERT INTO soal VALUES("12115","16","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 16","jawaban A Bindo nomer 16","jawaban Bindo B nomer 16","jawaban Bindo C nomer 16","jawaban Bindo D nomer 16","jawaban Bindo E nomer 16","E","120","60");
INSERT INTO soal VALUES("12116","17","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 17","jawaban A Bindo nomer 17","jawaban Bindo B nomer 17","jawaban Bindo C nomer 17","jawaban Bindo D nomer 17","jawaban Bindo E nomer 17","E","120","60");
INSERT INTO soal VALUES("12117","18","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 18","jawaban A Bindo nomer 18","jawaban Bindo B nomer 18","jawaban Bindo C nomer 18","jawaban Bindo D nomer 18","jawaban Bindo E nomer 18","E","120","60");
INSERT INTO soal VALUES("12118","19","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 19","jawaban A Bindo nomer 19","jawaban Bindo B nomer 19","jawaban Bindo C nomer 19","jawaban Bindo D nomer 19","jawaban Bindo E nomer 19","E","120","60");
INSERT INTO soal VALUES("12119","20","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 20","jawaban A Bindo nomer 20","jawaban Bindo B nomer 20","jawaban Bindo C nomer 20","jawaban Bindo D nomer 20","jawaban Bindo E nomer 20","E","120","60");
INSERT INTO soal VALUES("12120","21","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 21","jawaban A Bindo nomer 21","jawaban Bindo B nomer 21","jawaban Bindo C nomer 21","jawaban Bindo D nomer 21","jawaban Bindo E nomer 21","E","120","60");
INSERT INTO soal VALUES("12121","22","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 22","jawaban A Bindo nomer 22","jawaban Bindo B nomer 22","jawaban Bindo C nomer 22","jawaban Bindo D nomer 22","jawaban Bindo E nomer 22","E","120","60");
INSERT INTO soal VALUES("12122","23","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 23","jawaban A Bindo nomer 23","jawaban Bindo B nomer 23","jawaban Bindo C nomer 23","jawaban Bindo D nomer 23","jawaban Bindo E nomer 23","E","120","60");
INSERT INTO soal VALUES("12123","24","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 24","jawaban A Bindo nomer 24","jawaban Bindo B nomer 24","jawaban Bindo C nomer 24","jawaban Bindo D nomer 24","jawaban Bindo E nomer 24","E","120","60");
INSERT INTO soal VALUES("12124","25","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 25","jawaban A Bindo nomer 25","jawaban Bindo B nomer 25","jawaban Bindo C nomer 25","jawaban Bindo D nomer 25","jawaban Bindo E nomer 25","E","120","60");
INSERT INTO soal VALUES("12125","26","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 26","jawaban A Bindo nomer 26","jawaban Bindo B nomer 26","jawaban Bindo C nomer 26","jawaban Bindo D nomer 26","jawaban Bindo E nomer 26","E","120","60");
INSERT INTO soal VALUES("12126","27","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 27","jawaban A Bindo nomer 27","jawaban Bindo B nomer 27","jawaban Bindo C nomer 27","jawaban Bindo D nomer 27","jawaban Bindo E nomer 27","E","120","60");
INSERT INTO soal VALUES("12127","28","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 28","jawaban A Bindo nomer 28","jawaban Bindo B nomer 28","jawaban Bindo C nomer 28","jawaban Bindo D nomer 28","jawaban Bindo E nomer 28","E","120","60");
INSERT INTO soal VALUES("12128","29","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 29","jawaban A Bindo nomer 29","jawaban Bindo B nomer 29","jawaban Bindo C nomer 29","jawaban Bindo D nomer 29","jawaban Bindo E nomer 29","E","120","60");
INSERT INTO soal VALUES("12129","30","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 30","jawaban A Bindo nomer 30","jawaban Bindo B nomer 30","jawaban Bindo C nomer 30","jawaban Bindo D nomer 30","jawaban Bindo E nomer 30","E","120","60");
INSERT INTO soal VALUES("12130","31","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 31","jawaban A Bindo nomer 31","jawaban Bindo B nomer 31","jawaban Bindo C nomer 31","jawaban Bindo D nomer 31","jawaban Bindo E nomer 31","E","120","60");
INSERT INTO soal VALUES("12131","32","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 32","jawaban A Bindo nomer 32","jawaban Bindo B nomer 32","jawaban Bindo C nomer 32","jawaban Bindo D nomer 32","jawaban Bindo E nomer 32","E","120","60");
INSERT INTO soal VALUES("12132","33","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 33","jawaban A Bindo nomer 33","jawaban Bindo B nomer 33","jawaban Bindo C nomer 33","jawaban Bindo D nomer 33","jawaban Bindo E nomer 33","E","120","60");
INSERT INTO soal VALUES("12133","34","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 34","jawaban A Bindo nomer 34","jawaban Bindo B nomer 34","jawaban Bindo C nomer 34","jawaban Bindo D nomer 34","jawaban Bindo E nomer 34","E","120","60");
INSERT INTO soal VALUES("12134","35","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 35","jawaban A Bindo nomer 35","jawaban Bindo B nomer 35","jawaban Bindo C nomer 35","jawaban Bindo D nomer 35","jawaban Bindo E nomer 35","E","120","60");
INSERT INTO soal VALUES("12135","36","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 36","jawaban A Bindo nomer 36","jawaban Bindo B nomer 36","jawaban Bindo C nomer 36","jawaban Bindo D nomer 36","jawaban Bindo E nomer 36","E","120","60");
INSERT INTO soal VALUES("12136","37","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 37","jawaban A Bindo nomer 37","jawaban Bindo B nomer 37","jawaban Bindo C nomer 37","jawaban Bindo D nomer 37","jawaban Bindo E nomer 37","E","120","60");
INSERT INTO soal VALUES("12137","38","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 38","jawaban A Bindo nomer 38","jawaban Bindo B nomer 38","jawaban Bindo C nomer 38","jawaban Bindo D nomer 38","jawaban Bindo E nomer 38","E","120","60");
INSERT INTO soal VALUES("12138","39","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 39","jawaban A Bindo nomer 39","jawaban Bindo B nomer 39","jawaban Bindo C nomer 39","jawaban Bindo D nomer 39","jawaban Bindo E nomer 39","E","120","60");
INSERT INTO soal VALUES("12139","40","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 40","jawaban A Bindo nomer 40","jawaban Bindo B nomer 40","jawaban Bindo C nomer 40","jawaban Bindo D nomer 40","jawaban Bindo E nomer 40","E","120","60");
INSERT INTO soal VALUES("12140","41","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 41","jawaban A Bindo nomer 41","jawaban Bindo B nomer 41","jawaban Bindo C nomer 41","jawaban Bindo D nomer 41","jawaban Bindo E nomer 41","E","120","60");
INSERT INTO soal VALUES("12141","42","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 42","jawaban A Bindo nomer 42","jawaban Bindo B nomer 42","jawaban Bindo C nomer 42","jawaban Bindo D nomer 42","jawaban Bindo E nomer 42","E","120","60");
INSERT INTO soal VALUES("12142","43","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 43","jawaban A Bindo nomer 43","jawaban Bindo B nomer 43","jawaban Bindo C nomer 43","jawaban Bindo D nomer 43","jawaban Bindo E nomer 43","E","120","60");
INSERT INTO soal VALUES("12143","44","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 44","jawaban A Bindo nomer 44","jawaban Bindo B nomer 44","jawaban Bindo C nomer 44","jawaban Bindo D nomer 44","jawaban Bindo E nomer 44","E","120","60");
INSERT INTO soal VALUES("12144","45","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 45","jawaban A Bindo nomer 45","jawaban Bindo B nomer 45","jawaban Bindo C nomer 45","jawaban Bindo D nomer 45","jawaban Bindo E nomer 45","E","120","60");
INSERT INTO soal VALUES("12145","46","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 46","jawaban A Bindo nomer 46","jawaban Bindo B nomer 46","jawaban Bindo C nomer 46","jawaban Bindo D nomer 46","jawaban Bindo E nomer 46","E","120","60");
INSERT INTO soal VALUES("12146","47","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 47","jawaban A Bindo nomer 47","jawaban Bindo B nomer 47","jawaban Bindo C nomer 47","jawaban Bindo D nomer 47","jawaban Bindo E nomer 47","E","120","60");
INSERT INTO soal VALUES("12147","48","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 48","jawaban A Bindo nomer 48","jawaban Bindo B nomer 48","jawaban Bindo C nomer 48","jawaban Bindo D nomer 48","jawaban Bindo E nomer 48","E","120","60");
INSERT INTO soal VALUES("12148","49","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 49","jawaban A Bindo nomer 49","jawaban Bindo B nomer 49","jawaban Bindo C nomer 49","jawaban Bindo D nomer 49","jawaban Bindo E nomer 49","E","120","60");
INSERT INTO soal VALUES("12149","50","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 50","jawaban A Bindo nomer 50","jawaban Bindo B nomer 50","jawaban Bindo C nomer 50","jawaban Bindo D nomer 50","jawaban Bindo E nomer 50","E","120","60");
INSERT INTO soal VALUES("12150","51","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 51","jawaban A Bindo nomer 51","jawaban Bindo B nomer 51","jawaban Bindo C nomer 51","jawaban Bindo D nomer 51","jawaban Bindo E nomer 51","E","120","60");
INSERT INTO soal VALUES("12151","52","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 52","jawaban A Bindo nomer 52","jawaban Bindo B nomer 52","jawaban Bindo C nomer 52","jawaban Bindo D nomer 52","jawaban Bindo E nomer 52","E","120","60");
INSERT INTO soal VALUES("12152","53","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 53","jawaban A Bindo nomer 53","jawaban Bindo B nomer 53","jawaban Bindo C nomer 53","jawaban Bindo D nomer 53","jawaban Bindo E nomer 53","E","120","60");
INSERT INTO soal VALUES("12153","54","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 54","jawaban A Bindo nomer 54","jawaban Bindo B nomer 54","jawaban Bindo C nomer 54","jawaban Bindo D nomer 54","jawaban Bindo E nomer 54","E","120","60");
INSERT INTO soal VALUES("12154","55","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 55","jawaban A Bindo nomer 55","jawaban Bindo B nomer 55","jawaban Bindo C nomer 55","jawaban Bindo D nomer 55","jawaban Bindo E nomer 55","E","120","60");
INSERT INTO soal VALUES("12155","56","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 56","jawaban A Bindo nomer 56","jawaban Bindo B nomer 56","jawaban Bindo C nomer 56","jawaban Bindo D nomer 56","jawaban Bindo E nomer 56","E","120","60");
INSERT INTO soal VALUES("12156","57","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 57","jawaban A Bindo nomer 57","jawaban Bindo B nomer 57","jawaban Bindo C nomer 57","jawaban Bindo D nomer 57","jawaban Bindo E nomer 57","E","120","60");
INSERT INTO soal VALUES("12157","58","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 58","jawaban A Bindo nomer 58","jawaban Bindo B nomer 58","jawaban Bindo C nomer 58","jawaban Bindo D nomer 58","jawaban Bindo E nomer 58","E","120","60");
INSERT INTO soal VALUES("12158","59","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 59","jawaban A Bindo nomer 59","jawaban Bindo B nomer 59","jawaban Bindo C nomer 59","jawaban Bindo D nomer 59","jawaban Bindo E nomer 59","E","120","60");
INSERT INTO soal VALUES("12159","60","Bahasa Indonesia","XII","ALL","BHSINDO12","Cek soal Acak bahasa Indonesia nomer 60","jawaban A Bindo nomer 60","jawaban Bindo B nomer 60","jawaban Bindo C nomer 60","jawaban Bindo D nomer 60","jawaban Bindo E nomer 60","E","120","60");
INSERT INTO soal VALUES("12160","1","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 1","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12161","2","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 2","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12162","3","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 3","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12163","4","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 4","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12164","5","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 5","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12165","6","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 6","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12166","7","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 7","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12167","8","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 8","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12168","9","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 9","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12169","10","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 10","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12170","11","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 11","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12171","12","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 12","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12172","13","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 13","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12173","14","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 14","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12174","15","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 15","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12175","16","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 16","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12176","17","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 17","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12177","18","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 18","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12178","19","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 19","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12179","20","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 20","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12180","21","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 21","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12181","22","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 22","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12182","23","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 23","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12183","24","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 24","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12184","25","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 25","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12185","26","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 26","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12186","27","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 27","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12187","28","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 28","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12188","29","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 29","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12189","30","Sosiologi","XII","IPS","SOSIO12","ini pertanyaan SOSIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 30","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12190","1","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 1","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12191","2","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 2","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12192","3","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 3","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12193","4","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 4","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12194","5","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 5","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12195","6","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 6","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12196","7","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 7","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12197","8","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 8","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12198","9","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 9","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12199","10","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 10","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12200","11","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 11","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12201","12","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 12","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12202","13","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 13","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12203","14","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 14","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12204","15","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 15","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12205","16","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 16","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12206","17","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 17","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12207","18","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 18","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12208","19","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 19","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12209","20","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 20","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12210","21","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 21","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12211","22","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 22","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12212","23","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 23","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12213","24","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 24","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12214","25","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 25","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12215","26","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 26","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12216","27","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 27","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12217","28","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 28","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12218","29","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 29","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12219","30","Biologi","XII","MIPA","BIOL12","ini pertanyaan BIOLOGI hanya untuk mengecek acak soal ini pertanyaan nomer 30","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12220","1","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 1","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12221","2","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 2","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12222","3","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 3","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12223","4","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 4","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12224","5","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 5","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12225","6","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 6","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12226","7","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 7","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12227","8","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 8","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12228","9","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 9","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12229","10","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 10","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12230","11","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 11","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12231","12","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 12","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12232","13","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 13","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12233","14","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 14","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12234","15","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 15","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12235","16","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 16","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12236","17","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 17","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12237","18","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 18","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12238","19","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 19","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12239","20","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 20","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12240","21","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 21","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12241","22","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 22","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12242","23","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 23","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12243","24","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 24","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12244","25","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 25","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12245","26","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 26","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12246","27","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 27","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12247","28","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 28","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12248","29","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 29","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12249","30","Fisika","XII","MIPA","FIS12","ini pertanyaan FISIKA hanya untuk mengecek acak soal ini pertanyaan nomer 30","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12250","1","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 1","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12251","2","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 2","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12252","3","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 3","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12253","4","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 4","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12254","5","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 5","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12255","6","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 6","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12256","7","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 7","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12257","8","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 8","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12258","9","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 9","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12259","10","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 10","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12260","11","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 11","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12261","12","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 12","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12262","13","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 13","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12263","14","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 14","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12264","15","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 15","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12265","16","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 16","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12266","17","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 17","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12267","18","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 18","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12268","19","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 19","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12269","20","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 20","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12270","21","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 21","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12271","22","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 22","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12272","23","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 23","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12273","24","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 24","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12274","25","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 25","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12275","26","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 26","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12276","27","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 27","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12277","28","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 28","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12278","29","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 29","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12279","30","Ekonomi","XII","IPS","EKO12","ini pertanyaan EKONOMI hanya untuk mengecek acak soal ini pertanyaan nomer 30","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12280","1","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 1","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12281","2","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 2","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12282","3","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 3","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12283","4","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 4","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12284","5","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 5","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12285","6","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 6","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12286","7","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 7","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12287","8","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 8","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12288","9","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 9","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12289","10","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 10","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12290","11","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 11","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12291","12","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 12","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12292","13","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 13","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12293","14","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 14","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12294","15","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 15","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12295","16","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 16","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12296","17","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 17","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12297","18","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 18","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12298","19","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 19","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12299","20","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 20","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12300","21","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 21","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12301","22","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 22","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12302","23","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 23","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12303","24","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 24","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12304","25","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 25","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12305","26","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 26","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12306","27","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 27","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12307","28","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 28","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12308","29","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 29","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12309","30","Geografi","XII","IPS","GEO12","ini pertanyaan GEOGRAFI hanya untuk mengecek acak soal ini pertanyaan nomer 30","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12310","1","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya untuk mengecek acak soal ini pertanyaan nomer 1 <p>Si Kancil segera meninggalkan kebun itu. Ia berjalan kearah sungai  untuk minum. Setelah berjalan sampai disungai, ia tidak mendapatkan air  sedikitpun. Air sungai kering sehingga tidak ada air yang dapat ia minum  untuk membasahi tenggorokannya yang mulai kering.</p> <p>Kancil  berkeliling hutan untuk mencari air minum. Kancil merasa kecewa karena  pada saat tiba di pinggir rawa dan tepi danau tidak mendapatkan air  sedikitpun. Satu-satunya yang belum ia kunjungi adalah sebuah kolam  besar yang berada di tengah hutan.&rsquo;&rsquo;Sekarang aku harus segera pergi ke  kolam yang besar itu. Mungkin saja disana masih banyak air yang bisa ku  minum. Mungkin disana aku mendapatkan air minum yang segar!&rsquo;&rsquo;katanya  dalam hati.</p>
<p>Setelah beberapa saat si Kancil berjalan melewati  pohon-pohon jati. Sampailah di kolam itu. &lsquo;&rsquo;Ternyata benar dugaanku.  Masih ada air di kolam ini&rsquo;&rsquo; gumam si Kancil.</p>
<p>Sebenarnya kolam itu  sangat kecil dan cukup dalam ketika musim hujan. Tetapi karena musim  kemarau air kolam tersebut tinggal separo sehingga te rlihat seperti  kolam yang besar. Tanpa berpikir panjang si Kancil langsung terjun  kedalam kolam. Ia merasa sangat gembira karena mendapatkan air minum. Ia  minum dengan sepuas-puasnya. Tenggorokkanya sudah basah dan tenaganya  sudah pulih kembali. Badanya kini menjadi segar.</p>","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12311","2","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya untuk mengecek acak soal ini pertanyaan nomer 2<p>Si Kancil segera meninggalkan kebun itu. Ia berjalan kearah sungai  untuk minum. Setelah berjalan sampai disungai, ia tidak mendapatkan air  sedikitpun. Air sungai kering sehingga tidak ada air yang dapat ia minum  untuk membasahi tenggorokannya yang mulai kering.</p> <p>Kancil  berkeliling hutan untuk mencari air minum. Kancil merasa kecewa karena  pada saat tiba di pinggir rawa dan tepi danau tidak mendapatkan air  sedikitpun. Satu-satunya yang belum ia kunjungi adalah sebuah kolam  besar yang berada di tengah hutan.&rsquo;&rsquo;Sekarang aku harus segera pergi ke  kolam yang besar itu. Mungkin saja disana masih banyak air yang bisa ku  minum. Mungkin disana aku mendapatkan air minum yang segar!&rsquo;&rsquo;katanya  dalam hati.</p>
<p>Setelah beberapa saat si Kancil berjalan melewati  pohon-pohon jati. Sampailah di kolam itu. &lsquo;&rsquo;Ternyata benar dugaanku.  Masih ada air di kolam ini&rsquo;&rsquo; gumam si Kancil.</p>
<p>Sebenarnya kolam itu  sangat kecil dan cukup dalam ketika musim hujan. Tetapi karena musim  kemarau air kolam tersebut tinggal separo sehingga te rlihat seperti  kolam yang besar. Tanpa berpikir panjang si Kancil langsung terjun  kedalam kolam. Ia merasa sangat gembira karena mendapatkan air minum. Ia  minum dengan sepuas-puasnya. Tenggorokkanya sudah basah dan tenaganya  sudah pulih kembali. Badanya kini menjadi segar.</p>","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12312","3","Kimia","XII","MIPA","KIM12","あく千田kタフバカつぃさん意にはにゃメンコ場亜pぃ菓子場はさじぇぱんｇ","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12313","4","Kimia","XII","MIPA","KIM12","الٓمٓ ١ ذَٰلِكَ ٱلۡكِتَٰبُ لَا رَيۡبَۛ فِيهِۛ هُدٗى لِّلۡمُتَّقِينَ ٢ ٱلَّذِينَ يُؤۡمِنُونَ بِٱلۡغَيۡبِ وَيُقِيمُونَ ٱلصَّلَوٰةَ وَمِمَّا رَزَقۡنَٰهُمۡ يُنفِقُونَ ٣","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12314","5","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya dengan tanda petik ' dan tanda petik 2 " untuk mengecek acak soal ini pertanyaan nomer 5","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12315","6","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya untuk mengecek acak soal ini pertanyaan nomer 2 <p>Si Kancil segera meninggalkan kebun itu. Ia berjalan kearah sungai  untuk minum. Setelah berjalan sampai disungai, ia tidak mendapatkan air  sedikitpun. Air sungai kering sehingga tidak ada air yang dapat ia minum  untuk membasahi tenggorokannya yang mulai kering.</p> <p>Kancil  berkeliling hutan untuk mencari air minum. Kancil merasa kecewa karena  pada saat tiba di pinggir rawa dan tepi danau tidak mendapatkan air  sedikitpun. Satu-satunya yang belum ia kunjungi adalah sebuah kolam  besar yang berada di tengah hutan.&rsquo;&rsquo;Sekarang aku harus segera pergi ke  kolam yang besar itu. Mungkin saja disana masih banyak air yang bisa ku  minum. Mungkin disana aku mendapatkan air minum yang segar!&rsquo;&rsquo;katanya  dalam hati.</p>
<p>Setelah beberapa saat si Kancil berjalan melewati  pohon-pohon jati. Sampailah di kolam itu. &lsquo;&rsquo;Ternyata benar dugaanku.  Masih ada air di kolam ini&rsquo;&rsquo; gumam si Kancil.</p>
<p>Sebenarnya kolam itu  sangat kecil dan cukup dalam ketika musim hujan. Tetapi karena musim  kemarau air kolam tersebut tinggal separo sehingga te rlihat seperti  kolam yang besar. Tanpa berpikir panjang si Kancil langsung terjun  kedalam kolam. Ia merasa sangat gembira karena mendapatkan air minum. Ia  minum dengan sepuas-puasnya. Tenggorokkanya sudah basah dan tenaganya  sudah pulih kembali. Badanya kini menjadi segar.</p>","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12316","7","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya dengan tanda petik ' dan tanda petik 2 " untuk mengecek acak soal ini pertanyaan nomer 7","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12317","8","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya dengan tanda petik ' dan tanda petik 2 " untuk mengecek acak soal ini pertanyaan nomer 8","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12318","9","Kimia","XII","MIPA","KIM12","アパかh位に亜rちにゃあく麺身体かむ","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12319","10","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya dengan tanda petik ' dan tanda petik 2 " untuk mengecek acak soal ini pertanyaan nomer 10","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12320","11","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya dengan tanda petik ' dan tanda petik 2 " untuk mengecek acak soal ini pertanyaan nomer 11","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12321","12","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya dengan tanda petik ' dan tanda petik 2 " untuk mengecek acak soal ini pertanyaan nomer 12","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12322","13","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya dengan tanda petik ' dan tanda petik 2 " untuk mengecek acak soal ini pertanyaan nomer 13","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12323","14","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya dengan tanda petik ' dan tanda petik 2 " untuk mengecek acak soal ini pertanyaan nomer 14","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12324","15","Kimia","XII","MIPA","KIM12","アパかh位に亜rちにゃあく麺身体かむ","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12325","16","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya dengan tanda petik ' dan tanda petik 2 " untuk mengecek acak soal ini pertanyaan nomer 16","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12326","17","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya dengan tanda petik ' dan tanda petik 2 " untuk mengecek acak soal ini pertanyaan nomer 17","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12327","18","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya dengan tanda petik ' dan tanda petik 2 " untuk mengecek acak soal ini pertanyaan nomer 18","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12328","19","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya dengan tanda petik ' dan tanda petik 2 " untuk mengecek acak soal ini pertanyaan nomer 19","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12329","20","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya dengan tanda petik ' dan tanda petik 2 " untuk mengecek acak soal ini pertanyaan nomer 20","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12330","21","Kimia","XII","MIPA","KIM12","アパかh位に亜rちにゃあく麺身体かむ","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12331","22","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya dengan tanda petik ' dan tanda petik 2 " untuk mengecek acak soal ini pertanyaan nomer 22","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12332","23","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya dengan tanda petik ' dan tanda petik 2 " untuk mengecek acak soal ini pertanyaan nomer 23","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12333","24","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya dengan tanda petik ' dan tanda petik 2 " untuk mengecek acak soal ini pertanyaan nomer 24","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12334","25","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya dengan tanda petik ' dan tanda petik 2 " untuk mengecek acak soal ini pertanyaan nomer 25","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12335","26","Kimia","XII","MIPA","KIM12","الٓمٓ ١ ذَٰلِكَ ٱلۡكِتَٰبُ لَا رَيۡبَۛ فِيهِۛ هُدٗى لِّلۡمُتَّقِينَ ٢ ٱلَّذِينَ يُؤۡمِنُونَ بِٱلۡغَيۡبِ وَيُقِيمُونَ ٱلصَّلَوٰةَ وَمِمَّا رَزَقۡنَٰهُمۡ يُنفِقُونَ ٣","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12336","27","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya dengan tanda petik ' dan tanda petik 2 " untuk mengecek acak soal ini pertanyaan nomer 27","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12337","28","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya untuk mengecek acak soal ini pertanyaan nomer 28 <p>Si Kancil segera meninggalkan kebun itu. Ia berjalan kearah sungai  untuk minum. Setelah berjalan sampai disungai, ia tidak mendapatkan air  sedikitpun. Air sungai kering sehingga tidak ada air yang dapat ia minum  untuk membasahi tenggorokannya yang mulai kering.</p> <p>Kancil  berkeliling hutan untuk mencari air minum. Kancil merasa kecewa karena  pada saat tiba di pinggir rawa dan tepi danau tidak mendapatkan air  sedikitpun. Satu-satunya yang belum ia kunjungi adalah sebuah kolam  besar yang berada di tengah hutan.&rsquo;&rsquo;Sekarang aku harus segera pergi ke  kolam yang besar itu. Mungkin saja disana masih banyak air yang bisa ku  minum. Mungkin disana aku mendapatkan air minum yang segar!&rsquo;&rsquo;katanya  dalam hati.</p>
<p>Setelah beberapa saat si Kancil berjalan melewati  pohon-pohon jati. Sampailah di kolam itu. &lsquo;&rsquo;Ternyata benar dugaanku.  Masih ada air di kolam ini&rsquo;&rsquo; gumam si Kancil.</p>
<p>Sebenarnya kolam itu  sangat kecil dan cukup dalam ketika musim hujan. Tetapi karena musim  kemarau air kolam tersebut tinggal separo sehingga te rlihat seperti  kolam yang besar. Tanpa berpikir panjang si Kancil langsung terjun  kedalam kolam. Ia merasa sangat gembira karena mendapatkan air minum. Ia  minum dengan sepuas-puasnya. Tenggorokkanya sudah basah dan tenaganya  sudah pulih kembali. Badanya kini menjadi segar.</p>","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12338","29","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya dengan tanda petik ' dan tanda petik 2 " untuk mengecek acak soal ini pertanyaan nomer 29","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");
INSERT INTO soal VALUES("12339","30","Kimia","XII","MIPA","KIM12","ini pertanyaan kimia hanya untuk mengecek acak soal ini pertanyaan nomer 30<p>Si Kancil segera meninggalkan kebun itu. Ia berjalan kearah sungai  untuk minum. Setelah berjalan sampai disungai, ia tidak mendapatkan air  sedikitpun. Air sungai kering sehingga tidak ada air yang dapat ia minum  untuk membasahi tenggorokannya yang mulai kering.</p> <p>Kancil  berkeliling hutan untuk mencari air minum. Kancil merasa kecewa karena  pada saat tiba di pinggir rawa dan tepi danau tidak mendapatkan air  sedikitpun. Satu-satunya yang belum ia kunjungi adalah sebuah kolam  besar yang berada di tengah hutan.&rsquo;&rsquo;Sekarang aku harus segera pergi ke  kolam yang besar itu. Mungkin saja disana masih banyak air yang bisa ku  minum. Mungkin disana aku mendapatkan air minum yang segar!&rsquo;&rsquo;katanya  dalam hati.</p>
<p>Setelah beberapa saat si Kancil berjalan melewati  pohon-pohon jati. Sampailah di kolam itu. &lsquo;&rsquo;Ternyata benar dugaanku.  Masih ada air di kolam ini&rsquo;&rsquo; gumam si Kancil.</p>
<p>Sebenarnya kolam itu  sangat kecil dan cukup dalam ketika musim hujan. Tetapi karena musim  kemarau air kolam tersebut tinggal separo sehingga te rlihat seperti  kolam yang besar. Tanpa berpikir panjang si Kancil langsung terjun  kedalam kolam. Ia merasa sangat gembira karena mendapatkan air minum. Ia  minum dengan sepuas-puasnya. Tenggorokkanya sudah basah dan tenaganya  sudah pulih kembali. Badanya kini menjadi segar.</p>","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","A","5","20");



CREATE TABLE `soalinggris` (
  `id_soal` int(11) NOT NULL AUTO_INCREMENT,
  `no_soal` int(5) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(22) NOT NULL,
  `id_mapel` varchar(25) NOT NULL,
  `pertanyaan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `A` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `B` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `C` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `D` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `E` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kunci` varchar(1) NOT NULL,
  `waktu` int(5) NOT NULL,
  `jumlah_soal` int(5) NOT NULL,
  PRIMARY KEY (`id_soal`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

INSERT INTO soalinggris VALUES("36","16","Bahasa Inggris","XII","ALL","BING12","<center>Announcement</center><br>Attention all the book fair visitors,<br><p>There will be some events held in the book fair today. At two o’clock, there will be a drawing competition for children. At the same time, there will be a speed reading competition for adult. Then, at five o’clock, there will be a reading session of a book entitled “ Funny things in the world” with the author Maya Shah. This session is suitable for parents and their kids.</p><p>All the events will be held in the main hall, and they are free of charge! For further information, please contact the information officers near the entrance door.</p><br>Thank you<br><br> How many events will be held?","One","Two","Three","Four","Five","C","120","35");
INSERT INTO soalinggris VALUES("37","17","Bahasa Inggris","XII","ALL","BING12","<center>Announcement</center><br>Attention all the book fair visitors,<br><p>There will be some events held in the book fair today. At two o’clock, there will be a drawing competition for children. At the same time, there will be a speed reading competition for adult. Then, at five o’clock, there will be a reading session of a book entitled “ Funny things in the world” with the author Maya Shah. This session is suitable for parents and their kids.</p><p>All the events will be held in the main hall, and they are free of charge! For further information, please contact the information officers near the entrance door.</p><br>Thank you<br><br> Which of the following is NOT TRUE based on the text?","The visitors do not need to pay.","The events will be held in the main hall","The announcement is for all visitors of the book","The only event for children is drawing competition","A reading competition and speed reading held at the same time","D","120","35");
INSERT INTO soalinggris VALUES("38","18","Bahasa Inggris","XII","ALL","BING12","<center>Announcement</center><br>Attention all the book fair visitors,<br><p>There will be some events held in the book fair today. At two o’clock, there will be a drawing competition for children. At the same time, there will be a speed reading competition for adult. Then, at five o’clock, there will be a reading session of a book entitled “ Funny things in the world” with the author Maya Shah. This session is suitable for parents and their kids.</p><p>All the events will be held in the main hall, and they are free of charge! For further information, please contact the information officers near the entrance door.</p><br>Thank you<br><br> <i>“...some events held in the book fair today...”</i><br>The underlined word is the most closely associated to....","sale","selling","bazaar","auction","production","C","120","35");
INSERT INTO soalinggris VALUES("39","19","Bahasa Inggris","XII","ALL","BING12","<table width="640" border="1" cellspacing="0" cellpadding="0"><tbody><tr><td width="513"><p>8 January 2017<br>ONE SHELL COMPANY Inc.<br> 13 Raden street, North Sulawesi</p><p>Dear Patricia,<br>Your enthusiasm and your ability to motivate your employees have resulted in a significant increase in productivity.<br>If we had an award to give, you would be the prime candidate.<br>Please accept my sincerest appreciation for the fine job you are doing in our sales department.</p><p>Very truly yours,</p><p>Rahmat Hidayat </p></td></tr></tbody></table><br><br> Why does Rahmat Hidayat send the letter?","To thank Patricia about her achievement","To announce about award for Patricia","To give a new responsibility for Patricia","To show regret for not giving an award","To give Patricia a next award","A","120","35");
INSERT INTO soalinggris VALUES("40","20","Bahasa Inggris","XII","ALL","BING12","<table width="640" border="1" cellspacing="0" cellpadding="0"><tbody><tr><td width="513"><p>8 January 2017<br>ONE SHELL COMPANY Inc.<br> 13 Raden street, North Sulawesi</p><p>Dear Patricia,<br>Your enthusiasm and your ability to motivate your employees have resulted in a significant increase in productivity.<br>If we had an award to give, you would be the prime candidate.<br>Please accept my sincerest appreciation for the fine job you are doing in our sales department.</p><p>Very truly yours,</p><p>Rahmat Hidayat </p></td></tr></tbody></table><br><br> What makes the increasing productivity and profitability of the company?","The employees ability","Patricia’s enthusiasm","Motivation on the employees","An award promised by the company","Patricia’s ability and enthusiasm","C","120","35");
INSERT INTO soalinggris VALUES("41","21","Bahasa Inggris","XII","ALL","BING12","<table width="640" border="1" cellspacing="0" cellpadding="0"><tbody><tr><td width="513"><p>8 January 2017<br>ONE SHELL COMPANY Inc.<br> 13 Raden street, North Sulawesi</p><p>Dear Patricia,<br>Your enthusiasm and your ability to motivate your employees have resulted in a significant increase in productivity.<br>If we had an award to give, you would be the prime candidate.<br>Please accept my sincerest appreciation for the fine job you are doing in our sales department.</p><p>Very truly yours,</p><p>Rahmat Hidayat </p></td></tr></tbody></table><br><br> <i>...If we had an award to give, you would be the prime candidate...</i><br>This sentence has the same meaning as...","Rahmat Hidayat doesn’t have any award to give to Patricia","Rahmat Hidayat has prepared the award for Patricia","Rahmat Hidayat has given the award to patricia","Patricia will get an award from the company soon","Patricia has given an award from the company","A","120","35");
INSERT INTO soalinggris VALUES("42","22","Bahasa Inggris","XII","ALL","BING12","<p>Last week was a hectic week. I have been touring east Java and Bali. There were so many unforgettable experiencesI found along my journey. I arrived in Yogyakarta on Sunday. I stayed in a cheap accomodation called wisma. The room was clean and I got hot water to bathe.</p>
 <p>On Monday, I went with a tour group to visit Borobudur and Hindu temple, Prambanan. Some of the temples are more than twelve hundred years old. They date well beyond the churches in my hometown in Europe. I was amazed of the enormity of the construction. I&rsquo;m sure they didn&rsquo;t have the heavy machines we have today to raise and lay those huge blocks of stones. The carvings on the walls were another feature of the construction.</p>
<p> I&rsquo;m getting used to spicy food they served here. I have eaten fresh fish, lamb and beef. I know some people don&rsquo;t eat all this but I&rsquo;ve got used to it. On Tuesday, I decided to go for a hike to Mount Merapi, but I found it was difficult to climb. So I went to the forest park in Kaliurang. That was a lovely walk that made me hot and tired. But I managed to cool off in a waterfall in the park, then walked up to hill nearby where I could see the smoky, fiery Mount Merapi.</p>
From the text we can conclude that the writer...","enjoyed the tour","liked mountain climbing","had experience in writing","was used to eating spicy food","visited Yogyakarta for a week","A","120","35");
INSERT INTO soalinggris VALUES("43","23","Bahasa Inggris","XII","ALL","BING12","<p>Last week was a hectic week. I have been touring east Java and Bali. There were so many unforgettable experiencesI found along my journey. I arrived in Yogyakarta on Sunday. I stayed in a cheap accomodation called wisma. The room was clean and I got hot water to bathe.</p>
 <p>On Monday, I went with a tour group to visit Borobudur and Hindu temple, Prambanan. Some of the temples are more than twelve hundred years old. They date well beyond the churches in my hometown in Europe. I was amazed of the enormity of the construction. I&rsquo;m sure they didn&rsquo;t have the heavy machines we have today to raise and lay those huge blocks of stones. The carvings on the walls were another feature of the construction.</p>
<p> I&rsquo;m getting used to spicy food they served here. I have eaten fresh fish, lamb and beef. I know some people don&rsquo;t eat all this but I&rsquo;ve got used to it. On Tuesday, I decided to go for a hike to Mount Merapi, but I found it was difficult to climb. So I went to the forest park in Kaliurang. That was a lovely walk that made me hot and tired. But I managed to cool off in a waterfall in the park, then walked up to hill nearby where I could see the smoky, fiery Mount Merapi.</p>
the main idea of the second paragraph is...","the writer arrived in Yogyakarta","the writer spent the night a cheap wisma","the temples are older than the churches in Europe","Borobudur, Prambanan and the carvings amazed the writer","the writer visited Borobudur and Prambanan with a tour group","E","120","35");
INSERT INTO soalinggris VALUES("44","24","Bahasa Inggris","XII","ALL","BING12","<p>Last week was a hectic week. I have been touring east Java and Bali. There were so many unforgettable experiencesI found along my journey. I arrived in Yogyakarta on Sunday. I stayed in a cheap accomodation called wisma. The room was clean and I got hot water to bathe.</p>
 <p>On Monday, I went with a tour group to visit Borobudur and Hindu temple, Prambanan. Some of the temples are more than twelve hundred years old. They date well beyond the churches in my hometown in Europe. I was amazed of the enormity of the construction. I&rsquo;m sure they didn&rsquo;t have the heavy machines we have today to raise and lay those huge blocks of stones. The carvings on the walls were another feature of the construction.</p>
<p> I&rsquo;m getting used to spicy food they served here. I have eaten fresh fish, lamb and beef. I know some people don&rsquo;t eat all this but I&rsquo;ve got used to it. On Tuesday, I decided to go for a hike to Mount Merapi, but I found it was difficult to climb. So I went to the forest park in Kaliurang. That was a lovely walk that made me hot and tired. But I managed to cool off in a waterfall in the park, then walked up to hill nearby where I could see the smoky, fiery Mount Merapi.</p>
<em>They date well beyond the churches in my hometown in Europe</em>
The word <em>they</em> refers to...","the members of the tour","the towns the writer went","all the temples in Yogyakarta","some old temples the writer visited","the food the writer usually eat","D","120","35");
INSERT INTO soalinggris VALUES("45","25","Bahasa Inggris","XII","ALL","BING12","<p style='text-indent:0.5in'>Giraffe is the highest animal in the world. Its height can reach 4.8 to 5.5 meters and its weight about 1360 pounds. Giraffe has a unique characteristic. They have a very long neck and two small horns on its head. Giraffes have big brown eyes and protected by thick and long eyebrows. Her body is covered with a unique pattern that is attached by brown spots all over their body.<br>
<p style='text-indent:0.5in'> Just like camels, giraffes can survive without drinking for long time because giraffes can rely on the water contained in leaves they eat. Giraffes are very selective in choosing food. They always eat young leaves that grow in the tree tops. Their tongue shaped like a knife help them to cut branches which are very hard.<br>
<p style='text-indent:0.5in'>Female giraffes can start pregnant at the age of five years, with a gestation period of 15 months. Commonly female giraffe bear one baby, but sometimes two babies at once. Giraffes bear its baby with a standing position. When the baby is about to be born, they just drop it to the ground from a 1.5 meter of height. Baby giraffe can stand with about 20 minutes since being born, and begin breastfeeding within an hour of birth.</p>
What can we learn from the text?","Giraffe has no eyebrows","Giraffes eat all kind of leaves","Giraffe needs alot of water to drink","Female giraffe usually carries one baby","Baby giraffe is difficult to stand after it was born","D","120","35");
INSERT INTO soalinggris VALUES("46","26","Bahasa Inggris","XII","ALL","BING12","<p style='text-indent:0.5in'>Giraffe is the highest animal in the world. Its height can reach 4.8 to 5.5 meters and its weight about 1360 pounds. Giraffe has a unique characteristic. They have a very long neck and two small horns on its head. Giraffes have big brown eyes and protected by thick and long eyebrows. Her body is covered with a unique pattern that is attached by brown spots all over their body.<br>
<p style='text-indent:0.5in'> Just like camels, giraffes can survive without drinking for long time because giraffes can rely on the water contained in leaves they eat. Giraffes are very selective in choosing food. They always eat young leaves that grow in the tree tops. Their tongue shaped like a knife help them to cut branches which are very hard.<br>
<p style='text-indent:0.5in'>Female giraffes can start pregnant at the age of five years, with a gestation period of 15 months. Commonly female giraffe bear one baby, but sometimes two babies at once. Giraffes bear its baby with a standing position. When the baby is about to be born, they just drop it to the ground from a 1.5 meter of height. Baby giraffe can stand with about 20 minutes since being born, and begin breastfeeding within an hour of birth.</p>
The second paragraph mainly discussed about?","Giraffe’s baby","Giraffe’s food","Giraffe’s life","Giraffe’s reproduction","Giraffe’s characteristic","B","120","35");
INSERT INTO soalinggris VALUES("47","27","Bahasa Inggris","XII","ALL","BING12","<p style='text-indent:0.5in'>Giraffe is the highest animal in the world. Its height can reach 4.8 to 5.5 meters and its weight about 1360 pounds. Giraffe has a unique characteristic. They have a very long neck and two small horns on its head. Giraffes have big brown eyes and protected by thick and long eyebrows. Her body is covered with a unique pattern that is attached by brown spots all over their body.<br>
<p style='text-indent:0.5in'> Just like camels, giraffes can survive without drinking for long time because giraffes can rely on the water contained in leaves they eat. Giraffes are very selective in choosing food. They always eat young leaves that grow in the tree tops. Their tongue shaped like a knife help them to cut branches which are very hard.<br>
<p style='text-indent:0.5in'>Female giraffes can start pregnant at the age of five years, with a gestation period of 15 months. Commonly female giraffe bear one baby, but sometimes two babies at once. Giraffes bear its baby with a standing position. When the baby is about to be born, they just drop it to the ground from a 1.5 meter of height. Baby giraffe can stand with about 20 minutes since being born, and begin breastfeeding within an hour of birth.</p>
...<em>with a <u>gestation</u> period of 15 months</em><em> (par 3)</em><br>
the synonim of the underlined word is...","growth","birth","production","multiple","reproduction","A","120","35");
INSERT INTO soalinggris VALUES("48","28","Bahasa Inggris","XII","ALL","BING12","<p align="center">The Rats and The Elephants</p><br>
 <p style='text-indent:0.5in'>Once upon a time their lived a group of mice under a tree in peace. However, a group of elephants crossing the jungle unknowingly destroyed the homes of all the rats. Many of them were even crushed to death.<br>
 <p style='text-indent:0.5in'>Then taking of rats decided to approach the elephant's chief and request him to guide his herd through another route. On hearing the sad story, the elephant's king apologized and agreed to take another route. And so the lives of the rats were saved.<br>
<p style='text-indent:0.5in'>One day elephant-hunters came to the jungle and trapped a group of elephants in huge nets. Then the elephant king suddenly remembered the king of the rats. He summoned on of the elephants of his herd, which had not been trapped, to go seek help from the king and told him about the trapped elephants.<br>
<p style='text-indent:0.5in'>The rat's king immediately took his entire group of rats and they cut open the nets which had trapped the elephant's herd. The elephant herd was totally set free. They danced with joy and thank the rats.</p>
What destroyed the homes of all rats?","a group of mice did","the hunter did","the elephant's herd","elephant-hunter did","a group of elephant did","C","120","35");
INSERT INTO soalinggris VALUES("49","29","Bahasa Inggris","XII","ALL","BING12","<p align="center">The Rats and The Elephants</p><br>
 <p style='text-indent:0.5in'>Once upon a time their lived a group of mice under a tree in peace. However, a group of elephants crossing the jungle unknowingly destroyed the homes of all the rats. Many of them were even crushed to death.<br>
 <p style='text-indent:0.5in'>Then taking of rats decided to approach the elephant's chief and request him to guide his herd through another route. On hearing the sad story, the elephant's king apologized and agreed to take another route. And so the lives of the rats were saved.<br>
<p style='text-indent:0.5in'>One day elephant-hunters came to the jungle and trapped a group of elephants in huge nets. Then the elephant king suddenly remembered the king of the rats. He summoned on of the elephants of his herd, which had not been trapped, to go seek help from the king and told him about the trapped elephants.<br>
<p style='text-indent:0.5in'>The rat's king immediately took his entire group of rats and they cut open the nets which had trapped the elephant's herd. The elephant herd was totally set free. They danced with joy and thank the rats.</p>
What helped the elephant's herd free?","the trapped elephants did","the elephant-hunter did","entire group of rats did","a group of king did","the hunters did","C","120","35");
INSERT INTO soalinggris VALUES("50","30","Bahasa Inggris","XII","ALL","BING12","<p align="center">The Rats and The Elephants</p><br>
 <p style='text-indent:0.5in'>Once upon a time their lived a group of mice under a tree in peace. However, a group of elephants crossing the jungle unknowingly destroyed the homes of all the rats. Many of them were even crushed to death.<br>
 <p style='text-indent:0.5in'>Then taking of rats decided to approach the elephant's chief and request him to guide his herd through another route. On hearing the sad story, the elephant's king apologized and agreed to take another route. And so the lives of the rats were saved.<br>
<p style='text-indent:0.5in'>One day elephant-hunters came to the jungle and trapped a group of elephants in huge nets. Then the elephant king suddenly remembered the king of the rats. He summoned on of the elephants of his herd, which had not been trapped, to go seek help from the king and told him about the trapped elephants.<br>
<p style='text-indent:0.5in'>The rat's king immediately took his entire group of rats and they cut open the nets which had trapped the elephant's herd. The elephant herd was totally set free. They danced with joy and thank the rats.</p>
...<em>He <u>summoned</u> on of the elephants of his herd</em>...<br>
What is the closest meaning of the word?","called","warned","asked","helped.","killed.","A","120","35");
INSERT INTO soalinggris VALUES("51","31","Bahasa Inggris","XII","ALL","BING12","<p align="center">Dust Bin</p>
 <p>To improve comfort and cleanliness at our school, a number of dust bins should be increased. When we look at classrooms, school corridors and school yard, there are paper mineral water cups, straws, and napkins here and there.</p>
<p>The condition of uncleanliness and discomfort really hinders learning and teaching environment. Litters thrown carelessly cause disease, especially empty plastic cup or glasses.They can be filled out with water coming from the rain. This can be placed for dengue mosquitoes to spread out.Besides, these rubbish can deteriorate the scene. Well painted wall and green school yard do not mean anything litters are scattered everywhere.</p>
<p>Anyway I notice that most of the students in our school have responsibilities for the school environment.They put their litters on the proper places.But some are not diligent enough to find the dust bins.The numbers of dust binds in our schools are not enough.More dust bins should be put beside each of steps, outside of the classrooms, and some more also the corridors.Probably one dust bin should be in every ten meters.So when students want to throw away their litters, they can find the dust bins easily.</p>
 <p>When school is equipped with sufficient dust bins, we do not have problems of freak and discomfort any more.Our school will be very clean and become a nice place to study.
 </p>
 </p>
 What is the writer&rsquo;s intention?","To inform about a new dust bin","To explain how to make a dust bin","To describe the dust bin at school","To explain how to throw litter properly at school","To persuade providing sufficient dust bin at school","E","120","35");
INSERT INTO soalinggris VALUES("52","32","Bahasa Inggris","XII","ALL","BING12","<p align="center">Dust Bin</p>
 <p>To improve comfort and cleanliness at our school, a number of dust bins should be increased. When we look at classrooms, school corridors and school yard, there are paper mineral water cups, straws, and napkins here and there.</p>
<p>The condition of uncleanliness and discomfort really hinders learning and teaching environment. Litters thrown carelessly cause disease, especially empty plastic cup or glasses.They can be filled out with water coming from the rain. This can be placed for dengue mosquitoes to spread out.Besides, these rubbish can deteriorate the scene. Well painted wall and green school yard do not mean anything litters are scattered everywhere.</p>
<p>Anyway I notice that most of the students in our school have responsibilities for the school environment.They put their litters on the proper places.But some are not diligent enough to find the dust bins.The numbers of dust binds in our schools are not enough.More dust bins should be put beside each of steps, outside of the classrooms, and some more also the corridors.Probably one dust bin should be in every ten meters.So when students want to throw away their litters, they can find the dust bins easily.</p>
 <p>When school is equipped with sufficient dust bins, we do not have problems of freak and discomfort any more.Our school will be very clean and become a nice place to study.
 </p>
What is the writer&rsquo;s argument on a sufficient number of dust bins?","They can prevent litters","They can save janitor’s energy","Students are asked to clean them","They make school environment neat","Students can throw garbage away easily","D","120","35");
INSERT INTO soalinggris VALUES("53","33","Bahasa Inggris","XII","ALL","BING12","<p align="center">Dust Bin</p>
 <p>To improve comfort and cleanliness at our school, a number of dust bins should be increased.When we look at classrooms, school corridors and school yard, there are paper mineral water cups, straws, and napkins here and there.</p>
<p>The condition of uncleanliness and discomfort really hinders learning and teaching environment. Litters thrown carelessly cause disease, especially empty plastic cup or glasses.They can be filled out with water coming from the rain. This can be placed for dengue mosquitoes to spread out.Besides, these rubbish can deteriorate the scene. Well painted wall and green school yard do not mean anything litters are scattered everywhere.</p>
<p>Anyway I notice that most of the students in our school have responsibilities for the school environment.They put their litters on the proper places.But some are not diligent enough to find the dust bins.The numbers of dust binds in our schools are not enough.More dust bins should be put beside each of steps, outside of the classrooms, and some more also the corridors.Probably one dust bin should be in every ten meters.So when students want to throw away their litters, they can find the dust bins easily.</p>
 <p>When school is equipped with sufficient dust bins,we do not have problems of freak and discomfort any more.Our school will be very clean and become a nice place to study.
 </p>
What is the writer&rsquo;s suggestion?","To buy more dustbins","To hire more gardeners","To use dustbins efficiently","To ask parents to give more dustbins","To ask students to clean the school yard","A","120","35");
INSERT INTO soalinggris VALUES("54","34","Bahasa Inggris","XII","ALL","BING12","<p>Reuters-Seven people were killed in a collision between a bus, a car, and a truck on jalan Sultan at 10:35 p.m. last night. The dead were all passengers of the car. The police believed the car had been trying to overtake the bus when it was struck by a truck coming from the opposite direction. The driver said he did not see the car approaching.<br>
 The police said the car should not have tried to pass the bus, since overtaking is not allowed on Jalan Sultan. In addition, the police reported that the car, a small Japanese car, should not have been carrying more than five people. If the passengers had brought their identity cards, the police would have identified the names of the victims easily. </p>
The text mainly reports that there was/were…","a car accident","careless drivers","a small Japanese car","victims of an accident","the function of an identity card","A","120","35");
INSERT INTO soalinggris VALUES("55","35","Bahasa Inggris","XII","ALL","BING12","<p>Reuters-Seven people were killed in a collision between a bus, a car, and a truck on jalan Sultan at 10:35 p.m. last night. The dead were all passengers of the car. The police believed the car had been trying to overtake the bus when it was struck by a truck coming from the opposite direction. The driver said he did not see the car approaching.<br>
 The police said the car should not have tried to pass the bus, since overtaking is not allowed on Jalan Sultan. In addition, the police reported that the car, a small Japanese car, should not have been carrying more than five people. If the passengers had brought their identity cards, the police would have identified the names of the victims easily. </p>
What was the cause of the collision?","The truck came from the opposite direction","The car carried more than five people.","The truck driver didn’t use his light","The truck driver didn’t see the car","The car tried to overtake the bus","E","120","35");
INSERT INTO soalinggris VALUES("56","36","Bahasa Inggris","XII","ALL","BING12","<p>Reuters-Seven people were killed in a collision between a bus, a car, and a truck on jalan Sultan at 10:35 p.m. last night. The dead were all passengers of the car. The police believed the car had been trying to overtake the bus when it was struck by a truck coming from the opposite direction. The driver said he did not see the car approaching.<br>
 The police said the car should not have tried to pass the bus, since overtaking is not allowed on Jalan Sultan. In addition, the police reported that the car, a small Japanese car, should not have been carrying more than five people. If the passengers had brought their identity cards, the police would have identified the names of the victims easily. </p>
&ldquo;If the passengers had brought their identity cards, the police would have been easy to identify the names of the victims&rdquo;. <strong><em>(last sentence)</em></strong>
<p>The sentence above means …</p>","the victims’ names were not known","the victims were easy to be identified","the passengers brought their identity cards","the police had no difficulty in identifying the victims","it was easy for the police to identify the victims of the accident","A","120","35");
INSERT INTO soalinggris VALUES("57","37","Bahasa Inggris","XII","ALL","BING12","Every year has its great men and women who are remembered for what they have done for their country. One of Indonesia&rsquo;s great men is Dr. Mohammad Hatta. He was a man with a deep love for his country and people.<br>
 Dr. Mohammad Hatta was born in Bukittinggi on August 12th, 1902. While still in junior high school in Bukittinggi, he became interested in politics and joined the League of Young Sumatrans.<br>
 He left Bukittinggi to study in Batavia. Then he went to the Netherlands. He studied economics and gained a doctorate degree there. During his stay there he was active in the national Movement. Because of his activities, he was arrested.<br>
 In 1923 Hatta returned to Indonesia. He joined a political organization called &ldquo;Pendidikan Nasional Indonesia&rdquo;. One of its goals was to develop political awareness among the Indonesian people. His activities again led to his arrest. The colonial government exiled him to Boven Digul, and later to Banda Naira. Shortly before the Japanese invasion. He was brought back to Java.<br>
 When the Japanese surrendered in August 1945, Soekarno and hatta proclaimed Indonesia&rsquo;s Independence. Hatta became the first vice-president of the Republic of Indonesia.<br>
 In 1956 Hatta resigned as vice-president and devoted himself to writing. On march 14, 1981, dr. mohammad Hatta passed away in Jakarta.<br>
 Nowadays, he is no longer living among us. However, his spirit of loving the country and nation is one of the reason why he is well remembered.</p>
</p>
What made Moh. Hatta arrested?","Because he was exiled to Boven Digul","Because he studied in Netherlands","Because he was vice-president","Because he was born in Bukittinggi","Because he was active in the national movement","E","120","35");
INSERT INTO soalinggris VALUES("58","38","Bahasa Inggris","XII","ALL","BING12","<p align="center">Mohammad Hatta</p>
<p><br>
 Every year has its great men and women who are remembered for what they have done for their country. One of Indonesia&rsquo;s great men is Dr. Mohammad Hatta. He was a man with a deep love for his country and people.<br>
 Dr. Mohammad Hatta was born in Bukittinggi on August 12th, 1902. While still in junior high school in Bukittinggi, he became interested in politics and joined the League of Young Sumatrans.<br>
 He left Bukittinggi to study in Batavia. Then he went to the Netherlands. He studied economics and gained a doctorate degree there. During his stay there he was active in the national Movement. Because of his activities, he was arrested.<br>
 In 1923 Hatta returned to Indonesia. He joined a political organization called &ldquo;Pendidikan Nasional Indonesia&rdquo;. One of its goals was to develop political awareness among the Indonesian people. His activities again led to his arrest. The colonial government exiled him to Boven Digul, and later to Banda Naira. Shortly before the Japanese invasion. He was brought back to Java.<br>
 When the Japanese surrendered in August 1945, Soekarno and hatta proclaimed Indonesia&rsquo;s Independence. Hatta became the first vice-president of the Republic of Indonesia.<br>
 In 1956 Hatta resigned as vice-president and devoted himself to writing. On march 14, 1981, dr. mohammad Hatta passed away in Jakarta.<br>
 Nowadays, he is no longer living among us. However, his spirit of loving the country and nation is one of the reason why he is well remembered.</p>
What is the main idea of paragraph four?","The Japanese invasion","The nationalist movement","The study in Netherlands","Moh Hatta was exiled to Boven Digul","Moh. Hatta activities in political organization","E","120","35");
INSERT INTO soalinggris VALUES("59","39","Bahasa Inggris","XII","ALL","BING12","<p align="center">Mohammad Hatta</p>
<p><br>
 Every year has its great men and women who are remembered for what they have done for their country. One of Indonesia&rsquo;s great men is Dr. Mohammad Hatta. He was a man with a deep love for his country and people.<br>
 Dr. Mohammad Hatta was born in Bukittinggi on August 12th, 1902. While still in junior high school in Bukittinggi, he became interested in politics and joined the League of Young Sumatrans.<br>
 He left Bukittinggi to study in Batavia. Then he went to the Netherlands. He studied economics and gained a doctorate degree there. During his stay there he was active in the national Movement. Because of his activities, he was arrested.<br>
 In 1923 Hatta returned to Indonesia. He joined a political organization called &ldquo;Pendidikan Nasional Indonesia&rdquo;. One of its goals was to develop political awareness among the Indonesian people. His activities again led to his arrest. The colonial government exiled him to Boven Digul, and later to Banda Naira. Shortly before the Japanese invasion. He was brought back to Java.<br>
 When the Japanese surrendered in August 1945, Soekarno and hatta proclaimed Indonesia&rsquo;s Independence. Hatta became the first vice-president of the Republic of Indonesia.<br>
 In 1956 Hatta resigned as vice-president and devoted himself to writing. On march 14, 1981, dr. mohammad Hatta passed away in Jakarta.<br>
 Nowadays, he is no longer living among us. However, his spirit of loving the country and nation is one of the reason why he is well remembered.</p>
<em>&lsquo;He is no longer living among us&rsquo;</em><p>What does "us" refer to?</p>","Sumatra people","Indonesia people","Digul people","Netherlands people","Batavia people","B","120","35");
INSERT INTO soalinggris VALUES("60","40","Bahasa Inggris","XII","ALL","BING12","<p align="center">Mohammad Hatta</p>
<p><br>
 Every year has its great men and women who are remembered for what they have done for their country. One of Indonesia&rsquo;s great men is Dr. Mohammad Hatta. He was a man with a deep love for his country and people.<br>
 Dr. Mohammad Hatta was born in Bukittinggi on August 12th, 1902. While still in junior high school in Bukittinggi, he became interested in politics and joined the League of Young Sumatrans.<br>
 He left Bukittinggi to study in Batavia. Then he went to the Netherlands. He studied economics and gained a doctorate degree there. During his stay there he was active in the national Movement. Because of his activities, he was arrested.<br>
 In 1923 Hatta returned to Indonesia. He joined a political organization called &ldquo;Pendidikan Nasional Indonesia&rdquo;. One of its goals was to develop political awareness among the Indonesian people. His activities again led to his arrest. The colonial government exiled him to Boven Digul, and later to Banda Naira. Shortly before the Japanese invasion. He was brought back to Java.<br>
 When the Japanese surrendered in August 1945, Soekarno and hatta proclaimed Indonesia&rsquo;s Independence. Hatta became the first vice-president of the Republic of Indonesia.<br>
 In 1956 Hatta resigned as vice-president and devoted himself to writing. On march 14, 1981, dr. mohammad Hatta passed away in Jakarta.<br>
 Nowadays, he is no longer living among us. However, his spirit of loving the country and nation is one of the reason why he is well remembered.</p>
…<em>In 1956 Hatta <u>resigned</u> as vice-president</em>….
<p>The synonym of the underlined is …</p>","left your job","found a new job","changed your job","got a promotion","had a new position","A","120","35");
INSERT INTO soalinggris VALUES("61","41","Bahasa Inggris","XII","ALL","BING12","<p align='center'>The Heroes Monument of Surabaya is one of the historical sites in Indonesia.</p>
 <p> The monument was built for giving high respect to all patriostists who were killed during a war against the Dutch colonial on 10th November 1945. It reflects the fighting spirit of &lsquo;arek aerk Suroboyo&rsquo; (Surabaya&rsquo;s people) in facing the colonialists.</p>
<p> This monument is located opposite the East Java Governor&rsquo;s office. The location is very startegic because it is located in the centre of Surabaya city, encircled by the main roads: Bubutan, Jalan Tembaan and Jalan Kebon Rojo.</p>
<p>The Heroes Monument is built in an &lsquo;overtuned nail&rsquo; form. The bottom side of the monument is decorated with a &lsquo;trisula&rsquo; engraving picture, a &lsquo;cakra&rsquo;, a &lsquo;stamba&rsquo; and a &lsquo;padma&rsquo;, as symbols of impassioned struggle.</p>
What is the main idea of paragraph 3?","The symbol of ‘Trisula’.","The form of the monument.","The location of the monument.","The significance of the monument.","The war between ‘arek arek Suroboyo’ and colonialist.","B","120","35");
INSERT INTO soalinggris VALUES("62","42","Bahasa Inggris","XII","ALL","BING12","<p align='center'>The Heroes Monument of Surabaya is one of the historical sites in Indonesia.</p>
 <p> The monument was built for giving high respect to all patriostists who were killed during a war against the Dutch colonial on 10th November 1945. It reflects the fighting spirit of &lsquo;arek aerk Suroboyo&rsquo; (Surabaya&rsquo;s people) in facing the colonialists.</p>
<p> This monument is located opposite the East Java Governor&rsquo;s office. The location is very startegic because it is located in the centre of Surabaya city, encircled by the main roads: Bubutan, Jalan Tembaan and Jalan Kebon Rojo.</p>
<p>The Heroes Monument is built in an &lsquo;overtuned nail&rsquo; form. The bottom side of the monument is decorated with a &lsquo;trisula&rsquo; engraving picture, a &lsquo;cakra&rsquo;, a &lsquo;stamba&rsquo; and a &lsquo;padma&rsquo;, as symbols of impassioned struggle.</p>
Which statement that is NOT TRUE according to the text?","ting spirit of Surabaya’s people","The monument is constructed in the form of an ‘overtuned’ nail","There is a ‘trisula’ engraving picture at the top of the monument","There was a fierce war in Surabaya on 10th November 1945","The monument is located opposite the governor’s office","C","120","35");
INSERT INTO soalinggris VALUES("63","43","Bahasa Inggris","XII","ALL","BING12","<p align='center'>The Heroes Monument of Surabaya is one of the historical sites in Indonesia.</p>
 <p> The monument was built for giving high respect to all patriostists who were killed during a war against the Dutch colonial on 10th November 1945. It reflects the fighting spirit of &lsquo;arek aerk Suroboyo&rsquo; (Surabaya&rsquo;s people) in facing the colonialists.</p>
<p> This monument is located opposite the East Java Governor&rsquo;s office. The location is very startegic because it is located in the centre of Surabaya city, encircled by the main roads: Bubutan, Jalan Tembaan and Jalan Kebon Rojo.</p>
<p>The Heroes Monument is built in an &lsquo;overtuned nail&rsquo; form. The bottom side of the monument is decorated with a &lsquo;trisula&rsquo; engraving picture, a &lsquo;cakra&rsquo;, a &lsquo;stamba&rsquo; and a &lsquo;padma&rsquo;, as symbols of impassioned struggle.</p>
<em>...the monument is decorated with a &lsquo;trisula&rsquo; <u>engraving</u> picture...</em
<p>The underlined word has similar meaning with...</p>","building","carving","creating","producing","developing","B","120","35");
INSERT INTO soalinggris VALUES("64","44","Bahasa Inggris","XII","ALL","BING12","<p>Being on time is a beautiful social ethic and one of great importance, as it creates efficiency in system and implies respect for one another. However it is one the many values that is not easy for our students to learn. </p>
<p>Inner discipline,one that comes from an understanding of the set rules and regulation, is the highest form behavior. Most excellent school try to instill this with a loving environment. Why, even adults arrive late to meeting, work, etc. Here, we do not agree that late comers should be shut out. They can be given warnings, most of which are enough to make them try their best to reach the school on time latter .If this fails, invite the parent to school. </p>
<p> By Closing the gates,the school is behaving cruelly, to which we prefer not to expose our children Every school has responsibility to implant good educational principle,but Itshould be in appropriate ways.Good schools create competitive students who   can organize themselves effectively in society, so that everyone gets a quality life as a result of the ethics and values learned for as long as 12   years. </p>
<p>Children are precious and dependent on the adult for guidance. Understanding them is the key, and to this end, both parents and schools must work </p>
<em>What</em> should the school do if a student can&rsquo;t stop his/her habit to come late to school?","punish him/her","shut him/her out","fail him/her","talk to his/her parents","try to understand him/her","D","120","35");
INSERT INTO soalinggris VALUES("65","45","Bahasa Inggris","XII","ALL","BING12","<p>Being on time is a beautiful social ethic and one of great importance, as it creates efficiency in system and implies respect for one another. However it is one the many values that is not easy for our students to learn. </p>
<p>Inner discipline,one that comes from an understanding of the set rules and regulation, is the highest form behavior. Most excellent school try to instill this with a loving environment. Why, even adults arrive late to meeting, work, etc. Here, we do not agree that late comers should be shut out. They can be given warnings, most of which are enough to make them try their best to reach the school on time latter .If this fails, invite the parent to school. </p>
<p> By Closing the gates,the school is behaving cruelly, to which we prefer not to expose our children Every school has responsibility to implant good educational principle,but Itshould be in appropriate ways.Good schools create competitive students who   can organize themselves effectively in society, so that everyone gets a quality life as a result of the ethics and values learned for as long as 12   years. </p>
<p>Children are precious and dependent on the adult for guidance. Understanding them is the key, and to this end, both parents and schools must work </p>
What does the writer think to be &ldquo;<em>the highest fo</em><em>r</em><em>m of behavior</em>&rdquo; (in the second paragraph)?","Respect for one another","Not being late to school","Understanding the regulations.","Understanding the rules.","Using efficient time","D","120","35");
INSERT INTO soalinggris VALUES("66","46","Bahasa Inggris","XII","ALL","BING12","<p>Being on time is a beautiful social ethic and one of great importance, as it creates efficiency in system and implies respect for one another. However it is one the many values that is not easy for our students to learn. </p>
 <p>Inner discipline,one that comes from an understanding of the set rules and regulation, is the highest form behavior. Most excellent school try to instill this with a loving environment. Why, even adults arrive late to meeting, work, etc. Here, we do not agree that late comers should be shut out. They can be given warnings, most of which are enough to make them try their best to reach the school on time latter .If this fails, invite the parent to school. </p>
 <p> By Closing the gates,the school is behaving cruelly, to which we prefer not to expose our children Every school has responsibility to implant good educational principle,but Itshould be in appropriate ways.Good schools create competitive students who   can organize themselves effectively in society, so that everyone gets a quality life as a result of the ethics and values learned for as long as 12   years. </p>
<p>Children are precious and dependent on the adult for guidance. Understanding them is the key, and to this end, both parents and schools must work </p>
&rdquo;<em>Children are <u>precious</u> and dependent on the adults for guidance</em>.&rdquo;<br>
The underlined word is closest in meaning to ….","Valuable","Excellent","Clever","Innocent","Naive","A","120","35");
INSERT INTO soalinggris VALUES("67","47","Bahasa Inggris","XII","ALL","BING12","What is the best arrangement of the sentences below to make a good paragraph?
  <ol>
   <li>Second, place a stick on one line, then put glue on top of one end of the stick</li>
   <li>After that, decorate as desired. Gold, red , and green make great stars. Use other colours for the other holidays or themes</li>
   <li>Let&rsquo;s make hanging stars</li>
   <li>Finally, attach some fishing line or string to one point for hanging</li>
   <li>Then position the second stick on top of the glued end and along the next side of te star template</li>
   <li>First, draw a 5-tipped star on a piece of paper, with each side to have the same length as one stick</li>
   <li>Continue step 2 and 3? until all 10 sticks are in place</li>
  </ol>
 </ol>
</ol>","3-6-1-2-4-7-5","3-6-1-5-4-2-7","3-6-1-7-2-4-5","3-6-1-5-7-2-4","3-6-1-5-2-4-7","D","120","35");
INSERT INTO soalinggris VALUES("68","48","Bahasa Inggris","XII","ALL","BING12","<table width="629" height="120" border="1" cellpadding="0" cellspacing="0">
 <tbody>
  <tr>
   <td><p>The Byron Bay region is part of Australian&rsquo;s Green Cauldron, recognized by Tourism Australia as one of Australia&rsquo;s iconic National Landscape in June 2008<strong>______(48)</strong> its beauty and the geological wonder. It links two Australia&rsquo;s best known stretches of coastline, The Gold Ciast and Byron Bay, and <strong>__________(49)</strong> a unique additional experience to the coast. The township of Byron Bay is the mainland of Australia&rsquo;s eastern most point and is an easy 45 minutes drive from Gold Coast International Airport. Byron Bay was <strong>_____(50)</strong> as one of 26 top south Pasific destinations by Tripadvisor members two years in a row</p>
    <p><em>&nbsp;</em></p>
   <p><em>Adapted from : Air Asia, the ultimate Guide Byron Bay &amp; Beyond Brochure</em></p></td>
  </tr>
 </tbody>
</table>
<p>&nbsp;</p>
48 .......","altough","because","since","because of","inspite of","D","120","35");
INSERT INTO soalinggris VALUES("69","49","Bahasa Inggris","XII","ALL","BING12","<table width="629" height="120" border="1" cellpadding="0" cellspacing="0">
 <tbody>
  <tr>
   <td><p>The Byron Bay region is part of Australian&rsquo;s Green Cauldron, recognized by Tourism Australia as one of Australia&rsquo;s iconic National Landscape in June 2008<strong>______(48)</strong> its beauty and the geological wonder. It links two Australia&rsquo;s best known stretches of coastline, The Gold Ciast and Byron Bay, and <strong>__________(49)</strong> a unique additional experience to the coast. The township of Byron Bay is the mainland of Australia&rsquo;s eastern most point and is an easy 45 minutes drive from Gold Coast International Airport. Byron Bay was <strong>_____(50)</strong> as one of 26 top south Pasific destinations by Tripadvisor members two years in a row</p>
    <p><em>&nbsp;</em></p>
   <p><em>Adapted from : Air Asia, the ultimate Guide Byron Bay &amp; Beyond Brochure</em></p></td>
  </tr>
 </tbody>
</table>
<p>&nbsp;</p>
49 .......","offers","is offering","is offered","offer","offered","A","120","35");
INSERT INTO soalinggris VALUES("70","50","Bahasa Inggris","XII","ALL","BING12","<table width="629" height="120" border="1" cellpadding="0" cellspacing="0">
 <tbody>
  <tr>
   <td><p>The Byron Bay region is part of Australian&rsquo;s Green Cauldron, recognized by Tourism Australia as one of Australia&rsquo;s iconic National Landscape in June 2008<strong>______(48)</strong> its beauty and the geological wonder. It links two Australia&rsquo;s best known stretches of coastline, The Gold Ciast and Byron Bay, and <strong>__________(49)</strong> a unique additional experience to the coast. The township of Byron Bay is the mainland of Australia&rsquo;s eastern most point and is an easy 45 minutes drive from Gold Coast International Airport. Byron Bay was <strong>_____(50)</strong> as one of 26 top south Pasific destinations by Tripadvisor members two years in a row</p>
    <p><em>&nbsp;</em></p>
   <p><em>Adapted from : Air Asia, the ultimate Guide Byron Bay &amp; Beyond Brochure</em></p></td>
  </tr>
 </tbody>
</table>
<p>&nbsp;</p>
50 .......","felt","voted","sought","conveyed","mentioned","B","120","35");



CREATE TABLE `soallistening` (
  `id_soal` int(11) NOT NULL AUTO_INCREMENT,
  `no_soal` int(5) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(22) NOT NULL,
  `id_mapel` varchar(25) NOT NULL,
  `listening` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pertanyaan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `A` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `B` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `C` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `D` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `E` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kunci` varchar(1) NOT NULL,
  `waktu` int(5) NOT NULL,
  `jumlah_soal` int(5) NOT NULL,
  PRIMARY KEY (`id_soal`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO soallistening VALUES("16","1","Bahasa Inggris","XII","ALL","BING12","1.mp3","contoh pertanyaan dengan listening no 1","One","Two","Three","Four","Five","C","120","15");
INSERT INTO soallistening VALUES("17","2","Bahasa Inggris","XII","ALL","BING12","2.mp3","contoh pertanyaan dengan listening no 2","The visitors do not need to pay.","The events will be held in the main hall","The announcement is for all visitors of the book","The only event for children is drawing competition","A reading competition and speed reading held at the same time","D","120","15");
INSERT INTO soallistening VALUES("18","3","Bahasa Inggris","XII","ALL","BING12","3.mp3","contoh pertanyaan dengan listening no 3","sale","selling","bazaar","auction","production","C","120","15");
INSERT INTO soallistening VALUES("19","4","Bahasa Inggris","XII","ALL","BING12","4.mp3","contoh pertanyaan dengan listening no 4","To thank Patricia about her achievement","To announce about award for Patricia","To give a new responsibility for Patricia","To show regret for not giving an award","To give Patricia a next award","A","120","15");
INSERT INTO soallistening VALUES("20","5","Bahasa Inggris","XII","ALL","BING12","5.mp3","contoh pertanyaan dengan listening no 5","The employees ability","Patricia’s enthusiasm","Motivation on the employees","An award promised by the company","Patricia’s ability and enthusiasm","C","120","15");
INSERT INTO soallistening VALUES("21","6","Bahasa Inggris","XII","ALL","BING12","6.mp3","contoh pertanyaan dengan listening no 6","Rahmat Hidayat doesn’t have any award to give to Patricia","Rahmat Hidayat has prepared the award for Patricia","Rahmat Hidayat has given the award to patricia","Patricia will get an award from the company soon","Patricia has given an award from the company","A","120","15");
INSERT INTO soallistening VALUES("22","7","Bahasa Inggris","XII","ALL","BING12","7.mp3","contoh pertanyaan dengan listening no 7","enjoyed the tour","liked mountain climbing","had experience in writing","was used to eating spicy food","visited Yogyakarta for a week","A","120","15");
INSERT INTO soallistening VALUES("23","8","Bahasa Inggris","XII","ALL","BING12","8.mp3","contoh pertanyaan dengan listening no 8","the writer arrived in Yogyakarta","the writer spent the night a cheap wisma","the temples are older than the churches in Europe","Borobudur, Prambanan and the carvings amazed the writer","the writer visited Borobudur and Prambanan with a tour group","E","120","15");
INSERT INTO soallistening VALUES("24","9","Bahasa Inggris","XII","ALL","BING12","9.mp3","contoh pertanyaan dengan listening no 9","the members of the tour","the towns the writer went","all the temples in Yogyakarta","some old temples the writer visited","the food the writer usually eat","D","120","15");
INSERT INTO soallistening VALUES("25","10","Bahasa Inggris","XII","ALL","BING12","10.mp3","contoh pertanyaan dengan listening no 10","Giraffe has no eyebrows","Giraffes eat all kind of leaves","Giraffe needs alot of water to drink","Female giraffe usually carries one baby","Baby giraffe is difficult to stand after it was born","D","120","15");
INSERT INTO soallistening VALUES("26","11","Bahasa Inggris","XII","ALL","BING12","11.mp3","contoh pertanyaan dengan listening no 11","Giraffe’s baby","Giraffe’s food","Giraffe’s life","Giraffe’s reproduction","Giraffe’s characteristic","B","120","15");
INSERT INTO soallistening VALUES("27","12","Bahasa Inggris","XII","ALL","BING12","12.mp3","contoh pertanyaan dengan listening no 12","growth","birth","production","multiple","reproduction","A","120","15");
INSERT INTO soallistening VALUES("28","13","Bahasa Inggris","XII","ALL","BING12","13.mp3","contoh pertanyaan dengan listening no 13","a group of mice did","the hunter did","the elephant's herd","elephant-hunter did","a group of elephant did","C","120","15");
INSERT INTO soallistening VALUES("29","14","Bahasa Inggris","XII","ALL","BING12","14.mp3","contoh pertanyaan dengan listening no 14","the trapped elephants did","the elephant-hunter did","entire group of rats did","a group of king did","the hunters did","C","120","15");
INSERT INTO soallistening VALUES("30","15","Bahasa Inggris","XII","ALL","BING12","15.mp3","contoh pertanyaan dengan listening no 15","called","warned","asked","helped.","killed.","A","120","15");



CREATE TABLE `soalmtk` (
  `id_soal` int(11) NOT NULL AUTO_INCREMENT,
  `no_soal` int(5) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(22) NOT NULL,
  `id_mapel` varchar(25) NOT NULL,
  `pertanyaan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `A` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `B` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `C` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `D` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `E` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kunci` varchar(1) NOT NULL,
  `waktu` int(5) NOT NULL,
  `jumlah_soal` int(5) NOT NULL,
  PRIMARY KEY (`id_soal`)
) ENGINE=MyISAM AUTO_INCREMENT=166 DEFAULT CHARSET=latin1;

INSERT INTO soalmtk VALUES("106","1","Matematika MIPA","XII","MIPA","MATMIPA12","Hasil dari (-12) : 3 + (-8) x (-5) adalah ....","-44","-36","36","44","56","C","120","30");
INSERT INTO soalmtk VALUES("107","2","Matematika MIPA","XII","MIPA","MATMIPA12","<img src='gambar/2.jpg'>","<img src='gambar/2a.jpg'>","<img src='gambar/2b.jpg'>","<img src='gambar/2c.jpg'>","<img src='gambar/2d.jpg'>","<img src='gambar/14a.jpg'>","C","120","30");
INSERT INTO soalmtk VALUES("108","3","Matematika MIPA","XII","MIPA","MATMIPA12","Sebuah mobil memerlukan 15 liter bensin untuk menempuh jarak sejauh 180 km. Jika tangki mobil tersebut berisi 20 liter bensin, jarak yang dapat ditempuh adalah ...","320 km","240 km","230 km","135 km","170km","B","120","30");
INSERT INTO soalmtk VALUES("109","4","Matematika MIPA","XII","MIPA","MATMIPA12","<img src='gambar/4.jpg'>","<img src='gambar/4a.jpg'>","<img src='gambar/4b.jpg'>","<img src='gambar/4c.jpg'>","<img src='gambar/4d.jpg'>","<img src='gambar/12d.jpg'>","A","120","30");
INSERT INTO soalmtk VALUES("110","5","Matematika MIPA","XII","MIPA","MATMIPA12","<img src='gambar/5.jpg'>","<img src='gambar/5a.jpg'>","<img src='gambar/5b.jpg'>","<img src='gambar/5c.jpg'>","<img src='gambar/5d.jpg'>","<img src='gambar/4c.jpg'>","B","120","30");
INSERT INTO soalmtk VALUES("111","6","Matematika MIPA","XII","MIPA","MATMIPA12","Kebun berbentuk belahketupat, panjang kedua diagonalnya 24 m dan 18 m. Di sekelilingnya ditanami pohon dengan jarak antar pohon 3 m. Banyak pohon adalah ...","14","15","20","28","43","C","120","30");
INSERT INTO soalmtk VALUES("112","7","Matematika MIPA","XII","MIPA","MATMIPA12","Sebuah bak air berbentuk prisma, alasnya belah ketupat dengan panjang diagonalnya 18 dm dan 24 dm. Jika tinggi bak 1 m, volume air dalam bak tersebut jika penuh adalah ...","1080 liter","1296 liter","2062 liter","2160 liter","4565 liter","D","120","30");
INSERT INTO soalmtk VALUES("113","8","Matematika MIPA","XII","MIPA","MATMIPA12","Suku ke-8 dari barisan 243, 81, 27, 9, ... adalah ....","<img src='gambar/8a.jpg'>","<img src='gambar/8b.jpg'>","<img src='gambar/8c.jpg'>","<img src='gambar/8d.jpg'>","<img src='gambar/12a.jpg'>","B","120","30");
INSERT INTO soalmtk VALUES("114","9","Matematika MIPA","XII","MIPA","MATMIPA12","<img src='gambar/9.jpg'>","x=-20","x=-10","x=10","x=20","x=56","A","120","30");
INSERT INTO soalmtk VALUES("115","10","Matematika MIPA","XII","MIPA","MATMIPA12","Diketahui 2 lingkaran yang pusatnya P dan Q, dengan jarak PQ = 17 cm. Panjang jari-jari lingkaran berturut-turut dengan pusat P 11,5 cm dan pusat Q 3,5 cm. Panjang garis singgung persekutuan luarnya adalah ....","8 cm","12 cm","15 cm","16 cm","45 cm","C","120","30");
INSERT INTO soalmtk VALUES("116","11","Matematika MIPA","XII","MIPA","MATMIPA12","Dari 143 siswa, 95 siswa senang matematika, 87 siswa senang fisika, dan 60 siswa senang keduanya. Banyak siswa yang tidak senang matematika maupun fisika adalah ...","21 orang","27 orang","35 orang","122 orang","332 orang","A","120","30");
INSERT INTO soalmtk VALUES("117","12","Matematika MIPA","XII","MIPA","MATMIPA12","<img src='gambar/12.jpg'>","<img src='gambar/12a.jpg'>","<img src='gambar/12b.jpg'>","<img src='gambar/12c.jpg'>","<img src='gambar/12d.jpg'>","tidak ada jawaban","B","120","30");
INSERT INTO soalmtk VALUES("118","13","Matematika MIPA","XII","MIPA","MATMIPA12","<img src='gambar/13.jpg'>","{ 3, 4, 5 }","{ 3, 5, 7 }","{ 2, 3, 5 }","{1, 3, 5, 7 }","{3,5,7,9,12}","B","120","30");
INSERT INTO soalmtk VALUES("119","14","Matematika MIPA","XII","MIPA","MATMIPA12","<img src='gambar/14.jpg'>","<img src='gambar/14a.jpg'>","<img src='gambar/14b.jpg'>","<img src='gambar/14c.jpg'>","<img src='gambar/14d.jpg'>","<img src='gambar/4a.jpg'>","A","120","30");
INSERT INTO soalmtk VALUES("120","15","Matematika MIPA","XII","MIPA","MATMIPA12","<img src='gambar/15.jpg'>","35 kwintal","40 kwintal","42 kwintal","44 kwintal","54 kwintal","C","120","30");
INSERT INTO soalmtk VALUES("121","16","Matematika MIPA","XII","MIPA","MATMIPA12","Hasil dari (-12) : 3 + (-8) x (-5) adalah ....","-44","-36","36","44","56","C","120","30");
INSERT INTO soalmtk VALUES("122","17","Matematika MIPA","XII","MIPA","MATMIPA12","<img src='gambar/2.jpg'>","<img src='gambar/2a.jpg'>","<img src='gambar/2b.jpg'>","<img src='gambar/2c.jpg'>","<img src='gambar/2d.jpg'>","<img src='gambar/14a.jpg'>","C","120","30");
INSERT INTO soalmtk VALUES("123","18","Matematika MIPA","XII","MIPA","MATMIPA12","Sebuah mobil memerlukan 15 liter bensin untuk menempuh jarak sejauh 180 km. Jika tangki mobil tersebut berisi 20 liter bensin, jarak yang dapat ditempuh adalah ...","320 km","240 km","230 km","135 km","170km","B","120","30");
INSERT INTO soalmtk VALUES("124","19","Matematika MIPA","XII","MIPA","MATMIPA12","<img src='gambar/4.jpg'>","<img src='gambar/4a.jpg'>","<img src='gambar/4b.jpg'>","<img src='gambar/4c.jpg'>","<img src='gambar/4d.jpg'>","<img src='gambar/12d.jpg'>","A","120","30");
INSERT INTO soalmtk VALUES("125","20","Matematika MIPA","XII","MIPA","MATMIPA12","<img src='gambar/5.jpg'>","<img src='gambar/5a.jpg'>","<img src='gambar/5b.jpg'>","<img src='gambar/5c.jpg'>","<img src='gambar/5d.jpg'>","<img src='gambar/4c.jpg'>","B","120","30");
INSERT INTO soalmtk VALUES("126","21","Matematika MIPA","XII","MIPA","MATMIPA12","Kebun berbentuk belahketupat, panjang kedua diagonalnya 24 m dan 18 m. Di sekelilingnya ditanami pohon dengan jarak antar pohon 3 m. Banyak pohon adalah ...","14","15","20","28","43","C","120","30");
INSERT INTO soalmtk VALUES("127","22","Matematika MIPA","XII","MIPA","MATMIPA12","Sebuah bak air berbentuk prisma, alasnya belah ketupat dengan panjang diagonalnya 18 dm dan 24 dm. Jika tinggi bak 1 m, volume air dalam bak tersebut jika penuh adalah ...","1080 liter","1296 liter","2062 liter","2160 liter","4565 liter","D","120","30");
INSERT INTO soalmtk VALUES("128","23","Matematika MIPA","XII","MIPA","MATMIPA12","Suku ke-8 dari barisan 243, 81, 27, 9, ... adalah ....","<img src='gambar/8a.jpg'>","<img src='gambar/8b.jpg'>","<img src='gambar/8c.jpg'>","<img src='gambar/8d.jpg'>","<img src='gambar/12a.jpg'>","B","120","30");
INSERT INTO soalmtk VALUES("129","24","Matematika MIPA","XII","MIPA","MATMIPA12","<img src='gambar/9.jpg'>","x=-20","x=-10","x=10","x=20","x=56","A","120","30");
INSERT INTO soalmtk VALUES("130","25","Matematika MIPA","XII","MIPA","MATMIPA12","Diketahui 2 lingkaran yang pusatnya P dan Q, dengan jarak PQ = 17 cm. Panjang jari-jari lingkaran berturut-turut dengan pusat P 11,5 cm dan pusat Q 3,5 cm. Panjang garis singgung persekutuan luarnya adalah ....","8 cm","12 cm","15 cm","16 cm","45 cm","C","120","30");
INSERT INTO soalmtk VALUES("131","26","Matematika MIPA","XII","MIPA","MATMIPA12","Dari 143 siswa, 95 siswa senang matematika, 87 siswa senang fisika, dan 60 siswa senang keduanya. Banyak siswa yang tidak senang matematika maupun fisika adalah ...","21 orang","27 orang","35 orang","122 orang","332 orang","A","120","30");
INSERT INTO soalmtk VALUES("132","27","Matematika MIPA","XII","MIPA","MATMIPA12","<img src='gambar/12.jpg'>","<img src='gambar/12a.jpg'>","<img src='gambar/12b.jpg'>","<img src='gambar/12c.jpg'>","<img src='gambar/12d.jpg'>","tidak ada jawaban","B","120","30");
INSERT INTO soalmtk VALUES("133","28","Matematika MIPA","XII","MIPA","MATMIPA12","<img src='gambar/13.jpg'>","{ 3, 4, 5 }","{ 3, 5, 7 }","{ 2, 3, 5 }","{1, 3, 5, 7 }","{3,5,7,9,12}","B","120","30");
INSERT INTO soalmtk VALUES("134","29","Matematika MIPA","XII","MIPA","MATMIPA12","<img src='gambar/14.jpg'>","<img src='gambar/14a.jpg'>","<img src='gambar/14b.jpg'>","<img src='gambar/14c.jpg'>","<img src='gambar/14d.jpg'>","<img src='gambar/4a.jpg'>","A","120","30");
INSERT INTO soalmtk VALUES("135","30","Matematika MIPA","XII","MIPA","MATMIPA12","<img src='gambar/15.jpg'>","35 kwintal","40 kwintal","42 kwintal","44 kwintal","54 kwintal","C","120","30");
INSERT INTO soalmtk VALUES("136","1","Matematika IPS","XII","IPS","MATIPS12","Hasil dari (-12) : 3 + (-8) x (-5) adalah ....","-44","-36","36","44","56","C","120","30");
INSERT INTO soalmtk VALUES("137","2","Matematika IPS","XII","IPS","MATIPS12","<img src='gambar/2.jpg'>","<img src='gambar/2a.jpg'>","<img src='gambar/2b.jpg'>","<img src='gambar/2c.jpg'>","<img src='gambar/2d.jpg'>","<img src='gambar/14a.jpg'>","C","120","30");
INSERT INTO soalmtk VALUES("138","3","Matematika IPS","XII","IPS","MATIPS12","Sebuah mobil memerlukan 15 liter bensin untuk menempuh jarak sejauh 180 km. Jika tangki mobil tersebut berisi 20 liter bensin, jarak yang dapat ditempuh adalah ...","320 km","240 km","230 km","135 km","170km","B","120","30");
INSERT INTO soalmtk VALUES("139","4","Matematika IPS","XII","IPS","MATIPS12","<img src='gambar/4.jpg'>","<img src='gambar/4a.jpg'>","<img src='gambar/4b.jpg'>","<img src='gambar/4c.jpg'>","<img src='gambar/4d.jpg'>","<img src='gambar/12d.jpg'>","A","120","30");
INSERT INTO soalmtk VALUES("140","5","Matematika IPS","XII","IPS","MATIPS12","<img src='gambar/5.jpg'>","<img src='gambar/5a.jpg'>","<img src='gambar/5b.jpg'>","<img src='gambar/5c.jpg'>","<img src='gambar/5d.jpg'>","<img src='gambar/4c.jpg'>","B","120","30");
INSERT INTO soalmtk VALUES("141","6","Matematika IPS","XII","IPS","MATIPS12","Kebun berbentuk belahketupat, panjang kedua diagonalnya 24 m dan 18 m. Di sekelilingnya ditanami pohon dengan jarak antar pohon 3 m. Banyak pohon adalah ...","14","15","20","28","43","C","120","30");
INSERT INTO soalmtk VALUES("142","7","Matematika IPS","XII","IPS","MATIPS12","Sebuah bak air berbentuk prisma, alasnya belah ketupat dengan panjang diagonalnya 18 dm dan 24 dm. Jika tinggi bak 1 m, volume air dalam bak tersebut jika penuh adalah ...","1080 liter","1296 liter","2062 liter","2160 liter","4565 liter","D","120","30");
INSERT INTO soalmtk VALUES("143","8","Matematika IPS","XII","IPS","MATIPS12","Suku ke-8 dari barisan 243, 81, 27, 9, ... adalah ....","<img src='gambar/8a.jpg'>","<img src='gambar/8b.jpg'>","<img src='gambar/8c.jpg'>","<img src='gambar/8d.jpg'>","<img src='gambar/12a.jpg'>","B","120","30");
INSERT INTO soalmtk VALUES("144","9","Matematika IPS","XII","IPS","MATIPS12","<img src='gambar/9.jpg'>","x=-20","x=-10","x=10","x=20","x=56","A","120","30");
INSERT INTO soalmtk VALUES("145","10","Matematika IPS","XII","IPS","MATIPS12","Diketahui 2 lingkaran yang pusatnya P dan Q, dengan jarak PQ = 17 cm. Panjang jari-jari lingkaran berturut-turut dengan pusat P 11,5 cm dan pusat Q 3,5 cm. Panjang garis singgung persekutuan luarnya adalah ....","8 cm","12 cm","15 cm","16 cm","45 cm","C","120","30");
INSERT INTO soalmtk VALUES("146","11","Matematika IPS","XII","IPS","MATIPS12","Dari 143 siswa, 95 siswa senang matematika, 87 siswa senang fisika, dan 60 siswa senang keduanya. Banyak siswa yang tidak senang matematika maupun fisika adalah ...","21 orang","27 orang","35 orang","122 orang","332 orang","A","120","30");
INSERT INTO soalmtk VALUES("147","12","Matematika IPS","XII","IPS","MATIPS12","<img src='gambar/12.jpg'>","<img src='gambar/12a.jpg'>","<img src='gambar/12b.jpg'>","<img src='gambar/12c.jpg'>","<img src='gambar/12d.jpg'>","tidak ada jawaban","B","120","30");
INSERT INTO soalmtk VALUES("148","13","Matematika IPS","XII","IPS","MATIPS12","<img src='gambar/13.jpg'>","{ 3, 4, 5 }","{ 3, 5, 7 }","{ 2, 3, 5 }","{1, 3, 5, 7 }","{3,5,7,9,12}","B","120","30");
INSERT INTO soalmtk VALUES("149","14","Matematika IPS","XII","IPS","MATIPS12","<img src='gambar/14.jpg'>","<img src='gambar/14a.jpg'>","<img src='gambar/14b.jpg'>","<img src='gambar/14c.jpg'>","<img src='gambar/14d.jpg'>","<img src='gambar/4a.jpg'>","A","120","30");
INSERT INTO soalmtk VALUES("150","15","Matematika IPS","XII","IPS","MATIPS12","<img src='gambar/15.jpg'>","35 kwintal","40 kwintal","42 kwintal","44 kwintal","54 kwintal","C","120","30");
INSERT INTO soalmtk VALUES("151","16","Matematika IPS","XII","IPS","MATIPS12","Hasil dari (-12) : 3 + (-8) x (-5) adalah ....","-44","-36","36","44","56","C","120","30");
INSERT INTO soalmtk VALUES("152","17","Matematika IPS","XII","IPS","MATIPS12","<img src='gambar/2.jpg'>","<img src='gambar/2a.jpg'>","<img src='gambar/2b.jpg'>","<img src='gambar/2c.jpg'>","<img src='gambar/2d.jpg'>","<img src='gambar/14a.jpg'>","C","120","30");
INSERT INTO soalmtk VALUES("153","18","Matematika IPS","XII","IPS","MATIPS12","Sebuah mobil memerlukan 15 liter bensin untuk menempuh jarak sejauh 180 km. Jika tangki mobil tersebut berisi 20 liter bensin, jarak yang dapat ditempuh adalah ...","320 km","240 km","230 km","135 km","170km","B","120","30");
INSERT INTO soalmtk VALUES("154","19","Matematika IPS","XII","IPS","MATIPS12","<img src='gambar/4.jpg'>","<img src='gambar/4a.jpg'>","<img src='gambar/4b.jpg'>","<img src='gambar/4c.jpg'>","<img src='gambar/4d.jpg'>","<img src='gambar/12d.jpg'>","A","120","30");
INSERT INTO soalmtk VALUES("155","20","Matematika IPS","XII","IPS","MATIPS12","<img src='gambar/5.jpg'>","<img src='gambar/5a.jpg'>","<img src='gambar/5b.jpg'>","<img src='gambar/5c.jpg'>","<img src='gambar/5d.jpg'>","<img src='gambar/4c.jpg'>","B","120","30");
INSERT INTO soalmtk VALUES("156","21","Matematika IPS","XII","IPS","MATIPS12","Kebun berbentuk belahketupat, panjang kedua diagonalnya 24 m dan 18 m. Di sekelilingnya ditanami pohon dengan jarak antar pohon 3 m. Banyak pohon adalah ...","14","15","20","28","43","C","120","30");
INSERT INTO soalmtk VALUES("157","22","Matematika IPS","XII","IPS","MATIPS12","Sebuah bak air berbentuk prisma, alasnya belah ketupat dengan panjang diagonalnya 18 dm dan 24 dm. Jika tinggi bak 1 m, volume air dalam bak tersebut jika penuh adalah ...","1080 liter","1296 liter","2062 liter","2160 liter","4565 liter","D","120","30");
INSERT INTO soalmtk VALUES("158","23","Matematika IPS","XII","IPS","MATIPS12","Suku ke-8 dari barisan 243, 81, 27, 9, ... adalah ....","<img src='gambar/8a.jpg'>","<img src='gambar/8b.jpg'>","<img src='gambar/8c.jpg'>","<img src='gambar/8d.jpg'>","<img src='gambar/12a.jpg'>","B","120","30");
INSERT INTO soalmtk VALUES("159","24","Matematika IPS","XII","IPS","MATIPS12","<img src='gambar/9.jpg'>","x=-20","x=-10","x=10","x=20","x=56","A","120","30");
INSERT INTO soalmtk VALUES("160","25","Matematika IPS","XII","IPS","MATIPS12","Diketahui 2 lingkaran yang pusatnya P dan Q, dengan jarak PQ = 17 cm. Panjang jari-jari lingkaran berturut-turut dengan pusat P 11,5 cm dan pusat Q 3,5 cm. Panjang garis singgung persekutuan luarnya adalah ....","8 cm","12 cm","15 cm","16 cm","45 cm","C","120","30");
INSERT INTO soalmtk VALUES("161","26","Matematika IPS","XII","IPS","MATIPS12","Dari 143 siswa, 95 siswa senang matematika, 87 siswa senang fisika, dan 60 siswa senang keduanya. Banyak siswa yang tidak senang matematika maupun fisika adalah ...","21 orang","27 orang","35 orang","122 orang","332 orang","A","120","30");
INSERT INTO soalmtk VALUES("162","27","Matematika IPS","XII","IPS","MATIPS12","<img src='gambar/12.jpg'>","<img src='gambar/12a.jpg'>","<img src='gambar/12b.jpg'>","<img src='gambar/12c.jpg'>","<img src='gambar/12d.jpg'>","tidak ada jawaban","B","120","30");
INSERT INTO soalmtk VALUES("163","28","Matematika IPS","XII","IPS","MATIPS12","<img src='gambar/13.jpg'>","{ 3, 4, 5 }","{ 3, 5, 7 }","{ 2, 3, 5 }","{1, 3, 5, 7 }","{3,5,7,9,12}","B","120","30");
INSERT INTO soalmtk VALUES("164","29","Matematika IPS","XII","IPS","MATIPS12","<img src='gambar/14.jpg'>","<img src='gambar/14a.jpg'>","<img src='gambar/14b.jpg'>","<img src='gambar/14c.jpg'>","<img src='gambar/14d.jpg'>","<img src='gambar/4a.jpg'>","A","120","30");
INSERT INTO soalmtk VALUES("165","30","Matematika IPS","XII","IPS","MATIPS12","<img src='gambar/15.jpg'>","35 kwintal","40 kwintal","42 kwintal","44 kwintal","54 kwintal","C","120","30");



CREATE TABLE `soalmtkessay` (
  `id_soal` int(11) NOT NULL AUTO_INCREMENT,
  `no_soal` int(5) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(22) NOT NULL,
  `id_mapel` varchar(25) NOT NULL,
  `pertanyaan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kunci1` varchar(300) NOT NULL,
  `kunci2` varchar(300) NOT NULL,
  `kunci3` varchar(300) NOT NULL,
  `waktu` int(5) NOT NULL,
  `jumlah_soal` int(5) NOT NULL,
  PRIMARY KEY (`id_soal`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO soalmtkessay VALUES("16","31","Matematika MIPA","XII","MIPA","MATMIPA12","Hasil dari (-12) : 3 + (-8) x (-5) adalah ....","1/2","0,5","0.5","120","5");
INSERT INTO soalmtkessay VALUES("17","32","Matematika MIPA","XII","MIPA","MATMIPA12","<img src='gambar/2.jpg'>","25","","","120","5");
INSERT INTO soalmtkessay VALUES("18","33","Matematika MIPA","XII","MIPA","MATMIPA12","Sebuah mobil memerlukan 15 liter bensin untuk menempuh jarak sejauh 180 km. Jika tangki mobil tersebut berisi 20 liter bensin, jarak yang dapat ditempuh adalah ...","25","","","120","5");
INSERT INTO soalmtkessay VALUES("19","34","Matematika MIPA","XII","MIPA","MATMIPA12","<img src='gambar/4.jpg'>","25","","","120","5");
INSERT INTO soalmtkessay VALUES("20","35","Matematika MIPA","XII","MIPA","MATMIPA12","<img src='gambar/5.jpg'>","25","","","120","5");
INSERT INTO soalmtkessay VALUES("21","31","Matematika IPS","XII","IPS","MATIPS12","Hasil dari (-12) : 3 + (-8) x (-5) adalah ....","25","","","120","5");
INSERT INTO soalmtkessay VALUES("22","32","Matematika IPS","XII","IPS","MATIPS12","<img src='gambar/2.jpg'>","25","","","120","5");
INSERT INTO soalmtkessay VALUES("23","33","Matematika IPS","XII","IPS","MATIPS12","Sebuah mobil memerlukan 15 liter bensin untuk menempuh jarak sejauh 180 km. Jika tangki mobil tersebut berisi 20 liter bensin, jarak yang dapat ditempuh adalah ...","25","","","120","5");
INSERT INTO soalmtkessay VALUES("24","34","Matematika IPS","XII","IPS","MATIPS12","<img src='gambar/4.jpg'>","25","","","120","5");
INSERT INTO soalmtkessay VALUES("25","35","Matematika IPS","XII","IPS","MATIPS12","<img src='gambar/5.jpg'>","25","","","120","5");



CREATE TABLE `status` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(25) NOT NULL,
  `id_mapel` varchar(25) NOT NULL,
  `status` int(1) NOT NULL,
  `nama` varchar(200) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO status VALUES("20","105","MATMIPA12","1","FADHILA PUTRI MAHARANI");
INSERT INTO status VALUES("21","105","BHSINDO12","0","FADHILA PUTRI MAHARANI");



CREATE TABLE `ujian` (
  `id_ujian` int(11) NOT NULL AUTO_INCREMENT,
  `id_mapel` varchar(40) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `aktif` varchar(1) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `jumlah_soal` int(5) NOT NULL,
  `spesial` int(5) NOT NULL,
  PRIMARY KEY (`id_ujian`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

INSERT INTO ujian VALUES("15","MATIPS12","Matematika IPS","120","0","XII","IPS","30","1");
INSERT INTO ujian VALUES("16","MATMIPA12","Matematika MIPA","120","0","XII","MIPA","30","1");
INSERT INTO ujian VALUES("17","BING12","Bahasa Inggris","120","0","XII","ALL","35","2");
INSERT INTO ujian VALUES("18","BHSINDO12","Bahasa Indonesia","120","1","XII","ALL","60","0");
INSERT INTO ujian VALUES("19","BIOL12","Biologi","5","0","XII","MIPA","20","0");
INSERT INTO ujian VALUES("20","EKO12","Ekonomi","5","0","XII","IPS","20","0");
INSERT INTO ujian VALUES("21","FIS12","Fisika","5","0","XII","MIPA","20","0");
INSERT INTO ujian VALUES("22","GEO12","Geografi","5","0","XII","IPS","20","0");
INSERT INTO ujian VALUES("23","KIM12","Kimia","5","0","XII","MIPA","20","0");
INSERT INTO ujian VALUES("24","SOSIO12","Sosiologi","5","0","XII","IPS","20","0");

