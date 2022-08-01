@extends('layouts.frontend_master')
@section('frontend_content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Product Details</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Product Details</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">
    
        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                @foreach ($productImage as $item)

                <div class="swiper-slide">
                    <img src="{{asset($item->image)}}" alt="">
                  </div>  
                @endforeach

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: {{ $productSlug->category->cat_name}}</li>
                
                <li><strong>Client</strong>: @foreach ($productclient as $item){{ $item->client->title }}  @endforeach</li>
               
               
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>{{ $productSlug->title}}</h2>
              <p>
                {{ $productSlug->description }}
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  @endsection