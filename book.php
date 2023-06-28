<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>

    <!-- swipper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css" />

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    <style>
        * {
            /* Change your font family */
            font-family: sans-serif;
        }

        .content-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 25px;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .content-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .content-table th,
        .content-table td {
            padding: 12px 15px;
        }

        .content-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .content-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .content-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .content-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }
    </style>


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
            <a href="signin.php">signin</a>

        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section end -->

    <div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
        <h1>book now</h1>
    </div>



    <!-- booking section starts -->

    <!-- <section class="booking">
        <h1 class="heading-title">book your slot</h1>



        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name*:</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>

                <div class="inputBox">
                    <span>gender*:</span>
                    <label>male </label><input type="radio" name="gender" value="male">
                    <label>female </label><input type="radio" name="gender" value="female">

                </div>

                <div class="inputBox">
                    <span>mobile*:</span>
                    <input type="number" placeholder="enter your mobile no." name="mobile">
                </div>

                <div class="inputBox">
                    <span>email*:</span>
                    <input type="email" placeholder="enter your email id" name="email">
                </div>

                <div class="inputBox">
                    <span>state*:</span>
                    <select id="state" name="state">
                        <option selected>Choose...</option>
                        <option value="AP">Andhra Pradesh</option>
                        <option value="AR">Arunachal Pradesh</option>
                        <option value="AS">Assam</option>
                        <option value="BR">Bihar</option>
                        <option value="CH">Chandigarh</option>
                        <option value="CT">Chhattisgarh</option>
                        <option value="DN">Dadra and Nagar Haveli</option>
                        <option value="DD">Daman and Diu</option>
                        <option value="DL">Delhi</option>
                        <option value="GA">Goa</option>
                        <option value="GJ">Gujarat</option>
                        <option value="HR">Haryana</option>
                        <option value="HP">Himachal Pradesh</option>
                        <option value="JK">Jammu and Kashmir</option>
                        <option value="JH">Jharkhand</option>
                        <option value="KA">Karnataka</option>
                        <option value="KL">Kerala</option>
                        <option value="LA">Ladakh</option>
                        <option value="LD">Lakshadweep</option>
                        <option value="MP">Madhya Pradesh</option>
                        <option value="MH">Maharashtra</option>
                        <option value="MN">Manipur</option>
                        <option value="ML">Meghalaya</option>
                        <option value="MZ">Mizoram</option>
                        <option value="NL">Nagaland</option>
                        <option value="OR">Odisha</option>
                        <option value="PY">Puducherry</option>
                        <option value="PB">Punjab</option>
                        <option value="RJ">Rajasthan</option>
                        <option value="SK">Sikkim</option>
                        <option value="TN">Tamil Nadu</option>
                        <option value="TG">Telangana</option>
                        <option value="TR">Tripura</option>
                        <option value="UP">Uttar Pradesh</option>
                        <option value="UT">Uttarakhand</option>
                        <option value="WB">West Bengal</option>

                    </select>
                </div>

                <div class="inputBox">
                    <span>district*:</span>
                    <select id="district" name="district">
                        <option selected>Choose...</option>
                        <option value="ahemdabad">ahemdabad</option>
                        <option value="canada">Kodinar</option>
                        <option value="una">Una</option>
                        <option value="veraval">Veraval</option>
                        <option value="limdi">Limdi</option>
                        <option value="bhavnagar">Bhavnagar</option>
                        <option value="dhandhuka">Dhandhuka</option>

                    </select>
                </div>

                <div class="inputBox">
                    <span>zipcode*:</span>
                    <input type="text" placeholder="enter your name" name="zipcode">
                </div>

                <div class="inputBox">
                    <span>password*:</span>
                    <input type="password" placeholder="" name="password">
                </div>

            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section> -->



    <br><br><br><br><br><br>

    <div class="container justify-content-center vivek" style="color: aliceblue; background-color:#f3f3f3; color:black;font-size:2rem">
        <form class="row g-3" action="book_form.php" method="post">
            <div class="col-md-6">

                <label for="firstname" class="form-label">Username:*</label>
                <input type="text" name="name" class="form-control" id="firstname" placeholder="Vivekkumar">
            </div>



            <div class="col-6">
                <label for="mobileno" class="form-label">Mobile No.:</label>
                <input type="number" name="mobile" class="form-control" id="mobile" placeholder="9313290519">
            </div>
            <div class="col-6">
                <label for="emailid" class="form-label">Email Id:</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="valavivek@gmail.com">
            </div>



            <div class="col-6">
                <label for="state" class="form-label">State:*</label>
                <select id="state" name="state" class="form-select" aria-label="Default select example">
                    <option selected>Choose...</option>
                    <option value="AP">Andhra Pradesh</option>
                    <option value="AR">Arunachal Pradesh</option>
                    <option value="AS">Assam</option>
                    <option value="BR">Bihar</option>
                    <option value="CH">Chandigarh</option>
                    <option value="CT">Chhattisgarh</option>
                    <option value="DN">Dadra and Nagar Haveli</option>
                    <option value="DD">Daman and Diu</option>
                    <option value="DL">Delhi</option>
                    <option value="GA">Goa</option>
                    <option value="GJ">Gujarat</option>
                    <option value="HR">Haryana</option>
                    <option value="HP">Himachal Pradesh</option>
                    <option value="JK">Jammu and Kashmir</option>
                    <option value="JH">Jharkhand</option>
                    <option value="KA">Karnataka</option>
                    <option value="KL">Kerala</option>
                    <option value="LA">Ladakh</option>
                    <option value="LD">Lakshadweep</option>
                    <option value="MP">Madhya Pradesh</option>
                    <option value="MH">Maharashtra</option>
                    <option value="MN">Manipur</option>
                    <option value="ML">Meghalaya</option>
                    <option value="MZ">Mizoram</option>
                    <option value="NL">Nagaland</option>
                    <option value="OR">Odisha</option>
                    <option value="PY">Puducherry</option>
                    <option value="PB">Punjab</option>
                    <option value="RJ">Rajasthan</option>
                    <option value="SK">Sikkim</option>
                    <option value="TN">Tamil Nadu</option>
                    <option value="TG">Telangana</option>
                    <option value="TR">Tripura</option>
                    <option value="UP">Uttar Pradesh</option>
                    <option value="UT">Uttarakhand</option>
                    <option value="WB">West Bengal</option>

                </select>
            </div>



            <div class="col-6">
                <label for="district" class="form-label">District:*</label>
                <select id="district" name="district" class="form-select" aria-label="Default select example">
                    <option selected>Choose...</option>
                    <option value="ahemdabad">ahemdabad</option>
                    <option value="canada">Kodinar</option>
                    <option value="una">Una</option>
                    <option value="veraval">Veraval</option>
                    <option value="limdi">Limdi</option>
                    <option value="bhavnagar">Bhavnagar</option>
                    <option value="dhandhuka">Dhandhuka</option>

                </select>
            </div>


            <div class="col-6">
                <label for="apmc" class="form-label">Select Apmc:*</label>
                <select id="apmct" name="apmc" class="form-select" aria-label="Default select example">
                    <option selected>Choose...</option>
                    <option value="">Select an APMC</option>
                    <option value="amreli">Amreli APMC</option>
                    <option value="ahmedabad">Ahmedabad APMC</option>
                    <option value="baroda">Baroda APMC</option>
                    <option value="bhavnagar">Bhavnagar APMC</option>
                    <option value="gandhinagar">Gandhinagar APMC</option>
                    <option value="jamnagar">Jamnagar APMC</option>
                    <option value="junagadh">Junagadh APMC</option>
                    <option value="rajkot">Rajkot APMC</option>
                    <option value="surat">Surat APMC</option>
                    <option value="surat">kodinar APMC</option>
                    <option value="surat">Una APMC</option>
                    <option value="surat">Talala APMC</option>
                    <option value="surat">Somnath APMC</option>
                    <option value="surat">Veraval APMC</option>
                </select>
            </div>


            <div class="col-md-6">
                <label for="date" class="form-label">Enter Date:*</label>
                <input type="date" name="date" class="form-control" id="date">
            </div>




            <div class="col-md-6">
                <label for="goods" class="form-label">Select your Goods:*</label>
                <select id="goods" name="goods" class="form-select">

                    <option value="">Select a Crop</option>
                    <option value="wheat">Wheat</option>
                    <option value="rice">Rice</option>
                    <option value="maize">Maize</option>
                    <option value="cotton">Cotton</option>
                    <option value="groundnut">Groundnut</option>
                    <option value="pulses">Pulses</option>
                    <option value="sugarcane">Sugarcane</option>
                    <option value="vegetables">Vegetables</option>
                    <option value="fruits">Fruits</option>
                    <option value="banana">Banana</option>
                    <option value="coconut">Coconut</option>
                    <option value="guava">Guava</option>
                    <option value="lemon">Lemon</option>
                    <option value="mango">Mango</option>
                    <option value="onion">Onion</option>
                    <option value="potato">Potato</option>
                    <option value="tomato">Tomato</option>
                    <option value="chickpeas">Chickpeas</option>
                    <option value="peanuts">Peanuts</option>
                    <option value="kidney beans">Kidney Beans</option>
                </select>
            </div>





            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Please sure that all details above are correct.
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="vala btn btn-warning" style="display:block; height:40px;width:800px;margin-left:199px;background-color:#009879;color:aliceblue" value="submit" name="send">Submit</button>
                <br>
            </div>
        </form>
    </div>
    <br><br><br><br>
    <!-- booking section end -->






    <!-- current booking section start -->

    <section class="services">
        <h1 class="heading-title">your current booking</h1>
        <div class="box-container">
            <table>

            </table>
        </div>

    </section>

    <!-- current booking section start -->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>How to Style HTML Tables with CSS</title>
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>



        <center>
            <?php
            include("book_form.php");
            $connection = mysqli_connect("localhost", "root", "", "bookingweb");


            // Assuming you have already established a database connection
            // Replace 'your_database_name' and 'your_table_name' with the actual names

            // Execute the query to retrieve data from the table

            $query = "SELECT name, mobile, email, state, district, apmc, date, goods FROM book_form WHERE email = 'valavivek2019@gmail.com'";
            $result = mysqli_query($connection, $query);

            // Check if the query was successful
            if ($result) {
                // Create an HTML table
                echo '<table class="content-table">';
                echo '<tbody>';



                // Iterate over the result set
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>Username</td>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '</tr>';

                    echo '<tr class="active-row">';
                    echo '<td>Mobile</td>';
                    echo '<td>' . $row['mobile'] . '</td>';
                    echo '</tr>';

                    echo '<tr>';
                    echo '<td>Email</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '</tr>';

                    echo '<tr class="active-row">';
                    echo '<td>State</td>';
                    echo '<td>' . $row['state'] . '</td>';
                    echo '</tr>';

                    echo '<tr>';
                    echo '<td>District</td>';
                    echo '<td>' . $row['district'] . '</td>';
                    echo '</tr>';

                    echo '<tr class="active-row">';
                    echo '<td>Apmc</td>';
                    echo '<td>' . $row['apmc'] . '</td>';
                    echo '</tr>';

                    echo '<tr>';
                    echo '<td>Date</td>';
                    echo '<td>' . $row['date'] . '</td>';
                    echo '</tr>';

                    echo '<tr class="active-row">';
                    echo '<td>Goods</td>';
                    echo '<td>' . $row['goods'] . '</td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';

                // Free the result set
                mysqli_free_result($result);
            } else {
                // Handle the case when the query fails
                echo 'Error executing the query: ' . mysqli_error($connection);
            }

            // Close the database connection
            mysqli_close($connection);
            ?>
        </center>
    </body>

    </html>

    <br><br>



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
    <script src="js/script.js"></script>
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>