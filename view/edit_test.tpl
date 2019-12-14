<html>

<head>

    <title>Редактиране на {$test.0.name}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body style="background-color: #34495E; color:white;text-align: center; font-family: monospace">
    <form action="../controller/edit_test.php?id={$test.0.id}" method="POST">
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
                    <input type="text" name="code" value="{$test.0.code}">
                </td>
            </tr>
            <tr>
                <td style="text-align: right;font-family: monospace">
                    <b>Група:</b>
                </td>
                <td>
                    <select name="flag">
                        {if {$test.0.flag} == 'blood'}
                        <option value="blood" selected="true">Кръв</option>
                        {else}
                        <option value="blood" selected="true">Кръв</option>
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
                        {/if} {if {$test.0.flag} == 'coag'}
                        <option value="coag" selected="true">Коагулация</option>
                        {else}
                        <option value="coag">Коагулация</option>
                        {/if} {if {$test.0.flag} == 'kzp'}

                        <option value="kzp" selected="true">Кръвно-захарен профил</option>
                        {else}
                        <option value="kzp">Кръвно-захарен профил</option>
                        {/if} {if {$test.0.flag} == 'mor'}
                        <option value="mor" selected="true">Er.Морфология</option>
                        {else}
                        <option value="mor">Er.Морфология</option>
                        {/if} {if {$test.0.flag} == 's'}
                        <option value="s" selected="true">Седимент(урина)</option>
                        {else}
                        <option value="s">Седимент(урина)</option>
                        {/if} {if {$test.0.flag} == 'ele'}
                        <option value="ele" selected="true">Електролити</option>
                        {else}
                        <option value="ele">Електролити</option>
                        {/if} {if {$test.0.flag} == 'dif'}
                        <option value="dif" selected="true">Левкограма</option>
                        {else}
                        <option value="dif">Левкограма</option>
                        {/if} {if {$test.0.flag} == 'ourine'}
                        <option value="ourine">Микроалбуминурия</option>
                        {else}
                        <option value="ourine">Микроалбуминурия</option>
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
            <br> Цена:
            <input type="text" name="price" value="{$test.0.price}" size="3"> BGN
            <br>
            <br>
            <input type="submit" name="save" value="Запис"> </center>

    </form>
</body>

</html>