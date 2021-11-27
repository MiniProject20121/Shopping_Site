<?php
try{
    $connection=mysqli_connect('localhost','root','','mini_project');
}
catch(Exception $e){
    exit("Error :" .$e->getMessage());
}
?>