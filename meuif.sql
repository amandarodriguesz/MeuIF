-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Jun-2019 às 20:10
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meuif`
--

--
-- Extraindo dados da tabela `aluno`
--


--
-- Extraindo dados da tabela `instituicao`
--

INSERT INTO `instituicao` (`id`, `nome`, `cnpj`, `data`, `sobre`) VALUES
(1, 'IFMS', '01231540-02', '2019-06-22', 'Escola de ensino'),
(2, 'XVI', '13210122', '2019-06-22', 'Ensino');

--
-- Extraindo dados da tabela `metas`
--


--
-- Extraindo dados da tabela `ocorrencia`
--


--
-- Extraindo dados da tabela `responsavel`
--

INSERT INTO `responsavel` (`id`, `nome`, `cpf`) VALUES
(1, 'Josefina', '11111111111'),
(2, 'Jose', '22222222222'),
(3, 'Jo', '33333333333'),
(4, 'George', '44444444444'),
(5, 'Ada', '55555555555');

--
-- Extraindo dados da tabela `tipousuario`
--

INSERT INTO `tipousuario` (`id`, `Nome`) VALUES
(1, 'Aluno'),
(2, 'Responsável'),
(3, 'Instituicao');

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `senha`, `id_tipo`) VALUES
(1, 'admin', 'admin', 3);

INSERT INTO `aluno` (`id`, `nome`, `cpf`, `ra`, `instituicao_id`, `notas`, `faltas`, `responsavel_id`) VALUES
(1, 'Amanda', '11111111', '114561', 1,10,0, 2),
(2, 'Felipe', '222222', '176561', 1,9,20, 3),
(3, 'Ana', '05632562562', '11861', 1,8.5,15, 1),
(4, 'Gabriel', '123123111', '14531', 1, 7,12.5,4),
(5, 'José', '6532652', '118061', 2,4,0, 1);

INSERT INTO `metas` (`id`, `aluno_id`, `responsavel_id`, `atingido`, `recompensa`, `objetivo`) VALUES
(1, 1, 2, 0,'Viagem para Terenos',80),
(2, 2, 2, 1,'Playstation 4',100);

INSERT INTO `ocorrencia` (`id`, `aluno_id`, `instituicao_id`, `descricao`, `responsavel_id`) VALUES
(1, 3, 1, 'Racismo', 2),
(2, 1, 1, 'Ana', 3),
(3, 4, 1, 'Xingamento', 3);


COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
