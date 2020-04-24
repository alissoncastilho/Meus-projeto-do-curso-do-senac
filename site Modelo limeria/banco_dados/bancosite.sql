-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Out-2019 às 15:06
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bancosite`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id_contato` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` char(2) NOT NULL,
  `comentario` text NOT NULL
) ;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id_contato`, `nome`, `email`, `sexo`, `cidade`, `estado`, `comentario`) VALUES
(1, 'Hilton', 'hilton@email.com', 'M', 'Sumaré', 'SP', 'Teste!'),
(2, 'Marilia', 'marilia@email.com', 'F', 'Sumaré', 'SP', 'Teste!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `texto` text NOT NULL,
  `data` date NOT NULL,
  `foto` varchar(150) NOT NULL
) ;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `titulo`, `texto`, `data`, `foto`) VALUES
(1, 'Fogo destrói a Amazônia do Brasil', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales odio dolor, et venenatis libero luctus ut. Quisque at efficitur nibh. Phasellus tristique elit eget ligula maximus, vel pharetra libero fermentum. Mauris orci velit, pretium congue erat quis, eleifend ornare magna. Nunc est tellus, congue in convallis a, fringilla nec metus. Integer et libero tempor, aliquet elit pretium, vestibulum velit. Praesent ac aliquet purus, sit amet imperdiet enim. Nullam tristique porta est, sed blandit arcu volutpat euismod. Etiam eget ante nibh. Fusce venenatis aliquet odio, id posuere mauris rutrum ut. In fermentum, odio ac rhoncus suscipit, est turpis placerat nulla, quis rutrum magna nibh quis massa. Suspendisse at diam ut ipsum rutrum tristique at sit amet nisl. Ut diam ante, pretium vitae maximus a, porta vitae justo. Phasellus porttitor auctor ligula sed finibus. Nunc a velit ut ante fringilla vestibulum ut quis diam.\r\n\r\n[foto]Maecenas a dignissim lacus. Sed in lectus vitae eros bibendum malesuada sit amet sed magna. Duis et finibus nisl. Pellentesque ac tincidunt sem, ornare elementum velit. Etiam pulvinar turpis libero, eu auctor neque interdum vel. Vestibulum eu arcu ac augue ultrices vehicula. Duis porttitor orci sem, pretium pharetra arcu ullamcorper eget. Fusce porttitor, libero vel cursus euismod, dui odio vestibulum ex, semper tempus libero magna convallis dolor. Sed dui magna, efficitur ullamcorper sagittis in, faucibus mollis augue. Fusce euismod dolor eget neque rhoncus iaculis.\r\n\r\nCurabitur porttitor, ipsum ut molestie vehicula, sapien nibh sollicitudin justo, non tempus massa metus sed nunc. Vivamus vulputate sagittis euismod. Nullam in mi vitae diam rhoncus semper. Mauris non est eget tellus egestas placerat et sit amet tellus. Nullam sit amet finibus augue. Donec ut dolor eu ex luctus tempor. Nam scelerisque turpis vel hendrerit congue.', '2019-08-29', 'foto1.JPG'),
(2, 'Monte Fuji - Japão', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales odio dolor, et venenatis libero luctus ut. Quisque at efficitur nibh. Phasellus tristique elit eget ligula maximus, vel pharetra libero fermentum. Mauris orci velit, pretium congue erat quis, eleifend ornare magna. Nunc est tellus, congue in convallis a, fringilla nec metus. Integer et libero tempor, aliquet elit pretium, vestibulum velit. Praesent ac aliquet purus, sit amet imperdiet enim. Nullam tristique porta est, sed blandit arcu volutpat euismod. Etiam eget ante nibh. Fusce venenatis aliquet odio, id posuere mauris rutrum ut. In fermentum, odio ac rhoncus suscipit, est turpis placerat nulla, quis rutrum magna nibh quis massa. Suspendisse at diam ut ipsum rutrum tristique at sit amet nisl. Ut diam ante, pretium vitae maximus a, porta vitae justo. Phasellus porttitor auctor ligula sed finibus. Nunc a velit ut ante fringilla vestibulum ut quis diam.\r\n\r\nMaecenas a dignissim lacus. Sed in lectus vitae eros bibendum malesuada sit amet sed magna. Duis et finibus nisl. Pellentesque ac tincidunt sem, ornare elementum velit. Etiam pulvinar turpis libero, eu auctor neque interdum vel. Vestibulum eu arcu ac augue ultrices vehicula. Duis porttitor orci sem, pretium pharetra arcu ullamcorper eget. Fusce porttitor, libero vel cursus euismod, dui odio vestibulum ex, semper tempus libero magna convallis dolor. Sed dui magna, efficitur ullamcorper sagittis in, faucibus mollis augue. Fusce euismod dolor eget neque rhoncus iaculis.\r\n\r\nCurabitur porttitor, ipsum ut molestie vehicula, sapien nibh sollicitudin justo, non tempus massa metus sed nunc. Vivamus vulputate sagittis euismod. Nullam in mi vitae diam rhoncus semper. Mauris non est eget tellus egestas placerat et sit amet tellus. Nullam sit amet finibus augue. Donec ut dolor eu ex luctus tempor. Nam scelerisque turpis vel hendrerit congue.', '2019-08-29', 'monte_fuji.jpg'),
(3, ' Memorial da Paz de Hiroshima', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales odio dolor, et venenatis libero luctus ut. Quisque at efficitur nibh. Phasellus tristique elit eget ligula maximus, vel pharetra libero fermentum. Mauris orci velit, pretium congue erat quis, eleifend ornare magna. Nunc est tellus, congue in convallis a, fringilla nec metus. Integer et libero tempor, aliquet elit pretium, vestibulum velit. Praesent ac aliquet purus, sit amet imperdiet enim. Nullam tristique porta est, sed blandit arcu volutpat euismod. Etiam eget ante nibh. Fusce venenatis aliquet odio, id posuere mauris rutrum ut. In fermentum, odio ac rhoncus suscipit, est turpis placerat nulla, quis rutrum magna nibh quis massa. Suspendisse at diam ut ipsum rutrum tristique at sit amet nisl. Ut diam ante, pretium vitae maximus a, porta vitae justo. Phasellus porttitor auctor ligula sed finibus. Nunc a velit ut ante fringilla vestibulum ut quis diam.\r\n\r\nMaecenas a dignissim lacus. Sed in lectus vitae eros bibendum malesuada sit amet sed magna. Duis et finibus nisl. Pellentesque ac tincidunt sem, ornare elementum velit. Etiam pulvinar turpis libero, eu auctor neque interdum vel. Vestibulum eu arcu ac augue ultrices vehicula. Duis porttitor orci sem, pretium pharetra arcu ullamcorper eget. Fusce porttitor, libero vel cursus euismod, dui odio vestibulum ex, semper tempus libero magna convallis dolor. Sed dui magna, efficitur ullamcorper sagittis in, faucibus mollis augue. Fusce euismod dolor eget neque rhoncus iaculis.\r\n\r\nCurabitur porttitor, ipsum ut molestie vehicula, sapien nibh sollicitudin justo, non tempus massa metus sed nunc. Vivamus vulputate sagittis euismod. Nullam in mi vitae diam rhoncus semper. Mauris non est eget tellus egestas placerat et sit amet tellus. Nullam sit amet finibus augue. Donec ut dolor eu ex luctus tempor. Nam scelerisque turpis vel hendrerit congue.', '2019-08-28', 'hiroshima-peace-memorial-99519_1920.jpg'),
(4, 'Lençóis Maranhenses - Brasil', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales odio dolor, et venenatis libero luctus ut. Quisque at efficitur nibh. Phasellus tristique elit eget ligula maximus, vel pharetra libero fermentum. Mauris orci velit, pretium congue erat quis, eleifend ornare magna. Nunc est tellus, congue in convallis a, fringilla nec metus. Integer et libero tempor, aliquet elit pretium, vestibulum velit. Praesent ac aliquet purus, sit amet imperdiet enim. Nullam tristique porta est, sed blandit arcu volutpat euismod. Etiam eget ante nibh. Fusce venenatis aliquet odio, id posuere mauris rutrum ut. In fermentum, odio ac rhoncus suscipit, est turpis placerat nulla, quis rutrum magna nibh quis massa. Suspendisse at diam ut ipsum rutrum tristique at sit amet nisl. Ut diam ante, pretium vitae maximus a, porta vitae justo. Phasellus porttitor auctor ligula sed finibus. Nunc a velit ut ante fringilla vestibulum ut quis diam.\r\n\r\nMaecenas a dignissim lacus. Sed in lectus vitae eros bibendum malesuada sit amet sed magna. Duis et finibus nisl. Pellentesque ac tincidunt sem, ornare elementum velit. Etiam pulvinar turpis libero, eu auctor neque interdum vel. Vestibulum eu arcu ac augue ultrices vehicula. Duis porttitor orci sem, pretium pharetra arcu ullamcorper eget. Fusce porttitor, libero vel cursus euismod, dui odio vestibulum ex, semper tempus libero magna convallis dolor. Sed dui magna, efficitur ullamcorper sagittis in, faucibus mollis augue. Fusce euismod dolor eget neque rhoncus iaculis.\r\n\r\nCurabitur porttitor, ipsum ut molestie vehicula, sapien nibh sollicitudin justo, non tempus massa metus sed nunc. Vivamus vulputate sagittis euismod. Nullam in mi vitae diam rhoncus semper. Mauris non est eget tellus egestas placerat et sit amet tellus. Nullam sit amet finibus augue. Donec ut dolor eu ex luctus tempor. Nam scelerisque turpis vel hendrerit congue.', '2019-08-28', 'lencois-maranhenses-2382068_640.jpg'),
(5, 'Mesquita Sheikh Zayed - Abu Dabi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales odio dolor, et venenatis libero luctus ut. Quisque at efficitur nibh. Phasellus tristique elit eget ligula maximus, vel pharetra libero fermentum. Mauris orci velit, pretium congue erat quis, eleifend ornare magna. Nunc est tellus, congue in convallis a, fringilla nec metus. Integer et libero tempor, aliquet elit pretium, vestibulum velit. Praesent ac aliquet purus, sit amet imperdiet enim. Nullam tristique porta est, sed blandit arcu volutpat euismod. Etiam eget ante nibh. Fusce venenatis aliquet odio, id posuere mauris rutrum ut. In fermentum, odio ac rhoncus suscipit, est turpis placerat nulla, quis rutrum magna nibh quis massa. Suspendisse at diam ut ipsum rutrum tristique at sit amet nisl. Ut diam ante, pretium vitae maximus a, porta vitae justo. Phasellus porttitor auctor ligula sed finibus. Nunc a velit ut ante fringilla vestibulum ut quis diam.\r\n\r\nMaecenas a dignissim lacus. Sed in lectus vitae eros bibendum malesuada sit amet sed magna. Duis et finibus nisl. Pellentesque ac tincidunt sem, ornare elementum velit. Etiam pulvinar turpis libero, eu auctor neque interdum vel. Vestibulum eu arcu ac augue ultrices vehicula. Duis porttitor orci sem, pretium pharetra arcu ullamcorper eget. Fusce porttitor, libero vel cursus euismod, dui odio vestibulum ex, semper tempus libero magna convallis dolor. Sed dui magna, efficitur ullamcorper sagittis in, faucibus mollis augue. Fusce euismod dolor eget neque rhoncus iaculis.\r\n\r\nCurabitur porttitor, ipsum ut molestie vehicula, sapien nibh sollicitudin justo, non tempus massa metus sed nunc. Vivamus vulputate sagittis euismod. Nullam in mi vitae diam rhoncus semper. Mauris non est eget tellus egestas placerat et sit amet tellus. Nullam sit amet finibus augue. Donec ut dolor eu ex luctus tempor. Nam scelerisque turpis vel hendrerit congue.', '2019-08-28', 'abu-dhabi-4044175_1920.jpg'),
(6, 'Tóquio - Japão', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales odio dolor, et venenatis libero luctus ut. Quisque at efficitur nibh. Phasellus tristique elit eget ligula maximus, vel pharetra libero fermentum. Mauris orci velit, pretium congue erat quis, eleifend ornare magna. Nunc est tellus, congue in convallis a, fringilla nec metus. Integer et libero tempor, aliquet elit pretium, vestibulum velit. Praesent ac aliquet purus, sit amet imperdiet enim. Nullam tristique porta est, sed blandit arcu volutpat euismod. Etiam eget ante nibh. Fusce venenatis aliquet odio, id posuere mauris rutrum ut. In fermentum, odio ac rhoncus suscipit, est turpis placerat nulla, quis rutrum magna nibh quis massa. Suspendisse at diam ut ipsum rutrum tristique at sit amet nisl. Ut diam ante, pretium vitae maximus a, porta vitae justo. Phasellus porttitor auctor ligula sed finibus. Nunc a velit ut ante fringilla vestibulum ut quis diam.\r\n\r\nMaecenas a dignissim lacus. Sed in lectus vitae eros bibendum malesuada sit amet sed magna. Duis et finibus nisl. Pellentesque ac tincidunt sem, ornare elementum velit. Etiam pulvinar turpis libero, eu auctor neque interdum vel. Vestibulum eu arcu ac augue ultrices vehicula. Duis porttitor orci sem, pretium pharetra arcu ullamcorper eget. Fusce porttitor, libero vel cursus euismod, dui odio vestibulum ex, semper tempus libero magna convallis dolor. Sed dui magna, efficitur ullamcorper sagittis in, faucibus mollis augue. Fusce euismod dolor eget neque rhoncus iaculis.\r\n\r\nCurabitur porttitor, ipsum ut molestie vehicula, sapien nibh sollicitudin justo, non tempus massa metus sed nunc. Vivamus vulputate sagittis euismod. Nullam in mi vitae diam rhoncus semper. Mauris non est eget tellus egestas placerat et sit amet tellus. Nullam sit amet finibus augue. Donec ut dolor eu ex luctus tempor. Nam scelerisque turpis vel hendrerit congue.', '2019-08-28', 'tokyo-290980_1920.jpg'),
(7, 'Hamamatsu - Japão', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales odio dolor, et venenatis libero luctus ut. Quisque at efficitur nibh. Phasellus tristique elit eget ligula maximus, vel pharetra libero fermentum. Mauris orci velit, pretium congue erat quis, eleifend ornare magna. Nunc est tellus, congue in convallis a, fringilla nec metus. Integer et libero tempor, aliquet elit pretium, vestibulum velit. Praesent ac aliquet purus, sit amet imperdiet enim. Nullam tristique porta est, sed blandit arcu volutpat euismod. Etiam eget ante nibh. Fusce venenatis aliquet odio, id posuere mauris rutrum ut. In fermentum, odio ac rhoncus suscipit, est turpis placerat nulla, quis rutrum magna nibh quis massa. Suspendisse at diam ut ipsum rutrum tristique at sit amet nisl. Ut diam ante, pretium vitae maximus a, porta vitae justo. Phasellus porttitor auctor ligula sed finibus. Nunc a velit ut ante fringilla vestibulum ut quis diam.\r\n\r\nMaecenas a dignissim lacus. Sed in lectus vitae eros bibendum malesuada sit amet sed magna. Duis et finibus nisl. Pellentesque ac tincidunt sem, ornare elementum velit. Etiam pulvinar turpis libero, eu auctor neque interdum vel. Vestibulum eu arcu ac augue ultrices vehicula. Duis porttitor orci sem, pretium pharetra arcu ullamcorper eget. Fusce porttitor, libero vel cursus euismod, dui odio vestibulum ex, semper tempus libero magna convallis dolor. Sed dui magna, efficitur ullamcorper sagittis in, faucibus mollis augue. Fusce euismod dolor eget neque rhoncus iaculis.\r\n\r\nCurabitur porttitor, ipsum ut molestie vehicula, sapien nibh sollicitudin justo, non tempus massa metus sed nunc. Vivamus vulputate sagittis euismod. Nullam in mi vitae diam rhoncus semper. Mauris non est eget tellus egestas placerat et sit amet tellus. Nullam sit amet finibus augue. Donec ut dolor eu ex luctus tempor. Nam scelerisque turpis vel hendrerit congue.', '2019-08-28', 'hamamatsu-918x577.jpg'),
(8, '  Argentina declara moratória e quer renegociar parte da dívida', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales odio dolor, et venenatis libero luctus ut. Quisque at efficitur nibh. Phasellus tristique elit eget ligula maximus, vel pharetra libero fermentum. Mauris orci velit, pretium congue erat quis, eleifend ornare magna. Nunc est tellus, congue in convallis a, fringilla nec metus. Integer et libero tempor, aliquet elit pretium, vestibulum velit. Praesent ac aliquet purus, sit amet imperdiet enim. Nullam tristique porta est, sed blandit arcu volutpat euismod. Etiam eget ante nibh. Fusce venenatis aliquet odio, id posuere mauris rutrum ut. In fermentum, odio ac rhoncus suscipit, est turpis placerat nulla, quis rutrum magna nibh quis massa. Suspendisse at diam ut ipsum rutrum tristique at sit amet nisl. Ut diam ante, pretium vitae maximus a, porta vitae justo. Phasellus porttitor auctor ligula sed finibus. Nunc a velit ut ante fringilla vestibulum ut quis diam.\r\n\r\nMaecenas a dignissim lacus. Sed in lectus vitae eros bibendum malesuada sit amet sed magna. Duis et finibus nisl. Pellentesque ac tincidunt sem, ornare elementum velit. Etiam pulvinar turpis libero, eu auctor neque interdum vel. Vestibulum eu arcu ac augue ultrices vehicula. Duis porttitor orci sem, pretium pharetra arcu ullamcorper eget. Fusce porttitor, libero vel cursus euismod, dui odio vestibulum ex, semper tempus libero magna convallis dolor. Sed dui magna, efficitur ullamcorper sagittis in, faucibus mollis augue. Fusce euismod dolor eget neque rhoncus iaculis.\r\n\r\nCurabitur porttitor, ipsum ut molestie vehicula, sapien nibh sollicitudin justo, non tempus massa metus sed nunc. Vivamus vulputate sagittis euismod. Nullam in mi vitae diam rhoncus semper. Mauris non est eget tellus egestas placerat et sit amet tellus. Nullam sit amet finibus augue. Donec ut dolor eu ex luctus tempor. Nam scelerisque turpis vel hendrerit congue.', '2019-08-29', 'Argentina-1024x640.jpg'),
(9, 'Jovem estreia CNH batendo carro em veículo da PM no interior de SP', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales odio dolor, et venenatis libero luctus ut. Quisque at efficitur nibh. Phasellus tristique elit eget ligula maximus, vel pharetra libero fermentum. Mauris orci velit, pretium congue erat quis, eleifend ornare magna. Nunc est tellus, congue in convallis a, fringilla nec metus. Integer et libero tempor, aliquet elit pretium, vestibulum velit. Praesent ac aliquet purus, sit amet imperdiet enim. Nullam tristique porta est, sed blandit arcu volutpat euismod. Etiam eget ante nibh. Fusce venenatis aliquet odio, id posuere mauris rutrum ut. In fermentum, odio ac rhoncus suscipit, est turpis placerat nulla, quis rutrum magna nibh quis massa. Suspendisse at diam ut ipsum rutrum tristique at sit amet nisl. Ut diam ante, pretium vitae maximus a, porta vitae justo. Phasellus porttitor auctor ligula sed finibus. Nunc a velit ut ante fringilla vestibulum ut quis diam.\r\n\r\nMaecenas a dignissim lacus. Sed in lectus vitae eros bibendum malesuada sit amet sed magna. Duis et finibus nisl. Pellentesque ac tincidunt sem, ornare elementum velit. Etiam pulvinar turpis libero, eu auctor neque interdum vel. Vestibulum eu arcu ac augue ultrices vehicula. Duis porttitor orci sem, pretium pharetra arcu ullamcorper eget. Fusce porttitor, libero vel cursus euismod, dui odio vestibulum ex, semper tempus libero magna convallis dolor. Sed dui magna, efficitur ullamcorper sagittis in, faucibus mollis augue. Fusce euismod dolor eget neque rhoncus iaculis.\r\n\r\nCurabitur porttitor, ipsum ut molestie vehicula, sapien nibh sollicitudin justo, non tempus massa metus sed nunc. Vivamus vulputate sagittis euismod. Nullam in mi vitae diam rhoncus semper. Mauris non est eget tellus egestas placerat et sit amet tellus. Nullam sit amet finibus augue. Donec ut dolor eu ex luctus tempor. Nam scelerisque turpis vel hendrerit congue.', '2019-08-29', 'batendopm900x506.jpg'),
(10, 'BC apresenta moeda de R$1 em comemoração aos 25 anos do Real', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales odio dolor, et venenatis libero luctus ut. Quisque at efficitur nibh. Phasellus tristique elit eget ligula maximus, vel pharetra libero fermentum. Mauris orci velit, pretium congue erat quis, eleifend ornare magna. Nunc est tellus, congue in convallis a, fringilla nec metus. Integer et libero tempor, aliquet elit pretium, vestibulum velit. Praesent ac aliquet purus, sit amet imperdiet enim. Nullam tristique porta est, sed blandit arcu volutpat euismod. Etiam eget ante nibh. Fusce venenatis aliquet odio, id posuere mauris rutrum ut. In fermentum, odio ac rhoncus suscipit, est turpis placerat nulla, quis rutrum magna nibh quis massa. Suspendisse at diam ut ipsum rutrum tristique at sit amet nisl. Ut diam ante, pretium vitae maximus a, porta vitae justo. Phasellus porttitor auctor ligula sed finibus. Nunc a velit ut ante fringilla vestibulum ut quis diam.\r\n\r\nMaecenas a dignissim lacus. Sed in lectus vitae eros bibendum malesuada sit amet sed magna. Duis et finibus nisl. Pellentesque ac tincidunt sem, ornare elementum velit. Etiam pulvinar turpis libero, eu auctor neque interdum vel. Vestibulum eu arcu ac augue ultrices vehicula. Duis porttitor orci sem, pretium pharetra arcu ullamcorper eget. Fusce porttitor, libero vel cursus euismod, dui odio vestibulum ex, semper tempus libero magna convallis dolor. Sed dui magna, efficitur ullamcorper sagittis in, faucibus mollis augue. Fusce euismod dolor eget neque rhoncus iaculis.\r\n\r\nCurabitur porttitor, ipsum ut molestie vehicula, sapien nibh sollicitudin justo, non tempus massa metus sed nunc. Vivamus vulputate sagittis euismod. Nullam in mi vitae diam rhoncus semper. Mauris non est eget tellus egestas placerat et sit amet tellus. Nullam sit amet finibus augue. Donec ut dolor eu ex luctus tempor. Nam scelerisque turpis vel hendrerit congue.', '2019-08-29', 'moeda-comemorativa-dos-25-anos-do-real-1567020714600_v2_450x450.jpg'),
(11, 'Sarampo faz Ministério da Saúde declarar emergência na Grande São Paulo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales odio dolor, et venenatis libero luctus ut. Quisque at efficitur nibh. Phasellus tristique elit eget ligula maximus, vel pharetra libero fermentum. Mauris orci velit, pretium congue erat quis, eleifend ornare magna. Nunc est tellus, congue in convallis a, fringilla nec metus. Integer et libero tempor, aliquet elit pretium, vestibulum velit. Praesent ac aliquet purus, sit amet imperdiet enim. Nullam tristique porta est, sed blandit arcu volutpat euismod. Etiam eget ante nibh. Fusce venenatis aliquet odio, id posuere mauris rutrum ut. In fermentum, odio ac rhoncus suscipit, est turpis placerat nulla, quis rutrum magna nibh quis massa. Suspendisse at diam ut ipsum rutrum tristique at sit amet nisl. Ut diam ante, pretium vitae maximus a, porta vitae justo. Phasellus porttitor auctor ligula sed finibus. Nunc a velit ut ante fringilla vestibulum ut quis diam.\r\n\r\nMaecenas a dignissim lacus. Sed in lectus vitae eros bibendum malesuada sit amet sed magna. Duis et finibus nisl. Pellentesque ac tincidunt sem, ornare elementum velit. Etiam pulvinar turpis libero, eu auctor neque interdum vel. Vestibulum eu arcu ac augue ultrices vehicula. Duis porttitor orci sem, pretium pharetra arcu ullamcorper eget. Fusce porttitor, libero vel cursus euismod, dui odio vestibulum ex, semper tempus libero magna convallis dolor. Sed dui magna, efficitur ullamcorper sagittis in, faucibus mollis augue. Fusce euismod dolor eget neque rhoncus iaculis.\r\n\r\nCurabitur porttitor, ipsum\' ut molestie vehicula, sapien nibh sollicitudin justo, non tempus massa metus sed nunc. Vivamus vulputate sagittis euismod. Nullam in mi vitae diam rhoncus semper.\' Mauris non est eget tellus egestas placerat et sit amet tellus. Nullam sit amet finibus augue. Donec ut dolor eu ex luctus tempor. Nam scelerisque turpis vel hendrerit congue.', '2019-08-29', 'sarampo-1563633798385_v2_900x506.jpg'),
(13, 'Mega-Sena pode pagar R$ 72 milhões nesta quarta-feira', 'O concurso 2.185 pode pagar um prêmio de R$ 72 milhões para quem acertar as seis dezenas. O sorteio ocorre às 20h (horário de Brasília) desta quarta-feira (4).\r\n\r\nPara apostar na Mega-Sena\r\n\r\nAs apostas podem ser feitas até as 19h (de Brasília) do dia do sorteio, em qualquer lotérica do país ou pela internet. A aposta mínima custa R$ 3,50.\r\n\r\nProbabilidades\r\n\r\nA probabilidade de vencer em cada concurso varia de acordo com o número de dezenas jogadas e do tipo de aposta realizada. Para a aposta simples, com apenas seis dezenas, com preço de R$ 3,50, a probabilidade de ganhar o prêmio milionário é de 1 em 50.063.860, segundo a Caixa.\r\n\r\nJá para uma aposta com 15 dezenas (limite máximo), com o preço de R$ 17.517,50, a probabilidade de acertar o prêmio é de 1 em 10.003, ainda segundo a Caixa.', '2019-09-04', 'volantes-loterias.jpg'),
(14, 'Congonhas terá novos voos para o interior de SP, MG, RJ e MS', 'A Passaredo e a MAP Linhas Aéreas terão novos voos no aeroporto de Congonhas, na capital paulista. Serão 26 voos diários para sete destinos nos estados de São Paulo, Minas Gerais, Rio de Janeiro e Mato Grosso do Sul. Os voos irão acontecer a partir do dia 27 de outubro e utilizarão aeronaves para 70 passageiros. As cidades que receberão os novos trajetos partindo de Congonhas são: Ribeirão Preto (SP): 8 voos diários Bauru (SP): 6 voos diários Marília (SP): 2 voos diários Araçatuba (SP): 2 voos diários Dourados (MS): 4 voos diários Uberaba (MG): 2 voos diários Macaé (RJ): 2 voos diários Na coletiva em que os novos voos foram anunciados, o governador paulista, João Doria (PSDB).', '2019-09-22', 'congonhas.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias2`
--

CREATE TABLE `noticias2` (
  `idNoticiaDB` int(11) NOT NULL,
  `tituloDB` varchar(150) NOT NULL,
  `textoDB` text NOT NULL,
  `fotoDB` varchar(150) NOT NULL
) ;

--
-- Extraindo dados da tabela `noticias2`
--

INSERT INTO `noticias2` (`idNoticiaDB`, `tituloDB`, `textoDB`, `fotoDB`) VALUES
(1, 'Notícia da vaca', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac arcu posuere, cursus elit nec, molestie mi. Aliquam gravida, nisi ac lobortis condimentum, turpis nulla iaculis arcu, sit amet convallis massa nisi sed mauris. Nunc egestas magna ac ipsum elementum, et lobortis dolor accumsan. Etiam lacinia rhoncus commodo. Donec nec tincidunt lacus, ut fringilla nibh. In imperdiet placerat lorem vel dignissim. Nam vel libero sollicitudin, pretium mi eu, mollis ante. Nunc luctus mattis libero id sodales. Suspendisse at nisl sit amet sem lacinia elementum sit amet at lorem. Suspendisse a elit erat. Nam condimentum, dolor quis ullamcorper congue, ipsum nisl fringilla massa, at convallis metus purus vitae nibh. Nulla dolor purus, vulputate vitae nulla non, porta molestie tortor. Sed ut erat non sapien aliquam feugiat sit amet at dolor. Aliquam ut finibus augue.', 'vaca.jpg'),
(2, 'Notícia da vaca verde', 'Fusce ultricies nisl vitae nibh gravida, quis pellentesque felis varius. Mauris neque mauris, aliquet in urna id, lacinia varius ligula. Nam lacus urna, tempor sed turpis pharetra, ultrices venenatis orci. Proin facilisis, nulla id mattis pretium, est turpis porta ipsum, sit amet placerat ligula erat in nunc. Proin mattis sapien elit, sit amet tempus augue interdum a. Ut vestibulum, purus quis imperdiet volutpat, felis libero cursus ipsum, at varius neque magna sed elit. Pellentesque venenatis, tellus ut bibendum malesuada, neque lectus sodales metus, in fringilla ante eros eget lectus. Suspendisse scelerisque neque at elit faucibus vehicula. Suspendisse cursus viverra lacus, a vulputate turpis scelerisque sit amet. Suspendisse sed rutrum metus. Sed porta nibh quis sodales ultrices. Donec sagittis dapibus nulla, eget suscipit erat. Cras maximus, magna vitae dapibus dapibus, libero est tincidunt est, nec tincidunt enim sapien ac ipsum. Ut ut pulvinar arcu.', 'vaca-verde.jpg'),
(3, 'Notícia da vaca amarela', 'Curabitur a fringilla ante. Nullam rutrum purus eu enim posuere, in condimentum arcu vulputate. Integer libero sem, iaculis et laoreet sed, dignissim quis leo. Aenean sed auctor nisi. Aliquam rhoncus nibh euismod nunc mollis cursus quis varius enim. Donec efficitur sapien in urna consectetur congue. Phasellus tempus bibendum magna sed sagittis. Mauris vitae sem magna. Donec ornare ut tellus vel gravida. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam gravida pretium urna eget commodo. Duis rhoncus cursus est, sit amet hendrerit lacus pretium sit amet. Morbi nec maximus eros. Ut mollis dolor eu tincidunt vulputate. Ut aliquet urna sit amet sapien mollis, vitae commodo leo euismod. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce sed mi ligula. In at vehicula diam. Duis lacus ligula, iaculis gravida tellus at, volutpat sodales nisi.', 'vaca-amarela.jpg'),
(4, 'Notícia da vaca cinza', 'Nunc ipsum ipsum, laoreet et placerat ut, interdum ac sem. Morbi vel vestibulum felis. Maecenas ante tellus, lobortis id luctus ac, iaculis at tortor. Donec suscipit euismod risus, nec fringilla orci eleifend ac. Phasellus in lectus nisi. Pellentesque hendrerit massa diam. Nullam luctus tellus et elit sagittis, et faucibus ante dignissim. Nunc a elit dictum, rhoncus metus vel, molestie quam. Vivamus vitae erat augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In mattis scelerisque eros. Integer egestas lacus non neque fermentum, ac condimentum enim tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque justo tortor, pellentesque sed arcu a, semper fringilla ex. Suspendisse ut suscipit libero. Duis sodales mi libero, sed rutrum magna efficitur eget.', 'vaca-cinza.jpg'),
(5, 'Noticia da vaca branca', 'In imperdiet placerat lorem vel dignissim. Nam vel libero sollicitudin, pretium mi eu, mollis ante. Nunc luctus mattis libero id sodales. Suspendisse at nisl sit amet sem lacinia elementum sit amet at lorem. Suspendisse a elit erat. Nam condimentum, dolor quis ullamcorper congue, ipsum nisl fringilla massa, at convallis metus purus vitae nibh. Nulla dolor purus, vulputate vitae nulla non, porta molestie tortor. Sed ut erat non sapien aliquam feugiat sit amet at dolor. Aliquam ut finibus augue. Fusce ultricies nisl vitae nibh gravida, quis pellentesque felis varius. Mauris neque mauris, aliquet in urna id, lacinia varius ligula. Nam lacus urna, tempor sed turpis pharetra, ultrices venenatis orci. Proin facilisis, nulla id mattis pretium, est turpis porta ipsum, sit amet placerat ligula erat in nunc. Proin mattis sapien elit, sit amet tempus augue interdum a. Ut vestibulum, purus quis imperdiet volutpat, felis libero cursus ipsum, at varius neque magna sed elit.', 'vaca-branca.jpg'),
(6, 'Notícia da vaca azul', 'Pellentesque venenatis, tellus ut bibendum malesuada, neque lectus sodales metus, in fringilla ante eros eget lectus. Suspendisse scelerisque neque at elit faucibus vehicula. Suspendisse cursus viverra lacus, a vulputate turpis scelerisque sit amet. Suspendisse sed rutrum metus. Sed porta nibh quis sodales ultrices. Donec sagittis dapibus nulla, eget suscipit erat. Cras maximus, magna vitae dapibus dapibus, libero est tincidunt est, nec tincidunt enim sapien ac ipsum. Ut ut pulvinar arcu. Curabitur a fringilla ante. Nullam rutrum purus eu enim posuere, in condimentum arcu vulputate. Integer libero sem, iaculis et laoreet sed, dignissim quis leo. Aenean sed auctor nisi. Aliquam rhoncus nibh euismod nunc mollis cursus quis varius enim. Donec efficitur sapien in urna consectetur congue. Phasellus tempus bibendum magna sed sagittis. Mauris vitae sem magna.', 'vaca-azul.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `senha`) VALUES
(7, 'hilton', '123456'),
(10, 'Karina', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE `videos` (
  `id_video` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `cod_video` varchar(255) NOT NULL,
  `foto` varchar(150) NOT NULL
) ;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`id_video`, `titulo`, `cod_video`, `foto`) VALUES
(1, 'Entrevista com Jair Bolsonaro', '<iframe width=\"800\" height=\"500\" src=\"https://www.youtube.com/embed/yij7JTmN2E4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'imagem6.jpg'),
(2, 'Entrevista com Tom Cavalcante', '<iframe width=\"800\" height=\"500\" src=\"https://www.youtube.com/embed/3ZFzhKODuJg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'imagem10.jpg'),
(3, 'Entrevista com Sérgio Mallandro', '<iframe width=\"800\" height=\"500\" src=\"https://www.youtube.com/embed/OwspUexYoV8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'imagem9.jpg'),
(4, 'Entrevista com Arnold Schwarzenegger ', '<iframe width=\"800\" height=\"500\" src=\"https://www.youtube.com/embed/OsAyOKsOLJM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'imagem7.jpg'),
(5, ' Entrevista com a cantora Pitty', '<iframe width=\"800\" height=\"500\" src=\"https://www.youtube.com/embed/PhlDqOBeRXM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'imagem12.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id_contato`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id_contato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
