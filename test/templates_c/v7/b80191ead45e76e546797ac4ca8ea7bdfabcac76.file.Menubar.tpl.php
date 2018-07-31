<?php /* Smarty version Smarty-3.1.7, created on 2018-07-26 10:05:19
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/v7/modules/Documents/partials/Menubar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14463873135b599cdfd9b383-68098309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b80191ead45e76e546797ac4ca8ea7bdfabcac76' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/v7/modules/Documents/partials/Menubar.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14463873135b599cdfd9b383-68098309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_MODEL' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b599cdfda6e9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b599cdfda6e9')) {function content_5b599cdfda6e9($_smarty_tpl) {?>

<?php if ($_REQUEST['view']=='Detail'){?>
<div id="modules-menu" class="modules-menu">    
    <ul>
        <li class="active">
            <a href="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getListViewUrl();?>
">
				<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getModuleIcon();?>

                <span><?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
</span>
            </a>
        </li>
    </ul>
</div>
<?php }?><?php }} ?>