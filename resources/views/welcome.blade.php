@include('include.header')
<style>
    .div-shadow {
        box-shadow: 0 10px 10px #d4d3d8;
    }

    .prime-outer-box {
        background-color: #fff;
        border-radius: 10px;
        display: block;
        padding: 10px 15px 15px 15px;
        /* position: absolute; */
        /* width:85%; */
        /* top: 250% */
    }

    .prime-table {
        display: inline-block;
        width: 100%;
        margin: auto;
        text-align: center;
        border: 1px solid #5772ec;
        padding: 30px 0 20px 0;
        position: relative;
        box-sizing: border-box
    }

    .prime-table1 {
        width: 100%;
    }

    .prime-table2 {
        width: 49.5%;
        float: left;
        /* border-right: 1px solid #ef6622; */
        border-left: 1px solid #31ccfa
    }

    /* .prime-table3 {
        width: 33%;
        float: left
    } */

    .p-txt2 {
        color: #004a81;
        font-weight: 700;
        font-size: 30px !important;
        text-align: center;
        position: relative;
        top: 16px;
        background-color: #fff;
        z-index: 1;
        width: 25%;
        margin: 0 auto;
        font-family: ui-serif;
    }

    .p-txt3 {
        color: black;
        padding: 0 10px;
        font-weight: 700;
        font-size: 20px !important;
        text-align: center;
        line-height: 1.1
    }

    .p-txt3 span {
        color: black;
        font-weight: 400;
        font-size: 17px !important;
    }

</style>
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ url('/') }}" class="logo">
                        <img src="{{ asset('user/assets/images/logo.png') }}" alt="Climbing">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{ '/' }}" class="active">Home</a></li>
                        <li>
                            <div class="nav-item dropdown scroll-to-section" style="margin-top: -7px;">
                                <a href="#services" class="nav-link dropdown-toggle" data-toggle="dropdown">services</a>
                                <div class="dropdown-menu">
                                    {{-- <a href="" class="dropdown-item">Website Development</a> --}}
                                    <a href="{{ route('creditCard.basicinfo') }}" class="dropdown-item">Credit
                                        card</a>
                                    <a href="{{ route('personalLoan.create-step-one') }}"
                                        class="dropdown-item">Personal
                                        Loan</a>
                                    <a href="{{ route('businessloan.create-step-one') }}"
                                        class="dropdown-item">Business
                                        Loan</a>

                                </div>
                            </div>
                        </li>

                        {{-- </li> --}}
                        <li class="scroll-to-section"><a href="#Web">Web Devlopment</a></li>
                        <li class="scroll-to-section"><a href="#other_services">Other Services</a></li>
                        <li class="scroll-to-section"><a href="#franchise">franchisee</a></li>
                        <li class="scroll-to-section"><a href="{{ route('job.career') }}">Career</a></li>
                        {{-- <li class="scroll-to-section"><a href="#pricing">Contact</a></li> --}}
                        <!--<li class="scroll-to-section"><a href="{{ route('job.jobPage') }}">Career</a></li>-->
                    </ul>



                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s" style="color: black;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                            data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3><span style="font-size: 8rem;">C</span>limbing <span
                                            style="font-size:5rem;">M</span>anagement <span
                                            style="font-size: 5rem;">S</span>ervices</h3>

                                    <p>Climbing Management Services Is Among The Leading Channel Partner Of Credit Card
                                        And Loan Products.</p>
                                </div>
                                {{-- <div class="col-lg-12">
                                    <div class="white-button first-button scroll-to-section">
                                        <a href="{{route('creditCard.basicinfo')}}">Credit Card <i
                                                class="fas fa-credit-card"></i></a>
                                    </div>
                                    <div class="white-button scroll-to-section">
                                        <a href="{{route('personalLoan.create-step-one')}}">Personal Loan <i
                                                class="fas fa-money-bill-alt"></i></a>
                                    </div>
                                    <div class="white-button scroll-to-section">
                                        <br>
                                        <a href="{{route('businessloan.create-step-one')}}">Business Loan <i
                                                class="fas fa-money-bill-alt"></i></a>
                                    </div>
                                </div> --}}
                                <div class="col-lg-12">
                                    <a href="{{ route('creditCard.basicinfo') }}" class="btnn"
                                        title="Credit Card">
                                        <i class="fas fa-credit-card" title="Credit Card"></i>
                                    </a> &#160;&#160;&#160;&#160;
                                    <a href="{{ route('webSite.websitePage') }}" class="btnn"
                                        title="Digital Marketing">
                                        <i class="fas fas fa-ad" title="Digital Marketing"></i>
                                    </a>&#160;&#160;&#160;&#160;
                                    <a href="{{ route('personalLoan.create-step-one') }}" class="btnn"
                                        title="Personal Loan">
                                        <i class="fas fa-money-bill-alt" title="Personal Loan"></i>
                                    </a>&#160;&#160;&#160;&#160;
                                    <a href="{{ route('webSite.websitePage') }}" title="Website Devlopment"
                                        class="btnn">
                                        <i class="fas fa-laptop-code" title="Website Devlopment"></i>
                                    </a>&#160;&#160;&#160;&#160;
                                    <a href="{{ route('businessloan.create-step-one') }}" class="btnn"
                                        title="Business Loan">
                                        <i class="fas fa-money-bill-alt" title="Business Loan"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/slider-.png" alt="">

                        <div class="cube" style="">
                            <div class="top">
                                <!-- <img src="assets/images/CM 1.jpg" alt="" width="120rem" height="200rem"> -->
                                <!-- <h1 style="text-align: center; margin-top: 5rem;">C M</h1> -->
                                <div class="title">
                                    <h2>C M</h2>

                                    <h1 style="font-size: 20px; font-style: italic;">Climbing &nbsp;
                                        <br />Managment<br>Service
                                    </h1>

                                    <!-- <a target="_blank" href="http://codepen.io/Moslim/" class="white-mode"></a> -->
                                </div>

                            </div>
                            <div>
                                <div class="circle"></div>
                                <span class="cubeimg" style="--i:0"><i><img
                                            src="{{ 'user/assets/images/images.webp' }}" alt="" width="20rem"
                                            height="75rem"></i></span>
                                <span class="cubeimg" style="--i:1"><i><img
                                            src="{{ 'user/assets/images/Business-Loan.webp' }}" alt="" width="20rem"
                                            height="75rem"></i></span>
                                <span class="cubeimg" style="--i:2"><i><img
                                            src="{{ 'user/assets/images/devlopment.webp' }}" alt="" width="20rem"
                                            height="75rem"></i></span>
                                <span class="cubeimg" style="--i:3"><i><img
                                            src="{{ 'user/assets/images/Franchise.webp' }}" alt="" width="20rem"
                                            height="75rem"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4>Amazing <em>Services &amp; Features</em> for you</h4>
                    <img src="{{ 'user/assets/images/heading-line-dec.png' }}" alt="">
                    <!-- <p>If you need the greatest collection of HTML templates for your business, please visit <a rel="nofollow" href="https://www.toocss.com/" target="_blank">TooCSS</a> Blog. If you need to have a contact form PHP script, go to <a href="https://templatemo.com/contact"
                                target="_parent">our contact page</a> for more information.</p> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="{{ route('creditCard.basicinfo') }}">
                    <div class="service-item first-service">
                        <!-- <div class=""></div> -->
                        <i class="fas fa-credit-card fa-5x"></i><br>
                        <!-- <br> -->
                        <h5>Credit Card</h5>
                        <p> Image result for credit card one line information
                            A credit card is a card which allows people to buy items without cash.</p>
                        <div class="text-button">
                            Apply Now <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="{{ route('personalLoan.create-step-one') }}">
                    <div class="service-item second-service">
                        <i class="far fa-money-bill-alt fa-5x"></i><br>
                        <h5> Personal Loan</h5>
                        <p>Personal loans are unsecured loans in which the bank loans you money on your creditworthiness
                            and no security is required for the money borrowed.</p>
                        <div class="text-button">
                            Apply Now <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="{{ route('businessloan.create-step-one') }}">
                    <div class="service-item third-service">
                        <i class="fas fa-rupee-sign fa-5x"></i><br>
                        <h5>Business Loan</h5>
                        <p>Business loans are unsecured loans in which the bank loans you money on your creditworthiness
                            and no security is required for the money borrowed.</p>
                        <div class="text-button">
                            Apply Now <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

{{-- Web --}}
<div id="Web" class="Web-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="section-heading">
                    <h4>Build Your <em>Own Website</em> With Climbing</h4>
                    <img src="assets/images/heading-line-dec.png" alt="">
                    {{-- <p>The Goal Isn’t To Build A Website. The Goal Is To Build Your Business.Expanding
                        Possibilities Of Better Tomorrow.</p> --}}
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box-item">
                            {{-- <h4><a href="#">Maintance Problems</a></h4> --}}
                            <h6>Design Website at attractive price</h6>

                            {{-- <p>Lorem Ipsum Text</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box-item">
                            <h6> Grow your business with
                                digital Marketing</h6>
                            {{-- <p>Lorem Ipsum Text</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <p>
                            A Web development process is a documented outline of the steps needed to be taken from start
                            to finish in order to complete a typical Web design project.

                        </p>
                        <div class="gradient-button">
                            <a href="{{ route('webSite.websitePage') }}">Build your website</a>
                        </div>
                        <!-- <span>*No Credit Card Required</span> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-image" style=" pointer-events: none;">
                    {{-- <img src="{{('user/assets/images/about-right-dec.png')}}" alt=""> --}}
                    {{-- <div class="tenor-gif-embed" data-postid="16983017" data-share-method="host"
                        data-aspect-ratio="1.5534" data-width="100%"><a
                            href="https://tenor.com/view/web-design-company-net-digital-gif-16983017">Web Design Company
                            Net GIF</a>from <a href="">Web Design Company GIFs</a></div>
                    <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
                </div> --}}
                    {{-- <div class="tenor-gif-embed" data-postid="13156874" data-share-method="host"
                    data-aspect-ratio="1.33333" data-width="100%"><a
                        href="https://tenor.com/view/responsive-web-design-gif-13156874">Responsive Web Design
                        GIF</a>from <a href="https://tenor.com/search/responsive+web+design-gifs">Responsive Web Design
                        GIFs</a></div>
                <script type="text/javascript" async src="https://tenor.com/embed.js"></script> --}}
                    <div class="tenor-gif-embed" data-postid="15349911" data-share-method="host"
                        data-aspect-ratio="0.846875" data-width="100%"><a
                            href="https://tenor.com/view/web-design-modern-web-gif-gif-15349911">Web Design Modern Web
                            Gif
                            GIF</a>from <a href="https://tenor.com/search/web+design-gifs">Web Design GIFs</a></div>
                    <script type="text/javascript" async src="https://tenor.com/embed.js"></script>

                    {{-- <div class="tenor-gif-embed" data-postid="16251081" data-share-method="host" data-aspect-ratio="1"
                    data-width="100%"><a
                        href="https://tenor.com/view/web-development-services-norway-web-design-services-norway-computer-team-gif-16251081">Web
                        Development Services Norway Web Design Services Norway GIF</a>from <a
                        href="https://tenor.com/search/web+development+services+norway-gifs">Web Development Services
                        Norway GIFs</a></div>
                <script type="text/javascript" async src="https://tenor.com/embed.js"></script> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- ICICI Dmate Account and HDFC Credit Card Traking link --}}
    <div id="other_services" class="section">
        <div class="container">
            <div class="prime-outer-box div-shadow">
                <p class="p-txt2">Our other services</p>
                <div class="prime-table">
                    <div class="prime-table1">
                        <p class="p-txt3">ICICI Demate Account<br><br>
                            <span>
                                Introducing ICICI direct NEO – ₹0* Brokerage Plan Open Demat & Trading account with
                                ICICI
                                direct<br>Get additional benefits worth ₹ 7,099</span> <br><br>

                            <a href="https://secure.icicidirect.com/accountopening?rmcode=AKKI9545"
                                class="btn btn-info" target="_blank">Open now</a>

                        </p>

                        <!--<p class="p-txt3">Track HDFC credit card<br><br>-->
                        <!--    <span>You can also track your credit card if you have your e-reference number or <br>submit only your date of birth and mobile number. </span> <br><br>-->

                        <!--        <a href="https://leads.hdfcbank.com/applications/webforms/apply/cc_track_revamp/index.aspx" class="btn btn-info" target="_blank">Track here</a>-->

                        <!--</p>                    -->
                    </div>
                    <!--<div class="prime-table2">-->
                    <!--    <p class="p-txt3">ICICI Demate Account<br><br>-->
                    <!--        <span>-->
                    <!--         Introducing ICICI direct NEO – ₹0* Brokerage Plan Open Demat & Trading account with ICICI direct<br>Get additional benefits worth ₹ 7,099</span> <br><br> -->

                    <!--         <a href="https://secure.icicidirect.com/accountopening?rmcode=AKKI9545" class="btn btn-info" target="_blank">Open now</a>-->

                    <!--    </p>-->
                    <!--</div>-->
                    {{-- <div class="prime-table3">
                    <p class="p-txt3">₹20<br>
                        <span>Commodity &amp; Currency Derivative <br>(Unlimited per order)</span>
                    </p>
                </div> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- franchise --}}
    <div id="franchise" class="the-franchise section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h4>becoming a successful <em>Climbing franchise</em> partner!</h4>
                        <img src="assets/images/heading-line-dec.png" alt="">
                        <!-- <p>To Be Referred As The Most Favorable Company In Credit Card And Loan Products , Our Objective Is To Became One Of The Leading Market Share Holder In One Of The Most Competitive Market In The World. -->
                        </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-7 align-self-center">
                                    <div class="menu">
                                        <div class="first-thumb active">
                                            <div class="thumb">
                                                <div class="row">
                                                    <img src="{{ 'user/assets/images/franchisee.jpg' }}" alt=""
                                                        style="margin-top: -8rem;">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div>
                                        <div class="thumb">
                                            <div class="row">
                                            </div>
                                        </div>
                                    </div> --}}
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="last-thumb">
                                            <div class="thumb">
                                                <div class="row">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="{{ 'user/assets/images/quote.png' }}"
                                                                    alt="">
                                                                <p>“To Be Referred As The Most Favorable Company In
                                                                    Credit
                                                                    Card And Loan Products , Our Objective Is To Became
                                                                    One
                                                                    Of The Leading Market Share Holder In One Of The
                                                                    Most
                                                                    Competitive Market In
                                                                    The World.”</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <!-- <img src="assets/images/client-image.jpg" alt=""> -->
                                                                <div class="right-content">
                                                                    <!-- <h4>David Martino</h4>
                                                                    <span>CEO of David Company</span> -->
                                                                    <div class="gradient-button">
                                                                        <a href="{{ route('franchisee') }}">Become a
                                                                            Patner</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="{{ 'user/assets/images/quote.png' }}"
                                                                    alt="">
                                                                <p>“CTO, Lorem ipsum dolor sit amet, consectetur
                                                                    adpiscing
                                                                    elit, sed do eismod tempor idunte ut labore et
                                                                    dolore
                                                                    magna aliqua darwin kengan lorem ipsum dolor sit
                                                                    amet,
                                                                    consectetur picing elit
                                                                    massive big blasta.”</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="assets/images/client-image.jpg" alt="">
                                                                <div class="right-content">
                                                                    <h4>Jake H. Nyo</h4>
                                                                    <span>CTO of Digital Company</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="{{ 'user/assets/images/quote.png' }}"
                                                                    alt="">
                                                                <p>“May, Lorem ipsum dolor sit amet, consectetur
                                                                    adpiscing
                                                                    elit, sed do eismod tempor idunte ut labore et
                                                                    dolore
                                                                    magna aliqua darwin kengan lorem ipsum dolor sit
                                                                    amet,
                                                                    consectetur picing elit
                                                                    massive big blasta.”</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="assets/images/client-image.jpg" alt="">
                                                                <div class="right-content">
                                                                    <h4>May C.</h4>
                                                                    <span>Founder of Catherina Co.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="{{ 'user/assets/images/quote.png' }}"
                                                                    alt="">
                                                                <p>“Lorem ipsum dolor sit amet, consectetur adpiscing
                                                                    elit,
                                                                    sed do eismod tempor idunte ut labore et dolore
                                                                    magna
                                                                    aliqua darwin kengan lorem ipsum dolor sit amet,
                                                                    consectetur picing elit massive
                                                                    big blasta.”</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="{{ 'user/assets/images/client-image.jpg' }}"
                                                                    alt="">
                                                                <div class="right-content">
                                                                    <h4>Random Staff</h4>
                                                                    <span>Manager, Digital Company</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="{{ 'user/assets/images/quote.png' }}"
                                                                    alt="">
                                                                <p>“Mark, Lorem ipsum dolor sit amet, consectetur
                                                                    adpiscing
                                                                    elit, sed do eismod tempor idunte ut labore et
                                                                    dolore
                                                                    magna aliqua darwin kengan lorem ipsum dolor sit
                                                                    amet,
                                                                    consectetur picing elit
                                                                    massive big blasta.”</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="{{ 'user/assets/images/client-image.jpg' }}"
                                                                    alt="">
                                                                <div class="right-content">
                                                                    <h4>Mark Am</h4>
                                                                    <span>CTO, Amber Do Company</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- contact us --}}
    {{-- <div id="pricing" class="pricing-tables">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading"> --}}
    {{-- <h4><em>Contact Us</em></h4> --}}
    {{-- <img src="{{ 'user/assets/images/heading-line-dec.png' }}" alt=""> --}}
    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incididunt ut labore et dolore magna.</p> -->
    {{-- </div>
            </div>
            <div class="col-lg-6">
                <div class="pricing-item-regular"> --}}
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d14880.648394564574!2d79.08746744298911!3d21.18571864392661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d21.1795312!2d79.075803!4m5!1s0x3bd4c182b5f4a3e7%3A0x76e448dadbd741f5!2sclimbing%20management%20services!3m2!1d21.1919516!2d79.0796484!5e0!3m2!1sen!2sin!4v1640328102630!5m2!1sen!2sin"
                            width="850" height="450" allowfullscreen="" loading="lazy"></iframe> -->
    {{-- <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.046012271062!2d79.08570482506319!3d21.19033104330871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c182b5f4a3e7%3A0x76e448dadbd741f5!2sClimbing%20Mananagement%20Services!5e0!3m2!1sen!2sin!4v1640328852582!5m2!1sen!2sin"
                        width="650" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}

    {{-- </div>
            </div>
            <div class="col-lg-4">
                <div class="pricing-item-pro"> --}}
    <!-- <span class="price">$25</span> -->
    {{-- &nbsp;&nbsp;<h4>Contact Us</h4>
                    <div class="icon">
                        <img src="{{ 'user/assets/images/pricing-table-01.png' }}" alt="">
                    </div>
                    <ul>
                        <li>For More Details</li>
                        <li>Contact Us</li>
                    </ul>
                    <div class="border-button">
                        <a href="{{ route('contactUs.contactPage') }}">Contact Now</a>
                    </div>
                </div>
            </div> --}}
    <!-- <div class="col-lg-4">
                    <div class="pricing-item-regular">
                        <span class="price">$66</span>
                        <h4>Premium Plan App</h4>
                        <div class="icon">
                            <img src="assets/images/pricing-table-01.png" alt="">
                        </div>
                        <ul>
                            <li>Lorem Ipsum Dolores</li>
                            <li>120 TB of Storage</li>
                            <li>Life-time Support</li>
                            <li>Premium Add-Ons</li>
                            <li>Fastest Network</li>
                            <li>More Options</li>
                        </ul>
                        <div class="border-button">
                            <a href="#">Purchase This Plan Now</a>
                        </div>
                    </div>
                </div> -->
    {{-- </div>
    </div>
</div> --}}

    @if (\Session::has('form_send'))
        <div class="alert">
            <ul>
                <li>{!! \Session::get('form_send') !!}</li>
            </ul>
        </div>
    @endif

    @include('include.footer')
