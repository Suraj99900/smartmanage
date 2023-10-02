<?php
// include header section of template
include_once "./CDN_Header.php"
?>

<body>

    <!-- main container start -->

    <div class="main-container">
        <!-- aside start  -->
        <div class="aside">
            <div class="logo">
                <a href="#"><span>S</span>mart <span>P</span>roject</a>
            </div>

            <div class="nav-toggler">
                <span></span>
            </div>

            <ul class="nav">
                <li><a href="#home" class="active"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="loginScreen.php"><i class="fa-solid fa-upload"></i> Project Upload</a></li>
                <li><a href="#gallery"><i class="fa-regular fa-rectangle-list"></i> Project List</a></li>
                <li><a href="#service"><i class="fa fa-list"></i> Services</a></li>
                <li><a href=""><i class="uil uil-arrow"></i>Source code</a></li>
                <li><a href="#faq"><i class="uil uil-comment-question"></i>FAQ</a></li>
                <li><a href="#contact"><i class="fa fa-comments"></i> Contact</a></li>
            </ul>
        </div>
        <!-- aside end -->

        <!-- main Content start -->
        <div class="main-content">
            <!-- home section start -->
            <section class="home section " id="home">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <h3 class="hello">
                                Hello, my name is <span class="name">User_Name</span>
                            </h3>
                            <h3 class="my-profession">I' m a <span class="typing">Web designer</span></h3>
                            <p>I'm a web designer with extensive experience for over 1 years .My experties is to create
                                and website design ,graphic design ,and many more...</p>
                            <a href="#contact" class="btn hire-me">Click To More</a>
                        </div>
                        <div class="home-img padd-15">
                            <img src="../res/img/me.png">
                        </div>
                    </div>
                </div>
            </section>
            <!-- home section end -->
            <!-- About section start -->
            <section class="about section " id="about">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>About me</h2>
                        </div>
                    </div>
                    <div class="about-content padd-15">
                        <div class="row">
                            <div class="about-text">
                                <h3>I'M user_name and <span>Web Developer</span></h3>
                                <p>I'M a front-end and back-end web developer. I can provide clean code and pixel
                                    perfect design. I also make a website that is neat and with animations the user can
                                    easily intract to the website for their daily life use.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="personal-info padd-15">
                                <div class="row">
                                    <div class="info-item padd-15">
                                        <p>Birthday: <span>14 april 2003</span></p>
                                    </div>

                                    <div class="info-item padd-15">
                                        <p>Age: <span>19</span></p>
                                    </div>

                                    <div class="info-item padd-15">
                                        <p>Website: <span>www.smartpolys.com</span></p>
                                    </div>

                                    <div class="info-item padd-15">
                                        <p>Email: <span>Jaiswaljesus384@gmail.com</span></p>
                                    </div>

                                    <div class="info-item padd-15">
                                        <p>Diploma: <span>Computer Science & Engineering</span></p>
                                    </div>
                                    <div class="info-item padd-15">
                                        <p>Phone: <span>+91 738-799-7294</span></p>
                                    </div>

                                    <div class="info-item padd-15">
                                        <p>City: <span>chandrapur, maharashtra</span></p>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="buttons padd-15">
                                        <a href="#" class="btn">Download CV</a>
                                        <a href="#" class="btn">Hire Me</a>
                                    </div>
                                </div>
                            </div>
                            <div class="skills padd-15">
                                <div class="row">
                                    <div class="skill-item padd-15">
                                        <h5>CSS</h5>
                                        <div class="progress">
                                            <div class="progress-in" style="width: 50%;"></div>
                                            <div class="skill-percent">50%</div>
                                        </div>
                                    </div>

                                    <div class="skill-item padd-15">
                                        <h5>Js</h5>
                                        <div class="progress">
                                            <div class="progress-in" style="width: 38%;"></div>
                                            <div class="skill-percent">38%</div>
                                        </div>
                                    </div>

                                    <div class="skill-item padd-15">
                                        <h5>PHP</h5>
                                        <div class="progress">
                                            <div class="progress-in" style="width: 66%;"></div>
                                            <div class="skill-percent">66%</div>
                                        </div>
                                    </div>

                                    <div class="skill-item padd-15">
                                        <h5>HTML</h5>
                                        <div class="progress">
                                            <div class="progress-in" style="width: 80%;"></div>
                                            <div class="skill-percent">80%</div>
                                        </div>
                                    </div>

                                    <div class="skill-item padd-15">
                                        <h5>Bootstrap</h5>
                                        <div class="progress">
                                            <div class="progress-in" style="width: 76%;"></div>
                                            <div class="skill-percent">76%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="education padd-15">
                                <h3 class="title">Education</h3>
                                <div class="row">
                                    <div class="timline-box padd-15">
                                        <div class="timeline shadow-dark">
                                            <!-- Timeline item -->
                                            <div class="timeline-item">
                                                <div class="circle-dot"></div>
                                                <h3 class="timeline-date">
                                                    <i class="fa fa-calendar"></i> 2019 - 2022
                                                </h3>
                                                <h4 class="timeline-title">
                                                    Diploma in computer science
                                                </h4>
                                                <p class="timeline-text">
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore
                                                    aliquam eius fugiat perferendis in accusamus odio praesentium culpa
                                                    maiores necessitatibus facere ipsum omnis possimus reiciendis
                                                    provident quae sapiente, amet magni.
                                                </p>
                                            </div>

                                            <div class="timeline-item">
                                                <div class="circle-dot"></div>
                                                <h3 class="timeline-date">
                                                    <i class="fa fa-calendar"></i> 2019 - 2022
                                                </h3>
                                                <h4 class="timeline-title">
                                                    Diploma in computer science
                                                </h4>
                                                <p class="timeline-text">
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore
                                                    aliquam eius fugiat perferendis in accusamus odio praesentium culpa
                                                    maiores necessitatibus facere ipsum omnis possimus reiciendis
                                                    provident quae sapiente, amet magni.
                                                </p>
                                            </div>

                                            <div class="timeline-item">
                                                <div class="circle-dot"></div>
                                                <h3 class="timeline-date">
                                                    <i class="fa fa-calendar"></i> 2019 - 2022
                                                </h3>
                                                <h4 class="timeline-title">
                                                    Diploma in computer science
                                                </h4>
                                                <p class="timeline-text">
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore
                                                    aliquam eius fugiat perferendis in accusamus odio praesentium culpa
                                                    maiores necessitatibus facere ipsum omnis possimus reiciendis
                                                    provident quae sapiente, amet magni.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="experience padd-15">
                                <h3 class="title">
                                    Experience
                                </h3>

                                <div class="row">
                                    <div class="timline-box padd-15">
                                        <div class="timeline shadow-dark">
                                            <!-- Timeline item -->
                                            <div class="timeline-item">
                                                <div class="circle-dot"></div>
                                                <h3 class="timeline-date">
                                                    <i class="fa fa-calendar"></i> 2019 - 2022
                                                </h3>
                                                <h4 class="timeline-title">
                                                    Diploma in computer science
                                                </h4>
                                                <p class="timeline-text">
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore
                                                    aliquam eius fugiat perferendis in accusamus odio praesentium culpa
                                                    maiores necessitatibus facere ipsum omnis possimus reiciendis
                                                    provident quae sapiente, amet magni.
                                                </p>
                                            </div>

                                            <div class="timeline-item">
                                                <div class="circle-dot"></div>
                                                <h3 class="timeline-date">
                                                    <i class="fa fa-calendar"></i> 2019 - 2022
                                                </h3>
                                                <h4 class="timeline-title">
                                                    Diploma in computer science
                                                </h4>
                                                <p class="timeline-text">
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore
                                                    aliquam eius fugiat perferendis in accusamus odio praesentium culpa
                                                    maiores necessitatibus facere ipsum omnis possimus reiciendis
                                                    provident quae sapiente, amet magni.
                                                </p>
                                            </div>

                                            <div class="timeline-item">
                                                <div class="circle-dot"></div>
                                                <h3 class="timeline-date">
                                                    <i class="fa fa-calendar"></i> 2019 - 2022
                                                </h3>
                                                <h4 class="timeline-title">
                                                    Diploma in computer science
                                                </h4>
                                                <p class="timeline-text">
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore
                                                    aliquam eius fugiat perferendis in accusamus odio praesentium culpa
                                                    maiores necessitatibus facere ipsum omnis possimus reiciendis
                                                    provident quae sapiente, amet magni.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About section end -->

            <!-- Gallery section Start -->

            <section class="gallery section " id="gallery">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Gallery</h2>
                        </div>
                    </div>
                    <div class="row">

                        <div class="banner-box items padd-15">
                            <div class="slider-img">
                                <img src="../res/img/1_.jpg" id="banner_img">
                            </div>
                            <div class="caption-box padd-15">
                                <h2 class="caption_text ">A Person who has never made a mistake has never tried anything
                                    new.</h2>
                                <h3 class="caption_text">Creativity is intelligence having fun.</h3>
                            </div>

                            <div class="banner-left icon">
                                <i class="uil uil-angle-left"></i>
                            </div>
                            <div class="banner-right icon">
                                <i class="uil uil-angle-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="title padd-15">
                            Collection:-
                        </h3>
                        <div class="collection__gallery padd-15">
                            <div class="row">
                                <div class="gallery-box item padd-15">
                                    <img src="../res/img/gallery_1.jpg">
                                </div>
                                <div class="gallery-box item padd-15">
                                    <img src="../res/img/gallery_2.jpg">
                                </div>
                                <div class="gallery-box item padd-15">
                                    <img src="../res/img/gallery_3.jpg">
                                </div>
                                <div class="gallery-box item padd-15">
                                    <img src="../res/img/gallery_4.jpg">
                                </div>
                                <div class="gallery-box item padd-15">
                                    <img src="../res/img/gallery_5.jpg">
                                </div>
                                <div class="gallery-box item padd-15">
                                    <img src="../res/img/gallery_6.jpg">
                                </div>
                                <div class="gallery-box item padd-15">
                                    <img src="../res/img/gallery_7.jpg">
                                </div>
                                <div class="gallery-box item padd-15">
                                    <img src="../res/img/gallery_8.jpg">
                                </div>
                                <div class="gallery-box item padd-15">
                                    <img src="../res/img/gallery_9.jpg">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- preview box -->
                    <div class="row">
                        <div class="preview-box">
                            <div class="cancel-box icon">
                                <i class="uil uil-times"></i>
                            </div>
                            <div class="img-box">
                                <img src="img/3_.jpg" alt="" id="prev_src">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gallery section end -->

            <!-- Services section start -->
            <section class="service section " id="service">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Services</h2>
                        </div>
                    </div>
                    <div class="row">
                        <!-- section item start -->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-palette"></i>
                                </div>
                                <h4>WEb Design</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea atque repudiandae
                                    quibusdam nisi incidunt maiores, amet itaque temporibus esse a iure. Consequuntur
                                    aliquid maiores beatae natus cupiditate, incidunt velit. Amet?</p>
                            </div>
                        </div>
                        <!-- service item end -->

                        <!-- section item start -->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-code"></i>
                                </div>
                                <h4>WEb Design</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea atque repudiandae
                                    quibusdam nisi incidunt maiores, amet itaque temporibus esse a iure. Consequuntur
                                    aliquid maiores beatae natus cupiditate, incidunt velit. Amet?</p>
                            </div>
                        </div>
                        <!-- service item end -->

                        <!-- section item start -->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-mobile-alt"></i>
                                </div>
                                <h4>WEb Design</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea atque repudiandae
                                    quibusdam nisi incidunt maiores, amet itaque temporibus esse a iure. Consequuntur
                                    aliquid maiores beatae natus cupiditate, incidunt velit. Amet?</p>
                            </div>
                        </div>
                        <!-- service item end -->

                        <!-- section item start -->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-search"></i>
                                </div>
                                <h4>WEb Design</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea atque repudiandae
                                    quibusdam nisi incidunt maiores, amet itaque temporibus esse a iure. Consequuntur
                                    aliquid maiores beatae natus cupiditate, incidunt velit. Amet?</p>
                            </div>
                        </div>
                        <!-- service item end -->

                        <!-- section item start -->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-code"></i>
                                </div>
                                <h4>WEb Design</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea atque repudiandae
                                    quibusdam nisi incidunt maiores, amet itaque temporibus esse a iure. Consequuntur
                                    aliquid maiores beatae natus cupiditate, incidunt velit. Amet?</p>
                            </div>
                        </div>
                        <!-- service item end -->
                    </div>

                </div>
            </section>
            <!-- Services section end -->


            <!-- Source Code section Start -->
            <section class="source_code section" id="source">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Source Code</h2>
                        </div>
                    </div>
                    <div class="source_box padd-15">
                        <div class="row">

                            <div class="content_box padd-15">
                                <div class="tabs__head">
                                    <span class="tabs__toggle is-active-b">Tab_1</span>
                                    <span class="tabs__toggle">Tab_2</span>
                                    <span class="tabs__toggle">Tab_3</span>
                                </div>
                                <div class="tabs__body">
                                    <div class="tabs__content is-active">
                                        <h2 class="tab__title ">
                                            smartpolys.com
                                        </h2>
                                        <div class="img__box">
                                            <a href="http://smartpolys.com"><img src="../res/img/project_1.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tabs__content">
                                        <h2 class="tab__title">
                                            Freecode.today
                                        </h2>
                                        <div class="img__box">
                                            <a href="http://freecode.today"><img src="../res/img/project_2.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tabs__content">
                                        <h2 class="tab__title">
                                            hashtag-Blogger
                                        </h2>
                                        <div class="img__box">
                                            <a href="https://suraj99900.github.io/hashtag.github.io/"><img src="../res/img/project_3.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="img_box padd-15">
                                <img src="../res/img/testing.png">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Source Code section End -->


            <!-- FAQ section Start -->

            <section class="faq section " id="faq">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>FAQ</h2>
                        </div>
                    </div>

                    <div class="faq_box ">
                        <div class="row">
                            <div class="faq_img padd-15">
                                <img src="../res/img/faq_1.png" alt="">
                                <div class="faq_img__inner">
                                    <img src="../res/img/faq_2.png">
                                </div>
                            </div>
                            <div class="faq_content padd-15">
                                <div class="faq_items">
                                    <div class="question">
                                        <h3>What Is a Portfolio Website?</h3>
                                        <i class="uil uil-angle-down"></i>
                                    </div>
                                    <div class="answer">
                                        <p>
                                            Simply said, your portfolio website is a portal to showcase the online
                                            portfolio we were mentioning above to the world. It's the vehicle that lets
                                            your individual work be shared on a public platform. A portfolio website is
                                            a unique way to tell your own story, give potential clients basic
                                            information on who you are, allow you to showcase your work, and gives them
                                            a way to contact you.
                                        </p>
                                    </div>
                                </div>
                                <div class="faq_items">
                                    <div class="question">
                                        <h3>Is it easy to learn HTML and CSS ?</h3>
                                        <i class="uil uil-angle-down"></i>
                                    </div>
                                    <div class="answer">
                                        <p>
                                            The foundation of HTML and CSS are not that difficult. You can start getting
                                            comfortable with HTML in a matter of hours. Basic CSS is also not that
                                            difficult, however, CSS can get complicated when trying to build advanced
                                            layouts.
                                        </p>
                                    </div>
                                </div>
                                <div class="faq_items">
                                    <div class="question">
                                        <h3>what is javascript ?</h3>
                                        <i class="uil uil-angle-down"></i>
                                    </div>
                                    <div class="answer">
                                        <p>
                                            JavaScript is a text-based programming language used both on the client-side
                                            and server-side that allows you to make web pages interactive.
                                        </p>
                                    </div>
                                </div>

                                <div class="faq_items">
                                    <div class="question">
                                        <h3>Is JavaScript easier than PHP?</h3>
                                        <i class="uil uil-angle-down"></i>
                                    </div>
                                    <div class="answer">
                                        <p>
                                            While PHP is easier to learn, it is capable of building complete websites.
                                            On the other hand, we have more complex JavaScript, but it is one of the
                                            most popular languages. For front-end development, you should definitely
                                            choose JavaScript as PHP is only for server-side development.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </section>

            <!-- FAQ section end -->




            <!-- Contact section start -->
            <section class="contact section  " id="contact">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Contact Me</h2>
                        </div>
                    </div>
                    <h3 class="contact-title padd-15">Have you any Question ?</h3>
                    <h4 class="contact-sub-title padd-15">I'M AT YOUR SERVICES</h4>
                    <div class="row">
                        <!-- contact info item start -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>Call Us On</h4>
                            <p>+91 7387997294</p>
                        </div>
                        <!-- contact info item end -->

                        <!-- contact info item start -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-map-marker-alt"></i></div>
                            <h4>Address</h4>
                            <p> Rayatwari collery chnadrapur , maharashtra</p>
                        </div>
                        <!-- contact info item end -->

                        <!-- contact info item start -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <h4>Email</h4>
                            <p>jaiswaljesus384@gmail.com</p>
                        </div>
                        <!-- contact info item end -->

                        <!-- contact info item start -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-globe-europe"></i></div>
                            <h4>Website</h4>
                            <p>www.samrtpolys.com</p>
                        </div>
                        <!-- contact info item end -->
                    </div>
                    <h3 class="contact-title padd-15">SEND ME EMAIL</h3>
                    <h4 class="contact-sub-title padd-15">I'M VERY RESPOSIVE TO MESSAGES</h4>

                    <!-- CONTACT FORM -->
                    <div class="row">
                        <div class="contact-form padd-15">
                            <div class="row">
                                <div class="form-item col-6 padd-15">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>

                                <div class="form-item col-6 padd-15">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                    <div class="form-group">
                                        <textarea name="" class="form-control" id="" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                    <div class="form-group">
                                        <button type="submit" class="btn"> Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- Contact section end -->

        </div>

        <!-- main Content end-->

    </div>

    <!-- main container end  -->

    <!-- style switcher start -->
    <div class="style-switcher">
        <div class="style-switcher-toggler s-icon">
            <i class="fas fa-cog fa-spin"></i>
        </div>
        <div class="day-night s-icon">
            <i class="fas "></i>
        </div>
        <h4>Theme Color</h4>
        <div class="colors">
            <span class="color-1" onclick="setActivityStyle('color-1')"></span>
            <span class="color-2" onclick="setActivityStyle('color-2')"></span>
            <span class="color-3" onclick="setActivityStyle('color-3')"></span>
            <span class="color-4" onclick="setActivityStyle('color-4')"></span>
            <span class="color-5" onclick="setActivityStyle('color-5')"></span>
        </div>
    </div>

    <!-- style switcher end -->

    <!-- manu toggler start -->

    <div class="toggler-box">
        <div class="toggler-open icon">
            <i class="uil uil-angle-right-b"></i>
        </div>
        <div class="toggler-close icon">
            <i class="uil uil-angle-left-b"></i>
        </div>
    </div>

    <!-- manu toggler end -->

    <!-- include footer section -->
    <?php include_once "./CDN_Footer.php" ?>