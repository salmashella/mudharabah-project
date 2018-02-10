-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.2.3-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for mudharabah
CREATE DATABASE IF NOT EXISTS `mudharabah` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mudharabah`;

-- Dumping structure for table mudharabah.tb_admin
CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(11) NOT NULL,
  `id_admin` varchar(10) NOT NULL DEFAULT '',
  `Id_Pegawai` varchar(10) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_admin`),
  KEY `id` (`id`),
  KEY `Id_Nasabah` (`Id_Pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.
-- Dumping structure for table mudharabah.tb_datapasangan
CREATE TABLE IF NOT EXISTS `tb_datapasangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Pasangan` varchar(10) NOT NULL DEFAULT '',
  `Id_Nasabah` varchar(10) NOT NULL DEFAULT '',
  `Nama_Pasangan` varchar(50) DEFAULT '',
  `jenis_id_pasangan` varchar(50) DEFAULT '',
  `no_id_pasangan` varchar(50) DEFAULT '',
  `no_telp_pasangan` varchar(50) DEFAULT '',
  `Pekerjaan_Pasangan` varchar(50) DEFAULT '',
  `Jenkel_Pasangan` varchar(50) DEFAULT '',
  `Keterangan` text DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Id_Pasangan`),
  KEY `id` (`id`),
  KEY `Id_Nasabah` (`Id_Nasabah`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table mudharabah.tb_datapenghasilan
CREATE TABLE IF NOT EXISTS `tb_datapenghasilan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Penghasilan` varchar(10) NOT NULL DEFAULT '',
  `Id_Nasabah` varchar(10) NOT NULL,
  `Penghasilan_Istri` int(11) DEFAULT NULL,
  `Penghasilan_Suami` int(11) DEFAULT NULL,
  `Penghasilan_lain` int(11) DEFAULT NULL,
  `Pengeluaran_Pendidikan` int(11) DEFAULT NULL,
  `Pengeluaran_Rumahtangga` int(11) DEFAULT NULL,
  `Pengeluaran_CicilanBank` int(11) DEFAULT NULL,
  `Pengeluaran_Pribadi` int(11) DEFAULT NULL,
  `Pengeluaran_lain` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Id_Penghasilan`),
  KEY `id` (`id`),
  KEY `Id_Nasabah` (`Id_Nasabah`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table mudharabah.tb_jaminan
CREATE TABLE IF NOT EXISTS `tb_jaminan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Pembiayaan` varchar(10) NOT NULL DEFAULT '',
  `jenis_jaminan` varchar(50) NOT NULL DEFAULT '',
  `no_id_jaminan` varchar(50) NOT NULL DEFAULT '',
  `atas_nama` varchar(50) NOT NULL DEFAULT '',
  `status_jaminan` varchar(50) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `id` (`id`),
  KEY `Id_Pembiayaan` (`Id_Pembiayaan`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.
-- Dumping structure for table mudharabah.tb_jurnal
CREATE TABLE IF NOT EXISTS `tb_jurnal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `No_Rekening` varchar(10) NOT NULL DEFAULT '',
  `nominal_transaksi` varchar(50) NOT NULL DEFAULT '',
  `keterangan` varchar(100) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `id` (`id`),
  KEY `Id_Pembiayaan` (`No_Rekening`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table mudharabah.tb_nasabah
CREATE TABLE IF NOT EXISTS `tb_nasabah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Nasabah` varchar(10) NOT NULL DEFAULT '',
  `Nama` varchar(50) NOT NULL DEFAULT '',
  `Jenkel` char(1) NOT NULL DEFAULT '',
  `Alamat` text NOT NULL DEFAULT '',
  `Agama` varchar(50) NOT NULL DEFAULT '',
  `No_Telp` char(50) NOT NULL,
  `Jenis_Identitas` varchar(50) NOT NULL DEFAULT '',
  `No_Identitas` varchar(50) NOT NULL DEFAULT '',
  `Pekerjaan` varchar(50) NOT NULL DEFAULT '',
  `Tempat_Lahir` varchar(50) NOT NULL DEFAULT '',
  `Tanggal_Lahir` date NOT NULL,
  `Nama_Ahliwaris` varchar(50) NOT NULL DEFAULT '',
  `jenis_id_ahliwaris` varchar(50) NOT NULL DEFAULT '',
  `no_id_ahliwaris` char(20) NOT NULL DEFAULT '',
  `no_telp_ahliwaris` char(20) NOT NULL DEFAULT '',
  `Alamat_Ahliwaris` text NOT NULL DEFAULT '',
  `Hubungankeluarga_Ahliwaris` varchar(50) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Id_Nasabah`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table mudharabah.tb_neraca
CREATE TABLE IF NOT EXISTS `tb_neraca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `No_Rekening` varchar(10) DEFAULT NULL,
  `Id_Pegawai` varchar(10) DEFAULT NULL,
  `debit` varchar(50) DEFAULT NULL,
  `kredit` varchar(50) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `status_pembayaran` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  KEY `id` (`id`),
  KEY `No_Rekening` (`No_Rekening`),
  KEY `Id_Pegawai` (`Id_Pegawai`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table mudharabah.tb_pegawai
CREATE TABLE IF NOT EXISTS `tb_pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Pegawai` varchar(10) NOT NULL DEFAULT '',
  `Nama_Pegawai` varchar(100) NOT NULL DEFAULT '',
  `Alamat` text NOT NULL DEFAULT '',
  `Jabatan` char(50) NOT NULL DEFAULT '',
  `Jenkel` char(1) NOT NULL DEFAULT '',
  `No_Telp` char(50) NOT NULL DEFAULT '',
  `Agama` varchar(50) NOT NULL DEFAULT '',
  `Tempat_Lahir` varchar(50) NOT NULL DEFAULT '',
  `Tanggal_Lahir` date NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT '',
  `Username` varchar(50) NOT NULL DEFAULT '',
  `Password` varchar(50) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Id_Pegawai`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table mudharabah.tb_pembayaran
CREATE TABLE IF NOT EXISTS `tb_pembayaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pembayaran` varchar(10) NOT NULL DEFAULT '',
  `Id_Pegawai` varchar(10) NOT NULL DEFAULT '',
  `Id_Pembiayaan` varchar(10) DEFAULT '',
  `No_Rekening` varchar(10) DEFAULT '',
  `penyetor` varchar(100) DEFAULT '',
  `jenis_id_penyetor` varchar(100) DEFAULT '',
  `no_id_penyetor` varchar(100) DEFAULT '',
  `alamat_penyetor` varchar(100) DEFAULT '',
  `no_telp_penyetor` varchar(100) DEFAULT '',
  `angsuran_ke` int(11) DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL,
  `sisa_pembayaran` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `status_pembayaran` varchar(50) DEFAULT '',
  PRIMARY KEY (`id_pembayaran`),
  KEY `id` (`id`),
  KEY `Id_Pembiayaan` (`Id_Pembiayaan`),
  KEY `No_Rekening` (`No_Rekening`),
  KEY `Id_Pegawai` (`Id_Pegawai`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table mudharabah.tb_pembiayaan
CREATE TABLE IF NOT EXISTS `tb_pembiayaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Pembiayaan` varchar(10) NOT NULL DEFAULT '',
  `No_Rekening` varchar(10) NOT NULL DEFAULT '',
  `Id_Nasabah` varchar(10) NOT NULL DEFAULT '',
  `Id_Pegawai` varchar(10) NOT NULL DEFAULT '',
  `tujuan_akad` varchar(100) NOT NULL DEFAULT '',
  `Jangka_Waktu` int(11) NOT NULL,
  `Besar_Pembiayaan` int(11) NOT NULL,
  `Nisbah_Nasabah` int(11) NOT NULL,
  `Nisbah_BMT` int(11) NOT NULL,
  `angsuran_perbulan` int(11) NOT NULL,
  `tanggal_pengajuan` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(50) NOT NULL DEFAULT '',
  `keterangan` varchar(200) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Id_Pembiayaan`),
  KEY `id` (`id`),
  KEY `No_Rekening` (`No_Rekening`),
  KEY `Id_Nasabah` (`Id_Nasabah`),
  KEY `Id_Pegawai` (`Id_Pegawai`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table mudharabah.tb_perusahaan
CREATE TABLE IF NOT EXISTS `tb_perusahaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Perusahaan` varchar(10) NOT NULL DEFAULT '',
  `Id_Nasabah` varchar(10) NOT NULL DEFAULT '',
  `Nama_Perusahaan` varchar(50) DEFAULT '',
  `no_siup` varchar(50) DEFAULT '',
  `No_Telp_Perusahaan` char(50) DEFAULT NULL,
  `Alamat_Perusahaan` text DEFAULT '',
  `Bidang_Usaha` varchar(50) DEFAULT '',
  `Berdiri_Sejak` longtext DEFAULT NULL,
  `Status` varchar(50) DEFAULT '',
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Id_Perusahaan`),
  KEY `id` (`id`),
  KEY `Id_Nasabah` (`Id_Nasabah`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table mudharabah.tb_rekening
CREATE TABLE IF NOT EXISTS `tb_rekening` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `No_Rekening` varchar(10) NOT NULL DEFAULT '',
  `Id_Nasabah` varchar(10) NOT NULL DEFAULT '',
  `Saldo` int(11) NOT NULL DEFAULT 0,
  `Status` varchar(50) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`No_Rekening`),
  KEY `id` (`id`),
  KEY `Id_Nasabah` (`Id_Nasabah`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for trigger mudharabah.tb_admin_trigger
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `tb_admin_trigger` BEFORE INSERT ON `tb_admin` FOR EACH ROW BEGIN
	set new.id_admin = concat((Select lpad((select count(1)+1 FROM tb_admin),7, 'ADM000')));
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger mudharabah.tb_datapasangan_trigger
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `tb_datapasangan_trigger` BEFORE INSERT ON `tb_datapasangan` FOR EACH ROW BEGIN
	set new.Id_Pasangan = concat((Select lpad((select count(1)+1 FROM tb_datapasangan),7, 'PSG000')));
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger mudharabah.tb_datapenghasilan_trigger
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `tb_datapenghasilan_trigger` BEFORE INSERT ON `tb_datapenghasilan` FOR EACH ROW BEGIN
	set new.Id_Penghasilan = concat((Select lpad((select count(1)+1 FROM tb_datapenghasilan),7, 'DPH000')));
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger mudharabah.tb_nasabah_trigger
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `tb_nasabah_trigger` BEFORE INSERT ON `tb_nasabah` FOR EACH ROW BEGIN
	set new.Id_Nasabah = concat((Select lpad((select count(1)+1 FROM tb_nasabah),7, 'NSB000')));
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger mudharabah.tb_pegawai_trigger
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `tb_pegawai_trigger` BEFORE INSERT ON `tb_pegawai` FOR EACH ROW BEGIN
	set new.Id_Pegawai = concat((Select lpad((select count(1)+1 FROM tb_pegawai),7, 'PGW000')));
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger mudharabah.tb_pembayaran_trigger
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `tb_pembayaran_trigger` BEFORE INSERT ON `tb_pembayaran` FOR EACH ROW BEGIN
	set new.id_pembayaran = concat((Select lpad((select count(1)+1 FROM tb_pembayaran),7, 'BYR000')));
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger mudharabah.tb_pembiayaan_before_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `tb_pembiayaan_before_insert` AFTER INSERT ON `tb_pembiayaan` FOR EACH ROW BEGIN
insert into tb_pembayaran (Id_Pembiayaan,No_Rekening,penyetor,angsuran_ke,nominal,sisa_pembayaran,status_pembayaran,created_at,updated_at) values (new.Id_Pembiayaan,new.No_Rekening,'',0,0,New.Besar_Pembiayaan,1,NOW(),NOW());

END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger mudharabah.tb_pembiayaan_trigger
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `tb_pembiayaan_trigger` BEFORE INSERT ON `tb_pembiayaan` FOR EACH ROW BEGIN
	set new.Id_Pembiayaan = concat((Select lpad((select count(1)+1 FROM tb_pembiayaan),7, 'PMB000')));
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger mudharabah.tb_perusahaan_trigger
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `tb_perusahaan_trigger` BEFORE INSERT ON `tb_perusahaan` FOR EACH ROW BEGIN
	set new.Id_Perusahaan = concat((Select lpad((select count(1)+1 FROM tb_perusahaan),7, 'PRS000')));
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger mudharabah.tb_rekening_trigger
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `tb_rekening_trigger` BEFORE INSERT ON `tb_rekening` FOR EACH ROW BEGIN
	set new.No_Rekening = concat((Select lpad((select count(1)+1 FROM tb_rekening),7, 'RK0000')));
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
