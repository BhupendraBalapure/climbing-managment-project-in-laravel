@extends('layouts.admin')

@section('title', 'Page Admin')
<title>Climbing | Login data</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('sidebar')

@parent

@endsection

@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
        </ol>
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
                                    <td><a href="{{('/showdata')}}/{{$result->id}}" class="btn btn-info">Show</a></td>
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

