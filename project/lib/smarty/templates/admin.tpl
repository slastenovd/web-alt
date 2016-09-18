<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">  
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<title>Админка "фото дня"</title>
</head>
<body>

	<div class="container">
		<div class="row">
		 <div class="col-md-12">
			<div class="jumbotron center-block">
			  <h1>Админка "Фото дня"</h1>
			 	<div id="after_upload" style="display: none">
			 		<div id="container_info"  role="alert" class="alert"></div>
			 		<img src="" alt="" id="uploaded_img" class="center-block">
			 	</div>

			  <p>Загружайте файлы в фотопоток</p>

			  	<form action="upload.php" method="post" enctype="multipart/form-data" id="photo_form">
				  <div class="form-group">
				    <input type="text" class="form-control" id="descriptionField" placeholder="Описание снимка" name="description">
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" id="authorField" placeholder="Автор снимка" name="author">
				  </div>
				  <div class="form-group">
				    <input type="date" class="form-control" id="dateField" placeholder="Дата снимка" name="date">
				  </div>
				  <div class="form-group">
				    <input type="file" id="inputFileField" name="filename">
				    <p class="help-block">Загружаемый файл будет приведен к 700х455</p>
				  </div>
				  <button type="submit" class="btn btn-default">Загрузить</button>
				</form>
			</div>

			{$items}

		 </div>
		</div>
	</div>	



	<div class="modal fade" id="editItemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="exampleModalLabel">Редатирование</h4>
	      </div>
	      <div class="modal-body">
	        <form action="controller.php" method="post" id="editItemModalForm">
	          <div class="form-group">
	            <label for="modal-description" class="control-label">Описание:</label>
	            <input type="text" class="form-control" id="modal-description" name="description">
	          </div>
	          <div class="form-group">
	            <label for="modal-autor" class="control-label">Автор:</label>
	            <input type="text" class="form-control" id="modal-author" name="author">
	          </div>
	          <div class="form-group">
	            <label for="modal-date" class="control-label">Дата:</label>
	            <input type="date" class="form-control" id="modal-date" name="date">
	          </div>
              <input type="hidden" value="" name="id" id="modal_item_id">
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
		        <button type="submit" value="submit" class="btn btn-primary save" >Сохранить</button>
		      </div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="js/common.js"></script>
    <script src="js/jquery.form.min.js"></script>

</body>

</html>x