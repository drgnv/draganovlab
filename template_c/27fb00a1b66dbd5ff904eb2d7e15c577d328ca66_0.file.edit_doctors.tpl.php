<?php
/* Smarty version 3.1.32, created on 2019-11-29 21:19:53
  from '/var/www/html/dlab/view/edit_doctors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5de16f597bd1c8_14207658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27fb00a1b66dbd5ff904eb2d7e15c577d328ca66' => 
    array (
      0 => '/var/www/html/dlab/view/edit_doctors.tpl',
      1 => 1574952523,
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
function content_5de16f597bd1c8_14207658 (Smarty_Internal_Template $_smarty_tpl) {
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
        $('#doctors').DataTable({
            "pageLength": 10
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

    <div class="edit-doctors">
        <h1 style=" font-size: 25px;">Лекари</h1>
        <hr>
        <p style="text-align: left">
            <a style="text-decoration: none;" href="../controller/add_doctor.php" onclick="window.open('../controller/add_doctor.php', 
                         'newwindow', 
                         'width=300,height=300')
          return false;   
          " ;> <img src="../images/add.png" width="25" height="25"> <b style="font-size: 18px; color: white"><?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['doctor'];?>
</b></a>
        </p>

        <table id="doctors" class="display">
            <thead>
                <tr>
                    <th style="color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['doctor'];?>
</th>
                    <th style="color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['actions'];?>
</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doctors']->value, 'doctor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['doctor']->value) {
?>
                <tr>

                    <td style="color: black;" title="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['doctor'];?>
 | Телефон: <?php echo $_smarty_tpl->tpl_vars['doctor']->value['phone'];?>
 | Телефон 2: <?php echo $_smarty_tpl->tpl_vars['doctor']->value['phone2'];?>
 | УИН: <?php echo $_smarty_tpl->tpl_vars['doctor']->value['uin'];?>
"><?php echo $_smarty_tpl->tpl_vars['doctor']->value['doctor'];?>
</td>
                    <td style="color: black;">
                        <a style="text-decoration: none;" href="../controller/edit_doctor.php?editdoc=<?php echo $_smarty_tpl->tpl_vars['doctor']->value['doctor_id'];?>
" onclick="window.open('../controller/edit_doctor.php?editdoc=<?php echo $_smarty_tpl->tpl_vars['doctor']->value['doctor_id'];?>
',
                         'newwindow',
                         'width=300,height=200')
          return false;
          " ;>
                            <img src="../images/edit.png" width="25" height="25"><?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>

                        </a>

                        <a style="text-decoration: none;" href="../controller/edit_doctors.php?deletedoc=<?php echo $_smarty_tpl->tpl_vars['doctor']->value['doctor_id'];?>
" onclick="return confirm('Сигурен ли сте, че искате да изтриете лекар: <?php echo $_smarty_tpl->tpl_vars['doctor']->value['doctor'];?>
?')" title="Изтрий <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
">
                            <img src="../images/delete.png" width="25" height="25"><?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
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
    <div class="footer"></div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
