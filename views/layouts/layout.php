<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum du Collège Maisonneuve</title>
    <link rel="stylesheet" href="resources/css/styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="?module=user&action=create">Créer un utilisateur</a></li>
            <li><a href="?module=article&action=list">Liste des articles</a></li>
            <?php 
                if (isset($_SESSION['id'])) {
            ?>
                    <li><a href="?module=access&action=logout">Logout</a></li>
                    
            <?php 
                } else {
            ?>      
                    <li><a href="?module=access&action=login">Login</a></li>
            <?php 
                }
            ?>            
        </ul>
           
    </nav>        
        <?php 
            if (isset($_SESSION['id'])) {
        ?>
        <header class="header__sub">
            User: <?= $_SESSION['name']?>
        </header> 
        <?php 
            }
        ?>
    <main>
        <?php echo $content; ?>
    </main>
</body>
</html>