<?php /* Smarty version Smarty-3.1.19, created on 2017-01-06 18:30:32
         compiled from "F:\xampp\htdocs\hyseedshop\themes\ap_travel\modules\blockviewed\blockviewed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7120586f7fd8a97944-53366458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '062afbcf1bc70f88d23077bfbc300cdb93093c22' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\themes\\ap_travel\\modules\\blockviewed\\blockviewed.tpl',
      1 => 1483639448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7120586f7fd8a97944-53366458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productsViewedObj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586f7fd8a9e259_10054487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586f7fd8a9e259_10054487')) {function content_586f7fd8a9e259_10054487($_smarty_tpl) {?>

<!-- Block Viewed products -->
<div id="viewed-products_block_left" class="block">
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Viewed products','mod'=>'blockviewed'),$_smarty_tpl);?>
</h4>
	<div class="block_content">
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/sidebar-obj.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['productsViewedObj']->value,'mod'=>'blockspecials'), 0);?>
 
	</div>
</div>
<?php }} ?>
