<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus Datos:</title>
    <style type="text/css">
     
      table {
        font-size: 20px;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        border: 3px solid fae767;
        padding: 100px 50px;
        margin-top: 50px;
        border-radius: 20px;
        background-color:  #EF9E30   ;
        align: center;
      }
        th, h1 {
        background-color:#F9E79F;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }
      h3{
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color:black ;
        font-size: 30px;
        text-align: center;
        width: 50%;
        margin: auto;
        margin-top: 10px;
      }
      body{
        background-image: url('img/antiamarillo.png');
      }
    </style>
</head>
<body>
<a class="=co" href="caballeros.html"><img src="img/continuamarillo.png"></a>
<a class="=inicio" href="index.html"><img align="right" src="img/inicio.png"></a>   
</body>
</html>


<?php

$user = "root";
$pass = "";
$host = "localhost";

 
$connection = mysqli_connect($host, $user, $pass);
//
if(($_POST)==true){
  $gerente = $_POST["gerente"] ;
  $mes = $_POST["mes"] ;
  $inventario = $_POST["inventario"] ;
}else{
  $gerente="";
  $mes="";
  $inventario="";
}




if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>Bienvenido</h3></b>" ;
        }
       
        $datab = "registro";
        
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Datos Registrados:</h3>";
        }
        if(!($gerente=="")){
        $instruccion_SQL = "INSERT INTO bienvenido (gerente,
         mes,inventario)
                             VALUES ('$gerente','$mes','$inventario')";
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);
        }
        
        $consulta = "SELECT * FROM bienvenido";
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>Semana</th></h1>";
echo "<th><h1>Gerente</th></h1>";
echo "<th><h1>Mes</th></h1>";
echo "<th><h1>Inventario</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['semana']. "</td></h2>";
    echo "<td><h2>" . $colum['gerente']. "</td></h2>";
    echo "<td><h2>" . $colum['mes'] . "</td></h2>";
    echo "<td><h2>" . $colum['inventario'] . "</td></h2>";
    echo "</tr>";
}


?>



