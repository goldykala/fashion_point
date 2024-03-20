-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 02:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`cat_id`, `cat_name`, `description`) VALUES
(1, 'men', 'all fashion clothes , acessories and footwears'),
(2, 'women', 'all fashion clothes , acessories and footwear of women'),
(3, 'kids', 'all fashion clothes , acessories and footwear of kids');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail`
--

CREATE TABLE `tb_detail` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `dprice` int(11) NOT NULL,
  `off` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `sub_id` varchar(255) NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `pic2` varchar(255) NOT NULL,
  `pic3` varchar(255) NOT NULL,
  `pic4` varchar(255) NOT NULL,
  `seller` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_detail`
--

INSERT INTO `tb_detail` (`id`, `name`, `brand`, `price`, `dprice`, `off`, `description`, `sub_id`, `cat_id`, `pic`, `pic2`, `pic3`, `pic4`, `seller`) VALUES
(11, 'Men Solid Black Track Pants', 'PUMA', 2799, 1399, 50, 'Style Code\r\n58672201\r\nPockets\r\nSide Pockets\r\nFabric Care\r\nMachine wash as per the tag\r\nSales Package\r\n1 track pant\r\nFabric\r\nCotton Blend\r\nPattern\r\nSolid\r\nColor\r\nBlack\r\nNet Quantity\r\n1', '2', '1', 'd1.webp', 'd2.webp', 'd3.webp', 'd4.webp', 'pumasportsindia'),
(12, 'Men Striped Blue Track Pants', 'ADIDAS', 3699, 1699, 54, 'Style Code\r\nIC0049\r\nSecondary Color\r\nWhite\r\nClosure\r\nDrawstring\r\nFabric Care\r\nMachine Wash as per tag\r\nSales Package\r\n1\r\nFabric\r\nPure Cotton\r\nPattern\r\nStriped\r\nColor\r\nBlue', '2', '1', 'e1.webp', 'e2.webp', 'e3.webp', 'e4.webp', ' HSAtlastradeFashion'),
(13, 'ADIMOVE SHOES', 'ADIDAS', 4599, 3489, 24, 'COMFORTABLE SHOES TO MOVE SMOOTH WITH EVERY STEP\r\nTake the look of a classic shoe and refresh it with modern streetwear vibes, and you get these adidas shoes that will take you through the day in supreme comfort. The Cushioned midsole is to thank for that', '3', '1', 'shoea1.avif', 'shoea2.avif', 'shoea3.avif', 'shoea4.avif', 'ADIDAS ORIGINAL'),
(14, 'CAMPUS MIKE (N) Running Shoes For Men (Blue)  Share CAMPUS', 'CAMPUS', 1699, 899, 47, '', '3', '1', 'shoeb1.webp', 'shoeb2.webp', 'shoeb3.webp', 'shoeb4.webp', ' RetailNet'),
(16, 'Lace Sneakers For Boys & Girls  (Blue)', 'PUMA', 4499, 3899, 13, 'Product Details\r\n\r\nNumber of Pairs\r\n1\r\nBrand\r\nPUMA\r\nStyle code\r\n195569\r\nSize\r\n5\r\nBrand color\r\nCobalt Glaze-White\r\nIdeal for\r\nBoys & Girls\r\nType\r\nCasual Wear\r\nSubtype\r\nSneakers', '3', '1', 'shoec1.webp', 'shoec2.webp', 'shoec3.webp', 'shoec4.webp', 'pumasportsindia'),
(17, 'ALICE Walking Shoes For Women  (Green)', 'CAMPUS', 1057, 999, 5, '', '3', '1', 'shoed1.webp', 'shoed2.webp', 'shoed3.webp', 'shoed4.webp', ' Campusactivewear'),
(18, 'KL8040 Lightweight Comfort Summer Trendy Premium Stylish Loafers For Men  (Brown)', 'KILLER ', 2599, 799, 69, '', '3', '1', 'shoee1.webp', 'shoee2.webp', 'shoee3.webp', 'shoee5.webp', 'jamblaproducts'),
(19, 'Formal Moccasion Loafers For Men  (Tan)', 'Tan Toe ', 3899, 1199, 69, 'Product Details\r\n\r\nColor\r\nTan\r\nInner material\r\nLeather\r\nOuter material\r\nGenuine Leather\r\nModel name\r\nFormal Moccasion\r\nIdeal for\r\nMen\r\nOccasion\r\nCasual\r\nHeel Pattern\r\nSolid\r\nLeather type\r\nTop Grain', '3', '1', 'shoef1.webp', 'shoef2.webp', 'shoef3.webp', 'shoef4.webp', 'tantoe'),
(20, 'Lace Up For Men  (Black)', 'BATA', 3999, 1299, 68, '', '3', '1', 'shoeg1.webp', 'shoeg2.webp', 'shoeg3.webp', 'shoeg4.webp', ' HSAtlastradeFashion'),
(21, 'Synthetic| Lightweight| Premiun| Comfort| Summer Tendy| Outdoor| Formal Derby For Men  (Black)', 'aadi', 7999, 3999, 50, '', '3', '1', 'shoe h1.webp', 'shoeh2.webp', 'shoeh3.webp', 'shoeh4.webp', ' Dadwanis Footwear'),
(22, 'Men Regular Mid Rise Blue Jeans', 'Roadster ', 2999, 1499, 50, '', '2', '1', 'panta1.webp', 'panta2.webp', 'panta3.webp', 'pana4.webp', '1499'),
(23, 'Men Slim Mid Rise Grey Jeans', 'Urbano Fashion ', 3229, 1219, 62, 'Style Code\r\nhpsjogger-wgrey\r\nIdeal For\r\nMen\r\nSuitable For\r\nWestern Wear\r\nPack Of\r\n1\r\nPocket Type\r\nDiagonal Pocket\r\nPattern\r\nSolid\r\nReversible\r\nNo\r\nSales Package\r\n1 Washed Jogger Jeans\r\nClosure\r\nDrawstring\r\nFabric\r\nCotton Lycra Blend\r\nFaded\r\nLight Fade\r\nRi', '2', '1', 'pantb1.webp', 'pantb2.webp', 'pantb3.webp', 'pantb4.webp', 'urabanofashion'),
(24, 'Men Slim Mid Rise Black Jeans', 'INTEGRITI ', 1499, 1299, 13, 'Style Code    I-IMRTL-KJ-2296 SLMFT BK \r\nIdeal For       Men\r\nSuitable For Western Wear\r\nPack Of   1\r\nReversible  No\r\nSales Package   1 Jeans\r\nClosure  Button\r\nFabric     Cotton Lycra Blend\r\n', '2', '1', 'pantc1.webp', 'pantc2.webp', 'pantc3.webp', 'pantc4.webp', 'binduproducts'),
(25, 'Men Tapered Fit Mid Rise Blue Jeans', 'LEVIS', 4299, 1799, 58, 'Style Code  :    36087-0717  |\r\nIdeal For  :    Men  |\r\nSuitable For  :  Western Wear  |\r\nPack Of :  1 |\r\nPocket Type  : Coin Pocket |\r\nPattern  :  Solid Reversible No Closure Button & Zip|  ', '2', '1', 'pantd1.webp', 'pantd2.webp', 'pantd3.webp', 'pantd4.webp', ' Levi Strauss India Pvt Ltd'),
(26, 'Men Slim Fit Light Green Lycra Blend Trousers', 'INDICLUB', 1499, 399, 73, 'Fit   :  Slim Fit |\r\nOccasion  : Formal |\r\nColor : Light Green |\r\nPack of  : 1 |\r\nType : Casual Trousers |\r\nSuitable For :  Western Wear |\r\nBelt Loops  : Yes ,Rise,Mid  |', '2', '1', 'pante1.webp', 'pante2.webp', 'pante3.webp', 'pante4.webp', ' NATIONWIDEFASHION'),
(27, 'Men Slim Fit Beige Cotton Blend Trousers', 'FUBAR ', 1999, 899, 55, 'Fit : Slim Fit |\r\nOccasion : Casual |\r\nColor : Beige |\r\nPack of : 1  |\r\nType : Casual Trousers |\r\nSuitable For  : Western Wear|\r\nBelt Loops : Yes|\r\nPattern : Solid|', '2', '1', 'pantf1.webp', 'pantf2.webp', 'pantf3.webp', 'pantf4.webp', 'kalaproducts'),
(28, 'Men Self Design Polo Neck Cotton Blend Pink T-Shirt', 'puma', 1440, 570, 60, 'Type : Polo Neck |\r\nSleeve : Short Sleeve |\r\nFit : Slim |\r\nFabric : Cotton Blend |\r\nSales Package : 1Tshirt |\r\nPack of : 1 |\r\nStyle Code : DB1024 |\r\nNeck Type : Polo Neck |', '1', '1', 't-shirta.webp', 't-shirta1.webp', 't-shirta2.webp', 't-shirta3.webp', ' BAID WIRE AND CABLE'),
(29, 'Men Self Design Polo Neck Cotton Blend Pink T-Shirt', 'Puma', 5060, 2100, 58, '', '1', '1', 't-shirtb.webp', 't-shirtb1.webp', 't-shirtb2.webp', 't-shirtb3.webp', 'pumasportsindia'),
(30, 'CLUB 3 STRIPES POLO TEE', 'addidas', 3150, 580, 82, 'Keep your mind on the match as the pressure rises. This tennis polo shirt is made from comfortable pique fabric that moves sweat away from your skin, keeping you dry point after point. The iconic 3-stripes on the sleeves are a nod to your commitment to sp', '1', '1', 'tshirtc1.avif', 'tshirtc.avif', 'tshirtc3.avif', 'tshirtc2.avif', 'addidasoriginals'),
(31, 'ESSENTIALS SINGLE JERSEY BIG LOGO TEE', 'addidas', 3150, 2100, 33, 'Find your perfect mens t-shirt - from colourful pastels to iconic adidas designs, you  find what you are looking for. Featuring moisture-wicking fabrics and advanced technologies, you  stay comfortable, even when training hard.', '1', '1', 'tshirtd.avif', 'tshirtd1.avif', 'tshirtd2.avif', 'tshirtd3.avif', 'addidasoriginals'),
(32, 'Levis Men Shirt', 'levis', 2699, 1349, 50, 'Material composition : 100% Cotton |\r\nPattern : Checkered |\r\nFit type : Slim Fit |\r\nCollar style : COLLARED NECK |\r\nLength : Standard Length', '1', '1', 't-shirte.png', 't-shirte1.png', 't-shirte2.png', 't-shirte4.png\r\n', 'lavisindia'),
(33, 'Van Heusen Mens Shirt', 'Van Heusen ', 2924, 1509, 48, 'Material composition : 95% Cotton, 5% Spandex PatternSolid |\r\nFit type : Slim Fit |\r\nSleeve type : Long Sleeve |\r\nCollar style : Regular Collar |\r\nLength : Standard Length |\r\nCountry of   Origin : India  |\r\n', '1', '1', 't-shirtf.png', 't-shirtf1.png', 't-shirtf3.png', 't-shirtf2.png', ' venheusenindia'),
(34, 'Jump Cuts Mens Printed Polo Neck Full Sleeve Black Cottonblend T-Shirt', 'california', 4999, 2999, 40, 'Material composition :  Cottonblend |\r\nSleeve type  :  Long Sleeve |\r\nMaterial type  :  Cotton Blend |\r\nFit type  : Slim|\r\nLength : Standard Length|\r\nNeck style Collared Neck\r\nCountry of Origin  :   India', '1', '1', 't-shirtg (4).png', 't-shirtg (3).png', 't-shirtg (2).png', 't-shirtg (1).png', 'calforniaclothesindia'),
(35, 'OTUS Mens Cotton Printed Casual/Party Slim Fit Floral Shirt', 'OTUS', 2999, 1499, 50, 'Material composition  : Cotton Mix|\r\nPattern : Printed  |\r\nFit type  : Slim Fit |\r\nSleeve type  : Long Sleeve |\r\nCollar style : Classic Collar |\r\nLength : Standard Length |\r\nCountry of Origin : India |', '1', '1', 't-shirth1 (1).png', 't-shirth1 (4).png', 't-shirth1 (3).png', 't-shirth1 (2).png', 'JAMBLABROTHERS'),
(36, 'Beige Sherwani Suit With Bold Zardozi Work', 'manyavaar', 21999, 14999, 32, 'Looking to up your fashion game on your special day Manyavar recommends this beige sherwani suit with zardozi work, which takes inspiration from the high fashion practices of the nawabi era. Accessorize with a mala and safa or keep it simple, either way, ', '13', '1', 'etnica 1.png', 'etnica2.png', 'etnica3.png', 'etnica4.png', 'manyavaar'),
(37, 'Flamingo Pink Chikankari Embroidered Kurta Set', 'manyavaar', 3999, 3499, 13, 'Illuminate your style with this flamingo pink kurta set. The harmonious blend of traditional Chikankari embroidery and mystic harlequin patterns, adorned with sequin work, create a dazzling spectacle.\r\n\r\nColor: Pink\r\nFabric: Viscose\r\nDesignType: Chikankar', '13', '1', 'etnicma1.png', 'etnicma2.png', 'etnicma3.png', 'etnicm4.png', 'mnvayavar'),
(38, 'Men Cotton Blend Kurta Pyjama Sets', 'FUBAR', 1499, 699, 53, 'Fabric\r\nCotton Blend\r\nType:   Kurta and Pyjama Set  |\r\nSales Package:  1  |\r\nStyle Code:   KRTPJ-PRINT SET-LTSG  |\r\nTop type  :Kurta     |\r\nBottom type  :  Pyjama    |\r\nPattern :   Printed       |\r\nColor : Light Green', '13', '1', 'etnicmb4 (3).png', 'etnicmb4 (1).png', 'etnicmb4 (4).png', 'etnicmb4 (2).png', 'KATELACREATION'),
(40, 'Men Cotton Blend Kurta Pyjama Set', 'Ladyflock', 1339, 699, 48, 'Fabric\r\nCotton Blend\r\nType\r\nKurta and Pyjama Set\r\nSales Package\r\n1 Kurta, 1 Pyjama\r\nStyle Code\r\nF SL Set Black\r\nSecondary color\r\nWhite\r\nTop fabric  : Cotton Blend  |\r\nBottom fabric  :  Cotton |\r\nTop type  :  Kurta  |', '13', '1', 'zuoqz2ym.png', 'm1uyxo7i.png', 'v2lefo1h.png', 'mjc2fu3o.png', 'kalaproducts'),
(41, 'Premium quality Mens WHITE Golden Jari cotton dhoti Striped, Solid Men Dhot', 'SAC SHREE APARAJEET CREATIONS', 4999, 2399, 52, 'This cotton dhoti, with its fabric choice, encapsulates comfort and cultural charm. Crafted from breathable and lightweight cotton, this dhoti offers style with ease. The natural texture of the fabric enhances the overall traditional appeal while ensuring', '13', '1', 'wiy3g3nf.png', '6xp64xym.png', '5gyml26h.png', '69zljkn4.png', ' Shree Aparajeet Creation'),
(42, 'Mens SherwanisVASTRAMAY Mens Sherwanis VASTRAMAY Self Design Sherwani  Share VASTRAMAY Self Design Sherwani', ' VASTRAMAY', 3499, 2699, 23, '', '13', '1', 'z9drnc2k.png', 'zcxu6jug.png', 'h0xmyq68.png', 'hj0xngc2.png', ' VASTRAMAY'),
(43, 'Brand Boy Printed Sherwan', ' BrandBoy', 3699, 2799, 24, '\r\nBrand Boy is a brand brings you quality and affordability. We take pride in our commitment to maintain quality standards in each piece manufactured by us. A true epitome of class, this designer Sherwani Combo will surely reflect your impeccable taste in', '13', '1', '48r21nlp.png', 'vbiwhdg3.png', 'b1iyc17q.png', 'b1sykpap.png', ' BrandBoy'),
(44, 'Brand Boy Printed Sherwan', ' BrandBoy', 3699, 2799, 24, 'Ideal For\r\nMen\r\nLength Type\r\nAbove Knee\r\nBrand Color  : Gold   |\r\nOccasion  :  Festive & Party   |\r\nPattern  :  Solid|\r\nType  :  Straight  |\r\nFabric  :Cotton Blend  |  \r\nStyle  :  mens kurta |', '13', '1', 'eoat6alo.png', 'pqrwez7m.png', 'miudt5wi.png', 'd1uwfkzq.png', ' BrandBoy'),
(45, 'Men Solid Single Breasted Casual Blazer  (Light Blue)', 'peter england', 6999, 3699, 47, '', '4', '1', 'ybag7yvk.png', '58ew5uq9.png', '46tia1mi.png', 'm4d8he1v.png', 'peter england'),
(46, 'Men Solid Single Breasted Party, Festive & Wedding, Casual Blazer  (Blue)', '', 2299, 1999, 13, 'Color  :  Blue |\r\nFabric  :  Velvet   |\r\nPattern :  Solid  |\r\nStyle code  :  VELBLZ1-RB |\r\nOccasion  : Party, Festive & Wedding, Casual  |\r\nSleeve  : Full Sleeve  |\r\nClosure : Two Button Closure |\r\nLining  : Viscose Lining |', '4', '1', 'e4uxnb7s.png', 'v36h60l7.png', '2zokisga.png', '71ntzymm.png', 'Avaeta Clothing'),
(47, 'Men Solid Single Breasted Formal Blazer  (Blue)', 'PETER ENGLAND ', 2999, 1999, 33, 'Color : Blue |\r\nFabric : Viscose Rayon |\r\nPattern : Solid |\r\nStyle code : PEBZONSBK10888 |\r\nOccasion : Formal |\r\nType : Single Breasted |', '4', '1', 'uj4fb937.png', 'vn2rvthn.png', '4qax91wk.png', 'ua8ykqvb.png', ' RetailNet4.8'),
(48, 'Solid Men Waistcoat', 'BizzEie ', 3999, 1999, 50, 'Pattern\r\nSolid\r\nIdeal For\r\nMen\r\nOccasion\r\nParty\r\nColor :Black |\r\nFabric : Polycotton |\r\nLining : YES |', '4', '1', 'i0aisuzf.png', '77rmg1tx.png', 'uhofixce.png', 'tqttcihp.png', ' SHILPITRADINGCOMPANY'),
(49, 'Men Single Breasted - 2 button Solid Suit', 'PETER ENGLAND', 3699, 2399, 35, 'Ideal For\r\nMen\r\nOccasion\r\nFormal\r\nPattern\r\nSolid\r\nColor : Dark Blue |\r\nType : Single Breasted - 2 button |\r\nFabric : Poly Viscose |\r\nFit : Slim |', '4', '1', '5m87zj7h.png', 'ucfzxqpa.png', 'uf6d2plf.png', 'c92p2ket.png', ' HSAtlastradeFashion4.3'),
(50, 'Men jodhpuri bandhgala Solid Suit', 'ALJAAMI ', 2499, 1699, 32, 'Ideal For : Men |\r\nOccasion : Wedding |\r\nPattern : Solid |\r\nColor : Blue |', '4', '1', 'km43bn9h.png', '77l299hy.png', 'zwwiirzc.png', 'vt8la08s.png', ' ALJAAMI'),
(51, 'Men Single Breasted - 2 button Solid Suit', 'Men Single Breasted - 2 button Solid Suit', 2599, 1599, 38, 'Ideal For : Men |\r\nOccasion : Formal |\r\nPattern : Solid |\r\nColor : Green |', '4', '1', 'opai243g.png', 'ct0mxxtu.png', 'gr7j5lgl.png', 'e194anwq.png', ' HSAtlastradeFashion'),
(52, 'Men Self Design Single Breasted Casual Blazer  (Blue)', 'PETER ENGLAND ', 3899, 299, 92, 'Color : Blue |\r\nFabric : Polyester Blend |\r\nPattern : Self Design |\r\nStyle code : PIBZSNSPC77714 |', '4', '1', 'r979xfsb.png', '4fsqgiqd.png', 'g4kd9oqq.png', 'vll7e4wi.png', ' HSAtlastradeFashion'),
(53, 'Printed, Geometric Print, Embroidered, Embellished Bandhani Georgette Saree  (Green, White)', 'Samah ', 4599, 2999, 35, 'Style Code : 2302S131 |\r\nPattern : Printed, Geometric Print, Embroidered, Embellished |\r\nPack of : 1 |\r\nOccasion : Casual, Party & Festive, Wedding, Wedding & Festive |\r\nDecorative Material : Lace |', '5', '2', 'eako0xp4.png', '0z0x8omb.png', 'cvjhirf7.png', '70y99p1n.png', ' RetailNet'),
(55, 'Printed Georgette Stitched Flared/A-line Gown  (Pink)', 'Jaldeep Fashion ', 3999, 1999, 50, 'Style Code : Shivani gown |\r\nOccasion : Wedding, Party & Festive |\r\nNeck : V Neck |\r\nSleeve : Full Sleeve |\r\nLength : 54 inch |', '5', '2', 'yhkru9gm.png', '4rwb4054.png', 'xhp8yzt6.png', 'laye0ogw.png', ' Jaldeep Fashion'),
(59, 'Georgette Stitched Anarkali Gown  (Blue)', 'LABEL D11', 1999, 899, 55, 'Style Code : FLY_SD_BLUE_100|\r\nOccasion : Party & Festive |\r\nNeck : Round Neck |\r\nSleeve : Full Sleeve |\r\nFabric : Georgette |\r\nType : Anarkali |\r\nStitching Type :  Stitched|\r\nSeason  : EOSS-3-2022 ', '5', '2', 'uoicvuag.png', 'dy43osdj.png', 'bewfkbbp.png', 'cmtulvsv.png', 'LABEL D11'),
(60, 'Women Chanderi Kurta Trouser Dupatta Se', 'Jaipur Kurti ', 4666, 2399, 49, 'Fabric\r\nChanderi\r\nType\r\nKurta, Pant And Dupatta Set\r\nSales Package\r\n1Kurta, 1Pants, 1Dupatta\r\nStyle Code : JKPAT4610|\r\nTop fabric : Silk Blend |\r\nBottom fabric : Silk  |\r\nTop type : Kurta|\r\nBottom type : Trouser', '5', '2', 'hodgxfdf.png', 'xhipyqwm.png', 'ekdqqtih.png', '0gxp4lx7.png', 'jaipurkurtis'),
(61, 'Women Viscose Rayon Kurta Pant Dupatta Set', 'KULDEVYANI', 1599, 679, 58, 'Fabric\r\nViscose Rayon\r\nType : Kurta, Pant And Dupatta Set |\r\nSales Package : 1  |\r\nStyle Code  : kalamkari straight kurta-M\r\nTop type  : Kurta |\r\nBottom type  : Pant  |\r\nPattern  :  Embroidered |\r\nColor : Black |', '5', '2', 'ctpfqfr7.png', '9qryu1qd.png', 'vqgwlthe.png', 'z7drl4dj.png', 'KULDEVYANI'),
(62, 'Women Viscose Rayon Kurta Patiala Dupatta Set', 'AAKASH', 999, 799, 20, 'Fabric\r\nViscose Rayon\r\nType\r\nKurti, Patiala and Dupatta Set\r\nSales Package :1 KurtI, 1 PATIALA, 1 DUPATTA |\r\nStyle Code : CHIKU-PT-2 |\r\nSecondary color : Beige|  \r\nTop fabric :Rayon |\r\nBottom fabric : Rayon |\r\nTop type : Kurta', '5', '2', 'xi9r62pi.png', 'v79wu9ud.png', '5kcuzicf.png', 'v79wu9ud.png', 'patialaclothhouse'),
(63, 'Coral Blue Floral Art Nouveau Patterned Bridal Lehenga', 'manyavaar', 45599, 25999, 43, 'Color: Blue |\r\nFabric: Velvet |\r\nItems Included: Lehenga , Blouse , Dupatta , Belt , Latkan |\r\nWash Care: Dry Clean Only   |', '5', '2', 'hknpkthc.png', 'bou40m9r.png', '46r5t8wj.png', 'g3tflevs.png', 'manyavaar'),
(64, 'Dark Green Saree with Contrast Border', 'manyavaar', 4999, 3399, 32, 'Color: Green\r\nFabric: Art Silk\r\nItems Included: Saree\r\nWash Care: Dry Clean Only\r\n\r\n\r\nThis Saree has been made by our karigars (craftsmen) with a lot of love and eye for detail.', '5', '2', '9fuiwmf3.png', 'rwt2xl0b.png', 't1xn3ncm.png', 'ww61bw2k.png', 'manyavaar'),
(65, 'Casual Regular Sleeves Embroidered Women Dark Blue Top', 'Brijam ', 2999, 1299, 57, 'Neck : Sweetheart Neck |\r\nSleeve Style : Regular Sleeves |\r\nSleeve Length : 3/4 Sleeve |\r\nFit : Regular |', '6', '2', 'enkq7qr8.png', 'r3rtu7hs.png', 'x9v0vd58.png', 'c9vxyf3s.png', ' Brijam'),
(66, 'Women A-line Multicolor Dress', 'ZWERLON ', 3999, 1999, 50, 'Color : Multicolor |\r\nLength : Midi/Calf Length |\r\nFabric : Polyester |\r\nPattern : Printed |', '6', '2', '7y4g26de.png', 'j0qam7i2.png', '2xmuua5m.png', 'lf3x7kz5.png', ' KZULLY'),
(67, 'Women Regular Fit Printed Spread Collar Casual Shirt', 'Selvia ', 3999, 1999, 50, 'Pack of\r\n1\r\nStyle Code : 483TK483 |\r\nClosure : Button |\r\nFit : Regular |', '6', '2', 'djn4j9aa.png', 'zrkdrgax.png', 'sn91d1fh.png', 'exwn0mnc.png', ' Selvia'),
(68, 'Women Regular Fit Solid Spread Collar Casual Shirt', 'Selvia ', 4999, 3999, 20, 'Pack of : 1 |\r\nStyle Code : 329TK251 |\r\nFit : Regular |\r\nFabric : Viscose Rayon |\r\nSleeve : 3/4th Sleeve |', '6', '2', 'p8p5p0wr.png', '4kb9hils.png', 'r0lfboe8.png', 'r73qnfwo.png', 'Selvia '),
(69, 'Casual Regular Sleeves Printed Women Black Top', 'Tokyo Talkies ', 3999, 1299, 68, 'Neck\r\nSquare Neck\r\nSleeve Style  :  Regular Sleeves |\r\nFit : Regular |\r\nFabric : Cotton Blend |\r\nType : Crop Top |', '6', '2', 'at5mm1ze.png', '76sjtwfq.png', 'vfdzgeqd.png', '0uym8xw6.png', 'SandSMarketing'),
(70, 'Casual Regular Sleeves Printed Women Black Top', 'Tokyo Talkies ', 3999, 1299, 68, 'Neck\r\nSquare Neck\r\nSleeve Style  :  Regular Sleeves |\r\nFit : Regular |\r\nFabric : Cotton Blend |\r\nType : Crop Top |', '5', '2', 'at5mm1ze.png', '76sjtwfq.png', 'vfdzgeqd.png', '0uym8xw6.png', 'SandSMarketing'),
(71, 'Casual Puff Sleeves Striped Women White, Pink Top', 'Roadster ', 2999, 1879, 37, 'Neck : Round Neck |\r\nSleeve Style : Puff Sleeves |\r\nFit : Regular |\r\nFabric : Pure Cotton |\r\nType : Regular Top |', '6', '2', '7j7fvxxb.png', '5h2vv3ji.png', 'p35dyfub.png', 'xrk9nt5a.png', ' SAVADIKAFASHION'),
(73, 'Women A-line Beige Dress', 'Tokyo Talkies ', 899, 2199, -145, 'Color : Beige |\r\nLength : Midi/Calf Length |\r\nFabric : Cotton Blend |\r\nPattern : Printed |\r\nIdeal For : Women |\r\nType : A-line |', '6', '2', 'yzs506wa.png', 'nmwgd1en.png', 'sp2nhewm.png', 'x4zrueh8.png', ' HSAtlastradeFashion'),
(74, 'Women Bodycon Dark Green Dress', 'Rosery Paris ', 4999, 2999, 40, 'Color : Dark Green |\r\nLength : Midi/Calf Length |\r\nFabric : Polyester |\r\nPattern : Solid |\r\nIdeal For : Women |', '6', '2', 'xcv38i94.png', '7jpty25j.png', 'btekp0tl.png', '033107v7.png', 'BLCKD'),
(75, 'Women Black Heels Sandal', 'Elle ', 2999, 1299, 57, 'Type : Heels |\r\nType for Heels : Kitten Heel |\r\nHeel Pattern : Solid |\r\nUpper Pattern : Solid |\r\nColor : Black |', '7', '2', '2f8zvdgl.png', 'qhneyzpm.png', 'anqc2jg9.png', 'wrymtkco.png', 'Global fashion, DL'),
(76, 'Party Wear Stylish College Casual Sneakers Shoes Sneakers For Women  (Grey, White)', 'Shozie ', 999, 799, 20, 'Product Details\r\n\r\nColor : Grey, White |\r\nOuter material : Synthetic |\r\nModel name : Party Wear Stylish College Casual Sneakers Shoes |\r\nIdeal for : Women |\r\nOccasion : Casual |', '7', '2', 'dhgfx1dk.png', '1g6te8fu.png', 'p3clen7v.png', 'fr3ruw7h.png', ''),
(77, 'Women Pink Wedges Sandal', 'SHOETOPIA ', 1299, 799, 38, 'Type : Wedges |\r\nType for Heels : Platform Heel |\r\nHeel Pattern : Solid | \r\nUpper Pattern : Solid | \r\nClosure : Back Strep |\r\nColor : Pink |\r\nNet Quantity : 1 |', '7', '2', 'ib3b6y9k.png', 'ambz4i76.png', 'dnpa3s1n.png', '7se6vw98.png', 'SHOETOPI'),
(78, 'Women Pink Wedges Sandal', 'SHOETOPIA ', 1499, 789, 47, 'Type : Wedges |\r\nType for Heels : Wedges |\r\nColor : Pink |\r\nNet Quantity : 1 |\r\nRemovable Insole : No |', '7', '2', 'qxpwgm0o.png', '38c8l94r.png', '97l3ypv5.png', '2o59udih.png', ' SHOETOPI'),
(79, 'Comfortable Stylish and Trending Colorful Printed Flip Flops sliders For Women Women Slides  (Black 5)', 'Rasambh ', 1199, 679, 43, 'Color : Black |\r\nIdeal For : Women |\r\nSales Package : 1 pair |\r\nCare instructions : Hand wash |', '7', '2', '6gw9vwtj.png', 'e1girp5p.png', 'gwv1yir8.png', 'zr9lzibe.png', ' kansalfootwear1'),
(80, 'Women Gold Flats Sandal', 'SHOETOPIA', 899, 599, 33, 'Type : Flats |\r\nHeel Pattern : Solid |\r\nUpper Pattern : Solid |\r\nClosure : Slip On |\r\nType for Flats : Slip-on |\r\nColor : Gold |\r\nNet Quantity : 1 |', '7', '2', 'y7l7ckok.png', 'fnd8tqhe.png', 'f86otcyj.png', 'tdz0qasv.png', ' SHOETOPI'),
(81, 'Women Gold Heels Sandal', 'Elle', 1299, 599, 54, 'Type : Heels |\r\nType for Heels : Block Heel |\r\nHeel Pattern : Solid |\r\nUpper Pattern : Solid |\r\nColor : Gold |\r\nNet Quantity : 1 |\r\nRemovable Insole : No |\r\nPack of : 1 |', '7', '2', 'kxii4g8d.png', 'tewztpj9.png', '9evoqurn.png', 't2ir299s.png', ' Global fashion, DL'),
(82, 'Women Copper, Brown Wedges Sandal', 'action ', 1999, 999, 50, 'Type : Wedges |\r\nType for Heels : Wedges |\r\nSecondary Color : Brown |\r\nUpper Pattern : Clear/Transparent, Bling, Embellished, Metallic, Holographic |\r\nClosure : Slip On |', '7', '2', 'csu7xe2e.png', '9gdv3zzo.png', 'wbil1wjn.png', 'csu7xe2e.png', ' ActionEStore'),
(83, 'Firefly-09 Grey Gym,Sports,Walking,Stylish Running Shoes For Women  (Grey)', 'asian ', 2999, 2399, 20, 'Color : Grey |\r\nInner material : Soft breathable fabric lining which prevents sweating |\r\nOuter material : Mesh |\r\nModel name : Firefly-09 Grey Gym,Sports,Walking,Stylish |\r\nIdeal for : Women |\r\nOccasion : Sports |\r\nType For Sports : Running Shoes |\r\nNet ', '7', '2', 'tsoyz5gq.png', '1a41dsth.png', 'o31syzp5.png', 'g2fu8y4h.png', 'Asianshoe'),
(84, 'Boys Festive & Party, Wedding Kurta and Pyjama Set  (Red Pack of 1)', 'NFC CREATION ', 2999, 1299, 57, 'Brand : NFC CREATION |\r\nStyle Code : KODOM FUL_244_RED_|\r\nSize : 6 - 12 Months |\r\nBrand Color : RED |\r\nIdeal For : Boys |\r\nLabel Size : 16 |\r\nType : Kurta and Pyjama Set |', '9', '3', 'o13cu33g.png', 'p12vjq68.png', 'ka9to37t.png', '50uzd3on.png', 'NFCcreation'),
(85, 'Girls Wedding Kurta and Palazzo Set  (Purple Pack of 1)', 'Dhvra Fashion ', 1999, 1999, 0, 'Brand : Dhvra Fashion |\r\nStyle Code : PARROT_24 |\r\nSize : 7 - 8 Years |\r\nBrand Color : PURPLE |\r\nIdeal For : Girls |\r\nLabel Size : 28 |', '9', '3', 'pxboo3md.png', 'nbgpo8yt.png', '73lj4yb4.png', '1tjfdy85.png', ' Dhvra Fashion'),
(86, 'Boys Wedding Kurta and Churidar Set  (Green Pack of 1)', 'TRUST OUS ', 2999, 1299, 57, '', '9', '3', 'uu6at9q1.png', 'as5o48qa.png', '3dwhue6b.png', 'jijc97de.png', ' TATHASTU13'),
(87, 'Girls Festive & Party Kurta, Pyjama & Dupatta Set  (Purple Pack of 1)', 'Raithan ', 2659, 999, 62, 'Brand : Raithan |\r\nStyle Code : KidsPurpal |\r\nSize : 13 - 14 Years |\r\nBrand Color : Purpal |\r\nIdeal For : Girls |', '9', '3', 'oajidhy8.png', '1ibg2r1l.png', '5xzoxu46.png', 'h4ijiq9x.png', 'Raithanfab'),
(88, 'Boys Festive & Party, Wedding Kurta and Pyjama Set  (Blue Pack of 1)', 'bitteR ', 2499, 699, 72, 'Brand : bitteR |\r\nStyle Code : Mirror Kurta With Pajama |\r\nSize : 14 - 15 Years |\r\nBrand Color : Blue |\r\nIdeal For : Boys |\r\nLabel Size : 18 |', '9', '3', '58xfvl5t.png', 'y9w8n6xd.png', 'njdqiz1u.png', '58xfvl5t.png', 'RangeReadyToWear'),
(89, 'Girls Festive & Party, Wedding Kurta and Dupatta Set  (Black Pack of 1)', 'Fashion Dream ', 4999, 1999, 60, 'Brand : Fashion Dream |\r\nStyle Code : GMD0016-BLK |\r\nSize : 11 - 12 Years |\r\nBrand Color : BLACK |\r\nIdeal For : Girls |\r\nLabel Size : 36 |\r\nType : Kurta and Dupatta Set |', '9', '3', 'cmhwb7hg.png', '1i573zgm.png', 'muzpd3yq.png', 'fa5a5fhh.png', ' FashionDream'),
(91, 'Boys Festive & Party Kurta and Pyjama Set  (Dark Blue Pack of 1)', 'Lilpicks ', 2199, 689, 69, 'Brand : Lilpicks |\r\nStyle Code : LPBKTS1728 |\r\nSize : 7 - 8 Years |\r\nBrand Color : Blue Golden |\r\nIdeal For : Boys |\r\nLabel Size : 7-8Y |\r\nType : Kurta and Pyjama Set |', '9', '3', '0s7k33v9.png', '5oaikpyk.png', 'dbscs1gr.png', '2pgdmkae.png', 'MENSABRANDS'),
(92, 'Girls Festive & Party Kurta and Palazzo Set  (Green Pack of 1)', 'Fashion Dream ', 3999, 999, 75, 'Brand : Fashion Dream |\r\nStyle Code : TS.GSET0022-RAMA |\r\nSize : 5 - 6 Years |\r\nBrand Color : RAMA |\r\nIdeal For : Girls |\r\nLabel Size : 24 |\r\nType : Kurta and Palazzo Set |', '9', '3', 'dwh6llye.png', '5zvwa36k.png', 'yikz87up.png', 'swn7vgea.png', 'Fashion Dream '),
(93, 'Slip-on Flats For Boys  (Orange)', 'Mitansh ', 799, 399, 50, 'Size by Age :\r\n18-24 MONTHS (6C)\r\n2-2.5 YEAR (7C)\r\n2.5-3 YEAR (8C)\r\n3-3.5 YEAR (9C)\r\n3.5-4 YEAR (10C)\r\n4-4.5 YEAR (11C)\r\n4.5-5 YEAR (12C)\r\n5-5.5 YEAR (13C)\r\n5.5-6 YEAR (14)', '12', '3', 'm68cho3b.png', 'shnrqp5v.png', '7qipa1iq.png', 'shnrqp5v.png', ' Mitanshfootwear1986'),
(94, 'Sling Back Clogs For Boys  (Grey)', 'MGRS ', 1599, 698, 56, 'Size by Age :\r\n(12C)\r\n2-2.5 YEAR (7C)\r\n2.5-3 YEAR (8C)\r\n3-3.5 YEAR (9C)\r\n3.5-4 (10C)\r\n4-4.5 (11C)', '12', '3', 'tqmy57zn.png', 'll8mn8kg.png', 's6uhk9aw.png', 'gcogycyo.png', ' MRSNATURALFASHION'),
(95, 'Slip-on Flats For Girls  (Pink)', 'Purple Flamingo ', 1399, 599, 57, 'Size by Age :\r\n10 - 11 Years (4)\r\n11 - 12 Years (5)\r\n12 - 13 Years (6)\r\n13 - 14 Years (7)\r\n14 - 15 Years (8)\r\n15 - 16 Years (9)', '12', '3', '7utpa7x2.png', 'op2skagq.png', 'e323pyvf.png', 'op2skagq.png', ' Red Flamingo'),
(96, 'Velcro Flats For Girls  (Blue)', 'ONYC ', 1699, 1000, 41, 'Size by Age :\r\n2.5-3 Years (7C)\r\n3-3.5 Years (8C)\r\n3.5-4 Years (9C)\r\n4-4.5 Years (10C)\r\n4.5-5 Years (11C)\r\n5-6 Years (12C)\r\n6-7 Years (13C)\r\n7-8 Years (1)', '12', '3', 'zpuwdlyn.png', 't3ji8npo.png', '1uxl0s4j.png', 'mpa54j7x.png', 'ONYC'),
(97, 'Baby Boys & Baby Girls Casual T-shirt Pyjama  (Black)', 'SBLANER ', 1339, 499, 63, 'Sales Package : One tshirt and pyjama combo |\r\nBrand : SBLANER |\r\nStyle code : SBL002 |\r\nSize : 1 - 2 Years |\r\nBrand color : BLACK |', '10', '3', 'y9ygw9ff.png', '20u74vnd.png', 'sihu7qpb.png', '0wlpnraj.png', ' SBLGARMENTS'),
(98, 'Baby Boys & Baby Girls Casual T-shirt Pyjama  (White)', 'V-MART ', 879, 349, 60, 'size :\r\n0 - 6 Months\r\n6 - 12 Months\r\n12 - 18 Months\r\n18 - 24 Months', '10', '3', '5z0n56fw.png', 'cpczb0xq.png', 't9tyyu85.png', '0ezzdt7i.png', 'VMartRetail'),
(99, 'Baby Boys Party(Festive) Jacket Trouser  (Maroon)', 'Colabo Fashion ', 1899, 999, 47, 'Size :\r\n1 - 2 Years\r\n2 - 3 Years\r\n3 - 4 Years\r\n4 - 5 Years\r\n5 - 6 Years', '10', '3', 'kt7w54ig.png', 'hdzdv22j.png', 'w3ggsm0k.png', '9u1digt3.png', 'HayoshaKidsTrends'),
(100, 'Baby Boys Casual T-shirt Pant  (Pink)', 'Shirazi Kids ', 1599, 879, 45, 'Size :\r\n9 - 12 Months\r\n1 - 2 Years\r\n12 - 18 Months\r\n2 - 3 Years', '10', '3', 'sxgq7nqf.png', 'tuyc7yhg.png', 'agw5v43d.png', 'qjupmc8i.png', ''),
(101, 'Baby Boys Casual T-shirt Shorts  (Red)', 'TOONYPORT ', 999, 499, 50, 'Size :\r\n6 - 12 Months\r\n12 - 18 Months\r\n18 - 24 Months', '10', '3', 'owbxt5fs.png', 'ncr9clba.png', 'tmi3pxgd.png', 'rn96866t.png', ' DEVANSH RETAIL'),
(102, 'Baby Boys & Baby Girls Casual T-shirt Shorts  (Dark Blue)', 'CUTOPIES ', 999, 399, 60, 'Size :\r\n3 - 6 Months\r\n6 - 9 Months\r\n', '10', '3', 'y8td5ld9.png', '7pfdnds9.png', 'gebiy4tx.png', 'gmyj7eqh.png', ''),
(103, 'Baby Boys & Baby Girls Casual Dungaree T-shirt  (Pink)', 'APEXTRADINGHUB ', 1299, 699, 46, 'Size :\r\n0 - 3 Months\r\n0 - 6 Months\r\n3 - 6 Months\r\n6 - 9 Months', '10', '3', 'spwt7jhs.png', 'iovl8u58.png', 'spwt7jhs.png', 'iovl8u58.png', ''),
(104, 'Baby Boys & Baby Girls Mickey Party(Festive) Shorts T-shirt  (White)', 'BLOOD PANTHER ', 1599, 799, 50, 'Size :\r\n1 - 2 Years\r\n18 - 24 Months\r\n2 - 3 Years\r\n3 - 4 Years\r\n4 - 5 Years\r\n5 - 6 Years', '10', '3', 'zzbizci8.png', 'voufowhx.png', 'd5mxzd4u.png', 'fp133ge5.png', ''),
(105, 'Liberty Leap7x Kids TURBO-1E', 'Liberty', 2999, 1299, 57, 'Material type : Leather |\r\nClosure type : Hook & Loop |\r\nHeel type : Flat |\r\nWater resistance level : Not Water Resistant |\r\nSole material :Ethylene Vinyl Acetate |\r\nStyle: Walking |\r\n Country of Origin: India |', '12', '3', 'pf1uoxgc.png', 'bgx5skm4.png', '80yscsha.png', '6s19ixl2.png', ''),
(106, 'BlackBeatle latest women’s kitten flip flops', ' BLACKBEATLE', 1749, 1199, 31, 'Material type : Polyurethane, Polyvinyl Chloride |\r\nClosure type : Slip On |\r\nHeel type : Flat |\r\nWater resistance level: Waterproof |\r\nStyle : Flip Flop|\r\nStrap type : Strapless|', '12', '3', 'rzbeilp8.png', 'ruspyl37.png', 'abn4q504.png', 'admayhnt.png', 'shoesravinder'),
(107, 'INSTABUYZ Baby Boys & Baby Girls Shoes for Boys & Girls, Infant Shoes for Newborn, First Walking Baby Shoe (6-9 Months) Blue', ' INSTABUYZ ', 899, 599, 33, 'Material type : Cotton|\r\nClosure type : Pull-On |\r\nHeel type : Flat|\r\nWater resistance level: Not Water Resistant |\r\nSole material: Cotton|\r\nStyle : Walking|\r\nCountry of Origin : India |', '12', '3', '7lyex6wc.png', '7cb8qtaf.png', 'zchhb6vo.png', '10zlshrr.png', ' INSTABUYZ '),
(108, 'EVISCLUE Children s Multicolor Cute Panda Face Cotton and Silicon Rubber base Shoes Cum Socks, Antislip Soft Sole Kid s Shoes, Breathable Socks Shoes For Baby (Multicolor)', 'EVISCLUE', 1499, 869, 42, 'Material composition : Cotton+rubber |\r\nCare instructions : Hand Wash Only |\r\nCountry of Origin : China |\r\n', '12', '3', 'mfaebrdw.png', 'ibv8p97y.png', '1e03jr14.png', 'jodk3c2h.png', ' RetailNet'),
(110, 'Walking Shoes For Men  (White)', 'hrx', 4509, 1299, 71, 'Color\r\nWhite\r\nInner material\r\nmemory-foam\r\nOuter material\r\nSynthetic Leather\r\nIdeal for\r\nMen\r\nOccasion\r\nSports\r\nType For Sports\r\nWalking Shoes\r\nSole material\r\nEVA\r\nClosure\r\nLace-Ups\r\nWeight\r\n499 g (per single Shoe) - Weight of the product may vary dependi', '3', '1', 'svhs3qqu.png', 'v2i6dnwe.png', 'fzhj9545.png', 'm5cledla.png', 'hrx'),
(111, 'Boston-01 Chunky Sneakers,Loafers,Walking Shoes Sneakers For Men  (White)', 'asian', 2899, 1199, 59, 'Color\r\nWhite\r\nInner material\r\nSoft breathable fabric lining which prevents sweating\r\nOuter material\r\nSynthetic\r\nModel name\r\nBoston-01 Chunky Sneakers,Loafers,Walking Shoes\r\nIdeal for\r\nMen\r\nOccasion\r\nCasual\r\nType For Casual\r\nSneakers\r\nNet Quantity\r\n1\r\nSole', '3', '1', 'a933tr1o.png', '0rewumaz.png', 'biijnlig.png', 'ho69rndq.png', 'asianpvtltd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id`, `product_name`, `price`, `name`, `email`, `phone`, `pid`, `status`) VALUES
(2, 'Beige Sherwani Suit With Bold Zardozi Work', 14999, 'ram', 'hjukilk@gmail.com', '7965323546', '410ed968014d46608a51f004795c36f9', 'pending'),
(3, 'Flamingo Pink Chikankari Embroidered Kurta Set', 3499, 'goldy', 'sreofub943@gonetor.com', '9456931279', '8bbf55d456e04cedaa6d15cc0df8532d', 'complete'),
(4, 'Printed Georgette Stitched Flared/A-line Gown  (Pink)', 1999, 'ram', '2d46ud20ka@zipcatfish.com', '9456931279', '5e62abd59d5941b5be98debcbc464459', 'complete'),
(5, 'Beige Sherwani Suit With Bold Zardozi Work', 14999, 'sourav', 'mvov38d4y1@tippabble.com', '9456931279', '0ac8bf40c6c84f618d8cae7b00477fbe', 'complete'),
(6, 'Men Single Breasted - 2 button Solid Suit', 1599, 'ram', 'sreofub943@gonetor.com', '8264804920', '4869848a9c7b45699a580a75d4776e89', 'complete'),
(7, 'Beige Sherwani Suit With Bold Zardozi Work', 14999, 'goldy', 'dqpzv5p1ap@tippabble.com', '7965323546', '4f53d2a3d78345219c8ca8383d3a7de4', 'complete'),
(9, 'Men Solid Black Track Pants', 1399, 'ravinder', 'y3npcq587l@sfolkar.com', '7965323546', '87903fa055fa49df88daaa1dda6c165a', 'complete'),
(11, 'Flamingo Pink Chikankari Embroidered Kurta Set', 3499, 'goldy', '2d46ud20ka@zipcatfish.com', '7965323546', '7062646dc69b4eb6b95b669dae5c9139', 'complete'),
(12, 'Party Wear Stylish College Casual Sneakers Shoes Sneakers For Women  (Grey, White)', 799, 'mukul', 'sreofub943@gonetor.com', '7965323546', '18e2edb51c9840e3875fecdac718e3c2', 'complete'),
(13, 'Beige Sherwani Suit With Bold Zardozi Work', 14999, 'sourav', 's4qljti6v8@zlorkun.com', '7965323546', '8da4f2219f804b678ae2c97d08763755', 'complete'),
(14, 'Beige Sherwani Suit With Bold Zardozi Work', 14999, 'sourav', 's4qljti6v8@zlorkun.com', '7965323546', 'ebf157a5b3784b3bacad26c6786c8980', 'complete'),
(15, 'Flamingo Pink Chikankari Embroidered Kurta Set', 3499, 'sourav', 's4qljti6v8@zlorkun.com', '7965323546', '14c05d17c4044f428ac90333cfefd76e', 'pending'),
(16, 'Coral Blue Floral Art Nouveau Patterned Bridal Lehenga', 25999, 'tanuja', 'skjikln@gmail.com', '7965323546', '26aac0728784491397e5a01059a8d45f', 'pending'),
(17, 'Printed, Geometric Print, Embroidered, Embellished Bandhani Georgette Saree  (Green, White)', 2999, 'sourav', 'skjikln@gmail.com', '7965323546', '509d288cd8b54aaf94e60c61898822bf', 'pending'),
(18, 'Flamingo Pink Chikankari Embroidered Kurta Set', 3499, '', '', '', 'bdf019d6542c431d8fc126818a86453c', 'pending'),
(19, 'Printed Georgette Stitched Flared/A-line Gown  (Pink)', 1999, 'ravinder', 'y3npcq587l@sfolkar.com', '9456931279', 'a7bd37895a7344e5af3da635fe2c6cb0', 'pending'),
(20, 'Printed Georgette Stitched Flared/A-line Gown  (Pink)', 1999, 'ravinder', 'y3npcq587l@sfolkar.com', '9456931279', 'dd0b10b63b6944c3b888aaa5fadfcb7c', 'pending'),
(21, 'Printed Georgette Stitched Flared/A-line Gown  (Pink)', 1999, 'ravinder', '2d46ud20ka@zipcatfish.com', '7965323546', '876cff837f4e4119986572e9d7172e06', 'pending'),
(22, 'Flamingo Pink Chikankari Embroidered Kurta Set', 3499, 'mukul', '2d46ud20ka@zipcatfish.com', '7965323546', 'ab85a04329fe458a99e0f45281e50391', 'pending'),
(23, 'Women Viscose Rayon Kurta Patiala Dupatta Set', 799, '', '', '', 'ba3f96e79d18402ea58d3c8c711e34ac', 'pending'),
(24, 'Printed Georgette Stitched Flared/A-line Gown  (Pink)', 1999, 'ravinder', 'sreofub943@gonetor.com', '7965323546', '6c599b505e9346e1894bf498bcfc7d9c', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tb_subcategory`
--

CREATE TABLE `tb_subcategory` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_subcategory`
--

INSERT INTO `tb_subcategory` (`sub_id`, `sub_name`, `cat_id`, `description`) VALUES
(1, 'Mens top wears', 1, 'all shirts , t-shirts,jacket'),
(2, ' Mens Bottom Wear', 1, 'all pants , pajamas, fromal pants ,jean'),
(3, ' Mens foot wear', 1, 'shoes, sleeper, snickers'),
(4, 'coats, blazzer,Jackets', 1, 'coat, blazzer etc.'),
(5, ' womens ethnic_wear', 2, 'sarees ,kurtas,lehnenga'),
(6, ' womens western_wear', 2, 'jean,short, skirts'),
(7, ' womens foot_wear', 2, ''),
(9, 'kids ethnic_wear', 3, ''),
(10, 'kids combo_sets', 3, ''),
(12, 'kids foot_wear', 3, ''),
(13, ' men etnic wears', 1, 'kurtas pajama,sheervani,and indian dresses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_userdata`
--

CREATE TABLE `tb_userdata` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `phone_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_userdata`
--

INSERT INTO `tb_userdata` (`id`, `user_name`, `email`, `password`, `gender`, `phone_no`) VALUES
(1, 'goldy kala', 'goldykala20401@gmail.com', 'goldy123', 'male', '+918264804920'),
(2, 'balram', 'goldykala20401@gmail.com', 'goldy123', 'male', '+918264804920'),
(3, 'goldy kala', 'goldykala20401@gmail.com', 'goldy123', 'male', '+918264804920'),
(4, 'ravinder singh', 'rawinder680@gmail.com', 'rav123', 'male', '+91 8699147585'),
(5, 'sourav', 'sourav06062003@gmail.com', 'Sou@123', 'male', '7696358762'),
(6, 'abhinandan', 'abhibadyal2004@gmail.com', 'abhi123', 'male', '+91 9501535970'),
(7, 'tanuja ', 'tanu23@gmail.com', 'tanu123', 'female', '9478562135'),
(12, 'user', 'e5qkzhc2fu@tippabble.com', '123', 'male', '6594235896'),
(13, 'balram', 'e5qkzhc2fu@tippabble.com', '123', 'male', ''),
(14, 'balram', 'xuvmyfmxdl@somelora.com', '123', 'male', '7965323546'),
(15, 'balram', 'xuvmyfmxdl@somelora.com', '', 'male', '7965323546');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tb_detail`
--
ALTER TABLE `tb_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_subcategory`
--
ALTER TABLE `tb_subcategory`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `tb_userdata`
--
ALTER TABLE `tb_userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_detail`
--
ALTER TABLE `tb_detail`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_subcategory`
--
ALTER TABLE `tb_subcategory`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_userdata`
--
ALTER TABLE `tb_userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
