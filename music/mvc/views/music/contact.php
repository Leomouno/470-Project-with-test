  <?php  $this->view("music/header",$data); ?>

  <!-- contact -->
<div class="contact pad" id="contact">
<div class="container">
<!-- default heading -->
<div class="default-heading">
  <!-- heading -->
  <h2>Contact Us</h2>
</div>
<div class="row">
  <div class="col-md-4 col-sm-4">
    <!-- contact item -->
    <div class="contact-item ">
      <!-- big icon -->
      <i class="fa fa-street-view"></i>
      <!-- contact details  -->
      <span class="contact-details">MOHAKHALI DHAKA</span>
    </div>
  </div>
  <div class="col-md-4 col-sm-4">
    <!-- contact item -->
    <div class="contact-item ">
      <!-- big icon -->
      <i class="fa fa-wifi"></i>
      <!-- contact details  -->
      <span class="contact-details">music.site@musichub.com</span>
    </div>
  </div>
  <div class="col-md-4 col-sm-4">
    <!-- contact item -->
    <div class="contact-item ">
      <!-- big icon -->
      <i class="fa fa-phone"></i>
      <!-- contact details  -->
      <span class="contact-details">4567853575</span>
    </div>
  </div>
</div>
<!-- form content -->
<div class="form-content ">
  <!-- paragraph -->
  <p>Do you have any idea in your mind? Drop us a line.</p>
  <form role="form" id="contactForm" method="post">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
        </div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" name="message" rows="9" placeholder="Enter message"></textarea>
        </div>
      </div>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-lg btn-theme">Send Message</button>
    </div>
  </form>

</div>

</div>
</div>
      <?php  $this->view("music/footer",$data); ?>
