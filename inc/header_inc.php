<header class=" border border-solid border-gray-400 shadow rounded h-fit w-11/12 mt-4 mx-auto my-custom">
    <div>
        <h1 class="text-white text-center my-2 text-2xl ">Forum</h1>
        <h2 class="text-white text-center text-xl">Posez vos questions à la communauté</h2>
    </div>
    <div class="p-1">
        <nav class="">
            <ul class="flex justify-around p-1">
                <li class="border-gray-300 border-solid border hover:border-gray-800 text-white rounded p-1"><a href="../src/index.php">Les Questions</a></li>
                <li class="border-gray-300 border-solid border hover:border-gray-800 text-white rounded p-1"><a href="../src/question.php">Poser une question</a></li>
                <li class="border-gray-300 border-solid border hover:border-gray-800 text-white rounded p-1"><a href="../src/my-questions.php">Mes questions</a></li>
                <li class="border-gray-300 border-solid border hover:border-gray-800 text-white rounded p-1"><a href="../src/my-profil.php"> <?php if (isset($_SESSION['user_id'])) {
                                                                                                    echo "Profil de " .$_SESSION['first_name'];
                                                                                                }else{ echo "Mon profil";} ?></a></li>

                <?php

                if (isset($_SESSION['user_id'])) { ?>
                    <li class="border-gray-300 hover:border-gray-800 text-white border-solid border rounded p-1"><a href="../action/logout_action.php">Deconnexion</a></li>
                <?php
                } else { ?>
                    <li class="border-gray-300 hover:border-gray-800 text-white border-solid border rounded p-1"><a href="login.php">Connexion</a></li>
                <?php
                }

                ?>


            </ul>
        </nav>
    </div>
</header>