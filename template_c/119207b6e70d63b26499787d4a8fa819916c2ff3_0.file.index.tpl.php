<?php
/* Smarty version 3.1.32, created on 2019-05-22 15:23:58
  from 'C:\xampp\htdocs\dlab\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ce54d6eac9792_56433079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '119207b6e70d63b26499787d4a8fa819916c2ff3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dlab\\view\\index.tpl',
      1 => 1558021791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce54d6eac9792_56433079 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>dLab Вход</title>
    <link rel="stylesheet" href="css/loginstyle.css">
</head>

<body>

    <div class="login-page">
        <center><img src="./images/draganovlabtransperant.png" width="250" height="90" align="cente">4.1v ©</center>
        <div class="form">

            <form autocomplete="off" class="login-form" action="index.php" method="post">
                <input type="text" name="username" placeholder="Потребителско име" />
                <input type="password" name="password" placeholder="Парола" />
                <b style="color: red;"><?php echo $_smarty_tpl->tpl_vars['wrong_msg']->value;?>
</b>
                <button>Вход</button>

            </form>
                <p><a href="support.html">Поддръжка</a></p>
        </div>
    </div>
    <?php echo '<script'; ?>
 src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/loginindex.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
