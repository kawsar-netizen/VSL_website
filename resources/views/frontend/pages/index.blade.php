@extends('layouts.frontend_master')
@section('frontend_content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="carousel-item active">
      <div class="container">
        <div class="row justify-content-center gy-6">
          <div class="col-lg-5 col-md-8">
            <img src="{{asset('assets/frontend')}}/img/slider/remit.png" alt="" class="img-fluid img">
          </div>

          <div class="col-lg-9 text-center">
            <h2>Welcome to Venture Solutions Ltd</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>

        </div>
      </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item">
      <div class="container">
        <div class="row justify-content-center gy-6">

          <div class="col-lg-5 col-md-8">
            <img src="{{asset('assets/frontend')}}/img/slider/ekyc.png" alt="" class="img-fluid img">
          </div>

          <div class="col-lg-9 text-center">
            <h2>Welcome to Venture Solutions Ltd</h2>
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
          
          </div>

        </div>
      </div>
    </div><!-- End Carousel Item -->

    <a class="carousel-control-prev" href="#hero" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

    <ol class="carousel-indicators"></ol>

  </section><!-- End Hero Section -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        

        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-12">
            <div class="about-img">
              <img src="{{asset('assets/frontend')}}/img/all.jpeg" class="img-fluid" alt="">
            </div>
          </div>
        </div>

        <div class="section-header">
          <h2 class="header_title">About Our Company</h2>
          <p>Venture Solutions Limited, a financial software company known for keeping its promises, was formed by true professionals. Cherished a huge dream in heart, a band of tech nerds approached to develop a grand tech house resulted of Venture Solutions Limited. We believe in innovation rather than tradition.</p>
          <p>Our reverend chairman being a professional tech savvy inclined to implement the inner dream with his team and started his journey back in 2007. With more than 10 years in tech industry, we never failed to serve our core services to our clients and customers. We started working in local software market from the beginning and from then our company has been getting bigger as well as getting the high recognition locally.</p>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{asset('assets/frontend')}}/img/client-logo/ab_bank.png"class="img-fluid image_size" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/frontend')}}/img/client-logo/dhaka-bank.png" class="img-fluid image_size" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/frontend')}}/img/client-logo/IFIC-Logo.png" class="img-fluid image_size" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/frontend')}}/img/client-logo/mercantile.png" class="img-fluid image_size" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/frontend')}}/img/client-logo/one-bank.png" class="img-fluid image_size" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/frontend')}}/img/client-logo/uttara.png" class="img-fluid image_size" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/frontend')}}/img/client-logo/Union-Bank-Limited-.png" class="img-fluid image_size" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/frontend')}}/img/client-logo/sebl_logo.png" class="img-fluid image_size" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/frontend')}}/img/client-logo/sbac.png" class="img-fluid image_size" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/frontend')}}/img/client-logo/ncc-new.png" class="img-fluid image_size" alt=""></div>
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4 d-flex">

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <i class="bi bi-binoculars color-cyan mb-1"></i>        
              <h6>Dexterity</h6>
            </a>
          </li><!-- End Tab 1 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <i class="bi bi-people color-indigo mb-1"></i>
              <h6>Team Strength</h6>
            </a>
          </li><!-- End Tab 2 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <i class="bi bi-brightness-high color-teal mb-1"></i>
              <h6>Rapid Delivery</h6>
            </a>
          </li><!-- End Tab 3 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <i class="bi bi-command color-red mb-1"></i>
              <h6>Most Favorable Pace</h6>
            </a>
          </li><!-- End Tab 4 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
              <i class="bi bi-easel color-blue mb-1"></i>
              <h6>Transparency</h6>
            </a>
          </li><!-- End Tab 5 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
              <i class="bi bi-map color-orange mb-1"></i>
              <h6>Partnership</h6>
            </a>
          </li><!-- End Tab 6 Nav -->

        </ul>

        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <h3>Dexterity</h3>
                <ul>
                  <li class="fst-italic">
                    <i class="bi bi-check-circle-fill"></i> 
                    A key advantage of working with Venture Solutions Ltd. (VSL) is that we’ve effectively built complex systems a hundred times over and are able to react to alter requirements and new opportunities. We typically work in two-week development sprints, side by side with our clients.
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="{{asset('assets/frontend')}}/img/features/Dexterity.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 1 -->

          <div class="tab-pane" id="tab-2">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <h3>Team Strength</h3>
                <ul>
                  <li class="fst-italic">
                    <i class="bi bi-check-circle-fill"></i> 
                    VSL engages with clients using a simple “Team Strength” model. Rather than bouncing between projects on an hourly or daily basis, designers and engineers are assigned to one, full-time project at a time. This allows the team to focus solely on clients’ goals, internalizing a product vision, and taking pride and ownership in their work.
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="{{asset('assets/frontend')}}/img/features/Team-Strenth.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 2 -->

          <div class="tab-pane" id="tab-3">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <h3>Rapid Delivery</h3>
                <ul>
                  <li class="fst-italic">
                    <i class="bi bi-check-circle-fill"></i> 
                    The more you build before engaging real users, the upper the likelihood you’re building the wrong thing. Putting working software into the hands of users allows the team to focus on what matters, saving valuable development time and resources. In fact, whatever we deliver, reach you due time.
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="{{asset('assets/frontend')}}/img/features/Rapid-delivary.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 3 -->

          <div class="tab-pane" id="tab-4">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <h3>Most Favorable Pace</h3>
                <ul>
                  <li class="fst-italic">
                    <i class="bi bi-check-circle-fill"></i> 
                    We aim to work at a pace and quality metric that can be maintained without letting up. We put our nose to the grindstone, but also know the value in taking the time to recharge and come back to work with fresh eyes, clear minds and renewed enthusiasm.
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="{{asset('assets/frontend')}}/img/features/Most-Favorable-Place.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 4 -->

          <div class="tab-pane" id="tab-5">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <h3>Transparency</h3>
                <ul>
                  <li class="fst-italic">
                    <i class="bi bi-check-circle-fill"></i> 
                    VSL trusts in “drastic transparency”. Our clients have inclusive visibility into, and immediate ownership of all work-in-progress. Our suite of project tools document and communicate product conversations, maintainable and extensible manner.
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="{{asset('assets/frontend')}}/img/features/Transparency.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 5 -->

          <div class="tab-pane" id="tab-6">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <h3>Partnership</h3>
                <ul>
                  <li class="fst-italic">
                    <i class="bi bi-check-circle-fill"></i> 
                    The goal is to be a long-term partner. We grave ourselves on the quality of our code or pixel-perfect design comps and the value of our consultation. We constantly challenge assumptions, often using disciplined prioritization to build the right features at the right time.
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="{{asset('assets/frontend')}}/img/features/Partnership.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 6 -->

        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>
          <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores
            adipisci aliquam.</p>
        </div>

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="{{asset('assets/frontend')}}/img/VSL-website/Service/venture-digital.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative card_lan">
                <div class="icon">
                  <!-- <i class="bi bi-activity"></i> -->
                  <i class="fa-solid fa-tachograph-digital"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Venture Digital</h3>
                </a>
                <p class="card_text">Venture Digital, a fully digital marketing service provider in Bangladesh, provides 360-degree service including SEO, SEM, SMM, SMO, AI Chatbot, Paid Ads, content creation like OVC, social media, video and image ads, web ads etc. and also email marketing, SMS marketing and push notification services are provided by us.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="{{asset('assets/frontend')}}/img/VSL-website/Service/software-dev.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative card_lan">
                <div class="icon">
                  <!-- <i class="bi bi-broadcast"></i> -->
                  <i class="fa-solid fa-laptop-code"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Software Development</h3>
                </a>
                <p class="card_text">Always stands beside to take care of your business software solution with advance performance . Modern, intelligent and well-developed elements are used to implement the accurate software solution that you required. We try our best to reach the goal of integrity by improving your business.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="{{asset('assets/frontend')}}/img/VSL-website/Service/banking-solution.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative card_lan">
                <div class="icon">
                  <!-- <i class="bi bi-easel"></i> -->
                  <i class="bi bi-bank"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Banking Solution</h3>
                </a>
                <p class="card_text">Standard and customized banking, internet banking, mobile banking apps, cyber security The banking sector holds the central position in the global economy. Banking Customers have started demanding flawless, multi-channel service experiences.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
            <div class="service-item">
              <div class="img">
                <img src="{{asset('assets/frontend')}}/img/VSL-website/Service/chatbot.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative card_lan">
                <div class="icon">
                  <!-- <i class="bi bi-bounding-box-circles"></i> -->
                  <!-- <i class="fa-solid fa-message-bot"></i> -->
                  <i class="bi bi-chat-right-text"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>AI Chatbot</h3>
                </a>
                <p class="card_text">This is an artificial intelligence self-learning bot. It is professional. This is eager to provide better services to the people on Facebook messenger. This is suitable for increasing customer experiences. You can drive your customers by using our AI chatbot in your own biz such as airlines, hospitals etc.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
            <div class="service-item">
              <div class="img">
                <img src="{{asset('assets/frontend')}}/img/VSL-website/Service/mobile-dev.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative card_lan">
                <div class="icon">
                  <!-- <i class="bi bi-calendar4-week"></i> -->
                  <i class="bi bi-phone-flip"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Mobile APP </h3>
                </a>
                <p class="card_text">we execute the most unique and sophisticated mobile app exactly as you require Mobile app development is a practice that is surrounded by enormous challenges. Our developers build satisfiable rich native mobile apps on several platforms such as iOS, Android to make your business comfier.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
            <div class="service-item">
              <div class="img">
                <img src="{{asset('assets/frontend')}}/img/VSL-website/Service/e-commerce.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative card_lan">
                <div class="icon">
                  <!-- <i class="bi bi-chat-square-text"></i> -->
                  <i class="fa-solid fa-cash-register"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>E-Commerce</h3>
                </a>
                <p class="card_text">Our extraordinary e-commerce solution can drag customers back to your store E-Commerce is the easiest and the quickest way to boost up your business. And e-commerce is the ‘behind’ any successful modern business also. Our team work on website development, mobile apps solution on iOS and Android platform for making your online business better</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('assets/frontend')}}/img/venture_testimonials/one_logo.png" class="testimonial-img" alt="">
                <h3>One Bank</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium
                  quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->


            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('assets/frontend')}}/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
                  labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

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
          <p>View our product to see a selection of our clients and work we’ve done that helped them to take their business to the next level.</p>
        </div>

      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
          data-portfolio-sort="original-order">

          <div class="row g-0 portfolio-container">

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="{{asset('assets/frontend')}}/img/products/remitbook.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <a href="{{asset('assets/frontend')}}/img/products/remitbook.jpg" title="Remit Book" data-gallery="portfolio-gallery"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="product-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
              <img src="{{asset('assets/frontend')}}/img/products/finsight.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <a href="{{asset('assets/frontend')}}/img/products/finsight.jpg" title="Product 1" data-gallery="portfolio-gallery"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="product-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
              <img src="{{asset('assets/frontend')}}/img/products/finstyle.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <a href="{{asset('assets/frontend')}}/img/products/finstyle.jpg" title="Branding 1" data-gallery="portfolio-gallery"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="product-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
              <img src="{{asset('assets/frontend')}}/img/products/hrbook.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <a href="{{asset('assets/frontend')}}/img/products/hrbook.jpg" title="Branding 1" data-gallery="portfolio-gallery"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="product-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="{{asset('assets/frontend')}}/img/products/ISS360.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <a href="{{asset('assets/frontend')}}/img/products/ISS360.jpg" title="App 2" data-gallery="portfolio-gallery"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="product-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
              <img src="{{asset('assets/frontend')}}/img/products/kyc-web.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <a href="{{asset('assets/frontend')}}/img/products/kyc-web.jpg" title="Product 2" data-gallery="portfolio-gallery"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="product-details.html" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Team</h2>
          <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas
            asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
        </div>

        <div class="row gy-5">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('assets/frontend')}}/img/venture_team/Sifar-Bhai.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
                <h4>Sipar Ahmed</h4>
                <span>Vice President</span>
              </div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('assets/frontend')}}/img/venture_team/PP-Liton.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
                <h4>Md. Ashiqur Rahman</h4>
                <span>Director</span>
              </div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('assets/frontend')}}/img/venture_team/ferdous.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
                <h4>Md. Ferdous Bin Alim</h4>
                <span>Technical Lead</span>
              </div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('assets/frontend')}}/img/venture_team/nishad_bhai.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
                <h4>Md. Montasir Tasneem</h4>
                <span>PD, Senior Software Eng.</span>
              </div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('assets/frontend')}}/img/venture_team/robiul.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
                <h4>Rabiul Hasan</h4>
                <span>Software Engineer</span>
              </div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('assets/frontend')}}/img/venture_team/ramzan.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
                <h4>Md. Ramjan Hosen</h4>
                <span>Asst. Software Engineer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('assets/frontend')}}/img/venture_team/Md.Samiul-Haque-Image.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
                <h4>Md. Samiul Haque</h4>
                <span>Asst. Software Engineer
                </span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('assets/frontend')}}/img/venture_team/Shahabuddin.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
                <h4>Shahabuddin</h4>
                <span>Asst. Software Engineer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('assets/frontend')}}/img/venture_team/samer.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
                <h4>Abul Kauser Samer</h4>
                <span>Junior Software Engineer</span>
              </div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('assets/frontend')}}/img/venture_team/kawser.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
                <h4>Md. Kawsar Khan Sizar</h4>
                <span>Junior Software Engineer</span>
              </div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('assets/frontend')}}/img/venture_team/shopon.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
                <h4>Khaled Mahmud</h4>
                <span>VP, Sales and Marketing</span>
              </div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('assets/frontend')}}/img/venture_team/khalid_mostafa.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
                <h4>Khalid Mostafa</h4>
                <span>Senior Manager</span>
              </div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('assets/frontend')}}/img/venture_team/mamun.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
                <h4>Kazi Abdullah al Mamun</h4>
                <span>Senior Executive</span>
              </div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('assets/frontend')}}/img/venture_team/khokon.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
                <h4>Imarn Hossain Khokon</h4>
                <span>Junior Executive</span>
              </div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('assets/frontend')}}/img/venture_team/abid.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
                <h4>Golam Mostofa Abid</h4>
                <span>Junior Marketing</span>
              </div>
            </div>
          </div><!-- End Team Member -->
      </div>

      </div>
    </section><!-- End Team Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores
            adipisci aliquam.</p>
        </div>

      </div>

      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
          frameborder="0" allowfullscreen></iframe>
      </div><!-- End Google Maps -->

      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Get in touch</h3>
              <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Jomidar Palace, Level: 10, 291 Fakirapool Inner Circular Road, Motijheel, Dhaka-1000</p>
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
            <form action="{{route('contact.store')}}" method="post" role="form" class="php-email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="client_name" class="form-control" id="client_name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="client_email" id="client_email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
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