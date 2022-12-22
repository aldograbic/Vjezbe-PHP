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
    <meta name="description" content="Vježba 6 PHP">
	<meta name="keywords" content="Vježba6, kalkulator, PHP">
    <title>Kalkulator</title>
</head>

<body>
<?php
    $unos1 = $_POST['unos1'];
    $unos2 = $_POST['unos2'];
    $operator = $_POST['operator'];
    $rezultat = '';

    if (is_numeric($unos1) && is_numeric($unos2))
    {
        switch ($operator)
        {
            case "+":
                $rezultat = $unos1 + $unos2;
                break;
            
            case "-":
                $rezultat = $unos1 - $unos2;
                break;

            case "×":
                $rezultat = $unos1 * $unos2;
                break;

            case "÷":
                $rezultat = $unos1 / $unos2;
                break;
        }
    }
    print '
    
    <h1>Kalkulator (Switch naredba)</h1>
        <form method="post">
            <div>
		        <label for="broj">Upiši prvi broj*</label>
                <input type="number" name="unos1" id="unos1" required value="'. $unos1 . '">
            </div>
            <div>
                <label for="broj">Upiši drugi broj *</label>
                <input type="number" name="unos2" id="unos2" required value="'. $unos2 . '">
            </div>
            <div>
                Rezultat: ' . $rezultat . '
            </div>
            <input type="submit" name="operator" value="+" class="btn btn-secondary">
            <input type="submit" name="operator" value="-" class="btn btn-secondary">
            <input type="submit" name="operator" value="×" class="btn btn-secondary">
            <input type="submit" name="operator" value="÷" class="btn btn-secondary">
        </form>';


?>
</body>
</html>