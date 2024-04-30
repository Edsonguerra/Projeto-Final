-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Abr-2024 às 20:50
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `site_marcação_de_consulta`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `Tipo` varchar(45) DEFAULT NULL,
  `id da área` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta_paciente`
--

CREATE TABLE `consulta_paciente` (
  `id` int(11) NOT NULL,
  `id_paciente` varchar(45) NOT NULL,
  `id_consulta` varchar(45) DEFAULT NULL,
  `id_Doctor` varchar(45) NOT NULL,
  `data_consulta` varchar(45) NOT NULL,
  `data_de control` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario_de_consulta`
--

CREATE TABLE `formulario_de_consulta` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(45) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `data_de_nascimento` date NOT NULL,
  `historico_medico` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `formulario_de_consulta`
--

INSERT INTO `formulario_de_consulta` (`id`, `nome_completo`, `sexo`, `data_de_nascimento`, `historico_medico`) VALUES
(13, 'Edson Guerra', 'Masculino', '2002-01-01', ''),
(15, '', '', '0000-00-00', ''),
(16, '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_de_consultas`
--

CREATE TABLE `tipos_de_consultas` (
  `id` int(11) NOT NULL,
  `nome_da_consulta` varchar(50) NOT NULL,
  `area_profissional` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tipos_de_consultas`
--

INSERT INTO `tipos_de_consultas` (`id`, `nome_da_consulta`, `area_profissional`) VALUES
(5, 'Urologia', 'Fernando'),
(6, 'Consulta de Dermatologia', 'Dentista'),
(7, 'Consults de dentista', 'nnnnn'),
(8, 'eyeyyyy', 'g'),
(9, 'Deuuu', 'j');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `ultimo_nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `ultimo_nome`, `email`, `senha`) VALUES
(3, 'Edson', 'Guerra', 'edsonguerra004@gmail.com', '1234');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `consulta_paciente`
--
ALTER TABLE `consulta_paciente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `formulario_de_consulta`
--
ALTER TABLE `formulario_de_consulta`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tipos_de_consultas`
--
ALTER TABLE `tipos_de_consultas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `consulta_paciente`
--
ALTER TABLE `consulta_paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `formulario_de_consulta`
--
ALTER TABLE `formulario_de_consulta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tipos_de_consultas`
--
ALTER TABLE `tipos_de_consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
