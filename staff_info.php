<?php

include 'includes/connection.php';
session_start();

?>

<?php include 'all file/header.php' ?>

<?php

$email = $_SESSION['email'];
$select_query = mysqli_query($con, "SELECT * FROM `published_hotel` WHERE email = '$email' ");
$data = mysqli_fetch_array($select_query);

?>

<style>
    hr {
        width: 15rem;
        height: 3px;
        background-color: #1CC88A;
        border: none;
    }

    .img {
        height: 12rem;
    }
</style>

<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400&display=swap" rel="stylesheet">


<div class="container w-50 mx-auto" style="font-family: 'Josefin Sans', sans-serif;">

    <h2 class="text-center text-info ">Hotel <?= $data['hotel_name'] ?> </h2>
    <hr class="mb-5 hr">

    <img src="upload/<?= $data['hotel_image'] ?>" width="500" height="350" style="border-radius: 1.5rem;">

</div>

<div class="container" style="font-family: 'Josefin Sans', sans-serif;">
    <div class="card mt-5">
        <div class="card-titel">
            <h2 class="text-center text-info pt-5" style="font-weight: bold;">STAFF INFORMATON</h2>
            <hr class="hr">
        </div>

        <div class="card mt-4 ml-4" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/staff_info/img6.png" class="img-fluid img rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title text-info">Manager</h3>
                        <p class="card-text text-success">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-danger">@manager</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4" style="margin-left: 32rem; max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title text-info">Vice Manager</h3>
                        <p class="card-text text-success">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-danger">@vicemanager</small></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="img/staff_info/img3.png" class="img-fluid img rounded-start">
                </div>
            </div>
        </div>

        <div class="card mt-4 ml-4" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/staff_info/img2.png" class="img-fluid img rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title text-info">Kitchen Manager</h3>
                        <p class="card-text text-success">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-danger">@kitchenmanager</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4" style="margin-left: 32rem; max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title text-info">Vice Kitchen Manager</h3>
                        <p class="card-text text-success">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-danger">@vicekitchenmanager</small></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="img/staff_info/img1.png" class="img-fluid img rounded-start">
                </div>
            </div>
        </div>

        <div class="card mt-4 ml-4" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/staff_info/img5.png" class="img-fluid img rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title text-info">Waiter</h3>
                        <p class="card-text text-success">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-danger">@waiter</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4 mb-4" style="margin-left: 32rem; max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title text-info">The Throt of the leaf</h3>
                        <p class="card-text text-success">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-danger">@panvalo</small></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="img/staff_info/img4.png" class="img-fluid img rounded-start">
                </div>
            </div>
        </div>

        <footer class="py-2 my-4">

            <p class="text-center border-top pt-3 text-muted">© About Of Our Hotels</p>
        </footer>

    </div>
</div>

<?php include 'all file/footer.php' ?>