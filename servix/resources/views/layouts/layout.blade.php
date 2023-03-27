<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    <!-- Header Section -->
    @section('header')
    <header class="text-white bg-[#222021] body-font">
      <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
          <a href="{{route('home')}}">
          <span class="ml-3 text-2xl hover:text-gray-300 font-bold">Servix</span>
          </a>
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
          <a class="mr-5 hover:text-gray-300 text-sm">Mobile</a>
          <a class="mr-5 hover:text-gray-300 text-sm">Laptop</a>
          <a class="mr-5 hover:text-gray-300 text-sm">Tv</a>
          <a class="mr-5 hover:text-gray-300 text-sm">Accessories</a>
        </nav>

        <div class="">
          <a href="{{route('request.form')}}" class="text-sm px-2 py-2 rounded-lg bg-teal-400">Request Form</a>
        </div>
        <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script> 
      </div>
    </header>
  @show

    <!-- Page Contents -->
    @section('contents')
      <!-- Don't write code here \\ -->
    @show
    
    
    <!-- Footer Section -->
    @section('footer')
    <footer class="text-gray-600 body-font bg-gray-600 text-gray-200">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap md:text-left text-center order-first">
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
            </div>
            <p class="text-gray-500 text-sm mt-2 md:text-left text-center">Bitters chicharrones fanny pack
              <br class="lg:block hidden">waistcoat green juice
            </p>
          </div>
        </div>
      </div>

    </footer>
    @show

</body>
</html>