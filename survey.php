<?php
session_start();

$_SESSION['ilosc_p']=$_POST['ilosc_p'];
$_SESSION['ilosc_n']=$_POST['ilosc_n'];
$_SESSION['ilosc_a']=$_POST['ilosc_a'];

$_plec=$_SESSION['plec'];
$_wiek=$_SESSION['wiek'];
$_tryb_pracy=$_SESSION['tryb_pracy'];
$_stres=$_SESSION['stres'];
$_zawal=$_SESSION['zawal'];
$_czas=$_SESSION['czas'];
$_rehabilitacja=$_SESSION['rehabilitacja'];
$_aktywnosc=$_SESSION['aktywność'];
$_zawal_m=$_SESSION['zawal_m'];


if(empty($_SESSION['ilosc_a'])){
    $_ilosc_a="nie pije";
}
else{
    $_ilosc_a=$_SESSION['ilosc_a'];
}
if(empty($_SESSION['ilosc_n'])){
    $_ilosc_n="nie bierze";
}
else{
    $_ilosc_n=$_SESSION['ilosc_n'];
}
if(empty($_SESSION['ilosc_p'])){
    $_ilosc_p="nie pali";
}
else{
    $_ilosc_p=$_SESSION['ilosc_p'];
}
if(empty($_SESSION['alkohol'])){
    $_alkohol="nie";
}
else{
    $_alkohol=$_SESSION['alkohol'];
}
if(empty($_SESSION['papierosy'])){
    $_papierosy="nie";
}
else{
    $_papierosy=$_SESSION['papierosy'];
}
if(empty($_SESSION['narkotyki'])){
    $_narkotyki="nie";
}
else{
    $_narkotyki=$_SESSION['narkotyki'];
}

require ('connect.php');

$polaczenie = @new mysqli($host, $db_user, $db_password,$db_name) ;
if($polaczenie ->connect_errno!=0){

    echo "Error".$polaczenie->connect_errno. "Opis".$polaczenie->connect_error;
    $polaczenie -> query("SET NAMES 'utf8'");
    if(!$polaczenie) return false;
    else return $polaczenie;
}
else{

    $sql1="INSERT INTO demo (plec,wiek,tryb_pracy,jak_czesto_stres,czy_zawal_rodzina,czy_zawal)"
        ."VALUES('$_plec','$_wiek','$_tryb_pracy','$_stres','$_zawal','$_zawal_m')";

    @$polaczenie->query($sql1);

    $last_id=mysqli_insert_id($polaczenie);

    $sql2="INSERT INTO uzywki(klucz,alkohol,papierosy,narkotyki)"
        ." VALUES('$last_id','$_alkohol','$_papierosy','$_narkotyki')";

    @$polaczenie->query($sql2);

    $sql3="INSERT INTO ilosc_uzywki(klucz,ilosc_alk,ilosc_pap,ilosc)"
        ." VALUES('$last_id','$_ilosc_a','$_ilosc_p','$_ilosc_n')";

    @$polaczenie->query($sql3);

    $sql4="INSERT INTO zawal(klucz,czas,rehab,akty)"
        ." VALUES('$last_id','$_czas','$_rehabilitacja','$_aktywnosc')";

    @$polaczenie->query($sql4);







    if($sql1) echo "Rekord dodany";
    else echo "Rekord nie dodany";

    if($sql2) echo "Rekord dodany";
    else echo "Rekord ni dodany";



    /*if($conn->query($sql1)==TRUE){
        $_last_id=mysqli_insert_id($conn);
    }
    else
        echo "Błąd systemu nie udało się zapisac";
    echo"Error".$sql1 ."<br>". $conn->error;*/



    /*if($conn->query($sql2)==FALSE){
        echo "Błąd systemu";
        echo "Error".$sql2."<br>". $conn->error;
    }*/




}
$polaczenie->close();
session_unset();

header("Location:end.php");
?>

