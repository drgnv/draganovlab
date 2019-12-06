<?php
/* Smarty version 3.1.32, created on 2019-11-30 13:01:16
  from '/var/www/html/dlab/view/resultbyid.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5de24bfc858626_84787320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '279b43981560ba66bc34fe92ade8971fff239165' => 
    array (
      0 => '/var/www/html/dlab/view/resultbyid.tpl',
      1 => 1558695022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de24bfc858626_84787320 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head id="headPatResult">
    <title>

    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="../css/PatRes.css" type="text/css" rel="Stylesheet" media="screen" />
    <link href="../css/PatResPrint.css" type="text/css" rel="Stylesheet" media="print" />
</head>

<body>

    <div class="Main">
        <div class="ResultHeader">
            <!-- Result head -->
            <h1>
                <?php echo $_smarty_tpl->tpl_vars['hospital']->value[0]['name'];?>
</h1>
            <h2>
                <?php echo $_smarty_tpl->tpl_vars['hospital']->value[0]['address'];?>
, тел: <?php echo $_smarty_tpl->tpl_vars['hospital']->value[0]['phone'];?>
, <?php echo $_smarty_tpl->tpl_vars['hospital']->value[0]['web'];?>
, e-mail: <?php echo $_smarty_tpl->tpl_vars['hospital']->value[0]['mail'];?>
</h2>
            <table>
                <tr>
                    <th class="WoB">
                        <?php echo $_smarty_tpl->tpl_vars['patient']->value[0]['date'];?>

                    </th>
                    <th class="WoG">
                        <?php echo $_smarty_tpl->tpl_vars['patient']->value[0]['names'];?>

                    </th>
                    <th style="width:30px;">
                        ID
                    </th>
                    <th class="WoB" style="text-align:center;">
                        <?php echo $_smarty_tpl->tpl_vars['patient']->value[0]['number'];?>

                    </th>
                </tr>
            </table>

            <table>
                <tr>
                    <td style="width:110px;">Лекуващ лекар</td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['patient']->value[0]['doctor'];?>

                    </td>
                    <td style="width:80px;"></td>
                    <td style="width:120px;">

                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="width:110px;">Лекар клинична лаборатория</td>

                    <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['hospital']->value[0]['doctor'];?>
</td>
                    <td>

                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="width:110px;"></td>
                    <td></td>
                </tr>
            </table>

        </div>
        <div class="Resultdetails">

            <table>
                <thead>
                    <tr>
                        <th class="NameHeader">Име на теста (изследване)</th>
                        <th class="ResultHeader">Резултат</th>
                        <th class="UnitsHeader">Единици</th>
                        <th class="RangeHeader">Референтни стойности</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['patient']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>
</td>
                        <td class="Result"><?php echo $_smarty_tpl->tpl_vars['result']->value['result'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['unit'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['up'];?>
 - <?php echo $_smarty_tpl->tpl_vars['result']->value['down'];?>
</td>
                    </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
        <div class="Footer">
            <p class="Note">
                <b>Коментар на резултатите:</b> <?php echo $_smarty_tpl->tpl_vars['patient']->value[0]['comment'];?>

            </p>
            <p class="Note">
                <?php echo $_smarty_tpl->tpl_vars['hospital']->value[0]['note'];?>

            </p>
            <p class="Copyright">
                Справката е отпечатана на <?php echo $_smarty_tpl->tpl_vars['dd']->value;?>
 Лабораторна Информационна Система dLab. (C)
            </p><?php echo $_smarty_tpl->tpl_vars['code']->value;?>

            <center><?php echo $_smarty_tpl->tpl_vars['codenumber']->value;?>
</center>
        </div>
    </div>

</body>

</html><?php }
}
