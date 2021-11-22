<?php
try{
    $connection=mysqli_connect('localhost','root','1234','mini_project');
}
catch(Exception $e){
    exit("Error :" .$e->getMessage());
}
?>