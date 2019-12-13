<?php
/* Smarty version 3.1.32, created on 2019-12-09 16:51:16
  from '/var/www/html/dlab/view/resultbyid.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dee5f64e47eb0_57230070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '279b43981560ba66bc34fe92ade8971fff239165' => 
    array (
      0 => '/var/www/html/dlab/view/resultbyid.tpl',
      1 => 1575903072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dee5f64e47eb0_57230070 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name=Generator content="FastReport 4.0 http://www.fast-report.com">

    <title></title>
    <style type="text/css"><!--

        .s0 {
            font-family: Arial;
            font-size: 11px;
            color: #000000; font-style: italic;
            background-color: transparent;
            text-align: Left; vertical-align: Middle;
        }
        .s1 {
            font-family: Arial;
            font-size: 12px;
            color: #000000; font-weight: bold; font-style: normal;
            background-color: transparent;
            border-color:#000000; border-style: solid;
            border-left-width: 1;
            border-right-width: 1;
            border-top-width: 1;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Middle;
        }
        .s2 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#CFCFCF; border-style: solid;
            border-left-width: 1;
            border-right-width: 1;
            border-top-width: 1;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Middle;
        }
        .s3 {
            font-family: Arial;
            font-size: 15px;
            color: #000000; font-weight: bold; font-style: normal;
            background-color: transparent;
            border-color:#CFCFCF; border-style: solid;
            border-left-width: 1;
            border-right-width: 1;
            border-top-width: 1;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Top;
        }
        .s4 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-weight: bold; font-style: normal;
            background-color: transparent;
            border-color:#CFCFCF; border-style: solid;
            border-left-width: 1;
            border-right-width: 1;
            border-top-width: 1;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Top;
        }
        .s5 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#CFCFCF; border-style: solid;
            border-left-width: 1;
            border-right-width: 1;
            border-top-width: 1;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Top;
        }
        .s6 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#CFCFCF; border-style: solid;
            border-left-width: 1;
            border-right-width: 1;
            border-top-width: 1;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Top;
        }
        .s7 {
            font-family: Arial Narrow;
            font-size: 12px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#CFCFCF; border-style: solid;
            border-left-width: 1;
            border-right-width: 1;
            border-top-width: 1;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Top;
        }
        .s8 {
            font-family: Arial;
            font-size: 12px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#CFCFCF; border-style: solid;
            border-left-width: 1;
            border-right-width: 1;
            border-top-width: 1;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Middle;
        }
        .s9 {
            font-family: Arial;
            font-size: 12px;
            color: #000000; font-weight: bold; font-style: normal;
            background-color: #F1EFE2;
            border-color:#000000; border-style: solid;
            border-left-width: 1;
            border-right-width: 1;
            border-top-width: 1;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Middle;
        }
        .s10 {
            font-family: Arial;
            font-size: 12px;
            color: #000000; font-weight: bold; font-style: normal;
            background-color: #F1EFE2;
            border-color:#000000; border-style: solid;
            border-left-width: 1;
            border-right-width: 1;
            border-top-width: 1;
            border-bottom-width: 1;
            text-align: Center; vertical-align: Middle;
        }
        .s11 {
            font-family: Arial;
            font-size: 11px;
            color: #000000; font-style: italic;
            background-color: transparent;
            text-align: Right; vertical-align: Bottom;
        }
        .s12 {
            font-family: Arial Narrow;
            font-size: 12px;
            color: #000000; font-style: normal;
            background-color: transparent;
            text-align: Left; vertical-align: Bottom;
        }
        .s13 {
            font-family: Arial;
            font-size: 16px;
            color: #000000; font-weight: bold; font-style: normal;
            background-color: transparent;
            text-align: Center; vertical-align: Top;
        }
        .s14 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#000000; border-style: solid;
            border-left-width: 1;
            border-right-width: 1;
            border-top-width: 1;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Top;
        }
        .s15 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#000000; border-style: solid;
            border-left-width: 1;
            border-right-width: 1;
            border-top-width: 1;
            border-bottom-width: 1;
            text-align: Center; vertical-align: Top;
        }
        .s16 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#000000; border-style: solid;
            border-left-width: 1;
            border-right-width: 1;
            border-top-width: 1;
            border-bottom-width: 1;
            text-align: Right; vertical-align: Top;
        }
        .s17 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#000000; border-style: solid;
            border-left-width: 1;
            border-right-width: 0px;
            border-top-width: 1;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Top;
        }
        .s18 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#000000; border-style: solid;
            border-left-width: 0px;
            border-right-width: 1;
            border-top-width: 1;
            border-bottom-width: 1;
            text-align: Right; vertical-align: Middle;
        }
        .s19 {
            font-family: Arial;
            font-size: 1px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#000000; border-style: solid;
            border-left-width: 0px;
            border-right-width: 0px;
            border-top-width: 1;
            border-bottom-width: 0px;
            text-align: Left; vertical-align: Top;
        }
        .s20 {
            font-family: Arial;
            font-size: 11px;
            color: #000000; font-style: italic;
            background-color: transparent;
            text-align: Left; vertical-align: Middle;
        }
        .s21 {
            font-family: Arial;
            font-size: 11px;
            color: #000000; font-weight: bold; font-style: normal;
            background-color: transparent;
            text-align: Left; vertical-align: Middle;
        }
        .s22 {
            font-family: Arial;
            font-size: 11px;
            color: #000000; font-weight: bold; font-style: normal;
            background-color: transparent;
            text-align: Right; vertical-align: Middle;
        }
        .s23 {
            font-family: Arial;
            font-size: 11px;
            color: #000000; font-style: normal;
            background-color: transparent;
            text-align: Right; vertical-align: Middle;
        }
        .s24 {
            font-family: Arial;
            font-size: 8px;
            color: #000000; font-style: normal;
            background-color: transparent;
            text-align: Right; vertical-align: Top;
        }
        .s25 {
            font-family: Arial;
            font-size: 8px;
            color: #000000; font-style: normal;
            background-color: transparent;
            text-align: Left; vertical-align: Top;
        }
        .s26 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#CFCFCF; border-style: solid;
            border-left-width: 1;
            border-right-width: 0px;
            border-top-width: 1;
            border-bottom-width: 0px;
            text-align: Left; vertical-align: Middle;
        }
        .s27 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#CFCFCF; border-style: solid;
            border-left-width: 0px;
            border-right-width: 1;
            border-top-width: 0px;
            border-bottom-width: 0px;
            text-align: Left; vertical-align: Middle;
        }
        .s28 {
            font-family: Arial;
            font-size: 12px;
            color: #000000; font-weight: bold; font-style: normal;
            background-color: transparent;
            border-color:#000000; border-style: solid;
            border-left-width: 0px;
            border-right-width: 1;
            border-top-width: 1;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Middle;
        }
        .s29 {
            font-family: Arial;
            font-size: 15px;
            color: #000000; font-weight: bold; font-style: normal;
            background-color: transparent;
            border-color:#CFCFCF; border-style: solid;
            border-left-width: 0px;
            border-right-width: 1;
            border-top-width: 1;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Top;
        }
        .s30 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#CFCFCF; border-style: solid;
            border-left-width: 0px;
            border-right-width: 0px;
            border-top-width: 1;
            border-bottom-width: 0px;
            text-align: Left; vertical-align: Middle;
        }
        .s31 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#CFCFCF; border-style: solid;
            border-left-width: 1;
            border-right-width: 1;
            border-top-width: 0px;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Middle;
        }
        .s32 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-weight: bold; font-style: normal;
            background-color: transparent;
            border-color:#CFCFCF; border-style: solid;
            border-left-width: 0px;
            border-right-width: 1;
            border-top-width: 0px;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Top;
        }
        .s33 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#CFCFCF; border-style: solid;
            border-left-width: 0px;
            border-right-width: 1;
            border-top-width: 0px;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Middle;
        }
        .s34 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-weight: bold; font-style: normal;
            background-color: transparent;
            border-color:#CFCFCF; border-style: solid;
            border-left-width: 0px;
            border-right-width: 1;
            border-top-width: 1;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Top;
        }
        .s35 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#CFCFCF; border-style: solid;
            border-left-width: 0px;
            border-right-width: 1;
            border-top-width: 1;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Middle;
        }
        .s36 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#CFCFCF; border-style: solid;
            border-left-width: 0px;
            border-right-width: 1;
            border-top-width: 0px;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Top;
        }
        .s37 {
            font-family: Arial;
            font-size: 12px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#CFCFCF; border-style: solid;
            border-left-width: 0px;
            border-right-width: 1;
            border-top-width: 0px;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Middle;
        }
        .s38 {
            font-family: Arial Narrow;
            font-size: 12px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#CFCFCF; border-style: solid;
            border-left-width: 0px;
            border-right-width: 1;
            border-top-width: 0px;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Top;
        }
        .s39 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#CFCFCF; border-style: solid;
            border-left-width: 0px;
            border-right-width: 1;
            border-top-width: 0px;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Top;
        }
        .s40 {
            font-family: Arial;
            font-size: 12px;
            color: #000000; font-weight: bold; font-style: normal;
            background-color: #F1EFE2;
            border-color:#000000; border-style: solid;
            border-left-width: 0px;
            border-right-width: 1;
            border-top-width: 1;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Middle;
        }
        .s41 {
            font-family: Arial;
            font-size: 12px;
            color: #000000; font-weight: bold; font-style: normal;
            background-color: #F1EFE2;
            border-color:#000000; border-style: solid;
            border-left-width: 0px;
            border-right-width: 1;
            border-top-width: 1;
            border-bottom-width: 1;
            text-align: Center; vertical-align: Middle;
        }
        .s42 {
            font-family: Arial;
            font-size: 12px;
            color: #000000; font-weight: bold; font-style: normal;
            background-color: #F1EFE2;
            border-color:#000000; border-style: solid;
            border-left-width: 0px;
            border-right-width: 1;
            border-top-width: 0px;
            border-bottom-width: 1;
            text-align: Center; vertical-align: Middle;
        }
        .s43 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#000000; border-style: solid;
            border-left-width: 1;
            border-right-width: 1;
            border-top-width: 0px;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Top;
        }
        .s44 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#000000; border-style: solid;
            border-left-width: 0px;
            border-right-width: 1;
            border-top-width: 0px;
            border-bottom-width: 1;
            text-align: Center; vertical-align: Top;
        }
        .s45 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#000000; border-style: solid;
            border-left-width: 0px;
            border-right-width: 1;
            border-top-width: 0px;
            border-bottom-width: 1;
            text-align: Right; vertical-align: Top;
        }
        .s46 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#000000; border-style: solid;
            border-left-width: 0px;
            border-right-width: 0px;
            border-top-width: 0px;
            border-bottom-width: 1;
            text-align: Left; vertical-align: Top;
        }
        .s47 {
            font-family: Arial;
            font-size: 13px;
            color: #000000; font-style: normal;
            background-color: transparent;
            border-color:#000000; border-style: solid;
            border-left-width: 0px;
            border-right-width: 1;
            border-top-width: 0px;
            border-bottom-width: 1;
            text-align: Right; vertical-align: Middle;
        }
        .s48 {
            font-family: Arial;
            font-size: 1px;
            color: #000000; font-style: normal;
            background-color: transparent;
            text-align: Left; vertical-align: Top;
        }
        --></style>
</head>
<body
        bgcolor="#FFFFFF" text="#000000">

<a name="PageN1"></a>
<table width="680" border="0" cellspacing="0" cellpadding="0">
    <tr style="height: 1px"><td width="68"/><td width="49"/><td width="19"/><td width="8"/><td width="121"/><td width="19"/><td width="27"/><td width="19"/><td width="23"/><td width="15"/><td width="38"/><td width="23"/><td width="15"/><td width="15"/><td width="34"/><td width="19"/><td width="3"/><td width="1"/><td width="15"/><td width="8"/><td width="8"/><td width="8"/><td width="26"/><td width="15"/><td width="2"/><td width="84"/><td width="1"/></tr>
    <tr style="height:15px">
        <td colspan="15" class="s0">Лечебно заведение</td><td colspan="12" class="s0">РЦЗ номер</td>
    </tr>
    <tr style="height:18px">
        <td colspan="15" class="s1">ДКЦ 1-ЛОМ ЕООД</td><td colspan="12" class="s28">1224134001</td>
    </tr>
    <tr style="height:11px">
        <td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/>
    </tr>
    <tr style="height:15px">
        <td colspan="15" class="s0">Адрес</td><td colspan="12" class="s0">Телефон</td>
    </tr>
    <tr style="height:18px">
        <td colspan="15" class="s1">Лом, 'Каблешков' 2</td><td colspan="12" class="s28">+359 971 66152</td>
    </tr>
    <tr style="height:24px">
        <td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/>
    </tr>
    <tr style="height:1px">
        <td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/>
    </tr>
    <tr style="height:21px">
        <td rowspan="2" class="s2">Пациент</td><td colspan="10" rowspan="2" class="s29"><?php echo $_smarty_tpl->tpl_vars['patient']->value[0]['names'];?>
</td>
        <td/>
    </tr>
    <tr style="height:1px">
        <td class="s27" style="font-size:1px">&nbsp;</td><td/><td/><td/><td/><td/><td/><td/><td/><td/>
    </tr>
    <tr style="height:22px">
        <td colspan="6" class="s35">Лабораторен №</td><td colspan="3" class="s34"><?php echo $_smarty_tpl->tpl_vars['patient']->value[0]['number'];?>
</td>
    </tr>
    <tr style="height:22px">
        <td class="s31">Изпратил</td><td colspan="7" class="s32"><?php echo $_smarty_tpl->tpl_vars['patient']->value[0]['doctor'];?>
</td><td colspan="7" class="s37">Специалност</td><td colspan="13" class="s38"><?php echo $_smarty_tpl->tpl_vars['patient']->value[0]['specialty'];?>
</td>
    </tr>
    <tr style="height:22px">
        <td colspan="3" class="s31">Дата на извършване:</td><td colspan="3" class="s39"><?php echo $_smarty_tpl->tpl_vars['patient']->value[0]['date'];?>
</td>
    </tr>
    <tr style="height:4px">
        <td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/>
    </tr>
    <tr style="height:18px">
        <td/><td/><td/><td/><td colspan="16" class="s13">Извършени изследвания</td><td colspan="3" class="s11">Лаб. №</td><td colspan="4" class="s12"><?php echo $_smarty_tpl->tpl_vars['patient']->value[0]['number'];?>
</td>
    </tr>
    <tr style="height:7px">
        <td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/>
    </tr>
    <tr style="height:18px">
        <td colspan="7" rowspan="2" class="s9">Изследване / Показател</td><td colspan="6" rowspan="2" class="s40">Резултат</td><td colspan="3" rowspan="2" class="s41">Мерна<br>единица</td><td colspan="11" class="s41">Реф. граници</td>
    </tr>
    <tr style="height:18px">
        <td colspan="9" class="s42">От</td><td colspan="2" class="s42">До</td>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['patient']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>
        <tr style="height:18px">
            <td colspan="7" class="s43"><?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>
</td><td colspan="5" class="s46"><?php echo $_smarty_tpl->tpl_vars['result']->value['result'];?>
</td><td class="s47" style="font-size:1px">&nbsp;</td><td colspan="3" class="s44"><?php echo $_smarty_tpl->tpl_vars['result']->value['unit'];?>
</td><td colspan="9" class="s45"><?php echo $_smarty_tpl->tpl_vars['result']->value['up'];?>
</td><td colspan="2" class="s45"><?php echo $_smarty_tpl->tpl_vars['result']->value['down'];?>
</td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <tr style="height:1px">
        <td colspan="27" class="s48" style="font-size:1px">&nbsp;</td>
    </tr>
    <tr style="height:14px">
        <td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/>
    </tr>
    <tr style="height:15px">
        <td colspan="2" class="s20">Дата на отпечатване:</td><td colspan="3" class="s21"><?php echo $_smarty_tpl->tpl_vars['dd']->value;?>
</td><td/><td/><td/><td/><td colspan="18" class="s20"></td>
    </tr>
    <tr style="height:15px">
        <td/><td/><td/><td/><td/><td/><td/><td/><td/><td colspan="18" class="s22"></td>
    </tr>
    <tr style="height:5px">
        <td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/><td/>
    </tr>
    <tr style="height:15px">
        <td/><td/><td/><td/><td/><td/><td/><td/><td/><td colspan="18" class="s23"><?php echo $_smarty_tpl->tpl_vars['patient']->value[0]['comment'];?>
</td>
    </tr>

</table>
</body></html>
<?php }
}
