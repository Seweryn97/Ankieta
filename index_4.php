<?php session_start();

$_SESSION['plec'] = $_POST['plec'];
$_SESSION['wiek']=$_POST['wiek'];
$_SESSION['tryb_pracy']=$_POST['tryb_pracy'];
$_SESSION['stres']=$_POST['stres'];
$_SESSION['zawal']=$_POST['zawal'];
$_SESSION['alkohol']=$_POST['alkohol'];
$_SESSION['papierosy']=$_POST['papierosy'];
$_SESSION['narkotyki']=$_POST['narkotyki'];

//if($_SESSION['alkohol']=='nie' && $_SESSION['papierosy']=='nie' && $_SESSION['narkotyki']=='tak' ){
    "<!DOCTYPE>
<html lang='pl'>
<head>
    <meta charset='UTF-8'/>
    <link rel='stylesheet' href='styl.css' type='text/css' />
    <title>Ankieta</title>
</head>
<body class='body'>
<div class='header'><h1>Ankieta dotycz?ca zawa?u serca</h1></div>
<div id='contener'>
    <div class='cont1'>
        <form action='index_9.php' method='post'>
            <h1>Jak często pijesz alkohol</h1>
                <input type=='radio'  name='ilosc_a' value='codziennie'>codziennie<br>
                <input type='radio'  name='ilosc_a' value='raz_na_tydzie?'>raz na tydzie?<br>
                <input type='radio'  name='ilosc_a' value='raz_na_miesi?c'>raz na miesi?c<br>
                <input type='radio'  name='ilosc_a' value='raz_na_rok'>raz na rok<br>
            <h2>Jak często palisz papierosy</h2>
                <input type='radio'  name='ilosc_p' value='wi�cej ni� 2 paczki '>codziennie<br>
                <input type='radio'  name='ilosc_p' value='mniej ni� 2 paczki'>raz na tydzie?<br>
                <input type='radio'  name='ilosc_p' value='okazyjnie'>raz na miesi?c<br>
            <h2>Jak często bierzesz narkotyki</h2>
                <input type='radio'  name='ilosc_n' value='codziennie '>codziennie<br>
                <input type='radio'  name='ilosc_n' value='raz na tydzień'>raz na tydzie?<br>
                <input type='radio'  name='ilosc_n' value='okazyjnie'>okazyjnie<br>
            <input type='submit' value='dalej'>
    </div>
</div>
</form>
</div>
</body>
</html>";

//}

//if($_SESSION['alkohol']=='tak'  && $_SESSION['papierosy']=='nie' && $_SESSION['narkotyki']=='nie') header("Location:index_8.php") ;
?>
