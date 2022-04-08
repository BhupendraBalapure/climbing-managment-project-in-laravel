@extends('layouts.admin')

@section('title', 'Page Admin')

@section('sidebar')

    @parent

@endsection

@section('content')
{{-- @section('content') --}}
    <main>
        <div class="container">
            <h1 class="mt-4"></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            
            {{-- fetching registered executive --}}
            <div class="card">
                <div class="card-header">
                    <h4>Registered Field Executive</h4>
                </div>
                <div class="card-body">
                    @if (Session::has('deleted'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('deleted')}}
                    </div>
                @endif
                    <div class="table-responsive" name="myAnchor" id="myAnchor" style="margin-right: 100rem;">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">                           
                            <tbody>
                            @foreach($groups as $team => $results)
                            
                                <tr style="text-align: center"><td colspan="3" style="font-size: 18px;font-weight:bold">{{$team}}</td></tr>
                                <tr>
                                    {{-- <th>Team</th> --}}
                                    <th>Team Leader Code</th>
                                    <th>Executive Name</th>
                                    <th>Executive Code</th>
                                </tr>                                    
                                    @foreach($results as $result)                                    
                                    <tr>                                
                                        <td>{{$result->t_l_code}}</td>                                
                                        <td>{{$result->name}}</td>
                                        <td>{{$result->e_code}}</td>
                                        <td><a href="{{('/login_data_teamwise')}}/{{$result->id}}" class="btn btn-info">Show</a></td>
                                    </tr>                     
                                    @endforeach
                            @endforeach
                            </tbody>
                        </table>
                            <div class="d-flex">
                                {{-- {!! $usersdata->links() !!} --}}
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

</head>

<body>

{{-- @endsection --}}

