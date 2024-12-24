<?php include('shared/_header.php'); ?>
<main>
  <div class="big-wrapper light">
    <img src="./images/shape.png" alt="" class="shape" />

    <?php include('shared/_navbar.php'); ?>
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 col-md-6 d-flex justify-content-center get-started" style="height: 550px;">
          <div class=" d-flex justify-content-center align-items-center">
            <div>
              <div class="big-title">
                <h1>Enhancing Digital Government and Economy</h1>
                <h1>প্রজেক্টের অধীনে হাবিপ্রবি, দিনাজপুর</h1>
              </div>
              <p class="text">
                EDGE works on creating the enabling environment for digital government and the digital economy
              </p>
              <div class="cta">
                <a href="login.php" class="btn">Get started</a>
              </div>


            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 image-box">
          <img src="./images/hero_img.png" alt="Person Image" class="person" />
        </div>
      </div>
    </div>


    <?php include('shared/feature-cards.php'); ?>


    <div class="container mt-3">
      <hr>
    </div>

    <div class="container mt-3 carousel-box">

      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/edge_gallery1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/edge_gallery3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/edge_gallery2.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>

    <div class="container mt-3">
      <hr>
    </div>

  </div>


</main>




<?php include('shared/_footer.php'); ?>