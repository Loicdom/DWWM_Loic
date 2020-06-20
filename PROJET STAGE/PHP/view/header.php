<?php
//Attribution des variables de session
$pseudo = (isset($_SESSION['pseudo'])) ? $_SESSION['pseudo'] : '';
?>

<body>
    <header class="header-co">
        <div class="logo">
            <img src="Images/logo.jpg" alt="Logo"></div>
        <div id="title">Comptabilité Ferme d'animations éducatives des rives de l'Aa</div>
        <div class="esp">
            <?php if ($pseudo != "") {
                echo '<div class="esp">' . $pseudo . '</div> ';
            }
            ?> </div>

    </header>
    <nav>
        <div class="ligneMenu">
            <div class="menu"><a href="#">Gestion</a>
                <div class="sousMenu">
                    <div><a href="#">Fournisseurs</a></div>
                    <div><a href="#">Bénévoles</a></div>
                    <div><a href="#">Enfants</a></div>
                    <div><a href="#">Utilisateurs</a></div>
                    <div><a href="#">Factures</a></div>
                    <div><a href="#">Bureau</a></div>
                </div>
            </div>
            <div class="menu"><a href="#">Journaux</a>
                <div class="sousMenu">
                    <div><a href="#">Charges</a></div>
                    <div><a href="#">Sous Menu 2</a></div>
                    <div><a href="#">Sous Menu 3</a></div>
                    <div><a href="#">Sous Menu 4</a></div>
                </div>
            </div>
            <div class="menu"><a href="#">Comptes</a>
                <div class="sousMenu">
                    <div><a href="#">Sous Menu 1</a></div>
                    <div><a href="#">Sous Menu 2</a></div>
                    <div><a href="#">Sous Menu 3</a></div>
                    <div><a href="#">Sous Menu 4</a></div>
                </div>
            </div>
            <div class="menu"><a href="#">Budget</a>
                <div class="sousMenu">
                    <div><a href="#">Sous Menu 1</a></div>
                    <div><a href="#">Sous Menu 2</a></div>
                    <div><a href="#">Sous Menu 3</a></div>
                    <div><a href="#">Sous Menu 4</a></div>
                </div>
            </div>
            <div class="menu"><a href="#">Editions</a>
                <div class="sousMenu">
                    <div><a href="#">Sous Menu 1</a></div>
                    <div><a href="#">Sous Menu 2</a></div>
                    <div><a href="#">Sous Menu 3</a></div>
                    <div><a href="#">Sous Menu 4</a></div>
                </div>
            </div>
            <div class="menu"><a href="#">Outils</a>
                <div class="sousMenu">
                    <div><a href="#">Sous Menu 1</a></div>
                    <div><a href="#">Sous Menu 2</a></div>
                    <div><a href="#">Sous Menu 3</a></div>
                    <div><a href="#">Sous Menu 4</a></div>
                </div>
            </div>
        </div>
    </nav>