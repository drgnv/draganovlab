<?php
/* Smarty version 3.1.32, created on 2019-12-14 12:24:19
  from '/var/www/html/dlab/view/top_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df4b8531967b2_54342150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caeb65d6d440ca503901cc66f9c83042224e4a53' => 
    array (
      0 => '/var/www/html/dlab/view/top_menu.tpl',
      1 => 1575800044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df4b8531967b2_54342150 (Smarty_Internal_Template $_smarty_tpl) {
?><div id='navbar'>
    <a style="background-color:transparent ;margin: 3; padding: 3; text-align: center;"><img src="../images/draganovlabtransperant%20-%20Copy.png" width="35" height="25"></a>
    <a href='./new_patient.php'><?php echo $_smarty_tpl->tpl_vars['lang']->value['registry'];?>
</a>
    <a href='./laboratory.php?from=<?php echo $_smarty_tpl->tpl_vars['from_date']->value;?>
&to=<?php echo $_smarty_tpl->tpl_vars['to_date']->value;?>
&status=all&searchbydate=Търси...'><?php echo $_smarty_tpl->tpl_vars['lang']->value['laboratory'];?>
</a>
    <a href='./mdds.php?from=<?php echo $_smarty_tpl->tpl_vars['from_date']->value;?>
&to=<?php echo $_smarty_tpl->tpl_vars['to_date']->value;?>
&searchbydate=Търси...'><?php echo $_smarty_tpl->tpl_vars['lang']->value['mdds'];?>
</a>
    <a href='./search_by_date.php'><?php echo $_smarty_tpl->tpl_vars['lang']->value['search_by_date'];?>
</a> <?php ob_start();
echo $_smarty_tpl->tpl_vars['lvl']->value;
$_prefixVariable12 = ob_get_clean();
if ($_prefixVariable12 < 3) {
} else { ?><a href='./settings.php'><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings'];?>
</a><?php }?>

        <form method="GET" action="../controller/search.php">
            <div style="text-align: right; margin: 6  ">
                <select name="type">
                    <option value="idn"><?php echo $_smarty_tpl->tpl_vars['lang']->value['idn'];?>
:</option>
                    <option value="name"><?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
:</option>
                    <option value="id"><?php echo $_smarty_tpl->tpl_vars['lang']->value['id'];?>
:</option>
                </select>
                <input required type="search" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['search'];?>
..." name="search">
                <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['search'];?>
" name="send">
            </div>
        </form>
</div><?php }
}
