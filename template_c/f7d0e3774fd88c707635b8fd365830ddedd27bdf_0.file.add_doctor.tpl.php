<?php
/* Smarty version 3.1.32, created on 2019-03-17 08:13:49
  from 'C:\xampp\htdocs\draganovlab401\view\add_doctor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c8df3ad4650b0_72954741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7d0e3774fd88c707635b8fd365830ddedd27bdf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\draganovlab401\\view\\add_doctor.tpl',
      1 => 1547479137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8df3ad4650b0_72954741 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title>Добави лекар</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h3>Добави лекар</h3>
            <form action="../controller/add_doctor.php" method="POST">
                <table border="1" cellspacing="0">
                    <tr>
                        <td>Имена:</td>
                        <td><input type="text" name="name" required></td>
                    </tr>
                    <tr>
                        <td>Телефон:</td>
                        <td><input type="text" name="phone"></td>
                    </tr>
                    <tr>
                        <td>Телефон 2:</td>
                        <td><input type="text" name="phone2"></td>
                    </tr>
                    <tr>
                        <td>УИН:</td>
                        <td><input type="text" name="uin"></td>
                    </tr>
                </table>

                <p>
                    <input type="submit" value="Добави">
                </p>
            </form>
            
        </div>
    </body>
</html><?php }
}
