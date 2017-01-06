<?php /* Smarty version Smarty-3.1.19, created on 2017-01-06 18:29:57
         compiled from "F:\xampp\htdocs\hyseedshop\modules\addsharethis\addsharethis_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5754586f7fb5497473-08031126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '156abbcfae2f6882f7de4e527ef9a18d9eae23b4' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\modules\\addsharethis\\addsharethis_header.tpl',
      1 => 1483622475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5754586f7fb5497473-08031126',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'cover' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586f7fb549ef47_90084912',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586f7fb549ef47_90084912')) {function content_586f7fb549ef47_90084912($_smarty_tpl) {?><meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default');?>
" />

<?php }} ?>
