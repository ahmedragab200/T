<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- swiper css link -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swipr@9/swiper-bundle.min.css"/> -->
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <title>Travel</title>
</head>
<body>
    



<!----------------------- php start ----------------- -->
<?php


$conn = mysqli_connect('localhost','root','','book_db');


if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];


$req = "INSERT INTO book_form(name, email, phone,location, address, guests, arrivals, leaving)VALUES
('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";


mysqli_query($conn, $req);

header("location:book.php");

}else{
    echo 'something went wrong try again';
}
































?>

<!----------------------- php end ----------------- -->

<!-- header section start -->

    <section class="header">
        <a href="home.php" class="logo">Travel.</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>

        <div class="fas fa-bars" id="menu-btn"></div>
    </section>



<!-- header section end  -->












<!-- footer section start  -->

    <section class="footer">
        <div class="box-container">

        <div class="box">
            <h3>extra links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> about us</a>
            <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
        </div>


        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +574-348-2848</a>
            <a href="#"><i class="fas fa-phone"></i> +856-227-1245</a>
            <a href="#"><i class="fas fa-envelope"></i> privacy@gimal.com</a>
            <a href="#"><i class="fas fa-map"></i> Egypt nne</a>
        </div>


        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
        </div>

        </div>
        <div class="credit"> created by <span>ahmed</span> | all rights reserved!</div>
    </section>


<!-- footer section end -->


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>