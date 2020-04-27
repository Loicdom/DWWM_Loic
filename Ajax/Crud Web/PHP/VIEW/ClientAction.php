<?php
$mode = $_GET["m"];
$p = new Client($_POST);
switch ($mode)
{
    case "ajout":
        ClientManager::add($p);
        break;
    case "modif":
        ClientManager::update($p);
        break;
    case "suppr":
        if ($lvl==2)
        {
            ClientManager::delete($p);
        }
        break;
}
header("location:index.php?action=ClientListe");
