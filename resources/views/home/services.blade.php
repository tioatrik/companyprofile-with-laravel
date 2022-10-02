<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/aos/dist/aos.css')}}">
    <!-- custom css -->
    <title>BaliTraveller.Inc</title>
    <link rel="stylesheet" href="{{asset('../assets/css/stylee.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('../fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendor/bootstrap/dist/css/bootstrap.min.css')}}"/>
    <title>Company</title> 
    <style>
      nav{
        background-color:white;
        height: 15vh;
        box-shadow: 0px 10px 24px 0px rgba(0,0,0,0.31);
-webkit-box-shadow: 0px 10px 24px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 10px 24px 0px rgba(0,0,0,0.31);
      }

      .logo a{
        color: whitesmoke ;
        }
        .logo a:hover{
        color: crimson;
        transition: 1s;
        }

      .nav-link li a{
        color:whitesmoke;
      }

      .nav-link li a:hover{
        color: crimson;
        transition: 1s;
        }

        .about{
          background-color: white;
          height: 40vh !important;
          padding-top: 10vh;
        }
        .main-about{
          margin-top: 0px !important;
          position: relative;
        }
    </style>
    @yield('extracss')
  </head>
  <body>
    <!-- navbar -->
    <div class="navbar-main">
      <nav class="bg-dark">
          <h2 class="logo"><a href="/">Bali Traveller</a> </h2>
          <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="nav-link" id="navMain">
              <i class="fa-regular fa-circle-xmark" onclick="mark()"></i>
              <ul>
                  <li><a href="/">Home</a></li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      id="navbarDropdownMenuLink"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      About
                    </a>
                    <ul
                      class="dropdown-menu"
                      aria-labelledby="navbarDropdownMenuLink"
                    >
                      <li><a class="dropdown-item" href="about">About Us</a></li>
                      <li><a class="dropdown-item" href="team">Team</a></li>
                      <li>
                        <a class="dropdown-item" href="testimonials"
                          >Testimonial</a
                        >
                      </li>
                    </ul>
                  </li> 
                  <li><a href="services">Produk Kami</a></li>
                  <li><a href="contact">Contact</a></li>
              </ul>
          </div>
             <i class="fa-solid fa-bars" onclick="bars()"></i>
      </nav>
    <!-- end navbar -->
<!-- end breadcumbs -->

<!-- services -->
<div class="services bg-light py-5">
    <div class="container">
        <div class="title-container">
            <h2 class="text-center fw-bold">Produk Kami</h2>
        </div>
        <p class="text-center mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem modi vero voluptas ea molestias eum illo, ducimus eius quisquam repellendus accusamus rerum! Repellendus enim incidunt assumenda pariatur, quisquam eveniet numquam.</p>
       <div class="row mt-5">
            @foreach ($services as $service)
            <div class="col-md-4">
                <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
                <div class="card-body">
                    <div class="card-icon">
                   <img src="/image/{{$service->image}}" alt="" class="img-fluid" width="80">
                    </div>
                    <div class="card-title fw-bolder mt-4">{{$service->title}}</div>
                    <p class="card-description mt-3">
                  {{$service->description}}
                    </p>
                </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
<!-- end services -->

<!-- footer -->
<footer class="mt-5">
  <div class="footer-top bg-dark text-white p-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <h4 class="fw-bold">{{$contact->name}}</h2>
          <p>
            {{$contact->description}}
          </p>
          <strong>Phone</strong> : <span>{{$contact->telepon}} </span>
          <br />
          <strong>Email</strong> : <span>{{$contact->email}} </span>
        </div>
        <div class="col-md-2">
          <h4 class="fw-bold">Produk kami</h2>
          <ul class="list-group list-unstyled">
              @foreach ($services as $service)

              <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                      {{$service->title}}
                    </a>
                </li>
                @endforeach

          </ul>
        </div>
        <div class="col-md-2">
          <h4 class="fw-bold">Navbar Links</h2>
          <ul class="list-group list-unstyled">
            <li class="list-item">
              <a href="" class="text-decoration-none text-white">
                Home
              </a>
            </li>
            <li class="list-item">
              <a href="" class="text-decoration-none text-white">
                About Us
              </a>
            </li>
            <li class="list-item">
              <a href="" class="text-decoration-none text-white">
                Services
              </a>
            </li>
            <li class="list-item">
              <a href="" class="text-decoration-none text-white">
                Portfolio
              </a>
            </li>
            <li class="list-item">
              <a href="" class="text-decoration-none text-white">
                Contact
              </a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>

  <div class="main-footer">
    <p>copyright &copy;2022 Bali Traveller. designed by <span>Tio atrik herdiansyah</span></p>
</div>
</div>

  </div>
</footer>
<!-- end footer -->

<!-- to top -->
<a href="#" class="btn-to-top p-3">
    <i class="fa fa-chevron-up"></i>
</a>
<!-- end to top -->
<script>
  var navMain = document.getElementById("navMain");
  function bars(){
      navMain.style.right = "0px";
  }
  function mark(){
      navMain.style.right = "-500px";
  }
</script>
<script src="{{asset('/assets/vendor/jquery/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
{{-- <script src="/assets/vendor/fontawesome/js/all.min.js"></script> --}}
<script src="{{asset('/assets/vendor/mansory/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('/assets/vendor/aos/dist/aos.js')}}"></script>
<script src="{{asset('/assets/vendor/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('/assets/js/app.js')}}"></script>
</body>
</html>