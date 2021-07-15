<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bluecross";

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
    <title>Search</title>
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



    <section class="search-sec">
        <div class="container" style="padding-top: 50px; padding: 50px;">
            <form action="search.php" method="post" novalidate="novalidate">
                <div class="row">
                    <div class="col-lg-14">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <input type="text" class="form-control search-slt" name="searchCity" style="padding: 5px;" placeholder="Enter City">
                            </div>&nbsp;&nbsp;
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <input type="text" class="form-control search-slt" name="searchState" style="padding: 5px;" placeholder="Enter State">
                            </div>&nbsp;&nbsp;
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <select class="form-control search-slt" style="padding: 5px;" id="exampleFormControlSelect1" name="searchBlood">
                                    <option>Select Blood Group</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>&nbsp;&nbsp;
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <button type="button" class="btn btn-primary wrn-btn" name="subsearch" style="border-color: #669BBC; background: #669BBC; padding: 5px;">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <?php
    if (isset($_POST['subsearch'])) {

        $city = $_POST['searchCity'];
        $state = $_POST['searchState'];
        $bloodtype = $_POST['searchBlood'];
        $counter = 0;
        $totalcount = mysqli_query($con, "SELECT COUNT(id) AS counts FROM users");
        $total = mysqli_fetch_assoc($totalcount)['counts'];


        $query = "select * from users where bloodgroup='$bloodtype' and state='$state' and city='$city'";
        $select_donors = mysqli_query($con, $query);

        if (!$select_donors) {
            die("Query failed." . mysqli_error($con));
        }
    ?>


        <?php
        while ($row = mysqli_fetch_assoc($select_donors)) {
            $namef = $row['name'];
            $bloodf = $row['bloodgroup'];
            $cityf = $row['city'];
            $statef = $row['state'];
            $mob = $row['mno'];

        ?>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 w-50">
                        <img src="assets/images/profile.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $namef; ?></h5>
                            <p class="card-text">Blood Group: <?php echo $bloodf; ?></p>
                            <p class="card-text"><?php echo $cityf . ", " . $statef; ?> </p>
                        </div>
                        <div class="card-footer">
                            <a href="tel:<?php echo $mno; ?>" class="btn btn-primary">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    }

    ?>


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