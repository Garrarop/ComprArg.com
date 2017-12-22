window.onload = function(){
  var contenido = "";
  var titulo =  document.getElementById('name');
  titulo.oninput = limite;
  function limite(){
  	var addon = document.getElementById('cant');
  	var cantidad = titulo.value.length;
  	if (cantidad >= 51){
  		titulo.value = contenido;
      } else {
  		contenido = titulo.value;
  		addon.innerHTML = cantidad + "/50";
      }
  	if (cantidad >= 50){
  		addon.style.color="#ff0000";
      } else {
  		addon.style.color = "#495057";
      }
  }
}
