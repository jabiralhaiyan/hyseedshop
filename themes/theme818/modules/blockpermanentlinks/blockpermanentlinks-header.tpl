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

<!-- Block permanent links module HEADER -->
<section class="header-box blockpermanentlinks-header">
    <ul id="header_links" class="hidden-xs">
        <li><a href="{$link->getPageLink('index.php')}" class="header_links_home">{l s='home' mod='blockpermanentlinks'}</a></li>
       <li id="header_link_sitemap"><a class="header_links_sitemap" href="{$link->getPageLink('sitemap')|escape:'html'}" title="{l s='sitemap' mod='blockpermanentlinks'}">{l s='sitemap' mod='blockpermanentlinks'}</a></li>
        <li id="header_link_contact"><a class="header_links_contact" href="{$link->getPageLink('contact', true)|escape:'html'}" title="{l s='contact' mod='blockpermanentlinks'}">{l s='contact' mod='blockpermanentlinks'}</a></li>
        
        
    </ul>
	<div class="new-menu-bg">
    <div class="mobile-link-top header-button visible-xs">
    	
            <h4 class="icon_wrapp">
                 <span class="title-hed"></span><i class="arrow_header_top_menu arrow_header_top icon-reorder"></i>
            </h4>
            <ul id="mobilelink" class="list_header">
                <li><a href="{$link->getPageLink('index.php')}" class="header_links_home">{l s='home' mod='blockpermanentlinks'}</a></li>
                <li id="header_link_sitemap"><a class="header_links_sitemap" href="{$link->getPageLink('sitemap')|escape:'html'}" title="{l s='sitemap' mod='blockpermanentlinks'}">{l s='sitemap' mod='blockpermanentlinks'}</a></li>
                <li id="header_link_contact"><a class="header_links_contact" href="{$link->getPageLink('contact', true)|escape:'html'}" title="{l s='contact' mod='blockpermanentlinks'}">{l s='contact' mod='blockpermanentlinks'}</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- /Block permanent links module HEADER -->


