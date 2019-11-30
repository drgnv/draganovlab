<style>
    @media print {
        /* insert your style declarations here */
        table {
            page-break-after: always;
            /* ensures the next will we appear on new page */
        }
    }
    
    #main {
        border: 0px solid black;
        padding: 10px;
    }
    
    .bordered,
    .n-bordered {
        border: 0px solid black;
        border-collapse: collapse;
    }
    
    .n-bordered {
        border: none;
    }
    
    .bordered td,
    .n-bordered td {
        border: 0px solid black;
    }
    
    .n-bordered tr:first-child td {
        border-top: none;
    }
    
    .n-bordered tr:last-child td {
        border-bottom: none;
    }
    
    .n-bordered tr td:first-child {
        border-left: none;
    }
    
    .n-bordered tr td:last-child {
        border-right: none;
    }
</style>
<center>
    <!-start urine->

    {if {$tests.ur} || {$tests.s} || {$tests.shit}|| {$tests.ourine}}
    <table {if {$cito}=='on' }background="../images/cito.png" {/if} id="main" border="1" style="width: 648px;" cellspacing="4">
        <tbody>
        <tr><td style="border-color: white; font-size: 18px;text-align: center; font-weight: bold;">{$lang.lab_req}</td></tr>
            <tr>
                <td style="width: 647px; height: 50px;">
                    &nbsp;<b>{$lang.patient}:</b> {$patient_info.patient.names}
                    <br> {if {$patient_info.patient.doctor|count_characters}
                    < 3} {else} &nbsp;<b>{$lang.doctor}:</b> {$patient_info.patient.doctor} {/if}
                        <p>{$code}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 647px;">&nbsp;<b>{$lang.date}:</b> {$d} &nbsp;&nbsp<b>№</b> {$patient_info.patient.number}</td>
            </tr>
            <tr>
                <td style="width: 647px;"><b>{$lang.tests}: <br></b> {if {$tests.ur}} ph-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SG-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BIL-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;URB-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRO-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GLU-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KET-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIT-
                    <br>{/if} {if {$tests.s}} Седимент: {/if} {if {$tests.shit}} Окултен кръвоизлив:
                    <br>{/if} {if {$tests.ourine}} Микроалбуминурия:
                    <br>{/if}
                </td>
            </tr>
        </tbody>
    </table>

    {/if}

    <!-end urine->

    {if {$tests.cbc} || {$tests.akr} || {$tests.dif}}
    <table {if {$cito}=='on' }background="../images/cito.png" {/if} id="main" border="1" style="width: 648px;" cellspacing="4">
        <tbody>
        <tr><td style="border-color: white; font-size: 18px;text-align: center; font-weight: bold;">{$lang.lab_req}</td></tr>
        <tr>
                <td style="width: 647px; height: 50px;">
                    &nbsp;<b>{$lang.patient}:</b> {$patient_info.patient.names}
                    <br> {if {$patient_info.patient.doctor|count_characters}
                    < 3} {else} &nbsp;<b>{$lang.doctor}:</b> {$patient_info.patient.doctor} {/if}
                        <p>{$code}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 647px;">&nbsp;<b>{$lang.date}:</b> {$d}&nbsp;&nbsp;&nbsp;&nbsp; <b>№</b> {$patient_info.patient.number}</td>
            </tr>
            <tr>
                <td style="width: 647px;"><b>{$lang.tests}: <br></b> {if {$tests.cbc}} CBC{/if} {if {$tests.cbc} && {$tests.akr}} , {/if} {if {$tests.akr}} АКР - капилярно {/if} {if {$tests.dif}} Диференциално броене на левкоцити {/if}
                </td>
            </tr>
        </tbody>
    </table>

    {/if}

    <!-start blood->
    {if {$tests.blood} || {$tests.ele}}
    <table {if {$cito}=='on' }background="../images/cito.png" {/if} id="main" border="1" style="width: 648px;" cellspacing="4">
        <tbody>
        <tr><td style="border-color: white; font-size: 18px;text-align: center; font-weight: bold;">{$lang.lab_req}</td></tr>
        <tr>
                <td style="width: 647px; height: 50px;">
                    &nbsp;<b>{$lang.patient}:</b> {$patient_info.patient.names}
                    <br> {if {$patient_info.patient.doctor|count_characters}
                    < 3} {else} &nbsp;<b>{$lang.doctor}:</b> {$patient_info.patient.doctor} {/if}{$code}
                </td>
            </tr>
            <tr>
                <td style="width: 647px;">&nbsp;<b>{$lang.date}:</b> {$d}&nbsp;&nbsp;&nbsp;&nbsp; <b>№</b> {$patient_info.patient.number}</td>
            </tr>
            <tr>
                <td style="width: 647px;"><b>{$lang.tests}: <br></b> {if {$tests.blood}} {foreach from=$tests.blood name=foo item=test} &nbsp;{if $smarty.foreach.foo.last}{$test}{else} {$test}, {/if} {/foreach} {/if} {if {$tests.ele}} {foreach from=$tests.ele name=foo item=test} &nbsp;{if $smarty.foreach.foo.last}{$test}{else} {$test}, {/if} {/foreach} {/if}
                </td>
            </tr>
        </tbody>
    </table>

    {/if}

    <!-end blood->

    <!-start hormon->
    {if {$tests.hormon}}
    <table {if {$cito}=='on' }background="../images/cito.png" {/if} id="main" border="1" style="width: 648px;" cellspacing="4">
        <tbody>
        <tr><td style="border-color: white; font-size: 18px;text-align: center; font-weight: bold;">{$lang.lab_req}</td></tr>
        <tr>
                <td style="width: 647px; height: 50px;">
                    &nbsp;<b>{$lang.patient}:</b> {$patient_info.patient.names}
                    <br> {if {$patient_info.patient.doctor|count_characters}
                    < 3} {else} &nbsp;<b>{$lang.doctor}:</b> {$patient_info.patient.doctor} {/if}
                        <p>{$code}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 647px;">&nbsp;<b>{$lang.date}:</b> {$d} &nbsp;&nbsp;&nbsp;&nbsp; <b>№</b> {$patient_info.patient.number}</td>
            </tr>
            <tr>
                <td style="width: 647px;"><b>{$lang.tests}: <br></b> {foreach from=$tests.hormon name=foo item=test} &nbsp;{if $smarty.foreach.foo.last}{$test}{else} {$test}, {/if} {/foreach}
                </td>
            </tr>
        </tbody>
    </table>
    {/if}

    <!-end hormon->

    <!-end blood->

    <!-start hormon->
    {if {$tests.coag}}
    <table {if {$cito}=='on' }background="../images/cito.png" {/if} id="main" border="1" style="width: 648px;" cellspacing="4">
        <tbody>
        <tr><td style="border-color: white; font-size: 18px;text-align: center; font-weight: bold;">{$lang.lab_req}</td></tr>
        <tr>
                <td style="width: 647px; height: 50px;">
                    &nbsp;<b>{$lang.patient}:</b> {$patient_info.patient.names}
                    <br> {if {$patient_info.patient.doctor|count_characters}
                    < 3} {else} &nbsp;<b>{$lang.doctor}:</b> {$patient_info.patient.doctor} {/if}
                        <p>{$code}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 647px;">&nbsp;<b>{$lang.date}:</b> {$d} &nbsp;&nbsp;&nbsp;&nbsp; <b>№</b> {$patient_info.patient.number}</td>
            </tr>
            <tr>
                <td style="width: 647px;"><b>{$lang.tests}: <br></b> {foreach from=$tests.coag name=foo item=test} &nbsp;{if $smarty.foreach.foo.last}{$test}{else} {$test}, {/if} {/foreach}
                </td>
            </tr>
        </tbody>
    </table>
    {/if}

    <!-end hormon->
</center>