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

{capture name=path}{l s='My account'}{/capture}
{include file="$tpl_dir./breadcrumb.tpl"}

<h1><span>{l s='My account'}</span></h1>
{if isset($account_created)}
	<p class="alert alert-info">
    	<button class="close" data-dismiss="alert" type="button">×</button>
		{l s='Your account has been created.'}
	</p>
{/if}
<div class="titled_box">
<h2><span>{l s='Welcome to your account. Here you can manage al of your personal information and orders. '}</span></h2>
<ul class="myaccount_lnk_list content_list">
	{if $has_customer_an_address}
		<li><a href="{$link->getPageLink('address', true)|escape:'html'}" title="{l s='Add my first address'}"><i class="icon-building"></i> {l s='Add my first address'}</a></li>
	{/if}
	<li><a href="{$link->getPageLink('history', true)|escape:'html'}" title="{l s='Orders'}"><i class="icon-list-ol"></i> {l s='Order history and details '}</a></li>
	{if $returnAllowed}
		<li><a href="{$link->getPageLink('order-follow', true)|escape:'html'}" title="{l s='Merchandise returns'}"><i class="icon-reply"></i> {l s='My merchandise returns'}</a></li>
	{/if}
	<li><a href="{$link->getPageLink('order-slip', true)|escape:'html'}" title="{l s='Credit slips'}"><i class="icon-ban-circle"></i> {l s='My credit slips'}</a></li>
	<li><a href="{$link->getPageLink('addresses', true)|escape:'html'}" title="{l s='Addresses'}"><i class="icon-building"></i> {l s='My addresses'}</a></li>
	<li><a href="{$link->getPageLink('identity', true)|escape:'html'}" title="{l s='Information'}"><i class="icon-user"></i> {l s='My personal information'}</a></li>
	{if $voucherAllowed}
		<li><a href="{$link->getPageLink('discount', true)|escape:'html'}" title="{l s='Vouchers'}"><i class="icon-tag"></i> {l s='My vouchers'}</a></li>
	{/if}
	{$HOOK_CUSTOMER_ACCOUNT}
</ul>
</div>
<ul class="footer_links clearfix">
<li><a href="{$base_dir}" title="{l s='Home'}"><i class="icon-home"></i>{l s='Home'}</a></li>
</ul>