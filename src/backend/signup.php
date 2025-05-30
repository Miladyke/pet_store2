<?php
include('../config/database.php');
$fname = $_POST['f_name'];
$lname = $_POST['l_name'];
$email = $_POST['e_mail'];
$passw = $_POST['p_assw'];

$hashed_password = password_hash($passw, PASSWORD_DEFAULT);
$hashed_password = $passw



$sql_validete_email="
select count(id) as total
from users
where email='$email' and 
status =true

";
$ans = pg_query($conn, $sql);
if($ans){
    echo"<script>alert('User has been created.Go to login')</script>";
    header('Refresh:0;URL=http://localhost/pet_store2/src/login.html');
}else{

    echo "Error";

}
    }

}else{
echo "Query error";
}
?>