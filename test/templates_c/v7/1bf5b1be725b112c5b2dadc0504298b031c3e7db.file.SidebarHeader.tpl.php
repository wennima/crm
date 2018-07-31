<?php /* Smarty version Smarty-3.1.7, created on 2018-07-26 10:05:19
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/v7/modules/Documents/partials/SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4193789085b599cdfcc7916-62186383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bf5b1be725b112c5b2dadc0504298b031c3e7db' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/v7/modules/Documents/partials/SidebarHeader.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4193789085b599cdfcc7916-62186383',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_MENU_CATEGORY' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b599cdfcd2ae',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b599cdfcd2ae')) {function content_5b599cdfcd2ae($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>
<div class="col-sm-12 col-xs-12 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
 moduleIcon">
    <div class="row" title="<?php echo vtranslate("Documents",$_smarty_tpl->tpl_vars['MODULE']->value);?>
">
		<span class="app-indicator-icon fa vicon-documents"></span>
    </div>
</div>
    
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>