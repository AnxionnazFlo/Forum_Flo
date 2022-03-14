<?php
include('../inc/connexion_bdd_inc.php');


$case = null;


if(!empty($_GET['terme'])){

    $terme = htmlspecialchars($_GET['terme']);
    $terme = strip_tags($terme); // pour enlever les balises html

    $nb_topic = $bdd->prepare('SELECT count(*) as nbtopic FROM topic WHERE title LIKE ?');
    $nb_topic->execute(array('%'.$terme.'%')); 

    while($topic_verif = $nb_topic->fetch()) {    	
        if($topic_verif['nbtopic'] == 0) {      
            $case = 2;    //si la requete ne retourne rien, pas de résultats
        }
    }

    

    $liste_topic = $bdd->prepare('SELECT * FROM topic WHERE title LIKE ?');
    $liste_topic->execute(array('%'.$terme.'%')); 
    

    
}
else{
    $liste_topic = $bdd->query('SELECT * FROM topic');

}
