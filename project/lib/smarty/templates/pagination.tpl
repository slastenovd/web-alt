{if $page_counter gt 1}
    <div class="item-full-width">
    	<div class="paginator">
    		<ul>
	    		<li><a href="#" class="paginator__prev">Страницы:</a></li>

				{$paginationitems}
				
				{if $page_counter gt $page}
	    		<li><a href="#" class="paginator__next">Следующая</a></li>

	    		{/if}
    		</ul>
    	</div>
    </div>
{/if}