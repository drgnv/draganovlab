<div id='navbar'>
    <a style="background-color:transparent ;margin: 3; padding: 3; text-align: center;"><img src="../images/draganovlabtransperant%20-%20Copy.png" width="35" height="25"></a>
    <a href='./new_patient.php'>{$lang.registry}</a>
    <a href='./laboratory.php?from={$from_date}&to={$to_date}&status=all&searchbydate=Търси...'>{$lang.laboratory}</a>
    <a href='./mdds.php?from={$from_date}&to={$to_date}&searchbydate=Търси...'>{$lang.mdds}</a>
    <a href='./search_by_date.php'>{$lang.search_by_date}</a> {if {$lvl}
    <3}{else}<a href='./settings.php'>{$lang.settings}</a>{/if}

        <form method="GET" action="../controller/search.php">
            <div style="text-align: right; margin: 6  ">
                <select name="type">
                    <option value="idn">{$lang.idn}:</option>
                    <option value="name">{$lang.name}:</option>
                    <option value="id">{$lang.id}:</option>
                </select>
                <input required type="search" placeholder="{$lang.search}..." name="search">
                <input type="submit" value="{$lang.search}" name="send">
            </div>
        </form>
</div>