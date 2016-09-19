<?php /* Smarty version 2.6.28, created on 2016-09-19 16:33:26
         compiled from pagination.tpl */ ?>
<?php if ($this->_tpl_vars['page_counter'] > 1): ?>
    <div class="item-full-width">
    	<div class="paginator">
    		<ul>
	    		<li><a href="#" class="paginator__prev">Страницы:</a></li>

				<?php echo $this->_tpl_vars['paginationitems']; ?>


	    		<li><a href="#" class="paginator__next">Следующая</a></li>
    		</ul>
    	</div>
    </div>
<?php endif; ?>