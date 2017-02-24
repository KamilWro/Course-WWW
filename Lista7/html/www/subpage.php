<html>
<head>
</head>
<body>

<span id="myId"><span>
<script>
document.getElementById('myId').innerHTML=listCookies()
function listCookies() {
    var theCookies = document.cookie.split(';');
    var aString = '';
    for (var i = 0 ; i < theCookies.length; i++) {
        aString += i+1 + ' ' + theCookies[i] + '<br />';
}
    return aString;
}
</script>
</body>
</html>