<?php
/* Smarty version 3.1.32, created on 2019-05-22 15:23:59
  from 'C:\xampp\htdocs\dlab\view\panel_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ce54d6f35f2a4_48448780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eec03d556af1e4392c636bb7a38e066d2d06ee72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dlab\\view\\panel_1.tpl',
      1 => 1557675527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce54d6f35f2a4_48448780 (Smarty_Internal_Template $_smarty_tpl) {
?><select id="aioConceptName" name="tests[]" class="ui-choose" multiple="multiple" id="uc_04">
    <option value="01.01" style="list-style: none;">ПКК</option>
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
    <option value="01.09" style="list-style: none;">Урина-Седимент</option>
    <option value="01.08" style="list-style: none;">Урина-Химично</option>
    <option value="15.00" style="list-style: none;">Na, K, Cl</option>
    <option value="66.00" style="list-style: none;">АКР</option>
    <option value="01.40" style="list-style: none;">Левкограма</option>
    <option value="62.00" style="list-style: none;">КЗП</option>
</select><?php }
}
