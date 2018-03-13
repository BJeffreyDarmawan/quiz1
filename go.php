<?php

include("connectdb.php");

function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

$inserted_uname = $_POST["uname"];
$inserted_password = $_POST["password"];
//phpAlert($inserted_uname.$inserted_password);
$current_uname = "";
$current_cat = "";

$query = "SELECT * FROM user WHERE username='".$inserted_uname."';";
$query = "select * from user;";
$result = $conn->query($query);
phpAlert($result);

if(mysqli_num_rows($result) < 1){
    phpAlert("Incorrect username.");
} else {
    while($row = $result->fetch_assoc()) {
        if($row["password"] != $inserted_password){
            phpAlert("Incorrect password");
        }
        $current_uname = $inserted_uname;
        $current_cat = $row["category"];    
    }
    $_SESSION["username"] = $inserted_uname;
    $_SESSION["category"] = $current_cat;

    header("Location: available offer.php");
}
    
session_start();



?>