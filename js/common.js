const header = `<div class="header-area ">
<div id="sticky-header" class="main-header-area">
    <div class="container-fluid">
        <div class="header_bottom_border">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2">
                    <div class="logo">
                        <a href="index.html">
                            <img src="img/logo.png" alt="Best Tours and Travels in coimbatore"
                                height="60px">
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="main-menu  d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a class="active" href="index.html">home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a class="" href="destinations.html">Destination</a></li>
                                <li><a class="" href="our-vehicles.html">Our vehicles</a></l /li>
                                <li><a class="" href="booking.html">Booking</a></li>

                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                    <div class="social_wrap d-flex align-items-center justify-content-end">
                        <div class="number">
                            <p> <i class="fa fa-phone"></i> <a href="tel:+919894334156">+91 9894334156</a>
                            </p>
                            <p> <i class="fa fa-phone"></i> <a href="tel:+919629524355">+91 9629524355</a>
                            </p>
                        </div>
                        <div class="social_links d-none d-xl-block">
                            <ul>
                                <li><a href="https://wa.me/+919894334156"> <i class="fa fa-whatsapp"></i>
                                    </a></li>
                                <li><a href="https://www.instagram.com/bambinoholidays/"> <i
                                            class="fa fa-instagram"></i> </a></li>
                                <li><a
                                        href="https://m.facebook.com/Bambinoholidays_coimbatore-100261568651522/?tsid=0.1710052883670128&source=result">
                                        <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="https://twitter.com/bambinoholidays"> <i
                                            class="fa fa-twitter"></i> </a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="seach_icon">
                    <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none">

                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 d-sm-block">
                    <div class="social_wrap">
                        <div class="number1">
                            For Booking contact :
                            <br>
                            <i class="fa fa-phone"></i> <a href="tel:+919894334156">+91 9894334156</a>
                            &nbsp;
                            <i class="fa fa-phone"></i> <a href="tel:+919629524355">+91 9629524355</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>`;

document.querySelector('#header').innerHTML = header;