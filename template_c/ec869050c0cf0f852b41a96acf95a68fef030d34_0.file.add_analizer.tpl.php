<?php
/* Smarty version 3.1.32, created on 2019-03-16 08:27:40
  from 'C:\xampp\htdocs\draganovlab401\view\add_analizer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c8ca56c678ff6_53389286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec869050c0cf0f852b41a96acf95a68fef030d34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\draganovlab401\\view\\add_analizer.tpl',
      1 => 1552151644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8ca56c678ff6_53389286 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title>Добави анализатор</title>
    </head>
    <body style="font-family: monospace;">
        <h2 align="center">Добави анализатор</h2>
        <table border="0" cellspacing="0" cellpadding="3">
        <form  action="../controller/add_analizer.php" method="POST">
            <tr><td align="right">Име: </td><td><input type="text" name="analizer-name"></td></tr>
           <tr><td>Категория: </td><td> <select name="category">
                <option>Хематология</option>
                <option>Биохимия</option>
                <option>Коагулация</option>
                <option>Имунология</option>
                <option>Урина</option>
            </select></td></tr>
           <tr><td></td><td> <input type="submit" name="add" value="Запис"></td>
        </form>
        </table>
    </body>
</html><?php }
}
