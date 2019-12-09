<?php
/* Smarty version 3.1.32, created on 2019-12-09 16:18:21
  from '/var/www/html/dlab/view/add_ele.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dee57adab0109_82640524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54ad3b9af5d75f560afd8565d09073dbdf143bd0' => 
    array (
      0 => '/var/www/html/dlab/view/add_ele.tpl',
      1 => 1575901099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dee57adab0109_82640524 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>

    <title><?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['electro'];?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body style="background-color: #34495E; color:white;text-align: center; font-family: monospace">
    <form action="../controller/add_ele.php" method="POST">
        <h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['electro'];?>
</h2>
        <table border="0" cellspacing="0">
            <tr>
                <td style="text-align: right; font-family: monospace"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['test'];?>
</b> </td>
                <td>
                    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['name'];?>
">
                </td>
            </tr>

            <tr>
                <td style="text-align: right;font-family: monospace"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['unit'];?>
</b> </td>
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
</body>

</html><?php }
}
