<?php
$idDocument = $_GET["id"];
DocumentsManager::delete($idDocument);

header("location: index.php?action=documentListe");