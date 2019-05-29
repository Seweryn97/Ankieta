<!DOCTYPE>
<html lang="pl">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="styl.css" type="text/css" />
    <title>Ankieta</title>
</head>
<body class="body">
<div class="header"><h1>Ankieta dotycząca chrór związanych z sercem</h1></div>
<div id="contener">
    <div class="cont1">
        <form action="index_2.php" method="post">
            <divh1 class="contener">Ile czasu minęło od zawału:</divh1>
            <input type="radio" id="radio5" name="czas" value="<pol roku"/>
            <label for="radio5">mniej niż pół roku</label>
            <input type="radio" id="radio6" name="czas" value=">pol roku"/>
            <label for="radio6">więcej niż pół roku</label>
            <input type="radio" id="radio7" name="czas" value=">rok"/>
            <label for="radio6">więcej niż rok</label>
            </br>
            <divh1 class="contener">Czy po wyjściu ze szpitala kontynuowałeś/aś rehabilitację:</divh1>
            <input type="radio" id = "radio1" name="rehabilitacja" value="tak"/>
            <label for="radio1">Tak</label>
            <input type="radio" id = "radio2" name="rehabilitacja" value="nie"/>
            <label for="radio2">Nie</label>
            </br>
            <divh1 class="contener">Czy po zawale zwiększyłeś/aś aktywność fizyczną:</divh1>
            <input type="radio" id="radio3"  name="aktywność" value="tak"/>
            <label for="radio3">Tak</label>
            <input type="radio" id="radio4" name="aktywność" value="nie"/>
            <label for="radio4">Nie</label>
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
