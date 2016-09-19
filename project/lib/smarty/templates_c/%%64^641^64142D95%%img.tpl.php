<?php /* Smarty version 2.6.28, created on 2016-09-19 22:10:24
         compiled from img.tpl */ ?>
  <div class="col-xs-12 col-sm-6 col-md-4 thumbnail-wrapper">
    <div class="thumbnail" id="thumbnail-<?php echo $this->_tpl_vars['id']; ?>
">
      <div class="id" style="display: none"><?php echo $this->_tpl_vars['id']; ?>
</div>
      <img src="<?php echo $this->_tpl_vars['photo_url']; ?>
" alt="">
      <div class="caption">
        <h3 class="img-description"><?php echo $this->_tpl_vars['description']; ?>
</h3>
        <p class="img-date">Дата: <span><?php echo $this->_tpl_vars['date']; ?>
</span></p>

        <p class="img-author">Автор: <span><?php echo $this->_tpl_vars['author']; ?>
</span></p>

        <p>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editItemModal" data-whatever="thumbnail-<?php echo $this->_tpl_vars['id']; ?>
">
				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Изменть
			</button>

			<button type="button" class="btn btn-default delete" role="button">
				<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Удалить
			</button>
        </p>
      </div>
    </div>
  </div>