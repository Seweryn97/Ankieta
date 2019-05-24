<?php session_start();

    $_SESSION['plec'] = $_POST['plec'];
    $_SESSION['wiek']=$_POST['wiek'];
    $_SESSION['tryb_pracy']=$_POST['tryb_pracy'];
    $_SESSION['stres']=$_POST['stres'];
    $_SESSION['zawal']=$_POST['zawal'];
    $_SESSION['alkohol']=$_POST['alkohol'];
    $_SESSION['papierosy']=$_POST['papierosy'];
    $_SESSION['narkotyki']=$_POST['narkotyki'];
    $_SESSION['ilosc_a']=$_POST['ilosc_a'];
    $_SESSION['ilosc_p']=$_POST['ilosc_p'];
    $_SESSION['ilosc_n']=$_POST['ilosc_n'];


?>
<!DOCTYPE>
<html lang="pl">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="styl.css" type="text/css" />
    <title>Ankieta</title>
</head>
<body class="body">
<div class="header"><h1>Ankieta dotycz?ca zawa?u serca</h1></div>
<div id="contener">
    <div class="cont1">
        <form action="index_6.php" method="post">
            <h1>Jak cz�sto pijesz alkohol</h1>
                <input type="radio"  name="ilosc_a" value="codziennie">codziennie<br>
                <input type="radio"  name="ilosc_a" value="raz_na_tydzie?">raz na tydzie?<br>
                <input type="radio"  name="ilosc_a" value="raz_na_miesi?c">raz na miesi?c<br>
                <input type="radio"  name="ilosc_a" value="raz_na_rok">raz na rok<br>
            <h2>Jak bierzesz narkotyki</h2>
                <input type="radio"  name="ilosc_n" value="codziennie ">codziennie<br>
                <input type="radio"  name="ilosc_p" value="raz na tydzie�">raz na tydzie?<br>
                <input type="radio"  name="ilosc_p" value="okazyjnie">okazyjnie<br>
    </div>
</div>
</form>
</div>
</body>
</html>