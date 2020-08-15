<div class="formulaire">
    <form action="index.php?action=documentAction" method="POST" enctype="multipart/form-data">
        <div class="div_document">
            <label for="libelleDocument" class="label_libelleDoc">Libellé du document</label>
            <input class="inputform_document" type="text" id="libelleDocument" name="libelleDocument" placeholder="Libellé du documents" required>
        </div>
        <div class="div_document1">
            <label for="document" class="label_file document_file">Enregistrer documents</label>
            <input class="input_file" type="file" name="document" required>
        </div>
        <div class="centrer_ecriture">
            <button class="bouton btn_document" id="submit" type="submit" value="Valider">Valider</button>
        </div>
    </form>
</div>