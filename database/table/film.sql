-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 13 Janvier 2019 à 20:14
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `mediateque`
--

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) COLLATE utf8_bin NOT NULL,
  `duree` int(10) NOT NULL,
  `resume` varchar(500) COLLATE utf8_bin NOT NULL,
  `realisateur` varchar(40) COLLATE utf8_bin NOT NULL,
  `RefCat` int(10) unsigned NOT NULL,
  `img` varchar(500) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `RefCat` (`RefCat`),
  KEY `RefCat_2` (`RefCat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=22 ;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`id`, `nom`, `duree`, `resume`, `realisateur`, `RefCat`, `img`) VALUES
(1, 'Fight Club', 151, 'Le narrateur, sans identitÃ© prÃ©cise, vit seul, travaille seul, dort seul, mange seul ses plateaux-repas pour une personne comme beaucoup d`autres personnes seules qui connaissent la misÃ¨re humaine, morale et sexuelle.', 'David Fincher', 1, 'https://m.media-amazon.com/images/M/MV5BMjJmYTNkNmItYjYyZC00MGUxLWJhNWMtZDY4Nzc1MDAwMzU5XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg'),
(2, 'Intouchable', 107, 'A la suite d`un accident de parapente, Philippe, riche aristocrate, engage comme aide Ã  domicile Driss, un jeune de banlieue tout juste sorti de prison! ', 'Eric Toledano', 2, 'http://fr.web.img6.acsta.net/r_1280_720/medias/nmedia/18/82/69/17/19806656.jpg'),
(3, 'Gravity', 91, 'Pour sa premiÃ¨re expÃ©dition Ã  bord d`une navette spatiale, le docteur Ryan Stone, brillante experte en ingÃ©nierie mÃ©dicale, accompagne l`astronaute chevronnÃ© Matt Kowalsky qui effectue son dernier vol avant de prendre sa retraite.', 'Alfonso CuarÃ³n', 1, 'http://fr.web.img2.acsta.net/c_215_290/pictures/210/232/21023233_20130729173134181.jpg'),
(4, 'Gladiator', 171, 'Le gÃ©nÃ©ral romain Maximus est le plus fidÃ¨le soutien de l`empereur Marc AurÃ¨le, qu`il a conduit de victoire en victoire avec une bravoure et un dÃ©vouement exemplaires.', 'Ridley Scott', 4, 'https://is1-ssl.mzstatic.com/image/thumb/Video71/v4/85/1c/82/851c823f-271e-877f-21ef-766b29f3a3a6/mzm.gjakfclu.lsr/268x0w.png'),
(5, 'Django Unchained', 165, 'Le parcours d`un chasseur de prime allemand et d`un homme noir pour retrouver la femme de ce dernier retenue en esclavage par le propriÃ©taire d`une plantation...', 'Quentin Tarantino', 4, 'https://cdn-s-www.republicain-lorrain.fr/images/36776e02-4297-454f-a6da-0a27f3e1144c/BES_06/illustration-django-unchained_1-1531087962.jpg'),
(6, 'Old Boy', 120, 'Ã€ la fin des annÃ©es 80, Oh Dae-Soo, pÃ¨re de famille sans histoire, est enlevÃ© un jour devant chez lui.', 'Park Chan-wook', 5, 'http://fr.web.img6.acsta.net/c_215_290/medias/nmedia/18/35/24/25/18383433.jpg'),
(7, 'Dracula', 155, 'En 1492, le prince Vlad Dracul, revenant de combattre les armÃ©es turques, trouve sa fiancÃ©e suicidÃ©e.', 'Francis Ford Coppola', 5, 'http://fr.web.img6.acsta.net/c_215_290/medias/nmedia/18/64/49/73/18857494.jpg'),
(8, 'Retour vers le futur', 154, '1985. Le jeune Marty McFly mÃ¨ne une existence anonyme auprÃ¨s de sa petite amie Jennifer, seulement troublÃ©e par sa famille en crise et un proviseur qui serait ravi de l`expulser du lycÃ©e.', 'Robert Zemeckis', 6, 'http://fr.web.img3.acsta.net/c_215_290/medias/nmedia/18/35/91/26/18686482.jpg'),
(9, 'Inception', 148, 'Dom Cobb est un voleur expÃ©rimentÃ© Ã  le meilleur qui soit dans l`art pÃ©rilleux de l`extraction : sa spÃ©cialitÃ© consiste Ã  s`approprier les secrets les plus prÃ©cieux d`un individu', 'Christopher Nolan', 6, 'https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_UX182_CR0,0,182,268_AL_.jpg'),
(10, 'Spider-Man 2', 135, '2 ans aprÃ¨s avoir choisi sa vie de super-hÃ©ros, Peter Parker ne parvient plus Ã  gÃ©rer sa double vie. Il perd son boulot, Mary-Jane sait qu''elle ne peut plus compter sur lui, et ses Ã©tudes prennent le mÃªme chemin.', 'Sam Raimi', 6, 'https://aws.vdkimg.com/film/6/4/5/4/64543_poster_scale_188x250.jpg'),
(11, '300', 117, 'AdaptÃ© du roman graphique de Frank Miller, 300 est un rÃ©cit Ã©pique de la Bataille des Thermopyles, qui opposa en l''an - 480 le roi LÃ©onidas et 300 soldats spartiates Ã  XerxÃ¨s et l''immense armÃ©e perse.', 'Zack Snyder', 7, 'https://aws.vdkimg.com/film/4/1/0/4/4104_poster_scale_188x250.jpg'),
(12, 'WALL-E', 98, 'Faites la connaissance de WALL-E (prononcez "Walli") : WALL-E est le dernier Ãªtre sur Terre et s''avÃ¨re Ãªtre un... petit robot ! 700 ans plus tÃ´t, l''humanitÃ© a dÃ©sertÃ© notre planÃ¨te laissant Ã  cette incroyable petite machine le soin de nettoyer la Terre.', 'Andrew Stanton', 9, 'https://aws.vdkimg.com/film/5/0/8/7/50876_poster_scale_188x250.jpg'),
(13, 'Le ChÃ¢teau ambulant', 119, 'La jeune Sophie, Ã¢gÃ©e de 18 ans, travaille sans relÃ¢che dans la boutique de chapelier que tenait son pÃ¨re avant de mourir. Lors de l''une de ses rares sorties en ville, elle fait la connaissance de Hauru le Magicien. Celui-ci est extrÃªmement sÃ©duisant, mais n''a pas beaucoup de caractÃ¨re...', 'Hayao Miyazaki', 9, 'https://aws.vdkimg.com/film/7/6/2/6/76265_poster_scale_188x250.jpg'),
(14, 'Il Ã©tait une fois dans l''Ouest', 175, 'Alors qu''il prÃ©pare une fÃªte pour sa femme, Bet McBain est tuÃ© avec ses trois enfants. Jill McBain hÃ©rite alors des terres de son mari, terres que convoite Morton, le commanditaire du crime (celles-ci ont de la valeur maintenant que le chemin de fer doit y passer). Mais les soupÃ§ons se portent sur un aventurier, Cheyenne...', 'Sergio Leone', 8, 'https://aws.vdkimg.com/film/7/2/3/3/7233_poster_scale_188x250.jpg'),
(15, 'Les Huit salopards', 187, 'AprÃ¨s la Guerre de SÃ©cession, huit voyageurs se retrouvent coincÃ©s dans un refuge au milieu des montagnes. Alors que la tempÃªte s''abat au-dessus du massif, ils rÃ©alisent qu''ils n''arriveront peut-Ãªtre pas Ã  rallier Red Rock comme prÃ©vu...', 'Quentin Tarantino', 8, 'https://aws2.vdkimg.com/film/1/1/9/6/1196585_poster_scale_188x250.jpg'),
(16, 'Bienvenue chez les Ch''tis', 106, 'Philippe Abrams est directeur de la poste de Salon-de-Provence. Il est mariÃ© Ã  Julie, dont le caractÃ¨re dÃ©pressif lui rend la vie impossible. Pour lui faire plaisir, Philippe fraude afin d''obtenir une mutation sur la CÃ´te d''Azur.', 'Dany Boon', 2, 'https://aws.vdkimg.com/film/4/9/6/0/4960_poster_scale_188x250.jpg'),
(17, 'Shining', 146, 'Jack Torrance, gardien d''un hÃ´tel fermÃ© l''hiver, sa femme et son fils Danny s''apprÃªtent Ã  vivre de longs mois de solitude. Danny, qui possÃ¨de un don de mÃ©dium, le ', 'Stanley Kubrick', 3, 'https://aws3.vdkimg.com/film/6/3/7/5/63755_poster_scale_188x250.jpg'),
(18, 'The Dark Knight : Le Chevalier Noir', 152, 'Dans ce nouveau volet, Batman augmente les mises dans sa guerre contre le crime. Avec l''appui du lieutenant de police Jim Gordon et du procureur de Gotham, Harvey Dent, Batman vise Ã  Ã©radiquer le crime organisÃ© qui pullule dans la ville.', 'Christopher Nolan', 3, 'https://aws.vdkimg.com/film/5/1/9/4/51946_poster_scale_188x250.jpg'),
(19, 'Pulp Fiction', 178, 'Pulp Fiction est une triple histoire de truands dont les destins finissent par se croiser. Le film dÃ©crit l''odyssÃ©e sanglante et burlesque de petits malfrats dans la jungle d''Hollywood. Deux tueurs Ã  gages Ã  la langue bien pendue, un dangereux gangster mariÃ© Ã  une camÃ©e, un boxeur roublard, des prÃªteurs sur gages sadiques, un caÃ¯d Ã©lÃ©gant et dÃ©vouÃ©, un dealer bon mari et deux tourtereaux Ã  la gÃ¢chette facile...', 'Quentin Tarantino', 7, 'https://aws.vdkimg.com/film/6/1/3/3/61333_poster_scale_188x250.jpg'),
(20, 'Jurassic Park', 127, 'Ne pas rÃ©veiller le chat qui dort... C''est ce que le milliardaire John Hammond aurait dÃ» se rappeler avant de se lancer dans le "clonage" de dinosaures. C''est Ã  partir d''une goutte de sang absorbÃ©e par un moustique fossilisÃ© que John Hammond et son Ã©quipe ont rÃ©ussi Ã  faire renaÃ®tre une dizaine d''espÃ¨ces de dinosaures.', 'Steven Spielberg', 10, 'https://aws.vdkimg.com/film/7/6/3/7/7637_poster_scale_188x250.jpg'),
(21, 'Les Dents de la Mer', 130, 'Ã€ quelques jours du dÃ©but de la saison estivale, les habitants de la petite station balnÃ©aire d''Amity sont mis en Ã©moi par la dÃ©couverte sur le littoral du corps atrocement mutilÃ© d''une jeune vacanciÃ¨re. Pour Martin Brody, le chef de la police, il ne fait aucun doute que la jeune fille a Ã©tÃ© victime d''un requin.', 'Steven Spielberg', 10, 'https://aws.vdkimg.com/film/1/0/7/0/10709_poster_scale_188x250.jpg');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `fk_categorie_refcat` FOREIGN KEY (`RefCat`) REFERENCES `categorie` (`RefCat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
