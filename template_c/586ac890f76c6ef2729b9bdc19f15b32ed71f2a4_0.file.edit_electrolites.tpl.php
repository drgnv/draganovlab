<?php
/* Smarty version 3.1.32, created on 2019-12-05 22:21:37
  from '/var/www/html/dlab/view/edit_electrolites.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5de966d184e4c8_04685011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '586ac890f76c6ef2729b9bdc19f15b32ed71f2a4' => 
    array (
      0 => '/var/www/html/dlab/view/edit_electrolites.tpl',
      1 => 1558695016,
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
function content_5de966d184e4c8_04685011 (Smarty_Internal_Template $_smarty_tpl) {
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
            "pageLength": 50,
            "order": [
                [4, "desc"]
            ]
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
            <h1 style=" font-size: 25px;">Електролити</h1> <?php $_smarty_tpl->_subTemplateRender("file:tests_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <hr>
            <p style="text-align: left">
                <a href="../controller/add_ele.php?flag=ele" onclick="window.open('../controller/add_ele.php?flag=ele', 
                         'newwindow', 
                         'width=300,height=310')
          return false;   
          " ; style="text-decoration: none;">
                    <img src="../images/add.png" width="25" height="25"> <b style="font-size: 18px; color: white">
                Добави показател</b></a>
            </p>

            <table id="tests" class="display">
                <thead>
                    <tr>
                        <th>Показател</th>
                        <th>↓</th>
                        <th>↑</th>
                        <th>⚖️</th>
                        <th>Действия</th>
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
                        <td>
                            <a style="text-decoration: none;" href="../controller/edit__ele_component.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['test']->value['id'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
" onclick="window.open('../controller/edit_ele_component.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['test']->value['id'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
', 
                         'newwindow', 
                         'width=320,height=260');
              return false;" alt="Редактирай резултати">
                                <img src="../images/edit.png" width="30" height="30" title="Редактирай <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
"> Редактиране
                            </a>

                            <a style="text-decoration: none;" href="../controller/edit_electrolites.php?delete=<?php echo $_smarty_tpl->tpl_vars['test']->value['id'];?>
" onclick="return confirm('Сигурен ли сте, че искате да изтриете: <?php echo $_smarty_tpl->tpl_vars['test']->value['name'];?>
?')" title="Изтрий <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
"><img src="../images/delete.png" width="25" height="25"> Изтриване</a>

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
