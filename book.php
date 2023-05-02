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
    <link rel="stylesheet" href="css/style1.css">


    <title>Travel</title>
</head>
<body>
    

<!-- header section start -->

    <section class="header">
        <a href="index.php" class="logo"><img hight="100%" src="images/[removal.ai]_tmp-644b570017f31.png" alt=""></a>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>

        <div class="fas fa-bars" id="menu-btn"></div>
    </section>



<!-- header section end  -->



<div class="heading" style="background: url(images/passport-4984783_960_720.jpg) no-repeat">
    <h1>book now</h1>
</div>

<!-- booking section start  -->
<section class="booking">

<h1 class="heading-title">book your trip!</h1>

    <form action="book_form.php" class="book-form" method="post">
        <div class="flex">

            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder='enter your name' name="name">
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder='enter your email' name="email">
            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder='enter your number' name="phone">
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder='enter your address' name="address">
            </div>
            <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder='place you want to visit' name="location">
            </div>
            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder='number of guests' name="guests">
            </div>
            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving">
            </div>
            
        </div>
        <input type="submit" value="submit" class="btn" name='send'>
    </form>
</section>
<!-- booking section end  -->









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
            <a href="#"><i class="fas fa-map"></i> Florence, Province of Florence, Italy</a>
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

WnyYwybGNX@*7mUGprTN
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>