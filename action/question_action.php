<?php
include('../inc/connexion_bdd_inc.php');
session_start();

$case = null;


if(!empty($_POST['title']) && !empty($_POST['topic_content']) && isset($_SESSION['user_id'])){

    $title = htmlspecialchars($_POST['title']);
    $topic_content = htmlspecialchars($_POST['topic_content']);
    

    $requete = $bdd->prepare('SELECT * FROM user WHERE user_id=?');
    $requete->execute([$_SESSION['user_id']]);
    $user = $requete->fetch();

    $question = $bdd->prepare('INSERT INTO topic(author_id, author_username, title, topic_content) VALUES (?, ?, ?, ?)');
    $question->execute(array($user['user_id'],$user['username'],$title, $topic_content));
    $case = 1;

}

?>