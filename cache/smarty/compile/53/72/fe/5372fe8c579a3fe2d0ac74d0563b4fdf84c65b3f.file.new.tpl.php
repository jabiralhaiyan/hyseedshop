<?php /* Smarty version Smarty-3.1.19, created on 2017-01-07 01:00:40
         compiled from "F:\xampp\htdocs\hyseedshop\modules\tmhtmlcontent\views\templates\admin\new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17626586fdb488cef72-20222760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5372fe8c579a3fe2d0ac74d0563b4fdf84c65b3f' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\modules\\tmhtmlcontent\\views\\templates\\admin\\new.tpl',
      1 => 1483622477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17626586fdb488cef72-20222760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htmlitems' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586fdb4891cd95_77022413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586fdb4891cd95_77022413')) {function content_586fdb4891cd95_77022413($_smarty_tpl) {?><div class="new-item">
    <span class="button new-item"><i class="icon-plus-sign"></i><?php echo smartyTranslate(array('s'=>'Add item','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</span>
    <div class="item-container">
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['htmlitems']->value['postAction'];?>
" enctype="multipart/form-data" class="item-form">
            <div class="language item-field">
                <label><?php echo smartyTranslate(array('s'=>'Language','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</label>
                <ul class="languages">
                    <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value['lang']['all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
                        <li id="lang-<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
" class="new-lang-flag<?php if ($_smarty_tpl->tpl_vars['lang']->value['id_lang']==$_smarty_tpl->tpl_vars['htmlitems']->value['lang']['default']['id_lang']) {?> active<?php }?>"><img src="../img/l/<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
.jpg" class="pointer" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
" /></li>
                    <?php } ?>
                </ul>
                <input type="hidden" id="lang-id" name="lang_id" value="<?php echo $_smarty_tpl->tpl_vars['htmlitems']->value['lang']['default']['id_lang'];?>
" />
            </div>
            <div class="title item-field">
                <label><?php echo smartyTranslate(array('s'=>'Title','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</label>
                <input type="text" name="item_title" size="48" value="" />
            </div>
            <div class="title_use item-field">
                <label><?php echo smartyTranslate(array('s'=>'Use title in front','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</label>
                <input type="checkbox" name="item_title_use" value="1" />
            </div>
            <div class="hook item-field">
                <label><?php echo smartyTranslate(array('s'=>'Hook','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</label>
                <select name="item_hook" default="home">
                    <option value="home">home</option>  
                    <option value="top">top</option>
                    <option value="left">left</option>
                    <option value="right">right</option>
                    <option value="footer">footer</option>  
                </select>
            </div>
            <div class="image item-field">
                <label><?php echo smartyTranslate(array('s'=>'Image','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</label>
                <input type="file" name="item_img" />
            </div>
            <div class="image_w item-field">
                <label><?php echo smartyTranslate(array('s'=>'Image width','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</label><input name="item_img_w" type="text" maxlength="4" size="4" value=""/></br>
            </div>
            <div class="image_h item-field">
                <label><?php echo smartyTranslate(array('s'=>'Image height','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</label><input name="item_img_h" type="text" maxlength="4" size="4" value=""/>
            </div>
            <div class="url item-field">
                <label><?php echo smartyTranslate(array('s'=>'URL','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</label>
                <input type="text" name="item_url" size="48" value="http://" />
            </div>
            <div class="target item-field">
                <label><?php echo smartyTranslate(array('s'=>'Target blank','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</label>
                <input type="checkbox" name="item_target" value="1" />
            </div>
            <div class="html item-field">
            	<label><?php echo smartyTranslate(array('s'=>'HTML','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</label>
                <textarea name="item_html" cols="65" rows="12"></textarea>
            </div>
            <button type="submit" name="newItem" class="button button-save" onClick="this.form.submit();"><i class="icon-save"></i><?php echo smartyTranslate(array('s'=>'Save','mod'=>'tmhtmlcontent'),$_smarty_tpl);?>
</button>
        </form>
    </div>
</div>
<?php }} ?>
