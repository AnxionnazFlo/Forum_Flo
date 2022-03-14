<?php
include('../inc/connexion_bdd_inc.php');

$caseedit = null;

if(!empty($_GET['topic_id'])){

    $reqtopic = $bdd->prepare('SELECT * FROM topic where topic_id = ?');
    $reqtopic->execute([$_GET['topic_id']]);
    $topic = $reqtopic->fetch();
}

if(!empty($_POST['title']) && !empty($_POST['topic_content'])){

    $title = htmlspecialchars($_POST['title']);
    $topic_content = htmlspecialchars($_POST['topic_content']);

    $modifTopic = $bdd->prepare('UPDATE topic set title = ? , topic_content = ? where topic_id = ?');
    $modifTopic->execute([$title, $topic_content, ($_GET['topic_id'])]);
    $caseedit = 1;

    header('location: ../src/my-questions.php');
    exit();
}
?>