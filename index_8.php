<?php session_start();
   /* $_SESSION['alkohol']=$_POST['alkohol'];
    $_SESSION['papierosy']=$_POST['papierosy'];
    $_SESSION['narkotyki']=$_POST['narkotyki'];
    if($_SESSION['alkohol']=='nie') header("Location:survey.php") ;*/

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
        <form action="survey.php" method="post">
            <h1>Jak często pijesz alkohol</h1>
                <input type="radio"  name="ilosc_a" value="codziennie">codziennie<br>
                <input type="radio"  name="ilosc_a" value="raz_na_tydzie?">raz na tydzie?<br>
                <input type="radio"  name="ilosc_a" value="raz_na_miesi?c">raz na miesi?c<br>
                <input type="radio"  name="ilosc_a" value="raz_na_rok">raz na rok<br>
            <input type="submit" value="dalej">

    </div>
</div>
</form>
</div>
</body>
</html>