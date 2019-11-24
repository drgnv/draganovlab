<html>

<head>

    <title>Добавяне на показател към Електролити</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body style="text-align: center; font-family: monospace">
    <form action="../controller/add_ele.php" method="POST">
        <h2>Добавяне на показател към Електролити</h2>
        <table border="0" cellspacing="0">
            <tr>
                <td style="text-align: right; font-family: monospace"><b>Показател:</b> </td>
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
        </table>
        <br>
        <center style="font-family: monospace">
            <b style="font-family: monospace">Референтен интервал</b>
            <br> от:
            <input type="text" name="up" size="3"> | до:
            <input type="text" name="down" size="3">
            <br>
            <br>
            <br>
            <br>
            <input type="submit" name="save" value="Запис"> </center>

    </form>
</body>

</html>