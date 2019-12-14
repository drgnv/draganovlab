<html>

<head>

    <title>Редактиране на {$test.0.name}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body style="background-color: #34495E; color:white;text-align: center; font-family: monospace">
    <p>{$lang.edit} {$test.0.name}</p>
    <form action="../controller/edit_akr_component.php?id={$test.0.id}" method="POST">
        <table border="0" cellspacing="0">
            <tr>
                <td style="text-align: right; font-family: monospace"><b>{$lang.test}:</b>
                </td>
                <td>
                    <input type="text" name="name" value="{$test.0.name}">
                </td>
            </tr>

            <tr>
                <td style="text-align: right;font-family: monospace"><b>{$lang.unit}:</b> </td>
                <td>
                    <input type="text" name="unit" value="{$test.0.unit}">
                </td>
            </tr>
            <tr style="display: none;">
                <td style="text-align: right; font-family: monospace"><b>{$lang.code}:</b> </td>
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
            <b style="font-family: monospace">{$lang.referent_norms}</b>
            <br> {$lang.from}:
            <input type="text" name="up" value="{$test.0.up}" size="3"> | {$lang.to}:
            <input type="text" name="down" value="{$test.0.down}" size="3">
            <br>
            <br>
            <input style="display: none;" type="text" name="price" value="{$test.0.price}" size="3">
            <br>
            <br>
            <input type="submit" name="save" value="{$lang.save_btn}"> </center>

    </form>
</body>

</html>