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

{capture name=path}<a href="{$link->getPageLink('my-account', true)|escape:'html'}">{l s='My account'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='Your personal information'}{/capture}
{include file="$tpl_dir./breadcrumb.tpl"}

<h1><span>{l s='Your personal information'}</span></h1>

{include file="$tpl_dir./errors.tpl"}

{if isset($confirmation) && $confirmation}
	<p class="alert alert-success">
    	<button class="close" data-dismiss="alert" type="button">×</button>
		{l s='Your personal information has been successfully updated.'}
		{if isset($pwd_changed)}<br />{l s='Your password has been sent to your email:'} {$email}{/if}
	</p>
{else}
   <div class="titled_box">
	<h2><span>{l s='Please be sure to update your personal information if it has changed.'}</span></h2>
    </div>
   
	<p class="required"><sup>*</sup>{l s='Required field'}</p>
	<form action="{$link->getPageLink('identity', true)|escape:'html'}" method="post" class="std">
		<fieldset>

                    <div class="row">
        <div class="col-xs-12 col-sm-6">
			<p class="required form-group">
				<label for="firstname">{l s='First name'} <sup>*</sup></label>
				<input type="text" id="firstname" class="form-control" name="firstname" value="{$smarty.post.firstname}" />
			</p>
			<p class="required form-group">
				<label for="lastname">{l s='Last name'} <sup>*</sup></label>
				<input type="text" name="lastname" id="lastname" class="form-control" value="{$smarty.post.lastname}" />
			</p>
			<p class="required form-group">
				<label for="email">{l s='E-mail'} <sup>*</sup></label>
				<input type="text" name="email" id="email" class="form-control" value="{$smarty.post.email}" />
			</p>
            </div>
        
                 
        <div class="col-xs-12 col-sm-6">
			<p class="required form-group">
				<label for="old_passwd">{l s='Current Password'} <sup>*</sup></label>
				<input type="password" name="old_passwd" id="old_passwd" class="form-control" />
			</p>
			<p class="password form-group">
				<label for="passwd">{l s='New Password'}</label>
				<input type="password" name="passwd" id="passwd" class="form-control" />
			</p>
			<p class="password form-group">
				<label for="confirmation">{l s='Confirmation'}</label>
				<input type="password" name="confirmation" id="confirmation" class="form-control" />
			</p>
            </div>
            </div>
                   <div class="row bottom_indent">
        <div class="col-xs-12 col-sm-6">
			<div class="form-group">
				<label>{l s='Date of Birth'}</label>
                <div class="row">
                	<div class="col-xs-4">
                    <select name="days" id="days" class="form-control">
                        <option value="">-</option>
                        {foreach from=$days item=v}
                            <option value="{$v}" {if ($sl_day == $v)}selected="selected"{/if}>{$v}&nbsp;&nbsp;</option>
                        {/foreach}
                    </select>
                    {*
                        {l s='January'}
                        {l s='February'}
                        {l s='March'}
                        {l s='April'}
                        {l s='May'}
                        {l s='June'}
                        {l s='July'}
                        {l s='August'}
                        {l s='September'}
                        {l s='October'}
                        {l s='November'}
                        {l s='December'}
                    *}
                </div>
                    <div class="col-xs-4">
                        <select id="months" name="months" class="form-control">
                        <option value="">-</option>
                        {foreach from=$months key=k item=v}
                            <option value="{$k}" {if ($sl_month == $k)}selected="selected"{/if}>{l s=$v}&nbsp;</option>
                        {/foreach}
                    </select>
                    </div>
                	<div class="col-xs-4">
					<select id="years" name="years" class="form-control">
					<option value="">-</option>
					{foreach from=$years item=v}
						<option value="{$v}" {if ($sl_year == $v)}selected="selected"{/if}>{$v}&nbsp;&nbsp;</option>
					{/foreach}
				</select>
                </div>
                </div>
			</div>
			{if $newsletter}
			<p class="checkbox-inline clearfix">
				<input type="checkbox" id="newsletter" name="newsletter" value="1" {if isset($smarty.post.newsletter) && $smarty.post.newsletter == 1} checked="checked"{/if} autocomplete="off"/>
				<label for="newsletter">{l s='Sign up for our newsletter!'}</label>
			</p>
            <br />
			<p class="checkbox-inline ml_none clearfix">
				<input type="checkbox" name="optin" id="optin" value="1" {if isset($smarty.post.optin) && $smarty.post.optin == 1} checked="checked"{/if} autocomplete="off"/>
				<label for="optin">{l s='Receive special offers from our partners!'}</label>
			</p>
            </div>
            <div class="col-xs-12 col-sm-6">
            			<p class="radio">
				<span class="radio_title">{l s='Title'}</span>
				{foreach from=$genders key=k item=gender}
					<input type="radio" name="id_gender" id="id_gender{$gender->id}" value="{$gender->id|intval}" {if isset($smarty.post.id_gender) && $smarty.post.id_gender == $gender->id}checked="checked"{/if} />
					<label for="id_gender{$gender->id}" class="top">{$gender->name}</label>
				{/foreach}
			</p>
            </div>
            </div>
			{/if}
			<p class="submit">
				<input type="submit" class="button btn btn-default" name="submitIdentity" value="{l s='Save'}" />
			</p>
			<div id="security_informations">
				<i>{l s='[Insert customer data privacy clause here, if applicable]'}</i>
			</div>
		</fieldset>
	</form>
{/if}

<ul class="footer_links clearfix">
	<li><a href="{$link->getPageLink('my-account', true)|escape:'html'}"><i class="icon-user"></i>{l s='Back to your account'}</a></li>
	<li class="f_right"><a href="{$base_dir}"><i class="icon-home"></i>{l s='Home'}</a></li>
</ul>
