-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2019 pada 14.53
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_siswa`
--

CREATE TABLE `catatan_siswa` (
  `id_catatan` int(10) UNSIGNED NOT NULL,
  `id_nilai_siswa` int(10) UNSIGNED NOT NULL,
  `absensi_sakit` int(11) NOT NULL,
  `absensi_ijin` int(11) NOT NULL,
  `absensi_tanpa_keterangan` int(11) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `kesehatan_pendengaran` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kesehatan_pengelihatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kesehatan_gigi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kesehatan_lainnya` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prestasi_akademik` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `catatan_siswa`
--

INSERT INTO `catatan_siswa` (`id_catatan`, `id_nilai_siswa`, `absensi_sakit`, `absensi_ijin`, `absensi_tanpa_keterangan`, `tinggi_badan`, `berat_badan`, `kesehatan_pendengaran`, `kesehatan_pengelihatan`, `kesehatan_gigi`, `kesehatan_lainnya`, `prestasi_akademik`, `created_at`, `updated_at`) VALUES
(1, 14, 1, 2, 3, 120, 28, 'Baik', 'Baik', 'Baik dan sehat', 'Sehat', 'Diatas rata - rata siswa lainnya', '2019-12-05 15:22:54', '2019-12-05 15:22:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekskul_siswa`
--

CREATE TABLE `ekskul_siswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_siswa` int(10) UNSIGNED NOT NULL,
  `id_ekskul` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ekskul_siswa`
--

INSERT INTO `ekskul_siswa` (`id`, `id_siswa`, `id_ekskul`, `created_at`, `updated_at`) VALUES
(10, 2, 1, '2019-12-04 14:26:29', '2019-12-04 14:26:29'),
(11, 3, 1, '2019-12-04 14:27:01', '2019-12-04 14:27:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `id_ekskul` int(10) UNSIGNED NOT NULL,
  `nama_ekskul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pengajar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari_mengajar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_mengajar` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ekstrakulikuler`
--

INSERT INTO `ekstrakulikuler` (`id_ekskul`, `nama_ekskul`, `nama_pengajar`, `hari_mengajar`, `jam_mengajar`, `created_at`, `updated_at`) VALUES
(1, 'Pramuka', 'Pak Maman', 'Sabtu', '15:00:00', '2019-09-28 15:08:05', '2019-11-05 05:22:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru_karyawan`
--

CREATE TABLE `guru_karyawan` (
  `id_guru` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIP` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUPTK` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_guru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_terakhir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_guru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto_guru` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `guru_karyawan`
--

INSERT INTO `guru_karyawan` (`id_guru`, `nama`, `NIP`, `NUPTK`, `tempat_lahir`, `status_guru`, `golongan`, `pendidikan_terakhir`, `jenis_kelamin`, `jabatan`, `agama`, `alamat`, `tipe_guru`, `tgl_lahir`, `foto_guru`, `created_at`, `updated_at`) VALUES
(1, 'Debora Nasikah S.pd', '196005111982012008									\r\n', '00000000000000', 'a', 'Guru Tetap', 'V/A', 'S1', 'Perempuan', 'Kepala Sekolah', 'Islam', 'a', 'Kelas', '2019-09-23', NULL, '2019-09-25 01:00:55', '2019-09-25 01:00:55'),
(7, 'Mochammad Nur Huda, S.Pd.', '0', '0', 'a', 'Guru Tetap', 'I', 'Sarjana', 'Laki-Laki', 'Guru Mata pelajaran', 'Islam', 'Landungsari', 'Mata Pelajaran', '1985-12-11', NULL, '2019-12-04 13:16:32', '2019-12-04 13:16:32'),
(8, 'Lusiana Widya Wahayu, S.Pd', '0', '0', 'a', 'Guru Tidak Tetap', 'Karyawan', 'Sarjana', 'Perempuan', 'Operator', 'Kristen', 'Dau', 'Mata Pelajaran', '2019-12-04', NULL, '2019-12-04 13:18:30', '2019-12-04 13:18:30'),
(9, 'Rumi Karyatin, S.Pd SD.', '0', '0', 'Trenggalek', 'Guru Tetap', 'IIIA', 'Sarjana', 'Perempuan', 'Guru Kelas', 'Islam', 'Villa Bukit Tidar', 'Kelas', '1974-10-18', NULL, '2019-12-04 13:20:52', '2019-12-04 13:20:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(10) UNSIGNED NOT NULL,
  `nama_kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` int(11) NOT NULL,
  `tahun_ajaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_guru` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `semester`, `tahun_ajaran`, `id_guru`, `created_at`, `updated_at`) VALUES
(4, 'Siswa Baru', 0, '2019', 1, NULL, NULL),
(8, 'Kelas 1', 1, '2019/2020', 9, '2019-12-04 13:21:44', '2019-12-04 13:21:44'),
(9, 'Kelas 1', 2, '2020/2021', 9, '2019-12-04 13:22:10', '2019-12-04 13:31:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_siswa`
--

CREATE TABLE `kelas_siswa` (
  `id_kelas_siswa` int(10) UNSIGNED NOT NULL,
  `id_siswa` int(10) UNSIGNED NOT NULL,
  `id_kelas` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas_siswa`
--

INSERT INTO `kelas_siswa` (`id_kelas_siswa`, `id_siswa`, `id_kelas`, `created_at`, `updated_at`) VALUES
(20, 2, 8, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(21, 3, 8, '2019-12-04 13:30:25', '2019-12-04 13:30:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kenaikan_kelas`
--

CREATE TABLE `kenaikan_kelas` (
  `id_naik_kelas` int(10) UNSIGNED NOT NULL,
  `id_siswa` int(10) UNSIGNED NOT NULL,
  `id_kelas_sebelum` int(10) UNSIGNED DEFAULT NULL,
  `id_kelas_sesudah` int(10) UNSIGNED DEFAULT NULL,
  `is_siswa_naik` tinyint(1) NOT NULL DEFAULT '1',
  `is_siswa_lulus` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kenaikan_kelas`
--

INSERT INTO `kenaikan_kelas` (`id_naik_kelas`, `id_siswa`, `id_kelas_sebelum`, `id_kelas_sesudah`, `is_siswa_naik`, `is_siswa_lulus`, `created_at`, `updated_at`) VALUES
(25, 2, 4, 8, 1, 0, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(26, 3, 4, 8, 1, 0, '2019-12-04 13:30:25', '2019-12-04 13:30:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kompetensi_dasar`
--

CREATE TABLE `kompetensi_dasar` (
  `id_kompetensi_dasar` int(10) UNSIGNED NOT NULL,
  `id_mapel` int(10) UNSIGNED NOT NULL,
  `kelompok_indikator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_indikator` int(11) NOT NULL,
  `keterangan_kompetensi_dasar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kompetensi_dasar`
--

INSERT INTO `kompetensi_dasar` (`id_kompetensi_dasar`, `id_mapel`, `kelompok_indikator`, `no_indikator`, `keterangan_kompetensi_dasar`, `kelas`, `semester`, `created_at`, `updated_at`) VALUES
(2, 1, 'ki3', 1, 'Menjelaskan makna bilangan cacah sampai dengan 99 sebagai banyak anggota suatu kumpulan objek\r\n', 1, 1, NULL, NULL),
(3, 1, 'ki3', 2, 'Menjelaskan bilangan sampai dua angka dan nilai tempat penyusun lambang bilangan menggunakan kumpulan benda konkret serta cara membacanya\r\n', 1, 1, NULL, NULL),
(4, 1, 'ki3', 3, 'Membandingkan dua bilangan sampai dua angka dengan menggunakan kumpulan benda-benda konkret\r\n', 1, 1, NULL, NULL),
(5, 1, 'ki3', 4, 'Menjelaskan dan melakukan penjumlahan dan pengurangan bilangan yang melibatkan bilangan cacah sampai dengan 99 dalam kehidupan sehari-hari serta mengaitkan penjumlahan dan pengurangan\r\n', 1, 1, NULL, NULL),
(6, 1, 'ki3', 5, 'Mengenal pola bilangan yang berkaitan dengan kumpulan benda/gambar/gerakan atau lainnya\r\n', 1, 1, NULL, NULL),
(7, 1, 'ki3', 6, 'Mengenal bangun ruang dan bangun datar dengan menggunakan berbagai benda konkret\r\n', 1, 1, NULL, NULL),
(8, 1, 'ki3', 7, 'Mengidentifikasi bangun datar yang dapat disusun membentuk pola pengubinan\r\n', 1, 1, NULL, NULL),
(9, 1, 'ki3', 8, 'Mengenal dan menentukan panjang dan berat dengan satuan tidak baku menggunakan benda/situasi konkret\r\n', 1, 1, NULL, NULL),
(10, 1, 'ki3', 9, 'Mengenal dan menentukan panjang dan berat dengan satuan tidak baku menggunakan benda/situasi konkret\r\n', 1, 1, NULL, NULL),
(13, 1, 'ki4', 1, 'Menyajikan bilangan cacah sampai dengan 99 yang bersesuaian dengan banyak anggota kumpulan objek yang disajikan', 1, 1, NULL, NULL),
(14, 1, 'ki4', 2, 'Menuliskan lambang bilangan sampai dua angka yang menyatakan banyak anggota suatu kumpulan objek dengan ide nilai tempat', 1, 1, NULL, NULL),
(15, 1, 'ki4', 3, 'Mengurutkan bilangan-bilangan sampai dua angka dari bilangan terkecil ke bilangan terbesar atau sebaliknya dengan menggunakan kumpulan benda-benda konkret', 1, 1, NULL, NULL),
(16, 1, 'ki4', 4, 'Menyelesaikan masalah kehidupan sehari-hari yang berkaitan dengan penjumlahan dan pengurangan bilangan yang melibatkan bilangan cacah sampai dengan 99', 1, 1, NULL, NULL),
(17, 1, 'ki4', 5, 'Memprediksi dan membuat pola bilangan yang berkaitan dengan kumpulan benda/gambar/gerakan atau lainnya', 1, 1, NULL, NULL),
(18, 1, 'ki4', 6, 'Mengelompokkan bangun ruang dan bangun datar berdasarkan sifat tertentu dengan menggunakan berbagai benda konkret', 1, 1, NULL, NULL),
(19, 1, 'ki4', 7, 'Menyusun bangun-bangun datar untuk membentuk pola pengubinan', 1, 1, NULL, NULL),
(20, 1, 'ki4', 8, 'Melakukan pengukuran panjang dan berat dalam satuan tidak baku dengan menggunakan benda/situasi konkret', 1, 1, NULL, NULL),
(21, 1, 'ki4', 9, 'Mengurutkan benda/kejadian/ keadaan berdasarkan panjang, berat, lamanya waktu, dan suhu', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mata_pelajaran` int(10) UNSIGNED NOT NULL,
  `id_guru` int(10) UNSIGNED NOT NULL,
  `kelas` int(11) NOT NULL,
  `nama_mata_pelajaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kkm` int(11) NOT NULL,
  `is_kelas` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mata_pelajaran`, `id_guru`, `kelas`, `nama_mata_pelajaran`, `kkm`, `is_kelas`, `created_at`, `updated_at`) VALUES
(1, 8, 1, 'Matematika', 70, 0, '2019-09-28 15:55:30', '2019-12-04 13:44:03'),
(2, 9, 1, 'Bahasa Indonesia', 69, 1, '2019-11-29 12:52:48', '2019-12-04 13:42:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_01_082453_create_ekskul_siswa_table', 1),
(4, '2019_09_01_082453_create_ekstrakulikuler_table', 1),
(5, '2019_09_01_082453_create_guru_karyawan_table', 1),
(6, '2019_09_01_082453_create_kelas_siswa_table', 1),
(7, '2019_09_01_082453_create_kelas_table', 1),
(8, '2019_09_01_082453_create_kenaikan_kelas_table', 1),
(9, '2019_09_01_082453_create_kompetensi_dasar_table', 1),
(10, '2019_09_01_082453_create_mata_pelajaran_table', 1),
(11, '2019_09_01_082453_create_nilai_harian_ki3_table', 1),
(12, '2019_09_01_082453_create_nilai_harian_ki4_table', 1),
(13, '2019_09_01_082453_create_nilai_siswa_table', 1),
(14, '2019_09_01_082453_create_nilai_sosial_table', 1),
(15, '2019_09_01_082453_create_nilai_spiritual_table', 1),
(16, '2019_09_01_082453_create_prestasi_table', 1),
(17, '2019_09_01_082453_create_profil_sekolah_table', 1),
(18, '2019_09_01_082453_create_siswa_table', 1),
(19, '2019_09_01_082454_create_catatan_siswa_table', 1),
(20, '2019_09_01_082504_create_foreign_keys', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_harian_ki3`
--

CREATE TABLE `nilai_harian_ki3` (
  `id_nilai_ki3` int(10) UNSIGNED NOT NULL,
  `id_nilai_siswa` int(10) UNSIGNED NOT NULL,
  `id_kompetensi_dasar` int(10) UNSIGNED NOT NULL,
  `p1lisan` int(11) NOT NULL,
  `p1tulis` int(11) NOT NULL,
  `p1tugas1` int(11) NOT NULL,
  `p1tugas2` int(11) NOT NULL,
  `p1rata_rata` int(11) NOT NULL,
  `p2lisan` int(11) NOT NULL,
  `p2tulis` int(11) NOT NULL,
  `p2tugas1` int(11) NOT NULL,
  `p2tugas2` int(11) NOT NULL,
  `p2rata_rata` int(11) NOT NULL,
  `p3lisan` int(11) NOT NULL,
  `p3tulis` int(11) NOT NULL,
  `p3tugas1` int(11) NOT NULL,
  `p3tugas2` int(11) NOT NULL,
  `p3rata_rata` int(11) NOT NULL,
  `p4lisan` int(11) NOT NULL,
  `p4tulis` int(11) NOT NULL,
  `p4tugas1` int(11) NOT NULL,
  `p4tugas2` int(11) NOT NULL,
  `p4rata_rata` int(11) NOT NULL,
  `p5lisan` int(11) NOT NULL,
  `p5tulis` int(11) NOT NULL,
  `p5tugas1` int(11) NOT NULL,
  `p5tugas2` int(11) NOT NULL,
  `p5rata_rata` int(11) NOT NULL,
  `NPH` int(11) NOT NULL,
  `NPAS1` int(11) NOT NULL,
  `NPAS2` int(11) NOT NULL,
  `nilai_kd` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilai_harian_ki3`
--

INSERT INTO `nilai_harian_ki3` (`id_nilai_ki3`, `id_nilai_siswa`, `id_kompetensi_dasar`, `p1lisan`, `p1tulis`, `p1tugas1`, `p1tugas2`, `p1rata_rata`, `p2lisan`, `p2tulis`, `p2tugas1`, `p2tugas2`, `p2rata_rata`, `p3lisan`, `p3tulis`, `p3tugas1`, `p3tugas2`, `p3rata_rata`, `p4lisan`, `p4tulis`, `p4tugas1`, `p4tugas2`, `p4rata_rata`, `p5lisan`, `p5tulis`, `p5tugas1`, `p5tugas2`, `p5rata_rata`, `NPH`, `NPAS1`, `NPAS2`, `nilai_kd`, `deskripsi`, `created_at`, `updated_at`) VALUES
(10, 14, 2, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(11, 14, 3, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(12, 14, 4, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(13, 14, 5, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(14, 14, 6, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(15, 14, 7, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(16, 14, 8, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(17, 14, 9, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(18, 14, 10, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(19, 15, 2, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:25', '2019-12-04 13:30:25'),
(20, 15, 3, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:25', '2019-12-04 13:30:25'),
(21, 15, 4, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:25', '2019-12-04 13:30:25'),
(22, 15, 5, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:25', '2019-12-04 13:30:25'),
(23, 15, 6, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:25', '2019-12-04 13:30:25'),
(24, 15, 7, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:25', '2019-12-04 13:30:25'),
(25, 15, 8, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:25', '2019-12-04 13:30:25'),
(26, 15, 9, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:25', '2019-12-04 13:30:25'),
(27, 15, 10, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:25', '2019-12-04 13:30:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_harian_ki4`
--

CREATE TABLE `nilai_harian_ki4` (
  `id_nilai_ki4` int(10) UNSIGNED NOT NULL,
  `id_nilai_siswa` int(10) UNSIGNED NOT NULL,
  `id_kompetensi_dasar` int(10) UNSIGNED NOT NULL,
  `praktik_p1` int(11) NOT NULL,
  `praktik_p2` int(11) NOT NULL,
  `praktik_p3` int(11) NOT NULL,
  `praktik_p4` int(11) NOT NULL,
  `praktik_p5` int(11) NOT NULL,
  `praktik_max` int(11) NOT NULL,
  `produk_p1` int(11) NOT NULL,
  `produk_p2` int(11) NOT NULL,
  `produk_p3` int(11) NOT NULL,
  `produk_p4` int(11) NOT NULL,
  `produk_p5` int(11) NOT NULL,
  `produk_max` int(11) NOT NULL,
  `proyek_p1` int(11) NOT NULL,
  `proyek_p2` int(11) NOT NULL,
  `proyek_p3` int(11) NOT NULL,
  `proyek_p4` int(11) NOT NULL,
  `proyek_p5` int(11) NOT NULL,
  `proyek_max` int(11) NOT NULL,
  `deskripsi_raport` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilai_harian_ki4`
--

INSERT INTO `nilai_harian_ki4` (`id_nilai_ki4`, `id_nilai_siswa`, `id_kompetensi_dasar`, `praktik_p1`, `praktik_p2`, `praktik_p3`, `praktik_p4`, `praktik_p5`, `praktik_max`, `produk_p1`, `produk_p2`, `produk_p3`, `produk_p4`, `produk_p5`, `produk_max`, `proyek_p1`, `proyek_p2`, `proyek_p3`, `proyek_p4`, `proyek_p5`, `proyek_max`, `deskripsi_raport`, `created_at`, `updated_at`) VALUES
(10, 14, 13, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(11, 14, 14, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(12, 14, 15, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(13, 14, 16, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(14, 14, 17, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(15, 14, 18, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(16, 14, 19, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(17, 14, 20, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(18, 14, 21, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(19, 15, 13, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:25', '2019-12-04 13:30:25'),
(20, 15, 14, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:25', '2019-12-04 13:30:25'),
(21, 15, 15, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:25', '2019-12-04 13:30:25'),
(22, 15, 16, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:25', '2019-12-04 13:30:25'),
(23, 15, 17, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:25', '2019-12-04 13:30:25'),
(24, 15, 18, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:25', '2019-12-04 13:30:25'),
(25, 15, 19, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:25', '2019-12-04 13:30:25'),
(26, 15, 20, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:25', '2019-12-04 13:30:25'),
(27, 15, 21, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, NULL, '2019-12-04 13:30:26', '2019-12-04 13:30:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_siswa`
--

CREATE TABLE `nilai_siswa` (
  `id_nilai_siswa` int(10) UNSIGNED NOT NULL,
  `id_siswa` int(10) UNSIGNED NOT NULL,
  `id_kelas_siswa` int(10) UNSIGNED NOT NULL,
  `tgl_raport` date DEFAULT NULL,
  `tgl_penerimaan_raport` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilai_siswa`
--

INSERT INTO `nilai_siswa` (`id_nilai_siswa`, `id_siswa`, `id_kelas_siswa`, `tgl_raport`, `tgl_penerimaan_raport`, `created_at`, `updated_at`) VALUES
(14, 2, 20, '2019-12-13', '2019-12-13', '2019-12-04 13:30:13', '2019-12-05 00:02:24'),
(15, 3, 21, NULL, NULL, '2019-12-04 13:30:25', '2019-12-04 13:30:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_sosial`
--

CREATE TABLE `nilai_sosial` (
  `id_nilai_sosial` int(10) UNSIGNED NOT NULL,
  `id_nilai_siswa` int(10) UNSIGNED NOT NULL,
  `nama_nilai_sosial` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jujur_sb` int(11) NOT NULL DEFAULT '2',
  `jujur_pb` int(11) NOT NULL DEFAULT '2',
  `disiplin_sb` int(11) NOT NULL DEFAULT '2',
  `disiplin_pb` int(11) NOT NULL DEFAULT '2',
  `tanggung_jawab_sb` int(11) NOT NULL DEFAULT '2',
  `tanggung_jawab_pb` int(11) NOT NULL DEFAULT '2',
  `santun_sb` int(11) NOT NULL DEFAULT '2',
  `santun_pb` int(11) NOT NULL DEFAULT '2',
  `peduli_sb` int(11) NOT NULL DEFAULT '2',
  `peduli_pb` int(11) NOT NULL DEFAULT '2',
  `percaya_diri_sb` int(11) NOT NULL DEFAULT '2',
  `percaya_diri_pb` int(11) NOT NULL DEFAULT '2',
  `deskripsi_raport` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilai_sosial`
--

INSERT INTO `nilai_sosial` (`id_nilai_sosial`, `id_nilai_siswa`, `nama_nilai_sosial`, `jujur_sb`, `jujur_pb`, `disiplin_sb`, `disiplin_pb`, `tanggung_jawab_sb`, `tanggung_jawab_pb`, `santun_sb`, `santun_pb`, `peduli_sb`, `peduli_pb`, `percaya_diri_sb`, `percaya_diri_pb`, `deskripsi_raport`, `created_at`, `updated_at`) VALUES
(7, 14, 'Pendidikan Pancasila dan Kewarganegaraan', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, NULL, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(8, 14, 'Pendidikan Agama dan Budi Pekerti', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, NULL, '2019-12-04 13:30:13', '2019-12-04 13:30:13'),
(9, 15, 'Pendidikan Pancasila dan Kewarganegaraan', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, NULL, '2019-12-04 13:30:26', '2019-12-04 13:30:26'),
(10, 15, 'Pendidikan Agama dan Budi Pekerti', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, NULL, '2019-12-04 13:30:26', '2019-12-04 13:30:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_spiritual`
--

CREATE TABLE `nilai_spiritual` (
  `id_nilai_spiritual` int(10) UNSIGNED NOT NULL,
  `id_nilai_siswa` int(10) UNSIGNED NOT NULL,
  `nama_nilai_spiritual` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ketaatan_ibadah_sb` int(11) NOT NULL DEFAULT '2',
  `ketaatan_ibadah_pb` int(11) NOT NULL DEFAULT '2',
  `perilaku_syukur_sb` int(11) NOT NULL DEFAULT '2',
  `perilaku_syukur_pb` int(11) NOT NULL DEFAULT '2',
  `berdoa_ses_seb_sb` int(11) NOT NULL DEFAULT '2',
  `berdoa_ses_seb_pb` int(11) NOT NULL DEFAULT '2',
  `toleransi_beribadah_sb` int(11) NOT NULL DEFAULT '2',
  `toleransi_beribadah_pb` int(11) NOT NULL DEFAULT '2',
  `deskripsi_raport` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilai_spiritual`
--

INSERT INTO `nilai_spiritual` (`id_nilai_spiritual`, `id_nilai_siswa`, `nama_nilai_spiritual`, `ketaatan_ibadah_sb`, `ketaatan_ibadah_pb`, `perilaku_syukur_sb`, `perilaku_syukur_pb`, `berdoa_ses_seb_sb`, `berdoa_ses_seb_pb`, `toleransi_beribadah_sb`, `toleransi_beribadah_pb`, `deskripsi_raport`, `created_at`, `updated_at`) VALUES
(7, 14, 'Pendidikan Pancasila dan Kewarganegaraan', 3, 2, 2, 2, 2, 2, 2, 2, 'asdasdasdfasdfsadfasdfasdd asdfasdfasdfasdf', '2019-12-04 13:30:13', '2019-12-05 14:51:46'),
(8, 14, 'Pendidikan Agama dan Budi Pekerti', 4, 2, 2, 2, 5, 2, 2, 4, 'sfdfdgasfrertwergsvcxbxcvbsgsfgsff', '2019-12-04 13:30:13', '2019-12-05 14:52:13'),
(9, 15, 'Pendidikan Pancasila dan Kewarganegaraan', 2, 2, 2, 2, 2, 2, 2, 2, NULL, '2019-12-04 13:30:26', '2019-12-04 13:30:26'),
(10, 15, 'Pendidikan Agama dan Budi Pekerti', 2, 2, 2, 2, 2, 2, 2, 2, NULL, '2019-12-04 13:30:26', '2019-12-04 13:30:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(10) UNSIGNED NOT NULL,
  `id_siswa` int(10) UNSIGNED NOT NULL,
  `nama_prestasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saran_saran` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_prestasi` int(11) NOT NULL,
  `jenis_prestasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyelenggara` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peringkat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_prestasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_sekolah`
--

CREATE TABLE `profil_sekolah` (
  `npsn` int(11) NOT NULL,
  `id_kepala_sekolah` int(10) UNSIGNED NOT NULL,
  `nama_sekolah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bentuk_pendidikan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kepemilikan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kurikulum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_sekolah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodepos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kab_kota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `negara` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profil_sekolah`
--

INSERT INTO `profil_sekolah` (`npsn`, `id_kepala_sekolah`, `nama_sekolah`, `status`, `bentuk_pendidikan`, `status_kepemilikan`, `kurikulum`, `alamat_sekolah`, `rt`, `rw`, `kodepos`, `kelurahan`, `kecamatan`, `kab_kota`, `provinsi`, `negara`, `lat`, `long`, `created_at`, `updated_at`) VALUES
(20518538, 1, 'Sekolah Dasar Negeri 2 Landungsari', 'Negeri', 'Sekolah Dasar', 'Negara', 'K13', 'JL. TIRTO TARUNO NO.19', '01', '07', '65151', 'Landungsari', 'Dau', 'Kab. Malang', 'Jawa Timur', 'Indonesia', '-7.9303074', '112.5875886', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(10) UNSIGNED NOT NULL,
  `id_kelas` int(10) UNSIGNED DEFAULT NULL,
  `nama_lengkap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `INDUK` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NISN` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NIK` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KITAS` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_reg_akta_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kepercayaan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kewarganegaraan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Indonesia',
  `berkebutuhan_khusus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_jalan` text COLLATE utf8mb4_unicode_ci,
  `rt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rw` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_dusun` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kelurahan_desa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota_kab` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_pos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_tempat_tinggal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moda_transportasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kartu_keluarga_sejahtera` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anak_ke` int(11) DEFAULT NULL,
  `is_kps_pkh` tinyint(1) NOT NULL DEFAULT '0',
  `no_kps_pkh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_kip` tinyint(1) NOT NULL DEFAULT '0',
  `no_kip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alasan_layak_kip` text COLLATE utf8mb4_unicode_ci,
  `nama_ayah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_ayah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir_ayah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir_ayah` date DEFAULT NULL,
  `pendidikan_ayah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_ayah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penghasilan_ayah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berkebutuhan_khusus_ayah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ibu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_ibu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir_ibu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir_ibu` date DEFAULT NULL,
  `pendidikan_ibu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_ibu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penghasilan_ibu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berkebutuhan_khusus_ibu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_wali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_wali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir_wali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir_wali` date DEFAULT NULL,
  `pendidikan_wali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_wali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penghasilan_wali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kontak_no_tlep_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kontak_no_tlep_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_siswa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_kelas`, `nama_lengkap`, `jenis_kelamin`, `INDUK`, `NISN`, `NIK`, `KITAS`, `tempat_lahir`, `tgl_lahir`, `no_reg_akta_lahir`, `agama`, `kepercayaan`, `kewarganegaraan`, `berkebutuhan_khusus`, `alamat_jalan`, `rt`, `rw`, `nama_dusun`, `nama_kelurahan_desa`, `kecamatan`, `kota_kab`, `kode_pos`, `lat`, `long`, `status_tempat_tinggal`, `moda_transportasi`, `no_kartu_keluarga_sejahtera`, `anak_ke`, `is_kps_pkh`, `no_kps_pkh`, `is_kip`, `no_kip`, `nama_kip`, `alasan_layak_kip`, `nama_ayah`, `nik_ayah`, `tempat_lahir_ayah`, `tgl_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `berkebutuhan_khusus_ayah`, `nama_ibu`, `nik_ibu`, `tempat_lahir_ibu`, `tgl_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `berkebutuhan_khusus_ibu`, `nama_wali`, `nik_wali`, `tempat_lahir_wali`, `tgl_lahir_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `kontak_no_tlep_1`, `kontak_no_tlep_2`, `no_hp_1`, `no_hp_2`, `email_1`, `email_2`, `foto_siswa`, `created_at`, `updated_at`) VALUES
(2, 8, 'Alfi Divanadia Damayanti', 'Perempuan', '1300', NULL, NULL, NULL, 'Batu', '2011-10-15', NULL, 'Islam', 'Islam', 'Indonesia', 'Tidak', 'JL.Tirto Taruno XII', '1', '8', 'Landungsari', 'Dau', 'Lowokwaru', 'Kab. Malang', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, 0, NULL, NULL, NULL, 'Sumantri', NULL, NULL, NULL, NULL, 'Buruh', NULL, NULL, 'Suliyarni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5cl2yssQ6bOXJsDaYdcb.jpeg', '0000-00-00 00:00:00', '2019-12-04 13:30:13'),
(3, 8, 'Carissa Nathania Nayyara', 'Perempuan', '1301', NULL, NULL, NULL, 'Mojokerto', '2012-01-07', '', 'Islam', 'Islam', 'Indonesia', 'Tidak', 'JL. Puncak Landungsari', '1', '11', 'Landungsari', 'Dau', 'Lowokwaru', 'Kab. Malang', '', NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, 'Vanda Hardinata', NULL, NULL, '0000-00-00', NULL, 'PNS', NULL, NULL, 'Tunik Kusumaningrum', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2019-12-04 13:30:25'),
(4, 4, 'Dita Putri Ayu Anggraini', 'Perempuan', '1302', NULL, NULL, NULL, 'Malang', '2011-08-27', '', 'Islam', 'Islam', 'Indonesia', 'Tidak', 'JL.Tirto Taruno XI-28', '1', '8', 'Landungsari', 'Dau', 'Lowokwaru', 'Kab. Malang', '', NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, 'Rudi Hariyono', NULL, NULL, '0000-00-00', NULL, 'Karyawan', NULL, NULL, 'Lifah', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2019-11-27 01:39:42'),
(5, 4, 'Karunia Nur Rohma', 'Perempuan', '1303', NULL, NULL, NULL, 'Malang', '2012-03-15', '', 'Islam', 'Islam', 'Indonesia', 'Tidak', 'JL.Tirto Taruno 06/07', '2', '7', 'Landungsari', 'Dau', 'Lowokwaru', 'Kab. Malang', '', NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, 'M.Mansur Akbar', NULL, NULL, '0000-00-00', NULL, 'Wiraswasta', NULL, NULL, 'Popi Rana Yanti', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2019-11-27 03:49:36'),
(6, 4, 'Muhammad Djaka Awaludin', 'Perempuan', '1304', NULL, NULL, NULL, 'Malang', '2012-04-16', '', 'Islam', 'Islam', 'Indonesia', 'Tidak', 'JL.Tirto Taruno 66/13', '4', '8', 'Landungsari', 'Dau', 'Lowokwaru', 'Kab. Malang', '', NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, 'Jonianto', NULL, NULL, '0000-00-00', NULL, 'Wiraswasta', NULL, NULL, 'Rahmini', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2019-11-27 03:51:33'),
(7, 4, 'Nadhif Ibrahim Akbar', 'Laki-Laki', '1306', NULL, NULL, NULL, 'Pasuruan', '2011-11-21', '', 'Islam', 'Islam', 'Indonesia', 'Tidak', 'JL.Tirto Taruno', '1', '7', 'Landungsari', 'Dau', 'Lowokwaru', 'Kab. Malang', '', NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, 'Slamet Suyanto', NULL, NULL, '0000-00-00', NULL, 'Wiraswasta', NULL, NULL, 'Isnaeni', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2019-11-27 03:52:37'),
(8, 4, 'Reza Eko Febrian', 'Laki-Laki', '1307', NULL, NULL, NULL, 'Malang', '2012-02-12', '', 'Islam', 'Islam', 'Indonesia', 'Tidak', 'JL.Tirto Taruno', '3', '7', 'Landungsari', 'Dau', 'Lowokwaru', 'Kab. Malang', '', NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, 'Suwadi', NULL, NULL, '0000-00-00', NULL, 'Petani', NULL, NULL, 'Natin Nur Aini', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2019-11-27 03:54:09'),
(9, 4, 'Rizal Rakhman Saputra', 'Laki-Laki', '1308', NULL, NULL, NULL, 'Malang', '2011-10-12', '', 'Islam', 'Islam', 'Indonesia', 'Tidak', 'JL.Tirto Taruno', '3', '7', 'Landungsari', 'Dau', 'Lowokwaru', 'Kab. Malang', '', NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, 'Siyono', NULL, NULL, '0000-00-00', NULL, 'Buruh', NULL, NULL, 'Sriami', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2019-11-27 03:55:05'),
(10, 4, 'Sendana Mustifa', 'Laki-Laki', '1309', NULL, NULL, NULL, 'Malang', '2011-10-17', '', 'Islam', 'Islam', 'Indonesia', 'Tidak', 'JL.Tirto Taruno', '4', '8', 'Landungsari', 'Dau', 'Lowokwaru', 'Kab. Malang', '', NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, 'Ery Dovi Hamsyah', NULL, NULL, '0000-00-00', NULL, 'Buruh', NULL, NULL, 'Rinawati', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2019-11-27 03:55:54'),
(11, 4, 'Syifa Ayu Andira', 'Perempuan', '1310', NULL, NULL, NULL, 'Malang', '2012-04-09', '', 'Islam', 'Islam', 'Indonesia', 'Tidak', 'JL.Tirto Taruno V', '3', '7', 'Landungsari', 'Dau', 'Lowokwaru', 'Kab. Malang', '', NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, 'Samsul Huda', NULL, NULL, '0000-00-00', NULL, 'Karyawan', NULL, NULL, 'Silfitria', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2019-11-27 03:57:02'),
(12, 4, 'Muhammad Zidane Perdana Putra', 'Laki-Laki', '1305', NULL, NULL, NULL, 'Malang', '2012-01-12', '', 'Islam', 'Islam', 'Indonesia', 'Tidak', 'JL.Tirto Taruno VB/5', '2', '9', 'Landungsari', 'Dau', 'Lowokwaru', 'Kab. Malang', '', NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, 'Awaludin', NULL, NULL, '0000-00-00', NULL, 'Wiraswasta', NULL, NULL, 'Eka Wulandari', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2019-11-28 11:20:28'),
(13, 4, 'Zulia Zulaikah', 'Perempuan', '1311', NULL, NULL, NULL, 'Malang', '2012-04-27', '', 'Islam', 'Islam', 'Indonesia', 'Tidak', 'JL.Tirto Taruno II/11', '1', '7', 'Landungsari', 'Dau', 'Lowokwaru', 'Kab. Malang', '', NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, 'Muhamat Lutfi', NULL, NULL, '0000-00-00', NULL, 'Petani', NULL, NULL, 'Eris Nila Sasmita', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2019-11-28 11:22:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_guru` int(10) UNSIGNED NOT NULL,
  `nip` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `id_guru`, `nip`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(6, 9, 0, 'admin', 'admin@admin.com', NULL, '$2y$12$/D4u2o640sMzoIGKxi2t9OMBYKsH7Eh2AMpQhPdfkMCWSyw4bjb3G', NULL, 'admin', NULL, NULL),
(7, 1, 0, 'kepalasekolah', 'kepsek@kepsek.com', NULL, '$2y$10$YaTl3pO6Y/j0.7vC8HjC3OXhB1S0qYKiA8r7nldHfLf8rUawTHILK', NULL, 'kepalasekolah', '2019-12-04 14:15:02', '2019-12-04 14:15:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `catatan_siswa`
--
ALTER TABLE `catatan_siswa`
  ADD PRIMARY KEY (`id_catatan`),
  ADD KEY `catatan_siswa_id_nilai_siswa_foreign` (`id_nilai_siswa`);

--
-- Indeks untuk tabel `ekskul_siswa`
--
ALTER TABLE `ekskul_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ekskul_siswa_id_siswa_foreign` (`id_siswa`),
  ADD KEY `ekskul_siswa_id_ekskul_foreign` (`id_ekskul`);

--
-- Indeks untuk tabel `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`id_ekskul`);

--
-- Indeks untuk tabel `guru_karyawan`
--
ALTER TABLE `guru_karyawan`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `kelas_id_guru_foreign` (`id_guru`);

--
-- Indeks untuk tabel `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD PRIMARY KEY (`id_kelas_siswa`),
  ADD KEY `kelas_siswa_id_siswa_foreign` (`id_siswa`),
  ADD KEY `kelas_siswa_id_kelas_foreign` (`id_kelas`);

--
-- Indeks untuk tabel `kenaikan_kelas`
--
ALTER TABLE `kenaikan_kelas`
  ADD PRIMARY KEY (`id_naik_kelas`),
  ADD KEY `kenaikan_kelas_id_siswa_foreign` (`id_siswa`),
  ADD KEY `kenaikan_kelas_id_kelas_sebelum_foreign` (`id_kelas_sebelum`),
  ADD KEY `kenaikan_kelas_id_kelas_sesudah_foreign` (`id_kelas_sesudah`);

--
-- Indeks untuk tabel `kompetensi_dasar`
--
ALTER TABLE `kompetensi_dasar`
  ADD PRIMARY KEY (`id_kompetensi_dasar`),
  ADD KEY `kompetensi_dasar_id_mapel_foreign` (`id_mapel`);

--
-- Indeks untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mata_pelajaran`),
  ADD KEY `mata_pelajaran_id_guru_foreign` (`id_guru`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai_harian_ki3`
--
ALTER TABLE `nilai_harian_ki3`
  ADD PRIMARY KEY (`id_nilai_ki3`),
  ADD KEY `nilai_harian_ki3_id_nilai_siswa_foreign` (`id_nilai_siswa`),
  ADD KEY `nilai_harian_ki3_id_kompetensi_dasar_foreign` (`id_kompetensi_dasar`);

--
-- Indeks untuk tabel `nilai_harian_ki4`
--
ALTER TABLE `nilai_harian_ki4`
  ADD PRIMARY KEY (`id_nilai_ki4`),
  ADD KEY `nilai_harian_ki4_id_nilai_siswa_foreign` (`id_nilai_siswa`),
  ADD KEY `nilai_harian_ki4_id_kompetensi_dasar_foreign` (`id_kompetensi_dasar`);

--
-- Indeks untuk tabel `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD PRIMARY KEY (`id_nilai_siswa`),
  ADD KEY `nilai_siswa_id_siswa_foreign` (`id_siswa`),
  ADD KEY `nilai_siswa_id_kelas_siswa_foreign` (`id_kelas_siswa`);

--
-- Indeks untuk tabel `nilai_sosial`
--
ALTER TABLE `nilai_sosial`
  ADD PRIMARY KEY (`id_nilai_sosial`),
  ADD KEY `nilai_sosial_id_nilai_siswa_foreign` (`id_nilai_siswa`);

--
-- Indeks untuk tabel `nilai_spiritual`
--
ALTER TABLE `nilai_spiritual`
  ADD PRIMARY KEY (`id_nilai_spiritual`),
  ADD KEY `nilai_spiritual_id_nilai_siswa_foreign` (`id_nilai_siswa`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`),
  ADD KEY `prestasi_id_siswa_foreign` (`id_siswa`);

--
-- Indeks untuk tabel `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  ADD UNIQUE KEY `profil_sekolah_npsn_unique` (`npsn`),
  ADD KEY `profil_sekolah_id_kepala_sekolah_foreign` (`id_kepala_sekolah`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `siswa_id_kelas_foreign` (`id_kelas`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `id_guru` (`id_guru`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `catatan_siswa`
--
ALTER TABLE `catatan_siswa`
  MODIFY `id_catatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ekskul_siswa`
--
ALTER TABLE `ekskul_siswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `id_ekskul` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `guru_karyawan`
--
ALTER TABLE `guru_karyawan`
  MODIFY `id_guru` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  MODIFY `id_kelas_siswa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `kenaikan_kelas`
--
ALTER TABLE `kenaikan_kelas`
  MODIFY `id_naik_kelas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `kompetensi_dasar`
--
ALTER TABLE `kompetensi_dasar`
  MODIFY `id_kompetensi_dasar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mata_pelajaran` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `nilai_harian_ki3`
--
ALTER TABLE `nilai_harian_ki3`
  MODIFY `id_nilai_ki3` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `nilai_harian_ki4`
--
ALTER TABLE `nilai_harian_ki4`
  MODIFY `id_nilai_ki4` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id_nilai_siswa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `nilai_sosial`
--
ALTER TABLE `nilai_sosial`
  MODIFY `id_nilai_sosial` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `nilai_spiritual`
--
ALTER TABLE `nilai_spiritual`
  MODIFY `id_nilai_spiritual` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `catatan_siswa`
--
ALTER TABLE `catatan_siswa`
  ADD CONSTRAINT `catatan_siswa_id_nilai_siswa_foreign` FOREIGN KEY (`id_nilai_siswa`) REFERENCES `nilai_siswa` (`id_nilai_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ekskul_siswa`
--
ALTER TABLE `ekskul_siswa`
  ADD CONSTRAINT `ekskul_siswa_id_ekskul_foreign` FOREIGN KEY (`id_ekskul`) REFERENCES `ekstrakulikuler` (`id_ekskul`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ekskul_siswa_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_id_guru_foreign` FOREIGN KEY (`id_guru`) REFERENCES `guru_karyawan` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD CONSTRAINT `kelas_siswa_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_siswa_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kenaikan_kelas`
--
ALTER TABLE `kenaikan_kelas`
  ADD CONSTRAINT `kenaikan_kelas_id_kelas_sebelum_foreign` FOREIGN KEY (`id_kelas_sebelum`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kenaikan_kelas_id_kelas_sesudah_foreign` FOREIGN KEY (`id_kelas_sesudah`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kenaikan_kelas_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kompetensi_dasar`
--
ALTER TABLE `kompetensi_dasar`
  ADD CONSTRAINT `kompetensi_dasar_id_mapel_foreign` FOREIGN KEY (`id_mapel`) REFERENCES `mata_pelajaran` (`id_mata_pelajaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD CONSTRAINT `mata_pelajaran_id_guru_foreign` FOREIGN KEY (`id_guru`) REFERENCES `guru_karyawan` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai_harian_ki3`
--
ALTER TABLE `nilai_harian_ki3`
  ADD CONSTRAINT `nilai_harian_ki3_id_kompetensi_dasar_foreign` FOREIGN KEY (`id_kompetensi_dasar`) REFERENCES `kompetensi_dasar` (`id_kompetensi_dasar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_harian_ki3_id_nilai_siswa_foreign` FOREIGN KEY (`id_nilai_siswa`) REFERENCES `nilai_siswa` (`id_nilai_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai_harian_ki4`
--
ALTER TABLE `nilai_harian_ki4`
  ADD CONSTRAINT `nilai_harian_ki4_id_kompetensi_dasar_foreign` FOREIGN KEY (`id_kompetensi_dasar`) REFERENCES `kompetensi_dasar` (`id_kompetensi_dasar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_harian_ki4_id_nilai_siswa_foreign` FOREIGN KEY (`id_nilai_siswa`) REFERENCES `nilai_siswa` (`id_nilai_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD CONSTRAINT `nilai_siswa_id_kelas_siswa_foreign` FOREIGN KEY (`id_kelas_siswa`) REFERENCES `kelas_siswa` (`id_kelas_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_siswa_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai_sosial`
--
ALTER TABLE `nilai_sosial`
  ADD CONSTRAINT `nilai_sosial_id_nilai_siswa_foreign` FOREIGN KEY (`id_nilai_siswa`) REFERENCES `nilai_siswa` (`id_nilai_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai_spiritual`
--
ALTER TABLE `nilai_spiritual`
  ADD CONSTRAINT `nilai_spiritual_id_nilai_siswa_foreign` FOREIGN KEY (`id_nilai_siswa`) REFERENCES `nilai_siswa` (`id_nilai_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `prestasi_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  ADD CONSTRAINT `profil_sekolah_id_kepala_sekolah_foreign` FOREIGN KEY (`id_kepala_sekolah`) REFERENCES `guru_karyawan` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru_karyawan` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
