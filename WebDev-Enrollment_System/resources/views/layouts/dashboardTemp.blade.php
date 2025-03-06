<!--
=========================================================
* Soft UI Dashboard 3 - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    @yield('title')
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.all.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Sidebar background */
    .sidenav {
        box-shadow: 4px 0 8px rgba(0, 0, 0, 0.2) !important;
        z-index: 1000 !important;
        position: fixed !important;
        background: linear-gradient(310deg, var(--primary-blue), var(--secondary-blue));
    }
    .navbar-main {
      
        box-shadow: 4px 0 8px rgba(0, 0, 0, 0.2) !important;
    }
    .logout-btn {
        background: transparent;
        transition: all 0.3s ease;
        border-radius: 0.5rem;
        margin: 0.5rem 1rem;
        padding: 0.75rem 1rem;
        color: #344767;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .logout-btn:hover {
        background: #dc3545 !important;
        color: white !important;
    }

    .logout-btn:hover svg {
        fill: white !important;
    }

    .logout-btn svg {
        fill: #344767;
        transition: all 0.3s ease;
    }

    .logout-btn:hover .icon {
        background: transparent !important;
    }

    .logout-btn:hover .color-background {
        fill: white !important;
    }

    .logout-btn:hover .nav-link-text {
        color: white !important;
        font-weight: 600;
    }

    .logout-btn .icon {
        transition: all 0.3s ease;
    }

    .logout-btn .nav-link-text {
        transition: all 0.3s ease;
        color: #344767;
    }

    .logout-btn .color-background {
        fill: #344767;
        transition: all 0.3s ease;
    }

    .logout-btn .color-background.opacity-6 {
        fill-opacity: 0.6;
    }

    /* Update the sidebar navigation styles */
    .nav-item .nav-link {
        transition: all 0.3s ease;
        border-radius: 0.5rem;
        margin: 0 1rem;
        color: rgba(255, 255, 255, 0.7) !important; /* Slightly transparent white by default */
        display: flex;
        align-items: center;
        padding: 0.75rem 1rem;
    }

    /* Icon styles */
    .nav-item .nav-link i,
    .nav-item .nav-link svg,
    .nav-item .nav-link .nav-link-text {
        transition: all 0.3s ease;
        color: rgba(255, 255, 255, 0.7);
    }

    /* Hover effects */
    .nav-item .nav-link:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: translateX(5px);
    }

    .nav-item .nav-link:hover i,
    .nav-item .nav-link:hover svg,
    .nav-item .nav-link:hover .nav-link-text {
        color: #ffffff !important; /* Pure white on hover */
    }

    /* Active state */
    .nav-item .nav-link.active {
        background: var(--light) !important;
    }

    .nav-item .nav-link.active i,
    .nav-item .nav-link.active svg,
    .nav-item .nav-link.active .nav-link-text {
        color: var(--primary-blue) !important;
    }

    /* Icon container styles */
    .nav-item .nav-link .icon {
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 2rem;
    }

    /* SVG icon colors */
    .nav-item .nav-link .icon svg .color-background,
    .nav-item .nav-link .icon svg .color-foreground {
        transition: all 0.3s ease;
        fill: rgba(255, 255, 255, 0.7);
    }

    /* SVG icon hover colors */
    .nav-item .nav-link:hover .icon svg .color-background,
    .nav-item .nav-link:hover .icon svg .color-foreground {
        fill: #ffffff;
    }

    /* Dropdown/collapse items */
    .nav-item .collapse .nav-link,
    .nav-item .collapsing .nav-link {
        padding-left: 2.5rem;
    }

    /* Sidebar brand/logo */
    .sidenav .navbar-brand {
        color: #ffffff;
        font-weight: 600;
        font-size: 1.25rem;
        padding: 1.5rem 2rem;
        text-align: center;
        width: 100%;
        transition: all 0.3s ease;
    }

    .sidenav .navbar-brand::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80%;
        height: 1px;
        background: rgba(0, 0, 0, 0.2);
    }

    .sidenav .navbar-brand:hover {
        text-decoration: none;
        transform: none;
    }

    .sidenav .nav-link {
        margin: 5px 15px;
        padding: 10px 15px;
    }

    .sidenav .nav-item {
        margin-top: 10px;
    }

    .sidenav .nav-link-text {
        padding-left: 10px;
    }

    .sidenav .navbar-nav {
        margin-top: 1.5rem;
    }

    .sidenav .nav-link i {
        margin-bottom: 5px;
    }

    .nav-item .collapse {
        transition: all 0.3s ease;
    }

    .nav-item .nav-link {
        position: relative;
    }

    .nav-item .nav-link .fa-chevron-down {
        transition: transform 0.3s ease;
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
    }

    .nav-item .nav-link[aria-expanded="true"] .fa-chevron-down {
        transform: translateY(-50%) rotate(180deg);
    }

    .nav-item .collapse .nav-link {
        padding-left: 1rem;
        font-size: 0.875rem;
    }

    .nav-item .collapse .nav-link.active {
        background: linear-gradient(310deg, #ea580c, #facc15);
        color: white !important;
    }

    .nav-item .collapse .nav-link:hover:not(.active) {
        background: rgba(255, 255, 255, 0.1);
    }

    .dropdown-menu {
        background: white;
        border: 0;
        border-radius: 0.5rem;
        box-shadow: 0 8px 26px -4px rgb(20 20 20 / 15%), 0 8px 9px -5px rgb(20 20 20 / 6%);
        padding: 0.5rem;
    }

    .dropdown-item {
        padding: 0.5rem 1rem;
        border-radius: 0.375rem;
        transition: all 0.3s ease;
    }

    .dropdown-item:hover {
        background: linear-gradient(310deg, #ea580c, #facc15);
        color: white;
    }

    .dropdown-item.active {
        background: linear-gradient(310deg, #ea580c, #facc15);
        color: white;
    }

    .nav-link[aria-expanded="true"] .fa-chevron-down {
        transform: rotate(180deg);
    }

    .fa-chevron-down {
        transition: transform 0.3s ease;
    }
  </style>
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0 text-center" href="{{ route('dashboard') }}">
          <div class="d-flex flex-column align-items-center">
              <span class="font-weight-bold" style="font-size: 1.2rem; color: #ffffff;">
                  Student Information
              </span>
              <span class="font-weight-bold" style="font-size: 1.2rem; color: #ffffff;">
                  System
              </span>
          </div>
      </a>
  </div>
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            @if(Auth::user()->user_type === 'student')
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('student.dashboard') ? 'active bg-gradient-white text-dark' : 'text-dark' }}" 
                       href="{{ route('student.dashboard') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-home text-dark opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('student.studentSubjects') ? 'active bg-gradient-white text-dark' : 'text-dark' }}" 
                       href="{{ route('student.studentSubjects') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-book text-dark opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">My Subjects</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('student.studentGrades') ? 'active bg-gradient-white text-dark' : 'text-dark' }}" 
                       href="{{ route('student.studentGrades') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-dark text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-chart-bar text-dark opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">My Grades</span>
                    </a>
                </li>
            @endif
            
            @if(Auth::user()->user_type === 'instructor')
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('dashboard') ? 'active bg-gradient-white text-dark' : 'text-dark' }}" 
                       href="{{ route('dashboard') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-home text-dark opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('enrollment.*') ? 'active bg-gradient-white text-dark' : 'text-dark' }}" 
                       href="#enrollmentCollapse" 
                       role="button">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-list text-dark opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Enrollment</span>
                    </a>
                    <div class="show" id="enrollmentCollapse">
                        <ul class="nav ms-4 ps-3">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('enrollment.index') ? 'active bg-gradient-white text-dark' : 'text-dark' }}" 
                                   href="{{ route('enrollment.index') }}">
                                    <span class="nav-link-text">Available Students</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('enrollment.enrolled') ? 'active bg-gradient-white text-dark' : 'text-dark' }}" 
                                   href="{{ route('enrollment.enrolled') }}">
                                    <span class="nav-link-text">Enrolled Students</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('students.index') ? 'active bg-gradient-white text-dark' : 'text-dark' }}" 
                       href="{{ route('students.index') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-user text-dark opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Students</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('subjects.index') ? 'active bg-gradient-white text-dark' : 'text-dark' }}" 
                       href="{{ route('subjects.index') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-book text-dark opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Subjects</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('grades.index') ? 'active bg-gradient-white text-dark' : 'text-dark' }}" 
                       href="{{ route('grades.index') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-list-alt text-dark opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Grades</span>
                    </a>
                </li>
            @endif
            <li class="nav-item mt-3">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <button type="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link w-100 text-start border-0 bg-transparent">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-sign-out-alt text-dark opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Out</span>
                </button>
            </li>
        </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">@yield('Pages')</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">@yield('Pages')</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
          <ul class="navbar-nav justify-content-end">
            <!-- Profile Dropdown -->
            <li class="nav-item pe-2 d-flex align-items-center">
              <span class="user-name-display">
                  <i class="fa fa-user"></i>
                  {{Auth::user()->name}}
              </span>
          </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
   @yield('content')
  </main>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#fff",
          data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 15,
              font: {
                size: 14,
                family: "Inter",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              display: false
            },
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#cb0c9f",
            borderWidth: 3,
            backgroundColor: gradientStroke1,
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

          },
          {
            label: "Websites",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#3A416F",
            borderWidth: 3,
            backgroundColor: gradientStroke2,
            fill: true,
            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
            maxBarThickness: 6
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#b2b9bf',
              font: {
                size: 11,
                family: "Inter",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#b2b9bf',
              padding: 20,
              font: {
                size: 11,
                family: "Inter",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.1.0"></script>
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Stack scripts -->
  @stack('scripts')
  <style>
    :root {
        --primary-blue: #4682B4;        /* Steel Blue - main color */
        --secondary-blue: #6495ED;      /* Cornflower Blue - lighter accent */
        --light-blue: #87CEEB;          /* Sky Blue - lightest accent */
        --hover-blue: #5B9BD5;          /* Microsoft Blue - hover state */
        --soft-blue: #B0C4DE;           /* Light Steel Blue - subtle accents */
        --light: #ffffff;
        --dark: #2c3e50;
        --gray-light: #f8f9fa;
        --success: #22c55e;
        --warning: #eab308;
        --danger: #ef4444;
    }

    /* Sidebar Styling */
    .sidenav {
        background: linear-gradient(310deg, var(--primary-blue), var(--secondary-blue));
        border-right: 1px solid rgba(100, 149, 237, 0.1);
        box-shadow: 0 4px 12px rgba(70, 130, 180, 0.1) !important;
    }

    .sidenav .navbar-brand {
        color: var(--light);
        text-decoration: none;
        padding: 1.5rem 2rem;
        margin-bottom: 2rem;
    }

    .sidenav .navbar-brand:hover {
        text-decoration: none;
    }

    .sidenav .nav-link {
        color: var(--light) !important;
        transition: all 0.3s ease;
        border-radius: 8px;
        margin: 5px 15px;
        padding: 0.75rem 1rem;
    }

    .sidenav .nav-link:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: translateX(5px);
    }

    .sidenav .nav-link.active {
        background: var(--light) !important;
        color: var(--primary-blue) !important;
        box-shadow: 0 4px 6px rgba(70, 130, 180, 0.1);
    }

    /* Icon Styling in Sidebar */
    .sidenav .icon-shape {
        background: rgba(255, 255, 255, 0.2) !important;
        border-radius: 8px;
    }

    .sidenav .nav-link:hover .icon-shape,
    .sidenav .nav-link.active .icon-shape {
        background: rgba(255, 255, 255, 0.2) !important;
    }

    /* Sidebar Footer or Bottom Section */
    .sidenav .sidenav-footer {
        background: var(--dark-orange);
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    /* Main Content Area */
    .main-content {
        margin-left: 280px;
        padding: 1rem;
        min-height: 100vh;
        background-color: var(--gray-light);
    }

    @media (max-width: 1199.98px) {
        .main-content {
            margin-left: 0;
            width: 100%;
        }
    }

    /* Cards */
    .card {
        background: var(--light);
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(70, 130, 180, 0.08);
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(70, 130, 180, 0.12);
    }

    .card-header {
        background: linear-gradient(310deg, var(--primary-blue), var(--secondary-blue));
        color: var(--light);
        border: none;
        border-radius: 12px 12px 0 0 !important;
        padding: 1.25rem;
    }

    /* Stats Cards */
    .stats-card {
        background: linear-gradient(310deg, var(--primary-blue), var(--secondary-blue));
        color: var(--light);
        border-radius: 1rem;
        padding: 1.5rem;
        height: 100%;
    }

    .stats-card h5 {
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.875rem;
        margin-bottom: 0.5rem;
    }

    .stats-card h3 {
        color: var(--light);
        font-weight: 600;
        font-size: 1.8rem;
        margin-bottom: 0;
    }

    /* Tables */
    .table {
        margin-bottom: 0;
    }

    .table thead th {
        background: var(--primary-blue);
        color: var(--light);
        font-size: 0.875rem;
        font-weight: 500;
        padding: 1rem;
        border-bottom: none;
    }

    .table tbody tr {
        transition: all 0.3s ease;
    }

    .table tbody tr:hover {
        background: rgba(70, 130, 180, 0.05);
    }

    .table td {
        padding: 1rem;
        vertical-align: middle;
    }

    /* Buttons */
    .btn-primary {
        background: linear-gradient(310deg, var(--primary-blue), var(--secondary-blue));
        border: none;
        border-radius: 8px;
        padding: 0.75rem 1.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(70, 130, 180, 0.15);
    }

    /* Status Badges */
    .bg-gradient-success {
        background: linear-gradient(310deg, #059669, #10b981);
    }

    .bg-gradient-secondary {
        background: linear-gradient(310deg, var(--primary-blue), var(--secondary-blue));
    }

    /* Improved Spacing */
    .px-2 {
        padding-left: 1rem !important;
        padding-right: 1rem !important;
    }

    .py-1 {
        padding-top: 0.75rem !important;
        padding-bottom: 0.75rem !important;
    }

    /* Text Improvements */
    .text-xs {
        font-size: 0.75rem;
        color: var(--dark);
    }

    .text-sm {
        font-size: 0.875rem;
        font-weight: 500;
    }

    .mb-0 {
        margin-bottom: 0 !important;
    }

    /* Stats Cards and Icons */
    .icon-shape.bg-gradient-warning {
        background: linear-gradient(310deg, var(--primary-blue), var(--light-blue));
    }

    .stats-card {
        background: linear-gradient(310deg, var(--primary-blue), var(--secondary-blue));
        box-shadow: 0 4px 12px rgba(70, 130, 180, 0.1);
        transition: all 0.3s ease;
    }

    .stats-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(70, 130, 180, 0.15);
    }

    /* Card Hover Effects */
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(70, 130, 180, 0.12);
    }

    /* Table Row Hover */
    .table tbody tr:hover {
        background: rgba(70, 130, 180, 0.05);
    }

    /* Buttons and Badges */
    .btn-primary, 
    .bg-gradient-primary,
    .bg-gradient-warning {
        background: linear-gradient(310deg, var(--primary-blue), var(--secondary-blue));
        border: none;
        transition: all 0.3s ease;
    }

    .btn-primary:hover,
    .bg-gradient-primary:hover,
    .bg-gradient-warning:hover {
        background: linear-gradient(310deg, var(--secondary-blue), var(--light-blue));
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(70, 130, 180, 0.15);
    }

    /* Circle Icons */
    .icon-shape {
        background: linear-gradient(310deg, var(--primary-blue), var(--secondary-blue));
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(70, 130, 180, 0.1);
    }

    .icon-shape:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(70, 130, 180, 0.15);
        background: linear-gradient(310deg, var(--secondary-blue), var(--light-blue));
    }

    .icon-shape i {
        color: var(--light);
        opacity: 0.95;
    }

    /* Card Headers */
    .card-header {
        background: linear-gradient(310deg, var(--primary-blue), var(--secondary-blue));
        border-radius: 12px 12px 0 0;
        padding: 1.25rem;
    }

    /* Active Navigation */
    .nav-link.active .icon-shape {
        background: linear-gradient(310deg, var(--primary-blue), var(--secondary-blue));
        box-shadow: 0 4px 8px rgba(70, 130, 180, 0.15);
    }

    /* Status Badges */
    .badge.bg-gradient-warning {
        background: linear-gradient(310deg, var(--primary-blue), var(--secondary-blue));
    }

    /* Improved Animations */
    .card, .stats-card, .icon-shape, .btn-primary {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
  </style>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('.nav-link[data-bs-toggle="collapse"]');
        
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                const isExpanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', !isExpanded);
            });
        });
    });
  </script>
</body>

</html>