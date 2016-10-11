<?php /* Smarty version Smarty-3.1.19, created on 2016-10-08 18:15:34
         compiled from "/data/sites/vag/public/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103804247957f90d9678e7e8-82453803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '752f3fcfa4270fbe42ecafc05ed0fb8b64252a0f' => 
    array (
      0 => '/data/sites/vag/public/admin/themes/default/template/content.tpl',
      1 => 1473163512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103804247957f90d9678e7e8-82453803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f90d9682e9b6_34539696',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f90d9682e9b6_34539696')) {function content_57f90d9682e9b6_34539696($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
