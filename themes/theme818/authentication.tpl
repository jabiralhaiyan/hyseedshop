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

{capture name=path}
	{if !isset($email_create)}{l s='Authentication'}{else}
		<a href="{$link->getPageLink('authentication', true)|escape:'html'}" rel="nofollow" title="{l s='Authentication'}">{l s='Authentication'}</a>
		<span class="navigation-pipe">{$navigationPipe}</span>{l s='Create your account'}
	{/if}
{/capture}
	{include file="$tpl_dir./breadcrumb.tpl"}

<script type="text/javascript">
// <![CDATA[
var idSelectedCountry = {if isset($smarty.post.id_state)}{$smarty.post.id_state|intval}{else}false{/if};
var countries = new Array();
var countriesNeedIDNumber = new Array();
var countriesNeedZipCode = new Array(); 
{if isset($countries)}
	{foreach from=$countries item='country'}
		{if isset($country.states) && $country.contains_states}
			countries[{$country.id_country|intval}] = new Array();
			{foreach from=$country.states item='state' name='states'}
				countries[{$country.id_country|intval}].push({ldelim}'id' : '{$state.id_state|intval}', 'name' : '{$state.name|addslashes}'{rdelim});
			{/foreach}
		{/if}
		{if $country.need_identification_number}
			countriesNeedIDNumber.push({$country.id_country|intval});
		{/if}
		{if isset($country.need_zip_code)}
			countriesNeedZipCode[{$country.id_country|intval}] = {$country.need_zip_code};
		{/if}
	{/foreach}
{/if}
$(function(){ldelim}
	$('.id_state option[value={if isset($smarty.post.id_state)}{$smarty.post.id_state|intval}{else}{if isset($address)}{$address->id_state|intval}{/if}{/if}]').attr('selected', true);
{rdelim});
//]]>
{literal}
$(document).ready(function() {
	$('#company').on('input',function(){
		vat_number();
	});
	vat_number();
	function vat_number()
	{
		if ($('#company').val() != '')
			$('#vat_number').show();
		else
			$('#vat_number').hide();
	}
});
{/literal}
</script>

<h1><span>{if !isset($email_create)}{l s='Authentication'}{else}{l s='Create an account'}{/if}</span></h1>
{if !isset($back) || $back != 'my-account'}{assign var='current_step' value='login'}{include file="$tpl_dir./order-steps.tpl"}{/if} 
{include file="$tpl_dir./errors.tpl"}
{assign var='stateExist' value=false}
{assign var="postCodeExist" value=false}
{if !isset($email_create)}
	<script type="text/javascript">
	{literal}
	$(document).ready(function(){
		// Retrocompatibility with 1.4
		if (typeof baseUri === "undefined" && typeof baseDir !== "undefined")
		baseUri = baseDir;
		$('#create-account_form').submit(function(){
			submitFunction();
			return false;
		});
	});
	function submitFunction()
	{
		$('#create_account_error').html('').hide();
		//send the ajax request to the server
		$.ajax({
			type: 'POST',
			url: baseUri,
			async: true,
			cache: false,
			dataType : "json",
			data: {
				controller: 'authentication',
				SubmitCreate: 1,
				ajax: true,
				email_create: $('#email_create').val(),
				back: $('input[name=back]').val(),
				token: token
			},
			success: function(jsonData)
			{
				if (jsonData.hasError)
				{
					var errors = '';
					for(error in jsonData.errors)
						//IE6 bug fix
						if(error != 'indexOf')
							errors += '<li>'+jsonData.errors[error]+'</li>';
					$('#create_account_error').html('<ol>'+errors+'</ol>').show();
				}
				else
				{
					// adding a div to display a transition
					$('#center_column').html('<div id="noSlide">'+$('#center_column').html()+'</div>');
					$('#noSlide').fadeOut('slow', function(){
						$('#noSlide').html(jsonData.page);
						// update the state (when this file is called from AJAX you still need to update the state)									
						bindStateInputAndUpdate();
						$(this).fadeIn('slow', function(){
							document.location = '#account-creation';
						});
					});
				}
			},
			error: function(XMLHttpRequest, textStatus, errorThrown)
			{
				alert("TECHNICAL ERROR: unable to load form.\n\nDetails:\nError thrown: " + XMLHttpRequest + "\n" + 'Text status: ' + textStatus);
			}
		});
	}
	{/literal}
	</script>
	<!--{if isset($authentification_error)}
	<div class="error">
		{if {$authentification_error|@count} == 1}
			<p>{l s='There\'s at least one error'} :</p>
			{else}
			<p>{l s='There are %s errors' sprintf=[$account_error|@count]} :</p>
		{/if}
		<ol>
			{foreach from=$authentification_error item=v}
				<li>{$v}</li>
			{/foreach}
		</ol>
	</div>
	{/if}-->
    <div class="row">
	<form action="{$link->getPageLink('authentication', true)|escape:'html'}" method="post" id="create-account_form" class="std col-xs-12 col-sm-6">
		<fieldset class="titled_box">
			<h2><span>{l s='Create an account'}</span></h2>
			<div class="form_content clearfix">
				<p class="title_block">{l s='Please enter your email address to create an account.'}</p>
				<div class="alert alert-danger" id="create_account_error" style="display:none;"></div>
                
				<div class="form-group">
					<label for="email_create">{l s='Email address'}</label>
					<input type="email" id="email_create" name="email_create" value="{if isset($smarty.post.email_create)}{$smarty.post.email_create|stripslashes}{/if}" class="account_input form-control" />
				</div>
				<p class="submit form-group">
					{if isset($back)}<input type="hidden" class="hidden" name="back" value="{$back|escape:'htmlall':'UTF-8'}" />{/if}
					<input type="submit" id="SubmitCreate" name="SubmitCreate" class="button_large btn btn-default" value="{l s='Create an account'}" />
					<input type="hidden" class="hidden" name="SubmitCreate" value="{l s='Create an account'}" />
				</p>
            </div>
		</fieldset>
	</form>

	<form action="{$link->getPageLink('authentication', true)|escape:'html'}" method="post" id="login_form" class="std col-xs-12 col-sm-6">
		<fieldset class="titled_box">
			<h2><span>{l s='Already registered?'}</span></h2>
			<div class="form_content clearfix">
				<div class="form-group">
					<label for="email">{l s='Email address'}</label>
					<input type="email" id="email" name="email" value="{if isset($smarty.post.email)}{$smarty.post.email|stripslashes}{/if}" class="account_input form-control" />
				</div>
				<div class="form-group">
					<label for="passwd">{l s='Password'}</label>
					<input type="password" id="passwd" name="passwd" value="{if isset($smarty.post.passwd)}{$smarty.post.passwd|stripslashes}{/if}" class="account_input form-control" />
				</div>
				<div class="lost_password form-group"><a href="{$link->getPageLink('password')|escape:'html'}" title="{l s='Recover your forgotten password'}" rel="nofollow">{l s='Forgot your password?'}</a></div>
				<p class="submit">
					{if isset($back)}<input type="hidden" class="hidden" name="back" value="{$back|escape:'htmlall':'UTF-8'}" />{/if}
					<input type="submit" id="SubmitLogin" name="SubmitLogin" class="button btn btn-default" value="{l s='Authentication'}" />
				</p>
                				
			</div>
		</fieldset>
	</form>
	</div>
	{if isset($inOrderProcess) && $inOrderProcess && $PS_GUEST_CHECKOUT_ENABLED}
	<form action="{$link->getPageLink('authentication', true, NULL, "back=$back")|escape:'html'}" method="post" id="new_account_form" class="std clearfix">
		<fieldset>
			<h1><span>{l s='Instant checkout'}</span></h1>
			<div id="opc_account_form" style="display:block;">
            <div class="bottom_indent">
            <div class="row">
            <div class="col-xs-12 col-sm-6">
				<!-- Account -->
                <p class="required form-group">
					<label for="firstname">{l s='First name'} <sup>*</sup></label>
					<input type="text" class="form-control" id="firstname" name="firstname" onblur="$('#customer_firstname').val($(this).val());" value="{if isset($smarty.post.firstname)}{$smarty.post.firstname}{/if}" />
					<input type="hidden" class="text" id="customer_firstname" name="customer_firstname" value="{if isset($smarty.post.firstname)}{$smarty.post.firstname}{/if}" />
				</p>
				<p class="required form-group">
					<label for="lastname">{l s='Last name'} <sup>*</sup></label>
					<input type="text" class="form-control" id="lastname" name="lastname" onblur="$('#customer_lastname').val($(this).val());" value="{if isset($smarty.post.lastname)}{$smarty.post.lastname}{/if}" />
					<input type="hidden" class="text" id="customer_lastname" name="customer_lastname" value="{if isset($smarty.post.lastname)}{$smarty.post.lastname}{/if}" />
				</p>
				<p class="required form-group">
					<label for="guest_email">{l s='Email address'} <sup>*</sup></label>
					<input type="email" class="form-control" id="guest_email" name="guest_email" value="{if isset($smarty.post.guest_email)}{$smarty.post.guest_email}{/if}" />
				</p>
				
                </div>
            	<div class="col-xs-12 col-sm-6">
                	<div class="form-group">
					<label>{l s='Date of Birth'}</label>
                    <div class="row">
                    <div class="col-xs-4">
                        <select id="days" name="days" class="form-control">
                            <option value="">-</option>
                            {foreach from=$days item=day}
                                <option value="{$day}" {if ($sl_day == $day)} selected="selected"{/if}>{$day}&nbsp;&nbsp;</option>
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
                            {foreach from=$months key=k item=month}
                                <option value="{$k}" {if ($sl_month == $k)} selected="selected"{/if}>{l s=$month}&nbsp;</option>
                            {/foreach}
                        </select>
                        </div>
                        <div class="col-xs-4">
                        <select id="years" name="years" class="form-control">
                            <option value="">-</option>
                            {foreach from=$years item=year}
                                <option value="{$year}" {if ($sl_year == $year)} selected="selected"{/if}>{$year}&nbsp;&nbsp;</option>
                            {/foreach}
                        </select>
                        </div>
                    </div>
				</div>
					<p class="radio required form-group clearfix">
					<span class="radio_title">{l s='Title'}</span>
					{foreach from=$genders key=k item=gender}
						<input type="radio" name="id_gender" id="id_gender{$gender->id}" value="{$gender->id}"{if isset($smarty.post.id_gender) && $smarty.post.id_gender == $gender->id} checked="checked"{/if} />
						<label for="id_gender{$gender->id}" class="top">{$gender->name}</label>
					{/foreach}
				</p>
                	{if isset($newsletter) && $newsletter}
					<p class="checkbox-inline">
						<input type="checkbox" name="newsletter" id="newsletter" value="1" {if isset($smarty.post.newsletter) && $smarty.post.newsletter == '1'}checked="checked"{/if} autocomplete="off"/>
						<label for="newsletter">{l s='Sign up for our newsletter!'}</label>
					</p><br />
					<p class="checkbox-inline ml_none">
						<input type="checkbox" name="optin" id="optin" value="1" {if isset($smarty.post.optin) && $smarty.post.optin == '1'}checked="checked"{/if} autocomplete="off"/>
						<label for="optin">{l s='Receive special offers from our partners!'}</label>
					</p>
				{/if}
                </div>
            </div>
                </div>
				<h1><span>{l s='Delivery address'}</span></h1>
                 <div class="shop_box">
                 	<div class="row">
					
				{foreach from=$dlv_all_fields item=field_name}
                
						{if $field_name eq "company"}
                        <div class="col-xs-12 col-sm-6">
                    		<div class="form-group">
							<label for="company">{l s='Company'}</label>
							<input type="text" class="form-control" id="company" name="company" value="{if isset($smarty.post.company)}{$smarty.post.company}{/if}" />
						</div>
                        </div>
						{elseif $field_name eq "vat_number"}
                        <div class="col-xs-12 col-sm-6">
							<div id="vat_number" style="display:none;">
							<div class="form-group">
								<label for="vat_number">{l s='VAT number'}</label>
								<input type="text" class="form-control" name="vat_number" value="{if isset($smarty.post.vat_number)}{$smarty.post.vat_number}{/if}" />
							</div>
						</div>
                        </div>
						{elseif $field_name eq "address1"}
                        <div class="col-xs-12 col-sm-6">
							<div class="required form-group">
							<label for="address1">{l s='Address'} <sup>*</sup></label>
							<input type="text" class="form-control" name="address1" id="address1" value="{if isset($smarty.post.address1)}{$smarty.post.address1}{/if}" />
						</div>
                       	</div>
						{elseif $field_name eq "postcode"}
                        {assign var='postCodeExist' value=true}
                        <div class="col-xs-12 col-sm-6">
							<div class="required postcode form-group">
							<label for="postcode">{l s='Zip / Postal Code'} <sup>*</sup></label>
							<input type="text" class="form-control" name="postcode" id="postcode" value="{if isset($smarty.post.postcode)}{$smarty.post.postcode}{/if}" onblur="$('#postcode').val($('#postcode').val().toUpperCase());" />
						</div>
                        </div>
    					{elseif $field_name eq "city"}
                        <div class="col-xs-12 col-sm-6">
						<p class="required form-group">
							<label for="city">{l s='City'} <sup>*</sup></label>
							<input type="text" class="form-control" name="city" id="city" value="{if isset($smarty.post.city)}{$smarty.post.city}{/if}" />
						</p>
						<!--
							   if customer hasn't update his layout address, country has to be verified
							   but it's deprecated
						   -->
                        </div>
						{elseif $field_name eq "Country:name" || $field_name eq "country"}
                        <div class="col-xs-12 col-sm-6">
						<p class="required form-group">
							<label for="id_country">{l s='Country'} <sup>*</sup></label>
							<select name="id_country" id="id_country" class="form-control">
							
								{foreach from=$countries item=v}
									<option value="{$v.id_country}" {if ($sl_country == $v.id_country)} selected="selected"{/if}>{$v.name}</option>
								{/foreach}
							</select>
						</p>
                        </div>
						{elseif $field_name eq "State:name"}
                        <div class="col-xs-12 col-sm-6">
						{assign var='stateExist' value=true}

						<p class="required id_state form-group">
							<label for="id_state">{l s='State'} <sup>*</sup></label>
							<select name="id_state" id="id_state" class="form-control">
								<option value="">-</option>
							</select>
						</p>
                        </div>
						{elseif $field_name eq "phone"}
                        <div class="col-xs-12 col-sm-6">
						<p class="{if isset($one_phone_at_least) && $one_phone_at_least}required {/if}form-group">
							<label for="phone">{l s='Phone'}{if isset($one_phone_at_least) && $one_phone_at_least} <sup>*</sup>{/if}</label>
							<input type="text" class="form-control" name="phone" id="phone" value="{if isset($smarty.post.phone)}{$smarty.post.phone}{/if}"/>
						</p>
                        </div>
						{/if}
				{/foreach}
				{if $stateExist eq false}
					<p class="required id_state select unvisible">
						<label for="id_state">{l s='State'} <sup>*</sup></label>
						<select name="id_state" id="id_state">
							<option value="">-</option>
						</select>
					</p>
				{/if}
                {if $postCodeExist eq false}
					<p class="required postcode form-group unvisible">
						<label for="postcode">{l s='Zip / Postal Code'} <sup>*</sup></label>
						<input type="text" class="form-control" name="postcode" id="postcode" value="{if isset($smarty.post.postcode)}{$smarty.post.postcode}{/if}" onblur="$('#postcode').val($('#postcode').val().toUpperCase());" />
					</p>
				{/if}
				<input type="hidden" name="alias" id="alias" value="{l s='My address'}" />
				<input type="hidden" name="is_new_customer" id="is_new_customer" value="0" />
                  </div>
               	 </div>
				<!-- END Account -->
                </div>
		</fieldset>
		<fieldset class="account_creation dni titled_box">
			<h2><span>{l s='Tax identification'}</span></h2>
			<p class="required text">
				<label for="dni">{l s='Identification number'}</label>
				<input type="text" class="text" name="dni" id="dni" value="{if isset($smarty.post.dni)}{$smarty.post.dni}{/if}" />
				<span class="form_info">{l s='DNI / NIF / NIE'}</span>
			</p>
		</fieldset>
        {$HOOK_CREATE_ACCOUNT_FORM}
		<p class="cart_navigation clearfix required submit">
			<span><sup>*</sup>{l s='Required field'}</span>
            <input type="hidden" name="display_guest_checkout" value="1" />
			<input type="submit" class="exclusive btn btn-default" name="submitGuestAccount" id="submitGuestAccount" value="{l s='Continue'}" />
		</p>
	</form>
	{/if}
{else}
	<!--{if isset($account_error)}
	<div class="error">
		{if {$account_error|@count} == 1}
			<p>{l s='There\'s at least one error'} :</p>
			{else}
			<p>{l s='There are %s errors' sprintf=[$account_error|@count]} :</p>
		{/if}
		<ol>
			{foreach from=$account_error item=v}
				<li>{$v}</li>
			{/foreach}
		</ol>
	</div>
	{/if}-->
<form action="{$link->getPageLink('authentication', true)|escape:'html'}" method="post" id="account-creation_form" class="std">
	{$HOOK_CREATE_ACCOUNT_TOP}
	<fieldset class="account_creation titled_box">
		<h2><span>{l s='Your personal information'}</span></h2>
        <div class="row">
        	<div class="col-xs-12 col-sm-6">
			<p class="required form-group">
			<label for="customer_firstname">{l s='First name'} <sup>*</sup></label>
			<input onkeyup="$('#firstname').val(this.value);" type="text" class="form-control" id="customer_firstname" name="customer_firstname" value="{if isset($smarty.post.customer_firstname)}{$smarty.post.customer_firstname}{/if}" />
		</p>
			<p class="required form-group">
			<label for="customer_lastname">{l s='Last name'} <sup>*</sup></label>
			<input onkeyup="$('#lastname').val(this.value);" type="text" class="form-control" id="customer_lastname" name="customer_lastname" value="{if isset($smarty.post.customer_lastname)}{$smarty.post.customer_lastname}{/if}" />
		</p>
        </div>
             <div class="col-xs-12 col-sm-6">
                <p class="required form-group">
                    <label for="email">{l s='Email'} <sup>*</sup></label>
                    <input type="email" class="form-control" id="email" name="email" value="{if isset($smarty.post.email)}{$smarty.post.email}{/if}" />
                </p>
                <p class="required form-group clearfix">
                    <label for="passwd">{l s='Password'} <sup>*</sup><span class="form_info">{l s='(Five characters minimum)'}</span></label>
                    <input type="password" class="form-control" name="passwd" id="passwd" />
                    
                </p>
            </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label>{l s='Date of Birth'}</label>
                <div class="row">
                    <div class="col-xs-4">
                        <select id="days" name="days" class="form-control">
                            <option value="">-</option>
                            {foreach from=$days item=day}
                                <option value="{$day}" {if ($sl_day == $day)} selected="selected"{/if}>{$day}&nbsp;&nbsp;</option>
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
                            {foreach from=$months key=k item=month}
                                <option value="{$k}" {if ($sl_month == $k)} selected="selected"{/if}>{l s=$month}&nbsp;</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="col-xs-4">
                        <select id="years" name="years" class="form-control">
                            <option value="">-</option>
                            {foreach from=$years item=year}
                                <option value="{$year}" {if ($sl_year == $year)} selected="selected"{/if}>{$year}&nbsp;&nbsp;</option>
                            {/foreach}
                        </select>
                    </div>
                </div>
            </div>
            {if $newsletter}
                <div class="checkbox-inline form-group" >
                    <input class="checkbox" type="checkbox" name="newsletter" id="newsletter" value="1" {if isset($smarty.post.newsletter) AND $smarty.post.newsletter == 1} checked="checked"{/if} autocomplete="off"/>
                    <label for="newsletter">{l s='Sign up for our newsletter!'}</label>
                </div>
                <br />
                <div class="checkbox-inline form-group ml_none" >
                    <input type="checkbox"name="optin" id="optin" value="1" {if isset($smarty.post.optin) AND $smarty.post.optin == 1} checked="checked"{/if} autocomplete="off"/>
                    <label for="optin">{l s='Receive special offers from our partners!'}</label>
                </div>
            {/if}
        </div>
        <div class="col-xs-12 col-sm-6">
        		<p class="radio required clearfix form-group">
                    <span class="radio_title">{l s='Title'}</span>
                    {foreach from=$genders key=k item=gender}
                        <input type="radio" name="id_gender" id="id_gender{$gender->id}" value="{$gender->id}" {if isset($smarty.post.id_gender) && $smarty.post.id_gender == $gender->id}checked="checked"{/if} />
                        <label for="id_gender{$gender->id}" class="top">{$gender->name}</label>
                    {/foreach}
                </p>
        	</div>
        </div>
	</fieldset>
	{if $b2b_enable}
	<fieldset class="account_creation titled_box">
		<h2><span>{l s='Your company information'}</span></h2>
		<p class="form-group">
			<label for="">{l s='Company'}</label>
			<input type="text" class="form-control" id="company" name="company" value="{if isset($smarty.post.company)}{$smarty.post.company}{/if}" />
		</p>
		<p class="form-group">
			<label for="siret">{l s='SIRET'}</label>
			<input type="text" class="form-control" id="siret" name="siret" value="{if isset($smarty.post.siret)}{$smarty.post.siret}{/if}" />
		</p>
		<p class="form-group">
			<label for="ape">{l s='APE'}</label>
			<input type="text" class="form-control" id="ape" name="ape" value="{if isset($smarty.post.ape)}{$smarty.post.ape}{/if}" />
		</p>
		<p class="form-group">
			<label for="website">{l s='Website'}</label>
			<input type="text" class="form-control" id="website" name="website" value="{if isset($smarty.post.website)}{$smarty.post.website}{/if}" />
		</p>
	</fieldset>
	{/if}
	{if isset($PS_REGISTRATION_PROCESS_TYPE) && $PS_REGISTRATION_PROCESS_TYPE}
	<fieldset class="account_creation">
		<h3>{l s='Your address'}</h3>
		{foreach from=$dlv_all_fields item=field_name}
			{if $field_name eq "company"}
				{if !$b2b_enable}
					<p class="form-group">
						<label for="company">{l s='Company'}</label>
						<input type="text" class="form-control" id="company" name="company" value="{if isset($smarty.post.company)}{$smarty.post.company}{/if}" />
					</p>
				{/if}
			{elseif $field_name eq "vat_number"}
				<div id="vat_number" style="display:none;">
					<p class="form-group">
						<label for="vat_number">{l s='VAT number'}</label>
						<input type="text" class="form-control" name="vat_number" value="{if isset($smarty.post.vat_number)}{$smarty.post.vat_number}{/if}" />
					</p>
				</div>
			{elseif $field_name eq "firstname"}
				<p class="required form-group">
					<label for="firstname">{l s='First name'} <sup>*</sup></label>
					<input type="text" class="form-control" id="firstname" name="firstname" value="{if isset($smarty.post.firstname)}{$smarty.post.firstname}{/if}" />
				</p>
			{elseif $field_name eq "lastname"}
				<p class="required form-group">
					<label for="lastname">{l s='Last name'} <sup>*</sup></label>
					<input type="text" class="form-control" id="lastname" name="lastname" value="{if isset($smarty.post.lastname)}{$smarty.post.lastname}{/if}" />
				</p>
			{elseif $field_name eq "address1"}
				<p class="required form-group">
					<label for="address1">{l s='Address'} <sup>*</sup></label>
					<input type="text" class="form-control" name="address1" id="address1" value="{if isset($smarty.post.address1)}{$smarty.post.address1}{/if}" />
					<span class="inline-infos">{l s='Street address, P.O. Box, Company name, etc.'}</span>
				</p>
			{elseif $field_name eq "address2"}
				<p class="form-group">
					<label for="address2">{l s='Address (Line 2)'}</label>
					<input type="text" class="form-control" name="address2" id="address2" value="{if isset($smarty.post.address2)}{$smarty.post.address2}{/if}" />
					<span class="inline-infos">{l s='Apartment, suite, unit, building, floor, etc...'}</span>
				</p>
			{elseif $field_name eq "postcode"}
            {assign var='postCodeExist' value=true}
				<p class="required postcode form-group">
					<label for="postcode">{l s='Zip / Postal Code'} <sup>*</sup></label>
					<input type="text" class="form-control" name="postcode" id="postcode" value="{if isset($smarty.post.postcode)}{$smarty.post.postcode}{/if}" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />
				</p>
			{elseif $field_name eq "city"}
				<p class="required form-group">
					<label for="city">{l s='City'} <sup>*</sup></label>
					<input type="text" class="form-control" name="city" id="city" value="{if isset($smarty.post.city)}{$smarty.post.city}{/if}" />
				</p>
				<!--
					if customer hasn't update his layout address, country has to be verified
					but it's deprecated
				-->
			{elseif $field_name eq "Country:name" || $field_name eq "country"}
				<p class="required form-group">
					<label for="id_country">{l s='Country'} <sup>*</sup></label>
					<select name="id_country" id="id_country" class="form-control">
						<option value="">-</option>
						{foreach from=$countries item=v}
						<option value="{$v.id_country}" {if ($sl_country == $v.id_country)} selected="selected"{/if}>{$v.name}</option>
						{/foreach}
					</select>
				</p>
			{elseif $field_name eq "State:name" || $field_name eq 'state'}
				{assign var='stateExist' value=true}
				<p class="required id_state form-group">
					<label for="id_state">{l s='State'} <sup>*</sup></label>
					<select name="id_state" id="id_state" class="form-control">
						<option value="">-</option>
					</select>
				</p>
			{/if}
		{/foreach}
        {if $postCodeExist eq false}
			<p class="required postcode form-group unvisible">
				<label for="postcode">{l s='Zip / Postal Code'} <sup>*</sup></label>
				<input type="text" class="form-control" name="postcode" id="postcode" value="{if isset($smarty.post.postcode)}{$smarty.post.postcode}{/if}" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />
			</p>
		{/if}
		{if $stateExist eq false}
			<p class="required id_state form-group unvisible">
				<label for="id_state">{l s='State'} <sup>*</sup></label>
				<select name="id_state" id="id_state" class="form-control">
					<option value="">-</option>
				</select>
			</p>
		{/if}
		<p class="textarea">
			<label for="other">{l s='Additional information'}</label>
			<textarea class="form-control" name="other" id="other" cols="26" rows="3">{if isset($smarty.post.other)}{$smarty.post.other}{/if}</textarea>
		</p>
        		{if isset($one_phone_at_least) && $one_phone_at_least}
		<p class="inline-infos">{l s='You must register at least one phone number.'}</p>
        		{/if}
		<p class="form-group">
			<label for="phone">{l s='Home phone'}</label>
			<input type="tel" class="form-control" name="phone" id="phone" value="{if isset($smarty.post.phone)}{$smarty.post.phone}{/if}" />
		</p>
		<p class="{if isset($one_phone_at_least) && $one_phone_at_least}required {/if} form-group">
			<label for="phone_mobile">{l s='Mobile phone'}{if isset($one_phone_at_least) && $one_phone_at_least} <sup>*</sup>{/if}</label>
			<input type="tel" class="form-control" name="phone_mobile" id="phone_mobile" value="{if isset($smarty.post.phone_mobile)}{$smarty.post.phone_mobile}{/if}" />
		</p>
		<p class="required form-group" id="address_alias">
			<label for="alias">{l s='Assign an address alias for future reference'} <sup>*</sup></label>
			<input type="text" class="form-control" name="alias" id="alias" value="{if isset($smarty.post.alias)}{$smarty.post.alias}{else}{l s='My address'}{/if}" />
		</p>
	</fieldset>
	<fieldset class="account_creation dni">
		<h3>{l s='Tax identification'}</h3>
		<p class="required form-group">
			<label for="dni">{l s='Identification number'} <sup>*</sup></label>
			<input type="tel" class="form-control" name="dni" id="dni" value="{if isset($smarty.post.dni)}{$smarty.post.dni}{/if}" />
			<span class="form_info">{l s='DNI / NIF / NIE'}</span>
		</p>
	</fieldset>
	{/if}
    <script>
	$('.account_creation.customerprivacy h3').wrapInner('<span></span>');
	</script>
	{$HOOK_CREATE_ACCOUNT_FORM}
	<p class="cart_navigation required submit form-group">
		<input type="hidden" name="email_create" value="1" />
		<input type="hidden" name="is_new_customer" value="1" />
		{if isset($back)}<input type="hidden" class="hidden" name="back" value="{$back|escape:'htmlall':'UTF-8'}" />{/if}
		<input type="submit" name="submitAccount" id="submitAccount" value="{l s='Register'}" class="exclusive btn btn-default" />
		<span><sup>*</sup>{l s='Required field'}</span>
	</p>
</form>
{/if}