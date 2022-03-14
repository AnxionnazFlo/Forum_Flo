<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <title>Page de connexion</title>
</head>

<?php include('../inc/header_inc.php'); 
include('../action/login_action.php');
?>

<body class="my-bg-body h-screen">
    <div class="flex justify-center items-center mx-auto h-auto mt-4">
        <div class=" p-1 m-auto">
            <p class="text-center text-white text-3xl p-4 border-2 border-solid shadow border-gray-400 rounded">Accéder au site</p>

            <form class="text-center p-4" action="" method="POST">

                <div class="relative mx-1 my-3">
                    <input required class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-slate-400" type="text" name="username" id="username" placeholder=" " />
                    <label for="username" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Pseudo</label>
                </div>
                <div class="relative mx-1 my-3">
                    <input required class=" peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-slate-500" type="password" name="pwd" id="password" placeholder=" " />
                    <label for="password" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm" for="floating_last_name">Mot de passe</label>
                </div>

                <?php
				if ($case == 1) { ?>
					<div class="">Votre mot de passe n'est pas correct.</div>
					
				<?php
				}
				if ($case == 2) { ?>
					<div class="">Bienvenue <?php echo $user['first_name'] ?></div>
					
				<?php
                echo "<meta http-equiv='refresh' content='2;URL=index.php'>";
				}				
				?>
                <div class="flex justify-center">
                    <div class="border-2 border-solid border-gray-400 rounded-md mt-6 bg-slate-500">
                        <button type="submit" class="text-white p-1">Se connecter</button>
                    </div>
                </div>
            </form>
            <div class="text-center">
                <a href="inscription.php" class="text-sm opacity-95 text-white">Créer un compte</a>
            </div>
        </div>
    </div>

</body>


</html>