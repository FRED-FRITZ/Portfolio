<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>Portfolio</title>

  <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" type="text/css" href="../assets/css/themify-icons.css">

  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" type="text/css" href="../assets/vendor/owl-carousel/owl.carousel.css">

  <link rel="stylesheet" type="text/css" href="../assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css">

  <link rel="stylesheet" type="text/css" href="../assets/vendor/nice-select/css/nice-select.css">

  <link rel="stylesheet" type="text/css" href="../assets/vendor/fancybox/css/jquery.fancybox.min.css">

  <link rel="stylesheet" type="text/css" href="../assets/css/virtual.css">

  <link rel="stylesheet" type="text/css" href="../assets/css/topbar.virtual.css">
</head>
<body class="theme-red">

  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>

  <!-- Setting button -->
  <div class="config">
    <div class="template-config">
      <!-- Settings -->
      <div class="d-block">
        <button class="btn btn-fab btn-sm" id="sideel" title="Settings"><span class="ti-settings"></span></button>
      </div>
    </div>
    <div class="set-menu">
      <p>Select Color</p>
      <div class="color-bar" data-toggle="selected">
        <span class="color-item bg-theme-red selected" data-class="theme-red"></span>
        <span class="color-item bg-theme-blue" data-class="theme-blue"></span>
        <span class="color-item bg-theme-green" data-class="theme-green"></span>
        <span class="color-item bg-theme-orange" data-class="theme-orange"></span>
        <span class="color-item bg-theme-purple" data-class="theme-purple"></span>
    </div>

    </div>
  </div>

  <div class="vg-page page-home" id="home" style="background-image: url(../assets/img/bg_image_1.jpg)">
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand">Portfolio</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
          <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="#home" class="nav-link" data-animate="scrolling">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link" data-animate="scrolling">About</a>
            </li>
            <li class="nav-item">
              <a href="#portfolio" class="nav-link" data-animate="scrolling">Portfolio</a>
            </li>
            <li class="nav-item">
              <a href="#blog" class="nav-link" data-animate="scrolling">Blog</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link" data-animate="scrolling">Contact</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link" data-animate="scrolling">Dashboard</a>
              </li>
          </ul>
        </div>
      </div>
    </div> <!-- End Navbar -->
    <!-- Caption header -->
    @foreach ($admin as $item)

    <div class="caption-header text-center wow zoomInDown">
      <h5 class="fw-normal">Welcome {{ $item->name }}</h5>
      <h1 class="fw-light mb-4">I'm <b class="fg-theme">Fred Fritz</b> Agustin</h1>
      <div class="badge">UI/UX & Web Designer</div>
    </div> <!-- End Caption header -->
    <div class="floating-button"><span class="ti-mouse"></span></div>
  </div>

  <div class="vg-page page-about" id="about">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="img-place wow fadeInUp">
            <img src="../assets/img/person.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 offset-lg-1 wow fadeInRight">
          <h1 class="fw-light">{{ $item->name }}</h1>
          <h5 class="fg-theme mb-3">UI/UX & Web Designer</h5>
          <p class="text-muted"> is still learning and improving.</p>
          <ul class="theme-list">
            <li><b>From:</b> Philippines, Leyte</li>
            <li><b>Lives In:</b> Mabini St., Hilongos,Leyte</li>
            <li><b>Age:</b> 20</li>
            <li><b>Gender:</b> Male</li>
          </ul>
          <button class="btn btn-theme-outline">Bahurhur</button>
        </div>
      </div>
    </div>
    @endforeach
    <div class="container py-5 text-center">
        <h1 class="fw-normal wow fadeIn">My Skills</h1>
        <div class="row py-3" style="justify-content: center">
          <div class="col-md-6">
            <div class="px-lg-3">
              <h4 class="wow fadeInUp">Coding skills</h4>
              @foreach ($skills as $item)
              <div class="progress-wrapper wow fadeInUp">
                <span class="caption">{{ $item->skills_name }}</span>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: {{ $item->skills_percent }}%;" aria-valuenow="{{ $item->skills_percent }}" aria-valuemin="0" aria-valuemax="100">{{ $item->skills_percent }}%</div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-6 wow fadeInRight">
          <h2 class="fw-normal">Education</h2>
          <ul class="timeline mt-4 pr-md-5">
            @foreach ($educationals as $item)
            <li>
              <div class="title">{{ $item->year_graduated }}</div>
              <div class="details">
                <h5>{{ $item->school_type }}</h5>
                <small class="fg-theme">{{ $item->school_name }}</small>
                <p>{{ $item->description }}</p>
              </div>
            </li>
                @endforeach
            <li>
            @foreach ($experiences as $item)
          </ul>
        </div>
        <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">
          <h2 class="fw-normal">Experience</h2>
          <ul class="timeline mt-4 pr-md-5">
            <li>
              <div class="title">{{ $item->date }}</div>
              <div class="details">
                <h5>{{ $item->job_title }}</h5>
                <small class="fg-theme">{{ $item->company }}</small>
                <p>{{ $item->description }}</p>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="vg-page page-service">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Service</div>
      </div>
      <h1 class="fw-normal text-center wow fadeInUp">What can i do?</h1>
      <div class="row mt-5">
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card card-service wow fadeInUp">
            <div class="icon">
              <span class="ti-paint-bucket"></span>
            </div>
            <div class="caption">
              <h4 class="fg-theme">Web Design</h4>
              <p>There are many variations of passages of Lorem Ipsum available</p>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>

  <div class="vg-page page-funfact" style="background-image: url(../assets/img/bg_banner.jpg);">
    <div class="container">
      <div class="row section-counter">
        <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
          <h1 class="number" data-number="768">768</h1>
          <span>Clients</span>
        </div>
        <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
          <h1 class="number" data-number="230">230</h1>
          <span>Project Compleate</span>
        </div>
        <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
          <h1 class="number" data-number="97">97</h1>
          <span>Project Ongoing</span>
        </div>
        <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
          <h1 class="number" data-number="699">699</h1>
          <span>Client Satisfaction</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio page -->
  <div class="vg-page page-portfolio" id="portfolio">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Works</div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">See my work</h1>
      <div class="filterable-button py-3 wow fadeInUp" data-toggle="selected">
        <button class="btn btn-theme-outline selected" data-filter="*">All</button>
        <button class="btn btn-theme-outline" data-filter=".apps">Apps</button>
        <button class="btn btn-theme-outline" data-filter=".template">Template</button>
        <button class="btn btn-theme-outline" data-filter=".ios">IOS</button>
        <button class="btn btn-theme-outline" data-filter=".ui-ux">UI/UX</button>
        <button class="btn btn-theme-outline" data-filter=".graphic">Graphic</button>
        <button class="btn btn-theme-outline" data-filter=".wireframes">Wireframes</button>
      </div>

      <div class="gridder my-3">
        <div class="grid-item apps wow zoomIn">
          <div class="img-place" data-src="../assets/img/work/work-1.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Mobile Travel App</h5> <p>Travel, Discovery</p>">
            <img src="../assets/img/work/work-1.jpg" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Mobile Travel App</h5>
              <p>Travel, Discovery</p>
            </div>
          </div>
        </div>
        <div class="grid-item template wireframes wow zoomIn">
          <div class="img-place" data-src="../assets/img/work/work-2.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Music App</h5> <p>Musics</p>">
            <img src="../assets/img/work/work-2.jpg" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Music App</h5>
              <p>Musics</p>
            </div>
          </div>
        </div>
        <div class="grid-item apps ios wow zoomIn">
          <div class="img-place" data-src="../assets/img/work/work-3.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Gaming Dashboard</h5> <p>Games, Streaming</p>">
            <img src="../assets/img/work/work-3.jpg" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Gaming Dashboard</h5>
              <p>Games, Streaming</p>
            </div>
          </div>
        </div>
        <div class="grid-item graphic ui-ux wow zoomIn">
          <div class="img-place" data-src="../assets/img/work/work-4.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Drugs Delivery App</h5> <p>Health, Drugs</p>">
            <img src="../assets/img/work/work-4.jpg" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Drugs Delivery App</h5>
              <p>Health, Drugs</p>
            </div>
          </div>
        </div>
        <div class="grid-item apps ios wow zoomIn">
          <div class="img-place" data-src="../assets/img/work/work-5.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Musics Discover</h5> <p>Musics, Dashboard</p>">
            <img src="../assets/img/work/work-5.jpg" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Musics Discover</h5>
              <p>Musics, Dashboard</p>
            </div>
          </div>
        </div>
        <div class="grid-item graphic ui-ux wireframes wow zoomIn">
          <div class="img-place" data-src="../assets/img/work/work-6.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Game Streaming</h5> <p>Games, Streaming</p>">
            <img src="../assets/img/work/work-6.jpg" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Game Streaming</h5>
              <p>Games, Streaming</p>
            </div>
          </div>
        </div>
      </div> <!-- End gridder -->
      <div class="text-center wow fadeInUp">
        <a href="javascript:void(0)" class="btn btn-theme">Load More</a>
      </div>
    </div>
  </div> <!-- End Portfolio page -->

  <!-- Blog -->
  <div class="vg-page page-blog" id="blog">
    <div class="container">
      <div class="text-center">
        <div class="badge badge-subhead wow fadeInUp">Blog</div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">Latest Post</h1>
      <div class="row post-grid">
        <div class="col-md-6 col-lg-4 wow fadeInUp">
          <div class="card">
            <div class="img-place">
              <img src="../assets/img/work/work-9.jpg" alt="">
            </div>
            <div class="caption">
              <a href="javascript:void(0)" class="post-category">Technology</a>
              <a href="#" class="post-title">Invision design forward fund</a>
              <span class="post-date"><span class="sr-only">Published on</span> May 22, 2018</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp">
          <div class="card">
            <div class="img-place">
              <img src="../assets/img/work/work-6.jpg" alt="">
            </div>
            <div class="caption">
              <a href="javascript:void(0)" class="post-category">Business</a>
              <a href="#" class="post-title">Announcing a plan for small teams</a>
              <span class="post-date"><span class="sr-only">Published on</span> May 22, 2018</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp">
          <div class="card">
            <div class="img-place">
              <img src="../assets/img/work/work-1.jpg" alt="">
            </div>
            <div class="caption">
              <a href="javascript:void(0)" class="post-category">Design</a>
              <a href="#" class="post-title">5 basic tips for illustrating</a>
              <span class="post-date"><span class="sr-only">Published on</span> May 22, 2018</span>
            </div>
          </div>
        </div>
        <div class="col-12 text-center py-3 wow fadeInUp">
          <a href="blog-fullbar.html" class="btn btn-theme">See All Post</a>
        </div>
      </div>
    </div>
  </div> <!-- End blog -->

  <!-- Contact -->
    <div class="vg-page page-contact" id="contact">
        <div class="container-fluid">
        <div class="text-center wow fadeInUp">
            <div class="badge badge-subhead">Contact</div>
        </div>
        <h1 class="text-center fw-normal wow fadeInUp">Get in touch</h1>
        <div class="row py-5">
            <div class="col-lg-7 px-0 pr-lg-3 wow zoomIn">
            <div class="vg-maps">
                <div id="google-maps" style="width: 100%; height: 100%;"></div>
            </div>
            </div>
        <div class="col-lg-5">
            <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="form-row">
              <div class="col-12 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="name" placeholder="Your Name">
              </div>
              <div class="col-6 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="email" placeholder="Email Address">
              </div>
              <div class="col-6 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="subject" placeholder="Subject">
              </div>
              <div class="col-12 mt-3 wow fadeInUp">
                <textarea class="form-control" name="message" rows="6" placeholder="Enter message here.."></textarea>
              </div>
              <button type="submit" class="btn btn-theme mt-3 wow fadeInUp ml-1">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- End Contact -->

  <!-- Footer -->
  <div class="vg-footer">
    <h1 class="text-center">Portfolio</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 py-3">
                <div class="footer-info">
                    <p>Where to find me</p>
                    <hr class="divider">
                    <p class="fs-large fg-white">Mabini St. Hilongos, Leyte, Region 8, Philippines</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 py-3">
                <div class="float-lg-right">
                    <p>Follow me</p>
                    <hr class="divider">
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://www.instagram.com/bahur_hur?igsh=MWF2bmVxdDZ0OXNrMg==" target="_blank">
                                <i class="fab fa-instagram"></i> Instagram
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=100031161337940" target="_blank">
                                <i class="fab fa-facebook-f"></i> Facebook
                            </a>
                        </li>
                        <li>
                            <a href="https://x.com/Bahurhur69?t=L06nI2KEyKfTCipYwn66FQ&s=09" target="_blank">
                                <i class="fab fa-twitter"></i> Twitter
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/fred-fritz-agustin-08863a261" target="_blank">
                                <i class="fab fa-linkedin-in"></i> LinkedIn
                            </a>
                        </li>
                        <li>
                            <a href="https://youtube.com/@fredfritzagustin-fh1dd?si=s1lHZa-hgNULS8c1" target="_blank">
                                <i class="fab fa-youtube"></i> Youtube
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 py-3">
                <div class="float-lg-right">
                    <p>Contact me</p>
                    <hr class="divider">
                    <ul class="list-unstyled">
                        <li>Email: fredfritza@gmail.com</li>
                        <li>Phone: 09104445828</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- End footer -->


  <script src="../assets/js/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/vendor/owl-carousel/owl.carousel.min.js"></script>

  <script src="../assets/vendor/perfect-scrollbar/js/perfect-scrollbar.js"></script>

  <script src="../assets/vendor/isotope/isotope.pkgd.min.js"></script>

  <script src="../assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>

  <script src="../assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

  <script src="../assets/vendor/wow/wow.min.js"></script>

  <script src="../assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>

  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>

  <script src="../assets/js/google-maps.js"></script>

  <script src="../assets/js/topbar-virtual.js"></script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>
</html>

