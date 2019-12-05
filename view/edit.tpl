<html>

<head>
    <script src="../js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <link href="../css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
    <link href="../css/tooltip.css" media="screen" rel="stylesheet" type="text/css">
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

    <title>DraganovLab</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</head>

<body>
    <center>
        <table border="0"><tr><td style="vertical-align:top;">
        <form autocomplete="off" action="../controller/edit.php?id={$data.0.patient_id}" method="POST" id="form1">
            №
            <input required type="number" name="number" style="width: 40px;" value="{$data.0.number}"> | {$lang.patient}:
            <input required type="text" name="patient" value="{$data.0.names}" size="26"> | {$lang.idn}:
            <input type="text" name="idn" value="{$data.0.idn}" size="9">
            <br>
            <br> {$lang.doctor}:
            <input list="hosting-plan" type="text" value="{$data.0.doctor}" size="14" name='doctor'>
            <datalist id="hosting-plan">
                {foreach from=$doctors item=doctor}
                <option value="{$doctor.doctor}" alt="1212" /> {/foreach}
            </datalist>
            <script>
                // Create a new option element.
                var optionNode = document.createElement("option");

                // Set the value
                optionNode.value = "huge";

                // create a text node and append it to the option element
                optionNode.appendChild(document.createTextNode("$50 USD"));

                // Add the optionNode to the datalist
                document.getElementById("hosting-plan").appendChild(optionNode);
            </script>
            | {$lang.date}:
            <input type="date" name="date" value="{$data.0.date}"> |
            <b style="color:red;">{$lang.cito}:</b> {if {$data.0.cito} == "on"}
            <input type="checkbox" name="cito" checked> {/if} {if {$data.0.cito} !== "on"}
            <input type="checkbox" name="cito"> {/if}
            {$lang.paid}:
            <input type="checkbox" name="pay" {if {$data.0.pay} == "on"}checked{/if}>


            <hr>

            <a href="../controller/old_results.php?idn={$data.0.idn}" target="_blank" style="text-decoration:none; color: black;">
                <img src="../images/archive.png" width="20" height="20"> {$lang.old_results}</a> | {$lang.status}:
            <select name="over">
                {if {$data.0.over} == "on"}
                <option value="on" selected>{$lang.over}</option>
                <option value="off">{$lang.not_over}</option>
                {/if} {if {$data.0.over} !== "on"}
                <option value="on">{$lang.over}</option>
                <option value="off" selected>{$lang.not_over}</option>
                {/if}
            </select>

            <table border="1" style="border-collapse: collapse;" cellspacing="0">
                <th style="background-color: #ffbd28;">
                    <div class="tooltip">{$lang.comment}
                        <span class="tooltiptext">Коментрът на резултатите се принтира с резултатите на пациента</span>
                    </div>
                </th>
                <th style="background-color: #ffbd28;">
                    <div class="tooltip">{$lang.note}
                        <span class="tooltiptext">Бележките са видими само в полето "Болежки" и не достигат до пациентите. Подходящи
  за работни записки.</span>
                    </div>
                </th>
                <tr>
                    <td>
                        <textarea style="background-color: #ffedc4; resize: none;" name="comment">{$data.0.comment}</textarea>
                    </td>
                    <td>
                        <textarea style="background-color: #ffedc4; resize: none;" name="note">{$data.0.note}</textarea>
                    </td>
                </tr>
            </table>
            <br>
            <b style="background-color: #3c763d; color: white; padding: 5px;">{$ok}</b>
            <br><br>
            <input type="submit" name="save" value="{$lang.save_btn}">



                </td><td>
<div style="overflow-y: scroll; height:500px;">
            <table class="gridexample"  border="1" style="border-collapse: collapse;" cellspacing="0">
                <th style="background-color: #29559b; color: white;">{$lang.test}</th>
                <th style="background-color: #29559b; color: white;">{$lang.result}</th>
                <th style="background-color: #29559b; color: white;">{$lang.unit}</th>
                <th style="background-color: #29559b; color: white;">{$lang.referent_norms}</th>
                {foreach from=$data key=k item=result}
                <tr style="background-color: #c6dcff;">
                    <td>{$data.$k.name} </td>
                    <td>
                        <input type="text" name="{$data.$k.test_code}" value="{$data.$k.result}">
                    </td>
                    <td>{$data.$k.unit}</td>
                    <td>{$data.$k.up} - {$data.$k.down}</td>
                </tr>
                {/foreach}
            </table></div>
            {if isset({$ldl})}{$ldl}{/if}
            <a style="text-decoration: none;" href="../controller/edit.php?id={$data.0.patient_id}&ag=1">Изчисли Анионна дупка</a> |
            <a style="text-decoration: none;" href="../controller/edit.php?id={$data.0.patient_id}&ldl=1">Изчисли LDL</a>
            <br>
            <script src="../js/jquery.min.js"></script>
            <script src="../js/jquery.formnavigation.js"></script>
            <script>
                $(document).ready(function() {
                    $('.gridexample').formNavigation();
                });
            </script>
            <input type="hidden" name="id" value="{$data.0.id}">
        </form>

        <table>

            <tr>
                <td>
                    <p class="flip"><img src="../images/add.png" width="22" height="22"> {$lang.add_tests}</p>
                    <div class="panel">

                        <form action="../controller/edit.php?id={$data.0.patient_id}" method="POST">
                            <select multiple="multiple" id="my-select" name="my-select[]">
                                <option value="01.01" style="text-align: left">ПКК</option>
                                {foreach from=$all_tests key=key item=test}
                                <option value='{$test.code}' style="text-align: left">{$test.name}</option>
                                {/foreach}
                                <option value="01.09" style="text-align: left">Урина-Седимент</option>
                                <option value="01.08" style="text-align: left">Урина-Химично</option>
                                <option value="66.00" style="text-align: left">АКР</option>
                                <option value="01.40" style="text-align: left">Левкограма</option>
                            </select>
                            <input type="submit" name="add" value="Добави избраните изследвания">
                        </form>
                        <script src="../js/jquery.multi-select.js" type="text/javascript"></script>
                        <script>
                            $('#my-select').multiSelect()
                        </script>

                    </div>

                </td>
                <td>
                    <p class="flip2"><img src="../images/delete.png" width="22" height="22"> {$lang.remove_tests}</p>
                    <div class="paneldel">

                        <form action="../controller/edit.php?id={$data.0.patient_id}" method="POST">
                            <select multiple="multiple" id="my-selectdel" name="my-selectdel[]">
                                {foreach from=$data key=key item=test}
                                <option value='{$test.code}' style="text-align: left">{$test.name}</option>
                                {/foreach}
                            </select>
                            <input onclick="return confirm('Сигурни ли сте, че искате да премахнете избраните изследвания?')" type="submit" name="remove" value="Премахни избраните изследвания">
                        </form>
                        <script src="../js/jquery.multi-select.js" type="text/javascript"></script>
                        <script>
                            $('#my-selectdel').multiSelect()
                        </script>

                    </div>
                </td>
            </tr>
        </table>
                </td></tr></table>
    </center>

</body>

</html>