<footer class="bg-light mt-5">
          <div class="container">
          <div class="row">
            <div class="col-lg-4 p-4">
              <h3 class="h-font fw-bold fs-3 mb-2">TJ Hotel</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quae et tenetur rem quod, distinctio aliquid voluptas, voluptates quam culpa eveniet iure enim doloribus quia dolorem porro, eum magni provident!</p>
            </div>
            <div class="col-lg-4 p-4">
              <h5 class="mb-3">Links</h5>
              <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
              <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
              <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
              <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a><br>
              <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
            </div>
            <div class="col-lg-4 p-4">
              <h5 class="mb-3">Follow us</h5>
              <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-facebook fs-5"></i> Facebook</a><br>
              <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-instagram fs-5"></i> Instagram</a><br>
              <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-linkedin fs-5"></i></i> Linkedin</a><br>
              <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-twitter-x fs-5"></i> Twitter</a><br>

            </div>
          </div>
          </div>
      <div class="contianer-fluid bg-dark text-white d-flex py-3 align-items-center justify-content-center">
        <span>All Right Reserved Design & Developed by Hasnain Mawia</span>
      </div>
    </footer>

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
      slidesPerView: "3",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        loop:true,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320 :{
          slidesPerView : 1,
        },
        640 :{
          slidesPerView : 1,
        },
        768 :{
          slidesPerView : 2,
        },
        1024 :{
          slidesPerView : 3,
        },
      }
    });
    var swiper = new Swiper(".mySwiper", {
      slidesPerView:4,
      spaceBetween:40,
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
      },
      breakpoints:{
        320 :{
          slidesPerView : 1,
        },
        640 :{
          slidesPerView : 2,
        },
        768 :{
          slidesPerView : 2,
        },
        1024 :{
          slidesPerView : 3,
        },
        1280 :{
          slidesPerView : 4,
        },
      }
    });
  </script>