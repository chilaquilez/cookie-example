<?php

setcookie("whoami", "Rafael", time()+30*60);

$name= "Stranger";

if(isset($_COOKIE['whoami'])){
        $name = $_COOKIE ['whoami'];
}

echo "<h1>Hello, $name!</h1>";

?>