<!DOCTYPE html>
<html lang="es">
<head><title>mi pagina</title>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, user-scalable=no  initial= scale=1, maximun-scale-1, minimum-scale=1">
    </head>

<body>
    
    
    <html> 
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
    <FORM ACTION="<?php $_SERVER['PHP_SELF']?>" METHOD="post"> 
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
<center><H3>Registro Padre</H1> 

   
   
    
      <br>
     <br>
     <br>
     <br>
     
     
        <FORM ACTION="<?php $_SERVER['PHP_SELF']?>" METHOD="post"> 
<tr>
      
      <td>Rut:<td><input type="text" placeholder="ingrese" name="" required></td></td>
      <td >Telefono:<td><input type="text" placeholder="ingrese telefono" name="telefono"></td></td>
     </tr>
      
   <tr>
             <td >Nombre:<td><input type="text" placeholder="ingrese nombre" name="nombre" required></td></td>
             <td >Profesion:<td><input type="text" placeholder="ingrese profesion" name="profesion" required></td></td>
            
   </tr>
      <tr>
      <td >Apellidos:<td><input type="text" placeholder="ingrese apellidos" name="apellidos" required></td></td>
      <td >Celular:<td><input type="text" placeholder="ingrese celular" name="celular" required></td></td>
      </tr>
      <tr>
      <td >Direccion:<td><input type="text" placeholder="ingrese direccion" name="direccion" required></td></td>
   
      
   
</tr>

    <aside>
       
       <input type="button" name="guardar" value="Guardar">
             
                    <input type="button"  name="modificar" value="Modificar" >
                  <input type="button"  name="imprimir" value="Imprimir">
                    <input type="button"  name="eliminar " value="Eliminar">
                      <input type="button" name="salir" value="Salir">
                </aside>
   
    
    </center>
    
    </table>
    
 </form>     
   
  
   
   
    <footer>
        
       <p>© 2019 google y colaboradores individuales.</p>
 </footer>
    
    
</body>
</html>

