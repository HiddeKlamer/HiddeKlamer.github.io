(function() {
  'use strict';

  var parent = document.getElementById('weather');
  var select = parent.querySelector('#city-select');
  var button = parent.querySelector('button');
  var response = parent.querySelector('#response');

  button.addEventListener('click', function() {
    var cityId = select.value;
    var url = 'https://api.openweathermap.org/data/2.5/weather?id=' + cityId + '&APPID=8b10d4314b2af03d85dca4d904fde535';

    fetch(url)
      .then(function (response) {
        return response.json();
      })
      .then(function (json) {
        console.log(json)
        var description = json.weather[0].description;
        var temp  = kelvinToCelcius(json.main.temp);
        response.innerHTML = description + '<br><br>Temperature: ' + temp;
      })

  });

  function kelvinToCelcius(kelvin) {
    return Math.round((kelvin - 272.15) * 100) / 100;
  }
})();
