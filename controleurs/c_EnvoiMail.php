<?php

// 1ère étape (donc pas d'action choisie) : affichage du tableau des offres en 
// lecture seule
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
if (empty($action)) {
    $action = 'initial';
}

switch ($action) {
    case 'initial':
        $lesGroupes = $pdo->obtenirReqIdNomGroupesAHeberger();
        $leGroupeSelectionne = filter_input(INPUT_POST, 'groupe', FILTER_SANITIZE_STRING);
        include 'vues/EnvoiMail/v_ObtenirGroupes.php';
        break;
    case 'verifMail':
        $lesGroupes = $pdo->obtenirReqIdNomGroupesAHeberger();
        $leGroupeSelectionne = filter_input(INPUT_POST, 'groupe', FILTER_SANITIZE_STRING);
        include 'vues/EnvoiMail/v_ObtenirGroupes.php';
        $nomGroupe = $pdo->obtenirNomGroupe($leGroupeSelectionne);
        $mailGroupe = $pdo->obtenirMailGroupe($leGroupeSelectionne);
        include 'vues/EnvoiMail/v_ObtenirMail.php';
}