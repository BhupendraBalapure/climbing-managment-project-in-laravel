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
              Web Site        
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
                    
                    <th>Orgnastion Name</th>
                    <th>Requirment</th>
                  
                  </tr>
                </thead>
                <tbody>
                    @foreach($webSites as $webSite)
                    <tr>
                        <th scope="row" hidden>{{$webSite->id}}
                        <th>{{Date(date_format($webSite->created_at,'y-m-d'))}}</th>
                        <td>{{$webSite->name}}</td>
                        <td>{{$webSite->email}}</td>
                        <td>{{$webSite->phone}}</td>
                        <th>{{$webSite->org_name}}</th>
                        <th>{{$webSite->requirment}}</th>
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

