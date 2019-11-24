<?php
/* Smarty version 3.1.32, created on 2019-05-01 17:54:37
  from 'C:\xampp\htdocs\draganovlab401\view\edit_test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cc9c13da69006_71205538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5b950d595d0b2ac52f7d82a69aef2879b9df2f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\draganovlab401\\view\\edit_test.tpl',
      1 => 1556726065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc9c13da69006_71205538 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
       
        <title>Редактиране на <?php echo $_smarty_tpl->tpl_vars['test']->value[0]['name'];?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head> 
    <body><form action="../controller/edit_test.php?id=<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['id'];?>
" method="POST">
        <table border="0" cellspacing="0">
            <tr>
                <td style="text-align: right; font-family: monospace"><b>Изследване:</b> </td><td><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['name'];?>
"></td>
            </tr>
            <tr>
                <td style="text-align: right;font-family: monospace"><b>Бутон:</b> </td><td><input type="text" name="button" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['button'];?>
"></td>
            </tr>
            <tr>
                <td style="text-align: right;font-family: monospace"><b>Мерна единица:</b> </td><td><input type="text" name="unit" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['unit'];?>
"></td>
            </tr>
            <tr>
                <td style="text-align: right;font-family: monospace"><b>Код:</b> </td><td><input type="text" name="code" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['code'];?>
"></td>
            </tr>
            <tr>
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
                        <?php }?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['test']->value[0]['flag'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 'urine') {?>
                            <option value="urine">Урина</option>
                            <?php } else { ?>
                                <option value="urine">Урина</option>
                        <?php }?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['test']->value[0]['flag'];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 'hormon') {?>
                            <option value="hormon" selected="true">Хормон</option>
                            <?php } else { ?>
                                <option value="hormon">Хормон</option>
                        <?php }?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['test']->value[0]['flag'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == 'cbc') {?>
                            <option value="cbc" selected="true">ПКК</option>
                            <?php } else { ?>
                                <option value="cbc">ПКК</option>
                        <?php }?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['test']->value[0]['flag'];
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 == 'coag') {?>
                            <option value="coag" selected="true">Коагулация</option>
                        <?php } else { ?>
                            <option value="coag">Коагулация</option>
                        <?php }?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['test']->value[0]['flag'];
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable6 == 'kzp') {?>

                            <option value="kzp" selected="true">Кръвно-захарен профил</option>
                        <?php } else { ?>
                            <option value="kzp">Кръвно-захарен профил</option>
                        <?php }?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['test']->value[0]['flag'];
$_prefixVariable7 = ob_get_clean();
if ($_prefixVariable7 == 'mor') {?>
                            <option value="mor"  selected="true">Er.Морфология</option>
                        <?php } else { ?>
                            <option value="mor">Er.Морфология</option>
                        <?php }?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['test']->value[0]['flag'];
$_prefixVariable8 = ob_get_clean();
if ($_prefixVariable8 == 's') {?>
                            <option value="s" selected="true">Седимент(урина)</option>
                        <?php } else { ?>
                            <option value="s">Седимент(урина)</option>
                        <?php }?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['test']->value[0]['flag'];
$_prefixVariable9 = ob_get_clean();
if ($_prefixVariable9 == 'ele') {?>
                            <option value="ele" selected="true">Електролити</option>
                        <?php } else { ?>
                            <option value="ele">Електролити</option>
                        <?php }?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['test']->value[0]['flag'];
$_prefixVariable10 = ob_get_clean();
if ($_prefixVariable10 == 'dif') {?>
                            <option value="dif" selected="true">Левкограма</option>
                        <?php } else { ?>
                            <option value="dif">Левкограма</option>
                        <?php }?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['test']->value[0]['flag'];
$_prefixVariable11 = ob_get_clean();
if ($_prefixVariable11 == 'ourine') {?>
                            <option value="ourine">Микроалбуминурия</option>
                        <?php } else { ?>
                            <option value="ourine">Микроалбуминурия</option>
                        <?php }?>
                        
                        
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
                Цена: <input type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['test']->value[0]['price'];?>
" size="3"> BGN
                <br> <br>
       <input type="submit" name="save" value="Запис">     </center>
            
            </form>
    </body><?php }
}
