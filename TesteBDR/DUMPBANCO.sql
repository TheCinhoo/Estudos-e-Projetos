-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21-Abr-2017 às 05:16
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakephp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `gerenciador`
--

CREATE DATABASE cakephp;
USE cakephp;

CREATE TABLE `gerenciador` (
  `id` int(11) NOT NULL,
  `titulo` varchar(256) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `descricao` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `gerenciador`
--

INSERT INTO `gerenciador` (`id`, `titulo`, `descricao`) VALUES
(9, 'gfkghk', 'gkfghkhfh'),
(10, 'fljhj', 'glghjlkghjkgjk'),
(11, 'fhjlfjl', 'lflfjl'),
(12, 'dfghdf', 'ghdfghdfghfg'),
(13, 'jkjgh', 'jklhlgjkljkçljk'),
(14, 'gjçkyuriir', 'yuiuirire'),
(15, 'iururuor', 'ryuir'),
(16, 'roryuo', 'ryuoryouryuçlrkrjm'),
(17, 'royuory', 'uryuoruoyuo'),
(20, 'Arrumar o Quarto', 'Você precisa arrumar o quarto'),
(21, 'ULTIMO TESTE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In posuere nisi vel laoreet gravida. Nullam ac tempus felis. Duis luctus efficitur justo rutrum mattis. Etiam pulvinar cursus laoreet. Suspendisse ultricies elit enim, malesuada aliquet leo accumsan a. Donec vel mollis tortor, sed consequat velit. Suspendisse potenti. Nunc vel felis in dolor dignissim commodo vel sed neque. Nunc ullamcorper ligula et ullamcorper lacinia. Nunc porttitor eleifend augue vel luctus.\r\n\r\nPellentesque eget tellus vel augue ultricies convallis ut quis eros. Curabitur pellentesque sapien viverra mi egestas ullamcorper. Ut iaculis aliquet porttitor. Ut molestie ex et pharetra aliquet. Suspendisse potenti. Proin nisl odio, finibus id lacus sed, rutrum mattis augue. Duis vel ligula lectus. Morbi suscipit tortor nec posuere posuere. Cras ut dapibus justo, ac tincidunt tellus.\r\n\r\nNulla pulvinar imperdiet augue, tempor mollis sapien euismod non. Nunc vitae quam vel risus aliquet tincidunt vel quis eros. Nulla vel est libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque ut eros et felis eleifend facilisis. Ut ut justo molestie, feugiat est ut, dictum elit. Maecenas vehicula neque libero, sit amet euismod lacus malesuada a. Etiam tincidunt nisi at tempus finibus. Donec placerat sapien id suscipit facilisis. Morbi magna mi, facilisis vel tellus et, feugiat venenatis arcu.\r\n\r\nVestibulum vel nulla at dui volutpat rhoncus ut sed erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus tempus nibh suscipit fermentum porttitor. Integer volutpat quam in cursus posuere. Maecenas faucibus nunc non consequat tempus. Integer sit amet neque mollis, fermentum nisi ut, maximus diam. Fusce ultricies lacinia lacus, faucibus eleifend nisi. Integer vitae efficitur dui. Quisque faucibus sem ac orci maximus, a faucibus justo aliquam. Vestibulum eget risus et ex vehicula rutrum maximus vitae lectus. Etiam malesuada ultricies ipsum. Duis auctor cursus justo sed accumsan. Suspendisse suscipit vestibulum turpis, sit amet sagittis est iaculis vitae.\r\n\r\nSed odio lorem, ullamcorper in purus et, venenatis accumsan purus. Aliquam in lacus eu odio faucibus efficitur at in sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet urna cursus, rhoncus nunc nec, suscipit dolor. Cras aliquam quam ut dapibus viverra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a hendrerit nibh. Vestibulum molestie urna sit amet erat mollis, in cursus justo congue. Nullam commodo ultricies diam eu hendrerit. Integer dictum tellus a mi aliquet iaculis. Praesent non pulvinar leo. Donec convallis vehicula purus, feugiat semper enim congue non. Integer tincidunt rutrum lacus, sed vulputate turpis feugiat tempus. Donec consequat massa quis sodales venenatis. Integer quis felis luctus lectus fringilla efficitur. Integer '),
(22, 'Testando', 'Mussum Ipsum, cacilds vidis litro abertis. Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. Si num tem leite então bota uma pinga aí cumpadi! Quem num gosta di mim que vai caçá sua turmis! Mé faiz elementum girarzis, nisi eros vermeio.\r\n\r\nDetraxit consequat et quo num tendi nada. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. Copo furadis é disculpa de bebadis, arcu quam euismod magna. Viva Forevis aptent taciti sociosqu ad litora torquent\r\n\r\nQuem manda na minha terra sou euzis! Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Casamentiss faiz malandris se pirulitá. Diuretics paradis num copo é motivis de denguis.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gerenciador`
--
ALTER TABLE `gerenciador`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gerenciador`
--
ALTER TABLE `gerenciador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
