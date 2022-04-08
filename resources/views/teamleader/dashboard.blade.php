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
                <i class="fas fa-table mr-1"></i>
                Today's Login file
            </div>
            <div class="card-body">
                <div class="table-responsive" name="myAnchor" id="myAnchor">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Executive Name</th>
                                <th>Executive Code</th>
                                <th>Customer Name</th>
                                <th>Email</th>
                                <th>Income</th>
                                <th>Remark</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($executives as $userdata)                                
                            <tr>
                                <th>{{Date(date_format($userdata->created_at,'y-m-d'))}}</th>   
                                <td>{{$userdata->executive_name}}</td>
                                <td>{{$userdata->e_code}}</td>
                                <td>{{$userdata->full_name}}</td>
                                <td>{{$userdata->email}}</td>
                                <td>{{$userdata->income}}</td>
                                <td>{{$userdata->remark}}</td> 
                                <td>{{$userdata->status}}</td>                                                                 
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex">
                        {!! $executives->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
