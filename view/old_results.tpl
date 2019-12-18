{include file="header.tpl"}
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
                        <h3>{$lang.old_results}</h3>
                        <b>{$lang.patient}: </b>{$data.0.names}
                        <div id="table-wrapper">
                            <div id="table-scroll">
                                <table id="journa122" class="lp" width="4350">
                                    <thead>

                                        <th style="display:none;">егн</th>
                                        <th style="display:none;">id</th>
                                        <th title="{$lang.status}">С</th>
                                        <th>ID</th>
                                        <th>{$lang.date}</th>

                                    </thead>
                                    <tbody>
                                        {assign var="un" value="1"} {foreach from=$data item=result}

                                        <tr style="background-color: white; cursor: pointer;" data-href="../controller/old_results.php?patient_id={$result.id}&idn={$result.idn}">
                                            <td>
                                                {if {$result.over} == "on"}

                                                <b hidden="true">a</b> <img src="../images/over.PNG" width="20" height="20"> {/if} {if {$result.over} !== "on"} <b hidden="true">b</b>
                                                <img src="../images/notover.PNG" width="20" height="20"> {/if}
                                            </td>
                                            <td style="display:none;">{$result.idn}</td>
                                            <td style="display:none;">{$result.id}</td>
                                            <td style="color: black;" onclick="window.location='#';">{$result.number}</td>
                                            <td style="color: black;" onclick="window.location='#';">
                                                {if {$result.pay} == "on"}
                                                <b hidden="true">a</b> <img title="ПЛАТЕНО" src="../images/dollar-symbol.png" width="25" height="25"> {/if} {if {$result.pay} !== "on"} <b hidden="true">b</b> {/if} {if {$result.cito} == "on"}<b style="color: red;">
                                                    {if strlen({$result.comment})>1}   <div class="tooltip">
                                                       {$result.date|date_format:"%d/%m/%y"}
                                                        {if strlen({$result.comment})>1}
                                                            <span class="tooltiptext">{$result.comment}</span>
                                                        {/if}
                                                        </div>{/if}
                                                    </b>{/if} {if {$result.cito} !== "on"}
                                                <div class="tooltip">
                                                    {$result.date|date_format:"%d/%m/%y"}{if strlen({$result.comment})>1}<span class="tooltiptext">{$result.comment}</span>{/if}
                                                </div>
                                                {/if}
                                            </td>

                                        </tr>
                                        <b style="visibility: hidden;"> {$un++}</b> {/foreach}

                                    </tbody>

                                </table>
                            </div>
                        </div>
                        </form>
                    </div>
                </td>
                <td valign="top" width="70%">

                    <div class="lp">
                        {if isset({$data2.0.patient_id}) && {$data2.0.patient_id} >0}
                               <!-- НАЧАЛО НА МЕНЮ ПАЦИЕНТИ-->
                       <a style="text-decoration: none; color: white;" href="../controller/print.php?id={$data2.0.patient_id}" target="_blank">
                            <img src="../images/reqgreen.png" width="20" height="20" title="{$lang.print} {$lang.request} {$data.0.names}"> {$lang.request}
                        </a> |
                        <a style="text-decoration: none; color: white;" href="../controller/resultbyid.php?id={$data2.0.patient_id}" target="_blank">
                            <img src="../images/results.png" width="20" height="20" title="{$lang.print} {$lang.results} {$data2.0.names}"> {$lang.results}
                        </a> |
                        <a style="text-decoration: none; color: white;" href="../controller/onlineresults.php?id={$data2.0.patient_id}" target="_blank">
                            <img src="../images/online.png" width="20" height="20" title="Онлайн достъп на {$data2.0.names}"> {$lang.online_cart}
                        </a> |
                        <a style="text-decoration: none; color: white;" href="../controller/laboratory.php?delete={$data2.0.patient_id}" alt="Изтриване" onclick="return confirm('Сигурен ли сте, че искате да изтриете пациент: {$result.names}?')" title="Изтрий {$result.names}">
                            <img src="../images/delete.png" width="20" height="20" alt="Изтриване"> {$lang.delete}
                        </a>
                        <!-- НАЧАЛО НА МЕНЮ ПАЦИЕНТИ-->
                        <table>
                            <tr>
                                <td>
                                    <form autocomplete="off" action="../controller/old_results.php?patient_id={$data2.0.patient_id}&idn={$data2.0.idn}" method="POST" id="form1">
                                        <table class="gridexample" border="1" style="border-collapse: collapse;" cellspacing="0">
                                            <th style="background-color: #1b6d85; color: white;">{$lang.tests}</th>
                                            <th style="background-color: #1b6d85; color: white;">{$lang.results}</th>
                                            <th style="background-color: #1b6d85; color: white;">{$lang.unit}</th>
                                            <th style="background-color: #1b6d85; color: white;">{$lang.referent_norms}</th>
                                            {foreach from=$data2 key=k item=result}
                                            <tr style="background-color: #c6dcff;">
                                                <td>{$data2.$k.name} </td>
                                                <td>
                                                    <input type="text" name="{$data2.$k.test_code}" value="{$data2.$k.result}">
                                                </td>
                                                <td>{$data2.$k.unit}</td>
                                                <td>{$data2.$k.up} - {$data2.$k.down}</td>
                                            </tr>
                                            {/foreach}
                                        </table>
                                </td>
                </td>
                <td valign="top">
                    <table>
                        <tr>
                            <td style="color: white;">ID </td>
                            <td>
                                <input required type="text" name="number" value="{$data2.0.number}" size="1">
                            </td>
                        </tr>
                        <tr>
                            <td style="color: white;">{$lang.patient}:</td>
                            <td>
                                <input required type="text" name="patient" value="{$data2.0.names}" size="26">
                            </td>
                        </tr>
                        <tr>
                            <td style="color: white;">{$lang.idn}:</td>
                            <td>
                                <input type="text" name="idn" value="{$data2.0.idn}" size="9">
                            </td>
                        </tr>
                        <tr>
                            <td style="color: white;"> {$lang.doctor}:</td>
                            <td>
                               <input list="hosting-plan" value="{$data2.0.doctor}" type="text" size="12" name='doctor'>
                            <datalist id="hosting-plan">
                                {foreach from=$doctors item=doctor}
                                <option value="{$doctor.doctor}" alt="1212" />
                                {/foreach}
                            </datalist>
                                
                            </td>
                        </tr>
                        <tr>
                            <td style="color: white;">{$lang.date}:</td>
                            <td>
                                <input type="date" name="date" value="{$data2.0.date}">
                            </td>
                        </tr>
                        <tr>
                            <td> <b style="color:red;">{$lang.cito}:</b></td>
                            <td> {if {$data2.0.cito} == "on"}
                                <input type="checkbox" name="cito" checked> {/if} {if {$data2.0.cito} !== "on"}
                                <input type="checkbox" name="cito"> {/if}<b style="color:white;">{$lang.status}:</b>
                                <select name="over">
                                    {if {$data2.0.over} == "on"}
                                    <option value="on" selected>{$lang.over}</option>
                                    <option value="off">{$lang.not_over}</option>
                                    {/if} {if {$data2.0.over} !== "on"}
                                    <option value="on">{$lang.over}</option>
                                    <option value="off" selected>{$lang.not_over}</option>
                                    {/if}
                                </select>
                            </td>
                        </tr>
                    </table>
                </td>
                </tr>
                </table>
                <p style="background-color: green; text-align: center;">{$ok}</p>
                <input type="submit" name="save" value="{$lang.save_btn }">
                </form>
                {else}
                <p>
                    ⇦Изберете заявка от панела в ляво за да заредите информацията за нея.
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