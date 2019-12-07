<?php
/* Smarty version 3.1.32, created on 2019-12-07 21:20:36
  from '/var/www/html/dlab/view/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5debfb84bf16d2_23497361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3ea3ce0652260fe17aa045ceebc1a0992edca16' => 
    array (
      0 => '/var/www/html/dlab/view/settings.tpl',
      1 => 1575746432,
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
function content_5debfb84bf16d2_23497361 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:side_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <div class="settings">
        <table>
            <tr>
                <td style="color: white" align="center">
                    <p><?php echo $_smarty_tpl->tpl_vars['lang']->value['panel'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['tests'];?>
</p>
                    <form action="./settings.php" method="post">

                        <p>
                            <input type="radio" value="panel_1" name="p1" <?php if ($_smarty_tpl->tpl_vars['test_panel']->value[0]['setting_selected'] == "panel_1") {?> checked <?php }?> onclick="javascript: submit()"><?php echo $_smarty_tpl->tpl_vars['lang']->value['look'];?>
 1:
                            <br>
                            <img src="../images/panel_1.PNG" width="200" height="100" border="1">
                        </p>
                        <p>
                            <input type="radio" value="panel_2" name="p1" <?php if ($_smarty_tpl->tpl_vars['test_panel']->value[0]['setting_selected'] == "panel_2") {?> checked <?php }?> onclick="javascript: submit()"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['look'];?>
 2:
                            <br>
                            <img src="../images/panel_2.PNG" width="200" height="100" border="1">
                        </p>
                    </form>

                </td>
                <td align="center">
                    <table>
                        <form action="../controller/settings.php" method="POST">
                            <table border="0" class="td-submenu">
                                <h1 style="color: whitesmoke ; font-size: 25px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general_settings'];?>
</h1>
                                <hr>
                                <tr>
                                    <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['hospital'];?>
:</td>
                                    <td>
                                        <input type="text" name="hospital" value="<?php echo $_smarty_tpl->tpl_vars['hospital']->value[0]['name'];?>
">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['doctor'];?>
:</td>
                                    <td>
                                        <input type="text" name="doctor" value="<?php echo $_smarty_tpl->tpl_vars['hospital']->value[0]['doctor'];?>
">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address'];?>
:</td>
                                    <td>
                                        <input type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['hospital']->value[0]['address'];?>
">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['phone'];?>
:</td>
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
                                    <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['website'];?>
:</td>
                                    <td>
                                        <input type="text" name="web" value="<?php echo $_smarty_tpl->tpl_vars['hospital']->value[0]['web'];?>
">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['warning'];?>
:</td>
                                    <td>
                                        <textarea name="note" rows="10" cols="35" style="resize: none;"><?php echo $_smarty_tpl->tpl_vars['hospital']->value[0]['note'];?>
</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['language'];?>
:</td>
                                    <td>
                                        <select name="lang">
                                            <option value="english" <?php ob_start();
echo $_smarty_tpl->tpl_vars['hospital']->value[0]['default_lang'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "english") {?>selected<?php }?>>English</option>
                                            <option value="bulgarian" <?php ob_start();
echo $_smarty_tpl->tpl_vars['hospital']->value[0]['default_lang'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == "bulgarian") {?>selected<?php }?>>Български</option>
                                            <option value="france" <?php ob_start();
echo $_smarty_tpl->tpl_vars['hospital']->value[0]['default_lang'];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == "france") {?>selected<?php }?>>Le français</option>
                                            <option value="spanish" <?php ob_start();
echo $_smarty_tpl->tpl_vars['hospital']->value[0]['default_lang'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == "spanish") {?>selected<?php }?>>Español</option>
                                        </select>
                                    </td>
                                </tr>

                            </table>
                            <p>
                                <input type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['save_btn'];?>
">
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
