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
    <meta name="description" content="Vježba 5 PHP">
	<meta name="keywords" content="Vježba5, pogodi, broj, PHP">
    <title>Pogodi broj</title>
</head>
<body>
<?php
    $random_broj = rand(1,9);
    print '
    <h1>Igra (pogodi broj)</h1>
    
    <form method="post">
        <div>
            <label for="broj">Upišite jedan broj od jedan do devet*</label>
            <input type="number" name="broj" id="broj" min=1 max=9 value="'. $broj .'" required>
        </div>
        
        <div>';
        if (isset($_POST['broj'])) {
            if ($_POST['broj'] == $random_broj) {
                print 'Pogodak, probaj ponovo! ';
            }
            else if($_POST['broj'] != $random_broj) {
                print 'Krivo, probaj ponovo! ';
            }
            print '<p">Zamišljeni broj je '.$random_broj.'.</p>';
        }
    
        print '
        </div>
    </form>';
   
?>
</body>
</html>
