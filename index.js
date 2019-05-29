function sprodp(odp){
    if(window.XMLHttpRequest){
        xhr = new XMLHttpRequest();
    }
    xhr.onreadystatechange=function(){
        if(xhr.status===200){
            document.getElementById("status").innerHTML=xhr.responseText;
        }
    };
}

function testKod(wiek){
    if(window.XMLHttpRequest){
        ajax = new XMLHttpRequest();
    }
    ajax.onreadystatechange = function() {
        if(ajax.status===200) {
            document.getElementById("status").innerHTML=ajax.responseText;
        }
    };
    let url="http://localhost/ankieta/very.php?wiek="+wiek;
    ajax.open("GET",url,true);
    ajax.send();
}