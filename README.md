# Расчет местоположения


<h2>Погода вокруг тебя</h2>

  <p>Твои координаты:</p>
  <p class="coord"></p>
  <p id="demo"></p>
  <button onclick="getLocation()">Жми</button>
  <script>
    var x = document.getElementById("demo");
    function getLocation() {
      console.log("->getLocation");
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Геолокация не поддерживается в этом браузере!";
        }
    }
    function showPosition(position) {
      var lt = position.coords.latitude;
      var ln = position.coords.longitude;
       x.innerHTML = "Широта: " + lt + 
        "<br>Долгота: " + ln + "<br>Успех!"; 
    }
  </script>
<?php

// проверяем существование переменных $width и $height
if (isset($_GET['ln']) AND isset($_GET['lt'])) {
    // если переменные существуют, то выводим полученные значения на экран
    $lngt = $_GET['ln'];
    echo 'Длина: ' . $lngt . "<br /><br />\n";
    echo 'Долгота: ' . $_GET['ln'] . "<br />\n";
    echo 'Широта: ' . $_GET['lt'] . "<br />\n";
}

// если переменные не существуют, то выполняем следующее
else {
    // PHP сгенерирует код JavaScript, который обработает браузер
    // пользователя и передаст значения обратно PHP-скрипту через протокол HTTP
    echo "<script language='javascript'>\n";
    echo " location.href=\"${_SERVER['SCRIPT_NAME']}?${_SERVER['QUERY_STRING']}"
            . "ln=\" + screen.width + \"&lt=\" + screen.height;\n";
    echo "</script>\n";
}
?>
