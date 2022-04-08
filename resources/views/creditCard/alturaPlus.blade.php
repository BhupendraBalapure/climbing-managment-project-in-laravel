@include('include.header')

<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="{{ asset('user/assets/images/logo.png') }}" alt="Chain App Dev">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section">
                            <a href="{{ '/' }}" class="active">Home</a>
                        </li>
                        </li>
                        <li class="scroll-to-section">
                            <a href="{{ route('contactUs.contactPage') }}">Contact</a>
                        </li>
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

                </style>
                <div class="item-pro">
                    <!-- <h4>Contact Us</h4> -->
                    <h1>
                        <span class="txt-rotate" style="font-size: 1.8rem" data-period="2000"
                            data-rotate='[ "ALTURA PLUS CREDIT CARD", "ALTURA PLUS CREDIT CARD", "ALTURA PLUS CREDIT CARD", "ALTURA PLUS CREDIT CARD", "ALTURA PLUS CREDIT CARD" ]'></span>
                    </h1>
                    <div>
                        <img src="{{ asset('assets/img/creditCard/au-altura-plus-credit-card.png') }}"
                            alt="altura plus-Card" style="width: 50%;height: 50%;">
                    </div><br>
                    <ul style="text-align:justify;color: #594671;font-size: 0.8em;">
                        <li>
                            Use your AU Bank Credit Card to make quick, secure & easy payments by just tapping the card
                            and paying at participating merchants without entering Credit Card PIN for amounts up to
                            Rs.5000.
                        </li> <br>
                        <li> 2X Reward Points (i.e. 2 Reward Points per Rs.100 retail spends) for all your online
                            transactions.
                        </li><br>
                        <li>1% Fuel Surcharge Waiver for fuel transactions done between Rs.400 and Rs. 5,000, across all
                            fuel stations in the country (Maximum Rs.150 per statement cycle).
                        </li><br>
                        <li>
                            Convert your transactions worth Rs.2,000 or more into easy EMI options on select tenure of
                            your choice. Simply call our Customer Care helpline to book your XpressEMI.
                        </li><br>
                        <li>
                            In an unfortunate event of loss of Credit Card, you carry zero liability on any fraudulent
                            transactions made with card after reporting the loss to the bank.
                        </li>

                    </ul>

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
                            <form action="{{ route('create.alturaPlus') }}" id="form" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="card">
                                    {{-- <div class="card-header">Step 2: Status & Stock</div> --}}

                                    <div class="card-body">

                                        @if ($errors->any())
                                            <div class="alert alert-danger"> 
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <div class="col p-3">
                                            <input type="text" style="text-align: center" class="form-control"
                                                name="img_name" value="Altura-Plus Credit Card" readonly>
                                        </div>

                                        <div class="row">

                                            <div class="col p-3">
                                                <label for="description">Full Name</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    required />
                                                <div>
                                                    <label for="name">Passport Photo</label>
                                                    <input type="file" name="photo" class="form-control" id="" />
                                                    <span class="text-danger error-text product_image_error"></span>
                                                    <div class="img-photo"></div>
                                                </div>
                                            </div>

                                            <div class="col p-3">
                                                <label for="description">Mobile</label>
                                                <input type="text" class="form-control" id="mobile"
                                                    pattern="[789][0-9]{9}" maxlength="10" name="mobile" required />
                                                <div class="">
                                                    <label for="description">Email</label>
                                                    <input type="text" class="form-control" id="email" name="email"
                                                        required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col p-3">
                                                <label for="description">Do you have any Loan/Finance/Credit
                                                    Card
                                                    ?</label><br />
                                                <label class="radio-inline"><input type="radio" name="loan"
                                                        class="form-check-input" value="yes" required>
                                                    Yes</label>
                                                <label class="radio-inline"><input type="radio" name="loan"
                                                        class="form-check-input" value="no" required>
                                                    No</label>
                                                <div>
                                                    <label for="name">Statment</label>
                                                    <input type="file" name="statment" class="form-control" id="" />
                                                    <span class="text-danger error-text product_image_error"></span>
                                                    <div class="img-statment"></div>
                                                </div>

                                            </div>
                                            <div class="col p-3">
                                                <label for="description">PAN</label>
                                                <input type="text" oninput="this.value = this.value.toUpperCase()"
                                                    class="form-control" id="pan" name="pan"
                                                    pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" required />
                                                <div>
                                                    <label for="name">Upload Pan</label><span> (Optional)</span>
                                                    <input type="file" name="pan_file_image" class="form-control"
                                                        id="" />
                                                    <span class="text-danger error-text product_image_error"></span>
                                                    <div class="img-pan_file_image"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col p-3">
                                                <label for="description">DOB</label>
                                                <input type="date" class="form-control" id="dob" name="dob"
                                                    required />
                                                <div>
                                                    <label for="name">Aadhaar Card</label>
                                                    <input type="file" name="aadhaar" class="form-control" id="" />
                                                    <span class="text-danger error-text product_image_error"></span>
                                                    <div class="img-aadhaar"></div>
                                                </div>
                                                <div>
                                                    <label>Company Name </label>
                                                    <input type="text" placholder="Enter your Company name"
                                                        class="form-control" name="company_name" required>
                                                </div>
                                            </div>

                                            <div class="col p-3">
                                                <label for="">Source of Income</label><br>
                                                <label class="radio-inline"><input type="radio"
                                                        class="form-check-input" name="income_source" value="salaried"
                                                        required>
                                                    Salaried</label><br>
                                                <label class="radio-inline"><input type="radio"
                                                        class="form-check-input" name="income_source"
                                                        value="professional" required>
                                                    Self-Employed Professional</label>
                                                <label class="radio-inline"><input type="radio"
                                                        class="form-check-input" name="income_source" value="business"
                                                        required>
                                                    Self-Employed Business</label>
                                                <div>
                                                    <label for="name">Income Proof <span>(like ITR, Salary Slip)</span>
                                                    </label>
                                                    <input type="file" name="income_proof" class="form-control"
                                                        id="" />
                                                    <span class="text-danger error-text product_image_error"></span>
                                                    <div class="img-income_proof"></div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col p-3">
                                                <textarea style="background: transparent;" required name="city" class="form-control" placeholder="Company Address"
                                                    id="" cols="" rows="5" required></textarea>
                                                <div>
                                                    <label>Company Pincode</label>
                                                    <input type="text" class="form-control" name="pincode"
                                                        pattern="[1-9][0-9]{5}" maxlength="6" required>
                                                </div>
                                            </div>
                                            <div class="col p-3">
                                                <textarea name="homeaddress" placeholder="Residential Address" class="form-control" id="" cols="10" rows="5"
                                                    required></textarea>
                                                <div>
                                                    <label>Residential Pincode</label>
                                                    <input type="text" class="form-control" name="homepincode"
                                                        pattern="[1-9][0-9]{5}" maxlength="6" required>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-md-6 text-left">
                                                {{-- <a href="{{ route('personal-loan.create.step.one') }}"
                                            class="btn btn-danger pull-right">Previous</a> --}}
                                            </div>
                                            {{-- <div class="col-md-6 text-right">
                                                <button type="submit" class="btn btn-primary">Continue</button>
                                            </div> --}}
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-info"
                                                    style="background-color: #36c2f8b0">Submit</button>
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

    <script src="{{ asset('jquery.min.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        $(function() {

            $('#form').on('submit', function(e) {
                e.preventDefault();

                var form = this;

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: $(form).attr('action'),
                    method: $(form).attr('method'),
                    data: new FormData(form),
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    beforeSend: function() {
                        $(form).find('span.error-text').text('');
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.status == 400) {
                            $.each(response.error, function(prefix, val) {
                                $(form).find('span.' + prefix + '_error').text(val[0]);
                            });
                        } else {
                            $(form)[0].reset();
                            $('#success_message').addClass('alert alert-success')
                            $('#success_message').text(response.message)
                            alert(response.message);
                            window.location.href = '/';
                        }
                    }
                });
            });

                        // aadhaar
            $('input[type="file"][name="aadhaar"]').val('');
            //Image preview
            $('input[type="file"][name="aadhaar"]').on('change', function() {
                var img_path = $(this)[0].value;
                var img_holder = $('.img-aadhaar');
                var extension = img_path.substring(img_path.lastIndexOf('.') + 1).toLowerCase();

                if (extension == 'jpeg' || extension == 'jpg' || extension == 'png') {
                    if (typeof(FileReader) != 'undefined') {
                        img_holder.empty();
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('<img/>', {
                                'src': e.target.result,
                                'class': 'img-fluid',
                                'style': 'max-width:100px;margin-bottom:10px;'
                            }).appendTo(img_holder);
                        }
                        img_holder.show();
                        reader.readAsDataURL($(this)[0].files[0]);
                    } else {
                        $(img_holder).html('This browser does not support FileReader');
                    }
                } else {
                    $(img_holder).empty();
                }
            });

            // pan_file_image
            $('input[type="file"][name="pan_file_image"]').val('');
            //Image preview
            $('input[type="file"][name="pan_file_image"]').on('change', function() {
                var img_path = $(this)[0].value;
                var img_holder = $('.img-pan_file_image');
                var extension = img_path.substring(img_path.lastIndexOf('.') + 1).toLowerCase();

                if (extension == 'jpeg' || extension == 'jpg' || extension == 'png') {
                    if (typeof(FileReader) != 'undefined') {
                        img_holder.empty();
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('<img/>', {
                                'src': e.target.result,
                                'class': 'img-fluid',
                                'style': 'max-width:100px;margin-bottom:10px;'
                            }).appendTo(img_holder);
                        }
                        img_holder.show();
                        reader.readAsDataURL($(this)[0].files[0]);
                    } else {
                        $(img_holder).html('This browser does not support FileReader');
                    }
                } else {
                    $(img_holder).empty();
                }
            });

            // income_prof
            $('input[type="file"][name="income_proof"]').val('');
            //Image preview
            $('input[type="file"][name="income_proof"]').on('change', function() {
                var img_path = $(this)[0].value;
                var img_holder = $('.img-income_proof');
                var extension = img_path.substring(img_path.lastIndexOf('.') + 1).toLowerCase();

                if (extension == 'jpeg' || extension == 'jpg' || extension == 'png') {
                    if (typeof(FileReader) != 'undefined') {
                        img_holder.empty();
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('<img/>', {
                                'src': e.target.result,
                                'class': 'img-fluid',
                                'style': 'max-width:100px;margin-bottom:10px;'
                            }).appendTo(img_holder);
                        }
                        img_holder.show();
                        reader.readAsDataURL($(this)[0].files[0]);
                    } else {
                        $(img_holder).html('This browser does not support FileReader');
                    }
                } else {
                    $(img_holder).empty();
                }
            });

            // photo
            $('input[type="file"][name="photo"]').val('');
            //Image preview
            $('input[type="file"][name="photo"]').on('change', function() {
                var img_path = $(this)[0].value;
                var img_holder = $('.img-photo');
                var extension = img_path.substring(img_path.lastIndexOf('.') + 1).toLowerCase();

                if (extension == 'jpeg' || extension == 'jpg' || extension == 'png') {
                    if (typeof(FileReader) != 'undefined') {
                        img_holder.empty();
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('<img/>', {
                                'src': e.target.result,
                                'class': 'img-fluid',
                                'style': 'max-width:100px;margin-bottom:10px;'
                            }).appendTo(img_holder);
                        }
                        img_holder.show();
                        reader.readAsDataURL($(this)[0].files[0]);
                    } else {
                        $(img_holder).html('This browser does not support FileReader');
                    }
                } else {
                    $(img_holder).empty();
                }
            });

            // statment
            $('input[type="file"][name="statment"]').val('');
            //Image preview
            $('input[type="file"][name="statment"]').on('change', function() {
                var img_path = $(this)[0].value;
                var img_holder = $('.img-statment');
                var extension = img_path.substring(img_path.lastIndexOf('.') + 1).toLowerCase();

                if (extension == 'jpeg' || extension == 'jpg' || extension == 'png') {
                    if (typeof(FileReader) != 'undefined') {
                        img_holder.empty();
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('<img/>', {
                                'src': e.target.result,
                                'class': 'img-fluid',
                                'style': 'max-width:100px;margin-bottom:10px;'
                            }).appendTo(img_holder);
                        }
                        img_holder.show();
                        reader.readAsDataURL($(this)[0].files[0]);
                    } else {
                        $(img_holder).html('This browser does not support FileReader');
                    }
                } else {
                    $(img_holder).empty();
                }
            });

        })
    </script>
</section>
@include('include.footer')
