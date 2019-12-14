<?php
/* Smarty version 3.1.32, created on 2019-12-13 21:30:34
  from '/var/www/html/dlab/view/add_test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df3e6da31acc0_02973832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c12176c5547f547faf79897113211836e2fd242' => 
    array (
      0 => '/var/www/html/dlab/view/add_test.tpl',
      1 => 1575901431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df3e6da31acc0_02973832 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>

    <title>Добавяне на показател</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body style="text-align: center; font-family: monospace; background-color: #34495E;color:white;">
    <form action="../controller/add_test.php" method="POST">
        <h2>Добавяне на показател</h2>
        <table border="0" cellspacing="0">
            <tr>
                <td style="text-align: right; font-family: monospace"><b>Изследване:</b> </td>
                <td>
                    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['name'];?>
" required>
                </td>
            </tr>
            <tr>
                <td style="text-align: right;font-family: monospace"><b>Бутон:</b> </td>
                <td>
                    <input type="text" name="button" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['button'];?>
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
            <tr>
                <td style="text-align: right;font-family: monospace"><b>Код:</b> </td>
                <td>
                    <input type="text" name="code" value="">
                </td>
            </tr>
            <tr>
                <td style="text-align: right;font-family: monospace">
                    <b>Група:</b>
                </td>
                <td>

                    <select name="flag">
                        <option value="blood">Кръв</option>
                        <option value="urine">Урина</option>
                        <option value="hormon">Хормон</option>
                        <option value="coag">Коагулация</option>
                        <option value="kzp">Кръвно-захарен профил</option>
                        <option value="mor">Er.Морфология</option>
                        <option value="s">Седимент(урина)</option>
                        <option value="ele">Електролити</option>
                        <option value="dif">Левкограма</option>
                        <option value="ourine">Микроалбуминурия</option>
                    </select>

                </td>
            </tr>
        </table>
        <br>
        <center style="font-family: monospace">
            <b style="font-family: monospace">Референтен интервал</b>
            <br> от:
            <input type="text" name="up" size="3"> | до:
            <input type="text" name="down" size="3">
            <br>
            <br> Цена:
            <input type="text" name="price" size="3"> BGN
            <br>
            <br>
            <input type="submit" name="save" value="Запис"> </center>

    </form>
</body>

</html><?php }
}
