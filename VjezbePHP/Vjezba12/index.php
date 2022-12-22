<?php
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	
	error_reporting(E_ALL);

    if ($_GET['action'] == 1) {
	    setcookie('news1', 'Vijest 1', time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie('url1', 'index.php?menu=2&action='.$_GET['action'], time() + (86400 * 30), "/"); // 86400 = 1 day
    }
    if ($_GET['action'] == 2) {
	    setcookie('news2', 'Vijest 2', time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie('url2', 'index.php?menu=2&action='.$_GET['action'], time() + (86400 * 30), "/"); // 86400 = 1 day
    }
    if ($_GET['action'] == 3) {
	    setcookie('news3', 'Vijest 3', time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie('url3', 'index.php?menu=2&action='.$_GET['action'], time() + (86400 * 30), "/"); // 86400 = 1 day
    }
    if ($_GET['action'] == 4) {
	    setcookie('news4', 'Vijest 4', time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie('url4', 'index.php?menu=2&action='.$_GET['action'], time() + (86400 * 30), "/"); // 86400 = 1 day
    }
	
?>
<!DOCTYPE html>
<html lang="hr">
  <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Aldo Grabić">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	    <title>Test</title>
  </head>
  <style>
	body { 
        margin: 0 auto;
        width: 100%;
        min-height: 100%;
        font-family: Arial, Helvetica;
    }
    footer {
        position: absolute;
        width: 100%;
        bottom: 0;
        height: 2vh;
        color: white;
        background-color: grey;
        text-align: center;
        justify-content: center;
    }
    h1, p {
        font-size: 18px;
        margin-left: 10px;
    }
    
    div {
        border: 1px solid black;
        margin: 10px;
        width: 15vw;
        float: left;
        text-align: center;
        
    }
    li {
        list-style-type: none;
    }
  </style>
<body>
    <?php
    print '
    <nav id="1">
        <ul>
            <li><a href="index.php?menu=1">O nama</a></li>
            <li><a href="index.php?menu=2">Vijesti</a></li>
            <li><a href="index.php?menu=3">Kontakt</a></li>
            <li><a href="index.php?menu=4">Galerija</a></li>
        </ul>
    </nav>
    <main>';
   
    if ($_GET['menu'] == 1) {
        print '<h1>O nama</h1>
        <p>Nešto o nama</p>';
    }
    else if ($_GET['menu'] == 2) {
        print '<h1>Vijesti</h1>
        <nav id="2">
            <ul>
                <li><a href="index.php?menu=' . $_GET['menu'] . '&action=1">Vijest 1</a></li>
                <li><a href="index.php?menu=' . $_GET['menu'] . '&action=2">Vijest 2</a></li>
                <li><a href="index.php?menu=' . $_GET['menu'] . '&action=3">Vijest 3</a></li>
                <li><a href="index.php?menu=' . $_GET['menu'] . '&action=4">Vijest 4</a></li>
            </ul>
        </nav>
        <section>
            <div>
            <p>Nešto o vijestima</p>';
                if ($_GET['action'] == 1) {
                    Print '<p>Prva vijesti i nešto o tome</p>';
                }
                else if ($_GET['action'] == 2) {
                    Print '<p>Druga vijesti i nešto o tome</p>';
                }
                else if ($_GET['action'] == 3) {
                    Print '<p>Treća vijesti i nešto o tome</p>';
                }
                else if ($_GET['action'] == 4) {
                    Print '<p>Četvrta vijesti i nešto o tome</p>';
                }
            print '
            </div>

            <div>
            <p>Vratite se na:</p>
            <ul>';
            if (!empty($_COOKIE['news1'])) {
                 print '<li><a href="'.$_COOKIE['url1'].'">'.$_COOKIE['news1'].'</a></li>';
            }
            if (!empty($_COOKIE['news2'])) {
                print '<li><a href="'.$_COOKIE['url2'].'">'.$_COOKIE['news2'].'</a></li>';
            }
            if (!empty($_COOKIE['news3'])) {
                 print '<li><a href="'.$_COOKIE['url3'].'">'.$_COOKIE['news3'].'</a></li>';
            }
            if (!empty($_COOKIE['news4'])) {
                print '<li><a href="'.$_COOKIE['url4'].'">'.$_COOKIE['news4'].'</a></li>';
            }
                
            
            print '</ul></div>
            
        </section>
        ';
    }
    else if ($_GET['menu'] == 3) {
        print '<h1>Kontakt</h1>
        <p>Nešto o kontaktu</p>';
    }
    else if ($_GET['menu'] == 4) {
        print '<h1>Galerija</h1>
        <p>Nešto o galeriji</p>';
    }
    print '
    </main>
    <footer>Copyright&copy; Aldo Grabić</footer>';
 
    ?>
</body>
</html>