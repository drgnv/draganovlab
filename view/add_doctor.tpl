<html>

<head>
    <title>Добави лекар</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div>
        <h3>Добави лекар</h3>
        <form action="../controller/add_doctor.php" method="POST">
            <table border="1" cellspacing="0">
                <tr>
                    <td>Имена:</td>
                    <td>
                        <input type="text" name="name" required>
                    </td>
                </tr>
                <tr>
                    <td>Телефон:</td>
                    <td>
                        <input type="text" name="phone">
                    </td>
                </tr>
                <tr>
                    <td>Телефон 2:</td>
                    <td>
                        <input type="text" name="phone2">
                    </td>
                </tr>
                <tr>
                    <td>УИН:</td>
                    <td>
                        <input type="text" name="uin">
                    </td>
                </tr>
            </table>

            <p>
                <input type="submit" value="Добави">
            </p>
        </form>

    </div>
</body>

</html>