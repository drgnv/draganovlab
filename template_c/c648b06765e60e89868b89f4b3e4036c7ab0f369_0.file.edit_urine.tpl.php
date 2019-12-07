<?php
/* Smarty version 3.1.32, created on 2019-12-07 23:04:45
  from '/var/www/html/dlab/view/edit_urine.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dec13edd190d8_07436617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c648b06765e60e89868b89f4b3e4036c7ab0f369' => 
    array (
      0 => '/var/www/html/dlab/view/edit_urine.tpl',
      1 => 1575752685,
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
function content_5dec13edd190d8_07436617 (Smarty_Internal_Template $_smarty_tpl) {
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
            <h1 style=" font-size: 25px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['urine'];?>
</h1> <?php $_smarty_tpl->_subTemplateRender("file:tests_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <hr>
            <p style="text-align: left">
                <a href="../controller/add_urine.php?flag=ur" onclick="window.open('../controller/add_urine.php?flag=ur', 
                         'newwindow', 
                         'width=300,height=310')
          return false;   
          " ; style="text-decoration: none;"> <img src="../images/add.png" width="25" height="25"> <b style="font-size: 18px; color: white">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['test'];?>
</b></a>
            </p>

            <table id="tests" class="display">
                <thead>
                    <tr>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['test'];?>
</th>
                        <th>↓</th>
                        <th>↑</th>
                        <th>⚖️</th>
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
                        <td>
                            <a style="text-decoration: none;" href="../controller/edit__urine_component.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['test']->value['id'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
" onclick="window.open('../controller/edit_urine_component.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['test']->value['id'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
', 
                         'newwindow', 
                         'width=320,height=260');
              return false;" >
                                <img src="../images/edit.png" width="30" height="30" title="Редактирай <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>

                            </a>

                            <a style="text-decoration: none;" href="../controller/edit_urine.php?delete=<?php echo $_smarty_tpl->tpl_vars['test']->value['id'];?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['lang']->value['warning'];?>
: <?php echo $_smarty_tpl->tpl_vars['test']->value['name'];?>
?')" ><img src="../images/delete.png" width="25" height="25"><?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
</a>

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
