<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Bolt Solution</title>
  <!-- external css -->
  <link href="./assets/css/external.css" rel="stylesheet">
  <!-- output  -->
  <link href="./assets/css/output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <!-- google font -->


  <!-- css cdn -->

  <!-- internal css -->
  <style>
    .icon {
      background-color: green;
      color: white;
      padding: 1px;
      border-radius: 50%;
    }

    .arch-img {
      width: 100%;
      height: auto;
      border-radius: 50% 50% 0% 0%;
      /* Creates the arch effect */
      object-fit: cover;
      display: block;

    }

    .features-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      text-align: center;
      max-width: 1200px;
      margin: 0 auto;
      position: relative;
    }

    .feature-item {
      flex: 1;
      padding: 20px;
      position: relative;
    }

    .icon-circle {
      display: inline-flex;
      justify-content: center;
      align-items: center;
      width: 50px;
      height: 50px;
      border: 2px solid #007bff;
      /* Blue border */
      border-radius: 50%;
      margin-bottom: 20px;
    }

    .icon-number {
      font-size: 20px;
      color: #007bff;
      /* Blue color */
    }

    .feature-title {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .feature-description {
      color: gray;
      font-size: 14px;
    }

    /* Horizontal line between items */
    .line-between {
      width: 180px;
      height: 2px;
      margin-top: 10px;
      background-color: #d3d3d3;
      /* Light gray line */
    }
  </style>
  <style>
    #time-container {
      opacity: 0;
      max-height: 0;
      transition: all 0.5s ease-in-out;
    }
  </style>
</head>

<body>

  <!-- Navbar Logo -->
  <nav id="navbar" class="relative px-4 py-4 flex justify-between items-center  lg:w-9/12 lg:mx-auto bg-white">
    <a class="text-2xl lg:text-3xl font-bold leading-none" href="#">
      <img src="./assets/images/boltsolution.png" class="w-20" alt="Navbar Logo">
    </a>

    <!-- Mobile Menu -->
    <div class="lg:hidden">
      <button class="navbar-burger flex items-center text-fontcolor p-3">
        <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Mobile menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>
      </button>
    </div>

    <!-- Links -->
    <ul class="hidden lg:flex xl:space-x-3 lg:space-x-2 lg:ml-6">
      <li><a class="text-md text-black-400 links p-2 rounded font-bebas" href="#">Home</a></li>

      <!-- Services Dropdown -->
      <li class="relative group">
        <a class="text-md text-black-400 links p-2 rounded cursor-pointer" href="#">Services</a>
        <!-- Megamenu starts here -->
        <div
          class="absolute w-[700px] xl:-left-40 lg:-left-60 mt-2 hidden bg-white z-50 rounded-xl shadow-lg group-hover:flex justify-between p-8 transition-all duration-200 ease-in-out">
          <div class="flex space-x-10 w-full">
            <div>
              <h3 class="font-semibold mb-4">Policy Quoting</h3>
              <ul class="text-md space-y-2">
                <li><a class="block text-sm hover:text-fontcolor" href="#">Quoting on AMS</a></li>
                <li><a class="block hover:text-fontcolor" href="#">Carrier Quoting </a></li>
                <li><a class="block hover:text-fontcolor" href="#">Manual Submissions</a></li>
                <li><a class="block hover:text-fontcolor" href="#">Requoting Renewals</a></li>
              </ul>
            </div>
            <div>
              <h3 class="font-semibold mb-4">Servicing</h3>
              <ul class="text-md space-y-2">
                <li><a class="block hover:text-fontcolor" href="#">Personal Lines & Commercial Lines</a>
                </li>
                <li><a class="block hover:text-fontcolor" href="#">ID Cards</a></li>
                <li><a class="block hover:text-fontcolor" href="#">COIs/EOIs</a></li>
                <li><a class="block hover:text-fontcolor" href="#">RCT/RCE</a></li>
                <li><a class="block hover:text-fontcolor" href="#">Cancellation Processing</a></li>
                <li><a class="block hover:text-fontcolor" href="#">Policy Checking</a></li>
                <li><a class="block hover:text-fontcolor" href="#">Mortgage Changes</a></li>
                <li><a class="block hover:text-fontcolor" href="#">Changes to Billing</a></li>
                <li><a class="block hover:text-fontcolor" href="#">Dec Page Requests</a></li>
                <li><a class="block hover:text-fontcolor" href="#">General Endorsements</a></li>
                <li><a class="block hover:text-fontcolor" href="#">Requests for Copies of Documents</a></li>
              </ul>
            </div>
            <div>
              <h3 class="font-semibold mb-4">Data Entry</h3>
              <ul class="text-md space-y-2">
                <li><a class="block hover:text-fontcolor" href="#">Audit Follow Up</a></li>
                <li><a class="block hover:text-fontcolor" href="#">Weekly Reporting</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Megamenu ends here -->
      </li>

      <li><a class="text-md text-black-400 links p-2 rounded" href="./aboutUs.html">About Us</a></li>
    </ul>

    <!-- Login Buttons -->
    <div class="hidden lg:flex lg:items-center lg:ml-auto space-x-4">
      <a class="xl:py-2 xl:px-6 lg:px-1 lg:py-2 hover:bg-fonttext-fontcolor text-sm text-fontcolor hover:text-white hover:bg-fontcolor font-bold transition duration-200"
        href="#contact">Contact Us</a>
      <a class="xl:py-2 xl:px-6 lg:px-1 lg:py-2 hover:bg-fontcolor text-sm text-fontcolor hover:text-white font-bold border border-fontcolor transition duration-200"
        href="#getstarted">Get Started</a>
    </div>
  </nav>





  <!-- Mobile Menu  -->
  <div class="navbar-menu relative z-50 hidden lg:hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0  flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
      <div class="flex items-center mb-8">
        <a class="mr-auto text-3xl font-bold leading-none" href="#">
          <svg class="h-12" alt="logo" viewBox="0 0 10240 10240">
            <!-- SVG Path here -->
          </svg>
        </a>
        <button class="navbar-close">
          <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <div>
        <ul>
          <li class="mb-1">
            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
              href="#">Insurance 101</a>
          </li>
          <!-- Services with Megamenu -->
          <li class="mb-1">
            <button
              class=" p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded flex  items-center justify-between w-full"
              onclick="toggleMobileMegamenu()">
              Services
              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
              </svg>
            </button>

            <div id="mobile-megamenu" class="hidden">
              <div class="flex flex-col space-y-6 py-6">
                <div>
                  <h3 class="font-semibold mb-4">Policy Quoting</h3>
                  <ul class="text-sm space-y-2">
                    <li><a class="block text-sm hover:text-fontcolor" href="#">Quoting on AMS</a></li>
                    <li><a class="block hover:text-fontcolor" href="#">Quoting Carriers</a></li>
                    <li><a class="block hover:text-fontcolor" href="#">Manual Submissions</a></li>
                    <li><a class="block hover:text-fontcolor" href="#">Requoting Renewals</a></li>
                  </ul>
                </div>
                <div>
                  <h3 class="font-semibold mb-4">Servicing</h3>
                  <ul class="text-sm space-y-2">
                    <li><a class="block hover:text-fontcolor" href="#"> Personal Lines & Commercial Lines</a></li>
                    <li><a class="block hover:text-fontcolor" href="#">ID Cards</a></li>
                    <li><a class="block hover:text-fontcolor" href="#">COIs/EOIs</a></li>
                    <li><a class="block hover:text-fontcolor" href="#">RCT/RCE</a></li>
                    <li><a class="block hover:text-fontcolor" href="#">Cancellation Processing</a></li>
                    <li><a class="block hover:text-fontcolor" href="#">Policy Checking</a></li>
                    <li><a class="block hover:text-fontcolor" href="#">Mortgage Changes</a></li>
                    <li><a class="block hover:text-fontcolor" href="#">Changes to Billing</a></li>
                    <li><a class="block hover:text-fontcolor" href="#">Dec Page Requests</a></li>
                    <li><a class="block hover:text-fontcolor" href="#">General Endorsements</a></li>
                    <li><a class="block hover:text-fontcolor" href="#">Requests for Copies of Documents</a></li>
                  </ul>
                </div>
                <div>
                  <h3 class="font-semibold mb-4">Data Entry</h3>
                  <ul class="text-sm space-y-2">
                    <li><a class="block hover:text-fontcolor" href="#">Audit Follow Up</a></li>
                    <li><a class="block hover:text-fontcolor" href="#">Weekly Reporting</a></li>
                  </ul>
                </div>
              </div>
            </div>



            <!-- Megamenu for Mobile ends here -->
          </li>
          <li class="mb-1">
            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
              href="#">Contact</a>
          </li>
        </ul>
      </div>
      <div class="mt-auto">
        <div class="pt-6">
          <a class="block px-4 py-3 mb-3  text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl"
            href="#contact">Contact Us</a>
          <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700  rounded-xl"
            href="#">Calculate yours</a>
        </div>
        <p class="my-4 text-xs text-center text-gray-400">
          <span>Copyright © 2021</span>
        </p>
      </div>
    </nav>
  </div>



  <div class="carousel-section mx-auto lg:w-9/12 flex-col">
    <!-- Row 1 -->
    <div class="row-1 w-full flex flex-col md:mt-12 lg:flex-row" data-aos="fade-up">
      <div class="w-full lg:w-8/12 md:-mt-16 text-center  lg:text-left ">
        <h1 class="font-bold font-futuraAlt text-3xl xl:text-4xl lg:text-xl  lg:p-8  pt-10 xl:mt-24    mb-6 lg:mb-0">
          Free Your
          Insurance
          Agency
          from Time-Consuming Tasks
        </h1>
        <p class="lg:pl-9 text-base lg:text-lg p-4 md:p-0 text-gray-600 ">The Bolt Solutions handles quoting, renewals
          and policy
          management<br>
          so you can focus on growing your business.</p>

        <div class="features mt-2 ml-8">
          <div class="feature font-light pr-3 " id="1">
            <i class="fas fa-check-circle text-green-500 bg-white rounded-full"></i>
            <span class="pl-1 pr-2 font-semibold">Quoting</span><span class="lg:hidden"><br></span>
            <i class="fas fa-check-circle text-green-500 bg-white rounded-full"></i>
            <span class="pl-1 pr-2 font-semibold">Renewals</span>
          </div>
          <div class="feature lg:mt-2 font-light pr-3" id="2">
            <i class="fas fa-check-circle text-green-500 bg-white rounded-full"></i>
            <span class="pl-1 pr-2 font-semibold">Policy Servicing</span><span class="lg:hidden"><br></span>
            <i class="fas fa-check-circle text-green-500 bg-white rounded-full"></i>
            <span class="pl-1 pr-2 font-semibold">Reporting</span>
          </div>
        </div>

        <div class="input-container flex flex-col mx-auto lg:flex-row w-full max-w-xl  xl:ml-3 lg:-mt-4 lg:-ml-5   ">
          <input type="email" placeholder="Enter your email"
            class="email-input w-80 mx-auto md:w-full lg:w-9/12 mt-4 lg:mt-10 p-3    shadow-sm shadow-stone-400  border outline-none">
          <button
            class="get-started-button bg-fontcolor mt-10 mb-10 lg:mb-0 text-white px-4 py-2 lg:py-0  lg:mt-10 w-44 mx-auto shadow-sm shadow-stone-400   font-bold">Get
            Started</button>
        </div>
      </div>
      <div class="w-full lg:w-4/12 p-4 lg:p-0">
        <dotlottie-player src="https://lottie.host/e658afe9-3bd9-4223-ba3c-62d11b7c8bcb/iBMslkZomH.json"
          background="transparent" speed="1" style="width: 100%; height: auto;" loop autoplay>
        </dotlottie-player>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="row-2 flex flex-col lg:flex-row mt-8 md:text-center lg:mt-24" data-aos="fade-right">
      <div class="w-full lg:w-8/12   lg:text-left max-sm:p-5 ">
        <div class="info w-full">
          <h1 class="text-2xl xl:text-4xl lg:-mt-14 font-futuraAlt font-bold p-4">What Are We Saving
            <br> You From?
          </h1>
          <p class=" text-gray-600 p-4 ">Insurance agencies are bogged down by endless quoting, renewals
            <span class="max-sm:hidden  "><br></span> and servicing existing policies, leaving little room to generate
            new business.
            <span class="max-sm:hidden "><br></span> The time spent on backend tasks eats away at productivity, employee
            morale,<span class="max-sm:hidden "><br></span> and ultimately revenue.
          </p>
          <a href="#" class="text-fontcolor p-4 links ">Get Started <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="w-full lg:w-4/12 mt-4 lg:mt-0">
        <div class="info bg-fontcolor lg:-mt-20   lg:p-4 text-center lg:text-left">
          <i class="fas fa-info-circle lg:p-4 pt-10 text-white text-lg"></i>
          <h1 class=" text-lg lg:p-4 text-white">Why choose The Bolt Solution over <br> a VA or “Remote CSRs”?
          </h1>
          <p class="p-4 font-light text-white">Simple: We specialize in insurance agency tasks like quoting, policy
            management, and compliance, so you get experts—not generalists. No training, no oversight, just seamless
            integration and faster, more accurate results. Let us handle the backend while you focus on
            growing your business!</p>
        </div>
      </div>
    </div>


    <div class="row-3-row-4 bg-orange-100/20">
      <!-- Row 3 -->
      <div class="row-3 flex flex-col lg:flex-row mt-8 md:mt-40 md:p-10" data-aos="fade-up">
        <div class="w-full lg:w-5/12 text-center lg:text-left">
          <div class="info">
            <span class="text-xs font-bold p-4 text-fontcolor font-futuraAlt">WHY CHOOSE THE BOLT SOLUTION</span>
            <h1 class="text-2xl xl:text-4xl font-bold p-4 font-futuraAlt"> How Are We Solving the Problem?</h1>
          </div>
        </div>
        <div class="w-full lg:w-7/12 mt-4  md:text-center lg:text-left lg:mt-10 ">
          <p class="text-sm  p-6 md:p-0 text-gray-600">At The Bolt Solution, we eliminate the burden of backend
            operations. Our
            technology-driven
            platform provides fast, accurate quoting, proactive renewal management and comprehensive policy
            support - allowing your team to focus on what truly matters: driving growth. With 16 years of industry
            expertise
            and a commitment to efficiency, agencies trust us to handle their backend tasks seamlessly. We empower you
            to reduce operational costs, improve employee satisfaction and increase overall productivity.
          </p>
        </div>
      </div>

      <!-- Row 4 -->
      <div class="row-4 flex flex-col lg:flex-row mt-8 md:p-10" data-aos="fade-left">
        <div class="w-full  lg:w-4/12 m-1 shadow-sm shadow-slate-400">
          <div class="info  md:h-full  rounded-lg p-8 text-center lg:text-left">
            <i style="display: flex;justify-content: center;"
              class="icons fas fa-stopwatch text-3xl text-fontcolor p-4 "></i>
            <h1 style="margin-top: 20px; text-align: center;" class="text-xl font-bold mt-2 font-futuraAlt">
              58% more time available for focusing on generating new pipeline

            </h1>
          </div>
        </div>
        <div class="w-full lg:w-4/12 m-1 shadow-sm shadow-slate-400">
          <div class="info  rounded-lg p-8 text-center lg:text-left">
            <i style="display: flex;justify-content: center;" class="fas fa-database  text-3xl text-fontcolor p-4"></i>
            <h1 style="margin-top: 20px; text-align: center;" class="text-xl font-bold mt-2 font-futuraAlt">32% increase
              in the size of book
              of business
            </h1>
          </div>
        </div>
        <div class="w-full lg:w-4/12 m-1 shadow-sm shadow-slate-400">
          <div class="info  rounded-lg p-8 text-center lg:text-left">
            <i style="display: flex;justify-content: center;" class="fas fa-seedling text-3xl text-green-500 p-4"></i>
            <h1 style="margin-top: 20px; text-align: center;" class="text-xl font-bold mt-2 font-futuraAlt">68% decrease
              in costs for hiring
              and training new staff

            </h1>
          </div>
        </div>
      </div>
    </div>


    <!-- Row 5 -->
    <div class="row-5 flex flex-col lg:flex-row mt-8 md:mt-40" data-aos="fade-right">
      <div class="w-full lg:w-8/12 text-center lg:text-left">
        <div class="info">
          <span class="text-xs font-bold p-4 text-fontcolor font-futuraAlt">WHAT WE OFFER</span>
          <h1 class="text-2xl lg:text-4xl font-bold p-4 font-futuraAlt">Simpler, smarter,<br> more rewarding </h1>
        </div>
      </div>
      <div class="w-full lg:w-4/12 mt-4 lg:mt-16 mr-20 text-center lg:text-left">
        <a class="lg:inline-block py-2 px-6 md:w-64 xl:translate-x-32  bg-fontcolor text-center hover:bg-blue-950 text-sm text-white   border border-fontcolor transition duration-200"
          href="#">Explore More Products</a>
      </div>
    </div>

    <!-- Row 6 -->
    <div class="row-6 flex flex-col text-center lg:text-start lg:flex-row mt-32" data-aos="fade-up">
      <!-- Policy Quoting Section -->
      <div class="w-full lg:w-4/12 m-2 p-4 lg:p-0">
        <div class="container">
          <div class="card">
            <div class="image">
              <img href="#" class="w-full object-fit" src="./assets/images/1.jpg">
              <h2 class="text-xl font-semibold flex justify-center items-center p-5">Policy Quoting</h2>
            </div>

            <div class="content">
              <ul class="pt-4 mt-4 text-sm list-none">
                <li><a href="#" style=" text-decoration: none;" class=" text-fontcolor hover:text-lg hover:underline transition-all duration-75
                    ease-in-out ">Quoting
                    on AMS</a></li>
                <li><a href=" #" style="  text-decoration: none;"
                    class="text-fontcolor hover:text-lg hover:underline transition-all duration-75 ease-in-out ">
                    Carrier Quoting
                  </a></li>
                <li><a href="#" style=" text-decoration: none;"
                    class="text-fontcolor hover:text-lg hover:underline transition-all duration-75 ease-in-out ">Manual
                    Submissions</a></li>
                <li><a href="#" style=" text-decoration: none;"
                    class="text-fontcolor hover:text-lg hover:underline transition-all duration-75 ease-in-out ">Requoting
                    Renewals</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Servicing Section -->
      <div class="w-full lg:w-4/12 m-2 p-4 lg:p-0">
        <div class="container">
          <div class="card">
            <div class="image">
              <img href="#" class="w-full object-fit" src="./assets/images/2.jpg">
              <h2 class="text-xl font-semibold flex justify-center items-center p-5">Servicing</h2>
            </div>

            <div class="content">
              <ul class="pt-4  text-sm list-none">
                <li><a style=" text-decoration: none;" href="#"
                    class="text-fontcolor  transition-all duration-75 ease-in-out"> Personal
                    Lines & Commercial Lines</a></li>
                <li><a href="#" style=" text-decoration: none;"
                    class="text-fontcolor hover:text-lg hover:underline transition-all duration-75 ease-in-out ">ID
                    Cards</a></li>
                <li><a href="#" style=" text-decoration: none;"
                    class="text-fontcolor hover:text-lg hover:underline transition-all duration-75 ease-in-out ">COIs/EOIs</a>
                </li>
                <li><a href="#" style=" text-decoration: none;"
                    class="text-fontcolor hover:text-lg hover:underline transition-all duration-75 ease-in-out ">RCT/RCE</a>
                </li>
                <li><a href="#" style=" text-decoration: none;"
                    class="text-fontcolor hover:text-lg hover:underline transition-all duration-75 ease-in-out ">Cancellation
                    Processing</a></li>
                <li><a href="#" style=" text-decoration: none;"
                    class="text-fontcolor hover:text-lg hover:underline transition-all duration-75 ease-in-out ">Policy
                    Checking</a></li>
                <li><a href="#" style=" text-decoration: none;"
                    class="text-fontcolor hover:text-lg hover:underline transition-all duration-75 ease-in-out ">Mortgage
                    Changes
                  </a></li>
                <li><a href="#" style=" text-decoration: none;"
                    class="text-fontcolor hover:text-lg hover:underline transition-all duration-75 ease-in-out ">Changes
                    to Billing</a></li>
                <li><a href="#" style=" text-decoration: none;"
                    class="text-fontcolor hover:text-lg hover:underline transition-all duration-75 ease-in-out ">DEC
                    Page Requests</a></li>
                <li><a href="#" style=" text-decoration: none;"
                    class="text-fontcolor hover:text-lg hover:underline transition-all duration-75 ease-in-out ">General
                    Endorsements</a></li>
                <li><a href="#" style=" text-decoration: none;"
                    class="text-fontcolor hover:text-lg hover:underline transition-all duration-75 ease-in-out ">Requests
                    for Copies of Documents</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Data Entry Section -->
      <div class="w-full lg:w-4/12 m-2 p-4 lg:p-0">
        <div class="container">
          <div class="card">
            <div class="image">
              <img href="#" class="w-full object-fit" src="./assets/images/3.jpg">
              <h2 class="text-xl font-semibold flex justify-center items-center p-5">Data Entry</h2>
            </div>

            <div class="content">
              <ul class="pt-4 mt-4 text-sm list-none">
                <li><a href="#" style=" text-decoration: none;"
                    class="text-fontcolor hover:text-lg hover:underline transition-all duration-75 ease-in-out ">Audit
                    Follow-Up</a></li>
                <li><a href="#" style=" text-decoration: none;"
                    class="text-fontcolor hover:text-lg hover:underline transition-all duration-75 ease-in-out ">Weekly
                    Reporting</a>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Row 7 -->
    <div id="register" class="row-7 mt-8 text-center md:mt-48" data-aos="fade-up">
      <h1 class="text-fontcolor font-bold text-xl font-futuraAlt">HOW TO</h1>
      <h1 class="text-2xl lg:text-4xl font-bold mt-5 font-futuraAlt">Register in simple steps</h1>
      <p class="mt-4 p-4 lg:pl-40 lg:pr-40 md:mb-10 text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing
        elit. Excepturi
        cumque magnam unde
        reprehenderit amet recusandae quisquam praesentium labore minima totam!</p>
    </div>

    <!-- Row 8 -->
    <div class="row-8 flex flex-col lg:flex-row mt-8 space-y-8 lg:space-y-0  items-center justify-center"
      data-aos="fade-up">
      <!-- Feature 1 -->
      <div class="feature-item text-center flex-1">
        <div class="icon-circle  text-white rounded-full h-12 w-12 mx-auto mb-4 flex items-center justify-center">
          <span class="icon-number text-xl">1</span>
        </div>
        <h3 class="feature-title text-lg font-bold font-futuraAlt">Schedule a Consultation</h3>
        <p class="feature-description mt-2">Start with a free consultation to understand your agency's specific needs.
        </p>
      </div>

      <!-- Line Between for Large Screens (Horizontal) -->
      <div class="hidden lg:block border-t border-gray-500  w-44"></div>

      <!-- Line Between for Small Screens (Vertical) -->
      <div class="block lg:hidden border-l border-gray-500 h-12"></div>

      <!-- Feature 2 -->
      <div class="feature-item text-center flex-1">
        <div class="icon-circle  text-white rounded-full h-12 w-12 mx-auto mb-4 flex items-center justify-center">
          <span class="icon-number text-xl">2</span>
        </div>
        <h3 class="feature-title text-lg font-bold font-futuraAlt">Tailored Solution</h3>
        <p class="feature-description mt-2 ">We’ll design a custom backend support plan for quoting, renewals, and
          policy management.
        </p>
      </div>

      <!-- Line Between for Large Screens (Horizontal) -->
      <div class="hidden lg:block border-t border-gray-500 w-44"></div>

      <!-- Line Between for Small Screens (Vertical) -->
      <div class="block lg:hidden border-l border-gray-500 h-12"></div>

      <!-- Feature 3 -->
      <div class="feature-item text-center flex-1">
        <div class="icon-circle  text-white rounded-full h-12 w-12 mx-auto mb-4 flex items-center justify-center">
          <span class="icon-number text-xl">3</span>
        </div>
        <h3 class="feature-title text-lg font-bold font-futuraAlt">Seamless Integration</h3>
        <p class="feature-description mt-2">Our team will onboard your agency, ensuring a smooth transition of backend
          tasks.</p>
      </div>
    </div>



    <!-- Line Between for Small Screens (Vertical) -->
    <div class="block lg:hidden border-l border-gray-500 h-12"></div>

    <!-- Feature 4 -->
    <div class="feature-item text-center flex-1">
      <div class="icon-circle  text-white rounded-full h-12 w-12 mx-auto mb-4 flex items-center justify-center">
        <span class="icon-number text-xl">4</span>
      </div>
      <h3 class="feature-title text-lg font-bold font-futuraAlt">Focus on Growth</h3>
      <p class="feature-description mt-2">With your backend taken care of, your team can now focus on securing new
        clients and driving revenue.</p>
    </div>
  </div>


  <!-- Row 9 (Video Section) -->
  <div class="row-9 mt-20 mb-20" data-aos="fade-up">
    <video class="w-full" controls>
      <source src="path-to-your-video.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>




  <!-- Row 10 (Contact Info) -->
  <div id="contact"
    class="row-10 flex flex-col mb-16 lg:flex-row justify-between items-center mt-8 space-y-8 lg:space-y-0 lg:space-x-8"
    data-aos="fade-up">

    <!-- Contact Info Section -->
    <div class="w-full lg:w-3/3 flex justify-center lg:justify-center">
      <div class="info-container  bg-gray-100 p-8 rounded-lg shadow-lg w-full lg:w-6/12">
        <div class="info-item flex  justify-center mb-8" data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-geo-alt text-yellow-500 text-3xl mr-4"></i>
          <div>
            <h3 class="text-xl font-semibold text-blue-800">Address</h3>
            <p class="text-gray-600">A108 Adam Street, New York, NY 535022</p>
          </div>

          <div class="info-item flex mb-8" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone text-yellow-500 text-3xl mr-4"></i>
            <div>
              <h3 class="text-xl font-semibold text-blue-800">Call Us</h3>
              <p class="text-gray-600">+1 5589 55488 55</p>
            </div>
          </div>
        </div>
        <div class="info-item flex justify-center mb-8" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-envelope text-yellow-500 text-3xl mr-4"></i>
          <div>
            <h3 class="text-xl font-semibold text-blue-800">Email Us</h3>
            <p class="text-gray-600">info@example.com</p>
          </div>

          <div class="info-item flex " data-aos="fade-up" data-aos-delay="500">
            <i class="bi bi-clock text-yellow-500 text-3xl mr-4"></i>
            <div>
              <h3 class="text-xl font-semibold text-blue-800">Open Hours</h3>
              <p class="text-gray-600">Mon-Sat: 11AM - 23PM</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Info Section -->
  </div>


  <h1 class="text-3xl text-center font-bold">Get Started With Us</h1>

  <div id="getstarted"
    class="row-10 flex flex-col mb-16 lg:flex-row justify-center items-center mt-8 space-y-8 lg:space-y-0 lg:space-x-8">

    <!-- Contact Form Section -->
    <div class="w-full lg:w-2/3">
      <form id="contactForm" class="bg-white p-8 rounded-lg shadow-lg space-y-6" method="POST">

        <!-- Name and Email -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <input type="text" name="name" placeholder="Your Name" required
              class="w-full p-3 border border-yellow-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-800">
          </div>
          <div>
            <input type="email" name="email" placeholder="Your Email" required
              class="w-full p-3 border border-yellow-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-800">
          </div>
        </div>

        <!-- Phone Number -->
        <div>
          <input type="tel" name="phone" placeholder="Your Phone Number"
            class="w-full p-3 border border-yellow-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-800">
        </div>

        <!-- Date Selection -->
        <div>
          <label for="date" class="block mb-2 text-sm font-medium text-gray-700">Select Date</label>
          <input type="date" id="date" name="date" required
            class="w-full p-3 border border-yellow-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-800">
        </div>

        <!-- Time Selection -->
        <div>
          <label for="time" class="block mb-2 text-sm font-medium text-gray-700">Select Time</label>
          <select id="time" name="time" required
            class="w-full p-3 border border-yellow-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-800">
            <option value="" disabled selected>Select a time</option>
            <option value="10:00">10:00 AM</option>
            <option value="11:00">11:00 AM</option>
            <option value="14:00">2:00 PM</option>
            <option value="16:00">4:00 PM</option>
          </select>
        </div>

        <!-- Subject and Message -->
        <div>
          <input type="text" name="subject" placeholder="Subject" required
            class="w-full p-3 border border-yellow-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-800">
        </div>
        <div>
          <textarea name="message" rows="8" placeholder="Message" required
            class="w-full p-3 border border-yellow-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-800"></textarea>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
          <button type="submit" class="bg-blue-800 text-white py-3 px-6 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">Submit</button>
        </div>

        <!-- Loader -->
        <div id="loader" class="hidden">
          <p>Sending your message...</p>
        </div>

        <!-- Message Container -->
        <div id="message" class="fixed top-0 left-0 w-full p-4 hidden text-center text-white"></div>
      </form>
    </div>
    <!-- End Contact Form Section -->

  </div>


  <!-- Row 11 () -->
  <div
    class="row-10 flex flex-col mb-16 lg:flex-row justify-between items-center mt-8 space-y-8 lg:space-y-0 lg:space-x-8"
    data-aos="fade-up">
    <div class="bg-blue-50 p-8 rounded-lg w-full lg:w-6/12 text-center lg:text-left">
      <!-- Carousel Container -->
      <div id="testimonial-carousel" class="relative p-10">
        <!-- Testimonial 1 -->
        <div class="testimonial-slide active">
          <p class="text-lg italic">"The Bolt Solution transformed the way we manage renewals and quotes. It saved us
            hours each week and helped us focus on building new client relationships."</p>
          <p class="text-sm font-bold mt-2 font-futuraAlt">— Sarah P., Agency Owner</p>
        </div>
        <!-- Testimonial 2 -->
        <div class="testimonial-slide hidden">
          <p class="text-lg italic">"Their system is a game changer. No more scrambling before policy expiration dates
            or spending valuable time on backend work. We couldn't be happier."</p>
          <p class="text-sm font-bold mt-2 font-futuraAlt">— John M., Operations Manager</p>
        </div>
      </div>
    </div>

    <div class="w-full lg:w-5/12 flex flex-col items-center p-6 pt-1 pl-0 lg:items-start">
      <div class="mb-4 text-center lg:text-left">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-fontcolor mx-auto lg:mx-0" fill="none"
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
        </svg>
        <p class="text-2xl font-semibold mt-4 font-futuraAlt">We are available 24/7</p>
      </div>
      <a href="#getstarted" class="text-fontcolor font-semibold flex items-center links">
        Contact us <i class="fas fa-arrow-right ml-2 mt-1"></i>
      </a>
    </div>
  </div>

  <!-- Row 12 (Promo Section) -->
  <div style="background-color: rgb(34 34 124);" class="row-11 promo mt-8 bg-blue-600 text-white p-12 flex flex-col lg:flex-row justify-between items-center"
    data-aos="fade-up">
    <div class="w-full lg:w-6/12 text-center lg:text-left mb-4 lg:mb-0">
      <h2 class="text-2xl xl:text-4xl font-bold font-futuraAlt">Get life insurance.<br> Get a Wealth Bonus.</h2>
    </div>
    <div class="w-full lg:w-6/12 flex flex-col items-center lg:items-start">
      <p class="text-xl mt-4 mb-4 text-center lg:text-left font-futuraAlt text-white">Get world-class cover that rewards
        you <span class="max-sm:hidden  "><br></span>
        with wealth
        while you’re alive.</p>
      <div class="flex w-full px-0 lg:pr-12">
        <input type="text" placeholder="Your email address"
          class="p-2 w-full border bg-fonttext-fontcolor text-white border-fonttext-fontcolor">
        <button
          class="bg-white text-blue-600 font-bold w-44 ml-1 hover:bg-blue-600 hover:text-white transition duration-100">Get
          Started</button>
      </div>
    </div>
  </div>



  <!-- Row 13 (Footer Section) -->
  <footer class="row-12 footer py-12  text-center   " data-aos="fade-up">
    <div class="max-w-7xl mx-auto grid grid-cols-2 lg:grid-cols-5 gap-8">

      <!-- Company Info -->
      <div>
        <h2 class="text-lg font-bold flex items-center max-sm:p-4 ">
          <svg xmlns="./assets/images/boltsolution.png" class="h-6 w-6 " fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
          </svg>
          The Bolt Solution
        </h2>
        <p class="text-sm  text-white">We inspire the strong support you need to make decisions that are simple
          to save.</p>
      </div>



      <!-- Wealth Bonus -->
      <div>
        <h3 class="text-sm font-bold mb-4 text-white">Get Started with Us</h3>
        <ul class="space-y-2">
          <li><a href="#contact" class="text-xs text-white">Send us a message »</a></li>
        </ul>
      </div>

      <!-- Company Info -->
      <div>
        <h3 class="text-sm font-bold mb-4 text-white">Company</h3>
        <ul class="space-y-2">
          <li><a href="./aboutUs.html" class="text-xs text-white">About Bolt Solutions</a></li>
          <li><a href="#contact" class="text-xs text-white">Contact</a></li>
        </ul>
      </div>



    </div>
  </footer>

  </div>

</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

<script src="./assets/js/main.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("contactForm");
    const loader = document.getElementById("loader");
    const messageContainer = document.getElementById("message");

    form.addEventListener("submit", async function(event) {
      event.preventDefault();

      loader.classList.remove("hidden");

      const formData = new FormData(form);

      try {
        const response = await fetch(window.location.href, {
          method: "POST",
          body: formData,
          headers: {
            "Accept": "application/json",
          },
        });

        const result = await response.json();

        loader.classList.add("hidden");

        if (result.status === "success") {
          showMessage("Your message has been sent successfully!", "bg-green-500");
        } else {
          showMessage("There was an error sending your message. Please try again.", "bg-red-500");
        }
      } catch (error) {
        loader.classList.add("hidden");
        showMessage("Something went wrong. Please try again.", "bg-red-500");
      }
    });

    function showMessage(message, bgColorClass) {
      messageContainer.innerText = message;
      messageContainer.className = `fixed top-0 left-0 w-full p-4 text-center text-white ${bgColorClass}`;
      messageContainer.classList.remove("hidden");

      setTimeout(() => {
        messageContainer.classList.add("hidden");
      }, 5000);
    }
  });
</script>


<script>
  // Burger menus
  document.addEventListener('DOMContentLoaded', function() {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
      for (var i = 0; i < burger.length; i++) {
        burger[i].addEventListener('click', function() {
          for (var j = 0; j < menu.length; j++) {
            menu[j].classList.toggle('hidden');
          }
        });
      }
    }


    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
      for (var i = 0; i < close.length; i++) {
        close[i].addEventListener('click', function() {
          for (var j = 0; j < menu.length; j++) {
            menu[j].classList.toggle('hidden');
          }
        });
      }
    }

    if (backdrop.length) {
      for (var i = 0; i < backdrop.length; i++) {
        backdrop[i].addEventListener('click', function() {
          for (var j = 0; j < menu.length; j++) {
            menu[j].classList.toggle('hidden');
          }
        });
      }
    }
  });

  let currentSlide = 0;
  const slides = document.querySelectorAll('.testimonial-slide');
  const totalSlides = slides.length;

  function showNextSlide() {
    slides[currentSlide].classList.add('hidden');
    currentSlide = (currentSlide + 1) % totalSlides;
    slides[currentSlide].classList.remove('hidden');
  }

  // Automatically switch testimonials every 5 seconds (5000ms)
  setInterval(showNextSlide, 5000);

  function toggleMobileMegamenu() {
    const megamenu = document.getElementById('mobile-megamenu');
    if (megamenu.classList.contains('hidden')) {
      megamenu.classList.remove('hidden');
    } else {
      megamenu.classList.add('hidden');
    }
  }
</script>
<script>
  // Predefined time slots based on date selection
  document.getElementById('date').addEventListener('change', function() {
    const selectedDate = this.value;
    const timeSelect = document.getElementById('time');
    // Example logic: You can add more sophisticated rules based on actual requirements.
    if (selectedDate) {
      // Enable and show predefined time slots for that date.
      timeSelect.disabled = false;
    }
  });
  document.getElementById('date').addEventListener('change', function() {
    const timeContainer = document.getElementById('time-container');
    // Show the time input with a smooth transition
    timeContainer.style.opacity = '1';
    timeContainer.style.maxHeight = '150px'; // Enough height to fully show the dropdown
  });
</script>

<script>
  AOS.init({
    duration: 800, // Duration of the animation in milliseconds
    once: false, // Whether animation should happen only once
  });
</script>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$response = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  require 'PHPMAILER/Exception.php';
  require 'PHPMAILER/PHPMailer.php';
  require 'PHPMAILER/SMTP.php';

  $mail = new PHPMailer(true);

  try {
    // SMTP settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sales@theboltsolution.com';
    $mail->Password = 'wkhzharrfybqasea';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    // Send to Admin
    $mail->setFrom('sales@theboltsolution.com', 'The Bolt Solution - Contact Form');
    $mail->addAddress('sales@theboltsolution.com', 'Admin');
    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Submission';
    $mail->Body = "
      <h3>New Contact Form Submission</h3>
      <p><strong>Name:</strong> {$name}</p>
      <p><strong>Email:</strong> {$email}</p>
      <p><strong>Phone:</strong> {$phone}</p>
      <p><strong>Date:</strong> {$date}</p>
      <p><strong>Time:</strong> {$time}</p>
      <p><strong>Subject:</strong> {$subject}</p>
      <p><strong>Message:</strong> {$message}</p>";

    $mail->send();

    // Confirmation to user
    $mail->clearAddresses();
    $mail->addAddress($email);
    $mail->Subject = 'We have received your request';
    $mail->Body = "
      <h3>Thank you for contacting us!</h3>
      <p>Dear {$name},</p>
      <p>We have received your request and someone from our team will reach out to you shortly.</p>
      <ul>
          <li><strong>Date:</strong> {$date}</li>
          <li><strong>Time:</strong> {$time}</li>
          <li><strong>Subject:</strong> {$subject}</li>
      </ul>
      <p>Thank you,<br>The Bolt Solution Team</p>";

    $mail->send();

    // Success response
    $response = ['status' => 'success'];
  } catch (Exception $e) {
    // Error response
    $response = ['status' => 'error', 'message' => $mail->ErrorInfo];
  }

  // Return JSON response for AJAX
  header('Content-Type: application/json');
  echo json_encode($response);
  exit();
}
?>






</html>