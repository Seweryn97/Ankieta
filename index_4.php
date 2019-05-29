<?php session_start();

$_SESSION['alkohol']=$_POST['alkohol'];
$_SESSION['papierosy']=$_POST['papierosy'];
$_SESSION['narkotyki']=$_POST['narkotyki'];

if($_SESSION['alkohol']=='tak' && $_SESSION['papierosy']=='tak' && $_SESSION['narkotyki']=='tak' ) {
    echo "<!DOCTYPE>
<html lang='pl'>
<head>
    <meta charset='UTF-8'/>
    <link rel='stylesheet' href='styl.css' type='text/css' />
    <title>Ankieta</title>
</head>
<body class='body'>
<div class='header'><h1>Ankieta dotycząca chrór związanych z sercem</h1></div>
<div id='contener'>
    <div class='cont1'>
        <form action='survey.php' method='post'>
             <divh1 class=\"contener\">Jak często pijesz alkohol:</divh1>
               <input type=\"radio\" id=\"radio1\"  name=\"ilosc_a\" value=\"codziennie\"/>
               <label for=\"radio1\">Codziennie</label>
               <input type=\"radio\" id=\"radio2\" name=\"ilosc_a\" value=\"raz_na_tydzien_i_czesciej\"/>
               <label for=\"radio2\">Raz na tydzień i częściej</label>
               <input type=\"radio\" id=\"radio3\"  name=\"ilosc_a\" value=\"raz_na_miesiac_i_czesciej\"/>
               <label for=\"radio3\">Raz na miesiąc i częściej</label>
               <input type=\"radio\" id=\"radio4\" name=\"ilosc_a\" value=\"raz_na_rok_i_czesciej\"/>
               <label for=\"radio4\">Raz na rok i częściej</label>
               </br>
            <divh1 class=\"contener\">Jak często palisz papierosy:</divh1>
               <input type=\"radio\" id=\"radio5\" name=\"ilosc_p\" value=\"1 paczka na dzien i wiecej \"/>
               <label for=\"radio5\">Jedną paczkę i więcej</label>
               <input type=\"radio\" id=\"radio6\"  name=\"ilosc_p\" value=\"1 paczka na tydzien i wiecej\"/>
               <label for=\"radio6\">Jedną paczkę na tydzień i więcej</label>
               <input type=\"radio\" id=\"radio7\" name=\"ilosc_p\" value=\"1 paczka na miesiac i wiecej\"/>
               <label for=\"radio7\">Jedną paczkę na miesiąc i więcej</label>
               </br>
            <divh1 class=\"contener\">Jak często bierzesz narkotyki:</divh1>
                <input type=\"radio\" id=\"radio8\"  name=\"ilosc_n\" value=\"codziennie \"/>
                <label for=\"radio8\">Codziennie</label>
                <input type=\"radio\" id=\"radio9\"  name=\"ilosc_n\" value=\"raz na tydzien\"/>
                <label for=\"radio9\">Raz na tydzień</label>
                <input type=\"radio\" id=\"radio10\"  name=\"ilosc_n\" value=\"okazyjnie\"/>
                <label for=\"radio10\">Okazyjnie</label>
               </br>
            <button class=\"btn-slide-line\">
                <span>Dalej</span>
            </button>
    </div>
</div>
</form>
</div>
</body>
</html>";
}

else if($_SESSION['alkohol']=='nie' && $_SESSION['papierosy']=='nie' && $_SESSION['narkotyki']=='tak' )
{
   echo "<!DOCTYPE>
<html lang='pl'>
<head>
    <meta charset='UTF-8'/>
    <link rel='stylesheet' href='styl.css' type='text/css' />
    <title>Ankieta</title>
</head>
<body class='body'>
<div class='header'><h1>Ankieta dotycząca chrór związanych z sercem</h1></div>
<div id='contener'>
    <div class='cont1'>
        <form action='survey.php' method='post'>
            <divh1 class=\"contener\">Jak często bierzesz narkotyki:</divh1>
                <input type=\"radio\" id=\"radio8\"  name=\"ilosc_n\" value=\"codziennie \"/>
                <label for=\"radio8\">Codziennie</label>
                <input type=\"radio\" id=\"radio9\"  name=\"ilosc_n\" value=\"raz na tydzien\"/>
                <label for=\"radio9\">Raz na tydzień</label>
                <input type=\"radio\" id=\"radio10\"  name=\"ilosc_n\" value=\"okazyjnie\"/>
                <label for=\"radio10\">Okazyjnie</label>
               </br>
               <button class=\"btn-slide-line\">
                <span>Dalej</span>
            </button>
    </div>
</div>
</form>
</div>
</body>
</html>";
}

else if($_SESSION['alkohol']=='nie' && $_SESSION['papierosy']=='tak' && $_SESSION['narkotyki']=='nie' ){
    echo "<!DOCTYPE>
<html lang='pl'>
<head>
    <meta charset='UTF-8'/>
    <link rel='stylesheet' href='styl.css' type='text/css' />
    <title>Ankieta</title>
</head>
<body class='body'>
<div class='header'><h1>Ankieta dotycząca chrór związanych z sercem</h1></div>
<div id='contener'>
    <div class='cont1'>
        <form action='survey.php' method='post'>
            <divh1 class=\"contener\">Jak często palisz papierosy:</divh1>
               <input type=\"radio\" id=\"radio5\" name=\"ilosc_p\" value=\"1 paczka na dzien i wiecej \"/>
               <label for=\"radio5\">Jedną paczkę i więcej</label>
               <input type=\"radio\" id=\"radio6\"  name=\"ilosc_p\" value=\"1 paczka na tydzien i wiecej\"/>
               <label for=\"radio6\">Jedną paczkę na tydzień i więcej</label>
               <input type=\"radio\" id=\"radio7\" name=\"ilosc_p\" value=\"1 paczka na miesiac i wiecej\"/>
               <label for=\"radio7\">Jedną paczkę na miesiąc i więcej</label>
               </br>
               <button class=\"btn-slide-line\">
                <span>Dalej</span>
            </button>
    </div>
</div>
</form>
</div>
</body>
</html>";
}

else if($_SESSION['alkohol']=='tak' && $_SESSION['papierosy']=='nie' && $_SESSION['narkotyki']=='tak' ){
    echo"<!DOCTYPE>
<html lang=\"pl\">
<head>
    <meta charset=\"UTF-8\"/>
    <link rel=\"stylesheet\" href=\"styl.css\" type=\"text/css\" />
    <title>Ankieta</title>
</head>
<body class=\"body\">
<div class=\"header\"><h1>Ankieta dotycząca chrór związanych z sercem</h1></div>
<div id=\"contener\">
    <div class=\"cont1\">
        <form action=\"survey.php\" method=\"post\">
           <divh1 class=\"contener\">Jak często pijesz alkohol:</divh1>
               <input type=\"radio\" id=\"radio1\"  name=\"ilosc_a\" value=\"codziennie\"/>
               <label for=\"radio1\">Codziennie</label>
               <input type=\"radio\" id=\"radio2\" name=\"ilosc_a\" value=\"raz_na_tydzien_i_czesciej\"/>
               <label for=\"radio2\">Raz na tydzień i częściej</label>
               <input type=\"radio\" id=\"radio3\"  name=\"ilosc_a\" value=\"raz_na_miesiac_i_czesciej\"/>
               <label for=\"radio3\">Raz na miesiąc i częściej</label>
               <input type=\"radio\" id=\"radio4\" name=\"ilosc_a\" value=\"raz_na_rok_i_czesciej\"/>
               <label for=\"radio4\">Raz na rok i częściej</label>
               </br>
            <divh1 class=\"contener\">Jak często bierzesz narkotyki:</divh1>
                <input type=\"radio\" id=\"radio8\"  name=\"ilosc_n\" value=\"codziennie \"/>
                <label for=\"radio8\">Codziennie</label>
                <input type=\"radio\" id=\"radio9\"  name=\"ilosc_n\" value=\"raz na tydzien\"/>
                <label for=\"radio9\">Raz na tydzień</label>
                <input type=\"radio\" id=\"radio10\"  name=\"ilosc_n\" value=\"okazyjnie\"/>
                <label for=\"radio10\">Okazyjnie</label>
               </br>
               <button class=\"btn-slide-line\">
                <span>Dalej</span>
            </button>
    </div>
</div>
</form>
</div>
</body>
</html>";
}

else if($_SESSION['alkohol']=='tak' && $_SESSION['papierosy']=='tak' && $_SESSION['narkotyki']=='nie' ) {
    echo"<!DOCTYPE>
<html lang=\"pl\">
<head>
    <meta charset=\"UTF-8\"/>
    <link rel=\"stylesheet\" href=\"styl.css\" type=\"text/css\" />
    <title>Ankieta</title>
</head>
<body class=\"body\">
<div class=\"header\"><h1>Ankieta dotycząca chrór związanych z sercem</h1></div>
<div id=\"contener\">
    <div class=\"cont1\">
        <form action=\"survey.php\" method=\"post\">
            <divh1 class=\"contener\">Jak często pijesz alkohol:</divh1>
               <input type=\"radio\" id=\"radio1\"  name=\"ilosc_a\" value=\"codziennie\"/>
               <label for=\"radio1\">Codziennie</label>
               <input type=\"radio\" id=\"radio2\" name=\"ilosc_a\" value=\"raz_na_tydzien_i_czesciej\"/>
               <label for=\"radio2\">Raz na tydzień i częściej</label>
               <input type=\"radio\" id=\"radio3\"  name=\"ilosc_a\" value=\"raz_na_miesiac_i_czesciej\"/>
               <label for=\"radio3\">Raz na miesiąc i częściej</label>
               <input type=\"radio\" id=\"radio4\" name=\"ilosc_a\" value=\"raz_na_rok_i_czesciej\"/>
               <label for=\"radio4\">Raz na rok i częściej</label>
               </br>
            <divh1 class=\"contener\">Jak często palisz papierosy:</divh1>
               <input type=\"radio\" id=\"radio5\" name=\"ilosc_p\" value=\"1 paczka na dzien i wiecej \"/>
               <label for=\"radio5\">Jedną paczkę i więcej</label>
               <input type=\"radio\" id=\"radio6\"  name=\"ilosc_p\" value=\"1 paczka na tydzien i wiecej\"/>
               <label for=\"radio6\">Jedną paczkę na tydzień i więcej</label>
               <input type=\"radio\" id=\"radio7\" name=\"ilosc_p\" value=\"1 paczka na miesiac i wiecej\"/>
               <label for=\"radio7\">Jedną paczkę na miesiąc i więcej</label>
               </br>
               <button class=\"btn-slide-line\">
                <span>Dalej</span>
            </button>
    </div>
</div>
</form>
</div>
</body>
</html>";

}

else if($_SESSION['alkohol']=='tak' && $_SESSION['papierosy']=='nie' && $_SESSION['narkotyki']=='nie' ) {
    echo "<!DOCTYPE>
<html lang=\"pl\">
<head>
    <meta charset=\"UTF-8\"/>
    <link rel=\"stylesheet\" href=\"styl.css\" type=\"text/css\" />
    <title>Ankieta</title>
</head>
<body class=\"body\">
<div class=\"header\"><h1>Ankieta dotycząca chrór związanych z sercem</h1></div>
<div id=\"contener\">
    <div class=\"cont1\">
        <form action=\"survey.php\" method=\"post\">
            <divh1 class=\"contener\">Jak często pijesz alkohol:</divh1>
               <input type=\"radio\" id=\"radio1\"  name=\"ilosc_a\" value=\"codziennie\"/>
               <label for=\"radio1\">Codziennie</label>
               <input type=\"radio\" id=\"radio2\" name=\"ilosc_a\" value=\"raz_na_tydzien_i_czesciej\"/>
               <label for=\"radio2\">Raz na tydzień i częściej</label>
               <input type=\"radio\" id=\"radio3\"  name=\"ilosc_a\" value=\"raz_na_miesiac_i_czesciej\"/>
               <label for=\"radio3\">Raz na miesiąc i częściej</label>
               <input type=\"radio\" id=\"radio4\" name=\"ilosc_a\" value=\"raz_na_rok_i_czesciej\"/>
               <label for=\"radio4\">Raz na rok i częściej</label>
               </br>
            <button class=\"btn-slide-line\">
                <span>Dalej</span>
            </button>

    </div>
</div>
</form>
</div>
</body>
</html>";

}
else if($_SESSION['alkohol']=='nie' && $_SESSION['papierosy']=='tak' && $_SESSION['narkotyki']=='tak' ) {
    echo"<!DOCTYPE>
<html lang=\"pl\">
<head>
    <meta charset=\"UTF-8\"/>
    <link rel=\"stylesheet\" href=\"styl.css\" type=\"text/css\" />
    <title>Ankieta</title>
</head>
<body class=\"body\">
<div class=\"header\"><h1>Ankieta dotycząca chrór związanych z sercem</h1></div>
<div id=\"contener\">
    <div class=\"cont1\">
        <form action=\"survey.php\" method=\"post\">
            <divh1 class=\"contener\">Jak często palisz papierosy:</divh1>
               <input type=\"radio\" id=\"radio5\" name=\"ilosc_p\" value=\"1 paczka na dzien i wiecej \"/>
               <label for=\"radio5\">Jedną paczkę i więcej</label>
               <input type=\"radio\" id=\"radio6\"  name=\"ilosc_p\" value=\"1 paczka na tydzien i wiecej\"/>
               <label for=\"radio6\">Jedną paczkę na tydzień i więcej</label>
               <input type=\"radio\" id=\"radio7\" name=\"ilosc_p\" value=\"1 paczka na miesiac i wiecej\"/>
               <label for=\"radio7\">Jedną paczkę na miesiąc i więcej</label>
               </br>
            <divh1 class=\"contener\">Jak często bierzesz narkotyki:</divh1>
                <input type=\"radio\" id=\"radio8\"  name=\"ilosc_n\" value=\"codziennie \"/>
                <label for=\"radio8\">Codziennie</label>
                <input type=\"radio\" id=\"radio9\"  name=\"ilosc_n\" value=\"raz na tydzien\"/>
                <label for=\"radio9\">Raz na tydzień</label>
                <input type=\"radio\" id=\"radio10\"  name=\"ilosc_n\" value=\"okazyjnie\"/>
                <label for=\"radio10\">Okazyjnie</label>
               </br>
               <button class=\"btn-slide-line\">
                <span>Dalej</span>
            </button>
</div>
</form>
</div>
</body>
</html>";
}
else {
    header("Location: survey.php");
}
?>
