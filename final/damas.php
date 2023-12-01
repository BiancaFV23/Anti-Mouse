<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus Datos:</title>
    <style type="text/css">
      table{
        font-size: 20px;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        border: 3px solid fae767;
        padding: 100px 50px;
        margin-top: 50px;
        border-radius: 20px;
        background-color: #F06292 ;
        align: center;
      }
      th, h1 {
        background-color:#F1948A ;
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
        background-image: url('img/antirosa.png');
      }
    </style>
</head>
<body>
<a href="impulso.html"><img src="img/continuaro.png"></a>
<a class="=inicio" href="index.html"><img align="right" src="img/inicio.png"></a>   
<body>

<?php

$user = "root";
$pass = "";
$host = "localhost";


$connection = mysqli_connect($host, $user, $pass);
if(($_POST)==true){
  $dama1 = $_POST["dama1"] ;
  $dama2 = $_POST["dama2"] ;
  $dama3 = $_POST["dama3"] ;
  $dama4 = $_POST["dama4"] ;
}else{

  $dama1="";
  $dama2="";
  $dama3="";
  $dama4="";
}



if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>Bienvenido</h3></b>" ;
        }
       
        $datab = "damas";
        
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Datos Registrados:</h3>";
        }
        if(!($dama1=="")){
        
        $instruccion_SQL = "INSERT INTO damas (dama1, dama2, dama3,dama4)
                             VALUES ('$dama1','$dama2','$dama3','$dama4')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);
        }
        
        $consulta = "SELECT * FROM damas";
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>Semana</th></h1>";
echo "<th><h1>Dama 1</th></h1>";
echo "<th><h1>Dama 2</th></h1>";
echo "<th><h1>Dama 3</th></h1>";
echo "<th><h1>Dama 4</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['semana']. "</td></h2>";
    echo "<td><h2>" . $colum['dama1']. "</td></h2>";
    echo "<td><h2>" . $colum['dama2'] . "</td></h2>";
    echo "<td><h2>" . $colum['dama3'] . "</td></h2>";
    echo "<td><h2>" . $colum['dama4'] . "</td></h2>";
    echo "</tr>";
}


?>


