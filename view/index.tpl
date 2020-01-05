<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>dLab Вход</title>
    <link rel="stylesheet" href="css/loginstyle.css">
</head>

<body>

    <div class="login-page">
        <div class="form">
            <img src="./images/draganovlabtransperant.png" width="150" height="150" align="center">
            <form autocomplete="off" class="login-form" action="index.php" method="post">
                <input type="text" name="username" placeholder="{$lang.username}" />
                <input type="password" name="password" placeholder="{$lang.password}" />
                <b style="color: red;">{$wrong_msg}</b>
                <button>{$lang.login_btn}</button>

            </form>
                <p><a href="support.html">{$lang.support}</a></p>
        </div>
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/loginindex.js"></script>
</body>

</html>