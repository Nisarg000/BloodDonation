<!doctype html>
<html lang="en">

<?php
if (isset($_POST['s'])) {
    $fname = $_POST['exampleInputfname'];
    $email = $_POST['exampleInputEmail1'];
    $pass = $_POST['inputPassword6'];
    $gen = $_POST['gender'];
    $age = $_POST['inputAge'];
    $bg = $_POST['blood'];
    $state = $_POST['inputState'];
    $city = $_POST['inputCity'];
    $mobile = $_POST['inputContact'];

}

//Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "bluecross";

//Connection Created
$con = mysqli_connect($servername, $username, $password, $database);
if (!$con) {
    die("Sorry failed: " . mysqli_connect_error());
} 
if(isset($_POST['s'])) {
    //Query to be executed
    $sql = "INSERT INTO `users` (`name`, `email`, `password`, `gender`, `age`, `bloodgroup`,`mno`,`city`,`state`) VALUES ('$fname', '$email', '$pass', '$gen', '$age', '$bg', '$mobile', '$city','$state')";
    $result = mysqli_query($con, $sql);
    if (isset($_POST['s'])) {

        if ($result) {
            $message = "Successfully Registered";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            $message1 = "User already Exists!";
            echo "<script type='text/javascript'>alert('$message1');</script>";
        }
    }
}

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Donate</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    <style>
        .form-label {
            margin-bottom: 0rem;
        }

        body {
            background-image: url(assets/images/background.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <!-- <h1>Donate</h1> -->

    <?php
    include 'header.php';
    ?>

    <div class="container" style="margin-top: 20px; margin-bottom: 20px; width: 70%; background-color: #FEF8EC; padding: 10px; opacity: 0.9; color: #003049;">
        <form action="#" method="POST" style="margin: 10px;">
            <div class="mb-3">
                <label for="exampleInputfname" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputfname" name="exampleInputfname" aria-describedby="emailHelp" style="margin-bottom: 0;">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp" style="margin-bottom: 0;">
                <div id="emailHelp" class="form-text" style="font-size: 12px;">We'll never share your email with anyone else.</div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label" style="margin-bottom: 1.5rem;">Password</label>
                </div>
                <div class="col-auto">
                    <input type="password" name="inputPassword6" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>

            <label for="inlineRadioOptions" class="form-label mr-3">Do you have any disease like Diabetes, HIV, etc.?</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">No</label>
            </div><br>
            <div class="mb-1"></div>

            <label for="inlineRadioOptions2" class="form-label mr-3">Is your weight above 50KG?</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">No</label>
            </div><br>
            <div class="mb-1"></div>

            <label for="inlineRadioOptions3" class="form-label mr-3">Have you recently got a tattoo?</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">No</label>
            </div><br>
            <div class="mb-1"></div>
            <div class="mb-3"></div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputAge" class="col-form-label" style="margin-bottom: 1.5rem;">Age</label>
                </div>
                <div class="col-auto">
                    <input type="password" id="inputAge" name="inputAge" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 p-0 mb-1">
                <select class="form-control search-slt" style="padding: 5px;" id="exampleFormControlSelect1" name="gender">
                    <option value="">Select Gender:</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 p-0 mb-1">
                <select class="form-control search-slt" style="padding: 5px;" id="exampleFormControlSelect1" name="blood">
                    <option value="">Select Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>

            <div class="mb-3"></div>

            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputContact" class="col-form-label" style="margin-bottom: 1.5rem;">Contact Number</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="inputContact" name="inputContact" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>

            <!-- <div class="mb-3"></div> -->

            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputState" class="col-form-label" style="margin-bottom: 1.5rem;">State</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="inputState" name="inputState" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>

            <!-- <div class="mb-3"></div> -->

            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputCity" class="col-form-label" style="margin-bottom: 1.5rem;">City</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="inputCity" name="inputCity" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>

            <!-- <div class="mb-2"></div> -->

            <button type="submit" class="btn btn-primary" name="s">Submit</button>
        </form>
    </div>

    <?php
    include 'footer.php';
    ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>