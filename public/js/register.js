  let selectPaises = document.querySelector('#country_born');


  function cargarPaises() {
    fetch('https://restcountries.eu/rest/v2/all')
    .then(function(respuestaAPI) {
      return respuestaAPI.json();
    })
    .then(function(respuestaPaises) {
      selectPaises.innerHTML = `
        <option value="" disabled selected>Seleccione una pais...</option>
      `;
      for(let unPais of respuestaPaises) {
        let optionPais = document.createElement('option');
        optionPais.setAttribute('value', unPais.id);
        optionPais.innerHTML = unPais.name;
        document.querySelector('#country_born').append(optionPais);
      }
    })
  }

    cargarPaises();
