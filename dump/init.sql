-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 17/07/2017 às 02:54
-- Versão do servidor: 10.1.13-MariaDB
-- Versão do PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ditech`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `horario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `horarios`
--

INSERT INTO `horarios` (`id`, `horario`) VALUES
(1, '00:00 - 01:00'),
(2, '01:00 - 02:00'),
(3, '02:00 - 03:00'),
(4, '03:00 - 04:00'),
(5, '05:00 - 06:00'),
(6, '06:00 - 07:00'),
(7, '07:00 - 08:00'),
(8, '08:00 - 09:00'),
(9, '09:00 - 10:00'),
(10, '11:00 - 12:00'),
(11, '12:00 - 13:00'),
(12, '13:00 - 14:00'),
(13, '14:00 - 15:00'),
(14, '15:00 - 16:00'),
(15, '16:00 - 17:00'),
(16, '17:00 - 18:00'),
(17, '18:00 - 19:00'),
(18, '19:00 - 20:00'),
(19, '20:00 - 21:00'),
(20, '21:00 - 22:00'),
(21, '22:00 - 23:00'),
(22, '23:00 - 00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `reserva_salas`
--

CREATE TABLE `reserva_salas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_sala` int(11) NOT NULL,
  `data_reserva` date NOT NULL,
  `id_horario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `reserva_salas`
--

INSERT INTO `reserva_salas` (`id`, `id_usuario`, `id_sala`, `data_reserva`, `id_horario`) VALUES
(1, 4, 1, '2017-07-16', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `salas`
--

CREATE TABLE `salas` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `salas`
--

INSERT INTO `salas` (`id`, `nome`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sala 1', 1, '2017-07-13 00:09:28', '2017-07-12 01:15:20'),
(3, 'Sala 3', 1, '2017-07-12 01:24:47', '2017-07-12 01:24:47'),
(5, 'Sala 4', 1, '2017-07-16 15:27:55', '2017-07-16 15:27:55');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `papel` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `papel`, `senha`, `created_at`, `updated_at`) VALUES
(1, 'Alex Rodrigues', 'alex_sandrorodrigues@hotmail.com', 'administrador', 'e10adc3949ba59abbe56e057f20f883e', '2017-07-16 17:17:54', '2017-07-16 17:17:54'),
(4, 'Usuário Teste', 'teste@teste.com.br', 'usuario', 'e10adc3949ba59abbe56e057f20f883e', '2017-07-16 17:18:07', '2017-07-16 17:18:07'),
(6, 'Adminstrador', 'admin@teste.com.br', 'administrador', '21232f297a57a5a743894a0e4a801fc3', '2017-07-16 23:51:17', '2017-07-16 23:51:17');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `reserva_salas`
--
ALTER TABLE `reserva_salas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_sala` (`id_sala`),
  ADD KEY `id_horario` (`id_horario`);

--
-- Índices de tabela `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de tabela `reserva_salas`
--
ALTER TABLE `reserva_salas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `salas`
--
ALTER TABLE `salas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `reserva_salas`
--
ALTER TABLE `reserva_salas`
  ADD CONSTRAINT `reserva_salas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `reserva_salas_ibfk_2` FOREIGN KEY (`id_sala`) REFERENCES `salas` (`id`),
  ADD CONSTRAINT `reserva_salas_ibfk_3` FOREIGN KEY (`id_horario`) REFERENCES `horarios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
