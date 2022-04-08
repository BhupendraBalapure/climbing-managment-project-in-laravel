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
      
      
      <div class="card mb-4">
          <div class="card-header">
              <i class="fas fa-table mr-1">
                  Contacted Us
                </i>
            </div>
            <div class="card-body">
                <div class="table-responsive" name="myAnchor" id="myAnchor">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Education</th>
                                <th>Location</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($careers as $career)
                            <tr>
                                <td scope="row" hidden>{{$career->id}}</td>
                                    <td>{{Date(date_format($career->created_at,'y-m-d'))}}</td>
                                    <td>{{$career->first_name}}</td>
                                    <td>{{$career->last_name}}</td>
                                    <td>{{$career->email}}</td>
                                    <td>{{$career->phone}}</td>
                                    <td>{{$career->education}}</td>
                                    <td>{{$career->location}}</td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </main>
@endsection

</head>
<body>

