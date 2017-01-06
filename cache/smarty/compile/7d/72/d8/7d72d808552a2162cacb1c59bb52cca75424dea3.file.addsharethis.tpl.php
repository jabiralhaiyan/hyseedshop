<?php /* Smarty version Smarty-3.1.19, created on 2017-01-06 19:30:17
         compiled from "F:\xampp\htdocs\hyseedshop\modules\addsharethis\addsharethis.tpl" */ ?>
<?php /*%%SmartyHeaderCode:403586f8dd9bda998-38428674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d72d808552a2162cacb1c59bb52cca75424dea3' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\modules\\addsharethis\\addsharethis.tpl',
      1 => 1483622475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '403586f8dd9bda998-38428674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'addsharethis_data' => 0,
    'conf_row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586f8dd9bf53c9_16295464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586f8dd9bf53c9_16295464')) {function content_586f8dd9bf53c9_16295464($_smarty_tpl) {?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
css/addsharethis.css"/>
<?php if (isset($_smarty_tpl->tpl_vars['addsharethis_data']->value)) {?>
<div id="ShareDiv" class="addsharethis">
<div class="addsharethisinner">
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    
    <script type="text/javascript">stLight.options({publisher: "<?php echo $_smarty_tpl->tpl_vars['conf_row']->value;?>
", nativeCount:true });</script>
    
	<?php if (isset($_smarty_tpl->tpl_vars['addsharethis_data']->value['twitter'])) {?>
		<?php echo $_smarty_tpl->tpl_vars['addsharethis_data']->value['twitter'];?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['addsharethis_data']->value['google'])) {?>
		<?php echo $_smarty_tpl->tpl_vars['addsharethis_data']->value['google'];?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['addsharethis_data']->value['pinterest'])) {?>
		<?php echo $_smarty_tpl->tpl_vars['addsharethis_data']->value['pinterest'];?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['addsharethis_data']->value['facebook'])) {?>
		<?php echo $_smarty_tpl->tpl_vars['addsharethis_data']->value['facebook'];?>

	<?php }?>
</div>
</div>
<?php }?>

<?php }} ?>
