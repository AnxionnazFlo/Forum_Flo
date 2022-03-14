<?php
session_start();
include("../action/edit_question_action.php");
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>Modifier ma question</title>
</head>
<?php include('../inc/header_inc.php'); ?>
<body class="my-bg-body h-screen">
<div class="flex justify-center items-center mx-auto h-auto mt-4">
        <div class=" p-1 m-auto">
            <p class="text-center text-white text-3xl p-1 border-2 border-solid shadow border-gray-400 rounded bg-slate-500">Modifier ma question</p>


            <form class="text-center p-4" action="" method="POST">

                <div class="relative mx-1 my-3">
                    <input required class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-slate-400" type="text" name="title" id="title" placeholder=" " value="<?php echo $topic['title'] ?>" />
                    <label for="title" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm"></label>
                </div>
                <div class="relative mx-1 my-3">
                    <textarea required class=" peer h-auto w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-slate-500" type="text" rows="5" name="topic_content" id="topic_content" placeholder=" " ><?php echo $topic['topic_content'] ?></textarea>
                    <label for="topic_content" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm" for="floating_last_name"></label>
                    
                </div>


               
                <div class="flex justify-center">
                    <div class="border-2 border-solid border-x-gray-400 rounded-md mt-6 bg-slate-500">
                        <button type="submit" class="text-white p-1">Modifier</button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
    
</body>
</html>