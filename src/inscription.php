<?php
include('../action/inscription_action.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'inscription</title>
    <link href="../dist/output.css" rel="stylesheet">


</head>

<?php include('../inc/header_inc.php'); ?>

<body class="my-bg-body h-screen">
    <div class="flex items-center h-auto mx-auto container p-1">

        <div class=" p-4 mx-auto my-auto">
            <p class="text-center text-white text-3xl p-4 border border-solid shadow border-gray-400 rounded ">Formulaire d'inscription</p>
            <form class="text-center p-8" action="" method="POST">
                <div class="flex">
                    <div class="">
                        <div class="relative mr-3">
                            <input required pattern="^[a-zA-Z]+$" class=" peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-slate-500" type="text" name="first_name" id="floating_input" placeholder=" " />
                            <label for="floating_input" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Prénom</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="relative ml-3">
                            <input required pattern="^[a-zA-Z]+$" class=" peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-slate-500" type="text" name="last_name" id="floating_last_name" placeholder=" " />
                            <label class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm" for="floating_last_name">Nom</label>
                        </div>
                    </div>
                </div>

                <div class="relative mt-4">
                    <input required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" class=" peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-slate-500" type="password" name="pwd" id="password" placeholder=" " />
                    <label class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm" for="password">Mot de passe</label>
                </div>
                <div class="text-sm text-white p-1 my-1">8 caractères min, dont un chiffre une majuscule et une minuscule</div>
                <div class="relative mt-4">
                    <input required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" class=" peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-slate-500" type="password" name="pwd_verif" id="password_verif" placeholder=" " />
                    <label for="password_verif" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Vérification du mot de passe</label>
                </div>
                <div class="relative mt-4">
                    <input required class=" peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-slate-500" type="text" name="username" id="username" placeholder=" " />
                    <label for="username" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Pseudo</label>
                </div>

                <?php
				if ($case == 1) { ?>
					<div class="">Le pseudo est déjà pris, veuillez en choiri un autre.</div>
					
				<?php
				}
				if ($case == 2) { ?>
					<div class="">Vos mots de passe sont différents</div>
					
				<?php
				}
				if ($case == 3) { ?>
					<div class="">Votre mot de passe ne rempli pas les critères</div>
					
				<?php
				}
				if ($case == 4) { ?>
					<div class="">Vous êtes maintenant inscrit, vous pouvez vous connecter.</div>
					
				<?php
				echo "<meta http-equiv='refresh' content='1.5;URL=login.php'>";
				}
				
				?>

                <div class="flex justify-center">
                    <div class="border border-solid border-gray-300 rounded-md mt-6 bg-slate-500">
                        <button type="submit" class="text-white p-1">S'inscrire</button>
                    </div>
                </div>
            </form>

        </div>

    </div>
</body>

</html>