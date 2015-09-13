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
    <button onclick="$('body').css('background-color','red');">Red</button>
    <button onclick="$('body').css('background-color','blue');">Blue</button>
    <button onclick="$('body').css('background-color','green');">Green</button>
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
</script>
</body>
</html>

