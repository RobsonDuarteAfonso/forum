<header>
    <h1>Login</h1>
</header>
<?php

    if(isset($_GET['error'])) {
?>
    <div class="error">
        <p><?= ERROR_002?></p>
    </div>
<?php
    }
?>
<form action="?module=access&action=authentication" method="post">
    <label>
        Courriel
        <input type="email" name="email">
    </label>
    <label>
        Mot de passe
        <input type="password" name="password">
    </label>
        <input class="button-green" type="submit" value="Envoyer">
</form>