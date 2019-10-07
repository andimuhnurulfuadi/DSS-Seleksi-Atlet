-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Apr 2019 pada 02.18
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_sub_kriteria`
--

CREATE TABLE `detail_sub_kriteria` (
  `kd_subkt` char(5) NOT NULL,
  `kd_range` char(5) NOT NULL,
  `syarat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_sub_kriteria`
--

INSERT INTO `detail_sub_kriteria` (`kd_subkt`, `kd_range`, `syarat`) VALUES
('SK001', 'R0002', ''),
('SK001', 'R0001', ''),
('SK002', 'R0001', 'Usia lebih dari 18 Tahun'),
('SK002', 'R0002', 'Usia 17 - 18 Tahun        '),
('SK002', 'R0003', 'Usia 16 Tahun         '),
('SK002', 'R0004', 'Usia kurang dari 16 Tahun             '),
('SK003', 'R0001', 'Di atas kelas 2 SMA '),
('SK003', 'R0002', ' Kelas 1 - 2 SMA'),
('SK003', 'R0003', 'Kelas 3 SMP      '),
('SK003', 'R0004', 'Di bawah Kelas 3 SMP'),
('SK004', 'R0001', 'Pukulan yang benar Kurang dari 4'),
('SK004', 'R0003', '                     Pukulan yang benar 7 - 9   '),
('SK004', 'R0002', '                     Pukulan yang benar 4 - 6   '),
('SK004', 'R0004', '                   Pukulan yang benar 10     '),
('SK005', 'R0001', '              Tendangan yang benar kurang dari 4          '),
('SK005', 'R0002', '                        Tendangan yang benar 4 - 6'),
('SK005', 'R0003', '                        Tendangan yang benar 7 - 9'),
('SK005', 'R0004', '                       Tendangan yang benar 10 '),
('SK006', 'R0003', '                    Tendangan yang benar 7 - 9    '),
('SK006', 'R0004', '           Tendangan yang benar 10             '),
('SK006', 'R0002', '                    Tendangan yang benar 4 -6    '),
('SK006', 'R0001', '                    Tendangan yang kurang dari 4'),
('SK007', 'R0001', '                       Tendangan yang benar kurang dari 4 '),
('SK007', 'R0002', '                    Tendangan yang benar 4 - 6    '),
('SK007', 'R0003', '                        Tendangan yang benar 7 - 9'),
('SK007', 'R0004', '                        Tendangan yang benar 10'),
('SK008', 'R0002', '                        Waktu tempuh 4.35 - 5.12 detik'),
('SK008', 'R0001', '                  Waktu tempuh lebih dari 5.12 detik      '),
('SK008', 'R0003', '                        Waktu tempuh 3.92 - 4.34'),
('SK008', 'R0004', '                        Waktu tempuh kurang dari 3.92 detik'),
('SK009', 'R0001', '                        Sit up kurang dari 29 kali'),
('SK009', 'R0002', '                        Sit up 30 - 49 kali'),
('SK009', 'R0003', '                        Sit up 50 - 69 kali'),
('SK009', 'R0004', '                      Sit up lebih dari 70 kali  '),
('SK010', 'R0001', '              Push up kurang dari 11 kali          '),
('SK010', 'R0002', '                        Push up 12 - 19 kali'),
('SK010', 'R0003', '                        push up 20 - 28 kali'),
('SK010', 'R0004', '                        push up lebih dari 29 kali'),
('SK011', 'R0001', '                        Jangkauan loncat kurang dari 45 cm'),
('SK011', 'R0002', '                        Jangkauan loncat 46 - 52 cm'),
('SK011', 'R0003', '                        Jangkauan loncat 53 - 61 cm'),
('SK011', 'R0004', '                        Jangkauan loncat lebih dari 62 cm'),
('SK012', 'R0001', '                        Waktu tempuh lebih dari 17.2 detik'),
('SK012', 'R0002', '                        Waktu tempuh 16.6 - 17.1 detik'),
('SK012', 'R0003', '                        Waktu tempuh 16.1 - 16.5 detik'),
('SK012', 'R0004', '                   Waktu tempuh kurang dari 16 detik     '),
('SK013', 'R0001', '                        Waktu tempuh lebih dari 77.2 detik'),
('SK013', 'R0002', '                        Waktu tempuh 65.2 - 77.1 detik'),
('SK013', 'R0003', '                        Waktu tempuh 59.1 - 65.1 detik'),
('SK013', 'R0004', '                       Waktu tempuh kurang dari 59 detik '),
('SK014', 'R0001', '                 Score VO2Max kurang dari 38.3        '),
('SK014', 'R0002', '                        Score VO2Max 38.3 - 45.1'),
('SK014', 'R0003', '                        Score VO2Max 45.2 - 50.9'),
('SK014', 'R0004', '                        Score VO2Max lebih dari 51'),
('SK015', 'R0001', '                        BMI kurang dari 18 dan BMI lebih dari 27'),
('SK015', 'R0002', '                        BMI 25 - 27'),
('SK015', 'R0003', '                        BMI 18 - 21'),
('SK015', 'R0004', '                        BMI 22 - 25'),
('SK016', 'R0001', '                        Belum memiliki prestasi'),
('SK016', 'R0002', '                        Memiliki prestasi tingkat kabupaten'),
('SK016', 'R0003', '                        Memiliki prestasi tingkat provinsi'),
('SK016', 'R0004', '                        Memiliki prestasi tingkat nasional atau internasional');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `kd_admin` char(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenkel` char(1) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `jabatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`kd_admin`, `nama`, `jenkel`, `user`, `pass`, `jabatan`) VALUES
('A0001', 'Andi', 'L', 'admin', 'admin', 'admin'),
('A0002', 'Bagas123', 'L', 'bagas123', 'bagas123', 'pelatih takraw'),
('A0003', 'wawan', 'P', 'wawan123', 'wawan123', 'pelatih silat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_atlit`
--

CREATE TABLE `tbl_atlit` (
  `kd_atlit` char(5) NOT NULL,
  `kd_cabor` char(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jenkel` char(1) NOT NULL,
  `umur` int(2) NOT NULL,
  `tinggi` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `nama_orangtua` varchar(30) NOT NULL,
  `telepon` char(13) NOT NULL,
  `sekolah` varchar(30) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `user_atlit` varchar(30) NOT NULL,
  `pass_atlit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_atlit`
--

INSERT INTO `tbl_atlit` (`kd_atlit`, `kd_cabor`, `nama`, `ttl`, `jenkel`, `umur`, `tinggi`, `berat`, `nama_orangtua`, `telepon`, `sekolah`, `kelas`, `user_atlit`, `pass_atlit`) VALUES
('AT001', 'CB001', 'Nanang Darmawan ', 'Lampung, 26-01-1998', 'L', 19, 179, 59, 'BAGAS123', '081292123322', 'SMA MUHAMMADIYAH 2', '2 SMA', '123', '123'),
('AT002', 'CB001', 'Rian', 'papua, 17 juli 1998', 'L', 17, 165, 55, 'munir', '01892292232', 'SMAN 3 Mamuju', '3 SMA', 'rian', 'rian'),
('AT003', 'CB001', 'Wahyu', 'Surabaya, 17 juli 1999', 'L', 18, 160, 50, 'wawa', '081123321123', 'SMAN 1 Mamuju', '1 SMA', 'wahyu', 'wahyu'),
('AT004', 'CB001', 'Manji', 'Jakarta, 26-01-1998', 'L', 18, 179, 59, 'qert', '082222221112', 'SMP 4', '3 SMP', 'manji', 'manji');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cabor`
--

CREATE TABLE `tbl_cabor` (
  `kd_cabor` char(5) NOT NULL,
  `nama_cabor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_cabor`
--

INSERT INTO `tbl_cabor` (`kd_cabor`, `nama_cabor`) VALUES
('CB001', 'Pencak Silat'),
('CB002', 'Sepak Takraw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `kd_kriteria` char(5) NOT NULL,
  `jenis_kt` varchar(10) NOT NULL,
  `nama_kt` varchar(30) NOT NULL,
  `bobot_kt` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`kd_kriteria`, `jenis_kt`, `nama_kt`, `bobot_kt`) VALUES
('K0001', 'cost', 'Usia dan Kelas', 10),
('K0002', 'benefit', 'Keterampilan', 30),
('K0003', 'benefit', 'Fisik', 30),
('K0004', 'benefit', 'Kesehatan', 20),
('K0005', 'benefit', 'Prestasi', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `kd_pengumuman` char(5) NOT NULL,
  `nama_pengumuman` varchar(30) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`kd_pengumuman`, `nama_pengumuman`, `isi`) VALUES
('P0003', 'Jadwal Seleksi PPLP', 'Disampaikan kepada seluruh atlit cabang olahraga Sepak takraw dan Pencak Silat di Sulawesi Barat, bahwa PPLP Sulawesi Barat akan melakukan proses seleksi  pada tanggal 17 april 2019.\r\nBagi atlit yang ingin ikut serta dalam proses seleksi diharapkan hadir pada tanggal yang telah di tetapkan di PPLP Sulawesi Barat\r\n \r\n                        '),
('P0004', 'Daftar Atlit Yang Lolos seleks', 'Berikut adalah daftar atlit yang berhasil lolos seleksi masuk PPLP Sulawesi Barat :<br />\r\n1. Andi (Pencak silat)<br />\r\n2. Agus (Sepak Takraw)<br />\r\n3. Mardiana (Sepak takraw)<br />\r\nBagi atlit yang telah dinyatakan lolos, agar sekiranya melengkapi berkasi dan dikumpulkan di PPLP maksimal tanggal 5 mei 2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penilaian`
--

CREATE TABLE `tbl_penilaian` (
  `kd_penilaian` char(5) NOT NULL,
  `kd_atlit` char(5) NOT NULL,
  `tgl` date NOT NULL,
  `C1` double NOT NULL,
  `C2` double NOT NULL,
  `C3` double NOT NULL,
  `C4` double NOT NULL,
  `C5` double NOT NULL,
  `total` double NOT NULL,
  `nilai_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penilaian`
--

INSERT INTO `tbl_penilaian` (`kd_penilaian`, `kd_atlit`, `tgl`, `C1`, `C2`, `C3`, `C4`, `C5`, `total`, `nilai_akhir`) VALUES
('N0001', 'AT001', '2019-04-10', 3, 3.5, 3.5714285714286, 2, 3, 15.071428571429, 0.78952380952381),
('N0002', 'AT002', '2019-04-10', 3, 3.5, 3.1428571428571, 2, 4, 15.642857142857, 0.78238095238095),
('N0003', 'AT003', '2019-04-10', 2, 3.75, 2.8571428571429, 4, 1, 13.607142857143, 0.83928571428572),
('N0004', 'AT004', '2019-04-10', 2.5, 3, 4, 3, 2, 14.5, 0.82);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_range_penilaian`
--

CREATE TABLE `tbl_range_penilaian` (
  `kd_range` char(5) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_range_penilaian`
--

INSERT INTO `tbl_range_penilaian` (`kd_range`, `keterangan`, `nilai`) VALUES
('R0001', 'Buruk', 1),
('R0002', 'Cukup', 2),
('R0003', 'Baik', 3),
('R0004', 'Sangat Baik', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sub_kriteria`
--

CREATE TABLE `tbl_sub_kriteria` (
  `kd_subkt` char(5) NOT NULL,
  `kd_cabor` char(5) NOT NULL,
  `kd_kriteria` char(5) NOT NULL,
  `nama_subkt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sub_kriteria`
--

INSERT INTO `tbl_sub_kriteria` (`kd_subkt`, `kd_cabor`, `kd_kriteria`, `nama_subkt`) VALUES
('SK001', 'CB002', 'K0001', 'Kelas'),
('SK002', 'CB001', 'K0001', 'Usia'),
('SK003', 'CB001', 'K0001', 'Kelas'),
('SK004', 'CB001', 'K0002', 'Dasar Pukulan'),
('SK005', 'CB001', 'K0002', 'Dasar Tendangan Lurus'),
('SK006', 'CB001', 'K0002', 'Dasar Tendangan Sabit'),
('SK007', 'CB001', 'K0002', 'Dasar Tendangan T'),
('SK008', 'CB001', 'K0003', 'Kecepatan'),
('SK009', 'CB001', 'K0003', 'Power Perut'),
('SK010', 'CB001', 'K0003', 'Power Lengan'),
('SK011', 'CB001', 'K0003', 'Power Kaki'),
('SK012', 'CB001', 'K0003', 'Kelincahan'),
('SK013', 'CB001', 'K0003', 'Daya Tahan Anaerobik'),
('SK014', 'CB001', 'K0003', 'Daya Tahan Aerobik'),
('SK015', 'CB001', 'K0004', 'Body Massa Indeks (BMI)'),
('SK016', 'CB001', 'K0005', 'Prestasi Yang Pernah Diraih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_temp_normalisasi`
--

CREATE TABLE `tbl_temp_normalisasi` (
  `kd_normalisasi` char(5) NOT NULL,
  `kd_penilaian` char(5) NOT NULL,
  `N1` double NOT NULL,
  `N2` double NOT NULL,
  `N3` double NOT NULL,
  `N4` double NOT NULL,
  `N5` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_temp_normalisasi`
--

INSERT INTO `tbl_temp_normalisasi` (`kd_normalisasi`, `kd_penilaian`, `N1`, `N2`, `N3`, `N4`, `N5`, `total`) VALUES
('NS001', 'N0001', 0.66666666666667, 0.93333333333333, 0.89285714285715, 0.5, 0.75, 3.7428571428571),
('NS002', 'N0002', 0.66666666666667, 0.93333333333333, 0.78571428571428, 0.5, 1, 3.8857142857143),
('NS003', 'N0003', 1, 1, 0.71428571428572, 1, 0.25, 3.9642857142857),
('NS004', 'N0004', 0.8, 0.8, 1, 0.75, 0.5, 3.85);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indeks untuk tabel `tbl_atlit`
--
ALTER TABLE `tbl_atlit`
  ADD PRIMARY KEY (`kd_atlit`);

--
-- Indeks untuk tabel `tbl_cabor`
--
ALTER TABLE `tbl_cabor`
  ADD PRIMARY KEY (`kd_cabor`);

--
-- Indeks untuk tabel `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`kd_kriteria`);

--
-- Indeks untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`kd_pengumuman`);

--
-- Indeks untuk tabel `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  ADD PRIMARY KEY (`kd_penilaian`);

--
-- Indeks untuk tabel `tbl_range_penilaian`
--
ALTER TABLE `tbl_range_penilaian`
  ADD PRIMARY KEY (`kd_range`);

--
-- Indeks untuk tabel `tbl_sub_kriteria`
--
ALTER TABLE `tbl_sub_kriteria`
  ADD PRIMARY KEY (`kd_subkt`);

--
-- Indeks untuk tabel `tbl_temp_normalisasi`
--
ALTER TABLE `tbl_temp_normalisasi`
  ADD PRIMARY KEY (`kd_normalisasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
