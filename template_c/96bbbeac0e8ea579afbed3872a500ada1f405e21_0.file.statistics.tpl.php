<?php
/* Smarty version 3.1.32, created on 2019-11-10 10:22:41
  from '/var/www/html/dlab/view/statistics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dc7c8d18aed39_19267105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96bbbeac0e8ea579afbed3872a500ada1f405e21' => 
    array (
      0 => '/var/www/html/dlab/view/statistics.tpl',
      1 => 1558695022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:top_menu.tpl' => 1,
    'file:side_menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dc7c8d18aed39_19267105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="content">
    <?php $_smarty_tpl->_subTemplateRender("file:top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<div class="content">

    <?php $_smarty_tpl->_subTemplateRender("file:side_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
