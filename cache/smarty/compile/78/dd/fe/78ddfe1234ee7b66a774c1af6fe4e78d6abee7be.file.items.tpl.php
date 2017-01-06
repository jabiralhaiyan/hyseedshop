<?php /* Smarty version Smarty-3.1.19, created on 2017-01-07 01:00:40
         compiled from "F:\xampp\htdocs\hyseedshop\modules\tmhtmlcontent\views\templates\admin\items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27915586fdb48960668-74487154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78ddfe1234ee7b66a774c1af6fe4e78d6abee7be' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\modules\\tmhtmlcontent\\views\\templates\\admin\\items.tpl',
      1 => 1483622477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27915586fdb48960668-74487154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htmlitems' => 0,
    'lang' => 0,
    'langItems' => 0,
    'hook' => 0,
    'hookItems' => 0,
    'hItem' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586fdb489f1ac6_45441743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586fdb489f1ac6_45441743')) {function content_586fdb489f1ac6_45441743($_smarty_tpl) {?><ul class="lang-tabs">
    <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value['lang']['all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
		<li id="lang-<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
" class="lang-flag<?php if ($_smarty_tpl->tpl_vars['lang']->value['id_lang']==$_smarty_tpl->tpl_vars['htmlitems']->value['lang']['default']['id_lang']) {?> active<?php }?>"><img src="../img/l/<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
.jpg" class="pointer" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
</li>
    <?php } ?>
</ul>
<div class="lang-items">
<?php  $_smarty_tpl->tpl_vars['langItems'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['langItems']->_loop = false;
 $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['langItems']->key => $_smarty_tpl->tpl_vars['langItems']->value) {
$_smarty_tpl->tpl_vars['langItems']->_loop = true;
 $_smarty_tpl->tpl_vars['lang']->value = $_smarty_tpl->tpl_vars['langItems']->key;
?>
	
    <div id="items-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="lang-content" style="display:<?php if ($_smarty_tpl->tpl_vars['lang']->value==$_smarty_tpl->tpl_vars['htmlitems']->value['lang']['default']['id_lang']) {?>block<?php } else { ?>none<?php }?>;">
    <?php  $_smarty_tpl->tpl_vars['hookItems'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hookItems']->_loop = false;
 $_smarty_tpl->tpl_vars['hook'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['langItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hookItems']->key => $_smarty_tpl->tpl_vars['hookItems']->value) {
$_smarty_tpl->tpl_vars['hookItems']->_loop = true;
 $_smarty_tpl->tpl_vars['hook']->value = $_smarty_tpl->tpl_vars['hookItems']->key;
?>
    
        <h3 class="hook-title"><?php echo smartyTranslate(array('s'=>'Hook','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
 "<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
"</h3>
        <?php if ($_smarty_tpl->tpl_vars['hookItems']->value) {?>
            <ul id="items">
                <?php  $_smarty_tpl->tpl_vars['hItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hookItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hItem']->key => $_smarty_tpl->tpl_vars['hItem']->value) {
$_smarty_tpl->tpl_vars['hItem']->_loop = true;
?>
                    <li id="item-<?php echo $_smarty_tpl->tpl_vars['hItem']->value['id_item'];?>
" class="item">
                        <span class="item-order"><?php if ($_smarty_tpl->tpl_vars['hItem']->value['item_order']<=9) {?>0<?php }?><?php echo $_smarty_tpl->tpl_vars['hItem']->value['item_order'];?>
</span>
                        <!--<i class="icon-sort"></i>-->
                        <span class="item-title"><?php echo $_smarty_tpl->tpl_vars['hItem']->value['title'];?>
</span>
                        <span class="button button-edit"><i class="icon-edit"></i><?php echo smartyTranslate(array('s'=>'Edit','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</span>
                        <span class="button button-close"><i class="icon-remove"></i><?php echo smartyTranslate(array('s'=>'Close','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</span>
                        
                        <div class="item-container">
                            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['htmlitems']->value['postAction'];?>
" enctype="multipart/form-data" class="item-form">
                                <input type="hidden" name="lang_id" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" />
                                <input type="hidden" name="item_id" value="<?php echo $_smarty_tpl->tpl_vars['hItem']->value['id_item'];?>
" />
                                <input type="hidden" name="item_order" value="<?php echo $_smarty_tpl->tpl_vars['hItem']->value['item_order'];?>
" />
                                <div class="active item-field">
                                    <label><?php echo smartyTranslate(array('s'=>'Active','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</label>
                                    <input type="checkbox" name="item_active" value="1"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['active']==1) {?> checked="checked"<?php }?> />
                                </div>
                                <div class="title item-field">
                                    <label><?php echo smartyTranslate(array('s'=>'Title','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</label>
                                    <input type="text" name="item_title" size="48" value="<?php echo $_smarty_tpl->tpl_vars['hItem']->value['title'];?>
" />
                                </div>
                                <div class="title_use item-field">
                                    <label><?php echo smartyTranslate(array('s'=>'Use title in front','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</label>
                                    <input type="checkbox" name="item_title_use" value="1"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['title_use']==1) {?> checked="checked"<?php }?> />
                                </div>
                                <div class="hook item-field">
                                    <label><?php echo smartyTranslate(array('s'=>'Hook','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</label>
                                    <select name="item_hook" default="home">
                                        <option value="home"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['hook']=='home') {?> selected="selected"<?php }?>>home</option>  
                                        <option value="top"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['hook']=='top') {?> selected="selected"<?php }?>>top</option>
                                        <option value="left"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['hook']=='left') {?> selected="selected"<?php }?>>left</option>
                                        <option value="right"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['hook']=='right') {?> selected="selected"<?php }?>>right</option>
                                        <option value="footer"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['hook']=='footer') {?> selected="selected"<?php }?>>footer</option>  
                                    </select>
                                </div>
                                <div class="image item-field">
                                    <label><?php echo smartyTranslate(array('s'=>'Image','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</label>
                                    <input type="file" name="item_img" />
                                </div>
                                <div class="image-display item-field">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['hItem']->value['image'];?>
" alt="" title="" style="width:<?php echo $_smarty_tpl->tpl_vars['hItem']->value['image_w'];?>
px; height:<?php echo $_smarty_tpl->tpl_vars['hItem']->value['image_h'];?>
px;<?php if (!$_smarty_tpl->tpl_vars['hItem']->value['image']) {?> display:none;<?php }?>" class="preview" />
                                </div>
                                <div class="image_w item-field">
                                    <label><?php echo smartyTranslate(array('s'=>'Image width','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</label>
                                    <input name="item_img_w" type="text" maxlength="4" size="4" value="<?php echo $_smarty_tpl->tpl_vars['hItem']->value['image_w'];?>
"/></br>
                                </div>
                                <div class="image_h item-field">
                                    <label><?php echo smartyTranslate(array('s'=>'Image height','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</label>
                                    <input name="item_img_h" type="text" maxlength="4" size="4" value="<?php echo $_smarty_tpl->tpl_vars['hItem']->value['image_h'];?>
"/>
                                </div>
                                <div class="url item-field">
                                    <label><?php echo smartyTranslate(array('s'=>'URL','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</label>
                                    <input type="text" name="item_url" size="48" value="<?php echo $_smarty_tpl->tpl_vars['hItem']->value['url'];?>
" />
                                </div>
                                <div class="target item-field">
                                    <label><?php echo smartyTranslate(array('s'=>'Target blank','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</label>
                                    <input type="checkbox" name="item_target" value="1"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['target']==1) {?> checked="checked"<?php }?> />
                                </div>
                                <div class="html item-field">
                                    <label><?php echo smartyTranslate(array('s'=>'HTML','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</label>
                                    <textarea name="item_html" cols="65" rows="12"><?php echo $_smarty_tpl->tpl_vars['hItem']->value['html'];?>
</textarea>
                                </div>
                                <button type="submit" name="removeItem" class="button button-remove" onClick="this.form.submit();"><i class="icon-remove-sign"></i><?php echo smartyTranslate(array('s'=>'Remove','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</button>
                                <button type="submit" name="updateItem" class="button button-save" onClick="this.form.submit();"><i class="icon-save"></i><?php echo smartyTranslate(array('s'=>'Save','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</button>
                            </form>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        <?php } else { ?>
            <div class="item">
                <?php echo smartyTranslate(array('s'=>'No items available','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>

            </div>
        <?php }?>
    <?php } ?>
	</div>
<?php } ?>
</div>
<?php }} ?>
