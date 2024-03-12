<?php
$localhost="localhost";
$user="root";
$passw="";
$bancodedados ="caddstro";

$conecta = mysqli_connect($localhost,$user,$passw,$bancodedados);

$sql= mysqli_query($conecta,"SELECT * FROM user");
echo var_dump($sql);
