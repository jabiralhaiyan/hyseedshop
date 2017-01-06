<?php /* Smarty version Smarty-3.1.19, created on 2017-01-06 18:42:06
         compiled from "F:\xampp\htdocs\hyseedshop\admin32\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30123586f828e0769a5-07107719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '994f7ae83e338b574e61286a892482c37716fa76' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\admin32\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1480066384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30123586f828e0769a5-07107719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586f828e080e50_68639762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586f828e080e50_68639762')) {function content_586f828e080e50_68639762($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
