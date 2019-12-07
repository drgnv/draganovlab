<?php
/* Smarty version 3.1.32, created on 2019-12-07 13:39:26
  from '/var/www/html/dlab/view/add_doctor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5deb8f6ec18572_04464529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f83d8ef4a87b0f56119ffd549722b4bf46c394c9' => 
    array (
      0 => '/var/www/html/dlab/view/add_doctor.tpl',
      1 => 1575718764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5deb8f6ec18572_04464529 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
    <title><?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['doctor'];?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div>
        <h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['doctor'];?>
</h3>
        <form action="../controller/add_doctor.php" method="POST">
            <table border="1" cellspacing="0">
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
:</td>
                    <td>
                        <input type="text" name="name" required>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['phone'];?>
:</td>
                    <td>
                        <input type="text" name="phone">
                    </td>
                </tr>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['phone'];?>
 2:</td>
                    <td>
                        <input type="text" name="phone2">
                    </td>
                </tr>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['uin'];?>
:</td>
                    <td>
                        <input type="text" name="uin">
                    </td>
                </tr>
            </table>

            <p>
                <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
">
            </p>
        </form>

    </div>
</body>

</html><?php }
}
