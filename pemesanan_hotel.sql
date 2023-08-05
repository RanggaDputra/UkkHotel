-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Bulan Mei 2022 pada 03.22
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemesanan_hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbfasilitas`
--

CREATE TABLE `tbfasilitas` (
  `idFasilitas` int(30) NOT NULL,
  `namaFasilitas` varchar(30) NOT NULL,
  `typeKamar` varchar(100) NOT NULL,
  `imgfasilitas` varchar(1000) NOT NULL,
  `locatio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbfasilitas`
--

INSERT INTO `tbfasilitas` (`idFasilitas`, `namaFasilitas`, `typeKamar`, `imgfasilitas`, `locatio`) VALUES
(1, 'kolam renang', 'untuk mandi', 'kolam renang', 'files/kolam renang.jpeg'),
(2, 'Kasur', 'Double Size', 'kasur', 'files/kasur.jpg'),
(3, 'TV', '40 INC', 'tv', 'files/tv.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpegawai`
--

CREATE TABLE `tbpegawai` (
  `Nip` int(18) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `level` int(11) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbpegawai`
--

INSERT INTO `tbpegawai` (`Nip`, `nama`, `jabatan`, `level`, `password`) VALUES
(1, 'selta', 'admin', 1, 'selta'),
(2, 'selto', 'resepsionis', 3, 'selto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpemesanan`
--

CREATE TABLE `tbpemesanan` (
  `noData` varchar(11) NOT NULL,
  `noPesanan` varchar(11) NOT NULL,
  `namaPemesan` varchar(300) NOT NULL,
  `tglCheckin` varchar(30) NOT NULL,
  `tglCheckout` varchar(50) NOT NULL,
  `noHp` varchar(15) NOT NULL,
  `namaTamu` varchar(15) NOT NULL,
  `typeKamar` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbpemesanan`
--

INSERT INTO `tbpemesanan` (`noData`, `noPesanan`, `namaPemesan`, `tglCheckin`, `tglCheckout`, `noHp`, `namaTamu`, `typeKamar`, `email`, `status`) VALUES
('1', '1', 'selta jaya putra', '2022-04-09', '2022-04-27', '0822', 'selta', 'Kamar A', 'seltajaya.16@gmail.com', 1),
('2', '2', 'coba', '2022-04-02', '2022-04-19', '0822', 'selta', 'Kamar A', 'dikaseta.ds@gmail.com', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtamu`
--

CREATE TABLE `tbtamu` (
  `noKTP` varchar(20) NOT NULL,
  `namaTamu` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtypekamar`
--

CREATE TABLE `tbtypekamar` (
  `idKamar` char(5) NOT NULL,
  `typeKamar` char(15) NOT NULL,
  `jumlahKamar` int(11) NOT NULL,
  `gambarKamar` char(25) NOT NULL,
  `lokasi` varchar(1000) NOT NULL,
  `namaFasilitas` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbtypekamar`
--

INSERT INTO `tbtypekamar` (`idKamar`, `typeKamar`, `jumlahKamar`, `gambarKamar`, `lokasi`, `namaFasilitas`) VALUES
('1', 'Superior', 3, 'kamar standar', 'files2/kamar standar.jpg', 'kolam renang, kasur'),
('2', 'Deluxe', 3, 'kamar deluxe', 'files2/kamar deluxe.webp', 'Kolam Renang, Kasur, TV'),
('3', 'Standar', 3, 'kamar standar', 'files2/kamar standar.jpg', 'Kasur, TV');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbfasilitas`
--
ALTER TABLE `tbfasilitas`
  ADD PRIMARY KEY (`idFasilitas`);

--
-- Indeks untuk tabel `tbpegawai`
--
ALTER TABLE `tbpegawai`
  ADD PRIMARY KEY (`Nip`);

--
-- Indeks untuk tabel `tbpemesanan`
--
ALTER TABLE `tbpemesanan`
  ADD PRIMARY KEY (`noData`),
  ADD KEY `typeKamar` (`typeKamar`);

--
-- Indeks untuk tabel `tbtamu`
--
ALTER TABLE `tbtamu`
  ADD PRIMARY KEY (`noKTP`);

--
-- Indeks untuk tabel `tbtypekamar`
--
ALTER TABLE `tbtypekamar`
  ADD PRIMARY KEY (`idKamar`),
  ADD KEY `typeKamar` (`typeKamar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbfasilitas`
--
ALTER TABLE `tbfasilitas`
  MODIFY `idFasilitas` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
