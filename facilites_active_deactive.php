    
<?php include 'includes/connection.php' ?>


<?php

$facilites_id = $_GET['facilites_id'];
$status = $_GET['status'];
$update_query = " UPDATE `hotel_facilites` SET status = $status WHERE facilites_id = $facilites_id ";
$result = mysqli_query($con, $update_query);

header("location:hotel_facilites.php");

?>