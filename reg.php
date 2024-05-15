<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="user-scalable">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Forum&family=Open+Sans:ital,wght@1,300&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Forum&family=Inter&family=Open+Sans:ital,wght@1,300&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Forum&family=Inter:wght@400;700&family=Open+Sans:ital,wght@1,300&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
<link rel="manifest" href="icon/site.webmanifest">
  <title>Library</title>
</head>
<body>
  <div class="container-0">
  <?php include("app/include/header.php");?>
  <main>
    <div class="container-reg">
      <p class="reg-header">Регистрация</p>
      <div class="container-form-entrance">
        <form action="">
          <div class="form-container">
            <div class="form-container-rectangle">
              <p class="form-container-rectangle-p">Научная библиотека КубГУ</p>
              <input type="text" class="form-container-rectangle-input" placeholder="Придумайте логин" >
              <input type="text" class="form-container-rectangle-input" placeholder="Придумайте пароль">
            </div>
            <button class="button-card"><span class="button-card-span">Отправить</span></button>
          </div>
        </form>
        <p><a class="entrance" href="#">Войти в аккаунт</a></p>
      </div>
    </div>
  </main>
  <?php include("app/include/footer.php");?>
</div>
<script src="script.js" charset="utf-8" type="text/javascript" charset="windows-1251"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!--for($i=0;$i<$rows;++$i){
  $result->data_seek($i); // вытаскиваем какие есть ячейки в строке
  echo 'ID: '. $result->fetch_assoc()['id'] . '<br>'; //вытягивание данных
}-->
 
</body>
</html>