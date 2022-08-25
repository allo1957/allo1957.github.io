# Mini Apps template 1

Template 1 for creating new application on [VK Mini Apps](https://vk.com/vkappsdev) 
platform

<h2>Погода, там где ты</h2>

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
