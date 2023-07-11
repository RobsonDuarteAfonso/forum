<?php

    define('MODEL_DIR', 'models');
    define('VIEW_DIR', 'views');
    define('CONNEX_DIR', 'lib/connex.php');
    define('SALT', '7OdRP02GUELX6^5eg#$5');

    //Errors
    define('ERROR_001','Les champs du formulaire ne sont pas remplis correctement.');
    define('ERROR_002','Le courriel ou le mot de passe est invalide !');
    define('ERROR_003','Article inexistant !');

    $config = array (
        'default_module' => 'base',
        'default_action' => 'index',
    );
?>