-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 05:09 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id4779267_quead`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `correct` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES
(1, 1, 'Rare', '1'),
(2, 1, 'Abundant', '0'),
(3, 1, 'Few', '0'),
(4, 1, 'Moderate', '0'),
(5, 2, 'Flora', '1'),
(6, 2, 'Mammals', '0'),
(7, 2, 'Birds', '0'),
(8, 2, 'Reptiles', '0'),
(9, 3, 'Moderate', '1'),
(10, 3, 'Few', '0'),
(11, 3, 'Rare', '0'),
(12, 3, 'Abundant', '0'),
(13, 4, 'Pterocarpus indicus', '1'),
(14, 4, 'Parashorea malaaonan', '0'),
(15, 4, 'Polyscias nodosa', '0'),
(16, 4, 'Parkia javanica', '0'),
(17, 5, 'Spilornis Holospilus', '1'),
(18, 5, 'Buceros Hydrocorax', '0'),
(19, 5, 'Cervus Philippinensis', '0'),
(20, 5, 'Avecida Jergoni', '0'),
(21, 6, 'Ebenaceae', '1'),
(22, 6, 'Dipterocarpaceae', '0'),
(23, 6, 'Moraceae', '0'),
(24, 6, 'Myrtaceae', '0'),
(25, 7, 'True', '1'),
(26, 7, 'False', '0'),
(27, 8, 'False', '1'),
(28, 8, 'True', '0'),
(29, 9, 'False', '1'),
(30, 9, 'True', '0'),
(31, 10, 'True', '1'),
(32, 10, 'False', '0'),
(33, 11, 'Phil Rind Rat', '1'),
(34, 11, 'Salamander', '0'),
(35, 11, 'Monitor Lizard', '0'),
(36, 11, 'Tuko', '0'),
(37, 9, 'cdfe', '1'),
(38, 9, 'zczxc', '0'),
(39, 9, 'sccs', '0'),
(40, 9, 'ddwsd', '0');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `comments` text NOT NULL,
  `date_publish` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comments`, `date_publish`) VALUES
(17, 'micha', 'Hello!!', '2018-03-02 08:38:25'),
(19, 'Potpot', 'Galing Naman. Neto', '2018-03-02 17:13:37'),
(20, 'sulli', 'nice', '2018-03-03 04:34:35'),
(21, 'Camille', 'love it!', '2018-03-03 16:52:31'),
(22, 'k', 'kk', '2018-03-09 12:25:42');

-- --------------------------------------------------------

--
-- Table structure for table `fauna`
--

CREATE TABLE `fauna` (
  `S_ID` int(11) NOT NULL,
  `CommonName` varchar(100) DEFAULT NULL,
  `ScientificName` varchar(100) DEFAULT NULL,
  `Species` varchar(100) DEFAULT NULL,
  `Statistics` float DEFAULT NULL,
  `RelativeAbundance` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fauna`
--

INSERT INTO `fauna` (`S_ID`, `CommonName`, `ScientificName`, `Species`, `Statistics`, `RelativeAbundance`) VALUES
(1034, 'Rufous Coucal', 'Centrofus', 'Birds', 3, 'Rare'),
(1035, 'Phil Forest Kingfisher', 'Cyx Melanurus', 'Birds', 2, 'Rare'),
(1036, 'Spotted Wood Kingfisher', 'Halcycon Lindsayi', 'Birds', 4, 'Rare'),
(1037, 'Luzon Little Crow', 'Corvus Enca', 'Birds', 3, 'Rare'),
(1038, 'Phil Turle Dove', 'Streptopella Bitturquata', 'Birds', 5, 'Moderate'),
(1039, 'Orioles', 'Orioles Chinesis', 'Birds\r\n', 3, 'Moderate\r\n'),
(1040, 'Hawk', 'Avecida Jergoni', 'Birds', 9, 'Moderate'),
(1041, 'Tarictic Hornbill', 'Pnelopedis Panini', 'Birds', 2, 'Few\r\n'),
(1042, 'Brahminny Kite', 'Haliatus Indus', 'Birds', 5, 'Few'),
(1043, 'Rufous Hornbill\r\n', 'Buceros Hydrocorax', 'Birds', 4, 'Endangered'),
(1044, 'Serpent Eagle', 'Spilornis Holospilus', 'Birds', 3, 'Endangered'),
(1045, 'Phil Monkey', 'Macaca Fascicularis', 'Mammals	', 5, 'Few\r\n'),
(1046, 'Phil deer\r\n', 'Cervus Philippinensis', 'Mammals', 3, 'Endangered'),
(1047, 'Phil Rind Rat\r\n', NULL, 'Mammals', 8, 'Rare'),
(1048, 'Phil Wild Boar', NULL, 'Mammals', 7, 'Moderate'),
(1049, 'Snakes', 'Serpent', 'Reptiles', 15, 'Few'),
(1050, 'Salamander\r\n', 'Caudata	Reptiles', '', 9, 'Few'),
(1051, 'Tuko', 'Gecko Gecko', 'Reptiles', 10, 'Few'),
(1052, 'Monitor Lizard', 'Varanus Salvatore', 'Reptiles', 9, 'Rare');

-- --------------------------------------------------------

--
-- Table structure for table `faunae`
--

CREATE TABLE `faunae` (
  `id` int(11) NOT NULL,
  `location` varchar(250) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `caption1` varchar(7900) NOT NULL,
  `caption2` varchar(1000) NOT NULL,
  `caption3` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faunae`
--

INSERT INTO `faunae` (`id`, `location`, `caption`, `caption1`, `caption2`, `caption3`) VALUES
(1, 'Brahminny Kite 3.jpg', 'Brahminny Kite', 'The Brahminy Kite is one of the medium-sized raptors (birds of prey), with a white head and breast. The rest of its body is a striking chestnut brown. The very tip of its tail is white. The wings are broad, with dark fingered wing tips and the tail is short. The legs are short and not feathered, the eye is dark and the lemon yellow coloured bill is strongly hooked. It sails on level wings along shorelines and mudflats.', 'Image by Romy Ocon', 'Source: http://www.birdsinbackyards.net/species/Haliastur-indus'),
(2, 'hawks.jpg', 'Hawk', 'A hawk is a large bird with a short, hooked beak, sharp claws, and very good eyesight. Hawk catch and eat small birds and animals.', 'https://commons.wikimedia.org/wiki/File:Northern-Red-Tailed-Hawk.jpg', 'www.collinsdictionary.com/enflish/hawk'),
(3, 'Luzon Little Crow.jpg', 'Luzon Little Crow', 'The slender-billed crow is a Passerine bird of the family Corvidae, in the genus Corvus. The violet crow has been found to be distinct genetically and separated as Corvus violaceus. It is found in Brunei, Indonesia, Malaysia, and the Philippines.', 'Image by Sylvia Ramos, 2010', ' '),
(4, 'Orioles.jpg', 'Orioles', 'The Black-naped Oriole is a distinctive black-and-yellow bird with a pinkish bill. This species was established in Singapore in the 1920s, and were presumably natural occurrences of range expansion, but the local population was possibly augmented with escape birds from the pet bird trade.', 'Image by Brian E. Small', 'Source: https://lkcnhm.nus.edu.sg/dna/organisms/details/504'),
(5, 'Philippine Forest Kingfisher 3.jpg', 'Philippine Forest Kingfisher', 'The Philippine Forest Kingfisher or Philippine Dwarf Kingfisher (Ceyx melanurus) is a tiny, colorful, forest-dwelling kingfisher recognizable by its striking bright red bill and bright red legs. The species is found in the islands of Luzon, Polillo, Alabat, Catanduanes, Tablas, Samar, Leyte, Mindanao and Basilan.', ' ', 'Source: https://www.papaleng-amazing-animals.com/2015/05/meet-seven-kingfishers-endemic-to.html'),
(6, 'Philippine Turtle Dove.jpg', 'Philippine Turtle Dove', 'Philippine Turtle Dove or Dalingdingan is a species of plant in the Dipterocarpaceae family. It is endemic to the Philippines. Also it is called Manggachapui. It is a hard straight grained wood that was used to build the early Manila galleons; it having qualities of being so dense as to not be affected by wood boring insects and one supposes marine worms. The Malay word for the wood is Dasal Lanang.', 'Image by Sylvia Ramos, 2009', ' '),
(7, 'Rufous Coucal.jpg', 'Rufous Coucal', 'The rufous coucal is a species of cuckoo in the Cuculidae family. It is found in Luzon and proximate islands in the Philippines. Its natural habitat is subtropical or tropical moist lowland forests. It is threatened by habitat loss.', ' ', ' '),
(8, 'Serpent Eagle 3.jpg', 'Serpent Eagle', 'Philippine Serpent Eagles are relatively small raptors that live on Luzon Island and Mindano Island in the Philippines and occur in a range of habitats. Philippine Serpent Eagles are brown from above and have a short bushy crest, black crown, and gray to gray-brown cheeks and throat. The underparts are rufous with white spots that merge into barring along the crissum. The tail is black with a white tip, light brown central band, and a secondary basal band. The primary feathers are also black and there is white spotting along the wing coverts. The eyes, legs, and lores are yellow. Juveniles are brown from above with rufous to buff edges and they have a white crown. The mantle is streaked and spotted with brown and there are two dark patches behind the eyes. The feathers along the wing-coverts are white at the base and the tail is dark brown with a light-colored tip and three brown bands. The undertail is gray-white. Underparts are cream to white with heavy rufous markings along the breast and paler rufous streaking along the belly and thighs. Eyes are gray. Philippine Serpent Eagles are relatively small raptors that live on Luzon Island and Mindano Island in the Philippines and occur in a range of habitats. Philippine Serpent Eagles are brown from above and have a short bushy crest, black crown, and gray to gray-brown cheeks and throat. The underparts are rufous with white spots that merge into barring along the crissum. The tail is black with a white tip, light brown central band, and a secondary basal band. The primary feathers are also black and there is white spotting along the wing coverts. The eyes, legs, and lores are yellow. Juveniles are brown from above with rufous to buff edges and they have a white crown. The mantle is streaked and spotted with brown and there are two dark patches behind the eyes. The feathers along the wing-coverts are white at the base and the tail is dark brown with a light-colored tip and three brown bands. The undertail is gray-white. Underparts are cream to white with heavy rufous markings along the breast and paler rufous streaking along the belly and thighs. Eyes are gray.', ' ', 'Source: http://www.eagledirectory.org/species/philippine_serpent_eagle.html'),
(9, 'Spotted Wood Kingfisher.jpg', 'Spotted Wood Kingfisher', 'The Spotted-wood Kingfisher is endemic to Luzon and Negros and Panay. It is strictly a forest kingfisher found in subtropical or tropical moist lowland forests and usually seen near bodies of water. It feeds on insects, other invertebrates as well as small vertebrates. One of the most colorful endemic kingfishers in the Philippines, the species is sexually dimorphic (the male looks different from the female).', ' ', 'Source: https://www.papaleng-amazing-animals.com/2015/05/meet-seven-kingfishers-endemic-to.html'),
(10, 'Tarictic Hornbill.jpg', 'Tarictic Hornbill', 'The Tarictic Hornbill or Visayan Hornbill (Penelopides panini) is a hornbill found in rainforests on the islands of Panay, Negros, Masbate, and Guimaras, and formerly Ticao, in the Philippines. It formerly included all other Philippine tarictic hornbills as subspecies, in which case the common name of the combined species was shortened to tarictic hornbill.', 'Image by Andrew Emmerson', 'Source: https://www.inaturalist.org/taxa/5503-Penelopides-panini'),
(11, 'Philippine Deer 1.jpg', 'Philippine Deer', 'The Philippine brown deer is a diminutive, compactly-built deer with relatively short antlers that only reach 20 to 40 centimetres in length. In general, this species is entirely brown, with the exception of the underside of the tail, which is white. However, there are regional variations in colour, such as one population found on Mindanao where the deerâ€™s coat has been reported to be a pale, sandy grey. Certain populations of the Philippine brown deer also differ significantly in body size.', ' ', 'Source: http://www.arkive.org/philippine-brown-deer/rusa-marianna/'),
(12, 'Philippine Monkey 3.jpg', 'Philippine Monkey', 'The Philippine long-tailed macaque (Macaca fascicularis philippensis) is a subspecies of the crab-eating macaque, known in various Philippine languages as matching/matsing or the more general term unggoy ("monkey"). It is endemic in the Philippine forests and woodlands, but especially in the mangrove forests of western central Philippinesâ€” particularly in Palawan, the Visayas, and Mindanao. The names M. f. philippinensis or even M. f. philippinenesis have also been used, but arise from orthographical error.', 'Image by Barney Wilczak', ' '),
(13, 'Philippine Rind Rat.jpg', 'Philippine Rind Rat', 'The Philippine Rind Rat or Philippine forest rat is a species of rodent in the family Muridae. It is found only in the Philippines, and is located throughout the archipelago. The scientific name commemorates British colonial administrator and zoological collector Alfred Hart Everett. The Chanum Torres is widespread throughout its range and feeds on a diet of worms and insects. There are no major threats to the species, which has been found to be competitively superior to introduced Rattus species.', 'Image used www.arkive.com', 'Source: https://en.wikipedia.org/wiki/Philippine_forest_rat'),
(14, 'Philippine Wild Boar.jpg', 'Philippine Wild Boar', 'The Philippine Wild Boar or baboy damo, a rare and unique breed of pig found only in five areas in the Philippines, has been classified by a world conservation group as â€œvulnerableâ€ or â€œthreatened.â€ The Philippine warty pig (scientific name: Sus Philippensis) is now included in the â€œred listâ€ of The World Conservation Union (IUCN) and is considered as rare and declining. Baboy damo, widely distributed in the still-forested areas of Luzon, Mindoro, Samar, Leyte and Mindanao, is a bizarre-looking forest-dweller with coarse, blackish coat and white hair on the sides. Its long, stiff hair form a crest running down the middle of its back, and this is particularly conspicuous in males during the breeding season.X The animalâ€™s medium-length tail has a tuft of long, black hair at the tip, used to swat away flies and signal mood. The baboy damo survives in forested areas but intense hunting for its meat and extreme levels of deforestation are slowly causing its disappearance. These threats are amplified by the rapid human population growth in the Philippines, and illegal logging. Local farmers consider baboy damo to be legitimate targets for reprisal hunting. Hybridization with free-ranging domestic pigs is also said to be threatening the existence of the baboy damo. The baboy damo is fully protected by Philippine law, though there is little or no effective enforcement of the relevant legislation in most areas like in Mindoro and Mindanao, where baboy damo abound in national parks.', 'Image used https://www.flickr.com/photos/campjansson/8624942712/player/78fd3f2837', 'Source: http://www.philstar.com/headlines/403070/rare-wild-boar-threatened'),
(15, 'Salamander.jpg', 'Salamander', 'Salamanders encompass approximately 500 species of amphibians. They typically have slender bodies, short legs, and long tails. Usually found in moist or arid habitats in the northern hemisphere, most salamanders are small, although there are two species that reach up to 5 feet in length. Salamander is a type of amphibian, close relative of frogs and toads. They live mostly in the northern hemisphere, in the wet areas near the lakes and ponds. Depending on the species, some salamanders spend their life in the water, other on the land, while the most species live part of their life in the water, and part on the land. There are 500 known species of salamanders. Large percent of them is endangered due to habitat loss and pollution.', ' ', 'Source: www.reptilegardens.com/animals/amphibians-and-bugs/salamanders & http://www.softschools.com/facts/animals/salamander_facts/58/'),
(16, 'Snake.jpg', 'Snake', 'Snakes belong to the animal class reptiles. This group also includes crocodiles, lizards, and turtles. Reptiles are cold-blooded animals that raise their body temperature by lying in the sun or lower it by crawling into the shade. Their body temperature changes to the temperature of its surroundings. Because of this, snakes that live in colder climates must hibernate through the winter. They will find burrows or caves and fall into a deep sleep until the weather becomes ware enough for them. There are more than 2,900 species of snakes in the world. They live almost everywhere, in deserts, forests, oceans, streams, and lakes. Snakes live on the ground, in trees, and in water. Snakes cannot survive in places where the ground stays frozen year round so there are no snakes north of the Arctic Circle or in Antarctica. Some islands, including Ireland and New Zealand, do not have snakes at all.', 'Image by Alejandro Arteaga', 'Source: http://www.kidzone.ws/lw/snakes/facts01.html'),
(17, 'Monitor Lizard.jpg', 'Monitor Lizard', 'Monitor Lizards are large reptiles found in Africa and all across Asia, including the surrounding seas. The monitor lizard is mainly found in jungle areas although some species of monitor lizard are water-bound. Some species of monitor lizard are thought to carry a fairly weak venom, for example, the komodo dragonwhich is the largest of the species. The komodo dragon is native to the small Indonesian island that it is named after and is the largest species of lizard in the world. According to legend, monitor lizards were a sign that there were crocodiles close by, possibly due to their standing on their hind legs to monitor their surroundings. Monitor lizards do this so that they are aware of any approaching predators. Although many species of monitor lizard are quite big, some species of monitor lizard are smaller than 20 cm in length. Monitor lizards are extremely versatile animals and monitor lizards adapt well into different environments. Most species of monitor lizard have a predominantly carnivorous diet, eating eggs, smaller reptiles, fish, birds and small mammals. Some species of monitor lizard also eat fruit and vegetation depending on where they live. Female monitor lizards bury their eggs in holes or hollow tree stumps that the female monitor lizard then covers with dirt in order to protect her eggs. Monitor lizards can lay up to 30 eggs at a time, although many monitor lizards lay less, and only a lucky few of the monitor lizard babies tend to survive. Monitor lizards are thought to be fairly intelligent animals, with some people claiming that monitor lizards are able to recognise numbers up to six, therefore meaning that monitor lizards are able to count! Monitor lizards mainly use their intelligence in the wild by surveying areas for oncoming danger and for hunting their prey.', ' ', 'Source: https://a-z-animals.com/animals/monitor-lizard/'),
(18, 'Tuko 1.jpg', 'Tuko', 'Geckos are reptiles and are found on all the continents except Antarctica. These colorful lizards have adapted to habitats from rain forests, to deserts, to cold mountain slopes. Over a long period of time, geckos have developed special physical features to help them survive and avoid predators. Gecko tails serve many purposes. They help balance their weight as they climb branches, they act as fuel tanks to store fat, and as camouflage to help them disappear into their environment. Geckos are also able to shed their tails if a predator grabs them. Most geckos are nocturnal, which means they are active at night, but day geckos are active during the day and nibble on insects, fruits, and flower nectar. Most geckos make noises such as chirping, barking, and clicking when they are defending their territory or attracting a mate. Female geckos lay their eggs in leaves and bark. Most geckos donâ€™t have movable eyelids and instead have one transparent eyelid which they keep clean by licking it with their tongues. There are many species of geckos. Depending on the species, their endangered status can range from least concern to critically endangered.', 'Image used http://pinasgeckotuko.blogspot.com/', 'Source: https://kids.nationalgeographic.com/animals/gecko/#gecko-on-leaf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `faunaphotos`
--

CREATE TABLE `faunaphotos` (
  `id` int(11) NOT NULL,
  `location` varchar(500) NOT NULL,
  `caption` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faunaphotos`
--

INSERT INTO `faunaphotos` (`id`, `location`, `caption`) VALUES
(7, 'photos/Brahminny Kite 1.jpg', 'Brahminny Kite'),
(8, 'photos/hawks.jpg', 'Hawk'),
(9, 'photos/Luzon Little Crow.jpg', 'Luzon Little Crow'),
(10, 'photos/Orioles.jpg', 'Orioles'),
(11, 'photos/Philippine Forest Kingfisher 3.jpg', 'Philippine Forest Kingfisher'),
(12, 'photos/Philippine Turtle Dove.jpg', 'Philippine Turtle Dove'),
(13, 'photos/Rufous Coucal.jpg', 'Rufous Coucal'),
(14, 'photos/Serpent Eagle 3.jpg', 'Serpent Eagle'),
(15, 'photos/Spotted Wood Kingfisher.jpg', 'Spotted Wood Kingfisher'),
(16, 'photos/Tarictic Hornbill.jpg', 'Tarictic Hornbill'),
(17, 'photos/Philippine Deer 3.jpg', 'Philippine Deer'),
(18, 'photos/Philippine Monkey.jpg', 'Philippine Monkey'),
(19, 'photos/Philippine Rind Rat.jpg', 'Philippine Rind Rat'),
(20, 'photos/Salamander 1.jpg', 'Salamander'),
(21, 'photos/Snake.jpg', 'Snake'),
(22, 'photos/Monitor Lizard.jpg', 'Monitor Lizard'),
(23, 'photos/Tuko 1.jpg', 'Tuko');

-- --------------------------------------------------------

--
-- Table structure for table `flora`
--

CREATE TABLE `flora` (
  `S_ID` int(11) NOT NULL,
  `CommonName` varchar(100) DEFAULT NULL,
  `ScientificName` varchar(100) DEFAULT NULL,
  `Family` varchar(100) DEFAULT NULL,
  `Species` varchar(100) DEFAULT NULL,
  `Statistics` float DEFAULT NULL,
  `RelativeAbundance` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flora`
--

INSERT INTO `flora` (`S_ID`, `CommonName`, `ScientificName`, `Family`, `Species`, `Statistics`, `RelativeAbundance`) VALUES
(1001, 'Apitong', 'Dipterocarpus Grandiflorus', 'DIPTEROCARPACEAE', 'Plant', 5, 'Abundant'),
(1002, 'Bolong-eta', 'Diospyros pilosanthera', 'EBENACEAE', 'Plant', 3, 'Few'),
(1003, 'Mahogany', 'Swietenia macrophylla', 'MELIACEAE', 'Plant', 10, 'Moderate'),
(1004, 'Narra', 'Pterocarpus indicus', 'FABACEAE', 'Plant', 4, 'Moderate\r\n'),
(1005, 'Lamio', 'Dracontomelon edule', 'MELIACEAE', 'Plant', 5, 'Few\r\n'),
(1006, 'White Lauan', 'Shorea contorta', 'DIPTEROCARPACEAE', 'Plant', 6, 'Abundant'),
(1007, 'Red Lauan', 'Shorea negrosensis', 'DIPTEROCARPACEAE', 'Plant', 6, 'Abundant'),
(1008, 'Dalingdingan', 'Hopea acuminata', 'DIPTEROCARPACEAE', 'Plant', 3, 'Abundant'),
(1009, 'Pagsahingin', 'Canarium asperum var. asperum', 'BUSERACEAE', 'Plant', 5, 'Few'),
(1010, 'Kamagong', 'Diospyros blancoi', 'EBENACEAE', 'Plant', 9, 'Few'),
(1011, 'Bagtikan', 'Parashorea malaaonan', 'DIPTEROCARPACEAE', 'Plant', 4, 'Abundant'),
(1012, 'Mayapis', 'Shorea palosapis', 'DIPTEROCARPACEAE', 'Plant', 6, 'Abundant'),
(1013, 'Guijo', 'Anisoptera guiso', 'DIPTEROCARPACEAE', 'Plant', 6, 'Abundant'),
(1014, 'Almon', 'Shorea almon', 'DIPTEROCARPACEAE', 'Plant', 9, 'Abundant'),
(1015, 'Makaasim', 'Acacia mangium', 'MYRTACEAE', 'Plant', 7, 'Moderate\r\n'),
(1016, 'Tibig', 'Ficus nota', 'MORACEAE', 'Plant', 4, 'Moderate\r\n'),
(1017, 'Malasaging', 'Artocarpus heterophyllus', 'MELIACEAE', 'Plant', 5, 'Moderate'),
(1018, 'Hagimit', 'Ficus minahassae', 'MORACEAE', 'Plant', 4, 'Moderate\r\n'),
(1019, 'Talang gubat', NULL, 'EBENACEAE', 'Plant', 9, 'Few\r\n'),
(1020, 'Panglomboien', NULL, 'MYRTACEAE', 'Plant', 4, 'Abundant'),
(1021, 'Kalantas', 'Toona calantas', 'MELIACEAE', 'Plant', 9, 'Rare'),
(1022, 'Niog-niogan', 'Quisqualis Indica', 'MORACEAE', 'Plant', 7, 'Abundant'),
(1023, 'Ipil', 'Intsia bijuga', 'FABACEAE', 'Plant', 4, 'Few\r\n'),
(1024, 'Hauili', '', 'MORACEAE', 'Plant', 2, 'Moderate\r\n'),
(1025, 'Malatibig', 'Septic fig', 'MORACEAE', 'Plant', 8, 'Moderate\r\n'),
(1026, 'Tangisan bayawak', 'Ficus variegata Blume', 'MORACEAE', 'Plant', 4, 'Moderate'),
(1027, 'Anabiong', 'Trema orientalis', 'ULMACEAE', 'Plant', 6, 'Few'),
(1028, 'Malapapaya', 'Polyscias nodosa', 'ARALIACEAE', 'Plant', 9, 'Moderate'),
(1029, 'Kupang', 'Parkia javanica', 'FABACEAE', 'plant', 4, 'Few\r\n'),
(1030, 'Magabuyo', 'Shorea palosapis', 'ULMACEAE', 'Plant', 7, 'Moderate'),
(1031, 'Manggachapui', 'Dipterocarpus grandiflorus', 'DIPTEROCARPACEAE', 'Plant', 7, 'Abundant'),
(1032, 'Antipolo', 'Artocarpus blancoi', 'MORACEAE', 'Plant', 3, 'Rare'),
(1033, 'Tampui', 'Baccaurea macrocarpa', 'MYRTACEAE', 'Plant', 4, 'Rare\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `florae`
--

CREATE TABLE `florae` (
  `id` int(11) NOT NULL,
  `location` varchar(250) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `caption1` varchar(7900) NOT NULL,
  `caption2` varchar(1000) NOT NULL,
  `caption3` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `florae`
--

INSERT INTO `florae` (`id`, `location`, `caption`, `caption1`, `caption2`, `caption3`) VALUES
(1, 'Anabiong.jpg', 'Anabiong', 'Anabiong is a small tree, 5 to 8 meters high, with elongated branches. Leaves are distichous, the upper surface rough; the lower, pale and covered with soft dense hairs, oblong-ovate to lanceolate, 8 to 15 centimeters long, with the base frequently unequal, broad and heart-shaped, and the apex long and thinly pointed, and prominently 3-nerved with finely toothed margins. Cymes are dense, hairy, 1 to 2.5 centimeters long. White flowers are numerous, about 3 millimeters long. Fruit is ovoid, about 3.5 centimeters long.', 'Imaged used http://www.wikiwand.com/af/Hophout', 'Source: http://www.stuartxchange.com/Anabiong.html'),
(2, 'antipolo.jpg', 'Antipolo', 'Antipolo is a large tree, growing up to 30 meters tall. Its habit, size, and leaf characteristics are similar to Artocarpus altilis (Rimas). Leaves are simple, spirally arranged, with one to three pairs of lobes. Hairy petioles are about 8 centimeters long. Hairy stipules are about 10 centimeters long. Male inflorescence is smooth and cylindric, 5 to 8 centimeters long, flexuous, with spine-like structures. Fruit is ellipsoid, 10 centimeters long, 7 centimeters in diameter, ripening to yellow and orange-brown. Anthocarps are extended into 1-centimeter long, spiculate appendages. Seeds are ellipsoid, about 1 centimeter long, embedded in the fleshy part of the flesh.', 'Image by Reynold Sioson', 'Source: http://www.stuartxchange.com/antipolo.html'),
(3, 'Apitong1.jpg', 'Apitong', 'Apitong is a medium size to large resinous tree growing to a height of about 40 meters. Trunk is straight, cylindrical, branchless up to 30 meters, up to 125 centimeters in diameter. Buttresses are absent or few, up to 1.5 meters high and 1 meter long. Bark surface is light gray and slightly fissured, 6 to 8 millimeters thick, with a reddish inner bark. Leaves are alternate, ovate, leathery, glabrous, 10 to 20 centimeters long, 9 to 12 centimeters wide, with 15 to 17 pairs of secondary veins, pointed at the tip and rounded at the base. Petioles are 5 to 7 centimeters long, thickened at the end of the base. Flowers are large, about 5 centimeters long, rose-colored, and fragrant. Petals are large, oblong to narrowly oblong, creamy white with a prominent stripe down the center, stamens 30, ovary 3-celled, with the base enclosed in the calyx tube. Fruit is oblong, about 5 centimeters long, with five winglike projections from the sides.', ' ', 'Source: http://www.stuartxchange.com/antipolo.html'),
(5, 'Bagtikan 1.jpg', 'Bagtikan', 'Bagtikan is known as one of the light red Philippine mahogany that is known as white lauan in the market. It is a prominent tree that reaches a height of 35 to 40 meters. Its crown is flat and spreading, with a tendency to outgrow its neighboring trees. The cylindrical bole is from 20 to 25 meters long. The leaves are entire, alternate, and scattered, oblong, pale green beneath, rounded at the base, and shiny. The midrib is very pronounced with five to eight pairs of equally prominent nerves. Bagtikan has yellow flowers tinged with pink, which fall in such a great quantity that they almost cover the ground under the flowering tree. The ovary is hairy. The fruiting calyx has five long wings but their bases are not tightly enclosing the fruit as with those of the Shorea genus. The fruits are less than two centimeters in diameter at maturity. The development of bagtikan fruit takes three to four months. However, development varies in different regions in the Philippines due to variance in climate. The bark of th', 'Image by Gino Laforteza', 'Source: http://www.philstar.com/cebu-news/709484/tree-month-bagtikan-parashorea-malaanonan-blanco-merrill'),
(6, 'Bolongeta 1.jpg', 'Bolong-eta', 'Bolong-eta is a medium-sized tree growing to a height of 27 meters. Bark is blackish, cracked and fissured. Leaves are numerous, alternate, leathery, smooth when old, oblong or oblong-ovate, sometimes subelliptic, about 12 centimeters long, and 5.5 centimeters wide, with pointed tip and usually rounded base. Flower are dioecious, white, female flowers usually solitary, the male flower in axillary cymes. Fruit is a berry, subellipsoid, about 2 centimeters across, and subtended by an enlarged persistent woody calyx.', 'Imaged used https://caintaplantnursery.com/our-products/philippine-indigenous-plants/', 'Source: http://www.stuartxchange.org/Bolongeta.html'),
(7, 'Dalingdingan.jpg', 'Dalingdingan', 'Dalingdingan is a species of plant in the Dipterocarpaceae family. It is endemic to the Philippines. Also it is called Manggachapui. It is a hard straight grained wood that was used to build the early Manila galleons; it having qualities of being so dense as to not be affected by wood boring insects and one supposes marine worms. The Malay word for the wood is Dasal Lanang.', 'Imaged used http://phinmaupang.wixsite.com/theflamingcourier/single-post/2016/11/17/Philippine-plants-in-danger-of-extinction', ' '),
(8, 'Guijo.jpg', 'Guijo', 'Guijo is a large, medium-sized tree, reaching a height of 50 to 60 meters, with a trunk diameter of about 175 centimeters, with dark colored branchlets. Tree has a strongly buttressed hole at the lower portion of the trunk. Leaves are alternate, simple, entire, and ovate-oblong, 8 to 10 centimeters long, 3 to 5 centimeters wide, with a rounded base and tapering tip. Flowers are short-stalked, developing into 3 long- and 2 short-winged fruits which are expanded at the base. Petals are 9 times as long as the sepals. Stamens are in clusters of 20 to 40 in three groups, with filaments dilated at the base.', ' ', 'Source: http://www.stuartxchange.org/Guijo.html'),
(9, 'Hagimit.jpg', 'Hagimit', 'Hagimit is a widely spreading tree, with the stem more or less buttressed at the base, and grows to 15 meters or more in height. Branchlets are long, and setosely hairy. Leaves, arising mainly from the ends of the twigs, are papery, flat, covered with long reddish-brown hairs especially beneath, ovate, 10 to 20 centimeters long, with entire or minutely toothed margins, upon 3- to 5-centimeter long, very stout, and long-haired petioles. Midrib has a pair of glands at the base. Fruit is stalkless, small, and angularly obovoid, and occurs in small, nearly spherical heads or long, hanging branches which grow in large numbers from the trunk and larger branches.', 'Imaged by Lea Walker', 'Source: http://www.stuartxchange.org/Hagimit.html'),
(10, 'Hauili.jpg', 'Hauili', 'Hauili is an erect, small tree, growing 3 to 8 meters high, smooth, with more or less hairy young shoots. Leaves are smooth and shining, not all roughened, oblong-ovate to elliptic-ovate, 10 to 20 centimeters long, with tip tapering to a rather sharp point, and the base pointed. Receptacles are axillary, solitary, depressed-globose or turbinate, obscurely ridged or angled, 1.5 to 2 centimeters in diameter, and shortly peduncled.', 'Imaged used http://www.pinsdaddy.com/types-of-ficus-trees_XSn5PVNy2fW95sopDvMptsawCJpZA6Y8NCRBey1l5HU/', 'Source: http://www.stuartxchange.org/Hauili.html'),
(11, 'ipil.jpg', 'Ipil-ipil', 'Ipil is a medium-sized tree reaching a height of 20 to 45 meters and a diameter of 150 to 180 meters. Mature trees have steep rounded buttresses. Bark is 5 to 8 mm thick, gray in color with an orange tinge. The inner bark is light brown and mottled with brown specks. Leaves are alternate and simply compound with usually two pairs of leaflets, 8 to 12 centimeters long and 5 to 8.5 centimeters wide. Flowers are fragrant, white or reddish, borne in panicles 6 to 10 centimeters long. Pods are 10 to 25 centimeters long and 4 to 6.5 centimeters wide, with 3 to 6 orbicular seeds.', 'Imaged used http://podlogiszczecin.com.pl/author/rootiwconcept/page/2/', 'Source: http://www.stuartxchange.org/Ipil.html'),
(12, 'KalantasPD3.jpg', 'Kalantas', 'Kupang is a very large tree growing to a height of 25 to 40 meters. Leaves are evenly bipinnate, 30 to 80 centimeters long. Pinnae are 40 to 60, 8 to 20 centimeters long. Leaflets are 60 to 140, linear-oblong, 6-12 millimeters long, close-set, shining above, and pointed at the tip. Heads are dense, obovoid or pyriform, axillary, long-peduncled, up to 6 centimeters long. Flowers are white, about 1 centimeter long. The pods are 25 to 30 centimeters long, about 3.5 centimeters wide, rather thick, pendulous, black and shining when mature, containing 15 to 20 seeds.', 'Image by Reynold Sioson', 'Source: http://www.stuartxchange.org/Kalantas.html'),
(13, 'Kamagong 2.jpg', 'Kamagong', 'Kamagong or Mabolo is a medium-sized tree growing to a height of 20 meters. Leaves are leathery, oblong, up to 20 centimeters long, with a round base and acute tip. The blade is glossy green, smooth above and softly hairy below. Female flowers are axillary and solitary, larger than the male. Fruits are fleshy, globose, up to 8-10 centimeters in diameter, densely covered with short brown hairs. The pulp is edible. The fruit hairs have to be rubbed off before eating as it can cause peri-oral itching and irritation.', ' ', 'Source: http://www.stuartxchange.com/Mabolo.html'),
(14, 'Kupang 4.jpg', 'Kupang', 'Kupang is a very large tree growing to a height of 25 to 40 meters. Leaves are evenly bipinnate, 30 to 80 centimeters long. Pinnae are 40 to 60, 8 to 20 centimeters long. Leaflets are 60 to 140, linear-oblong, 6-12 millimeters long, close-set, shining above, and pointed at the tip. Heads are dense, obovoid or pyriform, axillary, long-peduncled, up to 6 centimeters long. Flowers are white, about 1 centimeter long. The pods are 25 to 30 centimeters long, about 3.5 centimeters wide, rather thick, pendulous, black and shining when mature, containing 15 to 20 seeds.', ' ', 'Source: http://www.stuartxchange.org/Kupang.html'),
(15, 'mahogany.jpg', 'Mahogany', 'Mahogany is a strong reddish-brown wood that is used especially for making furniture and that comes from several tropical trees; also : a tree that produces this wood. : a reddish-brown color. Mahogany is a kind of woodâ€”the straight-grained, reddish-brown timber of three tropical hardwood species of the genus Swietenia, indigenous to the Americas, part of the pantropical chinaberry family, Meliaceae.', 'Imaged used http://plants.swtexture.com/2009/08/tree-swietenia-mahagoni.html', ' '),
(16, 'malapapaya1.jpg', 'Malapapaya', 'Malapapaya is a tall tree reaching a height of about 25 m and a diameter of about 50 cm. Leaves are crowded on twig-apices, widely spreading-downward, simple pinnate, 1-2 mm long; petiole is one third of the length of pinnate leaf; leaflets ovate-oblong, lanceolate from a rounded base, narrowed or shortly acuminate, rounded scallop to saw-tooted edge, 10-25 cm long, and 4-10 cm wide; petiole is very short, more or less 1 cm long. Leaf-blade on the upper surface has distinct fine soft spine in the seedling stage. Inflorescences in panicles ( sometimes with additional flowering branches in the axils of the upper leaves); primary axils stout, about 1.5 m; bearing secondary axils along its length, bract triangular, about 5 mm long; secondary axils about 20 to 40 cm; capitula borne racemosely along the secondary branches on peduncles about 6-15 cm long.', 'Imaged used PhytoImages.siu.edu', 'Source: https://philippineflora.wordpress.com/2009/09/02/malapapaya/'),
(17, 'Mayapis1.jpg', 'Mayapis', 'Mayapis is propagated by seed. It grows into a large tree, reaching as high as 40 to 50 meters in height with a diameter of about 150 centimeters. Its bole is regular and strongly buttressed while its leaves are alternate, simple, smooth on the upper surface, and rough on the lower surface with tufts of stellate hairs. The bark of mayapis is predominantly ridged and brown to dark brown in color, although it turns gray when exposed to strong sunlight. The treeâ€™s inner bark is stringy in texture, brown to pink in color, with vertical white bands beneath the furrows. Mayapis resembles closely the almond tree but it is distinguished by its color, thicker bark, and coarser and larger leaves that have more prominent hairs.', 'Imaged by P.L Malabrigo', 'Source: http://www.philstar.com/cebu-news/674872/mayapis'),
(18, 'Narra.jpg', 'Narra', 'Narra is the Philippine national tree, a majestic reddish hard wood tree, growing to 33 meters nigh and 2 meters in diameter with an irregular fluted trunk. Leaves are compound, pinnate, 15 to 30 centimeters long, with 7 to 11 leaflets which ovate to oblong-ovate, and 5 to 10 centimeters long. Flowers are numerous, yellow, fragrant, and about 1.5 centimeters long, on branched, axillary panicles. Pods are disc-shaped, flat, with winged margins, hairy when young but smooth or nearly so when mature, more or less reticulate and undulate, and very shortly beaked, orbicular to obovate, including the wing 4 to 5.5 centimeters long, and the wing 1 to 1.5 centimeters wide.', 'Imaged used https://durianburgdavao.wordpress.com/2011/09/12/smi-foresters-roamed-forests-in-mindanao-for-mother-trees/', 'Source: http://www.stuartxchange.org/Narra.html'),
(19, 'niog-niogan.JPG', 'Niyog-Niyogan', 'Niyog-niyogan is an erect, glabrous, unbranched shrub growing to a height of 5 meters. Leaves are crowded at the end of the stems, spreading and short-petioled, oblanceolate with a cordate base and an acute apex. Blade is coriaceous and dark-green, coarsely toothed growing to more than 25 centimeters long. Fruit is ovoid, angular, up to 4 centimeters long, on short peduncles and crowded at the axils of the leaves. The leaves and fruits leave a pattern of scars on the trunk.', 'Imaged used http://seventeeneightyfour.blogspot.com/2012/08/', 'Source: http://www.stuartxchange.org/Niyog-niyogan.html'),
(20, 'Red-lauan.jpg', 'Red Lauan', 'This large, Philippine tree has thick dark brown to nearly black bark with a reddish tinge. The trunk is ridged with shallow furrows and bears no branches for the first 20 to 30 metres. The tough, leathery leaves measure up to 17 centimetres long and 7.5 centimetres wide and taper toward the tip. The cream-coloured flowers are borne in clusters of four and are said to have a â€˜sick-likeâ€™ odour. The turban-shaped fruits of the red lauan are around 1.9 centimetres wide, covered with silky yellow hairs and each bears five long wings. Height: up to 50 m and Trunk diameter: up to 2m.', 'Imaged by Flecher and Baylis', 'Source: http://www.arkive.org/red-lauan/shorea-negrosensis/'),
(21, 'Tangisang Bayawak 3.gif', 'Tangisang Bayawak', 'Tangisang-bayauak is a tall, spreading tree, with pale bark. Leaves are broadly or elliptic-ovate, 10 to 17 centimeters long, the base rounded, notched or heart-shaped and the tip tapering to a point, with the margins entire, subexpanded or toothed. Receptacles are about 1 centimeter in diameter, red when ripe, and clustered on long branches.', ' ', 'Source: http://www.stuartxchange.org/Tangisang-bayauak.html'),
(22, 'tibig2.jpg', 'Tibig', 'Tibig is an erect, spreading, dioecious perennial tree, growing to a height of 8-10 meters. Branchlets are hairy. Leaves oblong to elliptic-obovate, 15 to 35 centimeters long and 8 to 12 centimeters wide; soft and pubescent beneath, the margins irregular and distinctly toothed, the apex abruptly acute, and the base auriculate. Midrib of leaves is stout, with 7 to 9 pairs of ascending, curved nerves. Petiole is brown, tomentose, 3 to 5 centimeters long. Tubercles are mostly cauline, occasionally from larger branches, clustered, rebranched, rigid, 20 centimeters long, bracteate. Figs are subglobose, 2 to 3.5 centimeters in diameter, glabrous, fleshy, pedunculate, green, becoming yellowish-white at the base, the umbilical scales exerted. Peduncle is acute, 2 centimeters long, with three bracts.', 'Imaged used https://www.facebook.com/114315955252379/photos/a.134927979857843.26440.114315955252379/142917919058849', 'Source: http://www.stuartxchange.org/Tibig.html'),
(23, 'White Lauan.jpg', 'White Lauan', 'The white lauan belongs to the dipterocarp family, a group of important timber trees that dominate the lowland rainforests of Asia. The white lauan has brown to nearly black bark, although it can look grey when exposed to bright sunlight. The upper part of the trunk may have distinct longitudinal ridges. The leaves of the white lauan have a thin, leathery texture and can measure up to 29 centimetres long and 11 centimetres wide. Dipterocarp plants have fairly large and showy flowers, to attract insects, and the fruit is a single-seeded nut enclosed within a winged case. Height: up to 50 m and Trunk diameter: up to 182 cm.', 'Imaged by P.L Malabrigo', 'Source: http://www.arkive.org/white-lauan/shorea-contorta/');

-- --------------------------------------------------------

--
-- Table structure for table `floraphotos`
--

CREATE TABLE `floraphotos` (
  `id` int(11) NOT NULL,
  `location` varchar(500) NOT NULL,
  `caption` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `floraphotos`
--

INSERT INTO `floraphotos` (`id`, `location`, `caption`) VALUES
(1, 'photos/Anabiong.jpg', 'Anabiong'),
(2, 'photos/antipolo.jpg', 'Antipolo'),
(3, 'photos/Apitong1.jpg', 'Apitong'),
(4, 'photos/Bagtikan 1.jpg', 'Bagtikan'),
(5, 'photos/Bolongeta 1.jpg', 'Bolong-eta'),
(6, 'photos/Dalingdingan.jpg', 'Dalingdingan'),
(7, 'photos/Guijo 1.jpg', 'Guijo'),
(8, 'photos/Hagimit.jpg', 'Hagimit'),
(9, 'photos/Hauili.jpg', 'Hauili'),
(10, 'photos/ipil.jpg', 'Ipil-ipil'),
(11, 'photos/kalantas.jpg', 'Kalantas'),
(13, 'photos/Kamagong 2.jpg', 'Kamagong'),
(14, 'photos/Kupang 4.jpg', 'Kupang'),
(15, 'photos/mahogany.jpg', 'Mahogany'),
(16, 'photos/malapapaya1.jpg', 'Malapapaya'),
(17, 'photos/Mayapis1.jpg', 'Mayapis'),
(18, 'photos/Narra.jpg', 'Narra'),
(19, 'photos/niog-niogan.JPG', 'Niyog-Niyogan'),
(20, 'photos/Red-lauan.jpg', 'Red Lauan'),
(22, 'photos/Tangisang Bayawak 3.gif', 'Tangisang Bayawak'),
(23, 'photos/Tibig.jpg', 'Tibig'),
(24, 'photos/White-lauan.jpg', 'White Lauan');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `image_text`) VALUES
(0, 'banner - Copy.png', 'qq'),
(0, 'images4E9NX0PF.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ID` int(11) NOT NULL,
  `Common Name` varchar(200) NOT NULL,
  `Scientific Name` varchar(200) NOT NULL,
  `Relative Abundance` varchar(200) NOT NULL,
  `Statistics` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ID`, `Common Name`, `Scientific Name`, `Relative Abundance`, `Statistics`) VALUES
(1, 'BRAMINNY KITE', 'Haliatus Indus', ' Few', '12');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `location`, `caption`) VALUES
(4, 'photos/220px-Dark_Knight.jpg', 'batman'),
(3, 'photos/the_joker_cartoon.jpg', 'caption'),
(13, 'photos/imagesKNK9XKD2.jpg', 'qqq'),
(12, 'photos/Screenshot (244).png', ''),
(11, 'photos/Korean-makeup.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `question` varchar(100) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_id`, `question`, `type`) VALUES
(1, 1, 'If Malapaya relative abundance is moderate then what is for Antipolo?', 'mc'),
(2, 2, 'What are the Species of Guijo?', 'mc'),
(3, 3, 'What is the relative abundance of Hawk?', 'mc'),
(4, 4, 'What is the scientific name of Narra?', 'mc'),
(5, 5, 'What is the scientific name of Serpent Eagle?', 'mc'),
(6, 7, 'The family of Apitong is Dipterocarpaceae.', 'tf'),
(7, 8, 'Kamagong the scientific name is Dipterocarpus grandiflorus. ', 'tf'),
(8, 9, 'Spotted Wood Kingfisher the relative abundance is endanger. ', 'tf');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_takers`
--

CREATE TABLE `quiz_takers` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `percentage` int(24) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_takers`
--

INSERT INTO `quiz_takers` (`id`, `username`, `percentage`, `date_time`) VALUES
(1, 'abcd', 50, '2018-03-01 07:17:52'),
(2, 'QWWEERT', 33, '2018-03-01 07:28:34'),
(3, 'pp', 60, '2018-03-02 08:06:26'),
(4, 'a', 0, '2018-03-03 02:38:10'),
(5, 'Jolima', 20, '2018-03-03 02:57:42'),
(6, 'gg', 20, '2018-03-03 03:05:35'),
(7, 'Irish', 50, '2018-03-03 04:22:56'),
(8, 'soo', 20, '2018-03-03 04:30:22'),
(9, 'michaella', 50, '2018-03-03 23:48:11'),
(10, 'Camille', 25, '2018-03-03 23:51:21');

-- --------------------------------------------------------

--
-- Table structure for table `savegames`
--

CREATE TABLE `savegames` (
  `id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `data` longtext CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `name` varchar(10) NOT NULL DEFAULT 'Anonymous',
  `score` int(5) UNSIGNED NOT NULL DEFAULT '0',
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trivias`
--

CREATE TABLE `trivias` (
  `ID` int(11) NOT NULL,
  `trivia` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trivias`
--

INSERT INTO `trivias` (`ID`, `trivia`) VALUES
(1, 'Most species of geckos are nocturnal.  They have a lens in each iris that enlarges in darkness, making their eyes over 350 times more sensitive to light than ours.'),
(5, 'One third of the plant life on the island of Socotra near Yemen cant be found anywhere else on Earth. It has been described as "most alien-looking place on Earth."'),
(6, 'Monitor lizard can survive 8 to 30 year in the wild.'),
(7, 'An ostrich eye is bigger than its brains.'),
(8, 'Hummingbirds are the only birds that can fly backwards and their wings can beat at up to 80 times per second.'),
(9, 'Unlike other lizards, monitor lizard cannot regenerate its tail in the case of loss.'),
(10, 'Most species of monitor lizard have poisonous saliva which facilitates killing of the prey and provides protection against the predators.'),
(11, 'Monitor lizard can reach 4.7 to 122 inches in length and 2.2 to 360 pounds of weight, depending on the species. Komodo dragon is the largest species of monitor lizard.'),
(12, 'Every year, $1.5 billion is spent on pet food. This is four times the amount spent on baby food.'),
(13, 'Methuselah is somewhere in California Inyo National Forest, and was 4,843 years old in 2012. Hyperion is a 379.1-foot-tall coast redwood somewhere in Redwood National Park in California.'),
(14, 'The name gecko comes from the Indonesian Malay language "gekoq."  Even in this language it is not a real word, but an imitation of the chirrups that the gecko makes when interacting with others of its species.'),
(15, 'Dogs nose prints are as unique as human fingerprints and can be used to identify them.'),
(16, 'The slowest fish is the seahorse, which moves along at about 0.01 mph.'),
(20, 'On average, pigs live for about 15 years.'),
(21, 'Bamboo is the fastest-growing woody plant in the world; It can grow 35 inches in a single day.'),
(23, 'Rats are omnivorous, eating nearly any type of food, including dead and dying members of their own species.'),
(24, 'Sharks apparently are the only animals that never get sick. As far as is known, they are immune to every known disease including cancer.'),
(25, 'Strawberry is the only fruit that bears its seeds on the outside. The average strawberry has 200 seeds.'),
(26, 'Snakes scales are made up of something called Keratin, which is the same thing that our fingernails are made from.'),
(27, 'The Thread snake is the smallest snake.  It is only about 10 centimeter (4 inches long) and the size of a toothpick.'),
(28, 'The anaconda, one of the worlds largest snakes, gives birth to its young instead of laying eggs.'),
(29, 'Salamanders will develop missing limb or tail in the next couple of weeks due to incredible power of regeneration.'),
(30, 'Salamanders eat worms and insects. Some species have tongue which can be ten times longer than their body.'),
(31, 'The blood of mammals is red, the blood of insects is yellow, and the blood of lobsters is blue.'),
(32, 'Salamanders can live very long period of time. Chinese giant salamander can live up to 55 years.'),
(33, 'Monkeys can understand written numbers and can even count. They can also understand basic parts of arithmetic and even, in rare cases, multiplication.'),
(34, 'An average size tree can provide enough wood to make 170,000 pencils.'),
(35, 'The bones of a pigeon weigh less than its feathers.'),
(36, 'To attract a female partner, male capuchin monkeys will urinate in their hands and then rub it thoroughly into their fur.'),
(37, '85% of plant life is found in the ocean.'),
(38, 'Monkeys that live in Central and South America are called "New World monkeys." Monkeys that live in Africa and Asia are called "Old World monkeys."'),
(39, 'The Kiwi, national bird of New Zealand, cant fly. It lives in a hole in the ground, is almost blind, and lays only one egg each year. Despite this, it has survived for more than 70 million years.'),
(40, 'The largest animal ever seen alive was a 113.5 foot, 170-ton female blue whale.'),
(41, 'Monkeys are found almost everywhere on Earth, except for Australia and Antarctica.'),
(42, 'The Amazon rainforest produces half the worlds oxygen supply.'),
(43, 'The only domestic animal not mentioned in the Bible is the cat.'),
(44, 'The penalty for killing a cat, 4,000 years ago in Egypt, was death.'),
(45, 'Most deer are born with white spots but lose them within a year.'),
(46, 'Deer take their first steps within half an hour of their birth.'),
(47, 'The worlds smallest mammal is the bumblebee bat of Thailand, weighing less than a penny.'),
(48, 'Hawks are also opportunistic feeders. That means they hunt and eat any available food. Mostly, they hunt rabbits, insects, frogs, squirrels, snakes, rats, and smaller birds.'),
(49, 'Hawks can dive 150 mph through the air when hunting. They can catch a prey both on the ground and in the air. 	'),
(50, 'Antipolo is a large tree, growing up to 30 meters tall. '),
(51, 'Bagtikan is known as one of the light red Philippine mahogany that is known as white lauan in the market. ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `uname`, `pwd`) VALUES
(1, 'quezonadventuregame', 'quezonadventure', 'quead'),
(2, 'Penro', 'penro', 'penro'),
(3, 'Micha', 'micha', 'ella'),
(4, 'Quezon Province', 'quepro', 'quepro'),
(5, 'Michaella', 'michaa', '123'),
(6, 'Karen', 'Karen', 'shaila');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fauna`
--
ALTER TABLE `fauna`
  ADD PRIMARY KEY (`S_ID`);

--
-- Indexes for table `faunae`
--
ALTER TABLE `faunae`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faunaphotos`
--
ALTER TABLE `faunaphotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flora`
--
ALTER TABLE `flora`
  ADD PRIMARY KEY (`S_ID`);

--
-- Indexes for table `florae`
--
ALTER TABLE `florae`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floraphotos`
--
ALTER TABLE `floraphotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `question` (`question`);

--
-- Indexes for table `quiz_takers`
--
ALTER TABLE `quiz_takers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `savegames`
--
ALTER TABLE `savegames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `trivias`
--
ALTER TABLE `trivias`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `faunae`
--
ALTER TABLE `faunae`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `faunaphotos`
--
ALTER TABLE `faunaphotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `florae`
--
ALTER TABLE `florae`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `floraphotos`
--
ALTER TABLE `floraphotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `quiz_takers`
--
ALTER TABLE `quiz_takers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `trivias`
--
ALTER TABLE `trivias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
