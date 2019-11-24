<?php
/* Smarty version 3.1.32, created on 2019-03-17 20:27:35
  from 'C:\xampp\htdocs\draganovlab401\view\edit_akr_component.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c8e9fa7c4d119_15510348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0331a471d4dad8f395af9d9376ceb23bd08f9f32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\draganovlab401\\view\\edit_akr_component.tpl',
      1 => 1552850853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8e9fa7c4d119_15510348 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
       
        <title>Редактиране на <?php echo $_smarty_tpl->tpl_vars['test']->value[0]['name'];?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head> 
    <body>
        <p>Редактиране на <?php echo $_smarty_tpl->tpl_vars['test']->value[0]['name'];?>
</p>
        <form action="../controller/edit_akr_component.php?id=<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['id'];?>
" method="POST">
        <table border="0" cellspacing="0">
            <tr>
                <td style="text-align: right; font-family: monospace"><b>Изследване:</b> 
                </td><td><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['name'];?>
"></td>
            </tr>
           
            <tr>
                <td style="text-align: right;font-family: monospace"><b>Мерна единица:</b> </td>
                <td><input type="text" name="unit" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['unit'];?>
"></td>
            </tr>
            <tr style="display: none;">
                <td style="text-align: right; font-family: monospace"><b>Код:</b> </td>
                <td><input type="text" name="code" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['code'];?>
"></td>
            </tr>
            <tr style="display: none;">
                <td style="text-align: right;font-family: monospace">
                    <b>Група:</b>
                </td>
                <td>
                    <select name="flag">
                            <option value="akr" selected="true">АКР</option>
                    </select>
                </td>
            </tr>
        </table><br>
            <center style="font-family: monospace">
                <b style="font-family: monospace">Референтен интервал</b><br>
              от:  <input type="text" name="up" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['up'];?>
" size="3"> | 
              до:  <input type="text" name="down" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['down'];?>
" size="3"><br><br>
              <input style="display: none;" type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['price'];?>
" size="3">
                <br> <br>
       <input type="submit" name="save" value="Запис">     </center>
            
            </form>
    </body><?php }
}
