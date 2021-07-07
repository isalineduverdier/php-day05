<?php
if (isset ($_GET["name"]) !=NULL){
    setcookie("name",$_GET["name"],time() +36000);
}
if (isset($_COOKIE["name"]) !=NULL){
        echo "Hello " . $_COOKIE["name"];
} else
echo "Hello platypus";
?>