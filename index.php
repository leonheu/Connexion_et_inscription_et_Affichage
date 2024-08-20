<?php
session_start();
require_once 'vendor/autoload.php';
require_once 'db.php';


use Smarty\Compile\Tag\Assign;
use Smarty\Smarty;

$indextpl = new Smarty();
$montitre = "Page d'accueil";
$yearnow = date('Y');
$indextpl->assign('montitre', $montitre);
$indextpl->assign('yearnow', $yearnow);


if (!isset($_COOKIE['user'])) {
    header('Location: login.php');
} else {
    $mycookie = unserialize($_COOKIE['user']);
    $requser = $db->query('SELECT * FROM Utilisateurs where email = "' . $mycookie['mail'] . '" and password = "' . $mycookie['mdp'] . '"');
    $user = $requser->fetch();
    $indextpl->assign('user', $user);
}

if(isset($_POST['logout'])){
    $_SESSION['user'] = null;
    setcookie('user','',(time()-1));
    header('location: index.php');
}



$indextpl->display('templates/header.tpl');
$indextpl->display('templates/index.tpl');
$indextpl->display('templates/footer.tpl');
