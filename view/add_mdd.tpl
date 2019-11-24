<html><head>
    
    </head>
    <body style="background-color: #AEB6BF; font-family: sans-serif;"> 
<form action = "./add_mdd.php?patient_id={$patient_info.0.id}" method="post">

    <table border="0" style=" background-color: #34495E">
                                            <tr>
                                                <td align="right" colspan="4">
                                                    <i style="color: white;">ЕГН:</i>

                                                    <input name="idn" size="10" type="text" value="{$patient_info.0.idn}">

                                                    <i style="color: white;">Имена:</i>

                                                    <input name="names"  type="text" size="30px" value="{$patient_info.0.names}">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <i style="color: white;">Издадено:</i>
                                                </td>
                                                <td>
                                                    <input name="out_date"  style="width: 120px" type="date">
                                                </td>
                                                <td align="right">
                                                    <i style="color: white;">Изпълнено:</i>
                                                </td>
                                                <td>
                                                    <input name="complete_date" style="width: 120px" type="date">
                                                </td>
                                                <td align="right" style="width: 75px">
                                                    <i style="color: white;">НМДД: </i>
                                                </td>
                                                <td>
                                                    <input name="nmdd" style="width: 97px"  type="text">
                                                </td>
                                                <td align="right">
                                                    <i style="color: white;"> АЛ №:</i>
                                                </td>
                                                <td>
                                                    <input name="alnum" style="width: 50px"  type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right">
                                                    <i style="color: white;">Лекар:</i>
                                                </td>
                                                <td>
                                                    <select name="doctor_id">
                                                        {foreach from=$doctors item=doctor}
                                                        <option value="{$doctor.doctor_id}">{$doctor.doctor}</option>
                                                        {/foreach}
                                                    </select>

                                                </td>
                                                <td align="right">
                                                    <i style="color: white;">Код:</i>
                                                    <input name="code1" style="width: 40px"  type="text">
                                                </td>

                                                <td align="right">
                                                    <i style="color: white;">УИН:</i>
                                                    <input name="uin" style="width: 100px"  type="text">
                                                </td>

                                                <td align="right">
                                                    <i style="color: white;">РЗЦ Код:</i>
                                                </td>
                                                <td>
                                                    <input name="rzc_code" style="width: 100px" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <i style="color: white;">Зам. / Нает:</i>
                                                    <input name="zam_naet" style="width: 100px" type="text">
                                                </td>
                                                <td align="right" colspan="2">
                                                    <i style="color: white;">УИН Зам. / Нает:</i>

                                                    <input name="uin_zam_naet" style="width: 100px" type="text">
                                                </td>
                                                <td align="right">
                                                    <i style="color: white;">НЗОК №:</i>
                                                </td>
                                                <td>
                                                    <input name="nzok"  style="width: 100px" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" colspan="3">
                                                    <i style="color: white;">Извършено от външна лаборатория:</i>
                                                </td>
                                                <td colspan="4">
                                                    <input name="uin_zam_naet" style="width: 400px" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right">
                                                    <i style="color: white;">МКБ 10:</i>
                                                </td>
                                                <td colspan="4">
                                                    <input name="mkb" style="width: 45px"  type="text">

                                                    <input name="mkbdesc" style="width: 390px" type="text" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right">
                                                    <i style="color: white;">МКБ 10 (2):</i>
                                                </td>
                                                <td colspan="4">
                                                    <input name="mkb2"  style="width: 45px" type="text">
                                                    <input name="mkb2desc" style="width: 390px" type="text" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" style="color: white">Пакет:</td>
                                                <td>
                                                    <select name="paket">
                                                        <option value="1">Пакет клинична лаборатория</option>
                                                    </select>
                                                </td>
                                                <td align="right" style="color: white">Код:</td>
                                                <td colspan="3">
                                                    <input type="number" name="code2"  style="width: 40px;">
                                                    <i style="color: white">Тип НМДД:</i>

                                                    <select name="mdd_type" style="width: 200px">
                                                        {foreach from=$mdd_types item=mdd_type} 
                                                        <option value="{$mdd_type.id}">{$mdd_type.number}. {$mdd_type.name}</option>

                                                        {/foreach}
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5">
                                                    <i style="color: white;">Код по назначени изследвания:
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                            Такса Б.М.
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                            Обща цена
                                                    </i>
                                                    <br>
                                                    <input type="text" name="code1t"  style="width: 40px;">&nbsp;&nbsp;
                                                    <input type="text" name="code2t" style="width: 40px;">&nbsp;&nbsp;
                                                    <input type="text" name="code3t"  style="width: 40px;">&nbsp;&nbsp;
                                                    <input type="text" name="code4t"  style="width: 40px;">&nbsp;&nbsp;
                                                    <input type="text" name="code5t"  style="width: 40px;">&nbsp;&nbsp;
                                                    <input type="text" name="code6t" style="width: 40px;">&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <input type="text" name="taxa_bm" style="width: 50px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <input type="text" name="total_price" style="width: 50px;">
                                                    <input type="hidden" name="mdd_id" ><br>
                                                    <select name="no_money">
                                                        <option value="1">Не освободен от ПТ</option>
                                                        <option value="0">Освободен от ПТ</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="submit" name="save" value="Запиши">
                                                </td>
                                            </tr>
                                        </table>

                                    </form>
                                                        </body>
                                                        </html>