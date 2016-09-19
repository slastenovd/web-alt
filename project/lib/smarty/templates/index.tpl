<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>День в фото</title>
</head>
<body>
  <div class="container">
    <div class="item-full-width header">
      <h1>День в фото</h1>
    </div>

    <div class="item-full-width">
      <a href="#"><img src="{$photo_url}" alt="" class="item-full-width__fullsize-img"></a>
      <div class="date-top-label">
        <span class="date-top-label__day">{$day}</span>
        <span class="date-top-label__month">{$month}</span>
      </div>
      <div class="triangle"></div>
    </div>

    <div class="item-full-width details">
        <strong>{$description}</strong>
        <br>
        <span>Фото: {$author}</span>
    </div>

    {$items}

    {include file='pagination.tpl'}

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/adjustADs.js"></script>
</body>
</html>