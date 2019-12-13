{include file="header.tpl"}

<script src="../js/jquery-3.3.1.min.js" type="text/javascript"></script>
<link href="../css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
<script>
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
</script>
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

<script type="text/javascript" charset="utf8" src="../js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"></script>
<script>
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
</script>
<script>
    function validateForm() {
        var x = document.forms["myForm"]["fname"].value;
        if (x == "") {
            alert("Name must be filled out");
            return false;
        }
    }
</script>
<!--Datatables js-->

<link href="../css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
<style>
    input[type=text]:focus {
        background-color: #fff3bf;
        box-shadow: #33FF33;
    }
</style>

<div class="content">
    {include file="top_menu.tpl"}
    <script>
        // When the user clicks on div, open the popup
        function popup() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
        }
    </script>
    <link href="../css/scroll-table.css" rel="stylesheet">
    <div class="center">

        <script>
            document.addEventListener("touchstart", function() {}, true)
        </script>
        <script type="text/javascript">
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
        </script>

        <table border="0" cellspacing="0" cellpadding="0" width="100%" style=" border-collapse: collapse;">
            <tr>
                <td valign="top" width="30%">
                    <div class="newp" style="width: 350px">
                        <b>{$lang.search}</b>
                        <center>
                            <table>

                                <form method="get" action="./laboratory.php">
                                    <tr>
                                        <td style="color: white;" align="right">{$lang.from}:</td>
                                        <td>
                                            <input type="date" name="from" value="{$from_date}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: white;" align="right">{$lang.to}:</td>
                                        <td>
                                            <input type="date" name="to" value="{$to_date}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: white;" align="right">{$lang.status}:</td>
                                        <td>
                                            <select name="status">
                                                {if $status == "all" || !isset($status)}
                                                    <option value="all" selected>{$lang.all}</option>
                                                    <option value="over">{$lang.over}</option>
                                                    <option value="notover">{$lang.not_over}</option>
                                                {/if}
                                                {if $status == "over"}
                                                    <option value="all">{$lang.all}</option>
                                                    <option value="over" selected>{$lang.over}</option>
                                                    <option value="notover">{$lang.not_over}</option>
                                                {/if}
                                                {if $status == "notover"}
                                                    <option value="all">{$lang.all}</option>
                                                    <option value="over">{$lang.over}</option>
                                                    <option value="notover" selected>{$lang.not_over}</option>
                                                {/if}

                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input type="submit" name="searchbydate" value="{$lang.search}...">
                                        </td>
                                    </tr>
                                </form>
                                <tr>
                                    <td style="color: white;">{$lang.barcode}: </td>
                                    <td>
                                        <form method="GET" action="./laboratory.php">
                                            <input type="hidden" name="from" value="{$from_date}">
                                            <input type="hidden" name="to" value="{$to_date}">
                                            <input type="hidden" name="searchbydate" value="Търси...">
                                            <input type="text" name="patient_id" size="16" autofocus onkeyup="submitT(this,this.form)">
                                        </form>
                                        <script language="JavaScript" type="text/JavaScript">
                                            const sleep = (milliseconds) => { return new Promise(resolve => setTimeout(resolve, milliseconds)) } var x=1;//nr characters function submitT(t,f){ if(t.value.length>x){ sleep(200).then(() => { f.submit() }) } }
                                        </script>
                                    </td>
                                </tr>
                            </table>
                        </center>
                        <div id="table-wrapper">
                            <div id="table-scroll">
                                <table id="journa122" class="lp" width="4350">
                                    <thead>

                                        <th style="display:none;">егн</th>
                                        <th style="display:none;">id</th>
                                        <th title="{$lang.status}">С</th>
                                        <th>ID</th>
                                        <th>{$lang.patient}</th>

                                    </thead>
                                    <tbody>
                                        {assign var="un" value="1"} {foreach from=$dayList item=result}

                                        <tr  style="background-color: green; cursor: pointer;" data-href="../controller/laboratory.php?patient_id={$result.id}&from={$from_date}&to={$to_date}&status={$status}&searchbydate=Търси...">
                                            <td>
                                                {if {$result.over} == "on"}

                                                <b hidden="true">a</b> <img src="../images/over.PNG" width="20" height="20"> {/if}
                                                {if {$result.over} !== "on"} <b hidden="true">b</b>
                                                <img src="../images/notover.PNG" width="20" height="20"> {/if}
                                            </td>
                                            <td style="display:none;">{$result.idn}</td>
                                            <td style="display:none;">{$result.id}</td>

                                            <td style="color: black;" onclick="window.location='#';">{$result.number}</td>
                                            <td style="color: black;" onclick="window.location='#';">
                                                {if {$result.pay} == "on"}
                                                <b hidden="true">a</b> <img title="ПЛАТЕНО" src="../images/dollar-symbol.png" width="25" height="25"> {/if} {if {$result.pay} !== "on"} <b hidden="true">b</b> {/if} {if {$result.cito} == "on"}<b style="color: red;">
                                          {if strlen({$result.comment})>1}   <div class="tooltip">
                                                  {if $result.id == $data.0.patient_id}<b>{$result.names}</b> {else}{$result.names} {/if}
                                              {if strlen({$result.comment})>1}
                                                  <span class="tooltiptext">{$result.comment}</span>
                                              {/if}
                                              </div>{/if}
                                          </b>{/if} {if {$result.cito} !== "on"}
                                                <div class="tooltip">
                                                    {if $result.id == $data.0.patient_id}<b>{$result.names}</b> {else}{$result.names} {/if}
                                                    {if strlen({$result.comment})>1}<span class="tooltiptext">{$result.comment}</span>{/if}
                                                </div>
                                                {/if}
                                            </td>

                                        </tr>
                                        <b style="visibility: hidden; font-size: 0px;"> {$un++}</b> {/foreach}

                                    </tbody>

                                </table>
                            </div>
                        </div>
                        </form>
                    </div>
                </td>
                <td valign="top" width="70%">

                    <div class="lp">
                        {if isset({$data.0.patient_id}) && {$data.0.patient_id}>0}

                        <!-- НАЧАЛО НА МЕНЮ ПАЦИЕНТИ-->
                        <a style="text-decoration: none; color: white;" href="../controller/print.php?id={$data.0.patient_id}" target="_blank">
                            <img src="../images/reqgreen.png" width="20" height="20" title="{$lang.print} {$lang.request} {$data.0.names}"> {$lang.request}
                        </a> |
                        <a style="text-decoration: none; color: white;" href="../controller/resultbyid.php?id={$data.0.patient_id}" target="_blank">
                            <img src="../images/results.png" width="20" height="20" title="Принтирай резултати на {$data.0.names}"> {$lang.result}
                        </a> |
                        <a style="text-decoration: none; color: white;" href="../controller/onlineresults.php?id={$data.0.patient_id}" target="_blank">
                            <img src="../images/online.png" width="20" height="20" title="{$lang.online_cart} {$data.0.names}">{$lang.online_cart}
                        </a> |
                        <a style="text-decoration: none; color: white;" href="../controller/laboratory.php?delete={$data.0.patient_id}" alt="Изтриване" onclick="return confirm('Сигурен ли сте, че искате да изтриете пациент: {$result.names}?')" title="Изтрий {$result.names}">
                            <img src="../images/delete.png" width="20" height="20" alt="Изтриване"> {$lang.delete}
                        </a>
                        <!-- НАЧАЛО НА МЕНЮ ПАЦИЕНТИ-->
                        <table>
                            <tr>
                                <td style="vertical-align:top;">
                                    <form autocomplete="off" action="../controller/laboratory.php?patient_id={$data.0.patient_id}&from={$from_date}&to={$to_date}&status={$status}" method="POST" id="form1">
                                        <div style="overflow-y: scroll; height:360px;">
                                        <table class="gridexample" border="1" style="border-collapse: collapse;" cellspacing="0">
                                            <th style="background-color: #1b6d85; color: white;">{$lang.test}</th>
                                            <th style="background-color: #1b6d85; color: white;">{$lang.result}</th>
                                            <th style="background-color: #1b6d85; color: white;">{$lang.unit}</th>
                                            <th style="background-color: #1b6d85; color: white;">{$lang.referent_norms}</th>
                                            {foreach from=$data key=k item=result}
                                            <tr style="background-color: #c6dcff;">
                                                <td>{$data.$k.name} </td>
                                                <td style="margin: 0;padding: 0;">
                                                    <input type="text" name="{$data.$k.test_code}" value="{$data.$k.result}" size="15" style="margin: 0;padding: 0; height: 20px;">
                                                </td>
                                                <td>{$data.$k.unit}</td>
                                                <td>{$data.$k.up} - {$data.$k.down}</td>
                                            </tr>
                                            {/foreach}
                                        </table>
                                        </div>
                                </td>
                </td>
                <td valign="top">
                    <table>
                        <tr>
                            <td style="color: white;">ID </td>
                            <td>
                                <input required type="text" name="number" value="{$data.0.number}" size="1">
                            </td>
                        </tr>
                        <tr>
                            <td style="color: white;">{$lang.patient}:</td>
                            <td>
                                <input required type="text" name="patient" value="{$data.0.names}" size="26">
                            </td>
                        </tr>
                        <tr>
                            <td style="color: white;">{$lang.idn}:</td>
                            <td>
                                <input type="text" name="idn" value="{$data.0.idn}" size="9">
                            </td>
                        </tr>
                        <tr>
                            <td style="color: white;"> {$lang.doctor}:</td>
                            <td>
                                <input list="hosting-plan" type="text" size="14" name='doctor' value="{$data.0.doctor}">
                                <datalist id="hosting-plan">
                                    {foreach from=$doctors item=doctor}
                                    <option value="{$doctor.doctor_id}" alt="1212" >{$doctor.doctor}</option> {/foreach}
                                </datalist>
                            </td>
                        </tr>
                        <tr>
                            <td style="color: white;">{$lang.date}:</td>
                            <td>
                                <input type="date" name="date" value="{$data.0.date}">
                            </td>
                        </tr>
                        <tr>
                            <td> <b style="color:red;">{$lang.cito}:</b></td>
                            <td> {if {$data.0.cito} == "on"}
                                <input type="checkbox" name="cito" checked> {/if} {if {$data.0.cito} !== "on"}
                                <input type="checkbox" name="cito"> {/if} <i style="color: white;">{$lang.status}:</i>
                                <select name="over">
                                    {if {$data.0.over} == "on"}
                                    <option value="on" selected>{$lang.over}</option>
                                    <option value="off">{$lang.not_over}</option>
                                    {/if} {if {$data.0.over} !== "on"}
                                    <option value="on">{$lang.over}</option>
                                    <option value="off" selected>{$lang.not_over}</option>
                                    {/if}
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <a href="../controller/old_results.php?idn={$data.0.idn}" style="text-decoration:none; color: black;">
                                    <img src="../images/archive.png" width="30" height="30"><b style="color: white;">{$lang.old_results}</b></a>

                            </td>
                        </tr>
                        <tr><td></td><td style="background-color: green; text-align: center; width: 300px; color:white;">
                                {$ok}</td></tr>
                    </table>

                    <table border="1" style="border-collapse: collapse;" cellspacing="0">
                        <th style="background-color: #ffbd28;">
                            <div class="tooltip">{$lang.comment}
                                <span class="tooltiptext">Коментрът на резултатите се принтира с резултатите на пациента</span>
                            </div>
                        </th>
                        <th style="background-color: #ffbd28;">
                            <div class="tooltip">{$lang.note}
                                <span class="tooltiptext">Бележките са видими само в полето "Болежки" и не достигат до пациентите. Подходящи
  за работни записки.</span>
                            </div>
                        </th>
                        <tr>
                            <td>
                                <textarea style="background-color: #ffedc4; resize: none;" name="comment" >{$data.0.comment}</textarea>
                            </td>
                            <td>
                                <textarea style="background-color: #ffedc4; resize: none;" name="note">{$data.0.note}</textarea>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <input type="submit" name="save" value="{$lang.save_btn}" style="border: none; background-color: #ff9b30;color:#472b00; width: 80px;height: 25px; font-weight: bold; font-size: 14px">
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
                                <p class="flip" style="color: white;"><img src="../images/add.png" width="22" height="22">{$lang.add_tests}</p>
                                <div class="panel">

                                    <form action="../controller/laboratory.php?id={$data.0.patient_id}" method="POST">
                                        <select multiple="multiple" id="my-select" name="my-select[]">
                                            <option value="01.01" style="text-align: left">ПКК</option>
                                            {foreach from=$all_tests key=key item=test}
                                            <option value='{$test.code}' style="text-align: left">{$test.name}</option>
                                            {/foreach}
                                            <option value="01.09" style="text-align: left">Урина-Седимент</option>
                                            <option value="01.08" style="text-align: left">Урина-Химично</option>
                                            <option value="66.00" style="text-align: left">АКР</option>
                                            <option value="01.40" style="text-align: left">Левкограма</option>
                                        </select>
                                        <input type="hidden" name="patient_id" value="{$data.0.patient_id}">
                                        <input type="submit" name="add" value="{$lang.add_tests}">
                                    </form>
                                    <script src="../js/jquery.multi-select.js" type="text/javascript"></script>
                                    <script>
                                        $('#my-select').multiSelect()
                                    </script>

                                </div>

                            </td>
                            <td>
                                <p class="flip2" style="color: white;"><img src="../images/delete.png" width="22" height="22"> {$lang.remove_tests}</p>
                                <div class="paneldel">

                                    <form action="../controller/laboratory.php?patient_id={$data.0.patient_id}" method="POST">
                                        <select multiple="multiple" id="my-selectdel" name="my-selectdel[]">
                                            {foreach from=$data key=key item=test}
                                            <option value='{$test.code}' style="text-align: left">{$test.name}</option>
                                            {/foreach}
                                        </select>
                                        <input onclick="return confirm('Сигурни ли сте, че искате да премахнете избраните изследвания?')" type="submit" name="remove" value="{$lang.remove_tests}">
                                    </form>
                                    <script src="../js/jquery.multi-select.js" type="text/javascript"></script>
                                    <script>
                                        $('#my-selectdel').multiSelect()
                                    </script>

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
                {else}
                <p>
                    <={$lang.choose_from_left}
                </p>
                {/if}
        </table>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/jquery.formnavigation.js"></script>
        <script>
            $(document).ready(function() {
                $('.gridexample').formNavigation();
            });
        </script>
        </div>
        <script>
            $('tr[data-href]').on("click", function() {
                document.location = $(this).data('href');
            });
        </script>

    </div>
    {include file="footer.tpl"}
