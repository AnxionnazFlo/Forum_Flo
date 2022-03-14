<?php
include('../inc/connexion_bdd_inc.php');

if(!empty($_SESSION['user_id'])){

    $userReq = $bdd->prepare('SELECT * from user where user_id = ?');
    $userReq->execute([$_SESSION['user_id']]);
}
?>