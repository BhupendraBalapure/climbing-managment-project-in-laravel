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

            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1">
                        Field Executive Customer's Details
                    </i>
                </div>
                <div class="card-body">
                    <div class="card-body">
                       <div class="row">
                           <div class="col-md-8">
                            <form action="{{ route('executive.show') }}" method="get">
                                {{ csrf_field() }}
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Start Date</label>
                                        <input type="date" class="form-control" name="start_date">
                                    </div>
                                </div>
                                <div class="col-md-3" style="margin-top: 24px;">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                    </div>
                                </div>
                            </form>
                           </div>
                           <div class="col-md-4">
                            <form action="{{ route('drc.export') }}" method="POST" enctype="multipart/form-data">
                                @csrf                                
                                <a class="btn btn-warning" href="{{ route('drc.export') }}">Export Customer Data</a>
                            </form>
                           </div>
                       </div>
                    </div>
                    <div class="table-responsive" name="myAnchor" id="myAnchor" style="margin-right: 100rem;">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Cutomer Name</th>
                                    <th>Cutomer Email</th>
                                    <th>Cutomer Contact Number</th>
                                    <th>Cutomer Occupation</th>
                                    <th>Cutomer Monthly Income</th>
                                    <th>PAN</th>
                                    <th>Aadhar Front-Side</th>
                                    <th>Aadhar Back-Side</th>
                                    <th>Salary / Income Proof</th>
                                    <th>Other Bill</th>
                                    <th>Photo</th>
                                    <th>Statment</th>
                                    <th>Team Leader Code</th>
                                    <th>Executive Code</th>
                                    <th>Executive Name</th>
                                    <th>Executive remark</th>
                                    <th>Status</th>
                                    {{-- <th>Executive message</th> --}}
                                    {{-- <th>message</th> --}}

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($executives as $executive)
                                    <tr style="text-align:justify">
                                    <td scope="row" hidden>{{ $executive->id }}</td>
                                    <td>{{ Date(date_format($executive->created_at, 'y-m-d')) }}</td>
                                    <td>{{ $executive->full_name }}</td>
                                    <td>{{ $executive->email }}</td>
                                    <td>{{ $executive->phone }}</td>
                                    <td>{{ $executive->occupation }}</td>
                                    <td>{{ $executive->income }}</td>
                                    <td>
                                        <img src="/upload/panCard/{{$executive->pan}}" width="200px" height="200px" alt="Pan not uploaded"
                                            frameborder="0"/>
                                        <br><a href="{{url('/download',$executive->pan)}}">Download</a>
                                    </td>                                   

                                    <td>
                                        <img src="/upload/adher_front/{{$executive->adher_front}}" width="200px" height="200px" alt="Aadhar Front-Side not uploaded"
                                            frameborder="0" />
                                        <br><a href="{{url('/download-aadhaar_front_side',$executive->adher_front)}}">Download</a>    
                                    </td>
                                    <td>
                                        <img src="/upload/adher_back/{{$executive->adher_back}}" width="200px" height="200px" alt="Aadhar Back-Side not uploaded"
                                            frameborder="0" />
                                        <br><a href="{{url('/download-aadhaar_back_side',$executive->adher_back)}}">Download</a>    
                                    </td>
                                    <td>
                                        <img src="/upload/income_prof/{{$executive->income_prof}}" width="200px" alt="Income proof not uploaded"
                                            height="200px" frameborder="0" />
                                            <br><a href="{{url('/download-income',$executive->income_prof)}}">Download</a> 
                                    </td>
                                    <td>
                                        <img src="/upload/bill/{{$executive->bill}}" width="200px" height="200px" alt="Other Statement not uploaded"
                                            frameborder="0" />
                                            <br><a href="{{url('/download-other_bill',$executive->bill)}}">Download</a> 
                                    </td>
                                    <td>
                                        <img src="/upload/photo/{{$executive->photo}}" width="200px" alt="Photo not uploaded" height="200px">
                                        <br><a href="{{url('/download-photo',$executive->photo)}}">Download</a> 
                                    </td>
                                    <td>
                                        <img src="/upload/statment/{{$executive->statment}}" width="200px" alt="Statement not uploaded"
                                            height="200px" frameborder="0" />
                                            <br><a href="{{url('/download-statement',$executive->statment)}}">Download</a>  
                                    </td>
                                    <td>{{ $executive->t_l_code }}</td>
                                    <td>{{ $executive->e_code }}</td>
                                    <td>{{ $executive->executive_name }}</td>
                                    <td>{{ $executive->remark }}</td>
                                    <td style="color: rgb(226, 86, 43)">{{ $executive->status }}</td>
                                    
                                   
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex">
                            {{-- {!! $executives->links() !!} --}}
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection

</head>

<body>
