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
        <div class="row">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    {{-- Total Student {{ count($students) }} --}}
                </div>
                <div class="card-body">

                    <div class="table-responsive" name="myAnchor" id="myAnchor">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Cutomer Name</th>
                                    <th>Cutomer Email</th>
                                    <th>Cutomer Contact Number</th>
                                    <th>Cutomer Occupation</th>
                                    <th>Cutomer Monthly Income</th>
                                    <th>PAN</th>
                                    <th>Aadhar Front-Side</th>
                                    <th>Aadhar Back-Side</th>
                                    <th>Salary / Income Proof</th>
                                    <th>Other Bill</th>
                                    <th>Photo</th>
                                    <th>Statment</th>
                                    <th>Team Leader Code</th>
                                    <th>Executive Code</th>
                                    <th>Executive Name</th>
                                    <th>Executive remark</th>
                                    <th>Executive message</th>
                                    <th>Status</th>
                                    <th>message</th>
                                    <th style="text-align: center;" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($executives as $userdata)
                                <tr style="text-align:justify">
                                    <td scope="row" hidden>{{ $userdata->id }}</td>
                                    <td>{{ Date(date_format($userdata->created_at, 'y-m-d')) }}</td>
                                    <td>{{ $userdata->full_name }}</td>
                                    <td>{{ $userdata->email }}</td>
                                    <td>{{ $userdata->phone }}</td>
                                    <td>{{ $userdata->occupation }}</td>
                                    <td>{{ $userdata->income }}</td>
                                    <td>
                                        <img src="/upload/panCard/{{$userdata->pan}}" width="200px" height="200px" alt="Pan not uploaded"
                                            frameborder="0" />
                                        <br><a href="{{url('/download',$userdata->pan)}}">Download</a>
                                    </td>
                                    <td>
                                        <img src="/upload/adher_front/{{$userdata->adher_front}}" width="200px" height="200px" alt="Aadhar Front-Side not uploaded"
                                            frameborder="0" />
                                        <br>
                                        <a href="{{url('/download-adher_front',$userdata->adher_front)}}">Download</a>    
                                    </td>
                                    <td>
                                        <img src="/upload/adher_back/{{$userdata->adher_back}}" width="200px" height="200px" alt="Aadhar Back-Side not uploaded"
                                            frameborder="0" />
                                        <br><a href="{{url('/download-adher_back',$userdata->adher_back)}}">Download</a>    
                                    </td>
                                    <td>
                                        <img src="/upload/income_prof/{{$userdata->income_prof}}" width="200px" alt="Income proof not uploaded"
                                            height="200px" frameborder="0" />
                                            <br><a href="{{url('/download-income',$userdata->income_prof)}}">Download</a> 
                                    </td>
                                    <td>
                                        <img src="/upload/bill/{{$userdata->bill}}" width="200px" height="200px" alt="Other Statement not uploaded"
                                            frameborder="0" />
                                            <br><a href="{{url('/download-other_bill',$userdata->bill)}}">Download</a> 
                                    </td>
                                    <td>
                                        <img src="/upload/photo/{{$userdata->photo}}" width="200px" alt="Photo not uploaded" height="200px">
                                        <br><a href="{{url('/download-photo',$userdata->photo)}}">Download</a> 
                                    </td>
                                    <td>
                                        <img src="/upload/statment/{{$userdata->statment}}" width="200px" alt="Statement not uploaded"
                                            height="200px" frameborder="0" />
                                            <br><a href="{{url('/download-statement',$userdata->statment)}}">Download</a>  
                                    </td>
                                    <td>{{ $userdata->t_l_code }}</td>
                                    <td>{{ $userdata->e_code }}</td>
                                    <td>{{ $userdata->executive_name }}</td>
                                    <td>{{ $userdata->remark }}</td>
                                    <td>{{ $userdata->message_exe }}</td>
                                    <td style="color: rgb(226, 86, 43)">{{ $userdata->status }}</td>
                                    <td>
                                        <form action="{{ route('message.update', $userdata->id) }}" method="post">
                                            @csrf
                                            {{-- @foreach ($executives as $executive) --}}
                                            <textarea class="form-control"
                                                name="message"> {{ $userdata->message }}</textarea><br>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Okey</button>
                                            </div>
                                            {{-- @endforeach --}}
                                        <td>{{ $userdata->message }}</td>
                                        </form>
                                    </td>
                                    <td>
                                        <div class="mb-3">
                                            <a class="btn btn-success"
                                                href="{{ url('dispatch', $userdata->id) }}">&#160;Dispatch&#160;</a>
                                        </div>
                                        <div class="mb-3">
                                            <a class="btn btn-warning"
                                                href="{{ url('approved', $userdata->id) }}">Approved</a>
                                        </div>
                                        <div class="mb-3">
                                            <a class="btn btn-danger"
                                                href="{{ url('cancel', $userdata->id) }}">&#160;&#160;&#160;Cancel&#160;&#160;</a>
                                        </div>
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
</main>

@endsection