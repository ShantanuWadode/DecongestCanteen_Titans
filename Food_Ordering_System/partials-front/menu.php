<?php include('config\constants.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Lato:wght@100&family=Parisienne&family=Poppins:wght@200&family=Roboto+Mono:wght@100&display=swap"
        rel="stylesheet">
</head>
<style>
    element.style {
    font-size: 25px;
    font-weight: BOLD;
    text-align: center;
    font-family: sans-serif;
}
</style>
<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar" style="background: black;opacity: 0.8; position:static;">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/LOGO.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="contact us/contactUs.html">Contact</a>
                    </li>
                    <li>
                        <a href="about us/aboutUs.html">About Us</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->


    