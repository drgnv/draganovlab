<link rel="stylesheet" type="text/css" href="../css/side_menu_drop_down.css">
<div class="settings-menu">

    <a href="../controller/settings.php" style="color:whitesmoke; text-decoration: none;">
        <img src="../images/settings.png" width="25" height="25">
        <b style="font-size: 18px;">{$lang.general_settings}</b>
    </a>
    <br>

    <div class="dropdown">

        <span>
       <a href="../controller/edit_doctors.php" style="color:whitesmoke; text-decoration: none;">
        <img src="../images/doctor.ico" width="25" height="25" >
        <b style="font-size: 18px;">{$lang.doctors}</b>
    </a>
  </span>

        <div class="dropdown-content">
            <a onclick="window.open('../controller/add_doctor.php', 
                         'newwindow', 
                         'width=300,height=300')
          return false;   
          " ; id="redline" style="color: white; text-decoration: none; font-size: 15px;" href="../controller/add_doctor.php">
                <img src="../images/add.png" width="25px" height="25px"> {$lang.add} {$lang.doctor}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </a>
        </div>
    </div>

    <br>
    <div class="dropdown">

        <span> <a href="../controller/edit_tests.php" style="color:whitesmoke; text-decoration: none;">
        <img src="../images/db.png" width="25" height="25" >
        <b style="font-size: 18px;">{$lang.tests}</b>
    </a></span>

        <div class="dropdown-content">
            <a onclick="window.open('../controller/add_test.php', 
                         'newwindow', 
                         'width=300,height=310')
          return false;   
          " ; id="redline" style="color: white; text-decoration: none; font-size: 15px;" href="../controller/add_test.php">
                <img src="../images/add.png" width="25px" height="25px"> {$lang.add} {$lang.tests}
            </a>
            <hr>

            <a id="redline" style="color: white; text-decoration: none; font-size: 15px;" href="../controller/edit_cbc.php">
                <img src="../images/cbc.png" width="25px" height="25px"> {$lang.edit} CBC
            </a>
            <hr>
            <a style="color: white; text-decoration: none; font-size: 15px;" href="../controller/edit_akr.php">
                <img src="../images/o2.png" width="25px" height="25px"> {$lang.edit} АКР
            </a>
            <hr>
            <a style="color: white; text-decoration: none; font-size: 15px;" href="../controller/edit_urine.php">
                <img src="../images/urine.png" width="25px" height="25px"> {$lang.edit} Urine
            </a>
            <hr>
            <a style="color: white; text-decoration: none; font-size: 15px;" href="../controller/edit_electrolites.php">
                <img src="../images/electrolites.png" width="35px" height="25px"> {$lang.edit} Na,K,Cl
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
        <b style="font-size: 18px;">{$lang.users}</b>
    </a>
    <br>
    <a href="../controller/analizers.php" style="color:whitesmoke; text-decoration: none;">
        <img src="../images/analizer.png" width="25" height="25">
        <b style="font-size: 18px;">Анализатори</b>
    </a>
    <br>
    <a href="../controller/mdd_settings.php" style="color:whitesmoke; text-decoration: none;">
        <img src="../images/mdd.png" width="25" height="25">
        <b style="font-size: 18px;">{$lang.mdds}</b>
    </a>
    <br>
    <a href="../controller/printouts.php" style="color:whitesmoke; text-decoration: none;">
        <img src="../images/print.png" width="25" height="25">
        <b style="font-size: 18px;">{$lang.printouts}</b>
    </a>


</div>