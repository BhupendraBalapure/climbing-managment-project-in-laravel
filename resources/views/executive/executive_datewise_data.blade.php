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
                    <form action="{{ route('executive.executive_datewise_data') }}" method="get">
                        {{ csrf_field() }}
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Start Date</label>
                                <input type="date" class="form-control" name="start_date">
                            </div>
                        </div>
                        <div class="col-md-2" style="margin-top: 24px;">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </div>
                    </form>        
                <div class="table-responsive" name="myAnchor" id="myAnchor" style="margin-right: 100rem;">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                    <th>Date</th>
                                    <th>Full Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Occupation</th>
                                    <th>Monthly Income</th>
                                    <th>Team Leader Code</th>
                                    <th>Executive Code</th>
                                    <th>Executive Name</th>
                                    <th>Remark</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($date_data) && $date_data->count())
                                @foreach ($date_data as $key => $d_date)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td><span class="badge badge-success">{{ $d_date->created_at }}</span></td>
                                        <td>{{ $d_date->full_name }}</td>
                                        <td>{{ $d_date->email }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4" class="text-center">There Are No Data Found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

