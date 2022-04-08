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
                {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-3">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body"><i class="fas fa-users"></i>&nbsp;&nbsp;
                            Total Student &nbsp;&nbsp;
                            {{-- {{ count($students)}} --}}
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            {{-- <a class="small text-white stretched-link" href="{{ route('students.index')}}" rel="" id="anchor1" class="anchorLink">Add Student</a> --}}
                            <div class="small text-white">
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body"><i class="fas fa-users"></i>&nbsp;&nbsp;
                            Total Instructor &nbsp;&nbsp;
                            {{-- {{ count($instructors)}} --}}
                        </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                {{-- <a class="small text-white stretched-link" href="{{ route('instructors.index') }}">Add Instructor</a> --}}
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
                            {{-- <a class="small text-white stretched-link" href="{{route('studentinstallments.index')}}">Take Installment</a> --}}
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
                        <select id="isession_id" class="form-control card bg-success" onchange="location = this.value"; name="isession_id" style="color: #ffffff;">
                       <option value="" name="isession_id">Choose Sesssion...</option>

                        {{-- @foreach($isessions as $key=> $session_value)

                        @if($session_value->institute_id == auth()->id())

                      
                        <option value="instituteadmin.session">{{ $session_value->start_session }}&nbsp;to&nbsp;{{ $session_value->end_session }}</option>

                        @endif

                        @endforeach                    --}}
                      
                    </select>
                            <!-- <div class="small text-white">
                                <i class="fas fa-angle-right"></i>
                            </div> -->
                    <!-- </div> -->
                    </div>
                </div>

             <!--   <div class="col-xl-2 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body"><i class="fas fa-calendar"></i>&nbsp;&nbsp; Calender</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                {{-- <a class="small text-white stretched-link" href="{{route('instituteadmin/calender')}}">Current Month</a> --}}
                                <div class="small text-white">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div> --->
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area mr-1"> Area Chart Example </i>
                            </div>
                            <div class="card-body">
                                <canvas id="myAreaChart" width="100%" height="40"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar mr-1"> Bar Chart Example </i>
                            </div>
                            <div class="card-body">
                                <canvas id="myBarChart" width="100%" height="40"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                   <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                {{-- Total Student {{ count($students) }}  --}}
                            </div>
                            <div class="card-body">
                                
                                <div class="table-responsive" name="myAnchor" id="myAnchor">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Student Photo</th>
                                        <th>Student Name</th>
                                        <th>Email</th>
                                        <th>In-Time</th>
                                        <th>Out-Time</th>
                                        <th>Status</th>
                                        <th>Details</th>
                                        <th>Log Out</th>
                                        <th>M/C Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($students as $student)
                                    <tr>
                                        <td><img src="{{asset('images')}}/{{ $student->student_img }}" style="width: 50% ;" /></td>
                                        <td>{{ $student->user->name }}</td>
                                        <td>{{ $student->user->email }}</td>
                                        <td>{{ $student->created_at }}</td>
                                        <td>{{ $student->updated_at }}</td>
                                        <td> @if(Cache::has('online_user'.$student->user_id))
                                         <button type="submit" class="btn btn-success" style="border-radius: 50px;">Login</button>
                                         @else
                                         <button type="submit" class="btn btn-danger" style="border-radius: 50px;">Logout</button>
                                         @endif
                                       </td>
                                                            <td>details</td>
                                        <td>{{ $student->updated_at }}</td>
                                        <td>PC-1</td>
                                    </tr>
                                    @endforeach --}}
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Student Photo</th>
                                        <th>Student Name</th>
                                        <th>Email</th>
                                        <th>In Time</th>
                                        <th>Out Time</th>
                                        <th>Status</th>
                                        <th>Details</th>
                                        <th>Log Out</th>
                                        <th>M/C Name</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>   

@endsection

@once
    @push('scripts')
    <script>
        $('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    },1000);
    return false;
});
    </script>
    	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ url('/js/scripts.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ url('chartJs/chart-area-demo.js') }}"></script>
        <script src="{{ url('chartJs/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{ url('chartJs/datatables-demo.js') }}"></script>
        
    @endpush
@endonce