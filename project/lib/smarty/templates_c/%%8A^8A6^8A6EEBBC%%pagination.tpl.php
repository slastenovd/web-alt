<?php /* Smarty version 2.6.28, created on 2016-09-20 07:45:54
         compiled from pagination.tpl */ ?>
<?php if ($this->_tpl_vars['page_counter'] > 1): ?>
    <div class="item-full-width">
    	<div class="paginator">
    		<ul>
	    		<li><a href="#" class="paginator__prev">Страницы:</a></li>

				<?php echo $this->_tpl_vars['paginationitems']; ?>

				
				<?php if ($this->_tpl_vars['page_counter'] > $this->_tpl_vars['page']): ?>
	    		<li><a href="#" class="paginator__next">Следующая</a></li>

	    		<?php endif; ?>
    		</ul>
    	</div>
    </div>
<?php endif; ?>