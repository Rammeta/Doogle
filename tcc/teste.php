<?php
//iniciando a conexão com o banco de dados 
$cx = mysqli_connect("127.0.0.1", "root", "");

$db = mysqli_select_db($cx, "test");

$sql = mysqli_query($cx, "SELECT * FROM animal") or die(mysqli_error($cx));

while($aux = mysqli_fetch_assoc($sql)) { 
  echo $aux["nome"];
  echo ", " .$aux["id"]."<br/>"; 
}
?> 
