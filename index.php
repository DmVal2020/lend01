<!DOCTYPE html>
<html lang="en">

<head>
  <title>ComputAge</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/icons/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-touch-icon.png">
  <link rel="icon" href="images/icons/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" href="images/icons/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" href="images/icons/android-chrome-192x192.png" sizes="192x192" />
  <link rel="icon" href="images/icons/android-chrome-512x512.png" sizes="512x512" />
  <link rel="manifest" href="site.webmanifest">

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name=" author" content="" />

  <meta property="og:title" content="ComputAge" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="images/logo.png" />
  <meta property="og:url" content="" />
  <meta property="og:description" content="" />

  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/media.css" />
</head>

<body data-bs-spy="scroll" data-bs-target=".nav-menu">
  <div class="wrapper">

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');
    mb_internal_encoding('UTF-8');
 
    include 'blocks/header.php';
    include 'blocks/main.php';

    ?>

  </div>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>