<?php
/* Smarty version 3.1.32, created on 2019-05-20 17:08:15
  from 'C:\xampp\htdocs\draganovlab402\view\old_results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ce2c2df515eb9_03818492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d266760874f3acb3a5d87cdec9e301051916031' => 
    array (
      0 => 'C:\\xampp\\htdocs\\draganovlab402\\view\\old_results.tpl',
      1 => 1558364894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:top_menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ce2c2df515eb9_03818492 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--Datatables js-->

<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="../js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $('#journal').DataTable({
            "pageLength": 50,
            "order": [
                [3, "desc"]
            ],
            "aLengthMenu": [
                [10, 25, 50, 75, -1],
                [10, 25, 50, 75, "Всички"]
            ]
        });
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function validateForm() {
        var x = document.forms["myForm"]["fname"].value;
        if (x == "") {
            alert("Name must be filled out");
            return false;
        }
    }
<?php echo '</script'; ?>
>
<!--Datatables js-->

<link href="../css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
<style>
    input[type=text]:focus {
        background-color: #fff3bf;
        box-shadow: #33FF33;
    }
</style>

<div class="content">
    <?php $_smarty_tpl->_subTemplateRender("file:top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo '<script'; ?>
>
        // When the user clicks on div, open the popup
        function popup() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
        }
    <?php echo '</script'; ?>
>
    <link href="../css/scroll-table.css" rel="stylesheet">
    <div class="center">

        <?php echo '<script'; ?>
>
            document.addEventListener("touchstart", function() {}, true)
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            function insertText(elemID, text) {
                var elem = document.getElementById(elemID);
                elem.innerHTML += text;
            }

            function validate(evt) {
                var theEvent = evt || window.event;

                // Handle paste
                if (theEvent.type === 'paste') {
                    key = event.clipboardData.getData('text/plain');
                } else {
                    // Handle key press
                    var key = theEvent.keyCode || theEvent.which;
                    key = String.fromCharCode(key);
                }
                var regex = /[0-9]|\./;
                if (!regex.test(key)) {
                    theEvent.returnValue = false;
                    if (theEvent.preventDefault) theEvent.preventDefault();
                }
            }
        <?php echo '</script'; ?>
>

        <table border="0" cellspacing="0" cellpadding="0" width="100%" style=" border-collapse: collapse;">
            <tr>
                <td valign="top" width="30%">
                    <div class="newp" style="width: 350px">
                        <h3>Предишни резултати</h3>
                        <b>Пациент: </b><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['names'];?>

                        <div id="table-wrapper">
                            <div id="table-scroll">
                                <table id="journa122" class="lp" width="4350">
                                    <thead>

                                        <th style="display:none;">егн</th>
                                        <th style="display:none;">id</th>
                                        <th title="Статус">С</th>
                                        <th>ID</th>
                                        <th>ДАТА</th>

                                    </thead>
                                    <tbody>
                                        <?php $_smarty_tpl->_assignInScope('un', "1");?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>

                                        <tr style="background-color: white; cursor: pointer;" data-href="../controller/old_results.php?patient_id=<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
&idn=<?php echo $_smarty_tpl->tpl_vars['result']->value['idn'];?>
">
                                            <td>
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['over'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "on") {?>

                                                <b hidden="true">a</b> <img src="../images/over.PNG" width="20" height="20"> <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['over'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 !== "on") {?> <b hidden="true">b</b>
                                                <img src="../images/notover.PNG" width="20" height="20"> <?php }?>
                                            </td>
                                            <td style="display:none;"><?php echo $_smarty_tpl->tpl_vars['result']->value['idn'];?>
</td>
                                            <td style="display:none;"><?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
</td>

                                            <td style="color: black;" onclick="window.location='#';"><?php echo $_smarty_tpl->tpl_vars['result']->value['number'];?>
</td>
                                            <td style="color: black;" onclick="window.location='#';">
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['pay'];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == "on") {?>
                                                <b hidden="true">a</b> <img title="ПЛАТЕНО" src="../images/dollar-symbol.png" width="25" height="25"> <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['pay'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 !== "on") {?> <b hidden="true">b</b> <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['cito'];
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 == "on") {?><b style="color: red;">
                                                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['comment'];
$_prefixVariable6 = ob_get_clean();
if (strlen($_prefixVariable6) > 1) {?>   <div class="tooltip">
                                                        <?php echo $_smarty_tpl->tpl_vars['result']->value['date'];?>

                                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['comment'];
$_prefixVariable7 = ob_get_clean();
if (strlen($_prefixVariable7) > 1) {?>
                                                            <span class="tooltiptext"><?php echo $_smarty_tpl->tpl_vars['result']->value['comment'];?>
</span>
                                                        <?php }?>
                                                        </div><?php }?>
                                                    </b><?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['cito'];
$_prefixVariable8 = ob_get_clean();
if ($_prefixVariable8 !== "on") {?>
                                                <div class="tooltip">
                                                    <?php echo $_smarty_tpl->tpl_vars['result']->value['date'];
ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['comment'];
$_prefixVariable9 = ob_get_clean();
if (strlen($_prefixVariable9) > 1) {?><span class="tooltiptext"><?php echo $_smarty_tpl->tpl_vars['result']->value['comment'];?>
</span><?php }?>
                                                </div>
                                                <?php }?>
                                            </td>

                                        </tr>
                                        <b style="visibility: hidden;"> <?php echo $_smarty_tpl->tpl_vars['un']->value++;?>
</b> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                        </form>
                    </div>
                </td>
                <td valign="top" width="70%">

                    <div class="lp">
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['data2']->value[0]['patient_id'];
$_prefixVariable10 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['data2']->value[0]['patient_id'];
$_prefixVariable11 = ob_get_clean();
if (isset($_prefixVariable10) && $_prefixVariable11 > 0) {?>
                               <!-- НАЧАЛО НА МЕНЮ ПАЦИЕНТИ-->
                       <a style="text-decoration: none; color: white;" href="../controller/print.php?id=<?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['patient_id'];?>
" target="_blank">
                            <img src="../images/reqgreen.png" width="20" height="20" title="Принтирай заявка на <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['names'];?>
"> ЗАЯВКА
                        </a> |
                        <a style="text-decoration: none; color: white;" href="../controller/resultbyid.php?id=<?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['patient_id'];?>
" target="_blank">
                            <img src="../images/results.png" width="20" height="20" title="Принтирай резултати на <?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['names'];?>
"> РЕЗУЛТАТИ
                        </a> |
                        <a style="text-decoration: none; color: white;" href="../controller/onlineresults.php?id=<?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['patient_id'];?>
" target="_blank">
                            <img src="../images/online.png" width="20" height="20" title="Онлайн достъп на <?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['names'];?>
"> ОНЛАЙН ДОСТЪП
                        </a> |
                        <a style="text-decoration: none; color: white;" href="../controller/laboratory.php?delete=<?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['patient_id'];?>
" alt="Изтриване" onclick="return confirm('Сигурен ли сте, че искате да изтриете пациент: <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
?')" title="Изтрий <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
">
                            <img src="../images/delete.png" width="20" height="20" alt="Изтриване"> ИЗТРИВАНЕ
                        </a>
                        <!-- НАЧАЛО НА МЕНЮ ПАЦИЕНТИ-->
                        <table>
                            <tr>
                                <td>
                                    <form autocomplete="off" action="../controller/old_results.php?patient_id=<?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['patient_id'];?>
&idn=<?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['idn'];?>
" method="POST" id="form1">
                                        <table class="gridexample" border="1" style="border-collapse: collapse;" cellspacing="0">
                                            <th style="background-color: #1b6d85; color: white;">Показател</th>
                                            <th style="background-color: #1b6d85; color: white;">Резултат</th>
                                            <th style="background-color: #1b6d85; color: white;">Мерна единица</th>
                                            <th style="background-color: #1b6d85; color: white;">Норма</th>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data2']->value, 'result', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['result']->value) {
?>
                                            <tr style="background-color: #c6dcff;">
                                                <td><?php echo $_smarty_tpl->tpl_vars['data2']->value[$_smarty_tpl->tpl_vars['k']->value]['name'];?>
 </td>
                                                <td>
                                                    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['data2']->value[$_smarty_tpl->tpl_vars['k']->value]['test_code'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['data2']->value[$_smarty_tpl->tpl_vars['k']->value]['result'];?>
">
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['data2']->value[$_smarty_tpl->tpl_vars['k']->value]['unit'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['data2']->value[$_smarty_tpl->tpl_vars['k']->value]['up'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data2']->value[$_smarty_tpl->tpl_vars['k']->value]['down'];?>
</td>
                                            </tr>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </table>
                                </td>
                </td>
                <td valign="top">
                    <table>
                        <tr>
                            <td style="color: white;">ID </td>
                            <td>
                                <input required type="text" name="number" value="<?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['number'];?>
" size="1">
                            </td>
                        </tr>
                        <tr>
                            <td style="color: white;">Пациент:</td>
                            <td>
                                <input required type="text" name="patient" value="<?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['names'];?>
" size="26">
                            </td>
                        </tr>
                        <tr>
                            <td style="color: white;">ЕГН:</td>
                            <td>
                                <input type="text" name="idn" value="<?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['idn'];?>
" size="9">
                            </td>
                        </tr>
                        <tr>
                            <td style="color: white;"> Лекар:</td>
                            <td>
                               <input list="hosting-plan" value="<?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['doctor'];?>
" type="text" size="12" name='doctor'>
                            <datalist id="hosting-plan">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doctors']->value, 'doctor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['doctor']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['doctor'];?>
" alt="1212" />
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </datalist>
                                
                            </td>
                        </tr>
                        <tr>
                            <td style="color: white;">Дата:</td>
                            <td>
                                <input type="date" name="date" value="<?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['date'];?>
">
                            </td>
                        </tr>
                        <tr>
                            <td> <b style="color:red;">Спешно:</b></td>
                            <td> <?php ob_start();
echo $_smarty_tpl->tpl_vars['data2']->value[0]['cito'];
$_prefixVariable12 = ob_get_clean();
if ($_prefixVariable12 == "on") {?>
                                <input type="checkbox" name="cito" checked> <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['data2']->value[0]['cito'];
$_prefixVariable13 = ob_get_clean();
if ($_prefixVariable13 !== "on") {?>
                                <input type="checkbox" name="cito"> <?php }?><b style="color:white;">Статус:</b>
                                <select name="over">
                                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['data2']->value[0]['over'];
$_prefixVariable14 = ob_get_clean();
if ($_prefixVariable14 == "on") {?>
                                    <option value="on" selected>Приключен</option>
                                    <option value="off">Неприключен</option>
                                    <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['data2']->value[0]['over'];
$_prefixVariable15 = ob_get_clean();
if ($_prefixVariable15 !== "on") {?>
                                    <option value="on">Приключен</option>
                                    <option value="off" selected>Неприключен</option>
                                    <?php }?>
                                </select>
                            </td>
                        </tr>
                    </table>
                </td>
                </tr>
                </table>
                <p style="background-color: green; text-align: center;"><?php echo $_smarty_tpl->tpl_vars['ok']->value;?>
</p>
                <input type="submit" name="save" value="Запиши променитe">
                </form>
                <?php } else { ?>
                <p>
                    ⇦Изберете заявка от панела в ляво за да заредите информацията за нея.
                </p>
                <?php }?>
        </table>
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
        </div>
        <?php echo '<script'; ?>
>
            $('tr[data-href]').on("click", function() {
                document.location = $(this).data('href');
            });
        <?php echo '</script'; ?>
>

    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
