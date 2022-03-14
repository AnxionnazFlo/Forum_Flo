<?php
include('../inc/connexion_bdd_inc.php');

$case = null;

if (!empty($_SESSION['user_id'])) {

    $myQuest = $bdd->prepare('SELECT * FROM topic WHERE author_id = ?');
    $myQuest->execute([$_SESSION['user_id']]);

    $nb_topic = $bdd->prepare('SELECT count(*) as nbtopic FROM topic WHERE author_id=?');
    $nb_topic->execute([$_SESSION['user_id']]); 

    while($topic_verif = $nb_topic->fetch()) {    	
        if($topic_verif['nbtopic'] == 0) {      
            $case = 1;    //si la requete ne retourne rien, pas de résultats
        }
    }
}
?>