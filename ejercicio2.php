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
            <form class="mt-5" action="EJERCICIO2.php" method="POST">
                <h4> BODYTECH</h4>
                <br>
                <br>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder=" Peso usuario" name="Peso">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder=" Altura usuario" name="Altura">
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
    $peso=$_POST["Peso"];
    $altura=$_POST["Altura"];
    $imc;

    $imc=$peso/($altura*$altura);
    if($imc<18.5){
        echo ("Su IMC es Peso Insuficiente:".$imc);
    }
    elseif ($imc>=18.5 and $imc<=24.9)
    {
        echo ("Su IMC es Peso Normal:".$imc);
    }
    elseif ($imc>=25 and $imc<=26.9)
    {
        echo ("Su IMC es Sobrepeso Grado 1".$imc);
    }
    elseif ($imc>=27 and $imc<=29.9)
    {
        echo ("Su IMC es Sobrepeso Grado II".$imc);
    }
    elseif ($imc>=30 and $imc<=34.9)
    {
        echo ("Su IMC es Obesidad tipo I".$imc);
    }
    elseif ($imc>=35 and $imc<=39.9)
    {
        echo ("Su IMC es Obesidad tipo II".$imc);
    }
    elseif ($imc>=40 and $imc<=49.9)
    {
        echo ("Su IMC es Obesidad tipo III".$imc);
    }
    elseif ($imc>=50)
    {
        echo ("Su IMC es Obesidad tipo Iv".$imc);
    }
    
    }
?>