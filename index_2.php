<?php
session_start();

foreach ($_POST as $key => $value)
{
    $_SESSION[$key] = $value;
}


/*$_SESSION['plec'] = !empty($_POST['plec']) ? $_POST['plec']  : $_SESSION['plec'];
        if(!empty($_POST['plec'])){
            //$_SESSION['plec']="brak";
            $_SESSION['plec']=$_POST['plec'];
            }
        //else $_SESSION['plec']=$_POST['plec'];

        if(!empty($_POST['wiek'])){
            //$_SESSION['wiek']="brak";
            $_SESSION['wiek']=$_POST['wiek'] ;
            }

        if(!empty($_POST['tryb_pracy'])){
            $_SESSION['tryb_pracy']="brak";
        }
        else $_SESSION['tryb_pracy']=$_POST['tryb_pracy'];

        if(empty($_POST['stres'])){
            $_SESSION['stres']="brak";
            }
        else $_SESSION['stres']=$_POST['stres'];

        if(empty($_POST['zawal'])){
            $_SESSION['zawal']="brak";
            }
        else $_SESSION['zawal']=$_POST['zawal'];

        if(empty($_POST['zawal_m'])){
            $_SESSION['zawal_m']="brak";
        }
        else $_SESSION ['zawal_m']=$_POST['zawal_m'];

        if(empty($_POST['czas'])){
            $_SESSION['czas']="brak";
            }
        else $_SESSION ['czas']=$_POST['czas'];

        if(empty($_POST['rehabilitacja'])){
            $_SESSION['rehabilitacja']="brak";
            }
        else $_SESSION ['rehabilitacja']=$_POST['rehabilitacja'];

        if(empty($_POST['aktywność'])){
            $_SESSION['aktywność']="brak";
            }
        else $_SESSION ['aktywność']=$_POST['aktywność'];*/

        if($_SESSION['zawal_m']=="tak" && $_SESSION['index3visited'] != true) {
            $_SESSION['index3visited'] = true;
            header("Location:index_3.php");
        }
        //if(empty($_SESSION['cza']))

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
