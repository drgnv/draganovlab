<?php
/* Smarty version 3.1.32, created on 2019-12-05 21:35:08
  from '/var/www/html/dlab/view/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5de95bec3eaf98_20172581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14b5b97827ff65e2cd92be8811b202cf62de63cc' => 
    array (
      0 => '/var/www/html/dlab/view/search.tpl',
      1 => 1575574507,
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
function content_5de95bec3eaf98_20172581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
            <?php echo '<script'; ?>
 type="text/javascript">
                function insertText(elemID, text) {
                    var elem = document.getElementById(elemID);
                    elem.innerHTML += text;
                }
            <?php echo '</script'; ?>
>

            <div class="newp2">
                <h2 style="color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['search'];?>
</h2>
                <p style="color: white"><?php echo $_smarty_tpl->tpl_vars['lang']->value['search'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['by'];?>
 <b><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</b> <?php echo $_smarty_tpl->tpl_vars['lang']->value['for'];?>
 <b><?php echo $_smarty_tpl->tpl_vars['search']->value;?>
</b></p>
                <hr>
                <table id="journal" class="display" width="990">
                    <thead>
                        <tr>
                            <th style="color: white;">С</th>
                            <th style="color: white;">№</th>
                            <th style="color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['added'];?>
</th>
                            <th style="color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['patient'];?>
</th>
                            <th style="color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['doctor'];?>
</th>
                            <th style="color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['actions'];?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_smarty_tpl->_assignInScope('un', "1");?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>

                        <tr>

                            <td>
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['over'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "on") {?>
                                <b hidden="true">a</b> <img src="../images/over.PNG" width="25" height="25"> <?php }?>
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['over'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 !== "on") {?> <b hidden="true">b</b>
                                <img src="../images/notover.PNG" width="25" height="25"> <?php }?>
                            </td>
                            <td style="color: black;"><?php echo $_smarty_tpl->tpl_vars['result']->value['number'];?>
</td>
                            <td style="color: black;"><?php echo $_smarty_tpl->tpl_vars['result']->value['date'];?>
</td>
                            <td style="color: black;"><a href="../controller/edit.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['id'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" onclick="window.open('../controller/edit.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['id'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
',
                                        'newwindow',
                                        'width=550,height=600');
                                        return false;" alt="Редактирай резултати"><?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
</a></td>
                            <td style="color: black;"><?php echo $_smarty_tpl->tpl_vars['result']->value['doctor'];?>
</td>
                            <td align="center">
                                <a style="text-decoration: none;" href="../controller/print.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['id'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
" target="_blank">
                                    <img src="../images/request.png" width="20" height="20" title="Принтирай заявка на <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
">
                                </a>
                                <a style="text-decoration: none;" href="../controller/resultbyid.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['id'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
" target="_blank">
                                    <img src="../images/results.png" width="20" height="20" title="Принтирай резултати на <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
">
                                </a>

                                <a style="text-decoration: none;" href="../controller/onlineresults.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['id'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
" target="_blank">
                                    <img src="../images/online.png" width="20" height="20" title="Онлайн достъп на <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
">
                                </a>
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['lvl']->value;
$_prefixVariable8 = ob_get_clean();
if ($_prefixVariable8 < 3) {
} else { ?> <a href="../controller/search.php?delete=<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['id'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" alt="Изтриване" onclick="return confirm('Сигурен ли сте, че искате да изтриете пациент: <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
?')" title="Изтрий <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
">
                                    <img src="../images/delete.png" width="20" height="20" alt="Изтриване">
                                  <?php }?>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
                </form>
        </center>
        </div>
        <div class="footer"></div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
