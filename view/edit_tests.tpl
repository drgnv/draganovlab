{include file="header.tpl"}
<!--Datatables js-->

<script type="text/javascript" charset="utf8" src="../js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#tests').DataTable({
            "pageLength": 50
        });
    });
</script>
<style>
    th {
        color: white;
    }
</style>
<!--Datatables js-->
<div class="content">
    {include file="top_menu.tpl"}
</div>
<div class="content">
    {include file="side_menu.tpl"}

    <div class="center">
        <div class="edit-doctors">
            <h1 style=" font-size: 25px;">Изследвания</h1> {include file="tests_menu.tpl"}

            <hr>
            <p style="text-align: left">
                <a href="../controller/add_test.php" onclick="window.open('../controller/add_test.php', 
                         'newwindow', 
                         'width=300,height=310')
          return false;   
          " ; style="text-decoration: none;"> <img src="../images/add.png" width="25" height="25"> <b style="font-size: 18px; color: white">Добави изследване</b></a>
            </p>

            <table id="tests" class="display">
                <thead>
                    <tr>
                        <th>Изследване</th>
                        <th>↓</th>
                        <th>↑</th>
                        <th>⚖️</th>
                        <th>Цена</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$tests item=test}
                    <tr>
                        <td style="color: black;text-align: right;">{$test.name}</td>
                        <td style="color: black;text-align: right;">{$test.up}</td>
                        <td style="color: black;text-align: right;">{$test.down}</td>
                        <td style="color: black;text-align: right;">{$test.unit}</td>
                        <td style="color: black;text-align: right;">BGN {$test.price}</td>
                        <td>
                            <a style="text-decoration: none;" href="../controller/edit_test.php?id={{$test.id}}" onclick="window.open('../controller/edit_test.php?id={{$test.id}}', 
                         'newwindow', 
                         'width=320,height=260');
              return false;" alt="Редактирай резултати">
                                <img src="../images/edit.png" width="30" height="30" title="Редактирай {$result.names}">

                            </a>

                            <a style="text-decoration: none;" href="../controller/edit_tests.php?delete={$test.id}" onclick="return confirm('Сигурен ли сте, че искате да изтриете: {$test.name}?')" title="Изтрий {$result.names}"><img src="../images/delete.png" width="25" height="25"></a>

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