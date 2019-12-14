<html>

<head>

    <title>Редактиране на {$test.0.name}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body style="background-color: #34495E; color:white;text-align: center; font-family: monospace">
    <form action="../controller/edit_cbc_component.php?id={$test.0.id}" method="POST">
        <table border="0" cellspacing="0">
            <tr>
                <td style="text-align: right; font-family: monospace"><b>Изследване:</b> </td>
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
                        {if {$test.0.flag} == 'blood'}
                        <option value="blood" selected="true">Кръв</option>
                        {else}
                        <option value="blood">Кръв</option>
                        {/if} {if {$test.0.flag} == 'ele'}
                        <option value="ele" selected="true">Електролити</option>
                        {else}
                        <option value="ele">Електролити</option>
                        {/if} {if {$test.0.flag} == 'urine'}
                        <option value="urine">Урина</option>
                        {else}
                        <option value="urine">Урина</option>
                        {/if} {if {$test.0.flag} == 'hormon'}
                        <option value="hormon" selected="true">Хормон</option>
                        {else}
                        <option value="hormon">Хормон</option>
                        {/if} {if {$test.0.flag} == 'cbc'}
                        <option value="cbc" selected="true">ПКК</option>
                        {else}
                        <option value="cbc">ПКК</option>
                        {/if}

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