<?php
require_once('models/Article.php');
require_once('models/Category.php');

$template = 'article/list.php';

//Liste des articles
//On Créer un tableau d'object de type Article
$aArticles = array(
    $oArticle1 = new Article('SHA123', 'Sneakers homme Air Max Limited 3', 130.30, 120.30, 20, true,  "Superbes chaussures", 3, "//media.intersport.fr/is/image/intersportfr/BV1171_FH3_Q1", true, true),
    $oArticle2 = new Article('SHP124','Sneakers homme Puma Wired Run',130.30, 120.30, 20, true,  "Superbes chaussures", 5, "//media.intersport.fr/is/image/intersportfr/373015_HLD_Q1", true),
    $oArticle3 = new Article('SHF125','Survêtement homme Flc',130.30, 0, 20, true,  "Superbes chaussures", 3, "//media.intersport.fr/is/image/intersportfr/BV3017_W99_Q1", true),
    $oArticle4 = new Article('SFG126','Sweatshirt femme GFX',69.90, 79.30, 20, false,  "Superbes chaussures", 3, "//media.intersport.fr/is/image/intersportfr/GU8891_K7E_FA", true),
    $oArticle5 = new Article('SFA127','Sneakers femme Air Max Vg-R',130.30, 120.30, 20, false,  "Superbes chaussures", 3, "//media.intersport.fr/is/image/intersportfr/CT1730_PM9_PR", true),
    $oArticle6 = new Article('LFG128','Legging femme GFX',130.30, 120.30, 20, true,  "Superbes chaussures", 3, "https://media.intersport.fr/is/image/intersportfr/H55223_K7E_FA", true),
    $oArticle7 = new Article('SZC129','Sweatshirt zippé à capuche garçon B AR 3S HOOD',130.30, 120.30, 20, false,  "Superbes chaussures", 3, "https://media.intersport.fr/is/image/intersportfr/GT9416_K86_FA", true),
    $oArticle8 = new Article('SEP130','Sneakers enfant Ps Courtflex V2',30.30, 0, 20, false,  "Superbes chaussures", 3, "//media.intersport.fr/is/image/intersportfr/371543_118_Q1", true)
);

//Liste des categories
//On Créer un tableau d'object de type Category
$aCategories = array(
    new Category('Football', true),
    new Category('Running', true),
    new Category('Natation', true),
    new Category('Ski', true),
    new Category('Randonnées', true),
    new Category('Trail', true),
    new Category('Boxe', true),
    new Category('Training', true),
    new Category('Basket-Ball', true)
);

//On desactive un article en utilisant la methode toggleStatus() 
$oArticle5->toggleStatus();


require_once('views/base.php');