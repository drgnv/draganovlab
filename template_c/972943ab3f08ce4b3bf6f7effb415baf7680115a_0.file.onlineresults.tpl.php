<?php
/* Smarty version 3.1.32, created on 2019-05-23 06:37:52
  from 'C:\xampp\htdocs\dlab\view\onlineresults.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ce623a012fbc2_63467441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '972943ab3f08ce4b3bf6f7effb415baf7680115a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dlab\\view\\onlineresults.tpl',
      1 => 1557675517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce623a012fbc2_63467441 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <center>
        <h2>МБАЛ "СВ.Николай Чудотворец" - Лом</h2>
        <p>Клинична лаборатория - ДКЦ 1</p>
        <table border="1" cellspacing="0">
            <tr>
                <td><b>Пациент: </b></td>
                <td><?php echo $_smarty_tpl->tpl_vars['datas']->value[0]['names'];?>
</td>
            </tr>
            <tr>
                <td><b>Потребителско име: </b></td>
                <td><?php echo $_smarty_tpl->tpl_vars['datas']->value[0]['username'];?>
</td>
            </tr>
            <tr>
                <td><b>Парола: </b></td>
                <td><?php echo $_smarty_tpl->tpl_vars['datas']->value[0]['password'];?>
</td>
            </tr>
        </table>
        <b>При въвеждането на потребителското име и паролата имайте предвид ГОЛЕМИ и малки букви!</b>
        <br>
        <table border="1" cellspacing="0">
            <tr>
                <td>
                    Внимание : Лабораторните резултати не са диагноза, а основание за такава. Приемането на каквито и да било лекарствени средства без лекарско предписание, може да бъде опасно за Вашето здраве. Моля, обръщайте се за тълкуване на резултатите само към квалифицирани лекари. МБАЛ "Св. Николай Чудотворец" препоръчва винаги да показвате резултатите си на лекуващия си лекар!
                </td>
            </tr>
        </table>
    </center>
</body>

</html><?php }
}
