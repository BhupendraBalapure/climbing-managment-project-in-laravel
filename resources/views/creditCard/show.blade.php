@extends('layouts.admin')

@section('title', 'Page Admin')

@section('sidebar')

    @parent

@endsection

@section('content')

    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        <div class="row">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1">
                        Credit Card
                        {{-- v class="card-body"> --}}
                        <form action="{{ route('creditexport') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- <input type="file" name="file" class="form-control"> --}}
                            <br>
                            {{-- <button class="btn btn-success">Import User Data</button> --}}
                            <a class="btn btn-warning" href="{{ route('creditexport') }}">Export User Data</a>
                        </form>
                    </i>
                </div>
                <div class="card-body">
                    <div class="table-responsive" name="myAnchor" id="myAnchor" style="margin-right: 100rem;">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Credit Card</th>
                                    <th>Email</th>
                                    <th>Loan/Credit Card/Finance</th>
                                    <th>Pan</th>
                                    <th>DOB</th>
                                    <th>Source of Income</th>
                                    <th>Company Name</th>
                                    <!--<th>Monthly Income</th>-->
                                     <th>City</th>
                                    <th>pincode</th>
                                    <th>homeaddress</th>

                                    <th>Photo</th>
                                    <th>Aadhaar</th>
                                    <th>Pan</th>
                                    <th>Income Proof</th>
                                    <th>Statement</th>
                                </tr>
                            </thead>
                            <tbody>
                   
     
    
    
                                @foreach ($CreditCards as $CreditCard)
                                    <tr>
                                        <th scope="row" hidden>{{ $CreditCard->id }}
                                            <th>{{Date(date_format($CreditCard->created_at,'y-m-d'))}}</th>
                                        <!--<td>{{ $CreditCard->created_at }}</td>-->
                                        <td>{{ $CreditCard->name }}</td>
                                        <td>{{ $CreditCard->mobile }}</td>
                                        <td>{{ $CreditCard->img_name }}</td>
                                        <th>{{ $CreditCard->email }}</th>
                                        <td>{{ $CreditCard->loan }}</td>
                                        {{-- <th>{{$CreditCard->email}}</th> --}}
                                        <td>{{ $CreditCard->dob }}</td>
                                        {{-- <th>{{$CreditCard->email}}</th> --}}
                                        <td>{{ $CreditCard->pan }}</td>
                                        <td>{{ $CreditCard->income_source }}</td>
                                        <td>{{ $CreditCard->company_name }}</td>
                                        {{-- <td>{{$CreditCard->loan}}</td> --}}
                                        <td>{{ $CreditCard->city }}</td>
                                        <td>{{ $CreditCard->pincode }}</td>
                                        <td>{{ $CreditCard->homeaddress }}</td>
                                        {{-- <td>{{$CreditCard->homepincod}}</td> --}}
                                        {{-- <td>{{$CreditCard->created_at}}</td> --}}

                                        <td><img src="/creditCard_upload/photo/{{$CreditCard->photo}}" width="200px" height="200px" alt="Photo not uploaded"/>
                                            <a href="{{ url('/credit_card_download_photo', $CreditCard->photo) }}">Download</a>
                                            
                                        </td>
                                        <td><img src="/creditCard_upload/aadhaar/{{$CreditCard->aadhaar}}" width="200px" height="200px" alt="Aadhaar not uploaded"/>
                                            <a href="{{ url('/credit_card_download_aadhaar', $CreditCard->aadhaar) }}">Download</a>
                                            
                                        </td>
                                        <td><img src="/creditCard_upload/panCard/{{$CreditCard->pan_file_image}}" width="200px" height="200px" alt="Pan not uploaded"/>
                                            <a href="{{ url('/credit_card_download_pan', $CreditCard->pan_file_image) }}">Download</a>
                                            
                                        </td>
                                        <td><img src="/creditCard_upload/income_proof/{{$CreditCard->income_proof}}" width="200px" height="200px" alt="Income Proof not uploaded"/>
                                            <a href="{{ url('/credit_card_download_income', $CreditCard->income_proof) }}">Download</a>
                                            
                                        </td>
                                        <td><img src="/creditCard_upload/statment/{{$CreditCard->statment}}" width="200px" height="200px" alt="Statement not uploaded"/>
                                            <a href="{{ url('/credit_card_download_statement', $CreditCard->statment) }}">Download</a>
                                            
                                        </td>
                                       
    
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex">
                            {!! $CreditCards->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection

</head>

<body>
