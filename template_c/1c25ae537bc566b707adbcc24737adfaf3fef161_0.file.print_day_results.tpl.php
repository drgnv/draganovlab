<?php
/* Smarty version 3.1.32, created on 2019-11-30 11:32:54
  from '/var/www/html/dlab/view/print_day_results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5de23746138bc9_55005073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c25ae537bc566b707adbcc24737adfaf3fef161' => 
    array (
      0 => '/var/www/html/dlab/view/print_day_results.tpl',
      1 => 1558695022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de23746138bc9_55005073 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
    <link rel="stylesheet" href="../css/print_day_results.css">
    <title>Резултати, клинична лаборатория от <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</title>
</head>

<body>
    <center>
        <p id="pdr"><b><?php echo $_smarty_tpl->tpl_vars['hospital_data']->value[0]['name'];?>
</b> | <?php echo $_smarty_tpl->tpl_vars['hospital_data']->value[0]['doctor'];?>
 | <b>Резултати от дата:</b> <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</p>

        <table id="pdr" border="1" cellspacing="0">
            <th>№</th>
            <th>Пациент</th>
            <th>Лекар</th>
            <th>Резултати</th>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['number'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['names'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['doctor'];?>
</td>
                <td>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'res');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['res']->value) {
?>
                    <b> <?php echo $_smarty_tpl->tpl_vars['res']->value['name'];?>
</b> - <?php echo $_smarty_tpl->tpl_vars['res']->value['result'];?>
&nbsp; <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </center>
</body>

</html><?php }
}
