@extends('layouts.frontend_master')
@section('frontend_content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">


        <div class="carousel-inner" role="listbox">
            
                @php
                    $i = 1;
                @endphp

                @foreach ($sliderItem as $item)
                    <div class="carousel-item {{ $i == '1' ? 'active' : '' }}">
                        @php
                            $i++;
                        @endphp
                        <div class="container">
                            <div class="row justify-content-center gy-6">
                                <div class="col-lg-10 col-md-8">
                                    <img src="{{ asset('uploads/slider/' . $item->image) }}" alt=""
                                        class="img-fluid img">
                                </div>
{{-- 
                                <div class="col-lg-9 text-center">
                                    <h2>{{ $item->title }}</h2>
                                    <p>{{ $item->description }}</p>
                                </div> --}}

                            </div>
                        </div>
                    </div><!-- End Carousel Item -->
                @endforeach

                <a class="carousel-control-prev" href="#hero" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators"></ol>
           
        </div>


    </section><!-- End Hero Section -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                @foreach ($companyAbout as $item)
                    <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-12">
                            <div class="about-img">
                                <img src="{{ asset('uploads/about/' . $item->image) }}" class="img-fluid"
                                    alt="Company Image">
                            </div>
                        </div>
                    </div>
                    <div class="section-header">
                        <h2 class="header_title">{{ $item->title }}</h2>
                        <p style="text-indent: 50px;">{{ $item->description }}</p>
                    </div>
                @endforeach

            </div>
        </section><!-- End About Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        @foreach ($clientLogo as $item)
                            <div class="swiper-slide">
                                <img
                                    src="{{ asset('uploads/clientLogo/' . $item->image) }}"class="img-fluid image_size"alt="">
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </section><!-- End Clients Section -->


        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <ul class="nav nav-tabs row gy-4 d-flex">

                    @foreach ($ourFeature as $count => $item)
                        <li class="nav-item col-6 col-md-4 col-lg-2">
                            <a class="nav-link" @if ($count == 0) class="active" @endif data-bs-toggle="tab"
                                data-bs-target="#tab-{{ $item->id }}">
                                <i class="{{ $item->tab_icon }}"></i>
                                <h6 style="text-align: center;">{{ $item->tab_name }}</h6>
                            </a>
                        </li>
                    @endforeach

                </ul>

                <div class="tab-content">
                    @foreach ($ourFeature as $count => $item)
                        <div @if ($count == 0) class="tab-pane active" @else class="tab-pane" @endif
                            id="tab-{{ $item->id }}">
                            <div class="row gy-4">
                                <div class="col-lg-7 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                    <h3>{{ $item->tab_name }}</h3>
                                   <ul>
                                        <li class="fst-italic">
                                            {{-- <i class="bi bi-check-circle-fill"></i> --}}
                                            {!! $item->tab_description !!}
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-5 order-1 order-lg-2 text-center" data-aos="fade-up"
                                    data-aos-delay="200">
                                    <img style="height: 300px; width:500px;border-radius: 5px;" src="{{ asset('uploads/feature/' . $item->image) }}" alt="Feature Image"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Services</h2>
                    <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad
                        dolores
                        adipisci aliquam.</p>
                </div>

                <div class="row gy-5">
                    @foreach ($ourService as $item)
                        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                            <div class="service-item">
                                <div class="img">
                                    <img src="{{ asset('uploads/service/' . $item->card_image) }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="details position-relative card_lan">
                                    <div class="icon">
                                        <i class="{{ $item->card_icon }}"></i>
                                    </div>
                                    <a class="stretched-link">
                                        <h3>{{ $item->card_title }}</h3>
                                    </a>
                                    <p>{{ $item->card_description }}</p>
                                </div>
                            </div>
                        </div><!-- End Service Item -->
                    @endforeach
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="testimonials-slider swiper">
                    <div class="swiper-wrapper">

                        @foreach ($clientTestimonial as $item)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="{{ asset('uploads/clientTestimonial/' . $item->client_image) }}"
                                        class="testimonial-img" alt="">
                                    <h3>{{ $item->client_name }}</h3>
                                    <h4>{{ $item->designation }}</h4>

                                    <div class="stars">
                                        {{-- Start Rating --}}
                                        @for ($i = 0; $i < 5; $i++)
                                            @if (floor($item->rating) - $i >= 1)
                                                {{-- Full Start --}}
                                                <i class="fas fa-star text-warning"> </i>
                                            @elseif ($item->rating - $i > 0)
                                                {{-- Half Start --}}
                                                <i class="fas fa-star-half-alt text-warning"> </i>
                                            @else
                                                {{-- Empty Start --}}
                                                <i class="far fa-star text-warning"> </i>
                                            @endif
                                        @endfor
                                        {{-- End Rating --}}
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        {{ $item->description }}
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->


        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio" data-aos="fade-up">

            <div class="container">

                <div class="section-header">
                    <h2>Products</h2>
                    <p>View our product to see a selection of our clients and work we’ve done that helped them to take their
                        business to the next level.</p>
                </div>

            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">

                    <div class="row g-0 portfolio-container">

                        @foreach ($ourProduct as $item)
                            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                                <img style="height: 220px;width:400px;"src="{{ asset('uploads/product/' . $item->image) }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <a href="{{ asset('uploads/product/' . $item->image) }}" title="{{ $item->title }}"
                                        data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="{{ route('productDetails', $item->slug) }}" title="More Details"
                                        class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div><!-- End Portfolio Item -->
                        @endforeach
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Team</h2>
                    <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam
                        voluptas
                        asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
                </div>

                <div class="row gy-5">

                    @foreach ($ourTeam as $item)
                        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="{{ asset('uploads/team/' . $item->image) }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="member-info">
                                    <h4>{{ $item->emp_name }}</h4>
                                    <span>{{ $item->emp_designation }}</span>
                                </div>
                            </div>
                        </div><!-- End Team Member -->
                    @endforeach
                </div>

            </div>
        </section><!-- End Team Section -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-header">
                    <h2>Contact Us</h2>
                    <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad
                        dolores
                        adipisci aliquam.</p>
                </div>

            </div>

            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14610.285289716674!2d90.4219536!3d23.72699775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9ef5ba1e8d5%3A0x225dcc5ebf28f844!2sjomidar%20palace!5e0!3m2!1sbn!2sbd!4v1659431502339!5m2!1sbn!2sbd"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

            <div class="container">

                <div class="row gy-5 gx-lg-5">

                    <div class="col-lg-4">

                        <div class="info">
                            <h3>Get in touch</h3>
                            <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi
                                minus.</p>

                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Location:</h4>
                                    <p>Jomidar Palace, Level: 10, 291 Fakirapool Inner Circular Road, Motijheel, Dhaka-1000
                                    </p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>info@venturenxt.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Call:</h4>
                                    <p>01712-555117 , 01712126345 , 01927-882070</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>
                    <div class="col-lg-8">
                        <form action="{{ route('contact.store') }}" method="post" role="form"
                            class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="client_name" class="form-control" id="client_name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="client_email" id="client_email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
