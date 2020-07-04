<?php

session_destroy(); // pour fermer la session déconnexion
echo '<p>Vous êtes à présent déconnecté <br />';
header("refresh:2,url=index.php?action=connect");
?>