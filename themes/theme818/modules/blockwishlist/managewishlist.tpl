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

{if $products}
	{if !$refresh}
	<div class="wishlistLinkTop">
		<a href="#" id="hideSendWishlist" class="button_account" onclick="WishlistVisibility('wishlistLinkTop', 'SendWishlist'); return false;" title="{l s='Close send this wishlist' mod='blockwishlist'}" rel="nofollow"><i class="icon-chevron-sign-up"></i></a>
		<ul class="clearfix display_list">
			<li>
				<a href="#" id="hideBoughtProducts" class="button_account"  onclick="WishlistVisibility('wlp_bought', 'BoughtProducts'); return false;" title="{l s='Hide products' mod='blockwishlist'}">{l s='Hide products' mod='blockwishlist'}</a>
				<a href="#" id="showBoughtProducts" class="button_account"  onclick="WishlistVisibility('wlp_bought', 'BoughtProducts'); return false;" title="{l s='Show products' mod='blockwishlist'}">{l s='Show products' mod='blockwishlist'}</a>
			</li>
			{if count($productsBoughts)}
			<li>
				<a href="#" id="hideBoughtProductsInfos" class="button_account" onclick="WishlistVisibility('wlp_bought_infos', 'BoughtProductsInfos'); return false;" title="{l s="Hide products" mod='blockwishlist'}">{l s="Hide bought product's info" mod='blockwishlist'}</a>
				<a href="#" id="showBoughtProductsInfos" class="button_account"  onclick="WishlistVisibility('wlp_bought_infos', 'BoughtProductsInfos'); return false;" title="{l s="Show products" mod='blockwishlist'}">{l s="Show bought product's info" mod='blockwishlist'}</a>
			</li>
			{/if}
		</ul>
		<p class="wishlisturl form-group"><label>{l s='Permalink' mod='blockwishlist'}:</label> <input type="text" class="form-control" value="{$base_dir_ssl}modules/blockwishlist/view.php?token={$token_wish|escape:'htmlall':'UTF-8'}"  readonly="readonly" /></p>
		<p class="submit">
			<a href="#" id="showSendWishlist" class="button_account exclusive" onclick="WishlistVisibility('wl_send', 'SendWishlist'); return false;" title="{l s='Send this wishlist' mod='blockwishlist'}">{l s='Send this wishlist' mod='blockwishlist'}</a>
		</p>
	{/if}
	<div class="wlp_bought">
    	{assign var='nbItemsPerLine' value=4}
        {assign var='nbItemsPerLineTablet' value=3}
		{assign var='nbLi' value=$products|@count}
		{math equation="nbLi/nbItemsPerLine" nbLi=$nbLi nbItemsPerLine=$nbItemsPerLine assign=nbLines}
        {math equation="nbLi/nbItemsPerLineTablet" nbLi=$nbLi nbItemsPerLineTablet=$nbItemsPerLineTablet assign=nbLinesTablet}
		<ul class="wlp_bought_list row">
		{foreach from=$products item=product name=i}
        {math equation="(total%perLine)" total=$smarty.foreach.i.total perLine=$nbItemsPerLine assign=totModulo}
        {math equation="(total%perLineT)" total=$smarty.foreach.i.total perLineT=$nbItemsPerLineTablet assign=totModuloTablet}
        {if $totModulo == 0}{assign var='totModulo' value=$nbItemsPerLine}{/if}
        {if $totModuloTablet == 0}{assign var='totModuloTablet' value=$nbItemsPerLineTablet}{/if}
			<li id="wlp_{$product.id_product}_{$product.id_product_attribute}" class="col-xs-12 col-sm-4 col-md-3 num-{$smarty.foreach.i.iteration}{if $smarty.foreach.i.iteration%$nbItemsPerLine == 0} last_in_line{elseif $smarty.foreach.i.iteration%$nbItemsPerLine == 1} first_in_line{/if} {if $smarty.foreach.i.iteration > ($smarty.foreach.i.total - $totModulo)}last_line{/if} {if $smarty.foreach.i.iteration%$nbItemsPerLineTablet == 0}last_item_of_tablet_line{elseif $smarty.foreach.i.iteration%$nbItemsPerLineTablet == 1}first_item_of_tablet_line{/if} {if $smarty.foreach.i.iteration > ($smarty.foreach.i.total - $totModuloTablet)}last_tablet_line{/if}">
            	<div class="inner_content">
				
					<div class="product_image">
						<a href="{$link->getProductlink($product.id_product, $product.link_rewrite, $product.category_rewrite)|escape:'html'}" title="{l s='Product detail' mod='blockwishlist'}">
							<img src="{$link->getImageLink($product.link_rewrite, $product.cover, 'home_default')|escape:'html'}" alt="{$product.name|escape:'htmlall':'UTF-8'}" />
						</a>
					</div>
					<div class="product_infos">
						<h4 id="s_title" class="product_name">{$product.name|truncate:30:'...'|escape:'htmlall':'UTF-8'}</h4>
						<span class="wishlist_product_detail">
						{if isset($product.attributes_small)}
							<a href="{$link->getProductlink($product.id_product, $product.link_rewrite, $product.category_rewrite)|escape:'html'}" title="{l s='Product detail' mod='blockwishlist'}">{$product.attributes_small|escape:'htmlall':'UTF-8'}</a>
						{/if}
							<p class="form-group">
                            <label for"quantity_{$product.id_product}_{$product.id_product_attribute}">{l s='Quantity' mod='blockwishlist'}:</label><input type="text" id="quantity_{$product.id_product}_{$product.id_product_attribute}" value="{$product.quantity|intval}" size="3" class="form-control"  />
							</p>
                            <p class="form-group">
							<label for="priority_{$product.id_product}_{$product.id_product_attribute}">{l s='Priority' mod='blockwishlist'}:</label>
							<select class="form-control" id="priority_{$product.id_product}_{$product.id_product_attribute}">
								<option value="0"{if $product.priority eq 0} selected="selected"{/if}>{l s='High' mod='blockwishlist'}</option>
								<option value="1"{if $product.priority eq 1} selected="selected"{/if}>{l s='Medium' mod='blockwishlist'}</option>
								<option value="2"{if $product.priority eq 2} selected="selected"{/if}>{l s='Low' mod='blockwishlist'}</option>
							</select>
                            </p>
						</span>
                        <div class="btn_action">
					<a href="javascript:;" class="exclusive btn btn-default" onclick="WishlistProductManage('wlp_bought_{$product.id_product_attribute}', 'update', '{$id_wishlist}', '{$product.id_product}', '{$product.id_product_attribute}', $('#quantity_{$product.id_product}_{$product.id_product_attribute}').val(), $('#priority_{$product.id_product}_{$product.id_product_attribute}').val());" title="{l s='Save' mod='blockwishlist'}">{l s='Save' mod='blockwishlist'}</a>
                    <a href="javascript:;" class="lnkdel" onclick="WishlistProductManage('wlp_bought', 'delete', '{$id_wishlist}', '{$product.id_product}', '{$product.id_product_attribute}', $('#quantity_{$product.id_product}_{$product.id_product_attribute}').val(), $('#priority_{$product.id_product}_{$product.id_product_attribute}').val());" title="{l s='Delete' mod='blockwishlist'}"><i class="icon-trash"></i></a>
				</div>
					</div>
                </div>
			</li>
		{/foreach}
		</ul>
	</div>
	{if !$refresh}
	<form method="post" class="wl_send std unvisible" onsubmit="return (false);">
		<fieldset>
			<p class="required form-group">
				<label for="email1">{l s='Email' mod='blockwishlist'}1 <sup>*</sup></label>
				<input class="form-control" type="text" name="email1" id="email1" />
			</p>
			{section name=i loop=11 start=2}
			<p class="form-group">
				<label for="email{$smarty.section.i.index}">{l s='Email' mod='blockwishlist'}{$smarty.section.i.index}</label>
				<input class="form-control" type="text" name="email{$smarty.section.i.index}" id="email{$smarty.section.i.index}" />
			</p>
			{/section}
			<p class="submit">
				<input class="button" type="submit" value="{l s='Send' mod='blockwishlist'}" name="submitWishlist" onclick="WishlistSend('wl_send', '{$id_wishlist}', 'email');" />
			</p>
			<p class="required">
				<sup>*</sup> {l s='Required field'}
			</p>
		</fieldset>
	</form>
	{if count($productsBoughts)}
	<table class="wlp_bought_infos unvisible table table-bordered table-hover">
		<thead>
			<tr>
				<th class="first_item">{l s='Product' mod='blockwishlist'}</td>
				<th class="item">{l s='Quantity' mod='blockwishlist'}</td>
				<th class="item">{l s='Offered by' mod='blockwishlist'}</td>
				<th class="last_item">{l s='Date' mod='blockwishlist'}</td>
			</tr>
		</thead>
		<tbody>
		{foreach from=$productsBoughts item=product name=i}
			{foreach from=$product.bought item=bought name=j}
			{if $bought.quantity > 0}
				<tr>
					<td class="first_item">
						<span style="float:left;"><img src="{$link->getImageLink($product.link_rewrite, $product.cover, 'small')|escape:'html'}" alt="{$product.name|escape:'htmlall':'UTF-8'}" /></span>			
						<span style="float:left;">
							{$product.name|truncate:40:'...'|escape:'htmlall':'UTF-8'}
						{if isset($product.attributes_small)}
							<br /><i>{$product.attributes_small|escape:'htmlall':'UTF-8'}</i>
						{/if}
						</span>
					</td>
					<td class="item align_center">{$bought.quantity|intval}</td>
					<td class="item align_center">{$bought.firstname} {$bought.lastname}</td>
					<td class="last_item align_center">{$bought.date_add|date_format:"%Y-%m-%d"}</td>
				</tr>
			{/if}
			{/foreach}
		{/foreach}
		</tbody>
	</table>
	{/if}
	{/if}
{else}
	<p class="warning">{l s='No products' mod='blockwishlist'}</p>
{/if}