@extends('layouts.admin')

@section('title', 'Page Admin')

<title>Climbing | Dashboard</title>
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
        <div class="row">
            <div class="col-xl-3 col-md-3">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><i class="fas fa-users"></i>&nbsp;&nbsp;
                        Demo &nbsp;&nbsp;
                        {{-- {{ count($students)}} --}}
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        {{-- <a class="small text-white stretched-link" href="{{ route('students.index')}}" rel=""
                            id="anchor1" class="anchorLink">Add Student</a> --}}
                        <div class="small text-white">
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-3">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body"><i class="fas fa-users"></i>&nbsp;&nbsp;
                        Total Demo &nbsp;&nbsp;
                        {{-- {{ count($instructors)}} --}}
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        {{-- <a class="small text-white stretched-link" href="{{ route('instructors.index') }}">Add
                            Instructor</a> --}}
                        <div class="small text-white">
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-3">
                <div class="card bg-dark text-white mb-3">
                    <div class="card-body"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;
                        Revenue &nbsp;&nbsp;

                        {{-- {{ $revenue }} --}}

                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        {{-- <a class="small text-white stretched-link"
                            href="{{route('studentinstallments.index')}}">Take Installment</a> --}}
                        <div class="small text-white">
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-3">
                <div class="card bg-success text-white mb-3">
                    <div class="card-body"><i class="fas fa-clock">
                        </i>&nbsp;&nbsp;
                        Session
                    </div>
                    <!-- <div class="card-footer d-flex align-items-center justify-content-between"> -->
                    <!-- <a class="small text-white stretched-link" href="">Session Details</a> -->
                    <select id="isession_id" class="form-control card bg-success" onchange="location = this.value" ;
                        name="isession_id" style="color: #ffffff;">
                        <option value="" name="isession_id">Choose Sesssion...</option>

                        {{-- @foreach($isessions as $key=> $session_value)

                        @if($session_value->institute_id == auth()->id())


                        <option value="instituteadmin.session">{{ $session_value->start_session }}&nbsp;to&nbsp;{{
                            $session_value->end_session }}</option>

                        @endif

                        @endforeach --}}

                    </select>
                    <!-- <div class="small text-white">
                                <i class="fas fa-angle-right"></i>
                            </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fa fa-calendar"> Date-wise Data</i>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('report') }}" method="get">
                            {{ csrf_field() }}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Start Date</label>
                                    <input type="date" class="form-control" name="start_date">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">End Date</label>
                                    <input type="date" class="form-control" name="end_date">
                                </div>
                            </div>

                            <div class="col-md-2" style="margin-top: 24px;">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
            </div>
        </div>
    </div>
</main>

@endsection