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
			  <p>Загружайте фотки в фотопоток</p>
			  <p> 
			  	<form action="upload.php" method="post" enctype="multipart/form-data">
			  		<input type="file" name="filename">
			  		<input type="submit" value="Загрузить">
			  		<a class="btn btn-primary btn-lg" href="#" role="button">Загрузить новую фотку</a>
			  	</form>
			  </p>
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