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
                    <div class="pull-left">
                        <h2>Laravel 8 CRUD </h2>
                    </div>
                    <div class="d-flex flex-row-reverse flex-column">
                        <div class="d-flex">
                            <!-- <a class="btn btn-success text-light mr-5" data-toggle="modal" id="mediumButton"
                                    data-target="#mediumModal" data-attr="{{ route('Wh_executives.create') }}"
                                    title="Create a project">
                                    <i class="fas fa-plus-circle fa-2x"></i>
                                </a> -->

                            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data"
                                class="d-flex">
                                @csrf
                                <!-- <input type="file" name="file" class="form-control">
                                    <button class="btn btn-info">Submit</button> -->

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="">Select File </label>
                                        <input type="file" name="file" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-3 p-4">
                                    <div class="form-group">
                                        <button class="btn btn-primary">Upload</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                {{-- <form action="{{ route('Wh_executive.update', $Wh_executive->id) }}" method="POST">
                    <input type="text" name="code">
                </form> --}}


                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <table class="table table-bordered table-responsive-lg table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">customer_name</th>
                            <th scope="col">contact_number</th>
                            <th scope="col">Location</th>
                            <th scope="col">company_name</th>
                            <th scope="col">Code</th>
                            <th scope="col">Date Created</th>
                            {{-- <th scope="col">Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Wh_executives as $project)
                            <tr>
                                <td scope="row">{{ ++$i }}</td>
                                <td>{{ $project->customer_name }}</td>
                                <td>{{ $project->contact_number }}</td>
                                <td>{{ $project->location }}</td>
                                <td>{{ $project->company_name }}</td>
                                <td>{{ $project->code }}</td>
                                <td>{{ date_format($project->created_at, 'jS M Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


                <!-- small modal -->
                {{-- <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" id="smallBody">
                                <div>
                                    <!-- the result to be displayed apply here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- medium modal -->
                <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" id="mediumBody">
                                <div>
                                    <!-- the result to be displayed apply here -->


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>


    <script>
        // display a modal (small modal)
        $(document).on('click', '#smallButton', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#smallModal').modal("show");
                    $('#smallBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });

        // display a modal (medium modal)
        $(document).on('click', '#mediumButton', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#mediumModal').modal("show");
                    $('#mediumBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });
    </script> --}}

            @endsection
