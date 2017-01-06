<?php /* Smarty version Smarty-3.1.19, created on 2017-01-06 19:30:17
         compiled from "F:\xampp\htdocs\hyseedshop\themes\ap_travel\modules\socialsharing\views\templates\hook\socialsharing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9680586f8dd9c96e42-59621714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f5a48131c80913014d8439b33f83d45eb46d243' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\themes\\ap_travel\\modules\\socialsharing\\views\\templates\\hook\\socialsharing.tpl',
      1 => 1483639449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9680586f8dd9c96e42-59621714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
    'module_dir' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586f8dd9cb4f37_76443472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586f8dd9cb4f37_76443472')) {function content_586f8dd9cb4f37_76443472($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value||$_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value||$_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value||$_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value) {?>
	<p class="socialsharing_product no-print">
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value) {?>
			<button  data-type="twitter" type="button" class="btn  btn-twitter social-sharing">
				<i class="fa fa-twitter"></i>
				<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/twitter.gif");?>
" alt="Tweet" /> -->
			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value) {?>
			<button  data-type="facebook" type="button" class="btn  btn-facebook  social-sharing">
				<i class="fa fa-facebook"></i>
				<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/facebook.gif");?>
" alt="Facebook Like" /> -->
			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value) {?>
			<button data-type="google-plus" type="button" class="btn  btn-google-plus  social-sharing">
				<i class="fa fa-google-plus"></i>
				<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/google.gif");?>
" alt="Google Plus" /> -->
			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value) {?>
			<button data-type="pinterest" type="button" class="btn  btn-pinterest  social-sharing">
				<i class="fa fa-pinterest"></i>
				<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/pinterest.gif");?>
" alt="Pinterest" /> -->
			</button>
		<?php }?>
	</p>
<?php }?><?php }} ?>
