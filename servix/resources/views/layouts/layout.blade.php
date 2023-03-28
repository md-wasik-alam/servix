<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from servixc.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Mar 2023 09:46:29 GMT -->
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('index.css')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service App</title>
    <link href="../unpkg.com/aos%402.3.1/dist/aos.css" rel="stylesheet">
    <script src="../unpkg.com/aos%402.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="../cdn.jsdelivr.net/npm/jquery%403.5.1/dist/jquery.slim.min.js"integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"crossorigin="anonymous"></script><script src="../kit.fontawesome.com/20cdb0d9fc.js" crossorigin="anonymous"></script>
    <script src="../cdn.jsdelivr.net/npm/bootstrap%404.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Header Section -->
  @section('header')
  <div class="main_background fixed-top py-1">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand" href="#">
                    <img src="Assets/logo-black.png" class="img-logo" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item mr-4 pt-2 justify-content-end">
                            <a class="nav_link "  href="{{route('request.form')}}">insert form</a>
                        </li>
                        <!-- <li class="nav-item mr-4 pt-2 mb-2">
                            <a class="nav_link" href="Home.html">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="link_contact" href="ContactPage.html">
                                <button class="btn btn_primary btn-block">Contact <img src="Assets/arrow-black.html"
                                        class="main_logo_image" alt="logo"> </button>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </div>
    </div>

  @show

    <!-- Page Contents -->
    @section('contents')
      <!-- Don't write code here \\ -->
    @show
    
    
    <!-- Footer Section -->
    @section('footer')
<<<<<<< HEAD
    <footer class="text-gray-600 body-font bg-gray-600 text-gray-200">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap md:text-left text-center order-first">
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-gray-900 tracking-widest text-lg mb-3">SERVIX</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-gray-200 hover:text-gray-300">First Link</a>
              </li>
              <li>
                <a class="text-gray-200 hover:text-gray-300">Second Link</a>
              </li>
              <li>
                <a class="text-gray-200 hover:text-gray-300">Third Link</a>
              </li>
              <li>
                <a class="text-gray-200 hover:text-gray-300">Fourth Link</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-gray-200 hover:text-gray-300">First Link</a>
              </li>
              <li>
                <a class="text-gray-200 hover:text-gray-300">Second Link</a>
              </li>
              <li>
                <a class="text-gray-200 hover:text-gray-300">Third Link</a>
              </li>
              <li>
                <a class="text-gray-200 hover:text-gray-300">Fourth Link</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-gray-200 hover:text-gray-300">First Link</a>
              </li>
              <li>
                <a class="text-gray-200 hover:text-gray-300">Second Link</a>
              </li>
              <li>
                <a class="text-gray-200 hover:text-gray-300">Third Link</a>
              </li>
              <li>
                <a class="text-gray-200 hover:text-gray-300">Fourth Link</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">SUBSCRIBE</h2>
            <div class="flex xl:flex-nowrap md:flex-nowrap lg:flex-wrap flex-wrap justify-center items-end md:justify-start">
              <div class="relative w-40 sm:w-auto xl:mr-4 lg:mr-0 sm:mr-4 mr-2">
                <label for="footer-field" class="leading-7 text-sm text-gray-600">Placeholder</label>
                <input type="text" id="footer-field" name="footer-field" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
              <button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
=======
    <div class="background-footer">
        <div class="container pt-5 pb-2">
            <div class="row justify-content-center pt-3 all_text-center">
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="pl-0">
                        <a href="#" class="nav-link p-0"><img src="Assets/logo-black.png" class="img-logo"
                                alt="logo"></a>
                    </div>
                    <ul class="navbar-nav pt-3">
                        <li class="nav-item py-1"><a href="#" class="nav-lnk footer--art">Warranty Policy</a></li>
                        <li class="nav-item py-1"><a href="#" class="nav-lnk footer--art">Terms & Conditions</a></li>
                        <li class="nav-item py-1"><a href="#" class="nav-lnk footer--art">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <ul class="navbar-nav">
                        <li class="nav-item" style="font-size:31px; color: #000;"><b>+91 6207488382</b></li>
                        <li class="nav-item"><a href="#" class="nav-link "><b
                                    class="footer--art">Help@digitalservices.com</b></a>
                        </li>
                        <li class="nav-item footer--art1">R.P.C High Scool, Naka Chowk Road Purnia City
                            Purnia 854301 Bihar</li>
                        <div class="d-flex ml-0 pt-3 social_media_data">
                            <a href="#" class=" mx-3"><i class="fa-brands fa-facebook-f balagi-media"></i></a>
                            <a href="#" class="mx-3"><i class="fa-brands fa-instagram balagi-media1"></i></a>
                            <a href="#" class="mx-3"><i class="fa-brands fa-twitter balagi-media2"></i></a>
                            <a href="#" class="mx-3"><i class="fa-brands fa-youtube balagi-media3"></i></a>
                        </div>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4396.685617846691!2d87.51066725826163!3d25.80666475613152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eff8423776e975%3A0xe5d31a1d855095c0!2sEVOLUTION%20OFFICE!5e0!3m2!1sen!2sin!4v1676654884083!5m2!1sen!2sin"
                            height="170" style="border:0; box-shadow: 7px 11px 9px #12111178;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
>>>>>>> 900b787363d0fa8f4fea3182526c476327642b16
            </div>
        </div>
    </div>
    <hr class="my-0" style="color: #5e5b5b !important;">
    <div class="background-footer pt-0">
        <div class="container py-2">
            <p class="text-center pb-2 pt-3 m-0" style="font-size:17px; color: #000;">Copyright ©<span
                        id="aftab"></span> All
                    rights reserved.</p>
        </div>
    </div>

    @show

  </body>
</html>