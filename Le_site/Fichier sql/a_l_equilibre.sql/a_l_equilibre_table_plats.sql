
-- --------------------------------------------------------

--
-- Structure de la table `plats`
--

CREATE TABLE `plats` (
  `code_plat` varchar(8) NOT NULL,
  `nom_plat` varchar(150) DEFAULT NULL,
  `code_type_plat` varchar(8) NOT NULL,
  `prix_plat` decimal(5,0) DEFAULT NULL,
  `description_plat` varchar(500) DEFAULT NULL,
  `image_plat` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `plats`
--

INSERT INTO `plats` (`code_plat`, `nom_plat`, `code_type_plat`, `prix_plat`, `description_plat`, `image_plat`) VALUES
('PLAT0001', 'STRAWBERRY MARTINI ', 'TYPLAT01', '6', 'Une envie de fraise ? Un goût doux et agréable pour tous les amateurs de fruits rouges ! Venez découvrir ce cocktail qui rappelle l’esprit des fêtes en été !', 'STRAWBERRY MARTINI .jpg'),
('PLAT0002', 'MOJITO', 'TYPLAT01', '6', 'A base de menthe fraîche et de limonade dans un fond d’alcool. C\'est un incontournable lors de soirées évènementielles ! Une recette peine de charme qui saura en séduire plus d’un !', 'MOJITO.jpg'),
('PLAT0003', 'SANGRIA', 'TYPLAT01', '4', 'un savoureux mélange à l’espagnol ! Une envie de fruits rouge ? Une envie de fraîcheur ? Une envie de voyager vers les pays conviviaux ? Alors ce cocktail est parfait pour vous !', 'SANGRIA.jpg'),
('PLAT0004', 'ORANGE', 'TYPLAT01', '6', 'Cocktail sympathique à l’orange ! Un goût sucré tout en gardant une saveur naturelle. Pour tous les amateurs d’orange ce cocktail est parfait pour vous !', 'ORANGE.jpg'),
('PLAT0005', 'MARGARITA', 'TYPLAT01', '6', 'Une envie de fraîcheur ? Une envie de goût ? Une envie de cocktail revigorant ? La margarita est faite pour vous !', 'MARGARITA.jpg'),
('PLAT0006', 'BLOODY MARY', 'TYPLAT01', '6', 'Un cocktail fruité unique ! Pour tous ceux qui aiment déguster un panel de cocktails, celui-ci est tout particulièrement attrayant !', 'BLOODY MARY.jpg'),
('PLAT0007', 'LE SOUR', 'TYPLAT01', '6', 'Boisson fortement agréable ! Pour tous les amateurs de cocktails et pour les fans de cette boisson !', 'LE SOUR.jpg'),
('PLAT0008', 'LE DAÏQUIRI', 'TYPLAT01', '6', 'Un cocktail atypique que l\'on ne trouve pas partout ! Optez pour un petit moment de détente assuré avec cette consommation !', 'LE DAÏQUIRI.jpg'),
('PLAT0009', 'LA BANANE', 'TYPLAT02', '4', 'La banane une des spécialités clé de nos food trucks ! Venez découvrir tous les mariages possibles avec cette saveur ! Une envie de dessert innovant ? Choisissez cette glace là !', 'LA BANANE.jpg'),
('PLAT0010', 'LA FRAMBOISE', 'TYPLAT02', '4', 'Pour une glace spéciale. Ce dessert saura vous rappeler le goût naturel de la framboise ! Optez pour la douceur et le léger parfum qu’incarne ce dessert. Soyez 100% satisfaits !', 'LA FRAMBOISE.jpg'),
('PLAT0011', 'LA CARAMEL', 'TYPLAT02', '4', 'Un dessert sympathique de saison au doux caramel. Une dégustation agréable en tout simplicité. Le parfait mélange d’œufs sucrés au caramel vous emmènera loin de vos soucis !', 'LA CARAMEL.jpg'),
('PLAT0012', 'LA CHOCOLAT', 'TYPLAT02', '4', 'Un classique ! Le chocolat : célèbre saveur cotée chez les français. Venez découvrir nos variétés de saveurs au chocolat blanc, noir, nous vous garantissons une bonne dégustation !', 'LA CHOCOLAT.jpg'),
('PLAT0013', 'LA PISTACHE', 'TYPLAT02', '4', 'Une saveur pleine de fraîcheur et goût ! Venez être gargarisé par cette glace à la pistache des plus délectables !', 'LA PISTACHE.jpg'),
('PLAT0014', 'LA CITRON', 'TYPLAT02', '4', 'Un goût unique, une saveur transcendante, une douceur concentrée en un seul dessert ! Une glace 100% recommandée pour tous les affamés et les amateurs de citrons !', 'LA CITRON.jpg'),
('PLAT0015', 'LA VANILLE', 'TYPLAT02', '4', 'Un grand classique que tout le monde apprécie ; la glace à la vanille ne vous décevra certainement pas ! Pour une dégustation unique et faite maison, optez pour ce magnifique dessert !', 'LA VANILLE.jpg'),
('PLAT0016', 'GLACE AU YAOURT', 'TYPLAT02', '4', 'Un dessert appétissant et revigorant ! Rien de tel qu\'une bonne glace au yaourt maison pour se rafraîchir ou pour s\'accorder un moment de plaisir lors d\'un évènement !', 'GLACE AU YAOURT.jpg'),
('PLAT0017', 'Gâteau au yaourt', 'TYPLAT03', '2', 'Quoi de mieux que de finir un repas avec un bon et beau gâteau à partager à table ? Goûter, pot de départ et bien sûr, l\'incontournable gâteau d\'anniversaire ! Les recettes les plus simples de gâteaux sont souvent les plus appréciées. Avec un gâteau au chocolat, au yaourt ou aux pommes, vous êtes certains de faire plaisir à tout le monde.', 'Gâteau au yaourt.jpg'),
('PLAT0018', 'Gâteau moelleux pommes/poires', 'TYPLAT03', '2', 'Quoi de mieux que de finir un repas avec un bon et beau gâteau à partager à table ? Goûter, pot de départ et bien sûr, l\'incontournable gâteau d\'anniversaire ! Les recettes les plus simples de gâteaux sont souvent les plus appréciées. Avec un gâteau au chocolat, au yaourt ou aux pommes, vous êtes certains de faire plaisir à tout le monde.', 'Gâteau moelleux pommes/poires.jpg'),
('PLAT0019', 'Gâteau aux pommes-poires', 'TYPLAT03', '2', 'Quoi de mieux que de finir un repas avec un bon et beau gâteau à partager à table ? Goûter, pot de départ et bien sûr, l\'incontournable gâteau d\'anniversaire ! Les recettes les plus simples de gâteaux sont souvent les plus appréciées. Avec un gâteau au chocolat, au yaourt ou aux pommes, vous êtes certains de faire plaisir à tout le monde.', 'Gâteau aux pommes-poires.jpg'),
('PLAT0020', 'Gâteau au chocolat magique', 'TYPLAT03', '2', 'Quoi de mieux que de finir un repas avec un bon et beau gâteau à partager à table ? Goûter, pot de départ et bien sûr, l\'incontournable gâteau d\'anniversaire ! Les recettes les plus simples de gâteaux sont souvent les plus appréciées. Avec un gâteau au chocolat, au yaourt ou aux pommes, vous êtes certains de faire plaisir à tout le monde.', 'Gâteau au chocolat magique.jpg'),
('PLAT0021', 'Roulé à la fraise', 'TYPLAT03', '2', 'Quoi de mieux que de finir un repas avec un bon et beau gâteau à partager à table ? Goûter, pot de départ et bien sûr, l\'incontournable gâteau d\'anniversaire ! Les recettes les plus simples de gâteaux sont souvent les plus appréciées. Avec un gâteau au chocolat, au yaourt ou aux pommes, vous êtes certains de faire plaisir à tout le monde.', 'Roulé à la fraise.jpg'),
('PLAT0022', 'Cuisiner Desserts Gâteau\nFraisier', 'TYPLAT03', '2', 'Quoi de mieux que de finir un repas avec un bon et beau gâteau à partager à table ? Goûter, pot de départ et bien sûr, l\'incontournable gâteau d\'anniversaire ! Les recettes les plus simples de gâteaux sont souvent les plus appréciées. Avec un gâteau au chocolat, au yaourt ou aux pommes, vous êtes certains de faire plaisir à tout le monde.', 'Cuisiner Desserts Gâteau.jpg'),
('PLAT0023', 'Gâteau ananas', 'TYPLAT03', '2', 'Quoi de mieux que de finir un repas avec un bon et beau gâteau à partager à table ? Goûter, pot de départ et bien sûr, l\'incontournable gâteau d\'anniversaire ! Les recettes les plus simples de gâteaux sont souvent les plus appréciées. Avec un gâteau au chocolat, au yaourt ou aux pommes, vous êtes certains de faire plaisir à tout le monde.', 'Gâteau ananas.jpg'),
('PLAT0024', 'Gâteaux à la noix de coco', 'TYPLAT03', '2', 'Quoi de mieux que de finir un repas avec un bon et beau gâteau à partager à table ? Goûter, pot de départ et bien sûr, l\'incontournable gâteau d\'anniversaire ! Les recettes les plus simples de gâteaux sont souvent les plus appréciées. Avec un gâteau au chocolat, au yaourt ou aux pommes, vous êtes certains de faire plaisir à tout le monde.', 'Gâteaux à la noix de coco.jpg'),
('PLAT0025', 'BANANA SPLIT', 'TYPLAT04', '5', 'Petite crêpe pour raviver les papilles ! Venez déguster ce produit dans un style décontracté ! Ingrédients : Crêpe roulée, fraise, banane, coulis de fruits rouges et chantilly.', 'BANANA SPLIT.jpg'),
('PLAT0026', 'CLASSIQUE', 'TYPLAT04', '5', 'Une envie de crêpe aux douces saveurs ? La classique est parfaite pour vous ! Bon appétit ! Ingrédients : Galette de sarrasin, œuf, jambon, emmental, paprika, basilic.', 'CLASSIQUE.jpg'),
('PLAT0027', 'POMME CARAMEL', 'TYPLAT04', '5', 'Un dessert sucré et doux. Pour les amateurs de bons goûts cette crêpe est parfaite ! Ingrédients : Crêpe sucrée, pommes caramélisées, coulis de caramel au beurre salé, glace vanille.', 'POMME CARAMEL.jpg'),
('PLAT0028', 'FORESTIÈRE', 'TYPLAT04', '5', 'Une crêpe sur la nature. Une petite dégustation sympathique vous attend ! Ingrédients : Crêpe salée, poulet, champignons, œuf, crème, oignons caramélisés, salade.', 'FORESTIÈRE.jpg'),
('PLAT0029', 'LA FRAISE', 'TYPLAT04', '5', 'Une envie d\'un dessert harmonieux et plein de saveurs ? Un chef d\'oeuvre concentré en un seul dessert ! Bonne dégustation de cette crêpe à la fraise succulente !', 'LA FRAISE.jpg'),
('PLAT0030', 'CRÊPE AUX CHAMPIGNONS', 'TYPLAT04', '5', 'Une recette de crêpe inhabituelle ? La crêpe aux champignons est très bonne et très riche pour un repas des plus appréciables ! Optez pour cette saveur qui sort le l\'ordinaire !', 'CRÊPE AUX CHAMPIGNONS.jpg'),
('PLAT0031', 'CRÊTE DE CARNE', 'TYPLAT04', '5', 'Une recette originale des pays hispaniques ? La célèbre crêpe ayant pour garniture l\'emblématique carne ! Pour une dégustation sympathique, veuillez choisir ce plat !', 'CRÊTE DE CARNE.jpg'),
('PLAT0032', 'LE BAGHRIR', 'TYPLAT04', '5', 'Spécialité maghrébine à base de semoule, levure et farine, une crêpe légère pour les amateurs de nouveautés ! Venez déguster ce plat inédit avec un soupçon de beurre !', 'LE BAGHRIR.jpg');
