-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2023 pada 13.20
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb-lelea`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berkas`
--

CREATE TABLE `tb_berkas` (
  `berkas_id` int(11) NOT NULL,
  `berkas_ijazah` varchar(100) NOT NULL,
  `berkas_akta` varchar(100) NOT NULL,
  `berkas_kk` varchar(100) NOT NULL,
  `berkas_ktp_ortu` varchar(100) NOT NULL,
  `berkas_rapor` varchar(100) NOT NULL,
  `berkas_surat_mutlak` varchar(100) NOT NULL,
  `berkas_ijazah_mda` varchar(100) NOT NULL,
  `berkas_siswa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_berkas`
--

INSERT INTO `tb_berkas` (`berkas_id`, `berkas_ijazah`, `berkas_akta`, `berkas_kk`, `berkas_ktp_ortu`, `berkas_rapor`, `berkas_surat_mutlak`, `berkas_ijazah_mda`, `berkas_siswa_id`) VALUES
(1, '62290ec2-e6f2-399d-b6e9-936c4774ca4f.pdf', '86776b9b-8be2-30ba-86f9-093309f3707f.pdf', 'b40147f7-ce89-3ed2-aa28-5748993c3bc2.pdf', 'ff4a4703-973e-3a8c-87ca-b5099eb71378.pdf', 'bfe807c6-ee3a-3cfc-877a-24aa3ecffb97.pdf', '6bebeb45-cb2d-3022-82d0-68bc85fff8cb.pdf', '187e01a4-93a8-3c3d-9bf3-5ee1681cb045.pdf', 1),
(2, '1685641153_bee39e8844e02328c35a.pdf', '1685641153_cd996121a07eec0ae1d4.pdf', '1685641153_64cbaa3e740c1f21a1a5.pdf', '1685641153_8b3914ed2673c96bde25.pdf', '1685641153_f63a399a0c0ba95f7b2f.pdf', '1685641153_a08d3880feb71d46bbad.pdf', '1685641153_2af5aed8fc2f2eb0f168.pdf', 2),
(3, 'd161f0d2-ad0c-3f09-b40b-7c0ee9209a47.pdf', '25ef186c-dbe3-3596-a3ea-b01bfb41e546.pdf', '93f1c0dc-1e31-38c9-babb-eb39b43dfe1e.pdf', 'df634dde-3c61-3fd7-aa3a-b66ed4eef892.pdf', '7b20ea49-0976-3ac3-87df-5663b1ad9817.pdf', 'd287f17d-43bd-3c89-b70d-97135e828ee9.pdf', 'db5a4cdb-9ac5-3f09-ab90-808035663309.pdf', 3),
(4, '91079355-f9d9-37f0-94d7-05faba800985.pdf', 'de7bf9ef-eece-338f-83c1-f31be47e3738.pdf', '208c9f19-13f2-3295-a71d-eedb768bf5eb.pdf', 'b5a42656-9b7f-3a2f-b41a-71d551700b73.pdf', '5bf113c7-f044-3670-9565-8460e8858de2.pdf', '1a6042b9-7cd1-330f-96b2-d6df9269644a.pdf', 'a5a6c983-cae1-3fd4-9cdb-f7c8fb4beb58.pdf', 4),
(5, '2acb6d5d-865d-3070-bf14-c069a64dd9db.pdf', '7ad3dd01-1392-3386-823b-4f2a2f38161a.pdf', 'fadb21a5-52f2-3070-9747-ec8011af3f79.pdf', '2e4f8846-de29-34fe-a969-608f266da69e.pdf', 'd2b85b37-ef35-378c-a4c7-c4540e405e9a.pdf', '92bf8ec3-df47-3d62-b587-da351a55d700.pdf', '5e2b3435-5986-3100-9c8a-4f884de31903.pdf', 5),
(6, '3f22fc29-1a6d-3107-a582-7002ddb48bca.pdf', 'f19e69e6-1569-35e4-b435-fe29d139f524.pdf', '7741d34d-15ef-3421-8c3c-46ff705a14de.pdf', 'b7b4550d-93c3-364a-b7a1-1b7aad7946f7.pdf', 'a608822d-3952-33e4-86fd-cffd65aaf0d8.pdf', '26639f57-38ed-3087-b9e8-fba2b505cf33.pdf', 'fdd7186f-e284-38f4-a1f7-a7cb15c30e65.pdf', 6),
(7, 'f3c4c2fe-c67d-38f9-aa3a-8bd4a790a789.pdf', 'a7c4f393-7ff1-3f18-bf0a-d989c17e5709.pdf', '423aa30b-a955-3b63-8ba1-2d2054ee5fe9.pdf', '8e78fcba-9e54-37a4-beff-7980e76160ad.pdf', 'ad7215fc-5686-33d9-a3a9-287d5a5e126f.pdf', 'eff61668-179b-3078-be93-5a908333a5f9.pdf', '6937973a-07ef-3bc1-b507-f1dc8e662782.pdf', 7),
(8, '77e64b75-d62e-35af-81ed-8d4ebfbb1650.pdf', 'b8b5d878-7289-3fb4-9d8f-a37fca69944f.pdf', 'fd095281-7add-38df-9166-e5bbf611390d.pdf', '0114f3f8-6b4a-3fbd-8b8c-403d01182ac4.pdf', 'd00acea3-4b71-3ebb-ab38-630ee4b09134.pdf', '754c6764-993c-344c-acd6-dc882c2001c8.pdf', '291b0eae-355c-302c-97f4-cb4823281357.pdf', 8),
(9, '6c95b438-d61a-3f02-ab22-c0ddd8e2b265.pdf', '987392c6-744e-3ed6-af1c-69390d343f04.pdf', '30c9d6af-e491-32e3-a79e-ee41f85b7782.pdf', 'cc4f7c1e-214e-34ec-847b-133d98ccb6af.pdf', 'dcc298b1-ab98-3e65-8174-044f0a00ca19.pdf', 'a7caea29-b9ca-3ca0-bea4-d47a2d2ecb27.pdf', 'ef666d14-acd2-3e68-a73f-759c3657071d.pdf', 9),
(10, '2536790a-180f-3288-8680-28cfa5f91e0a.pdf', 'f4d59c5b-077b-387f-89b4-16d437416efc.pdf', 'b674d6e9-d4c0-3da2-925d-dc560440d934.pdf', '32979ecf-8480-38cf-8cf2-b03a64f6eda1.pdf', '7ff0753a-ff90-343f-b6f0-14fc7cd8f92f.pdf', '467cf7f2-af5b-37f0-bdea-c03e64e270f8.pdf', 'ea39fb47-31a9-37e6-9083-0371a18d29fb.pdf', 10),
(11, '77ff1881-2820-342a-821e-9b6c3cbd98ec.pdf', 'b40b6fda-90c6-32fd-b57a-8a7eb5ace828.pdf', 'e1ac0a41-008c-3f8b-ad4d-51e440961501.pdf', '3a54f0ea-01c5-3fce-961a-9a76fe3b045d.pdf', 'cf054d6e-738b-3988-9e10-8cfcf15c5a7f.pdf', '742a4906-c0e0-38e8-acc3-d18819349f2c.pdf', 'e3c3ec3d-38f6-3ae8-8473-3b7e183c68cb.pdf', 11),
(12, '0155a2f1-e360-362c-8fdd-4de8b8a170fb.pdf', '4fec9311-a233-3a75-baaa-66add5ead45b.pdf', 'efa5d71b-8a0b-32f6-994e-78094c0e13f2.pdf', 'f84078da-5950-3910-9598-99d6528077d7.pdf', 'e201288e-8e63-317a-a552-3a3a794082f3.pdf', '94891b60-4247-3c61-b85c-73b8157eedfc.pdf', '417024bf-6560-3b8f-af10-7f7cff6a2434.pdf', 12),
(13, '044253a9-cf2d-3a3b-8ddb-17943e8f395c.pdf', 'ab6373d0-633e-3522-bded-c019cd6aa35f.pdf', '812dc9b5-de79-3d87-895f-d2a93e636f72.pdf', '2a23a3ed-7e17-3315-9062-fefd1562bc36.pdf', 'c485dccc-a09f-3908-9f16-9cbccec71817.pdf', '3a11a645-ec39-3eaf-892c-8ca74af34e63.pdf', 'f9a20fb7-f93a-37be-8261-48f887f705b7.pdf', 13),
(14, 'cac5e29e-6965-3577-86ae-07b5178a746f.pdf', 'c84ed88d-387e-3535-8a85-32c5dc674274.pdf', 'caae94c8-2cc8-302f-9e13-ecd3cc6090f8.pdf', 'd0aede16-7af0-38f8-b206-6cd6942ea458.pdf', '44137783-722b-3cb9-bf07-294b6d0122da.pdf', '12e308fc-0565-3519-9407-7af30e4d35c9.pdf', '7926d2e2-f21f-30d7-971e-bad824d0b5a3.pdf', 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ekskul`
--

CREATE TABLE `tb_ekskul` (
  `eks_id` int(11) NOT NULL,
  `eks_nama` varchar(100) NOT NULL,
  `eks_kategori` enum('Wajib','Pilihan') NOT NULL,
  `eks_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ekskul`
--

INSERT INTO `tb_ekskul` (`eks_id`, `eks_nama`, `eks_kategori`, `eks_foto`) VALUES
(1, 'Futsal', 'Pilihan', '1683428535_d21fc38901e9509ecaac.jpg'),
(5, 'Tari', 'Pilihan', '1683421887_afd90dbfcee767826e71.jpg'),
(6, 'Pramuka', 'Wajib', '1683598624_19371473d34621a7ec70.jpg'),
(7, 'Karawitan', 'Pilihan', '1683598643_6df037f97a608ec1c237.jpg'),
(8, 'PMR', 'Pilihan', '1683598670_ba71ff1a2c77f407c879.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_nama` varchar(100) NOT NULL,
  `galeri_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_galeri`
--

INSERT INTO `tb_galeri` (`galeri_id`, `galeri_nama`, `galeri_foto`) VALUES
(1, 'tes', '1683600554_f9961a4df89ed2fc9497.jpg'),
(4, 'test', '1683600470_4f2f681d743344a39ead.jpg'),
(5, 'test1', '1683600485_c28e2109df4579b0894b.jpg'),
(6, 'test2', '1683600501_c1ea0a3da25fe2d37ff5.jpg'),
(8, 'test4', '1683600572_031b1fff953e9c8b10ca.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `nilai_id` int(11) NOT NULL,
  `nilai_ipa` int(11) NOT NULL,
  `nilai_mtk` int(11) NOT NULL,
  `nilai_indo` int(11) NOT NULL,
  `nilai_siswa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`nilai_id`, `nilai_ipa`, `nilai_mtk`, `nilai_indo`, `nilai_siswa_id`) VALUES
(1, 98, 78, 67, 1),
(2, 63, 86, 68, 2),
(3, 63, 88, 72, 3),
(4, 67, 74, 76, 4),
(5, 94, 93, 79, 5),
(6, 61, 84, 95, 6),
(7, 98, 69, 76, 7),
(8, 96, 81, 86, 8),
(9, 95, 67, 93, 9),
(10, 81, 72, 68, 10),
(11, 66, 79, 73, 11),
(12, 90, 90, 88, 12),
(13, 61, 86, 67, 13),
(14, 89, 86, 68, 14),
(15, 62, 83, 73, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_orangtua`
--

CREATE TABLE `tb_orangtua` (
  `ortu_id` int(11) NOT NULL,
  `ortu_nama_ayah` varchar(100) NOT NULL,
  `ortu_pendidikan_ayah` varchar(100) NOT NULL,
  `ortu_telepon_ayah` varchar(15) NOT NULL,
  `ortu_pekerjaan_ayah` varchar(50) NOT NULL,
  `ortu_nama_ibu` varchar(100) NOT NULL,
  `ortu_pendidikan_ibu` varchar(100) NOT NULL,
  `ortu_telepon_ibu` varchar(15) NOT NULL,
  `ortu_pekerjaan_ibu` varchar(50) NOT NULL,
  `ortu_nama_wali` varchar(100) NOT NULL,
  `ortu_pekerjaan_wali` varchar(50) NOT NULL,
  `ortu_pendidikan_wali` varchar(100) NOT NULL,
  `ortu_telepon_wali` varchar(15) NOT NULL,
  `ortu_siswa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_orangtua`
--

INSERT INTO `tb_orangtua` (`ortu_id`, `ortu_nama_ayah`, `ortu_pendidikan_ayah`, `ortu_telepon_ayah`, `ortu_pekerjaan_ayah`, `ortu_nama_ibu`, `ortu_pendidikan_ibu`, `ortu_telepon_ibu`, `ortu_pekerjaan_ibu`, `ortu_nama_wali`, `ortu_pekerjaan_wali`, `ortu_pendidikan_wali`, `ortu_telepon_wali`, `ortu_siswa_id`) VALUES
(1, 'Alambana', 'S1', '(+62) 884 235 8', 'Buruh', 'Usyi', 'SMP', '(+62) 876 2958 ', 'Buruh', 'Tiara Nurdiyanti', 'TNI', 'SMP', '(+62) 522 7044 ', 1),
(2, 'Akarsana', 'SMA', '022 3549 053', 'Tidak Bekerja', 'Nova', 'S1', '(+62) 237 4081 ', 'Polisi', 'Asmuni Prasasta', 'Polisi', 'SD', '(+62) 244 8945 ', 2),
(3, 'Niyaga', 'SMP', '(+62) 268 7114 ', 'Pedagang', 'Elvina', 'S2', '0408 9322 8681', 'Pedagang', 'Vera Laksita', 'Pedagang', 'SMP', '(+62) 397 3040 ', 3),
(4, 'Omar', 'SMP', '(+62) 549 5331 ', 'Tidak Bekerja', 'Fitriani', 'S1', '(+62) 423 8354 ', 'Pedagang', 'Cindy Sarah Hartati', 'Tidak Bekerja', 'S3', '(+62) 25 4330 8', 4),
(5, 'Prasetyo', 'S3', '(+62) 553 6520 ', 'Buruh', 'Lili', 'SMP', '(+62) 889 954 5', 'PNS', 'Ilsa Agustina', 'Petani', 'S2', '0899 7410 448', 5),
(6, 'Taufik', 'S3', '0294 6962 959', 'Tidak Bekerja', 'Intan', 'S3', '(+62) 679 1071 ', 'Buruh', 'Clara Maryati', 'Tidak Bekerja', 'S2', '0214 8401 638', 6),
(7, 'Tasnim', 'SD', '0347 0266 2555', 'PNS', 'Ira', 'S2', '(+62) 790 4763 ', 'Buruh', 'Naradi Mustofa', 'Tidak Bekerja', 'SD', '(+62) 21 8257 8', 7),
(8, 'Cager', 'S1', '0269 3354 420', 'PNS', 'Raisa', 'S1', '(+62) 821 812 9', 'TNI', 'Salman Salahudin', 'TNI', 'S1', '023 9986 8015', 8),
(9, 'Hendra', 'S3', '(+62) 786 7258 ', 'Petani', 'Kania', 'SD', '(+62) 350 1186 ', 'Polisi', 'Laswi Winarno', 'Petani', 'SMP', '0426 5060 793', 9),
(10, 'Kairav', 'S1', '(+62) 23 6370 6', 'Tidak Bekerja', 'Vivi', 'S3', '0743 4564 2267', 'Petani', 'Tasnim Siregar', 'Petani', 'SD', '0265 7055 108', 10),
(11, 'Karsa', 'S3', '0955 4522 7387', 'Buruh', 'Tania', 'S1', '0287 4722 600', 'Petani', 'Kamaria Irma Farida', 'Tidak Bekerja', 'SMA', '(+62) 322 3487 ', 11),
(12, 'Agus', 'SMP', '(+62) 608 6425 ', 'Polisi', 'Cindy', 'SMA', '(+62) 751 2213 ', 'Pedagang', 'Zalindra Usada', 'PNS', 'S3', '(+62) 882 9318 ', 12),
(13, 'Wasis', 'S1', '0967 3302 9313', 'Tidak Bekerja', 'Raisa', 'S1', '(+62) 376 6826 ', 'Petani', 'Ciaobella Oliva Oktaviani', 'Buruh', 'S1', '(+62) 566 9276 ', 13),
(14, 'Virman', 'SMA', '(+62) 666 6535 ', 'PNS', 'Lidya', 'SMA', '(+62) 335 8401 ', 'Polisi', 'Jayadi Prakasa', 'Tidak Bekerja', 'SMP', '(+62) 882 210 2', 14),
(15, 'Jindra', 'S1', '(+62) 450 3741 ', 'Pedagang', 'Puji', 'S1', '(+62) 332 8139 ', 'Buruh', 'Zaenab Puspita', 'Pedagang', 'S1', '025 8735 0081', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `p_id` int(11) NOT NULL,
  `p_nama` varchar(100) NOT NULL,
  `p_keterangan` varchar(225) NOT NULL,
  `p_tahun` date NOT NULL,
  `p_tingkat` varchar(15) NOT NULL,
  `p_prestasi` varchar(10) NOT NULL,
  `p_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`p_id`, `p_nama`, `p_keterangan`, `p_tahun`, `p_tingkat`, `p_prestasi`, `p_foto`) VALUES
(3, 'haris', 'Lomba Mewarnai', '2023-05-15', 'Kabupaten', 'Juara 2', '1683616434_5ccc2d6846a3b04dc4e6.jpg'),
(4, 'Melisa', 'Juara Lomba Debat', '2023-05-07', 'Provinsi', 'Juara 2', '1683420890_a01412fce1235aad73d6.jpg'),
(5, 'Nasrullah', 'Juara 1 Lomba desain UI/UX', '2023-05-09', 'Nasional', 'Juara 1', '1683598473_0cf0a63e38dbe7cdc843.jpg'),
(6, 'Septian', 'Juara Lomba Competitive Programming', '2023-05-10', 'Nasional', 'Juara 1', '1683598522_c62ec528fc8164eccafa.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil`
--

CREATE TABLE `tb_profil` (
  `profil_id` int(11) NOT NULL,
  `profil_nama` varchar(50) NOT NULL,
  `profil_alamat` varchar(100) NOT NULL,
  `profil_kepsek` varchar(50) NOT NULL,
  `profil_email` varchar(50) NOT NULL,
  `profil_kontak` varchar(15) NOT NULL,
  `profil_npsb` int(11) NOT NULL,
  `profil_status` varchar(10) NOT NULL,
  `profil_akreditasi` varchar(5) NOT NULL,
  `profil_visi` text NOT NULL,
  `profil_misi` text NOT NULL,
  `profil_deskripsi` varchar(255) NOT NULL,
  `profil_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`profil_id`, `profil_nama`, `profil_alamat`, `profil_kepsek`, `profil_email`, `profil_kontak`, `profil_npsb`, `profil_status`, `profil_akreditasi`, `profil_visi`, `profil_misi`, `profil_deskripsi`, `profil_foto`) VALUES
(1, 'SMP 1 lelea', '', 'Yudistira', 'test@gmail.com', '0897098759', 9876543, 'Good', 'A', 'Terwujudnya Peserta Didik yang Bertaqwa, Berkarakter Unggul, Berprestasi, Berwawasan Global dan Berbudaya Lingkungan', 'Menanamkan keimanan dan ketaqwaan kepada Tuhan YME, Menyelanggarakan Pendidikan dan Pelatihan Yang Berkualitas, Berwawasan Global dan Berbudaya Lingkungan', 'SMP 1 lelea merupakan tempat belajar mengajar yang beralamatkan di Mojogedang, Karangpandan, Magelang dan memiliki Kepala Sekolah bernama Yudistira hehe', '1683642291_e78e905369b43a798719.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sekolah_asal`
--

CREATE TABLE `tb_sekolah_asal` (
  `sa_id` int(11) NOT NULL,
  `sa_npsn` varchar(25) NOT NULL,
  `sa_nama_sekolah` varchar(100) NOT NULL,
  `sa_status_sekolah` enum('Negeri','Swasta') NOT NULL,
  `sa_alamat_sekolah` varchar(100) NOT NULL,
  `sa_tahun_lulus` year(4) NOT NULL,
  `sa_siswa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `siswa_id` int(11) NOT NULL,
  `siswa_nisn` varchar(25) NOT NULL,
  `siswa_password` varchar(100) NOT NULL,
  `siswa_nama` varchar(100) NOT NULL,
  `siswa_sekolah_asal` varchar(50) NOT NULL,
  `siswa_jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `siswa_tempat_lahir` varchar(50) NOT NULL,
  `siswa_tgl_lahir` date NOT NULL,
  `siswa_agama` enum('Islam','Protestan','Hindu','Katolik','Kristen','Budha','Konghucu') NOT NULL,
  `siswa_status` enum('Anak Kandung','Anak Angkat') NOT NULL,
  `siswa_alamat` varchar(100) NOT NULL,
  `siswa_telepon` varchar(15) NOT NULL,
  `siswa_email` varchar(100) NOT NULL,
  `siswa_foto` varchar(100) NOT NULL,
  `siswa_jarak` float NOT NULL,
  `siswa_token` varchar(10) NOT NULL,
  `siswa_status_pendaftaran` enum('Terdaftar','Diterima','Tidak Diterima') NOT NULL,
  `siswa_alasan_ditolak` text DEFAULT NULL,
  `siswa_alasan_pengunduran` text DEFAULT NULL,
  `siswa_ta_id` int(10) UNSIGNED NOT NULL,
  `siswa_created_at` datetime DEFAULT NULL,
  `siswa_edited_at` datetime DEFAULT NULL,
  `siswa_deleted_at` datetime DEFAULT NULL,
  `siswa_deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`siswa_id`, `siswa_nisn`, `siswa_password`, `siswa_nama`, `siswa_sekolah_asal`, `siswa_jk`, `siswa_tempat_lahir`, `siswa_tgl_lahir`, `siswa_agama`, `siswa_status`, `siswa_alamat`, `siswa_telepon`, `siswa_email`, `siswa_foto`, `siswa_jarak`, `siswa_token`, `siswa_status_pendaftaran`, `siswa_alasan_ditolak`, `siswa_alasan_pengunduran`, `siswa_ta_id`, `siswa_created_at`, `siswa_edited_at`, `siswa_deleted_at`, `siswa_deleted_by`) VALUES
(1, '4224437686', '81dc9bdb52d04dc20036dbd8313ed055', 'Ilyas Adriansyah', 'SD N 1 JAMBAK', 'Perempuan', 'Sumatera Barat', '2008-08-18', 'Islam', 'Anak Kandung', 'Ki. Rumah Sakit No. 797, Tomohon 48890, Indramayu', '0516 6426 1054', 'warta54@yahoo.com', '7aaf1fdc-3c27-3ceb-8372-5c90be2ed504.jpg', 3, 'LFG422', 'Diterima', NULL, 'Orang tua pindah domisili', 1, NULL, '2023-05-30 13:47:22', '2023-05-30 11:18:56', 1),
(2, '0293691479', '81dc9bdb52d04dc20036dbd8313ed055', 'Karna Sihotang', 'SD N 2 TUGU', 'Laki-Laki', 'Bali, 2009-12-29, 0000-00-00', '0000-00-00', 'Katolik', 'Anak Kandung', 'Dk. B.Agam 1 No. 30, Binjai 40059, Indramayu', '0235 0161 182', 'talia73@gmail.com', '9f3db2b3-0fc8-39e6-b637-d4f8e14d6354.jpg', 0, 'PCR202', 'Terdaftar', NULL, NULL, 1, NULL, '2023-06-02 00:39:13', NULL, NULL),
(3, '7780046648', '81dc9bdb52d04dc20036dbd8313ed055', 'Dian Padmasari', 'SD N 2 TUGU', 'Perempuan', 'Sulawesi Utara', '2009-07-11', 'Islam', 'Anak Kandung', 'Kpg. Basudewo No. 501, Bekasi 81276, Indramayu', '(+62) 496 8441 ', 'mulya66@gmail.com', '1eb4a46e-ae2f-334d-aa0c-2f689e9b00f3.jpg', 1, 'STP024', 'Diterima', NULL, NULL, 1, NULL, '2023-05-31 10:30:02', NULL, NULL),
(4, '6802449374', '81dc9bdb52d04dc20036dbd8313ed055', 'Dimaz Lestari', 'SD N 1 JAMBAK', 'Perempuan', 'Jambi', '2009-06-02', 'Kristen', 'Anak Kandung', 'Dk. Sam Ratulangi No. 948, Sungai Penuh 59454, Indramayu', '(+62) 874 770 3', 'dimaz.lestari@gmail.com', 'd6d57d60-3fbe-3382-aeb2-56229a301ea2.jpg', 8, 'GWS340', 'Diterima', NULL, NULL, 1, NULL, '2023-05-31 10:30:06', NULL, NULL),
(5, '7608407069', '1234', 'Eka Agustina', 'SD N 1 NUNUK', 'Perempuan', 'DI Yogyakarta', '2009-12-07', 'Kristen', 'Anak Kandung', 'Jln. Merdeka No. 951, Padang 52002, Indramayu', '0636 8632 032', 'sihombing.simon@gmail.com', '1e0ba6aa-3b93-3cd9-9532-83a028133952.jpg', 5, 'KPB042', 'Terdaftar', NULL, NULL, 0, NULL, NULL, NULL, NULL),
(6, '7073647531', '1234', 'Anita Andriani', 'SD N 2 TUGU', 'Perempuan', 'Maluku Utara', '2009-07-09', 'Konghucu', 'Anak Angkat', 'Jln. Muwardi No. 920, Pematangsiantar 51744, Indramayu', '(+62) 524 5308 ', 'harsanto.prasetya@gmail.com', '7c265764-dc1b-31a8-ae20-d5c4f74ae3af.jpg', 12, 'JWJ423', 'Terdaftar', NULL, NULL, 0, NULL, NULL, NULL, NULL),
(7, '1605911542', '1234', 'Gamani Waluyo', 'SD N 1 NUNUK', 'Laki-Laki', 'Gorontalo', '2009-07-18', 'Katolik', 'Anak Angkat', 'Kpg. Casablanca No. 195, Bengkulu 73483, Indramayu', '(+62) 484 7971 ', 'kani.pangestu@gmail.co.id', 'd110a7e0-4d20-386b-a8cd-747d422954c4.jpg', 15, 'VBK234', 'Terdaftar', NULL, NULL, 0, NULL, NULL, NULL, NULL),
(8, '6779116939', '1234', 'Chelsea Suci Usada', 'SD N 1 JAMBAK', 'Perempuan', 'Sulawesi Barat', '2009-08-21', 'Hindu', 'Anak Kandung', 'Ki. Urip Sumoharjo No. 291, Bogor 57480, Indramayu', '(+62) 545 4550 ', 'hharyanto@gmail.co.id', '84f8a945-43cf-3a17-9f25-e9777c04ae7e.jpg', 14, 'TFU243', 'Terdaftar', NULL, NULL, 0, NULL, NULL, NULL, NULL),
(9, '4024569503', '1234', 'Ajeng Rahayu', 'SD N BUNDER', 'Perempuan', 'Sulawesi Barat', '2009-05-03', 'Hindu', 'Anak Kandung', 'Jr. Kalimalang No. 294, Palopo 45573, Indramayu', '(+62) 981 6894 ', 'adriansyah.malika@yahoo.co.id', 'b9385984-1913-31f2-bdb6-4fb58ece8e37.jpg', 7, 'MKB211', 'Terdaftar', NULL, NULL, 0, NULL, NULL, NULL, NULL),
(10, '9556095039', '1234', 'Garang Sidiq Halim', 'SD N 3 TELAGASARI', 'Laki-Laki', 'Sulawesi Tenggara', '2010-02-20', 'Hindu', 'Anak Angkat', 'Ki. Babadan No. 173, Kupang 18464, Indramayu', '020 0658 866', 'salimah92@yahoo.com', 'b3b330d5-c846-376d-8283-70eb4550a89e.jpg', 13, 'ODE214', 'Terdaftar', NULL, NULL, 0, NULL, NULL, NULL, NULL),
(11, '8446130823', '1234', 'Hasna Kusmawati', 'SD N 1 JAMBAK', 'Perempuan', 'Kalimantan Timur', '2009-07-13', 'Katolik', 'Anak Kandung', 'Gg. Perintis Kemerdekaan No. 117, Bandar Lampung 78394, Indramayu', '0239 6311 843', 'saragih.zamira@gmail.com', '04c6c22b-137c-3f0f-a01a-fd6a6720e388.jpg', 6, 'JMY321', 'Terdaftar', NULL, NULL, 0, NULL, NULL, NULL, NULL),
(12, '0644576073', '1234', 'Hesti Novitasari', 'SD N 3 TELAGASARI', 'Perempuan', 'Kepulauan Riau', '2009-03-05', 'Islam', 'Anak Kandung', 'Jr. Tambak No. 311, Kupang 64640, Indramayu', '0379 3650 500', 'mala.suartini@gmail.com', 'e55c4d8d-d872-34b1-a14e-5b263918a4a4.jpg', 4, 'CAT312', 'Terdaftar', NULL, NULL, 0, NULL, NULL, NULL, NULL),
(13, '8001305449', '1234', 'Cahyono Ganda Jailani', 'SD N 2 RANCASARI', 'Laki-Laki', 'Sulawesi Selatan', '2009-02-13', 'Islam', 'Anak Angkat', 'Jln. Umalas No. 746, Padangpanjang 10937, Indramayu', '(+62) 856 8287 ', 'ika28@yahoo.co.id', 'adaca4a1-08b6-3671-ac42-6da4796b01a6.jpg', 13, 'BDD324', 'Terdaftar', NULL, NULL, 0, NULL, NULL, NULL, NULL),
(14, '682518847X', '1234', 'Manah Tampubolon', 'SD N 1 JAMBAK', 'Perempuan', 'Kalimantan Barat', '2009-03-03', 'Islam', 'Anak Kandung', 'Jr. Karel S. Tubun No. 207, Pematangsiantar 61935, Indramayu', '(+62) 418 4159 ', 'yuniar.kartika@yahoo.com', 'd95f4129-2c85-39e2-8100-6df50d30d752.jpg', 7, 'VMU234', 'Terdaftar', NULL, NULL, 0, NULL, NULL, NULL, NULL),
(15, '046627212X', '1234', 'Harto Sitorus', 'SD N 2 TUGU', 'Laki-Laki', 'Jawa Tengah', '2009-08-15', 'Hindu', 'Anak Kandung', 'Kpg. Bank Dagang Negara No. 965, Tasikmalaya 39606, Indramayu', '0235 0118 412', 'prasetya.hardiansyah@yahoo.co.id', '8af90dbf-eb19-3659-a315-3c52477e26cd.jpg', 3, 'RIN343', 'Terdaftar', NULL, 'Ortu pindah domisili', 1, NULL, '2023-05-30 13:49:43', '2023-05-30 13:49:43', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tahun_ajaran`
--

CREATE TABLE `tb_tahun_ajaran` (
  `ta_id` int(11) NOT NULL,
  `ta_tahun_ajaran` varchar(25) NOT NULL,
  `ta_kuota` int(11) NOT NULL,
  `ta_mulai_daftar` datetime DEFAULT NULL,
  `ta_selesai_daftar` datetime DEFAULT NULL,
  `ta_created_at` datetime NOT NULL,
  `ta_created_by` int(10) UNSIGNED NOT NULL,
  `ta_edited_at` datetime DEFAULT NULL,
  `ta_edited_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tahun_ajaran`
--

INSERT INTO `tb_tahun_ajaran` (`ta_id`, `ta_tahun_ajaran`, `ta_kuota`, `ta_mulai_daftar`, `ta_selesai_daftar`, `ta_created_at`, `ta_created_by`, `ta_edited_at`, `ta_edited_by`) VALUES
(1, '2023/2024', 180, '2023-05-29 00:00:00', '2023-06-03 20:07:00', '2023-05-26 17:03:22', 1, '2023-05-26 17:03:22', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_username`, `user_password`, `user_email`) VALUES
(1, 'yolanda', '81dc9bdb52d04dc20036dbd8313ed055', 'yolanda@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_berkas`
--
ALTER TABLE `tb_berkas`
  ADD PRIMARY KEY (`berkas_id`);

--
-- Indeks untuk tabel `tb_ekskul`
--
ALTER TABLE `tb_ekskul`
  ADD PRIMARY KEY (`eks_id`);

--
-- Indeks untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`galeri_id`);

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`nilai_id`);

--
-- Indeks untuk tabel `tb_orangtua`
--
ALTER TABLE `tb_orangtua`
  ADD PRIMARY KEY (`ortu_id`);

--
-- Indeks untuk tabel `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`p_id`);

--
-- Indeks untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`profil_id`);

--
-- Indeks untuk tabel `tb_sekolah_asal`
--
ALTER TABLE `tb_sekolah_asal`
  ADD PRIMARY KEY (`sa_id`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- Indeks untuk tabel `tb_tahun_ajaran`
--
ALTER TABLE `tb_tahun_ajaran`
  ADD PRIMARY KEY (`ta_id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_berkas`
--
ALTER TABLE `tb_berkas`
  MODIFY `berkas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_ekskul`
--
ALTER TABLE `tb_ekskul`
  MODIFY `eks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `nilai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_orangtua`
--
ALTER TABLE `tb_orangtua`
  MODIFY `ortu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `profil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_sekolah_asal`
--
ALTER TABLE `tb_sekolah_asal`
  MODIFY `sa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_tahun_ajaran`
--
ALTER TABLE `tb_tahun_ajaran`
  MODIFY `ta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
