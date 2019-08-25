

function validar(){
    var usuario, password, expresion;
    
    usuario = document.getElementById("usuario").value;
    password = document.getElementById("password").value;
    
    
    expresion=/^[^]+$/;
    

    if(!expresion.test(usuario)){ 
       alert ("El campo usuario esta vacio");
   

   return false;
}
else if(usuario.length>30){
    
    alert ("El campo usuario es demaciado largo");
       
   return false;
}    
     if(!expresion.test(password)){ 
       alert ("El campo password esta vacio");
   
   return false;
    }
  
    else if(password.length>30){
    
    alert ("El campo password demaciado largo");
           
   return false;
}
}


