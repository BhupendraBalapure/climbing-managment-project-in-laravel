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
      <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
          <div class="card-body">Total Institute  
            {{-- {{ count($instituteData)}} --}}
          </div>
          <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="#myAnchor" rel="" id="anchor1" class="anchorLink">View Details</a>
          <div class="small text-white">
            <i class="fas fa-angle-right"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card bg-success text-white mb-4">
        <div class="card-body">Total Student</div>
        <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="#">View Details</a>
          <div class="small text-white">
            <i class="fas fa-angle-right"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card bg-danger text-white mb-4">
        <div class="card-body">Total Revenue</div>
        <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="#">View Details</a>
          <div class="small text-white">
            <i class="fas fa-angle-right"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card bg-dark text-white mb-4">
        <div class="card-body">Calender</div>
        <div class="card-footer d-flex align-items-center justify-content-between">
          {{-- <a class="small text-white stretched-link" href="{{route('admin/calender')}}">View Details</a> --}}
          <div class="small text-white">
            <i class="fas fa-angle-right"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-6">
      <div class="card mb-4">
        <div class="card-header">
          <i class="fas fa-chart-area mr-1"></i>
          Institute By Day
        </div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="40"></canvas>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card mb-4">
        <div class="card-header">
          <i class="fas fa-chart-bar mr-1"></i>
          Institute and Student
        </div>
        <div class="card-body">
          <canvas id="myPieChart" width="100%" height="40"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-4">
    <div class="card-header">
      <i class="fas fa-table mr-1">
        Total Institute 
        {{-- {{ count($instituteData)}} --}}
      </i>
    </div>
    <div class="card-body">
      <div class="table-responsive" name="myAnchor" id="myAnchor">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
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
          </thead>
          <tbody>
          {{-- @foreach($instituteData as $key => $institute_value)
          <tr>
            <td>{{ $institute_value->user->name }}</td>
            <td>{{ $institute_value->user->email }}</td>
            <td>{{ $institute_value->principle_name }}</td>
            <td>{{ $institute_value->principle_mob }}</td>
            <td>{{ $institute_value->principle_email }}</td>
            <td>{{ $institute_value->address }}</td>
            <td>{{ $institute_value->institute_code }}</td>
            <td>{{ (isset($institute_value->status) && $institute_value->status == 1) ? "Active" : "Deactive" }}</td>
          </tr>
          @endforeach --}}
        </tbody>
        <tfoot>
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
        </tfoot>
      </table>
    </div>
  </div>
</div>
</div>
</main>
@endsection
  