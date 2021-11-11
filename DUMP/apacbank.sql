-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Nov-2021 às 16:26
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
(1, 'Joao Gabriel Marinho', '12923589475', '8833f1325fb6341757b30f6de91487', '8833f1325fb6341757b30f6de91487', 1),
(2, 'Maria Nascimento', '13145387057', '263bce650e68ab4e23f28263760b9f', '263bce650e68ab4e23f28263760b9f', 1),
(3, 'Thiago Henrique Carvalho', '40949670014', 'e99a18c428cb38d5f260853678922e', 'e99a18c428cb38d5f260853678922e', 1),
(4, 'Maria de fatima', '31577214021', '81dc9bdb52d04dc20036dbd8313ed0', '81dc9bdb52d04dc20036dbd8313ed0', 1),
(5, 'Rafael Texeira Sivirino', '06565068062', '827ccb0eea8a706c4c34a16891f84e', '827ccb0eea8a706c4c34a16891f84e', 1),
(6, 'Maria Nascimento', '75994027057', '202cb962ac59075b964b07152d234b', '202cb962ac59075b964b07152d234b', 1),
(7, 'Maria Nascimento', '91353084000', '81dc9bdb52d04dc20036dbd8313ed0', '81dc9bdb52d04dc20036dbd8313ed0', 1),
(8, 'Joao Gabriel Marinho', '91353084000', '202cb962ac59075b964b07152d234b', '202cb962ac59075b964b07152d234b', 1),
(9, 'Joao Gabriel Marinho', '91353084000', '202cb962ac59075b964b07152d234b', '202cb962ac59075b964b07152d234b', 1);

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
(4, 100, '2021-11-11', 'Conta corrente', 1, 1),
(5, 500, '2021-11-11', 'Conta poupança', 1, 1),
(9, 1000, '2021-11-11', 'Conta jurídica', 1, 1),
(14, 100, '2021-11-11', 'Conta corrente', 1, 2),
(15, 500, '2021-11-11', 'Conta poupança', 1, 2),
(16, 100, '2021-11-11', 'Conta corrente', 1, 2),
(17, 500, '2021-11-11', 'Conta poupança', 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `transacao`
--

CREATE TABLE `transacao` (
  `id_transacao` int(11) NOT NULL,
  `tipo_transacao` varchar(30) NOT NULL,
  `data_transacao` date NOT NULL,
  `valor_transacao` float NOT NULL,
  `id_conta_origem` int(11) NOT NULL,
  `id_conta_destino` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`id_transacao`),
  ADD KEY `id_conta_origem` (`id_conta_origem`),
  ADD KEY `id_conta_destino` (`id_conta_destino`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_usuario`
--
ALTER TABLE `cadastro_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `conta`
--
ALTER TABLE `conta`
  MODIFY `id_conta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `transacao`
--
ALTER TABLE `transacao`
  MODIFY `id_transacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `conta`
--
ALTER TABLE `conta`
  ADD CONSTRAINT `conta_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `cadastro_usuario` (`id_usuario`);

--
-- Limitadores para a tabela `transacao`
--
ALTER TABLE `transacao`
  ADD CONSTRAINT `transacao_ibfk_1` FOREIGN KEY (`id_conta_origem`) REFERENCES `conta` (`id_conta`),
  ADD CONSTRAINT `transacao_ibfk_2` FOREIGN KEY (`id_conta_destino`) REFERENCES `conta` (`id_conta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
