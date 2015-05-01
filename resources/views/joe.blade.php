<!DOCTYPE html>
<html>
<body>
<button onclick="myFunction()">CLICK ME!</button>

<p id="demo"></p>

<script>
function myFunction() {
    var x;
    if (confirm("Do you want me to help you move on sunday?") == true) {
        x = "Text me 'when and where?'";
    } else {
        x = "Text me 'YOU ARE A USELESS INTERN'";
    }
    document.getElementById("demo").innerHTML = x;
}
</script>

</body>
</html>

</html>