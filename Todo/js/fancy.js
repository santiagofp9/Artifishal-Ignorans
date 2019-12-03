// JavaScript Document
jQuery (function(){
    
    
$( "input" ).click(function() {
  $( "#logo2" ).hide();
});
 
$("input").click(function(){
  $("#tabla").show();
});   
});
	
// VALIDACIONES FORMULARIOS

function formFabrica(){
  var nombre = document.getElementById("nombreFabrica").value;
  if (nombre.length < 2 && nombre.length >= 32){
      document.getElementById("nameInfo").classList.add("error")
      document.getElementById("nameInfo").innerHTML = "Agrega más caracteres al campo"
  }else{
      document.getElementById("nameInfo").classList.remove("error")
      document.getElementById("nameInfo").innerHTML = ""
  }
 
}