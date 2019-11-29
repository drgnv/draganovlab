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
                <table style="border-spacing: 20px;"><tr><td valign="top" cellspacing="10"><center>
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
                            <th>С</th>
                            <th>№</th>
                            <th>{$lang.added}</th>
                            <th>{$lang.patient}</th>
                            <th>{$lang.doctor}</th>
                            <th>{$lang.actions}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {assign var="un" value="1"} {foreach from=$patients item=result}

                        <tr>
                            <td style="display:none;">{$result.idn}</td>
                            <td>
                                {if {$result.over} == "on"}
                                <b hidden="true">a</b> <img src="../images/over.PNG" width="25" height="25"> {/if} {if {$result.over} !== "on"} <b hidden="true">b</b>
                                <img src="../images/notover.PNG" width="25" height="25"> {/if}
                            </td>
                            <td style="color: black;">{$result.number}</td>
                            <td style="color: black;">{$result.date}</td>
                            <td style="color: black;">{$result.names}</td>
                            <td style="color: black;">{$result.doctor}</td>
                            <td align="center">
                                <a href="../controller/print.php?id={{$result.id}}" target="_blank" style="text-decoration: none;">
                                    <img src="../images/request.png" width="30" height="30" title="Принтирай заявка на {$result.names}">
                                </a>
                                <a href="../controller/resultbyid.php?id={{$result.id}}" target="_blank" style="text-decoration: none;">
                                    <img src="../images/results.png" width="30" height="30" title="Принтирай резултати на {$result.names}">
                                </a>

                                <a style="text-decoration: none;" href="../controller/edit.php?id={{$result.id}}" onclick="window.open('../controller/edit.php?id={{$result.id}}', 
                         'newwindow', 
                         'width=550,height=600'); 
              return false;" alt="Редактирай резултати">
                                    <img src="../images/edit.png" width="30" height="30" title="Редактирай {$result.names}">
                                </a>
                                <a style="text-decoration: none;" href="../controller/onlineresults.php?id={{$result.id}}" target="_blank">
                                    <img src="../images/online.png" width="30" height="30" title="Онлайн достъп на {$result.names}">
                                </a>
                                {if {$lvl}
                                <3}{else} <a style="text-decoration: none;" href="../controller/search_by_date.php?start={$start}&end={$end}&send=Търси&delete={{$result.id}}" alt="Изтриване" onclick="return confirm('Сигурен ли сте, че искате да изтриете пациент: {$result.names}?')" title="Изтрий {$result.names}">
                                    <img src="../images/delete.png" width="30" height="30" alt="Изтриване">
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