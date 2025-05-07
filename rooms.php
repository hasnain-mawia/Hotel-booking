<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Our Rooms - Hotel Booking Syestem</title>
  <?php include_once('./common/links.php'); ?>
</head>
<?php include_once('./common/header.php');?>
<body>
  <!-- -------------------- Facilities [Start] ------------------------ -->
  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Our Rooms</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center w-75 mx-auto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, voluptas. Vel illo inventore ex voluptatibus consectetur aspernatur fuga ipsam, sed earum vero asperiores, quisquam cum aperiam adipisci at molestias corrupti?</p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 mb-lg-0 mb-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-4">FILTERS</h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterdropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column" id="filterdropdown">
              <div class="border bg-light p-3 rounded mb-3 w-100">
                <h5 class="mb-5" style="font-size:18px;">Check Avalibility</h5>
                <label class="form-label">Check-in</label>
                <input type="date" class="form-control shadow-none mb-3">
                <label class="form-label">Check-out</label>
                <input type="date" class="form-control shadow-none mb-3">
              </div>
              <div class="border bg-light p-3 rounded mb-3 w-100">
                <h5 class="mb-3" style="font-size:18px;">Facilities</h5>
                <div class="mb-2">
                  <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                  <label class="form-label" for="f1">Facility One</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                  <label class="form-label" for="f2">Facility Two</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                  <label class="form-label" for="f3">Facility Three</label>
                </div>
              </div>
              <div class="border bg-light p-3 rounded mb-3 w-100">
                <h5 class="mb-3" style="font-size:18px;">Guests</h5>
                <div class="mb-2 d-flex align-items-center gap-2">
                  <div>
                    <label class="form-label" for="Adults">Adults</label>
                    <input type="number" id="Adults" class="form-control shadow-none">
                  </div>
                  <div>
                    <label class="form-label" for="Childrens">Childrens</label>
                    <input type="number" id="Childrens" class="form-control shadow-none">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <div class="col-lg-9 col-md-12 mb-3 px-4">
        <div class="card mb-3 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5">
              <img src="./assets/images/rooms/1.jpg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-1 mt-lg-0 mt-md-0 mt-2">Simple Room</h5>
              <div class="features mb-1">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill text-dark bg-light">2 Rooms</span>
                <span class="badge rounded-pill text-dark bg-light">2 Bathroom</span>
                <span class="badge rounded-pill text-dark bg-light">1 Balcony</span>
                <span class="badge rounded-pill text-dark bg-light">3 Sofa</span>
              </div>
              <div class="facilities mb-1">
                <h6 class="my-2">Facilities</h6>
                <span class="badge rounded-pill text-dark bg-light">Wifi</span>
                <span class="badge rounded-pill text-dark bg-light">Telivision</span>
                <span class="badge rounded-pill text-dark bg-light">AC</span>
                <span class="badge rounded-pill text-dark bg-light">Room Heater</span>
              </div>
                <div class="guest mb-1">
                <h6 class="my-2">Guests</h6>
                <span class="badge rounded-pill text-dark bg-light">5 Adults</span>
                <span class="badge rounded-pill text-dark bg-light">4 Children</span>
                </div>
              </div>
            <div class="col-md-2 text-center">
                <span class="badge rounded-pill bg-danger mb-2">Rs:2000 Per Night</span>
                <a href="#" class="btn btn-sm custom-bg text-white shadow-none w-100 mb-2">Book Now</a>
                <a href="#" class="btn btn-sm  btn-outline-dark shadow-none w-100">More Details</a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <?php include_once('./common/footer.php'); ?>

</body>

</html>