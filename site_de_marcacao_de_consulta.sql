-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2024 at 02:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site_de_marcacao_de_consulta`
--

-- --------------------------------------------------------

--
-- Table structure for table `analise`
--

CREATE TABLE `analise` (
  `id_da_analise` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `area_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `analise_paciente`
--

CREATE TABLE `analise_paciente` (
  `id` int(11) NOT NULL,
  `analise_id_da_analise` int(11) NOT NULL,
  `paciente_id_paciente` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `analise_paciente_has_analista`
--

CREATE TABLE `analise_paciente_has_analista` (
  `id_analise_paciente` int(11) NOT NULL,
  `analista_id_analista` int(11) NOT NULL,
  `analista_user_id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `analista`
--

CREATE TABLE `analista` (
  `id_analista` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `area_id` int(11) NOT NULL,
  `user_id_user1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `nome`) VALUES
(1, 'Pediatria'),
(2, 'Ortopedia'),
(3, 'Geral');

-- --------------------------------------------------------

--
-- Table structure for table `consulta`
--

CREATE TABLE `consulta` (
  `id_da_consulta` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `area_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `consulta`
--

INSERT INTO `consulta` (`id_da_consulta`, `nome`, `area_id`) VALUES
(1, 'Peso', 1),
(2, 'Ossos', 2),
(3, 'Coluna', 1);

-- --------------------------------------------------------

--
-- Table structure for table `consulta_paciente`
--

CREATE TABLE `consulta_paciente` (
  `id` int(11) NOT NULL,
  `consulta_id_da_consulta` int(11) NOT NULL,
  `paciente_id_paciente` int(11) NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `consulta_paciente`
--

INSERT INTO `consulta_paciente` (`id`, `consulta_id_da_consulta`, `paciente_id_paciente`, `data`) VALUES
(5, 1, 18, NULL),
(6, 2, 18, NULL),
(7, 1, 19, NULL),
(8, 2, 19, NULL),
(9, 2, 20, NULL),
(10, 1, 20, NULL),
(11, 2, 21, NULL),
(12, 1, 22, NULL),
(13, 3, 23, NULL),
(14, 1, 24, NULL),
(15, 2, 24, NULL),
(16, 3, 24, NULL),
(17, 1, 25, NULL),
(18, 3, 26, NULL),
(19, 2, 27, NULL),
(20, 3, 28, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `consulta_paciente_has_doctor`
--

CREATE TABLE `consulta_paciente_has_doctor` (
  `id_consulta_paciente` int(11) NOT NULL,
  `consulta_paciente_id` int(11) NOT NULL,
  `doctor_id_doctor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id_doctor` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `area_id` int(11) NOT NULL,
  `user_id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(11) NOT NULL,
  `nome_completo` varchar(45) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `data_de_nascimento` date NOT NULL,
  `historico_medico` varchar(45) DEFAULT NULL,
  `user_id_user` int(11) NOT NULL,
  `bilhete` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `nome_completo`, `sexo`, `data_de_nascimento`, `historico_medico`, `user_id_user`, `bilhete`) VALUES
(18, 'Graciano Henrique', 'Masculino', '2024-06-18', NULL, 3, '005717487MO045'),
(19, 'Graciano', 'Masculino', '2024-06-18', NULL, 3, '1234'),
(20, 'Maria', 'Feminino', '2024-06-18', NULL, 3, '123'),
(21, 'Hélio', 'Masculino', '2024-06-19', NULL, 3, '111'),
(22, 'Matues', 'Masculino', '2024-06-12', NULL, 3, '12A'),
(23, 'Elisa', 'Feminino', '2000-12-06', NULL, 3, '00512'),
(24, 'Adilson', 'Masculino', '2024-12-12', NULL, 3, '002024'),
(25, 'Antonio', 'Masculino', '2024-12-12', NULL, 3, '035'),
(26, 'Martelo', 'Masculino', '2024-12-12', NULL, 3, '005717487MO040'),
(27, 'PHP', 'Masculino', '2024-06-18', NULL, 3, '005717487MO041'),
(28, 'João Carlos', 'Masculino', '2020-12-12', NULL, 3, '005717487MO022');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `ultimo_nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `administrador` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nome`, `ultimo_nome`, `email`, `senha`, `administrador`) VALUES
(1, 'gra', 'gra', 'gra@gmail.com', 'gra', 1),
(3, 'Graciano', 'Gra', 'gracianomanuelhenrique@gmail.com', 'gra', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analise`
--
ALTER TABLE `analise`
  ADD PRIMARY KEY (`id_da_analise`),
  ADD KEY `fk_analise_area1_idx` (`area_id`);

--
-- Indexes for table `analise_paciente`
--
ALTER TABLE `analise_paciente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_analise_paciente_analise1_idx` (`analise_id_da_analise`),
  ADD KEY `fk_analise_paciente_paciente1_idx` (`paciente_id_paciente`);

--
-- Indexes for table `analise_paciente_has_analista`
--
ALTER TABLE `analise_paciente_has_analista`
  ADD PRIMARY KEY (`id_analise_paciente`),
  ADD KEY `fk_analise_paciente_has_analista_analista1_idx` (`analista_id_analista`,`analista_user_id_user`);

--
-- Indexes for table `analista`
--
ALTER TABLE `analista`
  ADD PRIMARY KEY (`id_analista`),
  ADD KEY `fk_table1_area1_idx` (`area_id`),
  ADD KEY `fk_analista_user1_idx` (`user_id_user1`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_da_consulta`),
  ADD KEY `fk_consulta_area1_idx` (`area_id`);

--
-- Indexes for table `consulta_paciente`
--
ALTER TABLE `consulta_paciente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_consulta_paciente_consulta1_idx` (`consulta_id_da_consulta`),
  ADD KEY `fk_consulta_paciente_paciente1_idx` (`paciente_id_paciente`);

--
-- Indexes for table `consulta_paciente_has_doctor`
--
ALTER TABLE `consulta_paciente_has_doctor`
  ADD PRIMARY KEY (`id_consulta_paciente`),
  ADD KEY `fk_consulta_paciente_has_doctor_consulta_paciente1_idx` (`consulta_paciente_id`),
  ADD KEY `fk_consulta_paciente_has_doctor_doctor1_idx` (`doctor_id_doctor`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id_doctor`),
  ADD KEY `fk_doctor_area1_idx` (`area_id`),
  ADD KEY `fk_doctor_user1_idx` (`user_id_user`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`),
  ADD KEY `fk_paciente_user1_idx` (`user_id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analise`
--
ALTER TABLE `analise`
  MODIFY `id_da_analise` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analise_paciente`
--
ALTER TABLE `analise_paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analise_paciente_has_analista`
--
ALTER TABLE `analise_paciente_has_analista`
  MODIFY `id_analise_paciente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analista`
--
ALTER TABLE `analista`
  MODIFY `id_analista` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_da_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `consulta_paciente`
--
ALTER TABLE `consulta_paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `consulta_paciente_has_doctor`
--
ALTER TABLE `consulta_paciente_has_doctor`
  MODIFY `id_consulta_paciente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id_doctor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `analise`
--
ALTER TABLE `analise`
  ADD CONSTRAINT `fk_analise_area1` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `analise_paciente`
--
ALTER TABLE `analise_paciente`
  ADD CONSTRAINT `fk_analise_paciente_analise1` FOREIGN KEY (`analise_id_da_analise`) REFERENCES `analise` (`id_da_analise`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_analise_paciente_paciente1` FOREIGN KEY (`paciente_id_paciente`) REFERENCES `paciente` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `analise_paciente_has_analista`
--
ALTER TABLE `analise_paciente_has_analista`
  ADD CONSTRAINT `fk_analise_paciente_has_analista_analista1` FOREIGN KEY (`analista_id_analista`) REFERENCES `analista` (`id_analista`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `analista`
--
ALTER TABLE `analista`
  ADD CONSTRAINT `fk_analista_user1` FOREIGN KEY (`user_id_user1`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_table1_area1` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `fk_consulta_area1` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `consulta_paciente`
--
ALTER TABLE `consulta_paciente`
  ADD CONSTRAINT `fk_consulta_paciente_consulta1` FOREIGN KEY (`consulta_id_da_consulta`) REFERENCES `consulta` (`id_da_consulta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_consulta_paciente_paciente1` FOREIGN KEY (`paciente_id_paciente`) REFERENCES `paciente` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `consulta_paciente_has_doctor`
--
ALTER TABLE `consulta_paciente_has_doctor`
  ADD CONSTRAINT `fk_consulta_paciente_has_doctor_consulta_paciente1` FOREIGN KEY (`consulta_paciente_id`) REFERENCES `consulta_paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_consulta_paciente_has_doctor_doctor1` FOREIGN KEY (`doctor_id_doctor`) REFERENCES `doctor` (`id_doctor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `fk_doctor_area1` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_doctor_user1` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `fk_paciente_user1` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
