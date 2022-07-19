-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2022 pada 17.31
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tunas_ngoding`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `hobi` varchar(100) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `changed_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `alamat`, `no_hp`, `hobi`, `created_on`, `changed_on`) VALUES
(1, 'David', 'mail@mail.com', 'Bekasi', '0', 'Nonton Film', '2022-07-19 09:56:40', '2022-07-19 09:57:06'),
(2, 'Davidd', 'mail@mail.com', 'Kranggan Permai', '0', 'lari pagi', '2022-07-19 09:56:40', '2022-07-19 09:57:06'),
(3, 'John Doe', 'johndoe@mail.com', 'elm street', '12345', '', '2022-07-19 09:56:40', '2022-07-19 09:57:06'),
(4, 'qweqw', 'qweqwe', 'qwewqe', 'qwewqe', 'qwewqe', '2022-07-19 09:56:40', '2022-07-19 09:57:06'),
(5, 'adfadf', 'adfdaf', 'adsfdfs', 'adsdfs', 'adsffd', '2022-07-19 09:56:40', '2022-07-19 09:57:06'),
(6, 'adsfad', 'adsfadsf', 'asdfsadf', 'adsfsdaf', 'asdfdsaf', '2022-07-19 09:56:40', '2022-07-19 09:57:06'),
(7, 'johhny jon', 'jon@mail.com', 'disini', '082123131247', 'sunmori', '2022-07-19 09:56:40', '2022-07-19 09:57:06'),
(8, 'avocado', 'avocado@mail.com', 'kebon orang', '123456', 'tidur', '2022-07-19 09:56:40', '2022-07-19 09:57:06'),
(9, 'Jane Doe', 'jane_doe@mail.com', 'Crystal Lake', '12345666', 'Swimming', '2022-07-19 10:01:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_account`
--

INSERT INTO `user_account` (`id`, `username`, `password`, `create_timestamp`) VALUES
(4, 'admin', '$2y$10$soauwnY0hi8.lsEJuNx82OMZkT77F8vMs0xGYOuZ83/X3dCZUcvla', '2022-07-19 07:52:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
