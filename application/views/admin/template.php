<!doctype html>
<html lang="en">

<head>
    <title>
        <?php echo $title?>
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>resources/admin/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/admin/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/admin/assets/vendor/linearicons/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/admin/assets/css/lightslider.css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/admin/assets/css/lightgallery.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>resources/admin/assets/css/main.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>resources/admin/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url()?>resources/images/logo/splogoS.png">
    <script src="<?php echo base_url()?>resources/admin/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>resources/admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>    
</head>

<body>

    <!-- HEADER SECTION -->
    <?php $this->load->view('admin/header/index'); ?>
        <!-- END HEADER SECTION -->

        <!-- LEFT BAR SECTION -->
        <?php $this->load->view('admin/sidebar/index'); ?>
            <!-- END LEFT BAR SECTION -->

            <!-- MAIN -->
            <div class="main">
                <!-- MAIN CONTENT -->
                <div class="main-content">
                    <div class="container-fluid">

                        <!-- MAIN CONTENT SECTION -->
                        <?php $this->load->view($content); ?>
                            <!-- END MAIN CONTENT SECTION -->
                    </div>
                </div>
                <!-- END MAIN CONTENT -->
            </div>

            <!-- FOOTER SECTION -->
            <?php $this->load->view('admin/footer/index'); ?>
                <!-- END FOOTER SECTION -->
</body>

</html>