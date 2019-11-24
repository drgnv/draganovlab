<?php
/* Smarty version 3.1.32, created on 2019-05-12 17:41:56
  from 'C:\xampp\htdocs\draganovlab401\view\side_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cd83ec43e6107_33769565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b74e53c79e71b823a84ae10f29601e86a78024d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\draganovlab401\\view\\side_menu.tpl',
      1 => 1557675662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd83ec43e6107_33769565 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="../css/side_menu_drop_down.css">
<div class="settings-menu">

    <a href="../controller/settings.php" style="color:whitesmoke; text-decoration: none;">
        <img src="../images/settings.png" width="25" height="25">
        <b style="font-size: 18px;">Общи настройки</b>
    </a>
    <br>

    <div class="dropdown">

        <span>
       <a href="../controller/edit_doctors.php" style="color:whitesmoke; text-decoration: none;">
        <img src="../images/doctor.ico" width="25" height="25" >
        <b style="font-size: 18px;">Лекари</b> 
    </a>
  </span>

        <div class="dropdown-content">
            <a onclick="window.open('../controller/add_doctor.php', 
                         'newwindow', 
                         'width=300,height=300')
          return false;   
          " ; id="redline" style="color: white; text-decoration: none; font-size: 15px;" href="../controller/add_doctor.php">
                <img src="../images/add.png" width="25px" height="25px"> Добави Лекар&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </a>
        </div>
    </div>

    <br>
    <div class="dropdown">

        <span> <a href="../controller/edit_tests.php" style="color:whitesmoke; text-decoration: none;">
        <img src="../images/db.png" width="25" height="25" >
        <b style="font-size: 18px;">Изследвания</b> 
    </a></span>

        <div class="dropdown-content">
            <a onclick="window.open('../controller/add_test.php', 
                         'newwindow', 
                         'width=300,height=310')
          return false;   
          " ; id="redline" style="color: white; text-decoration: none; font-size: 15px;" href="../controller/add_test.php">
                <img src="../images/add.png" width="25px" height="25px"> Добави изследване
            </a>
            <hr>

            <a id="redline" style="color: white; text-decoration: none; font-size: 15px;" href="../controller/edit_cbc.php">
                <img src="../images/cbc.png" width="25px" height="25px"> Редактирай ПКК
            </a>
            <hr>
            <a style="color: white; text-decoration: none; font-size: 15px;" href="../controller/edit_akr.php">
                <img src="../images/o2.png" width="25px" height="25px"> Редактирай АКР
            </a>
            <hr>
            <a style="color: white; text-decoration: none; font-size: 15px;" href="../controller/edit_urine.php">
                <img src="../images/urine.png" width="25px" height="25px"> Редактирай Урина
            </a>
            <hr>
            <a style="color: white; text-decoration: none; font-size: 15px;" href="../controller/edit_electrolites.php">
                <img src="../images/electrolites.png" width="35px" height="25px"> Редактирай Електролити
            </a>

        </div>

    </div>
    <br>
    <a href="../controller/statistics.php" style="color:whitesmoke; text-decoration: none;">
        <img src="../images/statistics.png" width="25" height="25">
        <b style="font-size: 18px;">Статистики</b>
    </a>
    <br>
    <a href="../controller/users.php" style="color:whitesmoke; text-decoration: none;">
        <img src="../images/users.png" width="25" height="25">
        <b style="font-size: 18px;">Потребители</b>
    </a>
    <br>
    <a href="../controller/analizers.php" style="color:whitesmoke; text-decoration: none;">
        <img src="../images/analizer.png" width="25" height="25">
        <b style="font-size: 18px;">Анализатори</b>
    </a>
    <br>
    <a href="../controller/mdd_settings.php" style="color:whitesmoke; text-decoration: none;">
        <img src="../images/mdd.png" width="25" height="25">
        <b style="font-size: 18px;">Направления</b>
    </a>

</div><?php }
}
