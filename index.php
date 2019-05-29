<!DOCTYPE>
<html lang="pl">
<head>
    <script type =text/javascript src="index.js"></script>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="styl.css" type="text/css" />
    <title>Ankieta</title>
</head>
<body class="body">
<div class="header"><h1>Ankieta dotycząca chorób związanych z sercem</h1></div>
<div id="contener">
    <div class="box">
        <form action="index_2.php"  method="post">
            <divh1 class="contener">Podaj płeć:</divh1>
                <input type="radio" id="radio1" name="plec" value="kobieta"/>
                <label for="radio1">Kobieta</label>
                <input type="radio" id="radio2" name="plec" value="mezczyzna"/>
                <label for="radio2">Mezczyzna</label>
                <br/>
            <divh1>Podaj swój wiek:</divh1>
                <input type="text" name="wiek" onblur="javascript:testKod(this.value)">
            <div id="status"></div>
                <br/>
            <divh1 class="contener">Tryb pracy:</divh1>
                <input type="radio" id="radio7"  name="tryb_pracy" value="aktywny"/>
                <label for="radio7">aktywny</label>
                <input type="radio" id="radio8"   name="tryb_pracy" value="siedzacy"/>
                <label for="radio8">siedzący</label>
                <input type="radio" id="radio9"  name="tryb_pracy" value="bezrobotny/emeryt"/>
                <label for="radio9">bezrobotny/emeryt</label>
                <input type="radio" id="radio10"  name="tryb_pracy" value="mieszany"/>
                <label for="radio10">mieszany</label>
                <br/>
            <divh1 class="contener">Jak często się stresujesz (w skali od 1 do 5):</divh1>
                <input type="radio" id="radio11"  name="stres" value="1"/>
                <label for="radio11">1</label>
                <input type="radio" id="radio12"  name="stres" value="2"/>
                <label for="radio12">2</label>
                <input type="radio" id="radio13"  name="stres" value="3"/>
                <label for="radio13">3</label>
                <input type="radio" id="radio14" name="stres" value="4"/>
                <label for="radio14">4</label>
                <input type="radio" id="radio15"  name="stres" value="5"/>
                <label for="radio15">5</label>
            <br/>
            <divh1 class="contener">Czy w twojej najbliższej rodzinie wystąpił zawał serca:</divh1>
                <input type="radio" id="radio16"  name="zawal" value="tak"/>
                <label for="radio16">tak</label>
                <input type="radio" id="radio17" name="zawal" value="nie"/>
                <label for="radio17">nie</label>
                </br>
            <divh1 class="contener">Czy miałeś zawał serca</divh1>
                <input type="radio" id="radio18"  name="zawal_m" value="tak"/>
                <label for="radio18">tak</label>
                <input type="radio" id="radio19" name="zawal_m" value="nie"/>
                <label for="radio19">nie</label>
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


