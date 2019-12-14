{include file="header.tpl"}

<script src="../js/jquery-3.3.1.min.js" type="text/javascript"></script>
<link href="../css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
<script>
    $(document).ready(function() {
        $(".flip").click(function() {
            $(".panel").toggle();
        });
    });
    $(document).ready(function() {
        $(".flip2").click(function() {
            $(".paneldel").toggle();
        });
    });
</script>
<style type="text/css">
    input[type=text]:focus {
        background-color: #fff3bf;
        box-shadow: #33FF33;
    }
    
    div.panel {
        height: 180px;
        display: none;
    }
    
    div.paneldel {
        height: 180px;
        display: none;
    }
    
    p.flip {
        cursor: pointer;
    }
    
    p.flip2 {
        cursor: pointer;
    }
</style>

<!--Datatables js-->

<script type="text/javascript" charset="utf8" src="../js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#journal').DataTable({
            "pageLength": 50,
            "order": [
                [3, "desc"]
            ],
            "aLengthMenu": [
                [10, 25, 50, 75, -1],
                [10, 25, 50, 75, "Всички"]
            ]
        });
    });
</script>
<script>
    function validateForm() {
        var x = document.forms["myForm"]["fname"].value;
        if (x == "") {
            alert("Name must be filled out");
            return false;
        }
    }
</script>
<!--Datatables js-->

<link href="../css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
<style>
    input[type=text]:focus {
        background-color: #fff3bf;
        box-shadow: #33FF33;
    }
</style>

<div class="content">
    {include file="top_menu.tpl"}
    <script>
        // When the user clicks on div, open the popup
        function popup() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
        }
    </script>
    <link href="../css/scroll-table.css" rel="stylesheet">
    <div class="center">

        <script>
            document.addEventListener("touchstart", function() {}, true)
        </script>
        <script type="text/javascript">
            function insertText(elemID, text) {
                var elem = document.getElementById(elemID);
                elem.innerHTML += text;
            }

            function validate(evt) {
                var theEvent = evt || window.event;

                // Handle paste
                if (theEvent.type === 'paste') {
                    key = event.clipboardData.getData('text/plain');
                } else {
                    // Handle key press
                    var key = theEvent.keyCode || theEvent.which;
                    key = String.fromCharCode(key);
                }
                var regex = /[0-9]|\./;
                if (!regex.test(key)) {
                    theEvent.returnValue = false;
                    if (theEvent.preventDefault) theEvent.preventDefault();
                }
            }
        </script>

        <table border="0" cellspacing="0" cellpadding="0" width="100%" style=" border-collapse: collapse;">
            <tr>
                <td valign="top" width="30%">
                    <div class="newp" style="width: 350px">
                        <b>{$lang.search}</b>
                        <center>
                            <table>

                                <form method="get" action="./mdds.php">
                                    <tr>
                                        <td style="color: white;" align="right">{$lang.from}:</td>
                                        <td>
                                            <input type="date" name="from" value="{$from_date}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: white;" align="right">{$lang.to}:</td>
                                        <td>
                                            <input type="date" name="to" value="{$to_date}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input type="submit" name="searchbydate" value="{$lang.search}">
                                        </td>
                                    </tr>
                                </form>

                                <tr>
                                    <td style="color: white;">{$lang.barcode}: </td>
                                    <td>
                                        <form method="GET" action="./mdds.php">
                                            <input type="hidden" name="from" value="{$date}">
                                            <input type="hidden" name="to" value="{$date}">
                                            <input type="hidden" name="searchbydate" value="Търси...">
                                            <input type="text" name="patient_id" size="16" autofocus onkeyup="submitT(this,this.form)">
                                        </form>
                                        <script language="JavaScript" type="text/JavaScript">
                                            const sleep = (milliseconds) => { return new Promise(resolve => setTimeout(resolve, milliseconds)) } var x=1;//nr characters function submitT(t,f){ if(t.value.length>x){ sleep(200).then(() => { f.submit() }) } }
                                        </script>
                                    </td>
                                </tr>
                            </table>
                        </center><img style="cursor: pointer" src="../images/refresh.png" width="25px" height="25px" align="right" onClick="window.location.reload();"><br>

                        <div id="table-wrapper">
                            <div id="table-scroll">
                                <table id="journa122" class="lp" width="4350">
                                    <thead>

                                        <th style="display:none;">егн</th>
                                        <th style="display:none;">id</th>
                                        <th title="{$lang.status}">С</th>
                                        <th>ID</th>
                                        <th>{$lang.patient}</th>

                                    </thead>
                                    <tbody>
                                        {assign var="un" value="1"} {foreach from=$dayList item=result}
                                        <tr style="background-color: white; cursor: pointer;" data-href="../controller/mdds.php?patient_id={$result.id}&from={$from_date}&to={$to_date}&searchbydate=Търси...">
                                            <td>
                                                {if {$result.over} == "on"}
                                                <b hidden="true">a</b> <img src="../images/over.PNG" width="20" height="20"> {/if} {if {$result.over} !== "on"} <b hidden="true">b</b>
                                                <img src="../images/notover.PNG" width="20" height="20"> {/if}
                                            </td>
                                            <td style="display:none;">{$result.idn}</td>
                                            <td style="display:none;">{$result.id}</td>
                                            <td style="color: black;" onclick="window.location='#';">{$result.number}</td>
                                            <td style="color: black;" onclick="window.location='#';">
                                                {if {$result.pay} == "on"}
                                                <b hidden="true">a</b> <img title="ПЛАТЕНО" src="../images/dollar-symbol.png" width="25" height="25"> {/if} {if {$result.pay} !== "on"} <b hidden="true">b</b> {/if} {if {$result.cito} == "on"}<b style="color: red;">
                                                    {if strlen({$result.comment})>1}   <div class="tooltip">
                                                        {$result.names}
                                                        {if strlen({$result.comment})>1}
                                                            <span class="tooltiptext">{$result.comment}</span>
                                                        {/if}
                                                        </div>{/if}
                                                    </b>{/if} {if {$result.cito} !== "on"}
                                                <div class="tooltip">
                                                    {$result.names}{if strlen({$result.comment})>1}<span class="tooltiptext">{$result.comment}</span>{/if}
                                                </div>
                                                {/if}
                                            </td>
                                        </tr>
                                        <b style="visibility: hidden; font-size: 0px;"> {$un++}</b> {/foreach}

                                    </tbody>

                                </table>
                            </div>
                        </div>
                        </form>
                    </div>
                </td>
                <!-- =========ДЕСЕН ПАНЕЛ========= -->
                <td valign="top" width="70%">
                    <div class="lp">
                        
                        {if isset({$data.0.patient_id}) && {$data.0.patient_id} >0}
                           
                        <table border="0">
                            <tr>
                                <td>{include file="mdd_menu.tpl"}</td>
                            </tr>
                            <tr>
                                <!--===========EDIT MDD=========-->
                                <td width="810px">
                                    {if $mdd_is_set == true} 
                                    <form action="./mdds.php?mdd_id={$mddid}&patient_id={$data.0.patient_id}&from={$from_date}&to={$to_date}&searchbydate=Търси..." method="post">

                                        <table border="0">
                                            <tr>
                                                <td align="right" colspan="4">
                                                    <i style="color: white;">{$lang.idn}:</i>

                                                    <input name="idn" size="10" type="text" value="{$data.0.idn}">
                                                    <i style="color: white;">{$lang.name}:</i>
                                                    <input name="names" value="{$data.0.names}" type="text" size="30px">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <i style="color: white;">{$lang.issued}:</i>
                                                </td>
                                                <td>
                                                    <input name="out_date" value="{$mdd.0.out_date}" style="width: 120px" type="date">
                                                </td>
                                                <td align="right">
                                                    <i style="color: white;">{$lang.done}:</i>
                                                </td>
                                                <td>
                                                    <input name="complete_date" value="{$mdd.0.complete_date}" style="width: 120px" type="date">
                                                </td>
                                                <td align="right" style="width: 75px">
                                                    <i style="color: white;">{$lang.nmdd}: </i>
                                                </td>
                                                <td>
                                                    <input name="nmdd" style="width: 97px" value="{$mdd.0.num_mdd}" type="text">
                                                </td>
                                                <td align="right">
                                                    <i style="color: white;"> {$lang.al} №:</i>
                                                </td>
                                                <td>
                                                    <input name="alnum" style="width: 50px" value="{$mdd.0.al_num}" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right">
                                                    <i style="color: white;">{$lang.doctor}:</i>
                                                </td>
                                                <td>
                                                    <select name="doctor_id">
                                                        {foreach from=$doctors item=doctor} {if $mdd.0.doctor_id == $doctor.id}
                                                        <option value="{$doctor.doctor_id}" selected="true">{$doctor.doctor}</option>
                                                        {else}
                                                        <option value="{$doctor.doctor_id}">{$doctor.doctor}</option>
                                                        {/if} {/foreach}
                                                    </select>

                                                </td>
                                                <td align="right">
                                                    
                                                    <i style="color: white;">{$lang.code}:</i>
                                                    <input name="code1" style="width: 40px" value="{$mdd.0.code1}" type="text">
                                                </td>

                                                <td align="right">
                                                    <i style="color: white;">{$lang.uin}:</i>
                                                    <input name="uin" style="width: 100px" value="{$mdd.0.uin}" type="text">
                                                </td>

                                                <td align="right">
                                                    <i style="color: white;">{$lang.rzc} {$lang.code}:</i>
                                                </td>
                                                <td>
                                                    <input name="rzc_code" value="{$mdd.0.rzk}" style="width: 100px" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <i style="color: white;">{$lang.zam_naet}:</i>
                                                    <input name="zam_naet" style="width: 100px" type="text">
                                                </td>
                                                <td align="right" colspan="2">
                                                    <i style="color: white;">{$lang.uin} {$lang.zam_naet}:</i>

                                                    <input name="uin_zam_naet" style="width: 100px" type="text">
                                                </td>
                                                <td align="right">
                                                    <i style="color: white;">{$lang.nzok} №:</i>
                                                </td>
                                                <td>
                                                    <input name="nzok" value="{$mdd.0.nzok_num}" style="width: 100px" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" colspan="3">
                                                    <i style="color: white;">{$lang.done}  {$lang.laboratory}:</i>
                                                </td>
                                                <td colspan="4">
                                                    <input name="uin_zam_naet" style="width: 400px" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right">
                                                    <i style="color: white;">{$lang.mkb} 10:</i>
                                                </td>
                                                <td colspan="4">
                                                    <input name="mkb" style="width: 45px" value="{$mdd.0.mkb}" type="text">

                                                    <input name="mkbdesc" style="width: 390px" type="text" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right">
                                                    <i style="color: white;">МКБ 10 (2):</i>
                                                </td>
                                                <td colspan="4">
                                                    <input name="mkb2" value="{$mdd.0.mkb2}" style="width: 45px" type="text">
                                                    <input name="mkb2desc" style="width: 390px" type="text" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" style="color: white">{$lang.pack}:</td>
                                                <td>
                                                    <select name="paket">
                                                        <option value="1">{$lang.pack} {$lang.clinical} {$lang.laboratory}</option>
                                                    </select>
                                                </td>
                                                <td align="right" style="color: white">{$lang.code}:</td>
                                                <td colspan="3">
                                                    <input type="number" name="code2" value="{$mdd.0.code2}" style="width: 40px;">
                                                    <i style="color: white">{$lang.type} {$lang.nmdd}:</i>

                                                    <select name="mdd_type" style="width: 200px">
                                                        {foreach from=$mdd_types item=mdd_type} {if $mdd.0.type_mdd_id == $mdd_type.id}
                                                        <option value="{$mdd_type.id}" selected="=true">{$mdd_type.number}. {$mdd_type.name}</option>
                                                        {else}
                                                        <option value="{$mdd_type.id}">{$mdd_type.number}. {$mdd_type.name}</option>

                                                        {/if} {/foreach}
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5">
                                                    <i style="color: white;">{$lang.codes_by_tests}:
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                            {$lang.fee} Б.М.
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                            {$lang.price}</i>
                                                    <br>
                                                    <input type="text" name="code1t" value="{$mdd.0.test_code1}" style="width: 40px;">&nbsp;&nbsp;
                                                    <input type="text" name="code2t" value="{$mdd.0.test_code2}" style="width: 40px;">&nbsp;&nbsp;
                                                    <input type="text" name="code3t" value="{$mdd.0.test_code3}" style="width: 40px;">&nbsp;&nbsp;
                                                    <input type="text" name="code4t" value="{$mdd.0.test_code4}" style="width: 40px;">&nbsp;&nbsp;
                                                    <input type="text" name="code5t" value="{$mdd.0.test_code5}" style="width: 40px;">&nbsp;&nbsp;
                                                    <input type="text" name="code6t" value="{$mdd.0.test_code6}" style="width: 40px;">&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <input type="text" name="taxa_bm" style="width: 50px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <input type="text" name="total_price" style="width: 50px;">
                                                    <input type="hidden" name="mdd_id" value="{$mdd.0.id}">
                                             
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div style="background-color: green;color: white;">{$updated}</div>
                                                    <input type="submit" name="save" value="{$lang.save_btn}">
                                                </td>
                                            </tr>
                                        </table>

                                    </form>
                                    {/if}
                                </td>
                                <!--===========РЕДАКТИРАНЕ НА НАПРАВЛЕНИЕ КРАЙ=========-->
                                <!--===========СПИСЪК С НАПРАВЛЕНИЯ НАЧАЛО=========-->
                                <td >
                                    <div id="table-wrapper">
                                        <div id="table-scroll">
                                            <table id="journa122" class="lp" width="50">
                                                <thead>
                                                    <th>{$lang.date}</th>
                                                </thead>
                                                <tbody>
                                                    {foreach from=$mdds item=mdd}
                                                        <tr style="cursor: pointer;" data-href="../controller/mdds.php?mdd_id={$mdd.id}&patient_id={$data.0.patient_id}&from={$from_date}&to={$to_date}&searchbydate=Търси...">

                                                        <td>
                                                            {$mdd.complete_date}
                                                        </td>
                                                    </tr>
                                                    {/foreach}
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </td>
                                <!--===========СПИСЪК С НАПРАВЛЕНИЯ КРАЙ=========-->
                            </tr>
                        </table>
                        {else}
                        <p>
                            ⇦{$lang.choose_from_left}
                        </p>
                        {/if}
        </table>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/jquery.formnavigation.js"></script>
        <script>
            $(document).ready(function() {
                $('.gridexample').formNavigation();
            });
        </script>
        </div>
        <script>
            $('tr[data-href]').on("click", function() {
                document.location = $(this).data('href');
            });
        </script>

    </div>
    {include file="footer.tpl"}