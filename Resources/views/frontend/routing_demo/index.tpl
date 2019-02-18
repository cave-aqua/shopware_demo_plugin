{extends file="parent:frontend/index/index.tpl"}

{block name='frontend_index_content'}
    <h1> dit is de {$currentAction} action</h1>
    <a href="{url module="frontend" controller="routing_demo" action=$nextPage}"}">
        {s name="RoutingDemoNextPage"}{/s}
    </a>

    <ul>
    {foreach $productnNames as $productName}
        <li>{$productName}</li>
    {/foreach}
    </ul>
{/block}
{block name="frontend_index_sidebar"}

{/block}