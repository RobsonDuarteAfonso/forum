<header>
    <h1>Liste des articles</h1>
</header>
<?php
    if(isset($_GET['error'])) {
?>
    <div class="error">
        <p><?= ERROR_003?></p>
    </div>
<?php
    }
?>
<table>
    <tr>
        <th class="col1">Titre</th>
        <th class="col2">Texte</th>
        <th class="col3">Auteur</th>
        <th class="col4">Date</th>
        <th class="col5">
            <a href="?module=article&action=create" class="button-blue link"><span class="material-icons md-18">add</span></a>
        </th>
    </tr>

    <?php

        if (is_array($data) && empty($data)) { 
    ?>
            <tr class="table-void">
                <td colspan="6">Il n'y a aucun article à afficher.</td>
            </tr>
    <?php

        } else {
            
            foreach($data as $row){
    ?>    
                <tr>
                    <td class="col1"><?=$row['title']?></td>
                    <td class="col2"><?=$row['text']?></td>
                    <td class="col3"><?=$row['name']?></td>
                    <td class="col4"><?=$row['date']?></td>
                    <td class="col5">
                        <div>
                            <a href="?module=article&action=show&id=<?= $row['article_id'] ?>" class="button-orange link"><span class="material-icons md-18">edit</span></a>
                            <a href="?module=article&action=delete&id=<?= $row['article_id'] ?>" class="button-red link"><span class="material-icons md-18">remove</span></a>
                        </div>
                        
                    </td>
                </tr>
    <?php
            }
        }
    ?>


</table>