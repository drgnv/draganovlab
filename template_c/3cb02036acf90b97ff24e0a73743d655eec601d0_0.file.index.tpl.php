<?php
/* Smarty version 3.1.32, created on 2019-11-30 07:35:22
  from '/var/www/html/dlab/view/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5de1ff9a21a230_70298444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cb02036acf90b97ff24e0a73743d655eec601d0' => 
    array (
      0 => '/var/www/html/dlab/view/index.tpl',
      1 => 1575092120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de1ff9a21a230_70298444 (Smarty_Internal_Template $_smarty_tpl) {
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
                <input type="text" name="username" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['username'];?>
" />
                <input type="password" name="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['password'];?>
" />
                <b style="color: red;"><?php echo $_smarty_tpl->tpl_vars['wrong_msg']->value;?>
</b>
                <button><?php echo $_smarty_tpl->tpl_vars['lang']->value['login_btn'];?>
</button>

            </form>
                <p><a href="support.html"><?php echo $_smarty_tpl->tpl_vars['lang']->value['support'];?>
</a></p>
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
