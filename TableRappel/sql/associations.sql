-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 19, 2024 at 06:14 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `table_rappel`
--

-- --------------------------------------------------------

--
-- Table structure for table `associations`
--

CREATE TABLE `associations` (
  `id` int(11) NOT NULL,
  `digit` int(11) NOT NULL,
  `word` varchar(128) NOT NULL,
  `img_url` varchar(256) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `associations`
--

INSERT INTO `associations` (`id`, `digit`, `word`, `img_url`, `user_id`) VALUES
(1744, 0, 'Seau', 'https://images.truffaut.com/media/catalog/productcdn:///Articles/jpg/0468000/468502_002.jpg?width=700&height=700&store=fr&image-type=image', 4),
(1745, 1, 'Toit', 'https://www.revedecombles.fr/wp-content/themes/revedecombles/assets/page-templates/modification-pente-de-toit/etape1-1.png', 4),
(1746, 2, 'Nez', 'https://www.shutterstock.com/image-vector/human-nose-vector-isolated-on-600nw-2313875103.jpg', 4),
(1747, 3, 'Mont', 'https://cdn-icons-png.flaticon.com/512/774/774829.png', 4),
(1748, 4, 'Rat', 'https://chartresnuisibles.fr/wp-content/uploads/2023/05/rat-noir-chartres-nuisibles-scaled_.png', 4),
(1749, 5, 'Lit', 'https://img.freepik.com/vecteurs-premium/lit-simple-est-bois-dans-style-cartoon-illustration-vectorielle-fond-blanc_406207-48.jpg', 4),
(1750, 6, 'Chat', 'https://www.larousse.fr/encyclopedie/data/images/1310591-Chat_American_shorthair.jpg', 4),
(1751, 7, 'Gant', 'https://img.freepik.com/vecteurs-premium/gant-hiver-chaud-cartoon-protection-mains-contre-gel-isole-fond-blanc_81894-6312.jpg?w=360', 4),
(1752, 8, 'Feu', 'https://png.pngtree.com/png-clipart/20190520/original/pngtree-cartoon-fire-clipart-png-image_4294170.jpg', 4),
(1753, 9, 'Pot', 'https://static.vecteezy.com/ti/vecteur-libre/p3/15017906-icone-de-pot-de-fleur-style-cartoon-vectoriel.jpg', 4),
(1754, 10, 'Tasse', 'https://png.pngtree.com/png-vector/20191001/ourlarge/pngtree-cup-of-coffee-icon-cartoon-style-png-image_1771168.jpg', 4),
(1755, 11, 'Tente', 'https://static.vecteezy.com/ti/vecteur-libre/p3/14225023-icone-de-tente-de-camping-ecologique-style-cartoon-vectoriel.jpg', 4),
(1756, 12, 'Dune', 'https://static-ssl.businessinsider.com/image/56e715cb52bcd020008b63c8-2500-1667/iz8a4556%201.jp2?maxX=829&maxY=553', 4),
(1757, 13, 'Dôme', 'https://upload.wikimedia.org/wikipedia/commons/2/2d/StPetersDomePD.jpg', 4),
(1758, 14, 'Tour', 'https://p.turbosquid.com/ts-thumb/ce/Ia8pal/6rY45nqc/01/jpg/1425364969/600x600/fit_q87/bedb647c7ea1aada6ea8f5c3394bcd6aaac8a571/01.jpg', 4),
(1759, 15, 'Tuile', 'https://cdn.futura-sciences.com/sources/images/tuiles.jpeg', 4),
(1760, 16, 'Douche', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_FCUKA4mNd_UeqX1t91yczuiMzjdzcRajRw&usqp=CAU', 4),
(1761, 17, 'Tank', 'https://media.istockphoto.com/id/1191597976/vector/war-tank-cartoon.jpg?s=612x612&w=0&k=20&c=SVNeMk4N3EPgpo7troo9sBDey5BdUPSSLWH1XvLBybI=', 4),
(1762, 18, 'Dauphin', 'https://static.vecteezy.com/ti/vecteur-libre/p1/25883563-mignonne-dauphin-dessin-anime-sauter-sur-blanc-contexte-vectoriel.jpg', 4),
(1763, 19, 'Taupe', 'https://img.freepik.com/vecteurs-libre/petite-taupe-fond-blanc_1308-91807.jpg', 4),
(1764, 20, 'Noces', 'https://img.lovepik.com/png/20230930/creative-wedding-bride-and-groom-cartoon-image-creative-images-flowers_41967_wh860.png', 4),
(1765, 21, 'Default', NULL, 4),
(1766, 22, 'Default', NULL, 4),
(1767, 23, 'Default', NULL, 4),
(1768, 24, 'Default', NULL, 4),
(1769, 25, 'Default', NULL, 4),
(1770, 26, 'Default', NULL, 4),
(1771, 27, 'Default', NULL, 4),
(1772, 28, 'Default', NULL, 4),
(1773, 29, 'Default', NULL, 4),
(1774, 30, 'Default', NULL, 4),
(1775, 31, 'Default', NULL, 4),
(1776, 32, 'Default', NULL, 4),
(1777, 33, 'Default', NULL, 4),
(1778, 34, 'Default', NULL, 4),
(1779, 35, 'Default', NULL, 4),
(1780, 36, 'Default', NULL, 4),
(1781, 37, 'Default', NULL, 4),
(1782, 38, 'Default', NULL, 4),
(1783, 39, 'Default', NULL, 4),
(1784, 40, 'Default', NULL, 4),
(1785, 41, 'Default', NULL, 4),
(1786, 42, 'Default', NULL, 4),
(1787, 43, 'Default', NULL, 4),
(1788, 44, 'Default', NULL, 4),
(1789, 45, 'Default', NULL, 4),
(1790, 46, 'Default', NULL, 4),
(1791, 47, 'Default', NULL, 4),
(1792, 48, 'Default', NULL, 4),
(1793, 49, 'Default', NULL, 4),
(1794, 50, 'Default', NULL, 4),
(1795, 51, 'Default', NULL, 4),
(1796, 52, 'Default', NULL, 4),
(1797, 53, 'Default', NULL, 4),
(1798, 54, 'Default', NULL, 4),
(1799, 55, 'Default', NULL, 4),
(1800, 56, 'Default', NULL, 4),
(1801, 57, 'Default', NULL, 4),
(1802, 58, 'Default', NULL, 4),
(1803, 59, 'Default', NULL, 4),
(1804, 60, 'Default', NULL, 4),
(1805, 61, 'Default', NULL, 4),
(1806, 62, 'Default', NULL, 4),
(1807, 63, 'Default', NULL, 4),
(1808, 64, 'Default', NULL, 4),
(1809, 65, 'Default', NULL, 4),
(1810, 66, 'Default', NULL, 4),
(1811, 67, 'Default', NULL, 4),
(1812, 68, 'Default', NULL, 4),
(1813, 69, 'Default', NULL, 4),
(1814, 70, 'Default', NULL, 4),
(1815, 71, 'Default', NULL, 4),
(1816, 72, 'Default', NULL, 4),
(1817, 73, 'Default', NULL, 4),
(1818, 74, 'Default', NULL, 4),
(1819, 75, 'Default', NULL, 4),
(1820, 76, 'Default', NULL, 4),
(1821, 77, 'Default', NULL, 4),
(1822, 78, 'Default', NULL, 4),
(1823, 79, 'Default', NULL, 4),
(1824, 80, 'Default', NULL, 4),
(1825, 81, 'Default', NULL, 4),
(1826, 82, 'Default', NULL, 4),
(1827, 83, 'Default', NULL, 4),
(1828, 84, 'Default', NULL, 4),
(1829, 85, 'Default', NULL, 4),
(1830, 86, 'Default', NULL, 4),
(1831, 87, 'Default', NULL, 4),
(1832, 88, 'Default', NULL, 4),
(1833, 89, 'Default', NULL, 4),
(1834, 90, 'Default', NULL, 4),
(1835, 91, 'Default', NULL, 4),
(1836, 92, 'Default', NULL, 4),
(1837, 93, 'Default', NULL, 4),
(1838, 94, 'Default', NULL, 4),
(1839, 95, 'Default', NULL, 4),
(1840, 96, 'Default', NULL, 4),
(1841, 97, 'Default', NULL, 4),
(1842, 98, 'Default', NULL, 4),
(1843, 99, 'Default', NULL, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `associations`
--
ALTER TABLE `associations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `associations`
--
ALTER TABLE `associations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1845;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
