<?php
session_start();
require_once 'vendor/autoload.php';
require_once 'db.php';

use Smarty\Compile\Tag\Assign;
use Smarty\Smarty;

$logintpl = new Smarty();
$montitre = 'Page de connection';
$yearnow = date('Y');
$logintpl->assign('montitre', $montitre);

if (isset($_POST['submit'])) {
    if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
        $requser = $db->prepare('SELECT * FROM `utilisateurs` WHERE email = :email');
        $requser->bindValue(':email', strip_tags($_POST['email']), PDO::PARAM_STR);
        if ($requser->execute()) {
            if ($requser->rowCount() == 1) {
                $user = $requser->fetch();
                if (password_verify($_POST['mdp'], $user['password'])) {
                    $_SESSION['user'] = $user['id'];
                    $valeur_cookie = [
                        'mail' => $user['email'],
                        'mdp' => $user['password']
                    ];
                    //cookie pour 2h
                    setcookie('user', serialize($valeur_cookie), (time() + 8040));
                    header('Location: index.php');
                } else {
                    $error = '<div class="w-dvw flex justify-center"><p class="text-center bg-red-500 p-4 rounded">Mot de passe incorrect.</p></div>';
                    $logintpl->assign('error', $error);
                }
            } else {
                $error = '<div class="w-dvw flex justify-center"><p class="text-center bg-red-500 p-4 rounded">Utilisateur introuvable.</p></div>';
                $logintpl->assign('error', $error);
            }
        }
    } else {
        $error = '<div class="w-dvw flex justify-center"><p class="text-center bg-red-400 p-4 rounded">Un des champs sont vides.</p></div>';
        $logintpl->assign('error', $error);
    }
}

$logintpl->display('templates/header.tpl');
$logintpl->display('templates/login.tpl');
$logintpl->assign('yearnow', $yearnow);
$logintpl->display('templates/footer.tpl');
