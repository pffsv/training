<?
  $name = $HTTP_POST_VARS['name'];
  if (empty($name))
  {
    // если поле пустое, снова просим ввести имя
?>
    <h1> Вы забыли ввести ваше имя <h1>
    <!-- далее следует HTML-код формы, в которой вводится имя -->
<?
  }
  else
  {
    -
  }
?>