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
            <li class="breadcrumb-item active">My Team Executives</li>           
        </ol>
        <div class="card">
            <div class="card-header">
                <h4>Team Leader Profile <br><br> Name : <span style="text-transform: capitalize">{{auth()->user()->name}}</span> </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive" name="myAnchor" id="myAnchor" style="margin-right: 100rem;">
                    <table class="table table-bordered" width="100%" cellspacing="0">                           
                        <thead>
                            <tr>
                                <td>Code</td>
                                <td>Email id</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{auth()->user()->t_l_code}}</td>
                                <td>{{auth()->user()->email}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Total Executives
            </div>
            <div class="card-body">
                <div class="table-responsive" name="myAnchor" id="myAnchor">
                    <table class="table table-bordered" id="dataTable" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Sr.No.</th>
                                <th>Executive Name</th>
                                <th>Executive Code</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ; ?>
                            @foreach ($my_teams as $my_team)
                            <?php $i++ ?>
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$my_team->executive_name}}</td>

                                <td>{{$my_team->e_code}}</td>
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
    </div>
</main>
@endsection
