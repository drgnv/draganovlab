{include file="header.tpl"}
<link href="../css/tooltip.css" media="screen" rel="stylesheet" type="text/css">
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
                ],
                "scrollY": "375px",
                "scrollX": "100px",
                "scrollCollapse": true,
                "paging": false,

            }

        );
    });
</script>
<script>
    function validateForm() {
        var x = document.forms["myForm"]["fname"].value;
        if (x == "") {
            alert("Моля, попълнете името на пациента");
            return false;
        }
    }
</script>
<!--Datatables js-->

<link href="../css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
<style>



    @media only screen and (max-width: 900px) {
        #t{
            display:block;
        }
        table{
            width: 100%;
        }

        td{
            width: 100%;
        }

    }


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
<div class="content" style="font-family: arial;">
    {include file="top_menu.tpl"}
    <script>
        // When the user clicks on div, open the popup
        function popup() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
        }
    </script>
    <div class="center">

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
        <table border="0" cellspacing="0" cellpadding="-"  style="width: 100%; border-collapse: collapse;">
            <tr>
                <td valign="top" id="t">
                    <form autocomplete="off" method="POST" action='new_patient.php' name='newp'>
                        <div class="newp">
                            ID:
                            <input required type="number" name="num" style="width: 60px;" value="{$pid}"> {$lang.paid}:
                            <input type="checkbox" name="pay"> | <b style="color: red;">{$lang.cito}</b>
                            <input type="checkbox" name="cito">
                            </br>
                            </br>

                           
                            <input placeholder="{$lang.patient}" required type="text" name="names" style="width: 220px; text-transform: capitalize;">
                            <input type="text" name='idn' size="7" placeholder="{$lang.idn}">
                            <input list="hosting-plan" placeholder="{$lang.doctor}" type="text" size="14"  name='doctor'>
                            <datalist id="hosting-plan">
                                {foreach from=$doctors item=doctor}
                                    <option value="{$doctor.doctor_id}" alt="1212" >{$doctor.doctor}</option> {/foreach}
                            </datalist>
                            <br>
                            <br> {include file="{$panel}.tpl"}

                            <script src="../js/ui-choose.js"></script>
                            <script>
                                $('.ui-choose').ui_choose();
                            </script>

                            </br>
                            </br>
                            {$lang.date}:
                            <input required type="date" name="date" value="{$date}" style="width: 135px">
                                | &nbsp&nbsp

                            <input type="submit" name="record" style="width: 80px;height: 25px; font-weight: bold; font-size: 14px" value="&#10133; {$lang.add}">&nbsp&nbsp |
                            <a href="../controller/print.php?id={$patient_id}" target="_blank" style="text-decoration: none;"><img src="../images/print.png" width="24" height="24"><b style="font-size: 13px; color: white;">{$lang.print} {$lang.request}</b></a>

                    </form>
                    </div>
                </td>
                <td valign="top"  id="t">
                    <div class="lp">

                        <table border="0" id="journal" class="display" width="700px" >
                            <thead>
                                <tr  style="background-color: #122b40; color: white; ">
                                    <th title="Статус" style="font-size: 13px;padding: 0px; margin: 0px;">С</th>
                                    <th style="font-size: 13px; padding: 0px; margin: 0px;">ID</th>
                                    <th style="font-size: 13px; padding: 2px; margin: 2px;">{$lang.patient}</th>
                                    <th style="font-size: 13px;padding: 0px; margin: 0px;">{$lang.doctor}</th>
                                    <th style="font-size: 13px;padding: 0px; margin: 0px;;">{$lang.actions}</th>

                                </tr>
                            </thead>
                            <tbody>
                                {assign var="un" value="1"} {foreach from=$dayList item=result}

                                <tr height="0">
                                    <td style="padding: 2px; margin: 2px;">
                                        {if {$result.over} == "on"}

                                        <b hidden="true">a</b> <img src="../images/over.PNG" width="25" height="25"> {/if} {if {$result.over} !== "on"} <b hidden="true">b</b>
                                        <img src="../images/notover.PNG" width="25" height="25"> {/if}
                                    </td>
                                    <td style="color: black; font-size: 13px;padding: px; margin: 0px;">{$result.number}</td>
                                    <td style="color: black; font-size: 13px;padding: 2px; margin: 2px;">
                                        {if {$result.pay} == "on"}
                                        <b hidden="true">a</b> <img title="ПЛАТЕНО" src="../images/dollar-symbol.png" width="20" height="20"> {/if} {if {$result.pay} !== "on"} <b hidden="true">b</b> {/if} {if {$result.cito} == "on"}<b style="color: red;">
                                <div class="tooltip">
                                    <a style="text-decoration: none; color: #2e6da4; font-size: 13px;" href="../controller/edit.php?id={{$result.id}}"
                                       onclick="window.open('../controller/edit.php?id={{$result.id}}',
                                               'newwindow',
                                               'width=1090,height=650');
                                               return false;"
                                       alt="Редактирай резултати" >
                                    {$result.names}</a>
                                 {if strlen({$result.comment})>1}

                                        {if strlen({$result.comment})>1}
                                            <span class="tooltiptext">{$result.comment}</span>
                                            {/if}
                                    {/if}</div>
                                </b>{/if} {if {$result.cito} !== "on"}
                                        <div class="tooltip">
                                            <a style="text-decoration: none; color: #2e6da4; font-size: 13px;" href="../controller/edit.php?id={{$result.id}}" onclick="window.open('../controller/edit.php?id={{$result.id}}',
                                            'newwindow',
                                            'width=1090,height=650');
                                            return false;" alt="Редактирай резултати">
                                        {$result.names}</a>{if strlen({$result.comment})>1}<span class="tooltiptext">{$result.comment}</span>{/if}
                                        </div>
                                        {/if}
                                    </td>
                                    <td style="color: black; font-size: 14px;padding: 0px; margin: 0px;">{$result.doctor}</td>
                                    <td align="center" style="padding: 0px; margin: 0px;">
                                        <a style="text-decoration: none;" href="../controller/print.php?id={{$result.id}}" target="_blank">
                                            <img src="../images/request.png" width="20" height="20" title="{$lang.print} {$lang.request} {$result.names}">
                                        </a>
                                        <a style="text-decoration: none;" href="../controller/resultbyid.php?id={{$result.id}}" target="_blank">
                                            <img src="../images/results.png" width="20" height="20" title="{$lang.print} {$lang.result} на {$result.names}">
                                        </a>

                                        <a style="text-decoration: none;" href="../controller/onlineresults.php?id={{$result.id}}" target="_blank">
                                            <img src="../images/online.png" width="20" height="20" title="Онлайн достъп на {$result.names}">
                                        </a>
                                        <a style="text-decoration: none;" href="../controller/new_patient.php?delete={{$result.id}}" alt="{$lang.delete}" onclick="return confirm('{$lang.delete_warning}: {$result.names}?')" title="{$lang.delete} {$result.names}">

                                            <img src="../images/delete.png" width="20" height="20" alt="Изтриване">
                                        </a>
                                    </td>
                                </tr>
                                <b style="visibility: hidden;"> {$un++}</b> {/foreach}

                            </tbody>

                        </table>
                        </form>

                </td>
            </tr>
        </table>
        </div>

    </div>
    {include file="footer.tpl"}
