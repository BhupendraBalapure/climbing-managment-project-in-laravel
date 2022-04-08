
@extends('businessloan.layouts.default')
@include('include.header')

<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="{{asset('user/assets/images/logo.png')}}" alt="Chain App Dev">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{('/')}}" class="active">Home</a></li>
                        {{-- <li> <div class="nav-item dropdown scroll-to-section" style="margin-top: -7px;">
                            <a href="#services" class="nav-link dropdown-toggle" data-toggle="dropdown">services</a>
                            <div class="dropdown-menu">
                                <a href="{{route('creditCard.create-step-one')}}" class="dropdown-item">Credit card</a>
                                <a href="{{route('personalLoan.create-step-one')}}" class="dropdown-item">Personal Loan</a>
                                <a href="{{route('businessloan.create-step-one')}}" class="dropdown-item">Business Loan</a>

                            </div>
                        </div>
                    </li>                                --}}
                           
                    </li>
                        {{-- <li class="scroll-to-section"><a href="#Web">Web Devlopment</a></li>
                        <li class="scroll-to-section"><a href="#franchise">franchisee</a></li> --}}
                        <li class="scroll-to-section"><a href="{{route('contactUs.contactPage')}}">Contact</a></li>
                        <li class="scroll-to-section"><a href="#newsletter"></a></li>
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
  
<section>
    <div class="bgimg">
        <div class="row">
            <img src="" alt="">
            <div class="col-md-5">

                <style>
                    .item-pro {
                        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.07);
                        border-radius: 50px;
                        padding: 120px 30px;
                        text-align: center;
                        position: relative;
                        z-index: 1;
                        overflow: hidden;
                        margin-top: 6rem;
                    }
                    
                    .item-pro:before {
                        position: absolute;
                        top: 0;
                        left: 0;
                        background-image: url('../user/assets//images/pro-table-top.png');
                        z-index: 0;
                        content: '';
                        width: 281px;
                        height: 251px;
                    }
                    
                    .item-pro:after {
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        /* background-repeat: no-repeat; */
                        background-size: cover;
                        background-image: url('../user/assets/images/pro-table-bottom.png');
                        z-index: 0;
                        content: '';
                        width: 100%;
                        height: 201px;
                    }
                    
                    .bgimg {
                        height: 100%;
                        /* Center and scale the image nicely */
                        background-position: left;
                        background-repeat: no-repeat;
                        background-size: cover;
                        padding: 4%;
                    }
                    
                    h1,
                    h2 {
                        margin: 40px auto;
                        text-shadow: 20px 0px 10px rgb(186 206 249);
                        font-family: Arial, Helvetica, sans-serif;
                        font-size: 2rem;
                    }
                    
                    .ex2 {
                        color: #594671;
                        font-size: 1em;
                        font-family: "Verdana Pro", Verdana;
                    }
                    
                    /* a.ex2:hover,
                    a.ex2:active {
                        font-size: 130%;
                        font-family: "Verdana Pro", Verdana;
                        background-image: linear-gradient(45deg, #f3ec78, #af4261);
                        color: #594671;
                    } */
                    
                     @media(max-width:450px){
                     
                     section   .bgimg .row .col-md-5 {
                            display: none;
                        }

                    }
                    
                </style>
                <div class="item-pro">
                    <!-- <h4>Contact Us</h4> -->
                    <h1>
                        <span class="txt-rotate" data-period="2000" style="font-size: 1.8rem" data-rotate='[ "Personal Loan", "Personal Loan", "Personal Loan", "Personal Loan", "Personal Loan" ]'></span>
                    </h1>
                    <p><a class="" style="color: #594671;font-size: 0.8em;
                        ">A cash shortfall can strike anytime. Thankfully, a personal loan can
                        meet any financial deficit easily. An individual who is above 18 years of age and has a regular
                        income is eligible for a personal loan in India. All banks and non-banking
                        financial companies operating in India advance such loans.</a></p>


                </div>
                <style>

                </style>
                <script>
                    var TxtRotate = function(el, toRotate, period) {
                        this.toRotate = toRotate;
                        this.el = el;
                        this.loopNum = 0;
                        this.period = parseInt(period, 10) || 2000;
                        this.txt = '';
                        this.tick();
                        this.isDeleting = false;
                    };

                    TxtRotate.prototype.tick = function() {
                        var i = this.loopNum % this.toRotate.length;
                        var fullTxt = this.toRotate[i];

                        if (this.isDeleting) {
                            this.txt = fullTxt.substring(0, this.txt.length - 1);
                        } else {
                            this.txt = fullTxt.substring(0, this.txt.length + 1);
                        }

                        this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

                        var that = this;
                        var delta = 300 - Math.random() * 100;

                        if (this.isDeleting) {
                            delta /= 2;
                        }

                        if (!this.isDeleting && this.txt === fullTxt) {
                            delta = this.period;
                            this.isDeleting = true;
                        } else if (this.isDeleting && this.txt === '') {
                            this.isDeleting = false;
                            this.loopNum++;
                            delta = 500;
                        }

                        setTimeout(function() {
                            that.tick();
                        }, delta);
                    };

                    window.onload = function() {
                        var elements = document.getElementsByClassName('txt-rotate');
                        for (var i = 0; i < elements.length; i++) {
                            var toRotate = elements[i].getAttribute('data-rotate');
                            var period = elements[i].getAttribute('data-period');
                            if (toRotate) {
                                new TxtRotate(elements[i], JSON.parse(toRotate), period);
                            }
                        }
                        // INJECT CSS
                        var css = document.createElement("style");
                        css.type = "text/css";
                        css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
                        document.body.appendChild(css);
                    };
                </script>

            </div>
            <div class="col-md-7 ">
                <div class="cont " style="margin-top: 7rem; ">
                    <div class="card " style="border-radius: 50px;">
                        <div class="card-body ">
                            <div class="card-header ">
                                <h2 style="text-align:center;">Application Form</h2>
                            </div>
                            <form action="{{ route('personalLoan.create.step.one.post') }}" method="POST">
                                @csrf
                  
                                <div class="card">
                                    {{-- <div class="card-header">Step 1: Basic Info</div> --}}
                  
                                    <div class="card-body">

                                        @if (Session::has('msgSend'))
                                        <div class="alert alert-success" role="alert">
                                            {{Session::get('msgSend')}}
                                        </div>       
                                        @endif
                  
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                  
                                            <div class="mb-3">
                                                <label for="name"> Name:</label>
                                                <input type="text" value="{{ $personal_loan->name ?? '' }}" class="form-control" id="name"  name="name" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="mobile">Mobile:</label>
                                                <input type="text"  value="{{{ $personal_loan->mobile ?? '' }}}" class="form-control" pattern="[789][0-9]{9}" maxlength="10" id="mobile" name="mobile"required/>
                                            </div>
                                    </div>
                  
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-info btn-lg">Continue</button>
                                       </div>
                                </div>
                            </form>             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('include.footer')