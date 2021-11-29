-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2021 às 13:04
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `apacbank`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_usuario`
--

CREATE TABLE `cadastro_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(50) NOT NULL,
  `cpf_usuario` varchar(14) NOT NULL,
  `senha_usuario` varchar(30) NOT NULL,
  `confirmaSenha_usuario` varchar(30) NOT NULL,
  `status_usuario` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro_usuario`
--

INSERT INTO `cadastro_usuario` (`id_usuario`, `nome_usuario`, `cpf_usuario`, `senha_usuario`, `confirmaSenha_usuario`, `status_usuario`) VALUES
(1, 'Joao Gabriel Marinho De Andrade', '12923589475', '8833f1325fb6341757b30f6de91487', '8833f1325fb6341757b30f6de91487', 1),
(2, 'Maria Nascimento', '13145387057', '263bce650e68ab4e23f28263760b9f', '263bce650e68ab4e23f28263760b9f', 1),
(3, 'Thiago Henrique Carvalho', '40949670014', 'e99a18c428cb38d5f260853678922e', 'e99a18c428cb38d5f260853678922e', 1),
(4, 'Maria de fatima', '31577214021', '81dc9bdb52d04dc20036dbd8313ed0', '81dc9bdb52d04dc20036dbd8313ed0', 1),
(5, 'Rafael Texeira Sivirino', '06565068062', '827ccb0eea8a706c4c34a16891f84e', '827ccb0eea8a706c4c34a16891f84e', 1),
(10, 'Mario Martins Santos', '96566610014', 'aeb34368c5d53aee32431b5386f71c', 'aeb34368c5d53aee32431b5386f71c', 1),
(11, 'Fabio Texeira', '62893741096', '8cfa2282b17de0a598c010f5f0109e', '8cfa2282b17de0a598c010f5f0109e', 1),
(12, 'Sivirna Nasimento', '42303295041', 'ed2b1f468c5f915f3f1cf75d7068ba', 'ed2b1f468c5f915f3f1cf75d7068ba', 1),
(13, 'Roberta Silva', '28237593014', '928111ccbf11ffbb2bc5cf2681c656', '928111ccbf11ffbb2bc5cf2681c656', 1),
(14, 'Sylvannas Correventos', '84410486063', 'd2f04c2a7cdcbe8efaef996a6249e7', 'd2f04c2a7cdcbe8efaef996a6249e7', 1),
(15, 'Alexander Arnold', '98403756011', '4297f44b13955235245b2497399d7a', '4297f44b13955235245b2497399d7a', 0),
(16, 'Samuel Marinho Dos Santos', '49692777022', '55493847dc2683bc0d35c7f9947e93', '55493847dc2683bc0d35c7f9947e93', 0),
(17, 'Severino Santos', '54645738011', '4297f44b13955235245b2497399d7a', '4297f44b13955235245b2497399d7a', 1),
(18, 'Guto Marinho', '91335711040', 'ed2b1f468c5f915f3f1cf75d7068ba', 'ed2b1f468c5f915f3f1cf75d7068ba', 1),
(19, 'Silvia Lins', '95586627043', '9b2d75e8ef30064e6f9e8b006acae3', '9b2d75e8ef30064e6f9e8b006acae3', 1),
(20, 'David Silva', '55878626071', '104e08045184a4f111170f990e274e', '104e08045184a4f111170f990e274e', 1),
(21, 'Alex Sandro', '81411835085', '3aa24069c4d4418426a7c048ec5887', '3aa24069c4d4418426a7c048ec5887', 1),
(22, 'Thiago Macedo', '23552324578', '19835d9787f9968f7d6e6650739f39', '19835d9787f9968f7d6e6650739f39', 0),
(23, 'Marcos Silva', '95838493856', '93447ae568aedff4c3a4bf45ada41b', '93447ae568aedff4c3a4bf45ada41b', 1),
(24, 'Junior Vieira', '29489338975', '9b2d75e8ef30064e6f9e8b006acae3', '9b2d75e8ef30064e6f9e8b006acae3', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `conta`
--

CREATE TABLE `conta` (
  `id_conta` int(11) NOT NULL,
  `saldo_conta` float NOT NULL,
  `data_de_criacao` date NOT NULL,
  `tipo_conta` varchar(30) NOT NULL,
  `status_conta` tinyint(1) NOT NULL DEFAULT 1,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `conta`
--

INSERT INTO `conta` (`id_conta`, `saldo_conta`, `data_de_criacao`, `tipo_conta`, `status_conta`, `id_usuario`) VALUES
(4, 1000, '2021-11-11', 'Conta corrente', 1, 1),
(5, 100, '2021-11-11', 'Conta poupança', 0, 1),
(9, 2100, '2021-11-11', 'Conta jurídica', 1, 1),
(14, 510, '2021-11-11', 'Conta corrente', 1, 2),
(15, 240, '2021-11-11', 'Conta poupança', 1, 2),
(19, 1000, '2021-11-12', 'Conta jurídica', 1, 2),
(27, 500, '2021-11-12', 'Conta poupança', 1, 15),
(28, 100, '2021-11-16', 'Conta corrente', 1, 16),
(45, 100, '2021-11-16', 'Conta corrente', 1, 14),
(46, 100, '2021-11-16', 'Conta corrente', 1, 4),
(47, 500, '2021-11-17', 'Conta poupança', 1, 18),
(48, 100, '2021-11-17', 'Conta corrente', 1, 11),
(49, 100, '2021-11-19', 'Conta corrente', 1, 19),
(50, 1000, '2021-11-19', 'Conta jurídica', 1, 17),
(51, 0, '2021-11-22', 'Conta corrente', 0, 20),
(52, 0, '2021-11-23', 'Conta corrente', 0, 20),
(53, 100, '2021-11-25', 'Conta corrente', 1, 3),
(54, 100, '2021-11-25', 'Conta poupança', 1, 1),
(55, 1000, '2021-11-25', 'Conta corrente', 0, 1),
(56, 100, '2021-11-25', 'Conta corrente', 1, 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `transacao`
--

CREATE TABLE `transacao` (
  `id_conta` int(11) NOT NULL,
  `tipo_transacao` varchar(30) NOT NULL,
  `data_transacao` date NOT NULL,
  `valor_transacao` float NOT NULL,
  `id_conta_origem` int(11) NOT NULL,
  `id_conta_destino` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `transacao`
--

INSERT INTO `transacao` (`id_conta`, `tipo_transacao`, `data_transacao`, `valor_transacao`, `id_conta_origem`, `id_conta_destino`) VALUES
(1, 'Transferência', '2021-11-24', 20, 4, 2),
(2, 'Transferência', '2021-11-24', 200, 5, 2),
(3, 'Transferência', '2021-11-24', 100, 5, 2),
(4, 'Saque', '2021-11-24', 50, 5, 0),
(5, 'Transferência', '2021-11-25', 50, 5, 2),
(6, 'Depósito', '2021-11-25', 5000, 53, 0),
(7, 'Saque', '2021-11-25', 5200, 53, 0),
(8, 'Depósito', '2021-11-25', 200, 53, 0),
(9, 'Saque', '2021-11-25', 700, 15, 0),
(10, 'Depósito', '2021-11-25', 100, 15, 0),
(11, 'Depósito', '2021-11-25', 50, 15, 0),
(12, 'Depósito', '2021-11-25', 5, 15, 0),
(13, 'Transferência', '2021-11-25', 110, 15, 2),
(14, 'Depósito', '2021-11-25', 105, 15, 0),
(15, 'Transferência', '2021-11-25', 50, 15, 2),
(16, 'Transferência', '2021-11-25', 20, 15, 2),
(17, 'Transferência', '2021-11-25', 20, 15, 2),
(18, 'Transferência', '2021-11-25', 10, 15, 2),
(19, 'Transferência', '2021-11-25', 10, 15, 2),
(20, 'Transferência', '2021-11-25', 10, 15, 2),
(21, 'Transferência', '2021-11-25', 10, 15, 2),
(22, 'Transferência', '2021-11-25', 2700, 14, 1),
(23, 'Depósito', '2021-11-25', 20, 14, 0),
(24, 'Transferência', '2021-11-25', 10, 15, 2),
(25, 'Transferência', '2021-11-25', 10, 14, 2),
(26, 'Saque', '2021-11-25', 100, 55, 0),
(27, 'Transferência', '2021-11-25', 100, 9, 1),
(28, 'Depósito', '2021-11-25', 1000, 4, 0),
(29, 'Transferência', '2021-11-25', 200, 4, 1),
(30, 'Transferência', '2021-11-25', 200, 4, 1),
(31, 'Transferência', '2021-11-25', 100, 4, 1),
(32, 'Transferência', '2021-11-25', 100, 15, 2),
(33, 'Transferência', '2021-11-25', 200, 4, 6),
(34, 'Transferência', '2021-11-25', 100, 4, 1),
(35, 'Transferência', '2021-11-25', 10, 14, 21),
(36, 'Transferência', '2021-11-25', 100, 4, 2),
(37, 'Transferência', '2021-11-25', 100, 4, 2),
(38, 'Transferência', '2021-11-25', 100, 4, 2),
(39, 'Transferência', '2021-11-25', 100, 4, 1),
(40, 'Transferência', '2021-11-25', 200, 4, 2),
(41, 'Transferência', '2021-11-25', 200, 4, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro_usuario`
--
ALTER TABLE `cadastro_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices para tabela `conta`
--
ALTER TABLE `conta`
  ADD PRIMARY KEY (`id_conta`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `transacao`
--
ALTER TABLE `transacao`
  ADD PRIMARY KEY (`id_conta`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_usuario`
--
ALTER TABLE `cadastro_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `conta`
--
ALTER TABLE `conta`
  MODIFY `id_conta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de tabela `transacao`
--
ALTER TABLE `transacao`
  MODIFY `id_conta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `conta`
--
ALTER TABLE `conta`
  ADD CONSTRAINT `conta_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `cadastro_usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
