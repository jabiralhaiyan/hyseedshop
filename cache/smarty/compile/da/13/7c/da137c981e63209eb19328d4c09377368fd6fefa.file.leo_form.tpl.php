<?php /* Smarty version Smarty-3.1.19, created on 2017-01-06 18:35:40
         compiled from "F:\xampp\htdocs\hyseedshop\modules\leomanagewidgets\views\templates\admin\_configure\\helpers\form\leo_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5336586f810c607074-34780740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da137c981e63209eb19328d4c09377368fd6fefa' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\modules\\leomanagewidgets\\views\\templates\\admin\\_configure\\\\helpers\\form\\leo_form.tpl',
      1 => 1483653574,
      2 => 'file',
    ),
    'c2362e056bd6ab5542130f9f62aff30e4ed53909' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\admin32\\themes\\default\\template\\helpers\\form\\form.tpl',
      1 => 1480066384,
      2 => 'file',
    ),
    '168c2ab61c20ee7ad84b8d995d0f85d43255349d' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\admin32\\themes\\default\\template\\helpers\\form\\form_group.tpl',
      1 => 1480066384,
      2 => 'file',
    ),
    '425fc10b12308b758aeb0394dfa254d4197115c2' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\modules\\leomanagewidgets\\views\\templates\\admin\\_configure\\helpers\\form\\form_grouplist.tpl',
      1 => 1483653574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5336586f810c607074-34780740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fields' => 0,
    'tabs' => 0,
    'identifier_bk' => 0,
    'identifier' => 0,
    'table_bk' => 0,
    'table' => 0,
    'name_controller' => 0,
    'current' => 0,
    'token' => 0,
    'style' => 0,
    'form_id' => 0,
    'submit_action' => 0,
    'f' => 0,
    'fieldset' => 0,
    'key' => 0,
    'field' => 0,
    'input' => 0,
    'contains_states' => 0,
    'fields_value' => 0,
    'hint' => 0,
    'languages' => 0,
    'language' => 0,
    'defaultFormLanguage' => 0,
    'value_text' => 0,
    'name' => 0,
    'value' => 0,
    'option' => 0,
    'optiongroup' => 0,
    'field_value' => 0,
    'id_checkbox' => 0,
    'select' => 0,
    'k' => 0,
    'v' => 0,
    'categories_tree' => 0,
    'asso_shop' => 0,
    'p' => 0,
    'hookName' => 0,
    'show_cancel_button' => 0,
    'back_url' => 0,
    'btn' => 0,
    'tinymce' => 0,
    'iso' => 0,
    'ad' => 0,
    'firstCall' => 0,
    'vat_number' => 0,
    'allowEmployeeFormLang' => 0,
    'use_textarea_autosize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586f810d36ebe0_55388208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586f810d36ebe0_55388208')) {function content_586f810d36ebe0_55388208($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'F:\\xampp\\htdocs\\hyseedshop\\tools\\smarty\\plugins\\function.counter.php';
if (!is_callable('smarty_modifier_replace')) include 'F:\\xampp\\htdocs\\hyseedshop\\tools\\smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_function_math')) include 'F:\\xampp\\htdocs\\hyseedshop\\tools\\smarty\\plugins\\function.math.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['title'])) {?><h3><?php echo $_smarty_tpl->tpl_vars['fields']->value['title'];?>
</h3><?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['tabs']->value)&&count($_smarty_tpl->tpl_vars['tabs']->value)) {?>
<script type="text/javascript">
	var helper_tabs = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['tabs']->value);?>
;
	var unique_field_id = '';
</script>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['identifier_bk']->value)&&$_smarty_tpl->tpl_vars['identifier_bk']->value==$_smarty_tpl->tpl_vars['identifier']->value) {?><?php $_smarty_tpl->_capture_stack[0][] = array('identifier_count', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'identifier_count'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?>
<?php $_smarty_tpl->tpl_vars['identifier_bk'] = new Smarty_variable($_smarty_tpl->tpl_vars['identifier']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['identifier_bk'] = clone $_smarty_tpl->tpl_vars['identifier_bk'];?>
<?php if (isset($_smarty_tpl->tpl_vars['table_bk']->value)&&$_smarty_tpl->tpl_vars['table_bk']->value==$_smarty_tpl->tpl_vars['table']->value) {?><?php $_smarty_tpl->_capture_stack[0][] = array('table_count', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'table_count'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?>
<?php $_smarty_tpl->tpl_vars['table_bk'] = new Smarty_variable($_smarty_tpl->tpl_vars['table']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['table_bk'] = clone $_smarty_tpl->tpl_vars['table_bk'];?>
<form id="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['form']['form']['id_form'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['form']['form']['id_form'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['table']->value==null) {?>configuration_form<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form<?php }?><?php if (isset(Smarty::$_smarty_vars['capture']['table_count'])&&Smarty::$_smarty_vars['capture']['table_count']) {?>_<?php echo intval(Smarty::$_smarty_vars['capture']['table_count']);?>
<?php }?><?php }?>" class="defaultForm form-horizontal<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)&&$_smarty_tpl->tpl_vars['name_controller']->value) {?> <?php echo $_smarty_tpl->tpl_vars['name_controller']->value;?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['current']->value)&&$_smarty_tpl->tpl_vars['current']->value) {?> action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_smarty_tpl->tpl_vars['token']->value)&&$_smarty_tpl->tpl_vars['token']->value) {?>&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"<?php }?> method="post" enctype="multipart/form-data"<?php if (isset($_smarty_tpl->tpl_vars['style']->value)) {?> style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
"<?php }?> novalidate>
	<?php if ($_smarty_tpl->tpl_vars['form_id']->value) {?>
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
<?php if (isset(Smarty::$_smarty_vars['capture']['identifier_count'])&&Smarty::$_smarty_vars['capture']['identifier_count']) {?>_<?php echo intval(Smarty::$_smarty_vars['capture']['identifier_count']);?>
<?php }?>" value="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" />
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['submit_action']->value)) {?>
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
" value="1" />
	<?php }?>
	<?php  $_smarty_tpl->tpl_vars['fieldset'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fieldset']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fieldset']->key => $_smarty_tpl->tpl_vars['fieldset']->value) {
$_smarty_tpl->tpl_vars['fieldset']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['fieldset']->key;
?>
		
		<?php $_smarty_tpl->_capture_stack[0][] = array('fieldset_name', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'fieldset_name'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<div class="panel" id="fieldset_<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
<?php if (isset(Smarty::$_smarty_vars['capture']['identifier_count'])&&Smarty::$_smarty_vars['capture']['identifier_count']) {?>_<?php echo intval(Smarty::$_smarty_vars['capture']['identifier_count']);?>
<?php }?><?php if (Smarty::$_smarty_vars['capture']['fieldset_name']>1) {?>_<?php echo intval((Smarty::$_smarty_vars['capture']['fieldset_name']-1));?>
<?php }?>">
			<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldset']->value['form']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value=='legend') {?>
					
						<div class="panel-heading">
							<?php if (isset($_smarty_tpl->tpl_vars['field']->value['image'])&&isset($_smarty_tpl->tpl_vars['field']->value['title'])) {?><img src="<?php echo $_smarty_tpl->tpl_vars['field']->value['image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
							<?php if (isset($_smarty_tpl->tpl_vars['field']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['field']->value['icon'];?>
"></i><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

						</div>
					
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='description'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='warning'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='success'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='error'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='input') {?>
					<div class="form-wrapper">
					<?php  $_smarty_tpl->tpl_vars['input'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['input']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['input']->key => $_smarty_tpl->tpl_vars['input']->value) {
$_smarty_tpl->tpl_vars['input']->_loop = true;
?>
						
						<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['form_group_class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['form_group_class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='hidden') {?> hide<?php }?>"<?php if ($_smarty_tpl->tpl_vars['input']->value['name']=='id_state') {?> id="contains_states"<?php if (!$_smarty_tpl->tpl_vars['contains_states']->value) {?> style="display:none;"<?php }?><?php }?><?php if (isset($_smarty_tpl->tpl_vars['tabs']->value)&&isset($_smarty_tpl->tpl_vars['input']->value['tab'])) {?> data-tab-id="<?php echo $_smarty_tpl->tpl_vars['input']->value['tab'];?>
"<?php }?>>
						<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='hidden') {?>
							<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
" />
						<?php } else { ?>
							
								<?php if (isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?>
									<label class="control-label col-lg-3<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']&&$_smarty_tpl->tpl_vars['input']->value['type']!='radio') {?> required<?php }?>">
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
										<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
													<?php  $_smarty_tpl->tpl_vars['hint'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hint']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['hint']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hint']->key => $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->_loop = true;
?>
														<?php if (is_array($_smarty_tpl->tpl_vars['hint']->value)) {?>
															<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['hint']->value['text']);?>

														<?php } else { ?>
															<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['hint']->value);?>

														<?php }?>
													<?php } ?>
												<?php } else { ?>
													<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['input']->value['hint']);?>

												<?php }?>">
										<?php }?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>

										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
										</span>
										<?php }?>
									</label>
								<?php }?>
							

							
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='hook_list') {?>
        <div class="col-md-12">
            <div class="alert alert-success">
                <a href="http://www.leotheme.com/support/prestashop-16x-guides.html"><?php echo smartyTranslate(array('s'=>'Click Here to see Module Guide','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</a>
            </div>
        </div>
        <div class="col-md-8 leo-redirect">
            <div class="alert alert-success"><?php echo smartyTranslate(array('s'=>'Click on hook you want to config','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</div>
            <ol class="breadcrumb">
                <li class="active">HEADER</li>
                <li><a data-element="displaybanner" href="#">displayBanner</a></li>
                <li><a data-element="displaynav" href="#">displayNav</a></li>
                <li><a data-element="displaytop" href="#">displayTop</a></li>
                <li><a data-element="topnavigation" href="#">topNavigation</a></li>
                <li><a data-element="displayslideshow" href="#">displaySlideshow</a></li>
                <li><a data-element="displaytopcolumn" href="#">displayTopColumn</a></li>
            </ol>
            <ol class="breadcrumb" href="#">
                <li class="active" href="#">CONTENT</li>
                <li><a data-element="displayleftcolumn" href="#">displayLeftColumn</a></li>
                <li><a data-element="displayhome" href="#">displayHome</a></li>
                <li><a data-element="displaycontentbottom" href="#">displayContentBottom</a></li>
                <li><a data-element="displayrightcolumn" href="#">displayRightColumn</a></li>
            </ol>
            <ol class="breadcrumb" href="#">
                <li class="active" href="#">FOOTER</li>
                <li><a data-element="displaybottom" href="#">displayBottom</a></li>
                <li><a data-element="displayfootertop" href="#">displayFooterTop</a></li>
                <li><a data-element="displayfooter" href="#">displayFooter</a></li>
                <li><a data-element="displayfooterbottom" href="#">displayFooterBottom</a></li>
                <li><a data-element="displayfootnav" href="#">displayFootNav</a></li>
            </ol>
            <br>
            <ol class="breadcrumb" href="#">
                <li class="active" href="#">PRODUCT DETAIL PAGE</li>
                <li><a data-element="displayrightcolumnproduct" href="#">displayRightColumnProduct</a></li>
                <li><a data-element="producttabcontent" href="#">productTabContent</a></li>
                <li><a data-element="displayFooterProduct" href="#">displayFooterProduct</a></li>
            </ol>

            <input type="hidden" id="data_forms" name="data_form" value=""/>
            <input type="hidden" id="data_delete" name="data_delete" value=""/>
        </div>
        <div class="col-md-4 leo-guide">
            <div class="alert alert-success"><?php echo smartyTranslate(array('s'=>'How to use groups','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</div>
            <div class="form">
                <div class="row"><b class="title"><?php echo smartyTranslate(array('s'=>'Group','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</b></div>
                <div class="row group-wrap">
                    <div class="col-md-6">
                        <div class="column-widget">
                            <span><?php echo smartyTranslate(array('s'=>'COLUMN IN GROUP','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</span>
                            <span><?php echo smartyTranslate(array('s'=>'display in-line with other column of group','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="column-widget">
                            <span><?php echo smartyTranslate(array('s'=>'COLUMN IN GROUP','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</span>
                            <span><?php echo smartyTranslate(array('s'=>'display in-line with other column of group','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="alert alert-success leo-alert"><?php echo smartyTranslate(array('s'=>'Please Select monitor size to configuration','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</div>
            <div class="leo-explain">
                <b><?php echo smartyTranslate(array('s'=>'Default','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</b>
                <?php echo smartyTranslate(array('s'=>'Default monitor','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 <br>
				<i><?php echo smartyTranslate(array('s'=>'Use current monitor size','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</i><br>
                <b><?php echo smartyTranslate(array('s'=>'Large','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</b>
                <?php echo smartyTranslate(array('s'=>'Large devices Desktops (≥1200px)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 <br>
				<i><?php echo smartyTranslate(array('s'=>'27in Monitor','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'17in Workstation','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'15in Macbook Pro','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'11in Macbook Air','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</i><br>
                <b><?php echo smartyTranslate(array('s'=>'Medium','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</b>
                <?php echo smartyTranslate(array('s'=>'Medium devices Desktops (≥992px)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 <br>
				<i><?php echo smartyTranslate(array('s'=>'iPad (Landscape)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</i><br>
                <b><?php echo smartyTranslate(array('s'=>'Small','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</b>
                <?php echo smartyTranslate(array('s'=>'Small devices Tablets (≥768px)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 <br>
				<i><?php echo smartyTranslate(array('s'=>'Nexus7 (Landscape)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'iPad (Portrait)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</i><br>
                <b><?php echo smartyTranslate(array('s'=>'Extra small','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</b>
                <?php echo smartyTranslate(array('s'=>'Extra small devices Phones (≥481px)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 <br>
				<i><?php echo smartyTranslate(array('s'=>'Nexus7 (Portrait)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</i><br>
                <b><?php echo smartyTranslate(array('s'=>'Mobile','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</b>
                <?php echo smartyTranslate(array('s'=>'Smart Phones (< 481px)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 <br>
				<i><?php echo smartyTranslate(array('s'=>'iPhone (Landscape)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'iPhone (Portrait)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</i><br/>
            </div>
            <div class="btn-toolbar" role="toolbar">
                <div class="btn-group btn-group-lg leo-resize">
                    <button type="button" data-class="reset" data-width="auto" class="btn btn-default btn-success"><?php echo smartyTranslate(array('s'=>'Default','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</button>
                    <button type="button" data-class="col-lg" data-width="1200" class="btn btn-default"><?php echo smartyTranslate(array('s'=>'Large','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</button>
                    <button type="button" data-class="col-md" data-width="992" class="btn btn-default"><?php echo smartyTranslate(array('s'=>'Medium','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</button>
                    <button type="button" data-class="col-sm" data-width="768" class="btn btn-default"><?php echo smartyTranslate(array('s'=>'Small','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</button>
                    <button type="button" data-class="col-xs" data-width="603" class="btn btn-default"><?php echo smartyTranslate(array('s'=>'Extra small','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</button>
                    <button type="button" data-class="col-sp" data-width="480" class="btn btn-default"><?php echo smartyTranslate(array('s'=>'Mobile','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</button>
                </div>
            </div>
            <div style="display:none;" id="leo-mess" data-reduce="<?php echo smartyTranslate(array('s'=>'Minimum value of width is 1','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
" data-increase="<?php echo smartyTranslate(array('s'=>'Maximum value of width is 12','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
"></div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='hook_data') {?>
        <div class="leo-heading">
            <div class="col-lg-6">
                <a href="#" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
					<i class="icon-cog"></i>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

				</a>
            </div>
            <div class="col-lg-6 hwidget-form">
                <a title="" class="pull-right leo-close-open label-tooltip" data-toggle="tooltip"
                   data-original-title="<?php echo smartyTranslate(array('s'=>'Click here to close or open this form','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
" data-status="1"
                   href="javascript:void(0)">
                    <i class="icon-sort-up"></i>
                </a>
            </div>
        </div>
        <div class="leo-content">
            <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
_container" class="leohook" data-hook="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                <div class="row leo-dm-group">
                    <div class="col-lg-12 dmgroup-container">
                        <div class="group-top row">
                            <div class="col-lg-12">
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle btn-add-group" data-toggle="dropdown">
                                            <?php echo smartyTranslate(array('s'=>'Insert A Group','mod'=>'leomanagewidgets'),$_smarty_tpl);?>

											<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right list-group">
                                            <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 6+1 - (0) : 0-(6)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 0, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                <li>
                                                    <a href="javascript:void(0);" data-hook="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" data-cols="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="leo-add-group">
                                                        <?php if ($_smarty_tpl->tpl_vars['foo']->value==0) {?>
                                                            <?php echo smartyTranslate(array('s'=>'Empty Group','mod'=>'leomanagewidgets'),$_smarty_tpl);?>

                                                        <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value==1) {?>
                                                            <?php echo smartyTranslate(array('s'=>'%s column','sprintf'=>$_smarty_tpl->tpl_vars['foo']->value,'mod'=>'leomanagewidgets'),$_smarty_tpl);?>

                                                        <?php } else { ?>
                                                            <?php echo smartyTranslate(array('s'=>'%s columns','sprintf'=>$_smarty_tpl->tpl_vars['foo']->value,'mod'=>'leomanagewidgets'),$_smarty_tpl);?>

                                                        <?php }?>
                                                    </a>
                                                </li>
                                            <?php }} ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="group-content">
                            <div class="group-list" data-hook="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php if (isset($_smarty_tpl->tpl_vars['leo_group_list']->value[$_smarty_tpl->tpl_vars['input']->value['name']])&&isset($_smarty_tpl->tpl_vars['leo_group_list']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
                                    <?php  $_smarty_tpl->tpl_vars['itemGroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemGroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leo_group_list']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemGroup']->key => $_smarty_tpl->tpl_vars['itemGroup']->value) {
$_smarty_tpl->tpl_vars['itemGroup']->_loop = true;
?>
                                        <?php /*  Call merged included template "./form_grouplist.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./form_grouplist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"1",'hook_name'=>$_smarty_tpl->tpl_vars['input']->value['name'],'item_group'=>$_smarty_tpl->tpl_vars['itemGroup']->value), 0, '5336586f810c607074-34780740');
content_586f810ce96da5_76831259($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./form_grouplist.tpl" */?>
                                    <?php } ?>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='setting_form') {?>
        
        <div id="data_form" style="display:none;">
        
        <div class="group_form bootstrap" data-title="<?php echo smartyTranslate(array('s'=>'Group Form','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
">
            <div class="row form-group">
                <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Active','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                <div class="col-lg-9">
                    <input class="groupactive_on" type="radio" checked="checked" value="1" name="group_active">
                    <label for="groupactive_on"> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                    <input class="groupactive_off" type="radio" value="0" name="group_active">
                    <label for="groupactive_off"> <?php echo smartyTranslate(array('s'=>'No','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                </div>
            </div>
            <div class="row form-group">
                <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Group Title','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                    <?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
                        <div class="translatable-field lang-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
                    <?php }?>
                    <div class="col-lg-6">
                        <input id="group_title_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true);?>
" type="text" name="group_title_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                    </div>
                    <?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
                        <div class="col-lg-2">
                            <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8', true);?>

                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
                                    <li>
										<a href="javascript:hideOtherLanguage(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['id_lang'], ENT_QUOTES, 'UTF-8', true);?>
);" tabindex="-1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php }?>
                    <?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
                        </div>
                    <?php }?>
                <?php } ?>
            </div>
            <div class="row form-group">
                <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Group Class','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                <div class="col-lg-6">
                    <input type="text" class="" value="" class="group_class" name="group_class">
                </div>
            </div>
            <hr/>
            <div class="row form-group">
                <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Skin Animate Load:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                <div class="col-lg-6">
                    <select class="group_skin_animate" name="group_skin_animate">
                        <option value=""><?php echo smartyTranslate(array('s'=>'','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['skin_animate_load']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['group']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                            <optgroup><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</optgroup>
                            <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['i']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['j']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['j']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </div>
                <p class="control-label col-lg-12"><?php echo smartyTranslate(array('s'=>'Choose animation type.','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</p>
            </div>
            <div class="row form-group">
                <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'AnimateOffset:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                <div class="col-lg-6">
                    <input type="text" class="animate_offset" name="animate_offset" value=""/>
                </div>
                <p class="control-label col-lg-12"> <?php echo smartyTranslate(array('s'=>'Animate Offset (Ex: 10 to 100).','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</p>
            </div>
            <div class="row form-group">
                <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'DelayAnimate:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                <div class="col-lg-6">
                    <input type="text" class="delay_animate" name="delay_animate" value=""/>
                </div>
                <p class="control-label col-lg-12"><?php echo smartyTranslate(array('s'=>'Effect delay (Ex: 0, 0.5, 1, 1.5 ..).','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</p>
            </div>
            <hr/>
            <div class="row form-group">
                <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Background style:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                <div class="col-lg-6">
                    <select name="background_style" class="background_style">
                        <option value="" selected="selected"><?php echo smartyTranslate(array('s'=>'None','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                        <option value="static"><?php echo smartyTranslate(array('s'=>'Static','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                        <option value="fixed"><?php echo smartyTranslate(array('s'=>'Fixed','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                        <option value="parallax"><?php echo smartyTranslate(array('s'=>'Parallax','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                        <!--<option value="fparallax"><?php echo smartyTranslate(array('s'=>'Fade Parallax','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                        <option value="sparallax"><?php echo smartyTranslate(array('s'=>'Scale Parallax','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                        <option value="fsparallax"><?php echo smartyTranslate(array('s'=>'Fade & Scale Parallax','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>-->
                        <option value="mouseparallax"><?php echo smartyTranslate(array('s'=>'Mouse Parallax','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                        <option value="video"><?php echo smartyTranslate(array('s'=>'Video','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Background full width:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                <div class="col-lg-6">
                    <select name="background_style_fullwidth" class="">
                        <option value="0" selected="selected"><?php echo smartyTranslate(array('s'=>'No','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                        <option value="1"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                    </select>
                </div>
            </div>
            <!-- Background Image Style Block -->
            <div class="group_background_image" style="display:none;">
                <div class="row form-group">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Background-color:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-6">
                        <div class="input-group">
                            <input data-hex="true" class="leo-color" name="background_style_color" value=""/>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Background image URL:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-6">
                        <input type="text" class="" name="background_style_image_url" value=""/>
                    </div>
                </div>
                <div class="row form-group group_background_image_position">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Background position:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-6">
                        <input type="text" class="" name="background_style_position" value=""/>
                        <p class="control-label col-lg-12"><?php echo smartyTranslate(array('s'=>'Set CSS value for the background image position. (Ex: center top, right bottom, 50% 50%, 100px 200px,..)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</p>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Background repeat:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-6">
                        <select name="background_style_repeat" class="">
                            <option value="no-repeat" selected="selected"><?php echo smartyTranslate(array('s'=>'No repeat','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                            <option value="repeat"><?php echo smartyTranslate(array('s'=>'Repeat (horizontally & vertically)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                            <option value="repeat-x"><?php echo smartyTranslate(array('s'=>'Repeat horizontally','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                            <option value="repeat-y"><?php echo smartyTranslate(array('s'=>'Repeat vertically','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                        </select>
                    </div>
                </div>
                <!-- Background parallax params block -->
                <div class="row form-group group_background_image_parallax" style="display:none">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Parallax speed:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-6">
                        <input type="text" class="fixed-width-sm" name="background_style_parallax_speed" value=""/>
                        <p class="control-label col-lg-12"><?php echo smartyTranslate(array('s'=>'Set the background speed, this is relative to the natural scroll speed (Ex: 0, 0.5, 1, 2).','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</p>
                    </div>
                </div>
                <div class="row form-group group_background_image_parallax" style="display:none">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Parallax offsets:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-6">
                        <input type="text" class="fixed-width-sm" name="background_style_parallax_offsetx" value=""/>
                        <p class="control-label col-lg-12"> <?php echo smartyTranslate(array('s'=>'Set the global alignment horizontal offset','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</p>
                        <input type="text" class="fixed-width-sm" name="background_style_parallax_offsety" value=""/>
                        <p class="control-label col-lg-12"> <?php echo smartyTranslate(array('s'=>'Set the global alignment vertical offset','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</p>
                    </div>
                </div>
                <!-- End Background parallax params block -->
                <!-- Background mouse parallax params block -->
                <div class="row form-group group_background_image_mouseparallax" style="display:none">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Parallax axis:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-6">
                        <select name="background_style_mouseparallax_axis" class="">
                            <option value="both" selected="selected"><?php echo smartyTranslate(array('s'=>'Both','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                            <option value="axis-x"><?php echo smartyTranslate(array('s'=>'Axis X (horizontally)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                            <option value="axis-y"><?php echo smartyTranslate(array('s'=>'Axis Y (vertically)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                        </select>
                        <p class="control-label col-lg-12"><?php echo smartyTranslate(array('s'=>'Select axis effect for this background.','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</p>
                    </div>
                </div>
                <div class="row form-group group_background_image_mouseparallax" style="display:none">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Parallax strength:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-6">
                        <input type="text" class="fixed-width-sm" name="background_style_mouseparallax_strength" value=""/>
                        <p class="control-label col-lg-12"><?php echo smartyTranslate(array('s'=>'Set the background speed, this is relative to the natural mouse speed (Ex: 0, 0.5, 1, 2).','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</p>
                    </div>
                </div>
                <div class="row form-group group_background_image_mouseparallax" style="display:none">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Parallax offsets:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-6">
                        <input type="text" class="fixed-width-sm" name="background_style_mouseparallax_offsetx" value=""/>
                        <p class="control-label col-lg-12"> <?php echo smartyTranslate(array('s'=>'Set the global alignment horizontal offset','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</p>
                        <input type="text" class="fixed-width-sm" name="background_style_mouseparallax_offsety" value=""/>
                        <p class="control-label col-lg-12"> <?php echo smartyTranslate(array('s'=>'Set the global alignment vertical offset','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</p>
                    </div>
                </div>
                <!-- End Background mouse parallax params block -->
            </div>
            <!-- End Background Image Style Block -->
            <!-- Background Video Style Block -->
            <div class="group_background_video" style="display:none;">
                <div class="row form-group">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Source type:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-6">
                        <select name="group_background_video_source" class="">
                            <option value="youtube" selected="selected"><?php echo smartyTranslate(array('s'=>'Youtube video','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                            <option value="vimeo"><?php echo smartyTranslate(array('s'=>'Vimeo video','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                            <option value="html5"><?php echo smartyTranslate(array('s'=>'HTML5','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group" id="youtube-video-type">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Youtube/Vimeo video ID:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-6">
                        <input type="text" class="" name="group_background_video_vid" value=""/>
                    </div>
                </div>
                <div class="row form-group" id="html5-video-type">
                    <label class="control-label col-lg-3" for=""><?php echo smartyTranslate(array('s'=>'Video URL:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-6">
                        <input type="text" disabled="disabled" class="" name="group_background_video_mp4" value=""/>
                        <p class="control-label col-lg-12"> <?php echo smartyTranslate(array('s'=>'Mp4 video url','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</p>
                        <input type="text" disabled="disabled" class="" name="group_background_video_webm" value=""/>
                        <p class="control-label col-lg-12"> <?php echo smartyTranslate(array('s'=>'Webm video url','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</p>
                        <input type="text" disabled="disabled" class="" name="group_background_video_ogg" value=""/>
                        <p class="control-label col-lg-12"> <?php echo smartyTranslate(array('s'=>'Ogg video url','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</p>
                    </div>
                </div>
            </div>
            <!-- End Background Video Style Block -->
            <hr/>
            <div class="row">
                <button name="submitOptionsmodule" class="btn btn-defaults btn-savegroup btn-success" type="button">
                    <i class="icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','mod'=>'leomanagewidgets'),$_smarty_tpl);?>

                </button>
            </div>
        </div>
        
        <div class="column-form bootstrap" data-title="<?php echo smartyTranslate(array('s'=>'Column Form','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
">
			<div class="panel">
				<div class="row">
					<button name="submitOptionsColumn" data-action="1" class="btn btn-defaults btn-savecolumn btn-success"
							type="button">
						<i class="icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','mod'=>'leomanagewidgets'),$_smarty_tpl);?>

					</button>
					
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="leo-form">
							<div class="row">
								<hr/>
							</div>
							<div class="row">
								<label class="control-label col-lg-3 col-md-3" for=""><?php echo smartyTranslate(array('s'=>'Active','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
								<input type="radio" class="default-on" checked="checked" value="1" name="column_active">
								<label for="columnactive_on"> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
								<input type="radio" class="default-off" value="0" name="column_active">
								<label for="columnactive_off"> <?php echo smartyTranslate(array('s'=>'No','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
							</div>
							<div class="row">
								<label class="control-label col-lg-12" for=""><?php echo smartyTranslate(array('s'=>'Large devices Desktops','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 <sub class="required">*</sub></label>
								<div class="col-lg-12">
									<input type='hidden' class="col-val" name='column_lg' value='6'/>
									<button type="button" class="btn btn-default leobtn-width dropdown-toggle" tabindex="-1" data-toggle="dropdown">
										<span class="width-val leo-w-6"> </span><span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<?php  $_smarty_tpl->tpl_vars['itemWidth'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemWidth']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leo_width']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemWidth']->key => $_smarty_tpl->tpl_vars['itemWidth']->value) {
$_smarty_tpl->tpl_vars['itemWidth']->_loop = true;
?>
											<li>
												<a class="leo-w-option" data-width="<?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
" href="javascript:void(0);" tabindex="-1">
													<span class="leo-width-val leo-w-<?php if (strpos($_smarty_tpl->tpl_vars['itemWidth']->value,".")) {?><?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
<?php }?>"><?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
/12 - ( <?php echo smarty_function_math(array('equation'=>"x/y*100",'x'=>$_smarty_tpl->tpl_vars['itemWidth']->value,'y'=>12,'format'=>"%.2f"),$_smarty_tpl);?>
 % )</span>
												</a>
											</li>
										<?php } ?>
									</ul>
								</div>
								<div class="col-md-12">
									<p>
										<?php echo smartyTranslate(array('s'=>'Large devices Desktops (≥1200px)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>

										<?php echo smartyTranslate(array('s'=>'27in Monitor - 17in Workstation - 15in Macbook Pro - 11in Macbook Air','mod'=>'leomanagewidgets'),$_smarty_tpl);?>

									</p>
								</div>
							</div>
							<div class="row">
								<label class="control-label col-lg-12" for=""><?php echo smartyTranslate(array('s'=>'Medium devices Desktops','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 <sub class="required">*</sub></label>
								<div class="col-lg-12">
									<input type='hidden' class="col-val" name='column_md' value='6'/>
									<button type="button" class="btn btn-default leobtn-width dropdown-toggle" tabindex="-1" data-toggle="dropdown">
										<span class="leo-width-val leo-w-6">6/12</span><span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<?php  $_smarty_tpl->tpl_vars['itemWidth'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemWidth']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leo_width']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemWidth']->key => $_smarty_tpl->tpl_vars['itemWidth']->value) {
$_smarty_tpl->tpl_vars['itemWidth']->_loop = true;
?>
											<li>
												<a class="leo-w-option" data-width="<?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
" href="javascript:void(0);" tabindex="-1">
													<span class="leo-width-val leo-w-<?php if (strpos($_smarty_tpl->tpl_vars['itemWidth']->value,".")) {?><?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
<?php }?>"><?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
/12</span>
												</a>
											</li>
										<?php } ?>
									</ul>
								</div>
								<div class="col-md-12">
									<p>
										<?php echo smartyTranslate(array('s'=>'Medium devices Desktops (≥992px)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>

										<?php echo smartyTranslate(array('s'=>'Nexus7 (Landscape) - iPad (Portrait)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>

									</p>
								</div>
							</div>
							<div class="row">
								<label class="control-label col-lg-12" for=""><?php echo smartyTranslate(array('s'=>'Small devices Tablets','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 <sub class="required">*</sub></label>
								<div class="col-lg-12">
									<input type='hidden' class="col-val" data-width="<?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
" name='column_sm' value='6'/>
									<button type="button" class="btn btn-default leobtn-width dropdown-toggle" tabindex="-1" data-toggle="dropdown">
										<span class="leo-width-val leo-w-6">6/12</span><span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<?php  $_smarty_tpl->tpl_vars['itemWidth'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemWidth']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leo_width']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemWidth']->key => $_smarty_tpl->tpl_vars['itemWidth']->value) {
$_smarty_tpl->tpl_vars['itemWidth']->_loop = true;
?>
											<li>
												<a class="leo-w-option" data-width="<?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
" href="javascript:void(0);" tabindex="-1">
													<span class="leo-width-val leo-w-<?php if (strpos($_smarty_tpl->tpl_vars['itemWidth']->value,".")) {?><?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
<?php }?>"><?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
/12</span>
												</a>
											</li>
										<?php } ?>
									</ul>
								</div>
								<div class="col-md-12">
									<p>
										<?php echo smartyTranslate(array('s'=>'Small devices Tablets (≥768px)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>

										<?php echo smartyTranslate(array('s'=>'iPad (Landscape)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>

									</p>
								</div>
							</div>
							<div class="row">
								<label class="control-label col-lg-12" for=""><?php echo smartyTranslate(array('s'=>'Extra small devices','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 <sub class="required">*</sub></label>
								<div class="col-lg-12">
									<input type='hidden' class="col-val" data-width="<?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
" name='column_xs' value='6'/>
									<button type="button" class="btn btn-default leobtn-width dropdown-toggle" tabindex="-1" data-toggle="dropdown">
										<span class="leo-width-val leo-w-6">6/12</span><span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<?php  $_smarty_tpl->tpl_vars['itemWidth'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemWidth']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leo_width']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemWidth']->key => $_smarty_tpl->tpl_vars['itemWidth']->value) {
$_smarty_tpl->tpl_vars['itemWidth']->_loop = true;
?>
											<li>
												<a class="leo-w-option" data-width="<?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
" href="javascript:void(0);" tabindex="-1">
													<span class="leo-width-val leo-w-<?php if (strpos($_smarty_tpl->tpl_vars['itemWidth']->value,".")) {?><?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
<?php }?>"><?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
/12</span>
												</a>
											</li>
										<?php } ?>
									</ul>
								</div>
								<div class="col-md-12">
									<p>
										<?php echo smartyTranslate(array('s'=>'Extra small devices Phones (≥481px)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>

										<?php echo smartyTranslate(array('s'=>'Nexus7 (Portrait)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>

									</p>
								</div>
							</div>
							<div class="row">
								<label class="control-label col-lg-12" for=""><?php echo smartyTranslate(array('s'=>'Smart Phone','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 <sub class="required">*</sub></label>
								<div class="col-lg-12">
									<input type='hidden' class="col-val" name='column_sp' value='6'/>
									<button type="button" class="btn btn-default leobtn-width dropdown-toggle" tabindex="-1" data-toggle="dropdown">
										<span class="leo-width-val leo-w-12">12/12</span><span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<?php  $_smarty_tpl->tpl_vars['itemWidth'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemWidth']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leo_width']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemWidth']->key => $_smarty_tpl->tpl_vars['itemWidth']->value) {
$_smarty_tpl->tpl_vars['itemWidth']->_loop = true;
?>
											<li>
												<a class="leo-w-option" data-width="<?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
" href="javascript:void(0);"
												   tabindex="-1">
													<span class="leo-width-val leo-w-<?php if (strpos($_smarty_tpl->tpl_vars['itemWidth']->value,".")) {?><?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
<?php }?>"><?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
/12</span>
												</a>
											</li>
										<?php } ?>
									</ul>
								</div>
								<div class="col-md-12">
									<p>
										<?php echo smartyTranslate(array('s'=>'Smart Phones (< 481px)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>

										<?php echo smartyTranslate(array('s'=>'iPhone (Landscape)-iPhone (Portrait)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>

									</p>
								</div>
							</div>
							<div class="row">
								<label class="control-label col-lg-12" for=""><?php echo smartyTranslate(array('s'=>'Background-color:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
								<div class="col-lg-12">
									<div class="input-group">
										<input type="text" data-hex="true" class="leo-color" value="" class="column_background" name="column_background"/>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="row"><label class="control-label col-lg-4" for=""><?php echo smartyTranslate(array('s'=>'Column Class:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label></div>
						<div class="well">
							<p>
								<input type="text" class="" value="" class="column_class" name="column_class"/><br/>
								<?php echo smartyTranslate(array('s'=>'insert new or select classes for toggling content across viewport breakpoints','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
<br/>
							<ul class="leo-col-class">
								<?php  $_smarty_tpl->tpl_vars['itemHidden'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemHidden']->_loop = false;
 $_smarty_tpl->tpl_vars['keyHidden'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hidden_config']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemHidden']->key => $_smarty_tpl->tpl_vars['itemHidden']->value) {
$_smarty_tpl->tpl_vars['itemHidden']->_loop = true;
 $_smarty_tpl->tpl_vars['keyHidden']->value = $_smarty_tpl->tpl_vars['itemHidden']->key;
?>
									<li>
										<input type="checkbox" name="col_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyHidden']->value, ENT_QUOTES, 'UTF-8', true);?>
" value="1">
										<label class="choise-class"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemHidden']->value, ENT_QUOTES, 'UTF-8', true);?>
</label>
									</li>
								<?php } ?>
							</ul>
							</p>
						</div>
					</div>
					<div class="row">
						<label class="control-label col-lg-3" for=""><?php echo smartyTranslate(array('s'=>'Skin Animate Load:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
						<select class="skin_animate col-lg-6" name="skin_animate">
							<option value=""><?php echo smartyTranslate(array('s'=>'','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['skin_animate_load']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['group']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
								<optgroup><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</optgroup>
								<?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['i']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
									<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['j']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['j']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<?php } ?>
							<?php } ?>
						</select>
						<label class="control-label col-lg-12"><?php echo smartyTranslate(array('s'=>'choose animation type.','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
					</div>
					<br/>
					<div class="row">
						<label class="control-label col-lg-3" for=""><?php echo smartyTranslate(array('s'=>' AnimateOffset:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
					   <div class="col-lg-6"><input type="text" class="animate_offset" name="animate_offset" value=""/></div>
						<label class="control-label col-lg-12"><?php echo smartyTranslate(array('s'=>'Animate Offset (Ex: 10 to 100).','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
					</div>
					<br/>
					<div class="row">
						<label class="control-label col-lg-3" for=""><?php echo smartyTranslate(array('s'=>' DelayAnimate:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
					   <div class="col-lg-6"><input type="text" class="delay_animate" name="delay_animate" value=""/></div>
						<label class="control-label col-lg-12"><?php echo smartyTranslate(array('s'=>'Effect delay (Ex: 0, 0.5, 1, 1.5 ..)','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
					</div>
					<br/>
					<div class="row">
						<label class="control-label col-lg-6" for=""><?php echo smartyTranslate(array('s'=>'Select specific Controller:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
						<select name="column_specific" class="column_specific">
							<option value="all"><?php echo smartyTranslate(array('s'=>'All','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
							<option value="index"><?php echo smartyTranslate(array('s'=>'Index','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
							<option value="category"><?php echo smartyTranslate(array('s'=>'Category','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
							<option value="product"><?php echo smartyTranslate(array('s'=>'Product','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
							<option value="cms"><?php echo smartyTranslate(array('s'=>'CMS','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
						</select>
					</div>
					<div class="row">
						<label class="control-label col-lg-6" for=""><?php echo smartyTranslate(array('s'=>'Controller ID:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
						<input type="text" class="column_controllerids" name="column_controllerids"/>
					</div>
					<br/>
					<div class="col-lg-12 showall">
						<div class="row"><label class="control-label col-lg-4 " for=""><?php echo smartyTranslate(array('s'=>'Exceptions Page:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label></div>
						<div class="well">
							<p>
								<?php echo smartyTranslate(array('s'=>'Please specify the files for which you do not want the widget to be displayed.','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
<br/>
								<?php echo $_smarty_tpl->tpl_vars['exception_list']->value;?>

							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<button name="submitOptionsColumn" data-action="1" class="btn btn-defaults btn-savecolumn btn-success" type="button">
						<i class="icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','mod'=>'leomanagewidgets'),$_smarty_tpl);?>

					</button>
					
				</div>
			</div>
        </div>
        
        <div class="row-form bootstrap" data-title="<?php echo smartyTranslate(array('s'=>'Row Form','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
">
            <div class="panel">
                <div class="row">
                    <button name="submitOptionsColumn" data-action="1" class="btn btn-defaults btn-saverow btn-success" type="button">
                        <i class="icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','mod'=>'leomanagewidgets'),$_smarty_tpl);?>

                    </button>
                    
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="leo-form">
                            <div class="row">
                                <label class="control-label col-lg-3" for=""><?php echo smartyTranslate(array('s'=>'Column Type:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 <sub class="required">*</sub></label>
                                <select name="column_type" class="column_type">
                                    <option value="widget"><?php echo smartyTranslate(array('s'=>'Widget','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                                    <option value="module"><?php echo smartyTranslate(array('s'=>'Override Module','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                                </select>
                            </div>
                            <div class="row column_type_val column_type_widget">
                                <label class="control-label col-lg-12" for=""><?php echo smartyTranslate(array('s'=>'Select a Widget:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 <sub class="required">*</sub></label>
                                <div class="col-lg-12">
                                    <select name="column_key_widget" data-text="<?php echo smartyTranslate(array('s'=>'Please Select a widget','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
">
                                        <option value=""><?php echo smartyTranslate(array('s'=>'--------- Select a widget ---------','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                                        <?php  $_smarty_tpl->tpl_vars['widgetTypeItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widgetTypeItem']->_loop = false;
 $_smarty_tpl->tpl_vars["widgetTypeKey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['leo_widgets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['widgetTypeItem']->key => $_smarty_tpl->tpl_vars['widgetTypeItem']->value) {
$_smarty_tpl->tpl_vars['widgetTypeItem']->_loop = true;
 $_smarty_tpl->tpl_vars["widgetTypeKey"]->value = $_smarty_tpl->tpl_vars['widgetTypeItem']->key;
?>
                                            <optgroup label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widgetTypeKey']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                                <?php  $_smarty_tpl->tpl_vars['widgetItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widgetItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgetTypeItem']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['widgetItem']->key => $_smarty_tpl->tpl_vars['widgetItem']->value) {
$_smarty_tpl->tpl_vars['widgetItem']->_loop = true;
?>
                                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widgetItem']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widgetItem']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                <?php } ?>
                                            </optgroup>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row column_type_val column_type_module" style="display: none">
                                <label class="control-label col-lg-12" for=""><?php echo smartyTranslate(array('s'=>'Select a Module:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 <sub class="required">*</sub></label>
                                <div class="col-lg-12">
                                    <select class="column_module" name="column_module"
                                            data-text="<?php echo smartyTranslate(array('s'=>'Please Select a module','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
">
                                        <option value=""><?php echo smartyTranslate(array('s'=>'--------- Select a Module ---------','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                                        <?php  $_smarty_tpl->tpl_vars['moduleItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['moduleItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leo_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['moduleItem']->key => $_smarty_tpl->tpl_vars['moduleItem']->value) {
$_smarty_tpl->tpl_vars['moduleItem']->_loop = true;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['moduleItem']->value['hook_list']) {?>
                                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['moduleItem']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" data-hook=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['moduleItem']->value['hook_list'], ENT_QUOTES, 'UTF-8', true);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['moduleItem']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <?php }?>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row column_type_val column_type_module" style="display: none">
                                <label class="control-label col-lg-12" for=""><?php echo smartyTranslate(array('s'=>'Select hook of module:','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 <sub class="required">*</sub></label>
                                <div class="col-lg-12">
                                    <select class="list_hook" name="column_module_hook" data-text="<?php echo smartyTranslate(array('s'=>'Please Select a hook','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
">
                                        <option value=""><?php echo smartyTranslate(array('s'=>'--------- Select a Hook ---------','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</option>
                                    </select>
                                    <!-- here -->
                                </div>
                            </div>
                            <div class="row column_type_val column_type_module" style="display: none">
                                <div class="col-lg-12 checkbox">
                                    <label class="control-label">
                                        <input type="checkbox" name="delete_module" value="0">
										<?php echo smartyTranslate(array('s'=>'Delete module in this hook','mod'=>'leomanagewidgets'),$_smarty_tpl);?>

									</label>
                                </div>
                            </div>
                            <div class="alert alert-danger" style="margin-top: 10px">
								<?php echo smartyTranslate(array('s'=>'Please consider using this function. This function is only for advance user, It will load other module and display in column of leomanagewidget. With some module have ID in wrapper DIV, your site will have Javascript Conflicts. We will not support this error','mod'=>'leomanagewidgets'),$_smarty_tpl);?>

							</div>
                            <div class="row">
								<hr/>
                            </div>
                            <div class="row">
                                <label class="control-label col-lg-3 col-md-3" for=""><?php echo smartyTranslate(array('s'=>'Active','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                                <input type="radio" class="default-on" checked="checked" value="1" name="row_active">
                                <label for="columnactive_on"> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                                <input type="radio" class="default-off" value="0" name="row_active">
                                <label for="columnactive_off"> <?php echo smartyTranslate(array('s'=>'No','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="default_column" class="column-row">
            <div class="leo-column unset-widget">
                <div class="leo-action-top pull-right">
                    <button type="button" class="leo-cog dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                        <div class="width-val"></div>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right">
                        <?php  $_smarty_tpl->tpl_vars['itemWidth'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemWidth']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leo_width']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemWidth']->key => $_smarty_tpl->tpl_vars['itemWidth']->value) {
$_smarty_tpl->tpl_vars['itemWidth']->_loop = true;
?>
                            <li>
                                <a class="leo-change-width" data-width="<?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
" href="javascript:void(0);" tabindex="-1">
                                    <span class="leo-width-val leo-w-<?php if (strpos($_smarty_tpl->tpl_vars['itemWidth']->value,".")) {?><?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
<?php }?>"><?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
/12 - ( <?php echo smarty_function_math(array('equation'=>"x/y*100",'x'=>$_smarty_tpl->tpl_vars['itemWidth']->value,'y'=>12,'format'=>"%.2f"),$_smarty_tpl);?>
 % )</span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="action-sign">
                        <a class="width-action plus-sign" href="#" data-action="1"></a>
                        <a class="width-action minus-sign" href="#" data-action="-1"></a>
                    </div>
                </div>
                <div class="leo-column-action pull-left">
                    <a title="<?php echo smartyTranslate(array('s'=>'Click here to change column status','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
" class="leo-column-status label-tooltip" data-value="1">
                        <span class="status-enable">&nbsp;</span><span class="status-disable" style="display:none;">&nbsp;</span>
                    </a>
                    <a class="leo-edit-column" href="javascript:void(0)"><span class="status-edit">&nbsp;</span></a>
                    <a style="color:#fff" class="leo-delete-column" data-confirm="<?php echo smartyTranslate(array('s'=>'Are you sure you want to delete this column?','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
" data-for="delete" href="javascript:void(0)">
                        <span class="status-delete">&nbsp;</span>
					</a>
                </div>
                <div class="leo-column-row clear"></div>
                <div class="leo-column_btn">
                    <a class="btn-add-row btn-add-widget" title="<?php echo smartyTranslate(array('s'=>'Click here to add a new row','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
" href="javascript:void(0)" data-action="1"><?php echo smartyTranslate(array('s'=>'Add widgets','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</a>
                </div>
            </div>
        </div>
        
        <div class="leo-column_title" id="default_row">
            <a title="<?php echo smartyTranslate(array('s'=>'Click here to change row status','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
" class="leo-row-status label-tooltip" data-value="1">
                <span class="status-enable">&nbsp;</span>
				<span class="status-disable" style="display:none;">&nbsp;</span>
            </a>
            <a style="color:#D9534F" class="leo-delete-row" data-confirm="<?php echo smartyTranslate(array('s'=>'Are you sure you want to delete this column?','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
" data-for="delete" href="javascript:void(0)">
				<span class="status-delete">&nbsp;</span>
			</a>
            <a class="leo-edit-row" href="javascript:void(0)"><span class="status-edit">&nbsp;</span></a>
            <a class="leo-edit-widget" data-for="widget" href="javascript:void(0);"></a>
        </div>
        
        <div id="default_group" class="row group-row" data-original-title="<?php echo smartyTranslate(array('s'=>'You can drag this group to other hook','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
" data-type="1">
            <div class="group-panel col-lg-12">
                <div class="pull-left">
                    <a title="<?php echo smartyTranslate(array('s'=>'Click here to change group status','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
" class="leo-group-status label-tooltip leo-tool" data-value="1">
                        <span class="status-enable"><?php echo smartyTranslate(array('s'=>'Enable','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</span>
						<span class="status-disable" style="display:none;"><?php echo smartyTranslate(array('s'=>'Disable','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</span>
                    </a>
                    <a class="leo-group-btn leo-edit-group label-tooltip leo-tool" data-original-title="<?php echo smartyTranslate(array('s'=>'Click here to Edit group','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
">
                        <span class="status-edit"><?php echo smartyTranslate(array('s'=>'Edit','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</span>
                    </a>
                    <a style="color:#D9534F" class="leo-group-btn leo-remove-group label-tooltip leo-tool" data-confirm="<?php echo smartyTranslate(array('s'=>'Are you sure you want to delete this group?','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
" data-original-title="<?php echo smartyTranslate(array('s'=>'Click here to delete group','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
" href="javascript:void(0)">
                        <span class="status-delete"><?php echo smartyTranslate(array('s'=>'Delete','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</span>
                    </a>
                </div>
                <div class="pull-right">
                    <button type="button" class="btn btn-default leobtn-width dropdown-toggle btn-add-group btn-add-col" tabindex="-1" data-toggle="dropdown">
                        <?php echo smartyTranslate(array('s'=>'Insert A Column','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 
						<span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <?php  $_smarty_tpl->tpl_vars['itemWidth'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemWidth']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leo_width']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemWidth']->key => $_smarty_tpl->tpl_vars['itemWidth']->value) {
$_smarty_tpl->tpl_vars['itemWidth']->_loop = true;
?>
                            <li>
                                <a class="leo-add-column" data-width="<?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
" href="javascript:void(0);" tabindex="-1">
                                    <span class="leo-width-val leo-w-<?php if (strpos($_smarty_tpl->tpl_vars['itemWidth']->value,".")) {?><?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
<?php }?>"><?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
/12 - ( <?php echo smarty_function_math(array('equation'=>"x/y*100",'x'=>$_smarty_tpl->tpl_vars['itemWidth']->value,'y'=>12,'format'=>"%.2f"),$_smarty_tpl);?>
 % )</span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="column-list col-lg-12"></div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                var $leoManage = $(document).leomanagewidgets();
                $leoManage.groupField = <?php echo $_smarty_tpl->tpl_vars['leo_groupField']->value;?>
;
                $leoManage.columnField = <?php echo $_smarty_tpl->tpl_vars['leo_columnField']->value;?>
;
                $leoManage.rowField = <?php echo $_smarty_tpl->tpl_vars['leo_rowField']->value;?>
;
                $leoManage.setData('<?php echo $_smarty_tpl->tpl_vars['leo_json_data']->value;?>
');
                $leoManage.submitLink = '<?php echo $_smarty_tpl->tpl_vars['leo_submit_link']->value;?>
';
                $leoManage.widgetLink = '<?php echo $_smarty_tpl->tpl_vars['widget_link']->value;?>
&addleowidgets&type=popup';
                $leoManage.moduleLink = '<?php echo $_smarty_tpl->tpl_vars['module_link']->value;?>
';

                $(".leo-edit-group").click(function(e){
                    $("select[name='background_style']").trigger("change");
                    $("select[name='group_background_video_source']").trigger("change");
                });

                $("select[name='background_style']").change(function(e){
                    var selectedValue = $(this).val();
                    if (selectedValue === 'video')
                        $(".group_background_video").css("display", "block");
                    else
                        $(".group_background_video").css("display", "none");
                    if ( selectedValue !== 'undefined' && selectedValue !== '' && selectedValue !== 'video') {
                        $(".group_background_image").css("display", "block");
                        if ( selectedValue === 'parallax')
                            $(".group_background_image_parallax").css("display","block");
                        else
                            $(".group_background_image_parallax").css("display","none");

                        if ( selectedValue === 'mouseparallax'){
                            $(".group_background_image_mouseparallax").css("display","block");
                            $(".group_background_image_position").css("display","none");
                        }
                        else{
                            $(".group_background_image_position").css("display","block");
                            $(".group_background_image_mouseparallax").css("display","none");
                        }
                    } else {
                        $(".group_background_image").css("display","none");
                    }
                });

                $("select[name='group_background_video_source']").change(function(e){
                    if ($(this).val() === 'html5') {
                        $("#youtube-video-type input").attr("disabled", true);
                        $("#html5-video-type input").attr("disabled", false);
                    }
                    else {
                        $("#html5-video-type input").attr("disabled", true);
                        $("#youtube-video-type input").attr("disabled", false);
                    }
                });
            });
        </script>
        </div>
    <?php }?>
    
								<div class="col-lg-<?php if (isset($_smarty_tpl->tpl_vars['input']->value['col'])) {?><?php echo intval($_smarty_tpl->tpl_vars['input']->value['col']);?>
<?php } else { ?>9<?php }?><?php if (!isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?> col-lg-offset-3<?php }?>">
								
								<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='text'||$_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&$_smarty_tpl->tpl_vars['input']->value['lang']) {?>
									<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
									<div class="form-group">
									<?php }?>
									<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
										<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']], null, 0);?>
										<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
										<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
											<div class="col-lg-9">
										<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?>
													
														<script type="text/javascript">
															$().ready(function () {
																var input_id = '<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>';
																$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo smartyTranslate(array('s'=>'Add tag','js'=>1),$_smarty_tpl);?>
'});
																$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
																	$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
																});
															});
														</script>
													
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
												<div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
												<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
													<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
												</span>
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
													<span class="input-group-addon">
													  <?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>

													</span>
													<?php }?>
												<input type="text"
													id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"
													name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
													class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?> tagify<?php }?>"
													value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo htmlspecialchars(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value_text']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
													onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?> />
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
													<span class="input-group-addon">
													  <?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

													</span>
													<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
												</div>
												<?php }?>
										<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
											</div>
											<div class="col-lg-2">
												<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
													<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

													<i class="icon-caret-down"></i>
												</button>
												<ul class="dropdown-menu">
													<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
													<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
													<?php } ?>
												</ul>
											</div>
										</div>
										<?php }?>
									<?php } ?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
									<script type="text/javascript">
									$(document).ready(function(){
									<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
										countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter"));
									<?php } ?>
									});
									</script>
									<?php }?>
									<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
									</div>
									<?php }?>
									<?php } else { ?>
										<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?>
											
											<script type="text/javascript">
												$().ready(function () {
													var input_id = '<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>';
													$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo smartyTranslate(array('s'=>'Add tag'),$_smarty_tpl);?>
'});
													$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
														$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
													});
												});
											</script>
											
										<?php }?>
										<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
										<div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter" class="input-group-addon"><span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span></span>
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
										<span class="input-group-addon">
										  <?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>

										</span>
										<?php }?>
										<input type="text"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo htmlspecialchars(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value_text']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?> tagify<?php }?>"
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
											/>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
										<span class="input-group-addon">
										  <?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

										</span>
										<?php }?>

										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
										</div>
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										<script type="text/javascript">
										$(document).ready(function(){
											countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
										});
										</script>
										<?php }?>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='textbutton') {?>
									<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
									<div class="row">
										<div class="col-lg-9">
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) {?>
										<div class="input-group">
											<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter" class="input-group-addon">
												<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
											</span>
										<?php }?>
										<input type="text"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo htmlspecialchars(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value_text']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?> tagify<?php }?>"
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
											/>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										</div>
										<?php }?>
										</div>
										<div class="col-lg-2">
											<button type="button" class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['input']->value['button']['attributes']['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['button']['attributes']['class'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['button']['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['button']['class'];?>
<?php }?>"
												<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['input']->value['button']['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
													<?php if (mb_strtolower($_smarty_tpl->tpl_vars['name']->value, 'UTF-8')!='class') {?>
													 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
"
													<?php }?>
												<?php } ?> >
												<?php echo $_smarty_tpl->tpl_vars['input']->value['button']['label'];?>

											</button>
										</div>
									</div>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
									<script type="text/javascript">
										$(document).ready(function() {
											countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
										});
									</script>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='swap') {?>
									<div class="form-group">
										<div class="col-lg-9">
											<div class="form-control-static row">
												<div class="col-xs-6">
													<select <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?>size="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['size'], ENT_QUOTES, 'utf-8', true);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?> onchange="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['onchange'], ENT_QUOTES, 'utf-8', true);?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['class'], ENT_QUOTES, 'utf-8', true);?>
<?php }?>" id="availableSwap" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'utf-8', true);?>
_available[]" multiple="multiple">
													<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
														<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
															<?php if (!in_array($_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']},$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
															<?php }?>
														<?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
															<option value="">-</option>
														<?php } else { ?>
															<?php if (!in_array($_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>
															<?php }?>
														<?php }?>
													<?php } ?>
													</select>
													<a href="#" id="addSwap" class="btn btn-default btn-block"><?php echo smartyTranslate(array('s'=>'Add'),$_smarty_tpl);?>
 <i class="icon-arrow-right"></i></a>
												</div>
												<div class="col-xs-6">
													<select <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?>size="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['size'], ENT_QUOTES, 'utf-8', true);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?> onchange="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['onchange'], ENT_QUOTES, 'utf-8', true);?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['class'], ENT_QUOTES, 'utf-8', true);?>
<?php }?>" id="selectedSwap" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'utf-8', true);?>
_selected[]" multiple="multiple">
													<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
														<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
															<?php if (in_array($_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']},$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
															<?php }?>
														<?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
															<option value="">-</option>
														<?php } else { ?>
															<?php if (in_array($_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>
															<?php }?>
														<?php }?>
													<?php } ?>
													</select>
													<a href="#" id="removeSwap" class="btn btn-default btn-block"><i class="icon-arrow-left"></i> <?php echo smartyTranslate(array('s'=>'Remove'),$_smarty_tpl);?>
</a>
												</div>
											</div>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='select') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['query'])&&!$_smarty_tpl->tpl_vars['input']->value['options']['query']&&isset($_smarty_tpl->tpl_vars['input']->value['empty_message'])) {?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['empty_message'];?>

										<?php $_smarty_tpl->createLocalArrayVariable('input', null, 0);
$_smarty_tpl->tpl_vars['input']->value['required'] = false;?>
										<?php $_smarty_tpl->createLocalArrayVariable('input', null, 0);
$_smarty_tpl->tpl_vars['input']->value['desc'] = null;?>
									<?php } else { ?>
										<select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'utf-8', true);?>
"
												class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['class'], ENT_QUOTES, 'utf-8', true);?>
<?php }?> fixed-width-xl"
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['id'], ENT_QUOTES, 'utf-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'utf-8', true);?>
<?php }?>"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])&&$_smarty_tpl->tpl_vars['input']->value['multiple']) {?> multiple="multiple"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['size'], ENT_QUOTES, 'utf-8', true);?>
"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?> onchange="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['onchange'], ENT_QUOTES, 'utf-8', true);?>
"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['default'])) {?>
												<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['options']['default']['value'], ENT_QUOTES, 'utf-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['options']['default']['label'], ENT_QUOTES, 'utf-8', true);?>
</option>
											<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['optiongroup'])) {?>
												<?php  $_smarty_tpl->tpl_vars['optiongroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['optiongroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['optiongroup']->key => $_smarty_tpl->tpl_vars['optiongroup']->value) {
$_smarty_tpl->tpl_vars['optiongroup']->_loop = true;
?>
													<optgroup label="<?php echo $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['label']];?>
">
														<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['query']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']];?>
"
																<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
																	<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																		<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
																	<?php } ?>
																<?php } else { ?>
																	<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
																<?php }?>
															><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['name']];?>
</option>
														<?php } ?>
													</optgroup>
												<?php } ?>
											<?php } else { ?>
												<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
													<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
																<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																	<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}) {?>
																		selected="selected"
																	<?php }?>
																<?php } ?>
															<?php } else { ?>
																<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}) {?>
																	selected="selected"
																<?php }?>
															<?php }?>
														><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
													<?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
														<option value="">-</option>
													<?php } else { ?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
																<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																	<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?>
																		selected="selected"
																	<?php }?>
																<?php } ?>
															<?php } else { ?>
																<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?>
																	selected="selected"
																<?php }?>
															<?php }?>
														><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>

													<?php }?>
												<?php } ?>
											<?php }?>
										</select>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='radio') {?>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<div class="radio <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
											<label><input type="radio"	name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>/><?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
</label>
										</div>
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['p'])&&$_smarty_tpl->tpl_vars['value']->value['p']) {?><p class="help-block"><?php echo $_smarty_tpl->tpl_vars['value']->value['p'];?>
</p><?php }?>
									<?php } ?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='switch') {?>
									<span class="switch prestashop-switch fixed-width-lg">
										<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1) {?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>/>
										<label <?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1) {?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }?>><?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1) {?><?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>
<?php }?></label>
										<?php } ?>
										<a class="slide-button btn"></a>
									</span>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='textarea') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?><div class="input-group"><?php }?>
									<?php $_smarty_tpl->tpl_vars['use_textarea_autosize'] = new Smarty_variable(true, null, 0);?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&$_smarty_tpl->tpl_vars['input']->value['lang']) {?>
										<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
											<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
											<div class="form-group translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?> style="display:none;"<?php }?>>
												<div class="col-lg-9">
											<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
														<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
															<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
														</span>
													<?php }?>
													<textarea<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
											<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
												</div>
												<div class="col-lg-2">
													<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
														<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

														<span class="caret"></span>
													</button>
													<ul class="dropdown-menu">
														<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
														<li>
															<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
														</li>
														<?php } ?>
													</ul>
												</div>
											</div>
											<?php }?>
										<?php } ?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<script type="text/javascript">
											$(document).ready(function(){
											<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
												countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter"));
											<?php } ?>
											});
											</script>
										<?php }?>
									<?php } else { ?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
												<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
											</span>
										<?php }?>
										<textarea<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['cols'])) {?>cols="<?php echo $_smarty_tpl->tpl_vars['input']->value['cols'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['rows'])) {?>rows="<?php echo $_smarty_tpl->tpl_vars['input']->value['rows'];?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<script type="text/javascript">
											$(document).ready(function(){
												countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
											});
											</script>
										<?php }?>
									<?php }?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?></div><?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='checkbox') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand'])) {?>
										<a class="btn btn-default show_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default'])=='hide') {?> hidden<?php }?>" href="#">
											<i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['icon'];?>
"></i>
											<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['text'];?>

											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])&&$_smarty_tpl->tpl_vars['input']->value['expand']['print_total']>0) {?>
												<span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
											<?php }?>
										</a>
										<a class="btn btn-default hide_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default'])=='show') {?> hidden<?php }?>" href="#">
											<i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['icon'];?>
"></i>
											<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['text'];?>

											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])&&$_smarty_tpl->tpl_vars['input']->value['expand']['print_total']>0) {?>
												<span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
											<?php }?>
										</a>
									<?php }?>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<?php $_smarty_tpl->tpl_vars['id_checkbox'] = new Smarty_variable((($_smarty_tpl->tpl_vars['input']->value['name']).('_')).($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']]), null, 0);?>
										<div class="checkbox<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand'])&&strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default'])=='show') {?> hidden<?php }?>">
											<label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['value']->value['val'])) {?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['val'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value])&&$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]) {?> checked="checked"<?php }?> /><?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['name']];?>
</label>
										</div>
									<?php } ?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='change-password') {?>
									<div class="row">
										<div class="col-lg-12">
											<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-btn-change" class="btn btn-default">
												<i class="icon-lock"></i>
												<?php echo smartyTranslate(array('s'=>'Change password...'),$_smarty_tpl);?>

											</button>
											<div id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-change-container" class="form-password-change well hide">
												<div class="form-group">
													<label for="old_passwd" class="control-label col-lg-2 required">
														<?php echo smartyTranslate(array('s'=>'Current password'),$_smarty_tpl);?>

													</label>
													<div class="col-lg-10">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-unlock"></i>
															</span>
															<input type="password" id="old_passwd" name="old_passwd" class="form-control" value="" required="required" autocomplete="off">
														</div>
													</div>
												</div>
												<hr />
												<div class="form-group">
													<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="required control-label col-lg-2">
														<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'Password should be at least 8 characters long.'),$_smarty_tpl);?>
">
															<?php echo smartyTranslate(array('s'=>'New password'),$_smarty_tpl);?>

														</span>
													</label>
													<div class="col-lg-9">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-key"></i>
															</span>
															<input type="password" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>" value="" required="required" autocomplete="off"/>
														</div>
														<span id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-output"></span>
													</div>
												</div>
												<div class="form-group">
													<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" class="required control-label col-lg-2">
														<?php echo smartyTranslate(array('s'=>'Confirm password'),$_smarty_tpl);?>

													</label>
													<div class="col-lg-4">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-key"></i>
															</span>
															<input type="password" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>" value="" autocomplete="off"/>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="col-lg-10 col-lg-offset-2">
														<input type="text" class="form-control fixed-width-md pull-left" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-field" disabled="disabled">
														<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-btn" class="btn btn-default">
															<i class="icon-random"></i>
															<?php echo smartyTranslate(array('s'=>'Generate password'),$_smarty_tpl);?>

														</button>
													</div>
												</div>
												<div class="form-group">
													<div class="col-lg-10 col-lg-offset-2">
														<p class="checkbox">
															<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-checkbox-mail">
																<input name="passwd_send_email" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-checkbox-mail" type="checkbox" checked="checked">
																<?php echo smartyTranslate(array('s'=>'Send me this new password by Email'),$_smarty_tpl);?>

															</label>
														</p>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12">
														<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-cancel-btn" class="btn btn-default">
															<i class="icon-remove"></i>
															<?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>

														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<script>
										$(function(){
											var $oldPwd = $('#old_passwd');
											var $passwordField = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
');
											var $output = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-output');
											var $generateBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-btn');
											var $generateField = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-field');
											var $cancelBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-cancel-btn');

											var feedback = [
												{ badge: 'text-danger', text: '<?php echo smartyTranslate(array('s'=>"Invalid",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-warning', text: '<?php echo smartyTranslate(array('s'=>"Okay",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-success', text: '<?php echo smartyTranslate(array('s'=>"Good",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-success', text: '<?php echo smartyTranslate(array('s'=>"Fabulous",'js'=>1),$_smarty_tpl);?>
' }
											];
											$.passy.requirements.length.min = 8;
											$.passy.requirements.characters = 'DIGIT';
											$passwordField.passy(function(strength, valid) {
												$output.text(feedback[strength].text);
												$output.removeClass('text-danger').removeClass('text-warning').removeClass('text-success');
												$output.addClass(feedback[strength].badge);
												if (valid){
													$output.show();
												}
												else {
													$output.hide();
												}
											});
											var $container = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-change-container');
											var $changeBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-btn-change');
											var $confirmPwd = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2');

											$changeBtn.on('click',function(){
												$container.removeClass('hide');
												$changeBtn.addClass('hide');
											});
											$generateBtn.click(function() {
												$generateField.passy( 'generate', 8 );
												var generatedPassword = $generateField.val();
												$passwordField.val(generatedPassword);
												$confirmPwd.val(generatedPassword);
											});
											$cancelBtn.on('click',function() {
												$container.find("input").val("");
												$container.addClass('hide');
												$changeBtn.removeClass('hide');
											});

											$.validator.addMethod('password_same', function(value, element) {
												return $passwordField.val() == $confirmPwd.val();
											}, '<?php echo smartyTranslate(array('s'=>"Invalid password confirmation",'js'=>1),$_smarty_tpl);?>
');

											$('#employee_form').validate({
												rules: {
													"email": {
														email: true
													},
													"<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" : {
														minlength: 8
													},
													"<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2": {
														password_same: true
													},
													"old_passwd" : {},
												},
												// override jquery validate plugin defaults for bootstrap 3
												highlight: function(element) {
													$(element).closest('.form-group').addClass('has-error');
												},
												unhighlight: function(element) {
													$(element).closest('.form-group').removeClass('has-error');
												},
												errorElement: 'span',
												errorClass: 'help-block',
												errorPlacement: function(error, element) {
													if(element.parent('.input-group').length) {
														error.insertAfter(element.parent());
													} else {
														error.insertAfter(element);
													}
												}
											});
										});
									</script>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='password') {?>
									<div class="input-group fixed-width-lg">
										<span class="input-group-addon">
											<i class="icon-key"></i>
										</span>
										<input type="password"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
											value=""
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?>autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?> />
									</div>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='birthday') {?>
								<div class="form-group">
									<?php  $_smarty_tpl->tpl_vars['select'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['select']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['select']->key => $_smarty_tpl->tpl_vars['select']->value) {
$_smarty_tpl->tpl_vars['select']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['select']->key;
?>
									<div class="col-lg-2">
										<select name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="fixed-width-lg<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
											<option value="">-</option>
											<?php if ($_smarty_tpl->tpl_vars['key']->value=='months') {?>
												
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
</option>
												<?php } ?>
											<?php } else { ?>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
												<?php } ?>
											<?php }?>
										</select>
									</div>
									<?php } ?>
								</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='group') {?>
									<?php $_smarty_tpl->tpl_vars['groups'] = new Smarty_variable($_smarty_tpl->tpl_vars['input']->value['values'], null, 0);?>
									<?php /*  Call merged included template "helpers/form/form_group.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('helpers/form/form_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5336586f810c607074-34780740');
content_586f810cd48053_03411389($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "helpers/form/form_group.tpl" */?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='shop') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['html'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='categories') {?>
									<?php echo $_smarty_tpl->tpl_vars['categories_tree']->value;?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='file') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['file'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='categories_select') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['category_tree'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='asso_shop'&&isset($_smarty_tpl->tpl_vars['asso_shop']->value)&&$_smarty_tpl->tpl_vars['asso_shop']->value) {?>
									<?php echo $_smarty_tpl->tpl_vars['asso_shop']->value;?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='color') {?>
								<div class="form-group">
									<div class="col-lg-2">
										<div class="row">
											<div class="input-group">
												<input type="color"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?> class="color mColorPickerInput"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
" />
											</div>
										</div>
									</div>
								</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='date') {?>
									<div class="row">
										<div class="input-group col-lg-4">
											<input
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
												type="text"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?>class="datepicker"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
" />
											<span class="input-group-addon">
												<i class="icon-calendar-empty"></i>
											</span>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='datetime') {?>
									<div class="row">
										<div class="input-group col-lg-4">
											<input
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
												type="text"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?> class="datetimepicker"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
" />
											<span class="input-group-addon">
												<i class="icon-calendar-empty"></i>
											</span>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='free') {?>
									<?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='html') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['html_content'])) {?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['html_content'];?>

									<?php } else { ?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>

									<?php }?>
								<?php }?>
								
								
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['desc'])&&!empty($_smarty_tpl->tpl_vars['input']->value['desc'])) {?>
										<p class="help-block">
											<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['desc'])) {?>
												<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['desc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
													<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
														<span id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
													<?php } else { ?>
														<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<br />
													<?php }?>
												<?php } ?>
											<?php } else { ?>
												<?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>

											<?php }?>
										</p>
									<?php }?>
								
								</div>
							

						<?php }?>
						</div>
						
					<?php } ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminForm','fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
Form<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php } elseif (isset($_GET['controller'])) {?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
Form<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php }?>
				</div><!-- /.form-wrapper -->
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='desc') {?>
					<div class="alert alert-info col-lg-offset-3">
						<?php if (is_array($_smarty_tpl->tpl_vars['field']->value)) {?>
							<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['p']->key;
?>
								<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
									<span<?php if (isset($_smarty_tpl->tpl_vars['p']->value['id'])) {?> id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['p']->value;?>

									<?php if (isset($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['k']->value+1])) {?><br /><?php }?>
								<?php }?>
							<?php } ?>
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['field']->value;?>

						<?php }?>
					</div>
				<?php }?>
				
			<?php } ?>
			
			<?php $_smarty_tpl->_capture_stack[0][] = array('form_submit_btn', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'form_submit_btn'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])||isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'])) {?>
					<div class="panel-footer">
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])&&!empty($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) {?>
						<button type="submit" value="1"	id="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn<?php }?><?php if (Smarty::$_smarty_vars['capture']['form_submit_btn']>1) {?>_<?php echo intval((Smarty::$_smarty_vars['capture']['form_submit_btn']-1));?>
<?php }?>" name="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay'])&&$_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay']) {?>AndStay<?php }?>" class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'];?>
<?php } else { ?>btn btn-default pull-right<?php }?>">
							<i class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'];?>
<?php } else { ?>process-icon-save<?php }?>"></i> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['title'];?>

						</button>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['show_cancel_button']->value)&&$_smarty_tpl->tpl_vars['show_cancel_button']->value) {?>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['back_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default" onclick="window.history.back();">
							<i class="process-icon-cancel"></i> <?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>

						</a>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset'])) {?>
						<button
							type="reset"
							id="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_reset_btn<?php }?>"
							class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class'];?>
<?php } else { ?>btn btn-default<?php }?>"
							>
							<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon'];?>
"></i> <?php }?> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['title'];?>

						</button>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'])) {?>
						<?php  $_smarty_tpl->tpl_vars['btn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['btn']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->key => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['btn']->key;
?>
							<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['href'])&&trim($_smarty_tpl->tpl_vars['btn']->value['href'])!='') {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['btn']->value['href'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js'])&&$_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ></i> <?php }?><?php echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</a>
							<?php } else { ?>
								<button type="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['type'])) {?><?php echo $_smarty_tpl->tpl_vars['btn']->value['type'];?>
<?php } else { ?>button<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
<?php }?>" name="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['name'])) {?><?php echo $_smarty_tpl->tpl_vars['btn']->value['name'];?>
<?php } else { ?>submitOptions<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js'])&&$_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ></i> <?php }?><?php echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</button>
							<?php }?>
						<?php } ?>
						<?php }?>
					</div>
				<?php }?>
			
		</div>
		
		
	<?php } ?>
</form>



<?php if (isset($_smarty_tpl->tpl_vars['tinymce']->value)&&$_smarty_tpl->tpl_vars['tinymce']->value) {?>
<script type="text/javascript">
	var iso = '<?php echo addslashes($_smarty_tpl->tpl_vars['iso']->value);?>
';
	var pathCSS = '<?php echo addslashes(@constant('_THEME_CSS_DIR_'));?>
';
	var ad = '<?php echo addslashes($_smarty_tpl->tpl_vars['ad']->value);?>
';

	$(document).ready(function(){
		
			tinySetup({
				editor_selector :"autoload_rte"
			});
		
	});
</script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['firstCall']->value) {?>
	<script type="text/javascript">
		var module_dir = '<?php echo @constant('_MODULE_DIR_');?>
';
		var id_language = <?php echo intval($_smarty_tpl->tpl_vars['defaultFormLanguage']->value);?>
;
		var languages = new Array();
		var vat_number = <?php if ($_smarty_tpl->tpl_vars['vat_number']->value) {?>1<?php } else { ?>0<?php }?>;
		// Multilang field setup must happen before document is ready so that calls to displayFlags() to avoid
		// precedence conflicts with other document.ready() blocks
		<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
			languages[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
] = {
				id_lang: <?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
,
				iso_code: '<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
',
				name: '<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
',
				is_default: '<?php echo $_smarty_tpl->tpl_vars['language']->value['is_default'];?>
'
			};
		<?php } ?>
		// we need allowEmployeeFormLang var in ajax request
		allowEmployeeFormLang = <?php echo intval($_smarty_tpl->tpl_vars['allowEmployeeFormLang']->value);?>
;
		displayFlags(languages, id_language, allowEmployeeFormLang);

		$(document).ready(function() {

			$(".show_checkbox").click(function () {
				$(this).addClass('hidden')
				$(this).siblings('.checkbox').removeClass('hidden');
				$(this).siblings('.hide_checkbox').removeClass('hidden');
				return false;
			});
			$(".hide_checkbox").click(function () {
				$(this).addClass('hidden')
				$(this).siblings('.checkbox').addClass('hidden');
				$(this).siblings('.show_checkbox').removeClass('hidden');
				return false;
			});

			<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value['id_state'])) {?>
				if ($('#id_country') && $('#id_state'))
				{
					ajaxStates(<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['id_state'];?>
);
					$('#id_country').change(function() {
						ajaxStates();
					});
				}
			<?php }?>

			if ($(".datepicker").length > 0)
				$(".datepicker").datepicker({
					prevText: '',
					nextText: '',
					dateFormat: 'yy-mm-dd'
				});

			if ($(".datetimepicker").length > 0)
			$('.datetimepicker').datetimepicker({
				prevText: '',
				nextText: '',
				dateFormat: 'yy-mm-dd',
				// Define a custom regional settings in order to use PrestaShop translation tools
				currentText: '<?php echo smartyTranslate(array('s'=>'Now','js'=>1),$_smarty_tpl);?>
',
				closeText: '<?php echo smartyTranslate(array('s'=>'Done','js'=>1),$_smarty_tpl);?>
',
				ampm: false,
				amNames: ['AM', 'A'],
				pmNames: ['PM', 'P'],
				timeFormat: 'hh:mm:ss tt',
				timeSuffix: '',
				timeOnlyTitle: '<?php echo smartyTranslate(array('s'=>'Choose Time','js'=>1),$_smarty_tpl);?>
',
				timeText: '<?php echo smartyTranslate(array('s'=>'Time','js'=>1),$_smarty_tpl);?>
',
				hourText: '<?php echo smartyTranslate(array('s'=>'Hour','js'=>1),$_smarty_tpl);?>
',
				minuteText: '<?php echo smartyTranslate(array('s'=>'Minute','js'=>1),$_smarty_tpl);?>
',
			});
			<?php if (isset($_smarty_tpl->tpl_vars['use_textarea_autosize']->value)) {?>
			$(".textarea-autosize").autosize();
			<?php }?>
		});
	state_token = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminStates'),$_smarty_tpl);?>
';
	
	</script>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-01-06 18:35:40
         compiled from "F:\xampp\htdocs\hyseedshop\admin32\themes\default\template\helpers\form\form_group.tpl" */ ?>
<?php if ($_valid && !is_callable('content_586f810cd48053_03411389')) {function content_586f810cd48053_03411389($_smarty_tpl) {?>

<?php if (count($_smarty_tpl->tpl_vars['groups']->value)&&isset($_smarty_tpl->tpl_vars['groups']->value)) {?>
<div class="row">
	<div class="col-lg-6">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="fixed-width-xs">
						<span class="title_box">
							<input type="checkbox" name="checkme" id="checkme" onclick="checkDelBoxes(this.form, 'groupBox[]', this.checked)" />
						</span>
					</th>
					<th class="fixed-width-xs"><span class="title_box"><?php echo smartyTranslate(array('s'=>'ID'),$_smarty_tpl);?>
</span></th>
					<th>
						<span class="title_box">
							<?php echo smartyTranslate(array('s'=>'Group name'),$_smarty_tpl);?>

						</span>
					</th>
				</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
				<tr>
					<td>
						<?php $_smarty_tpl->tpl_vars['id_checkbox'] = new Smarty_variable((('groupBox').('_')).($_smarty_tpl->tpl_vars['group']->value['id_group']), null, 0);?>
						<input type="checkbox" name="groupBox[]" class="groupBox" id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id_group'];?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]) {?>checked="checked"<?php }?> />
					</td>
					<td><?php echo $_smarty_tpl->tpl_vars['group']->value['id_group'];?>
</td>
					<td>
						<label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</label>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<?php } else { ?>
<p>
	<?php echo smartyTranslate(array('s'=>'No group created'),$_smarty_tpl);?>

</p>
<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-01-06 18:35:40
         compiled from "F:\xampp\htdocs\hyseedshop\modules\leomanagewidgets\views\templates\admin\_configure\helpers\form\form_grouplist.tpl" */ ?>
<?php if ($_valid && !is_callable('content_586f810ce96da5_76831259')) {function content_586f810ce96da5_76831259($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'F:\\xampp\\htdocs\\hyseedshop\\tools\\smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_function_math')) include 'F:\\xampp\\htdocs\\hyseedshop\\tools\\smarty\\plugins\\function.math.php';
?>

<div class="row group-row" data-original-title="<?php echo smartyTranslate(array('s'=>'You can drag this group to other hook','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
"<?php if (isset($_smarty_tpl->tpl_vars['item_group']->value)) {?>id="group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_group']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
    
    <div class="group-panel col-lg-12">
        <div class="pull-left">
            <a title="<?php echo smartyTranslate(array('s'=>'Click here to change group status','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
" class="leo-group-status label-tooltip leo-tool" data-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_group']->value['active'], ENT_QUOTES, 'UTF-8', true);?>
">
                <span class="status-enable"<?php if ($_smarty_tpl->tpl_vars['item_group']->value['active']!=1) {?> style="display:none;"<?php }?>><?php echo smartyTranslate(array('s'=>'Enable','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</span><span class="status-disable"<?php if ($_smarty_tpl->tpl_vars['item_group']->value['active']==1) {?> style="display:none;"<?php }?>><?php echo smartyTranslate(array('s'=>'Disable','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</span>
            </a>
            <a href="javascript:void(0);" class="leo-group-btn leo-edit-group label-tooltip leo-tool" data-original-title="<?php echo smartyTranslate(array('s'=>'Click here to Edit group','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
">
                 <span class="status-edit"><?php echo smartyTranslate(array('s'=>'Edit','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</span>
            </a>
            <a style="color:#D9534F" class="leo-group-btn leo-remove-group label-tooltip leo-tool" data-confirm="<?php echo smartyTranslate(array('s'=>'Are you sure you want to delete this group?','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
" data-original-title="<?php echo smartyTranslate(array('s'=>'Click here to delete group','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
" href="javascript:void(0)">
                <span class="status-delete"><?php echo smartyTranslate(array('s'=>'Delete','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</span>
            </a>
        </div>
        <div class="pull-right">
            <button type="button" class="btn btn-default leobtn-width dropdown-toggle btn-add-group btn-add-col" tabindex="-1" data-toggle="dropdown">
                <?php echo smartyTranslate(array('s'=>'Insert A Column','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
 <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <?php  $_smarty_tpl->tpl_vars['itemWidth'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemWidth']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leo_width']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemWidth']->key => $_smarty_tpl->tpl_vars['itemWidth']->value) {
$_smarty_tpl->tpl_vars['itemWidth']->_loop = true;
?>
                <li>
                    <a class="leo-add-column" data-width="<?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
" href="javascript:void(0);" tabindex="-1">                                          
                        <span class="leo-width-val leo-w-<?php if (strpos($_smarty_tpl->tpl_vars['itemWidth']->value,".")) {?><?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemWidth']->value, ENT_QUOTES, 'UTF-8', true);?>
/12 - ( <?php echo smarty_function_math(array('equation'=>"x/y*100",'x'=>$_smarty_tpl->tpl_vars['itemWidth']->value,'y'=>12,'format'=>"%.2f"),$_smarty_tpl);?>
 % )</span>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="column-list col-lg-12">
        <?php if (isset($_smarty_tpl->tpl_vars['item_group']->value)&&isset($_smarty_tpl->tpl_vars['item_group']->value['columns'])) {?>
            <?php  $_smarty_tpl->tpl_vars["itemColumn"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["itemColumn"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_group']->value['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["itemColumn"]->key => $_smarty_tpl->tpl_vars["itemColumn"]->value) {
$_smarty_tpl->tpl_vars["itemColumn"]->_loop = true;
?>
                <div id="column_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemColumn']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" class="column-row<?php if (isset($_smarty_tpl->tpl_vars['itemColumn']->value['col_value'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemColumn']->value['col_value'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                    <div class="leo-column">
                        <div class="leo-column-action pull-left">
                            <a title="<?php echo smartyTranslate(array('s'=>'Click here to change column status','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
" class="leo-column-status" data-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemColumn']->value['active'], ENT_QUOTES, 'UTF-8', true);?>
">
                                <span class="status-enable"<?php if ($_smarty_tpl->tpl_vars['itemColumn']->value['active']!=1) {?> style="display:none;"<?php }?>>&nbsp;</span><span class="status-disable"<?php if ($_smarty_tpl->tpl_vars['itemColumn']->value['active']==1) {?> style="display:none;"<?php }?>>&nbsp;</span>
                            </a>
                            <a class="leo-edit-column"><span class="status-edit">&nbsp;</span></a>
                            <a style="color:#fff" class="leo-delete-column" data-for="delete" data-confirm="<?php echo smartyTranslate(array('s'=>'Are you sure you want to delete this column?','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
" href="javascript:void(0)">
                            <span class="status-delete">&nbsp;</span></a>
                        </div>
                        <div class="leo-action-top pull-right">
                            <button type="button" class="leo-cog dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                                <span class="width-val"></span><span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <?php  $_smarty_tpl->tpl_vars['itemWidth'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemWidth']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leo_width']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemWidth']->key => $_smarty_tpl->tpl_vars['itemWidth']->value) {
$_smarty_tpl->tpl_vars['itemWidth']->_loop = true;
?>
                                <li>
                                    <a class="leo-change-width" data-width="<?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
" href="javascript:void(0);" tabindex="-1">                                          
                                        <span class="leo-width-val leo-w-<?php if (strpos($_smarty_tpl->tpl_vars['itemWidth']->value,".")) {?><?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
<?php }?>"><?php echo intval($_smarty_tpl->tpl_vars['itemWidth']->value);?>
/12 - ( <?php echo smarty_function_math(array('equation'=>"x/y*100",'x'=>$_smarty_tpl->tpl_vars['itemWidth']->value,'y'=>12,'format'=>"%.2f"),$_smarty_tpl);?>
 % )</span>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                            <div class="action-sign">
                                <a class="width-action plus-sign" href="#" data-action="1"></a>
                                <a class="width-action minus-sign" href="#" data-action="-1"></a>
                            </div>
                        </div>
                        <div class="leo-column-row clear">
						<?php if (isset($_smarty_tpl->tpl_vars['itemColumn']->value['rows'])) {?>
							<?php  $_smarty_tpl->tpl_vars["itemRow"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["itemRow"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['itemColumn']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["itemRow"]->key => $_smarty_tpl->tpl_vars["itemRow"]->value) {
$_smarty_tpl->tpl_vars["itemRow"]->_loop = true;
?>
                            <div class="leo-column_title <?php if ($_smarty_tpl->tpl_vars['itemRow']->value['type']=='0') {?>widget<?php } else { ?>module<?php }?>" id="row_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemRow']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">
                            <a title="<?php echo smartyTranslate(array('s'=>'Click here to change row status','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
" class="leo-row-status" data-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemRow']->value['active'], ENT_QUOTES, 'UTF-8', true);?>
">
                                <span class="status-enable" <?php if ($_smarty_tpl->tpl_vars['itemRow']->value['active']!=1) {?> style="display:none;"<?php }?>>&nbsp;</span><span class="status-disable"<?php if ($_smarty_tpl->tpl_vars['itemRow']->value['active']==1) {?> style="display:none;"<?php }?>>&nbsp;</span>
                            </a>
                            <a style="color:#D9534F" class="leo-delete-row" data-confirm="<?php echo smartyTranslate(array('s'=>'Are you sure you want to delete this column?','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
" data-for="delete" href="javascript:void(0)"><span class="status-delete">&nbsp;</span></a>
                            <a class="leo-edit-row" href="javascript:void(0)"><span class="status-edit">&nbsp;</span></a>
							<a class="leo-edit-widget" data-for="widget" href="javascript:void(0);"><?php if ($_smarty_tpl->tpl_vars['itemRow']->value['type']=='0') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemRow']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemRow']->value['module_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></a>
        						</div>                        
							<?php } ?>
						<?php }?>
                        </div>
                        <div class="leo-column_btn"><a class="btn-add-row btn-add-widget" title="<?php echo smartyTranslate(array('s'=>'Click here to add a new row','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
" href="javascript:void(0)" data-action="1">
                        <?php echo smartyTranslate(array('s'=>'Add widgets','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</a></div>
                    </div>
                </div>
            <?php } ?>
        <?php }?>
    </div>
</div><?php }} ?>
