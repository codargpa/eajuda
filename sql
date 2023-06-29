create database prova;
use prova;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `login-ltpii` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `login-ltpii`;

-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id do usuário',
  `ds_email` varchar(200) NOT NULL COMMENT 'e-mail do usuário',
  `ds_nome` varchar(200) NOT NULL COMMENT 'nome do usuário',
  `ds_senha` varchar(256) NOT NULL COMMENT 'hash da senha',
  `ds_cpf` varchar(14) NOT NULL COMMENT 'cpf usuário',
  `ds_telefone` varchar(15) NOT NULL COMMENT 'Telefone do usuário',
  `ds_habilidade` varchar(256) NOT NULL COMMENT 'habilidade',
  `ds_disponibilidade` varchar(256) NOT NULL COMMENT 'de segunda a domingo quais dias e horarios ',
  `ds_sexo` varchar(15) NOT NULL COMMENT 'sexo do usuário',
  `ds_data_nasc` date NOT NULL COMMENT 'data nascimento usuário',
  `ds_cidade` varchar(45) NOT NULL COMMENT 'cidade do usuário',
  `ds_estado` varchar(45) NOT NULL COMMENT 'cidade usuário',
  `ds_endereco` varchar(45) NOT NULL COMMENT 'endereço do usuário',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;
