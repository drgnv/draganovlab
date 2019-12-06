<html>

<head>
    <title>Редактирай анализатор</title>
</head>

<body style="font-family: monospace;">
    <h2 align="center">Редактирай анализатор</h2>
    <table border="0" cellspacing="0" cellpadding="3">
        <form action="../controller/add_analizer.php" method="POST">
            <tr>
                <td align="right">Име: </td>
                <td>
                    <input type="text" value="{$analizer.0.name}" name="analizer-name">
                </td>
            </tr>
            <tr>
                <td>Категория: </td>
                <td>
                    <select name="category">
                        <option>Хематология</option>
                        <option>Биохимия</option>
                        <option>Коагулация</option>
                        <option>Имунология</option>
                        <option>Урина</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="edit" value="Запис">
                </td>
        </form>
    </table>
</body>

</html>