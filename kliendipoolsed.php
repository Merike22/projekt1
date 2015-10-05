<!DOCTYPE html>
<html lang="ET">
<html>
<head>
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
<a href='#' onclick='edit()'><img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRcwlRKAlSIaCI4W5PRYVbuBQQXifF-56bFqAjh9DMe-_3Lh8_YKw" id="koer_kass"/></a>


<script>
function edit()
{
    var inputs = document.myform;
    for(var i = 0; i < inputs.length; i++) {
    inputs[i].disabled = false;
    }
}
var koer_kass = document.getElementById("koer_kass");
koer_kass.onclick = function(){
    this.src = "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRDcZIsFoJJMGaMbu_wLwmGvVzh_waZrNzMrWV6ZsNowj6YMKbh";
}
</script>
</body>
</html>
