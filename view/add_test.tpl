<html>

<head>

    <title>Добавяне на показател</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body style="text-align: center; font-family: monospace">
    <form action="../controller/add_test.php" method="POST">
        <h2>Добавяне на показател</h2>
        <table border="0" cellspacing="0">
            <tr>
                <td style="text-align: right; font-family: monospace"><b>Изследване:</b> </td>
                <td>
                    <input type="text" name="name" value="{$test.0.name}">
                </td>
            </tr>
            <tr>
                <td style="text-align: right;font-family: monospace"><b>Бутон:</b> </td>
                <td>
                    <input type="text" name="button" value="{$test.0.button}">
                </td>
            </tr>
            <tr>
                <td style="text-align: right;font-family: monospace"><b>Мерна единица:</b> </td>
                <td>
                    <input type="text" name="unit" value="{$test.0.unit}">
                </td>
            </tr>
            <tr>
                <td style="text-align: right;font-family: monospace"><b>Код:</b> </td>
                <td>
                    <input type="text" name="code" value="">
                </td>
            </tr>
            <tr>
                <td style="text-align: right;font-family: monospace">
                    <b>Група:</b>
                </td>
                <td>

                    <select name="flag">
                        <option value="blood">Кръв</option>
                        <option value="urine">Урина</option>
                        <option value="hormon">Хормон</option>
                        <option value="coag">Коагулация</option>
                        <option value="kzp">Кръвно-захарен профил</option>
                        <option value="mor">Er.Морфология</option>
                        <option value="s">Седимент(урина)</option>
                        <option value="ele">Електролити</option>
                        <option value="dif">Левкограма</option>
                        <option value="ourine">Микроалбуминурия</option>
                    </select>

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
            <br> Цена:
            <input type="text" name="price" size="3"> BGN
            <br>
            <br>
            <input type="submit" name="save" value="Запис"> </center>

    </form>
</body>

</html>