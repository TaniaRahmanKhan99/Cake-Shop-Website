-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 06:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone`, `address`, `password`) VALUES
(3, 'admin3', 'admin3@gmail.com', '011111', 'Dhaka', '1234'),
(4, 'admin4', 'admin4@gmail.com', '112233', 'Dhaka', 'admin4'),
(5, 'Admin5', 'admin5@gmail.com', '012345', 'Dhaka', 'admin5');

-- --------------------------------------------------------

--
-- Table structure for table `babycakes`
--

CREATE TABLE `babycakes` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` varchar(255) NOT NULL,
  `prod_image` varchar(255) NOT NULL,
  `prod_description` text NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `h_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `babycakes`
--

INSERT INTO `babycakes` (`prod_id`, `prod_name`, `prod_price`, `prod_image`, `prod_description`, `h_name`, `h_price`) VALUES
(1, 'Baby Pistach-yo and Saffron Cake', 'AED 38.00', 'babycake/e682b89941.jpg', 'A pocked sized delicious pistachio cake with saffr...', 'cake28', '38'),
(2, 'Baby Red Velvet Crunch Cake with Oreo', 'AED 38.00', 'babycake/af4e84ced4.jpg', 'A pocket-size version of our irresistible red velv...', 'cake29', '38'),
(3, 'Baby Dulce de Lotus Cake', 'AED35.00', 'babycake/17da96d994.jpg', 'A mini combo of chocolate, brown sugar and vani...', 'cake30', '35'),
(4, 'Baby Choco Loco Cake', ' AED 38.00', 'babycake/3e5152d6ac.jpg', 'Our moist and decadent chocolate cake as a mini ve...', 'cake31', '38'),
(5, 'Baby Carrot Cake', 'AED 35.00', 'babycake/6152926e45.jpg', 'A pocket sized version of the best carrot cake in ...', 'cake32', '35'),
(6, 'Baby Naked Strawberry Shortcake', 'AED 38.00', 'babycake/85287e74f8.jpg', 'A mini version of our absolutely delicious and bea...', 'cake33', '38'),
(7, 'Baby Mocha Choca Cheesecake', 'AED 35.00', 'babycake/87fbebdf55.jpg', 'A pocket sized cake made of layers of pure decaden...', 'cake34', '35'),
(8, 'Baby White Velvet Party Cake', 'AED 33.00', 'babycake/ae13958ad1.jpg', 'Inspired by pure nostalgia, this mini Funfetti cak...\r\n', 'cake35', '33'),
(9, 'Baby Whipped Lemon and Raspberry Cake', 'AED 35.00', 'babycake/51e1deb441.jpg', 'A pocked sized delicious and refreshing cake that ...', 'cake36', '35');

-- --------------------------------------------------------

--
-- Table structure for table `brownies`
--

CREATE TABLE `brownies` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` varchar(255) NOT NULL,
  `prod_image` varchar(255) NOT NULL,
  `prod_description` text NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `h_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brownies`
--

INSERT INTO `brownies` (`prod_id`, `prod_name`, `prod_price`, `prod_image`, `prod_description`, `h_name`, `h_price`) VALUES
(1, 'Best Fudgin Brownie', 'AED 17.00', 'brownies/8cf049bd52.png', 'A perfect crisp crackly top, super fudgy center, c...', 'cake37', '17'),
(2, 'Peanut Butter Vegan Brownie', 'AED20.00', 'brownies/c3ce637c6e.jpg', 'A fudgy melt-in-your-mouth chocolate brownie to...', 'cake38', '20'),
(3, 'Crazy Cake', 'AED 17.00', 'brownies/41f9a17365.jpg', 'Perfect fudgy squares of a vegan chocolate brow...', 'cake39', '17'),
(4, 'Nutella Brownies', 'AED 20.00', 'brownies/c978bb3298.jpg', 'Chewy, gooey and creamy in all the right places wi...', 'cake40', '20'),
(5, 'Vegan Brownie Box', 'AED 70.00', 'brownies/5a051593c4.jpeg', 'A box of our best-selling vegan brownies!', 'cake41', '70'),
(6, 'Caramel Vegan Brownie', 'AED 20.00', 'brownies/40956dce2f.jpeg', 'A fudgy melt-in-your-mouth chocolate brownie toppe...', 'cake42', '20'),
(7, 'Lotus Vegan Brownie', 'AED 20.00', 'brownies/17c233d78e.jpg', 'A fudgy melt-in-your-mouth c...', 'cake43', '20');

-- --------------------------------------------------------

--
-- Table structure for table `cakes`
--

CREATE TABLE `cakes` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` varchar(255) NOT NULL,
  `prod_image` varchar(255) NOT NULL,
  `prod_description` text NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `h_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cakes`
--

INSERT INTO `cakes` (`prod_id`, `prod_name`, `prod_price`, `prod_image`, `prod_description`, `h_name`, `h_price`) VALUES
(1, 'Whipped Lemon and Raspberry Cake', 'AED220.00', 'cakes/aadb40cd83.jpg', 'This cake is the perfect balance of sweet raspberr...', 'cake13', '220'),
(2, 'Pistach-yo and Saffron Cake', 'AED 230.00', 'cakes/2eb2fcccb4.jpg', 'This rustic-chic layered pistachio cake is full of...', 'cake15', '230'),
(3, 'Red Velvet Crunch Cake with Oreo', 'AED 215.00', 'cakes/dcdc0a7f72.jpg', 'Our irresistible best-selling cake. It is a fluff...', 'cake17', '215'),
(4, 'NAKED STRAWBERRY SHORTCAKE', 'AED 290.00', 'cakes/ad7b182625.jpg', 'An absolutely delicious and beautifully rustic, fl...', 'cake18', '290'),
(5, 'White Velvet Party Cake', 'AED205.00', 'cakes/fd1a2b8d74.jpg', 'Inspired by pure nostalgia, this Funfetti cake tas...', 'cake19', '205'),
(6, 'Blueberry Cheesecake', 'AED 265.00', 'cakes/c5ffc49e1e.jpg', 'A silky smooth and creamy New York style cheesecak...', 'cake20', '265'),
(7, 'Mocha Choca CheeseCake', 'AED 285.00', 'cakes/41058149cd.jpg', 'Layers of pure decadence -a moist chocolate sponge...', 'cake21', '285'),
(8, 'Strawberry Cheesecake', 'AED 265.00', 'cakes/2a67d2b1c4.jpg', 'A silky smooth and creamy New York style cheesecak...', 'cake22', '265'),
(9, 'Carrot Cake', 'AED 190.00', 'cakes/51ac754c7c.jpg', 'This is the best carrot cake in town. A definite c...', 'cake23', '190'),
(10, 'Choco Loco Cake', 'AED 250.00', 'cakes/44b4fd88ea.jpg', 'It took us a while to get this chocolate cake just...\r\n', 'cake24', '250'),
(11, 'Kunafeh Cheesecake', 'AED 130.00', 'cakes/e4e18cdbb5.jpg', 'Here’s our famous hybrid dessert, all the flavor...', 'cake25', '130'),
(12, 'Ramadan Kareem Moon Cake', 'AED 250.00', 'cakes/75152def11.jpg', 'A delicious chocolate cake designed especially for...', 'cake26', '250'),
(13, 'Sticky Date Cake', 'AED 200.00', 'cakes/0617cf5d0d.jpg', 'We have transformed the classic British dessert into...', 'cake27', '200'),
(14, 'Sticky Date Cake', 'AED 200.00', 'cakes/06a405aaa6.jpg', 'We have transformed the classic British dessert into...', 'cake14', '200'),
(15, 'Lotus and Honey Delight', 'AED 245.00', 'cakes/9ab8f46fdd.jpg', 'Four fluffy honey cake layers and filled with hone...', 'cake16', '245');

-- --------------------------------------------------------

--
-- Table structure for table `cookies`
--

CREATE TABLE `cookies` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` varchar(255) NOT NULL,
  `prod_image` varchar(255) NOT NULL,
  `prod_description` text NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `h_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cookies`
--

INSERT INTO `cookies` (`prod_id`, `prod_name`, `prod_price`, `prod_image`, `prod_description`, `h_name`, `h_price`) VALUES
(1, 'Reese Peanut Butter', 'AED 17.00', 'cookies/c2455f4337.jpg', 'A melt in your mouth cookie dough mixed with white...', 'cake44', '17'),
(2, 'White Chocolate Whisk', 'AED 18.00', 'cookies/8b2b4944ce.jpg', 'A chocolate lover’s dream cookie! It is soft and...', 'cake45', '18'),
(3, 'Smores Cookie', 'AED 18.00', 'cookies/0c2c418127.jpg', 'These delicious, chewy and gooey Smores cookies a...', 'cake46', '18'),
(4, 'Red Velvet Secret with Oreo', 'AED 18.00', 'cookies/a696e2ffc3.jpg', 'We’ve turned our best-selling cake into a cookie...', 'cake47', '18'),
(5, 'Vegan Choco Chunk Espresso Cookie', 'AED 21.00', 'cookies/202a0d77f7.jpeg', 'We have taken our top selling choco chunk vegan cook...', 'cake48', '21'),
(6, 'Chewy Chocolate Melts', 'AED 22.00', 'cookies/02c511c813.jpg', 'Delicately crunchy on the outside and soft and che...', 'cake49', '22'),
(7, 'Cookie Box', 'AED 100.00', 'cookies/9a1f906db5.jpg', 'An awesome bundle at a great deal! Choose a total ...', 'cake50', '100');

-- --------------------------------------------------------

--
-- Table structure for table `create_cake`
--

CREATE TABLE `create_cake` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `flavors` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `suggestion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `create_cake`
--

INSERT INTO `create_cake` (`id`, `name`, `email`, `phone`, `location`, `flavors`, `size`, `payment`, `suggestion`) VALUES
(1, 'abc', 'abc@gmail.com', '012345', 'Dhaka', '1', '20', '1', 'No'),
(2, 'abc', 'abc@gmail.com', '012345', 'Dhaka', '12', '32', '2', 'Eggless Cake'),
(5, 'abc', 'abc@gmail.com', '012345', 'Dhaka', '7', '32', '1', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `cupcake`
--

CREATE TABLE `cupcake` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` varchar(255) NOT NULL,
  `prod_image` varchar(255) NOT NULL,
  `prod_description` text NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `h_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cupcake`
--

INSERT INTO `cupcake` (`prod_id`, `prod_name`, `prod_price`, `prod_image`, `prod_description`, `h_name`, `h_price`) VALUES
(2, 'Set 9 Vegan Cupcakes - 24 hours notice', 'AED216.00', 'cupcakes/f1faa7a2b5.jpg', 'Customize your own vegan cupcake set for any occas...', 'cake1', '216'),
(3, 'Set 16 Vegan Cupcakes - 24 hours notice', 'AED384.00', 'cupcakes/91bb661a36.jpg', 'Customize your own vegan cupcake set for any occas...', 'cake2', '384'),
(4, 'Set of 16 Cupcakes - 24 hours notice', 'AED 352.00', 'cupcakes/29f83b851d.jpg', 'Customize your own cupcake set for any occasion! ...', 'cake3', '352'),
(5, 'Set of 9 Cupcakes - 24 hours notice', 'AED 198.00', 'cupcakes/ebc6b1ef52.jpg', 'Customize your own cupcake set for any occasion! ...', 'cake4', '198');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `position` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `phone`, `address`, `position`, `photo`) VALUES
(9, 'abc', 'abc@gmail.com', '011111', 'Dallas', 'PHP Developer', '../upload/employee/2e2336af2f.jpg'),
(10, 'employee1', 'employee1@gmail.com', '012345', 'Tokyo', 'Software Engineer', '../upload/employee/f0082ceed3.png'),
(12, 'employee3', 'employee3@gmail.com', '012345', 'Paris', 'Laravel Developer', '../upload/employee/39acd1299a.png'),
(13, 'abc2', 'abc2@gmail.com', '012345', 'Hong Kong', 'React Developer', '../upload/employee/c87ff0de67.png'),
(14, 'abc3', 'abc3@gmail.com', '012345', 'Istanbul', 'Web Developer', '../upload/employee/86ea480c41.png');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `f_email` varchar(255) NOT NULL,
  `f_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_name`, `f_email`, `f_message`) VALUES
(1, 'abc', 'abc@gmail.com', 'Cupcakes were moist and flavorful.'),
(2, 'user', 'user@gmail.com', 'Impressive, moist, and flavorful with the right amount of sweetness.'),
(3, 'user', 'user@gmail.com', 'So flavorful & tasty.'),
(4, 'user', 'user@gmail.com', 'Amazing! Picked up a 4 pack of cupcakes and they were moist and flavorful. No complaints. The young lady at the counter was also very pleasant.'),
(5, 'user', 'user@gmail.com', 'I love this place! They have some of the best cupcakes I’ve ever had. I picked up some for my birthday & when I’m down here in the area.'),
(6, 'abc', 'abc@gmail.com', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `icecream`
--

CREATE TABLE `icecream` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` varchar(255) NOT NULL,
  `prod_image` varchar(255) NOT NULL,
  `prod_description` text NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `h_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `icecream`
--

INSERT INTO `icecream` (`prod_id`, `prod_name`, `prod_price`, `prod_image`, `prod_description`, `h_name`, `h_price`) VALUES
(1, 'Cookies Ice Cream Duo', 'AED 120.00', 'icecream/67013d0de8.jpg', 'An awesome bundle at a great deal! Choose a total ...', 'cake5', '120'),
(2, 'Red Velvet Crunch', 'AED 140.00', 'icecream/cbf475d65e.jpg', 'We had to bring our best-selling cake to the freez...', 'cake6', '140'),
(3, 'White Velvet Party', 'AED140.00', 'icecream/4689f5b211.jpg', 'Get a little nostalgic as you savor the flavor of ...', 'cake7', '140'),
(4, 'NKD Strawberry', 'AED140.00', 'icecream/3515f2ef1c.jpg', 'For the strawberry shortcake lovers, we’ve crea...', 'cake8', '140'),
(5, 'Pistach-yo!', 'AED14.00', 'icecream/86b3a3d5d9.jpg', 'The Hulk is not the only thing that’s green and ...', 'cake9', '14'),
(6, 'Red Velvet Crunch', 'AED 140.00', 'icecream/4aa7ae9ca6.jpg', 'We had to bring our best-selling cake to the freez...', 'cake10', '140'),
(7, 'Lotuslicious', 'AED 14.00', 'icecream/940b7d73d3.jpg', 'We love lotus biscoff but don’t take our word fo...', 'cake11', '14'),
(8, 'Mini Ice Cream Bundle', 'AED 56.00', 'icecream/e9352a097a.jpg', 'Choose from the following flavors available and le...', 'cake12', '56');

-- --------------------------------------------------------

--
-- Table structure for table `jars_and_truffles`
--

CREATE TABLE `jars_and_truffles` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` varchar(255) NOT NULL,
  `prod_image` varchar(255) NOT NULL,
  `prod_description` text NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `h_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jars_and_truffles`
--

INSERT INTO `jars_and_truffles` (`prod_id`, `prod_name`, `prod_price`, `prod_image`, `prod_description`, `h_name`, `h_price`) VALUES
(1, 'Strawberry Shortcake in a jar', 'AED 26.00', 'jars&truffles/8389505c55.jpg', 'Our refreshing and ever so light strawberry shortc...', 'cake51', '26'),
(2, 'Pink Tiramoo', 'AED 22.00', 'jars&truffles/0dc83aee0f.jpg', 'A coffee kissed pick-me-up dessert! Layers of vani...', 'cake52', '22'),
(3, 'Brownie Mess in a Jar', 'AED 26.00', 'jars&truffles/8f7369cb09.jpg', 'You’ve heard about our famous Nutella brownies�...', 'cake53', '26'),
(4, 'Peanut Butter V Truffles', 'AED 30.00', 'jars&truffles/9e73edb46a.jpeg', 'The perfect combination of peanut butter, maple sy...', 'cake54', '30'),
(5, 'Coco Truffles', 'AED 35.00', 'jars&truffles/c71e9229fe.jpg', 'A rich chocolate vegan truffle mixed and coated wi...', 'cake55', '35'),
(6, 'Whacky Truffles with Oreo', 'AED 38.00', 'jars&truffles/beb8b4935d.jpg', 'Our very own version of the Oreo cookie – yummy ...', 'cake56', '38'),
(7, 'Lotuslicious Truffles', 'AED 35.00', 'jars&truffles/9b9ff572a3.jpg', 'We have taken the delicious lotus biscuit and tran...', 'cake57', '35'),
(8, 'Truffle Bouquet - 24 hours notice', 'AED 140.00', 'jars&truffles/49769ad225.jpg', 'Dozen Sweet Truffles Dipped In Beautiful Pastel Co...', 'cake58', '140'),
(9, '24 Truffle Gift Box', 'AED 225.00', 'jars&truffles/d86c7049f8.jpg', 'An awesome collection of our classic signature Wha...', 'cake59', '225');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`id`, `name`, `email`, `phone`, `address`, `payment`) VALUES
(1, 'abc', 'abc@gmail.com', '012345', 'Madina', 'option1'),
(2, 'abc', 'abc@gmail.com', '012345', 'Madina', 'option1'),
(3, 'abc', 'abc@gmail.com', '012345', 'Abc', 'option2'),
(4, 'abc', 'abc@gmail.com', '012345', 'Abc', 'option2'),
(5, 'abc', 'abc@gmail.com', '012345', 'Test', 'option2'),
(22, 'test', 'test@gmail.com', '011111', 'Test', 'option1'),
(23, 'abc', 'abc@gmail.com', '012345', 'avd', 'Cash On Delivery'),
(24, 'abc', 'abc@gmail.com', '012345', 'afVSR', 'Cash On Delivery'),
(28, 'abc', 'abc@gmail.com', '012345', 'wEFE', 'Cash On Delivery'),
(29, 'abc3', 'abc@gmail.com', '011111', 'Dhaka', 'Cash On Delivery'),
(30, 'abc', 'abc@gmail.com', '012345', 'ssssssssssss', 'Cash On Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` varchar(255) NOT NULL,
  `prod_image` varchar(255) NOT NULL,
  `prod_description` text NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `h_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `prod_price`, `prod_image`, `prod_description`, `h_name`, `h_price`) VALUES
(5, 'Oatmeal Cranberry Muffin Tops - 24 hours notice', 'AED 38.00', 'products/a2ec97587f.jpg', 'These muffin tops are an absolutely delicious star...', 'cake80', '38'),
(6, 'Peanut Butter Banana Bliss Muffin Tops - 24 hours notice', 'AED 38.00', 'products/590bc3463e.jpg', 'A delicious combination of peanut butter and banan...', 'cake81', '38'),
(7, 'Glazed Apple Crumb Muffin Tops - 24 hours notice', 'AED32.00', 'products/4f778ffef8.jpg', 'These apple muffin tops are topped with a cinnamon...', 'cake82', '32'),
(8, 'Coffee Crunch Muffin Tops - 24 hours notice', 'AED 35.00', 'products/8c9c6aa4a7.jpg', 'The classic coffee cake has transformed into conve...', 'cake83', '35'),
(10, 'Blueberry Crumble Muffin Tops - 24 hours notice', 'AED 35.00', 'products/258a7233b4.jpg', 'These muffin tops are loaded with fresh blueberrie...', 'cake84', '35'),
(11, 'Oreogasm', 'AED 28.00', 'products/bfc72ace43.jpg', 'Crack into a chocolate Oreo crust to dig into our ...', 'cake85', '28'),
(13, 'Bananalicious', 'AED 35.00', 'products/ff8158a351.jpg', 'Crack into our homemade graham cracker crust to di...', 'cake87', '35'),
(14, 'Krispy Kunafeh', 'AED 35.00', 'products/0468f23341.jpg', 'Crack into our pistachio crust to experience ta ba...', 'cake88', '35'),
(15, 'Reese Peanut Butter', 'AED 33.00', 'products/7fb1000685.jpg', 'Crack into our homemade graham cracker crust to in...', 'cake89', '33'),
(16, 'Strawberry Swirl', 'AED 33.00', 'products/aa01024aee.jpg', 'Crack into our homemade graham cracker crust to in...', 'cake86', '33');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `review`) VALUES
(1, 'abc', 'abc@gmail.com', 'Taste so good!!'),
(2, 'abc2', 'abc2@gmail.com', 'Moist cake.'),
(3, 'user', 'user@gmail.com', 'so Delicious.'),
(4, 'user', 'user@gmail.com', 'Cupcakes are so good.'),
(5, 'abc', 'abc@gmail.com', 'Your cakes are just awesome!');

-- --------------------------------------------------------

--
-- Table structure for table `sweetbundle`
--

CREATE TABLE `sweetbundle` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` varchar(255) NOT NULL,
  `prod_image` varchar(255) NOT NULL,
  `prod_description` text NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `h_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sweetbundle`
--

INSERT INTO `sweetbundle` (`prod_id`, `prod_name`, `prod_price`, `prod_image`, `prod_description`, `h_name`, `h_price`) VALUES
(1, 'Baby Pistach-yo and Saffron Cake', 'AED 38.00', 'sweetbundle/040ea9d27f.png', 'A pocked sized delicious pistachio cake with saffr...', 'cake70', '38'),
(2, 'Baby Red Velvet Crunch Cake with Oreo', 'AED 38.00', 'sweetbundle/4a1ae6f3c1.jpg', 'A pocket-size version of our irresistible red velv...', 'cake71', '38'),
(3, 'Baby Dulce de Lotus Cake', 'AED 35.00', 'sweetbundle/1957321054.jpg', 'A mini combo of chocolate, brown sugar and vani...', 'cake72', '35'),
(4, 'Baby Choco Loco Cake', 'AED 38.00', 'sweetbundle/318de4b897.jpg', 'Our moist and decadent chocolate cake as a mini ve...', 'cake73', '38'),
(5, 'Baby Carrot Cake', 'AED 35.00', 'sweetbundle/18d5b2d3ec.jpg', 'A pocket sized version of the best carrot cake in ...', 'cake74', '35'),
(6, 'Baby Naked Strawberry Shortcake', 'AED 38.00', 'sweetbundle/2bff4617a5.jpg', 'A mini version of our absolutely delicious and bea...', 'cake75', '38'),
(8, 'Baby Mocha Choca Cheesecake', 'AED 35.00', 'sweetbundle/b78310228d.jpeg', 'A pocket sized cake made of layers of pure decaden...', 'cake76', '35'),
(9, 'Baby White Velvet Party Cake', 'AED 33.00', 'sweetbundle/3e56cd2a60.jpg', 'Inspired by pure nostalgia, this mini Funfetti cak...', 'cake77', '33'),
(10, 'Baby Whipped Lemon and Raspberry Cake', 'AED 35.00', 'sweetbundle/2b42f3aef4.jpg', 'A pocked sized delicious and refreshing cake that ...', 'cake78', '35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_email`, `u_password`) VALUES
(1, 'test1', 'test1@gmail.com', 'test1'),
(2, 'test', 'abc@gmail.com', 'jfiuyc'),
(3, 'abc', 'abc@gmail.com', 'afag'),
(4, 'user', 'user@gmail.com', 'user'),
(5, 'user', 'user@gmail.com', 'user1'),
(6, 'abc', 'abc@gmail.com', '6565');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `Quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`id`, `name`, `price`, `Quantity`) VALUES
(1, 'cake13', '220', '1'),
(2, 'cake13', '220', '1'),
(3, 'cake17', '215', '1'),
(4, 'cake18', '290', '1'),
(5, 'cake62', '220', '1'),
(6, 'cake1', '216', '1'),
(7, 'cake14', '220', '1'),
(8, 'cake15', '230', '1'),
(9, 'cake28', '38', '2'),
(10, 'cake28', '38', '2'),
(11, 'cake28', '38', '1'),
(12, 'cake31', '38', '3'),
(13, 'cake31', '38', '3'),
(15, 'cake43', '20', '1'),
(16, 'cake13', '220', '1'),
(17, 'cake28', '38', '1');

-- --------------------------------------------------------

--
-- Table structure for table `vegandesserts`
--

CREATE TABLE `vegandesserts` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` varchar(255) NOT NULL,
  `prod_image` varchar(255) NOT NULL,
  `prod_description` text NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `h_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vegandesserts`
--

INSERT INTO `vegandesserts` (`prod_id`, `prod_name`, `prod_price`, `prod_image`, `prod_description`, `h_name`, `h_price`) VALUES
(1, 'Vanilla Berry Vegan Cake', 'AED 220.00', 'vegandesserts/2352cb71af.jpg', 'A moist vegan vanilla sponge paired with our secre...', 'cake60', '220'),
(2, 'Vegan Cake', 'AED 220.00', 'vegandesserts/9cdf594611.jpeg', 'A rich, moist and fudgy chocolate cake, you wouldn...', 'cake61', '220'),
(3, 'Baby Choco Loco Cake', 'AED 38.00', 'vegandesserts/5c6f8cb81f.jpg', 'Our moist and decadent chocolate cake as a mini ve...', 'cake62', '38'),
(4, 'Vegan Brownie Box', 'AED 70.00', 'vegandesserts/533517704a.jpeg', 'A box of our best-selling vegan brownies!', 'cake63', '70'),
(5, 'Vegan Choco Chunk Espresso Cookie', 'AED 20.00', 'vegandesserts/cf92a03dc2.jpeg', 'We have taken our top selling choco chunk vegan cook...', 'cake64', '20'),
(6, 'Vegan Choco Chunk Espresso Cookie 2', 'AED 20.00', 'vegandesserts/8a56cd393b.jpeg', 'We have taken our top selling choco chunk vegan cook...', 'cake65', '20'),
(7, 'Peanut Butter V Truffles', 'AED 33.00', 'vegandesserts/a586db35e4.jpeg', 'The perfect combination of peanut butter, maple sy...', 'cake66', '33'),
(8, 'Vegan Brownie Mess in a jar', 'AED 35.00', 'vegandesserts/9d133edee6.jpg', 'Chunks of our most loved crazy cake in between lay...', 'cake67', '35'),
(9, 'Vegan Strawberry Shortcake in a jar', 'AED 35.00', 'vegandesserts/0f780916eb.jpg', 'It is a strawberry shortcake in a jar and it is ve...', 'cake68', '35'),
(10, 'Coco Truffles', 'AED 30.00', 'vegandesserts/c964c840ba.jpg', 'A rich chocolate vegan truffle mixed and coated wi...', 'cake69', '30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `babycakes`
--
ALTER TABLE `babycakes`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `brownies`
--
ALTER TABLE `brownies`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `cakes`
--
ALTER TABLE `cakes`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `cookies`
--
ALTER TABLE `cookies`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `create_cake`
--
ALTER TABLE `create_cake`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cupcake`
--
ALTER TABLE `cupcake`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `icecream`
--
ALTER TABLE `icecream`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `jars_and_truffles`
--
ALTER TABLE `jars_and_truffles`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sweetbundle`
--
ALTER TABLE `sweetbundle`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vegandesserts`
--
ALTER TABLE `vegandesserts`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `babycakes`
--
ALTER TABLE `babycakes`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `brownies`
--
ALTER TABLE `brownies`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cakes`
--
ALTER TABLE `cakes`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cookies`
--
ALTER TABLE `cookies`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `create_cake`
--
ALTER TABLE `create_cake`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cupcake`
--
ALTER TABLE `cupcake`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `icecream`
--
ALTER TABLE `icecream`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jars_and_truffles`
--
ALTER TABLE `jars_and_truffles`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sweetbundle`
--
ALTER TABLE `sweetbundle`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vegandesserts`
--
ALTER TABLE `vegandesserts`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
