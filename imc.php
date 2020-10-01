<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Supermercado</title>
</head>
<body>

        <header>
                    <nav class="navbar navbar-expand-lg navbar-cark bg-dark">
            <a class="navbar-brand" href="index.php">Puntos: </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="calculadora.php">Punto 1 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">punto 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="spring_step.php">punto 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="postobon.php">punto 4</a>
                </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            </nav>

        </header>

        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-4">

                        <form class="mt-5" action="imc.php" method="POST">
                            <h4 class="text-center">Gimnasio Bodytech</h4>
                            <div class="row" >
                                <div class="col">
                                <input type="text" class="form-control" placeholder="Peso" name="peso">
                                </div>
                                <div class="col">
                                <input type="text" class="form-control" placeholder="Altura" name="altura">
                                </div>

                                
                            </div>
                             <button type="submit" class="btn btn-primary mt-5" name="calcular"> Calcular</button>
                        </form>

                        <?php
                            if(isset($_POST["calcular"])):
                        ?>

                        <?php 
                        //echo("Estan Haciendo clic")
                        $peso=$_POST["peso"];
                        $altura=$_POST["altura"];
                        $imc= $peso / $altura * $altura;
                        switch ($imc) 
                        {
                            case ($imc <= 18.5):
                                echo("peso insuficiente");
                                break;
                            case ($imc > 18.5 && $imc < 24.9 ):
                                 echo("Normopeso");
                                break; 
                            case ($imc > 25 && $imc < 26.9 ):
                                    echo("Sobrepeso Grado 1");
                                break; 
                            case ($imc > 27 && $imc < 29.9 ):
                                    echo("Sobrepeso Grado II (preobesidad)");
                                break;
                            case ($imc > 30 && $imc < 34.9 ):
                                    echo("Obesidad Tipo I");
                                break; 
                            case ($imc > 35 && $imc < 39.9 ):
                                    echo("Obesidad Tipo II");
                                break;
                            case ($imc > 40 && $imc < 49.9 ):
                                    echo("Obesidad Tipo III (morbida)");
                                break;
                            case ($imc > 50 ):
                                    echo("Obesidad Tipo IV (extrema)");
                                break;                                                          

                        }
                        echo(" con: ". $imc);
                        

                        ?>

                        <?php

                            endif ?>

                    
                    </div>
                
                </div>
            </div>
        
        </main>
        
        <footer>
        
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>