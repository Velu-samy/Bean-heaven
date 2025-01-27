<?php
// Get the code from the query string
$code = isset($_GET['code']) ? htmlspecialchars($_GET['code']) : 'N/A';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>




<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Thank You for Booking</h5>
                <h5>Your code is: <b><?php echo $code; ?></b></h5>
                <a href="../index.php" class="btn btn-primary m-4">Back to Home Page</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

<style>
    body{
        background-size: cover;
        background-repeat:no-repeat;
        background-image: url(../pics/2632481\ \(1\)-Photoroom-Photoroom\ \(1\).png);
    }

    h6{
        margin-top: 15px;
    }


</style>
