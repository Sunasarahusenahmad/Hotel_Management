<?php include 'includes/header.php' ?>

<?php

include 'includes/connection.php';

$id = $_GET['id'];
$select_query = mysqli_query($con, "SELECT * FROM `published_hotel` WHERE id = '$id' ");
$row = mysqli_fetch_assoc($select_query);

?>



<div class="card mb-5 mt-5 mx-auto" style="width: 540px; height: 200px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="upload/<?php echo $row['hotel_image']; ?>" style="width: 300px; height: 200px;" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title" style="font-family: 'Josefin Sans', sans-serif;">Hotel <?php echo  $row['hotel_name']; ?></h3>
                <p class="card-text text-info"><b class="fw-bold text-success"> Hotel Address : </b><i> <?php echo $row['hotel_address']; ?> </i> </p>
                <p class="card-text text-info"><b class="fw-bold text-success"> Hotel Email : </b><i> <?php echo $row['email']; ?> </i> </p>
            </div>
        </div>
    </div>
</div>

<div class="container" style="font-family: 'Josefin Sans', sans-serif;">
    <div class="row">
        <div class="col-lg-6 mt-5 mb-5">
            <?php
            $select = mysqli_query($con, "SELECT * FROM `hotel_facilites` ");
            ?>
            <div class="card">
                <h3 class="card-title mx-auto pt-3" style="font-family: 'Josefin Sans', sans-serif;"> All Hotel Facilites </h3>
                <div class="card-body">
                    <?php
                    while ($data = mysqli_fetch_array($select)) {
                    ?>
                        <div style="line-height: 2rem; font-size: 1rem;">
                            <span class="card-title"> <?php echo  $data['facilites_id']; ?>
                                <span class="card-title">. <?php echo  $data['hotel_facilites_desc']; if ($data['status'] == 0) {
                                                            ?>
                                        <i class="fa fa-check text-success"></i>
                                    <?php
                                                            }
                                                            if ($data['status'] == 1) {
                                    ?>
                                        <i class="fa-sharp fa-solid fa-xmark text-danger"></i>
                                    <?php
                                                            }
                                    ?> </span>
                            </span>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-5 mb-5">
            <?php
            $select = mysqli_query($con, "SELECT * FROM `hotel_servieces` ");
            ?>
            <div class="card">
                <h3 class="card-title mx-auto pt-3" style="font-family: 'Josefin Sans', sans-serif;"> All Hotel Servieces </h3>
                <div class="card-body">
                    <?php
                    while ($data = mysqli_fetch_array($select)) {
                    ?>
                        <div style="line-height: 2rem; font-size: 1rem;">
                            <span class="card-title"> <?php echo  $data['servieces_id']; ?>
                                <span class="card-title">. <?php echo  $data['servieces_name'];
                                                            if ($data['status'] == 0) {
                                                            ?>
                                        <i class="fa fa-check text-success"></i>
                                    <?php
                                                            }
                                                            if ($data['status'] == 1) {
                                    ?>
                                        <i class="fa-sharp fa-solid fa-xmark text-danger"></i>
                                    <?php
                                                            }
                                    ?> </span>
                            </span>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php' ?>