<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Climbing | Executive Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: "Lato", sans-serif;
        }

        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: black;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 16px;
            text-decoration: none;
        }

        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }

        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: left;
            }

            div.content {
                margin-left: 0;
            }
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }

    </style>
</head>

<body>


    <style>
        span {
            color: red;
        }

        label {
            font-size: 16px;
        }

        .breadcrumb {
            display: flex;
            flex-wrap: wrap;
            padding: 0 0;
            list-style: none;
            background-color: #e9ecef;
            border-radius: 0.25rem;
        }

    </style>

    {{-- start nav --}}
    {{-- <nav class="sb-topnav navbar navbar-expand fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('/') }}">Climbing Management</a>
    </nav> --}}
    {{-- end nav --}}


    {{-- start sidebar --}}
    <div class="sidebar" style="margin-top: 0rem;">
        <a class="navbar-brand" href="{{ url('/') }}">Climbing <br> Management</a>
        <hr style="color: #e9ecef">
        <a class="nav-link" href="{{ route('executive.dashboard') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Dashboard
        </a>
        <a class="nav-link" href="{{ route('executive.customerData') }}">
            <div class="sb-nav-link-icon"><i class="fa fa-address-book"></i></div>
            Login data show
        </a>
        <a class="nav-link" href="{{ route('executive.executive_datewise_data') }}">
            <div class="sb-nav-link-icon"><i class="fa fa-address-book"></i></div>
            Report data-wise
        </a>
        <a class="nav-link" href="{{ route('executive.wh_executive_show') }}">
            <div class="sb-nav-link-icon"><i class="fa fa-address-book"></i></div>
            Data
        </a>
        <!-- <a class="dropdown-item" href="">Profile</a>
        <a class="dropdown-item" href="#">Settings</a> -->
        <a>
            <form method="POST" action="{{ url('logout') }}">
                {{ csrf_field() }}
                <button class="btn" style="color: aliceblue;" type="submit">Logout</button>
            </form>
        </a>
        <div class="dropdown-divider"></div>
    </div>
    {{-- end sidebar --}}

    <main>
        <div class="container">
            <div class="wrapper">
                <div class="container p-3">
                    {{-- <h1 class="mt-4"></h1> --}}
                    <div style="width:85%" class="container">
                        <ol class="breadcrumb mb-4 p-3">
                            <li class="breadcrumb-item active">
                                <h4>Dashboard</h4>
                            </li>
                        </ol>
                    </div>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            {{-- <div id="success_message"></div> --}}
                            <form action="{{ route('create.executive') }}" method="post" id="form"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="card mb-4 p-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="e_code">Executive Code</label>
                                                <input type="text" style="font-weight:bold;" name="e_code"
                                                    value="{{ auth()->user()->e_code }}" class="form-control" id=""
                                                    readonly />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="executive_name">Executive Name</label>
                                                <input type="text" style="font-weight:bold;" name="executive_name"
                                                    value="{{ auth()->user()->name }}" class="form-control" id=""
                                                    readonly />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="t_l_code">Team Leader Code</label>
                                                <input name="t_l_code" style="font-weight:bold;"
                                                    value="{{ auth()->user()->t_l_code }}" class="form-control"
                                                    id="" readonly />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 offset-lg-2">
                                        <div class="card mb-6">
                                            <div class="card-header">
                                                <h3>Add Customer</h3>
                                            </div>
                                            <div class="card-body">
                                                @if (Session::has('success'))
                                                    <div class="alert alert-success" role="alert">
                                                        {{ Session::get('success') }}
                                                    </div>
                                                @endif

                                                <div class="mb-3">
                                                    <label for="name">Full name</label><span>*</span>
                                                    <input type="text" name="full_name" class="form-control"
                                                        value="{{ old('full_name') }}" id="" required />
                                                    <span class="text-danger error-text product_image_error"></span>

                                                </div>
                                                <div class="mb-3">
                                                    <label for="name">Email Id</label><span>*</span>
                                                    <input type="email" name="email" class="form-control"
                                                        value="{{ old('email') }}" id="" required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="name">Phone</label><span>*</span>
                                                    <input type="text" name="phone" class="form-control"
                                                        value="{{ old('phone') }}" pattern="[789][0-9]{9}"
                                                        maxlength="10" id="" required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="name">Occupation</label><span>*</span>
                                                    <input type="text" name="occupation" class="form-control"
                                                        value="{{ old('occupation') }}" id="" required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="name">Monthly Income</label><span>*</span>
                                                    <input type="text" name="income" class="form-control"
                                                        value="{{ old('income') }}" id="" required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="name">Remark</label><span>*</span>
                                                    <textarea name="remark" class="form-control" id="" value="{{ old('remark') }}" cols="60" rows="5"
                                                        required></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="name">Aadhaar Front-Side</label>
                                                    <input type="file" name="adher_front" class="form-control"
                                                        value="{{ old('adher_front') }}" id="" />
                                                    <span class="text-danger error-text product_image_error"></span>
                                                    <div class="img-holder"></div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="name">Aadhaar Back-Side</label>
                                                    <input type="file" name="adher_back" class="form-control"
                                                        value="{{ old('adher_back') }}" id="" />
                                                    <div class="img-adher_back"></div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="name">Pan Card</label>
                                                    <input type="file" name="pan" class="form-control"
                                                        value="{{ old('pan') }}" id="" />
                                                    <div class="img-pan"></div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="name">Income Proof</label>
                                                    <input type="file" name="income_prof" class="form-control"
                                                        value="{{ old('income_prof') }}" id="" />
                                                    <div class="img-income_prof"></div>

                                                </div>
                                                <div class="mb-3">
                                                    <label for="name">Passport Photo</label>
                                                    <input type="file" name="photo" class="form-control"
                                                        value="{{ old('photo') }}" id="" />
                                                    <div class="img-photo"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="name">Statment</label>
                                                    <input type="file" name="statment" class="form-control"
                                                        value="{{ old('statment') }}" id="" />
                                                    <div class="img-statment"></div>

                                                </div>
                                                <div class="mb-3">
                                                    <label for="name">Other statment</label>
                                                    <input type="file" name="bill" class="form-control"
                                                        value="{{ old('bill') }}" id="" />
                                                    <div class="img-bill"></div>

                                                </div>
                                                <!-- <div class="d-grid gap-2 col-6 mx-auto">
                                                <input type="submit" value="Submit" id="saveform" name="submit"
                                                    class="btn btn-lg btn-success">
                                            </div> -->

                                                <button type="submit" class="button"
                                                    onclick="this.classList.toggle('button--loading')">
                                                    <span class="button__text">Save</span>
                                                </button>

                                                <style>
                                                    .button {
                                                        position: relative;
                                                        padding: 8px 16px;
                                                        background: #009579;
                                                        border: none;
                                                        outline: none;
                                                        border-radius: 2px;
                                                        cursor: pointer;
                                                    }

                                                    .button:active {
                                                        background: #007a63;
                                                    }

                                                    .button__text {
                                                        font: bold 20px "Quicksand", san-serif;
                                                        color: #ffffff;
                                                        transition: all 0.2s;
                                                    }

                                                    .button--loading .button__text {
                                                        visibility: hidden;
                                                        opacity: 0;
                                                    }

                                                    .button--loading::after {
                                                        content: "";
                                                        position: absolute;
                                                        width: 16px;
                                                        height: 16px;
                                                        top: 0;
                                                        left: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        margin: auto;
                                                        border: 4px solid transparent;
                                                        border-top-color: #ffffff;
                                                        border-radius: 50%;
                                                        animation: button-loading-spinner 1s ease infinite;
                                                    }

                                                    @keyframes button-loading-spinner {
                                                        from {
                                                            transform: rotate(0turn);
                                                        }

                                                        to {
                                                            transform: rotate(1turn);
                                                        }
                                                    }

                                                </style>
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
    </main>

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
                        // console.log(response);
                        if (response.status == 400) {
                            $.each(response.error, function(prefix, val) {
                                $(form).find('span.' + prefix + '_error').text(val[0]);
                            });
                        } else {
                            $(form)[0].reset();
                            $('#success_message').addClass('alert alert-success')
                            $('#success_message').text(response.message)
                            $('.img-holder').hide();
                            $('.img-adher_back').hide();
                            $('.img-pan').hide();
                            $('.img-income_prof').hide();
                            $('.img-photo').hide();
                            $('.img-statment').hide();
                            $('.img-bill').hide();
                            alert(response.message);
                        }
                    }
                });
            });

            // adher_front
            //Reset input file
            $('input[type="file"][name="adher_front"]').val('');
            //Image preview
            $('input[type="file"][name="adher_front"]').on('change', function() {
                var img_path = $(this)[0].value;
                var img_holder = $('.img-holder');
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

            // adher_back
            $('input[type="file"][name="adher_back"]').val('');
            //Image preview
            $('input[type="file"][name="adher_back"]').on('change', function() {
                var img_path = $(this)[0].value;
                var img_holder = $('.img-adher_back');
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

            // pan
            $('input[type="file"][name="pan"]').val('');
            //Image preview
            $('input[type="file"][name="pan"]').on('change', function() {
                var img_path = $(this)[0].value;
                var img_holder = $('.img-pan');
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
            $('input[type="file"][name="income_prof"]').val('');
            //Image preview
            $('input[type="file"][name="income_prof"]').on('change', function() {
                var img_path = $(this)[0].value;
                var img_holder = $('.img-income_prof');
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

            // bill
            $('input[type="file"][name="bill"]').val('');
            //Image preview
            $('input[type="file"][name="bill"]').on('change', function() {
                var img_path = $(this)[0].value;
                var img_holder = $('.img-bill');
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
