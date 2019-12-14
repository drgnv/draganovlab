<?php
/* Smarty version 3.1.32, created on 2019-12-14 13:00:25
  from '/var/www/html/dlab/view/edit_tests.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df4c0c92f1906_35418843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32b3ad80d087a809c185b65fdb21435bb18072f2' => 
    array (
      0 => '/var/www/html/dlab/view/edit_tests.tpl',
      1 => 1575795957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:top_menu.tpl' => 1,
    'file:side_menu.tpl' => 1,
    'file:tests_menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5df4c0c92f1906_35418843 (Smarty_Internal_Template $_smarty_tpl) {
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
        $('#tests').DataTable({
            "pageLength": 10,
            "paging": false,
            "scrollY":        "380px",
            "scrollCollapse": true,
            "paging":         false,
            "bInfo" : false,
            "responsive": true
        });
    });
<?php echo '</script'; ?>
>
<style>
    th {
        color: white;
    }
</style>
<!--Datatables js-->
<div class="content">
    <?php $_smarty_tpl->_subTemplateRender("file:top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<div class="content">
    <?php $_smarty_tpl->_subTemplateRender("file:side_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="center">
        <div class="edit-doctors">
            <h1 style=" font-size: 25px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tests'];?>
</h1>
            <l style="text-align: left">
                <a href="../controller/add_test.php" onclick="window.open('../controller/add_test.php',
                         'newwindow',
                         'width=300,height=310')
          return false;
          " ; style="text-decoration: none;"> <img src="../images/add.png" width="25" height="25"> <b style="font-size: 18px; color: white"><?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['test'];?>
</b></a>
            </l>
            <?php $_smarty_tpl->_subTemplateRender("file:tests_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <hr>


            <table id="tests" class="display">
                <thead>
                    <tr>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['test'];?>
</th>
                        <th>↓</th>
                        <th>↑</th>
                        <th>⚖️</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['price'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['actions'];?>
</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tests']->value, 'test');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
?>
                    <tr>
                        <td style="color: black;text-align: right;"><?php echo $_smarty_tpl->tpl_vars['test']->value['name'];?>
</td>
                        <td style="color: black;text-align: right;"><?php echo $_smarty_tpl->tpl_vars['test']->value['up'];?>
</td>
                        <td style="color: black;text-align: right;"><?php echo $_smarty_tpl->tpl_vars['test']->value['down'];?>
</td>
                        <td style="color: black;text-align: right;"><?php echo $_smarty_tpl->tpl_vars['test']->value['unit'];?>
</td>
                        <td style="color: black;text-align: right;">BGN <?php echo $_smarty_tpl->tpl_vars['test']->value['price'];?>
</td>
                        <td>
                            <a style="text-decoration: none;" href="../controller/edit_test.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['test']->value['id'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
" onclick="window.open('../controller/edit_test.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['test']->value['id'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
', 
                         'newwindow', 
                         'width=320,height=260');
              return false;" alt="Редактирай резултати">
                                <img src="../images/edit.png" width="30" height="30" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
 <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
">

                            </a>

                            <a style="text-decoration: none;" href="../controller/edit_tests.php?delete=<?php echo $_smarty_tpl->tpl_vars['test']->value['id'];?>
" onclick="return confirm('Сигурен ли сте, че искате да изтриете: <?php echo $_smarty_tpl->tpl_vars['test']->value['name'];?>
?')" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
 <?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>
"><img src="../images/delete.png" width="25" height="25"></a>

                        </td>
                    </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="footer"></div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
