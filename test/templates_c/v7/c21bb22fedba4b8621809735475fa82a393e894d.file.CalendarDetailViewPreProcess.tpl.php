<?php /* Smarty version Smarty-3.1.7, created on 2018-07-27 08:06:11
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/v7/modules/Users/CalendarDetailViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20731621155b5ad273ef5cb5-77225915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c21bb22fedba4b8621809735475fa82a393e894d' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/v7/modules/Users/CalendarDetailViewPreProcess.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20731621155b5ad273ef5cb5-77225915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b5ad273f0812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5ad273f0812')) {function content_5b5ad273f0812($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("SettingsMenuStart.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="bodyContents"><div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("CalendarDetailViewHeader.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>