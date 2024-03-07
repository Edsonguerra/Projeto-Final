<?php
$localhost="localhost";
$user="root";
$passw="";
$bancodedados ="caddstro";

$conecta = mysqli_connect($localhost,$user,$passw,$banco);
$sql= mysqli_query($conecta"SELECT *FROM user");
echo mysqli_num_rows($sql);