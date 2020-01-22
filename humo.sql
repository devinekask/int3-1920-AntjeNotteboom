-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 22, 2020 at 10:14 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `humo`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postcode` int(11) NOT NULL,
  `street` varchar(255) NOT NULL,
  `bus` int(11) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `checkout_products`
--

CREATE TABLE `checkout_products` (
  `id` int(11) NOT NULL,
  `checkout_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `author`, `description`, `price`, `image`) VALUES
(1, 'Boekenreeks', '', 'Zit je met keuzestress en weet je niet welk boek je moet kiezen? Koop dan gewoon de volledige boekenreeks! Plezier gegarandeerd!', '48.95', 'assets/books/boekenreeks.jpg'),
(2, 'Wool', 'Hugh Howey', 'In een geruïneerd en giftig landschap leeft een gemeenschap in een gigantische ondergrondse silo. Honderden meters onder de aardoppervlakte wonen de mensen er in een streng gereguleerde maatschappij. Sheriff Holston, jarenlang een trouwe aanhanger van de wetten van de silo, breekt onverwachts het allergrootste taboe: hij wil naar buiten.', '12.99', 'assets/books/wool.jpg'),
(3, 'Farenheit 451', 'Ray Bradbury', 'De nabije toekomst. Televisie heeft het boek verdrongen en zelf nadenken is uit den boze. Guy Montag is brandweerman; maar in plaats dat hij branden blust, moet hij ze aansteken. Zo vernietigt hij het meest illegale bezit dat je kunt hebben: boeken. De gewetensvraag van een tienermeisje en de zelfmoordpoging van zijn vrouw brengen Montags overtuiging aan het wankelen: hij begint boeken te verstoppen. Wanneer hij ontmaskerd wordt moet hij vluchten voor zijn leven.', '12.99', 'assets/books/fahrenheit.jpg'),
(4, 'Do androids dream of electric sheep', 'Philip K. Dick', 'San Francisco, 2021. De planeet gaat gebukt onder radioactief stof, het restant van Wereldoorlog Terminus. Rijke mensen vluchten naar andere planeten, met levensechte androïden (het enige verschil is dat zij geen empathie tonen) als hulp. Arme mensen mogen slechts androïde huisdieren houden. Wanneer androïden in opstand komen wordt Rick Deckard erop uitgestuurd om ze uit te schakelen. Hij zoekt contact met Eldon Rosen, voorzitter van de organisatie die androïden ontwikkelt.', '12.99', 'assets/books/sheep.jpg'),
(5, 'The Handmaid\'s Tale', 'Margaret Atwood', 'Binnen de grenzen van de voormalige Verenigde Staten heeft een christelijke beweging de macht gegrepen. In deze nieuwe Republiek Gilead dient eenieder naar de letter van het Oude Testament te leven. Vanfred, de vertelster, behoort tot de nieuwe klasse der \'Dienstmaagden\', die slechts één doel heeft: zich voort te planten. Alleen \'s nachts in haar sobere kamer is ze vrij om zich over te geven aan haar illegale herinneringen: het lezen van boeken, haar eigen naam, het nu irrelevant geworden begrip \'liefde\'. In een sobere stijl, die afwisselend koele observatie, ontroering, wanhoop, hartstocht en wrange humor reflecteert, legt Vanfred het zwarte hart bloot dat schuilgaat achter de kalme façade van een reactionair establishment. Een regime dat bepaalde stemmingen in onze maatschappij tot een even logische als huiveringwekkende conclusie doordrijft: is dat een futuristisch schrikbeeld, of de ware nabije toekomst van Amerika?', '12.99', 'assets/books/handmaids.jpg'),
(6, 'Enders Game', 'Orson Scott Card', 'De Aarde heeft twee bloedige invasies van `Kruiperds maar nauwelijks overleefd. Om een derde invasie te voorkomen is de Krijgsschool opgericht, waar veelbelovende kinderen een opleiding krijgen tot gezagvoerder van een sterschip van de Internationale Ruimtevloot. Ender Wiggin wordt op al heel jonge leeftijd gerekruteerd. Bij tactische oefeningen in de strijdzaal blinkt hij uit, waardoor de schoolleiding torenhoge verwachtingen van de jongen krijgt en hem steeds meer onder druk zet. Zal het Ender lukken om de held te worden die de Aarde gaat redden?', '12.99', 'assets/books/enders.jpg'),
(7, 'Snow Crash', 'Neal Stephenson', 'Snow Crash beschrijft de lotgevallen van Hiro Protagonist, een zwaardvechter en pizzabezorger voor CosaNostra Pizza - de maffia dus - in een toekomstige versie van de Verenigde Staten. Technologische ontwikkelingen hebben de VS waarin Hiro leeft zeker niet veranderd in een aards paradijs. Integendeel. Pizzabezorgers zijn altijd gewapend en worden doodgemaakt wanneer ze te laat bezorgen. Nationale overheden en de politie zijn geprivatiseerd en vervangen door vooral op eigen belang gerichte consortiums. De Verenigde Staten zijn opgedeeld in Burbclaves, gigantische autonome buurten waar men een hekel heeft aan buitenstaanders. In de Stille Oceaan drijven grote schepen met tienduizenden wanhopige en gevaarlijke vluchtelingen uit arme landen die proberen illegaal aan land te komen in Californië.', '12.99', 'assets/books/snow.jpg'),
(8, 'The Road', 'Cormac McCarthy', 'Nadat er een gloeiende vuurzee over het land is geraasd, doorkruisen een man en zijn zoontje het doodse Amerikaanse landschap. In deze met as bedekte, vergane wereld volgen zij de weg naar het zuiden. Het enige wat hen rest is te overleven in de snijdende kou, zonder elkaar te verliezen. Ze zijn alles voor elkaar.The Road is een bespiegeling over de dunne scheidslijn tussen beschaving en woestenij, en over de alomvattende en soms beangstigende liefde die een kind voor zijn ouders voelt. ', '12.99', 'assets/books/road.jpg'),
(9, 'I, Robot', 'Isaac Asimov', 'In deze briljante reeks van negen samenhangende korte verhalen beschrijft Isaac Asimov de geschiedenis van de robots. Uit het eenvoudige begin van Robbie, de robot huisbediende kindermeisje, was een steeds meer geperfectioneerde machine gegroeid, die, in uiterlijk en \'innerlijk\' bijna niet meer van de mens te onderscheiden, de mens geholpen had het heelal te veroveren. Tenslotte was de vol maakte robot ontworpen, Stephen Byerley genaamd, die tot eerste Wereld Coördinator was gekozen en de wereld beter bestuurde dan de mens zelf ooit had gekund. In dit boek wordt de toekomst zichtbaar gemaakt door een kaleidoscoop van spannende en soms benauwende avonturen, die evenwel met een grote dosis weldadige humor zijn gekruid.', '12.99', 'assets/books/irobot.jpg'),
(10, 'Ready Player One', 'Ernest Cline', 'In 2045 leeft een aanzienlijk deel van de wereldbevolking in diepe armoede. De enige manier waarop Wade Watts aan alle misère kan ontsnappen, is de OASIS: een online virtuele wereld waar miljarden mensen tegelijk in kunnen vertoeven.\r\nWanneer James Halliday, de excentrieke uitvinder van de OASIS, overlijdt, laat hij een zoektocht achter vol puzzels die te maken hebben met zijn obsessie met de popcultuur van de jaren tachtig. Degene die de jacht als eerste voltooit, zal het vermogen van Halliday erven én de volledige controle krijgen over de OASIS.', '12.99', 'assets/books/player.jpg'),
(11, 'Neuromancer', 'William Gibson', 'De matrix, de wereld in de wereld, een globale consensus-hallucinatie, vertegenwoordiging van elk byte data in cyberspace. Case was een van de beste cyber-cowboys of hackers, totdat een wraakzuchtige ex-werkgever zijn zenuwsysteem sloopt gebruik makende van een Russisch mycotoxin. Enige tijd later biedt een nieuwe werkgever hem een laatste kans, doel van de opdracht: de ondenkbaar krachtige artificiële intelligentie die rond de aarde cirkelt in dienst van het duistere Tessier-Ashpool clan.', '12.99', 'assets/books/neuromancer.jpg'),
(12, 'Bladwijzer', '', 'Vergeet nooit meer waar je zat in je boek met deze bladwijzer! In thema van de highlight van de week: Wool van Hugh Howey.', '4.50', 'assets/books/bladwijzer.jpg'),
(13, 'Boekensteun', '', 'Al je boeken netjes op een rij met de Humo boekensteun. Daarnaast ziet het er ook nog eens fantastisch uit!', '18.50', 'assets/books/boekensteun.jpg'),
(14, 'Agenda 2020', '', '', '16.95', 'assets/books/agenda.jpg'),
(15, 'Leeslichtje Retro', '', 'Een retro leeslampje voor de echte hipsters onder ons. Lees nu ook je boek in het donker met die handig leeslampje. ', '18.50', 'assets/books/retro.jpg'),
(16, 'Mini boeklicht', '', 'Lees nu ook in het donker je boek met het mini leeslampje. Het is makkelijk aan te brengen door een klik systeem en verstelbaar waardoor je alle hoeken van de pagina kan zien. ', '9.90', 'assets/books/boekenlicht.jpg'),
(17, 'Groot vergrootglas', '', 'Geen bril meer nodig om je boeken te lezen met dit professioneel vergrootglas van Magnif-i. ', '12.50', 'assets/books/vergrootglas.jpg'),
(18, 'Professioneel vergrootglas', '', 'Geen bril meer nodig om je boeken te lezen met dit professioneel vergrootglas van Magnif-i. ', '7.50', 'assets/books/profvergrootglas.jpg'),
(19, '12 maanden', '', '', '15.95', 'assets/books/12maanden.jpg'),
(20, '24 maanden', '', '', '14.36', 'assets/books/24maanden.jpg'),
(21, '35 maanden', '', '', '12.76', 'assets/books/35maanden.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout_products`
--
ALTER TABLE `checkout_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `checkout_products`
--
ALTER TABLE `checkout_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
