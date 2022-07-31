@extends('layouts.admin_master')
@section('title')
    Client Testimonial List
@endsection
@section('testimonial-open')
    menu-open
@endsection
@section('testimonial')
    active
@endsection
@section('testimonial_list')
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
                        <h1>Client Testimonial</h1>
                    </div>
                    <div class="col-md-6">
                        {{-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><button class="btn btn-success">Add</button></li>
            </ol> --}}
                        <a href="{{ route('clientTestimonial.create') }}">
                            <button type="button" class="btn btn-info float-sm-right"><i class="fas fa-plus"></i></button>
                        </a>
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
                                <h3 class="card-title">Client Testimonial List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Designation</th>
                                            <th>Description</th>
                                            <th>Rating</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clientTestimonianlList as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->client_name }}</td>
                                                <td>
                                                    <img src="{{ asset('uploads/clientTestimonial/' . $item->client_image) }}"
                                                        width="60px" height="60px" alt="sliderImage" style="border-radius: 3px;">
                                                </td>
                                                <td>{{ $item->designation }}</td>
                                                <td>{{Str::limit($item->description,70)}}</td>
                                                <td>{{ $item->rating }}</td>
                                               
                                                <td>
                                                    @if ($item->status == '1')
                                                        <div class="mb-2 mr-2 badge badge-info">Active</div>
                                                    @else
                                                        <div class="mb-2 mr-2 badge badge-danger">Deactive</div>
                                                    @endif

                                                </td>
                                                <td style="width: 22%;text-align: center;">
                                                    <form action="{{ route('clientTestimonial.destroy', $item->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <a href="{{ route('clientTestimonial.edit', $item->id) }}">
                                                            <button type="button" class="btn btn-info btn-sm"><i
                                                                    class="far fa-edit"></i>Edit</button>
                                                        </a>
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure?')"><i
                                                                class="far fa-trash-alt"></i>Delete</button>

                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Client Image</th>
                                            <th>Designation</th>
                                            <th>Description</th>
                                            <th>Rating</th>
                                            <th>Status</th>
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
