<?php 
include('includes/head.php');
echo "<title>Gallery | {$sub_title}</title>";
?>

<section class="page-title o-hidden" data-overlay="7" data-bg-img="images/about/about1.jpg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
        <h1> <span class="text-theme">Our Gallery</span></h1>
        <p>We operate with world-class, standard and top-notch equipments</p>
      </div>
    </div>
  </div>
</section>

<!--page title end-->
 

<!--body content start-->

<div class="page-content">

<!--gallery start-->

<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <ul id="lightgallery" class="list-unstyled row gallery style-2">
          <li class="col-md-4 col-sm-6" data-src="images/about/about3.jpg">
            <div class="gallery-item">
              <img src="images/about/about3.jpg" alt="">
              <div class="gallery-hover">
                <div class="gallery-title">
                  <a class="popup" href=""> <i class="ti-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="col-md-4 col-sm-6" data-src="images/about/lab-exam.jpg">
            <div class="gallery-item">
              <img src="images/about/lab-exam.jpg" alt="">
              <div class="gallery-hover">
                <div class="gallery-title">
                  <a class="popup" href=""> <i class="ti-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="col-md-4 col-sm-6" data-src="images/about/labtest.jpeg">
            <div class="gallery-item">
              <img src="images/about/labtest.jpeg" alt="">
              <div class="gallery-hover">
                <div class="gallery-title">
                  <a class="popup" href=""> <i class="ti-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="col-md-4 col-sm-6" data-src="images/about/blood-suger.jpeg">
            <div class="gallery-item">
              <img src="images/about/blood-suger.jpeg" alt="">
              <div class="gallery-hover">
                <div class="gallery-title">
                  <a class="popup" href=""> <i class="ti-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>

          <li class="col-md-4 col-sm-6" data-src="images/about/tumour-makers.jpg">
            <div class="gallery-item">
              <img src="images/about/tumour-makers.jpg" alt="">
              <div class="gallery-hover">
                <div class="gallery-title">
                  <a class="popup" href=""> <i class="ti-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="col-md-4 col-sm-6" data-src="images/bg/bg1.jpg">
            <div class="gallery-item">
              <img src="images/bg/bg1.jpg" alt="">
              <div class="gallery-hover">
                <div class="gallery-title">
                  <a class="popup" href=""> <i class="ti-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!--gallery end-->

<!-- contact section starts -->
<?php echo contact_section(); ?>
<!-- contact section ends -->

</div>
<!--body content end--> 


<!--footer start-->
<?php include('includes/footer.php'); ?>
<!--footer end-->

</div>

<div id="scroll-top"><a class="top arrow" href="#top"><i class="ti-arrow-up"></i></a></div>

<!--back-to-top end-->

 
<!-- inject js start -->

<!--== jquery -->
<?php include('includes/scripts.php'); ?>