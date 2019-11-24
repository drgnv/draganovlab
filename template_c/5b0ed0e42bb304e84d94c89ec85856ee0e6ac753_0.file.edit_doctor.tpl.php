<?php
/* Smarty version 3.1.32, created on 2019-03-17 08:13:44
  from 'C:\xampp\htdocs\draganovlab401\view\edit_doctor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c8df3a87b9ce5_16747501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b0ed0e42bb304e84d94c89ec85856ee0e6ac753' => 
    array (
      0 => 'C:\\xampp\\htdocs\\draganovlab401\\view\\edit_doctor.tpl',
      1 => 1547479164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8df3a87b9ce5_16747501 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <title>Редактирай лекар</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body style="font-family: Monospace;">
<div>
    <h3>Редактирай лекар</h3>
    <form action="../controller/edit_doctor.php?editdoc=<?php echo $_smarty_tpl->tpl_vars['doc_info']->value[0]['id'];?>
" method="POST">
        <table border="1" cellspacing="0" style="border-collapse: collapse;">
            <tr>
                <td>Имена:</td>
                <td><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['doc_info']->value[0]['doctor'];?>
" required></td>
            </tr>
            <tr>
                <td>Телефон:</td>
                <td><input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['doc_info']->value[0]['phone'];?>
"></td>
            </tr>
            <tr>
                <td>Телефон 2:</td>
                <td><input type="text" name="phone2" value="<?php echo $_smarty_tpl->tpl_vars['doc_info']->value[0]['phone2'];?>
"></td>
            </tr>
            <tr>
                <td>УИН:</td>
                <td><input type="text" name="uin" value="<?php echo $_smarty_tpl->tpl_vars['doc_info']->value[0]['uin'];?>
"></td>
            </tr>
        </table>

        <p>
            <input type="submit" name="submit" value="Редактирай">
        </p>
    </form>

</div>
</body>
</html><?php }
}
