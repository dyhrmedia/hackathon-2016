<?php
include('db-config.php');
function authenticate($username,$password)
{
$sql = mysqli_query($GLOBALS['con'],"select * from users WHERE username = '".$username."' AND password = '".$password."'");
if(mysqli_num_rows($sql)==0) echo 'unauthorized user!';
}
authenticate('admi','admin');
?>
