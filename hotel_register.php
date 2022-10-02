<?php include 'includes/header.php' ?>
<?php include 'includes/connection.php' ?>


<?php

if (isset($_POST['submit'])) {
    $hotel_name = $_POST['hotel_name'];
    $hotel_address = $_POST['hotel_address'];
    $owner_name = $_POST['owner_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

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


    $insert_query = mysqli_query($con, "INSERT INTO `published_hotel` (hotel_name, hotel_address, owner_name, email, password, hotel_image) VALUES ('$hotel_name', '$hotel_address', '$owner_name', '$email', '$password', '$file_name') ");

    if ($insert_query) {
        ?>
        <div class="alert alert-success text-center" role="alert">
            Your Hotel is Successfull Published !...
        </div>
    <?php
    } else {
    ?>
        <div class="alert alert-danger text-center" role="alert">
            Your Hotel is Not Published !...
        </div>
<?php
    }
}

?>

<style>
    .hotel {
        width: 280px;
        height: 45px;
        border: 1px solid #DFA974;
    }
</style>

<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero-text">
                    <h1>Published Your Hotel</h1>
                    <p>This Website is a Big Plateform in the Hotel Market. I Guarantee you that your Hotel will run smoothly.</p>
                    <a href="#" class="primary-btn">(+91) 1234567894</a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                <div class="booking-form">
                    <h3>Add Your Hotel</h3>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="">
                            <label>Name of Hotel</label>
                            <input type="text" class="hotel" name="hotel_name" required>
                        </div>
                        <div class="pt-2">
                            <label>Address of Hotel</label>
                            <input type="text" class="hotel" name="hotel_address" required>
                        </div>
                        <div class="pt-2">
                            <label>Name of Owner</label>
                            <input type="text" class="hotel" name="owner_name" required>
                        </div>
                        <div class="pt-2">
                            <label>Email</label>
                            <input type="email" class="hotel" name="email" required>
                        </div>
                        <div class="pt-2">
                            <label>Password</label>
                            <input type="password" class="hotel" name="password" required>
                        </div>
                        <div class="pt-2">
                            <label>Hotel Profile</label>
                            <input type="file" class="hotel" name="hotel_image" required>
                        </div>

                        <button type="submit" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="img/hero/hero-3.jpg"></div>
    </div>
</section>
<!-- Hero Section End -->


<?php include 'includes/footer.php' ?>