<?php

include('../inc/connexion_bdd_inc.php');

$case = null;



if(!empty($_POST['username']) && !empty($_POST['pwd'])){

   
    $pwd = htmlspecialchars($_POST['pwd']);
    $username = htmlspecialchars($_POST['username']);
    

    $verif = $bdd->prepare('SELECT * FROM user WHERE username = ?');
    $verif->execute([$username]);
    $user = $verif->fetch();
    

    if(password_verify($pwd, $user['pwd'])){

        session_start();
        
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['username'] = $user['username'];
        $case = 2;

    }
    else{
        /* le mot de passe est pas le bon */
        $case = 1;
    }
}


?>