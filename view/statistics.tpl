{include file="header.tpl"}
<div class="content">
    {include file="top_menu.tpl"}
</div>
<div class="content">

    {include file="side_menu.tpl"}
    <div class="edit-doctors">

        <div class="center">
            <form method="POST" action="../controller/statistics.php">
                Дата от:
                <input type="date" name="date"> | До:
                <input type="date" name="date">
                <br>
                <br> Статистики:
                <select name="statistic">
                    <option value="1">Най-провеждани изследвания</option>
                    <option value="2">Брой пациенти по дни</option>
                    <option value="3">Брой пациенти по месеци</option>
                    <option value="4">Брой пациенти по лекари</option>
                </select>
                <input type="submit" name="show" value="Покажи">
                <hr>
            </form>

        </div>
    </div>
    <div class="footer"></div>
</div>
{include file="footer.tpl"}