<?php
session_start();
include('../action/my_profil_action.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>Mon profil</title>
</head>

<?php
include('../inc/header_inc.php');
?>

<body class=" my-bg-body h-screen">
    <div class=" border border-solid border-gray-400 rounded h-fit w-11/12 mt-4 mx-auto">
        <div class="text-center text-white text-lg p-1">Mes informations</div>




        <?php   /* affichage dynamique du profil de l'utilisateur */



        if (!empty($_SESSION['user_id'])) {

            while ($user = $userReq->fetch()) { ?>
                <div class=" border border-solid border-black rounded p-1 h-fit w-11/12 mt-4 mx-auto bg-slate-300">
                    <div class="w-fit ml-20 border-l border-solid border-black p-1">
                        Prénom: <?php echo $user['first_name'] ?></br>
                        Nom: <?php echo $user['last_name'] ?></br>
                        Pseudo: <?php echo $user['username'] ?>
                    </div>


                    <!-- <div class="flex justify-center mb-1">

                        <form action="edit-question.php" method="GET" class="mx-auto p-1 border border-solid rounded border-black w-fit h-fit bg-orange-500 hover:bg-gradient-to-r from-orange-600 via-orange-300 to-orange-600">
                            <input type="text" hidden name="topic_id" value="<?php echo $topic['topic_id'] ?>">
                            <button class="" type="submit">Modifier</button>
                        </form>

                        <form action="" method="GET" class=" mx-auto p-1 border border-solid rounded border-black w-fit h-fit bg-red-600 hover:bg-gradient-to-r from-red-600 via-red-300 to-red-600">
                            <input type="text" hidden name="topic_id" value="<?php echo $topic['topic_id'] ?>">
                            <button class="" type="submit">Supprimer</button>
                        </form>
                    </div> -->
                </div>

                </br>
            <?php
            }
        } else { ?>
            <div class="text-center">Vous devez vous connecter pour voir votre profil</div>
        <?php }


        ?>


    </div>

</body>

</html>