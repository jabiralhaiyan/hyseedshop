<?php /* Smarty version Smarty-3.1.19, created on 2017-01-06 18:34:13
         compiled from "F:\xampp\htdocs\hyseedshop\themes\ap_travel\modules\blockleoblogs\blockleoblogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27850586f80b56b1879-49928200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e625423c4feec9c5c1af84510b9120cf80aba676' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\themes\\ap_travel\\modules\\blockleoblogs\\blockleoblogs.tpl',
      1 => 1483639448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27850586f80b56b1879-49928200',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blogs' => 0,
    'tabname' => 0,
    'itemsperpage' => 0,
    'mblogs' => 0,
    'columnspage' => 0,
    'scolumn' => 0,
    'blog' => 0,
    'config' => 0,
    'view_all_link' => 0,
    'interval' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586f80b5755944_25740570',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586f80b5755944_25740570')) {function content_586f80b5755944_25740570($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\xampp\\htdocs\\hyseedshop\\tools\\smarty\\plugins\\modifier.date_format.php';
?>

<!-- MODULE Block blockleoblogstabs -->
<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable("blockleoblogs", null, 0);?>
<div id="blockleoblogstabs" class="blogs_block exclusive blockleoblogs products_block">
	<h4 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Latest blog','mod'=>'blockleoblogs'),$_smarty_tpl);?>
</h4>
	<div class="block_content">	
		<?php if (!empty($_smarty_tpl->tpl_vars['blogs']->value)) {?>
			<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable("blockleoblogs", null, 0);?>
			<?php if (!empty($_smarty_tpl->tpl_vars['blogs']->value)) {?>
<div class="carousel slide" id="<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
">
	 <?php if (count($_smarty_tpl->tpl_vars['blogs']->value)>$_smarty_tpl->tpl_vars['itemsperpage']->value) {?>	 
		<div class="carousel-btn">
		 	<a class="carousel-control left" href="#<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
"   data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
"  data-slide="next">&rsaquo;</a>
		</div>
	<?php }?>
	<div class="carousel-inner">
	<?php $_smarty_tpl->tpl_vars['mblogs'] = new Smarty_variable(array_chunk($_smarty_tpl->tpl_vars['blogs']->value,$_smarty_tpl->tpl_vars['itemsperpage']->value), null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['blogs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blogs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mblogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['blogs']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['blogs']->key => $_smarty_tpl->tpl_vars['blogs']->value) {
$_smarty_tpl->tpl_vars['blogs']->_loop = true;
 $_smarty_tpl->tpl_vars['blogs']->index++;
 $_smarty_tpl->tpl_vars['blogs']->first = $_smarty_tpl->tpl_vars['blogs']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['mypLoop']['first'] = $_smarty_tpl->tpl_vars['blogs']->first;
?>
		<div class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['mypLoop']['first']) {?>active<?php }?>">
				<?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['blog']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['blog']->iteration=0;
 $_smarty_tpl->tpl_vars['blog']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->_loop = true;
 $_smarty_tpl->tpl_vars['blog']->iteration++;
 $_smarty_tpl->tpl_vars['blog']->index++;
 $_smarty_tpl->tpl_vars['blog']->first = $_smarty_tpl->tpl_vars['blog']->index === 0;
 $_smarty_tpl->tpl_vars['blog']->last = $_smarty_tpl->tpl_vars['blog']->iteration === $_smarty_tpl->tpl_vars['blog']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blogs']['first'] = $_smarty_tpl->tpl_vars['blog']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blogs']['last'] = $_smarty_tpl->tpl_vars['blog']->last;
?>
				<?php if ($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['columnspage']->value==1&&$_smarty_tpl->tpl_vars['columnspage']->value>1) {?>
				  <div class="row">
				<?php }?>
				<div class="col-xs-12 col-sm-12 col-md-<?php echo $_smarty_tpl->tpl_vars['scolumn']->value;?>
 col-lg-<?php echo $_smarty_tpl->tpl_vars['scolumn']->value;?>
 blog_block ajax_block_blog <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['blogs']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['blogs']['last']) {?>last_item<?php }?>">
					<div class="blog_container clearfix">
							
							<?php if ($_smarty_tpl->tpl_vars['blog']->value['image']&&$_smarty_tpl->tpl_vars['config']->value->get('blockleo_blogs_img',1)) {?>
							<div class="blog-image ImageWrapper">
								<img src="<?php echo $_smarty_tpl->tpl_vars['blog']->value['preview_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
"/>
								<span class="PStyleBe">
									<a href="<?php echo $_smarty_tpl->tpl_vars['blog']->value['link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="blog-viewmore"><?php echo smartyTranslate(array('s'=>'Read more','mod'=>'blockleoblogs'),$_smarty_tpl);?>
</a>
								</span>
							</div>
							<?php }?>

							<div class="blog-meta text-left">
								
								<?php if ($_smarty_tpl->tpl_vars['config']->value->get('blockleo_blogs_cat',1)) {?>
								<span class="blog-cat"> 
									<a href="<?php echo $_smarty_tpl->tpl_vars['blog']->value['category_link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['category_title'], ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-outline btn-sm"><?php echo $_smarty_tpl->tpl_vars['blog']->value['category_title'];?>
</a>
								</span>
								<?php }?>
								


								<?php if ($_smarty_tpl->tpl_vars['config']->value->get('blockleo_blogs_cre',1)) {?> 
								<span class="blog-created">
									<?php echo smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%B %e, %Y");?>

								</span>
								<?php }?> 
								
								<?php if ($_smarty_tpl->tpl_vars['config']->value->get('blockleo_blogs_cout',1)) {?> 
								<span class="blog-ctncomment">
									<span class="fa fa-comment"> <?php echo smartyTranslate(array('s'=>'Comment','mod'=>'blockleoblogs'),$_smarty_tpl);?>
:</span> <?php echo $_smarty_tpl->tpl_vars['blog']->value['comment_count'];?>

								</span>
								<?php }?>  
								
								<?php if ($_smarty_tpl->tpl_vars['config']->value->get('blockleo_blogs_aut',1)) {?> 
								<span class="blog-author">
									<span class="fa fa-user"> <?php echo smartyTranslate(array('s'=>'Author','mod'=>'blockleoblogs'),$_smarty_tpl);?>
:</span> <?php echo $_smarty_tpl->tpl_vars['blog']->value['author'];?>

								</span>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['config']->value->get('blockleo_blogs_hits',1)) {?> 
								<span class="blog-hits">
									<span class="fa fa-heart"> <?php echo smartyTranslate(array('s'=>'Hits','mod'=>'blockleoblogs'),$_smarty_tpl);?>
:</span> <?php echo $_smarty_tpl->tpl_vars['blog']->value['hits'];?>

								</span>	
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['config']->value->get('blockleo_blogs_title',1)) {?>
									<h5><a href="<?php echo $_smarty_tpl->tpl_vars['blog']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['blog']->value['title']),30,'');?>
</a></h5>
								<?php }?>
								<div class="blog-shortinfo">
									<?php if ($_smarty_tpl->tpl_vars['config']->value->get('blockleo_blogs_des',1)) {?> 
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['blog']->value['description']),70,'');?>

									<?php }?>  
								</div>
								<!-- <p>
									<a href="<?php echo $_smarty_tpl->tpl_vars['blog']->value['link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="view"><?php echo smartyTranslate(array('s'=>'Read more','mod'=>'blockleoblogs'),$_smarty_tpl);?>
</a>
								</p> -->
							</div>
							

							
						</div>
				</div>
				
				<?php if (($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['columnspage']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['blogs']['last'])&&$_smarty_tpl->tpl_vars['columnspage']->value>1) {?>
				</div>
				<?php }?>
					
				<?php } ?>
		</div>		
	<?php } ?>
	</div>
</div>
<?php }?>
		<?php }?>
	</div>
		<?php if ($_smarty_tpl->tpl_vars['config']->value->get('blockleo_blogs_show',1)) {?>
		<div><a class="pull-right btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['view_all_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'View All','mod'=>'blockleoblogs'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'View All','mod'=>'blockleoblogs'),$_smarty_tpl);?>
</a></div>
		<?php }?>	
</div>
<!-- /MODULE Block blockleoblogstabs -->
<script type="text/javascript">

$(document).ready(function() {
    $('#<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
').each(function(){
        $(this).carousel({
            pause: 'hover',
            interval: <?php echo $_smarty_tpl->tpl_vars['interval']->value;?>

        });
    });
});

</script>
 <?php }} ?>
