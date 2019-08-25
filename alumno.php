<!DOCTYPE html>
<html lang="es">
<head><title>mi pagina</title>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, user-scalable=no  initial= scale=1, maximun-scale-1, minimum-scale=1">
    </head>
<script></script>
<body>
    
 <html> 
 
   <script src="valumno.js"></script>
 
<head>
   <meta charset="UTF-8">
<!--     <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">-->
    
   <title>Registro: Ingresar Alumnos</title> 
</head> 

       <style>
        
    table{
        
    width: 30px;    
    margin-top: 30px;
    }
    body{
        background-color: grey;
    
    }
        
    form{
       height:500px;
        width: 500px;
        background-color: grey;
        
       }

    footer{
    text-align: center;
    margin-top: 50px;
    background-color:white;
    
    }
    p{
        background-color: white;
    }
    
    aside{
     background-color: gray;
        margin-left: 80px;
        
    }

    nav {
position : absolute;
left : 0;
width : 100%;
    background-color: black;

}
nav ul {
margin : 0 auto;
width : 940px;
list-style : none;
}
nav ul li {
float : left;
}
nav ul li a {
display : block;
margin-right : 20px;
width : 120px;
font-size : 14px;
line-height : 44px;

text-decoration : none;
color : white;
}

    nav ul li a:hover {
color : cornflowerblue;
}
    
 </style>
<body> 
 <FORM ACTION="<?php $_SERVER['PHP_SELF']?>" METHOD="POST" onsubmit="return valumno();"> 
   
   
   <table style=border:hiden>
<nav>
        <!-- Menu  -->
        <ul class="menu">  
            <li><a href="alumno.php">Alumnos</a></li>  
            <li><a href="padres.php">Padres</a></li>  
            <li><a href="#">Administrador</a></li>
            <li><a href="#">Docentes</a></li>
            <li><a href="#">Modulo</a></li> 
            <li><a href="#">Notas</a></li> 
        </ul>    
</nav>

<br>
<br>
<br>
<center><H3>Registro Alumno</H3> 
<br>
     <br>
     <br>
     <br>
     
<tr>
      
      <td>Rut:<td><input type="text" id="rut" pattern="^[^]+$"  placeholder="ingrese rut" name="rut" ></td></td>
      <td >Fecha naci:<td><input type="text" id="fecha" pattern="^[^]+$"   placeholder="ingrese fecha nacimiento" name="fechanaci" required></td></td>
     </tr>
      
   <tr>
             <td >Nombre:<td><input type="text" id="nombrealumno" pattern="^[^]+$"  placeholder="ingrese nombre" name="nombre" ></td></td>
             <td >Edad:<td><input type="text" id="edad" pattern="^[^]+$"  placeholder="ingrese edad" name="edad" ></td></td>
            
   </tr>
      <tr>
      <td >Apellidos:<td><input type="text"  id="apellidos" pattern="^[^]+$"  placeholder="ingrese apellidos" name="apellidos" </td></td>
      <td >Nacionalidad:<td><input type="text"  id="nacionalidad" pattern="^[^]+$"  placeholder="ingrese nacionalidad" name="nacionalidad" ></td></td>
      </tr>
      <tr>
      <td >Direccion:<td><input type="text" id="direccion" pattern="^[^]+$"  placeholder="ingrese direccion" name="direccion" ></td></td>
      <td >Provincia:<td><input type="text" id="provincia" pattern="^[^]+$"  placeholder="ingrese provincia" name="provincia" ></td></td>
      </tr>
      <tr>
      <td >Ciudad:<td><input type="text" id="ciudad" pattern="^[^]+$"  placeholder="ingres ciudad" name="ciudad" ></td></td>
      <td >Telefono:<td><input type="text"  id="telefono" pattern="^[^]+$"  placeholder="ingrese telefono" name="telefono" ></td></td>
    </tr>
           <tr>
            <td >Sexo:<td><input type="text" id="sexo" pattern="^[^]+$"  placeholder="ingrese sexo" name="sexo" ></td></td>
    </tr>
      </tr>
 
     <aside>
       
       <input type="submit" name="guardar" value="Guardar" >
       
     <input type="submit" name="consultar" value="consultar" >
       <input type="submit" name="imprimir" value="Imprimir">
        <input type="submit" name="eliminar" value="Eliminar">
        <input type="submit" name="salir" value="Salir">
     
   </aside>
   
   </center>
    
    </table>
    
 
  </form>     
   
 
           <footer>
        
       <p>© 2019 google y colaboradores individuales.</p>
 </footer>

        <?php
    

   include "validarusuario.php"; 
       
           $rut=$_POST['rut'];
           $nombre=$_POST['nombre'];
           $apellidos=$_POST['apellidos'];
           $edad=$_POST['edad'];
           $fechanaci=$_POST['fechanaci'];
           $nacionalidad=$_POST['nacionalidad'];
           $ciudad=$_POST['ciudad'];
           $provincia=$_POST['provincia']; 
           $telefono=$_POST['telefono']; 
           $direccion=$_POST['direccion'];
           $sexo=$_POST['sexo'];
          
         #consultarpara insertar
         
$insertar= "INSERT INTO alumno (rut_alu , nombre , apellidos , edad , fechanaci , nacionalidad , ciudad , provincia , telefono , direccion , sexo )VALUES('$rut','$nombre','$apellidos','$edad','$fechanaci','$nacionalidad','$ciudad','$provincia','$telefono','$direccion','$sexo')";
          
$verificar_rut=mysqli_query($conexion," SELECT * FROM alumno  WHERE rut_alu  ='$rut'");

       if(mysqli_num_rows($verificar_rut) > 0){
            
        echo "el rut ya esta registrado";
        exit;
         }
          
          #ejecutar consulta
          $resultado=mysqli_query($conexion,$insertar);
            
              if(!$resultado){
              
              echo"error al insertar los registros";
          }

                    else{
              echo "los datos han sido ingresados correctamente";
          }


?>
   
  
</body>
</html>

