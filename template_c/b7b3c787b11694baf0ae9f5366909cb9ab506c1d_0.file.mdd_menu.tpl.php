<?php
/* Smarty version 3.1.32, created on 2019-12-14 12:30:19
  from '/var/www/html/dlab/view/mdd_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df4b9bb43f246_53149567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7b3c787b11694baf0ae9f5366909cb9ab506c1d' => 
    array (
      0 => '/var/www/html/dlab/view/mdd_menu.tpl',
      1 => 1576319418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df4b9bb43f246_53149567 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <a href="../controller/add_mdd.php?patient_id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
"  style="color: white; text-decoration: none;"
       
       onclick="window.open('../controller/add_mdd.php?patient_id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
',
                                               'newwindow',
                                               'width=990,height=650');
                                               return false;"

       
       >
        <img src="../images/add.png" width="25" height="25"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['mdds'];?>

    </a> | 
    <a href=""  style="color: white; text-decoration: none;">
        <img src="../images/delete.png" width="25" height="25"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['mdds'];?>

    </a>
</div><?php }
}
