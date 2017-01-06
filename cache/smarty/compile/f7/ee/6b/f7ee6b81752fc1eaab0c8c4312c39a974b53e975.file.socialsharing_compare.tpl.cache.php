<?php /* Smarty version Smarty-3.1.19, created on 2017-01-07 01:21:52
         compiled from "F:\xampp\htdocs\hyseedshop\themes\ap_travel\modules\socialsharing\views\templates\hook\socialsharing_compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12483586fe040b39006-95121953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7ee6b81752fc1eaab0c8c4312c39a974b53e975' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\themes\\ap_travel\\modules\\socialsharing\\views\\templates\\hook\\socialsharing_compare.tpl',
      1 => 1483639449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12483586fe040b39006-95121953',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586fe040bdd1a1_84730242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586fe040bdd1a1_84730242')) {function content_586fe040bdd1a1_84730242($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value||$_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value||$_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value||$_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value) {?>
	<div id="social-share-compare">
		<p><?php echo smartyTranslate(array('s'=>"Share this comparison with your friends:",'mod'=>'socialsharing'),$_smarty_tpl);?>
</p>
		<p class="socialsharing_product">
			<?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value) {?>
				<button data-type="twitter" type="button" class="btn btn-default btn-block btn-twitter social-sharing">
					<i class="fa fa-twitter"></i> <?php echo smartyTranslate(array('s'=>"Tweet",'mod'=>'socialsharing'),$_smarty_tpl);?>

				</button>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value) {?>
				<button data-type="facebook" type="button" class="btn btn-default btn-block btn-facebook social-sharing">
					<i class="fa fa-facebook"></i> <?php echo smartyTranslate(array('s'=>"Share",'mod'=>'socialsharing'),$_smarty_tpl);?>

				</button>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value) {?>
				<button  data-type="google-plus" type="button" class="btn btn-default btn-block btn-google-plus social-sharing">
					<i class="fa fa-google-plus"></i> <?php echo smartyTranslate(array('s'=>"Google+",'mod'=>'socialsharing'),$_smarty_tpl);?>

				</button>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value) {?>
				<button data-type="pinterest"  type="button" class="btn btn-default btn-block btn-pinterest social-sharing">
  					<i class="fa fa-pinterest"></i> <?php echo smartyTranslate(array('s'=>"Pinterest",'mod'=>'socialsharing'),$_smarty_tpl);?>

  				</button>
			<?php }?>
		</p>
	</div>
<?php }?><?php }} ?>
