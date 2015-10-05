<!DOCTYPE html>
<html lang="ET">
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title></title>
</head>
<body>
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
