<?php session_start(); ?>

<?php include 'includes/header.php' ?>
<?php include 'includes/connection.php' ?>

<?php

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $login_query = mysqli_query($con, "SELECT  * FROM `published_hotel` WHERE email = '$email' && password = '$password' ");
    $num = mysqli_num_rows($login_query);

    if ($num == true) {

?>
        <script>
            location.replace('home.php');
        </script>
    <?php
        $_SESSION['email'] = $email;
    } else {
    ?>
        <script>
            alert("Email / Password are Incorrect...!");
            location.replace('login.php');
        </script>
<?php
    }
}

?>

<style>
    .hotel_name {
        width: 280px;
        height: 45px;
        border: 1px solid #DFA974;
    }
</style>

<div class="container bg-white mb-5 mt-5" style="box-shadow: 2px 2px 10px 2px black;">
    <div class="row">

        <div class="col-lg-6 mt-5">
            <img src="img/room/room-details.jpg" style="border-radius: 10px;">
        </div>

        <div class="col-lg-4">
            <div class="booking-form">
                <h3>Sign In</h3>
                <form action="" method="POST">
                    <div class="pt-2">
                        <label for="date-in">Email</label>
                        <input type="email" class="hotel_name" name="email" required>
                    </div>
                    <div class="pt-2">
                        <label for="date-out">Password</label>
                        <input type="password" class="hotel_name" name="password" required>
                    </div>

                    <button type="submit" name="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer.php' ?>