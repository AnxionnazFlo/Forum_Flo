<?php

include('../inc/connexion_bdd_inc.php');
session_start();

$case = null;



if (!empty($_POST['message_content'])) {


    $message_content = htmlspecialchars($_POST['message_content']);

    $requete = $bdd->prepare('SELECT * FROM topic WHERE topic_id = ?');
    $requete->execute([$_GET['topic_id']]);
    $topic = $requete->fetch();


    $requete = $bdd->prepare('SELECT * FROM user WHERE user_id=?');
    $requete->execute([$_SESSION['user_id']]);
    $user = $requete->fetch();

    $message_add = $bdd->prepare('INSERT INTO message(topic_id, author_id, author_username, message_content) VALUES (?, ?, ?, ?)');
    $message_add->execute(array($topic['topic_id'], $user['user_id'], $user['username'], $message_content));
    
}
