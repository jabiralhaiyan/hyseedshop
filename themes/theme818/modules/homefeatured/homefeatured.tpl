{*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<!-- MODULE Home Featured Products -->
<div id="featured-products_block_center" class="main_page_products block">
	<h4><span>{l s='Featured products' mod='homefeatured'}</span></h4>
	{if isset($products) AND $products}
			{assign var='nbItemsPerLine' value=3}
            {assign var='nbItemsPerLineTablet' value=2}
			{assign var='nbLi' value=$products|@count}
			{math equation="nbLi/nbItemsPerLine" nbLi=$nbLi nbItemsPerLine=$nbItemsPerLine assign=nbLines}
            {math equation="nbLi/nbItemsPerLineTablet" nbLi=$nbLi nbItemsPerLineTablet=$nbItemsPerLineTablet assign=nbLinesTablet}
			<ul class="row">
			{foreach from=$products item=product name=homeFeaturedProducts}
				{math equation="(total%perLine)" total=$smarty.foreach.homeFeaturedProducts.total perLine=$nbItemsPerLine assign=totModulo}
                {math equation="(total%perLineT)" total=$smarty.foreach.homeFeaturedProducts.total perLineT=$nbItemsPerLineTablet assign=totModuloTablet}
				{if $totModulo == 0}{assign var='totModulo' value=$nbItemsPerLine}{/if}
                {if $totModuloTablet == 0}{assign var='totModuloTablet' value=$nbItemsPerLineTablet}{/if}
				<li class="ajax_block_product col-xs-6 col-sm-6 col-md-4 {if $smarty.foreach.homeFeaturedProducts.iteration%$nbItemsPerLine == 0}last_item_of_line{elseif $smarty.foreach.homeFeaturedProducts.iteration%$nbItemsPerLine == 1} first_item_of_line {/if} {if $smarty.foreach.homeFeaturedProducts.iteration > ($smarty.foreach.homeFeaturedProducts.total - $totModulo)}last_line{/if} {if $smarty.foreach.homeFeaturedProducts.iteration%$nbItemsPerLineTablet == 0}last_item_of_tablet_line{elseif $smarty.foreach.homeFeaturedProducts.iteration%$nbItemsPerLineTablet == 1}first_item_of_tablet_line{/if} {if $smarty.foreach.homeFeaturedProducts.iteration > ($smarty.foreach.homeFeaturedProducts.total - $totModuloTablet)}last_tablet_line{/if}">
                <div class="inner_content clearfix">
                {if isset($product.new) && $product.new == 1}<div class="new-box"><span class="before"></span><span class="after"></span><span class="new">{l s='New' mod='homefeatured'}</span></div>{/if}
					<div class="product_image"><a href="{$product.link|escape:'html'}" title="{$product.name|escape:html:'UTF-8'}" class="product_image"><img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html'}" alt="{$product.name|escape:html:'UTF-8'}" /></a></div>
					<!--p class="product_desc">{$product.description_short|strip_tags|truncate:65:'...'}</p-->
					<div class="product_content">
                    	<div class="inner_content1">
	                    	<h5><a class="product_link" href="{$product.link|escape:'html'}" title="{$product.name|truncate:50:'...'|escape:'htmlall':'UTF-8'}">{$product.name|truncate:25:'...'|escape:'htmlall':'UTF-8'}</a></h5>
							{if $product.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}<p class="price_container"><span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span></p>{else}<div style="height:21px;"></div>{/if}
						</div>
                         <a class="button btn btn-default view" href="{$product.link|escape:'html'}" title="{l s='View' mod='homefeatured'}"><i class="icon-info-sign"></i></a>
						{if ($product.id_product_attribute == 0 OR (isset($add_prod_display) AND ($add_prod_display == 1))) AND $product.available_for_order AND !isset($restricted_country_mode) AND $product.minimal_quantity == 1 AND $product.customizable != 2 AND !$PS_CATALOG_MODE}
							{if ($product.quantity > 0 OR $product.allow_oosp)}
							<a class="exclusive btn btn-default ajax_add_to_cart_button btn_add_cart" rel="ajax_id_product_{$product.id_product}" href="{$link->getPageLink('cart')|escape:'html'}?qty=1&amp;id_product={$product.id_product}&amp;token={$static_token}&amp;add" title="{l s='Add to cart' mod='homefeatured'}"><span></span></a>
							{else}
							<span class="exclusive btn btn-default disabled"></span>
							{/if}
						{else}
							<div style="height:23px;"></div>
						{/if}
					</div>
                    </div>
				</li>
			{/foreach}
			</ul>
	{else}
		<p>{l s='No featured products' mod='homefeatured'}</p>
	{/if}
</div>
<!-- /MODULE Home Featured Products -->
