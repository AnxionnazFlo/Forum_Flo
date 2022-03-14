<?php
session_start();
include('../action/getTermeAction.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>Forum</title>
</head>
<?php include('../inc/header_inc.php');

?>

<body class="my-bg-body h-screen">

    <div class=" border border-solid border-gray-400 rounded h-fit w-11/12 mt-4 mx-auto ">
        <div class="text-center text-lg p-1 text-white">Liste des questions du forum</div>


        <form class="flex flex-row justify-center items-center text-center p-1" action="" method="GET">

            <div class="relative mx-1 my-1 w-fit h-fit">
                <input required class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-slate-400" type="search" name="terme" id="terme" placeholder=" " />
                <label for="terme" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Rechercher</label>
            </div>


            <div class="border border-solid border-gray-300 hover:border-gray-800 rounded-md w-fit h-fit">
                <button type="submit" class="text-white p-1">Chercher</button>
            </div>

        </form>



        <?php   /* affichage dynamique des questions de la base */

        if ($case == 2) { ?>
            <div class="text-center">La recherche n'a pas trouvée de résultat</div>
        <?php
        }

        while ($topic = $liste_topic->fetch()) { ?>
            <div class="border border-solid border-black w-11/12 mx-auto bg-slate-300">
                <div class=" h-fit w-11/12 mt-1 mx-auto ">
                    <form action="view_question.php" method="GET" class="p-1">
                        <input type="text" hidden name="topic_id" value="<?php echo $topic['topic_id'] ?>">
                        <button type="submit">Titre question : <?php echo $topic['title'] ?></button>

                    </form>
                </div>
                <div class=" h-fit w-11/12  mx-auto ">
                    <div class="p-1">
                        Contenu : <?php echo $topic['topic_content'] ?>
                    </div>
                </div>
                <div class="border-t border-solid border-black h-fit w-11/12 mb-1 mx-auto ">
                    <div class="flex justify-between p-1">
                        <div class="">
                            <form action="view_profil.php" method="GET" class="p-1">
                                <input type="text" hidden name="username" value="<?php echo $topic['author_username'] ?>">
                                <button type="submit">Auteur : <?php echo $topic['author_username'] ?></button>

                            </form>

                        </div>
                        <div class="p-1">
                            Date de publication : <?php $Date = date("d-m-Y H:i:s", strtotime($topic['topic_publication_date']));
                                                    echo $Date; ?>
                        </div>
                    </div>
                </div>
            </div>
            </br>
        <?php
        }

        ?>


    </div>



</body>

</html>