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
<form action="?module=article&action=store" method="post">
    <label>
        Titre
        <input type="text" name="title">
    </label>
    <label for="text">Texte</label>
    <textarea name="text" id="text" cols="30" rows="10"></textarea>
    <input class="button-green" type="submit" value="Enregistrer">
</form>