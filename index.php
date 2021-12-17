<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cours PHP</title>
    <link rel="stylesheet" href="https://unpkg.com/mvp.css">
</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href="/">Accueil</a></li>
<!--            <li><a href="/pages/homepage.php">Accueil</a></li>-->
            <li><a href="/?page=about">À propos</a></li>
            <li><a href="/?page=contact">Contactez-moi</a></li>
            <li><a href="/?page=subscription">Abonnement</a></li>
        </ul>
    </nav>
</header>
<main>
    <?php
    // récupérer dynamiquement le type de page que l'on récupère de l'URL
    // http://localhost:8080/?page=contact
    // $_GET['page'] => "contact"
    // $page = "contact"
    //    print_r($_GET);
    //    $_GET = [
    //        'page' => 'contact'
    //    ];

    if (array_key_exists('page', $_GET)) {
        $page = $_GET['page'];
    } else {
        $page = '';
    }
    ?>

    <p>Vous avez demandé la page <code><?php echo $page; ?></code>.</p>

    <!--    <p>-->
    <!--        --><?php
    //        echo "Vous avez demandé la page $page, merci.";
    //        echo "Vous avez demandé la page " . $page . ", merci.";
    //        printf('<p>Vous avez demandé la page %s, merci %s.</p>', $page, "Alex");
    //        ?>
    <!--    </p>-->

    <?php
    // si $page est egale a contact
    // alors j'inclue le fichier contact.php depuis le dossier pages/

    require './utils/database.php';

    if ($page == "contact") {
        require 'pages/contact.php';
    } elseif ($page == "about") {
        require 'pages/about.php';
    } elseif ($page === "subscription") {
        require './pages/subscription.php';
    } else {
        require 'pages/homepage.php';
    }

    ?>
</main>

</body>
</html>
