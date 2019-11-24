<?php
/* Smarty version 3.1.32, created on 2019-03-10 10:42:16
  from 'C:\xampp\htdocs\draganovlab401\view\edit_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c84dbf89004c3_55238641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04a87097cba762223f2411d2003e28e1ea18992a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\draganovlab401\\view\\edit_user.tpl',
      1 => 1551813208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c84dbf89004c3_55238641 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>

</head>
<body><center>
    <form action="../controller/edit_user.php?user_id=<?php echo $_smarty_tpl->tpl_vars['user']->value[0]['id'];?>
" method="POST">
    <table border="1" cellspacing="0">
        <tr>
            <td>Име: </td>
            <td><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value[0]['name'];?>
"></td>
        </tr>
        <tr>
            <td>Потребител:</td>
            <td><input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value[0]['username'];?>
"></td>
        </tr>
        <tr>
            <td>E-mail:</td>
            <td><input type="text" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['user']->value[0]['mail'];?>
"></td>
        </tr>
        <tr>
            <td>Права: </td>
            <td>
                <select name="lvl">
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value[0]['lvl'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?>
                    <option value="1" selected>Начинаещ</option>
                    <option value="2" >Лаборант</option>
                    <option value="3">Администратор</option>
                    <?php }?>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value[0]['lvl'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 2) {?>
                        <option value="1" >Начинаещ</option>
                    <option value="2" selected>Лаборант</option>
                    <option value="3">Администратор</option>
                    <?php }?>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value[0]['lvl'];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == "3") {?>
                        <option value="1">Начинаещ</option>
                    <option value="2" >Лаборант</option>
                    <option value="3" selected>Администратор</option>
                    <?php }?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Парола*</td>
            <td><input type="password" name="password"></td>
        </tr>
    </table>
            <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>


        <input type="submit" value="Запис" name="save">
        <p><?php echo $_smarty_tpl->tpl_vars['wp']->value;?>
</p>
    </form>
    <hr><p><i>
            *Въвевете вашата парола за да запишете промените успешно
        </i></p>
    <p><a href="">Промени парола</a></p>
</center>
</body>
</html><?php }
}
