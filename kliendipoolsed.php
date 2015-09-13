<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <title>Kliendipoolsed</title>
</head>
<body>
    <button onclick="tereMaailm()">Tere Maailm</button>
    <a href="javascript:alertKHK()">Tere Maailm</a>
    <a href="http://www.khk.ee" onclick="alert('Jääme siia!');return false;">Jääme siia</a>
    <br>
    <img id="pilt" onclick="asendaKoer()" width="200" height="140" src="http://s.hswstatic.com/gif/whiskers-sam.jpg">
    <br>
    <button class="varv">Red</button>
    <button class="varv">Blue</button>
    <button class="varv">Green</button>
<script>

    function tereMaailm(){
        alert('Tere, Maailm!');
    }
    function alertKHK(){
        alert('Tere, Maailm!');
        window.location="http://www.khk.ee";
    }
    function asendaKoer(){
        $("#pilt").attr("src","http://etaarifa.co.ke/wp-content/uploads/2015/08/black-dog-pics-765x510.jpg");
    }
    $(".varv").click(function(){
        $("body").css("background-color",$(this).text());
    })
</script>
</body>
</html>

