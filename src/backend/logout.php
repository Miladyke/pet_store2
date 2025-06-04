<?php
session_start();
session_destroy();
header( 'refresh:0; URL=http://localhost/pet_store2/src/login.html');
?>