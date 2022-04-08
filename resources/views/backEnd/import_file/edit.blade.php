@extends('layouts.admin')

@section('title', 'Page Admin')

<title>Climbing | Dashboard</title>
@section('sidebar')
    @parent

@endsection

@section('content')

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="text-center font-weight-bolder">
                        <h2 class="font-weight-bold">Edit Wh_executive</h2>
                    </div>
                    <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Wh_executive.index') }}" title="Go back"> <i
                        class="fas fa-backward "></i> </a>
            </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('Wh_executives.update', $Wh_executive->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" value="{{ $Wh_executive->name }}"
                                class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Introduction:</strong>
                            <textarea class="form-control" style="height:50px" name="introduction"
                                placeholder="Introduction">{{ $Wh_executive->introduction }}</textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Location:</strong>
                            <input type="text" name="location" class="form-control"
                                placeholder="{{ $Wh_executive->location }}"
                                value="{{ $Wh_executive->location }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Cost:</strong>
                            <input type="number" name="cost" class="form-control"
                                placeholder="{{ $Wh_executive->cost }}"
                                value="{{ $Wh_executive->cost }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>code:</strong>
                            <input type="number" name="code" class="form-control"
                                placeholder="{{ $Wh_executive->code }}"
                                value="{{ $Wh_executive->code }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <a class="btn btn-primary" href="" data-dismiss="modal"> Cancel</a>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
    @endsection
