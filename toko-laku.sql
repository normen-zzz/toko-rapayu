-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 15 Jun 2022 pada 09.54
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko-laku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `cookie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `cookie`) VALUES
(1, 'admin', '$2y$10$pKGfQG2etJ5lDW06PZncIOqY94RJTioYG4oM4n0/Up.cUpnX5HkRO', 'jVVei3128F6bfusLMDAJrdm2gHFoNlkOP4Mr5OvYWsmBjq6Wh8tGcQyaZSUpEBQT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `img` varchar(30) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id`, `img`, `url`) VALUES
(14, '1621434436735.jpg', 'https://kincaimedia.net/home/'),
(15, '1621434447920.png', 'https://kincaimedia.net/home/'),
(18, '1621435149605.jpg', 'https://kincaimedia.net/'),
(19, '1621435158507.jpg', 'https://kincaimedia.net/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `img` varchar(30) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `weight` int(11) NOT NULL,
  `ket` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `user`, `id_product`, `product_name`, `price`, `qty`, `img`, `slug`, `weight`, `ket`) VALUES
(34, 13, 2, 'Black Shark 2 Pro 8GB/128GB Include Rookie Kit', 7499000, 1, '1586623271686.jpg', 'black-shark-2-pro-8gb128gb-include-rookie-kit-iceberg-grey', 450, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `slug` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon`, `slug`) VALUES
(2, 'Komputer', '1621436631813.png', 'komputer'),
(3, 'Laptop', '1621436640667.jpg', 'laptop'),
(4, 'Gadget', '1621436649130.png', 'gadget'),
(6, 'Pakaian Pria', '1586527494296.png', 'pakaian-pria'),
(7, 'Pakaian Wanita', '1586527510434.png', 'pakaian-wanita');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cod`
--

CREATE TABLE `cod` (
  `id` int(11) NOT NULL,
  `regency_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cod`
--

INSERT INTO `cod` (`id`, `regency_id`) VALUES
(5, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cost_delivery`
--

CREATE TABLE `cost_delivery` (
  `id` int(11) NOT NULL,
  `destination` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cost_delivery`
--

INSERT INTO `cost_delivery` (`id`, `destination`, `price`) VALUES
(1, 177, 40000),
(2, 105, 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `email_send`
--

CREATE TABLE `email_send` (
  `id` int(11) NOT NULL,
  `mail_to` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `email_send`
--

INSERT INTO `email_send` (`id`, `mail_to`, `subject`, `message`) VALUES
(10, 22, 'Test', '<p>085157718575</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `page` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `footer`
--

INSERT INTO `footer` (`id`, `page`, `type`) VALUES
(1, 1, 1),
(2, 3, 1),
(3, 2, 2),
(4, 1, 1),
(5, 4, 1),
(6, 5, 1),
(7, 6, 2),
(8, 7, 2),
(9, 8, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `general`
--

CREATE TABLE `general` (
  `id` int(11) NOT NULL,
  `app_name` varchar(50) NOT NULL,
  `slogan` varchar(150) NOT NULL,
  `navbar_color` varchar(10) NOT NULL,
  `api_rajaongkir` varchar(70) NOT NULL,
  `host_mail` varchar(50) NOT NULL,
  `port_mail` varchar(10) NOT NULL,
  `crypto_smtp` varchar(20) NOT NULL,
  `account_gmail` varchar(50) NOT NULL,
  `pass_gmail` varchar(50) NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `whatsappv2` varchar(20) NOT NULL,
  `email_contact` varchar(50) NOT NULL,
  `server_api_midtrans` varchar(150) NOT NULL,
  `client_api_midtrans` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `general`
--

INSERT INTO `general` (`id`, `app_name`, `slogan`, `navbar_color`, `api_rajaongkir`, `host_mail`, `port_mail`, `crypto_smtp`, `account_gmail`, `pass_gmail`, `whatsapp`, `whatsappv2`, `email_contact`, `server_api_midtrans`, `client_api_midtrans`) VALUES
(1, 'TokoKu Laku', 'TokoKu Laku - Toko Online Blackexpo', '#005CAA', '0', 'mail.401xd.com', '465', '', 'vakbarrr@gmail.com', 'GIANAKBAR20', '085157718575', '6285157718575', 'vakbarrr@gmail.com', '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `grosir`
--

CREATE TABLE `grosir` (
  `id` int(11) NOT NULL,
  `min` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `img_product`
--

CREATE TABLE `img_product` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `img_product`
--

INSERT INTO `img_product` (`id`, `id_product`, `img`) VALUES
(1, 22, '1589840767903.jpg'),
(2, 22, '1589840786550.jpg'),
(5, 22, '1589840836102.jpg'),
(7, 29, '1621436002940.jpg'),
(8, 8, '1621436022420.jpg'),
(9, 8, '1621436027602.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `invoice_code` varchar(10) NOT NULL,
  `label` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `province` int(11) NOT NULL,
  `regency` int(11) NOT NULL,
  `district` varchar(50) NOT NULL,
  `village` varchar(50) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `address` text NOT NULL,
  `courier` varchar(5) NOT NULL,
  `courier_service` varchar(70) NOT NULL,
  `ongkir` varchar(10) NOT NULL,
  `total_price` int(11) NOT NULL,
  `total_all` int(11) NOT NULL,
  `date_input` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL,
  `resi` varchar(30) NOT NULL,
  `pay_status` varchar(30) NOT NULL,
  `link_pay` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `title`, `link`) VALUES
(1, 'Home', ''),
(2, 'Produk', ''),
(3, 'Testimoni', 'testimoni'),
(4, 'Kontak', 'contact'),
(7, 'Pembayaran', 'payment/confirmation');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `slug`) VALUES
(1, 'Tentang Kami', '<p>Lakukan tugas Anda dengan senang hati dan gunakan humor Anda di waktu kerja terutama saat sulit dan tegang-tegang, itulah salah satu budaya (fun) kami.</p><p>Religious, Passionate, Tough, Knowledgeable, Fun &amp; Customer Service adalah budaya-budaya yang ada di <a href=\"https://kincaimedia.net\">Kincaimedia.net</a>, dan kami sangat menjunjung tinggi budaya kami dengan cara memberikan yang terbaik bagi pelanggan, diri kita, keluarga, dan masyarakat.</p><p>&nbsp;</p><h2>Visi dan Misi</h2><h3>Visi</h3><p>\"Menjadi sebuah perusahaan kelas dunia dengan semangat pemanfaatan informasi teknologi, dan menjadi kebanggaan bangsa.\"</p><h3>Misi</h3><p>\"Menjadi webstore nomor satu di Indonesia yang menyediakan kelengkapan dan kemudahan belanja, serta memperhatikan dan memberikan pengalaman belanja yang berkesan kepada pelanggan, melalui nilai-nilai delapan dimensi pengalaman.\"</p><p>&nbsp;</p><h2>Sekapur Sirih</h2><p>Sejak awal <a href=\"https://kincaimedia.net\">Kincaimedia.net</a> berdiri, kami bertekad membangun bisnis yang berdaya tahan panjang. Mengutamakan citra merk dengan pelayanan dan menjadikannya bagian dari budaya kerja. Fokus pada pelayanan berarti memberi nilai tambah dalam setiap layanan. Sebab itulah mengapa pelanggan kami menekan tombol\'beli\' dan tetap kembali lagi di kemudian hari.</p><p>Menengok sejenak ke belakang, kami bersyukur fokus pada pelayanan dan \'human touch\' dalam membangun <a href=\"https://kincaimedia.net\">Kincaimedia.net</a>, yang dirumuskan dengan sebuah kalimat sederhana \'Pelayanan Dari Hati\'. Dan sekarang, kalimat ini telah menjadi esensi dalam setiap langkah yang kami lakukan, mudah dicerna tanpa perlu segala embel-embel dan frase-frase yang sulit untuk dipahami dalam melayani pelanggan kami.</p><p>Standar pelayanan kami pun semakin tinggi setiap tahun. Berinovasi dan menyajikan pengalamanan berbelanja yang berkesan, mulai dari produk yang lengkap, harga yang kompetitif, mudah dalam bertransaksi, jaminan purna jual, hingga kejutan-kejutan mengasyikkan untuk setiap pelanggan kami, yang menjadikan belanja di<a href=\"https://kincaimedia.net\">Kincaimedia.net</a> semakin nyaman, baik online maupun offline.</p><p>Untuk teman-teman komunitas <a href=\"https://kincaimedia.net\">Kincaimedia.net</a> yang bersama dengan kami sejak awal perkembangan internet dimulai di Indonesia, kami akan terus perhatikan dan senantiasa mengembangkan banyak fitur yang akan semakin asyik untuk saling bertemu, berbagi, berbincang, belajar, atau sekedar melakukan jual-beli produk. Offline store <a href=\"https://kincaimedia.net\">Kincaimedia.net</a> juga menjadi tempat untuk workshop, tempat berkumpul, dan ngobrol antar komunitas.</p><p>Akhirnya, saya sangat berbahagia <a href=\"https://kincaimedia.net\">Kincaimedia.net</a> dapat berkontribusi untuk negeri ini dan membawa nilai lebih untuk masyarakat Indonesia. Kami akan selalu berusaha dan mendorong diri kami sendiri untuk menjadi salah satu perusahaan berbasis teknologi yang menjadi kebanggaan bangsa Indonesia.</p>', 'about'),
(2, 'Kontak Kami', '<p>Hubungi Tim Penjualan Kami</p><p>&nbsp;</p><p><strong>Konsultan Penjualan</strong></p><p>Melayani kebutuhan Anda untuk seluruh kategori produk. Silakan hubungi 021-29292828 atau email kami.</p><p><strong>Korporasi &amp; Pemerintah.</strong></p><p>Melayani kebutuhan korporasi &amp; proyek. Silakan email kami ke support@kincaimedia.net</p><p><strong>Solusi Software &amp; Lisensi</strong></p><p>Melayani kebutuhan lisensi &amp; konsultasi software. Silakan email kami ke support@kincaimedia.net</p><p><strong>Solusi Percetakan &amp; Signage</strong></p><p>Melayani kebutuhan printer besar, signage, &amp; produk 3D. Silakan email support@kincaimedia.net</p><p>&nbsp;</p><p><strong>Kantor Pusat</strong><br>Jl. Gunung Sahari Raya 73C No. 5-6<br>Jakarta 10610, Indonesia</p><p>Hubungi Tim Pendukung Kami</p><p><strong>Layanan Klaim Garansi</strong></p><p>Untuk bantuan teknisi dan klaim garansi produk, silakan telepon ke (021) 2929-2828 atau email support@kincaimedia.net</p><p><strong>Layanan Pengembalian Barang &amp; Refund</strong></p><p>Jika produk yang diterima salah/cacat/rusak &amp; ingin mengurus pengembalian dana, untuk laporan dan bantuan dapat menghubungi kami email support@kincaimedia.net.</p><p><strong>Layanan Pelanggan</strong></p><p>Silakan berikan feedback atas pelayanan yang kurang berkenan dari tim kami. Tuliskan masukan Anda email support@kincaimedia.net.</p><p><strong>Status Pengiriman</strong></p><p>Untuk bantuan tracking status pesanan &amp; status pengiriman, silakan telepon ke (021) 2929-2828 atau Anda dapat menghubungi kami email support@kincaimedia.net.</p><p>&nbsp;</p><p><strong>Merchant&nbsp;</strong></p><p>Ingin memulai jualan di <a href=\"https://kincaimedia.net\">Kincaimedia.net</a>? Anda bisa mendaftar menjadi merchant &amp; bertanya seputar <a href=\"https://kincaimedia.net\">Kincaimedia.net</a> Marketplace email support@kincaimedia.net.</p><p><strong>Tidak Dapat Menemukan Tim yang Anda Cari?</strong></p><p>Anda dapat menghubungi kami email support@kincaimedia.net.</p>', 'contact'),
(3, 'Testimoni', '<p>redirect page</p>', 'testimoni'),
(4, 'Kebijakan Privasi', '<h2><strong>KEBIJAKAN PRIVASI SITUS DAN APLIKASI</strong></h2><p>MATAHARI memahami dan menghormati privasi Anda dan nilai hubungan kami dengan Anda. Kebijakan Privasi ini menjelaskan bagaimana Matahari mengumpulkan, mengatur dan melindungi informasi Anda ketika Anda mengunjungi dan/atau menggunakan situs atau aplikasi MATAHARI, bagaimana Matahari menggunakan informasi dan kepada siapa Matahari dapat berbagi. Kebijakan privasi ini juga memberitahu Anda bagaimana Anda dapat meminta Matahari untuk mengakses atau mengubah informasi Anda serta menjawab pertanyaan Anda sehubungan dengan Kebijakan Privasi ini.<br>Kata-kata yang dimulai dengan huruf besar dalam Kebijakan Privacy ini mempunyai pengertian yang sama dengan Syarat dan Ketentuan penggunaan situs dan aplikasi MATAHARI.</p><p>&nbsp;</p><h2><strong>Informasi yang kami kumpulkan</strong></h2><p>Matahari dapat memperoleh dan mengumpulkan informasi dan/atau konten dari situs dan aplikasi yang Anda atau pengguna lain sambungkan atau disambungkan oleh situs atau aplikasi MATAHARI dengan situs atau pengguna tertentu dan informasi dan/atau konten yang Anda berikan melalui penggunaan situs atau aplikasi MATAHARI dan/atau pengisian Aplikasi.</p><p><br>Ketika Anda mengunjungi situs atau aplikasi MATAHARI, Matahari dapat mengumpulkan informasi apapun yang telah dipilih bisa terlihat oleh semua orang dan setiap informasi publik yang tersedia. Informasi ini dapat mencakup nama Anda, gambar profil, jenis kelamin, kota saat ini, hari lahir, email, jaringan, daftar teman, dan informasi-informasi Anda lainnya yang tersedia dalam jaringan. Selain itu, ketika Anda menggunakan aplikasi MATAHARI, atau berinteraksi dengan alat terkait, widget atau plug-in, Matahari dapat mengumpulkan informasi tertentu dengan cara otomatis, seperti cookies dan web beacon. Informasi yang Matahari kumpulkan dengan cara ini termasuk alamat IP, perangkat pengenal unik, karakteristik perambah, karakteristik perangkat, sistem operasi, preferensi bahasa, URL, informasi tentang tindakan yang dilakukan, tanggal dan waktu kegiatan. Melalui metode pengumpulan otomatis ini, Matahari mendapatkan informasi mengenai Anda. Matahari mungkin menghubungkan unsur-unsur tertentu atas data yang telah dikumpulkan melalui sarana otomatis, seperti informasi browser Anda, dengan informasi lain yang diperoleh tentang Anda, misalnya, apakah Anda telah membuka email yang dikirimkan kepada Anda. Matahari juga dapat menggunakan alat analisis pihak ketiga yang mengumpulkan informasi tentang lalu lintas pengunjung situs atau aplikasi MATAHARI. Browser Anda mungkin memberitahu Anda ketika Anda menerima cookie jenis tertentu atau cara untuk membatasi atau menonaktifkan beberapa jenis cookies. Harap dicatat, bahwa tanpa cookie Anda mungkin tidak dapat menggunakan semua fitur dari situs atau aplikasi MATAHARI.</p><p><br>Situs atau aplikasi MATAHARI mungkin berisi link ke tempat pihak lain yang dapat dioperasikan oleh pihak lain tersebut yang mungkin tidak memiliki kebijakan privasi yang sama dengan Matahari. Matahari sangat menyarankan Anda untuk membaca dan mempelajari kebijakan privasi dan ketentuan-ketentuan pihak lain tersebut sebelum masuk atau menggunakannya. Matahari tidak bertanggung jawab atas pengumpulan dan/atau penyebaran informasi pribadi Anda oleh pihak lain atau yang berkaitan dengan penggunaan media sosial seperti Facebook dan Twitter dan Matahari dibebaskan dari segala akibat yang timbul atas penyebaran dan/atau penyalahgunaan informasi tersebut.</p><p>&nbsp;</p><h2><strong>BAGAIMANA MATAHARI MENGGUNAKAN INFORMASI</strong></h2><p>Matahari dapat menggunakan informasi Anda yang diperoleh untuk menyediakan produk dan layanan yang Anda minta, sebagai data riset atau berkomunikasi tentang dan/atau mengelola partisipasi Anda dalam survei atau undian atau kontes atau acara khusus lainnya yang diadakan oleh Matahari, pengoperasian Matahari, memberikan dukungan kepada Anda sebagai pengunjung dan/atau pengguna situs atau aplikasi MATAHARI, merespon dan berkomunikasi dengan Anda mengenai permintaan Anda, pertanyaan dan/atau komentar Anda, membiarkan Anda untuk meninggalkan komentar di situs atau aplikasi MATAHARI atau melalui media sosial lainnya, membangun dan mengelola Akun Anda, mengirimkan berita-berita dan/atau penawaran-penawaran yang berlaku bagi Anda selaku pengunjung dan penguna situs atau aplikasi MATAHARI, untuk mengoperasikan, mengevaluasi dan meningkatkan bisnis Matahari termasuk untuk mengembangkan produk dan layanan baru; untuk mengelola komunikasi Matahari, menentukan efektifitas layanan, pemasaran dan periklanan situs atau aplikasi MATAHARI, dan melakukan akutansi, audit, dan kegiatan Matahari lainnya, melakukan analisis data termasuk pasar dan pencarian konsumen, analisis trend, keuangan, dan informasi pribadi, melaksanakan kerjasama dengan mitra Matahari yang terkait dengan program-program yang diadakan oleh Matahari, melindungi, mengidentifikasi, dan mencegah penipuan dan kegiatan kriminal lainnya, klaim dan kewajiban lainnya, membantu mendiagnosa masalah teknis dan layanan, untuk memelihara, mengoperasikan, atau mengelola situs atau aplikasi MATAHARIyang dilakukan oleh Matahari atau pihak lain yang ditentukan oleh Matahari, mengidentifikasi pengguna situs atau aplikasi MATAHARI, serta mengumpulkan informasi demografis tentang pengguna situs atau aplikasi MATAHARI, untuk cara lain yang Matahari beritahukan pada saat pengumpulan informasi.</p><p><br>Matahari tidak akan menjual atau memberikan informasi pribadi Anda kepada pihak lain, kecuali seperti yang dijelaskan dalam kebijakan privasi ini. Matahari akan berbagi informasi dengan afiliasi Matahari atau pihak lain yang melakukan layanan berdasarkan petunjuk dari Matahari. Pihak lain tersebut tidak diizinkan untuk menggunakan atau mengungkapkan informasi tersebut kecuali diperlukan untuk melakukan layanan atas nama Matahari atau untuk mematuhi persyaratan hukum. Matahari juga dapat berbagi informasi dengan pihak lain yang merupakan mitra Matahari untuk menawarkan produk atau jasa yang mungkin menarik bagi Anda<br>Matahari dapat mengungkapkan informasi jika dianggap perlu dalam kebijakan tunggal Matahari, untuk mematuhi hukum yang berlaku, peraturan, proses hukum atau permintaan pemerintah, dan peraturan yang berlaku di Matahari. Selain itu, Matahari dapat mengungkapkan informasi ketika percaya, pengungkapan diperlukan atau wajib dilakukan untuk mencegah kerusakan fisik atau kerugian finansial atau hal lainnya sehubungan dengan dugaan atau terjadinya kegiatan ilegal. Matahari juga berhak untuk mengungkapkan dan/atau mengalihkan informasi yang dimiliki apabila sebagian atau seluruh bisnis atau aset Matahari dijual atau dialihkan.<br>Matahari dapat menyimpan dan/atau memusnahkan informasi tentang Anda sesuai kebijakan yang berlaku atau jika diperlukan.</p><p>&nbsp;</p><h2><strong>UPDATE KEBIJAKAN PRIVASI INI</strong></h2><p>Kebijakan Privasi ini mungkin diperbarui secara berkala dan tanpa pemberitahuan sebelumnya kepada Anda untuk mencerminkan perubahan dalam praktik informasi pribadi. Matahari akan menampilkan pemberitahuan di bagian info profil website untuk memberitahu Anda tentang perubahan terhadap Kebijakan Privasi dan menunjukkan di bagian atas Kebijakan saat ketika Kebijakan Privasi ini terakhir diperbarui. Kebijakan Privasi ini merupakan satu kesatuan dan menjadi bagian yang tidak terpisahkan dari Syarat dan Ketentuan Penggunaan situs dan aplikasi MATAHARI.</p>', 'privacy-policy'),
(5, 'Syarat dan Ketentuan', '<h2><strong>SYARAT DAN KETENTUAN SITUS DAN APLIKASI</strong></h2><p>Selamat datang dan terima kasih telah mengunjungi situs/aplikasi MATAHARI. Silahkan membaca Syarat dan Ketentuan ini dengan seksama. Syarat dan Ketentuan ini mengatur akses, penelusuran, penggunaan, dan pembelian barang-barang yang ditawarkan atau dijual di www.MATAHARI.com kepada Anda. Dengan mengakses, menelusuri, dan menggunakan situs/aplikasi MATAHARI ini, berarti Anda telah membaca, mengerti, dan setuju untuk tunduk dan terikat pada Syarat dan Ketentuan ini, dan Anda juga setuju untuk tidak mempengaruhi, mengganggu, atau berusaha mempengaruhi atau mengganggu jalannya situs/aplikasi MATAHARI dengan cara apapun. Jika Anda tidak menyetujui salah satu, sebagian, atau seluruh isi Syarat dan Ketentuan ini, maka Anda tidak diperkenankan untuk mengakses, menelusuri atau menggunakan situs/aplikasi MATAHARI ini. Akses, penelusuran, dan penggunaan situs/aplikasi MATAHARI ini hanya untuk penggunaan pribadi Anda. Anda tidak diperkenankan untuk mendistribusikan, memodifikasi, menjual, atau mengirimkan apapun yang Anda akses dari situs/aplikasi MATAHARI ini, termasuk tetapi tidak terbatas pada teks, gambar, audio, dan video untuk keperluan bisnis, komersial, publik atau kepeluan non-personal lainnya.</p><p><br>Penggunaan konten situs/aplikasi MATAHARI, logo MATAHARI, merek layanan dan/atau merek dagang yang tidak sah dapat melanggar undang-undang hak kekayaan intelektual, hak cipta, merek, privasi, publisitas, hukum perdata dan pidana tertentu. Syarat dan Ketentuan ini termasuk hak kekayaan intelektual milik MATAHARI yang dilindungi hak cipta. Setiap penggunaan Syarat dan Ketentuan ini oleh pihak manapun, baik sebagian maupun seluruhnya, tidak diizinkan. Pelanggaran atas hak atas kekayaan intelektual MATAHARI ini dapat dikenakan tindakan atau sanksi berdasarkan ketentuan hukum yang berlaku.<br>Anda perlu mengunjungi halaman ini secara berkala untuk mengetahui setiap perubahan Syarat dan Ketentuan ini.</p>', 'terms'),
(6, 'Cara Berbelanja', '<p>Anda bisa mengklik “Blanja sekarang” di blanja.com untuk membeli produk, atau Anda bisa menambahkan produk ke Favorit dahulu lalu menempatkan pesanan.</p><p><strong>1. Blanja sekarang</strong></p><p>1.1 Jika Anda ingin membeli produk langsung ketika Anda melihatnya di Product Detail Page (gambar di bawah), Anda bisa mengklik “Blanja sekarang” setelah Anda memilih atribut, jumlah, dll. dari produk tersebut.</p><p>&nbsp;</p><p>1.2 Setelah Anda mengkonfirmasi alamat pengiriman, informasi pesanan dan informasi lainnya, klik “Selanjutnya”.</p><p>&nbsp;</p><p>1.3 Anda bisa masuk ke “My blanja”-“Pesanan Saya” dan melihat pesanan yang telah ditempatkan. Jika Anda sudah mengkonfirmasi jumlah dari pesanan tersebut, klik “Bayar”.</p><p>&nbsp;</p><p>1.4 Masuk ke halaman pembayaran dan bayarkan pesanan. Status pemesanan akan berubah menjadi “Telah dibayar”, yang artinya barang sedang menunggu dikirim oleh penjual.</p><p>&nbsp;</p><p>1.5 Setelah penjual berhasil mengirimkan barang, status pemesanan akan berubah menjadi “Telah dikirim”. Ketika anda menerima barang dan mengkonfirmasi, mohon klik “Konfirmasi”.</p><p>&nbsp;</p><p>Anda harus memasukkan password Dompet Blanja sebelum mengklik “Konfirmasi”.</p><p>&nbsp;</p><p>1.6 Ketika status berubah ke \"Selesai\", maka berarti transaksi telah selesai</p><p>&nbsp;</p><p><strong>Checkout beberapa produk yang telah ditambahkan ke Troli blanja secara bersamaan</strong></p><p>Anda bisa menambahkan beberapa produk ke Troli blanja dan membelinya secara bersamaan, lalu menempatkan pesanan dan membayar sekali sekaligus. Prosesnya sama seperti proses “Blanja sekarang”.</p>', 'shopping-help'),
(7, 'Pengiriman Barang', '<ol><li>Pengiriman barang untuk setiap transaksi yang terjadi melalui Platform Bukalapak menggunakan layanan pengiriman barang yang disediakan Bukalapak atas kerjasama Bukalapak dengan pihak jasa ekspedisi pengiriman barang resmi.</li><li>Pengguna memahami dan menyetujui bahwa segala bentuk peraturan terkait dengan syarat dan ketentuan pengiriman barang sepenuhnya ditentukan oleh pihak jasa ekspedisi pengiriman barang dan sepenuhnya menjadi tanggung jawab pihak jasa ekspedisi pengiriman barang.</li><li>Bukalapak hanya berperan sebagai media perantara antara Pengguna dengan pihak jasa ekspedisi pengiriman barang.</li><li>Pengguna wajib memahami, menyetujui, serta mengikuti ketentuan-ketentuan pengiriman barang yang telah dibuat oleh pihak jasa ekspedisi pengiriman barang.</li><li>Pengiriman barang atas transaksi melalui sistem Bukalapak menggunakan jasa ekspedisi pengiriman barang dilakukan dengan tujuan agar barang dapat dipantau melalui sistem Bukalapak.</li><li>Pelapak (Penjual) wajib bertanggung jawab penuh atas barang yang dikirimnya.</li><li>Pengguna memahami dan menyetujui bahwa segala bentuk kerugian yang dapat timbul akibat kerusakan ataupun kehilangan pada barang, baik pada saat pengiriman barang tengah berlangsung maupun pada saat pengiriman barang telah selesai, adalah sepenuhnya tanggung jawab pihak jasa ekspedisi pengiriman barang.</li><li>Dalam hal diperlukan untuk dilakukan proses pengembalian barang, maka Pengguna, baik Pelapak (Penjual) maupun Pembeli, diwajibkan untuk melakukan pengiriman barang langsung ke masing-masing Pembeli maupun Pelapak (Penjual). Bukalapak tidak menerima pengembalian atau pengiriman barang atas transaksi yang dilakukan oleh Pengguna dalam kondisi apa pun.</li></ol>', 'pengiriman-barang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment_proof`
--

CREATE TABLE `payment_proof` (
  `id` int(11) NOT NULL,
  `invoice` varchar(30) NOT NULL,
  `file` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `condit` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `date_submit` datetime NOT NULL,
  `publish` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `transaction` int(11) NOT NULL,
  `promo_price` int(11) NOT NULL,
  `viewer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `stock`, `category`, `condit`, `weight`, `img`, `description`, `date_submit`, `publish`, `slug`, `transaction`, `promo_price`, `viewer`) VALUES
(1, 'OPPO A91 8/128GB Special Online Edition', 3699000, 15, 4, 1, 300, '1586699074281.jpg', 'Dimensions/Weight\r\nHeight: 160.2mm\r\nWidth: 73.3mm\r\nThickness: 7.9mm\r\nWeight: Approx. 172g\r\n\r\nBasic Parameters\r\nColor: Lightening Black, Unicorn White\r\nOperating System: ColorOS 6.1.2, based on Android 9\r\nCPU: Helio P70\r\nGPU: ARM Mali G72 MP3 900MHz\r\nBattery Capacity: 4000mAh (Standard Value)\r\nRAM:8GB\r\nStorage: 128GB\r\nVOOC Flash Charge: 3.0\r\n\r\nDisplay\r\nSize: 16.2cm(6.4\'\')\r\nTouchscreen: Multi-touch, Capacitive Screen\r\nResolution: 2400 by 1080 pixels at 408 ppi\r\nColors: 16 million colors\r\nScreen Ratio: 90.7%\r\nContrast: 1000000:1\r\nType: AMOLED\r\nBrightness: Typical Value 430nit\r\n\r\nCamera\r\nRear Sensor: 48MP & 8MP & 2MP & 2MP\r\nFront Sensor: 16MP\r\nFlash: LED Flash\r\nAperture :\r\nFront: f/2.0;\r\nRear: Main f/1.79, Wide Angle f/2.25, Portrait & Mono f/2.4\r\nSensor Size:\r\nMain 1/2.25\', 0.8um\r\nSecondary Wide Angle 1/4\', 1.12um 2M 1/5\', 1.75um\r\nPixel Size: 1/3.1\', 1.0um\r\nCamera Mode: Photo, video, professional mode, panorama, portrait, night scene, time-lapse photography, slow motion, etc.\r\nVideo: Rear Camera Defualt: 1080P@30fps; Front Camera Default: 720P@30fps\r\nConnectivity\r\n\r\nFrequencies:\r\n[Frequency 1]\r\nGSM: 850/900/1800/1900MHz\r\nWCDMA: Bands 1/5/8\r\nFDD-LTE: Bands 1/3/5/8\r\nTD-LTE: Bands 38/40/41\r\n[Frequency 2]\r\nGSM: 850/900/1800/1900MHz\r\nWCDMA: Bands 1/5/8\r\nFDD-LTE: Bands 1/3/5/7/8\r\nTD-LTE: Bands 38/40/41\r\n[Frequency 3]\r\nGSM: 850/900/1800/1900MHz\r\nWCDMA: 850/900/1700/1900/2100MHz\r\nFDD-LTE: 700/800/850/900/1700/1800/1900/2100/2600MHz\r\nTD-LTE: 1900/2000/2300/2496-2690/2570-2620MHz\r\nSIM Card Type: Nano-SIM / Nano-USIM\r\nGPS: Built-in GPS; supports A-GPS, Beidou, Glonass\r\nBluetooth: 4.2\r\nWLAN Function: 2.4/5GHz 802.11 a/b/g/n/ac\r\nOTG: Supported\r\n\r\nIn the Box\r\nHandset *1    \r\nHeadset *1    \r\nUSB Cable *1    \r\nAdapter *1    \r\nSIM Card Pin *1    \r\nProtective Case *1    \r\nProtective Film, pre-applied *1\r\nQuick Guide *1    \r\nWarranty Card *1 ', '2020-04-12 20:43:52', 1, 'oppo-a91-8128gb-special-online-edition', 2, 3200000, 49),
(2, 'Black Shark 2 Pro 8GB/128GB Include Rookie Kit', 7499000, 6, 4, 1, 450, '1586623271686.jpg', 'Processor & GPU\r\nQualcomm® Snapdragon™ 855+, 2.96GHz (Qualcomm® Snapdragon™ premium-tier processor)\r\nQualcomm® Adreno™ 640\r\n\r\nRAM & ROM\r\n8GB RAM 128GB ROM\r\n\r\nDimension\r\nHeight: 163.61mm\r\nDepth: 8.77mm (10.07mm at the thickest point)\r\nWidth: 75.01 mm\r\nWeight: 205g\r\n\r\nBattery & Charging\r\n4000mAh(typ)/3900mAh(min)\r\nNon-removable\r\nHandset supports QC4+, 27W/18W. Charger supports QC3.0 (Qualcomm® Quick Charge™ )\r\nStandard USB Type-C\r\n\r\nCamera & Video\r\nRear Cameras\r\nMain?48M 0.8µm (48MP 4in1 PDAF f1.75)\r\nAperture: f/1.75\r\n6p lens\r\nLED flash\r\nSecondary: 12M 1.0µm (12MP PDAF f2.2 ?1.0µm)\r\nAperture: f/2.2\r\n6p lens (2x optical zoom lens)\r\nSupport PDAF / low-light enhancement technology / HDR / portrait photography / panorama / AI camera / super night mode\r\nFront Camera, FF 20M 0.9µm 4in1 Aperture: f/2.0 5p lens\r\n\r\nDisplay\r\n6.39 inch AMOLED\r\n19.5:9 Full screen display\r\n430nit(typ) High brightness (10% lower brightness with DC Dimming)\r\nResolution:1080 × 2340, 403PPI, Contrast Ratio ?60000:1\r\nSupports DCI?P3 108.9%(typ)\r\n\r\nConnectivity\r\nDual nano SIM\r\nTD LTE?FDD LTE?TD?SCDMA?WCDMA?CDMA?GSM\r\nSupports wifi: 802.11a/b/g/n/ac; 2.4G&5.0G\r\nSupports 2*2 mimo, MU MIMO\r\nSupports WIFI Display, WFI Direct, WIFI hotspot\r\nSupports Bluetooth 5.0 wireless, supports aptX & aptX HD & aptX Adaptive & LDAC\r\n\r\nFingerprint & Recognization\r\nVirtual Keys: Recent, HOME, Back\r\nSupports full-screen operation; Supports intelligent dock & game Dock\r\nShark Key to enter Sharkspace\r\n\r\nSensors\r\nGravity sensor, Ambient light sensor, Proximity sensor, Gyroscope, Compass, fingerprint sensor, display touch sensitivity sensor\r\n\r\nKelengkapan dalam paket:\r\n1x Smartphone\r\n1x Rookie Kit (Gamepad Left + Holder 2.0 Left)\r\n1x Power Adapter\r\n1x USB Cable\r\n1x Transparent Protective Case\r\n1x Manual Book\r\n1x Warranty Card\r\n1x Black Shark Sticker\r\n1x SIM Tray Ejector\r\n1x Type-C to 3.5mm Audio Jack Adapter\r\n1x Free Perdana Smartfren', '2020-04-11 18:41:11', 1, 'black-shark-2-pro-8gb128gb-include-rookie-kit-iceberg-grey', 4, 7000000, 80),
(3, 'AMD Paket PC Desktop Gaming Rakitan', 4050000, 1, 2, 2, 12000, '1586699592182.jpg', 'Komputer rakitan\r\nDilengkapi dengan aplikasi game menarik\r\nHdd 500\r\nSSD 240GB\r\nRam 8GB DDR 4', '2020-04-12 15:53:12', 1, 'amd-paket-pc-desktop-gaming-rakitan-terbatas', 1, 3500000, 67),
(4, 'Laptop Termurah Terlaris Dell Latitude E6410 Core i5', 1950000, 8, 3, 2, 1000, '1586700041867.jpg', 'Ready Laptop Dell Latitude E6410\r\nLaptop ini sangat cocok untuk agan yang sedang mencari Laptop dengan Budget Minimal namun mendapatkan Laptop yang Maksimal\r\nTidak perlu diragukan lagi Laptop Dell ini mempunyai daya tahan Material Terbaik\r\n\r\nSpesifikasi :\r\n- Core i5 2.5GHz\r\n- Ram DDR3 4GB\r\n- Hdd 250GB\r\n- Layar 14” inchi\r\n- Webcam\r\n- DVD RW\r\n- Lan Port\r\n- Wifi\r\n- VGA Port\r\n- USB Port\r\n- Windows 7 Pro 64bit\r\n- Office 2013, Winrar, UltraISO, Dll\r\n--------------------\r\nGaransi 1 Bulan\r\n--------------------\r\nKelengkapan :\r\n- Laptop Dell Latitude E6410 Second 93% sd 95%\r\n- Baterai\r\n- Adaptor\r\n- Tas New Slempang\r\n--------------------\r\nHarga : Rp. 1.950.000\r\n--------------------\r\nKondisi :\r\n- Mesin OK 100% Siap Bekerja Keras\r\n- Body Laptop Overall 95% Second Mulus\r\n- Layar Jernih OK 100%\r\n- Keyboard OK 100%\r\n- Sound OK 100%\r\n- Webcam OK 100%\r\n- VGA OK 100%\r\n- USB OK 100%\r\n- LAN Card OK 100%\r\n- SD Card Reader OK 100%\r\nLulus QC khas betet89 100% Maknyus Istimiwir barangnya\r\n--------------------\r\nbetet89 Spesialis Laptop Second Built Up Original \r\nBergaransi, Jujur, dan Amanah sejak 2009\r\nReseller Welcome, harga pasti masuk', '2020-04-12 16:00:41', 1, 'laptop-termurah-terlaris-dell-latitude-e6410-core-i5', 2, 1500000, 69),
(6, 'LAPTOP ASUS X541S X0632T N3000| RAM 4GB HDD 500GB|15.6\"|DVDRW|WINDOWS 10 ORIGINAL', 4300000, 12, 3, 1, 3000, '1586700419708.jpg', 'SPESIFIKASI : \r\nNotebook : Asus X541SA-X0632T \r\nProcessor : Intel®  Celeron® N3000 CPU  @ 1.04 GHz ( 2C,2T) \r\nRAM : 1X4096 MB DDR3 (4 GB PC3L 12800) ONBOARD \r\nHarddisk : 500 GB \r\nKamera : HD Web Camera \r\nVGA : Intel® UHD Graphics 600, Dedicated 128 MB, Shared 1993 MB, Up to 2121 MB \r\nBaterai : 3 Cell LI-ion 3350 mAh \r\nFitur : BT, WiFi, DVD Super Multi, Web Cam,Card Reader,1 Port USB 2.0 ,1 Port USB 3.0 ,1 Port USB 3.1 Type C,HDMI,Realtek PCIe FE Family Controller (RJ45) \r\nLayar : 15.6 HD SLIM (1366X768) \r\nWarna : Black \r\nOperation System (OS) : Windows 10 Home Single Language 64-Bit \r\nGaransi : 1 Tahun \r\n\r\n\r\n\r\nFITUR :\r\n- DVD Super Multi DL Drive ( DVDRW )\r\n- Card Reader 3 in 1\r\n- Bluetooth\r\n- HD Web Camera\r\n- 3 Cell LI-ion 19V 100-240-50-60 Hz\r\n- Webcam, Cardreader,1 port USB 3.0,1 port USB 2.0,1 port usb 3.1 type C, HDMI, Vga Out\r\n- Warna Hitam\r\n\r\n** BONUS :\r\nTas Laptop\r\n\r\n** KELENGKAPAN :\r\n- Unit + Dus Lengkap\r\n- Charger\r\n- Buku Manual\r\n- Buku Garansi', '2020-04-12 16:06:59', 1, 'laptop-asus-x541s-x0632t-n3000-ram-4gb-hdd-500gb156dvdrwwindows-10-original', 0, 4000000, 43),
(10, 'Asus Zenfone MAX M1 ZB555KL Smartphone [32GB/ 3GB/ L]', 1260000, 12, 4, 1, 430, '1586960622849.jpg', '<h2>Asus Zenfone MAX M1 ZB555KL Smartphone [32GB/ 3GB/ L]</h2><p>&nbsp;</p><h2>Merasakan Pengalaman Layar Full View 5.5 Inch</h2><p>Asus Zenfone Max M1 merupakan smartphone yang sengaja dirancang untuk memenuhi lifestyle&nbsp;pengguna. Dibuktikan dengan desain smartphone yang kelihatan apik berikut dengan tampilan full view display 5.5 inch. Bahkan dengan jenis layar yang sekarang Asus mengklaim nantinya Anda dapat menikmati peningkatan level gambar saat menikmati berbagai konten foto dan video. Apalagi layar HD Asus Max M1 kabarnya sudah menggunakan jenis kaca 2.5D beresolusi HD Plus. Selain itu, tersedianya Triple Slot yang mana nantinya Anda bisa menumpangi dua kartu SIM yang mendukung di jaringan 4G LTE. Ada lagi satu slot untuk MicroSD untuk penyimpanan hingga 256GB.&nbsp;</p><figure class=\"image\"><img src=\"https://i.imgur.com/JzH6nV4.jpg\" alt=\"\"></figure><h2>Video Unboxing Asus Zenfone Max M1 Indonesia</h2><p><a href=\"https://youtu.be/YQ7MZxRTCVY\">https://youtu.be/YQ7MZxRTCVY</a></p><h2>Asus Hadirkan Desain Smartphone Ultra Slim&nbsp;</h2><p>Meski tidak terlalu besar hanya seukuran 5.5” Asus merancang bingkai ultraslim sehingga membuatnya lebih ergonomis saat digenggam. Ditambah lagi dengan sentuhan akhir berbalut warna metalik yang menjadikan Zenfone Max M1 terkesan lebih Premium. Bahkan pilihan warna yang disediakan oleh sang produsen juga cukup beragam diantaranya Deepsea Black, Sunlight Gold, Ruby Red. Kesempurnaan Asus ZB555KL semakin lengkap berkat hadirnya Fingerprint Sensor yang diterapkan pada bagian belakang handphone. Hebatnya lagi, kecepatan pemindai sidik jarinya terbilang cukup intuitif saat digunakan untuk membuka kunci layar.&nbsp;</p><figure class=\"image\"><img src=\"https://i.imgur.com/MMrwiKC.jpg\" alt=\"\"></figure><h2>Interface yang Baru ZenUI 5.0 &amp; Android 8.0</h2><p>Untuk melengkapi debut smartphone terbarunya, Asus Zenfone Max M1 dibekali dengan Android Oreo beserta dengan antarmuka terbaru ZenUI 5.0. Hasilnya Anda dapat merasakan pengalaman baru yang lebih menarik, mudah dan intuitif. Tidak cukup dengan itu, dibagian dalam Asus Zenfone Max M1 ditenagai dengan platform Qualcomm Snapdragon yang lebih cepat dan responsif. Bahkan untuk mengimbanginya, Asus menyandingkan GPU Adreno dan RAM yang cukup untuk hasilkan kualitas grafis bebas<i>&nbsp;‘lag’</i> kala bermain game atau memuat konten multimedia lainnya. &nbsp;</p><figure class=\"image\"><img src=\"https://i.imgur.com/thjKsuy.jpg\" alt=\"\"></figure><p>&nbsp;</p><h2>Kamera 13MP Asus Zenfone Max M1: Lebar dan Jernih</h2><p>Dengan iming-iming sistem dual kamera yang baru maka hasil fotonya tentu semakin menawan. Berbekal kamera utama 13 MP dengan kelengkapan aperture lensa F2.0 memungkinkan Anda motret dengan sudut pandang selebar 120 derajat. Begitupun dengan kemampuan rekam videonya yang memungkinkan menangkap lebih banyak objek / pemandangan yang memukau. Kemampuan lain yang dimiliki kamera smartphone Asus Zenfone Max M1 yakni fase autofukos yang hampir mirip dengan pendeteksian kamera DSLR. Akurasi fokusnya mencapai 0.03 detik untuk mendapatkan foto yang detail dan tajam. Begitupun dengan kamera depan Zenfone Max M1 yang disokong dengan teknologi Camera PixelMaster guna mendapatkan hasil yang lebih bening dan jernih saat selfie atau video call. &nbsp;</p><figure class=\"image\"><img src=\"https://i.imgur.com/Qpk1Fem.jpg\" alt=\"\"></figure><h2>Manajemen Baterai Cerdas Asus PowerMaster</h2><p>Kali ini Asus sekaligus memperkenalkan teknologi Asus PowerMaster sebagai dukungan manajemen daya yang cerdas. Teknologi ini diupayakan untuk mengoptimalkan masa pakai baterai tanpa harus mengesampingkan keamanan dan kinerja smartphone Asus Max M1. Sehubung dengan kapasitas baterainya sebesar 4000 mAh, maka sepantasnya Asus menawarkan fitur pengisian daya cepat / fast charging. Pengguna hanya membutuhkan waktu kurang lebih 3 jam untuk mendapatkan baterai smartphone yang terisi penuh. Dengan catatan sebaiknya Anda melakukan charging menggunakan adaptor yang bersertifikat (original), sehingga keamanan arus tetap stabil dan menghindari tegangan berlebih.&nbsp;</p><figure class=\"image\"><img src=\"https://i.imgur.com/a2nXsuc.jpg\" alt=\"\"></figure><p>&nbsp;</p>', '2020-04-15 16:23:43', 1, 'asus-zenfone-max-m1-zb555kl-smartphone-32gb-3gb-l', 0, 0, 47);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening`
--

CREATE TABLE `rekening` (
  `id` int(11) NOT NULL,
  `rekening` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekening`
--

INSERT INTO `rekening` (`id`, `rekening`, `name`, `number`) VALUES
(1, 'DANA', 'Toni Suwendi', '088215005600'),
(3, 'GOPAY', 'Toni Suwendi', '088215005600'),
(7, 'OVO', 'Toni Suwendi', '088215005600');

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `promo` int(11) NOT NULL,
  `promo_time` varchar(40) NOT NULL,
  `short_desc` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `regency_id` int(11) NOT NULL,
  `verify` int(11) NOT NULL,
  `logo` varchar(30) NOT NULL,
  `favicon` varchar(30) NOT NULL,
  `default_ongkir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `promo`, `promo_time`, `short_desc`, `address`, `regency_id`, `verify`, `logo`, `favicon`, `default_ongkir`) VALUES
(1, 0, '2020-08-08T08:08', 'Toko online terlengkap dan terpercaya. Dapatkan penawaran dengan kualitas terbaik. TokoKu Laku hadir untuk memenuhi kebutuhan Anda.', 'Jl. Sumbawa, Ulak Karang Utara, Kec. Padang Utara, Kota Padang, Sumatera Barat, Indonesia', 105, 1, '1621432636956.png', '1621432655743.png', 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosmed`
--

CREATE TABLE `sosmed` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `icon` varchar(20) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sosmed`
--

INSERT INTO `sosmed` (`id`, `name`, `icon`, `link`) VALUES
(1, 'Facebook', 'facebook-f', 'https://facebook.com/MyCodingXD'),
(3, 'Twitter', 'twitter', 'https://twitter.com/MyCodingXD'),
(5, 'Instagram', 'instagram', 'https://instagram.com/MyCodingXD'),
(6, 'Youtube', 'youtube', 'https://youtube.com/c/MyCodingXD'),
(7, 'Blog', 'blogger', 'https://blog.kincaimedia.net');

-- --------------------------------------------------------

--
-- Struktur dari tabel `submenu`
--

CREATE TABLE `submenu` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `submenu` int(11) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `submenu`
--

INSERT INTO `submenu` (`id`, `name`, `submenu`, `link`) VALUES
(1, 'Komputer', 2, 'c/komputer'),
(2, 'Laptop', 2, 'c/laptop'),
(7, 'Gadget', 2, 'c/gadget');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_subs` datetime NOT NULL,
  `code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`, `date_subs`, `code`) VALUES
(0, 'Semua Email', '2020-04-21 13:59:23', ''),
(21, 'member@gmail.com', '2021-05-19 22:20:52', '1621437652141395667'),
(22, 'vakbarrr@gmail.com', '2022-06-11 21:42:00', '16549585201565068401');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `photo`, `content`) VALUES
(1, 'Aliyah Wati - Jakarta', '', 'Sist makasih barangnya udah sampe, bagus dan lucu2. Temenku aja pada ngiri. Semoga sukses selalu buat eveshopashopnya. Sory baru bisa kasih kabar.'),
(2, 'Een Enarsih - Banten', '', 'Sis barang ny dh sya trima,mkasih bnyak untuk layan’n ny sngat m’muaskan untuk sya,smu prtanya’n di jwab…\r\nRespon ny jga sngat baek,smoga usaha ny smakin brkembang'),
(3, 'Ayung Darma - Pekalongan', '', 'Oia mf sis,Nich brg nya brsan aja ampe, mksh ya\r\nBrg nya bgs banget, sesuai yg digambarnya, makasih ya'),
(4, 'Via Garolita - Cimahi', '', 'Sistaaaa……\r\nbaju nyaa udah smpee…\r\nbguss dechh…suka bgt…\r\nmaaksiih yaa'),
(5, 'Dewanti - Solo', '', 'Barang tidak mengecewakan.. cs nya fast respon, resi besoknya langsung di share tanpa kita tanya.. mantap tokohijabku'),
(6, 'Dina - Malang', '', 'Respon cs baik, tapi untuk pengirimannya agak lama, padahal pakai ekspedisi ”sicepat”\r\nharusnya bisa cepat sampainya.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date_register` datetime NOT NULL,
  `is_activate` int(1) NOT NULL,
  `token` varchar(100) NOT NULL,
  `token_reset` varchar(100) NOT NULL,
  `cookie` varchar(100) NOT NULL,
  `photo_profile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `date_register`, `is_activate`, `token`, `token_reset`, `cookie`, `photo_profile`) VALUES
(12, '401XD Group', '401xd-group', 'akbarigi20@gmail.com', '$2y$10$cIJ4gL/TvfCzvhlFIlS96uCB8.1erZ.4m0PCuqgthorGXqex37iNm', '2021-05-19 22:20:52', 1, 'ef68bc405b7e534fb2010ef57ca1f020cb29653f', '', 'SfhZSWn56LyY2qDH6nMocwj38JKbNcltGsQhIv9duUXBROzTG4f77xLgHAlvFWm0', 'default.png'),
(13, 'Gian akbar', 'gian-akbar', 'vakbarrr@gmail.com', '$2y$10$YFuAcO.JyIfZQnZu1so9xeFLYrS01/1o7DXrpHd6jsX7fAEBhgxPK', '2022-06-11 21:42:00', 1, '2e4ff2e8b01f40f209d3ea89832d65c4eccecd94', '', '', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cod`
--
ALTER TABLE `cod`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cost_delivery`
--
ALTER TABLE `cost_delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `email_send`
--
ALTER TABLE `email_send`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `grosir`
--
ALTER TABLE `grosir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `img_product`
--
ALTER TABLE `img_product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `payment_proof`
--
ALTER TABLE `payment_proof`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `cod`
--
ALTER TABLE `cod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `cost_delivery`
--
ALTER TABLE `cost_delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `email_send`
--
ALTER TABLE `email_send`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `general`
--
ALTER TABLE `general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `grosir`
--
ALTER TABLE `grosir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `img_product`
--
ALTER TABLE `img_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `payment_proof`
--
ALTER TABLE `payment_proof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
