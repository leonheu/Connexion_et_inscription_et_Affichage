<?php
/* Smarty version 5.3.1, created on 2024-07-31 00:26:36
  from 'file:templates/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66a984bc67af27_69684791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c84550a2102e94fda7198bb887b2b1c7e4174e3' => 
    array (
      0 => 'templates/index.tpl',
      1 => 1722385590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66a984bc67af27_69684791 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\leonheu\\Desktop\\ExoPHP\\30-07-2024\\templates';
?><section class="h-dvh w-dvw">
    <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800 md:text-5xl lg:text-6xl text-center mt-14">
        Ma page d'accueil</h1>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('user'), 'val', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('val')->value) {
$foreach0DoElse = false;
?>
            <?php if ($_smarty_tpl->getValue('key') == 'photo') {?>
                <div class="flex flex-col items-center bg-slate-300 border border-zinc-700 mt-6">
                    <p class="mb-3"><?php echo $_smarty_tpl->getValue('key');?>
</p>
                    <img src="img/<?php echo $_smarty_tpl->getValue('val');?>
" alt="photo" class="w-28 h-40 mb-3">
                </div>
            <?php } else { ?>
                <div class="flex justify-center bg-slate-300 border border-zinc-700 mt-6">
                    <p><?php echo $_smarty_tpl->getValue('key');?>
 ==> <?php echo $_smarty_tpl->getValue('val');?>
</p>
                </div>
            <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <form action="index.php" method="post">
        <div class="mb-5 mt-5 flex justify-center">
            <button type="submit" name="logout"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Se déconnecter</button>
        </div>
    </form>
</section><?php }
}
