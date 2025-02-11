-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2025 at 02:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brightmind`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `title`, `content`, `created_at`, `updated_at`, `gambar`) VALUES
(1, 'Kenakalan Remaja', 'Kenakalan remaja merupakan salah satu contoh fenomena sosial yang sering dijumpai di kehidupan masyarakat pada masa sekarang ini. Kenakalan remaja dapat didefinisikan sebagai suatu penyimpangan oleh anak usia remaja dalam bentuk tindakan, aktivitas, maupun perbuatan yang melanggar kaidah nilai sosial dan norma yang berlaku.  \n\nBiasanya dilakukan oleh anak-anak berusia 13 sampai dengan 18 tahun, yang dikategorikan sebagai anak usia remaja. Kenakalan remaja merupakan suatu bentuk pengabaian sosial yang mengakibatkan gejala patologis sosial di masyarakat, khususnya kaum remaja kemudian dapat menyebabkan suatu perilaku menyimpang.\n\nDalam objek kajian ilmu sosiologi, kenakalan remaja dikenal dengan istilah delikuensi. Dimana istilah delikuensi dalam Kamus Besar Bahasa Indonesia didefinisikan sebagai tingkah laku yang menyalahi norma dan hukum yang berlaku dalam suatu masyarakat.\n\nKenakalan remaja (delikuensi) merupakan tindakan maupun aktivitas anak-anak usia remaja yang dilakukan dalam bentuk yang beragam, mulai dari kenakalan remaja biasa yang bersifat sekedar dilakukan secara iseng, misalnya vandalisme (mencorat-coret fasilitas umum) hingga pada bentuk tindak kejahatan, seperti aksi perkelahian antar pelajar, minum minuman keras, penyalahgunaan narkoba, perampokan, seks bebas, pemerasan, pencurian, bahkan pembunuhan.\n\nKenakalan remaja pada umumnya ditandai oleh dua ciri, yang pertama adanya keinginan untuk melawan dalam bentuk tindakan, misalnya aksi radikalisme. Kemudian yang kedua, adanya sikap acuh tak acuh yang biasanya disertai dengan rasa kecewa terhadap kondisi tertentu yang sedang terjadi di masyarakat.', '2025-02-02 05:59:40', '2025-02-11 11:14:18', 'article_kenakalan_remaja.jpg'),
(2, 'Akibat Melakukan Seks Usia Dini', 'Pada usia dini, mungkin seseorang belum paham cara melakukan hubungan intim secara sehat.\n\nSelain itu, terdapat kemungkinan memiliki banyak pasangan seksual sepanjang hidupnya jika hubungan intim dilakukan sejak usia dini. Lebih lanjut, individu ini mungkin belum paham perlunya memakai perlindungan, seperti kondom, saat melakukan hubungan seksual berisiko. Jika sudah paham pun, anak mungkin merasa malu atau sungkan untuk membelinya.\n\nApa saja akibatnya jika seseorang berhubungan intim pada usia dini? Simak penjelasan lengkapnya berikut ini.\n\n1. Hubungan Seksual Berisiko\nPada usia dini, mungkin seseorang belum paham cara melakukan hubungan intim secara sehat.\nSelain itu, terdapat kemungkinan memiliki banyak pasangan seksual sepanjang hidupnya jika hubungan intim dilakukan sejak usia dini.\n\n2. Dampak Psikologis\nAkibat seks usia dini tidak berhenti di situ. Faktanya, tindakan tersebut ternyata juga bisa memberikan dampak psikologis bagi sang anak. Apalagi jika hubungan seksual ini dilakukan di bawah paksaan.\n\nAnak yang dipaksa untuk melakukan seks usia dini bisa saja berujung pada terjadinya trauma berkepanjangan.\n\nSelain itu, anak juga bisa menjadi sosok yang rendah diri atau merasa tidak berharga karena dia sulit mengungkapkan hal yang dirasakannya akibat tertekan oleh paksaan. Anak juga jadi tidak gampang percaya dengan orang lain, terutama sosok lawan jenisnya. Selain itu, bisa muncul perasaan bersalah atau malu karena pernah mengalami kondisi berhubungan seksual yang dipaksakan.', '2025-02-02 05:59:40', '2025-02-11 11:15:30', 'article_sex_bebas.jpg'),
(3, 'Bahaya Narkoba Bagi Kesehatan', 'Peredaran dan dampak narkoba saat ini sudah sangat meresahkan. Mudahnya mendapat bahan berbahaya tersebut membuat penggunanya semakin meningkat. Tak kenal jenis kelamin dan usia, semua orang berisiko mengalami kecanduan jika sudah mencicipi zat berbahaya ini.\n\nMeski ada beberapa jenis yang diperbolehkan dipakai untuk keperluan pengobatan, namun tetap saja harus mendapatkan pengawasan ketat dari dokter. Ada banyak bahaya narkoba bagi hidup dan kesehatan, di antaranya adalah:\n\nDehidrasi\nPenyalahgunaan zat tersebut bisa menyebabkan keseimbangan elektrolit berkurang. Akibatnya badan kekurangan cairan. Jika efek ini terus terjadi, tubuh akan kejang-kejang, muncul halusinasi, perilaku lebih agresif, dan rasa sesak pada bagian dada. Jangka panjang dari dampak dehidrasi ini dapat menyebabkan kerusakan pada otak.\n\nHalusinasi\nHalusinasi menjadi salah satu efek yang sering dialami oleh pengguna narkoba seperti ganja. Tidak hanya itu saja, dalam dosis berlebih juga bisa menyebabkan muntah, mual, rasa takut yang berlebih, serta gangguan kecemasan. Apabila pemakaian berlangsung lama, bisa mengakibatkan dampak yang lebih buruk seperti gangguan mental, depresi, serta kecemasan terus-menerus.\n\nGangguan Kualitas Hidup\nBahaya narkoba bukan hanya berdampak buruk bagi kondisi tubuh, penggunaan obat-obatan tersebut juga bisa mempengaruhi kualitas hidup misalnya susah berkonsentrasi saat bekerja, mengalami masalah keuangan, hingga harus berurusan dengan pihak kepolisian jika terbukti melanggar hukum.', '2025-02-02 05:59:40', '2025-02-11 11:15:30', 'article_stop_narkoba.jpg'),
(4, 'Kesehatan Mental', 'Kesehatan jiwa atau sebutan lainnya kesehatan mental adalah kesehatan yang berkaitan dengan kondisi emosi, kejiwaan, dan psikis seseorang. Perlu kamu ketahui bahwa peristiwa dalam hidup yang berdampak besar pada kepribadian dan perilaku seseorang bisa berpengaruh pada kesehatan mentalnya.\n\nMisalnya, pelecehan saat usia dini, stres berat dalam jangka waktu lama tanpa adanya penanganan, dan mengalami kekerasan dalam rumah tangga. Berbagai kondisi tersebut bisa membuat kondisi kejiwaan seseorang terganggu, sehingga muncul gejala gangguan kesehatan jiwa.\n\nAkan tetapi, masalah kesehatan mental bisa mengubah cara seseorang dalam mengatasi stres, berhubungan dengan orang lain, membuat pilihan, dan memicu hasrat untuk menyakiti diri sendiri.\n\nBeberapa jenis gangguan mental yang umum terjadi antara lain depresi, gangguan bipolar, kecemasan, gangguan stres pasca trauma (PTSD), gangguan obsesif kompulsif (OCD), dan psikosis.\n\nAda beberapa kondisi yang bisa menjadi penyebab seseorang mengalami gangguan kesehatan jiwa, antara lain: \n\n- Cedera pada kepala.\n- Faktor genetik atau terdapat riwayat pengidap gangguan kesehatan jiwa dalam keluarga.\n- Kekerasan dalam rumah tangga atau bentuk pelecehan lainnya.\n- Adanya riwayat kekerasan saat kanak-kanak.\n- Memiliki kelainan senyawa kimia otak atau gangguan pada otak.\n- Mengalami diskriminasi dan stigma. \n\nKapan Harus ke Dokter?\nJika diri sendiri atau kerabat menunjukkan gejala masalah kesehatan jiwa secara terus-menerus dan tidak membaik, sebaiknya segera lakukan pemeriksaan ke dokter spesialis jiwa atau psikiater untuk mendapatkan pemeriksaan dan penanganan lebih lanjut.', '2025-02-02 05:59:40', '2025-02-11 11:15:30', 'article_kesehatan_mental.jpg'),
(5, 'Peran Orang Tua Terhadap Anak', 'Peran orang tua adalah cara yang digunakan oleh orang tua atau keluarga dalam menjalankan tugas dan tanggung jawab terhadap anak-anaknya dalam mengasuh, mendidik, melindungi, dan mempersiapkan anak dalam kehidupan bermasyarakat.\n\nPeran orang tua adalah pelaksanaan tanggung jawab sebagai orang tua dalam memenuhi kebutuhan-kebutuhan si anak, baik dari sudut organis-psikologi, antara lain makanan; maupun kebutuhan-kebutuhan psikis, seperti: kebutuhan akan perkembangan intelektual melalui  pendidikan, kebutuhan akan rasa dikasihi, dimengerti dan rasa aman melalui perawatan, asuhan, ucapan dan perlakuan-perlakuan.\n\nNamun, penelitian dengan kuat mendukung pentingnya keterlibatan orang tua.\n\nTidak peduli pendapatan atau latar belakang orang tua, keterlibatan mereka dalam pendidikan anak akan membuat anak lebih baik, termasuk memiliki nilai ujian yang lebih tinggi, bersekolah secara teratur, memiliki keterampilan sosial yang lebih baik, menunjukkan perilaku yang lebih baik, dan beradaptasi dengan baik di sekolah.\n\nSementara itu, laman Responsive Classroom menunjukkan bahwa tidak peduli pendapatan atau latar belakang orang tua, asal mereka terlibat dalam pendidikan anak akan membuat anak lebih baik.\n\n\nYakni, anak lebih cenderung memiliki nilai ujian yang lebih tinggi, bersekolah secara teratur.\n\nHingga memiliki keterampilan sosial yang lebih baik, menunjukkan perilaku yang lebih baik, dan beradaptasi dengan baik di sekolah.\n\nDukungan dan keterlibatan orang tua juga dapat bermanfaat bagi anak-anak dari segala usia pada tingkat perkembangan yang bahkan dapat melampaui nilai akademis.', '2025-02-02 05:59:40', '2025-02-11 11:15:30', 'article_peran_orang_tua.jpg'),
(6, 'Bahaya Merokok', 'Bahaya merokok bagi kesehatan tubuh tidak perlu diragukan lagi. Berbagai penyakit berbahaya dapat disebabkan oleh kebiasaan buruk ini. Tak hanya perokok aktif, rokok juga berbahaya bagi siapa pun yang menghirup asapnya atau perokok pasif.\n\nSetiap rokok yang Anda hisap bisa meningkatkan risiko terkena berbagai penyakit, seperti masalah kesuburan, penyakit jantung, stroke, dan masalah pada paru-paru, misalnya penyakit paru obstruktif kronis (PPOK) hingga kanker paru-paru.\n\nBahaya Merokok bagi Kesehatan\nKandungan zat kimia yang terdapat dalam rokok sangat berbahaya bagi kesehatan Anda dan orang-orang di sekitar Anda. Beberapa bahaya merokok bagi kesehatan adalah:\n\n1. Serangan jantung\nOrang yang sering merokok, baik merokok secara aktif atau hanya menghirup asap rokok dari orang sekitarnya, lebih rentan terkena penyakit kardiovaskular, termasuk serangan jantung dan stroke.\n\nRisiko ini bisa semakin meningkat pada perokok yang jarang berolahraga, kurang menjaga pola makan, dan mengalami stres.\n\n2. Kanker nasofaring\nBau mulut, gigi bernoda, gusi hitam, dan penyakit gusi merupakan efek yang kerap timbul akibat merokok. Tidak hanya itu, merokok juga bisa menimbulkan masalah serius lain, seperti kanker pada mulut, bibir, lidah, dan tenggorokan, maupun kanker nasofaring.\n\nKebiasaan merokok bisa mengganggu kesehatan dan mengurangi kualitas hidup Anda maupun orang di sekitar. Agar bahaya merokok tidak menghampiri, Anda sebaiknya tidak merokok atau bagi yang sudah merokok, cobalah untuk berhenti merokok.', '2025-06-02 05:59:40', '2025-02-11 11:15:30', 'article_stop_merokok.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL CHECK (`role` in ('user','admin')),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `role`, `created_at`) VALUES
(1, 'user123', 'user123', 'user', '2025-02-11 08:40:44'),
(2, 'admin', 'admin', 'admin', '2025-02-11 08:51:42'),
(4, 'user4', 'user4', 'user', '2025-02-11 08:42:26'),
(5, 'gabriel', 'gabriel27', 'user', '2025-02-11 08:58:21'),
(6, 'marcel', 'marcel', 'user', '2025-02-11 10:41:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
