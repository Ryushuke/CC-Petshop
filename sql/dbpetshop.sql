
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS 'dbpetshop'
USE 'dbpetshop';

CREATE TABLE 'servico' (
	'id' int(11) NOT NULL,
	'create_at' timestamp NOT NULL DEFAULT current_timestamp(),
	'updated_at' timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
	'name' varchar(255) NOT NULL,
	'duration' int(11) NOT NULL,
	'price' decimal(10,2) NOT NULL,
	'category' varchar(255) NOT NULL
)

INSERT INTO 'servico' ('id', 'create_at', 'updated_at', 'name', 'duration', 'price', 'category') VALUES
(1, '2025-06-08 18:27:49', '2025-06-09 22:10:30', 'Remoção de pulgas', 41, 30.17, 'Gato'),
(2, '2025-06-09 14:10:05', '2025-06-09 14:10:05', 'Banho', 60, 70.00, 'Cachorro'),
(4, '2025-06-09 21:07:18', '2025-06-09 22:04:34', 'Escovar as escamas', 100, 123.00, 'Peixe'),
(5, '2025-06-09 21:58:16', '2025-06-09 21:58:16', 'Aparar as unhas', 10, 10.00, 'Gato'),
(6, '2025-06-09 22:08:43', '2025-06-09 22:08:43', 'Pentear Macaco', 30, 71.00, 'Macaco'),
(7, '2025-06-09 22:17:08', '2025-06-09 22:17:08', 'Banho e Tosa Higienica', 120, 180.04, 'Cachorro'),
(8, '2025-06-09 22:20:03', '2025-06-09 22:20:03', 'Pentear o Rabo', 36, 100.50, 'Cavalo'),
(9, '2025-06-10 13:19:33', '2025-06-10 13:19:33', 'Remoção de Carrapatos', 75, 120.56, 'Cavalo');

ALTER TABLE 'servico' ADD PRIMARY KEY ('id');

ALTER TABLE 'servico' MODIFY 'id' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;