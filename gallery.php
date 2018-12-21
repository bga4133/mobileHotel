<?php include('header.php') ?>
    <!-- end content text  -->
    <!-- init gallery -->
    <!-- <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div> -->
  
    <div class="div-container-gallery">
    <!-- Images used to open the lightbox -->
    <div class="row">
        <div class="column">
            <img src="img/galeria/1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
        </div>
        <div class="column">
            <img src="img/galeria/2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
        </div>
        <div class="column">
            <img src="img/galeria/3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
        </div>
        <div class="column">
            <img src="img/galeria/4.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
        </div>
        <div class="column">
            <img src="img/galeria/5.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow">
        </div>
        <div class="column">
            <img src="img/galeria/6.jpg" onclick="openModal();currentSlide(6)" class="hover-shadow">
        </div>
        <div class="column">
            <img src="img/galeria/7.jpg" onclick="openModal();currentSlide(7)" class="hover-shadow">
        </div>
        <div class="column">
            <img src="img/galeria/8.jpg" onclick="openModal();currentSlide(8)" class="hover-shadow">
        </div>
        <div class="column">
            <img src="img/galeria/9.jpg" onclick="openModal();currentSlide(9)" class="hover-shadow">
        </div>
        <div class="column">
            <img src="img/galeria/10.jpg" onclick="openModal();currentSlide(10)" class="hover-shadow">
        </div>
        <div class="column">
            <img src="img/galeria/11.jpg" onclick="openModal();currentSlide(11)" class="hover-shadow">
        </div>
        <div class="column">
            <img src="img/galeria/12.jpg" onclick="openModal();currentSlide(12)" class="hover-shadow">
        </div>
    </div>

    <!-- The Modal/Lightbox -->
    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">

            <div class="mySlides">
                <div class="numbertext">1 / 2</div>
                <img src="img/galeria/1.jpg" style="width:100%;">
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 3</div>
                <img src="img/galeria/2.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 4</div>
                <img src="img/galeria/3.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">4/ 5</div>
                <img src="img/galeria/4.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">5 / 6</div>
                <img src="img/galeria/5.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">6 / 7</div>
                <img src="img/galeria/6.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">7 / 8</div>
                <img src="img/galeria/7.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">8 / 9</div>
                <img src="img/galeria/8.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">9 / 10</div>
                <img src="img/galeria/9.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">10 / 11</div>
                <img src="img/galeria/10.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">11 / 12</div>
                <img src="img/galeria/11.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">12 / 13</div>
                <img src="img/galeria/12.jpg" style="width:100%">
            </div>
            <!-- Next/previous controls -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- Caption text -->
            <!-- Thumbnail image controls -->
        </div>
    </div>
</div>  

    <?php include('footer.php') ?>