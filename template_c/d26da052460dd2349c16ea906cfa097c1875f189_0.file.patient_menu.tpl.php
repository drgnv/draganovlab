<?php
/* Smarty version 3.1.32, created on 2019-05-20 17:02:16
  from 'C:\xampp\htdocs\draganovlab402\view\patient_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ce2c178813167_32740526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd26da052460dd2349c16ea906cfa097c1875f189' => 
    array (
      0 => 'C:\\xampp\\htdocs\\draganovlab402\\view\\patient_menu.tpl',
      1 => 1558364535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce2c178813167_32740526 (Smarty_Internal_Template $_smarty_tpl) {
?><a style="text-decoration: none; color: white;" href="../controller/print.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
" target="_blank">
                            <img src="../images/reqgreen.png" width="20" height="20" title="Принтирай заявка на <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['names'];?>
"> ЗАЯВКА
                        </a> |
                        <a style="text-decoration: none; color: white;" href="../controller/resultbyid.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
" target="_blank">
                            <img src="../images/results.png" width="20" height="20" title="Принтирай резултати на <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['names'];?>
"> РЕЗУЛТАТИ
                        </a> |
                        <a style="text-decoration: none; color: white;" href="../controller/onlineresults.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
" target="_blank">
                            <img src="../images/online.png" width="20" height="20" title="Онлайн достъп на <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['names'];?>
"> ОНЛАЙН ДОСТЪП
                        </a> |
                        <a style="text-decoration: none; color: white;" href="../controller/laboratory.php?delete=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
" alt="Изтриване" onclick="return confirm('Сигурен ли сте, че искате да изтриете пациент: <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
?')" title="Изтрий <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
">
                            <img src="../images/delete.png" width="20" height="20" alt="Изтриване"> ИЗТРИВАНЕ
                        </a><?php }
}
