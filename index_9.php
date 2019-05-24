<?php session_start();

   /* $_SESSION['plec'] = $_POST['plec'];
    $_SESSION['wiek']=$_POST['wiek'];
    $_SESSION['tryb_pracy']=$_POST['tryb_pracy'];
    $_SESSION['stres']=$_POST['stres'];
    $_SESSION['zawal']=$_POST['zawal'];
    $_SESSION['alkohol']=$_POST['alkohol'];
    $_SESSION['papierosy']=$_POST['papierosy'];
    $_SESSION['narkotyki']=$_POST['narkotyki'];
    $_SESSION['ilosc_a']=$_POST['ilosc_a'];
    $_SESSION['ilosc_p']=$_POST['ilosc_p'];
    $_SESSION['ilosc_n']=$_POST['ilosc_n'];*/



?>
<!DOCTYPE>
<html lang="pl">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="styl.css" type="text/css" />
    <title>Ankieta</title>
</head>
<body class="body">
<div class="header"><h1>Ankieta dotycząca zawału serca</h1></div>
<div id="contener">
    <div class="cont1">
        <form action="survey.php" method="post">
            <h1>Jak często bierzesz narkotyki</h1>
                <input type="radio"  name="ilosc_n" value="codziennie ">codziennie<br>
                <input type="radio"  name="ilosc_n" value="raz na tydzie�">raz na tydzie?<br>
                <input type="radio"  name="ilosc_n" value="okazyjnie">okazyjnie<br>
            <input type="submit" value="dalej">
    </div>
</div>
</form>
</div>
</body>
</html>