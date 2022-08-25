# Расчет местоположения


<h2>Погода вокруг тебя</h2>

  <p>This is coordinate:</p>
  <p class="coord"></p>
  <p id="demo"></p>
  <button onclick="getLocation()">Click me</button>
  <script>
    var x = document.getElementById("demo");
    function getLocation() {
      console.log("->getLocation");
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }
    function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude + 
        "<br>Longitude: " + position.coords.longitude; 
    }
  </script>
