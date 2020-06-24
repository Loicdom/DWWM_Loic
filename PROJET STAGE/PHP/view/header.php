<?php
//Attribution des variables de session
$pseudo = (isset($_SESSION['pseudo'])) ? $_SESSION['pseudo'] : '';
?>

<body>
    <header class="header">
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
                    <div><a href="index.php?action=fournisseursListe">Liste fournisseurs</a></div>
                    <div><a href="index.php?action=benevoleListe">Liste bénévoles</a></div>
                    <div><a href="#">Liste enfants</a></div>
                    <div><a href="index.php?action=usersListe">Liste utilisateurs</a></div>
                    <div><a href="index.php?action=bureau">Bureau</a></div>
                </div>
            </div>
            <div class="menu"><a href="#">Journaux</a>
                <div class="sousMenu">
                    <div><a href="#">Charges</a></div>
                    <div><a href="#">Recettes</a></div>
                    <div><a href="#">Banque</a></div>
                    <div><a href="#">Caisse</a></div>
                </div>
            </div>
            <div class="menu"><a href="#">Comptes</a>
                <div class="sousMenu">
                    <div><a href="#">Visuel par comptes</a></div>
                    <div><a href="#">Plan comptable</a></div>
                    <div><a href="#">Lettrage</a></div>
                    <div><a href="https://www.creditmutuel.fr/fr/authentification.html" target="_blank">Crédit Mutuel</a></div>
                </div>
            </div>
            <div class="menu"><a href="#">Budget</a>
                <div class="sousMenu">
                    <div><a href="#">Budget actuel</a></div>
                    <div><a href="#">Budget prévisionnel</a></div>
                    <div><a href="#">Employés</a></div>
                </div>
            </div>
            <div class="menu"><a href="#">Impressions</a>
                <div class="sousMenu">
                    <div><a href="#">Journaux</a></div>
                    <div><a href="#">Liste bénévoles</a></div>
                    <div><a href="#">Liste enfants</a></div>
                    <div><a href="#">Bilan</a></div>
                    <div><a href="#">Factures</a></div>
                </div>
            </div>
            <div class="menu"><a href="#">Exporter</a>
                <div class="sousMenu">
                    <div><a href="#">Journaux</a></div>
                    <div><a href="#">Bilan</a></div>
                    <div><a href="#">Liste bénévoles</a></div>
                    <div><a href="#">Liste enfants</a></div>
                </div>
            </div>
            <div class="menu"><a href="#">Outils</a>
                <div class="sousMenu">
                    <div><a href="#">Calculatrice</a></div>
                    <div><a href="#">Documents/Projets</a></div>
                </div>
            </div>
        </div>
    </nav>