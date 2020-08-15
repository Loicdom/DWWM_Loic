<div class="formulaire">
    <form action="index.php?action=documentAction" method="POST" enctype="multipart/form-data">
        <div class="div_document">
            <label for="libelleDocument" class="label_libelleDoc">Libellé du document :</label>
            <input class="inputform_document" type="text" id="libelleDocument" name="libelleDocument" placeholder="Libellé du document" required>
        </div>
        <div class="div_ecriture div_document1">
            <label for="document" class="label_file">Enregistrer documents</label>
            <input class="input_file" type="file" name="document" required>
        </div>
        <div class="centrer_ecriture">
            <button class="bouton btn_document" id="submit" type="submit" value="Valider">Valider</button>
        </div>
    </form>
</div>
<a href="index.php?action=documentListe" class="bloc">
    <div class="bouton btn">Retour</div>
</a>