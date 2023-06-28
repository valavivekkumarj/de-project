<?php
// session_start();
// include "fuctions.php";

// $user_data = check_login($connection);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swipper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css" />
</head>


<body>

    <!-- header section start -->
    <section class="header">
        <a href="home.php" class="logo">APMC.</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">news</a>
            <a href="book.php">booking</a>
            <a href="signup.php">login&signup</a>

        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section end -->



    <!-- home section satrs -->

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>explore,discover & use</span>
                        <h3>Applying new technologies in farming</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class=" swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>explore,discover & use</span>
                        <h3>sell your crop globally</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>explore,discover & use</span>
                        <h3>dicsover new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- home section ends  -->




    <!-- services section start -->
    <br><br><br><br>
    <section class="services">
        <h1 class="heading-title">our services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/logo1.png" alt="">
                <h3>satellite</h3>
            </div>

            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>GPS technologies</h3>
            </div>

            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>drones</h3>
            </div>

            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>sensors</h3>
            </div>

            <div class="box">
                <img src="images/icon-5.png" alt="">
                <h3>smart irigation</h3>
            </div>

            <div class="box">
                <img src="images/icon-6.png" alt="">
                <h3>automation</h3>
            </div>
        </div>

    </section>
    <br><br><br><br>

    <!-- services section end -->




    <!-- home about section start -->


    <section class="home-about">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Apmc sloat booking is a web application built in PHP. It provides the farmers, our
                A farmer can create an account in your website with his username and password.
                According to APMC used its data and in APMC When a farmer creates ans and the problems that have
                fallen in the workplace and the businessmen, the farmers easily booked their slot
                already by its crop. The main users in the project can be categorized into three
                modules as follow
                account, his password and username are stored in our database which will
                facilitate re-using to login and he can easily book a slot to sell his crops in APMC
                using the APMC booking page. <br>Our purpose of our website is to remove the farmers and the problems that have
                fallen in the workplace and the businessmen, the farmers easily booked their slot
                already by its crop. The main users in the project can be categorized into three
                modules as follow: </p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!-- home about section end -->

    <!-- home packages section starts -->
    <br><br><br><br>
    <section class="home-packages">
        <h1 class="heading-title"> our customers</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>normal veg buyer</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore officia tempore reiciendis est at. Eius cum cupiditate reiciendis nobis. Ex voluptate maiores id atque asperiores, ullam pariatur commodi totam praesentium neque cumque excepturi! Aliquam excepturi tempora at repellendus, ipsa accusantium laudantium cumque placeat, error est pariatur nobis unde. Magni, perferendis.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>farmer</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore officia tempore reiciendis est at. Eius cum cupiditate reiciendis nobis. Ex voluptate maiores id atque asperiores, ullam pariatur commodi totam praesentium neque cumque excepturi! Aliquam excepturi tempora at repellendus, ipsa accusantium laudantium cumque placeat, error est pariatur nobis unde. Magni, perferendis.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>farming shop owner</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore officia tempore reiciendis est at. Eius cum cupiditate reiciendis nobis. Ex voluptate maiores id atque asperiores, ullam pariatur commodi totam praesentium neque cumque excepturi! Aliquam excepturi tempora at repellendus, ipsa accusantium laudantium cumque placeat, error est pariatur nobis unde. Magni, perferendis.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>


        </div>

        <div class="load-more"><a href="package.php" class="btn">load more</a></div>
        <br><br><br><br>

    </section>

    <!-- home packages section end-->

    <!-- home offer section start -->
    <br><br><br><br>
    <section class="home-offer">
        <div class="content">
            <h3>lets grow together</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias dolores deserunt excepturi? Minima veritatis numquam quis voluptates labore quam esse dolores. Corporis voluptatibus quam libero, veniam dolorem consequatur eveniet ea labore id autem, a minus facere reiciendis obcaecati laboriosam natus. Rerum mollitia quo incidunt sunt et delectus sequi dolor tenetur?</p>
            <a href="book.php" class="btn">Book now</a>
        </div>
        <br><br><br><br>
    </section>

    <!-- home offer section ends -->








    <!-- footer section start -->

    <section class="footer">

        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
                <a href="logout"><i class="fas fa-angle-right"></i>logout</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>term of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i>+91 9313290519</a>
                <a href="#"><i class="fas fa-phone"></i>+91 9313290519</a>
                <a href="#"><i class="fas fa-envelope"></i>valavivek2019@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Bhavnagar,india - 364060</a>
            </div>

            <div class="box">
                <h3>folow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagrame</a>
                <a href="#"><i class="fab fa-linkedin"></i>Linkedlink</a>
            </div>

        </div>

        <div class="credit">created by <span>mr. Vala vivekkumar</span> | all rights reserved!</div>
    </section>

    <!-- footer section end -->





    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom javascript file link -->
    <script src="script.js"></script>
</body>

</html>