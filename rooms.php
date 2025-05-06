<?php include_once('./common/header.php'); ?>

<body>

  <!-- -------------------- Facilities [Start] ------------------------ -->
  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Our Rooms</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center w-75 mx-auto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, voluptas. Vel illo inventore ex voluptatibus consectetur aspernatur fuga ipsam, sed earum vero asperiores, quisquam cum aperiam adipisci at molestias corrupti?</p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-4">FILTERS</h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterdropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <div class="mb-2">
                  <input type="number" id="f1" class="form-control shadow-none">
                  <label class="form-label" for="f1">Check-out</label>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <div class="col-lg-6 col-md-6 mb-5 px-4 order-lg-2 order-1">

      </div>
    </div>
  </div>




  <?php include_once('./common/footer.php'); ?>

</body>

</html>