<?php
$localhost="localhost";
$user="root"
$passw="";
$bancodedados="cddstro";

//orientada a objecto
$pdo=new PDO("MSQL:dbname=".$bancodedados.";host=".$localhost,$user,$passw);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$SQL=$pdo->query("SELECT*FROM user");
$sql->execute();

echo $sql->rowcount();