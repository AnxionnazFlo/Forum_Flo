<?php
include('../inc/connexion_bdd_inc.php');

if(!empty($_GET['username']) && !empty($_SESSION['username'])){ 

    

    $userReq = $bdd->prepare('SELECT * from user where username = ?');
    $userReq->execute([$_GET['username']]);
    $user = $userReq->fetch();
   if($_GET['username'] == $_SESSION['username']){

    header('location: ../src/my-profil.php');
    exit();
   }
}
