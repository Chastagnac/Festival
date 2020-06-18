<h1>Vous avez sélectionné le groupe : <?= $nomGroupe ?></h1>
<h2>Mail qui va être utilisé : 
    <?php
    if (empty($mailGroupe)) {
        echo 'Aucun définie !';
    } else {
        echo $mailGroupe;     
    }
    ?>
</h2>

