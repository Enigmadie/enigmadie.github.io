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
$fp = fopen("comments-agar.txt", "a+");
$mytext = "<dt><a href='" . $z[2] . "'>" . $z[1] .  "</a><span>" . $z[4] . "</span><dd>" . $z[3] ;
$save = fwrite($fp, $mytext);
fclose($fp);
Header("Location: ".$_SERVER['PHP_SELF']);
exit;
} else {
$dl = '<b style="color: red;">Ваш отзыв будет опубликован после проверки автором сайта</b>';
}

} else { 

$fp = @fopen("comments-agar.txt", "r");
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

<link rel="stylesheet" type="text/css" href="style.css">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link media="screen" rel="stylesheet" href="main.css"> 
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<meta name="description" content="1win agar теперь на деньги! Заходи и зарабатывай. Мгновенный вывод денег!"> 
<meta name="keywords" content="agar io на деньги,agar на деньги, 1win агар, 1win агарио, 1win agar, отзывы 1win agar">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
 <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48773225 = new Ya.Metrika({
                    id:48773225,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48773225" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118817521-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118817521-1');
</script>   
    
<title>1win agar игра на деньги</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1a2430;">
   <a class="navbar-brand" href="#"><img src="images/logowin.jpg" alt="Логотип 1win"></img></a>
   <img src="images/ball.png" class="logo" width="57" height="67" alt="Логотип"> 
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse " id="navbarNav">
     <ul class="navbar-nav mr-4">
       
       <li class="nav-item">
         <a class="nav-link" href="/index">Главная</a>
       </li>
       <li class="nav-item active">
         <a class="nav-link " href="#">Agar</a>
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
          <a href="http://1winu.top/bets/live" class="btn btn-primary btn-md" role="button" aria-pressed="true">Перейти</a>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/522.jpg" alt="Результаты конкурса 1 win">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/agar.jpg" alt="Игра Агарио">
      <div class="carousel-caption">
          <a href="#" class="btn btn-dark btn-lg" role="button" aria-pressed="true">Начать играть</a>
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
              <td><img src="images/telephone.png" width="17px" height="15px"></td>
              <td></td>
              <td><p class="tel-1">8(800) 301-77-89</p></td>
            </tr>
            <tr>
              <td><img src="images/email.png" width="20px" height="15px"></td>
              <td></td>
              <td><p class="tel-1">support@fbet.top</p></td>
            </tr>
          </table>
        </div>
    </div>
 
<!-- Main -->

<div class="our-main">

<div class="h1-block">
<h1>Новинка бк 1win, agar - игра на деньги</h1>
</div> 
<div class="container">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10 col-12 main">  
<img class="img-block" src="images/agar.jpg" alt="agario на деньги,1win agario">
<p>Наша букмекерская контора рада представить вам популярную браузерную игру 1win agar. Игра представляет из себя многопользовательский онлайн экшн, стратегия которого зиждется на постепенном "отжоре" и последующим доминировании на карте. Игровой формат является многообещающим таймкиллером, но с возможностью играть на деньги, что лишь укрепляет конкурентный дух между пользователями, а время и приорбретенный опыт подкрепляются возможностью поднять неплохой куш. Мы обеспечиваем максимально комфортные условия для  пользователей нашей биржи: удобный и быстрый ввод и вывод средств,   Играйте и зарабатывайте одновременно с 1 win agar. </p>
<br><br>
<p><b><em>Мы обеспечиваем максимально комфортные условия для  пользователей нашей биржи:</em></b> 
<ul><li>Удобный и быстрый ввод и вывод средств</li>
    <li>Круглосуточная техническая поддержка, онлайн администрация</li>
    <li>Завершенный для реализации продукт, отсутствие багов и возможности использовать чит-софт</li>
    <li>Наличие разных комнат с разными ценовыми категориями</li>
    <li>Всегда работающие серверы, постоянный и гарантированный онлайн с приемлимой скоростью в интернете</li></ul></p>

  <div class="row">
<div class="col-3 col-md-4 col-lg-5"></div>
   <a class="linkin" href="http://1winu.top/games/agar"> Начать играть! </a>
<div class="col-5 col-md-4 col-lg-5"></div>
  </div>
</div>
<div class="col-md-1"></div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10 col-12 main">  

<h2>Правила игры 1win agar</h2>
<br>
<p><em><b>Стратегия очень проста:</b></em></p>
<ul><li>Съедаешь игрока, получаешь его деньги себе.</li>
<li>Больше ешь - больше зарабатываешь.</li>
<li>Больше шар - больше шансов съесть более мелкие шары</li></ul>
<br>

<p><b><em>Запрещено:</em></b></p>
<ul><li>Играть с нескольких аккаунтов</li>
<li>Командная игра, помощь другим игрокам</li></ul>
<br><br>

<div class="youtube">
<iframe width="560" height="315" src="https://www.youtube.com/embed/ScC2teony9w" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
    </div>
    <div class="col-md-1"></div>
    </div>
</div>


<div class="container">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10 col-12 main">  

<h2>1win agar - отзывы об игре</h2>


<br>
<p> Букмекерская контора 1 win осуществляет широкую поддержку всех сервисов нашего бренда. Контроль качества внутренних приложений не исключение, и, мы надеемся, что вы поспособствуете потенциалу роста нашего продукта. 1win agar - популярная игра, которая успела зарекомендовать себя своей простотой, полным погружением в игровой процесс и особенностью нашей версии приложения: игре на деньги. Ядром поддержки и развития наших незаурядных продуктов выступает аналитическая база, которая зиждется на собирательной оценке клиентов букмекерской конторы и игроков 1win agar, которая дает персективу для нас быть лучше для вас.


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
</div>
    <div class="col-md-1"></div>
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