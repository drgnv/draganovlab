1.------NAMING CONVENTIONS------
A.-VARIABLEL- lowercase_separated_by_underscores
B.-METHODS- lowerCamelCase
C.-CLASSES- UpperCamelCase
D.-DIRECTORIES- lowercase_separated_by_underscores

2.-----WORKFLOW-------
=====Feature branch workflow=======

3.------Main branch-----
=====Master=======

4.-------Used technologies------
A.Smarty template system
B.Data tables
C.jQuery
D.Barcodescan

5.-------Main folders-------
A.model - Main classes, Work with databases, Main Host file with the host settings
    a1, class Host (Host.php) EXTENDS class Basic (Basic.php) EXTENDS Settings (Settings,php)
B.controller
    b1. Contains controllers (.php files) witch are processing the information recived from classes in dir model/ and send it to view 
C.view
    c1, Contains all the templates (.tpl files with html/css/js/smarty elements and other)
