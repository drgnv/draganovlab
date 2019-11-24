<?php
/* Smarty version 3.1.32, created on 2019-05-23 06:36:26
  from 'C:\xampp\htdocs\dlab\view\settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ce6234a678ea3_41720261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5796c012bb04e839d5c5f4233331efa9b71eb632' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dlab\\view\\settings.tpl',
      1 => 1557675649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:top_menu.tpl' => 1,
    'file:side_menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ce6234a678ea3_41720261 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:side_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <div class="settings">
        <table>
            <tr>
                <td style="color: white" align="center">
                    <p><?php echo $_smarty_tpl->tpl_vars['test_panel']->value[0]['setting_name'];?>
</p>
                    <form action="./settings.php" method="post">

                        <p>
                            <input type="radio" value="panel_1" name="p1" <?php if ($_smarty_tpl->tpl_vars['test_panel']->value[0]['setting_selected'] == "panel_1") {?> checked <?php }?> onclick="javascript: submit()"> Изглед 1:
                            <br>
                            <img src="../images/panel_1.PNG" width="200" height="100" border="1">
                        </p>
                        <p>
                            <input type="radio" value="panel_2" name="p1" <?php if ($_smarty_tpl->tpl_vars['test_panel']->value[0]['setting_selected'] == "panel_2") {?> checked <?php }?> onclick="javascript: submit()"> Изглед 2:
                            <br>
                            <img src="../images/panel_2.PNG" width="200" height="100" border="1">
                        </p>
                    </form>

                </td>
                <td align="center">
                    <table>
                        <form action="../controller/settings.php" method="POST">
                            <table border="0" class="td-submenu">
                                <h1 style="color: whitesmoke ; font-size: 25px;">Общи настройки</h1>
                                <hr>
                                <tr>
                                    <td align="right">Болница:</td>
                                    <td>
                                        <input type="text" name="hospital" value="<?php echo $_smarty_tpl->tpl_vars['hospital']->value[0]['name'];?>
">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">Лекар:</td>
                                    <td>
                                        <input type="text" name="doctor" value="<?php echo $_smarty_tpl->tpl_vars['hospital']->value[0]['doctor'];?>
">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">Адрес:</td>
                                    <td>
                                        <input type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['hospital']->value[0]['address'];?>
">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">Телефон:</td>
                                    <td>
                                        <input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['hospital']->value[0]['phone'];?>
">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right"> Mail:</td>
                                    <td>
                                        <input type="text" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['hospital']->value[0]['mail'];?>
">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right"> Web сайт:</td>
                                    <td>
                                        <input type="text" name="web" value="<?php echo $_smarty_tpl->tpl_vars['hospital']->value[0]['web'];?>
">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">Предупреждение:</td>
                                    <td>
                                        <textarea name="note" rows="10" cols="35"><?php echo $_smarty_tpl->tpl_vars['hospital']->value[0]['note'];?>
</textarea>
                                    </td>
                                </tr>

                            </table>
                            <p>
                                <input type="submit" name="save" value="Запиши промените">
                            </p>
                        </form>
                </td>
            </tr>
            </table>

    </div>
    <div class="footer"></div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
