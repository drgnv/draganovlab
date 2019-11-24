<?php
/* Smarty version 3.1.32, created on 2019-11-24 09:49:55
  from '/var/www/html/dlab/view/edit_cbc_component.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dda36231764f5_03581094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c282e09eb3bc626136810e6d2cf8367390c99aa2' => 
    array (
      0 => '/var/www/html/dlab/view/edit_cbc_component.tpl',
      1 => 1558695016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dda36231764f5_03581094 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>

    <title>Редактиране на <?php echo $_smarty_tpl->tpl_vars['test']->value[0]['name'];?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>
    <form action="../controller/edit_cbc_component.php?id=<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['id'];?>
" method="POST">
        <table border="0" cellspacing="0">
            <tr>
                <td style="text-align: right; font-family: monospace"><b>Изследване:</b> </td>
                <td>
                    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['name'];?>
">
                </td>
            </tr>

            <tr>
                <td style="text-align: right;font-family: monospace"><b>Мерна единица:</b> </td>
                <td>
                    <input type="text" name="unit" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['unit'];?>
">
                </td>
            </tr>
            <tr style="display: none;">
                <td style="text-align: right; font-family: monospace"><b>Код:</b> </td>
                <td>
                    <input type="text" name="code" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['code'];?>
">
                </td>
            </tr>
            <tr style="display: none;">
                <td style="text-align: right;font-family: monospace">
                    <b>Група:</b>
                </td>
                <td>
                    <select name="flag">
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['test']->value[0]['flag'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 'blood') {?>
                        <option value="blood" selected="true">Кръв</option>
                        <?php } else { ?>
                        <option value="blood" selected="true">Кръв</option>
                        <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['test']->value[0]['flag'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 'urine') {?>
                        <option value="urine">Урина</option>
                        <?php } else { ?>
                        <option value="urine">Урина</option>
                        <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['test']->value[0]['flag'];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 'hormon') {?>
                        <option value="hormon" selected="true">Хормон</option>
                        <?php } else { ?>
                        <option value="hormon">Хормон</option>
                        <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['test']->value[0]['flag'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == 'cbc') {?>
                        <option value="cbc" selected="true">ПКК</option>
                        <?php } else { ?>
                        <option value="cbc">ПКК</option>
                        <?php }?>

                    </select>
                </td>
            </tr>
        </table>
        <br>
        <center style="font-family: monospace">
            <b style="font-family: monospace">Референтен интервал</b>
            <br> от:
            <input type="text" name="up" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['up'];?>
" size="3"> | до:
            <input type="text" name="down" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['down'];?>
" size="3">
            <br>
            <br>
            <input style="display: none;" type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['price'];?>
" size="3">
            <br>
            <br>
            <input type="submit" name="save" value="Запис"> </center>

    </form>
</body>

</html><?php }
}
