<?php
/* Smarty version 3.1.32, created on 2019-05-24 21:28:39
  from 'C:\xampp\htdocs\dlab\view\mdd_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ce845e712a700_66142035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffa57528b41e4444a8a372d45b239bdacd2509cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dlab\\view\\mdd_menu.tpl',
      1 => 1558726105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce845e712a700_66142035 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <a href="../controller/add_mdd.php?patient_id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
"  style="color: white; text-decoration: none;"
       
       onclick="window.open('../controller/add_mdd.php?patient_id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
',
                                               'newwindow',
                                               'width=990,height=650');
                                               return false;"
                                       alt="Редактирай резултати"
       
       >
        <img src="../images/add.png" width="25" height="25"> Добави направление
    </a> | 
    <a href=""  style="color: white; text-decoration: none;">
        <img src="../images/delete.png" width="25" height="25"> Премахни направление
    </a>
</div><?php }
}
