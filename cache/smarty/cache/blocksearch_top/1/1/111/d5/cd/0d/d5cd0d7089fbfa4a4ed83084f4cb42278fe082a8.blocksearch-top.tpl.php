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
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586ffb153249a7_84466362',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586ffb153249a7_84466362')) {function content_586ffb153249a7_84466362($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="pull-right">
	<form id="searchbox" method="get" action="//localhost/hyseedshop/cari" >
	 	
			<button type="submit" name="submit_search" class="btn btn-outline-inverse fa fa-search"></button> 
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Cari" value="" />
		
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
