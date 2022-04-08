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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $cont)
                            <tr>
                                <th scope="row" hidden>{{$cont->id}}
                                    <th>{{Date(date_format($cont->created_at,'y-m-d'))}}</th>
                                    <td>{{$cont->name}}</td>
                                    <th>{{$cont->email}}</th>
                                    <td>{{$cont->phone}}</td>
                                    <th>{{$cont->message}}</th>
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
    </div>
  </main>
@endsection

</head>
<body>

