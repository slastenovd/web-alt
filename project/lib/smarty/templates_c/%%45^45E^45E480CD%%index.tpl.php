<?php /* Smarty version 2.6.28, created on 2016-09-19 22:20:22
         compiled from index.tpl */ ?>
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


    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'pagination.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/adjustADs.js"></script>
</body>
</html>