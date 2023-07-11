<header>
    <h1>Créer un Article</h1>
</header>
<?php

    if(isset($_GET['error'])) {
?>
    <div class="error">
        <p><?= ERROR_001?></p>
    </div>
<?php
    }
?>
<form action="?module=article&action=edit" method="post">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <label>
        Titre
        <input type="text" name="title" value="<?= $data['title'] ?>">
    </label>
    <label for="text">Texte</label>
    <textarea name="text" id="text" cols="30" rows="10"><?= $data['text'] ?></textarea>
    <input class="button-green" type="submit" value="Enregistrer">
</form>