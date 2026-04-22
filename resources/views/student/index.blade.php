@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Students Information') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="alert alert-info">
                        This is the table for the students
                    </div>

                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {{-- @foreach($users as $student) --}}
                                    <tr>
                                        <td>John Doe</td>
                                        <td>Johndoe@sample.com</td>
                                    </tr>
                                    <tr>
                                        <td>Matthew Bartolomeo</td>
                                        <td>matthewbartolomeo@sample.com</td>
                                    </tr>
                                    <tr>
                                        <td>Johnella Dondon</td>
                                        <td>johnelladondon@sample.com</td>
                                    </tr>
                                    <tr>
                                        <td>Precious Maniacop</td>
                                        <td>preciousmaniacop@sample.com</td>
                                    </tr>

                                        <td>John Cedric</td>
                                        <td>johnecedric@sample.com</td>
                                    </tr>
                                {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <button type="button" class="btn btn-success">
                            Add Student Record
                    </button>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection