<?php include 'includes/header.php' ?>

<?php
include 'includes/connection.php';


$select_query = mysqli_query($con, "SELECT * FROM `published_hotel` ");

?>

<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400&display=swap" rel="stylesheet">

<style>

    .card-img:hover {
        z-index: 10;
        box-shadow: 0 8px 50px #F4F4F4;
        transform: scale(1.07);
        margin-bottom: 1.5rem;
    }
</style>    

<div class="container d-flex justify-content-center mt-5 mb-5">
    <div class="row">
        <?php

        while ($data = mysqli_fetch_array($select_query)) {
        ?>

            <a href="hotel_description.php?id=<?php echo $data['id']; ?> " class=" mt-5 mx-auto">
                <div class="col-md-4">
                    <div class="card" style="width: 300px; height:400px;">
                        <div class="card-body" style="box-shadow: 2px 2px 20px 5px lightgray;">
                            <div class="card-img-actions">
                                <img class="card-img img-fluid" style="width: 260px; height: 210px;" src="upload/<?php echo $data['hotel_image']; ?>">

                                <h5 class="card-title mt-3" style="font-family: 'Josefin Sans', sans-serif; font-size: 1.7rem;">Hotel <?php echo $data['hotel_name']; ?> </h5>

                                <i>
                                    <p class="card-text"> <?php echo $data['hotel_address'] ?> </p>
                                </i>

                            </div>
                        </div>
                    </div>
                </div>
            </a>

        <?php
        }
        ?>
    </div>
</div>

<?php include 'includes/footer.php' ?>