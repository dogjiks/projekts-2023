<?php
$l = $_POST["login"];
$p = $_POST["password"];

include('cfg.php');


$result = mysqli_query("SELECT * FROM users WHERE login=$l");
if (mysqli_num_rows($result) > 0){
    echo "GOOD!!!";
}
else{
    echo "BYE BYE!!!"
}

echo "$l, HELLO, $p";

?>