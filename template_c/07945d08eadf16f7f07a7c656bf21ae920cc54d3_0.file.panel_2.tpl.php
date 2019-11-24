<?php
/* Smarty version 3.1.32, created on 2019-05-02 09:55:10
  from 'C:\xampp\htdocs\draganovlab401\view\panel_2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ccaa25e784020_33311985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07945d08eadf16f7f07a7c656bf21ae920cc54d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\draganovlab401\\view\\panel_2.tpl',
      1 => 1556780131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ccaa25e784020_33311985 (Smarty_Internal_Template $_smarty_tpl) {
?><center><select multiple="multiple" id="my-select" name="tests[]" size="17" class="searchable">
                        <option value="01.01"  >ПКК</option>
                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tests']->value, 'test');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
?>
                               <option  value="<?php echo $_smarty_tpl->tpl_vars['test']->value['code'];?>
" style="list-style: none;"><?php echo $_smarty_tpl->tpl_vars['test']->value['button'];?>
</option>
                           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <option value="01.09"  >Урина-Седимент</option>
                        <option value="01.08"  >Урина-Химично</option>
                        <option value="66.00" >АКР</option>
                        <option value="01.40"  >Левкограма</option>
                    </select></center>
                    <?php echo '<script'; ?>
 src="../js/jquery.multi-select.js" type="text/javascript"><?php echo '</script'; ?>
>
                                    <?php echo '<script'; ?>
>$('#my-select').multiSelect()<?php echo '</script'; ?>
>
<?php }
}
