<?php /* Smarty version Smarty-3.1.19, created on 2017-01-06 18:34:13
         compiled from "F:\xampp\htdocs\hyseedshop\themes\ap_travel\modules\leomanagewidgets\views\widgets\widget_customercarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25152586f80b55c3159-03276045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5d9a270523e885a27070c0184da46b74e8d997d' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\themes\\ap_travel\\modules\\leomanagewidgets\\views\\widgets\\widget_customercarousel.tpl',
      1 => 1483639449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25152586f80b55c3159-03276045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'widget_heading' => 0,
    'show_controls' => 0,
    'customercarousel' => 0,
    'startSlide' => 0,
    'item' => 0,
    'interval' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586f80b55e29c2_30385967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586f80b55e29c2_30385967')) {function content_586f80b55e29c2_30385967($_smarty_tpl) {?>
 
<div id="custhtmlcarosel<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="block custhtmlcarosel">
    <?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
    <h4 class="widget-heading page-subheading">
        <?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

    </h4>
    <?php }?>
    <div class="block_content">
        <div class="carousel slide" data-ride="carousel">
            <?php if ($_smarty_tpl->tpl_vars['show_controls']->value&&count($_smarty_tpl->tpl_vars['customercarousel']->value)>1) {?>
        	<a class="carousel-control left" href="#custhtmlcarosel<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"   data-slide="prev">&lsaquo;</a>
        	<a class="carousel-control right" href="#custhtmlcarosel<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"  data-slide="next">&rsaquo;</a>
            <?php }?>
            <div class="carousel-inner">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customercarousel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["mypLoop"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["mypLoop"]['index']++;
?>
                <div class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['mypLoop']['index']==$_smarty_tpl->tpl_vars['startSlide']->value) {?>active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</div>
            <?php } ?>   
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

$(document).ready(function() {
    $('#custhtmlcarosel<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').each(function(){
        $(this).carousel({
            pause: 'hover', 
            interval: <?php echo $_smarty_tpl->tpl_vars['interval']->value;?>

        });
    });
     
});


</script><?php }} ?>
