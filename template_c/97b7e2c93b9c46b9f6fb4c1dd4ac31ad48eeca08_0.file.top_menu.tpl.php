<?php
/* Smarty version 3.1.32, created on 2019-05-12 17:41:53
  from 'C:\xampp\htdocs\draganovlab401\view\top_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cd83ec18aae77_46513735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97b7e2c93b9c46b9f6fb4c1dd4ac31ad48eeca08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\draganovlab401\\view\\top_menu.tpl',
      1 => 1557675697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd83ec18aae77_46513735 (Smarty_Internal_Template $_smarty_tpl) {
?><div id='navbar'>
    <a style="background-color:transparent ;margin: 3; padding: 3; text-align: center;"><img src="../images/draganovlabtransperant.png" width="65" height="25">4.1v ©</a>
    <a href='./new_patient.php'>РЕГИСТРАТУРА</a>
    <a href='./laboratory.php?from=<?php echo $_smarty_tpl->tpl_vars['from_date']->value;?>
&to=<?php echo $_smarty_tpl->tpl_vars['to_date']->value;?>
&searchbydate=Търси...'>ЛАБОРАТОРИЯ</a>
    <a href='./mdds.php?from=<?php echo $_smarty_tpl->tpl_vars['from_date']->value;?>
&to=<?php echo $_smarty_tpl->tpl_vars['to_date']->value;?>
&searchbydate=Търси...'>НАПРАВЛЕНИЯ</a>
    <a href='./search_by_date.php'>ТЪРСИ ПО ДАТИ</a> <?php ob_start();
echo $_smarty_tpl->tpl_vars['lvl']->value;
$_prefixVariable18 = ob_get_clean();
if ($_prefixVariable18 < 3) {
} else { ?><a href='./settings.php'>НАСТРОЙКИ</a><?php }?>

        <form method="GET" action="../controller/search.php">
            <div style="text-align: right; margin: 6  ">
                <select name="type">
                    <option value="idn">ЕГН:</option>
                    <option value="name">Име:</option>
                    <option value="id">ID:</option>
                </select>
                <input required type="search" placeholder="Търси..." name="search">
                <input type="submit" value="Търси" name="send">
            </div>
        </form>
</div><?php }
}
