@extends('layouts.admin')

@section('title', 'Page Admin')

<title>Climbing | Dashboard</title>
@section('sidebar')
    @parent

@endsection

@section('content')
    <div class="card-body">
        <div class="table-responsive" name="myAnchor" id="myAnchor" style="margin-right: 100rem;">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th> introduction</th>
                        <th> location</th>
                        <th>cost</th>
                        <th>code</th>

                        {{-- <th>Remark</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wh_executive as $wh_executives)
                        <tr>
                            <th>{{ Date(date_format($wh_executives->created_at, 'y-m-d')) }}</th>
                            td>{{ $wh_executives->customer_name }}</td>
                                <td>{{ $wh_executives->contact_number }}</td>
                                <td>{{ $wh_executives->location }}</td>
                                <td>{{ $wh_executives->company_name }}</td>
                                <td>{{ $wh_executives->code }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex">
            </div>
        </div>
    </div>
@endsection
