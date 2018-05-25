-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2018 at 09:16 PM
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
  `image` varchar(50) NOT NULL,
  `author` varchar(20) NOT NULL,
  `email_author` varchar(30) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `content`, `tanggal_post`, `image`, `author`, `email_author`, `no_telp`, `username`, `password`, `id_category`) VALUES
(2, 'lol', ' Kimi No Na Wa alias Your Name, akan segera menambah panjang daftar film anime Jepang yang diadaptasi ke Hollywood. Dilansir dari Variety, Rabu (28/9/2017), Paramount Pictures dan perusahaan milik produser film Star Wars, J.J. Abrams, Bad Robot, memenangkan hak untuk mengadaptasi film anime sukses ini.\r\n\r\nJ.J. Abrams dan Lindsey Weber dari Bad Robot akan duduk di bangku produser, bersama dengan produser di film aslinya, Genki Kawamura. Eric Heisserer yang masuk menjadi nomine Oscar 2017 lewat Arrival, bergabung sebagai penulis naskah film ini.\r\nYoshishige Shimatani, CEO Toho Co yang memproduksi anime Kimi No Na Wa, mengungkapkan rasa bangganya atas proyek ini. Perusahaan Jepang ini, memang dilibatkan dalam proses produksi, sekaligus menangani distribusi film versi live action ini di Jepang.\r\n\r\n\"Kami sangat bersemangat bisa bekerja sama dengan talenta hebat dari Hollywood dan bersama-sama membuat versi live action dari film ikonis Jepang Your Name,\" tutur Yoshishige Shimatani.\r\n\r\nIa menyebutkan bahwa pertemuan antara para sineas telah berlangsung, dan ia optimistis cerita antara Taki dan Mitsuha yang seperti mimpi, bisa diceritakan dengan hebat.\r\n\r\nBila Yoshishige Shimatani menyambut proyek ini dengan antusias, maka hal sebaliknya terjadi di media sosial. Banyak penggemar yang menyayangkan film anime ini dibuat versi Hollywood. \"#Yourname/ #kiminonawa adalah sebuah karya besar yang tak butuh diadaptasi di Hollywood, terutama tak perlu di-white wash!\" tulis seorang warganet di Twitter.\r\n\r\n\"Jangan biarkan Hollywood merusak Kimi No Na Wa seperti yang dilakukan pada Death Note,\" cuit yang lain.\r\n', '2018-03-31', 'logo1.png', 'eka', 'ekadewi@gmail.com', '09888888', 'eks', 'eka', 3),
(3, 'Berkat Kimi no Na wa, Pendapatan Anime Jepang Jadi Rp 200 Triliun!', 'Asosiasi Animasi Jepang (AJA) mengeluarkan sebuah laporan berjudul “Laporan Industri Anime 2017” yang meneliti trend industri anime di tahun 2016 pada Selasa, 24 Oktober 2017. Laporan ini menunjukkan bahwa total nilai pasar industri anime atau pendapatan dari anime pada 2016 mencetak rekor sebesar Rp. 2.0009 triliun (sekitar Rp. 213 triliun) dan naik sebanyak 9% dari tahun lalu dari angka Rp. 1.83 triliun (sekitar Rp. 190 triliun). Hal ini melanjutkan tren positif dari industri anime dari tahun-tahun sebelumnya dimana pada tahun 2014 mengalami kenaikan 10% dari tahun 2013, dan tahun 2015 mengalami kenaikan 12% dari tahun 2014.\r\n\r\nSalah satu faktor dari meingkatnya pendapatan anime tersebut berkat film buatan Makoto Shinkai berjudul Kimi no na Wa yang berhasil meraup keuntungan sebesar 16.4 miliar yen (sekitar Rp. 1.8 triliun) di Jepang saja dan berhasil mencetak keuntungan sebesar US$ 355 juta (sekitar Rp. 4,5 triliun) di seluruh dunia.', '2018-03-28', 'kimi no nawa2.jpg', '0', '0', '0', 'eeeeeeeeeeee', 'eeee', 1),
(4, 'Ji Chang Wook dan Kim So Hyun Dipilih Jadi Dubber \'Kimi No Na Wa\' Versi Korea', '\"Kimi No Na Wa\" versi Korea akan dirilis mulai 13 Juli mendatang. Pihak produksi memutuskan untuk mengajak Ji Chang Wook dan Kim So Hyun sebagai pengisi suara dua tokoh utamanya. \r\n\r\nChang Wook akan mengisi suara Taki, siswa SMA di Tokyo yang ingin menjadi arsitek. So Hyun akan mengisi suara Mitsuha, siswi SMA yang tinggal di desa dan berharap untuk pindah ke Tokyo. \r\n\r\n\"Kimi No Na Wa\" adalah film animasi yang menuai banyak pujian dari penonton dari berbagai negara. Disutradarai dan ditulis sendiri oleh Makoto Shinkai, film ini dianggap menggugah perasaan para penontonnya. \"Kimi No Na Wa\" bahkan tercatat sebagai film Jepang terlaris sepanjang masa. \r\n\r\nSementara itu, Chang Wook masih sibuk syuting \"Suspicious Partner\" bersama Nam Ji Hyun cs. Di sisi lain So Hyun juga membintangi \"Ruler: Master of the Mask\" bersama Yoo Seung Ho. Dua serial ini masih bersaing dalam persaingan rating di slot Rabu dan Kamis', '2018-03-31', 'dubber.jpg', '0', '0', '0', 'vvvvv', 'ddd', 1),
(5, 'Terlaris di Jepang, Novel Kimi no Na wa Rilis di 22 Negara', 'Penerbit Yen Press mengumumkan akan menerbitkan novel Jepang \'Kimi no Na wa\' di 22 negara lainnya di dunia. Novel karya Makoto Shinkai yang diadaptasi dari film dengan judul yang sama itu segera beredar di belahan negara Asia, Amerika Utara, hingga Eropa. \r\n\r\nDi antaranya adalah Korea Selatan, Hong Kong, Makau, Tiongkok, Amerika Serikat, Kanada, Inggris, Prancis, Belgia, Italia, Vatikan, San Marino, Swiss, Spanyol, Jerman, Australia, Singapura, Luxemburg, Vietnam, dan lain-lain. ', '2018-03-29', 'kimi no nawa3.jpg', '0', '0', '0', 'ssssssssss', 's', 3),
(6, 'Sinopsis Kimi No Nawa, Fim Animasi yang wajib ditonton', 'Menceritakan seorang gadis bernama Mitsuha Miyamizu yang tinggal di pedesaan dengan kehidupan rutinitas sebagai seorang pelajar, ia bisa menenun dan juga membuat sake untuk dipersembahkan kepada dewa. Di sisi lain ada seorang remaja lelaki bernama Taki tachibana yang tinggal di perkotaan, Tokyo dengan kehidupan rutinitasi sebagai seorang pelajar, dan pekerja paruh waktu di restoran Italia. Suatu hari Mitsuha membenci kehidupannya yang tinggal di pedesaan, ia berharap untuk tinggal di perkotaan khususnya di Tokyo dan menjadi seorang lelaki tampan di kota tersebut. Tidak lama Mitsuha mengharapkan hal tersebut, suatu hari dia bermimpi menjadi seorang lelaki yang hidup di Tokyo dengan rutinitas yang berbeda dari kehidupannya sehari-hari, di sisi lain Taki juga bermimpi menjadi seorang wanita cantik yang hidup di pedesaan dengan kehidupan rutinitas yang berbeda dari biasanya. Apa maksud semua mimpi ini? mimpi tersebut akan membuat mereka perlahan-lahan menghadapi kehidupan rutinitas yang berbeda dari biasanya.\r\n\r\nRead more at: http://www.animepjm.com/2016/09/kimi-no-na-wa.html', '2018-03-24', 'sinopsis.jpg', '0', '0', '0', 'dc', 'ddd', 2),
(7, 'Kimi No Nawa Tayang di AS dan Kanada', 'Menceritakan seorang gadis bernama Mitsuha Miyamizu yang tinggal di pedesaan dengan kehidupan rutinitas sebagai seorang pelajar, ia bisa menenun dan juga membuat sake untuk dipersembahkan kepada dewa. Di sisi lain ada seorang remaja lelaki bernama Taki tachibana yang tinggal di perkotaan, Tokyo dengan kehidupan rutinitasi sebagai seorang pelajar, dan pekerja paruh waktu di restoran Italia. Suatu hari Mitsuha membenci kehidupannya yang tinggal di pedesaan, ia berharap untuk tinggal di perkotaan khususnya di Tokyo dan menjadi seorang lelaki tampan di kota tersebut. Tidak lama Mitsuha mengharapkan hal tersebut, suatu hari dia bermimpi menjadi seorang lelaki yang hidup di Tokyo dengan rutinitas yang berbeda dari kehidupannya sehari-hari, di sisi lain Taki juga bermimpi menjadi seorang wanita cantik yang hidup di pedesaan dengan kehidupan rutinitas yang berbeda dari biasanya. Apa maksud semua mimpi ini? mimpi tersebut akan membuat mereka perlahan-lahan menghadapi kehidupan rutinitas yang berbeda dari biasanya.\r\n\r\nRead more at: http://www.animepjm.com/2016/09/kimi-no-na-wa.html', '2018-03-29', 'kimi no nawa4.jpg', '0', '0', '0', 'eka', 'c', 1),
(8, 'eka', 'ekaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2018-04-24', 'Kimi-no-Na-wa1.jpg', 'eka', 'addd@gmail.com', '09888888', 'ekkkaa', 'eka', 3),
(9, 'hjsdfhds', 'jhbhdsbchjsBChjsBCs', '2018-04-24', 'Kimi-no-Na-wa2.jpg', 'hai', 'addd@gmail.com', '09888888', 'hai', 'hai', 1),
(10, 'Saksikan Puncak Hujan Meteor Lyrid Nanti Malam!', 'Jakarta - Fenomena alam menarik bisa disaksikan di akhir pekan ini. Puncak hujan meteor Lyrid akan terjadi nanti malam dan bisa disaksikan pula di langit Indonesia.\r\n\r\nWalaupun puncak hujan meteor Lyrid ini terjadi nanti malam, Sabtu (21/4/2018), tetapi sebetulnya fenomena langit ini sudah bisa dilihat sejak Senin (16/4) lalu. Oleh karena nanti malam adalah puncaknya, maka meteor Lyrid bisa disaksikan hingga Minggu (22/4) pagi.\r\n\r\n\"Waktunya dini hari sebelum shubuh Sabtu-Senin, 21-23 April. Amati langit Timur-Utara. Diprakirakan ada belasan meteor per jam,\" kata Kepala LAPAN Prof Thomas Djamaluddin dalam pesan singkatnya, Jumat (20/4/2018).\r\n\r\nProf Thomas mengatakan, hujan meteor Lyrid bisa dilihat dengan mata telanjang, namun cuaca saat pengamatan harus cerah. Selain itu jauh dari polusi cahaya serta area pengamatan tak terhalang gedung atau pohon.\r\n\r\nSementara itu berdasarkan prakiraan Badan Meteorologi, Klimatologi, dan Geofisika (BMKG), cuaca di DKI Jakarta dan sekitarnya nanti malam adalah cerah berawan. Hujan ringan akan terjadi pada dini hari di Kepulauan Seribu.', '2018-05-13', 'a.jpg', 'eka', 'eka@gmail.com', '6789', 'hai', 'hai', 1),
(11, 'Anime Your Name akan Diadaptasi oleh Hollywood', 'Metrotvnews.com: Paramount Pictures dan J.J. Abrams akan bekerja sama membuat film adaptasi dari Kimi no Na wa atau Your Name, yang merupakan salah satu film anime terpopuler di Jepang, lapor The Hollywood Reporter.\r\n\r\nYour Name, yang dikategorikan sebagai cerita fiksi ilmiah bercampur dengan unsur romantis, bercerita tentang seorang remaja laki-laki dan peremuan dari kawasan yang berbeda di Jepang. Keduanya menemukan bahwa mereka bisa saling bertukar tubuh.\r\nMereka juga menemukan, mereka tidak hanya dipisahkan oleh ruang, tapi juga waktu. Ketika sebuah bencana mengancam menghancurkan salah satu kota mereka, mereka harus menemukan cara untuk bertemu dan menghentikan bencana tersebut.\r\n\r\nMakoto Shinkai menulis dan menyutradari film Your Name, yang menjadi film dengan pendapatan terbesar ke-4 di Jepang dan film anime dengan pendapatan terbesar secara global.\r\n\r\nFilm tersebut berhasil mendapatkan USD355 juta (Rp4,8 triliun). Your Name juga dinominasikan sebagai film animasi terbaik di Japan Academy Prize ke-40. \r\n\r\n\"Your Name adalah film yang dibuat menggunakan imajinasi tim Jepang dan dibuat menggunakan medium lokal,\" ujar Shinkai dalam sebuah pernyataan resmi.\r\n\r\n\"Ketika karya itu digabungkan dengan gaya pembuatan film Hollywood, kita mungkin akan menemukan kesempatan yang tidak terpikirkan sebelumnya. Saya tidak sabar untuk melihat film live-action dari Your Name.\"', '2018-05-13', 'b.jpg', 'eka', 'eka@gmail.com', '556778', 'ekaaaaa', 'eka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `cat_description` varchar(255) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `cat_description`, `date_created`) VALUES
(1, 'ajeng', 'anime a', '2018-04-24'),
(2, 'aa', 'jhbhjbhb', '2018-04-24'),
(3, 'anime', 'a', '2018-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` char(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `agama` enum('islam','kristen','katolik','hindu','budha') NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `no_hp`, `email`, `agama`, `username`, `password`) VALUES
(2, 'Eka Dewi Nur A', 'malang', '9009790', 'eka@gmail.com', 'islam', 'eka', '79ee82b17dfb837b1be94a6827fa395a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
