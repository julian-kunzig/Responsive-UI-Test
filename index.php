<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Julian - Responsive UI TEST" />
    <meta
      name="keywords"
      content="Html, Css, jQuery, JavaScript, Julian, onepage, personal, responsive, design, creative"
    />

    <!-- Title -->
    <title>Responsive UI</title>
    <!-- Google Fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,800"
    />
    <!-- Bootstrap Css -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <!-- ========== Start Navbar ========== -->
    <nav
      class="navbar navbar-default navbar-fixed-top d-flex align-items-center"
    >
      <div class="container">
        <div class="navbar-header">
          <!-- logo -->
          <img src="assets/PNGs/Logo@2x.png" />
        </div>
        <div class="navbar-links">
          <ul class="nav navbar-nav navbar-right flex-row">
            <li>
              <img
                class="mr-4 cursor-hover"
                src="assets/PNGs/icn_search@2x.png"
              />
            </li>
            <li>
              <img class="cursor-hover" src="assets/PNGs/icn_person@2x.png" />
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- ========== End Navbar ========== -->

    <!-- ========== Start Result ========== -->
    <section id="result_section"></section>
    <!-- ========== End Result ========== -->

    <!-- ========== Start Search ========== -->
    <section id="search_section">
      <div
        class="container text-center d-flex flex-column justify-content-center h-100"
      >
        <div id="search_message">
          <h1 class="title">Search Any Email Address</h1>
          <h3 class="description">
            <span class="text-emphasis">Start Here</span> - Look up the owner's
            name, photos and online profiles. See what you find!
          </h3>
        </div>
        <form id="email_search_form" class="text-left" action="#" method="get">
          <div class="form-row">
            <div class="col-md-10 col-sm-12">
              <input
                type="text"
                class="form-control"
                id="searchEmail"
                for="email"
                placeholder="EMAIL"
                required
              />
              <div id="email_search_message" class="d-none"></div>
            </div>
            <div class="col-md-2 col-sm-12">
              <button type="submit" class="btn cursor-hover">
                <span>GO!</span>
              </button>
            </div>
          </div>
        </form>
        <div class="d-flex search-lock">
          <img src="assets/PNGs/lock@2x.png" />
          <p class="text-emphasis ml-3">
            Enter Any Email Address. They won't be notified.
          </p>
        </div>
      </div>
    </section>
    <!-- ========== End Search ========== -->

    <!-- ========== Start Email Lookup ========== -->
    <section id="email_section">
      <div class="container">
        <h2 class="title">Reverse Email Lookup</h2>
        <h3 class="description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.
        </h3>
        <div class="row email-options">
          <div class="col-md-6 d-flex align-items-center email-option">
            <span
              class="d-flex align-items-center justify-content-center round-mark"
              >1</span
            >
            <div class="email-option-text">
              <h4 class="email-option-title">Lorem Ipsum</h4>
              <p class="email-option-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-center email-option">
            <span
              class="d-flex align-items-center justify-content-center round-mark"
              >4</span
            >
            <div class="email-option-text">
              <h4 class="email-option-title">Lorem Ipsum</h4>
              <p class="email-option-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-center email-option">
            <span
              class="d-flex align-items-center justify-content-center round-mark"
              >2</span
            >
            <div class="email-option-text">
              <h4 class="email-option-title">Lorem Ipsum</h4>
              <p class="email-option-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-center email-option">
            <span
              class="d-flex align-items-center justify-content-center round-mark"
              >5</span
            >
            <div class="email-option-text">
              <h4 class="email-option-title">Lorem Ipsum</h4>
              <p class="email-option-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-center email-option">
            <span
              class="d-flex align-items-center justify-content-center round-mark"
              >3</span
            >
            <div class="email-option-text">
              <h4 class="email-option-title">Lorem Ipsum</h4>
              <p class="email-option-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-center email-option">
            <span
              class="d-flex align-items-center justify-content-center round-mark"
              >6</span
            >
            <div class="email-option-text">
              <h4 class="email-option-title">Lorem Ipsum</h4>
              <p class="email-option-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========== End Email Lookup ========== -->

    <!-- ========== Start Loading bar ========== -->
    <section id="loading_section" class="d-none">
      <div
        class="d-flex justify-content-center align-items-center flex-column w-100 h-100"
      >
        <img src="assets/loading_spinner.gif" />
        <p>Please wait a moment...</p>
      </div>
    </section>
    <!-- ========== End Loading bar ========== -->

    <!-- ========== Start Footer ========== -->

    <footer class="footer">
      <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-center">
          <div class="description">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
          <div class="terms text-center">
            <span><a href="#">Terms</a> | <a href="#">Privacy</a></span>
          </div>
        </div>
      </div>
    </footer>
    <!-- ========== End Footer ========== -->

    <!-- ========== Js ========== -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Main Js -->
    <script src="js/main.js"></script>
  </body>
</html>
