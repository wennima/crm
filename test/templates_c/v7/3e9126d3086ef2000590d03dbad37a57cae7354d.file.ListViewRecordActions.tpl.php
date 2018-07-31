<?php /* Smarty version Smarty-3.1.7, created on 2018-07-26 15:03:01
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/v7/modules/Settings/Workflows/ListViewRecordActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:508009465b59e2a50ad473-58365695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e9126d3086ef2000590d03dbad37a57cae7354d' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/v7/modules/Settings/Workflows/ListViewRecordActions.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '508009465b59e2a50ad473-58365695',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'LISTVIEW_ENTRY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b59e2a50b8a6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b59e2a50b8a6')) {function content_5b59e2a50b8a6($_smarty_tpl) {?>
<!--LIST VIEW RECORD ACTIONS--><div style="width:80px ;"><a class="deleteRecordButton" style=" opacity: 0; padding: 0 5px;"><i title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fa fa-trash alignMiddle"></i></a><input style="opacity: 0;" <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('status')){?> checked value="on" <?php }else{ ?> value="off"<?php }?> data-on-color="success"  data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" type="checkbox" name="workflowstatus" id="workflowstatus"></div><?php }} ?>