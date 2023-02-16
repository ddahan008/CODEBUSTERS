<?php include 'app/views/Common/header.php' ?>

    <div class="content">

    <!--CONTENT START-->
    <div class="page-wrapper">
        <div class="slideshow-container">
            <!--first slide content-->
            <div class="mySlides fade">

                <img src="../../../assets/main.jpg" alt="Jobsters" height="650px" style="width: 100%">
                <div class="text">Welcome to<h2 class="slide-text">JOBSTERS</h2>Your career in our claws!</div>
            </div>
            <!--second slide content-->
            <div class="mySlides fade">

                <img src="../../../assets/main2.jpg" alt="Network" height="650px" style="width: 100%">
                <div class="text-two"><h2 class="slide-text">NETWORKING</h2></div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

    </div>
    <h3>Home Page Content</h3>

    <!-- CONTENT END-->

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slides[slideIndex-1].style.display = "block";
        }
    </script>

<?php include 'app/views/Common/footer.php' ?>
