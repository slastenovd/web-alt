<?php /* Smarty version 2.6.28, created on 2016-09-16 13:54:33
         compiled from index.tpl */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>День в фото</title>
</head>
<body>
  <div class="container">
    <div class="item-full-width header">
      <h1>День в фото</h1>
    </div>

    <div class="item-full-width">
      <a href="#"><img src="<?php echo $this->_tpl_vars['photo_url']; ?>
" alt="" class="item-full-width__fullsize-img"></a>
      <div class="date-top-label">
        <span class="date-top-label__day"><?php echo $this->_tpl_vars['day']; ?>
</span>
        <span class="date-top-label__month"><?php echo $this->_tpl_vars['month']; ?>
</span>
      </div>
      <div class="triangle"></div>
    </div>

    <div class="item-full-width details">
        <strong><?php echo $this->_tpl_vars['description']; ?>
</strong>
        <br>
        <span>Фото: <?php echo $this->_tpl_vars['author']; ?>
</span>
    </div>

    <?php echo $this->_tpl_vars['items']; ?>


    <div class="item-full-width">
    	<div class="paginator">
    		<ul>
	    		<li><a href="#" class="paginator__prev">Страницы:</a></li>
	    		<li><a href="#" class="paginator__active">1</a></li>
	    		<li><a href="#">2</a></li>
	    		<li><a href="#">3</a></li>
	    		<li><a href="#">4</a></li>
	    		<li><a href="#" class="paginator__next">Следующая</a></li>
    		</ul>
    	</div>
    </div>
  </div>

</body>
</html>