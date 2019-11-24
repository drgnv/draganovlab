<?php
/* Smarty version 3.1.32, created on 2019-03-10 10:40:57
  from 'C:\xampp\htdocs\draganovlab401\view\add_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c84dba979f6d4_12304499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6486b31a95cb7255256ed2018b67362a0ff76c2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\draganovlab401\\view\\add_user.tpl',
      1 => 1542795184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c84dba979f6d4_12304499 (Smarty_Internal_Template $_smarty_tpl) {
?><center><h3 style="font-family: fantasy;">Добави потребител</h3>
<form action="../controller/add_user.php" method="POST"></p>
<p> <input name="new_name" type="text" placeholder="Имена" maxlength="30"></p>
    <p><input name="new_username" type="text" placeholder="Потребителско име" maxlength="20"></p>
    <p><input name="new_password" type="password" placeholder="Парола" maxlength="20"></p>
   <p> <input name="new_password2" type="password" placeholder="Повтори парола" maxlength="20"></p>
   <p> <b style="font-family: fantasy; font-size: 14px;">Ниво: </b>
       <select placeholder="1" name="lvl">
        <option value="1">Начинаещ</option>
        <option value="2">Лаборант</option>
        <option value="3">Администратор</option>
    </select></p>
   <p> <input name="add" type="submit" value="Добави"></p>
   <p style="color: <?php echo $_smarty_tpl->tpl_vars['color']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</p>
</form></center><?php }
}
