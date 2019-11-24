<?php
/* Smarty version 3.1.32, created on 2019-11-23 12:06:06
  from '/var/www/html/dlab/view/mdd_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dd9048e876a14_95808241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd3285cb38e01d3568217ee36e0f2d54baca8deb' => 
    array (
      0 => '/var/www/html/dlab/view/mdd_settings.tpl',
      1 => 1558695018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:top_menu.tpl' => 1,
    'file:side_menu.tpl' => 1,
    'file:mdd_settings_menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dd9048e876a14_95808241 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:side_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <div class="settings">
        <?php $_smarty_tpl->_subTemplateRender("file:mdd_settings_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <table border="0">
            <tr>
                <td align="center" style="color: white">
                    aaa

                </td>
                <td align="center" style="color: white">

                    ttt
                </td>
            </tr>
        </table>
    </div>
    <div class="footer"></div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
