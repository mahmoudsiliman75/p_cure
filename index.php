<!-- START:: INCLUDING THE HEADER -->
<?php include('./layouts/TheHeader.php')?>
<!-- END:: INCLUDING THE HEADER -->

<!-- START:: HOME SLIDER -->
<div id="home_slider" class="carousel slide carousel-fade" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#home_slider" data-slide-to="0" class="active"></li>
    <li data-target="#home_slider" data-slide-to="1"></li>
    <li data-target="#home_slider" data-slide-to="2"></li>
    <li data-target="#home_slider" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/media/slider/slide1.jpg" class="d-block" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="assets/media/slider/slide2.jpg" class="d-block" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="assets/media/slider/slide3.jpg" class="d-block" alt="Slide 3">
    </div>
    <div class="carousel-item">
      <img src="assets/media/slider/slide4.jpg" class="d-block" alt="Slide 4">
    </div>
  </div>

  <!-- START:: SECTION SVG -->
  <div class="curve_wraper">
    <img src="assets/media/shapes/shp01.png" class="curve">
  </div>
  <!-- END:: SECTION SVG -->

  <a class="carousel-control-prev" href="#home_slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#home_slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>
<!-- END:: HOME SLIDER -->

<!-- START::ABOUT US SECTION -->
<div class="about_us_sec">
  <div class="container-fluid p-0">
    <div class="row justify-content-center overflow-hidden">
      <div class="col-12 col-md-5 p-0 my-2 wow slideInLeft" data-wow-duration="1.5s" data-wow-delay="1s">
        <div class="about_us_img_wraper">
          <img src="assets/media/imgs/img2.jpg" alt="about us iamge">
        </div>
      </div>

      <div class="col-12 col-md-7 my-2 wow slideInRight" data-wow-duration="1.5s" data-wow-delay="1s">
        <div class="about_us_text_wraper">
          <div class="header_wraper">
            <h2> About "P Cure" </h2>
          </div>

          <div class="text_wraper">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus.
            maiores, nulla explicabo exercitationem dolorum quas veniam aut ex.
            repudiandae facere nostrum soluta. Dicta explicabo corrupti totam
            exercitationem temporibus veritatis nam.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus.
            maiores, nulla explicabo exercitationem dolorum quas veniam aut ex.
            repudiandae facere nostrum soluta. Dicta explicabo corrupti totam
            exercitationem temporibus veritatis nam.
            
          </div>

          <div class="btn_wraper">
            <a href="AboutUs.php"> learn more </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END::ABOUT US SECTION -->

<!-- START:: OUR TEAM SECTION -->
<div class="team_sec">
  <div class="upper_curve_wraper">  
    <img src="assets/media/shapes/banner-15-bottom.png">
  </div>

  <div class="container">
    <div class="header_wraper">
      <h2 class="wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.9s"> Our Team </h2>
    </div>

    <div class="row justify-content-center overflow-hidden">
      <div class="col-10 col-md-4 my-3 wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0.2s">
        <div class="member_card">
          <div class="img_wraper">
            <img src="assets/media/team/default.jpg" alt=""> 
          </div>

          <h4> Doctor Name 1 </h4>
          <h5> Doctor Title </h5>

          <ul class="social">
            <li>
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
    
            <li>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
    
            <li>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-10 col-md-4 my-3 wow fadeInDownBig" data-wow-duration="1.5s" data-wow-delay="0.7s">
        <div class="member_card">
          <div class="img_wraper">
            <img src="assets/media/team/default.jpg" alt=""> 
          </div>

          <h4> Doctor Name 2 </h4>
          <h5> Doctor Title </h5>

          <ul class="social">
            <li>
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
    
            <li>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
    
            <li>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-10 col-md-4 my-3 wow fadeInRightBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
        <div class="member_card">
          <div class="img_wraper">
            <img src="assets/media/team/default.jpg" alt=""> 
          </div>

          <h4> Doctor Name 3 </h4>
          <h5> Doctor Title </h5>

          <ul class="social">
            <li>
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
    
            <li>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
    
            <li>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-12">
      <div class="btn_wraper">
        <a href="Team.php"> All Team </a>
      </div>
    </div>
  </div>

  <div class="lower_curve_wraper">
    <img src="assets/media/shapes/banner-15-bottom.png">
  </div>
</div>
<!-- END:: OUR TEAM SECTION -->

<!-- START:: OPERATIONS SECTION  -->
<div class="operation_sec">
  <div class="container-fluid">
    <div class="header_wraper"> 
      <h2 clas="wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.9s">
        Operations
      </h2>
    </div>

    <div class="row justify-content-center overflow-hidden">
      <div class="col-10 col-lg-3 my-3 wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.2s">
        <div class="operation_card_wraper">
          <div class="front_face">
            <img src="assets/media/imgs/img3.jpg" alt="">
          </div>

          <div class="back_face">
            <h4> Operation Name 1 </h4>

            <div class="text_wraper">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Voluptate, vero laudantium laborum cumque quidem. 
            </div>

            <div class="btn_wraper">
              <a href="OperationDetails.php"> More Details </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-10 col-lg-3 my-3 wow fadeInDownBig" data-wow-duration="1.5s" data-wow-delay="0.6s">
        <div class="operation_card_wraper">
          <div class="front_face">
          <img src="assets/media/imgs/img4.jpg" alt="">
          </div>

          <div class="back_face">
            <h4> Operation Name 2 </h4>

            <div class="text_wraper">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Voluptate, vero laudantium laborum cumque quidem. 
            </div>

            <div class="btn_wraper">
              <a href="OperationDetails.php"> More Details </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-10 col-lg-3 my-3 wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.8s">
        <div class="operation_card_wraper">
          <div class="front_face">
            <img src="assets/media/imgs/img3.jpg" alt="">
          </div>

          <div class="back_face">
            <h4> Operation Name 3 </h4>

            <div class="text_wraper">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Voluptate, vero laudantium laborum cumque quidem. 
            </div>

            <div class="btn_wraper">
              <a href="OperationDetails.php"> More Details </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-10 col-lg-3 my-3 wow fadeInDownBig" data-wow-duration="1.5s" data-wow-delay="1.2s">
        <div class="operation_card_wraper">
          <div class="front_face">
            <img src="assets/media/imgs/img4.jpg" alt="">
          </div>

          <div class="back_face">
            <h4> Product Name 4 </h4>

            <div class="text_wraper">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Voluptate, vero laudantium laborum cumque quidem. 
            </div>

            <div class="btn_wraper">
              <a href="OperationDetails.php"> More Details </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <div class="btn_wraper">
        <a href="AllOperation.php"> All Operation </a>
      </div>
    </div>
  </div>
</div>
<!-- END:: OPERATIONS SECTION  -->

<!-- START:: HEIGHLIGHTS SECTION -->
<div class="home_heightlights">
  <div class="container-fluid">
    <div class="header_wraper mb-4">
      <h2 class="wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.9s"> 
        Operations Highlights
      </h2>
    </div>

    <div class="row justify-content-around justify-content-md-center overflow-hidden" style="background-image: url('assets/media/shapes/rm301-eye-05.jpg')">
      <!-- START:: UPPER SECTION SVG -->
      <div class="upper_svg_wraper">
        <img src="assets/media/shapes/banner-15-bottom.png">
      </div>
      <!-- END:: UPPER SECTION SVG -->

      <div class="overlay"></div>

      <!-- START:: LOWER SECTION SVG -->
      <div class="lower_svg_wraper">
        <img src="assets/media/shapes/banner-15-bottom.png">
      </div>
      <!-- END:: LOWER SECTION SVG -->

      <div class="col-5 col-md-3 my-3 wow fadeInDownBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
        <div class="card">
          <div class="icon_wraper">
            <img src="assets/media/icons/contract.png" alt="Icon 1">
          </div> 
          <div class="info_wraper">
            <h2 class="timer count-title count-number" data-to="25" data-speed="3500"></h2>
            <h5> Heighlight 1 </h5>
          </div>
        </div>
      </div>

      <div class="col-5 col-md-3 my-3 wow fadeInDownBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
        <div class="card">
          <div class="icon_wraper">
            <img src="assets/media/icons/team.png" alt="Icon 1">
          </div> 
          <div class="info_wraper">
            <h2 class="timer count-title count-number" data-to="90" data-speed="3500"></h2>
            <h5> Heighlight 2 </h5>
          </div>
        </div>
      </div>

      <div class="col-5 col-md-3 my-3 wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.6s">
        <div class="card">
          <div class="icon_wraper">
            <img src="assets/media/icons/financ.png" alt="Icon 1">
          </div> 
          <div class="info_wraper">
            <h2 class="timer count-title count-number" data-to="50" data-speed="3500">  </h2>
            <h5> Heighlight 3 </h5>
          </div>
        </div>
      </div>

      <div class="col-5 col-md-3 my-3 wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.6s">
        <div class="card">
          <div class="icon_wraper">
            <img src="assets/media/icons/chart.png" alt="Icon 1">
          </div> 
          <div class="info_wraper">
            <h2 class="timer count-title count-number" data-to="90" data-speed="3500"></h2>
            <h5> Heighlight 4 </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END:: HEIGHLIGHTS SECTION -->

<!-- START:: TESTEMONIALS SECTION -->
<div class="testemonials">
  <div class="container">
    <div class="header_wraper">
      <h2 class="wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
        Testemonials 
      </h2>
    </div>

    <div class="row flex-column align-items-center justify-content-center mt-3 overflow-hidden">
      <div id="testemonials" class="owl-carousel owl-theme col-12 col-md-8 wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.5s">

        <div class="item">
          <div class="testemonial_card">
            <div class="img_wraper">
              <img src="assets/media/team/default.jpg" alt="">
              <h5> Client Name 1 </h5>
            </div>

            <div class="card_body">
              <div class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Omnis quas dignissimos amet. Sed fuga mollitia in voluptatum eum. 
                Itaque illo dolores voluptates modi cumque a fugiat fuga 
                sapiente praesentium iusto.
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="testemonial_card">
            <div class="img_wraper">
              <img src="assets/media/team/default.jpg" alt="">
              <h5> Client Name 2 </h5>
            </div>

            <div class="card_body">
              <div class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Omnis quas dignissimos amet. Sed fuga mollitia in voluptatum eum. 
                Itaque illo dolores voluptates modi cumque a fugiat fuga 
                sapiente praesentium iusto.
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="testemonial_card">
            <div class="img_wraper">
              <img src="assets/media/team/default.jpg" alt="">
              <h5> Client Name 3 </h5>
            </div>

            <div class="card_body">
              <div class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Omnis quas dignissimos amet. Sed fuga mollitia in voluptatum eum. 
                Itaque illo dolores voluptates modi cumque a fugiat fuga 
                sapiente praesentium iusto.
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- END:: TESTEMONIALS SECTION -->

<!-- START:: VIDEOS SECTION -->
<div class="videos_sec">
  <div class="container">
    <div class="header_wraper">
      <h2 class="wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.3s"> 
        Videos 
      </h2>
    </div>

    <div class="row flex-column align-items-center justify-content-center mt-3 wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
      <div id="videos_slider" class="owl-carousel owl-theme col-12">

        <div class="item text-center">
          <div class="iframe_wraper">
            <iframe src="https://www.youtube.com/embed/Sd1YOQUzt10" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <h5> Video Title </h5>
        </div>

        <div class="item text-center">
          <div class="iframe_wraper">
            <iframe src="https://www.youtube.com/embed/Sd1YOQUzt10" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <h5> Video Title </h5>
        </div>

        <div class="item text-center">
          <div class="iframe_wraper">
            <iframe src="https://www.youtube.com/embed/Sd1YOQUzt10" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <h5> Video Title </h5>
        </div>

        <div class="item text-center">
          <div class="iframe_wraper">
            <iframe src="https://www.youtube.com/embed/Sd1YOQUzt10" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <h5> Video Title </h5>
        </div>

        <div class="item text-center">
          <div class="iframe_wraper">
            <iframe src="https://www.youtube.com/embed/Sd1YOQUzt10" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <h5> Video Title </h5>
        </div>

      </div>

      <div class="btn_box">
        <a href="AllVideos.php"> View More  </a>
      </div>
    </div>
  </div>
</div>
<!-- END:: VIDEOS SECTION -->

<div class="bg_wraper_2">
  <!-- START:: ARTICLES SECTION -->
  <div class="articles_sec">
    <div class="container">
      <div class="header_wraper">
        <h2 class="wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.5s">  
          Articles 
        </h2>
      </div>
  
      <div class="row justify-content-center wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.5s">
        <div class="col-10 col-lg-4 my-3">
          <a href="ArticleDetails.php">
            <div class="article_card_wraper">
              <div class="img_wraper">
                <div class="overlay">
                  <i class="fas fa-expand-alt fa-3x"></i>
                </div>
                <img class="card_img" src="assets/media/imgs/img1.jpg" alt="">
                <div class="card_curve">
                  <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M1200,0H0V120H281.94C572.9,116.24,602.45,3.86,602.45,3.86h0S632,116.24,923,120h277Z" class="shape-fill"></path>
                  </svg>
                </div>
              </div>
  
              <div class="card_title_wraper">
                <h4> Article Title 1 </h4>
                <h6> 1, May, 2021 </h6>
              </div>
  
              <div class="card_text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Et corrupti minus ipsa aut, tenetur laboriosam nisi soluta 
                facilis. Quas ex provident quam, inventore consectetur 
              </div>
            </div>
          </a>
        </div>
  
        <div class="col-10 col-lg-4 my-3">
          <a href="ArticleDetails.php">
            <div class="article_card_wraper">
              <div class="img_wraper">
                <div class="overlay">
                  <i class="fas fa-expand-alt fa-3x"></i>
                </div>
                <img class="card_img" src="assets/media/imgs/img2.jpg" alt="">
                <div class="card_curve">
                  <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M1200,0H0V120H281.94C572.9,116.24,602.45,3.86,602.45,3.86h0S632,116.24,923,120h277Z" class="shape-fill"></path>
                  </svg>
                </div>
              </div>
  
              <div class="card_title_wraper">
                <h4> Article Title 2 </h4>
                <h6> 1, May, 2021 </h6>
              </div>
  
              <div class="card_text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Et corrupti minus ipsa aut, tenetur laboriosam nisi soluta 
                facilis. Quas ex provident quam, inventore consectetur 
              </div>
            </div>
          </a>
        </div>
  
        <div class="col-10 col-lg-4 my-3">
          <a href="ArticleDetails.php">
            <div class="article_card_wraper">
              <div class="img_wraper">
                <div class="overlay">
                  <i class="fas fa-expand-alt fa-3x"></i>
                </div>
                <img class="card_img" src="assets/media/imgs/img1.jpg" alt="">
                <div class="card_curve">
                  <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M1200,0H0V120H281.94C572.9,116.24,602.45,3.86,602.45,3.86h0S632,116.24,923,120h277Z" class="shape-fill"></path>
                  </svg>
                </div>
              </div>
  
              <div class="card_title_wraper">
                <h4> Article Title 3 </h4>
                <h6> 1, May, 2021 </h6>
              </div>
  
              <div class="card_text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Et corrupti minus ipsa aut, tenetur laboriosam nisi soluta 
                facilis. Quas ex provident quam, inventore consectetur 
              </div>
            </div>
          </a>
        </div>
  
        <div class="col-10 col-lg-4 my-3">
          <a href="ArticleDetails.php">
            <div class="article_card_wraper">
              <div class="img_wraper">
                <div class="overlay">
                  <i class="fas fa-expand-alt fa-3x"></i>
                </div>
                <img class="card_img" src="assets/media/imgs/img1.jpg" alt="">
                <div class="card_curve">
                  <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M1200,0H0V120H281.94C572.9,116.24,602.45,3.86,602.45,3.86h0S632,116.24,923,120h277Z" class="shape-fill"></path>
                  </svg>
                </div>
              </div>
  
              <div class="card_title_wraper">
                <h4> Article Title 4 </h4>
                <h6> 1, May, 2021 </h6>
              </div>
  
              <div class="card_text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Et corrupti minus ipsa aut, tenetur laboriosam nisi soluta 
                facilis. Quas ex provident quam, inventore consectetur 
              </div>
            </div>
          </a>
        </div>
  
        <div class="col-10 col-lg-4 my-3">
          <a href="ArticleDetails.php">
            <div class="article_card_wraper">
              <div class="img_wraper">
                <div class="overlay">
                  <i class="fas fa-expand-alt fa-3x"></i>
                </div>
                <img class="card_img" src="assets/media/imgs/img2.jpg" alt="">
                <div class="card_curve">
                  <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M1200,0H0V120H281.94C572.9,116.24,602.45,3.86,602.45,3.86h0S632,116.24,923,120h277Z" class="shape-fill"></path>
                  </svg>
                </div>
              </div>
  
              <div class="card_title_wraper">
                <h4> Article Title 5 </h4>
                <h6> 1, May, 2021 </h6>
              </div>
  
              <div class="card_text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Et corrupti minus ipsa aut, tenetur laboriosam nisi soluta 
                facilis. Quas ex provident quam, inventore consectetur 
              </div>
            </div>
          </a>
        </div>
  
        <div class="col-10 col-lg-4 my-3">
          <a href="ArticleDetails.php">
            <div class="article_card_wraper">
              <div class="img_wraper">
                <div class="overlay">
                  <i class="fas fa-expand-alt fa-3x"></i>
                </div>
                <img class="card_img" src="assets/media/imgs/img1.jpg" alt="">
                <div class="card_curve">
                  <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M1200,0H0V120H281.94C572.9,116.24,602.45,3.86,602.45,3.86h0S632,116.24,923,120h277Z" class="shape-fill"></path>
                  </svg>
                </div>
              </div>
  
              <div class="card_title_wraper">
                <h4> Article Title 6 </h4>
                <h6> 1, May, 2021 </h6>
              </div>
  
              <div class="card_text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Et corrupti minus ipsa aut, tenetur laboriosam nisi soluta 
                facilis. Quas ex provident quam, inventore consectetur 
              </div>
            </div>
          </a>
        </div>
      </div>
  
      <div class="col-12 mt-3">
        <div class="btn_wraper">
          <a href="AllNews.php"> View More </a>
        </div>
      </div>
    </div>
  </div>
  <!-- END:: ARTICLES SECTION -->
  
  <!-- START:: CONTACT US SECTION -->
  <div class="contact_us_sec">
    <div class="container">
      <div class="header_wraper mb-4">
        <h2 class="wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
          Get In Touch With Us 
        </h2>
      </div>
  
      <div class="row justify-content-center overflow-hidden">
        <div class="col-12 col-md-6 p-0 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">
          <div class="map_wraper">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d19338.15820346373!2d31.374660789535696!3d31.039183138529495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1616017063461!5m2!1sar!2seg" 
              style="border:0;" 
              allowfullscreen="" 
              loading="lazy"
            >
            </iframe>
          </div>
        </div>
  
        <div class="col-12 col-md-6 p-0 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.5s">
          <div class="form_wraper">
            <form>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Full Name*" required>
                <span>
                  <i class="fas fa-user-circle fa-2x"></i>
                </span>
              </div>
  
              <div class="form-group">
                <input type="tele" class="form-control" placeholder="Your Phone Number*" required>
                <span>
                  <i class="fas fa-phone-square-alt fa-2x"></i>
                </span>
              </div>
  
              <div class="form-group mb-4">
                <textarea placeholder="Your Message"></textarea>
              </div>
  
              <div class="btn_box">
                <button> Submit </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END:: CONTACT US SECTION -->
</div>



















<!-- START:: SERVICES SECTION -->
<!-- <div class="services_sec">
  <div class="header_wraper">
    <h2 class="wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.9s"> Our Services </h2>
  </div>

  <div class="container-fluid">
    <div class="row service_wraper justify-content-center mt-3 overflow-hidden">
      <div class="col-6 col-md-3 my-3 wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
        <a href="ServiceDetails.php">
          <img src="assets/media/pic12.jpg" alt="Why Section Icon 1">
          <h5> 
            Export Services
          </h5>
          <i class="fas fa-angle-double-right"></i>
        </a>
      </div>

      <div class="col-6 col-md-3 my-3 wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.6s">
        <a href="ServiceDetails.php">
          <img src="assets/media/pic11.jpg" alt="Why Section Icon 1">
          <h5> 
            Import Services
          </h5>
          <i class="fas fa-angle-double-right"></i>
        </a>
      </div>

      <div class="col-6 col-md-3 my-3 wow fadeInDownBig" data-wow-duration="1.5s" data-wow-delay="0.9s">
        <a href="ServiceDetails.php">
          <img src="assets/media/pic7.jpg" alt="Why Section Icon 1">
          <h5> 
            Local Distribution
          </h5>
          <i class="fas fa-angle-double-right"></i>
        </a>
      </div>

      <div class="col-6 col-md-3 my-3 wow fadeInRightBig" data-wow-duration="1.5s" data-wow-delay="1.1s">
        <a href="AllProducts.php">
          <img src="assets/media/pic20.jpg" alt="Why Section Icon 1">
          <h5> 
            Online Shopping
          </h5>
          <i class="fas fa-angle-double-right"></i>
        </a>
      </div>

    </div>
  </div>
</div> -->
<!-- END:: SERVICES SECTION -->

<!-- START::LATEST NEWS SECTION -->
<!-- <div class="latest_news_sec">
  <div class="container">
    <div class="header_wraper">
      <h2 class="wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.3s"> Latest News </h2>
    </div>

    <div class="row justify-content-between p-2 overflow-hidden">
      <div class="col-12 col-md-6 my-2 wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
        <div class="latest_article_img_wraper">
          <img src="assets/media/pic5.jpg" alt="about us iamge">
        </div>
      </div>

      <div class="col-12 col-md-6 my-2 wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
        <div class="latest_article_text_wraper">
          <div class="header_wraper">
            <h3> Article Title </h3>
            <h5> 27 - Aug - 2020 </h5>
          </div>

          <div class="text_wraper">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus.
            maiores, nulla explicabo exercitationem dolorum quas veniam aut ex.
            repudiandae facere nostrum soluta. Dicta explicabo corrupti totam
            exercitationem temporibus veritatis nam.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus.
            maiores, nulla explicabo exercitationem dolorum quas veniam aut ex.
            repudiandae facere nostrum soluta. Dicta explicabo corrupti totam
            exercitationem temporibus veritatis nam.
          </div>
          <div class="btn_wraper col-12 wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.3s">
            <a href="AllNews.php"> view more </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- END::LATEST NEWS SECTION -->

<!-- START:: OUR CLIENTS SECTION -->
<!-- <div class="our_clients_sec">
  <div class="container-fluid">
    <div class="header_wraper">
      <h2 class="wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.3s"> Our Clients </h2>
    </div>

    <div class="row flex-column align-items-center justify-content-center mt-3 overflow-hidden">
      <div id="clients" class="owl-carousel owl-theme col-11 wow fadeInRightBig" data-wow-duration="1.5s" data-wow-delay="0.3s">

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/prand1.png" alt="client"> 
          </div>
        </div>

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/prand2.png" alt="client"> 
          </div>
        </div>

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/prand4.png" alt="client"> 
          </div>
        </div>

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/prand3.png" alt="client"> 
          </div>
        </div>

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/prand6.png" alt="client">
          </div>
        </div>

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/prand1.png" alt="client"> 
          </div>
        </div>

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/prand2.png" alt="client"> 
          </div>
        </div>

        <div class="item text-center">
          <div class="img_wraper">
            <img src="assets/media/prand4.png" alt="client"> 
          </div>
        </div>


      </div>
    </div>

    <div class="btn_wraper wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
      <a href="AllClients.php"> View More </a>
    </div>
  </div>
</div> -->
<!-- END:: OUR CLIENTS SECTION --> 

<!-- START:: INCLUDING THE FOOTER -->
<?php include('./layouts/TheFooter.php')?>
<!-- END:: INCLUDING THE FOOTER -->