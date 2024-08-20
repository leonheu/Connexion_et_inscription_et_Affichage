<?php
/* Smarty version 5.3.1, created on 2024-07-30 14:36:48
  from 'file:templates/inscription.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66a8fa8016e5e1_91983882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8863467cac1bbd74bce39f9cca8ed7b8581beb10' => 
    array (
      0 => 'templates/inscription.tpl',
      1 => 1722350170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66a8fa8016e5e1_91983882 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\leonh\\Desktop\\ExoPHP\\30-07-2024\\templates';
?><section class="h-screen w-dvw">
    <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800 md:text-5xl lg:text-6xl dark:text-white text-center mt-14">
        Inscription</h1>
    <form class="max-w-sm mx-auto mt-24" action="../inscription.php" method="POST" enctype="multipart/form-data">
        <div class="mb-5">
            <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choisir votre nom</label>
            <input type="text" id="nom" name="nom"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Votre nom" required />
        </div>
        <div class="mb-5">
            <label for="prenom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choisir votre prénom</label>
            <input type="text" id="prenom" name="prenom"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Votre prénom" required />
        </div>
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choisir votre e-mail</label>
            <input type="email" id="email" name="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="example@example.com" required />
        </div>
        <div class="mb-5">
            <label for="mdp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choisir votre mot de passe</label>
            <input type="password" id="mdp" name="mdp"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="photo">Charger votre photo:</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="photo" type="file" name="photo">
        </div>
        <div class="mb-5 flex justify-center">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">S'inscrire</button>
        </div>
    </form>
</section><?php }
}
