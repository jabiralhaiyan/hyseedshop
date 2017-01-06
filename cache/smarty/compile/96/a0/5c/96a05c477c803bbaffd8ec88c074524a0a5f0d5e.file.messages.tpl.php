<?php /* Smarty version Smarty-3.1.19, created on 2017-01-07 01:05:00
         compiled from "F:\xampp\htdocs\hyseedshop\modules\tmhtmlcontent\views\templates\admin\messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11429586fdc4c52a820-35191255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96a05c477c803bbaffd8ec88c074524a0a5f0d5e' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\modules\\tmhtmlcontent\\views\\templates\\admin\\messages.tpl',
      1 => 1483622477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11429586fdc4c52a820-35191255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'text' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586fdc4c554d45_72524563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586fdc4c554d45_72524563')) {function content_586fdc4c554d45_72524563($_smarty_tpl) {?><div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-response" <?php if (!isset($_smarty_tpl->tpl_vars['text']->value)) {?>style="display:none;"<?php }?> class="message <?php if (isset($_smarty_tpl->tpl_vars['class']->value)) {?><?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php }?>">
	<div class="content"><?php if (isset($_smarty_tpl->tpl_vars['text']->value)) {?><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
<?php }?></div>
</div><?php }} ?>
