<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo t('page_title').' | '.$config['site_name'];?></title>
  <meta name="description" content="<?php echo $page_description;?>">
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="<?php echo $page_keywords;?>">

  <!-- Stylesheets -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.tagsinput.css" />
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/responsive.css">

  <!--[if IE 9]>
  <script src="js/media.match.min.js"></script>
  <![endif]-->
</head>

<body>
<div id="main-wrapper" class="our-agents-content">

  <!-- HEADER -->
  <header id="header">
    <div class="header-top-bar">

      <!--
      HEADER TOP BAR WITH NOTIFICATION FOR REGISTER USER
      -->

      <div class="header-notification-bar" style="display:none;">
        <div class="register-user">
          <div class="container">
            <div class="row">
              <div class="col-md-3 col-sm-3">
                <div class="logo-section">
                  <a href="index.html"><img src="img/logo-bu.png" alt=""></a>
                </div>
              </div>

              <div class="col-md-6 col-sm-5">
                <div class="search-form">
                  <form action="#">
                    <button class="dropdown-search"><i class="fa fa-caret-down"></i> <i class="fa fa-bars"></i></button>
                    <input type="search" placeholder="Search..." class="topbar-search-input">
                    <button class="search-button"><i class="fa fa-search"></i></button>
                  </form>

                </div>
              </div>

              <div class="col-md-3 col-sm-4">
                <div class="notification-section text-right">
                  <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-envelope-o"></i></a><span class="new-notification">3</span></li>
                    <li><a href="#"><i class="fa fa-bell-o"></i></a><span class="new-notification">3</span></li>
                    <li class="user-profile-pic"><a href="#"><img src="./img/content/agent-img-1.jpg" alt=""></a></li>
                  </ul>
                </div>
              </div>

            </div> <!-- end .row -->
          </div> <!-- end .container -->
        </div> <!-- end .register-user -->
      </div> <!-- end. header-notification-bar  -->

      <!--
      END HEADER NOTIFICATION TOP BAR
      -->

      <!--
      HEADER TOP BAR FOR NON REGISTER USER
      -->

      <div class="header-notification-bar">
        <div class="non-register-user">

          <div class="container">
            <div class="row">

              <div class="col-md-3 col-sm-3">
                <div class="logo-section">
                  <a href="index.html"><img src="img/logo-bu.png" alt=""></a>
                </div>
              </div>

              <div class="col-md-6 col-sm-5">
                <div class="search-form">

                  <form action="#">
                    <button class="dropdown-search"><i class="fa fa-caret-down"></i> <i class="fa fa-bars"></i></button>
                    <input type="search" placeholder="Search..." class="topbar-search-input">
                    <button class="search-button"><i class="fa fa-search"></i></button>
                  </form>

                </div>
              </div>

              <div class="col-md-3 col-sm-4">
                <div class="notification-section text-right">

                  <ul class="list-inline">
                    <li><a href="#">EN<i class="fa fa-caret-down"></i></a>
                      <ul>
                        <li><a href="#">DE</a></li>
                        <li><a href="#">ES</a></li>
                        <li><a href="#">IT</a></li>
                      </ul>

                    </li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                  </ul>
                </div>
              </div>

            </div> <!-- end .row -->
          </div> <!-- end .container -->
        </div> <!-- end .visitors-top-bar -->
      </div> <!-- end. header-notification-bar  -->


      <!--
      END HEADER TOP BAR FOR WITHOUT LOGIN USER
      -->

      <!-- Navigation -->
      <div class="main-navbar">

        <nav class="navbar navbar-default">
          <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html"><img src="img/logo-bu.png" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">Home</a></li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Job
                    <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="job-search.html">job search</a></li>
                    <li><a href="job-preview.html">Job Preview</a></li>
                    <li><a href="job-registration(full-width).html">Job Registration (full-width)</a></li>
                    <li><a href="job-registration(sidebar).html">Job Registration (sidebar)</a></li>

                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Candidate
                    <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="candidate-profile.html">candidate profile</a></li>
                    <li><a href="candidate-registration.html">Candidate registration</a></li>
                  </ul>
                </li>
                <li><a href="professionals.html">Professionals</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our clients
                    <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="clients.html">Our clients</a></li>
                    <li><a href="add-client.html">Quick add client</a></li>
                    <li><a href="client-profile(tab1).html">Client profile</a></li>
                    <li><a href="client-profile(tab2).html">Client team</a></li>
                    <li><a href="client-profile(tab3).html">Applicants</a></li>
                    <li><a href="client-registration.html">Client registration</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agent
                    <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="our-agents.html">Our agents</a></li>
                    <li><a href="agent-profile.html">Agent profile</a></li>
                    <li><a href="add-agents.html">Add agent</a></li>
                  </ul>
                </li>
                <!-- <li><a href="#">Blog</a></li> -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registration
                    <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="register-process1.html">Registration step 1</a></li>
                    <li><a href="register-process2.html">Registration step 2</a></li>
                    <li><a href="register-process3.html">Registration step 3</a></li>
                    <li><a href="register-process4.html">Registration step 4</a></li>
                  </ul>
                </li>
                <li><a href="contact-us.html">Contact</a></li>
              </ul>

            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav>
      </div> <!-- main-navbar -->
      <!-- end .header-top-bar -->
    </div>


  </header>
  <!-- end #header -->

  <!-- header Search bar -->



  <!-- end .header-banner -->


  <!-- Page Content -->
  <div id="page-content">

    <div class="index-page-search-content">
      <div id="owl-demo" class="owl-carousel owl-theme">

        <div class="item"
             style="background: url('./img/home-bg.jpg') center center no-repeat; background-size: cover;"></div>
        <div class="item"
             style="background: url('./img/home-bg2.jpg') center center no-repeat; background-size: cover;"></div>
        <div class="item"
             style="background: url('./img/home-bg3.jpg') center center no-repeat; background-size: cover;"></div>


      </div>
      <div class="container">
        <div class="search-holder">
          <h1>MotiJobs</h1>
          <h2>the most complete HR Admin Template</h2>

          <div id="header-search">
            <div class="header-search-bar">
              <div class="">
                <form>
                  <div class="basic-form clearfix"> <a href="#" class="toggle"><span></span></a>
                    <div class="hsb-input-1">
                      <input type="text" class="form-control" placeholder="Keywords">
                    </div>
                    <div class="hsb-text-1">in</div>
                    <div class="hsb-container">
                      <div class="hsb-input-2">
                        <input type="text" class="form-control" placeholder="Location">
                      </div>
                      <div class="hsb-select">
                        <select class="form-control">
                          <option value="0">Select Category</option>
                          <option value="">Banking</option>
                          <option value="">Finance</option>
                          <option value="">IT</option>
                          <option value="">Specialists</option>
                        </select>
                      </div>
                    </div>
                    <div class="hsb-submit">
                      <button type="submit" class="btn btn-default btn-block"><i class="fa fa-search"></i><span>Search</span></button>
                    </div>
                  </div>
                  <div class="advanced-form">
                    <div class="">
                      <div class="row">
                        <label class="col-md-3">Distance</label>
                        <div class="col-md-9">
                          <div class="range-slider">
                            <div class="slider" data-min="1" data-max="200" data-current="100"></div>
                            <div class="last-value"><span>100</span> km</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-md-3">Rating</label>
                        <div class="col-md-9">
                          <div class="range-slider">
                            <div class="slider" data-min="1" data-max="100" data-current="20"></div>
                            <div class="last-value">&gt; <span>20</span> %</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-md-3">Days Published</label>
                        <div class="col-md-9">
                          <div class="range-slider">
                            <div class="slider" data-min="1" data-max="60" data-current="30"></div>
                            <div class="last-value">&lt; <span>30</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-md-3">Location</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" placeholder="Switzerland">
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-md-3">Category</label>
                        <div class="col-md-9">
                          <select class="form-control">
                            <option value="">Select Category</option>
                            <option value="">Banking</option>
                            <option value="">Finance</option>
                            <option value="">IT</option>
                            <option value="">Specialists</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- end .container -->


  </div>

  <!-- Footer Start -->
  <footer id="footer">
    <div class="copyright">
      <div class="container">
        <p>2016 &copy; All rights reserved. Powered by <a href="#">UOUapps</a></p>

        <ul class="list-inline">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        </ul>
      </div>
    </div>
  </footer>
  <!-- end #footer -->

</div>
<!-- end #main-wrapper -->

<!-- Scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.ba-outside-events.min.js"></script>
<script src="js/jquery.responsive-tabs.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/jquery.fitvids.js"></script>
<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="js/jquery.inview.min.js"></script>

<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
