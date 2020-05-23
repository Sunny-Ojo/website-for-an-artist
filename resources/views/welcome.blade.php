<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Musico</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('css1/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css1/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css1/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css1/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css1/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css1/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css1/audioplayer.css')}}">
    <link rel="stylesheet" href="{{asset('css1/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css1/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('css1/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css1/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css1/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('css1/style.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/responsive.css')}}"> --}}
</head>

<body>


    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="/" class="text-white" style="font-size:24px">
                                        {{-- <img src="img/logo.png" alt=""> --}}
                                        MCKACHY
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="/">home</a></li>
                                            <li><a href="#about">About</a></li>
                                            <li><a href="#track">tracks</a></li>

                                            <li><a href="#contact">Contact</a></li>
                                            <li><a href="#gallery">Gallery</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="social_icon text-right">
                                    <ul>
                                        <li><a href="https://web.facebook.com/Mckachy" target="blank"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="https://twitter.com/mckachy" target="blank"> <i class="fa fa-twitter"></i> </a></li>
                                        <li><a href="https://www.instagram.com/mckachy/" target="blank"> <i class="fa fa-instagram"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text text-center ">
                            {{-- <h3>ARTIST </h3> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- music_area  -->
    <div class="music_area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-10">
                    <div class="row align-items-center">
                                <div class="col-xl-9 col-md-9">
                                    <div class="music_field">
                                            <div class="thumb">
                                                    <img src="{{asset('img/music_man/mc1.jpg')}}" alt="">
                                                </div>
                                                <div class="audio_name">
                                                    <div class="name">
                                                        <h4 class=" d-lg-block d-none">Hit Song  👉 Swag Juice</h4>
                                                        <h4 class="d-lg-none d-md-block">Hit Song <br>👇 <br> Swag Juice</h4>
                                                        <p>10 November, 2019</p>
                                                    </div>
                                                        <audio preload="auto" controls>
                                                                <source src="https://www.w3schools.com/html/horse.mp3">
                                                            </audio>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-3">
                                    <div class="music_btn">
                                            <a href="#contact" class="boxed-btn">Feature Me?</a>
                                    </div>
                                </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- music_area end  -->

    <!-- about_area  -->
    <div class="about_area" id="about">
        <div class="container">
            <h3 class="text-center mb-4" style="font-size:36px; font-weight:400">About Me</h3>

            <div class="row align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="about_thumb">
                        <img class="img-fluid" src="{{asset('img/about/mck.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-md-6">
                    <div class="about_info">
                        <h3>MC KACHY</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing drawing. Apartments frequently or motionless on reasonable projecting expression enim ad minim veniam quis nostrud exercitation we have supported programmes to help alleviate human suffering through animal welfare when people might depend.</p>
                        <div class="signature">
                            <img src="{{asset('img/about/signature.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ about_area  -->

    <!-- youtube_video_area  -->
    <div class="youtube_video_area">
        <div class="container-fluid p-0">
            <h1 class="text-center p-3 text-danger">Recent Videos</h1>
            <div class="row no-gutters">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_video mt-sm-2">
                        <div class="thumb">
                            <img src="{{asset('img/video/cover1.jpg')}}" alt="">
                        </div>
                        <div class="hover_elements">
                            <div class="video">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=Hzmp3z6deF8">
                                            <i class="fa fa-play"></i>
                                        </a>
                            </div>

                            <div class="hover_inner">
                                <span class="text-warning">Lagos artist Show-2018</span>
                                <h3><a href="#">Shadows of My Dream</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_video mt-sm-2">
                        <div class="thumb">
                            <img src="{{asset('img/video/cover2.jpg')}}" alt="">
                        </div>
                        <div class="hover_elements">
                            <div class="video">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=Hzmp3z6deF8">
                                            <i class="fa fa-play"></i>
                                        </a>
                            </div>

                            <div class="hover_inner">
                                <span class="text-warning">Lagos artist Show-2018</span>
                                <h3><a href="#">Shadows of My Dream</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_video mt-sm-2">
                        <div class="thumb">
                            <img src="{{asset('img/video/cover4.jpg')}}" alt="">
                        </div>
                        <div class="hover_elements">
                            <div class="video">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=Hzmp3z6deF8">
                                            <i class="fa fa-play"></i>
                                        </a>
                            </div>

                            <div class="hover_inner">
                                <span class="text-white">Lagos artist Show-2018</span>
                                <h3><a href="#">Shadows of My Dream</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_video">
                        <div class="thumb">
                            <img src="{{asset('img/video/cover3.jpg')}}" alt="">
                        </div>
                        <div class="hover_elements">
                            <div class="video">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=Hzmp3z6deF8">
                                            <i class="fa fa-play"></i>
                                        </a>
                            </div>

                            <div class="hover_inner">
                                <span >Lagos artist Show-2018</span>
                                <h3><a href="#">Shadows of My Dream</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / youtube_video_area  -->

    <!-- music_area  -->
    <div class="music_area music_gallery" id="track">
        <div class="container">
                <div class="row">
                        <div class="col-xl-12">
                            <div class="section_title text-center mb-65">
                                <h3>Latest Tracks</h3>
                            </div>
                        </div>
                    </div>
            <div class="row align-items-center justify-content-center mb-20">
                <div class="col-xl-10">
                    <div class="row align-items-center">
                                <div class="col-xl-9 col-md-9">
                                    <div class="music_field">
                                            <div class="thumb">
                                                    <img src="{{asset('img/music_man/1.png')}}" alt="">
                                                </div>
                                                <div class="audio_name">
                                                    <div class="name">
                                                        <a href="/songs/"><h4>Swag Juice</h4></a>
                                                    </div>
                                                        <audio preload="auto" controls>
                                                                <source src="https://www.w3schools.com/html/horse.mp3">
                                                            </audio>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-3">
                                    <div class="music_btn">
                                            <a href="#" class="boxed-btn">Download</a>
                                    </div>
                                </div>
                    </div>
                </div>

            </div>
            <div class="row align-items-center justify-content-center mb-20">
                <div class="col-xl-10">
                    <div class="row align-items-center">
                                <div class="col-xl-9 col-md-9">
                                    <div class="music_field">
                                            <div class="thumb">
                                                    <img src="{{asset('img/music_man/2.png')}}" alt="">
                                                </div>
                                                <div class="audio_name">
                                                    <div class="name">
                                                        <a href="/songs/"> <h4>Chinex</h4>  </a>
                                                    </div>
                                                        <audio preload="auto" controls>
                                                                <source src="https://www.w3schools.com/html/horse.mp3">
                                                            </audio>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-3">
                                    <div class="music_btn">
                                            <a href="#" class="boxed-btn">Download</a>
                                    </div>
                                </div>
                    </div>
                </div>

            </div>
            <div class="row align-items-center justify-content-center mb-20">
                <div class="col-xl-10">
                    <div class="row align-items-center">
                                <div class="col-xl-9 col-md-9">
                                    <div class="music_field">
                                            <div class="thumb">
                                                    <img src="{{asset('img/music_man/3.png')}}" alt="">
                                                </div>
                                                <div class="audio_name">
                                                    <div class="name">
                                                        <a href="/songs/"><h4>Roll your Boat</h4></a>
                                                        </div>
                                                        <audio preload="auto" controls>
                                                                <source src="https://www.w3schools.com/html/horse.mp3">
                                                            </audio>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-3">
                                    <div class="music_btn">
                                            <a href="#" class="boxed-btn">Download</a>
                                    </div>
                                </div>
                    </div>
                </div>

            </div>
                <a href="/mckachy/all-songs"><h4 class="text-center  p-3">View All Songs</h4></a>

        </div>
    </div>

    <div class="youtube_video_area p-5"  id="gallery">
        <div class="container  p-0">
            <h1 class="text-center p-3 text-danger">Gallery</h1>
            <div class="row no-gutters">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_video">
                        <div class="thumb">
                            <img src="{{asset('img/gallery/g5.jpg')}}" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_video">
                        <div class="thumb">
                            <img src="{{asset('img/gallery/g1.jpg')}}" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_video">
                        <div class="thumb">
                            <img src="{{asset('img/gallery/g2.jpg')}}" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_video">
                        <div class="thumb">
                            <img src="{{asset('img/gallery/g4.jpg')}}" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ gallery -->

    <!-- contact_rsvp -->
    <div class="contact_rsvp bg-attachment-fixed">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text text-center">
                        <h3>Do you need an artist to feature you in your next song?, Do you need someone to sing for you during your traditional marriage or you need an artist for a show or event,</h3>
                        <h3>Contact Me ASAP</h3>
                        <a class="boxed-btn3 text-danger" href="#contact">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ contact_rsvp -->
    <section class="contact-section section_padding" id="contact">
        <div class="container">
          <div class="  d-sm-block mb-5 pb-4">



          <div class="row">
            <div class="col-12">
              <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8">
              <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">

                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message'></textarea>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Enter Subject'>
                    </div>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <button type="submit" class="button button-contactForm btn_4 boxed-btn">Send Message</button>
                </div>
              </form>
            </div>
            <div class="col-lg-4">
              <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                  <h3>Lagos state,</h3>
                  <p>Nigeria</p>
                </div>
              </div>
              <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                <div class="media-body">
                  <a href="tel://08063213210"><h3>08063213210</h3></a>
                  <p>Always Available</p>
                </div>
              </div>
              <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-email"></i></span>
                <div class="media-body">
                  <a href="mailto:mckachy@gmail.com"><h3>Mckachy@gmail.com</h3></a>
                  <p>Contact me anytime!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                            <div class="footer_widget">
                                    <h3 class="footer_title">
                                            Services
                                    </h3>
                               <p>Shows</p>
                               <p>Events</p>
                               <p>Featuring</p>
                                <p class="sub_text">Feel the power and passion for true music.</p>
                                </div>
                    </div>
                    <div class="col-xl-5 col-md-5 offset-xl-1">
                        <div class="footer_widget">
                                <h3 class="footer_title">
                                        Contact Me
                                </h3>
                            <ul>
                                <li><a href="mailto:mckachy@gmail.com">Email: Mckachy@gmail.com
                                    </a></li>
                                <li><a href="tel://08063213210">Call Me: 08063213210
                                    </a></li>
                                <li><a href="#">Location: Lagos state, Nigeria</a></li>
                            </ul>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="https://web.facebook.com/Mckachy" target="blank">
                                            <i class=" fa fa-facebook "></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://twitter.com/mckachy" target="blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.instagram.com/mckachy/" target="blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row ">
                    <div class="col-xl-12 col-md-12 text-center">
                        <p class="copy_right">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Mckachy pop star
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->

    <!-- JS here -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous">
    </script>
    <script src="{{asset('js1/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('js1/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js1/popper.min.js')}}"></script>
    <script src="{{asset('js1/bootstrap.min.js')}}"></script>
    <script src="{{asset('js1/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js1/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js1/ajax-form.js')}}"></script>
    <script src="{{asset('js1/waypoints.min.js')}}"></script>
    <script src="{{asset('js1/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js1/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js1/audioplayer.js')}}"></script>
    <script src="{{asset('js1/scrollIt.js')}}"></script>
    <script src="{{asset('js1/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('js1/wow.min.js')}}"></script>
    <script src="{{asset('js1/nice-select.min.js')}}"></script>
    <script src="{{asset('js1/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('js1/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js1/plugins.js')}}"></script>
    <script src="{{asset('js1/gijgo.min.js')}}"></script>
    <script src="{{asset('js1/slick.min.js')}}"></script>
    <!--contact js-->
    <script src="{{asset('js1/contact.js')}}"></script>
    <script src="{{asset('js1/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js1/jquery.form.js')}}"></script>
    <script src="{{asset('js1/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js1/mail-script.js')}}"></script>

    <script src="{{asset('js1/main.js')}}"></script>

		<script>
                $(function() {
                    $('audio').audioPlayer({

                    });
                });
            </script>
</body>

</html>
