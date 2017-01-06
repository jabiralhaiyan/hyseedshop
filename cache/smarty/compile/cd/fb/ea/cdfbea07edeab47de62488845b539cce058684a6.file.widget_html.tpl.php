<?php /* Smarty version Smarty-3.1.19, created on 2017-01-06 18:34:13
         compiled from "F:\xampp\htdocs\hyseedshop\modules\leomanagewidgets\views\widgets\widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4647586f80b53d8b24-71785976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdfbea07edeab47de62488845b539cce058684a6' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\modules\\leomanagewidgets\\views\\widgets\\widget_html.tpl',
      1 => 1483653574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4647586f80b53d8b24-71785976',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586f80b5407d94_47219143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586f80b5407d94_47219143')) {function content_586f80b5407d94_47219143($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
