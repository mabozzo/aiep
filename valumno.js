function valumno(){

    var rut,nombrealumno,apellidos,direccion,ciudad,sexo,fecha,edad,nacionalidad,provincia,telefono,expresion;
    
    
        rut = document.getElementById("rut").value;
        nombrealumno = document.getElementById("nombrealumno").value;
        apellidos = document.getElementById("apellidos").value;
        direccion = document.getElementById("direccion").value;
        ciudad = document.getElementById("ciudad").value;
        sexo = document.getElementById("sexo").value;
        fecha = document.getElementById("fecha").value;
        edad = document.getElementById("edad").value;
        nacionalidad = document.getElementById("nacionalidad").value;
        provincia = document.getElementById("provincia").value;
        telefono = document.getElementById("telefono").value;
    
    
    expresion=/^[^]+$/;
    
   if(!expresion.test(rut)){ 
       alert ("El campo rut esta vacio");
   

   return false;
}
   if(!expresion.test(nombrealumno)){ 
       alert ("El campo nombre esta vacio");
   

   return false;
}   if(!expresion.test(apellidos)){ 
       alert ("El campo apellidos esta vacio");
   

   return false;
}   if(!expresion.test(direccion)){ 
       alert ("El campo direccion esta vacio");
   

   return false;
}   if(!expresion.test(ciudad)){ 
       alert ("El campo ciudad esta vacio");
   

   return false;
}   if(!expresion.test(sexo)){ 
       alert ("El campo sexo esta vacio");
   

   return false;
}   if(!expresion.test(fecha)){ 
       alert ("El campo fecha esta vacio");
   

   return false;
}   if(!expresion.test(edad)){ 
       alert ("El campo edad esta vacio");
   

   return false;
}   if(!expresion.test(nacionalidad)){ 
       alert ("El campo nacionalidad esta vacio");
   

   return false;
}   if(!expresion.test(provincia)){ 
       alert ("El campo provincia esta vacio");
   

   return false;
}   if(!expresion.test(telefono)){ 
       alert ("El campo telefono esta vacio");
   

   return false;
}
}

