<?php include 'app/views/Common/header.php' ?>

    <div class="content">

    <!--CONTENT START-->
    <div class="page-wrapper">
        <div class="slideshow-container">
            <!--first slide content-->
            <div class="mySlides fade">
				<div class ="image1" ></div>
               
                <div class="text">
					Welcome to
					<h2 class="slide-text">JOBSTERS</h2>
					Your career in our claws!
				</div>
            </div>
            <!--second slide content-->
            <div class="mySlides fade">
				<div class ="image2" ></div>
                
                <div class="text">
					
					<h2 class="slide-text">NETWORKING</h2>
		
				</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
			
			
			
			
        </div>



    </div>
   <div class="row1">
                <div class="section2">


				</div>
				
                <div class="section3">
					
					<h2 class="">CONNECT WITH PROFESSIONALS</h2>
					<div class="">
Job networking is a powerful tool for finding job opportunities and building meaningful connections in your industry. By connecting with other professionals, you can tap into their knowledge and experience, learn about job openings before they are advertised, and even get recommendations for positions that match your skills and interests.
					<div class="hyphen">—</div>
					
					</div>
				</div>	
	</div>				
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
