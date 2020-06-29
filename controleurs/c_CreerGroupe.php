<?php

// 1ère étape (donc pas d'action choisie) : affichage du tableau des offres en 
// lecture seule
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
if (empty($action)) {
    $action = 'initial';
}

switch($action){
    case 'initial':
        $groupe = $pdo->creerGroupe();
        include 'vues/CreerGroupe/v_CreerGroupe.php';
        break;
}