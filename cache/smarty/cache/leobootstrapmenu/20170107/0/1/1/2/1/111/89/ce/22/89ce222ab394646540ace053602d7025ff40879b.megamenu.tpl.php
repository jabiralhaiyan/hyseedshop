<?php /*%%SmartyHeaderCode:12936586f7fb57c2c90-18841611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89ce222ab394646540ace053602d7025ff40879b' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hyseedshop\\themes\\ap_travel\\modules\\leobootstrapmenu\\views\\templates\\hook\\megamenu.tpl',
      1 => 1483639449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12936586f7fb57c2c90-18841611',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586ffc01549c52_05536375',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586ffc01549c52_05536375')) {function content_586ffc01549c52_05536375($_smarty_tpl) {?><div id="leo-megamenu" class="clearfix">
<nav id="cavas_menu"  class="sf-contener leo-megamenu">
    <div role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle btn-outline-inverse" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="leo-top-menu" class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav megamenu"><li class="" >
						<a href="http://localhost/hyseedshop/index.php" target="_self" class="has-category"><span class="menu-title">Home</span></a></li><li class="" >
						<a href="http://localhost/hyseedshop/16-sayuran-segar" target="_self" class="has-category"><span class="menu-title">Store</span></a></li><li class="" >
						<a href="http://localhost/hyseedblog" target="_blank" class="has-category"><span class="menu-title">Blog</span></a></li><li class="" >
						<a href="http://localhost/hyseedshop/index.php?controller=contact" target="_self" class="has-category"><span class="menu-title">Contact us</span></a></li></ul>
        </div>
    </div>
</nav>
</div>

<script type="text/javascript">
// <![CDATA[
	var current_link = "http://localhost/hyseedshop/";
	//alert(request);
    var currentURL = window.location;
    currentURL = String(currentURL);
    currentURL = currentURL.replace("https://","").replace("http://","").replace("www.","").replace( /#\w*/, "" );
    current_link = current_link.replace("https://","").replace("http://","").replace("www.","");
    isHomeMenu = 0;
    if($("body").attr("id")=="index") isHomeMenu = 1;
    $(".megamenu > li > a").each(function() {
        menuURL = $(this).attr("href").replace("https://","").replace("http://","").replace("www.","").replace( /#\w*/, "" );
		if( (currentURL == menuURL) || (currentURL.replace(current_link,"") == menuURL) || isHomeMenu){
			$(this).parent().addClass("active");
            return false;
		}
    });
// ]]>
</script>
<script type="text/javascript">
    (function($) {
        $.fn.OffCavasmenu = function(opts) {
            // default configuration
            var config = $.extend({}, {
                opt1: null,
                text_warning_select: "Please select One to remove?",
                text_confirm_remove: "Are you sure to remove footer row?",
                JSON: null
            }, opts);
            // main function
            // initialize every element
            this.each(function() {
                var $btn = $('#cavas_menu .navbar-toggle');
                var $nav = null;
                if (!$btn.length)
                    return;
                var $nav = $('<section id="off-canvas-nav" class="leo-megamenu"><nav class="offcanvas-mainnav" ><div id="off-canvas-button"><span class="off-canvas-nav"></span>Close</div></nav></sections>');
                var $menucontent = $($btn.data('target')).find('.megamenu').clone();
                $("body").append($nav);
                $("#off-canvas-nav .offcanvas-mainnav").append($menucontent);
                $("#off-canvas-nav .offcanvas-mainnav").css('min-height',$(window).height()+30+"px");
                $("html").addClass ("off-canvas");
                $("#off-canvas-button").click( function(){
                        $btn.click();	
                } );
                $btn.toggle(function() {
                    $("body").removeClass("off-canvas-inactive").addClass("off-canvas-active");
                }, function() {
                    $("body").removeClass("off-canvas-active").addClass("off-canvas-inactive");
                });
            });
            return this;
        }
    })(jQuery);
    $(document).ready(function() {
        jQuery("#cavas_menu").OffCavasmenu();
        $('#cavas_menu .navbar-toggle').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 0);
            return false;
        });
    });
    $(document.body).on('click', '[data-toggle="dropdown"]' ,function(){
        if(!$(this).parent().hasClass('open') && this.href && this.href != '#'){
            window.location.href = this.href;
        }
    });
</script>
<?php }} ?>
