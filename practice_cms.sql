-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 17, 2018 at 10:15 AM
-- Server version: 5.5.61-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `practice_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `approve` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `description`, `image`, `approve`, `uid`, `created`) VALUES
(1, 'The Ganges', 'The Ganges (/ˈɡændʒiːz/ GAN-jeez), also known as Ganga (Hindustani: [ˈɡəŋɡaː]), is a trans-boundary river of Asia which flows through the nations of India and Bangladesh. The 2,525 km (1,569 mi) river rises in the western Himalayas in the Indian state of Uttarakhand, and flows south and east through the Gangetic Plain of North India. After entering West Bengal, it divides into two rivers: the Hooghly River and the Padma River. The Hooghly, or Adi Ganga, flows through several districts of West Bengal and into the Bay of Bengal near Sagar Island. The other, the Padma, also flows into and through Bangladesh, and also empties into the Bay of Bengal. The Ganges is the third largest river in the world by discharge.', '../../uploads/Varanasiganga.jpg', 1, 1, '2018-08-10 07:35:43'),
(4, 'The peafowl', 'The peafowl include three species of birds in the genera Pavo and Afropavo of the Phasianidae family, the pheasants and their allies. There are two Asiatic species: the blue or Indian peafowl originally of the Indian subcontinent; and the green peafowl of Southeast Asia; and one African species, the Congo peafowl, native only to the Congo Basin. Male peafowl are known for their piercing call and their extravagant plumage. The latter is especially prominent in the Asiatic species, who have an eye-spotted "tail" or "train" of covert feathers which they display as part of a courtship ritual. The term peacock is properly reserved for the male; the female is known as a peahen, and the immature offspring are sometimes called peachicks.[1]', '../../uploads/peafowl.jpg', 1, 2, '2018-08-10 07:35:43'),
(5, 'Camel', 'A camel is an even-toed ungulate in the genus Camelus that bears distinctive fatty deposits known as "humps" on its back. Camels have long been domesticated and, as livestock, they provide food (milk and meat) and textiles (fiber and felt from hair). As working animals, camels—which are uniquely suited to their desert habitats—are a vital means of transport for passengers and cargo. There are three surviving species of camel. The one-humped dromedary makes up 94% of the world''s camel population, and the two-humped Bactrian camel makes up the remainder. The Wild Bactrian camel is a separate species and is now critically endangered. ', '../../uploads/camel.jpg', 1, 3, '2018-08-10 07:35:43'),
(6, 'Tiger', 'The tiger (Panthera tigris) is the largest cat species, most recognizable for its pattern of dark vertical stripes on reddish-orange fur with a lighter underside. The species is classified in the genus Panthera with the lion, leopard, jaguar, and snow leopard. It is an apex predator, primarily preying on ungulates such as deer and bovids. It is territorial and generally a solitary but social predator, often requiring large contiguous areas of habitat that support its prey requirements. This, coupled with the fact that it is indigenous to some of the more densely populated places on Earth, has caused significant conflicts with humans. ', '../../uploads/tiger.jpg', 0, 2, '2018-08-10 07:35:43'),
(7, 'பூமியின்', 'பூமியானது சூரியனின் மூன்றாவது கோளாகும், மேலும் உயிர்வாழ்வதற்கான ஒரே வானியல் பொருள். ரேடியோமெட்ரிக் டேட்டிங் மற்றும் ஆதார ஆதாரங்கள் ஆகியவற்றின் படி, பூமி 4.5 பில்லியன் ஆண்டுகளுக்கு முன்பு உருவாக்கப்பட்டது. புவியின் புவியீர்ப்பு விண்வெளியில், குறிப்பாக சன் மற்றும் சந்திரன், புவியின் ஒரே இயல்பான செயற்கைக்கோள் ஆகியவற்றுடன் தொடர்புகொள்கிறது. பூமி சூரியனைச் சுற்றிலும் 365.26 நாட்களில் சுற்றுப்பாதை உள்ளது, இது புவி வருடமாக அறியப்படுகிறது. இந்த நேரத்தில் பூமி அதன் அச்சு பற்றி 366.26 முறை சுழலும்.', '../../uploads/earth.jpg', 1, 3, '2018-08-10 07:35:43'),
(8, 'മഴവില്ല്', 'ആകാശത്ത് പ്രത്യക്ഷപ്പെടുന്ന പ്രകാശത്തിന്റെ ഒരു സ്പെക്ട്രം പ്രതിഫലനം, പ്രകാശം റിഫ്പ്രഷൻ, വെളിച്ചം വീശൽ എന്നിവ വഴി സംഭവിക്കുന്ന ഒരു കാലാവസ്ഥാപ്രതിഭാസമാണ് മഴവില്ല്. ഒരു മൾട്ടിചരൺ വൃത്താകൃതിയിലുള്ള ആർച്ചിന്റെ രൂപമെടുക്കുന്നു. സൂര്യപ്രകാശത്താൽ നേരിട്ട് മഴയത്ത് പ്രത്യക്ഷപ്പെടുന്ന സൂര്യപ്രകാശത്തിൽ എപ്പോഴും മഴയുടെ ഭാഗത്ത് പ്രത്യക്ഷപ്പെടുന്നു.', '../../uploads/rainbow.jpg', 1, 2, '2018-08-10 07:35:43'),
(9, 'The whale shark ', 'The whale shark (Rhincodon typus) is a slow-moving, filter-feeding carpet shark and the largest known extant fish species. The largest confirmed individual had a length of 12.65 m (41.5 ft) and a weight of about 21.5 t (47,000 lb).[8] The whale shark holds many records for size in the animal kingdom, most notably being by far the largest living nonmammalian vertebrate. It is the sole member of the genus Rhincodon and the only extant member of the family Rhincodontidae which belongs to the subclass Elasmobranchii in the class Chondrichthyes. Before 1984 it was classified as Rhiniodon into Rhinodontidae. ', '../../uploads/whale_shark.jpg', 1, 1, '2018-08-10 07:35:43'),
(10, ' Orca', 'The killer whale or orca (Orcinus orca) is a toothed whale belonging to the oceanic dolphin family, of which it is the largest member. Killer whales have a diverse diet, although individual populations often specialize in particular types of prey. Some feed exclusively on fish, while others hunt marine mammals such as seals and dolphins. They have been known to attack baleen whale calves, and even adult whales. Killer whales are apex predators, as no animal preys on them. A cosmopolitan species, they can be found in each of the world''s oceans in a variety of marine environments, from Arctic and Antarctic regions to tropical seas, absent only from the Baltic and Black seas, and some areas of the Arctic Ocean. ', '../../uploads/whale_shark.jpg', 0, 2, '2018-08-10 07:35:43'),
(11, 'DoS attack', 'In computing, a denial-of-service attack (DoS attack) is a cyber-attack in which the perpetrator seeks to make a machine or network resource unavailable to its intended users by temporarily or indefinitely disrupting services of a host connected to the Internet. Denial of service is typically accomplished by flooding the targeted machine or resource with superfluous requests in an attempt to overload systems and prevent some or all legitimate requests from being fulfilled.[1]', '../../uploads/dosAttack.png', 0, 3, '2018-08-10 07:35:43'),
(12, 'DDoS attack', 'In a distributed denial-of-service attack (DDoS attack), the incoming traffic flooding the victim originates from many different sources. This effectively makes it impossible to stop the attack simply by blocking a single source.\r\n\r\nA DoS or DDoS attack is analogous to a group of people crowding the entry door of a shop, making it hard for legitimate customers to enter, disrupting trade. ', '../../uploads/ddos.jpeg', 1, 2, '2018-08-10 07:35:43'),
(13, 'SQL injection ', 'SQL injection is a code injection technique, used to attack data-driven applications, in which nefarious SQL statements are inserted into an entry field for execution (e.g. to dump the database contents to the attacker).[1] SQL injection must exploit a security vulnerability in an application''s software, for example, when user input is either incorrectly filtered for string literal escape characters embedded in SQL statements or user input is not strongly typed and unexpectedly executed. SQL injection is mostly known as an attack vector for websites but can be used to attack any type of SQL database. ', '', 1, 2, '2018-08-10 07:35:43'),
(14, 'Lotus flower', 'Nelumbo nucifera, also known as Indian lotus, sacred lotus, bean of India, Egyptian bean or simply lotus, is one of two extant species of aquatic plant in the family Nelumbonaceae. The Linnaean binomial Nelumbo nucifera is the currently recognized name for this species, which has been classified under the former names, Nelumbium speciosum Willd. and Nymphaea nelumbo, among others. (These names are obsolete synonyms and are avoided in current works.) This plant is an aquatic perennial. Under favorable circumstances its seeds may remain viable for many years, with the oldest recorded lotus germination being from that of seeds 1,300 years old recovered from a dry lakebed in northeastern China.[1] ', '../../uploads/220px-Sacred_lotus_Nelumbo_nucifera.jpg', 1, 2, '2018-08-10 07:35:43'),
(15, 'A mountain', 'A mountain is a large landform that stretches above the surrounding land in a limited area, usually in the form of a peak. A mountain is generally steeper than a hill. Mountains are formed through tectonic forces or volcanism. These forces can locally raise the surface of the earth. Mountains erode slowly through the action of rivers, weather conditions, and glaciers. A few mountains are isolated summits, but most occur in huge mountain ranges. ', '../../uploads/mountain.jpg', 0, 2, '2018-08-10 07:35:43'),
(16, 'Checking', 'Checking if the user Id gets stored along with content ', '', 0, 2, '2018-08-10 07:35:43'),
(17, 'Amazon.com, ', 'Amazon.com, Inc., doing business as Amazon (/ˈæməˌzɒn/), is an American electronic commerce and cloud computing company based in Seattle, Washington, that was founded by Jeff Bezos on July 5, 1994. The tech giant is the largest Internet retailer in the world as measured by revenue and market capitalization, and second largest after Alibaba Group in terms of total sales.[3] The amazon.com website started as an online bookstore and later diversified to sell video downloads/streaming, MP3 downloads/streaming, audiobook downloads/streaming, software, video games, electronics, apparel, furniture, food, toys, and jewelry. The company also produces consumer electronics—Kindle e-readers, Fire tablets, Fire TV, and Echo—and is the world''s largest provider of cloud infrastructure services (IaaS and PaaS).[4] Amazon also sells certain low-end products under its in-house brand AmazonBasics. ', '', 0, 2, '2018-08-10 07:35:43');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1533199561),
('m130524_201442_init', 1533199571);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `role` int(4) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin', 'q2_0-5bH8FOf5Bu1Zswt0dY51BqDnQjY', '$2y$13$YsR47Zi.VeSWp7lqlNDNAeLupVoeQceoymliKsK.fkgN/4tkxC4F6', NULL, 'admin@admin.in', 10, 1533200318, 1533200318, 20),
(2, 'Nuser', 'cUiJRQW_lpHQGsHyIsrIPW8ZDIhKxsUy', '$2y$13$l7J0yNoBYLGeQ39biosb3O.sT11ATRffbEEPeCU9KHyFBA0tVPZvK', NULL, 'user@user.in', 10, 1533201858, 1533201858, 10),
(3, 'Micheal', 'z6PdZ931vgQU5TqgheODn64OvjkFbLZb', '$2y$13$VEo8bnKjwFt/HbiZnQsF2uNfNlxsxzIucEwgmQR3fwyHGrTMLqjL2', NULL, 'micheal@micheal.com', 10, 1533539058, 1533539058, 20);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
