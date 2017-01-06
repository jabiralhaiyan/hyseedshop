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

<!-- MODULE Block contact infos -->
<section class="block blockcontactinfos col-sm-3">
	<h4>{l s='Contact us' mod='blockcontactinfos'}<i class="icon-plus-sign"></i></h4>
	<ul class="toggle_content">
		{if $blockcontactinfos_company != ''}<li class="company_name"><strong>{$blockcontactinfos_company|escape:'htmlall':'UTF-8'}</strong></li>{/if}
		{if $blockcontactinfos_address != ''}<li class="company_address">{$blockcontactinfos_address|escape:'htmlall':'UTF-8'}</li>{/if}
		{if $blockcontactinfos_phone != ''}<li class="company_phone">{l s='Tel:' mod='blockcontactinfos'} {$blockcontactinfos_phone|escape:'htmlall':'UTF-8'}</li>{/if}
		{if $blockcontactinfos_email != ''}<li class="company_email">{l s='Email:' mod='blockcontactinfos'} {mailto address=$blockcontactinfos_email|escape:'htmlall':'UTF-8' encode="hex"}</li>{/if}
	</ul>
</section>
