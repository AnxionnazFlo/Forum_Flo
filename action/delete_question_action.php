<?php
include('../inc/connexion_bdd_inc.php');

$cases = null;

if(!empty($_GET['topic_id'])){

$requete = $bdd->prepare('DELETE  FROM topic WHERE topic_id = ?');
$requete->execute([$_GET['topic_id']]);

$requete = $bdd->prepare('DELETE  FROM message WHERE topic_id = ?');
$requete->execute([$_GET['topic_id']]);
$cases = 2;
}


?>