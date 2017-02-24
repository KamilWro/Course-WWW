<?php
  setcookie ("TestCookie1", "Wartosc1",time()+3600, "/www/", "");
  setcookie ("TestCookie2", "Wartosc2",time()+3600, "/", "localhost",TRUE);
  setcookie ("TestCookie3", "Wartosc3",time()+3600, "/", "localhost",FALSE);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Zad8/10</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<h3>Cookies</h3>
<a href="/www/subpage.php">Idz do potomka </a>

<br/>
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