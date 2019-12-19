<html>

<head>

    <title>{$lang.add} {$lang.test}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body style="text-align: center; font-family: monospace; background-color: #34495E;color:white;">
    <form action="../controller/add_test.php" method="POST">
        <h2>{$lang.add} {$lang.test}</h2>
        <table border="0" cellspacing="0">
            <tr>
                <td style="text-align: right; font-family: monospace"><b>{$lang.test}:</b> </td>
                <td>
                    <input type="text" name="name" value="{$test.0.name}" required>
                </td>
            </tr>
            <tr>
                <td style="text-align: right;font-family: monospace"><b>Button:</b> </td>
                <td>
                    <input type="text" name="button" value="{$test.0.button}">
                </td>
            </tr>
            <tr>
                <td style="text-align: right;font-family: monospace"><b>{$lang.unit}:</b> </td>
                <td>
                    <input type="text" name="unit" value="{$test.0.unit}">
                </td>
            </tr>
            <tr>
                <td style="text-align: right;font-family: monospace"><b>{$lang.code}:</b> </td>
                <td>
                    <input type="text" name="code" value="">
                </td>
            </tr>
            <tr>
                <td style="text-align: right;font-family: monospace">
                    <b>Group:</b>
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
            <b style="font-family: monospace">{$lang.referent_norms}</b>
            <br> {$lang.from}:
            <input type="text" name="up" size="3"> | {$lang.to}:
            <input type="text" name="down" size="3">
            <br>
            <br> {$lang.price}:
            <input type="text" name="price" size="3"> BGN
            <br>
            <br>
            <input type="submit" name="save" value="{$lang.save_btn}"> </center>

    </form>
</body>

</html>