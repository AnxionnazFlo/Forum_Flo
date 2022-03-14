<?php
include("../action/question_action.php");
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>Poser une question</title>
</head>
<?php include('../inc/header_inc.php'); ?>

<body class="my-bg-body h-screen">
    <div class="flex justify-center items-center mx-auto h-auto mt-4">
        <div class=" p-1 m-auto">
            <p class="text-center text-white text-3xl p-4 border-2 border-solid shadow border-gray-400 rounded ">Poser une question</p>

            <?php
            if ($case == 1) { ?>
                <div class="text-center">Votre question a bien été postée.</div>

            <?php }

            ?>

            <form class="text-center p-4" action="" method="POST">

                <div class="relative mx-1 my-3">
                    <input <?php if (!isset($_SESSION['user_id'])) {
                                echo "disabled";
                            } ?> required class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-slate-400" type="text" name="title" id="title" placeholder=" " />
                    <label for="title" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Votre question</label>
                </div>
                <div class="relative mx-1 my-3">
                    <textarea <?php if (!isset($_SESSION['user_id'])) {
                                    echo "disabled";
                                } ?> required class=" peer h-auto w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-slate-500" type="text" rows="5" name="topic_content" id="topic_content" placeholder=" "></textarea>
                    <label for="topic_content" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm" for="floating_last_name">Contenu de votre question</label>

                </div>


                <?php

                if (!isset($_SESSION['first_name'])) { ?>
                    <div class="">Pour poser une question, vous devez être connecté.</div>
                    <a class="hover:text-white" href="login.php">Me connecter</a>

                <?php
                }
                if (!empty($_SESSION['first_name'])) {
                ?>
                    <div class="flex justify-center">
                        <div class="border- border-solid border-gray-300 rounded-md mt-6 bg-slate-500">
                            <button type="submit" class="text-white p-1">Envoyer</button>
                        </div>
                    </div>

                <?php } ?>
            </form>

        </div>
    </div>

</body>

</html>