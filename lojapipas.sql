-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2020 at 05:36 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lojapipas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_categorias`
--

CREATE TABLE `tb_categorias` (
  `cate_id` int(11) NOT NULL,
  `cate_nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cate_slug` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_categorias`
--

INSERT INTO `tb_categorias` (`cate_id`, `cate_nome`, `cate_slug`) VALUES
(1, 'Geral', 'geral'),
(2, 'Linhas', 'categoria-linhas'),
(3, 'Pipas', 'categoria-pipas'),
(4, 'Carretilhas', 'categoria-carretinha');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `pro_id` int(11) NOT NULL,
  `pro_categoria` int(11) NOT NULL,
  `pro_nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `pro_peso` double(9,3) NOT NULL,
  `pro_valor` double(9,2) NOT NULL,
  `pro_largura` int(11) NOT NULL,
  `pro_altura` int(11) NOT NULL,
  `pro_comprimento` int(11) NOT NULL,
  `pro_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_estoque` int(11) NOT NULL,
  `pro_modelo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_ref` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_fabricate` int(11) NOT NULL,
  `pro_ativo` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `pro_frete_free` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Nao'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_produtos`
--

INSERT INTO `tb_produtos` (`pro_id`, `pro_categoria`, `pro_nome`, `pro_desc`, `pro_peso`, `pro_valor`, `pro_largura`, `pro_altura`, `pro_comprimento`, `pro_img`, `pro_slug`, `pro_estoque`, `pro_modelo`, `pro_ref`, `pro_fabricate`, `pro_ativo`, `pro_frete_free`) VALUES
(22, 2, 'Linha Chilena', 'Essa linha e super cortante e a mais usada', 0.323, 6.50, 0, 0, 1000, 'chilena.jpg', 'linha-chilena', 40, 'verde', '47347366', 69, '1', 'Nao'),
(39, 3, 'Pipa GT 55', 'A pipa mais estavel na sua mao ela da umas imbiocadas que voce nao ta ne ligado', 0.120, 2.25, 10, 10, 10, 'pipa2.png', 'pipa-gt-55', 30, 'Pipa-GT-55', '3473947', 1, '1', 'Nao'),
(63, 3, 'Pipa Carrapeta', 'Essa pipa Tem esse nome porque ela e preta e nao suja e isso e bom', 0.753, 5.72, 10, 10, 10, 'pipa4.png', 'pipa-carrapeta', 11, 'carrapeta', '948374', 1, '1', 'Nao'),
(93, 3, 'Pipa Pizza', 'A pipa tem um formato de uma pizza e por isso tem esse nome e so', 0.347, 10.00, 10, 10, 10, 'pipa3.png', 'pipa-pizza', 25, 'pizza', '3874938', 1, '1', 'Nao'),
(111, 3, 'Pipa Biquinho', 'Na pipas tem um desenho irado e com desing  de arrasar!', 0.100, 3.40, 2, 2, 2, 'pipa1.png', 'pipa-biquinho', 21, 'biquino', '787984', 564, '1', 'Nao'),
(112, 2, 'Linha de Pipa Corrente', 'A linha tem como voce amolar ela pra virar cortado de giro.', 0.100, 6.32, 1, 1, 5000, 'linha1.jpg', 'linha-corrente', 43, 'corrente', '577457490', 1, '1', 'Nao'),
(187, 2, 'Linha Branca', 'E linha e a mais segura que temos', 0.300, 10.00, 80, 80, 80, 'linha_branca.png', 'linha-branca', 3, 'linha', '4938743', 1, '1', 'gratuito'),
(223, 3, 'Pipa Reta', 'A pipa reta e exelente para cortar aquele fiadinhu da sua rua e dalhe bem no reto dele.', 0.573, 7.50, 10, 10, 10, 'pipa5.png', 'pipa-reta', 15, 'reta', '34873947', 1, '1', 'Nao'),
(315, 3, 'Pipa Charuto', 'Na sua mao vira potencia essa pipa nao tem como com inimigo e vraauuuu!!', 0.327, 2.60, 10, 10, 10, 'pipa6.png', 'pipa-charuto', 16, 'charuto', '498398', 1, '1', 'Nao'),
(343, 4, 'Carretilha de Plastico', 'Na carretilha personalizada so pra voce com aro 15', 5.000, 10.20, 2, 2, 2, 'carretilha1.png', 'carretilha-plastico', 5, 'de plastico', '93874', 1, '1', 'Nao'),
(349, 2, 'Titan Linha', 'Essa linha e muito boa porque ela e resistente', 0.130, 3.25, 2, 2, 400, 'linha2.png', 'titan-linha', 32, 'titan', '237984', 1, '1', 'Nao'),
(529, 1, '25 Pipas, 25 rabiolas e uma linha', 'Nesse kit da diversao voce tem o seu dia todo para quedar tudo isso se voce for noob lixo.', 10.000, 50.00, 1, 1, 1, 'geral1.png', '25-pipas-50-cm-25-rabiolas-1-linha', 25, 'kit completo', '938749', 1, '1', 'Nao'),
(785, 4, 'Carretilha Acrilica', 'Essa carretilha e bem mais leve e conta com um visual maneiro.', 6.000, 20.25, 4, 4, 4, 'carretilha2.png', 'carretilha-acrilica', 5, 'acrilica', '676789485', 1, '1', 'Nao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_categorias`
--
ALTER TABLE `tb_categorias`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_categorias`
--
ALTER TABLE `tb_categorias`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=786;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
