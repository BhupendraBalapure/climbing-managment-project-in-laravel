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
              Personal Loan data        
              <form action="{{ route('per_export') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- <input type="file" name="file" class="form-control"> --}}
                <br>
                {{-- <button class="btn btn-success">Import User Data</button> --}}
                <a class="btn btn-warning" href="{{ route('per_export') }}">Export User Data</a>
            </form>   
            </i>
          </div>
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
                    @foreach($personalloans as $personalloan)
                    <tr>
                        <th scope="row" hidden>{{$personalloan->id}}
                        <th>{{Date(date_format($personalloan->created_at,'y-m-d'))}}</th>
                        <td>{{$personalloan->name}}</td>
                        <td>{{$personalloan->mobile}}</td>
                        <th>{{$personalloan->email}}</th>
                        <th>{{$personalloan->loan}}</th>
                        <td>{{$personalloan->pan}}</td>
                        <td>{{$personalloan->dob}}</td>
                        <td>{{$personalloan->income_source}}</td>
                        <td>{{$personalloan->company_name}}</td>
                        <td>{{$personalloan->salary}}</td>
                        <td>{{$personalloan->city}}</td>
                        <td>{{$personalloan->pincode}}</td>

                        <td><img src="/personalLoan_upload/photo/{{$personalloan->photo}}" width="200px" height="200px" alt="Photo not uploaded"/>
                          <a href="{{url('/personal_loan_download_photo',$personalloan->photo)}}">Download</a>    
                        </td>

                        <td><img src="/personalLoan_upload/aadhaar/{{$personalloan->aadhaar}}" width="200px" height="200px" alt="Aadhaar not uploaded"/>
                          <a href="{{url('/personal_loan_download_aadhaar',$personalloan->aadhaar)}}">Download</a>    
                        </td>
                        <td><img src="/personalLoan_upload/panCard/{{$personalloan->pan_file_image}}" width="200px" height="200px" alt="Pan not uploaded"/>
                          <a href="{{url('/personal_loan_download_pan',$personalloan->pan_file_image)}}">Download</a>    
                        </td>
                        <td><img src="/personalLoan_upload/income_proof/{{$personalloan->income_proof}}" width="200px" height="200px" alt="Income Proof not uploaded"/>
                          <a href="{{url('/personal_loan_download_income',$personalloan->income_proof)}}">Download</a>    
                        </td>
                        <td><img src="/personalLoan_upload/statment/{{$personalloan->statment}}" width="200px" height="200px" alt="Statement not uploaded"/>
                          <a href="{{url('/personal_loan_download_statement',$personalloan->statment)}}">Download</a>    
                        </td>
                        


                    </tr>
                @endforeach
              </tbody>
              {{-- <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Principle Name</th>
                  <th>Principle Mob</th>
                  <th>Principle Email</th>
                  <th>Address</th>
                  <th>Institute Code</th>
                  <th>Status</th>
                </tr>
              </tfoot> --}}
            </table>
          </div>
        </div>
      </div>
    </div>
</main>
@endsection

</head>
<body>

