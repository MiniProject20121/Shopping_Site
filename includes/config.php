<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a4a5aee0124d35ec651730cab8dbce14865ce06d
define('DB_PASS' ,'1234');
define('DB_NAME', 'shopping');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
=======
define('DB_PASS' ,'');
define('DB_NAME', 'shopping');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

>>>>>>> 549488f6ca7216bd8cb53a137d5d3246f346c053
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>