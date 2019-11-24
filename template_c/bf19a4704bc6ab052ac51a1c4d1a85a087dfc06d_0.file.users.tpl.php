<?php
/* Smarty version 3.1.32, created on 2019-11-10 10:53:36
  from '/var/www/html/dlab/view/users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dc7d010a49bd5_71320359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf19a4704bc6ab052ac51a1c4d1a85a087dfc06d' => 
    array (
      0 => '/var/www/html/dlab/view/users.tpl',
      1 => 1558695024,
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
function content_5dc7d010a49bd5_71320359 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--Datatables js-->
<style>
    th {
        color: white;
    }
</style>
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
<div class="content">
    <?php $_smarty_tpl->_subTemplateRender("file:top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<div class="content">

    <?php $_smarty_tpl->_subTemplateRender("file:side_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="center">
        <div class="edit-doctors">
            <h1 style=" font-size: 25px;">Потребители</h1>
            <hr>

            <p style="text-align: left">
                <a style="text-decoration: none;" href="../controller/add_user.php" onclick="window.open('../controller/add_user.php', 
                         'newwindow', 
                         'width=240,height=380')
          return false;   
          " ;> <img src="../images/add.png" width="25" height="25"> <b style="font-size: 18px; color: white">Добави потребител</b></a>
            </p>

            <table id="journal" class="display">
                <thead>
                    <tr>
                        <th>Потребител</th>
                        <th>Права</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['user']->value) {
?>
                    <tr style="color: #0F0F0F" align="right">
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                        <td>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value['lvl'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 3) {?> Администратор <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value['lvl'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 2) {?> Лаборант <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value['lvl'];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 1) {?> Начинаещ <?php }?>
                        </td>
                        <td>

                            <a href="../controller/edit_user.php?user_id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value['id'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
" onclick="window.open('../controller/edit_user.php?user_id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value['id'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
',
                                   'newwindow',
                                   'width=300,height=350');
                                   return false;" alt="Редактирай" style="text-decoration: none;"><img src="../images/edit.png" width="20" height="20">Редактиране </a>

                            <a style="text-decoration: none;" href="../controller/users.php?delete_user=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" onclick="return confirm('Сигурен ли сте, че искате да изтриете потребител: <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
?')">
                                <img width="20" height="20" src="../images/delete.png">Изтриване</a>
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
