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
  

