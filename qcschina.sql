-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 27 Avril 2017 à 08:56
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `qcschina`
--

-- --------------------------------------------------------

--
-- Structure de la table `page_about_us`
--

CREATE TABLE `page_about_us` (
  `id` int(11) NOT NULL,
  `video` text CHARACTER SET utf8,
  `text` text CHARACTER SET utf8,
  `photo_1` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `photo_2` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `photo_3` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `photo_4` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `id_website` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `page_about_us`
--

INSERT INTO `page_about_us` (`id`, `video`, `text`, `photo_1`, `photo_2`, `photo_3`, `photo_4`, `id_website`) VALUES
(4, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/rJy6Vui5Inw\" frameborder=\"0\" allowfullscreen></iframe>', '<div id=\"lipsum\">\r\n        <p>\r\n            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nunc ex, tempor sed nunc et, luctus finibus mauris. Maecenas vel nisl vehicula, molestie quam ac, ullamcorper purus. Sed condimentum ornare metus vel scelerisque. Aenean gravida hendrerit nulla in interdum. Curabitur pharetra iaculis massa vitae maximus. Nullam id fermentum dui, eget commodo nibh. Nullam cursus justo arcu, vel viverra mi vehicula in.\r\n        </p>\r\n        <p>\r\n            In varius ipsum neque, ac vestibulum nisi elementum eget. Praesent efficitur volutpat nisi placerat molestie. Aenean rhoncus turpis ac felis mollis, at sagittis lorem tincidunt. Ut ut dignissim ex, ut varius dui. Aliquam erat volutpat. Nulla pharetra pulvinar turpis, nec venenatis massa ullamcorper non. Suspendisse aliquet arcu eu nulla egestas interdum. Vestibulum euismod, eros vitae varius convallis, velit nibh fringilla neque, ut laoreet urna lectus ultricies lacus. Nam quam purus, condimentum quis tincidunt vitae, fringilla et tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus id metus vulputate, imperdiet nibh nec, varius erat. Donec tincidunt augue justo, sed mattis risus accumsan non. Phasellus tellus leo, sagittis eget turpis in, blandit auctor orci. Suspendisse ornare urna sit amet felis auctor porta sit amet nec diam. Nunc sed est ac mi accumsan pellentesque at id dolor.\r\n        </p>\r\n        <p>\r\n            Cras placerat interdum ipsum, ut molestie turpis varius ut. Etiam metus neque, lacinia a ipsum ac, suscipit sodales lorem. Phasellus tortor tortor, laoreet eget mollis nec, imperdiet sed arcu. Proin convallis felis quis aliquam ultrices. Aliquam tristique, velit ut euismod facilisis, nisi dui sodales est, sit amet finibus nisl lacus eget felis. Vestibulum quis nunc non purus rhoncus gravida a at metus. Praesent condimentum tortor vel lacinia suscipit. Mauris vehicula nisi ligula, quis vestibulum quam commodo at. In cursus ipsum vel nisl mattis egestas. Etiam sollicitudin nisi nunc.\r\n        </p>\r\n        <p>\r\n            Mauris varius dui quis enim suscipit bibendum at eget purus. Mauris sodales neque eget est tincidunt, a scelerisque arcu condimentum. Integer ut laoreet nisi. Quisque posuere sapien et arcu posuere maximus. Suspendisse non dapibus tellus, eget hendrerit nisl. Morbi ex massa, rhoncus non sollicitudin at, consectetur sed elit. Vivamus ac magna non ipsum efficitur auctor. Ut suscipit tortor orci, quis cursus nulla vestibulum vulputate. In leo massa, congue in ipsum vel, mollis tempus dui. Pellentesque eu lacinia lorem. Sed iaculis, orci sed fringilla euismod, dolor ante cursus arcu, a ornare dui nisl sollicitudin tortor. Pellentesque mollis neque quis iaculis tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;\r\n        </p>\r\n        <p>\r\n            In hac habitasse platea dictumst. Duis at elit nulla. Morbi eu massa et dolor rutrum laoreet eget vitae ante. Integer viverra sollicitudin porta. Maecenas viverra libero a neque venenatis, ut condimentum elit iaculis. Integer finibus eleifend velit, et ultrices est imperdiet vitae. Nam non facilisis purus, sed venenatis est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi a elit nunc. Praesent eget porta felis, eget rhoncus augue. Nam dui elit, vestibulum non tristique sed, sagittis non metus. Nullam fringilla odio non quam tincidunt sagittis.\r\n        </p></div>', '1493257190_1_photo_1.jpg', '1493199432_12_photo_2.jpg', '1493199632_12_photo_3.jpg', '1493199535_12_photo_4.jpg', 1),
(7, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/uP5a0qarVgY\" frameborder=\"0\" allowfullscreen></iframe>', '<div id=\"lipsum\">\r\n        <p>\r\n            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nunc ex, tempor sed nunc et, luctus finibus mauris. Maecenas vel nisl vehicula, molestie quam ac, ullamcorper purus. Sed condimentum ornare metus vel scelerisque. Aenean gravida hendrerit nulla in interdum. Curabitur pharetra iaculis massa vitae maximus. Nullam id fermentum dui, eget commodo nibh. Nullam cursus justo arcu, vel viverra mi vehicula in.\r\n        </p>\r\n        <p>\r\n            In varius ipsum neque, ac vestibulum nisi elementum eget. Praesent efficitur volutpat nisi placerat molestie. Aenean rhoncus turpis ac felis mollis, at sagittis lorem tincidunt. Ut ut dignissim ex, ut varius dui. Aliquam erat volutpat. Nulla pharetra pulvinar turpis, nec venenatis massa ullamcorper non. Suspendisse aliquet arcu eu nulla egestas interdum. Vestibulum euismod, eros vitae varius convallis, velit nibh fringilla neque, ut laoreet urna lectus ultricies lacus. Nam quam purus, condimentum quis tincidunt vitae, fringilla et tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus id metus vulputate, imperdiet nibh nec, varius erat. Donec tincidunt augue justo, sed mattis risus accumsan non. Phasellus tellus leo, sagittis eget turpis in, blandit auctor orci. Suspendisse ornare urna sit amet felis auctor porta sit amet nec diam. Nunc sed est ac mi accumsan pellentesque at id dolor.\r\n        </p>\r\n        <p>\r\n            Cras placerat interdum ipsum, ut molestie turpis varius ut. Etiam metus neque, lacinia a ipsum ac, suscipit sodales lorem. Phasellus tortor tortor, laoreet eget mollis nec, imperdiet sed arcu. Proin convallis felis quis aliquam ultrices. Aliquam tristique, velit ut euismod facilisis, nisi dui sodales est, sit amet finibus nisl lacus eget felis. Vestibulum quis nunc non purus rhoncus gravida a at metus. Praesent condimentum tortor vel lacinia suscipit. Mauris vehicula nisi ligula, quis vestibulum quam commodo at. In cursus ipsum vel nisl mattis egestas. Etiam sollicitudin nisi nunc.\r\n        </p>\r\n        <p>\r\n            Mauris varius dui quis enim suscipit bibendum at eget purus. Mauris sodales neque eget est tincidunt, a scelerisque arcu condimentum. Integer ut laoreet nisi. Quisque posuere sapien et arcu posuere maximus. Suspendisse non dapibus tellus, eget hendrerit nisl. Morbi ex massa, rhoncus non sollicitudin at, consectetur sed elit. Vivamus ac magna non ipsum efficitur auctor. Ut suscipit tortor orci, quis cursus nulla vestibulum vulputate. In leo massa, congue in ipsum vel, mollis tempus dui. Pellentesque eu lacinia lorem. Sed iaculis, orci sed fringilla euismod, dolor ante cursus arcu, a ornare dui nisl sollicitudin tortor. Pellentesque mollis neque quis iaculis tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;\r\n        </p>\r\n        <p>\r\n            In hac habitasse platea dictumst. Duis at elit nulla. Morbi eu massa et dolor rutrum laoreet eget vitae ante. Integer viverra sollicitudin porta. Maecenas viverra libero a neque venenatis, ut condimentum elit iaculis. Integer finibus eleifend velit, et ultrices est imperdiet vitae. Nam non facilisis purus, sed venenatis est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi a elit nunc. Praesent eget porta felis, eget rhoncus augue. Nam dui elit, vestibulum non tristique sed, sagittis non metus. Nullam fringilla odio non quam tincidunt sagittis.\r\n        </p></div>', '1493200236_7_photo_1.jpg', '1493200236_7_photo_2.jpg', '1493200236_7_photo_3.jpg', '1493200236_7_photo_4.jpg', 7),
(9, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/uP5a0qarVgY\" frameborder=\"0\" allowfullscreen></iframe>', '<div id=\"lipsum\">\r\n        <p>\r\n            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nunc ex, tempor sed nunc et, luctus finibus mauris. Maecenas vel nisl vehicula, molestie quam ac, ullamcorper purus. Sed condimentum ornare metus vel scelerisque. Aenean gravida hendrerit nulla in interdum. Curabitur pharetra iaculis massa vitae maximus. Nullam id fermentum dui, eget commodo nibh. Nullam cursus justo arcu, vel viverra mi vehicula in.\r\n        </p>\r\n        <p>\r\n            In varius ipsum neque, ac vestibulum nisi elementum eget. Praesent efficitur volutpat nisi placerat molestie. Aenean rhoncus turpis ac felis mollis, at sagittis lorem tincidunt. Ut ut dignissim ex, ut varius dui. Aliquam erat volutpat. Nulla pharetra pulvinar turpis, nec venenatis massa ullamcorper non. Suspendisse aliquet arcu eu nulla egestas interdum. Vestibulum euismod, eros vitae varius convallis, velit nibh fringilla neque, ut laoreet urna lectus ultricies lacus. Nam quam purus, condimentum quis tincidunt vitae, fringilla et tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus id metus vulputate, imperdiet nibh nec, varius erat. Donec tincidunt augue justo, sed mattis risus accumsan non. Phasellus tellus leo, sagittis eget turpis in, blandit auctor orci. Suspendisse ornare urna sit amet felis auctor porta sit amet nec diam. Nunc sed est ac mi accumsan pellentesque at id dolor.\r\n        </p>\r\n        <p>\r\n            Cras placerat interdum ipsum, ut molestie turpis varius ut. Etiam metus neque, lacinia a ipsum ac, suscipit sodales lorem. Phasellus tortor tortor, laoreet eget mollis nec, imperdiet sed arcu. Proin convallis felis quis aliquam ultrices. Aliquam tristique, velit ut euismod facilisis, nisi dui sodales est, sit amet finibus nisl lacus eget felis. Vestibulum quis nunc non purus rhoncus gravida a at metus. Praesent condimentum tortor vel lacinia suscipit. Mauris vehicula nisi ligula, quis vestibulum quam commodo at. In cursus ipsum vel nisl mattis egestas. Etiam sollicitudin nisi nunc.\r\n        </p>\r\n        <p>\r\n            Mauris varius dui quis enim suscipit bibendum at eget purus. Mauris sodales neque eget est tincidunt, a scelerisque arcu condimentum. Integer ut laoreet nisi. Quisque posuere sapien et arcu posuere maximus. Suspendisse non dapibus tellus, eget hendrerit nisl. Morbi ex massa, rhoncus non sollicitudin at, consectetur sed elit. Vivamus ac magna non ipsum efficitur auctor. Ut suscipit tortor orci, quis cursus nulla vestibulum vulputate. In leo massa, congue in ipsum vel, mollis tempus dui. Pellentesque eu lacinia lorem. Sed iaculis, orci sed fringilla euismod, dolor ante cursus arcu, a ornare dui nisl sollicitudin tortor. Pellentesque mollis neque quis iaculis tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;\r\n        </p>\r\n        <p>\r\n            In hac habitasse platea dictumst. Duis at elit nulla. Morbi eu massa et dolor rutrum laoreet eget vitae ante. Integer viverra sollicitudin porta. Maecenas viverra libero a neque venenatis, ut condimentum elit iaculis. Integer finibus eleifend velit, et ultrices est imperdiet vitae. Nam non facilisis purus, sed venenatis est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi a elit nunc. Praesent eget porta felis, eget rhoncus augue. Nam dui elit, vestibulum non tristique sed, sagittis non metus. Nullam fringilla odio non quam tincidunt sagittis.\r\n        </p></div>', '1493200275_2_photo_1.jpg', '1493200275_2_photo_2.jpg', '1493200275_2_photo_3.jpg', '1493200275_2_photo_4.jpg', 2),
(10, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/rJy6Vui5Inw\" frameborder=\"0\" allowfullscreen></iframe>', '<div id=\"lipsum\">\r\n        <p>\r\n            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nunc ex, tempor sed nunc et, luctus finibus mauris. Maecenas vel nisl vehicula, molestie quam ac, ullamcorper purus. Sed condimentum ornare metus vel scelerisque. Aenean gravida hendrerit nulla in interdum. Curabitur pharetra iaculis massa vitae maximus. Nullam id fermentum dui, eget commodo nibh. Nullam cursus justo arcu, vel viverra mi vehicula in.\r\n        </p>\r\n        <p>\r\n            In varius ipsum neque, ac vestibulum nisi elementum eget. Praesent efficitur volutpat nisi placerat molestie. Aenean rhoncus turpis ac felis mollis, at sagittis lorem tincidunt. Ut ut dignissim ex, ut varius dui. Aliquam erat volutpat. Nulla pharetra pulvinar turpis, nec venenatis massa ullamcorper non. Suspendisse aliquet arcu eu nulla egestas interdum. Vestibulum euismod, eros vitae varius convallis, velit nibh fringilla neque, ut laoreet urna lectus ultricies lacus. Nam quam purus, condimentum quis tincidunt vitae, fringilla et tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus id metus vulputate, imperdiet nibh nec, varius erat. Donec tincidunt augue justo, sed mattis risus accumsan non. Phasellus tellus leo, sagittis eget turpis in, blandit auctor orci. Suspendisse ornare urna sit amet felis auctor porta sit amet nec diam. Nunc sed est ac mi accumsan pellentesque at id dolor.\r\n        </p>\r\n        <p>\r\n            Cras placerat interdum ipsum, ut molestie turpis varius ut. Etiam metus neque, lacinia a ipsum ac, suscipit sodales lorem. Phasellus tortor tortor, laoreet eget mollis nec, imperdiet sed arcu. Proin convallis felis quis aliquam ultrices. Aliquam tristique, velit ut euismod facilisis, nisi dui sodales est, sit amet finibus nisl lacus eget felis. Vestibulum quis nunc non purus rhoncus gravida a at metus. Praesent condimentum tortor vel lacinia suscipit. Mauris vehicula nisi ligula, quis vestibulum quam commodo at. In cursus ipsum vel nisl mattis egestas. Etiam sollicitudin nisi nunc.\r\n        </p>\r\n        <p>\r\n            Mauris varius dui quis enim suscipit bibendum at eget purus. Mauris sodales neque eget est tincidunt, a scelerisque arcu condimentum. Integer ut laoreet nisi. Quisque posuere sapien et arcu posuere maximus. Suspendisse non dapibus tellus, eget hendrerit nisl. Morbi ex massa, rhoncus non sollicitudin at, consectetur sed elit. Vivamus ac magna non ipsum efficitur auctor. Ut suscipit tortor orci, quis cursus nulla vestibulum vulputate. In leo massa, congue in ipsum vel, mollis tempus dui. Pellentesque eu lacinia lorem. Sed iaculis, orci sed fringilla euismod, dolor ante cursus arcu, a ornare dui nisl sollicitudin tortor. Pellentesque mollis neque quis iaculis tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;\r\n        </p>\r\n        <p>\r\n            In hac habitasse platea dictumst. Duis at elit nulla. Morbi eu massa et dolor rutrum laoreet eget vitae ante. Integer viverra sollicitudin porta. Maecenas viverra libero a neque venenatis, ut condimentum elit iaculis. Integer finibus eleifend velit, et ultrices est imperdiet vitae. Nam non facilisis purus, sed venenatis est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi a elit nunc. Praesent eget porta felis, eget rhoncus augue. Nam dui elit, vestibulum non tristique sed, sagittis non metus. Nullam fringilla odio non quam tincidunt sagittis.\r\n        </p></div>', '1493257999_8_photo_1.jpg', NULL, NULL, NULL, 8);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `picture` varchar(128) DEFAULT NULL,
  `title` text,
  `url` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `picture`, `title`, `url`) VALUES
(15, '1493171707_15.jpg', 'Credit card shape stainless steel speed bottle opener #MSOCD', 'https://www.qcsasia.com/product/credit-card-shape-stainless-steel-speed-bottle-opener-msocd'),
(17, '1493171727_17.jpg', 'Original stainless steel speed bottle opener #MSO1840', 'https://www.qcsasia.com/product/original-stainless-steel-speed-bottle-opener-mso1840'),
(19, '1493282074_19.jpg', 'test', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `product_website`
--

CREATE TABLE `product_website` (
  `id_product` int(11) NOT NULL,
  `id_website` int(11) NOT NULL,
  `display` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `product_website`
--

INSERT INTO `product_website` (`id_product`, `id_website`, `display`) VALUES
(15, 1, 1),
(15, 2, 1),
(15, 3, 1),
(15, 4, 1),
(15, 5, 1),
(15, 8, 1),
(15, 16, 1),
(16, 1, 1),
(16, 3, 1),
(17, 1, 1),
(17, 3, 1),
(17, 5, 1),
(17, 16, 1),
(19, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `website`
--

CREATE TABLE `website` (
  `id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `logo` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `title` text CHARACTER SET utf8,
  `motto` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `website`
--

INSERT INTO `website` (`id`, `name`, `logo`, `title`, `motto`) VALUES
(1, 'qcschina.com', '1493279774_1.jpg', 'QCS China', 'The Best factory'),
(2, 'keychainfactory.com', '', '', ''),
(3, 'metalenamel.com', '', '', ''),
(4, 'pvckeychain.com', '', '', ''),
(5, 'karabiner.com', '', '', ''),
(6, 'rushdeliverypromo.com', '', '', ''),
(7, 'bottleopenerchinafactory.com', '', '', ''),
(8, 'quick-up.net', '', '', ''),
(9, 'plasticbaghanger.com', '', '', ''),
(10, 'menuholder.org', '', '', ''),
(11, 'cashtray.org', '', '', ''),
(12, 'chinasouvenirs.com', '', '', ''),
(13, 'coinkeychain.com', '', '', ''),
(14, 'webcam-cover.com', '', '', ''),
(15, 'carkeyspromo.com', '', '', ''),
(16, 'domingpromo.com', '', '', ''),
(23, 'ytyty', '1493283383_23.jpg', '', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `page_about_us`
--
ALTER TABLE `page_about_us`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_website` (`id_website`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product_website`
--
ALTER TABLE `product_website`
  ADD PRIMARY KEY (`id_product`,`id_website`);

--
-- Index pour la table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `page_about_us`
--
ALTER TABLE `page_about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `website`
--
ALTER TABLE `website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
