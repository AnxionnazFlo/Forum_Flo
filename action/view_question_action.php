<?php
include('../inc/connexion_bdd_inc.php');
$case = null;

$requete = $bdd->prepare('SELECT * FROM topic WHERE topic_id = ?');
$requete->execute([$_GET['topic_id']]);
$topic = $requete->fetch();



$nb_message = $bdd->prepare('SELECT count(*) as nbmessage FROM message WHERE topic_id = ?');
    $nb_message->execute([$_GET['topic_id']]); 

    while($topic_verif = $nb_message->fetch()) {    	
        if($topic_verif['nbmessage'] == 0) {      
            $case = 2;    //si la requete ne retourne rien, pas de résultats
        }
    }

    $requetem = $bdd->prepare('SELECT * FROM message WHERE topic_id = ?');
    $requetem->execute([$_GET['topic_id']]);
