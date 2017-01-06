{if $MENU != ''}
<div id="menu-wrap" class="clearfix desktop">
	<div id="menu-trigger">{l s='Categories' mod='blocktopmenu'}<i class="menu-icon icon-plus-sign-alt"></i></div>
	<ul id="menu-custom">
			{$MENU}
			{if $MENU_SEARCH}
				<li class="search">
					<form id="searchbox" action="{$link->getPageLink('search')|escape:'html'}" method="get">
								<input type="hidden" name="controller" value="search" />
						<input type="hidden" value="position" name="orderby"/>
						<input type="hidden" value="desc" name="orderway"/>
						<input type="text" name="search_query" value="{if isset($smarty.get.search_query)}{$smarty.get.search_query|escape:'htmlall':'UTF-8'}{/if}" placeholder="Search..." />
					</form>
				</li>
			{/if}
		</ul>
	</div>
{/if}