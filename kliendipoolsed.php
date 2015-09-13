<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <title>Kliendipoolsed</title>
</head>
<body>
    <!--- Nupp tere maailm teavituse jaoks --->
    <button onclick="tereMaailm()">Tere Maailm</button>
    <!--- Link teavitusega ja suunamisega --->
    <a href="javascript:alertKHK()">Tere Maailm</a>
    <!--- Link, mis ei lase liikuda edasi --->
    <a href="http://www.khk.ee" onclick="alert('Jääme siia!');return false;">Jääme siia</a>
    <br>
    <!--- Kassi pilt, millega juhtub kummalisi asju ülesannete käigus--->
    <img id="pilt" onclick="asendaKoer()" width="200" height="140" src="http://s.hswstatic.com/gif/whiskers-sam.jpg">
    <br>
    <!--- Nupud on asetatud klassi, et vältida tausta muutumist teiste nuppude vajutamisel --->
    <button class="varv">Red</button>
    <button class="varv">Blue</button>
    <button class="varv">Green</button>
    <button id="rklick">Luba parem klõps</button>
    <br>
    <!--- Nupp kassi kaotamiseks --->
    <button id="kustuta">Kaduv kass</button>
<script>
    var pklick=false;
    // Seob #rklick id'ga nupu külge funktsiooni mis tagastab pklick väärtuse true, et võimaldada lehel parem klikk
    $("#rklick").bind("click",function(){
        return pklick=true;
    });
    // Peidab või kuvab lehel oleva kassipildi
    $("#kustuta").click(function(){
        $("img").toggle();
    });
    // Annab teavituse "Tere, Maailm!"
    function tereMaailm(){
        alert('Tere, Maailm!');
    }
    // Annab teavituse "Tere, Maailm!" ning liigub KHK lehele edasi
    function alertKHK(){
        alert('Tere, Maailm!');
        window.location="http://www.khk.ee";
    }
    // Asendab kassi pildi koera omaga
    function asendaKoer(){
        $("#pilt").attr("src","http://etaarifa.co.ke/wp-content/uploads/2015/08/black-dog-pics-765x510.jpg");
    }
    // Muudab lehe tausta värvi vastavalt vajutatud nupule
    $(".varv").click(function(){
        $("body").css("background-color",$(this).text());
    });
    // Keelab parema hiirekliki lehel, kuni nuppu vajutatakse
    $(document).ready(function(){
        $(document).on("contextmenu",function(){
            return pklick;
        });
    })
</script>
</body>
</html>

