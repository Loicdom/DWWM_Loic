<?php
//Attribution des variables de session
$lvl = (isset($_SESSION['level'])) ? (int) $_SESSION['level'] : 1;
$id = (isset($_SESSION['id'])) ? (int) $_SESSION['id'] : 0;
$pseudo = (isset($_SESSION['pseudo'])) ? $_SESSION['pseudo'] : '';
?>

<body>
<header>
        <div class="contenu_logo_co">
            <div class="titre_co"><?php echo $titre ?></div>
        <div class="logo">
            <img src="Images/logo-stats.png" alt="logo-stats"></div>
        </div>

    </header>
