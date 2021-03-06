@extends("bienvenu")

@section("content")


            <!-- Slider Start -->
            <div id="rs-slider" class="rs-slider slider3">
                <div class="bend niceties">
                    <div id="nivoSlider" class="slides">
                        <img src="{{ asset('assets/images/slides/h2-sl1.webp') }}" alt="" title="#slide-1" />
                        <img src="{{ asset('assets/images/slides/h2-sl2.webp') }}" alt="" title="#slide-2" />
                    </div>
                    <!-- Slide 1 -->
                    <div id="slide-1" class="slider-direction">
                        <div class="content-part">
                            <div class="container">
                                <div class="slider-des">
                                    <div class="sl-subtitle">Sustainable Finance</div>
                                    <h1 class="sl-title">We transform <br>your business </h1>
                                </div>
                                <div class="desc">Excepteur sint cupidatat non proident, sunt in coulpa qui official mollit anim id est laborum 20 years experience.</div>
                                <div class="slider-bottom ">
                                    <a class="readon consultant slider" href="contact.html">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div id="slide-2" class="slider-direction">
                        <div class="content-part">
                            <div class="container">
                                <div class="slider-des">
                                    <div class="sl-subtitle">Discover your business</div>
                                    <h1 class="sl-title">We Promote <br>Your Business</h1>
                                </div>
                                <div class="desc">Excepteur sint cupidatat non proident, sunt in coulpa qui official mollit anim id est laborum 20 years experience.</div>
                                <div class="slider-bottom ">
                                    <a class="readon consultant" href="contact.html">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider End -->

            <!-- Premium Services Section Start -->
            <div class="rs-services style2 gray-bg pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title2 d-flex align-items-center mb-60 md-mb-40">
                        <div class="first-half">
                            <div class="sub-text">1i??re disposition des domaines</div>
                            <h2 class="title mb-0 md-pb-20">
                                Les meilleures solutions pour votre entreprise - <span> ce que nous faisons.</span></h2>
                        </div>
                        <div class="last-half">
                            <p class="desc mb-0 pl-20 md-pl-15">
                                Plus de 30 ans d'exp??rience dans le conseil en affaires et en finance,
                                Solutions informatiques et collaboration avec plus de 5 000 clients dans le monde.
                                 Chronologies de cr??ation du th??me m??tier du conseil digital 2021.</p>
                        </div>
                    </div>
                    <div class="rs-carousel owl-carousel" 
                        data-loop="true" 
                        data-items="3" 
                        data-margin="30" 
                        data-autoplay="true" 
                        data-hoverpause="true" 
                        data-autoplay-timeout="5000" 
                        data-smart-speed="800" 
                        data-dots="true" 
                        data-nav="false" 
                        data-nav-speed="false" 

                        data-md-device="3" 
                        data-md-device-nav="false" 
                        data-md-device-dots="true" 
                        data-center-mode="false"

                        data-ipad-device2="2" 
                        data-ipad-device-nav2="false" 
                        data-ipad-device-dots2="true"

                        data-ipad-device="2" 
                        data-ipad-device-nav="false" 
                        data-ipad-device-dots="true" 

                        data-mobile-device="1" 
                        data-mobile-device-nav="false" 
                        data-mobile-device-dots="true">  
                        <div class="service-wrap">
                            <div class="image-part">
                                <img src="assets/images/services/1.jpg" alt="">
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="business-planning.html">Business Planning</a></h3>
                                <div class="desc">We denounce with indignation on and dislike men who are so begui led and demoralized data.</div>
                            </div>
                        </div>
                        <div class="service-wrap">
                            <div class="image-part">
                                <img src="assets/images/services/2.jpg" alt="">
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="tax-strategy.html">Tax Strategy</a></h3>
                                <div class="desc">We denounce with indignation on and dislike men who are so begui led and demoralized data.</div>
                            </div>
                        </div>
                        <div class="service-wrap">
                            <div class="image-part">
                                <img src="assets/images/services/3.jpg" alt="">
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="financial-advices.html">Financial Advices</a></h3>
                                <div class="desc">We denounce with indignation on and dislike men who are so begui led and demoralized data.</div>
                            </div>
                        </div>
                        <div class="service-wrap">
                            <div class="image-part">
                                <img src="assets/images/services/6.jpg" alt="">
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="insurance-strategy.html">Insurance Strategy</a></h3>
                                <div class="desc">We denounce with indignation on and dislike men who are so begui led and demoralized data.</div>
                            </div>
                        </div>
                        <div class="service-wrap">
                            <div class="image-part">
                                <img src="assets/images/services/5.jpg" alt="">
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="start-ups.html">Start Ups</a></h3>
                                <div class="desc">We denounce with indignation on and dislike men who are so begui led and demoralized data.</div>
                            </div>
                        </div>
                        <div class="service-wrap">
                            <div class="image-part">
                                <img src="assets/images/services/6.jpg" alt="">
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="manage-investment.html">Investment</a></h3>
                                <div class="desc">We denounce with indignation on and dislike men who are so begui led and demoralized data.</div>
                            </div>
                        </div>
                        <div class="service-wrap">
                            <div class="image-part">
                                <img src="assets/images/services/1.jpg" alt="">
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="business-planning.html">Business Planning</a></h3>
                                <div class="desc">We denounce with indignation on and dislike men who are so begui led and demoralized data.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Premium Services Section End -->

            <!-- About Section Start -->
            <div id="rs-about" class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
                           <div class="sec-title2 mb-30">
                                <div class="sub-text">Qui sommes nous</div>
                                <h2 class="title mb-23">Nous ??laborons vos id??es et <span>plans d'affaires.</span></h2>
                                <p class="desc mb-0">
                                    Il n'y a pas non plus quelqu'un qui aime ou recherche ou d??sire obtenir la douleur par lui-m??me, parce que c'est de la douleur, mais il arrive parfois des circonstances dans lesquelles le travail et la douleur peuvent lui procurer un grand plaisir. Nous l'avons fait avec une juste indignation et n'aimons pas les hommes qui sont si s??duits et d??moralis??s par le th??me de l'entreprise de donn??es 2021.   
                                </p>
                           </div>
                            <!-- Skillbar Section Start -->
                            <div class="rs-skillbar style1">
                                <div class="cl-skill-bar">
                                   <!-- Start Skill Bar -->
                                   <span class="skillbar-title">Business Consulting</span>
                                   <div class="skillbar" data-percent="92">
                                       <p class="skillbar-bar"></p>
                                       <span class="skill-bar-percent"></span> 
                                   </div>
                                   <!-- Start Skill Bar -->
                                   <span class="skillbar-title">Financial Advices</span>
                                   <div class="skillbar" data-percent="90">
                                       <p class="skillbar-bar"></p>
                                       <span class="skill-bar-percent"></span> 
                                   </div>
                                </div>
                                <div class="col-lg-12 mt-45">
                                    <div class="btn-part">
                                        <a class="readon consultant discover" href="about.html">Discover More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Skillbar Section End -->
                        </div>
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="{{ asset('assets/images/about-2.png') }}" alt="images">
                                <div class="working-experiance">
                                    <div class="experience-year">
                                        <div class="count-year plus"><span class="sub-text">25+</span></div>
                                        <h4 class="title mb-0">Ans d'experiences</h4>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <!-- Partner Section Start -->
                <div class="rs-patter-section style1 pt-75">
                    <div class="container custom">
                        <div class="rs-carousel owl-carousel" 
                            data-loop="true" 
                            data-items="5" 
                            data-margin="30" 
                            data-autoplay="true" 
                            data-hoverpause="true" 
                            data-autoplay-timeout="5000" 
                            data-smart-speed="800" 
                            data-dots="false" 
                            data-nav="false" 
                            data-nav-speed="false" 

                            data-md-device="5" 
                            data-md-device-nav="false" 
                            data-md-device-dots="false" 
                            data-center-mode="false"

                            data-ipad-device2="4" 
                            data-ipad-device-nav2="false" 
                            data-ipad-device-dots2="true"

                            data-ipad-device="3" 
                            data-ipad-device-nav="false" 
                            data-ipad-device-dots="false" 

                            data-mobile-device="2" 
                            data-mobile-device-nav="false" 
                            data-mobile-device-dots="false">  
                            <div class="logo-img">
                                <a href="https://rstheme.com">
                                    <img class="hovers-logos rs-grid-img" src="assets/images/partner/1.png" title="" alt="">
                                    <img class="mains-logos rs-grid-img " src="assets/images/partner/1.png" title="" alt="">
                                </a>
                            </div>
                            <div class="logo-img">
                                <a href="https://rstheme.com">
                                    <img class="hovers-logos rs-grid-img" src="assets/images/partner/2.png" title="" alt="">
                                    <img class="mains-logos rs-grid-img " src="assets/images/partner/2.png" title="" alt="">
                                </a>
                            </div>
                            <div class="logo-img">
                                <a href="https://rstheme.com">
                                    <img class="hovers-logos rs-grid-img" src="assets/images/partner/3.png" title="" alt="">
                                    <img class="mains-logos rs-grid-img " src="assets/images/partner/3.png" title="" alt="">
                                </a>
                            </div>
                            <div class="logo-img">
                                <a href="https://rstheme.com">
                                    <img class="hovers-logos rs-grid-img" src="assets/images/partner/4.png" title="" alt="">
                                    <img class="mains-logos rs-grid-img " src="assets/images/partner/4.png" title="" alt="">
                                </a>
                            </div>
                            <div class="logo-img">
                                <a href="https://rstheme.com">
                                    <img class="hovers-logos rs-grid-img" src="assets/images/partner/5.png" title="" alt="">
                                    <img class="mains-logos rs-grid-img " src="assets/images/partner/5.png" title="" alt="">
                                </a>
                            </div>
                            <div class="logo-img">
                                <a href="https://rstheme.com">
                                    <img class="hovers-logos rs-grid-img" src="assets/images/partner/6.png" title="" alt="">
                                    <img class="mains-logos rs-grid-img " src="assets/images/partner/6.png" title="" alt="">
                                </a>
                            </div>
                            <div class="logo-img">
                                <a href="https://rstheme.com">
                                    <img class="hovers-logos rs-grid-img" src="assets/images/partner/7.png" title="" alt="">
                                    <img class="mains-logos rs-grid-img " src="assets/images/partner/7.png" title="" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Partner Section End -->
            </div>
            <!-- About Section Start -->

            <!-- Services Section Start -->
            <div id="rs-services" class="rs-services home-style2 gray-bg pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title2 text-center md-left mb-40">
                        <div class="sub-text">Why Choose Us</div>
                        <h2 class="title">Obtenez nos services et attirez plus de <br><span>clients.</span></h2>
                    </div>
                    <div class="row y-middle">
                        <div class="col-lg-4  md-mb-50 pr-30 md-pr-l5">
                            <div class="services-item mb-45">
                                <div class="services-icon">
                                    <img src="assets/images/service/1.png" alt="Images">
                                </div>
                                <div class="services-text">
                                    <h3 class="title"><a href="services-style1.html">Expert peoples</a></h3>
                                    <p class="services-txt">Quisque placerat vitae ut scelerise consulting.</p>
                                </div>
                            </div>
                            <div class="services-item mb-45">
                                <div class="services-icon">
                                    <img src="assets/images/service/2.png" alt="Images">
                                </div>
                                <div class="services-text">
                                    <h3 class="title"><a href="services-style1.html">Big experience</a></h3>
                                    <p class="services-txt">Quisque placerat vitae ut scelerise consulting.</p>
                                </div>
                            </div>
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="assets/images/service/3.png" alt="Images">
                                </div>
                                <div class="services-text">
                                    <h3 class="title"><a href="services-style1.html">Financial control</a></h3>
                                    <p class="services-txt">Quisque placerat vitae ut scelerise consulting.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  md-mb-50">
                            <div class="rs-videos choose-video">
                                <div class="images-video">
                                    <img src="assets/images/choose-2.png" alt="images">
                                </div>
                                <div class="animate-border">
                                    <a class="popup-border" href="https://www.youtube.com/watch?v=FMvA5fyZ338">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>  
                        </div>
                        <div class="col-lg-4 pl-40 md-pl-15">
                            <div class="services-item mb-45">
                                <div class="services-icon">
                                    <img src="assets/images/service/4.png" alt="Images">
                                </div>
                                <div class="services-text">
                                    <h3 class="title"><a href="services-style1.html">Committed quality</a></h3>
                                    <p class="services-txt">Quisque placerat vitae ut scelerise consulting.</p>
                                </div>
                            </div>
                            <div class="services-item mb-45">
                                <div class="services-icon">
                                    <img src="assets/images/service/5.png" alt="Images">
                                </div>
                                <div class="services-text">
                                    <h3 class="title"><a href="services-style1.html">Award winning</a></h3>
                                    <p class="services-txt">Quisque placerat vitae ut scelerise consulting.</p>
                                </div>
                            </div>
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="assets/images/service/6.png" alt="Images">
                                </div>
                                <div class="services-text">
                                    <h3 class="title"><a href="services-style1.html">Insurance Policy</a></h3>
                                    <p class="services-txt">Quisque placerat vitae ut scelerise consulting.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Counter Section End -->
                <div class="rs-counter style1">
                    <div class="container">
                        <div class="counter-border-top">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                                    <div class="counter-area">
                                        <div class="counter-list mb-20">
                                            <div class="counter-icon">
                                                <img src="assets/images/service/1.png" alt="Counter">
                                            </div>
                                            <div class="counter-number">
                                                <span class="rs-count">582</span>
                                            </div>
                                        </div>
                                        <div class="content-part">
                                            <h5 class="title">Projects completed for our respected clients.</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                                    <div class="counter-area">
                                        <div class="counter-list mb-20">
                                            <div class="counter-icon">
                                                <img src="assets/images/service/2.png" alt="Counter">
                                            </div>
                                            <div class="counter-number">
                                                <span class="rs-count">215</span>
                                                <span class="prefix">+</span>
                                            </div>
                                        </div>
                                        <div class="content-part">
                                            <h5 class="title">Experienced people serving to clients.</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
                                    <div class="counter-area">
                                        <div class="counter-list mb-20">
                                            <div class="counter-icon">
                                                <img src="assets/images/service/3.png" alt="Counter">
                                            </div>
                                            <div class="counter-number">
                                                <span class="rs-count">25</span>
                                                <span class="prefix">+</span>
                                            </div>
                                        </div>
                                        <div class="content-part">
                                            <h5 class="title">Years experience in business & consulting.</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="counter-area">
                                        <div class="counter-list mb-20">
                                            <div class="counter-icon">
                                                <img src="assets/images/service/4.png" alt="Counter">
                                            </div>
                                            <div class="counter-number">
                                                <span class="rs-count">70</span>
                                                <span class="prefix">+</span>
                                            </div>
                                        </div>
                                        <div class="content-part">
                                            <h5 class="title">Business & consulting awards won over world.</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Counter Section End -->
            </div>
            <!-- Services Section End -->
          <!-- Project Section Start -->
          <div id="rs-project" class="rs-project style7 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container custom">
                <div class="row y-middle">
                    <div class="col-lg-6">
                        <div class="sec-title2 mb-55 md-mb-30">
                            <div class="sub-text">Recent Work</div>
                            <h2 class="title mb-23">We blend business ideas to create something <span>awesome.</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15 mb-30">
                        <p class="desc mb-0">30+ years experience in business and finance consulting, IT solutions, and working with 5k+ clients over the world. Creation timelines for the digital consulting business theme 2021.</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid pl-30 pr-30">
                <div class="rs-carousel owl-carousel" 
                    data-loop="true" 
                    data-items="4" 
                    data-margin="30" 
                    data-autoplay="false" 
                    data-hoverpause="true" 
                    data-autoplay-timeout="5000" 
                    data-smart-speed="800" 
                    data-dots="false" 
                    data-nav="false" 
                    data-nav-speed="false" 

                    data-md-device="4" 
                    data-md-device-nav="false" 
                    data-md-device-dots="true" 
                    data-center-mode="false"

                    data-ipad-device2="2" 
                    data-ipad-device-nav2="false" 
                    data-ipad-device-dots2="true"

                    data-ipad-device="2" 
                    data-ipad-device-nav="false" 
                    data-ipad-device-dots="true" 

                    data-mobile-device="1" 
                    data-mobile-device-nav="false" 
                    data-mobile-device-dots="true">           

                    <div class="project-item">
                        <div class="project-img">
                            <img src="assets/images/project/1.jpg" alt="images">
                        </div>
                        <div class="project-content"> 
                            <div class="project-inner">
                                <h3 class="title"><a href="project-single.html">Business planning</a></h3>
                                <span class="category"><a href="project-single.html">Investment</a></span>
                            </div>
                            <a class="p-icon" href="project-single.html"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-img">
                            <img src="assets/images/project/2.jpg" alt="images">
                        </div>
                        <div class="project-content"> 
                            <div class="project-inner">
                                <h3 class="title"><a href="project-single.html">Strength solutions</a></h3>
                                <span class="category"><a href="project-single.html">Investment</a></span>
                            </div>
                            <a class="p-icon" href="project-single.html"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-img">
                            <img src="assets/images/project/3.jpg" alt="images">
                        </div>
                        <div class="project-content"> 
                            <div class="project-inner">
                                <h3 class="title"><a href="project-single.html">Business analytics</a></h3>
                                <span class="category"><a href="project-single.html">Business Strategy</a></span>
                            </div>
                            <a class="p-icon" href="project-single.html"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-img">
                            <img src="assets/images/project/4.jpg" alt="images">
                        </div>
                        <div class="project-content"> 
                            <div class="project-inner">
                                <h3 class="title"><a href="project-single.html">Stock market analysis</a></h3>
                                <span class="category"><a href="project-single.html">Business Strategy</a></span>
                            </div>
                            <a class="p-icon" href="project-single.html"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-img">
                            <img src="assets/images/project/1.jpg" alt="images">
                        </div>
                        <div class="project-content"> 
                            <div class="project-inner">
                                <h3 class="title"><a href="project-single.html">Sales analysis</a></h3>
                                <span class="category"><a href="project-single.html">Financial</a></span>
                            </div>
                            <a class="p-icon" href="project-single.html"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-img">
                            <img src="assets/images/project/2.jpg" alt="images">
                        </div>
                        <div class="project-content"> 
                            <div class="project-inner">
                                <h3 class="title"><a href="project-single.html">Stock investments</a></h3>
                                <span class="category"><a href="project-single.html">Tax Consulting</a></span>
                            </div>
                            <a class="p-icon" href="project-single.html"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-img">
                            <img src="assets/images/project/3.jpg" alt="images">
                        </div>
                        <div class="project-content"> 
                            <div class="project-inner">
                                <h3 class="title"><a href="project-single.html">Advertising Technology</a></h3>
                                <span class="category"><a href="project-single.html">Business Strategy</a></span>
                            </div>
                            <a class="p-icon" href="project-single.html"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-img">
                            <img src="assets/images/project/1.jpg" alt="images">
                        </div>
                        <div class="project-content"> 
                            <div class="project-inner">
                                <h3 class="title"><a href="project-single.html">Business planning</a></h3>
                                <span class="category"><a href="project-single.html">Investment</a></span>
                            </div>
                            <a class="p-icon" href="project-single.html"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Section End -->


            <!-- Process Section Start -->
            <div class="rs-process style1 bg2 pt-100 pb-100 md-pt-70 md-pb-70"
            style="background-image: url('{{asset('assets/images/ser-bg.png')}}') !important;">                
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-5">
                            <div class="sec-title2 md-text-center">
                                <div class="sub-text">Working Process</div>
                                <h2 class="title mb-23 white-color">How we work for our valued  <span>customers.</span></h2>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="btn-part text-right md-text-center">
                                <a class="readon consultant discover" href="portfolio.html">View Works</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container custom2">
                    <div class="process-effects-layer">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 md-mb-30">
                                <div class="rs-addon-number">
                                    <div class="number-part">
                                        <div class="number-image">
                                            <img src="{{ asset('assets/images/process/style1/1.png') }}" alt="Process">
                                        </div>
                                        <div class="number-text">
                                            <div class="number-area"> <span class="number-prefix"> 1 </span></div>
                                            <div class="number-title"><h3 class="title"> D??couverte</h3></div>
                                            <div class="number-txt"> 
                                                Quisque placerat vitae focus scelerisque. Fusce luctus odio ac nibh luctus, in porttitor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 md-mb-30">
                                <div class="rs-addon-number">
                                    <div class="number-part">
                                        <div class="number-image">
                                            <img src="{{ asset('assets/images/process/style1/2.png') }}" alt="Process">
                                        </div>
                                        <div class="number-text">
                                            <div class="number-area"> <span class="number-prefix"> 2 </span></div>
                                            <div class="number-title"><h3 class="title">Planification</h3></div>
                                            <div class="number-txt"> 
                                                Quisque placerat vitae focus scelerisque. Fusce luctus odio ac nibh luctus, in porttitor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 sm-mb-30">
                                <div class="rs-addon-number">
                                    <div class="number-part">
                                        <div class="number-image">
                                            <img src="{{ asset('assets/images/process/style1/3.png') }}" alt="Process">
                                        </div>
                                        <div class="number-text">
                                            <div class="number-area"> <span class="number-prefix"> 3 </span></div>
                                            <div class="number-title"><h3 class="title">Ex??cuter</h3></div>
                                            <div class="number-txt"> 
                                                Quisque placerat vitae focus scelerisque. Fusce luctus odio ac nibh luctus, in porttitor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="rs-addon-number">
                                    <div class="number-part">
                                        <div class="number-image">
                                            <img src="{{ asset('assets/images/process/style1/4.png') }}" alt="Process">
                                        </div>
                                        <div class="number-text">
                                            <div class="number-area"> <span class="number-prefix"> 4 </span></div>
                                            <div class="number-title"><h3 class="title">Livrer</h3></div>
                                            <div class="number-txt"> 
                                                Quisque placerat vitae focus scelerisque. Fusce luctus odio ac nibh luctus, in porttitor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Process Section End -->


            <!-- Blog Start -->
            <div id="rs-blog" class="rs-blog style2 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row y-middle md-mb-30">
                        <div class="col-lg-5 mb-20 md-mb-10">
                            <div class="sec-title2">
                                <div class="sub-text">News Updates</div>
                                <h2 class="title mb-23">Read our latest updates & business <span>tips & tricks.</span></h2>
                            </div>
                        </div>
                        <div class="col-lg-7 mb-20">
                            <div class="btn-part text-right md-left">
                                <a class="readon consultant discover" href="blog-details.html">View Updates</a>
                            </div>
                        </div>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="#"><img src="assets/images/blog/1.jpg" alt="Blog"></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html">Branding</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta mb-10">
                                   <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                                   <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">Customer Onboarding Strategy: A Guide to Class</a></h3>
                               <p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="#"><img src="assets/images/blog/2.jpg" alt="Blog"></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html">Branding</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta mb-10">
                                   <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                                   <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">How to plan a fail-proof website redesign strategy</a></h3>
                               <p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="#"><img src="assets/images/blog/3.jpg" alt="Blog"></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html">Digital Marketing</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta mb-10">
                                   <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                                   <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">How investing in dependend increasing to business</a></h3>
                               <p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="#"><img src="assets/images/blog/4.jpg" alt="Blog"></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html">Digital Marketing</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta mb-10">
                                   <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                                   <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">7 Productivity tips to avoid burnout when working</a></h3>
                               <p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="#"><img src="assets/images/blog/5.jpg" alt="Blog"></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html">Graphic Design</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta mb-10">
                                   <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                                   <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">Email marketing tips that will increase your sales</a></h3>
                               <p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="#"><img src="assets/images/blog/6.jpg" alt="Blog"></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html"></a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta mb-10">
                                   <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                                   <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">How to maintain customer relations disaster strikes</a></h3>
                               <p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="#"><img src="assets/images/blog/1.jpg" alt="Blog"></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html">E-commerce</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta mb-10">
                                   <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                                   <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">How to plan a fail-proof website redesign strategy</a></h3>
                               <p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog End -->

            <!-- Testimonial Section Start -->
            <div id="rs-blog" class="rs-testimonial style2 bg10 pt-100 pb-100 md-pt-70 md-pb-70" 
            style="background-image: url('{{asset('assets/images/testimonial/testi-bg2.jpg')}}') !important;">
                <div class="container">
                    <div class="sec-title2 text-center md-left mb-30">
                        <div class="sub-text">Temoignages</div>
                        <h2 class="title mb-0 white-color">Que disent nos clients<br> de nous</h2>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                        <div class="testi-wrap"  style="background-image: url('{{asset('assets/images/testimonial/test-bg.jpg')}}') !important;">
                            <div class="item-content">
                                <span><img src="assets/images/testimonial/quote.png" alt="Testimonial"></span>
                                <p>
                                    Le support client est excellent et la documentation est bonne - les novices peuvent facilement comprendre. Bien que j'ai eu un probl??me avec les performances, gr??ce au support client, nous avons ??galement r??solu ce probl??me.
                                </p>
                            </div>
                            <div class="testi-content">
                                <div class="image-wrap"  style="background-image: url('{{asset('assets/images/testimonial/test-bg.jpg')}}') !important;">
                                    <img src="assets/images/testimonial/1.jpg" alt="Testimonial">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">David Warner</div>
                                    <span class="testi-title">Envato User</span>
                                    <div class="ratting-img">
                                        <img src="assets/images/testimonial/ratting.png" alt="Testimonial">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testi-wrap"  style="background-image: url('{{asset('assets/images/testimonial/test-bg.jpg')}}') !important;">
                            <div class="item-content">
                                <span><img src="assets/images/testimonial/quote.png" alt="Testimonial"></span>
                                <p>Customer support is excellent and documentation good ??? novice can easily understand. Although I had a problem with the performance, thanks to the customer support, we have solved this problem as well.</p>
                            </div>
                            <div class="testi-content">
                                <div class="image-wrap">
                                    <img src="assets/images/testimonial/2.jpg" alt="Testimonial">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Emily Blunt</div>
                                    <span class="testi-title">Web Developer</span>
                                    <div class="ratting-img">
                                        <img src="assets/images/testimonial/ratting.png" alt="Testimonial">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testi-wrap"  style="background-image: url('{{asset('assets/images/testimonial/test-bg.jpg')}}') !important;">
                            <div class="item-content">
                                <span><img src="assets/images/testimonial/quote.png" alt="Testimonial"></span>
                                <p>Customer support is excellent and documentation good ??? novice can easily understand. Although I had a problem with the performance, thanks to the customer support, we have solved this problem as well.</p>
                            </div>
                            <div class="testi-content">
                                <div class="image-wrap">
                                    <img src="assets/images/testimonial/3.jpg" alt="Testimonial">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Ansu Fati</div>
                                    <span class="testi-title">Marketing</span>
                                    <div class="ratting-img">
                                        <img src="assets/images/testimonial/ratting.png" alt="Testimonial">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testi-wrap"  style="background-image: url('{{asset('assets/images/testimonial/test-bg.jpg')}}') !important;">
                            <div class="item-content">
                                <span><img src="assets/images/testimonial/quote.png" alt="Testimonial"></span>
                                <p>Customer support is excellent and documentation good ??? novice can easily understand. Although I had a problem with the performance, thanks to the customer support, we have solved this problem as well.</p>
                            </div>
                            <div class="testi-content">
                                <div class="image-wrap">
                                    <img src="assets/images/testimonial/4.jpg" alt="Testimonial">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Angelina Jolie</div>
                                    <span class="testi-title">Graphic Designer</span>
                                    <div class="ratting-img">
                                        <img src="assets/images/testimonial/ratting.png" alt="Testimonial">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testi-wrap"  style="background-image: url('{{asset('assets/images/testimonial/test-bg.jpg')}}') !important;">
                            <div class="item-content">
                                <span><img src="assets/images/testimonial/quote.png" alt="Testimonial"></span>
                                <p>Customer support is excellent and documentation good ??? novice can easily understand. Although I had a problem with the performance, thanks to the customer support, we have solved this problem as well.</p>
                            </div>
                            <div class="testi-content"  style="background-image: url('{{asset('assets/images/testimonial/test-bg.jpg')}}') !important;">
                                <div class="image-wrap">
                                    <img src="assets/images/testimonial/1.jpg" alt="Testimonial">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">David Warner</div>
                                    <span class="testi-title">Envato User</span>
                                    <div class="ratting-img">
                                        <img src="assets/images/testimonial/ratting.png" alt="Testimonial">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testi-wrap"  style="background-image: url('{{asset('assets/images/testimonial/test-bg.jpg')}}') !important;">
                            <div class="item-content">
                                <span><img src="assets/images/testimonial/quote.png" alt="Testimonial"></span>
                                <p>Customer support is excellent and documentation good ??? novice can easily understand. Although I had a problem with the performance, thanks to the customer support, we have solved this problem as well.</p>
                            </div>
                            <div class="testi-content">
                                <div class="image-wrap">
                                    <img src="assets/images/testimonial/2.jpg" alt="Testimonial">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Emily Blunt</div>
                                    <span class="testi-title">Web Developer</span>
                                    <div class="ratting-img">
                                        <img src="assets/images/testimonial/ratting.png" alt="Testimonial">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testi-wrap"  style="background-image: url('{{asset('assets/images/testimonial/test-bg.jpg')}}') !important;">
                            <div class="item-content">
                                <span><img src="assets/images/testimonial/quote.png" alt="Testimonial"></span>
                                <p>Customer support is excellent and documentation good ??? novice can easily understand. Although I had a problem with the performance, thanks to the customer support, we have solved this problem as well.</p>
                            </div>
                            <div class="testi-content">
                                <div class="image-wrap">
                                    <img src="assets/images/testimonial/3.jpg" alt="Testimonial">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Ansu Fati</div>
                                    <span class="testi-title">Marketing</span>
                                    <div class="ratting-img">
                                        <img src="assets/images/testimonial/ratting.png" alt="Testimonial">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testi-wrap"  style="background-image: url('{{asset('assets/images/testimonial/test-bg.jpg')}}') !important;">
                            <div class="item-content">
                                <span><img src="assets/images/testimonial/quote.png" alt="Testimonial"></span>
                                <p>Customer support is excellent and documentation good ??? novice can easily understand. Although I had a problem with the performance, thanks to the customer support, we have solved this problem as well.</p>
                            </div>
                            <div class="testi-content">
                                <div class="image-wrap">
                                    <img src="assets/images/testimonial/4.jpg" alt="Testimonial">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Angelina Jolie</div>
                                    <span class="testi-title">Graphic Designer</span>
                                    <div class="ratting-img">
                                        <img src="assets/images/testimonial/ratting.png" alt="Testimonial">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Section End -->

            <!-- Contact Section Start -->
            <div id="rs-contact" class="rs-contact contact-style2 bg11 pt-95 pb-100 md-pt-65 md-pb-70">
                <div class="container">
                    <div class="sec-title2 mb-55 md-mb-35 text-center text-lg-start">
                        <div class="sub-text">Contact</div>
                        <h2 class="title mb-0">Laissez-nous aider votre entreprise
                            <br>  aller  <span>de l'avant.</span></h2>
                    </div>
                    <div class="row y-middle">
                        <div class="col-lg-6 md-mb-50">
                            <div class="contact-img">
                                <img src="assets/images/computer.jpg" alt="Computer">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-wrap">
                                <div id="form-messages"></div>
                                <form id="contact-form" method="post" action="mailer.php">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="name" name="name" placeholder="Nom" required="">
                                            </div> 
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                            </div>   
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="phone" name="phone" placeholder="Num??ro de t??l??phone" required="">
                                            </div>   
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="Website" name="subject" placeholder="Votre site web" required="">
                                            </div>
                                      
                                            <div class="col-lg-12 mb-30">
                                                <textarea class="from-control" id="message" name="message" placeholder="Votre message" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="btn-part">                                            
                                            <div class="form-group mb-0">
                                                <input class="readon submit" type="submit" value="Envoyer">
                                            </div>
                                        </div> 
                                    </fieldset>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Section End -->
            
        </div> 
        <!-- Main content End -->
@endsection