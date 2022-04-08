@extends('layouts.admin')

@section('title', 'Page Admin')
<title>Climbing | Add Team code</title>
@section('sidebar')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @parent

@endsection

@section('content')
    <main>
        <div class="container">
            <h1 class="mt-4"></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Add Team</li>
            </ol>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Add Team</h4>
                        </div>
                        <div class="card-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('success')}}
                            </div>
                        @endif
                            <form action="{{route('create.add_team')}}" method="post">
                                {{ csrf_field() }}
                                <div class="mb-3">
                                    <label for="team_name">Team</label>
                                    <input name="team_name" class="form-control" id="" />
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <input type="submit" value="Submit" name="submit" class="btn btn-lg btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="table-responsive" name="myAnchor" id="myAnchor" style="margin-right: 100rem;">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr style="text-align: center">
                                    <th width="10%">Date</th>
                                    <th>Team</th>
                                    {{-- <th colspan="2">Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($shownewTeamdata as $item)
                                <tr style="text-align:justify">
                                        <th scope="row" hidden>{{ $item->id }}</th>
                                            <th>{{Date(date_format($item->created_at,'y-m-d'))}}</th>
                                        <td>{{ $item->team_name }}</td>
                                        {{-- <th style="text-align: center"><i class="fa-regular fa-pen-to-square fa-2x" style="color: blue"></i></th>
                                        <th style="text-align: center">
                                                    <a href="delete_user/{{$userdata->id}}">
                                                        <i class="fa-solid fa-trash fa-2x" style="color: red"></i>
                                                    </a>
                                        </th> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- <div class="d-flex">
                            {!! $item->links() !!}
                        </div> --}}
                    </div>                        
                </div>
            </div>
        </div>
    </main>
@endsection

</head>

<body>
