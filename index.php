<?
$z = array(
1 => $_POST['name'],
2 => $_POST['email'],
3 => $_POST['content'],
4 => date("m.d.Y H:i")
);
$dl = '';

if($z[1] && $z[2] && $z[3]){

mail("name@yandex.ru", "заполнена форма site.ru", $z[1] . "\n" . $z[2] . "\n" . $z[3]);

if(strpos($z[3], 'http://') === false){
$fp = fopen("comments.txt", "a+");
$mytext = "<dt><a href='" . $z[2] . "'>" . $z[1] .  "</a><span>" . $z[4] . "</span><dd>" . $z[3] ;
$save = fwrite($fp, $mytext);
fclose($fp);
Header("Location: ".$_SERVER['PHP_SELF']);
exit;
} else {
$dl = '<b style="color: red;">Ваш отзыв будет опубликован после проверки автором сайта</b>';
}

} else {

$fp = @fopen("comments.txt", "r");
if ($fp) {
while (!feof($fp)) {
$dl .= fgetss($fp, 8000, "<dl>,<dt>,<dd>,<span>");
}
}
fclose($fp);
}
?>
<!DOCTYPE html>
<html>

<head>
<meta name="yandex-verification" content="de1ac8d554cb4668" />
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<meta name="description" content="1win рабочий сайт, онлайн ставки на спорт. Отзывы и бонусы при первом депозите. Не упусти возможность победить!">
<meta name="keywords" content="1win,1 win,1вин,1 вин, 1win agar, 1win отзывы, 1win зеркало">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


<title>1win - бк: ставки на спорт, отзывы</title>
</head>
<body>
<!-- Menu -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1a2430;">
   <a class="navbar-brand" href="#"><img src="images/logowin.jpg" alt="Логотип 1win"></img></a>
   <img src="images/ball.png" class="logo" width="57" height="67" alt="Логотип">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse " id="navbarNav">
     <ul class="navbar-nav mr-4">

       <li class="nav-item active">
         <a class="nav-link" href="#">Главная</a>
       </li>
       <li class="nav-item">
         <a class="nav-link " href="/agar">Agar</a>
       </li>
       <li class="nav-item">
         <a class="nav-link " href="/contacts">Контакты</a>
       </li>
     </ul>
   </div>
</nav>

<!-- Slidebar -->

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/520.jpg"  alt="1win всегда рабочее зеркало">
        <div class="carousel-caption">
          <h4>Всегда рабочее зеркало 1win на сайте</h4>
          <a href="" class="btn btn-primary btn-md" role="button" aria-pressed="true">Перейти на зеркало</a>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/522.jpg" alt="Результаты конкурса 1 win">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/agar.jpg" alt="Игра Агарио">
      <div class="carousel-caption">
          <a href="/agar" class="btn btn-dark btn-lg" role="button" aria-pressed="true">Начать играть</a>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Social -->

    <div class="navbar justify-content-start">
    <div class="col-md-1 col-0"></div>
    <div class="col-md-1 col-2"><a href="https://t.me/joinchat/AAAAAD-qdlGKVAfz5kjirg"><img src="social/telegram4.png" width="35px" height="35px" alt="telegram 1win"
        onmouseout="this.src='social/telegram4.png'"
        onmouseover="this.src='social/telegram3.png'"></a></div>
    <div class="col-md-1 col-2"><a href="https://vk.com/1bull"><img src="social/vk1.png" width="40px" height="40px" alt="vk 1win"
       onmouseout="this.src='social/vk1.png'"
        onmouseover="this.src='social/vk2.png'"></a></div>
      <div class="col-md-1 col-1"><a href="https://www.youtube.com/watch?v=DUHXlJz0gzk"><img src="social/youtube1.png" width="35px" height="35px" alt="youtube   1win,1win,бентли за репост"
        onmouseout="this.src='social/youtube1.png'"
        onmouseover="this.src='social/youtube2.png'"></a></div>
<div class="col-md-4 col-1"></div>
        <div class="col-md-3 col-4">
          <table>
            <tr>
              <td><img src="images/telephone.png" width="17px" height="15px" alt="telephone"></td>
              <td></td>
              <td><p class="tel-1">8(800) 301-77-89</p></td>
            </tr>
            <tr>
              <td><img src="images/email.png" width="20px" height="15px" alt="email"></td>
              <td></td>
              <td><p class="tel-1">support@fbet.top</p></td>
            </tr>
          </table>
        </div>
    </div>

<!-- Main -->

<div class="our-main">

<div class="h1-block">
<h1>1win ставки на спорт онлайн</h1>
</div>
<div class="container">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10 col-12 main">
<img class="img-block" src="images/1win.png" alt="1win">
<h2>Преимущества ставок на бк 1 win</h2>
<p><ul>
  <li>Титульный бренд рынка букмекерских контор по ставкам на большой пул спортивных дисциплин</li>
  <li>Гарантированная надежность и белая репутация, подтвержденная высокой оценкой наших игроков</li>
  <li>Пополнение депозита и вывод средств в два клика, возможность сохранения реквизитов</li>
  <li>Интуитивно доступный и эстетически проработанный интерфейс портала 1 win</li>
  <li>Отзывчивая и лояльная к игроку техническая поддержка, компромиссное решение спорных вопросов в пользу клиента</li>
  <li>Проведение акций и раздача бонусов на регулярной основе, широкая рекламная сеть с качественным наращиванием клиентской базы</li>
  <li>Бк 1win обеспечивает полноценный доступ и безукоризненную работу свои ресурсов в сети</li>
  <li>Надежная система шифрования информации и строгая политика конфиденциальности персональных данных участников биржи</li>
  <li>Контроль качества предлагаемых услуг, любая оценка способствует совершенствованию нашего бренда</li>
  <li>И конечно же выгодные коэффициенты, которые обуславливают приток новичков и наличие завсегдатаев букмекерской конторы</li>
  </ul></p>
  <div class="row">
<div class="col-3 col-md-4 col-lg-5"></div>
  <a class="linkin" href=""> Зарегистрироваться </a>
<div class="col-5 col-md-4 col-lg-5"></div>
  </div>
</div>
<div class="col-md-1"></div>
</div>
</div>


<div class="container">
<div class="row">
  <div class="col-md-1 col-0"></div>
    <div class="col-md-10 col-12 main">
<h2>Зачем нужно зеркало 1win? </h2>
<p><b>Зеркало сайта 1win </b> - с недавних пор насущная необходимость для большинства онлайн-бирж.
В силу недавнего ужесточения законодательства РФ о регулировании букмекерских контор, приводящих к блокировке доменов наших сайтов, появилась необходимость, по мере выявления проблемы, переезжать на новое зеркало (Та же страница, но с другим url адресом), которое не сразу попадает в поисковую выдачу. Для устранения проблемы мы предварительно распространяем ссылки рабочих зеркал, информируя игроков о переезде сайта по новому, рабочему адресу.
Ужесточение законов также требует новых правил по верификации и аутентификации для всех пользователей, а на администрацию и владельцев букмекерской конторы вешает почти непосильное налоговое бремя. Но мы, тем не менее, не начинаем завышать коэффициенты и выдумывать схемы обмана, что и является нашим неоспоримым преимуществом. </p>

<p>Новую ссылку вы всегда сможете найти на этой странице</p>
</div>
<div class="col-md-1 col-0"></div>
</div>
</div>


<div class="container">
<div class="row">
<div class="col-md-1 col-0"></div>
<div class="col-md-10 col-12 main">
<img class="img-block" src="images/reg.png" alt="1win регистрация">
<h2>Условия регистрации:</h2>

<ul>
  <li>Запрещены: спам, продажа липовых прогнозов, использование стороннего софта, попытки брута аккаунтов</li>
  <li>Запрещен любой вид недобросовестной игры, за "вилки" будут срезаны лимиты по ставкам</li>
  <li>Для регистрации необходим минимальный возраст 18+ лет</li>
</ul>


 <h3>Для регистрации на 1win необходимо:</h3>

 <ul><li>Указать номер телефона и личную информацию по форме</li>
  <li>Привязать счет к депозиту</li>
</ul>
</div>
<div class="col-md-1 col-0"></div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-1 col-0"></div>
<div class="col-md-10 col-12 main">
  <h2>Отзывы о бк 1win</h2>

<p> Для более прозрачного восприятия текущего положения дел и аутентичной оценки нашей деятельности, вы можете оставить любой отзыв по работе бк 1win: от категорически негативного, который даст нам будущий задел для роста, до апологестически позитивного, который определит вектор последующего развития в правильном направлении. Все оценки и комментарии вы можете оставить прямо на сайте в предназначенной для этого форме. Мы заведомо благодарим вас за уделенное время, все ваши отзывы будут обнародованы и доступны для ознакомления новым игрокам нашей онлайн букмекерской конторы 1 win.</p>

<br><br>
<div class="CommentsBlock">
<form method="post">
  <label for="YourName">Ваше имя:</label><br>
  <input type='text' name='name' id="YourName" required/><br><br>
  <label for="YourMail">Email (не публикуется):</label><br>
  <input type='email' name='email' id="YourMail" required/><br><br>
  <label>Oтзыв:</label><br>
  <textarea name='content' id="YourComments" required rows="5"></textarea><br><br>
  <input type='submit' value='Добавить комментарий' id="Button"/>
</form>
<br>
<hr>
<dl>
<? echo $dl; ?> <!-- PHP -->
</dl>
</div>
<div class="col-md-1 col-0"></div>
</div>
</div>
</div>

<div class="footer">

<p>Данный ресурс не является официальным сайтом букмекерской конторы 1WIN . Мы не принимаем платежи и ставки от наших пользователей. Если вам не исполнилось 18 лет, просим вас покинуть данный сайт. Администрация сайта не несёт ответственности за возможные финансовые потери.
</p>
  <div class="offers">
    <p>Способы оплаты и вывода:</p><br>
    <img src="images/ms.png" alt="Mastercard">
    <img src="images/visa2.png" alt="Visa">
    <img src="images/qiwi.png" alt="Qiwi">
    <img src="images/wm.png" alt="Web Money">
    <img src="images/yandex.png" alt="Yandex">
    <img src="images/payeer.png" alt="Payeer">

    </div>
  </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
