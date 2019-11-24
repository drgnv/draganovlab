<html>

<head>
    <title>Добави анализатор</title>
</head>

<body style="font-family: monospace;">
    <h2 align="center">Добави анализатор</h2>
    <table border="0" cellspacing="0" cellpadding="3">
        <form action="../controller/add_analizer.php" method="POST">
            <tr>
                <td align="right">Име: </td>
                <td>
                    <input type="text" name="analizer-name">
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
                    <input type="submit" name="add" value="Запис">
                </td>
        </form>
    </table>
</body>

</html>