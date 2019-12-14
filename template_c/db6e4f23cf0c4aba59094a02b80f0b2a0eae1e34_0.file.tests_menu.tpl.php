<?php
/* Smarty version 3.1.32, created on 2019-12-14 13:00:25
  from '/var/www/html/dlab/view/tests_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df4c0c92f8f21_92123552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db6e4f23cf0c4aba59094a02b80f0b2a0eae1e34' => 
    array (
      0 => '/var/www/html/dlab/view/tests_menu.tpl',
      1 => 1575752186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df4c0c92f8f21_92123552 (Smarty_Internal_Template $_smarty_tpl) {
?><a id="redline" style="color: white; text-decoration: none; font-size: 15px;" href="../controller/edit_cbc.php">
    <img src="../images/cbc.png" width="25px" height="25px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['cbc'];?>

</a>
|
<a style="color: white; text-decoration: none; font-size: 15px;" href="../controller/edit_akr.php">
    <img src="../images/o2.png" width="25px" height="25px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['akr'];?>

</a>
|
<a style="color: white; text-decoration: none; font-size: 15px;" href="../controller/edit_urine.php">
    <img src="../images/urine.png" width="25px" height="25px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['urine'];?>

</a>
|
<a style="color: white; text-decoration: none; font-size: 15px;" href="../controller/edit_electrolites.php">
    <img src="../images/electrolites.png" width="35px" height="25px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['electro'];?>

</a><?php }
}
