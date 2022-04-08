@extends('layouts.admin')

@section('title', 'Page Admin')
<title>Climbing | All Field Executive List</title>
@section('sidebar')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @parent

@endsection

@section('content')
    <main>
        <div class="container">
            <h1 class="mt-4"></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            
            {{-- fetching registered executive --}}
            <div class="card">
                <div class="card-header">
                    <h4>Executive Profile <br><br> Name : <span style="text-transform: capitalize">{{$showusers->name}}</span> </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive" name="myAnchor" id="myAnchor" style="margin-right: 100rem;">
                        <table class="table table-bordered"  width="100%" cellspacing="0">                           
                            <thead>
                                <tr>
                                    <td>Executive Code</td>
                                    <td>Email id</td>
                                    <td>Team</td>
                                    <td>Team Leader Code</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$showusers->e_code}}</td>
                                    <td>{{$showusers->email}}</td>
                                    <td>{{$showusers->team}}</td>
                                    <td>{{$showusers->t_l_code}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>       

            {{-- customers details --}}
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1">
                     Customer's Details
                    </i>
                </div>
                <div class="card-body">
                    <div class="table-responsive" name="myAnchor" id="myAnchor" style="margin-right: 100rem;">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Executive Name</th>
                                    <th>Executive Code</th>
                                    <th>Team Leader Code</th>
                                    <th>Full Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Occupation</th>
                                    <th>Monthly Income</th>                                    
                                    <th>Remark</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($showuserCustomers as $showuserCustomer)
                                    @if ($showuserCustomer->e_code !== $showusers->e_code)
                                    {{-- { --}}
                                        @continue
                                    {{-- }                                                                        --}}
                                    @endif
                                    <tr>
                                        {{-- <th scope="row" hidden>{{ $showuserCustomer->id }}</th> --}}
                                        <th>{{Date(date_format($showuserCustomer->created_at,'y-m-d'))}}</th>
                                        <td>{{ $showuserCustomer->executive_name }}</td>
                                        <td>{{$showuserCustomer->e_code}}</td>
                                        <td>{{ $showuserCustomer->t_l_code }}</td>
                                        <td>{{ $showuserCustomer->full_name }}</td>
                                        <td>{{ $showuserCustomer->phone }}</td>
                                        <th>{{ $showuserCustomer->email }}</th>
                                        <td>{{ $showuserCustomer->occupation }}</td>
                                        <td>{{ $showuserCustomer->income }}</td>
                                        <td>{{ $showuserCustomer->remark }}</td>
                                    </tr>     
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex">
                            {{-- {!! $showuserCustomer->links() !!} --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection

</head>

<body>
