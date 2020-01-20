<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>PHP training</title>
    </head>
    <body>

    
           
        <!-- Creare una variabile che contiene del testo. Leggere dal parametro in GET una badword da cercare all'interno del testo e censurarla, ossia visualizzare a schermo un paragrafo con all'interno il testo in cui le occorrenze della badword sono sostituite da tre "*" -->
                    <?php 

                    $text = "La tragedia greca, rispetto a tutti gli altri generi d'arte imparentati con essa, è finita per motivi diversi: la sua fine è stata tragica, là dove tutti quegli altri generi sono venuti meno nella morte più bella.";
                   

                    $badword = $_GET["tutti"];
                    $replaceText = "***";
              
                    $newFormat = str_replace($badword, $replaceText, $text);
                    echo $newFormat;
                    
            
    
                    ?>
         

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="main.js" charset="utf-8"></script>
    </body>
</html>
