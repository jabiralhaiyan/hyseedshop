<?php /* Smarty version Smarty-3.1.19, created on 2017-01-06 19:11:32
         compiled from "F:\xampp\htdocs\hyseedshop\themes\ap_travel\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10847586f89749c4c75-39993358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4314fb038e51b35c08898fd591316967f817f19' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\themes\\ap_travel\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1483639448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10847586f89749c4c75-39993358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586f8974a18178_37037800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586f8974a18178_37037800')) {function content_586f8974a18178_37037800($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="block">
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
