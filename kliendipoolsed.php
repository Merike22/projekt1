<!DOCTYPE html>
<html lang="ET">
<html>
<head>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <title></title>
</head>
<body>
<section class="text">
    Vajuta nuppu et<br> vahetada kodulehe taustav‰rvi!;
</section>

<button id="btn">RED</button>
<button id="btn2">GREEN</button>
<button id="btn3">Blue</button>
<script>
    $('#btn').click(function() {
        $('body').css('background', '#ff0000')
    });
    $('#btn2').click(function() {
        $('body').css('background', '#6BB247')
    });
    $('#btn3').click(function() {
        $('body').css('background', '#246BB2')
    });
</script>
<style>
    #btn:hover {
        background: #ff0000;
        color: #ffffff;
    }
    #btn2:hover {
        background: #6BB247;
        color: #ffffff;
    }
    #btn3:hover {
        background: #246BB2;
        color: #ffffff;
    }

</style>

<p>Vajuta nuppu</p>

<button onclick="myFunction()">Vajuta</button>

<script>
    function myFunction() {
        alert("Tere maailm!");
    }
</script>
<a href="http://www.khk.ee">tere maailm</a>
<a href="http://localhost/projekt1/kliendipoolsed.php?">
    <span>j‰‰me siia</span>
</a>
<div id="kass_koeraks">
    <div class="c1">
        <a href="#"><img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRcwlRKAlSIaCI4W5PRYVbuBQQXifF-56bFqAjh9DMe-_3Lh8_YKw"></a>
        <a href="#"><img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRDcZIsFoJJMGaMbu_wLwmGvVzh_waZrNzMrWV6ZsNowj6YMKbh"></a>
    </div>
</div>
<script>
    $(function() {

        var $images = $("#kass_koeraks > .c1 > a").clone();

        var $length = $images.length;
        var $imgShow = 0;

        $("#kass_koeraks > .c1").html( $("#kass_koeraks > .c1 > a:first") );

        $("#kass_koeraks > .c1 > a").click(function(event) {

            $(this).children().attr("src",
                $("img", $images).eq(++$imgShow % $length).attr("src") );
            event.preventDefault();

        });
    });
</script>
</body>
</html>
