<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Booking Syestem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>  
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <!-- -------------------- Header [Start] ------------------------ -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-white px-lg-3  py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand h-font fs-3 fw-bold me-5" href="index.php">Tj Rooms</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon shadow-none"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
      <div class="d-flex">
      <button type="button" class="btn custom-bg text-white me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
      <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#RegisterModal">Register</button>
    </div>
    </div>
  </div>
</nav>
    <!-- -------------------- Header [End] ------------------------ -->

    <!-- -------------------- Slider [Start] ------------------------ -->
     <div class="container-fluid px-lg-4 mt-4">
      <!-- Swiper -->
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="./images/carousel/1.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="./images/carousel/2.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="./images/carousel/3.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="./images/carousel/4.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="./images/carousel/5.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="./images/carousel/6.png" class="w-100 d-block"/>
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
            <img src="./images//rooms/1.jpg" class="card-img-top" alt="...">
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
          <img src="./images/facilities/1.svg" width="70px" alt="">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="./images/facilities/2.svg" width="70px" alt="">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="./images/facilities/3.svg" width="70px" alt="">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="./images/facilities/4.svg" width="70px" alt="">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="./images/facilities/5.svg" width="70px" alt="">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="#" class="btn btn-sm btn-outline-dark rounded fw-bold shadow-none">More Facilities</a>
        </div>
      </div>
    </div>
    <!-- -------------------- Facilities [End] ------------------------ -->

    <!-- -------------------- Testimonail [Start] ------------------------ -->
    
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonail</h2>
    <div class="container">
      <div class="swiper swiper-testimonail">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <!-- -------------------- Testimonail [End] ------------------------ -->

    <!-- -------------------- Login Modal [Start] ------------------------ -->
     <!-- Modal -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <form>
        <div class="modal-header">
            <h1 class="modal-title fs-5 text-center d-flex align-items-center"> <i class="bi bi-person-circle fs-3 me-2"></i>User Login</h1>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
      <div class="modal-body">
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control shadow-none">
    </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control shadow-none">
    </div>
      <div class="mb-3 d-flex align-items-center justify-content-between">
      <button type="submit" class="btn btn-dark shadow-none">Login</button>
      <a href="javascript:void(0)" class="btn text-dark shadow-none">Forgot password ?</a>
    </div>
    </div>
    </form>
    </div>
  </div>
</div>
    <!-- -------------------- Login Modal [End] ------------------------ -->


<!-- -------------------- Register Modal [Start] ------------------------ -->
     <!-- Modal -->
     <div class="modal fade" id="RegisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
        <form>
        <div class="modal-header">
            <h1 class="modal-title fs-5 text-center d-flex align-items-center"> <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration</h1>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
      <div class="modal-body">
      <span class="badge rounded-pill text-bg-light text-dark text-center mb-3 text-wrap lh-base w-100">Note: Your Details Must Match With Your Identity</span>
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-6 ps-0 mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control shadow-none"> 
        </div>
        <div class="col-md-6 p-0">  
        <label class="form-label">Email</label>
        <input type="email" class="form-control shadow-none">
        </div>        
        <div class="col-md-6 ps-0 mb-3">  
        <label class="form-label">Phone Number</label>
        <input type="number" class="form-control shadow-none">
        </div>        
        <div class="col-md-6 p-0">  
        <label class="form-label">Picture</label>
        <input type="file" class="form-control shadow-none">
        </div>
        <div class="mb-3 p-0">
        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
        <textarea class="form-control shadow-none" id="exampleFormControlTextarea1" rows="1"></textarea>
        </div>
        <div class="col-md-6 ps-0 mb-3">
        <label class="form-label">Zipcode</label>
        <input type="number" class="form-control shadow-none"> 
        </div>
        <div class="col-md-6 ps-0 mb-3">
        <label class="form-label">DOB</label>
        <input type="date" class="form-control shadow-none"> 
        </div>        
        <div class="mb-3 p-0">
        <label for="exampleFormControlTextarea1" class="form-label">Write for us...</label>
        <textarea class="form-control shadow-none" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>        
        </div>
      </div>
    <div class="mb-3 d-flex align-items-center justify-content-between">
      <button type="submit" class="btn btn-dark shadow-none">Register</button>
      <div class="d-flex gap-2 align-items-center justify-content-center pe-2">
        <span>Already have an account ?</span>
      <button class="btn btn-dark me-lg-2 me-3 cursor-pointer" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        </div>
    </div>
    </div>
    </form>
    </div>
  </div>
</div>
    <!-- -------------------- Register Modal [End] ------------------------ -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop:true,
      autoplay: {
        delay : 2500,
        disableOnInteraction : false
      }
    });
    var swiper = new Swiper(".swiper-testimonail", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
  </body>
</html>