<?php
$title = 'Da Vincijev kod';
$link  = 'https://hr.wikipedia.org/wiki/Da_Vincijev_kod';

print '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vježba 3 PHP">
	<meta name="keywords" content="Vježba3, DaVinci, PHP">
    <title>Da Vincijev kod</title>
</head>
<body>
    <h1>'. $title .'</h1>
    <p>Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna. <a href="'. $link .'" target="_blank" >Wikipedia</a></p>
</body>
</html>
'
?>