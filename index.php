<div class="divLoaderApp">
    <div class="divHeaderLoader">
        <div class="DivItemLoaderFirts">
        </div>
        <i></i>
    </div>
    <div class="divCallLoader"></div>
    <div class="menuAappLoader">
        <div class="divItemLoader"></div>
        <div class="divItemLoader"></div>
        <div class="divItemLoader"></div>
    </div>
    <div class="divFirtsMenuLoader">
        <div class="divItemMenuLoader"></div>
        <div class="divItemMenuLoader"></div>
        <div class="divItemMenuLoader"></div>
        <div class="divItemMenuLoader"></div>
    </div>
    <div class="divNotificationLoader">
        <div class="divNotificationItemLoader"></div>
        <div class="divNotiItemLoader"></div>
    </div>
    <div class="divSliderLoader"></div>
    <div class="divContactLoader">
        <div class="divRow1Loader">
            <div class="divItemContactLoader"></div>
        </div>
        <div class="divRo2Loader">
            <div class="divItemContact2Loader"></div>
            <div class="divItemContact2Loader"></div>
            <div class="divItemContact2Loader"></div>
        </div>
    </div>
    <div class="divFooterLoader">
        <div class="divCalendarLoader">
            <div class="divItemCalendarLoader"></div>
            <div class="divItemCalendarLoader"></div>
        </div>
        <div class="divCalendarLoader">
            <div class="divPickerLoader"></div>
            <div class="divPickerLoader"></div>
        </div>
        <div class="divButtonLoader"></div>
    </div>
</div>
<?php include('header.php') ?>

    <!-- init  content text -->
    <div class="div-content-text">
        <div class="div-row1-content-text">
            <h4 class="h4-start"><i class="far fa-bell fa-2x ring"></i></h4>
        </div>
        <div class="div-row2-content-text">
            <div class="div-slider">
                <ul>
                    <li>                    
                        <p>
                            Reserva ahora al mejor precio Garantizada
                        </p>
                    </li>
                    <li>                    
                        <p>
                            Encuentra ofertas exclusivas en nuestro <br/> Hotel Veleros Web Oficial - Hotel Economico en Cartagena
                        </p>
                    </li>
                    <li>                    
                        <p>
                             Reserva desde nuestra web oficial <br/> con desayuno incluido y Wifi gratis
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end content text  -->
    <!-- init carousel -->
    <!-- <div class="div-carousel">
    </div> -->
    <div class="div-carousel">
        <div class="slider slider1"></div>
        <div class="slider slider2"></div>
        <div class="slider slider3"></div>
        <div class="slider slider4"></div>
    </div>
    <!-- end carousel -->
    <!-- init reservation -->
    <div class="div-reservation">
        <div class="div-row-reservation">
            <a href="#"><h3>Reserva Ahora</h3></a>
        </div>
        <div class="div-row1-reservation">
            <a href="https://api.whatsapp.com/send?phone=573107231698"><i class="fab fa-whatsapp fa-2x"></i></a>
            <div class="div-line"></div>
            <!-- <a href="https://m.me/HotelGoldenPalermo" target="_blank"><i class="fab fa-facebook-messenger fa-2x"></i></a> -->
            <!-- <div class="div-line"></div> -->
            <a href="mailto:booking@veleroshotelcartagena.com"><i class="fas fa-envelope fa-2x"></i></i></a>
            <i></i>
        </div>
    </div>
    <!-- end reservation -->
    <!-- init calendar -->
    <div class="div-content-calendar" >
        <div class="div-sub-father-calendar">
            <h2 class="h2-text-open">Entrada</h2>
            <h2 class="h2-text-close">Salida </h2>
        </div>
        <div class="div-father-calendar">
            <div class="div-line-calendar"></div>
            <div class="div-line-calendar"></div>
        </div>
    </div>
    <form action="https://wubook.net/wbkd/wbk/?lcode=1540499010" method="post" target="_blank">
    <div class="div-content-scuare">
        <div class="div-scuare-calendar">
            <div class="div-son1-calendar">
                <p><?php echo $dias[date('w')];?> </p>
                <h2><?php echo date('d');?></h2>
                <p><?php echo $meses[date('n')-1]." ".date('Y');?></p>
                <input type="text" data-role="date" class="calendar Datepicker" id="input" onclick="show()" name="dfrom">
            </div>
            <div class="div-son2-calendar">
                <p><?php echo $dias[date('w')];?> </p>
                <h2><?php echo date('d');?></h2>
                <p><?php echo $meses[date('n')-1]." ".date('Y');?></p>
                <input type="text" data-role="date" class="calendar Datepicker" id="input2" onclick="showNew()" name="dto" >
            </div>
        </div>
    </div>
    <div class="submit-button">
        <input type="submit" name="consultar" value="Ver Disponibilidad">
    </div>
    </form>
    <script type="text/javascript">
        $(window).on('load', function() { // makes sure the whole site is loaded 
            $(".divLoaderApp").fadeOut(); // will first fade out the loading animation 
            $(".divLoaderApp").delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            $('body').delay(350).css({'overflow':'visible'});
        })
    </script>
    <?php include('footer.php') ?>
