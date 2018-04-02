-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2018 at 12:32 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `tanggal_post` date NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `content`, `tanggal_post`, `image`) VALUES
(1, 'Latar Belakang Poster dan Iklan Kimi No Nawa', 'lokasi ini menjadi latar belakang poster dan iklan Kimi no Na wa. Tangga ini merupakan tangga Kuil Suga yang berada di Yotsuya, Tokyo. Makin banyak orang yang berfoto di tangga ini dengan sudut yang persis sama dengan adegan dalam poster Kimi no Na wa. Lokasi ini tambah populer!\r\nOh iya, selain terinspirasi dari banyak hal, film ini juga bisa menginspirasi kita, lho! Seperti yang dikutip dari bbc.com, film Kimi no Na wa ini bagaikan ‘pengingat’ bagi orang-orang akan kejadian gempa besar di Jepang pada tahun 2011 lalu.\r\n\r\nKamu yang sudah menonton film ini, mungkin ingat ketika Taki berkata bahwa kita tak akan pernah tahu kapan Tokyo – mungkin – tertimpa bencana dahsyat hingga menghilang. Itulah pesan yang ingin disampaikan Shinkai, bahwa bencana bisa saja datang kapan pun.\r\n\r\nOleh karena itu, tak ada ruginya juga kan menonton film ini? Untuk kamu yang belum, maka segeralah menontonnya, karena siapa tahu kamu pun mendapat inspirasi darinya.', '2018-03-30', 'iklan.jpg'),
(2, 'Produser Star Wars Bakal Filmkan Kimi No Na Wa Versi Live Action', ' Kimi No Na Wa alias Your Name, akan segera menambah panjang daftar film anime Jepang yang diadaptasi ke Hollywood. Dilansir dari Variety, Rabu (28/9/2017), Paramount Pictures dan perusahaan milik produser film Star Wars, J.J. Abrams, Bad Robot, memenangkan hak untuk mengadaptasi film anime sukses ini.\r\n\r\nJ.J. Abrams dan Lindsey Weber dari Bad Robot akan duduk di bangku produser, bersama dengan produser di film aslinya, Genki Kawamura. Eric Heisserer yang masuk menjadi nomine Oscar 2017 lewat Arrival, bergabung sebagai penulis naskah film ini.\r\nYoshishige Shimatani, CEO Toho Co yang memproduksi anime Kimi No Na Wa, mengungkapkan rasa bangganya atas proyek ini. Perusahaan Jepang ini, memang dilibatkan dalam proses produksi, sekaligus menangani distribusi film versi live action ini di Jepang.\r\n\r\n\"Kami sangat bersemangat bisa bekerja sama dengan talenta hebat dari Hollywood dan bersama-sama membuat versi live action dari film ikonis Jepang Your Name,\" tutur Yoshishige Shimatani.\r\n\r\nIa menyebutkan bahwa pertemuan antara para sineas telah berlangsung, dan ia optimistis cerita antara Taki dan Mitsuha yang seperti mimpi, bisa diceritakan dengan hebat.\r\n\r\nBila Yoshishige Shimatani menyambut proyek ini dengan antusias, maka hal sebaliknya terjadi di media sosial. Banyak penggemar yang menyayangkan film anime ini dibuat versi Hollywood. \"#Yourname/ #kiminonawa adalah sebuah karya besar yang tak butuh diadaptasi di Hollywood, terutama tak perlu di-white wash!\" tulis seorang warganet di Twitter.\r\n\r\n\"Jangan biarkan Hollywood merusak Kimi No Na Wa seperti yang dilakukan pada Death Note,\" cuit yang lain.\r\n', '2018-03-31', 'kimi no nawa.jpg'),
(3, 'Berkat Kimi no Na wa, Pendapatan Anime Jepang Jadi Rp 200 Triliun!', 'Asosiasi Animasi Jepang (AJA) mengeluarkan sebuah laporan berjudul “Laporan Industri Anime 2017” yang meneliti trend industri anime di tahun 2016 pada Selasa, 24 Oktober 2017. Laporan ini menunjukkan bahwa total nilai pasar industri anime atau pendapatan dari anime pada 2016 mencetak rekor sebesar Rp. 2.0009 triliun (sekitar Rp. 213 triliun) dan naik sebanyak 9% dari tahun lalu dari angka Rp. 1.83 triliun (sekitar Rp. 190 triliun). Hal ini melanjutkan tren positif dari industri anime dari tahun-tahun sebelumnya dimana pada tahun 2014 mengalami kenaikan 10% dari tahun 2013, dan tahun 2015 mengalami kenaikan 12% dari tahun 2014.\r\n\r\nSalah satu faktor dari meingkatnya pendapatan anime tersebut berkat film buatan Makoto Shinkai berjudul Kimi no na Wa yang berhasil meraup keuntungan sebesar 16.4 miliar yen (sekitar Rp. 1.8 triliun) di Jepang saja dan berhasil mencetak keuntungan sebesar US$ 355 juta (sekitar Rp. 4,5 triliun) di seluruh dunia.', '2018-03-28', 'kimi no nawa2.jpg'),
(4, 'Ji Chang Wook dan Kim So Hyun Dipilih Jadi Dubber \'Kimi No Na Wa\' Versi Korea', '\"Kimi No Na Wa\" versi Korea akan dirilis mulai 13 Juli mendatang. Pihak produksi memutuskan untuk mengajak Ji Chang Wook dan Kim So Hyun sebagai pengisi suara dua tokoh utamanya. \r\n\r\nChang Wook akan mengisi suara Taki, siswa SMA di Tokyo yang ingin menjadi arsitek. So Hyun akan mengisi suara Mitsuha, siswi SMA yang tinggal di desa dan berharap untuk pindah ke Tokyo. \r\n\r\n\"Kimi No Na Wa\" adalah film animasi yang menuai banyak pujian dari penonton dari berbagai negara. Disutradarai dan ditulis sendiri oleh Makoto Shinkai, film ini dianggap menggugah perasaan para penontonnya. \"Kimi No Na Wa\" bahkan tercatat sebagai film Jepang terlaris sepanjang masa. \r\n\r\nSementara itu, Chang Wook masih sibuk syuting \"Suspicious Partner\" bersama Nam Ji Hyun cs. Di sisi lain So Hyun juga membintangi \"Ruler: Master of the Mask\" bersama Yoo Seung Ho. Dua serial ini masih bersaing dalam persaingan rating di slot Rabu dan Kamis', '2018-03-31', 'dubber.jpg'),
(5, 'Terlaris di Jepang, Novel Kimi no Na wa Rilis di 22 Negara', 'Penerbit Yen Press mengumumkan akan menerbitkan novel Jepang \'Kimi no Na wa\' di 22 negara lainnya di dunia. Novel karya Makoto Shinkai yang diadaptasi dari film dengan judul yang sama itu segera beredar di belahan negara Asia, Amerika Utara, hingga Eropa. \r\n\r\nDi antaranya adalah Korea Selatan, Hong Kong, Makau, Tiongkok, Amerika Serikat, Kanada, Inggris, Prancis, Belgia, Italia, Vatikan, San Marino, Swiss, Spanyol, Jerman, Australia, Singapura, Luxemburg, Vietnam, dan lain-lain. ', '2018-03-29', 'kimi no nawa3.jpg'),
(6, 'Sinopsis Kimi No Nawa, Fim Animasi yang wajib ditonton', 'Menceritakan seorang gadis bernama Mitsuha Miyamizu yang tinggal di pedesaan dengan kehidupan rutinitas sebagai seorang pelajar, ia bisa menenun dan juga membuat sake untuk dipersembahkan kepada dewa. Di sisi lain ada seorang remaja lelaki bernama Taki tachibana yang tinggal di perkotaan, Tokyo dengan kehidupan rutinitasi sebagai seorang pelajar, dan pekerja paruh waktu di restoran Italia. Suatu hari Mitsuha membenci kehidupannya yang tinggal di pedesaan, ia berharap untuk tinggal di perkotaan khususnya di Tokyo dan menjadi seorang lelaki tampan di kota tersebut. Tidak lama Mitsuha mengharapkan hal tersebut, suatu hari dia bermimpi menjadi seorang lelaki yang hidup di Tokyo dengan rutinitas yang berbeda dari kehidupannya sehari-hari, di sisi lain Taki juga bermimpi menjadi seorang wanita cantik yang hidup di pedesaan dengan kehidupan rutinitas yang berbeda dari biasanya. Apa maksud semua mimpi ini? mimpi tersebut akan membuat mereka perlahan-lahan menghadapi kehidupan rutinitas yang berbeda dari biasanya.\r\n\r\nRead more at: http://www.animepjm.com/2016/09/kimi-no-na-wa.html', '2018-03-24', 'sinopsis.jpg'),
(7, 'Kimi No Nawa Tayang di AS dan Kanada', 'Menceritakan seorang gadis bernama Mitsuha Miyamizu yang tinggal di pedesaan dengan kehidupan rutinitas sebagai seorang pelajar, ia bisa menenun dan juga membuat sake untuk dipersembahkan kepada dewa. Di sisi lain ada seorang remaja lelaki bernama Taki tachibana yang tinggal di perkotaan, Tokyo dengan kehidupan rutinitasi sebagai seorang pelajar, dan pekerja paruh waktu di restoran Italia. Suatu hari Mitsuha membenci kehidupannya yang tinggal di pedesaan, ia berharap untuk tinggal di perkotaan khususnya di Tokyo dan menjadi seorang lelaki tampan di kota tersebut. Tidak lama Mitsuha mengharapkan hal tersebut, suatu hari dia bermimpi menjadi seorang lelaki yang hidup di Tokyo dengan rutinitas yang berbeda dari kehidupannya sehari-hari, di sisi lain Taki juga bermimpi menjadi seorang wanita cantik yang hidup di pedesaan dengan kehidupan rutinitas yang berbeda dari biasanya. Apa maksud semua mimpi ini? mimpi tersebut akan membuat mereka perlahan-lahan menghadapi kehidupan rutinitas yang berbeda dari biasanya.\r\n\r\nRead more at: http://www.animepjm.com/2016/09/kimi-no-na-wa.html', '2018-03-29', 'kimi no nawa4.jpg'),
(8, 'Itomori, Desa Tempat Tinggal Mitsuha', 'Pulau Aogashima\r\nDi dalam film, pulau ini bukanlah pulau, melainkan bagian dari Itomori, desa tempat Mitsuha tinggal. Tempat ini juga menjadi latar belakang dari adegan penting, ketika pertama kalinya Taki dan Mitsuha bertemu dalam keadaan saling mengenal satu sama lain. Pulau Aogashima adalah pulau vulkanik yang juga terpencil. Akses ke pulau ini pun dapat dibilang masih sulit. Untuk mencapainya saja, kita harus menggunakan helikopter yang hanya tersedia satu dan untuk 9 penumpang. Yang mengejutkan, walaupun terpencil dan berbahaya karena terdapat gunung berapi aktif, faktanya pulau ini dihuni oleh lebih dari 100 penduduk di sebuah desa yang ada di dalamnya, dan mereka tidak takut sama sekali untuk tinggal di pulau berbahaya tersebut. ', '2018-03-26', 'itomori.jpg'),
(9, 'Kuil Miyamizu', 'Kuil Sannogu Hie, Prefektur Gifu\r\nDi dalam film, kuil ini bernama Kuil Miyamizu dan merupakan kuil simbolis di Itomori. Kuil ini menjadi latar belakang adegan ketika Mitsuha melakukan tarian tradisional Jepang bersama adiknya. Kuil ini terletak di Prefektur Gifu dan merupakan pusat festival Takayama pada musim semi, salah satu festival terindah dan terbesar di Jepang. Karena dilaksanakan di kuil Sanno, maka festival ini juga disebut Festival Sanno. Festival ini bertujuan untuk meminta doa agar diberi panen yang bagus pada musim panen kepada dewa.', '2018-03-21', 'kuil.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
