<?php
    $canzone = "Via del Campo, c'è una puttana

    Gli occhi grandi color di foglia

    Se di amarla ti vien la voglia

    Basta prenderla per la mano" ;

    $parolaCensurata = $_GET["censura"];
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words GC</title>
</head>
<body>
    <h1>Via del campo</h1>
    <h3>Fabrizio De Andrè</h3>

    <p>
        <?php echo $canzone; ?>
    </p>
    <h6>Questa canzone ha
     <?php echo strlen($canzone); ?>
     caratteri.
    </h6>

    <!-- LATO UTENTE -->
    <form action="" method="GET">
        <input type="text" name="censura" placeholder="Inserisci la parola che vorresti censurare.." size="50">
        <button>
            Invio
        </button>
    </form>

    <h4>La canzone censurata:</h4>
    <p>
        <?php echo $canzoneCensurata= str_replace("$parolaCensurata", "***", $canzone) ?>
    </p>
    <h6>
        la canzone censurata è lunga
        <?php echo strlen($canzoneCensurata); ?>
        caratteri.
    </h6>


</body>
</html>

