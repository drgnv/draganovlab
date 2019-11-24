<?php
/* Smarty version 3.1.32, created on 2019-05-01 17:26:44
  from 'C:\xampp\htdocs\draganovlab401\view\print.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cc9bab4d140e4_27632510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24b6ee387e71a257a17b28761a31afd34d43e024' => 
    array (
      0 => 'C:\\xampp\\htdocs\\draganovlab401\\view\\print.tpl',
      1 => 1556724402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc9bab4d140e4_27632510 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    @media print {
        /* insert your style declarations here */
        table {
            page-break-after: always; /* ensures the next will we appear on new page */
        }
    }
    #main{
			border: 0px solid black;
			padding: 10px;
		}

		.bordered, .n-bordered{
			border: 0px solid black;
			border-collapse: collapse;	
		}

		.n-bordered{
			border: none;
		}

		.bordered td, .n-bordered td{
			border: 0px solid black;
		}

		.n-bordered tr:first-child td{
			border-top: none;
		}

		.n-bordered tr:last-child td{
			border-bottom: none;
		}

		.n-bordered tr td:first-child{
			border-left: none;
		}

		.n-bordered tr td:last-child{
			border-right: none;
		}
</style>
<center>
<!-start urine->

<?php ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['ur'];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['s'];
$_prefixVariable2 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['shit'];
$_prefixVariable3 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['ourine'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable1 || $_prefixVariable2 || $_prefixVariable3 || $_prefixVariable4) {?>
<table  <?php ob_start();
echo $_smarty_tpl->tpl_vars['cito']->value;
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 == 'on') {?>background="../images/cito.png"<?php }?> id="main" border="1"    style="width: 648px;" cellspacing="4">
<tbody>
<tr>
<td style="width: 647px; height: 50px;">
   &nbsp;<b>Пациент:</b> <?php echo $_smarty_tpl->tpl_vars['patient_info']->value['patient']['names'];?>
<br>
   <?php ob_start();
echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['patient_info']->value['patient']['doctor'], $tmp);
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable6 < 3) {?>

       <?php } else { ?>

&nbsp;<b>Лекар:</b> <?php echo $_smarty_tpl->tpl_vars['patient_info']->value['patient']['doctor'];?>

       <?php }?>
       <p><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</p>
</td>
</tr>
<tr>
    <td style="width: 647px;">&nbsp;<b>Дата:</b> <?php echo $_smarty_tpl->tpl_vars['d']->value;?>
 &nbsp;&nbsp;&nbsp;&nbsp;  <b>№</b> <?php echo $_smarty_tpl->tpl_vars['patient_info']->value['patient']['number'];?>
</td>
</tr>
<tr>
    <td style="width: 647px;"><b>Изследвания: <br></b>
<?php ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['ur'];
$_prefixVariable7 = ob_get_clean();
if ($_prefixVariable7) {?>       
ph-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SG-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BIL-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;URB-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRO-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GLU-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KET-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIT-
<br><?php }
ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['s'];
$_prefixVariable8 = ob_get_clean();
if ($_prefixVariable8) {?>
    Седимент: 
    <?php }?>
    
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['shit'];
$_prefixVariable9 = ob_get_clean();
if ($_prefixVariable9) {?>
    Окултен кръвоизлив: 
    <br><?php }?>
     <?php ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['ourine'];
$_prefixVariable10 = ob_get_clean();
if ($_prefixVariable10) {?>
    Микроалбуминурия: 
    <br><?php }?>
</td>
</tr>
</tbody>
</table>

<?php }?>
    
    <!-end urine->
    
    
    
    
<?php ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['cbc'];
$_prefixVariable11 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['akr'];
$_prefixVariable12 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['dif'];
$_prefixVariable13 = ob_get_clean();
if ($_prefixVariable11 || $_prefixVariable12 || $_prefixVariable13) {?>
<table <?php ob_start();
echo $_smarty_tpl->tpl_vars['cito']->value;
$_prefixVariable14 = ob_get_clean();
if ($_prefixVariable14 == 'on') {?>background="../images/cito.png"<?php }?> id="main" border="1"    style="width: 648px;" cellspacing="4">
<tbody>
<tr>
<td style="width: 647px; height: 50px;">
   &nbsp;<b>Пациент:</b> <?php echo $_smarty_tpl->tpl_vars['patient_info']->value['patient']['names'];?>
 <br>
<?php ob_start();
echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['patient_info']->value['patient']['doctor'], $tmp);
$_prefixVariable15 = ob_get_clean();
if ($_prefixVariable15 < 3) {?>
       
       <?php } else { ?>
           
&nbsp;<b>Лекар:</b> <?php echo $_smarty_tpl->tpl_vars['patient_info']->value['patient']['doctor'];?>

       <?php }?>
       <p><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</p>
</td>
</tr>
<tr>
<td style="width: 647px;">&nbsp;<b>Дата:</b> <?php echo $_smarty_tpl->tpl_vars['d']->value;?>
&nbsp;&nbsp;&nbsp;&nbsp; <b>№</b> <?php echo $_smarty_tpl->tpl_vars['patient_info']->value['patient']['number'];?>
</td>
</tr>
<tr>
    <td style="width: 647px;"><b>Изследвания: <br></b>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['cbc'];
$_prefixVariable16 = ob_get_clean();
if ($_prefixVariable16) {?>
Пълна кръвна картина<?php }
ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['cbc'];
$_prefixVariable17 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['akr'];
$_prefixVariable18 = ob_get_clean();
if ($_prefixVariable17 && $_prefixVariable18) {?>
, 
<?php }
ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['akr'];
$_prefixVariable19 = ob_get_clean();
if ($_prefixVariable19) {?>
    АКР - капилярно
    <?php }?>
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['dif'];
$_prefixVariable20 = ob_get_clean();
if ($_prefixVariable20) {?>
        Диференциално броене на левкоцити
    <?php }?>
</td>
</tr>
</tbody>
</table>
   
<?php }?>
    
    
    <!-start blood->
<?php ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['blood'];
$_prefixVariable21 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['ele'];
$_prefixVariable22 = ob_get_clean();
if ($_prefixVariable21 || $_prefixVariable22) {?>
<table <?php ob_start();
echo $_smarty_tpl->tpl_vars['cito']->value;
$_prefixVariable23 = ob_get_clean();
if ($_prefixVariable23 == 'on') {?>background="../images/cito.png"<?php }?> id="main" border="1"    style="width: 648px;" cellspacing="4">
<tbody>
<tr>
<td style="width: 647px; height: 50px;">
   &nbsp;<b>Пациент:</b> <?php echo $_smarty_tpl->tpl_vars['patient_info']->value['patient']['names'];?>
<br>
<?php ob_start();
echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['patient_info']->value['patient']['doctor'], $tmp);
$_prefixVariable24 = ob_get_clean();
if ($_prefixVariable24 < 3) {?>
       
       <?php } else { ?>
           
&nbsp;<b>Лекар:</b> <?php echo $_smarty_tpl->tpl_vars['patient_info']->value['patient']['doctor'];?>

       <?php }
echo $_smarty_tpl->tpl_vars['code']->value;?>

</td> 
</tr>
<tr>
<td style="width: 647px;">&nbsp;<b>Дата:</b> <?php echo $_smarty_tpl->tpl_vars['d']->value;?>
&nbsp;&nbsp;&nbsp;&nbsp; <b>№</b> <?php echo $_smarty_tpl->tpl_vars['patient_info']->value['patient']['number'];?>
</td>
</tr>
<tr>
    <td style="width: 647px;"><b>Изследвания: <br></b>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['blood'];
$_prefixVariable25 = ob_get_clean();
if ($_prefixVariable25) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tests']->value['blood'], 'test', false, NULL, 'foo', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['total'];
?>
    &nbsp;<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] : null)) {
echo $_smarty_tpl->tpl_vars['test']->value;
} else { ?> <?php echo $_smarty_tpl->tpl_vars['test']->value;?>
, <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['ele'];
$_prefixVariable26 = ob_get_clean();
if ($_prefixVariable26) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tests']->value['ele'], 'test', false, NULL, 'foo', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['total'];
?>
    &nbsp;<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] : null)) {
echo $_smarty_tpl->tpl_vars['test']->value;
} else { ?> <?php echo $_smarty_tpl->tpl_vars['test']->value;?>
, <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</td>
</tr>
</tbody>
</table>
   
<?php }?>

<!-end blood->

 <!-start hormon->
<?php ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['hormon'];
$_prefixVariable27 = ob_get_clean();
if ($_prefixVariable27) {?>
<table <?php ob_start();
echo $_smarty_tpl->tpl_vars['cito']->value;
$_prefixVariable28 = ob_get_clean();
if ($_prefixVariable28 == 'on') {?>background="../images/cito.png"<?php }?> id="main" border="1"    style="width: 648px;" cellspacing="4">
<tbody>
<tr>
<td style="width: 647px; height: 50px;">
   &nbsp;<b>Пациент:</b> <?php echo $_smarty_tpl->tpl_vars['patient_info']->value['patient']['names'];?>
<br>
<?php ob_start();
echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['patient_info']->value['patient']['doctor'], $tmp);
$_prefixVariable29 = ob_get_clean();
if ($_prefixVariable29 < 3) {?>
       
       <?php } else { ?>
           
&nbsp;<b>Лекар:</b> <?php echo $_smarty_tpl->tpl_vars['patient_info']->value['patient']['doctor'];?>

       <?php }?>
       <p><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</p>
</td>
</tr>
<tr>
<td style="width: 647px;">&nbsp;<b>Дата:</b> <?php echo $_smarty_tpl->tpl_vars['d']->value;?>
 &nbsp;&nbsp;&nbsp;&nbsp; <b>№</b> <?php echo $_smarty_tpl->tpl_vars['patient_info']->value['patient']['number'];?>
</td>
</tr>
<tr>
    <td style="width: 647px;"><b>Изследвания: <br></b>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tests']->value['hormon'], 'test', false, NULL, 'foo', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['total'];
?>
    &nbsp;<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] : null)) {
echo $_smarty_tpl->tpl_vars['test']->value;
} else { ?> <?php echo $_smarty_tpl->tpl_vars['test']->value;?>
, <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</td>
</tr>
</tbody>
</table>
<?php }?>

<!-end hormon->

    <!-end blood->

    <!-start hormon->
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['tests']->value['coag'];
$_prefixVariable30 = ob_get_clean();
if ($_prefixVariable30) {?>
        <table <?php ob_start();
echo $_smarty_tpl->tpl_vars['cito']->value;
$_prefixVariable31 = ob_get_clean();
if ($_prefixVariable31 == 'on') {?>background="../images/cito.png"<?php }?> id="main" border="1"    style="width: 648px;" cellspacing="4">
            <tbody>
            <tr>
                <td style="width: 647px; height: 50px;">
                    &nbsp;<b>Пациент:</b> <?php echo $_smarty_tpl->tpl_vars['patient_info']->value['patient']['names'];?>
<br>
                    <?php ob_start();
echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['patient_info']->value['patient']['doctor'], $tmp);
$_prefixVariable32 = ob_get_clean();
if ($_prefixVariable32 < 3) {?>

                    <?php } else { ?>

                        &nbsp;<b>Лекар:</b> <?php echo $_smarty_tpl->tpl_vars['patient_info']->value['patient']['doctor'];?>

                    <?php }?>
                    <p><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</p>
                </td>
            </tr>
            <tr>
                <td style="width: 647px;">&nbsp;<b>Дата:</b> <?php echo $_smarty_tpl->tpl_vars['d']->value;?>
 &nbsp;&nbsp;&nbsp;&nbsp; <b>№</b> <?php echo $_smarty_tpl->tpl_vars['patient_info']->value['patient']['number'];?>
</td>
            </tr>
            <tr>
                <td style="width: 647px;"><b>Изследвания: <br></b>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tests']->value['coag'], 'test', false, NULL, 'foo', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['total'];
?>
                        &nbsp;<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] : null)) {
echo $_smarty_tpl->tpl_vars['test']->value;
} else { ?> <?php echo $_smarty_tpl->tpl_vars['test']->value;?>
, <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </td>
            </tr>
            </tbody>
        </table>
    <?php }?>

    <!-end hormon->
</center><?php }
}
