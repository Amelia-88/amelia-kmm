
<!--==  Gallery  ==-->

    <section style="margin-top: 20px; margin-bottom: 70px">
    <div id="w">
        <div class="pricing-filter">
            <div class="pricing-filter-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header">
                                <h2 class="pricing-title" style="height: 130px; text-align: center; margin-top: 50px">Gallery</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

          <menu class="col-md-12" style="margin-top: 30px; padding-left: 27em; margin-bottom: 30px">
                <ul class="nav navbar-nav">
                    <li style="padding-right: 5em"><a href="<?php echo base_url('#'); ?>">ALL</a></li>
                    <li style="padding-right: 5em"><a href="<?php echo base_url('#'); ?>">EVENT</a></li>
                    <li style="padding-right: 5em"><a href="<?php echo base_url('#'); ?>">FOOD</a></li>
                    <li style="padding-right: 5em"><a href="<?php echo base_url('#'); ?>">TEAM</a></li>
                </ul>
            </menu>

    <div class="container" style="margin-top: 50px">
        <div class="row">
            <?php
            $i=0;
            $i++;
                 foreach ($gall as $row) :
                ?>

              <div class="column" style="padding-left: 20px">
                <img src="<?php echo base_url("assets/images/gallery/").$row->gambar;?>" style="width:100%; padding-bottom: 20px" onclick="openModal();currentSlide(<?php echo $i; ?>)" class="hover-shadow cursor">
              </div>
          <?php endforeach;?>

        </div>
    </div>
            <div class="col">
            <!--Tampilkan pagination-->
                <?php echo $pagination; ?>
            </div>


    <div id="myModal" class="modal" style="z-index: 99999999999;">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">
            <?php foreach ($gall as $row) : ?>
                
                <div class="mySlides">
                  <img src="<?php echo base_url("assets/images/gallery/").$row->gambar;?>" style="width:40%;margin-left: 30%;position: relative;top: -67px;margin-bottom: -67px;" class="img-responsive">
                </div>
            <?php 
                    endforeach;?>
         
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- <div class="slidercontainer"> -->
              <div class="columndemo">
              <?php 
              foreach ($gall as $row) :     
                  ?>

                    <img class="demo cursor" src="<?php echo base_url("assets/images/gallery/").$row->gambar;?>" style="float:left;width:50px;padding: 8px; margin: 0 !important" onclick="currentSlide(<?php echo $i++; ?>)">
              <?php 
              endforeach;
                 
              ?>
              
              </div>
            <!-- </div> -->       
      </div>
    </div>

</section>


    <script>
        function openModal() {
          document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
          document.getElementById("myModal").style.display = "none";
        }

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
          var dots = document.getElementsByClassName("demo");
          var captionText = document.getElementById("caption");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>
