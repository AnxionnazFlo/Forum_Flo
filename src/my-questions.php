<?php
session_start();
include('../action/delete_question_action.php');
include('../action/my_questions_action.php');



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>Mes questions</title>
</head>
<?php include('../inc/header_inc.php');

?>

<body class="my-bg-body h-screen">
    <div class=" border border-solid border-gray-400 rounded h-fit w-11/12 mt-4 mx-auto ">
        <div class="text-center text-white text-lg p-1">Liste de mes questions</div>




        <?php   /* affichage dynamique des questions de l'utilisateur */

        if ($cases == 2) { ?>
            <div class="text-center text-red-600">Votre question a été supprimée</div>
            <?php }

        if (!empty($_SESSION['user_id'])) {

            while ($topic = $myQuest->fetch()) { ?>
                <div class=" border border-solid border-black rounded h-fit w-11/12 mt-4 mx-auto bg-slate-300">
                    <div class="flex">
                        <div class="m-1 w-1/5 h-fit p-1 border-r border-solid border-black">Auteur : <?php echo $topic['author_username'] ?>
                            </br>Publié le : <?php $Date = date("d-m-Y H:i:s", strtotime($topic['topic_publication_date']));
                                                echo $Date; ?>
                        </div>
                        <div class="flex-column my-auto mx-1 w-4/5 h-fit">
                            <div class=" w-full h-fit p-1 ">
                                <form action="view_question.php" method="GET" class="p-1">
                                    <input type="text" hidden name="topic_id" value="<?php echo $topic['topic_id'] ?>">
                                    <button type="submit">Titre question : <?php echo $topic['title'] ?></button>

                                </form>
                            </div>

                            <div class=" w-full h-fit p-1 "><?php echo $topic['topic_content'] ?></div>
                        </div>
                    </div>
                    <div class="flex justify-center mb-1">

                        <form action="edit-question.php" method="GET" class="mx-auto p-1 border border-solid rounded border-black w-fit h-fit  hover:bg-orange-600 hover:text-white">
                            <input type="text" hidden name="topic_id" value="<?php echo $topic['topic_id'] ?>">
                            <button class="" type="submit">Modifier</button>
                        </form>

                        <form action="" method="GET" class=" mx-auto p-1 border border-solid rounded border-black w-fit h-fit hover:bg-red-600 hover:text-white">
                            <input type="text" hidden name="topic_id" value="<?php echo $topic['topic_id'] ?>">
                            <button class="" type="submit">Supprimer</button>
                        </form>
                    </div>
                </div>

                </br>
            <?php
            }
        } else { ?>
            <div class="text-center">Vous devez vous connecter pour voir vos questions</div>
        <?php }
        if ($case == 1) { ?>
            <div class="text-center">Vous n'avez pas encore posé de question</div>
        <?php }

        ?>


    </div>



</body>

</html>