{include file="header.tpl"}
<!--Datatables js-->

<script type="text/javascript" charset="utf8" src="../js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#journal').DataTable( {
            "pageLength": 50,
            "order": [[ 3, "desc" ]],
            "aLengthMenu": [[10, 25, 50, 75, -1], [10, 25, 50, 75, "Всички"]]
        } );
    } );

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
    <div class="center" >

        <script>document.addEventListener("touchstart", function(){}, true)</script>
        <script type="text/javascript">
            function insertText(elemID, text)
            {
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
                if( !regex.test(key) ) {
                    theEvent.returnValue = false;
                    if(theEvent.preventDefault) theEvent.preventDefault();
                }
            }
        </script>

        <table border="0" cellspacing="0" cellpadding="0" width="100%" style=" border-collapse: collapse;"><tr>
                <td valign="top" width="30%" >
                  <div class="newp" style="width: 350px">
                        <b>Търсене</b>
                      <center>
                          <table>

                                  <form method="get" action="./laboratory.php">
                                      <tr> <td style="color: white;" align="right">От:</td><td><input type="date" name="from" value="{$date}"></td></tr>
                                      <tr>  <td style="color: white;" align="right">От:</td><td><input type="date" name="to" value="{$date}"></td></tr>
                                      <tr><td></td>  <td><input type="submit" name="searchbydate" value="Търси..."></td></tr>
                                  </form>

                              <tr>
                                  <td style="color: white;">Баркод: </td><td>
                                      <form method="GET" action="./laboratory.php">
                                          <input type="hidden" name="from" value="{$date}">
                                          <input type="hidden" name="to"value="{$date}" >
                                          <input type="hidden" name="searchbydate" value="Търси...">
                                          <input type="text" name="patient_id" size="16"  autofocus onkeyup="submitT(this,this.form)">
                                      </form>
                                      <script language="JavaScript" type="text/JavaScript">
                                          const sleep = (milliseconds) => {
                                              return new Promise(resolve => setTimeout(resolve, milliseconds))
                                          }

                                          var x=1;//nr characters
                                          function submitT(t,f){
                                              if(t.value.length>x){
                                                  sleep(200).then(() => {
                                                  f.submit()
                                                  })
                                              }
                                          }
                                      </script>
                                  </td>
                              </tr>
                          </table></center>
                          <div id="table-wrapper">
                              <div id="table-scroll">
                      <table id="journa122" class="lp" width="4350" >
                          <thead>

                              <th style="display:none;">егн</th>
                              <th style="display:none;">id</th>
                              <th>ID</th>
                              <th>Пациент</th>

                          </thead>
                          <tbody>
                          {assign var="un" value="1"}
                          {foreach from=$dayList item=result}

                              <tr style="background-color: white; cursor: pointer;" data-href="../controller/laboratory.php?patient_id={$result.id}&from={$date}&to={$date}&searchbydate=Търси...">
                                  <td style="display:none;">{$result.idn}</td>
                                  <td style="display:none;">{$result.id}</td>

                                  <td style="color: black;" onclick="window.location='#';">{$result.number}</td>
                                  <td style="color: black;" onclick="window.location='#';">
                                      {if {$result.pay} == "on"}
                                          <b hidden="true">a</b>   <img title="ПЛАТЕНО" src="../images/dollar-symbol.png" width="25" height="25">
                                      {/if}
                                      {if {$result.pay} !== "on"} <b hidden="true">b</b>
                                      {/if}
                                      {if {$result.cito} == "on"}<b style="color: red;">
                                          {if strlen({$result.comment})>1}   <div class="tooltip">
                                              {$result.names}
                                              {if strlen({$result.comment})>1}
                                                  <span class="tooltiptext">{$result.comment}</span>
                                              {/if}
                                              </div>{/if}
                                          </b>{/if}
                                      {if {$result.cito} !== "on"}
                                          <div class="tooltip">
                                              {$result.names}{if strlen({$result.comment})>1}<span class="tooltiptext">{$result.comment}</span>{/if}
                                          </div>
                                      {/if}
                                  </td>

                              </tr>
                              <b style="visibility: hidden;"> {$un++}</b>
                          {/foreach}

                          </tbody>

                      </table>
                              </div></div>
                      </form>
                    </div></td>
                <td valign="top" width="70%">


        <div class="lp">
            {if isset({$data.0.patient_id}) && {$data.0.patient_id} >0}
          <table>  <tr><td>
                      <form autocomplete="off" action="../controller/laboratory.php?patient_id={$data.0.patient_id}&from={$date}&to={$date}" method="POST" id="form1">
            <table class="gridexample" border="1" style="border-collapse: collapse;" cellspacing="0">
                <th style="background-color: #1b6d85; color: white;">Показател</th>
                <th style="background-color: #1b6d85; color: white;">Резултат</th>
                <th style="background-color: #1b6d85; color: white;">Мерна единица</th>
                <th style="background-color: #1b6d85; color: white;">Норма</th>
                {foreach from=$data key=k item=result}
                    <tr style="background-color: #c6dcff;">
                        <td>{$data.$k.name} </td>
                        <td><input type="text" name="{$data.$k.test_code}" value="{$data.$k.result}"></td>
                        <td>{$data.$k.unit}</td>
                        <td>{$data.$k.up} - {$data.$k.down}</td>
                    </tr>
                {/foreach}
            </table>
    </td></td><td valign="top">
                      <table>
                              <tr><td style="color: white;">ID </td><td><input required type="text" name="number" value="{$data.0.number}" size="1"></td></tr>
                              <tr><td style="color: white;">Пациент:</td><td><input required type="text" name="patient" value="{$data.0.names}" size="26"></td></tr>
                              <tr><td style="color: white;">ЕГН:</td><td> <input type="text" name="idn" value="{$data.0.idn}" size="9"></td></tr>
                              <tr><td style="color: white;"> Лекар:</td><td><input type="text" name="doctor" value="{$data.0.doctor}" size="12"></td></tr>
                              <tr><td style="color: white;">Дата:</td><td><input type="date" name="date" value="{$data.0.date}"></td></tr>
                              <tr><td> <b style="color:red;">Спешно:</b></td><td> {if {$data.0.cito} == "on"}
                                          <input type="checkbox" name="cito" checked>
                                      {/if}
                                      {if {$data.0.cito} !== "on"}
                                          <input type="checkbox" name="cito">
                                      {/if}
                                      Статус: <select name="over" >
                                          {if {$data.0.over} == "on"}
                                              <option value="on" selected>Приключен</option>
                                              <option value="off">Неприключен</option>
                                          {/if}
                                          {if {$data.0.over} !== "on"}
                                              <option value="on" >Приключен</option>
                                              <option value="off" selected>Неприключен</option>
                                          {/if}
                                      </select></td></tr>
                      </table>
              </td></tr></table><p style="background-color: green; text-align: center;">{$ok}</p>
            <input type="submit" name="save" value="Запиши променитe">
</form>
{else}<p>
⇦Изберете заявка от панел "Търсене" в ляво за да заредите информацията за нея.
</p>
{/if}
        </table>
        <script	src="../js/jquery.min.js"></script>
        <script	src="../js/jquery.formnavigation.js"></script>
        <script>
            $(document).ready(function () {
                $('.gridexample').formNavigation();
            });
        </script>
</div><script>$('tr[data-href]').on("click", function() {
            document.location = $(this).data('href');
        });</script>

</div>
{include file="footer.tpl"}