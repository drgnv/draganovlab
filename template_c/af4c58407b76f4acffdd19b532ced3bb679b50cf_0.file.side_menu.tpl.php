<?php
/* Smarty version 3.1.32, created on 2019-12-14 12:35:30
  from '/var/www/html/dlab/view/side_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df4baf23d40d2_79132924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af4c58407b76f4acffdd19b532ced3bb679b50cf' => 
    array (
      0 => '/var/www/html/dlab/view/side_menu.tpl',
      1 => 1574532242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df4baf23d40d2_79132924 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="../css/side_menu_drop_down.css">
<div class="settings-menu">

    <a href="../controller/settings.php" style="color:whitesmoke; text-decoration: none;">
        <img src="../images/settings.png" width="25" height="25">
        <b style="font-size: 18px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general_settings'];?>
</b>
    </a>
    <br>

    <div class="dropdown">

        <span>
       <a href="../controller/edit_doctors.php" style="color:whitesmoke; text-decoration: none;">
        <img src="../images/doctor.ico" width="25" height="25" >
        <b style="font-size: 18px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['doctors'];?>
</b>
    </a>
  </span>

        <div class="dropdown-content">
            <a onclick="window.open('../controller/add_doctor.php', 
                         'newwindow', 
                         'width=300,height=300')
          return false;   
          " ; id="redline" style="color: white; text-decoration: none; font-size: 15px;" href="../controller/add_doctor.php">
                <img src="../images/add.png" width="25px" height="25px"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['doctor'];?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </a>
        </div>
    </div>

    <br>
    <div class="dropdown">

        <span> <a href="../controller/edit_tests.php" style="color:whitesmoke; text-decoration: none;">
        <img src="../images/db.png" width="25" height="25" >
        <b style="font-size: 18px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tests'];?>
</b>
    </a></span>

        <div class="dropdown-content">
            <a onclick="window.open('../controller/add_test.php', 
                         'newwindow', 
                         'width=300,height=310')
          return false;   
          " ; id="redline" style="color: white; text-decoration: none; font-size: 15px;" href="../controller/add_test.php">
                <img src="../images/add.png" width="25px" height="25px"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['tests'];?>

            </a>
            <hr>

            <a id="redline" style="color: white; text-decoration: none; font-size: 15px;" href="../controller/edit_cbc.php">
                <img src="../images/cbc.png" width="25px" height="25px"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
 CBC
            </a>
            <hr>
            <a style="color: white; text-decoration: none; font-size: 15px;" href="../controller/edit_akr.php">
                <img src="../images/o2.png" width="25px" height="25px"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
 АКР
            </a>
            <hr>
            <a style="color: white; text-decoration: none; font-size: 15px;" href="../controller/edit_urine.php">
                <img src="../images/urine.png" width="25px" height="25px"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
 Urine
            </a>
            <hr>
            <a style="color: white; text-decoration: none; font-size: 15px;" href="../controller/edit_electrolites.php">
                <img src="../images/electrolites.png" width="35px" height="25px"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
 Na,K,Cl
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
        <b style="font-size: 18px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['users'];?>
</b>
    </a>
    <br>
    <a href="../controller/analizers.php" style="color:whitesmoke; text-decoration: none;">
        <img src="../images/analizer.png" width="25" height="25">
        <b style="font-size: 18px;">Анализатори</b>
    </a>
    <br>
    <a href="../controller/mdd_settings.php" style="color:whitesmoke; text-decoration: none;">
        <img src="../images/mdd.png" width="25" height="25">
        <b style="font-size: 18px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['mdds'];?>
</b>
    </a>

</div><?php }
}
