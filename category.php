<?php
include './components/header.php';
?>

<div class="breadcrum">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <span>Home</span> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
        </svg> <span>Treadmills</span>
      </div>
    </div>
  </div>
</div>

<section class="category-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="section-title">
          Treadmills
        </h1>
      </div>
    </div>
    <div class="cetegory">
      <div class="row">
        <div class="col-md-2">
          <div class="filter">
            <div class="title">BRANDS</div>
            <ul>
              <li>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Brand 1 (10)
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                  <label class="form-check-label" for="flexCheckDefault">
                    Brand 1 (20)
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                  <label class="form-check-label" for="flexCheckDefault">
                    Brand 1 (50)
                  </label>
                </div>
              </li>
            </ul>



          </div>
          <div class="filter">
            <div class="title">AVAILABILITY</div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
              <label class="form-check-label" for="flexCheckDefault">
                In Stock (43)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" disabled type="checkbox" value="" id="flexCheckChecked">
              <label class="form-check-label" for="flexCheckChecked">
                Out Of Stock (0)
              </label>
            </div>
          </div>
          <div class="filter price-slide">
            <div class="title">price</div>
            <div class="wrapper-price-slide">
              <div class="slider">
                <div class="progress"></div>
              </div>
              <div class="range-input">
                <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
              </div>
              <div class="price-input">
                <div class="field">
                  <input type="number" class="form-control" value="2500">
                </div>
                <div class="separator">to</div>
                <div class="field">
                  <input type="number" class="form-control" value="7500">
                </div>
              </div>


            </div>
          </div>
          <a href="#" class="applybtn">APPLY</a>
        </div>
        <div class="col-md-10">
          <div class="row">
            <div class="col-md-3">
              <?php
              include './components/single-product.php';
              ?>
            </div>
            <div class="col-md-3">
              <?php
              include './components/single-product.php';
              ?>
            </div>
            <div class="col-md-3">
              <?php
              include './components/single-product.php';
              ?>
            </div>
            <div class="col-md-3">
              <?php
              include './components/single-product.php';
              ?>
            </div>
            <div class="col-md-3">
              <?php
              include './components/single-product.php';
              ?>
            </div>
            <div class="col-md-3">
              <?php
              include './components/single-product.php';
              ?>
            </div>
            <div class="col-md-3">
              <?php
              include './components/single-product.php';
              ?>
            </div>
            <div class="col-md-3">
              <?php
              include './components/single-product.php';
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<div class="py-5 my-4">
  <?php
  include './components/call-us.php';
  ?>
</div>

<div class="py-5 my-4">
  <?php
  include './components/why-choose-us.php';
  ?>
</div>


<?php
include './components/footer.php';
?>