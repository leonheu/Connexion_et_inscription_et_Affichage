<?php
/* Smarty version 5.3.1, created on 2024-07-30 21:39:56
  from 'file:templates/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66a95dac838090_96783264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a72fe580ba5863f354bf5f2c0cac97e67e91acff' => 
    array (
      0 => 'templates/header.tpl',
      1 => 1722343089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66a95dac838090_96783264 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\leonheu\\Desktop\\ExoPHP\\30-07-2024\\templates';
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->getValue('montitre');?>
</title>
    <?php echo '<script'; ?>
 src="https://cdn.tailwindcss.com"><?php echo '</script'; ?>
>
</head>

<body class="flex flex-col justify-between h-dvh w-dvw bg-slate-100">
    <header class="w-dvw bg-slate-300">
        <nav class="w-dvw">
            <ul class="w-dvw flex justify-around h-32 items-center">
                <li><a href="index.php" class="bg-slate-400 p-4 hover:shadow-xl rounded-xl">Home</a></li>
                <li><a href="login.php" class="bg-slate-400 p-4 hover:shadow-xl rounded-xl">Connexion</a></li>
                <li><a href="inscription.php" class="bg-slate-400 p-4 hover:shadow-xl rounded-xl">Inscription</a></li>
            </ul>
        </nav>
</header><?php }
}
