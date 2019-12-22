<?php
/* Smarty version 3.1.32, created on 2019-12-22 20:36:00
  from '/var/www/html/dlab/view/laboratory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dffb79021dae6_25513438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad143db3e341bcbd5b8ca528e1a2ec0a9cfcc3cc' => 
    array (
      0 => '/var/www/html/dlab/view/laboratory.tpl',
      1 => 1577039757,
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
function content_5dffb79021dae6_25513438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="../js/jquery-3.3.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<link href="../css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
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
        $('#journal122').DataTable({

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


    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #34495E;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
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
                        <b><?php echo $_smarty_tpl->tpl_vars['lang']->value['search'];?>
</b>
                        <center>
                            <table>

                                <form method="get" action="./laboratory.php">
                                    <tr>
                                        <td style="color: white;" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['from'];?>
:</td>
                                        <td>
                                            <input type="date" name="from" value="<?php echo $_smarty_tpl->tpl_vars['from_date']->value;?>
">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: white;" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['to'];?>
:</td>
                                        <td>
                                            <input type="date" name="to" value="<?php echo $_smarty_tpl->tpl_vars['to_date']->value;?>
">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: white;" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['status'];?>
:</td>
                                        <td>
                                            <select name="status">
                                                <?php if ($_smarty_tpl->tpl_vars['status']->value == "all" || !isset($_smarty_tpl->tpl_vars['status']->value)) {?>
                                                    <option value="all" selected><?php echo $_smarty_tpl->tpl_vars['lang']->value['all'];?>
</option>
                                                    <option value="over"><?php echo $_smarty_tpl->tpl_vars['lang']->value['over'];?>
</option>
                                                    <option value="notover"><?php echo $_smarty_tpl->tpl_vars['lang']->value['not_over'];?>
</option>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['status']->value == "over") {?>
                                                    <option value="all"><?php echo $_smarty_tpl->tpl_vars['lang']->value['all'];?>
</option>
                                                    <option value="over" selected><?php echo $_smarty_tpl->tpl_vars['lang']->value['over'];?>
</option>
                                                    <option value="notover"><?php echo $_smarty_tpl->tpl_vars['lang']->value['not_over'];?>
</option>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['status']->value == "notover") {?>
                                                    <option value="all"><?php echo $_smarty_tpl->tpl_vars['lang']->value['all'];?>
</option>
                                                    <option value="over"><?php echo $_smarty_tpl->tpl_vars['lang']->value['over'];?>
</option>
                                                    <option value="notover" selected><?php echo $_smarty_tpl->tpl_vars['lang']->value['not_over'];?>
</option>
                                                <?php }?>

                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input type="submit" name="searchbydate" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['search'];?>
...">
                                        </td>
                                    </tr>
                                </form>
                                <tr>
                                    <td style="color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['barcode'];?>
: </td>
                                    <td>
                                        <form method="GET" action="./laboratory.php">
                                            <input type="hidden" name="from" value="<?php echo $_smarty_tpl->tpl_vars['from_date']->value;?>
">
                                            <input type="hidden" name="to" value="<?php echo $_smarty_tpl->tpl_vars['to_date']->value;?>
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
                                <table id="journal122" class="display" width="4350">
                                    <thead style="font-size: 14px">

                                        <th style="display:none;">егн</th>
                                        <th style="display:none;">id</th>
                                        <th title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['status'];?>
">С</th>
                                        <th title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['type'];?>
">T</th>
                                        <th>ID</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['patient'];?>
 <img style="cursor: pointer" src="../images/ref.ico" width="20px" height="20px" align="right" onClick="window.location.reload();"><br>
                                        </th>

                                    </thead>
                                    <tbody style="padding: 0px;margin: 0px">
                                        <?php $_smarty_tpl->_assignInScope('un', "1");?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dayList']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>

                                        <tr  style="background-color: green; cursor: pointer; font-size: 13px;" data-href="../controller/laboratory.php?patient_id=<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from_date']->value;?>
&to=<?php echo $_smarty_tpl->tpl_vars['to_date']->value;?>
&status=<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
&searchbydate=Търси...">
                                            <td>
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['over'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "on") {?>

                                                <b hidden="true">a</b> <img src="../images/over.PNG" width="20" height="20"> <?php }?>
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['over'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 !== "on") {?> <b hidden="true">b</b>
                                                <img src="../images/notover.PNG" width="20" height="20"> <?php }?>
                                            </td>
                                            <td>
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['pay'];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == "on") {?>
                                                    <img title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['pay'];?>
" src="../images/dollar-symbol.png" width="25" height="25">
                                                    <?php } else { ?>
                                                    <img title="" src="../images/NZOK.png" width="20" height="20">
                                                <?php }?>

                                            </td>
                                            <td style="display:none;"><?php echo $_smarty_tpl->tpl_vars['result']->value['idn'];?>
</td>
                                            <td style="display:none;"><?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
</td>

                                            <td style="color: black;" onclick="window.location='#';"><?php echo $_smarty_tpl->tpl_vars['result']->value['number'];?>
</td>
                                            <td style="color: black;" onclick="window.location='#';">

                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['cito'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == "on") {?>
                                                    <b style="color: red;">

                                          <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['comment'];
$_prefixVariable5 = ob_get_clean();
if (strlen($_prefixVariable5) > 1) {?>   <div class="tooltip">

                                                  <?php if ($_smarty_tpl->tpl_vars['result']->value['id'] == $_smarty_tpl->tpl_vars['data']->value[0]['patient_id']) {?><b><?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
</b> <?php } else { ?>
                                                      <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>

                                                  <?php }?>
                                                <?php } else {
echo $_smarty_tpl->tpl_vars['result']->value['names'];?>

                                              <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['comment'];
$_prefixVariable6 = ob_get_clean();
if (strlen($_prefixVariable6) > 1) {?>
                                                  <span class="tooltiptext"><?php echo $_smarty_tpl->tpl_vars['result']->value['comment'];?>
</span>
                                              <?php }?>
                                              </div><?php }?>
                                          </b><?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['cito'];
$_prefixVariable7 = ob_get_clean();
if ($_prefixVariable7 !== "on") {?>
                                                <div class="tooltip">
                                                    <?php if ($_smarty_tpl->tpl_vars['result']->value['id'] == $_smarty_tpl->tpl_vars['data']->value[0]['patient_id']) {?><b><?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
</b> <?php } else {
echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
 <?php }?>
                                                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['comment'];
$_prefixVariable8 = ob_get_clean();
if (strlen($_prefixVariable8) > 1) {?><span class="tooltiptext"><?php echo $_smarty_tpl->tpl_vars['result']->value['comment'];?>
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
                <td valign="top" width="70%">

                    <div class="lp">
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];
$_prefixVariable9 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];
$_prefixVariable10 = ob_get_clean();
if (isset($_prefixVariable9) && $_prefixVariable10 > 0) {?>

                        <!-- НАЧАЛО НА МЕНЮ ПАЦИЕНТИ-->
                        <a style="text-decoration: none; color: white;" href="../controller/print.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
" target="_blank">
                            <img src="../images/reqgreen.png" width="20" height="20" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['print'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['request'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['names'];?>
"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['request'];?>

                        </a> |
                        <a style="text-decoration: none; color: white;" href="../controller/resultbyid.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
" target="_blank">
                            <img src="../images/results.png" width="20" height="20" title="Принтирай резултати на <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['names'];?>
"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['result'];?>

                        </a> |
                        <a style="text-decoration: none; color: white;" href="../controller/onlineresults.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
" target="_blank">
                            <img src="../images/online.png" width="20" height="20" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['online_cart'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['names'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['online_cart'];?>

                        </a> |
                        <a style="text-decoration: none; color: white;" href="../controller/laboratory.php?delete=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
" alt="Изтриване" onclick="return confirm('Сигурен ли сте, че искате да изтриете пациент: <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
?')" title="Изтрий <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
">
                            <img src="../images/delete.png" width="20" height="20" alt="Изтриване"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>

                        </a>
                        <!-- НАЧАЛО НА МЕНЮ ПАЦИЕНТИ-->
                        <table>
                            <tr>
                                <td style="vertical-align:top;">
                                    <form autocomplete="off" action="../controller/laboratory.php?patient_id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
&from=<?php echo $_smarty_tpl->tpl_vars['from_date']->value;?>
&to=<?php echo $_smarty_tpl->tpl_vars['to_date']->value;?>
&status=<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
" method="POST" id="form1">
                                        <div style="overflow-y: scroll; height:360px;">
                                        <table class="gridexample" border="1" style="border-collapse: collapse;" cellspacing="0">
                                            <th style="background-color: #1b6d85; color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['test'];?>
</th>
                                            <th style="background-color: #1b6d85; color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['result'];?>
</th>
                                            <th style="background-color: #1b6d85; color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['unit'];?>
</th>
                                            <th style="background-color: #1b6d85; color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['referent_norms'];?>
</th>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'result', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['result']->value) {
?>
                                            <tr style="background-color: #c6dcff;">
                                                <td><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['k']->value]['name'];?>
 </td>
                                                <td style="margin: 0;padding: 0;">
                                                    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['k']->value]['test_code'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['k']->value]['result'];?>
" size="15" style="margin: 0;padding: 0; height: 20px;">
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
                                        </div>
                                </td>
                </td>
                <td valign="top">
                    <table>
                        <tr>
                            <td style="color: white;" align="right">ID: </td>
                            <td>
                                <input required type="text" name="number" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['number'];?>
" size="1">
                            </td>
                        </tr>
                        <tr>
                            <td style="color: white;" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['patient'];?>
:</td>
                            <td>
                                <input required type="text" name="patient" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['names'];?>
" size="26">
                            </td>
                        </tr>
                        <tr>
                            <td style="color: white;" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['idn'];?>
:</td>
                            <td>
                                <input type="text" name="idn" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['idn'];?>
" size="9">
                            </td>
                        </tr>
                        <tr>
                            <td style="color: white;" align="right"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['doctor'];?>
:</td>
                            <td>
                                <input list="hosting-plan" type="text" size="14" name='doctor' value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['doctor'];?>
">
                                <datalist id="hosting-plan">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doctors']->value, 'doctor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['doctor']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['doctor_id'];?>
" alt="1212" ><?php echo $_smarty_tpl->tpl_vars['doctor']->value['doctor'];?>
</option> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </datalist>
                            </td>
                        </tr>
                        <tr>
                            <td style="color: white;" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['date'];?>
:</td>
                            <td>
                                <input type="date" name="date" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['date'];?>
">
                            </td>
                        </tr>
                        <tr>
                            <td align="right"> <b style="color:red;" ><?php echo $_smarty_tpl->tpl_vars['lang']->value['cito'];?>
:</b></td>
                            <td> <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0]['cito'];
$_prefixVariable11 = ob_get_clean();
if ($_prefixVariable11 == "on") {?>
                                <input type="checkbox" name="cito" checked> <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0]['cito'];
$_prefixVariable12 = ob_get_clean();
if ($_prefixVariable12 !== "on") {?>
                                <input type="checkbox" name="cito"> <?php }?> <i style="color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['status'];?>
:</i>
                                <select name="over">
                                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0]['over'];
$_prefixVariable13 = ob_get_clean();
if ($_prefixVariable13 == "on") {?>
                                    <option value="on" selected><?php echo $_smarty_tpl->tpl_vars['lang']->value['over'];?>
</option>
                                    <option value="off"><?php echo $_smarty_tpl->tpl_vars['lang']->value['not_over'];?>
</option>
                                    <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value[0]['over'];
$_prefixVariable14 = ob_get_clean();
if ($_prefixVariable14 !== "on") {?>
                                    <option value="on"><?php echo $_smarty_tpl->tpl_vars['lang']->value['over'];?>
</option>
                                    <option value="off" selected><?php echo $_smarty_tpl->tpl_vars['lang']->value['not_over'];?>
</option>
                                    <?php }?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><a style="text-decoration:none; color: black;" id="myBtn">
                                    <img src="../images/personal-information-icon.png" width="30" height="30"><b style="cursor: pointer; color: white;">Лични данни</b></a>

                            </td>
                            <td>
                                  | <a href="../controller/old_results.php?idn=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['idn'];?>
" style="text-decoration:none; color: black;">
                                    <img src="../images/archive.png" width="30" height="30"><b style="color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['old_results'];?>
</b></a>

                            </td>
                        </tr>
                        <tr><td></td><td style="background-color: green; text-align: center; width: 300px; color:white;">
                                <?php echo $_smarty_tpl->tpl_vars['ok']->value;?>
</td></tr>
                    </table>

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
                                <textarea style="background-color: #ffedc4; resize: none;" name="comment" ><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['comment'];?>
</textarea>
                            </td>
                            <td>
                                <textarea style="background-color: #ffedc4; resize: none;" name="note"><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['note'];?>
</textarea>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <input type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['save_btn'];?>
" style="border: none; background-color: #ff9b30;color:#472b00; width: 80px;height: 25px; font-weight: bold; font-size: 14px">
                    </form>

                    <table>


                </td>
                </tr>

                </form>

                <tr>
                    </td>
                    <!--
==================ДОБАВИ/ПРЕМАХНИ ИЗСЛЕВАНИЯ! НАЧАЛО===========
                                -->

                    <table>
                        <tr>
                            <td>
                                <p class="flip" style="color: white;"><img src="../images/add.png" width="22" height="22"><?php echo $_smarty_tpl->tpl_vars['lang']->value['add_tests'];?>
</p>
                                <div class="panel">

                                    <form action="../controller/laboratory.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
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
                                        <input type="hidden" name="patient_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
">
                                        <input type="submit" name="add" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add_tests'];?>
">
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
                                <p class="flip2" style="color: white;"><img src="../images/delete.png" width="22" height="22"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['remove_tests'];?>
</p>
                                <div class="paneldel">

                                    <form action="../controller/laboratory.php?patient_id=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['patient_id'];?>
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
                                        <input onclick="return confirm('Сигурни ли сте, че искате да премахнете избраните изследвания?')" type="submit" name="remove" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['remove_tests'];?>
">
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
                    <br>
                    <br>
                    <br>
                    <!--
           ==================ДОБАВИ/ПРЕМАХНИ ИЗСЛЕВАНИЯ! КРАЙ===========
                                               -->
                    </td>
                </tr>
                </table>
                <?php } else { ?>
                <p>
                    <=<?php echo $_smarty_tpl->tpl_vars['lang']->value['choose_from_left'];?>

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
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p><h2 style="color: white;">Лични данни</h2>
                <form action="../controller/laboratory.php" method="POST">
                <table style="color: white;">
                    <tr>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['address'];?>
:
                        </td>
                        <td>
                        <input type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['pi']->value[0]['pi_address'];?>
">
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['phone'];?>
:
                        </td>
                        <td>
                            <input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['pi']->value[0]['pi_phone'];?>
">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            E-mail
                        </td>
                        <td>
                            <input type="mail" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['pi']->value[0]['pi_mail'];?>
">
                        </td>
                        <td>
                            Работно място:
                        </td>
                        <td>
                            <input type="text" name="work_place" value="<?php echo $_smarty_tpl->tpl_vars['pi']->value[0]['pi_workplace'];?>
">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Пол:
                        </td>
                        <td>
                            <select name="gender">
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['pi']->value[0]['pi_gender'] == '1') {?>selected<?php } else {
}?>>Мъж</option>
                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['pi']->value[0]['pi_gender'] == '2') {?>selected<?php } else {
}?>>Жена</option>
                                <option value="0" <?php if ($_smarty_tpl->tpl_vars['pi']->value[0]['pi_gender'] == '0') {?>selected<?php } else {
}?>>Не е посочено</option>
                            </select>
                        </td>
                        <td>
                            Кръвна група:
                        </td>
                        <td>
                            <select name="blood_type">
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['pi']->value[0]['pi_blood_type'] == '1') {?>selected<?php } else {
}?>>A+</option>
                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['pi']->value[0]['pi_blood_type'] == '2') {?>selected<?php } else {
}?>>A-</option>
                                <option value="3" <?php if ($_smarty_tpl->tpl_vars['pi']->value[0]['pi_blood_type'] == '3') {?>selected<?php } else {
}?>>B+</option>
                                <option value="4" <?php if ($_smarty_tpl->tpl_vars['pi']->value[0]['pi_blood_type'] == '4') {?>selected<?php } else {
}?>>B-</option>
                                <option value="5" <?php if ($_smarty_tpl->tpl_vars['pi']->value[0]['pi_blood_type'] == '5') {?>selected<?php } else {
}?>>AB+</option>
                                <option value="6" <?php if ($_smarty_tpl->tpl_vars['pi']->value[0]['pi_blood_type'] == '6') {?>selected<?php } else {
}?>>AB-</option>
                                <option value="7" <?php if ($_smarty_tpl->tpl_vars['pi']->value[0]['pi_blood_type'] == '7') {?>selected<?php } else {
}?>>0+</option>
                                <option value="8" <?php if ($_smarty_tpl->tpl_vars['pi']->value[0]['pi_blood_type'] == '8') {?>selected<?php } else {
}?>>0-</option>
                                <option value="false" <?php if ($_smarty_tpl->tpl_vars['pi']->value[0]['pi_blood_type'] == 'false') {?>selected<?php } else {
}?>>Не е посочено</option>
                            </select>
                            <input type="hidden" name="idn" value="<?php echo $_smarty_tpl->tpl_vars['dayList']->value[0]['idn'];?>
">
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['dayList']->value[0]['id'];?>
">
                        </td>
                    </tr>
                </table>

                <br>
                <input type="submit" name="personal_info" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['save_btn'];?>
" style="border: none; background-color: #ff9b30;color:#472b00; width: 80px;height: 25px; font-weight: bold; font-size: 14px">
            </form>

            </p>
        </div>

    </div>

    <?php echo '<script'; ?>
>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    <?php echo '</script'; ?>
>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
