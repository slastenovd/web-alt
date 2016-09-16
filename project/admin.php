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
			  <p>Загружайте файлы в фотопоток</p>

			  	<form action="upload.php" method="post" enctype="multipart/form-data">
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
		 </div>
		</div>
	</div>	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>