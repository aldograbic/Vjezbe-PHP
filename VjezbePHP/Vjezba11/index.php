<?php
function prostBroj($broj)
{
    if ($broj == 1)
        return false;
        
        for ($i = 2; $i <= $broj/2; $i++)
        {
            if ($broj % $i == 0)
            {
                return false;
            }
        }
    return true;
}

print '

<form action="" method="POST">
    <label for="unos">Unesite broj: </label>
    <input type="number" name="unos">
    <br>
    <br>
    <input type="submit" value="Provjerite je li broj prost">
</form>
';

if (isset($_POST['unos'])) {
    $prosti = prostBroj($_POST['unos']);

    if ($prosti == true)
    {
    echo "Broj je prost. <br>";
    }
    else
    {
    echo "Broj nije prost. <br>";
    }
}

for($i = 1; $i <= 100; $i++) {
	$prosti = prostBroj($i);
	if ($prosti == true) {
		echo $i." ";
	}	
}  

?>