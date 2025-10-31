-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sistemit
CREATE DATABASE IF NOT EXISTS `sistemit` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sistemit`;

-- Dumping structure for table sistemit.anggota
CREATE TABLE IF NOT EXISTS `anggota` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `idTim` bigint unsigned NOT NULL,
  `namaAnggota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglBergabung` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_anggota_tim` (`idTim`),
  CONSTRAINT `FK_anggota_tim` FOREIGN KEY (`idTim`) REFERENCES `tim` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemit.anggota: ~40 rows (approximately)
INSERT INTO `anggota` (`id`, `idTim`, `namaAnggota`, `posisi`, `tglBergabung`, `created_at`, `updated_at`) VALUES
	(1, 1, 'John Doe', 'Developer', '2023-01-01', NULL, NULL),
	(2, 1, 'Jane Smith', 'Designer', '2023-01-02', NULL, NULL),
	(3, 1, 'Bob Johnson', 'QA Engineer', '2023-01-03', NULL, NULL),
	(4, 1, 'Alice Brown', 'Developer', '2023-01-04', NULL, NULL),
	(5, 2, 'Charlie White', 'Designer', '2023-01-05', NULL, NULL),
	(6, 2, 'David Black', 'QA Engineer', '2023-01-06', NULL, NULL),
	(7, 2, 'Eva Green', 'Developer', '2023-01-07', NULL, NULL),
	(8, 2, 'Frank Red', 'Designer', '2023-01-08', NULL, NULL),
	(9, 3, 'Grace Blue', 'QA Engineer', '2023-01-09', NULL, NULL),
	(10, 3, 'Henry Orange', 'Developer', '2023-01-10', NULL, NULL),
	(11, 3, 'Ivy Pink', 'Designer', '2023-01-11', NULL, NULL),
	(12, 3, 'Jack Yellow', 'QA Engineer', '2023-01-12', NULL, NULL),
	(13, 4, 'Kelly Purple', 'Developer', '2023-01-13', NULL, NULL),
	(14, 4, 'Liam Grey', 'Designer', '2023-01-14', NULL, NULL),
	(15, 4, 'Mia Violet', 'QA Engineer', '2023-01-15', NULL, NULL),
	(16, 5, 'Noah Indigo', 'Developer', '2023-01-16', NULL, NULL),
	(17, 5, 'Olivia Cyan', 'Designer', '2023-01-17', NULL, NULL),
	(18, 5, 'Elijah Maroon', 'QA Engineer', '2023-01-18', NULL, NULL),
	(19, 6, 'Emma Gold', 'Developer', '2023-01-19', NULL, NULL),
	(20, 6, 'Aiden Silver', 'Designer', '2023-01-20', NULL, NULL),
	(21, 11, 'Michael Jordan', 'Frontend Developer', '2023-01-01', NULL, NULL),
	(22, 11, 'Kobe Bryant', 'Backend Developer', '2023-01-15', NULL, NULL),
	(23, 12, 'LeBron James', 'QA Tester', '2023-02-01', NULL, NULL),
	(24, 12, 'Kevin Durant', 'UX Designer', '2023-02-15', NULL, NULL),
	(25, 13, 'Stephen Curry', 'Mobile App Developer', '2023-03-01', NULL, NULL),
	(26, 13, 'Kawhi Leonard', 'API Integration Specialist', '2023-03-15', NULL, NULL),
	(27, 14, 'Giannis Antetokounmpo', 'Code Refactoring Expert', '2023-04-01', NULL, NULL),
	(28, 14, 'Anthony Davis', 'Database Optimization Specialist', '2023-04-15', NULL, NULL),
	(29, 15, 'Luka Dončić', 'Content Management Developer', '2023-05-01', NULL, NULL),
	(30, 15, 'James Harden', 'User Dashboard Designer', '2023-05-15', NULL, NULL),
	(31, 16, 'Joel Embiid', 'AI Chatbot Developer', '2023-06-01', NULL, NULL),
	(32, 16, 'Damian Lillard', 'Security Analyst', '2023-06-15', NULL, NULL),
	(33, 17, 'Jayson Tatum', 'Frontend Developer', '2023-07-01', NULL, NULL),
	(34, 17, 'Devin Booker', 'API Developer', '2023-07-15', NULL, NULL),
	(35, 18, 'Rudy Gobert', 'Database Migration Specialist', '2023-08-01', NULL, NULL),
	(36, 18, 'Chris Paul', 'Backend Developer', '2023-08-15', NULL, NULL),
	(37, 19, 'Ja Morant', 'Data Scientist', '2023-09-01', NULL, NULL),
	(38, 19, 'Zion Williamson', 'Report Generation Specialist', '2023-09-15', NULL, NULL),
	(39, 20, 'Trae Young', 'DevOps Engineer', '2023-10-01', NULL, NULL),
	(40, 20, 'CJ McCollum', 'Continuous Integration Specialist', '2023-10-15', NULL, NULL);

-- Dumping structure for table sistemit.detiltugas
CREATE TABLE IF NOT EXISTS `detiltugas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `idAnggota` bigint unsigned NOT NULL,
  `idTugas` bigint unsigned NOT NULL,
  `namaPekerjaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_detiltugas_anggota` (`idAnggota`),
  KEY `FK_detiltugas_tugas` (`idTugas`),
  CONSTRAINT `FK_detiltugas_anggota` FOREIGN KEY (`idAnggota`) REFERENCES `anggota` (`id`),
  CONSTRAINT `FK_detiltugas_tugas` FOREIGN KEY (`idTugas`) REFERENCES `tugas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemit.detiltugas: ~50 rows (approximately)
INSERT INTO `detiltugas` (`id`, `idAnggota`, `idTugas`, `namaPekerjaan`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 'Code Review', NULL, NULL),
	(2, 1, 2, 'UI Design', NULL, NULL),
	(3, 2, 1, 'Testing', NULL, NULL),
	(4, 2, 2, 'Bug Fixes', NULL, NULL),
	(5, 3, 3, 'Feature Implementation', NULL, NULL),
	(6, 3, 4, 'Documentation', NULL, NULL),
	(7, 4, 5, 'Code Refactoring', NULL, NULL),
	(8, 4, 6, 'UI Enhancements', NULL, NULL),
	(9, 5, 7, 'Integration Testing', NULL, NULL),
	(10, 5, 8, 'Performance Optimization', NULL, NULL),
	(11, 6, 9, 'Security Testing', NULL, NULL),
	(12, 6, 10, 'Database Optimization', NULL, NULL),
	(13, 7, 11, 'Usability Testing', NULL, NULL),
	(14, 7, 12, 'API Development', NULL, NULL),
	(15, 8, 13, 'Frontend Updates', NULL, NULL),
	(16, 8, 14, 'Backend Enhancements', NULL, NULL),
	(17, 9, 15, 'User Acceptance Testing', NULL, NULL),
	(18, 9, 16, 'Deployment Planning', NULL, NULL),
	(19, 10, 17, 'Continuous Integration Setup', NULL, NULL),
	(20, 10, 18, 'DevOps Automation', NULL, NULL),
	(21, 11, 21, 'Design UI Components', NULL, NULL),
	(22, 11, 22, 'Implement Frontend Features', NULL, NULL),
	(23, 12, 23, 'Prepare Test Cases', NULL, NULL),
	(24, 12, 24, 'Conduct Usability Tests', NULL, NULL),
	(25, 13, 25, 'Create Mobile App Wireframes', NULL, NULL),
	(26, 13, 26, 'Integrate External APIs', NULL, NULL),
	(27, 14, 27, 'Identify Code Refactoring Opportunities', NULL, NULL),
	(28, 14, 28, 'Optimize Database Queries', NULL, NULL),
	(29, 15, 29, 'Implement Content Management Features', NULL, NULL),
	(30, 15, 30, 'Enhance User Dashboard UI', NULL, NULL),
	(31, 16, 31, 'Integrate AI Chatbot Functionality', NULL, NULL),
	(32, 16, 32, 'Perform Security Audits', NULL, NULL),
	(33, 17, 33, 'Apply Frontend Updates', NULL, NULL),
	(34, 17, 34, 'Develop Additional API Endpoints', NULL, NULL),
	(35, 18, 35, 'Plan and Execute Database Migration', NULL, NULL),
	(36, 18, 36, 'Implement Backend Enhancements', NULL, NULL),
	(37, 19, 37, 'Develop Data Analysis Algorithms', NULL, NULL),
	(38, 19, 38, 'Generate Reports from Analyzed Data', NULL, NULL),
	(39, 20, 39, 'Set Up Continuous Integration Pipeline', NULL, NULL),
	(40, 20, 40, 'Automate DevOps Processes', NULL, NULL),
	(41, 11, 21, 'Implement Responsive Design', NULL, NULL),
	(42, 11, 22, 'Optimize Frontend Performance', NULL, NULL),
	(43, 12, 23, 'Execute Usability Test Scenarios', NULL, NULL),
	(44, 12, 24, 'Analyze Usability Test Results', NULL, NULL),
	(45, 13, 25, 'Create Mobile App Prototypes', NULL, NULL),
	(46, 13, 26, 'Integrate Third-Party APIs', NULL, NULL),
	(47, 14, 27, 'Identify Code Refactoring Opportunities', NULL, NULL),
	(48, 14, 28, 'Implement Database Query Optimization', NULL, NULL),
	(49, 15, 29, 'Enhance Content Management Features', NULL, NULL),
	(50, 15, 30, 'Design User Dashboard Enhancements', NULL, NULL);

-- Dumping structure for table sistemit.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemit.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table sistemit.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemit.migrations: ~9 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_11_28_073333_create_tabel_proyek', 1),
	(6, '2023_11_28_073410_create_tim', 1),
	(7, '2023_11_28_073420_create_tugas', 1),
	(8, '2023_11_28_073429_create_anggota', 1),
	(9, '2023_11_28_073513_create_detil_tugas', 1);

-- Dumping structure for table sistemit.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemit.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table sistemit.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemit.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table sistemit.proyek
CREATE TABLE IF NOT EXISTS `proyek` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `namaProyek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsiProyek` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglMulai` date NOT NULL,
  `tglSelesai` date NOT NULL,
  `statusProyek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemit.proyek: ~20 rows (approximately)
INSERT INTO `proyek` (`id`, `namaProyek`, `deskripsiProyek`, `tglMulai`, `tglSelesai`, `statusProyek`, `created_at`, `updated_at`) VALUES
	(1, 'E-commerce Platform', 'Develop a robust e-commerce platform with online payment integration.', '2023-01-01', '2023-02-01', 'Selesai', NULL, NULL),
	(2, 'CRM System Upgrade', 'Upgrade the existing CRM system to enhance customer relationship management.', '2023-02-01', '2023-03-01', 'Selesai', NULL, '2023-11-29 02:11:15'),
	(3, 'Mobile App Development', 'Build a cross-platform mobile application for both iOS and Android.', '2023-03-01', '2023-04-01', 'Dalam Progress', NULL, NULL),
	(4, 'Bug Tracking System', 'Develop a bug tracking system to streamline software development processes.', '2023-04-01', '2023-05-01', 'Dalam Progress', NULL, NULL),
	(5, 'Content Management System', 'Create a content management system for efficient content publishing and management.', '2023-05-01', '2023-06-01', 'Dalam Progress', NULL, NULL),
	(6, 'API Integration Project', 'Integrate external APIs to enhance system functionality and connectivity.', '2023-06-01', '2023-07-01', 'Dalam Progress', NULL, NULL),
	(7, 'Software Security Audit', 'Conduct a security audit to identify and address potential vulnerabilities in the software.', '2023-07-01', '2023-08-01', 'Selesai', NULL, NULL),
	(8, 'Database Optimization', 'Optimize database performance for faster and more efficient data retrieval.', '2023-08-01', '2023-09-01', 'Dalam Progress', NULL, NULL),
	(9, 'Machine Learning Module', 'Integrate machine learning capabilities into the existing software for data analysis.', '2023-09-01', '2023-10-01', 'Selesai', NULL, NULL),
	(10, 'User Interface Redesign', 'Redesign the user interface to improve user experience and visual appeal.', '2023-10-01', '2023-11-01', 'Selesai', NULL, NULL),
	(11, 'Automated Testing Framework', 'Implement an automated testing framework for efficient and reliable software testing.', '2023-11-01', '2023-12-01', 'Dalam Progress', NULL, NULL),
	(12, 'Scrum Implementation', 'Implement the Scrum framework to enhance project management and collaboration.', '2023-12-01', '2024-01-01', 'Dalam Progress', NULL, NULL),
	(13, 'Continuous Integration Pipeline', 'Set up a continuous integration pipeline for automated build and deployment.', '2024-01-01', '2024-02-01', 'Selesai', NULL, '2023-11-29 02:11:08'),
	(14, 'Project Management Dashboard', 'Develop a project management dashboard for real-time project monitoring.', '2024-02-01', '2024-03-01', 'Dalam Progress', NULL, NULL),
	(15, 'Collaboration Tool Integration', 'Integrate collaboration tools to streamline communication within the development team.', '2024-03-01', '2024-04-01', 'Selesai', NULL, NULL),
	(16, 'Software Documentation System', 'Implement a comprehensive documentation system for software projects.', '2024-04-01', '2024-05-01', 'Selesai', NULL, NULL),
	(17, 'AI Chatbot Implementation', 'Integrate an AI-powered chatbot to enhance customer support and interaction.', '2024-05-01', '2024-06-01', 'Dalam Progress', NULL, NULL),
	(18, 'Code Review Platform', 'Develop a platform for efficient and collaborative code reviews within the development team.', '2024-06-01', '2024-07-01', 'Selesai', NULL, '2023-11-29 02:11:21'),
	(19, 'Cloud Migration Project', 'Migrate existing systems and data to cloud infrastructure for scalability.', '2025-01-01', '2025-02-01', 'Dalam Progress', NULL, '2023-12-01 19:03:12'),
	(20, 'DevOps Automation Framework', 'Implement a DevOps automation framework for seamless development and operations.', '2024-08-01', '2024-09-01', 'Selesai', NULL, '2023-11-29 02:11:25');

-- Dumping structure for table sistemit.tim
CREATE TABLE IF NOT EXISTS `tim` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `namaTim` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglPembentukan` date NOT NULL,
  `jumlahAnggota` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemit.tim: ~20 rows (approximately)
INSERT INTO `tim` (`id`, `namaTim`, `tglPembentukan`, `jumlahAnggota`, `created_at`, `updated_at`) VALUES
	(1, 'Development Team', '2023-01-01', 4, NULL, NULL),
	(2, 'Design Team', '2023-01-15', 4, NULL, NULL),
	(3, 'Testing Team', '2023-02-01', 4, NULL, NULL),
	(4, 'DevOps Team', '2023-02-15', 3, NULL, NULL),
	(5, 'Project Management Team', '2023-03-01', 3, NULL, NULL),
	(6, 'Support Team', '2023-03-15', 2, NULL, NULL),
	(7, 'Security Team', '2023-04-01', 0, NULL, NULL),
	(8, 'Infrastructure Team', '2023-04-15', 0, NULL, NULL),
	(9, 'Data Science Team', '2023-05-01', 0, NULL, NULL),
	(10, 'Documentation Team', '2023-05-15', 0, NULL, NULL),
	(11, 'UI/UX Team', '2023-06-01', 2, NULL, NULL),
	(12, 'Training Team', '2023-06-15', 2, NULL, NULL),
	(13, 'Sales Team', '2023-07-01', 2, NULL, NULL),
	(14, 'Marketing Team', '2023-07-15', 2, NULL, NULL),
	(15, 'Legal Team', '2023-08-01', 2, NULL, NULL),
	(16, 'Finance Team', '2023-08-15', 2, NULL, NULL),
	(17, 'Customer Support Team', '2023-09-01', 2, NULL, NULL),
	(18, 'Quality Assurance Team', '2023-09-15', 2, NULL, NULL),
	(19, 'R&D Team', '2023-10-01', 2, NULL, NULL),
	(20, 'Business Intelligence Team', '2023-10-15', 2, NULL, NULL);

-- Dumping structure for table sistemit.tugas
CREATE TABLE IF NOT EXISTS `tugas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `idProyek` bigint unsigned NOT NULL DEFAULT '0',
  `idTim` bigint unsigned NOT NULL,
  `deskripsiTugas` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `statusTugas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `FK_tugas_proyek` (`idProyek`),
  KEY `FK_tugas_tim` (`idTim`),
  CONSTRAINT `FK_tugas_proyek` FOREIGN KEY (`idProyek`) REFERENCES `proyek` (`id`),
  CONSTRAINT `FK_tugas_tim` FOREIGN KEY (`idTim`) REFERENCES `tim` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemit.tugas: ~40 rows (approximately)
INSERT INTO `tugas` (`id`, `idProyek`, `idTim`, `deskripsiTugas`, `deadline`, `statusTugas`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 'Implement Feature X', '2023-01-10', 'Selesai', NULL, NULL),
	(2, 1, 1, 'Design Homepage', '2023-01-15', 'Dalam Progress', NULL, NULL),
	(3, 2, 2, 'Testing Module Y', '2023-02-10', 'Selesai', NULL, NULL),
	(4, 2, 2, 'Bug Fixes', '2023-02-15', 'Selesai', NULL, NULL),
	(5, 3, 3, 'Feature Z Integration', '2023-03-10', 'Dalam Progress', NULL, NULL),
	(6, 3, 3, 'Documentation Update', '2023-03-15', 'Dalam Progress', NULL, NULL),
	(7, 4, 4, 'Refactor Codebase', '2023-04-10', 'Dalam Progress', NULL, NULL),
	(8, 4, 4, 'UI Enhancements', '2023-04-15', 'Dalam Progress', NULL, NULL),
	(9, 5, 5, 'Integration Testing', '2023-05-10', 'Selesai', NULL, NULL),
	(10, 5, 5, 'Performance Optimization', '2023-05-15', 'Dalam Progress', NULL, NULL),
	(11, 6, 6, 'Security Audit', '2023-06-10', 'Dalam Progress', NULL, NULL),
	(12, 6, 6, 'Database Optimization', '2023-06-15', 'Selesai', NULL, NULL),
	(13, 7, 7, 'Usability Testing', '2023-07-10', 'Dalam Progress', NULL, NULL),
	(14, 7, 7, 'API Development', '2023-07-15', 'Selesai', NULL, NULL),
	(15, 8, 8, 'Frontend Updates', '2023-08-10', 'Dalam Progress', NULL, NULL),
	(16, 8, 8, 'Backend Enhancements', '2023-08-15', 'Dalam Progress', NULL, NULL),
	(17, 9, 9, 'User Acceptance Testing', '2023-09-10', 'Selesai', NULL, NULL),
	(18, 9, 9, 'Deployment Planning', '2023-09-15', 'Dalam Progress', NULL, NULL),
	(19, 10, 10, 'Continuous Integration Setup', '2023-10-10', 'Dalam Progress', NULL, NULL),
	(20, 10, 10, 'DevOps Automation', '2023-10-15', 'Selesai', NULL, NULL),
	(21, 11, 11, 'Frontend Development for Project K', '2023-11-10', 'Dalam Progress', NULL, NULL),
	(22, 11, 11, 'Backend Development for Project K', '2023-11-15', 'Dalam Progress', NULL, NULL),
	(23, 12, 12, 'Usability Testing for Project L', '2023-12-10', 'Dalam Progress', NULL, NULL),
	(24, 12, 12, 'Feature Enhancements for Project L', '2023-12-15', 'Dalam Progress', NULL, NULL),
	(25, 13, 13, 'Mobile App UI Design for Project M', '2024-01-10', 'Dalam Progress', NULL, NULL),
	(26, 13, 13, 'API Integration for Project M', '2024-01-15', 'Dalam Progress', NULL, NULL),
	(27, 14, 14, 'Code Refactoring for Project N', '2024-02-10', 'Dalam Progress', NULL, NULL),
	(28, 14, 14, 'Database Optimization for Project N', '2024-02-15', 'Dalam Progress', NULL, NULL),
	(29, 15, 15, 'Content Management Module for Project O', '2024-03-10', 'Dalam Progress', NULL, NULL),
	(30, 15, 15, 'User Dashboard Enhancements for Project O', '2024-03-15', 'Dalam Progress', NULL, NULL),
	(31, 16, 16, 'AI Chatbot Integration for Project P', '2024-04-10', 'Dalam Progress', NULL, NULL),
	(32, 16, 16, 'Security Audit for Project P', '2024-04-15', 'Dalam Progress', NULL, NULL),
	(33, 17, 17, 'Frontend Updates for Project Q', '2024-05-10', 'Dalam Progress', NULL, NULL),
	(34, 17, 17, 'API Development for Project Q', '2024-05-15', 'Dalam Progress', NULL, NULL),
	(35, 18, 18, 'Database Migration for Project R', '2024-06-10', 'Dalam Progress', NULL, NULL),
	(36, 18, 18, 'Backend Enhancements for Project R', '2024-06-15', 'Dalam Progress', NULL, NULL),
	(37, 19, 19, 'Data Analysis Module for Project S', '2024-07-10', 'Dalam Progress', NULL, NULL),
	(38, 19, 19, 'Generate Reports from Analyzed Data for Project S', '2024-07-15', 'Dalam Progress', NULL, NULL),
	(39, 20, 20, 'Set Up Continuous Integration Pipeline for Project T', '2024-08-10', 'Dalam Progress', NULL, NULL),
	(40, 20, 20, 'Automate DevOps Processes for Project T', '2024-08-15', 'Dalam Progress', NULL, NULL);

-- Dumping structure for trigger sistemit.after_anggota_delete
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `after_anggota_delete` AFTER DELETE ON `anggota` FOR EACH ROW BEGIN
    UPDATE tim SET jumlahAnggota = jumlahAnggota - 1 WHERE id = OLD.idTim;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger sistemit.after_anggota_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `after_anggota_insert` AFTER INSERT ON `anggota` FOR EACH ROW BEGIN
    UPDATE tim SET jumlahAnggota = jumlahAnggota + 1 WHERE id = NEW.idTim;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
