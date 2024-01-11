<?php
/* Smarty version 4.2.1, created on 2024-01-11 15:32:29
  from 'C:\laragon\www\SaeSemestre3-master\templates\notif.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65a00a0d9d5d71_93815633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '508355ddcc6afa71e5d11a60dfe9e74e2fe1404c' => 
    array (
      0 => 'C:\\laragon\\www\\SaeSemestre3-master\\templates\\notif.tpl',
      1 => 1704986282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a00a0d9d5d71_93815633 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="style/notif.css" rel="stylesheet" type="text/css" />

<div id="popup-notif" class="popup">
    <span class="close" id="closePopup-notif">&times;</span>
    <h2>Notification</h2>
    <p id="message"><?php echo $_smarty_tpl->tpl_vars['message_notif']->value;?>
</p>
</div><?php }
}
