<?php
$mode = $_GET["m"];
if ($mode != "ajout")
{
    $id = $_GET["id"];
    $client = ClientManager::findById($id);
}
echo '<div class="formulaire">
        <form action="index.php?action=ClientAction&m=' . $mode . '" method = "POST">
            <div> 
                <label for="nomClient">Nom : </label>
                <input type="text" id="nomClient" name="nomClient" placeholder="Nom du client" pattern="[A-Za-zâäàéèùêëîïôöçñ]{2,}"  required autofocus  ';
                    if ($mode != "ajout")
                    {
                        echo 'value ="' . $client->getNomClient() . '"';
                    }
echo '          >
<div class="interrogation" title="veuillez saisir votre nom"><img src="Images/interrogation.png" /></div>
            <div class="boutonVert"><img src="Images/V.png" /></div>
            <div class="boutonRouge"><img src="Images/X.png" /></div>
            <span class="message"></span>
            </div>';
if ($mode != "ajout")
{
    echo '  <input type="text" id="idClient" name="idClient" hidden value = "' . $client->getIdClient() . '">';
}
echo '      <div>  
                <label for="prenomClient">Prenom : </label>
                <input type="text" id="prenomClient" name="prenomClient" placeholder="Prenom du client" pattern="[A-Za-zâäàéèùêëîïôöçñ]{2,}" required ';
                    if ($mode != "ajout")
                    {
                        echo 'value ="' . $client->getPrenomClient() . '"';
                    }
echo '          >
<div class="interrogation" title="saisissez votre Prénom"><img src="Images/interrogation.png" />
            </div>
            <div class="boutonVert"><img src="Images/V.png" /></div>
            <div class="boutonRouge"><img src="Images/X.png" /></div>
            <span class="message"></span>
            </div>
            <div> 
                <label for="adresseClient">Adresse : </label>
                <input type="text" id="adresseClient" name="adresseClient" placeholder="Adresse du Client" required ';
                    if ($mode != "ajout")
                    {
                        echo 'value ="' . $client->getAdresseClient() . '"';
                    }
echo '          >
<div class="interrogation" title="saisissez votre Adresse"><img src="Images/interrogation.png"/>
            </div>
            </div>
            <div> 
                <label for="villeClient">Ville : </label>
                <input type="text" id="villeClient" name="villeClient" placeholder="Ville du Client" pattern="[A-Za-zâäàéèùêëîïôöçñ]{2,}" required ';
                    if ($mode != "ajout")
                    {
                        echo 'value ="' . $client->getVilleClient() . '"';
                    }
echo '          >
<div class="interrogation" title="saisissez votre Ville"><img src="Images/interrogation.png"/>
            </div>
            <div class="boutonVert"><img src="Images/V.png" /></div>
            <div class="boutonRouge"><img src="Images/X.png" /></div>
            <span class="message"></span>
            </div> 
            <div> 
            <label for="villeClient">Code Postal : </label>
            <input type="text" id="cpClient" name="cpClient" placeholder="Code postal du Client" required ';
                if ($mode != "ajout")
                {
                    echo 'value ="' . $client->getCpClient() . '"';
                }
echo '          >
<div class="interrogation" title="saisissez votre code postal"><img src="Images/interrogation.png" />
            </div>
            <div class="boutonVert"><img src="Images/V.png" /></div>
            <div class="boutonRouge"><img src="Images/X.png" /></div>
            <span class="message"></span>
        </div> ';
echo '      <div class="centrer">
                <button class="bouton" id="submit" type="submit ">';
                    switch ($mode)
                    {
                        case "ajout":echo 'Ajouter';
                            break;
                        case "modif":echo 'Modifier';
                            break;
                        case "suppr":echo 'Supprimer';
                            break;
                    }
echo '          </button>
<button class="bouton" id="submit" type="submit"><a href="index.php?action=ClientListe">Annuler</a></button>
            </div>
        </form>
    </div>';
