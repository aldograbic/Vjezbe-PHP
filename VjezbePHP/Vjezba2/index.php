<?php
$title = 'Da Vincijev kod';
$link = 'https://hr.wikipedia.org/wiki/Da_Vincijev_kod';

print '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vježba 1 PHP">
	<meta name="keywords" content="Vježba1, DaVinci, PHP">
    <title>Da Vincijev kod</title>
</head>
<body>
    <h1>';
    print $title;
    print '</h1>
    <p>Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna.
    <a href="';
    print $link;
    print '" target="_blank">';
    print "Wikipedija";
    print '</a></p>
</body>
</html>
'
?>