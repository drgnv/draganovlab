<?php
/* Smarty version 3.1.32, created on 2019-03-17 11:50:25
  from 'C:\xampp\htdocs\draganovlab401\view\add_cbc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c8e2671a44d01_31233494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3aaa0c056406b74ea53e4d133223a172a654e5b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\draganovlab401\\view\\add_cbc.tpl',
      1 => 1552819809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8e2671a44d01_31233494 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
       
        <title>Добавяне на показател към ПКК</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head> 
    <body style="text-align: center; font-family: monospace">
        <form action="../controller/add_cbc.php" method="POST">
            <h2>Добавяне на показател към ПКК</h2>
        <table border="0" cellspacing="0">
            <tr>
                <td style="text-align: right; font-family: monospace"><b>Показател:</b> </td><td><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['name'];?>
"></td>
            </tr>
          
            <tr>
                <td style="text-align: right;font-family: monospace"><b>Мерна единица:</b> </td><td><input type="text" name="unit" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['unit'];?>
"></td>
            </tr>
        </table><br>
            <center style="font-family: monospace">
                <b style="font-family: monospace">Референтен интервал</b><br>
              от:  <input type="text" name="up"  size="3"> | 
              до:  <input type="text" name="down" size="3"><br><br>
                  <br> <br>
       <input type="submit" name="save" value="Запис">     </center>
            
            </form>
    </body><?php }
}
