<center>
    <h3 style="font-family: fantasy;">{$lang.add} {$lang.user}</h3>
    <form action="../controller/add_user.php" method="POST">
        </p>
        <p>
            <input name="new_name" type="text" placeholder="{$lang.name}" maxlength="30" required>
        </p>
        <p>
            <input name="new_username" type="text" placeholder="{$lang.username}" maxlength="20" required>
        </p>
        <p>
            <input name="new_password" type="password" placeholder="{$lang.password}" maxlength="20" required>
        </p>
        <p>
            <input name="new_password2" type="password" placeholder="{$lang.password}" maxlength="20" required>
        </p>
        <p> <b style="font-family: fantasy; font-size: 14px;">Ниво: </b>
            <select placeholder="1" name="lvl">
                <option value="1">Начинаещ</option>
                <option value="2">Лаборант</option>
                <option value="3">Администратор</option>
            </select>
        </p>
        <p>
            <input name="add" type="submit" value="{$lang.add}">
        </p>
        <p style="color: {$color}">{$err}</p>
    </form>
</center>