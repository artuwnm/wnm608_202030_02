-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2020 at 04:51 PM
-- Server version: 5.6.47-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyrusdesign_aauwnm`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `name` varchar(64) NOT NULL,
  `condition` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(24) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(256) NOT NULL,
  `images` varchar(512) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `condition`, `price`, `category`, `description`, `thumbnail`, `images`, `date_create`, `date_modify`) VALUES
(1, 'Gang Beasts', 'Very Good', '10.00', 'PS4 Games', 'Gang beasts is a silly multiplayer party game with surly gelatinous characters, brutal slapstick fight sequences, and absurd hazardous environments, set in the mean streets of beef city.', 'images/ps1.jpg', 'images/ps1.jpg, images/ps1l.jpg,  images/ps1r.jpg', '2020-05-15 16:48:16', '2020-05-15 16:48:16'),
(2, 'Jump force', 'Very Good', '34.00', 'PS4 Games', 'For the first time ever, the most famous manga heroes are thrown into a whole new battleground: Our world. Uniting to fight the most dangerous threat, the Jump Force will bear the fate of the entire humankind. Celebrating the 50th anniversary of the famous Weekly Jump Magazine, Jump Force is making the most of latest technologies to bring characters to life in a never-seen-before realistic design. Genre fighting or action.', 'images/ps2.jpg', 'images/ps2.jpg, images/ps2l.jpg, images/ps2r.jpg', '2020-05-15 16:48:34', '2020-05-15 16:48:34'),
(3, 'Dissidia Final Fantasy NT', 'Not Bad', '16.00', 'PS4 Games', 'In partnership with Team Ninja from KOEI TECMO GAMES, Square Enix presents DISSIDIA FINAL FANTASY NT as a new and refreshing experience – a team-based brawler. Combining seamless gameplay, FINAL FANTASY characters and breathtaking worlds from the past 30 years of the franchise, DISSIDIA FINAL FANTASY NT welcomes all gamers to the online battle arena with its renowned bravery combat system. ', 'images/ps3.jpg', 'images/ps3.jpg, images/ps3l.jpg,  images/ps3r.jpg', '2020-05-15 16:48:50', '2020-05-15 16:48:50'),
(4, 'Dynasty Warriors 8: Xtreme Legends', 'Not Bad', '14.00', 'PS4 Games', 'DYNASTY WARRIORS 8 is a historical tactical action game that follows the stories of the kingdoms of Wei, Wu, Shu and Jin through the actions of historical military and political figures of the time as they fight to gain control over the Three Kingdoms of China. It features more than 40 completely new stages: verdant plains, desolate wastelands, sharp ravines, huge castles, and other breath-taking sites, giving stronger emphasis in the stage of these epic battles and inspired by ancient landscapes.', 'images/ps4.jpg', 'images/ps4.jpg, images/ps4l.jpg,  images/ps4r.jpg', '2020-05-15 16:49:06', '2020-05-15 16:49:06'),
(5, 'Monster Hunter: World ', 'It Works', '14.00', 'PS4 Games', 'Monster Hunter: world sees players Gear up to Venture on quests to battle against fearsome monsters, progressively improving their hunting abilities as they play. Loot collected from Fallen foes can be used to create new equipment and armor upgrades as players seamlessly move across map areas that comprise the living ecosystems. The landscape and its diverse inhabitants play a critical role as players strategically use the surrounding environment to their advantage. Hunters must use their cunning and abilities to survive the intense and evolving fights as they battle to become the Ultimate Hunter. PEGI rated game is comparable to ESRB T rating. Game is region free with no restrictions.', 'images/ps5.jpg', 'images/ps5.jpg, images/ps5l.jpg,  images/ps5r.jpg', '2020-05-15 16:50:07', '2020-05-15 16:50:07'),
(6, 'Pro Evolution Soccer 2018', 'It Works', '8.00', 'PS4 Games', 'Where Legends Are Made\' encapsulates the return of PES, with new features, modes and an unparalleled gameplay experience. This year\'s edition bring the biggest changes to the award winning series seen in a decade, which will set a new standard for soccer games, and raise expectations for the future of the franchise. ', 'images/ps6.jpg', 'images/ps6.jpg, images/ps6l.jpg,  images/ps6r.jpg', '2020-05-15 16:50:37', '2020-05-15 16:50:37'),
(7, 'Pokémon Shield\r\n', 'Very Good', '40.99', 'Nintendo Switch Games', 'A new generation of Pokémon is coming to the Nintendo Switch system. Become a Pokémon Trainer and embark on a new journey in the new Galar region Choose from one of three new partner Pokémon: Grookey, Scorbunny, or Sobble. In this all new adventure, you\'ll encounter new and familiar Pokémon as you catch, battle, and trade Pokémon while exploring new areas and uncovering an all-new story. Get ready for the next Pokémon adventure in the Pokémon Sword and Pokémon Shield games.', 'images/sw1.jpg', 'images/sw1.jpg, images/sw1l.jpg,  images/sw1r.jpg', '2020-05-15 16:49:53', '2020-05-15 16:49:53'),
(8, 'Super Smash Bros. Ultimate ', 'Not Bad', '40.99', 'Nintendo Switch Games', 'Gaming icons clash in the ultimate brawl you can play anytime, anywhere! Smash rivals off the stage as new characters Simon Belmont and King K. Rool join Inkling, Ridley, and every fighter in Super Smash Bros. history. Enjoy enhanced speed and combat at new stages based on the Castlevania series, Super Mario Odyssey, and more!', 'images/sw2.jpg', 'images/sw2.jpg, images/sw2l.jpg,  images/sw2r.jpg', '2020-05-15 16:50:50', '2020-05-15 16:50:50'),
(9, 'Mario Kart 8 Deluxe', 'Not Bad', '20.99', 'Nintendo Switch Games', 'Hit the road with the definitive version of Mario Kart 8 and play anytime, any-where! Race your friends or battle them in a revised battle mode on new and returning battle courses. Play locally in up to 4-player multiplayer in 1080p while playing in TV Mode. Every track from the Wii U version, including DLC, makes a glorious return. Plus, the Inklings appear as all-new guest characters, along with returning favorites, such as King Boo, Dry Bones, and Bowser Jr.!', 'images/sw3.jpg', 'images/sw3.jpg, images/sw3l.jpg, images/sw3r.jpg', '2020-05-15 16:50:24', '2020-05-15 16:50:24'),
(10, 'The Legend of Zelda: Breath of the Wild\r\n', 'Very Good', '40.99', 'Nintendo Switch Games', 'Step into a world of discovery, exploration, and adventure in The Legend of Zelda: Breath of the Wild, a boundary-breaking new game in the acclaimed series. Travel across vast fields, through forests, and to mountain peaks as you discover what has become of the kingdom of Hyrule in this stunning Open-Air Adventure. Now on the Nintendo Switch console, your journey is freer and more open than ever. Take your system anywhere, and adventure as Link any way you like.', 'images/sw4.jpg', 'images/sw4.jpg, images/sw4l.jpg,  images/sw4r.jpg', '2020-05-15 16:51:04', '2020-05-15 16:51:04'),
(11, 'Ring Fit Adventure', 'Very Good', '20.99', 'Nintendo Switch Games', 'Explore a fantastical adventure World to defeat a bodybuilding Dragon and his minions using real-life exercises Traverse grass-swept plains by jogging in place, attack enemies with overhead shoulder presses, and Refill your health meter by striking some Yoga poses. Two new accessories, Ring -con and leg strap, measure your real-world actions and help turn them into in-game movements. ', 'images/sw7.jpg', 'images/sw7.jpg, images/sw7l.jpg,  images/sw7r.jpg', '2020-05-15 16:51:15', '2020-05-15 16:51:15'),
(12, 'DualShock Controller for PlayStation 4', 'It Works', '25.99', 'Games Accessories', 'The feel, shape, and sensitivity of the dual analog sticks and trigger buttons have been improved to provide a greater sense of control, no matter what you play. ', 'images/as.jpg', 'images/as.jpg, images/as1l.jpg,  images/as1r.jpg', '2020-05-15 16:51:27', '2020-05-15 16:51:27'),
(13, 'Nintendo Switch ', 'Very Good', '400.00', 'Games Accessories', 'Nintendo Switch, the new home video game system from Nintendo', 'images/as2.jpg', 'images/as2.jpg, images/as2l.jpg,  images/as2r.jpg', '2020-05-15 16:49:35', '2020-05-15 16:49:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
