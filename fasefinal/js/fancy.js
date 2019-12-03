// JavaScript Document

	
// VALIDACIONES FORMULARIOS

function validarNombre(){
  var name= document.getElementById('nombreFabrica').value;
  name= name.trim();
  if( name.length < 2 || name.length >= 32){
  document.getElementById('mensaje').classList.add("error")
  document.getElementById('mensaje').innerHTML = "Minimo 2 Maximo 32 caracteres sin espacios"
  document.getElementById('enviarf').disabled=true;
  }
  else{
     document.getElementById('mensaje').classList.remove("error")
     document.getElementById('mensaje').innerHTML = " "
     document.getElementById('enviarf').disabled=false;
  }
  }
  document.getElementById('nombreFabrica').onblur = validarNombre;

  //// validar promocion

  function validarPromocion(){
  var namedos= document.getElementById('nombrePromocion').value;
  namedos= namedos.trim();
  if( namedos.length < 2 || namedos.length >= 32){
  document.getElementById('mensajepromo').classList.add("error")
  document.getElementById('mensajepromo').innerHTML = "Minimo 2 Maximo 32 caracteres sin espacios"
  document.getElementById('enviarp').disabled=true;
  }
  else{
     document.getElementById('mensajepromo').classList.remove("error")
     document.getElementById('mensajepromo').innerHTML = " "
     document.getElementById('enviarp').disabled=false;
  }
  }
  document.getElementById('nombrePromocion').onblur = validarPromocion;

    //validar coders

    function validarCoders(){
      var namecoder= document.getElementById('nombreCoder').value;
      namecoder= namecoder.trim();

      var apellidocoderUno= document.getElementById('apellidoCoder1').value;
      apellidocoderUno= apellidocoderUno.trim();

      var apellidocoderDos= document.getElementById('apellidoCoder2').value;
      apellidocoderDos= apellidocoderDos.trim();

      var nacimientocoder= document.getElementById('nacimientoCoder').value;
      nacimientocoder= nacimientocoder.trim();

      var dnicoder= document.getElementById('dniCoder').value;
      dnicoder= dnicoder.trim();
      var patron = /([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/;
      var patron2 = /^[0-9]{8,8}[A-Za-z]$/;
      var patron3= /([a-z]|[A-Z]|[0-9])[0-9]{7}([a-z]|[A-Z]|[0-9])/;
      
      if( namecoder.length < 2 || namecoder.length >= 25 ){
      document.getElementById('mensajenombrecoder').classList.add("error")
      document.getElementById('mensajenombrecoder').innerHTML = "Minimo 2 y maximo 24 caracteres"
      document.getElementById('enviarc').disabled=true;
      }
      else{
         document.getElementById('mensajenombrecoder').classList.remove("error")
         document.getElementById('mensajenombrecoder').innerHTML = " "
         document.getElementById('enviarc').disabled=false;
      }
      /// EMPIEZA apellidocoder1
      if( apellidocoderUno.length < 2 || apellidocoderUno.length >= 25 ){
        document.getElementById('mensajeapellidocoder1').classList.add("error")
        document.getElementById('mensajeapellidocoder1').innerHTML = "Minimo 2 y maximo 24 caracteres"
        document.getElementById('enviarc').disabled=true;
      }
        else{
           document.getElementById('mensajeapellidocoder1').classList.remove("error")
           document.getElementById('mensajeapellidocoder1').innerHTML = " "
           document.getElementById('enviarc').disabled=false;
        }
      
      /// EMPIEZA apellidocoder2
      if( apellidocoderDos.length < 2 || apellidocoderDos.length >= 25 ){
        document.getElementById('mensajeapellidocoder2').classList.add("error")
        document.getElementById('mensajeapellidocoder2').innerHTML = "Minimo 2 y maximo 24 caracteres"
        document.getElementById('enviarc').disabled=true;
      }
        else{
           document.getElementById('mensajeapellidocoder2').classList.remove("error")
           document.getElementById('mensajeapellidocoder2').innerHTML = " "
           document.getElementById('enviarc').disabled=false;
        }
      
       /// EMPIEZA nacimiento coder
      if(nacimientocoder.length != 10 ||!patron.test(nacimientocoder)){
        document.getElementById('mensajenacimientocoder').classList.add("error")
        document.getElementById('mensajenacimientocoder').innerHTML = "Debe tener formato aaaa-mm-dd"
        document.getElementById('enviarc').disabled=true;
      }
      else{
           document.getElementById('mensajenacimientocoder').classList.remove("error")
           document.getElementById('mensajenacimientocoder').innerHTML = " "
           document.getElementById('enviarc').disabled=false;
        }
        /// EMPIEZA dni coder
      if(!patron2.test(dnicoder) || !patron3.test(dnicoder))  {
        document.getElementById('mensajednicoder').classList.add("error")
        document.getElementById('mensajednicoder').innerHTML = "Debe contener un DNI o NIE valido"
        document.getElementById('enviarc').disabled=true;
      }
        else{
           document.getElementById('mensajednicoder').classList.remove("error")
           document.getElementById('mensajednicoder').innerHTML = " "
           document.getElementById('enviarc').disabled=false;
        }
     
  }

    
      document.getElementById('nombreCoder').onblur = validarCoders;
      document.getElementById('apellidoCoder1').onblur = validarCoders;
      document.getElementById('apellidoCoder2').onblur = validarCoders;
      document.getElementById('nacimientoCoder').onblur = validarCoders;
      document.getElementById('dniCoder').onblur = validarCoders;
 //restringe al usuario de entrar caracteres especiales



  
