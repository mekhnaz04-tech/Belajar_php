-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2026 pada 09.10
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar_php`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nid` char(5) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `kode_mk` char(5) NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `ruangan` char(5) NOT NULL,
  `nid` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` varchar(20) NOT NULL,
  `matakuliah` varchar(100) NOT NULL,
  `sks` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `matakuliah`, `sks`) VALUES
('IF101', 'Algoritma & Pemrograman', 3),
('IF102', 'Struktur Data', 3),
('IF301', 'Jaringan Komputer', 3),
('SI201', 'Basis Data', 3),
('SI202', 'Pemrograman Web', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `krs`
--

CREATE TABLE `krs` (
  `id_krs` int(11) NOT NULL,
  `nim` char(10) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `pertemuan1` time DEFAULT NULL,
  `pertemuan2` time DEFAULT NULL,
  `pertemuan3` time DEFAULT NULL,
  `pertemuan4` time DEFAULT NULL,
  `pertemuan5` time DEFAULT NULL,
  `nilai_tm` int(3) DEFAULT NULL,
  `nilai_uts` int(3) DEFAULT NULL,
  `nilai_uas` int(3) DEFAULT NULL,
  `nilai_akhir` decimal(5,2) DEFAULT NULL,
  `grade` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` char(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_lengkap`, `jurusan`) VALUES
('2212476036', 'Mekhnaz Rizkiyah Adawiyah', 'Sistem Informasi'),
('2231376366', 'Ivan Ibnu Maulida Pratomo', 'Teknik Informatika'),
('2311477196', 'Arya Budi Estiawan', 'Sistem Informasi'),
('2311477203', 'Hilmi Andika', 'Sistem Informasi'),
('2311477477', 'Nabhil Syahdilan', 'Sistem Informasi'),
('2311490411', 'Bili Pendi Kerismawan', 'Sistem Informasi'),
('2322414870', 'Oktavia Putri Ramadhani', 'Teknik Informatika'),
('2322469050', 'Achmad Faiz Munandar', 'Teknik Informatika'),
('2322469712', 'Sodaqo Wadah', 'Teknik Informatika'),
('2322473351', 'Muhamad Azril Ferdian', 'Teknik Informatika'),
('2322473624', 'Topan Wijaksono', 'Teknik Informatika'),
('2322473662', 'Aditya Dwi Kurniawan', 'Teknik Informatika'),
('2322476484', 'Jhonsabarsen Gultom', 'Teknik Informatika'),
('2322476584', 'Faris Al Faqih', 'Teknik Informatika'),
('2322476644', 'Muhammad Ryan Alim Fasah', 'Teknik Informatika'),
('2322476655', 'Hidayat Nur Khalik', 'Teknik Informatika'),
('2322476764', 'Fawwaz Sadewo', 'Teknik Informatika'),
('2322476815', 'Muhammad Rafli Husein', 'Teknik Informatika'),
('2322476825', 'Dyo Ananta', 'Teknik Informatika'),
('2322476884', 'Adiel Baja Kelana', 'Teknik Informatika'),
('2322476917', 'Muhammad Daffa Almajid', 'Teknik Informatika'),
('2322476952', 'Muhammad Fauzan', 'Teknik Informatika'),
('2322477009', 'Mifthahul Maulana Kamal', 'Teknik Informatika'),
('2322477039', 'Rafli Surya Saputra', 'Teknik Informatika'),
('2322477047', 'Muhammad Faiz Maulana', 'Teknik Informatika'),
('2322477078', 'Ahmad Saeful amri', 'Teknik Informatika'),
('2322477083', 'Izzudin Abdul Qohar', 'Teknik Informatika'),
('2322477217', 'Muhammad Raka Arifa Ilham', 'Teknik Informatika'),
('2322477248', 'Aan Adi Pratama', 'Teknik Informatika'),
('2322477267', 'Sulistyo', 'Teknik Informatika'),
('2322477303', 'Muhammad Toha Marup Alkarhi', 'Teknik Informatika'),
('2322477411', 'Maulana Yazid Maghribi', 'Teknik Informatika'),
('2322477488', 'Angga Pramudya', 'Teknik Informatika'),
('2322477590', 'Muhamad Riffa Aulia', 'Teknik Informatika'),
('2322490227', 'Wildan Syahid Al Farisi', 'Teknik Informatika'),
('2322490273', 'Monica Cania', 'Teknik Informatika'),
('2322490342', 'Yabes Henli Salem', 'Teknik Informatika'),
('2331423855', 'Nazwa Pratiwi', 'Sistem Komputer'),
('2331435499', 'Aimar Fadli Dinata', 'Sistem Komputer'),
('2331473509', 'Mohamad Wisnu Andarma', 'Sistem Komputer'),
('2331476806', 'Ocefath Kresnajaya', 'Sistem Komputer'),
('2331477125', 'Muhamad Syahril', 'Sistem Komputer'),
('2331477132', 'Novan Firdaus', 'Sistem Komputer'),
('2331477142', 'Hikmal Fauzan', 'Sistem Komputer'),
('2331477170', 'Damar Dwi Permana', 'Sistem Komputer'),
('2331477274', 'Muhamad Pradana Arrafi', 'Sistem Komputer'),
('2331477322', 'Fauzan Agniriawan Santoso', 'Sistem Komputer'),
('2331477341', 'Widya Puspitasari', 'Sistem Komputer'),
('2331477606', 'Feliko Kariansyah', 'Sistem Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_mk` char(5) NOT NULL,
  `nama_mk` varchar(100) NOT NULL,
  `sks` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `role` enum('admin','dosen','mahasiswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nid`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `kode_mk` (`kode_mk`),
  ADD KEY `nid` (`nid`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indeks untuk tabel `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`),
  ADD KEY `nim` (`nim`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kode_mk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `krs`
--
ALTER TABLE `krs`
  MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`kode_mk`) REFERENCES `matakuliah` (`kode_mk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`nid`) REFERENCES `dosen` (`nid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `krs`
--
ALTER TABLE `krs`
  ADD CONSTRAINT `krs_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `krs_ibfk_2` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
