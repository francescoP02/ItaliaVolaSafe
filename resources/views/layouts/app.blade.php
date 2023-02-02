<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('img/ITALIAVOLASAFE.png') }}">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">
</head>
<body>

    <div id="app">

        {{-- Navbar --}}

        <nav class="navbar navbar-expand-sm navbar-light" id="ms-navbar">
          <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
              <img src="img/ITALIAVOLASAFE.png" alt="{{ config('app.name') }}" width="80" height="80">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
         
            <div class="collapse navbar-collapse my-4" id="navbarNavDropdown">
              <ul class="navbar-nav ms-auto text-center py-4">
                <li class="nav-item my-3">
                  <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item my-3">
                  <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('contact') }}">Richiedi il tuo Rimborso</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        {{-- /Navbar --}}

        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="text-center text-lg-start text-white">
          <!-- Grid container -->
          <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
              <div class="row">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                  <h6 class="text-uppercase mb-4 font-weight-bold">
                    Company name
                  </h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                </div>

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                  <h6 class="text-uppercase mb-4 font-weight-bold">
                    Useful links
                  </h6>
                  <p>
                    <a class="text-white" href="{{ url('/') }}">Home</a>
                  </p>
                  <p>
                    <a class="text-white"href="{{ url('contact') }}">Richiedi il tuo Rimborso</a>
                  </p>
                </div>

                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                  <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                  <p><i class="fas fa-home mr-3"></i> 500 Terry Francois St. San Francisco, CA 94158</p>
                  <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                  <p><i class="fas fa-phone mr-3"></i> 123-456-7890</p>
                  <p><i class="fas fa-phone mr-3"></i> 123-456-7890</p>
                </div>
                <!-- Grid column -->
              </div>
              <!--Grid row-->
            </section>
            <!-- Section: Links -->

            <hr class="my-3">

            <!-- Section: Copyright -->
            <section class="p-3 pt-0">
              <div class="row d-flex align-items-center">
                <!-- Grid column -->
                <div class="col-md-7 col-lg-8 text-center text-md-start">
                  <!-- Copyright -->
                  <div class="p-3">
                    © 2023 Copyright:
                    <a class="text-white" href=""
                      >Francesco Website</a
                      >
                  </div>
                  <!-- Copyright -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                  <!-- Facebook -->
                  <a
                    class="btn btn-outline-light btn-floating m-1"
                    class="text-white"
                    role="button"
                    ><i class="fab fa-facebook-f"></i
                    ></a>

                  <!-- Twitter -->
                  <a
                    class="btn btn-outline-light btn-floating m-1"
                    class="text-white"
                    role="button"
                    ><i class="fab fa-twitter"></i
                    ></a>

                  <!-- Google -->
                  <a
                    class="btn btn-outline-light btn-floating m-1"
                    class="text-white"
                    role="button"
                    ><i class="fab fa-google"></i
                    ></a>

                  <!-- Instagram -->
                  <a
                    class="btn btn-outline-light btn-floating m-1"
                    class="text-white"
                    role="button"
                    ><i class="fab fa-instagram"></i
                    ></a>
                </div>
                <!-- Grid column -->
              </div>
            </section>
            <!-- Section: Copyright -->
          </div>
          <!-- Grid container -->
        </footer>
        <!-- Footer -->

    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>

<script>
  AOS.init();
</script>