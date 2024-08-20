<?php
/* Smarty version 5.3.1, created on 2024-07-30 21:01:53
  from 'file:templates/login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66a954c1b74cf7_81500786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '011c787e08e88181492f32232f17900d17fcab82' => 
    array (
      0 => 'templates/login.tpl',
      1 => 1722373303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66a954c1b74cf7_81500786 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Léon\\Desktop\\ExoPHP\\30-07-2024\\templates';
?><section class="h-dvh w-dvw">
    <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800 md:text-5xl lg:text-6xl text-center mt-14">
        Connection
    </h1>
    <?php echo $_smarty_tpl->getValue('error');?>

    <form class="max-w-sm mx-auto mt-24" action="<?php echo $_smarty_tpl->getValue('dir');?>
/login.php" method="POST">
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Votre e-mail</label>
            <input type="email" id="email" name="mdp"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="exemple@exemple.com" required />
        </div>
        <div class="mb-5">
            <label for="mdp" class="block mb-2 text-sm font-medium text-gray-900 ">Votre mot de passe</label>
            <input type="password" id="mdp" name="mdp"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
        </div>
        <div class="mb-5 text-right"><a href="inscription.php"
                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">S'inscrire</a>
        </div>
        <div class="mb-5 flex justify-center">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </div>
    </form>

</section><?php }
}
