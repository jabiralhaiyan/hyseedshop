<?php /* Smarty version Smarty-3.1.19, created on 2017-01-06 18:29:59
         compiled from "F:\xampp\htdocs\hyseedshop\themes\ap_travel\info\paneltool.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15095586f7fb7168611-51451469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4091fc7c45e059ad01ebf79539b7cde1c57ddebf' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\themes\\ap_travel\\info\\paneltool.tpl',
      1 => 1483639448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15095586f7fb7168611-51451469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LEO_THEMENAME' => 0,
    'LEO_COOKIE_THEME' => 0,
    'skins' => 0,
    'header_styles' => 0,
    'theme_customizations' => 0,
    'sidebarmenu' => 0,
    'LEO_LAYOUT_MODE' => 0,
    'layout' => 0,
    'LEO_DEFAULT_SKIN' => 0,
    'skin' => 0,
    'USE_FHEADER' => 0,
    'sidebar_menu' => 0,
    'LEO_SIDEBAR_MENU' => 0,
    'header_style' => 0,
    'LEO_HEADER_STYLE' => 0,
    'xmlselectors' => 0,
    'for' => 0,
    'items' => 0,
    'group' => 0,
    'item' => 0,
    'patterns' => 0,
    'content_dir' => 0,
    'pattern' => 0,
    'BACKGROUNDVALUE' => 0,
    'attachment' => 0,
    'position' => 0,
    'repeat' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586f7fb7339e06_71883861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586f7fb7339e06_71883861')) {function content_586f7fb7339e06_71883861($_smarty_tpl) {?><?php if (class_exists("LeoFrameworkHelper")) {?>
<?php $_smarty_tpl->tpl_vars['skins'] = new Smarty_variable(LeoFrameworkHelper::getSkins($_smarty_tpl->tpl_vars['LEO_THEMENAME']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['header_styles'] = new Smarty_variable(LeoFrameworkHelper::getPanelConfigByTheme('header',$_smarty_tpl->tpl_vars['LEO_THEMENAME']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['sidebarmenu'] = new Smarty_variable(LeoFrameworkHelper::getPanelConfigByTheme('sidebarmenu',$_smarty_tpl->tpl_vars['LEO_THEMENAME']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['theme_customizations'] = new Smarty_variable(LeoFrameworkHelper::getLayoutSettingByTheme($_smarty_tpl->tpl_vars['LEO_THEMENAME']->value), null, 0);?>
<div id="leo-paneltool" class="hidden-sm hidden-xs" data-cname="<?php echo $_smarty_tpl->tpl_vars['LEO_COOKIE_THEME']->value;?>
">
<?php if ($_smarty_tpl->tpl_vars['skins']->value||$_smarty_tpl->tpl_vars['header_styles']->value||$_smarty_tpl->tpl_vars['theme_customizations']->value||$_smarty_tpl->tpl_vars['sidebarmenu']->value) {?>
  <div class="paneltool themetool">
    <div class="panelbutton ">
      <i class="fa fa-sliders"></i>
    </div>
    <div class="block-panelcontent">
        <div class="panelcontent">
            <div class="panelinner">
              <h4><?php echo smartyTranslate(array('s'=>'Panel Tool'),$_smarty_tpl);?>
</h4>
                          <!-- Theme layout mod section -->
              <?php if ($_smarty_tpl->tpl_vars['theme_customizations']->value&&isset($_smarty_tpl->tpl_vars['theme_customizations']->value['layout'])&&isset($_smarty_tpl->tpl_vars['theme_customizations']->value['layout']['layout_mode'])&&isset($_smarty_tpl->tpl_vars['theme_customizations']->value['layout']['layout_mode']['option'])) {?>
                <div class="group-input clearfix layout">
                  <label class="col-sm-12 control-label"><i class="fa fa-desktop"></i><?php echo smartyTranslate(array('s'=>'Layout Mod'),$_smarty_tpl);?>
</label>
                  <div class="col-sm-12">
                    <?php  $_smarty_tpl->tpl_vars['layout'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['layout']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['theme_customizations']->value['layout']['layout_mode']['option']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['layout']->key => $_smarty_tpl->tpl_vars['layout']->value) {
$_smarty_tpl->tpl_vars['layout']->_loop = true;
?>
                      <span class="leo-dynamic-update-layout <?php if ($_smarty_tpl->tpl_vars['LEO_LAYOUT_MODE']->value==$_smarty_tpl->tpl_vars['layout']->value['id']) {?>current-layout-mod<?php }?>" data-layout-mod="<?php echo $_smarty_tpl->tpl_vars['layout']->value['id'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['layout']->value['name'];?>

                      </span>
                    <?php } ?>
                  </div>
                </div>
              <?php }?>
              <!-- Theme skin section -->
              <?php if ($_smarty_tpl->tpl_vars['skins']->value) {?>
              <div class="group-input clearfix">
                <label class="col-sm-12 control-label"><i class="fa fa-paint-brush"></i><?php echo smartyTranslate(array('s'=>'Theme'),$_smarty_tpl);?>
</label>
                <div class="col-sm-12">
                  <div data-theme-skin-id="default" class="skin-default leo-dynamic-theme-skin<?php if ($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value=='default') {?> current-theme-skin<?php }?>">
                      <label><?php echo smartyTranslate(array('s'=>'Default'),$_smarty_tpl);?>
</label>
                  </div>
                  <?php  $_smarty_tpl->tpl_vars['skin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['skin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['skins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['skin']->key => $_smarty_tpl->tpl_vars['skin']->value) {
$_smarty_tpl->tpl_vars['skin']->_loop = true;
?>
                  <div data-theme-skin-id="<?php echo $_smarty_tpl->tpl_vars['skin']->value['id'];?>
" data-theme-skin-css="<?php echo $_smarty_tpl->tpl_vars['skin']->value['css'];?>
" data-theme-skin-rtl="<?php echo $_smarty_tpl->tpl_vars['skin']->value['rtl'];?>
" class="leo-dynamic-theme-skin<?php if (isset($_smarty_tpl->tpl_vars['skin']->value['icon'])&&$_smarty_tpl->tpl_vars['skin']->value['icon']) {?> theme-skin-type-image<?php }?><?php if ($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value==$_smarty_tpl->tpl_vars['skin']->value['id']) {?> current-theme-skin<?php }?>">
                    <?php if (isset($_smarty_tpl->tpl_vars['skin']->value['icon'])&&$_smarty_tpl->tpl_vars['skin']->value['icon']) {?>
                      <img src="<?php echo $_smarty_tpl->tpl_vars['skin']->value['icon'];?>
" width="36" height="36" alt="" />
                    <?php } else { ?>
                      <label class="<?php echo $_smarty_tpl->tpl_vars['skin']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['skin']->value['name'];?>
</label>
                    <?php }?>
                  </div>
                  <?php } ?>
                </div>
              </div>
              <?php }?>
              <div class="group-input clearfix">
                <label class="col-sm-12 control-label"><i class="fa fa-credit-card"></i><?php echo smartyTranslate(array('s'=>'Float Header'),$_smarty_tpl);?>
</label>
                <div class="col-sm-12">
                  <div class="btn_enable_fheader">
                      <span class="enable_fheader btn_yes <?php if ($_smarty_tpl->tpl_vars['USE_FHEADER']->value) {?>current<?php }?>" data-value="1">
                         <i><?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>
</i>
                      </span>
                      <span class="enable_fheader btn_no <?php if (!$_smarty_tpl->tpl_vars['USE_FHEADER']->value) {?>current<?php }?>" data-value="0">
                        <i><?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>
</i>
                      </span>
                  </div>
                </div>
              </div>
              <!-- Theme header style section -->
              <!-- Theme slidebar menu section -->
              <?php if ($_smarty_tpl->tpl_vars['sidebarmenu']->value&&isset($_smarty_tpl->tpl_vars['sidebarmenu']->value['configs'])&&isset($_smarty_tpl->tpl_vars['sidebarmenu']->value['configs']['sidebarmenu'])&&isset($_smarty_tpl->tpl_vars['sidebarmenu']->value['configs']['sidebarmenu']['option'])) {?>
              <div class="group-input clearfix">
                <label class="col-sm-12 control-label"><i class="fa fa-columns"></i><?php echo smartyTranslate(array('s'=>'SideBar Menu'),$_smarty_tpl);?>
</label>
                <div class="col-sm-12">
                  <?php  $_smarty_tpl->tpl_vars['sidebar_menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sidebar_menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sidebarmenu']->value['configs']['sidebarmenu']['option']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sidebar_menu']->key => $_smarty_tpl->tpl_vars['sidebar_menu']->value) {
$_smarty_tpl->tpl_vars['sidebar_menu']->_loop = true;
?>
                    <span class="leo-dynamic-update-side <?php if ($_smarty_tpl->tpl_vars['sidebar_menu']->value['id']==$_smarty_tpl->tpl_vars['LEO_SIDEBAR_MENU']->value) {?>current-sidebar<?php }?>" data-sidebar="<?php echo $_smarty_tpl->tpl_vars['sidebar_menu']->value['id'];?>
">
                      <?php echo $_smarty_tpl->tpl_vars['sidebar_menu']->value['name'];?>

                    </span>
                  <?php } ?>
                </div>
              </div>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['header_styles']->value&&isset($_smarty_tpl->tpl_vars['header_styles']->value['configs'])&&isset($_smarty_tpl->tpl_vars['header_styles']->value['configs']['header_style'])&&isset($_smarty_tpl->tpl_vars['header_styles']->value['configs']['header_style']['option'])) {?>
              <div class="group-input clearfix">
                <label class="col-sm-12 control-label"><i class="fa fa-list-alt"></i><?php echo smartyTranslate(array('s'=>'Header Style'),$_smarty_tpl);?>
</label>
                <div class="col-sm-12">
                  <?php  $_smarty_tpl->tpl_vars['header_style'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['header_style']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['header_styles']->value['configs']['header_style']['option']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['header_style']->key => $_smarty_tpl->tpl_vars['header_style']->value) {
$_smarty_tpl->tpl_vars['header_style']->_loop = true;
?>
                    <span class="leo-dynamic-update-header <?php if ($_smarty_tpl->tpl_vars['header_style']->value['id']==$_smarty_tpl->tpl_vars['LEO_HEADER_STYLE']->value) {?>current-header<?php }?>" data-header-style="<?php echo $_smarty_tpl->tpl_vars['header_style']->value['id'];?>
">
                      <?php echo $_smarty_tpl->tpl_vars['header_style']->value['name'];?>

                    </span>
                  <?php } ?>
                </div>
              </div>
              <?php }?>
            </div>
        </div>
    </div>
  </div>
<?php }?>

<div class="paneltool editortool">
  <div class="panelbutton">
    <span class="fa fa-sun-o"></span>
  </div>
  <div class="panelcontent editortool">
		<div class="panelinner">
			<h4>Live Theme Editor</h4>
            <?php $_smarty_tpl->tpl_vars['xmlselectors'] = new Smarty_variable(LeoFrameworkHelper::renderEdtiorThemeForm($_smarty_tpl->tpl_vars['LEO_THEMENAME']->value), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['patterns'] = new Smarty_variable(LeoFrameworkHelper::getPattern($_smarty_tpl->tpl_vars['LEO_THEMENAME']->value), null, 0);?>
            <div class="clearfix" id="customize-body">      
              <ul class="nav nav-tabs" id="panelTab">
                <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['for'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xmlselectors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value) {
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['for']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
                <li><a href="#tab-<?php echo $_smarty_tpl->tpl_vars['for']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['for']->value;?>
</a></li>   
                <?php } ?>
              </ul>                   
            <div class="tab-content" >
            <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['for'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xmlselectors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['for']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
            <div class="tab-pane" id="tab-<?php echo $_smarty_tpl->tpl_vars['for']->value;?>
">
            <?php if (!empty($_smarty_tpl->tpl_vars['items']->value)) {?>
              <div class="accordion"  id="accordion-<?php echo $_smarty_tpl->tpl_vars['for']->value;?>
">
              <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['group']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['group']->iteration++;
?>
                 <div class="accordion-group panel panel-default">
                    <div class="accordion-headingt panel-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-<?php echo $_smarty_tpl->tpl_vars['for']->value;?>
" href="#collapse<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
">
                          <?php echo $_smarty_tpl->tpl_vars['group']->value['header'];?>
  
                      </a>
                    </div>
                    <div id="collapse<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
" class="accordion-body  <?php if ($_smarty_tpl->tpl_vars['group']->iteration==1) {?> in<?php }?> collapse">
                      <div class="accordion-inner panel-body clearfix">
                      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['selector']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['type'])&&$_smarty_tpl->tpl_vars['item']->value['type']=="image") {?> 
                        <div class="form-group background-images cleafix"> 
                          <label><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</label>
                          <input value="" type="hidden" name="customize[<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
][]" data-match="<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
" class="input-setting" data-selector="<?php echo $_smarty_tpl->tpl_vars['item']->value['selector'];?>
" data-attrs="background-image">
                          <a class="clear-bg label label-success" href="#"><?php echo smartyTranslate(array('s'=>'Clear'),$_smarty_tpl);?>
</a>

                          <div class="clearfix"></div>
                           <p><em style="font-size:10px"><?php echo smartyTranslate(array('s'=>'Those Images in folder YOURTHEME/img/patterns/'),$_smarty_tpl);?>
</em></p>
                          <div class="bi-wrapper clearfix">
                          <?php  $_smarty_tpl->tpl_vars['pattern'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pattern']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['patterns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->key => $_smarty_tpl->tpl_vars['pattern']->value) {
$_smarty_tpl->tpl_vars['pattern']->_loop = true;
?>
                            <div style="background:url('<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/img/patterns/<?php echo $_smarty_tpl->tpl_vars['pattern']->value;?>
') no-repeat center center;" class="pull-left" data-image="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/img/patterns/<?php echo $_smarty_tpl->tpl_vars['pattern']->value;?>
" data-val="../../img/patterns/<?php echo $_smarty_tpl->tpl_vars['pattern']->value;?>
">

                            </div>
                          <?php } ?>
                          </div>
                           
                           <ul class="bg-config">
                                            <li>
                                                <div><?php echo smartyTranslate(array('s'=>'Attachment'),$_smarty_tpl);?>
</div>
                                                <select class="form-control" data-attrs="background-attachment" name="customize[body][]" data-selector="<?php echo $_smarty_tpl->tpl_vars['item']->value['selector'];?>
" data-match="<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
">
                                                    <option value=""><?php echo smartyTranslate(array('s'=>'Not set'),$_smarty_tpl);?>
</option>
                                                    <?php  $_smarty_tpl->tpl_vars['attachment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attachment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['BACKGROUNDVALUE']->value['attachment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->key => $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->_loop = true;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['attachment']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['attachment']->value;?>
</option>
                                                    <?php } ?>
                                                </select>
                                            </li>
                                            <li>
                                                <div><?php echo smartyTranslate(array('s'=>'Position'),$_smarty_tpl);?>
</div>
                                                <select class="form-control" data-attrs="background-position" name="customize[body][]" data-selector="<?php echo $_smarty_tpl->tpl_vars['item']->value['selector'];?>
" data-match="<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
">
                                                    <option value=""><?php echo smartyTranslate(array('s'=>'Not set'),$_smarty_tpl);?>
</option>
                                                    <?php  $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['position']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['BACKGROUNDVALUE']->value['position']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['position']->key => $_smarty_tpl->tpl_vars['position']->value) {
$_smarty_tpl->tpl_vars['position']->_loop = true;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['position']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['position']->value;?>
</option>
                                                    <?php } ?>
                                                </select>
                                            </li>
                                            <li>
                                                <div><?php echo smartyTranslate(array('s'=>'Repeat'),$_smarty_tpl);?>
</div>
                                                <select class="form-control" data-attrs="background-repeat" name="customize[body][]" data-selector="<?php echo $_smarty_tpl->tpl_vars['item']->value['selector'];?>
" data-match="<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
">
                                                    <option value=""><?php echo smartyTranslate(array('s'=>'Not set'),$_smarty_tpl);?>
</option>
                                                    <?php  $_smarty_tpl->tpl_vars['repeat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['repeat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['BACKGROUNDVALUE']->value['repeat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['repeat']->key => $_smarty_tpl->tpl_vars['repeat']->value) {
$_smarty_tpl->tpl_vars['repeat']->_loop = true;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['repeat']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['repeat']->value;?>
</option>
                                                    <?php } ?>
                                                </select>
                                            </li>
                                        </ul>
                        </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']=="fontsize") {?>
                         <div class="form-group cleafix">
                          <label><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</label>
                            <select class="form-control input-setting" name="customize[<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
][]" data-match="<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
"  data-selector="<?php echo $_smarty_tpl->tpl_vars['item']->value['selector'];?>
" data-attrs="<?php echo $_smarty_tpl->tpl_vars['item']->value['attrs'];?>
">
                              <option value="">Inherit</option>
                              <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 16+1 - (9) : 9-(16)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 9, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                              <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                              <?php }} ?>
                            </select> 
                            <a href="#" class="clear-bg label label-success"><?php echo smartyTranslate(array('s'=>'Clear'),$_smarty_tpl);?>
</a>
                        </div>
                        <?php } else { ?>
                        <div class="form-group cleafix">
                          <label><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</label>
                          <input value="" size="10" name="customize[<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
][]" data-match="<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
" type="text" class="input-setting" data-selector="<?php echo $_smarty_tpl->tpl_vars['item']->value['selector'];?>
" data-attrs="<?php echo $_smarty_tpl->tpl_vars['item']->value['attrs'];?>
"><a href="#" class="clear-bg label label-success"><?php echo smartyTranslate(array('s'=>'Clear'),$_smarty_tpl);?>
</a>
                        </div>
                        <?php }?>
                        <?php } ?>
                      </div>
                    </div>
                  </div>            
                 <?php } ?>
               </div>
              <?php }?>
            </div>
          <?php } ?> 
          </div>
        </div>
      </div>
    </div>
	<div class="panelbutton label-customize"></div>
  </div>
</div> 
<?php }?>   <?php }} ?>
