<?php
$Num = $_GET["Num"];
$Respuesta = sqrt($Num);

echo "<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>♡Home♡</title>

    <link rel='stylesheet' href='Style.css'>
</head>

<body>
    <div class='fondo'>
        <div class='menu'>
            <img class='imagen' src='img/Me.png' width='150' height='150'><br>
            <h2 class='textoimagen'> Yadhira Escudero</h2>
        </div>
        <div class='contenido'>
            <div class='info'>
                <h1 class='Text'>¡Bienvenidos a mi página web!</h1>

                <br><a class='Link' href='http://localhost/Sitio%20Web/Inicio.html'>Home</a>
                <a class='Link' href='http://localhost/Sitio%20Web/AntecedentesLaborales.html'>Antecedentes laborales</a>
                <a class='Link' href='http://localhost/Sitio%20Web/Comentarios.html'>Comentarios</a>
                <a class='Link' href='http://localhost/Sitio%20Web/Archivos.html'>Archivos</a>
                <a class='Link' href='enlacepagina.html'>Ayuda</a><br><br><br>";
            
echo "<center><h1> La raíz es: " .$Respuesta. "</h1></center>";

?>