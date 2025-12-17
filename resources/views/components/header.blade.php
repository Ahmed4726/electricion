  <!-- header style two -->
    <!-- header style start here -->
    <style>

.logo-main {
    display: flex;
    align-items: center;   /* vertically center */
    gap: 10px;             /* space between image and text */
    text-decoration: none;
}


.display-title {
    text-transform: uppercase;
    white-space: nowrap;   /* prevents wrapping to next line */
}
@media (max-width: 768px) {
    .display-title {
        display: none;

    }
}

@media (max-width: 768px) {
    .display-title {
        display: none;

    }
    .logo-img-mobile{
        width: 40%;
    }
}
    </style>
    <header class="header-technician rts-header-area header-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-wrapper">
                        <div class="left-area">
                            <svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.95455 6.95455H12.3636L5.40909 17V10.0455H0L6.95455 0V6.95455Z" fill="#F47629" />
                            </svg>
                            <p>
                                Quick Electrical Support Across Dubai – Within 24 Hours.
                            </p>
                        </div>
                        <div class="right">
                            <div class="map">
                                <i class="fa-sharp fa-regular fa-location-dot"></i>
                                <a href="#">203 Madison Ave, New York, USA</a>
                            </div>
                            <div class="email">
                                <i class="fa-regular fa-envelope"></i>
                                <a href="#">info@example.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-header">
            <!-- header main area start -->
            <div class="header-main-area header--sticky">
               <a href="/" class="logo-main">
    <img src="assets/images/banner/logo.jpeg" alt="logo-main" class="logo-img logo-img-mobile" width="22%">
    <b class="text-dark display-title" style="margin-left:-20px;">Supreme Building Maintenance</b>
</a>



                <div class="header-nav main-nav-one">
                    <nav>
                        <ul>
                            <li class="">
                                <a class="menu-item" href="/">HOME</a>
                                {{-- <ul class="submenu">
                                    <div class="container flex-mega">
                                        <li class="menu-item">
                                            <a class="tag" href="#">Multipage</a>
                                            <ul class="pages">
                                                <li><a class="current" href="index.html">Electric</a></li>
                                                <li><a href="https://themewant.com/products/html/drill/handyman/">Handyman</a></li>
                                                <li><a href="https://themewant.com/products/html/drill/plumber/">Plumber</a></li>
                                                <li><a href="https://themewant.com/products/html/drill/cleaning/">Cleaning</a></li>
                                                <li><a href="https://themewant.com/products/html/drill/air-condition/">Air Condition</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="tag" href="#">Onepage</a>
                                            <ul class="pages">
                                                <li><a href="onepage.html">Electric Onepage</a></li>
                                                <li><a href="https://themewant.com/products/html/drill/handyman/onepage.html">Handyman Onepage</a></li>
                                                <li><a href="https://themewant.com/products/html/drill/plumber/onepage.html">Plumber Onepage</a></li>
                                                <li><a href="https://themewant.com/products/html/drill/cleaning/onepage.html">Cleaning Onepage</a></li>
                                                <li><a href="https://themewant.com/products/html/drill/air-condition/onepage.html">Air Condition Onepage</a></li>
                                            </ul>
                                        </li>
                                    </div>
                                </ul> --}}
                            </li>
                            <li><a class="nav-link" href="/about">ABOUT</a></li>
                            <li class="has-dropdown">
                                <a class="nav-link" href="#">SERVICES</a>
                                <ul class="submenu">
                                    <li><a href="/services">Service</a></li>
                                    {{-- <li><a href="service-details.html">Service Details</a></li> --}}
                                </ul>
                            </li>
                            {{-- <li class="has-dropdown">
                                <a class="nav-link" href="#">BLOG</a>
                                <ul class="submenu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li class="has-dropdown">
                                <a class="nav-link" href="#">PAGES</a>
                                <ul class="submenu">
                                    <li><a href="appoinment.html">Appoinment</a></li>
                                    <li><a href="project.html">Project</a></li>
                                    <li class="sub-dropdown">
                                        <a href="javascript:void(0);">Project Details</a>
                                        <ul class="submenu third-lvl base">
                                            <li><a class="mobile-menu-link" href="project-details.html">Project Details</a></li>
                                            <li><a class="mobile-menu-link" href="project-details-gallery.html">Details Gallery</a></li>
                                            <li><a class="mobile-menu-link" href="project-details-vedio.html">Details Vedio</a></li>
                                            <li><a class="mobile-menu-link" href="project-details-carousel.html">Details Carousel</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="team-details.html">Team Details</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                </ul>
                            </li> --}}
                            <li><a class="nav-link" href="/contact">CONTACT</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="button-action-area">
                    <div class="actions-area">
                        <div class="search-btn" id="search">

                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.75 14.7188L11.5625 10.5312C12.4688 9.4375 12.9688 8.03125 12.9688 6.5C12.9688 2.9375 10.0312 0 6.46875 0C2.875 0 0 2.9375 0 6.5C0 10.0938 2.90625 13 6.46875 13C7.96875 13 9.375 12.5 10.5 11.5938L14.6875 15.7812C14.8438 15.9375 15.0312 16 15.25 16C15.4375 16 15.625 15.9375 15.75 15.7812C16.0625 15.5 16.0625 15.0312 15.75 14.7188ZM1.5 6.5C1.5 3.75 3.71875 1.5 6.5 1.5C9.25 1.5 11.5 3.75 11.5 6.5C11.5 9.28125 9.25 11.5 6.5 11.5C3.71875 11.5 1.5 9.28125 1.5 6.5Z" fill="#1F1F25" />
                            </svg>

                        </div>
                        <div class="menu-btn" id="menu-btn">

                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="14" width="20" height="2" fill="#1F1F25" />
                                <rect y="7" width="20" height="2" fill="#1F1F25" />
                                <rect width="20" height="2" fill="#1F1F25" />
                            </svg>

                        </div>
                    </div>
                    {{-- <a href="appoinment.html" class="rts-btn btn-primary">Make An Appointment </a> --}}
                </div>
            </div>
            <!-- header main area end -->
        </div>
    </header>
    <!-- header style start end -->

    <!-- header style two End -->

        <!-- header style two -->
    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="inner-main-wrapper-desk">
            <div class="thumbnail">
                <img src="assets/images/banner/04.jpg" alt="elevate">
            </div>
            <div class="inner-content">
                <h4 class="title">We Build Building and Great Constructive Homes.</h4>
                <p class="disc">
                    We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master new technologies.
                </p>
                <div class="footer">
                    <h4 class="title">Got a project in mind?</h4>
                    <a href="contact.html" class="rts-btn btn-primary">Let's talk</a>
                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu-main">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li class="">
                        <a href="/" class="main">Home</a>
                        {{-- <ul class="submenu mm-collapse">
                            <a href="#" class="tag">Multipage</a>
                            <li><a class="mobile-menu-link" href="index.html">Electric</a></li>
                            <li><a class="mobile-menu-link" href="https://themewant.com/products/html/drill/handyman/">Handyman</a></li>
                            <li><a class="mobile-menu-link" href="https://themewant.com/products/html/drill/plumber/">Plumber</a></li>
                            <li><a class="mobile-menu-link" href="https://themewant.com/products/html/drill/cleaning/"> Cleaning</a></li>
                            <li><a class="mobile-menu-link" href="https://themewant.com/products/html/drill/air-condition/">Air Condition</a></li>
                        </ul>
                        <ul class="submenu mm-collapse">
                            <a href="#" class="tag">Onepage</a>
                            <li><a class="mobile-menu-link" href="onepage.html">Electric Onepage</a></li>
                            <li><a class="mobile-menu-link" href="https://themewant.com/products/html/drill/handyman/onepage.html">Handyman Onepage</a></li>
                            <li><a class="mobile-menu-link" href="https://themewant.com/products/html/drill/plumber/onepage.html">Plumber Onepage</a></li>
                            <li><a class="mobile-menu-link" href="https://themewant.com/products/html/drill/cleaning/onepage.html"> Cleaning Onepage</a></li>
                            <li><a class="mobile-menu-link" href="https://themewant.com/products/html/drill/air-condition/onepage.html">Air Condition Onepage</a></li>
                        </ul> --}}
                    </li>
                    <li>
                        <a href="/about" class="main">About</a>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Services</a>
                        <ul class="mm-collapse">
                            <li><a class="mobile-menu-link" href="/services">Service</a></li>
                            {{-- <li><a class="mobile-menu-link" href="service-details.html">Service Details</a></li> --}}
                        </ul>
                    </li>
                    {{-- <li class="has-droupdown">
                        <a href="#" class="main">Blog</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="blog.html">Blog</a></li>
                            <li><a class="mobile-menu-link" href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li class="has-droupdown">
                        <a href="#" class="main">Pages</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="appoinment.html">Appoinment</a></li>
                            <li><a class="mobile-menu-link" href="project.html">Project</a></li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Project Details</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="project-details.html"></a>Project Detaails</li>
                                    <li><a href="project-details-gallery.html"></a>Details Gallery</li>
                                    <li><a href="project-details-vedio.html"></a>Details Video</li>
                                    <li><a href="project-details-carousel.html"></a>Details Carousel</li>
                                </ul>
                            </li>
                            <li><a class="mobile-menu-link" href="team.html">Team</a></li>
                            <li><a class="mobile-menu-link" href="team-details.html">Team Details</a></li>
                            <li><a class="mobile-menu-link" href="contact.html">Contact</a></li>
                            <li><a class="mobile-menu-link" href="faq.html">Faq</a></li>
                        </ul>
                    </li> --}}
                    <li>
                        <a href="/contact" class="main">Contact Us</a>
                    </li>
                </ul>
            </nav>

            <div class="rts-social-style-one pl--20 mt--100">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- header style two End -->
