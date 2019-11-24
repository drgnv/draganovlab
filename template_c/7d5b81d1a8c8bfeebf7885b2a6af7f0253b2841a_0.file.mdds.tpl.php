<?php
/* Smarty version 3.1.32, created on 2019-05-15 18:28:16
  from 'C:\xampp\htdocs\draganovlab401\view\mdds.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cdc3e20baa7b5_76466949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d5b81d1a8c8bfeebf7885b2a6af7f0253b2841a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\draganovlab401\\view\\mdds.tpl',
      1 => 1557937695,
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
function content_5cdc3e20baa7b5_76466949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="../js/jquery-3.3.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<link href="../css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
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
                        <b>Търсене</b>
                        <center>
                            <table>

                                <form method="get" action="./mdds.php">
                                    <tr>
                                        <td style="color: white;" align="right">От:</td>
                                        <td>
                                            <input type="date" name="from" value="<?php echo $_smarty_tpl->tpl_vars['from_date']->value;?>
">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: white;" align="right">От:</td>
                                        <td>
                                            <input type="date" name="to" value="<?php echo $_smarty_tpl->tpl_vars['to_date']->value;?>
">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input type="submit" name="searchbydate" value="Търси...">
                                        </td>
                                    </tr>
                                </form>

                                <tr>
                                    <td style="color: white;">Баркод: </td>
                                    <td>
                                        <form method="GET" action="./mdds.php">
                                            <input type="hidden" name="from" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
">
                                            <input type="hidden" name="to" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
">
                                            <input type="hidden" name="searchbydate" value="Търси...">
                                            <input type="text" name="patient_id" size="16" autofocus onkeyup="submitT(this,this.form)">
                                        </form>
                                        <?php echo '<script'; ?>
 language="JavaScript" type="text/JavaScript">
                                            const sleep = (milliseconds) => { return new Promise(resolve => setTimeout(resolve, milliseconds)) } var x=1;//nr characters function submitT(t,f){ if(t.value.length>x){ sleep(200).then(() => { f.submit() }) } }
                                        <?php echo '</script'; ?>
>
                                    </td>
                                </tr>
                            </table>
                        </center>
                        <div id="table-wrapper">
                            <div id="table-scroll">
                                <p>Пациенти</p>
                                <table id="journa122" class="lp" width="4350">
                                    <thead>

                                        <th style="display:none;">егн</th>
                                        <th style="display:none;">id</th>
                                        <th title="Статус">С</th>
                                        <th>ID</th>
                                        <th>Пациент</th>

                                    </thead>
                                    <tbody>
                                        <?php $_smarty_tpl->_assignInScope('un', "1");?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dayList']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>
                                        <tr style="background-color: white; cursor: pointer;" data-href="../controller/mdds.php?patient_id=<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from_date']->value;?>
&to=<?php echo $_smarty_tpl->tpl_vars['to_date']->value;?>
&searchbydate=Търси...">
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
                                                        <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>

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
                                                    <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];
ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['comment'];
$_prefixVariable9 = ob_get_clean();
if (strlen($_prefixVariable9) > 1) {?><span class="tooltiptext"><?php echo $_smarty_tpl->tpl_vars['result']->value['comment'];?>
</span><?php }?>
                                                </div>
                                                <?php }?>
                                            </td>
                                        </tr>
                                        <b style="visibility: hidden; font-size: 0px;"> <?php echo $_smarty_tpl->tpl_vars['un']->value++;?>
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
                <!-- =========ДЕСЕН ПАНЕЛ========= -->
                <td valign="top" width="70%">
                    <div class="lp">
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];
$_prefixVariable10 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];
$_prefixVariable11 = ob_get_clean();
if (isset($_prefixVariable10) && $_prefixVariable11 > 0) {?>
                        <table border="0">
                            <tr>
                                <!--===========РЕДАКТИРАНЕ НА НАПРАВЛЕНИЕ НАЧАЛО=========-->
                                <td width="810px">
                                    <?php if ($_smarty_tpl->tpl_vars['mdd_is_set']->value == true) {?>
                                    <form action="./mdds.php?mdd_id=<?php echo $_smarty_tpl->tpl_vars['mddid']->value;?>
&patient_id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from_date']->value;?>
&to=<?php echo $_smarty_tpl->tpl_vars['to_date']->value;?>
&searchbydate=Търси..." method="post">

                                        <table border="0">
                                            <tr>
                                                <td align="right" colspan="4">
                                                    <i style="color: white;">ЕГН:</i>

                                                    <input name="idn" size="10" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['idn'];?>
">

                                                    <i style="color: white;">Имена:</i>

                                                    <input name="names" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['names'];?>
" type="text" size="50px">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <i style="color: white;">Издадено:</i>
                                                </td>
                                                <td>
                                                    <input name="out_date" value="<?php echo $_smarty_tpl->tpl_vars['mdd']->value[0]['out_date'];?>
" style="width: 120px" type="date">
                                                </td>
                                                <td align="right">
                                                    <i style="color: white;">Изпълнено:</i>
                                                </td>
                                                <td>
                                                    <input name="complete_date" value="<?php echo $_smarty_tpl->tpl_vars['mdd']->value[0]['complete_date'];?>
" style="width: 120px" type="date">
                                                </td>
                                                <td align="right" style="width: 75px">
                                                    <i style="color: white;">НМДД: </i>
                                                </td>
                                                <td>
                                                    <input name="nmdd" style="width: 97px" value="<?php echo $_smarty_tpl->tpl_vars['mdd']->value[0]['num_mdd'];?>
" type="text">
                                                </td>
                                                <td align="right">
                                                    <i style="color: white;"> АЛ №:</i>
                                                </td>
                                                <td>
                                                    <input name="alnum" style="width: 97px" value="<?php echo $_smarty_tpl->tpl_vars['mdd']->value[0]['al_num'];?>
" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right">
                                                    <i style="color: white;">Лекар:</i>
                                                </td>
                                                <td>
                                                    <select name="doctor_id">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doctors']->value, 'doctor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['doctor']->value) {
?> <?php if ($_smarty_tpl->tpl_vars['mdd']->value[0]['doctor_id'] == $_smarty_tpl->tpl_vars['doctor']->value['id']) {?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['id'];?>
" selected="true"><?php echo $_smarty_tpl->tpl_vars['doctor']->value['doctor'];?>
</option>
                                                        <?php } else { ?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['doctor']->value['doctor'];?>
</option>
                                                        <?php }?> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </select>

                                                </td>
                                                <td align="right">
                                                    <i style="color: white;">Код:</i>
                                                    <input name="code1" style="width: 40px" value="<?php echo $_smarty_tpl->tpl_vars['mdd']->value[0]['code1'];?>
" type="text">
                                                </td>

                                                <td align="right">
                                                    <i style="color: white;">УИН:</i>
                                                    <input name="uin" style="width: 100px" value="<?php echo $_smarty_tpl->tpl_vars['mdd']->value[0]['uin'];?>
" type="text">
                                                </td>

                                                <td align="right">
                                                    <i style="color: white;">РЗЦ Код:</i>
                                                </td>
                                                <td>
                                                    <input name="rzc_code" value="<?php echo $_smarty_tpl->tpl_vars['mdd']->value[0]['rzk'];?>
" style="width: 100px" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <i style="color: white;">Зам. / Нает:</i>
                                                    <input name="zam_naet" style="width: 100px" type="text">
                                                </td>
                                                <td align="right" colspan="2">
                                                    <i style="color: white;">УИН Зам. / Нает:</i>

                                                    <input name="uin_zam_naet" style="width: 100px" type="text">
                                                </td>
                                                <td align="right">
                                                    <i style="color: white;">НЗОК №:</i>
                                                </td>
                                                <td>
                                                    <input name="nzok" value="<?php echo $_smarty_tpl->tpl_vars['mdd']->value[0]['nzok_num'];?>
" style="width: 100px" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" colspan="3">
                                                    <i style="color: white;">Извършено от външна лаборатория:</i>
                                                </td>
                                                <td colspan="4">
                                                    <input name="uin_zam_naet" style="width: 400px" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right">
                                                    <i style="color: white;">МКБ 10:</i>
                                                </td>
                                                <td colspan="4">
                                                    <input name="mkb" style="width: 45px" value="<?php echo $_smarty_tpl->tpl_vars['mdd']->value[0]['mkb'];?>
" type="text">

                                                    <input name="mkbdesc" style="width: 390px" type="text" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right">
                                                    <i style="color: white;">МКБ 10 (2):</i>
                                                </td>
                                                <td colspan="4">
                                                    <input name="mkb2" value="<?php echo $_smarty_tpl->tpl_vars['mdd']->value[0]['mkb2'];?>
" style="width: 45px" type="text">
                                                    <input name="mkb2desc" style="width: 390px" type="text" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" style="color: white">Пакет:</td>
                                                <td>
                                                    <select name="paket">
                                                        <option value="1">Пакет клинична лаборатория</option>
                                                    </select>
                                                </td>
                                                <td align="right" style="color: white">Код:</td>
                                                <td colspan="3">
                                                    <input type="number" name="code2" value="<?php echo $_smarty_tpl->tpl_vars['mdd']->value[0]['code2'];?>
" style="width: 40px;">
                                                    <i style="color: white">Тип НМДД:</i>

                                                    <select name="mdd_type" style="width: 200px">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mdd_types']->value, 'mdd_type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mdd_type']->value) {
?> <?php if ($_smarty_tpl->tpl_vars['mdd']->value[0]['type_mdd_id'] == $_smarty_tpl->tpl_vars['mdd_type']->value['id']) {?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['mdd_type']->value['id'];?>
" selected="=true"><?php echo $_smarty_tpl->tpl_vars['mdd_type']->value['number'];?>
. <?php echo $_smarty_tpl->tpl_vars['mdd_type']->value['name'];?>
</option>
                                                        <?php } else { ?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['mdd_type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['mdd_type']->value['number'];?>
. <?php echo $_smarty_tpl->tpl_vars['mdd_type']->value['name'];?>
</option>

                                                        <?php }?> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5">
                                                    <i style="color: white;">Код по назначени изследвания:
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                            Такса Б.М.
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                            Обща цена</i>
                                                    <br>
                                                    <input type="text" name="code1t" value="<?php echo $_smarty_tpl->tpl_vars['mdd']->value[0]['test_code1'];?>
" style="width: 40px;">&nbsp;&nbsp;
                                                    <input type="text" name="code2t" value="<?php echo $_smarty_tpl->tpl_vars['mdd']->value[0]['test_code2'];?>
" style="width: 40px;">&nbsp;&nbsp;
                                                    <input type="text" name="code3t" value="<?php echo $_smarty_tpl->tpl_vars['mdd']->value[0]['test_code3'];?>
" style="width: 40px;">&nbsp;&nbsp;
                                                    <input type="text" name="code4t" value="<?php echo $_smarty_tpl->tpl_vars['mdd']->value[0]['test_code4'];?>
" style="width: 40px;">&nbsp;&nbsp;
                                                    <input type="text" name="code5t" value="<?php echo $_smarty_tpl->tpl_vars['mdd']->value[0]['test_code5'];?>
" style="width: 40px;">&nbsp;&nbsp;
                                                    <input type="text" name="code6t" value="<?php echo $_smarty_tpl->tpl_vars['mdd']->value[0]['test_code6'];?>
" style="width: 40px;">&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <input type="text" name="taxa_bm" style="width: 50px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <input type="text" name="total_price" style="width: 50px;">
                                                    <input type="hidden" name="mdd_id" value="<?php echo $_smarty_tpl->tpl_vars['mdd']->value[0]['id'];?>
">
                                             
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="submit" name="save" value="Запиши">
                                                </td>
                                            </tr>
                                        </table>

                                    </form>
                                    <?php }?>
                                </td>
                                <!--===========РЕДАКТИРАНЕ НА НАПРАВЛЕНИЕ КРАЙ=========-->
                                <!--===========СПИСЪК С НАПРАВЛЕНИЯ НАЧАЛО=========-->
                                <td >
                                    <div id="table-wrapper">
                                        <div id="table-scroll">
                                            <table id="journa122" class="lp" width="50">
                                                <thead>
                                                    <th>Дата</th>
                                                </thead>
                                                <tbody>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mdds']->value, 'mdd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mdd']->value) {
?>
                                                    <tr data-href="../controller/mdds.php?mdd_id=<?php echo $_smarty_tpl->tpl_vars['mdd']->value['id'];?>
&patient_id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from_date']->value;?>
&to=<?php echo $_smarty_tpl->tpl_vars['to_date']->value;?>
&searchbydate=Търси...">

                                                        <td>
                                                            <?php echo $_smarty_tpl->tpl_vars['mdd']->value['complete_date'];?>

                                                        </td>
                                                    </tr>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </td>
                                <!--===========СПИСЪК С НАПРАВЛЕНИЯ КРАЙ=========-->
                            </tr>
                        </table>
                        <?php } else { ?>
                        <p>
                            ⇦Изберете пациент от панел "Пациенти" в ляво за да заредите направленията за него.
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
