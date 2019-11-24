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
            <script type="text/javascript">
                function insertText(elemID, text) {
                    var elem = document.getElementById(elemID);
                    elem.innerHTML += text;
                }
            </script>

            <div class="newp2">
                <h2 style="color: white;">Журнал</h2>
                <hr>
                <table id="journal" class="display" width="990">
                    <thead>
                        <tr>
                            <th style="color: white;">С</th>
                            <th style="color: white;">№</th>
                            <th style="color: white;">Добавено на</th>
                            <th style="color: white;">Пациент</th>
                            <th style="color: white;">Лекар</th>
                            <th style="color: white;">Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        {assign var="un" value="1"} {foreach from=$results item=result}

                        <tr>

                            <td>
                                {if {$result.over} == "on"}
                                <b hidden="true">a</b> <img src="../images/over.PNG" width="25" height="25"> {/if}
                                {if {$result.over} !== "on"} <b hidden="true">b</b>
                                <img src="../images/notover.PNG" width="25" height="25"> {/if}
                            </td>
                            <td style="color: black;">{$result.number}</td>
                            <td style="color: black;">{$result.date}</td>
                            <td style="color: black;">{$result.names}</td>
                            <td style="color: black;">{$result.doctor}</td>
                            <td align="center">
                                <a style="text-decoration: none;" href="../controller/print.php?id={{$result.id}}" target="_blank">
                                    <img src="../images/request.png" width="25" height="25" title="Принтирай заявка на {$result.names}">
                                </a>
                                <a style="text-decoration: none;" href="../controller/resultbyid.php?id={{$result.id}}" target="_blank">
                                    <img src="../images/results.png" width="25" height="25" title="Принтирай резултати на {$result.names}">
                                </a>
                                <a style="text-decoration: none;" href="../controller/edit.php?id={{$result.id}}" onclick="window.open('../controller/edit.php?id={{$result.id}}', 
                         'newwindow', 
                         'width=550,height=600'); 
              return false;" alt="Редактирай резултати">
                                    <img src="../images/edit.png" width="25" height="25" title="Редактирай {$result.names}">
                                </a>
                                <a style="text-decoration: none;" href="../controller/onlineresults.php?id={{$result.id}}" target="_blank">
                                    <img src="../images/online.png" width="25" height="25" title="Онлайн достъп на {$result.names}">
                                </a>
                                {if {$lvl}
                                <3}{else} <a href="../controller/search.php?delete={{$result.id}}&search={$search}&type={$type}" alt="Изтриване" onclick="return confirm('Сигурен ли сте, че искате да изтриете пациент: {$result.names}?')" title="Изтрий {$result.names}">
                                    <img src="../images/delete.png" width="25" height="25" alt="Изтриване">
                                   <b style="visibility: hidden;"> {$un++}</b>  </a>{/if}
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
                </form>
        </center>
        </div>
        <div class="footer"></div>
    </div>

    {include file="footer.tpl"}