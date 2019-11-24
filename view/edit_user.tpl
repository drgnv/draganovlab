<html>

<head>

</head>

<body>
    <center>
        <form action="../controller/edit_user.php?user_id={$user.0.id}" method="POST">
            <table border="1" cellspacing="0">
                <tr>
                    <td>Име: </td>
                    <td>
                        <input type="text" name="name" value="{$user.0.name}">
                    </td>
                </tr>
                <tr>
                    <td>Потребител:</td>
                    <td>
                        <input type="text" name="username" value="{$user.0.username}">
                    </td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td>
                        <input type="text" name="mail" value="{$user.0.mail}">
                    </td>
                </tr>
                <tr>
                    <td>Права: </td>
                    <td>
                        <select name="lvl">
                            {if {$user.0.lvl} == 1}
                            <option value="1" selected>Начинаещ</option>
                            <option value="2">Лаборант</option>
                            <option value="3">Администратор</option>
                            {/if} {if {$user.0.lvl} == 2}
                            <option value="1">Начинаещ</option>
                            <option value="2" selected>Лаборант</option>
                            <option value="3">Администратор</option>
                            {/if} {if {$user.0.lvl} == "3"}
                            <option value="1">Начинаещ</option>
                            <option value="2">Лаборант</option>
                            <option value="3" selected>Администратор</option>
                            {/if}
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Парола*</td>
                    <td>
                        <input type="password" name="password">
                    </td>
                </tr>
            </table>
            {$msg}

            <input type="submit" value="Запис" name="save">
            <p>{$wp}</p>
        </form>
        <hr>
        <p><i>
            *Въвевете вашата парола за да запишете промените успешно
        </i></p>
        <p><a href="">Промени парола</a></p>
    </center>
</body>

</html>