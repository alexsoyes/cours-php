<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cours</title>
    <link rel="stylesheet" href="https://unpkg.com/mvp.css">
</head>
<body>

<header>
    <nav>
        <ul>
            <li>
                <a href="/">Accueil</a>
            </li>
            <li>
                <a href="/?page=about">À propos</a>
            </li>
            <li>
                <a href="/?page=contact">Contactez-moi</a>
            </li>
        </ul>
    </nav>
</header>

<main>
    <?php if (array_key_exists('page', $_GET)): ?>
        <?php
        // http:://localhost?page=contact
        /**
         * Ici on cherche à inclure dynamiquement une page
         * en fonction de la variable page dans l'URL.
         */
        $page = $_GET['page'];
        ?>

        <p>Vous avez demandé la page : <?php echo $page; ?></p>

        <!--    Équivalent avec les simples / doubles quotes.-->
        <?php //echo "<p>Vous avez demandé la page : $page</p>"; ?>
        <?php //echo '<p>Vous avez demandé la page : $page</p>'; ?>

        <?php

        /**
         * On peut utiliser un if, elseif, else...
         */
        //    if ($page === "contact") {
        //        require './pages/contact.php';
        //    } elseif ($page === "about") {
        //        require './pages/about.php';
        //    } else {
        //        require './pages/homepage.php';
        //    }

        /**
         * Ou un swtich !
         */
        switch ($page) {
            case 'contact':
                require './pages/contact.php';
                break;
            case 'about':
                require './pages/about.php';
                break;
            default:
                require './pages/404.php';
        }
        ?>
    <?php else: ?>
        <?php
        // http://localhost
        require './pages/homepage.php'; ?>
    <?php endif; ?>
</main>

</body>
</html>