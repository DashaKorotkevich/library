<!DOCTYPE html>
<html lang="en">
<head>
  
<meta charset="utf-8">
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
  <div class="container-header-content">
    <div class="header-content">
      <h1>Добро<br> 
      пожаловать<br>в научную библиотеку КубГУ!</h1>
    </div>
</div>
<section id="about">
  <div class="container">
    <div class=" section_heading_container">
        <h2 class="heading"><a href="#" class="heading-link">О нас</a>
          <span class="line"></span>
        </h2>
    </div>
    <div class="container_about_p">
      <p class="about_p"> Библиотека КубГУ — это надежный помощник  в огромном потоке цифровой информации и проводник в безграничный мир творчества. </p>
    </div>
    <div class="container_slider">
      <div class="prev-button"><div class="prev-triangle"></div></div>
      <div class="slider">
        <div class="slider-line"></div>
      </div>
      <div class="next-button"><div class="next-triangle"></div></div>
    </div>
  </div>
</section>
<section id="favorites">
  <div class="container">
    <div class=" section_heading_container">
        <h2 class="heading"><a href="#" class="heading-link">Читайте книги!</a>
          <span class="line"></span>
        </h2>
    </div>
  
        <blockquote class="favorites-books-quotes">Чтение хороших книг — это разговор с самыми лучшими людьми прошедших времен, и притом такой разговор, когда они сообщают нам только лучшие свои мысли.
        <p class="favorites-books-quotes-autor">— Рене Декарт —</p>
        </blockquote>
      
        <div class="about-container-p-form">
          <form action="#" class="container_favorites_form">
            <label class="label_radio"> 
              <input class="input_radio" type="radio" name="radio-button-1"
              id="input_radio-educational">
              <span class="fake"></span>
              <span>Учебные</span>
            </label>
            <label class="label_radio label_radio_1"> 
              <input class="input_radio" type="radio" name="radio-button-1"
              id="input_radio-references">
              <span class="fake"></span>
              <span>Справочные</span>
            </label>
            <label class="label_radio label_radio_1"> 
              <input class="input_radio" type="radio" name="radio-button-1"
              id="input_radio-artistic">
              <span class="fake"></span>
              <span>Художественные</span>
            </label>
            <label class="label_radio label_radio_1"> 
                <a id="myLink" href="#favoriteBooksClick"></a>
                <input class="input_radio" type="radio" name="radio-button-1"
                id="input_radio-popularScience">
                <span class="fake"></span>
                <span> Научно-популярные </span>
            </label>
          </form>
          
        </div>
        <div class="favorites-cards-container">
          <div class="cards-container" id="favoriteBooksClick"></div>
        </div>
  </div>
</section>
<section id="meeting">
  <div class="container">
    <div class=" section_heading_container">
      <h2 class="heading"><a href="#" class="heading-link">Мероприятия</a>
        <span class="line"></span>
      </h2>
    </div>
    <p class="meeting-p">
    Библиотека КубГУ проводит множество интересных меропрятий. Скорее участвуй!
    </p>
    <div class="meeting-content-container">
      <div class="meeting-description">
        <p class="meeting-description-h" >Квартирник</p>
        <p class="meeting-description-text">Каждый сезон, когда душа требует уюта, в библиотеке КубГУ традиционно проводится квартирник. На мероприятии все желающие могут проявить свои таланты, играя на музыкальных инструментах или читая любимые стихотворения.</p>
      </div>
      <div class="meeting-img-container">
        <img src="img/img-meeting/JkrO165-UqA.jpg" alt="квартирник" class="meeting-img">
      </div>
      
    </div>
   </div>
</section>
<section id="contacts">
  <div class="container container-contacts">
    <div class=" section_heading_container">
      <h2 class="heading"><a href="#" class="heading-link">Контакты</a>
        <span class="line"></span>
      </h2>
    </div>
    <div class="content-contacts-container">
        <div class="content-contacts-text">
          <p class="content-contacts-text-heading-1">По всем вопросам:</p>
          <p class="content-contacts-text"> Звоните: <a href="tel:(861)21-99-552 ">(861)21-99-552 </a></p>
          <p class="content-contacts-text"> Единый пункт записи читателей: к.А218</p>
          <p class="content-contacts-text"> Читальный зал: к.109С, главный корпус университета</p>
          <p class="content-contacts-text-heading-2">Начальство:</p>
          <p class="content-contacts-text">Директор библиотеки:<b><a href="mailto:huade@kubsu.ru"> Хуаде Марьяна Аскеровна (к. А221)</a></b></p>
          <p class="content-contacts-text">Зам.директора по науч. работе:<b><a href="mailto:dzboeva.o@lib.kubsu.ru"> Дзбоева Ольга Александровна (к.А319)</a></b></p>
       </div>
        <div class="content-contacts-img"  > </div>
    </div>
  </div>
</section>
<section id="cards">
  <div class="container">
    <div class=" section_heading_container">
      <h2 class="heading"><a href="#" class="heading-link">Цифровые читательские карточки</a>
        <span class="line"></span>
      </h2>
    </div>
    <div class="cards-content-container">
      <div class="cards-content-left-container">
        <p class="card-content-header">Найти мою читательскую карту</p>
        <form action="" >
          <div class="form-container">
            <div class="form-container-rectangle">
              <p class="form-container-rectangle-p">Научная библиотека КубГУ</p>
              <input type="text" class="form-container-rectangle-input" placeholder="Введите логин" id="login" >
              <input type="text" class="form-container-rectangle-input" placeholder="Ввидите пароль" id="pass">
            </div>

            <button class="button-card"><span class="button-card-span">Отправить</span></button> 
          </div>
        </form>
      </div>
      <div class="cards-content-rigth-container">
        <p class="card-content-header">Получить читательскую карту</p>
        <div class="cards-content-rigth-text-container">
          <p class="cards-content-rigth-text">Чтобы получить читательскую карточку нужно зарегистрироваться</p>
        </div>
        <button class="button-card"><span class="button-card-span">Регистрация</span></button>
      </div>
    </div>
  </div>
</section>
</main>
<?php include("app/include/footer.php");?>
</div>
<script src="script.js" charset="utf-8" type="text/javascript" charset="windows-1251"></script>
</body>
</html>
