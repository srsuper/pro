
<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost:3307", "root", "", "linedb");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$Round = mysqli_real_escape_string($link, $_REQUEST['Round']);
$open = mysqli_real_escape_string($link, $_REQUEST['open']);
$vat = mysqli_real_escape_string($link, $_REQUEST['vat']);
$numbit = mysqli_real_escape_string($link, $_REQUEST['numbit']);
$n1 = mysqli_real_escape_string($link, $_REQUEST['n1']);
$n2 = mysqli_real_escape_string($link, $_REQUEST['n2']);
$n3 = mysqli_real_escape_string($link, $_REQUEST['n3']);
// Attempt insert query execution
$sql = "INSERT INTO log_results (Round,open,vat,numbit,n1,n2,n3,date) VALUES ('$Round','$open','$vat','$numbit','$n1','$n2','$n3',now())";
$sql ="UPDATE log set round_id = (SELECT round FROM round_from) WHERE date_time > (SELECT date_time FROM round_from)";
$sql = "UPDATE log set open_id = (SELECT `open` FROM round_from) WHERE date_time > (SELECT date_time FROM round_from)";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
require "botflex.php";
$link->close();
?>

