<header>
    <h1>Créer un Utilisateur</h1>
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
<form action="?module=user&action=store" method="post">
    <label>
        Nom
        <input type="text" name="name">
    </label>
    <label>
        Courriel
        <input type="email" name="email">
    </label>
    <label>
        Mot de passe
        <input type="password" name="password">
    </label>
    <label>
        Date Naissance
        <input type="date" name="birthday">
    </label>
        <input class="button-green" type="submit" value="Enregistrer">
</form>