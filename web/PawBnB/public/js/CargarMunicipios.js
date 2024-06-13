


let ccaaSelect = document.getElementById('ccaa');

let provinciaSelect = document.getElementById('provincia');
provinciaSelect.style.display = "none";

let localidadSelect = document.getElementById('localidad');
localidadSelect.style.display = "none";

let labelprovincia = document.getElementById('labelprovincia');
labelprovincia.style.display = "none";

let labellocalidad = document.getElementById('labellocalidad');
labellocalidad.style.display = "none";


fetch('https://pawbnb.es/registro/cargarCCAA') // Cargamos el CCAA
  .then(response => response.json())
  .then(data => {

    let OpcionBase = document.createElement('option');
    OpcionBase.textContent = "Selecciona una Comunidad Autonoma";    
    ccaaSelect.appendChild(OpcionBase);
    
    data.forEach(ccaa => { 
      let optionccaa = document.createElement('option');
      optionccaa.textContent = ccaa.Nombre;
      optionccaa.value = ccaa.idCCAA; 
      ccaaSelect.appendChild(optionccaa);
    });
   
  })
  .catch(error => {
    console.error('Error al obtener los datos:', error);
  });

  ccaaSelect.addEventListener('change', function() {
    provinciaSelect.style.display = "block";
    labelprovincia.style.display = "block";

    localidadSelect.style.display = "none";
    labellocalidad.style.display = "none";

    fetch('https://pawbnb.es/registro/CargarProvincias/'+ccaaSelect.value) //Cargamos la provincia
    .then(response => response.json())
    .then(data => {
      provinciaSelect.innerHTML="";
      localidadSelect.innerHTML="";

      let OpcionBase = document.createElement('option');
      OpcionBase.textContent = "Selecciona una Provincia";    
      provinciaSelect.appendChild(OpcionBase);

      data.forEach(Provincias => { 

      
        let optionProvincias = document.createElement('option');
        optionProvincias.textContent = Provincias.Provincia;    
        optionProvincias.value = Provincias.idProvincia; 
        provinciaSelect.appendChild(optionProvincias);
      });
     
    })
    .catch(error => {
      console.error('Error al obtener los datos:', error);
    });
  });

  provinciaSelect.addEventListener('change', function() {
    // Vaciar el contenido del select de localidades
    localidadSelect.innerHTML = "";
    data="";
    localidadSelect.style.display = "block";
    labellocalidad.style.display = "block";

    fetch('https://pawbnb.es/registro/CargarMunicipios/'+provinciaSelect.value) //Cargamos el Municipio
    .then(response => response.json())
    .then(data => {
      
      let OpcionBase = document.createElement('option');
      OpcionBase.textContent = "Selecciona un Municipio";    
      localidadSelect.appendChild(OpcionBase);

      data.forEach(Municipios => { 
        let optionMunicipios = document.createElement('option');
        optionMunicipios.textContent = Municipios.Municipio;    
        optionMunicipios.value = Municipios.idMunicipio; 
        localidadSelect.appendChild(optionMunicipios);
      });
     
    })
    .catch(error => {
      console.error('Error al obtener los datos:', error);
    });
  });
