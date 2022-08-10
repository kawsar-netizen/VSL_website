@extends('layouts.admin_master')
@section('title')
    Product Details
@endsection
@section('product-open')
    menu-open
@endsection
@section('product')
    active
@endsection
@section('product_list')
    active
@endsection
@section('content_page')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <div class="card card-info" style="margin-top: 70px;">
                            <div class="card-header">
                                <h3 class="card-title">{{ $productShow->title }}</h3>
                            </div>

                            <div class="card-body">
                                <div class="row gy-4">
                                    <div class="col-lg-4">
                                        <div class="portfolio-details-slider swiper">
                                            <div class="swiper-wrapper align-items-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('uploads/product/' . $productShow->image) }}"alt="Thumbnail Image"style="border-radius: 3px;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div style="padding: 0 10px">
                                            <div class="portfolio-info">
                                                <h3>Product information</h3>
                                                <ul>
                                                    <li>
                                                        <strong>Category Name</strong>:
                                                        {{ $productShow->category->cat_name }}
                                                    </li>
                                                    <li>
                                                        <strong>Client Name</strong>:
                                                        @php
                                                            $clients = App\Models\Admin\ProductClient::where('product_id', $productShow->id)->get();
                                                        @endphp
                                                        @foreach ($clients as $client)
                                                            <span class="badge">{{ $client->client->title }}</span>
                                                        @endforeach
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="portfolio-description">
                                                <h2>Description</h2>
                                                <p>
                                                    {{ $productShow->description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card card-info" style="margin-top: 70px;">
                            <div class="card-header">
                                <h3 class="card-title">Product Gallery</h3>
                            </div>

                            <div class="card-body">
                                <div class="row gy-4">
                                    @php
                                        $imges = App\Models\Admin\ProductImage::where('product_id', $productShow->id)->get();
                                    @endphp
                                    @foreach ($imges as $imge)
                                        <div class="col-md-3">
                                            <img class="img-fluid"
                                                src="{{ asset($imge->image) }}"alt="Thumbnail Image"style="border-radius: 3px;">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
