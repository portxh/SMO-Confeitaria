create database meutcc;

use meutcc;

CREATE TABLE `usuarios` (
  `cod_usuario` int(7) NOT NULL auto_increment primary key,
  `nome` char(150) NOT NULL,
  `email` char(200) NOT NULL,
  `senha` varchar(300) NOT NULL,
  `tipo` char(50) NOT NULL,
  `cpf` varchar(14) NOT NULL unique,
  `celular` varchar(15) NOT NULL unique
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela de usuarios cadastrados';

INSERT INTO `usuarios` (`cod_usuario`, `nome`, `email`, `senha`, `tipo`, `cpf`, `celular`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$de.PqQGv665LzB8g9MAYKuIi4dOgyBswHnZBqMDJPB.tPVTvRwgXW', '1', '000.000.000-00', '(11) 00000-0000');

CREATE TABLE `categorias` (
  `cod_categoria` int(7) NOT NULL auto_increment primary key,
  `nm_categoria` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela das categorias dos produtos';

CREATE TABLE `produtos` (
  `id` int(7) NOT NULL auto_increment primary key,
  `categoria` char(50) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(3000) NOT NULL,
  `data` datetime NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela para as produtos do site';

CREATE TABLE `contato` (
  `cod_contato` int(7) NOT NULL auto_increment primary key,
  `nome` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `assunto` varchar(100) NOT NULL,
  `mensagem` varchar(3000) NOT NULL,
  `data` datetime NOT NULL,
  `respondido` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela do formulario de contato';

CREATE TABLE `pedidos` (
  `idPedido` int(11) NOT NULL auto_increment primary key,
  `cod_usuario` int(11) NOT NULL,
  `cpf` varchar(14) CHARACTER SET utf8 NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 NOT NULL,
  `celular` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `pedido` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `data` datetime NOT NULL,
  `valorTotal` decimal(10,2) NOT NULL,
  `status` int(11) NOT NULL,
  `dataStatus` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='tabela para os pedidos do site';



