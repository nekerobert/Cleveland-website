<?php 

include('includes/head.php');
echo "<title>Contact | {$sub_title}</title>";
?>


<!--page title start-->

<section class="page-title o-hidden" data-overlay="7" data-bg-img="images/bg/contact.jpg">
     <div class="container">
        <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
        <h1><span class="text-theme">Contact  Us</span></h1>
        <p>We would be glad to hear from you.</p>
      </div>
     </div>
    </div>
</section>

<!--page title end--> 


<!--body content start-->

<div class="page-content">

<!--contact start-->

<section class="contact">
  <div class="container">
    <div class="row row-eq-height">
      <div class="col-lg-8 col-md-12">
        <h2 class="title-2 text-black mb-4">We care about  <span>our customers</span></h2>
          <p>Please drop a message with us by filling the form below...</p>
         
          <p></p>
        <form method="post" target="_blank" action="https://usebasin.com/f/62748e0c33ff">
          <div class="messages"></div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input id="form_name" type="text" name="name" class="form-control" placeholder="Your First Name (eg: John)" required="required"  data validation="text" datavalidation-ignore="$"  pattern=^[a-zA-Z]*$>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input id="form_phone" type="tel" name="tel" class="form-control" placeholder="Your Phone Number (Optional)" data validation="tel" datavalidation-ignore="$"  pattern=^[0]\d{10}$)|(^[\+]?[234]\d{12}$ data-error="A valid phone number is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Your Email (eg: john@gmail.com)" required="required" data validation="email" datavalidation-ignore="$"  pattern=^[^\s@]+@[^\s@]+\.[^\s@]+$ id="inputEmail" data-error="A valid email is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <textarea id="form_message" name="message" class="form-control" placeholder="Your Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                <div class="help-block with-errors"></div>
              </div>
            </div>
               <!-- <div class="form-group">
                    <div class=""></div>
                    <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                    <div class="help-block with-errors"></div>
                </div> -->
            </div>
            <div class="form-group">
            <button class="btn btn-border btn-radius btn-iconic" type="submit" value="submit"><span>Submit <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i></span>
              </button>
              </div>

             
        </form>
      </div>
      <div class="col-lg-4 col-md-12 text-white form-info theme-bg radius md-mt-3">
        <h3 class="text-white">More Info</h3>
          <p>Cleveland Medical Laboratory can be contacted for your best services...</p>
        <ul class="contact-info list-unstyled mt-4">
          <li class="mb-4"><span class="media-icon"><i class="ti-map-alt" aria-hidden="true"></i></span><span>Address:</span>
            <p>No.16 Ogbomosho Street, After Chicken Republic, Area 8, Garki, Abuja.</p>
          </li>
          <li class="mb-4"><span class="media-icon"><i class="ti-mobile" aria-hidden="true"></i></span><span>Phone:</span><a href="tel:+2349064649996"> (+234) 906 464 9996</a> <br>
              <a href="tel:+2349064649996"> (+234) 806 487 2198</a> <br>
              <a href="tel:+2349064649996"> (+234) 703 166 9996</a>
              
          </li>
          <li class="mb-4"><span class="media-icon"><i class="ti-email" aria-hidden="true"></i></span><span>Email:</span><a href="mailto:info@clevelandmedlab.com"> info@clevelandmedlab.com</a>
          </li>
            <li class="mb-4"><span class="media-icon"><i class="ti-notepad" aria-hidden="true"></i></span><span>Service Hours:</span><a> Monday-Friday: 8am-8pm  <br>Saturdays: 9am-7pm</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!--contact end-->


<!--map start-->

<section class="o-hidden p-0">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-sm-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.3296596099067!2d7.4873834147866685!3d9.033662293517628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc367f97abf5fe173!2sCleveland%20Laboratory!5e0!3m2!1sen!2sng!4v1611587513011!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </div>
</section>

<!--map end-->

</div>

<!--body content end--> 

<!--footer start-->
<?php include('includes/footer.php'); ?>
<!--footer end-->

<!--page wrapper end-->

<!--back-to-top start-->

<div id="scroll-top"><a class="top arrow" href="#top"><i class="ti-arrow-up"></i></a></div>

<!--back-to-top end-->

 
<!-- inject js start -->

<!--== jquery -->
<?php include('includes/scripts.php'); ?>
