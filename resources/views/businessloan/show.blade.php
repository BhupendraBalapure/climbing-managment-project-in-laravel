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
                        Business Loan data
                    </i>
                </div>
                <form action="{{ route('export') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
                </form>
                <div class="card-body">
                    <div class="table-responsive" name="myAnchor" id="myAnchor">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Loan/Credit Card/Finance</th>
                                    <th>Pan</th>
                                    <th>DOB</th>
                                    <th>Source of Income</th>
                                    <th>Company Name</th>
                                    <th>Monthly Income</th>
                                    <th>City</th>
                                    <th>pincode</th>

                                    <th>Photo</th>
                                    <th>Aadhaar</th>
                                    <th>Pan</th>
                                    <th>Income Proof</th>
                                    <th>Statement</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($business_loans as $businesss)
                                <tr>
                                    <th scope="row" hidden>{{ $businesss->id }}
                                    <th>{{ Date(date_format($businesss->created_at, 'y-m-d')) }}</th>
                                    <td>{{ $businesss->name }}</td>
                                    <td>{{ $businesss->mobile }}</td>
                                    <th>{{ $businesss->email }}</th>
                                    <th>{{ $businesss->loan }}</th>
                                    <td>{{ $businesss->pan }}</td>
                                    <td>{{ $businesss->dob }}</td>
                                    <td>{{ $businesss->income_source }}</td>
                                    <td>{{ $businesss->company_name }}</td>
                                    <td>{{ $businesss->salary }}</td>
                                    <td>{{ $businesss->city }}</td>
                                    <td>{{ $businesss->pincode }}</td>

                                    <td><img src="/businessloan_upload/photo/{{ $businesss->photo }}" width="200px"
                                            height="200px" alt="Photo not uploaded" />
                                        <a
                                            href="{{ url('/business_loan_download_photo', $businesss->photo) }}">Download</a>

                                    </td>
                                    <td><img src="/businessloan_upload/aadhaar/{{ $businesss->aadhaar }}" width="200px"
                                            height="200px" alt="Aadhaar not uploaded" />
                                        <a
                                            href="{{ url('/business_loan_download_aadhaar', $businesss->aadhaar) }}">Download</a>

                                    </td>
                                    <td><img src="/businessloan_upload/panCard/{{ $businesss->pan_file_image }}"
                                            width="200px" height="200px" alt="Pan not uploaded" />
                                        <a
                                            href="{{ url('/business_loan_download_pan', $businesss->pan_file_image) }}">Download</a>

                                    </td>
                                    <td><img src="/businessloan_upload/income_proof/{{ $businesss->income_proof }}"
                                            width="200px" height="200px" alt="Income Proof not uploaded" />
                                        <a
                                            href="{{ url('/business_loan_download_income', $businesss->income_proof) }}">Download</a>

                                    </td>
                                    <td><img src="/businessloan_upload/statment/{{ $businesss->statment }}"
                                            width="200px" height="200px" alt="Statement not uploaded" />
                                        <a
                                            href="{{ url('/business_loan_download_statement', $businesss->statment) }}">Download</a>

                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</main>
@endsection

</head>

<body>