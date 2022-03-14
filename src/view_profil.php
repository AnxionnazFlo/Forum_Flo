<?php

session_start();
include('../action/view_profil_action.php');

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>Profil de <?php echo $_GET['username'] ?></title>
</head>
<?php include('../inc/header_inc.php'); ?>

<body class="my-bg-body h-screen">
    <div class=" border border-solid border-gray-400 rounded h-fit w-11/12 mt-4 mx-auto">
        <div class="text-center text-white text-lg p-1">Informations sur <?php echo $_GET['username'] ?></div>




        <?php   /* affichage dynamique du profil de l'utilisateur */



        if (!empty($_SESSION['user_id'])) {

        ?>
            <div class=" border border-solid border-black rounded p-1 h-fit w-11/12 mt-4 mx-auto bg-slate-300">
                <div class="w-fit ml-20 border-l border-solid border-black p-1">
                    Prénom: <?php echo $user['first_name'] ?></br>
                    Nom: <?php echo $user['last_name'] ?></br>
                    Pseudo: <?php echo $user['username'] ?>
                </div>
            </div>

            </br>
        <?php

        } else { ?>
            <div class="text-center">Vous devez vous connecter pour voir le profil</div>
        <?php }


        ?>


    </div>





</body>

</html>