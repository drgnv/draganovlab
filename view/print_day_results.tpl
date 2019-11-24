<html>

<head>
    <link rel="stylesheet" href="../css/print_day_results.css">
    <title>Резултати, клинична лаборатория от {$date}</title>
</head>

<body>
    <center>
        <p id="pdr"><b>{$hospital_data.0.name}</b> | {$hospital_data.0.doctor} | <b>Резултати от дата:</b> {$date}</p>

        <table id="pdr" border="1" cellspacing="0">
            <th>№</th>
            <th>Пациент</th>
            <th>Лекар</th>
            <th>Резултати</th>
            {foreach from=$results item="result" }
            <tr>
                <td>{$result.0.number}</td>
                <td>{$result.0.names}</td>
                <td>{$result.0.doctor}</td>
                <td>

                    {foreach from=$result item="res"}
                    <b> {$res.name}</b> - {$res.result}&nbsp; {/foreach}
                </td>
            </tr>
            {/foreach}
        </table>
    </center>
</body>

</html>