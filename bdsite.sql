-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Nov-2020 às 12:42
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdsite`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `Nome` char(100) NOT NULL,
  `Senha` varchar(32) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Endereço` varchar(50) NOT NULL,
  `Telefone` int(14) NOT NULL,
  `Cidade` char(30) NOT NULL,
  `DonoCartão` char(100) NOT NULL,
  `nCartão` int(25) NOT NULL,
  `CVV` int(4) NOT NULL,
  `Vencimento` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `Nome`, `Senha`, `Email`, `Endereço`, `Telefone`, `Cidade`, `DonoCartão`, `nCartão`, `CVV`, `Vencimento`) VALUES
(2, 'rodrigo miriano', '202cb962ac59075b964b07152d234b70', 'teste@gmail.com', 'rua da subida', 1234451, 'SBC', 'Roberto Nascimento', 2147483647, 123, '12344'),
(3, 'rodrigo', '202cb962ac59075b964b07152d234b70', '123@teste.com', '', 0, '', 'Roberto Nascimento', 2147483647, 3123, '321323'),
(4, 'rodrigo', '202cb962ac59075b964b07152d234b70', 'odin@teste.com', '', 0, '', 'Roberto Nascimento', 2147483647, 122, '31233'),
(5, 'antonio', '202cb962ac59075b964b07152d234b70', 'antoni@teste.com', 'eeee', 1111, 'cccc', '', 0, 0, ''),
(6, 'rodrigo miriano', '202cb962ac59075b964b07152d234b70', 'roberto@teste.com', 'rua da subida', 12345, 'SBC', 'Roberto Nascimento', 2147483647, 111, '04 / 2'),
(7, 'rodrigo', '202cb962ac59075b964b07152d234b70', '321@gmail.com', 'eeee', 1111, 'cccc', 'Roberto Nascimento', 2147483647, 123, '43212'),
(8, 'antonio', '202cb962ac59075b964b07152d234b70', 'andre@radares.com', 'eeee', 1111, 'cccc', 'Roberto Nascimento', 2147483647, 123, '34123'),
(9, 'rodrigo', '202cb962ac59075b964b07152d234b70', 'teste1@gmail.com', 'eeee', 1111, 'cccc', 'Roberto Nascimento', 2147483647, 432, '12431'),
(10, 'rodrigo', '202cb962ac59075b964b07152d234b70', 'teste2@gmail.com', 'eeee', 1111, 'cccc', 'Roberto Nascimento', 2147483647, 123, '12312'),
(11, 'rodrigo', '202cb962ac59075b964b07152d234b70', 'teste3@gmail.com', 'eeee', 1111, 'cccc', '', 0, 0, ''),
(12, 'rodrigo miriano', '202cb962ac59075b964b07152d234b70', 'qqweq@gmail.com', 'rua da subida', 1234451, 'SBC', '12344331', 2147483647, 131, '12312'),
(13, 'rodrigo miriano', '202cb962ac59075b964b07152d234b70', 'rodrigo.miriano11@gmail.com', 'rua da subida', 1234451, 'SBC', 'Roberto Nascimento', 2147483647, 123, '12333');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) NOT NULL,
  `codigo` int(10) NOT NULL,
  `produto` char(35) NOT NULL,
  `quantidade` int(10) NOT NULL,
  `preço` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `codigo`, `produto`, `quantidade`, `preço`) VALUES
(1, 1, 'prod1', 2, 1200),
(2, 2, 'prod2', 15, 123),
(3, 3, 'prod3', 10, 134),
(4, 4, 'prod4', 1, 124);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
