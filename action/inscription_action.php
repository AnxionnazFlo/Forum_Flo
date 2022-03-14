<?php
include('../inc/connexion_bdd_inc.php');
include('function.php');

$case = null;


if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['pwd']) && !empty($_POST['pwd_verif']) && !empty($_POST['username'])){

    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $pwd = htmlspecialchars($_POST['pwd']);
    $pwd_verif = htmlspecialchars($_POST['pwd_verif']);
    $username = htmlspecialchars($_POST['username']);

    /* Ici on verifie si le pseudo existe déjà dans la bdd */

    $pseudoexist = $bdd->prepare('SELECT * FROM user WHERE username=?');
    $pseudoexist->execute([$username]);
    $user = $pseudoexist->fetch();

        if(empty($user)){

            if($pwd == $pwd_verif){

                if(verificationPassword($pwd)){

                    $hashed_password = password_hash($pwd, PASSWORD_DEFAULT);

                    $requete = $bdd->prepare('INSERT INTO user(first_name, last_name, pwd, username) VALUES (?, ?, ?, ?)');
                    $requete->execute(array($first_name,$last_name,$hashed_password, $username));
                    $case = 4;

                }
                else{
                    /* le password ne satisfait pas le regex */
                    $case = 3;
                }

            }
            else{
                /* les mots de passes sont différents */
                $case = 2;
            }

        }
        else{
            /* le pseudo existe déjà dans la base */
            $case = 1;
        }

}


?>