<!DOCTYPE html>
<html>
<body>

<?php
$correct_password= 123 ;
$correct_username= "hasan" ;
$user_password= 12 ;
$username= "hasan";



if ($correct_password == $user_password && $correct_username == $username) 
{
$b = "password ve username dogrudur";
}

else 
{
$b="password ve username  yanlisdir"; }



echo $b
?>

</body>
</html>