<?php
/* Smarty version 3.1.32, created on 2019-03-10 12:00:39
  from 'C:\xampp\htdocs\draganovlab401\view\add_category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c84ee574316b9_15769231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83dee2586c64c669c0f44ccb6aefa4687d1b3649' => 
    array (
      0 => 'C:\\xampp\\htdocs\\draganovlab401\\view\\add_category.tpl',
      1 => 1552215635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c84ee574316b9_15769231 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title>Добави категория</title>
    </head>
    <body>
        <form action="../controller/add_category.php" method="POST">
            <input type="text" placeholder="Име на категорията" name="category-name">
            <input type="text" placeholder="Уникален код" name="category-code">
            <input type="submit" name="add-category" value="Добави">
        </form>
        <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

    </body>
</html><?php }
}
