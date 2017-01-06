<?php /* Smarty version Smarty-3.1.19, created on 2017-01-07 01:00:40
         compiled from "F:\xampp\htdocs\hyseedshop\modules\tmhtmlcontent\views\templates\admin\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28293586fdb488789f4-72872970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '733bc8af8ac876656c20463b23dc6b11dbb514a6' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\modules\\tmhtmlcontent\\views\\templates\\admin\\admin.tpl',
      1 => 1483622477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28293586fdb488789f4-72872970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htmlcontent' => 0,
    'error' => 0,
    'confirmation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586fdb488b1e62_13775902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586fdb488b1e62_13775902')) {function content_586fdb488b1e62_13775902($_smarty_tpl) {?><div id="htmlcontent">
    <h2><?php echo $_smarty_tpl->tpl_vars['htmlcontent']->value['info']['name'];?>
 (v.<?php echo $_smarty_tpl->tpl_vars['htmlcontent']->value['info']['version'];?>
)</h2>
    
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['htmlcontent']->value['admin_tpl_path'])."messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"main",'text'=>$_smarty_tpl->tpl_vars['error']->value,'class'=>'error'), 0);?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['confirmation']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['htmlcontent']->value['admin_tpl_path'])."messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"main",'text'=>$_smarty_tpl->tpl_vars['confirmation']->value,'class'=>'conf'), 0);?>

    <?php }?>
    
    <!-- New -->
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['htmlcontent']->value['admin_tpl_path'])."new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- Slides -->
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['htmlcontent']->value['admin_tpl_path'])."items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div><?php }} ?>
