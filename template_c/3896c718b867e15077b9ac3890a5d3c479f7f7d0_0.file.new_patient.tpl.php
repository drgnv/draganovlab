<?php
/* Smarty version 3.1.32, created on 2019-05-12 21:57:34
  from 'C:\xampp\htdocs\draganovlab401\view\new_patient.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cd87aae3a32a1_28097655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3896c718b867e15077b9ac3890a5d3c479f7f7d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\draganovlab401\\view\\new_patient.tpl',
      1 => 1557691053,
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
function content_5cd87aae3a32a1_28097655 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link href="../css/tooltip.css" media="screen" rel="stylesheet" type="text/css">
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
                ],
                "scrollY": "375px",
                "scrollX": "100px",
                "scrollCollapse": true,
                "paging": false,

            }

        );
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function validateForm() {
        var x = document.forms["myForm"]["fname"].value;
        if (x == "") {
            alert("Моля, попълнете името на пациента");
            return false;
        }
    }
<?php echo '</script'; ?>
>
<!--Datatables js-->

<link href="../css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
<style>
    #parent #popup {
        display: none;
    }
    
    #parent:hover #popup {
        display: block;
    }
    
    #submit-icon {
        background-image: url("../images/plus.jpg");
        /* Change url to wanted image */
        background-size: cover;
        border: none;
        width: 42px;
        height: 42px;
        cursor: pointer;
        color: transparent;
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
    <div class="center">

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
        <table border="0" cellspacing="0" cellpadding="3" width="100%" style=" border-collapse: collapse;">
            <tr>
                <td valign="top">
                    <form autocomplete="off" method="POST" action='new_patient.php' name='newp'>
                        <div class="newp">
                            ID:
                            <input required type="number" name="num" style="width: 60px;" value="<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
"> Платено:
                            <input type="checkbox" name="pay"> | <b style="color: red;">Спешно:</b>
                            <input type="checkbox" name="cito">
                            </br>
                            </br>

                           
                            <input placeholder="Пациент" required type="text" name="names" style="width: 150px;">
                            <input type="text" name='idn' size="7" placeholder="ЕГН"> 
                            <input list="hosting-plan" placeholder="Лекар" type="text" size="14" name='doctor'>
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
                            <br>
                            <br> <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['panel']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                            <?php echo '<script'; ?>
 src="../js/ui-choose.js"><?php echo '</script'; ?>
>
                            <?php echo '<script'; ?>
>
                                $('.ui-choose').ui_choose();
                            <?php echo '</script'; ?>
>

                            </br>
                            </br>
                            Дата:
                            <input required type="date" name="date" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
">
                            </br>
                            </br>

                            <input type="submit" name="record" value="+ Добавяне"> |
                            <a href="../controller/print.php?id=<?php echo $_smarty_tpl->tpl_vars['patient_id']->value;?>
" target="_blank" style="text-decoration: none;"><img src="../images/print.png" width="24" height="24"><b style="font-size: 13px; color: white;">Принтирай заявка</b></a>

                    </form>
                    </div>
                </td>
                <td valign="top">
                    <div class="lp">

                        <table border="0" id="journal" class="display" width="790">
                            <thead>
                                <tr width="3" style="background-color: #122b40; color: white; ">
                                    <th style="display:none;">егн</th>
                                    <th style="display:none;">id</th>
                                    <th title="Статус" style="font-size: 13px;;">С</th>
                                    <th style="font-size: 13px;">ID</th>
                                    <th style="font-size: 13px; ">Пациент</th>
                                    <th style="font-size: 13px;">Лекар</th>
                                    <th style="font-size: 13px;;">Действия</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $_smarty_tpl->_assignInScope('un', "1");?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dayList']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>

                                <tr height="0">
                                    <td style="display:none;"><?php echo $_smarty_tpl->tpl_vars['result']->value['idn'];?>
</td>
                                    <td style="display:none;"><?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
</td>
                                    <td>
                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['over'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "on") {?>

                                        <b hidden="true">a</b> <img src="../images/over.PNG" width="25" height="25"> <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['over'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 !== "on") {?> <b hidden="true">b</b>
                                        <img src="../images/notover.PNG" width="25" height="25"> <?php }?>
                                    </td>
                                    <td style="color: black; font-size: 13px;"><?php echo $_smarty_tpl->tpl_vars['result']->value['number'];?>
</td>
                                    <td style="color: black; font-size: 13px;">
                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['pay'];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == "on") {?>
                                        <b hidden="true">a</b> <img title="ПЛАТЕНО" src="../images/dollar-symbol.png" width="20" height="20"> <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['pay'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 !== "on") {?> <b hidden="true">b</b> <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['cito'];
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 == "on") {?><b style="color: red;">
                                <div class="tooltip">
                                    <a style="text-decoration: none; color: #2e6da4; font-size: 13px;" href="../controller/edit.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['id'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
"
                                       onclick="window.open('../controller/edit.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['id'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
',
                                               'newwindow',
                                               'width=690,height=650');
                                               return false;"
                                       alt="Редактирай резултати" >
                                    <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
</a>
                                 <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['comment'];
$_prefixVariable8 = ob_get_clean();
if (strlen($_prefixVariable8) > 1) {?>

                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['comment'];
$_prefixVariable9 = ob_get_clean();
if (strlen($_prefixVariable9) > 1) {?>
                                            <span class="tooltiptext"><?php echo $_smarty_tpl->tpl_vars['result']->value['comment'];?>
</span>
                                            <?php }?>
                                    <?php }?></div>
                                </b><?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['cito'];
$_prefixVariable10 = ob_get_clean();
if ($_prefixVariable10 !== "on") {?>
                                        <div class="tooltip">
                                            <a style="text-decoration: none; color: #2e6da4; font-size: 13px;" href="../controller/edit.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['id'];
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
" onclick="window.open('../controller/edit.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['id'];
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
',
                                            'newwindow',
                                            'width=690,height=650');
                                            return false;" alt="Редактирай резултати">
                                        <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
</a><?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['comment'];
$_prefixVariable13 = ob_get_clean();
if (strlen($_prefixVariable13) > 1) {?><span class="tooltiptext"><?php echo $_smarty_tpl->tpl_vars['result']->value['comment'];?>
</span><?php }?>
                                        </div>
                                        <?php }?>
                                    </td>
                                    <td style="color: black; font-size: 14px;"><?php echo $_smarty_tpl->tpl_vars['result']->value['doctor'];?>
</td>
                                    <td align="center">
                                        <a style="text-decoration: none;" href="../controller/print.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['id'];
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
" target="_blank">
                                            <img src="../images/request.png" width="20" height="20" title="Принтирай заявка на <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
">
                                        </a>
                                        <a style="text-decoration: none;" href="../controller/resultbyid.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['id'];
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
" target="_blank">
                                            <img src="../images/results.png" width="20" height="20" title="Принтирай резултати на <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
">
                                        </a>

                                        <a style="text-decoration: none;" href="../controller/onlineresults.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['id'];
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
" target="_blank">
                                            <img src="../images/online.png" width="20" height="20" title="Онлайн достъп на <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
">
                                        </a>
                                        <a style="text-decoration: none;" href="../controller/new_patient.php?delete=<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['id'];
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
" alt="Изтриване" onclick="return confirm('Сигурен ли сте, че искате да изтриете пациент: <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
?')" title="Изтрий <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
">
                                            <img src="../images/delete.png" width="20" height="20" alt="Изтриване">
                                        </a>
                                    </td>
                                </tr>
                                <b style="visibility: hidden;"> <?php echo $_smarty_tpl->tpl_vars['un']->value++;?>
</b> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </tbody>

                        </table>
                        </form>

                </td>
            </tr>
        </table>
        </div>

    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
