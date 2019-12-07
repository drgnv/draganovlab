 {include file="header.tpl"}
<!--Datatables js-->
<script type="text/javascript" charset="utf8" src="../js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#journal').DataTable({
            "pageLength": 50
        });
    });
</script>
<!--Datatables js-->
<link href="../css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
<style>
    #parent #popup {
        display: none;
    }
    
    #parent:hover #popup {
        display: block;
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
    <div class="center-search">
        <center>
            <div class="newp2">
                <table style="border-spacing: 5px;"><tr><td valign="top" cellspacing="10"><center>
                <p style="color: whitesmoke; font-size: 25px;">{$lang.search_by_date}</p>
                <p style="color: whitesmoke; font-size: 14px;">Задайте начална и крайна дата</p>
                <form action="../controller/search_by_date.php" method="GET">
                    <p style="color: white; font-size: 16px;">
                        {$lang.from}: <input type="date" name="start"><br>
                        {$lang.to}: <input type="date" name="end"><br>
                        <input type="submit" name="send" value="{$lang.search}">
                    </p>
                </form></center>
                        </td><td>
                <table id="journal" class="lp" width="910">
                    <thead>
                        <tr>
                            <th style="display:none;">егн</th>
                            <th style="font-size: 13px; padding: 0px; margin: 0px;">С</th>
                            <th style="font-size: 13px; padding: 0px; margin: 0px;">№</th>
                            <th style="font-size: 13px; padding: 0px; margin: 0px;">{$lang.added}</th>
                            <th style="font-size: 13px; padding: 0px; margin: 0px;">{$lang.patient}</th>
                            <th style="font-size: 13px; padding: 0px; margin: 0px;">{$lang.doctor}</th>
                            <th style="font-size: 13px; padding: 0px; margin: 0px;">{$lang.actions}</th>
                        </tr>
                    </thead>
                    <tbody >
                        {assign var="un" value="1"} {foreach from=$patients item=result}

                        <tr height="0" style="margin: 0px; padding: 0px; font-size: 12px">
                            <td style="display:none;">{$result.idn}</td>
                            <td>
                                {if {$result.over} == "on"}
                                <b hidden="true">a</b> <img src="../images/over.PNG" width="25" height="25"> {/if} {if {$result.over} !== "on"} <b hidden="true">b</b>
                                <img src="../images/notover.PNG" width="25" height="25"> {/if}
                            </td>
                            <td style="color: black; font-size: 14px;">{$result.number}</td>
                            <td style="color: black; font-size: 14px;">{$result.date}</td>
                            <td style="color: black; font-size: 14px;"><a style="text-decoration: none;" href="../controller/edit.php?id={{$result.id}}" onclick="window.open('../controller/edit.php?id={{$result.id}}',
                                        'newwindow',
                                        'width=1090,height=650');
                                        return false;">{$result.names}</a></td>
                            <td style="color: black;">{$result.doctor}</td>
                            <td align="center">
                                <a href="../controller/print.php?id={{$result.id}}" target="_blank" style="text-decoration: none;">
                                    <img src="../images/request.png" width="20" height="20" title="Принтирай заявка на {$result.names}">
                                </a>
                                <a href="../controller/resultbyid.php?id={{$result.id}}" target="_blank" style="text-decoration: none;">
                                    <img src="../images/results.png" width="20" height="20" title="Принтирай резултати на {$result.names}">
                                </a>
                                <a style="text-decoration: none;" href="../controller/onlineresults.php?id={{$result.id}}" target="_blank">
                                    <img src="../images/online.png" width="20" height="20" title="Онлайн достъп на {$result.names}">
                                </a>
                                {if {$lvl}
                                <3}{else} <a style="text-decoration: none;" href="../controller/search_by_date.php?start={$start}&end={$end}&send=Търси&delete={{$result.id}}" alt="Изтриване" onclick="return confirm('Сигурен ли сте, че искате да изтриете пациент: {$result.names}?')" title="Изтрий {$result.names}">
                                    <img src="../images/delete.png" width="20" height="20" alt="Изтриване">
                                    </a>{/if}
                            </td>
                        </tr>
                        <b style="visibility: hidden;"> {$un++}</b> {/foreach}

                    </tbody>

                </table>
                </form>
        </center>
        </td></tr></div></div></table>
        </div>
    </div>
    <div class="footer"></div>
</div>

{include file="footer.tpl"}