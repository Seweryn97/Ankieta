<?php
session_start();

$_SESSION['ilosc_p']=$_POST['ilosc_p'];
$_SESSION['ilosc_n']=$_POST['ilosc_n'];
$_SESSION['ilosc_a']=$_POST['ilosc_a'];
$_SESSION['alkohol']=$_POST['alkohol'];
$_SESSION['papierosy']=$_POST['papierosy'];
$_SESSION['narkotyki']=$_POST['narkotyki'];

$_plec=$_SESSION['plec'];
$_wiek=$_SESSION['wiek'];
$_tryb_pracy=$_SESSION['tryb_pracy'];
$_stres=$_SESSION['stres'];
$_zawal=$_SESSION['zawal'];
$_alkohol=$_SESSION['alkohol'];
$_papierosy=$_SESSION['papierosy'];
$_narkotyki=$_SESSION['narkotyki'];

//if($_alkohol=="tak" ) header("Location:index_8.php");

if($_SESSION['ilosc_a']==null){
    $_ilosc_a="nie pije";
}
else{
    $_ilosc_a=$_SESSION['ilosc_a'];
}
if($_SESSION['ilosc_n']==null){
    $_ilosc_n="nie bierze";
}
else{
    $_ilosc_n=$_SESSION['ilosc_n'];
}
if($_SESSION['ilosc_p']==null){
    $_ilosc_p="nie pali";
}
else{
    $_ilosc_p=$_SESSION['ilosc_p'];
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


    $zapytanie="INSERT INTO dane VALUES('$_plec','$_wiek','$_tryb_pracy','$_stres','$_zawal','$_alkohol','$_papierosy','$_narkotyki','$_ilosc_a','$_ilosc_p','$_ilosc_n')";
    $idzapytania=$polaczenie->query($zapytanie);
}
$polaczenie->close();


?>

