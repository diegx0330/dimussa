<?php
    include_once 'encuesta/encuesta.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Encuesta</title>
</head>
<body>
    <?php
        $survey = new Survey();
        $showResults = false;
        $option = '';
        if(isset($_POST['lenguaje'])){
            $showResults = true;
            
            $survey->setOptionSelected($_POST['lenguaje']);
            $survey->vote();
        }
    ?>
    <form action="#" method="POST">
        <h2>Como te llamas?</h2>
        <input type="radio" name="lenguaje" id="" value="">rodolfo <br>
        <input type="radio" name="lenguaje" id="" value="">antonio <br>
        <input type="radio" name="lenguaje" id="" value="">patricio<br>
        <input type="submit" value="votar">
        <?php
            if($showResults){
                $queryLanguages = $survey->showResults();
                echo "<h2>" . $survey->getTotalVotes() . " votos totales</h2>";
                
                foreach ($queryLanguages as $lenguaje) {
                    $porcentaje = $survey->getPercentageVotes($lenguaje['votos']);
                    include 'vistas/vista-resultados.php';
                }
            }else{
                include 'respuestas/respuestas.php';
            }
        ?>
        
    </form>
</body>
</html>