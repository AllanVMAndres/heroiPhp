<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <form method='post'>
                <label>Universo:</label>
                <input type="text" name="universo" size="50" placeholder="Marvel ou Dc" id="inp">
                <br><br>
                <b><label>Marvel</label></b>
                <br>
                <label>Heroi:</label>
                <input type="text" name="heroi-m" size="50" placeholder="Ciclope, Estigma, Hulk, Thor ou Vampira" id="inp">
                <br><br>
                <b><label>DC</label></b>
                <br>
                <label>Heroi:</td>
                <input type="text" name="heroi-d" size="50" placeholder="Aquaman, Batman, Ciborgue, Flash ou Superman" id="inp">
                <br><br>
                <input type="submit" value="Escolher">
    </form>
    <?php
    $uni = $_POST['universo'];

    if ($uni == 'Marvel' || $uni == "marvel" || $uni == "MARVEL") {
        $heroi = $_POST['heroi-m'];
        if ($heroi == 'Ciclope' || $heroi == 'ciclope' || $heroi == 'CICLOPE') {
            echo "<br><br><h3>".$heroi."</h3><img src='img/marvel-ciclope.jpg'>";
        }
        else if($heroi == 'Estigma' || $heroi == 'estigma' || $heroi == 'ESTIGMA'){
            echo "<br><br><h3>".$heroi."</h3><img src='img/marvel-estigma.jpg'>";
        }
        else if($heroi == 'Hulk' || $heroi == 'hulk' || $heroi == 'HULK'){
            echo "<br><br><h3>".$heroi."</h3><img src='img/marvel-hulk.jpg'>";
        }
        else if($heroi == 'Thor' || $heroi == 'thor' || $heroi == 'THOR'){
            echo "<br><br><h3>".$heroi."</h3><img src='img/marvel-thor.jpg'>";
        }
        else if($heroi == 'Vampira' || $heroi == 'vampira' || $heroi == 'VAMPIRA'){
            echo "<br><br><h3>".$heroi."</h3><img src='img/marvel-vampira.jpg'>";
        }
        else{
            echo "<br><br>Inválido";
        }
    }
    else if($uni == 'Dc' || $uni == 'dc' || $uni == 'DC'){
        $heroi = $_POST['heroi-d'];

        if($heroi == 'Aquaman' || $heroi == 'aquaman' || $heroi == 'AQUAMAN'){
            echo "<br><br><h3>".$heroi."</h3><img src='img/dc-aquaman.jpg'>";
        }
        else if($heroi == 'Batman' || $heroi == 'batman' || $heroi == 'BATMAN'){
            echo "<br><br><h3>".$heroi."</h3><img src='img/dc-batman.jpg'>";
        }
        else if($heroi == 'Ciborgue' || $heroi == 'ciborgue' || $heroi == 'CIBORGUE'){
            echo "<br><br><h3>".$heroi."</h3><img src='img/dc-ciborgue.jpg'>";
        }
        else if($heroi == 'Flash' || $heroi == 'flash' || $heroi == 'FLASH'){
            echo "<br><br><h3>".$heroi."</h3><img src='img/dc-flash.jpg'>";
        }
        else if($heroi == 'Superman' || $heroi == 'superman' || $heroi == 'SUPERMAN'){
            echo "<br><br><h3>".$heroi."</h3><img src='img/dc-superman.jpg'>";
        }
        else{
            echo "<br><br>Inválido";
        }
    }
    else{
        echo "<br><br>Inválido";
    }
    ?>
</body>

</html>