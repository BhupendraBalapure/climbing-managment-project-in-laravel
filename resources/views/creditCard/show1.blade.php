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
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1">
                            Credit Card
                            {{-- v class="card-body"> --}}
                            <form action="{{ route('BasicinfoExport') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{-- <input type="file" name="file" class="form-control"> --}}
                                <br>
                                {{-- <button class="btn btn-success">Import User Data</button> --}}
                                <a class="btn btn-warning" href="{{ route('BasicinfoExport') }}">Export User Data</a>
                            </form>
                        </i>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" name="myAnchor" id="myAnchor" style="margin-right: 100rem;">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                    </tr>
                                </thead>
                                <tbody>
        
                                    @foreach ($CreditCards as $CreditCard)
                                        <tr>
                                            <th scope="row" hidden>{{ $CreditCard->id }}
                                            <th>{{ Date(date_format($CreditCard->created_at, 'y-m-d')) }}</th>
                                            <!--<td>{{ $CreditCard->created_at }}</td>-->
                                            <td>{{ $CreditCard->name }}</td>
                                            <td>{{ $CreditCard->mobile }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
        
                            </table>
                            <div class="d-flex">
                                {!! $CreditCards->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </main>
@endsection

</head>

<body>
