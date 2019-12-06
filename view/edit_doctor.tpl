<html>

<head>
    <title>Редактирай лекар</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body style="font-family: Monospace;">
    <div>
        <h3>Редактирай лекар</h3>
        <form action="../controller/edit_doctor.php?editdoc={$doc_info.0.doctor_id}" method="POST">
            <table border="1" cellspacing="0" style="border-collapse: collapse;">
                <tr>
                    <td>Имена:</td>
                    <td>
                        <input type="text" name="name" value="{$doc_info.0.doctor}" required>
                    </td>
                </tr>
                <tr>
                    <td>Телефон:</td>
                    <td>
                        <input type="text" name="phone" value="{$doc_info.0.phone}">
                    </td>
                </tr>
                <tr>
                    <td>Телефон 2:</td>
                    <td>
                        <input type="text" name="phone2" value="{$doc_info.0.phone2}">
                    </td>
                </tr>
                <tr>
                    <td>УИН:</td>
                    <td>
                        <input type="text" name="uin" value="{$doc_info.0.uin}">
                    </td>
                </tr>
            </table>

            <p>
                <input type="submit" name="submit" value="Редактирай">
            </p>
        </form>

    </div>
</body>

</html>