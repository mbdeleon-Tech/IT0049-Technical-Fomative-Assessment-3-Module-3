-- IT0049 Technical Formative Assessment 3
-- Portable MySQL export for the Northstar POS customers and users tables.

SET NAMES utf8mb4;
SET time_zone = '+00:00';

DROP TABLE IF EXISTS `users`;
DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `full_name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(20) DEFAULT NULL,
  `created_at` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `customers` (`full_name`, `email`, `phone`, `created_at`) VALUES
('Alyssa Santos', 'alyssa.santos@example.com', '0917 248 3106', '2026-09-20 09:00:00'),
('Daniel Reyes', 'daniel.reyes@example.com', '0928 517 4420', '2026-09-20 09:15:00'),
('Mikaela Cruz', 'mikaela.cruz@example.com', '0995 630 1184', '2026-09-20 09:30:00'),
('Paolo Mendoza', 'paolo.mendoza@example.com', '0918 761 9052', '2026-09-20 09:45:00'),
('Trisha Lim', 'trisha.lim@example.com', '0906 482 7731', '2026-09-20 10:00:00'),
('Gabriel Torres', 'gabriel.torres@example.com', '0927 194 6685', '2026-09-20 10:15:00');

CREATE TABLE `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL,
  `full_name` VARCHAR(100) NOT NULL,
  `avatar` VARCHAR(255) DEFAULT NULL,
  `created_at` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`username`, `full_name`, `avatar`, `created_at`) VALUES
('admin.marc', 'Marco De Leon', NULL, '2026-09-20 08:00:00'),
('cashier.ana', 'Ana Villanueva', NULL, '2026-09-20 08:15:00'),
('cashier.joel', 'Joel Garcia', NULL, '2026-09-20 08:30:00'),
('stock.ella', 'Ella Navarro', NULL, '2026-09-20 08:45:00'),
('manager.luis', 'Luis Ramos', NULL, '2026-09-20 09:00:00'),
('support.nica', 'Nica Flores', NULL, '2026-09-20 09:15:00');
