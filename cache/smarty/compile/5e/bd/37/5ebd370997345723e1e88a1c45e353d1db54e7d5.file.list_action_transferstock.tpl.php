<?php /* Smarty version Smarty-3.1.19, created on 2016-10-08 18:17:38
         compiled from "/data/sites/vag/public/admin/themes/default/template/helpers/list/list_action_transferstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9975836657f90e121c4632-10305074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ebd370997345723e1e88a1c45e353d1db54e7d5' => 
    array (
      0 => '/data/sites/vag/public/admin/themes/default/template/helpers/list/list_action_transferstock.tpl',
      1 => 1473163512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9975836657f90e121c4632-10305074',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f90e12367715_20423920',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f90e12367715_20423920')) {function content_57f90e12367715_20423920($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-exchange"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
