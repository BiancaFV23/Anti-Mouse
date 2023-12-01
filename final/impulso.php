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
        background-color:  green ;
        align: center;
      }
        th, h1 {
        background-color:#7DCEA0 ;
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
        background-image: url('img/antiverde.png');
      }
     
    </style>
      

    </style>
</head>
<body>
<a class="=co" href="zapateros.html"><img src="img/continuaverde.png"></a>   
<a class="=inicio" href="index.html"><img align="right" src="img/inicio.png"></a>   
</body>
</html>


<?php

$user = "root";
$pass = "";
$host = "localhost";


$connection = mysqli_connect($host, $user, $pass);
if(($_POST)==true){
$impulso1 = $_POST["impulso1"] ;
$impulso2 = $_POST["impulso2"] ;
$impulso3 = $_POST["impulso3"] ;
$impulso4 = $_POST["impulso4"] ;
$impulso5 = $_POST["impulso5"] ;
}else{
  
  $impulso1="";
  $impulso2="";
  $impulso3="";
  $impulso4="";
  $impulso5="";
}





if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>Bienvenido</h3></b>" ;
        }
       
        $datab = "impulso";
        
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Datos Registrados:</h3>";
        }
        if(!($impulso1=="")){
        
        $instruccion_SQL = "INSERT INTO impulso (impulso1, impulso2, impulso3,impulso4,impulso5)
                             VALUES ('$impulso1','$impulso2','$impulso3','$impulso4','$impulso5')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);
        }
        
        $consulta = "SELECT * FROM impulso";
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>Semana</th></h1>";
echo "<th><h1>Niño 1</th></h1>";
echo "<th><h1>Niño 2</th></h1>";
echo "<th><h1>Niño 3</th></h1>";
echo "<th><h1>Niño 4</th></h1>";
echo "<th><h1>Niño 5</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['semana']. "</td></h2>";
    echo "<td><h2>" . $colum['impulso1']. "</td></h2>";
    echo "<td><h2>" . $colum['impulso2'] . "</td></h2>";
    echo "<td><h2>" . $colum['impulso3'] . "</td></h2>";
    echo "<td><h2>" . $colum['impulso4'] . "</td></h2>";
    echo "<td><h2>" . $colum['impulso5'] . "</td></h2>";
    echo "</tr>";
}



?>