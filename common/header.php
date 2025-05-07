<!doctype html>
<html lang="en">

<head>
  <?php include_once('./common/links.php'); ?>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

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
          <a class="nav-link active" aria-current="page" href="index">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rooms">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="facilities">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about">About Us</a>
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
              <button type="button" class="btn btn-dark text-white me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- -------------------- Register Modal [End] ------------------------ -->

