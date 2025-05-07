<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Home - Hotel Booking Syestem</title>
  <?php include_once('./common/links.php'); ?>
</head>
<?php include_once('./common/header.php');?>
<body>
      <!-- -------------------- Slider [Start] ------------------------ -->
     <div class="container-fluid">
      <!-- Swiper -->
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="./assets/images/carousel/1.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="./assets/images/carousel/2.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="./assets/images/carousel/3.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="./assets/images/carousel/4.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="./assets/images/carousel/5.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="./assets/images/carousel/6.png" class="w-100 d-block"/>
      </div>
    </div>
  </div>

  <!-- Swiper JS -->
     </div>
    <!-- -------------------- Slider [End] ------------------------ -->

    <!-- -------------------- Avalibility form [Start] ------------------------ -->

    <div class="container avalibilty-form">
      <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded mt-4 ">
          <h5 class="text-center">Check Booking Avalibility</h5>
        <form>
          <div class="row d-flex align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500;">Check-in</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500;">Check-out</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500;">Adult</label>
              <select class="form-select shadow-none" aria-label="Default select example">
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight:500;">Children</label>
              <select class="form-select shadow-none" aria-label="Default select example">
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
            </div>
          </div>
        </form>

        </div>
      </div>
    </div>


    <!-- -------------------- Avalibility form [End] ------------------------ -->

    <!-- -------------------- Rooms Avalibilty [Start] ------------------------ -->
     <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Rooms</h2>

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ">
          <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
            <img src="./assets/images//rooms/1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-between">
                <h5>Simple Room</h5>
                <span class="badge rounded-pill bg-danger">Rs:2000 Per Night</span>
              </div>
              <div class="features mb-4">
                <h6 class="my-2">Features</h6>
                <span class="badge rounded-pill text-dark bg-light">2 Rooms</span>
                <span class="badge rounded-pill text-dark bg-light">2 Bathroom</span>
                <span class="badge rounded-pill text-dark bg-light">1 Balcony</span>
                <span class="badge rounded-pill text-dark bg-light">3 Sofa</span>
              </div>
              <div class="facilities mb-4">
                <h6 class="my-2">Facilities</h6>
                <span class="badge rounded-pill text-dark bg-light">Wifi</span>
                <span class="badge rounded-pill text-dark bg-light">Telivision</span>
                <span class="badge rounded-pill text-dark bg-light">AC</span>
                <span class="badge rounded-pill text-dark bg-light">Room Heater</span>
              </div>
                <h6 class="my-2">Guests</h6>
                <span class="badge rounded-pill text-dark bg-light">5 Adults</span>
                <span class="badge rounded-pill text-dark bg-light">4 Children</span>

              </div>
              <div class="rating mb-4">
                <h6 class="my-2">Rating</h6>
                <span class="badge rounded-pill text-dark bg-light fs-5">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex align-items-center justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm custom-bg text-white shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm  btn-outline-dark shadow-none">More Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="#" class="btn btn-sm btn-outline-dark rounded fw-bold shadow-none">More Rooms</a>
        </div>
      </div>
    </div>

    <!-- -------------------- Rooms Avalibility  [End] ------------------------ -->

    <!-- -------------------- Facilities [Start] ------------------------ -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Facilities</h2>
    <div class="container">
      <div class="row justify-content-evenly px-lg-0 px-md-0 px-5 column-gap-1">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="./assets/images/facilities/1.svg" width="70px" alt="">
          <h5 class="mt-3">Heater</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="./assets/images/facilities/2.svg" width="70px" alt="">
          <h5 class="mt-3">Telivision</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="./assets/images/facilities/3.svg" width="70px" alt="">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="./assets/images/facilities/4.svg" width="70px" alt="">
          <h5 class="mt-3">Baadroom</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="./assets/images/facilities/5.svg" width="70px" alt="">
          <h5 class="mt-3">Aircondition</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="#" class="btn btn-sm btn-outline-dark rounded fw-bold shadow-none">More Facilities</a>
        </div>
      </div>
    </div>
    <!-- -------------------- Facilities [End] ------------------------ -->

    <!-- -------------------- Testimonail [Start] ------------------------ -->
    
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonail</h2>
    <div class="container mt-5">
      <div class="swiper swiper-testimonail">
        <div class="swiper-wrapper">
          <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="./assets/images/about/customers.svg" style="width:50px;"/>
            <h6 class="text-dark">Random user1</h6>
          </div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, architecto quae aliquid veritatis minima aperiam?</p>  
          <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
          </div>  
          </div>  
          <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="./assets/images/about/customers.svg" style="width:50px;"/>
            <h6 class="text-dark">Random user1</h6>
          </div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, architecto quae aliquid veritatis minima aperiam?</p>  
          <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
          </div>  
          </div>  
          <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="./assets/images/about/customers.svg" style="width:50px;"/>
            <h6 class="text-dark">Random user1</h6>
          </div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, architecto quae aliquid veritatis minima aperiam?</p>  
          <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
          </div>  
          </div>  
        </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <!-- -------------------- Testimonail [End] ------------------------ -->

    <!-- -------------------- Reach [Start] ------------------------ -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 mb-lg-0 mb-3 bg-white">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28883.914969328696!2d55.281647113283384!3d25.186714120388775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f42a59ed40959%3A0x61508fff004858b8!2sZabeel%20Palace!5e0!3m2!1sen!2s!4v1746458969904!5m2!1sen!2s" class="w-100" height="450" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-4 col-md-4 bg-white p-4 rounded mb-4">
          <h5 class="fs-3">Call us</h5>
            <a href="tel:+94-94949494490" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill fs-5"></i> +94-94949494490</a><br>
            <a href="tel:+94-94949494490" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-whatsapp fs-5"></i></i> +94-94949494490</a>
          <h5 class="fs-3">Follow Us</h5>
          <span class="badge rounded-pill bg-light text-dark"><i class="bi bi-facebook fs-5"></i></span>
          <span class="badge rounded-pill bg-light text-dark"><i class="bi bi-instagram fs-5"></i></span>
          <span class="badge rounded-pill bg-light text-dark"><i class="bi bi-linkedin fs-5"></i></span>
          <span class="badge rounded-pill bg-light text-dark"><i class="bi bi-twitter-x fs-5"></i></span>
        </div>
      </div>
    </div>
    <!-- -------------------- Reach [End] ------------------------ -->
    
    <?php include_once('./common/footer.php');?>
  </body>
  </html>