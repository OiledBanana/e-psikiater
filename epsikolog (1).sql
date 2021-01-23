-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 01, 2020 at 03:58 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epsikolog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE `admin_register` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@epsikolog.org', 'admin'),
(2, 'rizal', 'admrizal@epsikolog.org', 'rizal'),
(3, 'gita', 'admgita@epsikolog.org', 'gita'),
(4, 'angel', 'admangel@epsikolog.org', 'angel');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `username`, `email`, `password`, `profile_picture`) VALUES
(1, 'Syahrizal Hanif', 'rzlco', 'syahrizalhanif@epsikolog.org', '123', 'IMG_1181.JPG'),
(2, 'Erlina Rizky', 'erlinarr', 'erlinarr@yahoo.com', 'erlinarr', '18.jpg'),
(3, 'Veronica Joana', 'veronicajo', 'veronicajo@yahoo.com', 'veronicajo', '19.jpg'),
(5, 'Jessica Alexandra', 'jessicaalex', 'jessicaalex@yahoo.com', 'kessicaalex', '2.jpg'),
(6, 'Joshua Abram', 'joshuaa', 'joshuaa@yahoo.com', 'joshuaa', '3.jpg'),
(7, 'Kelvin Batara', 'kelvinbatara', 'kelvinbatara@yahoo.com', 'kelvinbatara', '4.jpg'),
(8, 'Ananda Arif', 'anandaar', 'anandaar@gmail.com', 'anandaadr', '5.jpg'),
(9, 'Silvia Sonia', 'silviaas', 'silviaas@gmail.com', 'silviaas', '6.jpg'),
(10, 'Dea Natasya', 'deanat', 'deanat@yahoo.com', 'deanat', '7.jpg'),
(11, 'Desi Natalia', 'desinatalia', 'desinatalia@yahoo.com', 'desinatalia', '8.jpg'),
(12, 'Keysa Cinta', 'keysacinta', 'keysacinta@gmail.com', 'leysacinta', '9.jpg'),
(13, 'Nova Uliyana', 'novauliyana', 'novauliyana@gmail.com', 'novauliyana', '10.jpg'),
(14, 'Billy Calvindo', 'bcalvindo', 'bcalvindo@gmail.com', 'bcalvindo', '11.jpg'),
(15, 'Ahmad Gifari', 'gifarii', 'gifarii@gmail.com', 'gifarii', '12.jpg'),
(16, 'Melati Sinta', 'melsinta', 'melsinta@gmailcom', 'melsinta', '13.jpg'),
(17, 'Daniel Bastian', 'danielbas', 'danielbas@yahoo.com', 'danielbas', '14.jpg'),
(18, 'Dian Harahap', 'dianhrhp', 'dianhrhp@gmail.com', 'dianhrhp', '15.jpg'),
(19, 'Fauziyah Rahmawati', 'fauziyahr', 'fauziyahr@gmail.com', 'fauziyahr', '16.jpg'),
(20, 'Vera Ardiani', 'veraardiani', 'veraardiani@gmail.com', 'veraardiani', '17.jpg'),
(25, 'Gita Jassinda', 'gigi', 'gitaajasinda99@gmail.com', 'gigi', 'IMG_1458.JPG'),
(27, 'Oktrichavita Jassinda', 'ochanyaw', 'oktrichavitajk@gmail.com', '123', '1688340d-1440-4882-a7d6-788b2c17d71d.jpg'),
(28, 'Angelia Putri', 'angeliaputri', 'angeliaputri81@gmail.com', 'angel', '');

-- --------------------------------------------------------

--
-- Table structure for table `beli_obat`
--

CREATE TABLE `beli_obat` (
  `id` int(100) NOT NULL,
  `id_diagnosa` int(100) NOT NULL,
  `id_obat` int(100) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beli_obat`
--

INSERT INTO `beli_obat` (`id`, `id_diagnosa`, `id_obat`, `jumlah`) VALUES
(1, 7, 1, 200),
(4, 8, 1, 5000),
(5, 27, 2, 2),
(7, 29, 1, 500),
(8, 30, 1, 10),
(9, 7, 2, 200),
(10, 7, 1, 1),
(11, 30, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(100) NOT NULL,
  `id_rs` int(100) NOT NULL,
  `id_anggota` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `id_rs`, `id_anggota`, `nama`, `alamat`, `tanggal`) VALUES
(1, 8, 1, 'Syahrizal Hanif', 'Kartasura', '2019-11-27 20:00:00'),
(2, 16, 18, 'Dian Harahap', 'Surakarta', '2020-04-20 20:00:00'),
(3, 18, 7, 'Kelvin Batara', 'Solo', '2019-11-05 12:00:00'),
(4, 10, 14, 'Billy Calvindo', 'Bandung', '2020-08-20 20:00:00'),
(5, 9, 3, 'Veronica Joana', 'Jakarta', '2019-11-12 10:00:00'),
(6, 7, 13, 'Nova Uliyana', 'Madiun', '2019-09-12 10:00:00'),
(7, 6, 2, 'Erlina Rizky', 'Madiun', '2019-11-14 13:00:00'),
(8, 19, 15, 'Ahmad Gifari', 'Cilacap', '2019-12-20 20:00:00'),
(9, 15, 12, 'Keysa Cinta', 'Bandung', '2019-11-23 16:00:00'),
(10, 12, 9, 'Silvia Sonia', 'Jakarta', '2019-11-21 17:00:00'),
(12, 7, 25, 'Gita Jassinda', 'graha 9', '2019-11-05 09:01:00'),
(13, 12, 25, 'Gita Jassinda', 'graha 9', '2019-11-08 10:00:00'),
(14, 12, 25, 'Gita Jassinda', 'graha 9', '2019-11-05 12:00:00'),
(15, 66, 1, 'Syahrizal Hanif', 'Kartasura', '2019-12-23 20:00:00'),
(16, 2, 1, 'Syahrizal Hanif', 'Kartasura', '2019-12-22 22:22:00'),
(18, 12, 27, 'Oktrichavita Jassinda', 'graha 9', '2019-11-30 22:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `booking_dokter`
--

CREATE TABLE `booking_dokter` (
  `id` int(100) NOT NULL,
  `id_booking` int(100) NOT NULL,
  `id_dokter` int(100) NOT NULL,
  `id_rs` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_dokter`
--

INSERT INTO `booking_dokter` (`id`, `id_booking`, `id_dokter`, `id_rs`) VALUES
(1, 16, 2, 2),
(2, 15, 1, 66);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id` int(100) NOT NULL,
  `id_konsultasi` int(100) NOT NULL,
  `diagnosa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosa`
--

INSERT INTO `diagnosa` (`id`, `id_konsultasi`, `diagnosa`) VALUES
(7, 1, 'Terlalu banyak tekanan dari diri sendiri maupun lingkungan'),
(8, 2, 'Depresi bisa disebabkan oleh faktor genetik ataupun lingkungan. Cara mengatasinya dirumah yaitu dengan jangan menyendiri, olahraga teratur, konsumsi makanan bervitamin'),
(10, 4, 'Hal ini terjadi karena terlalu banyak berfikir negatif tentang diri sendiri. Cara mengatasinya yaitu dengan berfikir positif dan latih penerimaan dan perbaikan diri.'),
(11, 5, 'Kesepian umunya terjadi karena transisi kehidupan dan keterpisahan. Cobalah untuk menyibukkan diri untuk mengatasi masalah tersebut.'),
(12, 6, 'Faktor umum yang terkena penyakit ini adalah riwayat skizofrenia pada anggota keluarga lainnya. skizofrenia merupakan penyakit yang diderita seumur hidup. Tidur teratur dan olahraga rutin adalah kunci untuk meredakan penyakit ini.'),
(13, 7, 'Penyebab anoreksia nervosa tidak sepenuhnya dipahami. Hal ini diduga berkembang dari campuran fisik, emosional, dan pemicu sosial.'),
(14, 8, 'Gangguan disosiatif identitas, yang dikenal juga dengan gangguan kepribadian majemuk merupakan salah satu gangguan jiwa yang berasal dari trauma masa kecil dan remaja. Pengalaman traumatis masa lalu yang cukup ekstrim mampu membentuk dua atau lebih keprib'),
(15, 9, 'Masalah yang biasanya timbul akibat depresi biasanya berupa ganguan kecemasan, panik, atau fobia sosial. Cara mengatasinya dengan Berpikir Positif dan berolahraga'),
(16, 10, 'Tarik napas dalam-dalam. Menarik dan melepaskan napas secara perlahan merupakan teknik pernapasan dalam meditasi sederhana yang mampu meredakan amarah sekaligus stres.'),
(17, 11, 'Pengobatan mysophobia sama seperti terapi fobia pada umumnya, yang biasanya mencakup psikoterapi CBT (untuk menghentikan perilaku obsesif, gejala, dan memperbaiki pola pikir), obat-obatan medis (kombinasi antidepresan, beta-blocker, dan antikecemasan), ma'),
(18, 12, 'Self-blame atau menyalahkan diri sendiri merupakan sebuah perasaan yang tidak puas dengan kegagalan, mengalami keputusasaan, dan kadang berakhir dengan depresi. Bagi beberapa orang, mengakui kesalahan diri sendiri merupakan salah satu bagian evaluasi, tet'),
(19, 13, 'Cara mengurangi sifat perfeksionis adalah  ingat tidak ada yang sempurna di dunia ini, apapun itu. Dan proses yang wajar adalah satu hal yang sangat luar biasa kalau kita bisa jalani itu.'),
(20, 14, 'Banyak istirahat dan makan yang cukup'),
(21, 15, ' Ketahui Cara Efektif Mengatasi Kecemasan Berlebihan Penanganan gangguan kecemasan berlebihan umumnya dapat dilakukan dengan psikoterapi, pemberian obat, atau dengan gabungan keduanya. Berikut ini jenis terapi psikologis yang umumnya akan dilakukan, yaitu'),
(22, 16, 'Perubahan mood pada penderita bipolar biasanya disertai perubahan ekstrem yang menyangkut energi, aktivitas, pola tidur, dan perilaku sehari-hari. Perawatan bagi penderita bipolar disorder tidak dapat menyembuhkan penderita namun dapat menstabilkan peruba'),
(23, 17, 'Gangguan kepribadian adalah suatu kondisi yang menyebabkan penderitanya memiliki pola pikir dan perilaku yang tidak sehat dan berbeda dari orang normal. Selain pola pikir yang tidak sehat, kondisi yang dikategorikan sebagai penyakit mental ini juga bisa m'),
(24, 18, 'Kleptomania merupakan jenis gangguan mental yang membuat penderitanya sulit untuk mengendalikan dorongan (impuls) untuk mencuri. Tindakan pencurian oleh penderita kleptomania dilakukan secara tiba-tiba, tanpa direncanakan. Berbeda dengan pencuri pada umum'),
(25, 19, 'Penanganan serangan panik bertujuan untuk mengurangi intensitas dan frekuensi sarangan agar kualitas hidup bertambah baik. Penanganan dapat dilakukan pemberian obat dan dengan psikoterapi. Keduanya dapat dilaksanakan secara bersamaan atau hanya satu saja,'),
(26, 20, 'Bulimia atau bisa disebut dalam istilah medisnya bulimia nervosa adalah gangguan makan yang serius dan berpotensi mengancam jiwa. Penyakit ini termasuk dalam kategori gangguan mental yang berkerkaitan dengan rasa rendah diri tingkat ekstrem, kecanduan min'),
(27, 22, 'minum obat'),
(29, 26, 'liburan'),
(30, 27, 'minum obat');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(100) NOT NULL,
  `id_rs` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `id_rs`, `nama`, `alamat`) VALUES
(1, 66, 'Edi Soesilo', 'Surakarta'),
(2, 2, 'Jarwo Sutedjo', 'Kartasura'),
(4, 12, 'Ochanyaw', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `hlm_utama`
--

CREATE TABLE `hlm_utama` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hlm_utama`
--

INSERT INTO `hlm_utama` (`id`, `nama`, `deskripsi`) VALUES
(1, 'e-psikiater', '										E-Psikiater hadir untuk menjawab kebutuhan kesehatan mentalmu. E-Psikiater dapat membantumu memahami dirimu lebih jauh, mengelola emosi, berkonsultasi secara online hingga bertatap muka langsung dengan para psikiater ahli di Indonesia.\"\r\n					\"\r\n					');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_obat`
--

CREATE TABLE `jenis_obat` (
  `id` int(100) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `harga_obat` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_obat`
--

INSERT INTO `jenis_obat` (`id`, `nama_obat`, `harga_obat`) VALUES
(1, 'Inex', 100),
(2, 'Tramadol', 50);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `isi` varchar(500) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_artikel`, `nama`, `isi`, `tanggal`) VALUES
(1, 1, 'Angelia', 'Mental health itu emang penting banget !', '2019-11-26'),
(2, 2, 'Vera Ardiani', 'Sebagai anak muda kita harusnya bisa lebih memperhatikan dampak penggunaan media sosial buat hidup kita', '2019-11-26'),
(3, 2, 'Angelia', 'Bener bangett!', '2019-11-26'),
(4, 5, 'Veronica Joana', 'Bener bangett', '2019-11-27'),
(5, 5, 'Kelvin Batara', 'Keren!', '2019-11-27'),
(6, 2, 'Gita Jassinda', 'Apakah seseorang yang terkena penyakit Dissociative Identity Disorder (DID) itu sama dengan terkena gangguan mental?', '2019-11-30'),
(7, 1, 'Melati Sinta', 'Mantapp', '2019-11-30'),
(8, 4, 'Ananda Arif', 'Bad Joker :(', '2019-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id` int(100) NOT NULL,
  `id_anggota` int(100) NOT NULL,
  `keluhan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id`, `id_anggota`, `keluhan`) VALUES
(1, 1, 'Stress jiwa'),
(2, 10, 'Depresi'),
(4, 17, 'Tidak nyaman dengan diri sendiri'),
(5, 6, 'Kesepian dan merasa terasingkan'),
(6, 7, 'Skizofrenia'),
(7, 11, 'Anorexia nervosa'),
(8, 9, 'Gangguan disosiatif'),
(9, 20, 'Depresi'),
(10, 18, 'Stress'),
(11, 15, 'Terus-menerus mencuci tangan karena takut secara berlebihan kepada kuman'),
(12, 12, 'Menyalahkan diri sendiri'),
(13, 16, 'Perfeksionis'),
(14, 3, 'Lelah'),
(15, 2, 'Gangguan kecemasan'),
(16, 5, 'Bipolar'),
(17, 13, 'Gangguan kepribadian'),
(18, 8, 'Kleptomania'),
(19, 19, 'Gangguan panik'),
(20, 14, 'Makan berlebihan kemudian memuntahkannya secara sengaja'),
(22, 25, 'sakit perut'),
(26, 25, 'Stress tiada tara'),
(27, 25, 'sakit paru'),
(28, 1, 'jarang ibadah');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `nama`, `deskripsi`) VALUES
(1, 'Konsultasi', '					E-Psikiater memiliki layanan untuk pasien yang ingin berkonsultasi secara online dengan para psikiater ahli. Pasien bisa secara bebas memberitahukan keluhannya dan psikiater dari rumah sakit tertentu akan memberikan hasil diagnosa.\"\r\n					'),
(2, 'Booking', '					E-Psikiater memiliki layanan untuk pasien yang ingin bertemu langsung dengan para psikiater dari rumah sakit pilihan untuk berkonsultasi masalah kesehatan. Pasien bisa bebas memilih rumah sakit dan tanggal untuk bertemu dengan psikiater.\"\r\n					');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `id` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `links` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id`, `title`, `subtitle`, `description`, `links`) VALUES
(1, 'MENTAL HEALTH, SEBERAPA PENTINGNYA ITU?', 'MENTAL HEALTH', 'Kesehatan mental yang baik adalah kondisi ketika batin kita berada dalam keadaan tenteram dan tenang, sehingga memungkinkan kita untuk menikmati kehidupan sehari-hari dan menghargai orang lain di sekitar. Apabila kesehatan mental seseorang terganggu, ia akan mengalami gangguan suasana hati, kemampuan berpikir, serta kendali emosi yang dapat mengarah pada perilaku buruk. Naura, seorang mahasiswi Universitas Indonesia jurusan Sastra Inggris, merupakan salah satu orang yang cukup aware tentang masalah ini. Ia menegaskan bahwa mental health itu sangat penting. Mengapa? Karena untuk menjalani aktivitas sehari-hari, dibutuhkan kesehatan baik dari fisik dan mental yang bagus. Dengan mengerti bahwa menjaga kesehatan mental baik diri sendiri maupun orang lain adalah penting, di sinilah kita akan semakin memahami dan menghargai orang lain dengan segala kekurangan dan masalah di dalam dirinya', 'https://communication.binus.ac.id/2019/01/22/mental-health-seberapa-pentingnya-itu/'),
(2, 'Media Sosial Berdampak Buruk bagi Kesehatan Mental Masyarakat Indonesia?', 'Mental Issue', 'Selama ini, media sosial diketahui memiliki dampak bagi kesehatan mental. Baru-baru ini, sebuah studi yang dilakukan di Indonesia menegaskan tentang hal ini. Melansir EurekAlert pada Minggu (23/6/2019), penelitian tersebut dilakukan oleh Sujarwoto Sujarwoto, Gindo Tampubolon, dan Adi Cilik Pierewan. Ketiganya melihat dampak khusus dari media sosial terhadap kesehatan mental di negara berkembang yaitu Indonesia. Di Indonesia, pengguna Facebook mencapai 54 juta. Ini menjadikannya terbesar keempat di dunia. Sementara, 22 juta masyarakat adalah pengguna Twitter, membuatnya jadi terbesar kelima di dunia. Laporan dari Twitter juga menyebutkan, 384 cuitan diunggah dari Indonesia setiap detiknya. Para penulis meminta agar ada intervensi pada kesehatan masyarakat ini. Selain itu, dibutuhkan kebijakan mengenai anjuran penggunaan media sosial secara bijaksana demi mencegah meningkatnya masalah mental terkait penggunaan teknologi ini secara berlebihan di Indonesia. \"Kami ingin melihat pejabat kesehatan masyarakat, berpikir kreatif tentang bagaimana kita bisa mendorong masyarakat untuk beristirahat dari media sosial atau menyadari konsekuensi negatif yang bisa ditimbulkannya terhadap kesehatan mental.\"', 'https://www.liputan6.com/health/read/3996102/media-sosial-berdampak-buruk-bagi-kesehatan-mental-masyarakat-indonesia'),
(3, 'Indonesia Darurat Kesehatam Mental', 'Mental Health', 'Kesehatan mental masih menjadi anak tiri, masih dianggap remeh, sehingga tidak heran bila banyak orang yang memiliki masalah dengan kesehatan mentalnya diabaikan. Masyarakat Indonesia masih memberi stigma yang uruk terhadap isu-isu kesehatan mental. Penderita gangguan mental di Indonesia banyak yang menerima perlakuan diskriminatif dan tidak manusiawi.\r\nPenanganan yang salah sering terjadi. Masih banyak orang-orang dalam masyarakat tradisional yang beranggapan bahwa gangguan kejiwaan disebabkan oleh roh jahat, perbuatan dosa, tidak beriman, hingga dikutuk. Alih-alih diberikan terapi pendekatan psikologi, para penderita gangguan kejiwaan ini justru dibawa ke paranormal, lebih pahit lagi dikurung dan dipasung.\r\nBeberapa kasus di Indonesia, penderita gangguan kejiwaan banyak yang dipasung ataupun dikurung di kandang hewan oleh keluarga dan masyarakat sekitar. Praktik pasung masih sering ditemukan. Setidaknya, menurut data dari Kemensos hanya ada 6 provinsi saja yang sudah terbebas dari cara pasung, yakni: Bengkulu, Kalimantan Barat, Kalimantan Timur, Bali, Nusa Tenggara Timur, dan Bangka Belitung. \r\n', 'https://www.kompasiana.com/juno_naro/5d9d8a21097f3635476a8093/indonesia-darurat-kesehatan-mental?page=all'),
(4, 'Banyak anak muda klaim mengidap gangguan mental setelah nonton Joker: bahaya self diagnosis', 'Mental health', 'Belakangan ini banyak film-film mengangkat bahasan persoalan gangguan mental seperti film Joker. Berkat film-film ini, banyak orang mulai peduli pada persoalan kesehatan mental dan mulai peduli pada orang yang mengidapnya. Namun ada satu reaksi lain yang timbul: ada anak-anak muda yang mengglorifikasi gangguan mental sebagai sesuatu yang keren.\r\nBanyak anak muda tanpa bantuan profesional kesehatan mental tak ragu menyatakan di media sosial bahwa mereka mengalami gangguan mental (self diagnosis). Padahal self diagnosis ini berbahaya baik secara fisik maupun psikis. Sekarang hampir semua orang Indonesia baik muda maupun lanjut usia memiliki internet di genggamannya hampir 24 jam sehari. Kini, ketika seseorang merasakan perasaan tidak nyaman dan kebingungan mengenai kondisi mental mereka, ia mungkin mencoba mencari penjelasan mengenai kesehatan mental di internet dan kemudian melakukan self-diagnosis gangguan mental. Self-diagnosis berbahaya karena orang mungkin sampai pada kesimpulan yang salah terkait kondisi kesehatannya dan mengambil keputusan yang salah juga. Gangguan mental itu tidak menyenangkan dan sangat menghambat potensi. Kita ambil saja contoh karakter Joker di film. Sepanjang film, ia mungkin ada kalanya terlihat perkasa dan hebat, tetapi ia tidak senang. Ia tidak bahagia. Ia tidak tenang. Ia tidak ingin berada dalam kondisi itu\r\n', 'https://theconversation.com/banyak-anak-muda-klaim-mengidap-gangguan-mental-setelah-nonton-joker-bahaya-self-diagnosis-125061'),
(5, 'Generasi Milenial Mudah Alami Gangguan Mental', 'Mental Issue', 'Gangguan mental bisa berawal dari stres yang terabaikan. Mengingat mencegah lebih baik dari pada mengobati maka kita perlu peduli pada kesehatan jiwa kita dan keluarga. Jika Anda pernah mendengar keluhan anggota keluarga, seperti kurang tidur, banyak pikiran, dan stres. Mulai perhatikan apa masalahnya, bagaimana kualitas hidup mereka, dan apakah bisa ditangani segera karena stres bisa dialami siapa saja. pada usia milenial terjadi perubahan fisik, emosional, psikologis, finansial, dan lingkungan pergaulan. Perubahan ini adalah waktu transisi bagi mereka untuk menjadi pribadi yang matang tetapi jika terjadi gangguan dan tidak siap maka dapat menggangu mental mereka. Perubahan lingkungan ikut memicu generasi milenial rentan pada gangguan mental. Salah satunya, adanya kemajuan teknologi yang menuntut kemampuan beradaptasi dari penggunanya tetapi sayangnya kebanyakan dari milenial tidak mampu memanfaatkan dengan baik. Persoalan mental milenial tidak hanya soal keliru dan salah menggunakan teknologi dan media sosial. Ada juga konsep perfeksionisme yang sangat dekat dengan lingkungan milenial, yaitu ekspektasi tinggi terhadap dirinya dan pada berbagai hal di sekitarnya. Segala aspek dalam kehidupan tentunya turut berperan untuk menciptakan sistem pendukung (support system) bagi penderita gangguan mental. Masyarakat harus menyadari dan berhenti  menganggap orang dengan gangguan mental sebagai sosok yang aneh, hina, dan asing. Semua penderita tentunya sedang berjuang untuk menerima dirinya dan ingin sembuh. Ini membutuhkan banyak dukungan yang kuat.', 'https://www.bantennews.co.id/generasi-milenial-mudah-alami-gangguan-mental/'),
(6, 'Mengenal Jenis dan Gangguan Kesehatan Mental', 'Mental Issue', 'Kesehatan mental sangat mempengaruhi aspek kehidupan kita sehari-hari karena mencakup kemampuan seseorang untuk menikmati hidup. Kesehatan mental sangat penting untuk mencapai keseimbangan antara aktivitas kehidupan dan upaya untuk mencapai ketahanan psikologis. Jenis-jenis gangguan kesehatan mental Jenis penyakit mental yang paling umum adalah gangguan kecemasan, gangguan mood, dan gangguan skizofrenia. Gangguan kecemasan adalah jenis penyakit mental yang paling umum. Orang yang mengalami kondisi ini biasanya memiliki ketakutan atau kecemasan parah, yang terkait dengan objek atau situasi tertentu. Gangguan ini juga dikenal sebagai gangguan afektif atau gangguan depresi. Gangguan ini adalah kondisi yang sangat kompleks. Individu memiliki pikiran yang tampak terpecah-pecah juga kesulitan memproses informasi. ', 'https://www.kompas.com/tren/read/2019/10/10/210500265/mengenal-jenis-dan-gangguan-kesehatan-mental-?page=all');

-- --------------------------------------------------------

--
-- Table structure for table `rs`
--

CREATE TABLE `rs` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rs`
--

INSERT INTO `rs` (`id`, `nama`, `email`, `alamat`) VALUES
(1, 'R.S. Kasih Ibu', 'admin@rskasihibu.com', 'Surakarta'),
(2, 'R.S. Karima Utama', 'admin@rskarimaumata.com', 'Kartasura'),
(3, 'R.S. Otorita', 'admin@rsotorita.com', 'Malang'),
(4, 'R.S. Budi Rosari', 'admin@rsbudirosari.com', 'Solo'),
(5, 'R.S Budi Kemuliaan', 'admin@rsbudikemuliaan.com', 'Jakarta'),
(6, 'R.S Awal Bros', 'admin@rsawalbros.com', 'Bandung'),
(7, 'R.S. Santa Elisabeth', 'admin@rssantaelisabeth.com', 'Madiun'),
(8, 'R.S. Muhammadiyah', 'admin@rsmuhammadiyah.com', 'Bandung'),
(9, 'R.S. Cipto Mangunkusumo', 'admin@rsciptomangunkusumo.com', 'Yogyakarta'),
(10, 'R.S. Harapan Bunda', 'admin@rsharapanbunda.com', 'Kebumen'),
(11, 'R.S. Santa Clara', 'admin@rssantaclara.com', 'Madiun'),
(12, 'R.S. Santo Boromeus', 'admin@rssantoboromeus.com', 'Bandung'),
(13, 'R.S. Santo Petrus', 'admin@rssantopetrus.com', 'Kediri'),
(14, 'R.S. Immanuel', 'admin@rsimmanuel.com', 'Cilacap'),
(15, 'R.S. Advent Bandung', 'admin@rsadvent.com', 'Bandung'),
(16, 'R.S. Harapan Sehat', 'admin@rsharapansehat.com', 'Purwokerto'),
(17, 'R.S. Umum Bangsa', 'admin@rsumumbangsa.com', 'Surakarta'),
(18, 'R.S. Kebon Jati', 'admin@rskebonjati.com', 'Jakarta'),
(19, 'R.S. Rajawali', 'admin@rsrajawali.com', 'Cikampek'),
(20, 'R.S. Pondok Asih', 'admin@rspondokasih.com', 'Tanggerang'),
(66, 'Klinik', 'klinik@epsikolog.org', '');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id`, `nama`, `email`, `pesan`) VALUES
(2, 'Syahrizal Hanif', 'syahrizalhanif@gmail.com', 'mantap'),
(5, 'Jessica Alexandra', 'jessicaalex@yahoo.com', 'Aplikasinya bagus bangett!'),
(6, 'Ahmad Gifari', 'gifarii@gmail.com', 'Sangat Membantu'),
(7, 'Lucas Brian', 'lucassbri@yahoo.com', 'Yeahhh 10/10!'),
(8, 'Veronica Joana', 'veronicajo@yahoo.com', 'Aplikasinya sudah bagus hanya saja saya tidak bisa memilih siapa psikolog saya :(');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_register`
--
ALTER TABLE `admin_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beli_obat`
--
ALTER TABLE `beli_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_diagnosa` (`id_diagnosa`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rs` (`id_rs`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `booking_dokter`
--
ALTER TABLE `booking_dokter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_diagnosa` (`id_booking`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_rs` (`id_rs`);

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_konsultasi` (`id_konsultasi`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rs` (`id_rs`);

--
-- Indexes for table `hlm_utama`
--
ALTER TABLE `hlm_utama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_obat`
--
ALTER TABLE `jenis_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rs`
--
ALTER TABLE `rs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_register`
--
ALTER TABLE `admin_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `beli_obat`
--
ALTER TABLE `beli_obat`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `booking_dokter`
--
ALTER TABLE `booking_dokter`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hlm_utama`
--
ALTER TABLE `hlm_utama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenis_obat`
--
ALTER TABLE `jenis_obat`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rs`
--
ALTER TABLE `rs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beli_obat`
--
ALTER TABLE `beli_obat`
  ADD CONSTRAINT `beli_obat_ibfk_1` FOREIGN KEY (`id_diagnosa`) REFERENCES `diagnosa` (`id`),
  ADD CONSTRAINT `beli_obat_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `jenis_obat` (`id`);

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_rs`) REFERENCES `rs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking_dokter`
--
ALTER TABLE `booking_dokter`
  ADD CONSTRAINT `booking_dokter_ibfk_1` FOREIGN KEY (`id_booking`) REFERENCES `booking` (`id`),
  ADD CONSTRAINT `booking_dokter_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id`),
  ADD CONSTRAINT `booking_dokter_ibfk_3` FOREIGN KEY (`id_rs`) REFERENCES `rs` (`id`);

--
-- Constraints for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD CONSTRAINT `diagnosa_ibfk_1` FOREIGN KEY (`id_konsultasi`) REFERENCES `konsultasi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`id_rs`) REFERENCES `rs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `konsultasi_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
