<?php
/* Smarty version 3.1.32, created on 2019-11-24 09:54:46
  from '/var/www/html/dlab/view/panel_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dda37467d9402_94209877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef53a3828dedf97b0281641d2283393b9b5117aa' => 
    array (
      0 => '/var/www/html/dlab/view/panel_1.tpl',
      1 => 1574582080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dda37467d9402_94209877 (Smarty_Internal_Template $_smarty_tpl) {
?><select required id="aioConceptName" name="tests[]" class="ui-choose" multiple="multiple" id="uc_04">
    <option value="01.01" style="list-style: none;">CBC</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tests']->value, 'test');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['test']->value['code'];?>
" style="list-style: none;"><?php echo $_smarty_tpl->tpl_vars['test']->value['button'];?>
</option>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <option value="01.09" style="list-style: none;">Urine-Sediment</option>
    <option value="01.08" style="list-style: none;">Urine-Chemical</option>
    <option value="15.00" style="list-style: none;">Na, K, Cl</option>
    <option value="66.00" style="list-style: none;">BGA</option>
    <option value="01.40" style="list-style: none;">WBC count</option>
    <option value="62.00" style="list-style: none;">AGP<!--ambulatory glucose profile--></option>
</select><?php }
}
