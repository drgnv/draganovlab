{include file="header.tpl"}
<div class="content">
    {include file="top_menu.tpl"}
</div>
<div class="content">

    <div class="center">
        <div class="edit-doctors">
        <h2>Справки</h2>
        <form action="../controller/enquiry.php" method="POST">
            <select name="enquiry_type">
                <option value="1">Справка РЦЗ за извършени изследвания по пол и възраст</option>
                <option value="2">Справка за извършени изследвания  по изпращащи лекари</option>
                <option value="3">Справка за извършени изследвания</option>
            </select>
            <input type="submit" value="{$lang.save_btn}" name="save">
        </form>
        </div>
    </div>
</div>
{include file="footer.tpl"}