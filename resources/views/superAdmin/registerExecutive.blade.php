@extends('layouts.admin')

@section('title', 'Page Admin')
<title>Climbing | Field Executive</title>
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
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Registration</h4>
                </div>
                <div class="card-body">

                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif

                    <form method="POST" action="{{route('create.registration')}}">
                        {{ csrf_field() }}

                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert"><li>{{ $error }}</li></div>
                        @endforeach
                      
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control"  name="name" value="{{ old('name') }}" required autocomplete="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email Id</label>
                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control"  name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control"  name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password </label>
                            <div class="col-md-4">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="is_admin" class="col-md-4 col-form-label text-md-right">Roles</label>

                            <div class="col-md-4">
                                <select name="is_admin" id="is_admin" class="form-control">
                                    <option value="">--Select Role--</option>
                                    <option value="2" {{ old('is_admin') == '2' ? 'selected' : '' }}>Admin</option>
                                    {{-- <option value="3">Franchisee</option> --}}
                                    <option value="4" {{ old('is_admin') == '4' ? 'selected' : '' }}>BackEnd</option>
                                    <option value="5" {{ old('is_admin') == '5' ? 'selected' : '' }}>Executive</option>
                                    <option value="3" {{ old('is_admin') == '3' ? 'selected' : '' }}>Team Leader</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="team" class="col-md-4 col-form-label text-md-right">Team</label>
                            <div class="col-md-4">
                                <select name="team" id="team" class="form-control">
                                    <option value="">--Select Team--</option>
                                    @foreach ($shownewdata as $item)
                                    <option value="{{$item->team_name}}" {{ old('team') == $item->team_name ? 'selected' : '' }}>{{$item->team_name}}</option>
                                    @endforeach
                                    {{-- <option value="AMR_CLM-01">Amravati - AMR_CLM-01</option> 
                                    <option value="AMR_CLM-02">Amravati - AMR_CLM-02</option>
                                    <option value="AUG_CLM-01">Aurangabd - AUG_CLM-01</option>
                                    <option value="AUG_CLM-02">Aurangabd - AUG_CLM-02</option>
                                    <option value="BAD_CLM-01">Badnera - BAD_CLM-01</option> 
                                    <option value="BAD_CLM-02">Badnera - BAD_CLM-02</option> 
                                    <option value="JAL_CLM-01">Jalna - JAL_CLM-01</option> 
                                    <option value="JAL_CLM-02">Jalna - JAL_CLM-02</option> 
                                    <option value="KAT_CLM-01">Katol - KAT_CLM-01</option> 
                                    <option value="KAT_CLM-02">Katol - KAT_CLM-02</option>
                                    <option value="NGP_CLM-01">Nagpur - NGP_CLM-01</option>
                                    <option value="NGP_CLM-02">Nagpur - NGP_CLM-02</option>
                                    <option value="PAR_CLM-01">Parbhani - PAR_CLM-01</option> 
                                    <option value="PAR_CLM-02">Parbhani - PAR_CLM-02</option> --}}
                                </select>
                            </div>
                            <div class="col-md-2">
                                <a href="{{route('executive.add_team')}}" class="btn btn-info">+ Add Team</a>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="t_l_code" class="col-md-4 col-form-label text-md-right">Team Leader Code </label>

                            <div class="col-md-4">
                                    <select name="t_l_code" id="team" class="form-control">
                                        <option value="">--Select Team Lader Code--</option>
                                        @foreach ($showteamLdata as $item)
                                        <option value="{{$item->team_leader_code}}" {{ old('t_l_code') == $item->team_leader_code ? 'selected' : '' }}>{{$item->team_leader_code}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="col-md-2">
                                <a href="{{route('executive.add_team_leader')}}" class="btn btn-info">+ Add TL Code</a>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="e_code" class="col-md-4 col-form-label text-md-right">Ececutive Code </label>

                            <div class="col-md-4">
                                <input id="e_code" type="text" class="form-control" name="e_code" value="{{ old('e_code') }}"  autocomplete="e_code">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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
                            <thead>
                                <tr style="text-align: center">
                                    <th width="10%">Date</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>User role</th>
                                    <th>Team</th>
                                    <th>Team Leader Code</th>
                                    <th>Executive Code</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usersdata as $userdata)
                                    <tr style="text-align:justify">
                                        <th scope="row" hidden>{{ $userdata->id }}
                                            <th>{{Date(date_format($userdata->created_at,'y-m-d'))}}</th>
                                        <td>{{ $userdata->name }}</td>
                                        <th>{{ $userdata->email }}</th>
                                        <th>{{ $userdata->is_admin }}</th>
                                        <th>{{ $userdata->team }}</th>
                                        <th>{{ $userdata->t_l_code }}</th>
                                        <th>{{ $userdata->e_code }}</th>
                                        {{-- <th style="text-align: center"><i class="fa-regular fa-pen-to-square fa-2x" style="color: blue"></i></th> --}}
                                        <th style="text-align: center">
                                                {{-- <a href="{{url('/delete_user')}}/{{$userdata->id}}"> --}}
                                                    <a href="delete_user/{{$userdata->id}}">
                                                        <i class="fa-solid fa-trash fa-2x" style="color: red"></i>
                                                    </a>
                                        </th>
                                    </tr>
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
