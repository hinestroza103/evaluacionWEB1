<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<center>
            <form class="mt-5" action="EJERCICIO4.php" method="POST">
                <h4>Salario postobon</h4>
                <br>
                <br>
                    <div class="row">
                 <div class="col">
                            <input type="text" class="form-control" placeholder="Introduzca las horas trabajadas" name="horas">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Introduzca las horas Extras" name="horasextras">
                        </div>
                       <br>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5" name="botonCalcular1">Calcular</button>
                   </form>
            </center>
</body>
</html>
<?php
    if(isset($_POST["botonCalcular1"])){
    $horasextras=$_POST["horasextras"];
    $horas=$_POST["horas"];
    $calcularS;

    $calcularS=$horas * 20000;
    echo("El sueldo semanal es: ".$calcularS);

    if ($horasextras>=1){
      $calcularS=$horas * 20000 + (25000*$horasextras);
        echo("<br>");
       echo("<br>");
       echo ("El salario con horas extras incluidas es : ".$calcularS);
  
    }
    }
?>