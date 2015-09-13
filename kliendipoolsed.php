<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Kliendipoolsed</title>
</head>
<body>
    <button onclick="tereMaailm()">Tere Maailm</button>
    <a href="javascript:alertKHK()">Tere Maailm</a>
    <a href="http://www.khk.ee" onclick="alert('Jääme siia!');return false;">Jääme siia</a>
    <br>
    <img id="pilt" onclick="asendaKoer()" width="200" height="140" src="http://s.hswstatic.com/gif/whiskers-sam.jpg">
<script>
    function tereMaailm(){
        alert('Tere, Maailm!');
    }
    function alertKHK(){
        alert('Tere, Maailm!');
        window.location="http://www.khk.ee";
    }
    function asendaKoer(){
        document.addEventListener("click",function(){
            document.getElementById("pilt").src="http://etaarifa.co.ke/wp-content/uploads/2015/08/black-dog-pics-765x510.jpg";
        });
    }
</script>
</body>
</html>

