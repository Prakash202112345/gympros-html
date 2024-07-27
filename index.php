<?php
include './components/header.php';
?>

<section class="slider_wrapper">
  <div class="banner_slider">
    <div>
      <a href="">
        <img src="./assets/new-banner.png" alt="image" class="img-fluid">
      </a>
    </div>
    <div>
      <a href="">
        <img src="./assets/shipping-desktop-2022.png" alt="image" class="img-fluid">
      </a>
    </div>
    <div>
      <a href="">
        <img src="./assets/Summer-Savings-Clearance-Sale-Desktop.jpg" alt="image" class="img-fluid">
      </a>
    </div>
  </div>
</section>

<section class="section-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="section-title">FEATURED COMMERCIAL FITNESS EQUIPMENT</h2>
        <a href="#" class="view-all">View All</a>
      </div>
    </div>
  </div>
  <?php
  include './components/product-slider.php';
  ?>

</section>







<?php
include './components/footer.php';
?>