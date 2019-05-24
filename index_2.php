<?php
session_start();
        $_SESSION['plec'] = $_POST['plec'];
        $_SESSION['wiek']=$_POST['wiek'];
        $_SESSION['tryb_pracy']=$_POST['tryb_pracy'];
        $_SESSION['stres']=$_POST['stres'];
        $_SESSION['zawal']=$_POST['zawal'];
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
            <h1>Czy pijesz alkohol</h1>
            <input type="radio"  name="alkohol" value="tak">tak<br>
            <input type="radio"  name="alkohol" value="nie">nie<br>
            <h1>Czy palisz papierosy</h1>
            <input type="radio"  name="papierosy" value="tak">tak<br>
            <input type="radio"  name="papierosy" value="nie">nie<br>
            <h1>Czy bierzesz narkotyki</h1>
            <input type="radio"  name="narkotyki" value="tak">tak<br>
            <input type="radio"  name="narkotyki" value="nie">nie<br>
            <input type="submit" value="dalej">
    </div>
</div>
</form>
</div>
</body>
</html>