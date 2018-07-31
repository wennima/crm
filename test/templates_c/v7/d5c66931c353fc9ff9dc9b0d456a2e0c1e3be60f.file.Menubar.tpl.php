<?php /* Smarty version Smarty-3.1.7, created on 2018-07-23 06:19:28
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/v7/modules/MailManager/partials/Menubar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17723406335b55737006b0e3-16060186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5c66931c353fc9ff9dc9b0d456a2e0c1e3be60f' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/v7/modules/MailManager/partials/Menubar.tpl',
      1 => 1532280676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17723406335b55737006b0e3-16060186',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b557370077c0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b557370077c0')) {function content_5b557370077c0($_smarty_tpl) {?>
<div id="modules-menu" class="modules-menu mmModulesMenu" style="width: 100%;"><div><span><?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->username();?>
</span><span class="pull-right"><span class="cursorPointer mailbox_refresh" title="<?php echo vtranslate('LBL_Refresh',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i class="fa fa-refresh"></i></span>&nbsp;<span class="cursorPointer mailbox_setting" title="<?php echo vtranslate('JSLBL_Settings',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i class="fa fa-cog"></i></span></span></div><div id="mail_compose" class="cursorPointer"><i class="fa fa-pencil-square-o"></i>&nbsp;<?php echo vtranslate('LBL_Compose',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div id='folders_list'></div></div><?php }} ?>