{include file="header.tpl"}
<!--Datatables js-->

<script type="text/javascript" charset="utf8" src="../js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#tests').DataTable({
            "pageLength": 10,
            "paging": false,
            "scrollY":        "380px",
            "scrollCollapse": true,
            "paging":         false,
            "bInfo" : false,
            "responsive": true
        });
    });
</script>
<style>
    th {
        color: white;
    }




</style>
<!--Datatables js-->
<div class="content">
    {include file="top_menu.tpl"}
</div>
<div class="content">
    {include file="side_menu.tpl"}

    <div class="center">
        <div class="edit-doctors">
            <h1 style=" font-size: 25px;">{$lang.printouts}</h1>


            <hr>
            <p style="font-size: 15px" align="left">Печат на изследвания, назначени за пациент</p>
            <form action="../controller/printouts.php" method="POST">
                <i style="font-size: 15px;">{$lang.idn}:</i><input size="10" type="text" name="patient_idn">
                <i style="font-size: 15px;">{$lang.type}:</i> <select name="mode">
                    <option value="all">{$lang.all}</option>
                    <option value="dates">{$lang.date}</option>
                </select>
                <i style="font-size: 15px;">{$lang.from}:</i> <input type="date" name="start_date">
                <i style="font-size: 15px;">{$lang.to}:</i><input type="date" name="end_date">
                <input type="submit" name="patient" value="{$lang.print}">
            </form>
            <hr>

            <hr>
            <p style="font-size: 15px" align="left">Печат на изследвания, назначени от конкретен лекар</p>
            <form action="../controller/printouts.php" method="POST">
                <input list="hosting-plan" placeholder="{$lang.doctor}" type="text" size="14"  name='doctor_id'>
                <datalist id="hosting-plan">
                    {foreach from=$doctors item=doctor}
                        <option value="{$doctor.doctor_id}" >{$doctor.doctor}</option> {/foreach}
                </datalist>
                <i style="font-size: 15px;">{$lang.type}:</i> <select name="mode">
                    <option value="all">{$lang.all}</option>
                    <option value="dates">{$lang.date}</option>
                </select>

                <i style="font-size: 15px;">{$lang.from}:</i> <input type="date" name="start_date">
                <i style="font-size: 15px;">{$lang.to}:</i><input type="date" name="end_date">
                <input type="submit" name="doctor" value="{$lang.print}">
            </form>
            <hr>

            <hr>
            <p style="font-size: 15px" align="left">Печат на изследвания</p>
            <form action="../controller/printouts.php" method="POST">
                <i style="font-size: 15px;">{$lang.type}:</i> <select name="mode">
                    <option value="all">{$lang.all}</option>
                    <option value="dates">{$lang.date}</option>
                </select>
                <i style="font-size: 15px;">{$lang.from}:</i> <input type="date" name="start_date">
                <i style="font-size: 15px;">{$lang.to}:</i><input type="date" name="end_date">
                <input type="submit" name="tests" value="{$lang.print}">
            </form>
            <hr>


        </div>
    </div>
</div>
{include file="footer.tpl"}