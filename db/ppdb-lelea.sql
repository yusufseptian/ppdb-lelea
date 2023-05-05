-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 05 Bulan Mei 2023 pada 12.05
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

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
  `berkas_id` int NOT NULL,
  `berkas_ijazah` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `berkas_akta` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `berkas_kk` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `berkas_ktp_ortu` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `berkas_nisn` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `berkas_ijazah_mda` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `berkas_user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ekskul`
--

CREATE TABLE `tb_ekskul` (
  `eks_id` int NOT NULL,
  `eks_nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `eks_kategori` enum('Wajib','Pilihan') COLLATE utf8mb4_general_ci NOT NULL,
  `eks_foto` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_ekskul`
--

INSERT INTO `tb_ekskul` (`eks_id`, `eks_nama`, `eks_kategori`, `eks_foto`) VALUES
(1, 'Macul', 'Wajib', '1680422855_0fb6226e9660f9bf72f0.jpg'),
(2, 'Mancing', 'Pilihan', '1680422855_0fb6226e9660f9bf72f0.jpg'),
(3, 'Pramuka', 'Wajib', '1680422855_0fb6226e9660f9bf72f0.jpg'),
(4, 'Muncak', 'Pilihan', '1680422855_0fb6226e9660f9bf72f0.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `galeri_id` int NOT NULL,
  `galeri_nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `galeri_foto` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_galeri`
--

INSERT INTO `tb_galeri` (`galeri_id`, `galeri_nama`, `galeri_foto`) VALUES
(1, 'Shole HAH', '1680422909_13c3f76484213ba55467.jpg'),
(2, 'Gamabar babi', '1680422909_13c3f76484213ba55467.jpg'),
(3, 'gambar kucing', '1680422909_13c3f76484213ba55467.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `nilai_id` int NOT NULL,
  `nilai_ipa` int NOT NULL,
  `nilai_mtk` int NOT NULL,
  `nilai_inggris` int NOT NULL,
  `nilai_indo` int NOT NULL,
  `nilai_user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_orangtua`
--

CREATE TABLE `tb_orangtua` (
  `ortu_id` int NOT NULL,
  `ortu_nama_ayah` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ortu_pendidikan_ayah` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ortu_telepon_ayah` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `ortu_pekerjaan_ayah` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ortu_nama_ibu` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ortu_pendidikan_ibu` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ortu_telepon_ibu` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `ortu_pekerjaan_ibu` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ortu_nama_wali` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ortu_pekerjaan_wali` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ortu_pendidikan_wali` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ortu_telepon_wali` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `ortu_siswa_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `p_id` int NOT NULL,
  `p_nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `p_keterangan` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `p_tahun` date NOT NULL,
  `p_tingkat` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `p_prestasi` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `p_foto` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`p_id`, `p_nama`, `p_keterangan`, `p_tahun`, `p_tingkat`, `p_prestasi`, `p_foto`) VALUES
(3, 'haris', 'Lomba Mewarnai', '2023-04-06', 'Kabupaten', 'Juara 1', '1680799495_d6ae740f7e1ad7a93304.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil`
--

CREATE TABLE `tb_profil` (
  `profil_id` int NOT NULL,
  `profil_nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `profil_alamat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `profil_kepsek` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `profil_email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `profil_kontak` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `profil_npsb` int NOT NULL,
  `profil_status` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `profil_akreditasi` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `profil_visi` text COLLATE utf8mb4_general_ci NOT NULL,
  `profil_misi` text COLLATE utf8mb4_general_ci NOT NULL,
  `profil_deskripsi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`profil_id`, `profil_nama`, `profil_alamat`, `profil_kepsek`, `profil_email`, `profil_kontak`, `profil_npsb`, `profil_status`, `profil_akreditasi`, `profil_visi`, `profil_misi`, `profil_deskripsi`) VALUES
(1, 'SMP 1 lelea', 'Mojogedang, Karangpandan, Magelang', 'Yudist', 'anjay@g.com', '0897098759', 9876543, 'Good', 'A', 'Terwujudnya Peserta Didik yang Bertaqwa, Berkarakter Unggul, Berprestasi, Berwawasan Global dan Berbudaya Lingkungan', 'Menanamkan keimanan dan ketaqwaan kepada Tuhan YME, Menyelanggarakan Pendidikan dan Pelatihan Yang Berkualitas, Berwawasan Global dan Berbudaya Lingkungan', 'SMP 1 lelea merupakan tempat belajar mengajar yang beralamatkan di Mojogedang, Karangpandan, Magelang dan memiliki Kepala Sekolah bernama Yudist ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_role`
--

CREATE TABLE `tb_role` (
  `role_id` int NOT NULL,
  `role_nama` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sekolah_asal`
--

CREATE TABLE `tb_sekolah_asal` (
  `sa_id` int NOT NULL,
  `sa_npsn` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `sa_nama_sekolah` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `sa_status_sekolah` enum('Negeri','Swasta') COLLATE utf8mb4_general_ci NOT NULL,
  `sa_alamat_sekolah` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `sa_tahun_lulus` year NOT NULL,
  `sa_siswa_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `siswa_id` int NOT NULL,
  `siswa_nisn` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `siswa_username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `siswa_password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `siswa_nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `siswa_jk` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_general_ci NOT NULL,
  `siswa_tempat_lahir` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `siswa_tgl_lahir` date NOT NULL,
  `siswa_agama` enum('Islam','Protestan','Hindu','Katolik','Kristen','Budha','Konghucu') COLLATE utf8mb4_general_ci NOT NULL,
  `siswa_status` enum('Anak Kandung','Anak Angkat') COLLATE utf8mb4_general_ci NOT NULL,
  `siswa_alamat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `siswa_telepon` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `siswa_email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `siswa_foto` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `siswa_jarak` int NOT NULL,
  `siswa_token` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tahun_ajaran`
--

CREATE TABLE `tb_tahun_ajaran` (
  `ta_id` int NOT NULL,
  `ta_tahun_ajaran` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `ta_kuota` int NOT NULL,
  `ta_status` enum('aktif','tidak aktif') COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int NOT NULL,
  `user_username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `user_password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `user_email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `user_token` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `user_role_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indeks untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`role_id`);

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
  MODIFY `berkas_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_ekskul`
--
ALTER TABLE `tb_ekskul`
  MODIFY `eks_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `galeri_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `nilai_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_orangtua`
--
ALTER TABLE `tb_orangtua`
  MODIFY `ortu_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `p_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `profil_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `role_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_sekolah_asal`
--
ALTER TABLE `tb_sekolah_asal`
  MODIFY `sa_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `siswa_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_tahun_ajaran`
--
ALTER TABLE `tb_tahun_ajaran`
  MODIFY `ta_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
