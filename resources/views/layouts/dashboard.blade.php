<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>{{ env('WEBSITE_NAME')}}</title>

    <link href="{{url('assets/img/favicon.jpg')}}" rel="icon">
    <link rel="stylesheet" href="{{url('assets/css/cdnjs.cloudflare.com_ajax_libs_font-awesome_4.7.0_css_font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}">
    
    <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/bootstrap-icons/fonts/bootstrap-icons.woff2')}}" rel="fonts">
    <link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        text-align: right;
        height: 25px;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{url('assets/css/dashboard.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/headers.css')}}" rel="stylesheet">

    @yield("head_content")
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a href="#" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
    <strong>{{env('WEBSITE_ADMIN_NAME')}}</strong><br>
  </a>
</header>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/admin/home')}}">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Personal</span>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/about')}}">
              <span data-feather="info" class="align-text-bottom"></span>
              About
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/contact')}}">
              <span data-feather="mail" class="align-text-bottom"></span>
              Contacts
            </a>
          </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Educational</span>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/formation')}}">
              <span data-feather="book" class="align-text-bottom"></span>
              Formations
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/certificat')}}">
              <span data-feather="award" class="align-text-bottom"></span>
              Certificates
            </a>
          </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Professional</span>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/experience')}}">
              <span data-feather="clock" class="align-text-bottom"></span>
              Experiences
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/project')}}">
              <span data-feather="check" class="align-text-bottom"></span>
              Projects
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/skill')}}">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Skills
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/client')}}">
              <span data-feather="users" class="align-text-bottom"></span>
              Clients
            </a>
          </li>
        </ul>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/admin/setting')}}">
              <span data-feather="tool" class="align-text-bottom"></span>
              Settings
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      @yield("content")
    </main>
    <br>
    <div class="container footer">
      <footer>
        <p class="text-muted">Copyright &copy;  CHERIEF Houcine Abdelkader, 2023</p>
      </footer>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/js/dashboard.js')}}"></script>
    <script>
      function selectElement(id, valueToSelect) {
        let element = document.getElementById(id);
        element.value = valueToSelect;
      }
    </script>
    @yield("script_content")
  </body>
</html>
