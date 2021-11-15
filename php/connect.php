<?php
$connectio=mysqli_connect('localhost','root','1234','techmart_shopping');
if($connection){
    echo "connected";
}
else{
    echo "not connected";
}
?>