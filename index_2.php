<?php
session_start();

    foreach ($_POST as $key => $value)          //Zapełnienie tablicy session warościami z tablicy post
    {
        $_SESSION[$key] = $value;
    }

    if($_SESSION['zawal_m']=="tak" && $_SESSION['index3visited'] != true) {           //przekierowanie do strony z pytaniami o zawał zw zależności od odpowiedzi
            $_SESSION['index3visited'] = true;
            header("Location:index_3.php");
        }

?>
<!DOCTYPE>
<html lang="pl">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="styl.css" type="text/css" />
    <title>Ankieta</title>
</head>
<body class="body">
<div class="header"><h1>Ankieta dotycząca chorób związanych z sercem</h1></div>
<div id="contener">
    <div class="cont1">
        <form action="index_4.php" method="post">
            <divh1 class="contener">Czy pijesz alkohol:</divh1>
            <input type="radio" id = "radio1" name="alkohol" value="tak"/>
            <label for="radio1">Tak</label>
            <input type="radio" id = "radio2" name="alkohol" value="nie"/>
            <label for="radio2">Nie</label>
            </br>
            <divh1 class="contener">Czy palisz papierosy:</divh1>
            <input type="radio" id="radio3"  name="papierosy" value="tak"/>
            <label for="radio3">Tak</label>
            <input type="radio" id="radio4" name="papierosy" value="nie"/>
            <label for="radio4">Nie</label>
            </br
            <divh1 class="contener">Czy bierzesz narkotyki:</divh1>
            <input type="radio" id="radio5" name="narkotyki" value="tak"/>
            <label for="radio5">Tak</label>
            <input type="radio" id="radio6" name="narkotyki" value="nie"/>
            <label for="radio6">Nie</label>
            </br>
            <button class="btn-slide-line">
                <span>Dalej</span>
            </button>
        </form>
    </div>
</div>
</div>
</body>
</html>
