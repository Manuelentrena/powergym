jQuery(document).ready(($) => {
  $(".site-header .menu-principal .menu").slicknav({
    label: "",
    appendTo: ".site-header",
  });

  /* MAPA DE LEAFLET */

  const lat = document.querySelector("#lat").value,
    lng = document.querySelector("#lng").value,
    direccion = document.querySelector("#direccion").value;
  console.log(lat, lng, direccion);
  if (lat && lng && direccion) {
    console.log("dentro");
    /* Latitud, longitud, zoom*/
    var map = L.map("mapa").setView([lat, lng], 13);

    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution:
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);

    L.marker([lat, lng]).addTo(map).bindPopup(direccion).openPopup();
  }
});
