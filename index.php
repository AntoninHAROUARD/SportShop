<?php
//Si je saisie cette adresse : http://localhost:8000/index.php?action=catalogue
//Je veux récupérer l'action : $_GET['action']
//Action = nom donné arbitrairement à mon paramètre en url 


//Je vérifie que j'ai bien un paramètre action dans mon URL
if(!empty($_GET['action'])):
    //Je test le contenu de ma variable pour appeler la bonne action
    switch($_GET['action']):
        case 'catalogue':
            require_once('controllers/listArticle.php');
            break;

        default:
            require_once('views/erreur.html');
            break;
    endswitch;
//Si je n'ai pas de paramètre alors je redirige vers la page d'accueil
else:
    require_once('controllers/listArticle.php');
endif;