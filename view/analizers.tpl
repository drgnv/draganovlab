{include file="header.tpl"}
<!--Datatables js-->
<style>
    th {
        color: white;
    }
</style>
<script type="text/javascript" charset="utf8" src="../js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#doctors').DataTable({
            "pageLength": 10
        });
    });
</script>
<!--Datatables js-->
<div class="content">
    {include file="top_menu.tpl"}
</div>
<div class="content">
    {include file="side_menu.tpl"}

    <div class="edit-doctors">
        <h1 style=" font-size: 25px;">Анализатори</h1>
        <hr>
        <p style="text-align: left">
            <a style="text-decoration: none;" href="../controller/add_analizer.php" onclick="window.open('../controller/add_analizer.php', 
                         'newwindow', 
                         'width=300,height=300')
          return false;   
          " ;> <img src="../images/add.png" width="25" height="25"> <b style="font-size: 18px; color: white">Добави анализатор</b></a>
        </p>

        <table id="doctors" class="display">
            <thead>
                <tr>
                    <th>Анализатор</th>
                    <th>Категория</th>
                    <th>Добавено</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$analizers item=doctor}
                <tr>

                    <td style="color: black;">{$doctor.name}</td>
                    <td style="color: black;">{$doctor.category}</td>
                    <td style="color: black;">{$doctor.date}</td>
                    <td style="color: black;">
                        <a style="text-decoration: none;" href="../controller/edit_doctor.php?editdoc={$doctor.id}" onclick="window.open('../controller/edit_analizer.php?editid={$doctor.id}',
                         'newwindow',
                         'width=300,height=200')
          return false;
          " ;>
                            <img src="../images/edit.png" width="25" height="25"> Редактиране
                        </a>

                        <a style="text-decoration: none;" href="../controller/edit_doctors.php?deleteid={$doctor.id}" onclick="return confirm('Сигурен ли сте, че искате да изтриете анализатор: {$doctor.doctor}?')" title="Изтрий {$result.names}">
                            <img src="../images/delete.png" width="25" height="25"> Изтриване</a>
                    </td>

                </tr>
                {/foreach}
            </tbody>

        </table>

    </div>
    <div class="footer"></div>
</div>
{include file="footer.tpl"}