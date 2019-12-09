<?php
/* Smarty version 3.1.32, created on 2019-12-09 16:12:22
  from '/var/www/html/dlab/view/add_akr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dee5646677b72_80849325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1926735bc6ff1fb7738938889603a742fe410660' => 
    array (
      0 => '/var/www/html/dlab/view/add_akr.tpl',
      1 => 1575900739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dee5646677b72_80849325 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>

    <title><?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
 на показател към АКР</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body style="background-color: #34495E; color:white;text-align: center; font-family: monospace">
<form action="../controller/add_akr.php" method="POST">
    <h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['akr'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['test'];?>
 </h2>
    <table border="0" cellspacing="0">
        <tr>
            <td style="text-align: right; font-family: monospace"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['test'];?>
:</b> </td>
            <td>
                <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['name'];?>
">
            </td>
        </tr>

        <tr>
            <td style="text-align: right;font-family: monospace"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['unit'];?>
:</b> </td>
            <td>
                <input type="text" name="unit" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['unit'];?>
">
            </td>
        </tr>
    </table>
    <br>
    <center style="font-family: monospace">
        <b style="font-family: monospace"><?php echo $_smarty_tpl->tpl_vars['lang']->value['referent_norms'];?>
</b>
        <br> <?php echo $_smarty_tpl->tpl_vars['lang']->value['from'];?>
:
        <input type="text" name="up" size="3"> | <?php echo $_smarty_tpl->tpl_vars['lang']->value['to'];?>
:
        <input type="text" name="down" size="3">
        <br>
        <br>
        <br>
        <br>
        <input type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['save_btn'];?>
"> </center>

</form>
</body><?php }
}
