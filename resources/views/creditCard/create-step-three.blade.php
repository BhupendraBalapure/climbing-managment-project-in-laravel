
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
                        font-size: 4rem;
                    }
                    
                    .ex2 {
                        color: #594671;
                        font-size: 1em;
                        font-family: "Verdana Pro", Verdana;
                    }
                    
                    a.ex2:hover,
                    a.ex2:active {
                        font-size: 130%;
                        font-family: "Verdana Pro", Verdana;
                        /* background-image: linear-gradient(45deg, #f3ec78, #af4261); */
                        color: #594671;
                    }
                </style>
                <div class="item-pro">
                    <!-- <h4>Contact Us</h4> -->
                        
                    <h1>
                        <span class="txt-rotate" data-period="2000" data-rotate='[ "BUSINESS LOAN", "BUSINESS LOAN", "BUSINESS LOAN", "BUSINESS LOAN", "BUSINESS LOAN" ]'></span>
                    </h1>
                    <p><a class="" style="color: #594671;font-size: 0.8em;">A business loan is a loan specifically intended for business purposes. As with all loans, it involves the creation of a debt, which will be repaid with added interest. There are a number of different types of business loans, including bank loans, mezzanine financing, asset-based financing, invoice financing, microloans, business cash advances and cash flow loans</a></p>


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
                <div class="cont " style="margin-top: 6rem; ">
                    <div class="card" style="border-radius: 50px;">
                        <div class="card-body ">
                            <div class="card-header ">
                                <h2 style="margin-left: 20rem;">Apply Form</h2>
                            </div>
                            <form action="{{ route('creditCard.create.step.three.post') }}" method="post" >
                                {{ csrf_field() }}
                                <div class="card">
                                    {{-- <div class="card-header">Step 3: business Review Details</div> --}}
                   
                                    {{-- <div class="card-body">
                                              <div class="col p-3">
                                                <label>{{{$personal_loan->name}}}</label>
                                                <input type="text" class="form-control" name="name" {{$personal_loan->name}}>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col p-3">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="email" {{$personal_loan->email}}>
                                            </div>
                                            <div class="col p-3">
                                                <div class="col p-3">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" name="mobile" {{$personal_loan->mobile}}>
                                                </div>
                                            </div>
                                        <div class="row">
                                            <div class="col p-3">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="pan" {{$personal_loan->pan}}>
                                            </div>
                                            <div class="col p-3">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="dob" {{$personal_loan->dob}}>
                                            </div>
                
                                            <div class="col p-3">
                                                <label>Do you have any Loan/Finance/Credit Card ? </label>
                                                <div class="form-check">
                                                    <input type="text" {{$personal_loan->loan ? 'Yes' : 'No'}} name="loan">
                                                </div>                                
                                            </div>
                                        </div>
                                    
                                    </div> --}}
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-md-6 text-left">
                                                {{-- <a href="{{ route('personal-loan.create.step.two') }}" class="btn btn-danger pull-right">Previous</a> --}}
                                            </div>
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-info">Submit</button>
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
</section>
@include('include.footer')