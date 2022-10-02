    
<?php include 'includes/connection.php' ?>


<?php

$servieces_id = $_GET['servieces_id'];
$status = $_GET['status'];
$update_query = " UPDATE `hotel_servieces` SET status = $status WHERE servieces_id = $servieces_id ";
$result = mysqli_query($con, $update_query);

header("location:hotel_servieces.php");

?>