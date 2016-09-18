  <div class="col-xs-12 col-sm-6 col-md-4 thumbnail-wrapper">
    <div class="thumbnail" id="thumbnail-{$id}">
      <div class="id" style="display: none">{$id}</div>
      <img src="{$photo_url}" alt="">
      <div class="caption">
        <h3 class="img-description">{$description}</h3>
        <p class="img-date">Дата: <span>{$date}</span></p>

        <p class="img-author">Автор: <span>{$author}</span></p>

        <p>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editItemModal" data-whatever="thumbnail-{$id}">
				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Изменть
			</button>

			<button type="button" class="btn btn-default delete" role="button">
				<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Удалить
			</button>
        </p>
      </div>
    </div>
  </div>
