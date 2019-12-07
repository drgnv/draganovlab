</div>
<br>
<br>
<footer style="
position: fixed;
   right: 0;
   bottom: 0;
   width: 100%;
   background-color: #34495E;
   color: white;
   text-align: center;
   padding: 3px;
   font-size: 15px;
"><form action="print_day_results.php" method="GET" style="margin:0; padding: 0;">
    DraganovLab 4.1v © 2019 | <a href="../support.html" style="color: white; text-decoration: none;">{$lang.support}</a> | {$lang.username}: <b>{$name}</b> |
    <a href="../logout.php" style="color: white;">{$lang.logout}</a> | {foreach from=$over_count key=k item=v}
            {foreach from=$v key=k2 item=v2} {$v2} {/foreach}{/foreach} {$lang.over}
        {$lang.patients} {$lang.from} {$lang.total} {foreach from=$total_count key=k item=v}
            {foreach from=$v key=k2 item=v2} {$v2} {/foreach}{/foreach} {$lang.for} {$lang.date}: {$date}
        |
        <input type="date" name="date" value="{$date}" style="width:137px; height:17px;">
        <input type="submit" name="printres" value="{$lang.print} {$lang.results}" style="width:150px; height:20px;">
</form>

</footer>

<script>
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>
</body>

</html>
