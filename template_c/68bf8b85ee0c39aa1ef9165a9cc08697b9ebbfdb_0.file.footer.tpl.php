<?php
/* Smarty version 3.1.32, created on 2019-12-27 17:25:02
  from '/var/www/html/dlab/view/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e06224e56ba15_06988590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68bf8b85ee0c39aa1ef9165a9cc08697b9ebbfdb' => 
    array (
      0 => '/var/www/html/dlab/view/footer.tpl',
      1 => 1577460298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e06224e56ba15_06988590 (Smarty_Internal_Template $_smarty_tpl) {
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
"><form action="print_day_results.php" method="GET" style="margin:0; padding: 0;">
    DraganovLab © 2019 | <a href="../support.html" style="color: white; text-decoration: none;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['support'];?>
</a> | <?php echo $_smarty_tpl->tpl_vars['lang']->value['username'];?>
: <b><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</b> |
    <a href="../logout.php" style="color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['logout'];?>
</a> | <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['over_count']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
            <?php
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php echo $_smarty_tpl->tpl_vars['lang']->value['over'];?>

        <?php echo $_smarty_tpl->tpl_vars['lang']->value['patients'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['from'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['total'];?>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['total_count']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
            <?php
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php echo $_smarty_tpl->tpl_vars['lang']->value['for'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['date'];?>
: <?php echo $_smarty_tpl->tpl_vars['date']->value;?>

        |
        <input type="date" name="date" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
" style="width:137px; height:17px;">
        <input type="submit" name="printres" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['print'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['results'];?>
" style="width:150px; height:20px;">
</form>

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

</html>
<?php }
}
