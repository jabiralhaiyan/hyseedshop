<?php /* Smarty version Smarty-3.1.19, created on 2017-01-06 18:29:58
         compiled from "F:\xampp\htdocs\hyseedshop\themes\ap_travel\modules\blocksearch\blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14363586f7fb6c1a197-90382161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5cd0d7089fbfa4a4ed83084f4cb42278fe082a8' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\themes\\ap_travel\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1483639448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14363586f7fb6c1a197-90382161',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586f7fb6c271e1_31808550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586f7fb6c271e1_31808550')) {function content_586f7fb6c271e1_31808550($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="search_block_top" class="pull-right">
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
	 	
			<button type="submit" name="submit_search" class="btn btn-outline-inverse fa fa-search"></button> 
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
		
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
