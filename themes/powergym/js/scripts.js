jQuery(document).ready(($) => {
  $(".site-header .menu-principal .menu").slicknav({
    label: "",
    appendTo: ".site-header",
  });

  /* SLIDER */
  if ($('.listado-testimoniales').length > 0) {
    $(".listado-testimoniales").bxSlider({
      auto: true,
      mode: 'horizontal',
      controls: false
    });
  }


  /* MAPA DE LEAFLET */
  const lat = document.querySelector("#lat").value,
    lng = document.querySelector("#lng").value,
    direccion = document.querySelector("#direccion").value;
  console.log(lat, lng, direccion);
  if (lat && lng && direccion) {
    /* Latitud, longitud, zoom*/
    var map = L.map("mapa").setView([lat, lng], 13);

    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution:
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);

    L.marker([lat, lng]).addTo(map).bindPopup(direccion).openPopup();
  }

});

/* Agrega posicion fija al header fixed */

window.onscroll = () => {
  const scroll = window.scrollY;
  const documentBody = document.querySelector('body');

  const headerNav = document.querySelector('.barra-navegacion');
  if (scroll > 250) {
    headerNav.classList.add('fixed-top');
    documentBody.classList.add('ft-activo');
  } else {
    headerNav.classList.remove('fixed-top');
    documentBody.classList.remove('ft-activo');
  }
}