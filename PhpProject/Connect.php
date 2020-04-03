<?php

$conn_string = "ec2-18-209-187-54.compute-1.amazonaws.com port=5432 dbname=dfdlqf00oqhosi user=mbxltdyztsbfai password=ad63a2faf3cad97d408afa636a654700a83ee655b35b3d6623cfd812ba342335";
$dbconn = pg_connect($conn_string);
if (isset($POST['username'])) {
    $username = $POST['username'];
}
if (isset($POST['pass'])) {
    $pass = $POST['pass'];
}
$result = pg_query($dbconn, "select * from tbl_user where username = '" . $username . "' and password = '" . $pass . "'");
if (!$result) {
    echo "Login failed";
} else {
    echo "Login successfully";
}
?>
