<!DOCTYPE html>
<html>
<head>
<title>Testas</title>
</head>
 
<body>

<form action="" method="GET">
    Pinigų suma keitimui:
    <input type="number" name="numb" min="0">
    <input type="submit" value="Keisti">
</form><br>

<form action="" method="POST">
    <input type='hidden' name='test' value='test'>
    <input type='submit' value="Automatizuotas testas">
</form>
<hr>
<?php

 #### Minimalaus kupiuru skaiciaus ieskojimas per forma ####
    if(isset($_GET['numb'])){
        
        $kupiuros = 0;
        $suma = $_GET['numb'];

        while($suma > 0){
            
            switch($suma){
                case $suma >= 500:
                    $suma = $suma - 500;
                    $kupiuros++;
                    break;

                case ($suma >= 100 && $suma < 500);
                    $suma = $suma - 100;
                    $kupiuros++;
                    break;

                case ($suma >= 50 && $suma < 100);
                    $suma = $suma - 50;
                    $kupiuros++;
                    break;

                case ($suma >= 20 && $suma < 50);
                    $suma = $suma - 20;
                    $kupiuros++;
                    break;

                case ($suma >= 10 && $suma < 20);
                    $suma = $suma - 10;
                    $kupiuros++;
                    break;

                case ($suma >= 5 && $suma < 10);
                    $suma = $suma - 5;
                    $kupiuros++;
                    break;

                case ($suma >= 1 && $suma < 5);
                    $suma = $suma - 1;
                    $kupiuros++;
                    break;
            }    
        }

        echo "Minimalus kupiūrų skaičius: ".$kupiuros."<br>";

    }
 

    #### Automatizuotas testavimas ####
    if(isset($_POST['test'])){

        for($x=0; $x < 50; $x++){
            $suma = rand(1, 5000);
            $pradine_suma = $suma;
            $kupiuros = 0;

            while($suma > 0){
                    
                switch($suma){
                    case $suma >= 500:
                        $suma = $suma - 500;
                        $kupiuros++;
                        break;

                    case ($suma >= 100 && $suma < 500);
                        $suma = $suma - 100;
                        $kupiuros++;
                        break;

                    case ($suma >= 50 && $suma < 100);
                        $suma = $suma - 50;
                        $kupiuros++;
                        break;

                    case ($suma >= 20 && $suma < 50);
                        $suma = $suma - 20;
                        $kupiuros++;
                        break;

                    case ($suma >= 10 && $suma < 20);
                        $suma = $suma - 10;
                        $kupiuros++;
                        break;

                    case ($suma >= 5 && $suma < 10);
                        $suma = $suma - 5;
                        $kupiuros++;
                        break;

                    case ($suma >= 1 && $suma < 5);
                        $suma = $suma - 1;
                        $kupiuros++;
                        break;
                }    
            }

            echo "Suma: ".$pradine_suma." ";
            echo "Minimalus kupiūrų skaičius: ".$kupiuros."<br>";
        }
    }
?>
 
</body>
 
</html>