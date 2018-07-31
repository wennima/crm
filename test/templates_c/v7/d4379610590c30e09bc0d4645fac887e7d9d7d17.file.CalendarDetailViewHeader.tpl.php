<?php /* Smarty version Smarty-3.1.7, created on 2018-07-27 08:06:12
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/v7/modules/Users/CalendarDetailViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5664247935b5ad274019000-65015414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4379610590c30e09bc0d4645fac887e7d9d7d17' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/v7/modules/Users/CalendarDetailViewHeader.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5664247935b5ad274019000-65015414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_MODEL' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b5ad2740234f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5ad2740234f')) {function content_5b5ad2740234f($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["MODULE_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'), null, 0);?><input id="recordId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" /><div class="detailViewContainer"><div class="detailViewTitle" id="prefPageHeader"></div><div class="detailViewInfo userPreferences row-fluid"><div class="details col-xs-12"><?php }} ?>