<?php
/* Smarty version 3.1.32, created on 2019-12-05 20:23:57
  from '/var/www/html/dlab/view/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5de94b3dd7a1e9_20099225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caeec302960295ff4a5d286627d6d813346a69f0' => 
    array (
      0 => '/var/www/html/dlab/view/edit.tpl',
      1 => 1575570235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de94b3dd7a1e9_20099225 (Smarty_Internal_Template $_smarty_tpl) {
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

<body style="background-color: #d3e7f5">
    <center>
        <table border="0"><tr><td style="vertical-align:top;">
        <form autocomplete="off" action="../controller/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
" method="POST" id="form1">
            №
            <input required type="number" name="number" style="width: 40px;" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['number'];?>
"> | <?php echo $_smarty_tpl->tpl_vars['lang']->value['patient'];?>
:
            <input required type="text" name="patient" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['names'];?>
" size="26"> <br><hr> <?php echo $_smarty_tpl->tpl_vars['lang']->value['idn'];?>
:
            <input type="text" name="idn" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['idn'];?>
" size="9">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['doctor'];?>
:
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
            <br><hr> <?php echo $_smarty_tpl->tpl_vars['lang']->value['date'];?>
:
            <input type="date" name="date" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['date'];?>
">
            <b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cito'];?>
:</b> <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0]['cito'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "on") {?>
            <input type="checkbox" name="cito" checked> <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0]['cito'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 !== "on") {?>
            <input type="checkbox" name="cito"> <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['paid'];?>
:
            <input type="checkbox" name="pay" <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0]['pay'];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == "on") {?>checked<?php }?>>
<br><br>

            <a href="../controller/old_results.php?idn=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['idn'];?>
" target="_blank" style="text-decoration:none; color: black;">
                <img src="../images/archive.png" width="20" height="20"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['old_results'];?>
</a> | <?php echo $_smarty_tpl->tpl_vars['lang']->value['status'];?>
:
            <select name="over">
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0]['over'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == "on") {?>
                <option value="on" selected><?php echo $_smarty_tpl->tpl_vars['lang']->value['over'];?>
</option>
                <option value="off"><?php echo $_smarty_tpl->tpl_vars['lang']->value['not_over'];?>
</option>
                <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0]['over'];
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 !== "on") {?>
                <option value="on"><?php echo $_smarty_tpl->tpl_vars['lang']->value['over'];?>
</option>
                <option value="off" selected><?php echo $_smarty_tpl->tpl_vars['lang']->value['not_over'];?>
</option>
                <?php }?>
            </select>
<br><br>
            <table border="1" style="border-collapse: collapse;" cellspacing="0">
                <th style="background-color: #ffbd28;">
                    <div class="tooltip"><?php echo $_smarty_tpl->tpl_vars['lang']->value['comment'];?>

                        <span class="tooltiptext">Коментрът на резултатите се принтира с резултатите на пациента</span>
                    </div>
                </th>
                <th style="background-color: #ffbd28;">
                    <div class="tooltip"><?php echo $_smarty_tpl->tpl_vars['lang']->value['note'];?>

                        <span class="tooltiptext">Бележките са видими само в полето "Болежки" и не достигат до пациентите. Подходящи
  за работни записки.</span>
                    </div>
                </th>
                <tr>
                    <td>
                        <textarea style="background-color: #ffedc4; resize: none;" name="comment"><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['comment'];?>
</textarea>
                    </td>
                    <td>
                        <textarea style="background-color: #ffedc4; resize: none;" name="note"><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['note'];?>
</textarea>
                    </td>
                </tr>
            </table>
            <?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>

                <br>
            <b style="background-color: #3c763d; color: white; padding: 5px;"><?php echo $_smarty_tpl->tpl_vars['ok']->value;?>
</b>

                <br>
            <?php }?><br>
            <input type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['save_btn'];?>
">



                </td><td>
<div style="overflow-y: scroll; height:500px;">
            <table class="gridexample"  border="1" style="border-collapse: collapse;" cellspacing="0">
                <th style="background-color: #29559b; color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['test'];?>
</th>
                <th style="background-color: #29559b; color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['result'];?>
</th>
                <th style="background-color: #29559b; color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['unit'];?>
</th>
                <th style="background-color: #29559b; color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['referent_norms'];?>
</th>
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
            </table></div>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['ldl']->value;
$_prefixVariable6 = ob_get_clean();
if (isset($_prefixVariable6)) {
echo $_smarty_tpl->tpl_vars['ldl']->value;
}?>
            <a style="text-decoration: none;" href="../controller/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
&ag=1">Изчисли Анионна дупка</a> |
            <a style="text-decoration: none;" href="../controller/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
&ldl=1">Изчисли LDL</a>
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
        </form>

        <table>

            <tr>
                <td>
                    <p class="flip"><img src="../images/add.png" width="22" height="22"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['add_tests'];?>
</p>
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
                    <p class="flip2"><img src="../images/delete.png" width="22" height="22"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['remove_tests'];?>
</p>
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
                </td></tr></table>
    </center>

</body>

</html><?php }
}
