<?php
require_once 'vendor/autoload.php';
require_once 'db.php';
require_once 'function.php';

use Smarty\Compile\Tag\Assign;
use Smarty\Smarty;

$inscriptiontpl = new Smarty();
$montitre = "Page d'inscription";
$yearnow = date('Y');
$inscriptiontpl->assign('montitre', $montitre);
$inscriptiontpl->assign('yearnow', $yearnow);



if (isset($_POST['submit'])) {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email'] && !empty($_POST['mdp']) && !empty($_FILES['photo']))) {

        if (!existUser()) {
            $rqinscription = $db->prepare('INSERT INTO Utilisateurs (nom,prenom,email,password,photo)
        VALUES (:nom,:prenom,:email,:password,:photo)
        ');
            $rqinscription->bindValue(':nom', strip_tags($_POST['nom']), PDO::PARAM_STR);
            $rqinscription->bindValue(':prenom', strip_tags($_POST['prenom']), PDO::PARAM_STR);
            $rqinscription->bindValue(':email', strip_tags($_POST['email']), PDO::PARAM_STR);
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
            $rqinscription->bindValue(':password', $mdp, PDO::PARAM_STR);
            if (uploadingFile('img')) {
                $rqinscription->bindValue(':photo', strip_tags($_FILES['photo']['name']), PDO::PARAM_STR);
                $rqinscription->execute();
                $error = '<div class="w-dvw flex justify-center"><p class="text-center bg-green-400 p-4 rounded">Vous êtes inscrit</p></div><div class="w-dvw flex justify-center"><a href="login.php" class="text-center font-medium text-blue-600 dark:text-blue-500 hover:underline">Vous pouvez vous connecter.</a></div>';
                $inscriptiontpl->assign('error', $error);
            } else {
                $error = '<div class="w-dvw flex justify-center"><p class="text-center bg-red-400 p-4 rounded">Fichier incorrect ou déjà existant.</p></div>';
                $inscriptiontpl->assign('error', $error);
            }
        } else {
            $error = '<div class="w-dvw flex justify-center"><p class="text-center bg-orange-400 p-4 rounded">Vous êtes déja inscrit.</p></div>';
            $inscriptiontpl->assign('error', $error);
        }
    } else {
        $error = '<div class="w-dvw flex justify-center"><p class="text-center bg-red-400 p-4 rounded">Un des champs sont vides.</p></div>';
        $inscriptiontpl->assign('error', $error);
    }
}

$inscriptiontpl->display('templates/header.tpl');
$inscriptiontpl->display('templates/inscription.tpl');
$inscriptiontpl->display('templates/footer.tpl');
