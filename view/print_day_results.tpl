<html>

<head>
    <link rel="stylesheet" href="../css/print_day_results.css">
    <title>Резултати, клинична лаборатория от {$date}</title>
<style>@media no-print {
        .hidden-print {
            display: none !important;
        }
    }</style>
</head>

<body>
    <center>
        <p id="pdr"><b>{$hospital_data.0.name}</b> | {$hospital_data.0.doctor} | <b>Резултати от дата:</b> {$date}</p>
        <table id="pdr" border="1" cellspacing="0">
            <th>№</th>
            <th>Пациент</th>
            <th>ЕГН</th>
            <th>Лекар</th>
            <th>УИН</th>
            <th>Резултати</th>
            {foreach from=$results item="result" }
            <tr>
                <td>{$result.0.number}</td>
                <td>{$result.0.names}</td>
                <td>{$result.0.idn}</td>
                <td>{$result.0.doctor}</td>
                <td>{$result.0.uin}</td>
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