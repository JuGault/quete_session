<?php

$panier = $_COOKIE["panier"];
switch ($_GET["ajout"]){
    case 46 : $panier["Pecan_nuts"]++;
        setCookie("panier[Pecan_nuts]", $panier["Pecan_nuts"]);break;
    case 36 : $panier["Chocolate_chips"]++;
        setCookie("panier[Chocolate_chips]", $panier["Chocolate_chips"]);break;
    case 58 : $panier["Full_chocolate_cookie"]++;
        setCookie("panier[Full_chocolate_cookie]",$panier["Full_chocolate_cookie"]);break;
    case 32 :$panier["M&M's@_cookies"]++;
        setCookie("panier[M&M's@_cookies]",$panier["M&M's@_cookies"]);break;
}
header('location: index.php');
?>