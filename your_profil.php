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
    <div class="container">
      <div class="welcome">
        <h2 class="heading-welcome">Здравствуйте, Дарья
          <span class="line"></span>
        </h2>
      </div>
      <div class="number-card">
        <p>Номер вашей карточки: </p>
        <p id="number-card-value">5</p>
      </div>
      <p class="borrowed-order-books">У вас на руках: </p>
      <div class="borrowed-order-books-header-table">
        <p>Название, автор</p>
        <p>Когда сдавать?</p>
      </div>
      <div class="borrowed-order-books-table borrowed-books-table">
        <div class="borrowed-books-table-row">
          <p class="books-table-name-autor">Авиатор, Водолазкин</p>
          <img class="books-table-img" src="img/img-book/images.jpg" all="">
          <p class="date">До 30.06.2024</p>
        </div>
        <div class="borrowed-books-table-row">
          <p class="books-table-name-autor">Сборник задач по математике для поступающих в втузы, Сканави</p>
          <img class="books-table-img" src="img/img-book/skanavi.jpg" all="">
          <p class="date">До 30.06.2024</p>
        </div>
      </div>
      <p class="borrowed-order-books">Забронированные: </p>
      <div class="borrowed-order-books-header-table">
        <p>Название, автор</p>
        <p>Когда освободятся?</p>
      </div>
      <div class="borrowed-order-books-table order-books-table">
        <div class="borrowed-books-table-row">
          <p class="books-table-name-autor">Краткая история времени, Стивен Хокинг</p>
          <img class="books-table-img" src="img/img-book/kratkayaistoriyavremeni.jpg" all="">
          <p class="date">С 01.07.2024</p>
        </div>
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