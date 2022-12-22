<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Aldo Grabić">
    <meta name="description" content="Vježba 7 PHP">
	<meta name="keywords" content="Vježba7, kalkulator, prosjek, ocjena, PHP">
    <link rel="stylesheet" href="style.css">
    <title>Kalkulator</title>
</head>

<body>
<?php
    $unos1 = $_POST['unos1'];
    $unos2 = $_POST['unos2'];
    $prosjek = ($unos1 + $unos2)/2;

    if($unos1 == 1 or $unos2 == 1)
    {
        print ("Krajnja ocjena je negativna.");
    }

    print '
    
    
    <form method="post">
        <div class="kontejner">
            <h1>Izračun prosječne i konačne ocjene</h1>
            <div>
                <label for="unos1">Unesite ocjenu iz prvog kolokvija*</label>
                <input type="number" id="unos1" name="unos1" min= 1 max= 5 required value="'. $unos1 .'">
            </div>
            <div>
                <label for="unos2">Unesite ocjenu iz drugog kolokvija*</label>
                <input type="number" id="unos2" name="unos2" min= 1 max= 5 required value="'. $unos2 .'">
            </div>
            <div>
                <input type="submit" value="Potvrdi">
            </div>
            <div class="rezultati">
                Prosječna ocjena je: <b>'. $prosjek .'</b>.<br>
                Konačna ocjena je: <b>'. round($prosjek) .'</b>.
            </div>
        </div>
        
    </form>';

?>
</body>
</html>