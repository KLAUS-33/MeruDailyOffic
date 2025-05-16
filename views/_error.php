<?php
/**
 * @var \Exception|null $exception
 */

// Ensure $exception exists before accessing its properties
$errorCode = $exception->getCode() ?? 500;
$errorMessage = $exception->getMessage() ?? 'An unexpected error occurred.';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta name="author" content="mcdcu-developers">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/assets/assets/images/logo/favicon.png" rel="icon" type="image/x-icon">
    <link href="/assets/assets/images/logo/favicon.png" rel="shortcut icon" type="image/x-icon">

    <title><?php echo $exception->getCode() ?></title>

    <!-- font -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <!-- Icons -->
    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="images/logo/favicon.png">

</head>
<body>
    <div id="wrapper">
         <!-- page-404 -->
         <section class="page-404-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="image">
                            <img src="images/item/404.svg" alt="">
                        </div>
                        <div class="title">
                            Oops... <?php echo $exception->getCode() ?>
                        </div>
                        <p><?php echo $exception->getMessage() ?></p>
                        <a onclick="history.back()"
                            class="tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn">Go Back</a>
                            
                    </div>
                </div>
            </div>
        </section>
        <!-- /page-404 -->
    </div>


    <!-- latest jquery-->
    <script src="/assets/assets/js/jquery-3.6.3.min.js"></script>

    <!-- Bootstrap js-->
    <script src="/assets/assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>


</body>

</html>