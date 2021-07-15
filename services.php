<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Services</title>
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


    <!-- ################# Events Start Here#######################--->
    <section class="events">
        <div class="container">

            <div class="event-ro row">
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/service1.png" alt="">
                        <h4>Fundraiser</h4>
                        <p class="desic">Help raising funds to save lives.</p>
                        <form action="fundraiser.php" method="post">
                            <button type="submit" class="btn btn-success btn-sm">Fund Raisers</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/service2.jpg" alt="">
                        <h4>Donate!</h4>
                        <p class="desic">Want to donate blood? Click here</p>
                        <form action="donate.php" method="post">
                            <button type="submit" class="btn btn-success btn-sm">Donate</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/service3.jpg" alt="">
                        <h4>Find Donors</h4>
                        <p class="desic">Want blood? Find donors here</p>
                        <form action="searchdonor.php" method="post">
                        <button class="btn btn-success btn-sm">Find donors</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <!--  ************************* Footer Starts Here ************************** -->

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

</html>