<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include './bootstrap.php' ?>
  <style>
    .carousel-item {
      height: 600px;
      overflow: hidden;
    }

    .carousel-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
    }

    .nav-bar {
      background: rgba(129, 118, 118, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      padding: 0.8rem 2rem;
      max-width: 90%;
      margin: 1rem auto;
    }

    .nav-bar i {
      font-size: 1.2rem;
      transition: transform 0.3s ease;
    }

    .nav-bar i:hover {
      transform: scale(1.8);
      cursor: pointer;
    }

    .underlay {
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 1050;
    }

    .side-bar {
      transform: translateX(-100%);
      transition: transform 0.3s ease-in-out;
    }

    .underlay.active .side-bar {
      transform: translateX(0);
    }
  </style>
</head>

<body>
  <!-- Underlay initially hidden -->
  <div class="underlay position-fixed top-0 min-vh-100 w-100 rounded-4 d-none">
    <div class="side-bar position-absolute top-0 start-0 col-md-3 col-8 min-vh-100 bg-white p-4 shadow">
      <div class="top d-flex justify-content-between align-items-center">
        <img src="https://techhunk.pk/cdn/shop/files/logo.svg?v=1756199596&width=180" alt="">
        <i class="bi bi-x fs-5 fw-bolder" id="closeSidebar" style="cursor: pointer;"></i>
      </div>

      <ul class="list-unstyled mt-4">
        <li><a href="#" class="text-black text-decoration-none d-block py-2">Home</a></li><hr>
        <li><a href="#" class="text-black text-decoration-none d-block py-2">Earbuds</a></li><hr>
        <li><a href="#" class="text-black text-decoration-none d-block py-2">Smart Watches</a></li><hr>
        <li><a href="#" class="text-black text-decoration-none d-block py-2">Projectors</a></li><hr>
        <li><a href="#" class="text-black text-decoration-none d-block py-2">Accessories</a></li><hr>
        <li><a href="#" class="text-black text-decoration-none d-block py-2">Support</a></li><hr>
      </ul>

      <div class="social-icons d-flex align-items-center justify-content-center gap-3 mt-4">
        <i class="bi bi-instagram fs-5 text-primary"></i>
        <i class="bi bi-facebook fs-5 text-primary"></i>
        <i class="bi bi-youtube fs-5 text-primary"></i>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="nav-bar d-flex justify-content-lg-center justify-content-between align-items-center gap-3 py-2 w-100 rounded">
      <i class="bi bi-list text-black d-flex d-lg-none" id="openSidebar" style="cursor: pointer;"></i>

      <img src="https://techhunk.pk/cdn/shop/files/logo_1.png?v=1756293749&width=210" alt="Logo" style="height: 50px;">

      <ul class="d-flex d-none d-lg-flex justify-content-between list-unstyled fw-bold gap-3 align-items-center mb-0">
        <li><a href="#" class="text-black text-decoration-none">Home</a></li>
        <li><a href="#" class="text-black text-decoration-none">Earbuds</a></li>
        <li><a href="#" class="text-black text-decoration-none">Smart Watches</a></li>
        <li><a href="#" class="text-black text-decoration-none">Projectors</a></li>
        <li><a href="#" class="text-black text-decoration-none">Accessories</a></li>
        <li><a href="#" class="text-black text-decoration-none">Support</a></li>
      </ul>

      <i class="bi bi-search text-black"></i>
      <i class="bi bi-person-fill text-black"></i>
      <i class="bi bi-bag-plus-fill text-black"></i>
    </div>

    <!-- Carousel -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://techhunk.pk/cdn/shop/files/gen_3ookppc_11zon.webp?v=1757525647&width=1500" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://techhunk.pk/cdn/shop/files/gen3blackout_8_11zon.webp?v=1756931012&width=1100" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://techhunk.pk/cdn/shop/files/gen_3_pcok_11zon.webp?v=1757521393&width=750" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>

  <h1 class="fw-bold text-center mt-2">New <span class="fw-bold text-info">Arrivals</span></h1>
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-inner" style="max-height: 500px;">
    <div class="carousel-item active">
      <img src="https://techhunk.pk/cdn/shop/files/spectra_1.webp?v=1757501283&width=750"
        class="d-block w-100" alt="..." style="height: 100%; object-fit: cover;">
    </div>
    <div class="carousel-item">
      <img src="https://techhunk.pk/cdn/shop/files/steelxouy.png?v=1757076031&width=750"
        class="d-block w-100" alt="..." style="height: 100%; object-fit: cover;">
    </div>
    <div class="carousel-item">
      <img src="https://techhunk.pk/cdn/shop/files/fusion_7_11zon.webp?v=1756931013&width=750"
        class="d-block w-100" alt="..." style="height: 100%; object-fit: cover;">
    </div>
    <div class="carousel-item">
      <img src="https://techhunk.pk/cdn/shop/files/flex_6_11zon.webp?v=1756931013&width=750"
        class="d-block w-100" alt="..." style="height: 100%; object-fit: cover;">
    </div>
    <div class="carousel-item">
      <img src="https://techhunk.pk/cdn/shop/files/spectra_1.webp?v=1757501283&width=750"
        class="d-block w-100" alt="..." style="height: 100%; object-fit: cover;">
    </div>
    <div class="carousel-item">
      <img src="https://techhunk.pk/cdn/shop/files/gen3blackout_8_11zon.webp?v=1756931012&width=750"
        class="d-block w-100" alt="..." style="height: 100%; object-fit: cover;">
    </div>
  </div>
</div>
      <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button> -->
    </div>
  </div>

  <script>
    const openSidebar = document.getElementById('openSidebar');
    const closeSidebar = document.getElementById('closeSidebar');
    const underlay = document.querySelector('.underlay');
    const myCarousel = document.querySelector('#carouselExampleAutoplaying');
 

    openSidebar.addEventListener('click', () => {
      underlay.classList.remove('d-none');
      requestAnimationFrame(() => {
        underlay.classList.add('active');
      });
    });

    closeSidebar.addEventListener('click', () => {
      underlay.classList.remove('active');
      setTimeout(() => {
        underlay.classList.add('d-none');
      }, 300);
    });

    underlay.addEventListener('click', (e) => {
      if (!e.target.closest('.side-bar')) {
        closeSidebar.click();
      }
    });
     const carousel = new bootstrap.Carousel(myCarousel, {
    interval: 3000, // 3 seconds
    ride: 'carousel',
    pause: false
  });
  </script>
</body>

</html>
