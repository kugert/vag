<?php /*%%SmartyHeaderCode:58992093657f9121f1cf125-75733612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abb254a397e65c98bc3e7527d8e61e968c1bad69' => 
    array (
      0 => '/data/sites/vag/public/themes/default-bootstrap/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1473163514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58992093657f9121f1cf125-75733612',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f912200e2706_21920558',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f912200e2706_21920558')) {function content_57f912200e2706_21920558($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://192.168.66.100/my-account" title="Управление моей учетной записью" rel="nofollow">Моя учетная запись</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://192.168.66.100/order-history" title="Мои заказы" rel="nofollow">Мои заказы</a></li>
						<li><a href="http://192.168.66.100/order-slip" title="Мои платёжные квитанции" rel="nofollow">Мои платёжные квитанции</a></li>
			<li><a href="http://192.168.66.100/addresses" title="Мои адреса" rel="nofollow">Мои адреса</a></li>
			<li><a href="http://192.168.66.100/identity" title="Управление моими персональными данными" rel="nofollow">Моя личная информация</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
