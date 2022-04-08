@extends('businessloan.layouts.default')
@include('include.header')

<style>
    .card-header {
        font-family: Arial, Helvetica, sans-serif;
    }

    div {
        font-family: Arial, Helvetica, sans-serif;
    }

    h1,
    h2 {
        margin: 40px auto;
        /* text-shadow: 20px 0px 20px rgb(186 206 249); */
        font-family: Arial, Helvetica, sans-serif;
        font-size: 4rem;
    }

    .column {
        float: left;
        width: 50%;
        padding: 0 10px;
    }

    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
        }
    }

</style>

<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ '/' }}" class="logo">
                        <img src="{{ asset('user/assets/images/logo.png') }}" alt="Chain App Dev">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{ '/' }}" class="active">Home</a></li>
                                               </li>
                        {{-- <li class="scroll-to-section"><a href="#Web">Web Devlopment</a></li>
                        <li class="scroll-to-section"><a href="#franchise">franchisee</a></li> --}}
                        <li class="scroll-to-section"><a href="{{ route('contactUs.contactPage') }}">Contact</a></li>
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
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12 mt-4">
                <div class="mt-4 p-4">
                    <div class="mt-4" style="border-radius: 50px;">
                        <div class="mt-4 p-4">
                            <div class="text-center">
                                <h2>Application Form</h2>
                            </div>
                            <form action="{{ route('businessloan.create.step.three.post') }}" id="form"
                                enctype="multipart/form-data" method="post">
                                {{ csrf_field() }}
                                <div class="card mt-4">
                                    <div class="card-header">Upload Documents</div>
                                    <div class="card-body">
                                        <div class="column">
                                            <div class="p-3">
                                                <label for="name">Passport Photo</label>
                                                <input type="file" name="photo" class="form-control" id="" />
                                                <span class="text-danger error-text product_image_error"></span>
                                                <div class="img-photo"></div>
                                            </div>
                                            <div class="p-3">
                                                <label for="name">Aadhaar Card</label>
                                                <input type="file" name="aadhaar" class="form-control" id="" />
                                                <span class="text-danger error-text product_image_error"></span>
                                                <div class="img-aadhaar"></div>
                                            </div>
                                            <div class="p-3">
                                                <label for="name">Pan Card</label>
                                                <input type="file" name="pan_file_image" class="form-control" id="" />
                                                <span class="text-danger error-text product_image_error"></span>
                                                <div class="img-pan_file_image"></div>
                                            </div>
                                        </div>
                                        <div class="column">
                                            <div class="p-3">
                                                <label for="name">Income Proof <span>(like ITR, Salary Slip)</span> </label>
                                                <input type="file" name="income_proof" class="form-control" id="" />
                                                <span class="text-danger error-text product_image_error"></span>
                                                <div class="img-income_proof"></div>
                                            </div>
                                            <div class="p-3">
                                                <label for="name">Statment</label>
                                                <input type="file" name="statment" class="form-control" id="" />
                                                <span class="text-danger error-text product_image_error"></span>
                                                <div class="img-statment"></div>
                                            </div>
                                            {{-- <div class="p-3">
                                                <label for="name">Other statment</label>
                                                <input type="file" name="bill" class="form-control" id="" />
                                                <span class="text-danger error-text product_image_error"></span>
                                                <div class="img-bill"></div>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-center gap-2">
                                            <button type="submit" class="btn btn-info btn-md">Submit</button>
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

    {{-- <script type="text/javascript">
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily =
            '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#292b2c';


        // Area Chart Example
        var ctx = document.getElementById("myAreaChart");
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: cData.label,
                datasets: [{
                    label: "Users Count",
                    lineTension: 0.3,
                    backgroundColor: "rgba(2,117,216,0.2)",
                    borderColor: "rgba(2,117,216,1)",
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(2,117,216,1)",
                    pointBorderColor: "rgba(255,255,255,0.8)",
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(2,117,216,1)",
                    pointHitRadius: 50,
                    pointBorderWidth: 2,
                    data: cData.data,
                }],
            },
            options: {
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'date'
                        },
                        gridLines: {
                            display: false
                        },
                        ticks: {
                            maxTicksLimit: 7
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            min: 0,
                            max: cData.count,
                            maxTicksLimit: 5
                        },
                        gridLines: {
                            color: "rgba(0, 0, 0, .125)",
                        }
                    }],
                },
                legend: {
                    display: false
                }
            }
        });

        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily =
            '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#292b2c';

        // Pie Chart Example
        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: cData.total,
                datasets: [{
                    data: cData.total_count,
                    backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
                }],
            },
        });
    </script> --}}

@include('include.footer')