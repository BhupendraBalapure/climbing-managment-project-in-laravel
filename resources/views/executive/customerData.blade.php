@extends('layouts.admin')

@section('title', 'Page Admin')
<title>Climbing | Field Executive Dashboard</title>
@section('sidebar')

@parent

@endsection

@section('content')
<style>
    span {
        color: red;
    }

    label {
        font-size: 16px;
    }
    
</style>
<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">
                <h4>Field Executive Customer's Details</h4>
            </li>
        </ol>
        <div class="row">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1">
                        Field Executive Customer's Details
                    </i>
                </div>
                <div class="card-body">
                    <div class="table-responsive" name="myAnchor" id="myAnchor" style="margin-right: 100rem;">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Full Name</th>
                                    <th>Aadhar Front-Side</th>
                                    <th>Aadhar Back-Side</th>
                                    <th>PAN</th>
                                    <th>Salary / Income Proof</th>
                                    <th>Other Bill</th>
                                    <th>Photo</th>
                                    <th>Statment</th>
                                    <th>Status</th>
                                    <th>Remark</th>
                                    <th>Message</th>
                                    <th>BackEnd Remark</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($executives  as $executive)
                                    <tr>
                                        <th scope="row" hidden>{{ $executive->id }}
                                            <th>{{Date(date_format($executive->created_at,'y-m-d'))}}</th>
                                        <td>{{ $executive->full_name }}</td>
                                        <td><iframe src="/upload/adher_front/{{$executive->adher_front}}" width="200px" height="200px" frameborder="0"></iframe></td>
                                        <td><iframe src="/upload/adher_back/{{$executive->adher_back}}" width="200px" height="200px" frameborder="0"></iframe></td>

                                        <td><iframe src="/upload/panCard/{{$executive->pan}}" width="200px" height="200px" frameborder="0"></iframe></td>
                                        <td><iframe src="/upload/income_prof/{{$executive->income_prof}}" width="200px" height="200px" frameborder="0"></iframe></td>
                                        <td><iframe src="/upload/bill/{{$executive->bill}}" width="200px" height="200px" frameborder="0"></iframe></td>
                                        <td><img src="/upload/photo/{{$executive->photo}}" width="200px" height="200px" frameborder="0"></td>
                                        <td><iframe src="/upload/statment/{{$executive->statment}}" width="200px" height="200px" frameborder="0"></iframe></td>

                                        <td>{{ $executive->remark }}</td>
                                        <h2 class="btn btn" ><td style="background-color:rgb(137, 147, 151)">{{ $executive->status }}</td></h2>
                                        <td>{{ $executive->message }}</td>
                                        
                                        
                                        <td>
                                            <form action="{{ route('message_exe.update', $executive->id) }}"
                                                method="post">
                                                @csrf
                                                {{-- @foreach ($executives as $executive) --}}
                                                <textarea class="form-control" name="message_exe"></textarea>
                                                <br>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary">Okey</button>
                                                </div>
                                                {{-- @endforeach --}}
                                                <th>{{ $executive->message_exe }}</th>
        
                                            </form>
                                        </td>
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
    </div>
</main>

@endsection

