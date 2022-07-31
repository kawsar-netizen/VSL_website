@extends('layouts.admin_master')
@section('title')
    Contact List
@endsection
@section('open_contact')
    menu-open
@endsection
@section('contact')
    active
@endsection
@section('contact_list')
    active
@endsection
@section('content_page')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->

            @if (Session::has('message'))
                <div>
                    <p class="alert alert-info">{{ Session::get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" style="font-size:20px">×</span>
                        </button>
                    </p>
                </div>
            @endif
            @if (Session::has('update'))
                <div>
                    <p class="alert alert-info">{{ Session::get('update') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" style="font-size:20px">×</span>
                        </button>
                    </p>
                </div>
            @endif
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Contact Us List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contactList as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->client_name }}</td>
                                                <td>{{ $item->client_email }}</td>
                                                <td>{{ $item->subject }}</td>
                                                <td>{{ $item->message }}</td>
                                            <td style="width: 22%;text-align: center;">
                                                <a href="{{ route('contact.show', $item->id) }}">
                                                    <button type="button" class="btn btn-info btn-sm"><i
                                                            class="far fa-eye"></i>View</button>
                                                </a>
                                            </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </section>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->
@endsection
