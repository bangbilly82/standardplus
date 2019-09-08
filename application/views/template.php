<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>resources/images/logo/splogoS.png">
    <link href="https://fonts.googleapis.com/css?family=Hind|PT+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin|Dosis" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>node_modules/bulma/css/bulma.css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/flexslider.css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/lightslider.css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/lightgallery.css">
    <title>
        <?php echo $title ?>
    </title>
    <script src="<?php echo base_url()?>resources/js/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4U9c07SFzJMw_4QZw6wdZKZB_muXbn9M&callback=initialyzeMaps" async defer></script>
    <script>
        function initialyzeMaps() {
            var soloCity = {
                lat: -6.378048,
                lng: 106.956911
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -6.378048,
                    lng: 106.956911
                },
                zoomControl: true,
                disableDoubleClickZoom: true,
                scrollwheel: false,
                zoom: 15
            });

            var marker = new google.maps.Marker({
                position: soloCity,
                map: map
            });
        }

    </script>
</head>

<body>
    <?php $this->load->view('header/index'); ?>

    <?php $this->load->view($content); ?>

    <?php $this->load->view('footer/index'); ?>
</body>

</html>
