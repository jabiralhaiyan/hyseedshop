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
*  @author PrestaShop SA <contact@prestashop.com> *  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*} 

<!-- MODULE Home Block best sellers -->
<section id="bestseller_home" class="block main_page_products">
  <h4><span>{l s='Top sellers' mod='blockbestsellers'}</span></h4>
  {if isset($best_sellers) AND $best_sellers}
  {assign var='nbItemsPerLine' value=3}
  {assign var='nbItemsPerLineTablet' value=2}
  {assign var='nbLi' value=$best_sellers|@count}
  {math equation="nbLi/nbItemsPerLine" nbLi=$nbLi nbItemsPerLine=$nbItemsPerLine assign=nbLines}
  {math equation="nbLi/nbItemsPerLineTablet" nbLi=$nbLi nbItemsPerLineTablet=$nbItemsPerLineTablet assign=nbLinesTablet}
  <ul class="row">
    {foreach from=$best_sellers item=product name=myLoop}
    {math equation="(total%perLine)" total=$smarty.foreach.myLoop.total perLine=$nbItemsPerLine assign=totModulo}
    {math equation="(total%perLineT)" total=$smarty.foreach.myLoop.total perLineT=$nbItemsPerLineTablet assign=totModuloTablet}
    {if $totModulo == 0}{assign var='totModulo' value=$nbItemsPerLine}{/if}
    {if $totModuloTablet == 0}{assign var='totModuloTablet' value=$nbItemsPerLineTablet}{/if}
    <li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 {if $smarty.foreach.myLoop.iteration%$nbItemsPerLine == 0}last_item_of_line{elseif $smarty.foreach.myLoop.iteration%$nbItemsPerLine == 1} first_item_of_line {/if} {if $smarty.foreach.myLoop.iteration > ($smarty.foreach.myLoop.total - $totModulo)}last_line{/if} {if $smarty.foreach.myLoop.iteration%$nbItemsPerLineTablet == 0}last_item_of_tablet_line{elseif $smarty.foreach.myLoop.iteration%$nbItemsPerLineTablet == 1}first_item_of_tablet_line{/if} {if $smarty.foreach.myLoop.iteration > ($smarty.foreach.myLoop.total - $totModuloTablet)}last_tablet_line{/if}">
    <div class="inner_content clearfix">
    <div class="product_image">
    <a class="product_image" href="{$product.link|escape:'html'}" title="{$product.name|escape:html:'UTF-8'}" class="product_image">
    	<img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html'}"  alt="{$product.name|escape:html:'UTF-8'}" />
    </a>
    </div>
    <!--p class="product_desc">{$product.description_short|strip_tags|truncate:65:'...'}</p-->
   	<div class="product_content">
    	<div class="inner_content1">
    	<h5><a class="product_link" href="{$product.link|escape:'html'}" title="{$product.name|truncate:32:'...'|escape:'htmlall':'UTF-8'}">{$product.name|truncate:25:'...'|escape:'htmlall':'UTF-8'}</a></h5>
      {if !$PS_CATALOG_MODE}

      	<p class="price_container"><span class="price">{$product.price}</span></p>
	  {/if}
      </div>
      
      <a class="btn btn-default button" href="{$product.link|escape:'html'}" title="{l s='View' mod='blockbestsellers'}"><i class="icon-info-sign"></i></a>
      {if !$PS_CATALOG_MODE}
      <a class="btn btn-default exclusive ajax_add_to_cart_button btn_add_cart" rel="ajax_id_product_{$product.id_product}" href="{$link->getPageLink('cart')}?qty=1&amp;id_product={$product.id_product}&amp;token={$static_token}&amp;add" title="{l s='Add to cart' mod='homefeatured'}"><span></span></a>
       {/if}
      </div>
      </div>
      </li>
    {/foreach}
  </ul>
  {else}
  <p>{l s='No best sellers at this time' mod='blockbestsellers'}</p>
  {/if} </section>
<!-- /MODULE Home Block best sellers --> 
