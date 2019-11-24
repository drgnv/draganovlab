<?php
/* Smarty version 3.1.32, created on 2019-05-20 17:13:09
  from 'C:\xampp\htdocs\draganovlab402\view\search_by_date.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ce2c405189811_44372142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c03963b325878762acdae40b39bb41c40dc047e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\draganovlab402\\view\\search_by_date.tpl',
      1 => 1558365185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:top_menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ce2c405189811_44372142 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--Datatables js-->
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="../js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $('#journal').DataTable({
            "pageLength": 50
        });
    });
<?php echo '</script'; ?>
>
<!--Datatables js-->
<link href="../css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
<style>
    #parent #popup {
        display: none;
    }
    
    #parent:hover #popup {
        display: block;
    }
</style>
<div class="content">
    <?php $_smarty_tpl->_subTemplateRender("file:top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo '<script'; ?>
>
        // When the user clicks on div, open the popup
        function popup() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
        }
    <?php echo '</script'; ?>
>
    <div class="center-search">
        <center>
            <div class="newp2">
                <p style="color: whitesmoke; font-size: 25px;">Търси по дата</p>
                <p style="color: whitesmoke; font-size: 14px;">Задайте начална и крайна дата</p>
                <form action="../controller/search_by_date.php" method="GET">
                    <p style="color: white; font-size: 16px;">От:
                        <input type="date" name="start"> До:
                        <input type="date" name="end">
                        <input type="submit" name="send" value="Търси">
                    </p>
                </form>
                <hr>
                <table id="journal" class="lp" width="910">
                    <thead>
                        <tr>
                            <th style="display:none;">егн</th>
                            <th>С</th>
                            <th>№</th>
                            <th>Добавено на</th>
                            <th>Пациент</th>
                            <th>Лекар</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_smarty_tpl->_assignInScope('un', "1");?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['patients']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>

                        <tr>
                            <td style="display:none;"><?php echo $_smarty_tpl->tpl_vars['result']->value['idn'];?>
</td>
                            <td>
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['over'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "on") {?>
                                <b hidden="true">a</b> <img src="../images/over.PNG" width="25" height="25"> <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['over'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 !== "on") {?> <b hidden="true">b</b>
                                <img src="../images/notover.PNG" width="25" height="25"> <?php }?>
                            </td>
                            <td style="color: black;"><?php echo $_smarty_tpl->tpl_vars['result']->value['number'];?>
</td>
                            <td style="color: black;"><?php echo $_smarty_tpl->tpl_vars['result']->value['date'];?>
</td>
                            <td style="color: black;"><?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
</td>
                            <td style="color: black;"><?php echo $_smarty_tpl->tpl_vars['result']->value['doctor'];?>
</td>
                            <td align="center">
                                <a href="../controller/print.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['id'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" target="_blank" style="text-decoration: none;">
                                    <img src="../images/request.png" width="30" height="30" title="Принтирай заявка на <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
">
                                </a>
                                <a href="../controller/resultbyid.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['id'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
" target="_blank" style="text-decoration: none;">
                                    <img src="../images/results.png" width="30" height="30" title="Принтирай резултати на <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
">
                                </a>

                                <a style="text-decoration: none;" href="../controller/edit.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['id'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
" onclick="window.open('../controller/edit.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['id'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
', 
                         'newwindow', 
                         'width=550,height=600'); 
              return false;" alt="Редактирай резултати">
                                    <img src="../images/edit.png" width="30" height="30" title="Редактирай <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
">
                                </a>
                                <a style="text-decoration: none;" href="../controller/onlineresults.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['id'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
" target="_blank">
                                    <img src="../images/online.png" width="30" height="30" title="Онлайн достъп на <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
">
                                </a>
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['lvl']->value;
$_prefixVariable8 = ob_get_clean();
if ($_prefixVariable8 < 3) {
} else { ?> <a style="text-decoration: none;" href="../controller/search_by_date.php?start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
&end=<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
&send=Търси&delete=<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['id'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
" alt="Изтриване" onclick="return confirm('Сигурен ли сте, че искате да изтриете пациент: <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
?')" title="Изтрий <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
">
                                    <img src="../images/delete.png" width="30" height="30" alt="Изтриване">
                                    </a><?php }?>
                            </td>
                        </tr>
                        <b style="visibility: hidden;"> <?php echo $_smarty_tpl->tpl_vars['un']->value++;?>
</b> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </tbody>

                </table>
                </form>
        </center>
        </div>
    </div>
    <div class="footer"></div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
