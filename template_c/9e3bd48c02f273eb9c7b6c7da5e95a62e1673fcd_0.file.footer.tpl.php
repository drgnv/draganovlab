<?php
/* Smarty version 3.1.32, created on 2019-05-16 18:07:52
  from 'C:\xampp\htdocs\draganovlab401\view\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cdd8ad809e072_94799725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e3bd48c02f273eb9c7b6c7da5e95a62e1673fcd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\draganovlab401\\view\\footer.tpl',
      1 => 1558022871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdd8ad809e072_94799725 (Smarty_Internal_Template $_smarty_tpl) {
?></div>
<br>
<br>
<footer style="
position: fixed;
   right: 0;
   bottom: 0;
   width: 100%;
   background-color: #34495E;
   color: white;
   text-align: center;
   padding: 3px;
   font-size: 15px;
">
    DraganovLab 4.1v © 2019 | <a href="../support.html" style="color: white; text-decoration: none;">Поддръжка</a> | Потребител: <b><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</b> |
    <a href="../logout.php" style="color: white;">ИЗХОД</a> | <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['over_count']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value, 'v2', false, 'k2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k2']->value => $_smarty_tpl->tpl_vars['v2']->value) {
?> <?php echo $_smarty_tpl->tpl_vars['v2']->value;?>
 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> приключени пациента от общо <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['total_count']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value, 'v2', false, 'k2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k2']->value => $_smarty_tpl->tpl_vars['v2']->value) {
?> <?php echo $_smarty_tpl->tpl_vars['v2']->value;?>
 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> за дата: <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 | <?php if (is_array($_smarty_tpl->tpl_vars['dayList']->value)) {?>
    <a target="blank" href="../controller/print_day_results.php?date=<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
" style="color:white; text-decoration: none; font-size: 14px;">
        <img src="../images/print.png" width="15" height="15">Принтирай днешните резултати</a>
    <?php }?>
</footer>

<?php echo '<script'; ?>
>
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
<?php echo '</script'; ?>
>
</body>

</html><?php }
}
