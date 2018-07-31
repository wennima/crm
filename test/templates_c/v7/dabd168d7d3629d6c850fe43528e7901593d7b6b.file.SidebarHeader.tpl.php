<?php /* Smarty version Smarty-3.1.7, created on 2018-07-23 06:19:28
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/v7/modules/MailManager/partials/SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130015865b557370045ec1-14278491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dabd168d7d3629d6c850fe43528e7901593d7b6b' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/v7/modules/MailManager/partials/SidebarHeader.tpl',
      1 => 1532280676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130015865b557370045ec1-14278491',
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
  'unifunc' => 'content_5b5573700525a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5573700525a')) {function content_5b5573700525a($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>
<div class="col-sm-12 col-xs-12 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
    <div class="row" title="<?php echo strtoupper(vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value));?>
">
        <span class="app-indicator-icon fa vicon-mailmanager"></span>
    </div>
</div>
    
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>