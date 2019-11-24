<html>

<head>

    <title>Редактиране на {$test.0.name}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>
    <p>Редактиране на {$test.0.name}</p>
    <form action="../controller/edit_akr_component.php?id={$test.0.id}" method="POST">
        <table border="0" cellspacing="0">
            <tr>
                <td style="text-align: right; font-family: monospace"><b>Изследване:</b>
                </td>
                <td>
                    <input type="text" name="name" value="{$test.0.name}">
                </td>
            </tr>

            <tr>
                <td style="text-align: right;font-family: monospace"><b>Мерна единица:</b> </td>
                <td>
                    <input type="text" name="unit" value="{$test.0.unit}">
                </td>
            </tr>
            <tr style="display: none;">
                <td style="text-align: right; font-family: monospace"><b>Код:</b> </td>
                <td>
                    <input type="text" name="code" value="{$test.0.code}">
                </td>
            </tr>
            <tr style="display: none;">
                <td style="text-align: right;font-family: monospace">
                    <b>Група:</b>
                </td>
                <td>
                    <select name="flag">
                        <option value="akr" selected="true">АКР</option>
                    </select>
                </td>
            </tr>
        </table>
        <br>
        <center style="font-family: monospace">
            <b style="font-family: monospace">Референтен интервал</b>
            <br> от:
            <input type="text" name="up" value="{$test.0.up}" size="3"> | до:
            <input type="text" name="down" value="{$test.0.down}" size="3">
            <br>
            <br>
            <input style="display: none;" type="text" name="price" value="{$test.0.price}" size="3">
            <br>
            <br>
            <input type="submit" name="save" value="Запис"> </center>

    </form>
</body>

</html>