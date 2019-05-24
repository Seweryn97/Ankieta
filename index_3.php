<?php session_start();

    $_SESSION['plec'] = $_POST['plec'];
    $_SESSION['wiek']=$_POST['wiek'];
    $_SESSION['tryb_pracy']=$_POST['tryb_pracy'];
    $_SESSION['stres']=$_POST['stres'];
    $_SESSION['zawal']=$_POST['zawal'];
    $_SESSION['alkohol']=$_POST['alkohol'];
    $_SESSION['papierosy']=$_POST['papierosy'];
    $_SESSION['narkotyki']=$_POST['narkotyki'];
    
    header("Location:survey.php");
?>
<!DOCTYPE>
<html lang="pl">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="styl.css" type="text/css" />
    <title>Ankieta</title>
</head>
<body class="body">
<div class="header"><h1>Ankieta dotycz�ca zawa�u serca</h1></div>
<div id="contener">
    <div class="cont1">
        <form action="index_4.php" method="post">
            <h1>Jak często pijesz alkohol</h1>
                <input type="radio"  name="ilosc_a" value="codziennie">codziennie<br>
                <input type="radio"  name="ilosc_a" value="raz_na_tydzie�">raz na tydzie�<br>
                <input type="radio"  name="ilosc_a" value="raz_na_miesi�c">raz na miesi�c<br>
                <input type="radio"  name="ilosc_a" value="raz_na_rok">raz na rok<br>
            <h1>Jak często palisz papierosy</h1>
                <input type="radio"  name="ilosc_p" value="więcej niż 2 paczki ">codziennie<br>
                <input type="radio"  name="ilosc_p" value="mniej niż 2 paczki">raz na tydzie�<br>
                <input type="radio"  name="ilosc_p" value="okazyjnie">raz na miesi�c<br>
    </div>
</div>
</form>
</div>
</body>
</html>