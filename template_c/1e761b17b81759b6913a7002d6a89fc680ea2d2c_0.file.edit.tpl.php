<?php
/* Smarty version 3.1.32, created on 2019-05-18 08:31:48
  from 'C:\xampp\htdocs\draganovlab402\view\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cdfa6d4679cd1_70876329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e761b17b81759b6913a7002d6a89fc680ea2d2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\draganovlab402\\view\\edit.tpl',
      1 => 1557674968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdfa6d4679cd1_70876329 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
    <?php echo '<script'; ?>
 src="../js/jquery-3.3.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <link href="../css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
    <link href="../css/tooltip.css" media="screen" rel="stylesheet" type="text/css">
    <?php echo '<script'; ?>
>
        $(document).ready(function() {
            $(".flip").click(function() {
                $(".panel").toggle();
            });
        });
        $(document).ready(function() {
            $(".flip2").click(function() {
                $(".paneldel").toggle();
            });
        });
    <?php echo '</script'; ?>
>
    <style type="text/css">
        input[type=text]:focus {
            background-color: #fff3bf;
            box-shadow: #33FF33;
        }
        
        div.panel {
            height: 180px;
            display: none;
        }
        
        div.paneldel {
            height: 180px;
            display: none;
        }
        
        p.flip {
            cursor: pointer;
        }
        
        p.flip2 {
            cursor: pointer;
        }
    </style>

    <title>DraganovLab</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</head>

<body>
    <center>
        <form autocomplete="off" action="../controller/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
" method="POST" id="form1">
            №
            <input required type="number" name="number" style="width: 40px;" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['number'];?>
"> | Пациент:
            <input required type="text" name="patient" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['names'];?>
" size="26"> | ЕГН:
            <input type="text" name="idn" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['idn'];?>
" size="9">
            <br>
            <br> Лекар:
            <input list="hosting-plan" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['doctor'];?>
" size="14" name='doctor'>
            <datalist id="hosting-plan">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doctors']->value, 'doctor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['doctor']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['doctor'];?>
" alt="1212" /> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </datalist>
            <?php echo '<script'; ?>
>
                // Create a new option element.
                var optionNode = document.createElement("option");

                // Set the value
                optionNode.value = "huge";

                // create a text node and append it to the option element
                optionNode.appendChild(document.createTextNode("$50 USD"));

                // Add the optionNode to the datalist
                document.getElementById("hosting-plan").appendChild(optionNode);
            <?php echo '</script'; ?>
>
            | Дата:
            <input type="date" name="date" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['date'];?>
"> |
            <b style="color:red;">Спешно:</b> <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0]['cito'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "on") {?>
            <input type="checkbox" name="cito" checked> <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0]['cito'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 !== "on") {?>
            <input type="checkbox" name="cito"> <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0]['pay'];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == "on") {?> Платено:
            <input type="checkbox" name="pay" checked> <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0]['pay'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 !== "on") {?> Платено:
            <input type="checkbox" name="pay" checked> <?php }?>

            <hr>

            <a href="../controller/old_results.php?idn=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['idn'];?>
" target="_blank" style="text-decoration:none; color: black;">
                <img src="../images/archive.png" width="20" height="20"> Предишни резултати</a> | Статус:
            <select name="over">
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0]['over'];
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 == "on") {?>
                <option value="on" selected>Приключен</option>
                <option value="off">Неприключен</option>
                <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0]['over'];
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable6 !== "on") {?>
                <option value="on">Приключен</option>
                <option value="off" selected>Неприключен</option>
                <?php }?>
            </select>
            <br>
            <br>

            <table class="gridexample" border="1" style="border-collapse: collapse;" cellspacing="0">
                <th style="background-color: #29559b; color: white;">Показател</th>
                <th style="background-color: #29559b; color: white;">Резултат</th>
                <th style="background-color: #29559b; color: white;">Мерна единица</th>
                <th style="background-color: #29559b; color: white;">Норма</th>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'result', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['result']->value) {
?>
                <tr style="background-color: #c6dcff;">
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['k']->value]['name'];?>
 </td>
                    <td>
                        <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['k']->value]['test_code'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['k']->value]['result'];?>
">
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['k']->value]['unit'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['k']->value]['up'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['k']->value]['down'];?>
</td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['ldl']->value;
$_prefixVariable7 = ob_get_clean();
if (isset($_prefixVariable7)) {
echo $_smarty_tpl->tpl_vars['ldl']->value;
}?>
            <a style="text-decoration: none;" href="../controller/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
&ag=1">Изчисли Анионна дупка</a> |
            <a style="text-decoration: none;" href="../controller/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
&ldl=1">Изчисли LDL</a>
            <br>
            <font color="green"><?php echo $_smarty_tpl->tpl_vars['ok']->value;?>
</font>
            <br>

            <?php echo '<script'; ?>
 src="../js/jquery.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="../js/jquery.formnavigation.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
>
                $(document).ready(function() {
                    $('.gridexample').formNavigation();
                });
            <?php echo '</script'; ?>
>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
">
            <br>

            <table border="1" style="border-collapse: collapse;" cellspacing="0">
                <th style="background-color: #ffbd28;">
                    <div class="tooltip">Коментар
                        <span class="tooltiptext">Коментрът на резултатите се принтира с резултатите на пациента</span>
                    </div>
                </th>
                <th style="background-color: #ffbd28;">
                    <div class="tooltip">Бележки
                        <span class="tooltiptext">Бележките са видими само в полето "Болежки" и не достигат до пациентите. Подходящи
  за работни записки.</span>
                    </div>
                </th>
                <tr>
                    <td>
                        <textarea style="background-color: #ffedc4;" name="comment"><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['comment'];?>
</textarea>
                    </td>
                    <td>
                        <textarea style="background-color: #ffedc4;" name="note"><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['note'];?>
</textarea>
                    </td>
                </tr>
            </table>
            <br>
            <input type="submit" name="save" value="Запис">
        </form>

        <table>

            <tr>
                <td>
                    <p class="flip"><img src="../images/add.png" width="22" height="22"> Добави изследвания</p>
                    <div class="panel">

                        <form action="../controller/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
" method="POST">
                            <select multiple="multiple" id="my-select" name="my-select[]">
                                <option value="01.01" style="text-align: left">ПКК</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_tests']->value, 'test', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['test']->value) {
?>
                                <option value='<?php echo $_smarty_tpl->tpl_vars['test']->value['code'];?>
' style="text-align: left"><?php echo $_smarty_tpl->tpl_vars['test']->value['name'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <option value="01.09" style="text-align: left">Урина-Седимент</option>
                                <option value="01.08" style="text-align: left">Урина-Химично</option>
                                <option value="66.00" style="text-align: left">АКР</option>
                                <option value="01.40" style="text-align: left">Левкограма</option>
                            </select>
                            <input type="submit" name="add" value="Добави избраните изследвания">
                        </form>
                        <?php echo '<script'; ?>
 src="../js/jquery.multi-select.js" type="text/javascript"><?php echo '</script'; ?>
>
                        <?php echo '<script'; ?>
>
                            $('#my-select').multiSelect()
                        <?php echo '</script'; ?>
>

                    </div>

                </td>
                <td>
                    <p class="flip2"><img src="../images/delete.png" width="22" height="22"> Премахни изследвания</p>
                    <div class="paneldel">

                        <form action="../controller/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
" method="POST">
                            <select multiple="multiple" id="my-selectdel" name="my-selectdel[]">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'test', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['test']->value) {
?>
                                <option value='<?php echo $_smarty_tpl->tpl_vars['test']->value['code'];?>
' style="text-align: left"><?php echo $_smarty_tpl->tpl_vars['test']->value['name'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                            <input onclick="return confirm('Сигурни ли сте, че искате да премахнете избраните изследвания?')" type="submit" name="remove" value="Премахни избраните изследвания">
                        </form>
                        <?php echo '<script'; ?>
 src="../js/jquery.multi-select.js" type="text/javascript"><?php echo '</script'; ?>
>
                        <?php echo '<script'; ?>
>
                            $('#my-selectdel').multiSelect()
                        <?php echo '</script'; ?>
>

                    </div>
                </td>
            </tr>
        </table>

    </center>

</body>

</html><?php }
}
