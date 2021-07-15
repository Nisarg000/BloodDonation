<?php
$con = mysqli_connect("localhost", "root", "", "bluecross");
if (!$con) {
    die("Not Connected" . mysqli_connect_error());
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blood and Plasma Donation</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

</head>

<body>

    <?php
    include 'header.php';
    ?>


    <!-- ******************** Slider Starts Here ******************* -->
    <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="assets/images/slider/slider1.jpg" alt="" height="500px"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title">Ease to find Donors</h1>
                                    <p class="slider-text" style="color: transparent; user-select: none">Lorem Ipsum is simply dummy text of the printing
                                        and typesetting industry. Lorem Ipsum has been the industry's</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider2.jpg" alt="" height="500px"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">It's time for better help.</h1>
                                <p class="slider-text" style="color: transparent; user-select: none">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider3.jpg" alt="" height="500px"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">A drop for you, an ocean for someone else.</h1>
                                <p class="slider-text" style="color: transparent; user-select: none">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--  ************************* About Us Starts Here ************************** -->

    <div class="about-us container-fluid">
        <div class="container">

            <div class="row natur-row no-margin w-100">
                <!-- <div class="text-part col-md-6"> -->
                <div class="mx-auto" style="width: 300px;">
                    <h2 style="padding-top: 100px;">About Our Website</h2>
                    <p style="padding-bottom: 10px;">The most precious gift that one can give to another person is the
                        gift of life, which is why we
                        at Bluecross organization have created a solution for the problems: from motivating people to
                        donate blood, to helping them donate via camps and finally helping anyone in dire need via our
                        receipent page.
                    </p>
                </div>
                <div class="image-part col-md-6">
                    <div class="about-quick-box row">
                        <div class="col-md-6">
                            <div class="about-qcard">
                                <i class="fas fa-user"></i>
                                <br>
                                <a href="donate.php">Become a Life saver</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-qcard ">
                                <i class="fas fa-search-dollar red"></i>
                                <br>
                                <a href="fundraiser.php">Fund Raiser</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-qcard ">
                                <!-- <i class="fas fa-donate yell"></i> -->
                                <i class="fas fa-tint red"></i>
                                <br>
                                <a href="searchdonor.php">Find a donor</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-qcard ">
                                <i class="fas fa-map blu"></i>
                                <br>
                                <a href="about_us.php">Find us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- ################# Mission Vision Start Here #######################--->

    <section class="container-fluid mission-vision">
        <div class="container">
            <div class="row mission">
                <div class="col-md-6 mv-det">
                    <h1>Our Mission</h1>
                    <p style="padding-bottom: 10px;">Our mission is to help those who are in need of Blood or Plasma. We
                        all together can save lives.
                    </p>
                </div>
                <div class="col-md-6 mv-img">
                    <img src="assets/images/mission.jpg" alt="">
                </div>
            </div>

        </div>
    </section>





    <!-- ################# Charity Number Starts Here#######################--->


    <div class="doctor-message" style="background-color: #780000;">
        <div class="inner-lay" style="background-color: #780000;">
            <div class="container">
                <div class="row session-title">
                    <h2>Our Achievements in Numbers</h2>
                    <p>We can talk for a long time about advantages of our websites before other donation
                        facilities.
                        But you can read the following facts in order to make sure of all pluses of our websites:</p>
                </div>
                <div class="row">
                    <div class="col-sm-3 numb">
                        <h3>1</h3>
                        <span>YEAR OF EXPERIENCE</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>
                            <?php
                            $result = mysqli_query($con, "SELECT id FROM users");
                            $total = mysqli_num_rows($result);

                            echo "$total";
                            ?>
                        </h3>
                        <span>Active Donors</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>52+</h3>
                        <span>EVENTS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>48+</h3>
                        <span>FUND RAISED</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!--################### Our Team Starts Here #######################--->
    <section class="our-team team-11">
        <div class="container">
            <div class="session-title row">
                <h2>Meet our Team</h2>
            </div>
            <div class="row team-row d-flex justify-content-center">
                <!--main-->
                <div class="col-md-2 col-sm-4 im">
                    <!--im-->
                    <div class="single-usr">
                        <!--con-->
                        <img src="assets/images/team/teammem1.jpg" alt="">
                        <div class="det-o">
                            <h4>Harsh Shah</h4>
                            <i>Team Leader</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="single-usr">
                        <img src="assets/images/team/teammem2.jpg" alt="">
                        <div class="det-o">
                            <h4>Nisarg Jhatakia</h4>
                            <i>Team Member</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="single-usr">
                        <img src="assets/images/team/teammem3.jpg" alt="">
                        <div class="det-o">
                            <h4>Neeyati Mehta</h4>
                            <i>Team Member</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="single-usr">
                        <img src="assets/images/team/teammem4.jpg" alt="">
                        <div class="det-o">
                            <h4>Irish Ajaybharti</h4>
                            <i>Team Member</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="single-usr">
                        <img src="assets/images/team/teammem5.jpg" alt="">
                        <div class="det-o">
                            <h4>Yashvi Patel</h4>
                            <i>Team Member</i>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <?php
    include 'footer.php';
    ?>


</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>
<script>
    function friends() {
        var x = document.getElementById("right");
        x.innerHTML = '<?php include "/blooddonation/login.php"; ?>';
    }
    friends();
</script>

</html>