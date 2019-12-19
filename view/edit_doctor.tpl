<html>

<head>
    <title>{$lang.edit} {$lang.doctor}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body style="background-color: #34495E; color:white;text-align: center; font-family: monospace">
    <div>
        <h3>{$lang.edit} {$lang.doctor}</h3>
        <form action="../controller/edit_doctor.php?editdoc={$doc_info.0.doctor_id}" method="POST">
            <table border="0" cellspacing="0" style="border-collapse: collapse;">
                <tr>
                    <td>{$lang.name}:</td>
                    <td>
                        <input type="text" name="name" value="{$doc_info.0.doctor}" required>
                    </td>
                </tr>
                <tr>
                    <td>{$lang.phone}:</td>
                    <td>
                        <input type="text" name="phone" value="{$doc_info.0.phone}">
                    </td>
                </tr>
                <tr>
                    <td>{$lang.phone} 2:</td>
                    <td>
                        <input type="text" name="phone2" value="{$doc_info.0.phone2}">
                    </td>
                </tr>
                <tr>
                    <td>{$lang.uin}:</td>
                    <td>
                        <input type="text" name="uin" value="{$doc_info.0.uin}">
                    </td>
                </tr>
            </table>

            <p>
                <div style="background-color: darkgreen;color: white;">{$saved_msg}</div>
                <input type="submit" name="submit" value="{$lang.edit}">
            </p>
        </form>

    </div>
</body>

</html>