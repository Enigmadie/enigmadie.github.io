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
$mytext = "<dt><div></div><a href='" . $z[2] . "'>" . $z[1] .  "</a><span>" . $z[4] . "</span><dd>" . $z[3] ;
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
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style1.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link media="screen" rel="stylesheet" href="main.css"> 
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">.
<meta name="description" content="1win отзывы о работе букмекерской конторы и сайта, отзывы об игре 1win agar"> 
<meta name="keywords" content="1win отзывы о бк, 1win agar отзывы">
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
 <title>1win отзывы о бк и игре agar</title>
</head>
<body>

<?php

include("menu.php");

?>

<div class="main">

<h2>1win отзывы о бк</h2>

<img class="screen1" src="images/otzivi.png" alt="1win отзывы">
 <br>
 <p> Для более прозрачного восприятия текущего положения дел и аутентичной оценки нашей деятельности, вы можете оставить любой отзыв по работе бк 1win: от категорически негативного, который даст нам будущий задел для роста, до апологестически позитивного, который определит вектор последующего развития в правильном направлении. Все оценки и комментарии вы можете оставить прямо на сайте в предназначенной для этого форме. Мы заведомо благодарим вас за уделенное время, все ваши отзывы будут обнародованы и доступны для ознакомления новым игрокам нашей онлайн букмекерской конторы 1 win.</p>
<br><br><br><br><br>


<h2>1win agar отзывы об игре</h2>


<br>
<p> Букмекерская контора 1 win осуществляет широкую поддержку всех сервисов нашего бренда. Контроль качества внутренних приложений не исключение, и, мы надеемся, что вы поспособствуете потенциалу роста нашего продукта. 1win agar - популярная игра, которая успела зарекомендовать себя своей простотой, полным погружением в игровой процесс и особенностью нашей версии приложения: игре на деньги. Ядром поддержки и развития наших незаурядных продуктов выступает аналитическая база, которая зиждется на собирательной оценке клиентов букмекерской конторы и игроков 1win agar, которая дает персективу для нас быть лучше для вас.
<br><br><br><br><br>

<h2>Отзывы пользователей</h2>
<div class="CommentsBlock">
<form method="post">
  <label for="YourName">Ваше имя:<label><br>
  <input type='text' name='name' id="YourName" required/><br><br>
  <label for="YourMail">Email (не публикуется):</label><br>
  <input type='email' name='email' id="YourMail" required/><br><br>
  <label>Oтзыв:</label><br>
  <textarea name='content' id="YourComments" required rows="5"></textarea><br><br>
  <input type='submit' value='Добавить комментарий' id="Button"/>
</form>
</div>
<dl>
<? echo $dl; ?> <!-- PHP -->
</dl>


</div>

 <?php
 
 include('footer.php');
 
 ?>

</body>
</html>