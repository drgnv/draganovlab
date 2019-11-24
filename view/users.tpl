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
        $('#journal').DataTable({
            "pageLength": 50
        });
    });
</script>
<!--Datatables js-->
<div class="content">
    {include file="top_menu.tpl"}
</div>
<div class="content">

    {include file="side_menu.tpl"}
    <div class="center">
        <div class="edit-doctors">
            <h1 style=" font-size: 25px;">Потребители</h1>
            <hr>

            <p style="text-align: left">
                <a style="text-decoration: none;" href="../controller/add_user.php" onclick="window.open('../controller/add_user.php', 
                         'newwindow', 
                         'width=240,height=380')
          return false;   
          " ;> <img src="../images/add.png" width="25" height="25"> <b style="font-size: 18px; color: white">Добави потребител</b></a>
            </p>

            <table id="journal" class="display">
                <thead>
                    <tr>
                        <th>Потребител</th>
                        <th>Права</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$users key=k item=user}
                    <tr style="color: #0F0F0F" align="right">
                        <td>{$user.name}</td>
                        <td>
                            {if {$user.lvl} == 3} Администратор {/if} {if {$user.lvl} == 2} Лаборант {/if} {if {$user.lvl} == 1} Начинаещ {/if}
                        </td>
                        <td>

                            <a href="../controller/edit_user.php?user_id={{$user.id}}" onclick="window.open('../controller/edit_user.php?user_id={{$user.id}}',
                                   'newwindow',
                                   'width=300,height=350');
                                   return false;" alt="Редактирай" style="text-decoration: none;"><img src="../images/edit.png" width="20" height="20">Редактиране </a>

                            <a style="text-decoration: none;" href="../controller/users.php?delete_user={$user.id}" onclick="return confirm('Сигурен ли сте, че искате да изтриете потребител: {$user.name}?')">
                                <img width="20" height="20" src="../images/delete.png">Изтриване</a>
                        </td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>

    </div>
    <div class="footer"></div>
</div>
{include file="footer.tpl"}