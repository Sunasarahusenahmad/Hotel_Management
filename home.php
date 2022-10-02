<?php

include 'includes/connection.php';
session_start();

?>

<?php

if (isset($_POST['submit'])) {
    $hotel_name = $_POST['hotel_name'];
    $hotel_address = $_POST['hotel_address'];
    $hotel_contact = $_POST['hotel_contact'];
    $hotel_ownername = $_POST['hotel_ownername'];
    $remarks = $_POST['editor1'];

    if (isset($_FILES['hotel_image'])) {

        $file_name = $_FILES['hotel_image']['name'];
        $file_size = $_FILES['hotel_image']['size'];
        $file_tmp = $_FILES['hotel_image']['tmp_name'];
        $file_type = $_FILES['hotel_image']['type'];

        if (move_uploaded_file($file_tmp, "upload/" . $file_name)) {
?>
            <!-- <div class="alert alert-success text-center" role="alert">
                hotel_image is Uploaded !...
            </div> -->
        <?php
        } else {
        ?>
            <div class="alert alert-danger text-center" role="alert">
                Your hotel_image Dose't Uploaded !...
            </div>
        <?php
        }
    }


    $insert_query = mysqli_query($con, "INSERT INTO `hotel_info` (hotel_name, hotel_address, hotel_contact, hotel_ownername, editor1, hotel_image) VALUES ('$hotel_name', '$hotel_address', '$hotel_contact', '$hotel_ownername', '$remarks', '$file_name') ");

    if ($insert_query) {
        ?>
        <div class="alert alert-success text-center" role="alert">
            Your Hotel Information is Successfull Published !...
        </div>
    <?php
    } else {
    ?>
        <div class="alert alert-danger text-center" role="alert">
            Your Hotel Information is Not Published !...
        </div>
<?php
    }
}

?>

<?php include 'all file/header.php'; ?>

<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400&display=swap" rel="stylesheet">


<div class="container w-50">
    <?php

    $hotel_pic = $_SESSION['email'];
    $select_query = mysqli_query($con, "SELECT * FROM `published_hotel` WHERE email ='$hotel_pic' ");
    $row = mysqli_fetch_assoc($select_query);

    ?>

    <h3 class="text-center" style="font-family: 'Josefin Sans', sans-serif;">Hotel Info</h3>

    <div class="card" style="margin-top: 1.5rem;  font-family: 'Josefin Sans', sans-serif;">
        <img src="upload/<?php echo $row['hotel_image'] ?>" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-success" style="font-size: 2rem;">Hotel <?= $row['hotel_name'] ?></h5>
        </div>
        <ul class="list-group list-group-flush text-info">
            <li class="list-group-item">Address : <?= $row['hotel_address'] ?></li>
            <li class="list-group-item">Hotel Owner Name : <?= $row['owner_name'] ?></li>
            <li class="list-group-item">Hotel Email : <?= $row['email'] ?></li>
        </ul>
    </div>
</div>



<script src="https://cdn.ckeditor.com/4.19.1/full/ckeditor.js"></script>

<script>
    CKEDITOR.replace('editor1');
</script>

<?php include 'all file/footer.php'; ?>