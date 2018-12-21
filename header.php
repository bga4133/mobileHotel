<?php
    $dias = array("Dom","Lun","Mar","Mie","Jue","Vie","Sáb");
    $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");            
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins:900|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet"  href="http://code.jquery.com/mobile/git/jquery.mobile-git.css" /> 
	<link rel="stylesheet" href="js/jquery.mobile.datepicker.css" />
    <link rel="stylesheet" href="js/jquery.mobile.datepicker.theme.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <!-- <link rel="icon" type="image/png" href="http://www.hotel33conquest.co/wp-content/themes/marketinghotelero/IMAGEN/favicon.png" /> -->
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script> 
	<script src="js/external/jquery-ui/datepicker.js"></script>
	<!-- <script src="http://code.jquery.com/mobile/git/jquery.mobile-git.js"></script>  -->
    <script src="js/jquery.mobile.datepicker.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    <title>Hotel Veleros Web Oficial - Hotel Economico en Cartagena</title>
</head>
<body>
    <!-- header -->
    <header class="header-app">
        <p> <i class="fa fa-phone"></i>+57 310 723 1698 / +57 (5) 655 29 74</p>
        <a class="a-father-i" href="tel:+576552974">
            <i class="fa fa-phone"></i>
        </a>
    </header>
    <!-- sub-menu -->
    <div class="sub-header">
        <div class="text-sub-header">
            <p>Sitio Web oficial</p>
            <div class="div-starst">
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
            </div>
        </div>  
        <div class="logo-sub-header">
            <a href="index.php"> <img src="img/logo.png" alt="Hotel Veleros Web Oficial - Hotel Economico en Cartagen" class="img-logo"></a>
        </div>
        <div class="div-countrys">
            <select>
                <option value="ES">ES</option>
                <option value="EN">EN</option>
            </select>
        </div>
    </div>
    <!-- menu -->
    <div class="menu-app">
        <!-- <a href="#" class="menu-item-app"><i class="fa fa-check"></i></i>Promociones</a>-->
        <a href="room.php" class="menu-item-app"><i class="fa fa-bed"></i>Habitaciones</a>
        <a href="gallery.php" class="menu-item-app"><i class="fa fa-camera"></i></i>Fotos</a>
        <a href="map.php" class="menu-item-app"><i class="fas fa-map-marker-alt"></i>Ubicación</a>
        <a href="https://wubook.net/wbkd/wbk/?lcode=1540499010" target="_blank" class="menu-item-app book-link"><i class="fas fa-calendar-alt"></i>Reservas</a>
    </div>
    <!-- end-menu -->