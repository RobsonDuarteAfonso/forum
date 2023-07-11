<header>
    <h1>Bienvenue !</h1>
    <h1>Au Forum du Collège Maisonneuve !</h1>
</header>
<section>
    <?php

        if (is_array($data) && empty($data)) { 
    ?>
            <div class="msg-void">
                <p>Il n'y a aucun article à afficher.</p>
            </div>
    <?php

        } else {
            
            foreach($data as $row){ 
    ?>
                <article>
                    <h2><?= $row['title'] ?></h2>
                    <p><?= $row['text'] ?></p>
                    <small>
                        <span class="material-icons md-18">person</span>
                        <?= $row['name'] ?>
                    </small>
                    </div>
                    
                </article>
    <?php
            }
        }
    ?>
</section>