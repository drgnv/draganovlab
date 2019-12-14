<div>
    <a href="../controller/add_mdd.php?patient_id={$data.0.patient_id}"  style="color: white; text-decoration: none;"
       
       onclick="window.open('../controller/add_mdd.php?patient_id={$data.0.patient_id}',
                                               'newwindow',
                                               'width=990,height=650');
                                               return false;"

       
       >
        <img src="../images/add.png" width="25" height="25"> {$lang.add} {$lang.mdds}
    </a> | 
    <a href=""  style="color: white; text-decoration: none;">
        <img src="../images/delete.png" width="25" height="25"> {$lang.delete} {$lang.mdds}
    </a>
</div>