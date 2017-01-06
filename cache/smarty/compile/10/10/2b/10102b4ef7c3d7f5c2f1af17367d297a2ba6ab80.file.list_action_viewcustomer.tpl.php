<?php /* Smarty version Smarty-3.1.19, created on 2017-01-06 19:26:59
         compiled from "F:\xampp\htdocs\hyseedshop\modules\blocknewsletter\views\templates\admin\list_action_viewcustomer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16897586f8d13a99883-48203945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10102b4ef7c3d7f5c2f1af17367d297a2ba6ab80' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\modules\\blocknewsletter\\views\\templates\\admin\\list_action_viewcustomer.tpl',
      1 => 1480066390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16897586f8d13a99883-48203945',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'disable' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586f8d13ad73c2_58500472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586f8d13ad73c2_58500472')) {function content_586f8d13ad73c2_58500472($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
