<?php
//Attribution des variables de session
$pseudo = (isset($_SESSION['pseudo'])) ? $_SESSION['pseudo'] : '';
$role = (isset($_SESSION['role'])) ? $_SESSION['role'] : '';
$annee = (isset($_SESSION['idExerciceComptable'])) ? $_SESSION['idExerciceComptable'] : '';
?>

<body>
<header class="header">
        <div class="logo">
            <img src="Images/logo.jpg" alt="Logo"></div>
        <div id="title">Comptabilité Ferme d'animations éducatives des rives de l'Aa</div>
    </header>
   