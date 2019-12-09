<html>

<head>

    <title>{$lang.add} {$lang.electro}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body style="background-color: #34495E; color:white;text-align: center; font-family: monospace">
    <form action="../controller/add_ele.php" method="POST">
        <h2>{$lang.add} {$lang.electro}</h2>
        <table border="0" cellspacing="0">
            <tr>
                <td style="text-align: right; font-family: monospace"><b>{$lang.test}</b> </td>
                <td>
                    <input type="text" name="name" value="{$test.0.name}" required>
                </td>
            </tr>

            <tr>
                <td style="text-align: right;font-family: monospace"><b>{$lang.unit}</b> </td>
                <td>
                    <input type="text" name="unit" value="{$test.0.unit}">
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
            <br>
            <br>
            <br>
            <input type="submit" name="save" value="{$lang.save_btn}"> </center>

    </form>
</body>

</html>