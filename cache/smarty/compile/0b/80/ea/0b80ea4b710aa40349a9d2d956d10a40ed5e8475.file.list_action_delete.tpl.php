<?php /* Smarty version Smarty-3.1.19, created on 2017-01-06 18:42:06
         compiled from "F:\xampp\htdocs\hyseedshop\admin32\themes\default\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25608586f828e09d576-89460817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b80ea4b710aa40349a9d2d956d10a40ed5e8475' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\admin32\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1480066384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25608586f828e09d576-89460817',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586f828e0b39e8_57176195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586f828e0b39e8_57176195')) {function content_586f828e0b39e8_57176195($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
