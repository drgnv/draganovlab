<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head id="headPatResult">
    <title>

    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="../css/PatRes.css" type="text/css" rel="Stylesheet" media="screen" />
    <link href="../css/PatResPrint.css" type="text/css" rel="Stylesheet" media="print" />
</head>

<body>

    <div class="Main">
        <div class="ResultHeader">
            <!-- Result head -->
            <h1>
                {$hospital.0.name}</h1>
            <h2>
                {$hospital.0.address}, тел: {$hospital.0.phone}, {$hospital.0.web}, e-mail: {$hospital.0.mail}</h2>
            <table>
                <tr>
                    <th class="WoB">
                        {$patient.0.date}
                    </th>
                    <th class="WoG">
                        {$patient.0.names}
                    </th>
                    <th style="width:30px;">
                        ID
                    </th>
                    <th class="WoB" style="text-align:center;">
                        {$patient.0.number}
                    </th>
                </tr>
            </table>

            <table>
                <tr>
                    <td style="width:110px;">Лекуващ лекар</td>
                    <td>
                        {$patient.0.doctor}
                    </td>
                    <td style="width:80px;"></td>
                    <td style="width:120px;">

                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="width:110px;">Лекар клинична лаборатория</td>

                    <td style="width:150px;">{$hospital.0.doctor}</td>
                    <td>

                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="width:110px;"></td>
                    <td></td>
                </tr>
            </table>

        </div>
        <div class="Resultdetails">

            <table>
                <thead>
                    <tr>
                        <th class="NameHeader">Име на теста (изследване)</th>
                        <th class="ResultHeader">Резултат</th>
                        <th class="UnitsHeader">Единици</th>
                        <th class="RangeHeader">Референтни стойности</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$patient item=result}
                    <tr>
                        <td>{$result.name}</td>
                        <td class="Result">{$result.result}</td>
                        <td>{$result.unit}</td>
                        <td>{$result.up} - {$result.down}</td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
        <div class="Footer">
            <p class="Note">
                <b>Коментар на резултатите:</b> {$patient.0.comment}
            </p>
            <p class="Note">
                {$hospital.0.note}
            </p>
            <p class="Copyright">
                Справката е отпечатана на {$dd} Лабораторна Информационна Система dLab. (C)
            </p>{$code}
            <center>{$codenumber}</center>
        </div>
    </div>

</body>

</html>