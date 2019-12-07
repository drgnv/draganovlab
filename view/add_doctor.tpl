<html>

<head>
    <title>{$lang.add} {$lang.doctor}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div>
        <h3>{$lang.add} {$lang.doctor}</h3>
        <form action="../controller/add_doctor.php" method="POST">
            <table border="1" cellspacing="0">
                <tr>
                    <td>{$lang.name}:</td>
                    <td>
                        <input type="text" name="name" required>
                    </td>
                </tr>
                <tr>
                    <td>{$lang.phone}:</td>
                    <td>
                        <input type="text" name="phone">
                    </td>
                </tr>
                <tr>
                    <td>{$lang.phone} 2:</td>
                    <td>
                        <input type="text" name="phone2">
                    </td>
                </tr>
                <tr>
                    <td>{$lang.uin}:</td>
                    <td>
                        <input type="text" name="uin">
                    </td>
                </tr>
            </table>

            <p>
                <input type="submit" value="{$lang.add}">
            </p>
        </form>

    </div>
</body>

</html>