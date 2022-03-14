# Projet Forum_Flo

## 1. Contexte de l'évaluation 

Module de formation PHP/mySQL.  
L'objectif est de faire un forum de discution avec une interface de connexion.  


#### 1.1 Fonctionnalitées désirées :

- Posibilité de créer un compte
- Accès au site via l'interface de connexion
- Affichage des questions sur la page d'accueil
- Possibilité de répondre aux Questions
- Possibilité de modifier ou supprimer ses propres Questions

#### 1.2 Contrainte technique : 

- Toutes les pages doivent être gérées en php  
- Pas de JS  

## 2. Environnement technique

- HTML 5 / CSS 3 / TAILWIND CSS
- PHP 8.0.13 BDD mySQL -> MariaDB 10.4.22
- Serveur Local Apache 2 via XAMPP
- Pas de Design Patern pour ce petit projet


## 3. Procédure de mise en place en local

- Cloner le fichier sur votre ordinateur avec  
  `git clone https://github.com/AnxionnazFlo/Forum_Flo`  

- Installer le projet dans le dossier htdocs de XAMPP (www sous WAMP)  

- Via PHPmyAdmin, importez le fichier forumflo.sql dans votre BDD  

- Vérifier l'utilisateur et mot de passe dans le fichier connexion_bdd_inc.php (dans /inc/)  

- Vous pouvez vous connecter avec l'identifiant Test, password : Azerty1234 

- Lancer l'index.php qui est dans /src  

- Tout devrais fonctionner à présent

- Il est important de noter qu'il s'agit d'un de mes premiers projet, soyez indulgents

#### Have fun



 



