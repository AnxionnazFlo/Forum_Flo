<?php

include('../action/reponse_action.php');
include('../action/view_question_action.php');
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title><?php echo $topic['title'] ?></title>
</head>
<?php include('../inc/header_inc.php'); ?>

<body class="my-bg-body h-screen">
    <div class="  h-fit w-11/12 mt-4 mx-auto ">
        <div class="text-center text-white text-lg p-1"><?php echo $topic['title'] ?></div>
        <div class="flex bg-slate-300 w-11/12 mx-auto mb-1 border border-solid border-black">
            <div class="m-1 w-1/5 h-fit p-1 border-r border-solid border-black">Auteur : <?php echo $topic['author_username'] ?>
                </br>Publié le : <?php $Date = date("d-m-Y H:i:s", strtotime($topic['topic_publication_date']));
                                    echo $Date; ?>
            </div>
            <div class="m-1 w-4/5 h-fit p-1 "><?php echo $topic['topic_content'] ?></div>
        </div>
    </div>


    <?php
    if ($case != 2) {

        while ($mess = $requetem->fetch()) { ?>
            <div class="  h-fit w-11/12 mt-4 mx-auto">
                <div class="flex bg-slate-300 w-11/12 mx-auto mb-1 border border-solid border-black">
                    <div class="m-1 w-1/5 h-fit p-1 border-r border-solid border-black">Auteur : <?php echo $mess['author_username'] ?>
                        </br>Publié le : <?php $Date = date("d-m-Y H:i:s", strtotime($mess['message_publication_date']));
                                            echo $Date; ?>
                    </div>
                    <div class="m-1 w-4/5 h-fit p-1 "><?php echo $mess['message_content'] ?></div>
                </div>
            </div>

        <?php
        }
    }
    if ($case == 2) { ?>
        <div class="text-center mt-1">Il n'y a pas encore de réponse à cette question</div>
    <?php }

    if (isset($_SESSION['user_id'])) { ?>

        <div class=" border border-solid border-gray-400 rounded h-fit w-11/12 mt-4 mx-auto ">
            <form class="text-center p-4" action="" method="POST">


                <div class="relative mx-1 my-3">
                    <textarea required class=" peer h-auto w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-slate-500" type="text" rows="5" name="message_content" id="message_content" placeholder=" "></textarea>
                    <label for="message_content" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm" for="message_content">Votre réponse</label>

                </div>



                <div class="flex justify-center">
                    <div class="border border-solid border-gray-300 rounded-md mt-6 bg-slate-500">
                        <button type="submit" class="text-white p-1">Répondre</button>
                    </div>
                </div>
            </form>
        </div>
        </div>

    <?php
    }

    ?>




</body>

</html>