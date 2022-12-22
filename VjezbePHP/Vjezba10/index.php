<?php
print '

<form action="" method="post">
    <label for="unos">Ulazni niz:</label>
    <br>
    <input type="text" name="unos">
    <br>
    <br>
    <input type=submit value="ispiši broj riječi">
    
</form>';

if (isset($_POST['unos'])) {
    $brojRijeci = str_word_count($_POST['unos']);
    print ' ulazni niz: ' . $_POST['unos'] . ' sadrži '. $brojRijeci . ' riječi.';
}

?>