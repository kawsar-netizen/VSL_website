<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home_page') }}" class="brand-link" target="_blank">
        {{-- <img src="{{asset('assets/admin')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        {{-- <span class="brand-text font-weight-light">VSL</span> --}}
        <img src="{{ asset('assets/frontend') }}/img/vsl-logo.png" alt="Venture Solutions Ltd"
            style="width: 220px; height:50px;">
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link  @yield('dashboard')">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item @yield('category_open')">
                    <a href="#" class="nav-link @yield('category')">
                        <i class="fas fa-bezier-curve nav-icon"></i>
                        <p>
                            Category
                            <i class="fas fa-angle-left right"></i>
                        </p>
                        
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('category.index') }}" class="nav-link @yield('category_list')">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Category List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @yield('slider_open')">
                    <a href="#" class="nav-link @yield('slider')">
                        <i class="fas fa-sliders-h nav-icon"></i>
                        <p>
                            Slider
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('slider.index') }}" class="nav-link @yield('slider_list')">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Slider List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @yield('about_open')">
                    <a href="#" class="nav-link @yield('about')">
                        <i class="fas fa-building nav-icon"></i>
                        <p>
                            About
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('about.index') }}" class="nav-link @yield('about_list')">
                                <i class="fas fa-list nav-icon"></i>
                                <p>About List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @yield('clientlogo-open')">
                    <a href="#" class="nav-link @yield('clientlogo')">
                        <i class="fab fa-intercom nav-icon"></i>
                        <p>
                            Client Logo
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('clientLogo.index') }}" class="nav-link @yield('clientlogo_list')">
                                <i class="fas fa-list nav-icon"></i>
                                <p>ClientLogo List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @yield('testimonial-open')">
                    <a href="#" class="nav-link @yield('testimonial')">
                        <i class="fas fa-user-nurse nav-icon"></i>
                        <p>
                            Client Testimonial
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('clientTestimonial.index') }}" class="nav-link @yield('testimonial_list')">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Client Testimonial List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @yield('service-open')">
                    <a href="#" class="nav-link @yield('service')">
                        <i class="fas fa-taxi nav-icon"></i>
                        <p>
                            Service
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('service.index') }}" class="nav-link @yield('service_list')">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Service List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @yield('product-open')">
                    <a href="#" class="nav-link @yield('product')">
                        <i class="fab fa-product-hunt nav-icon"></i>
                        <p>
                            Product
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('product.index') }}" class="nav-link @yield('product_list')">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Product List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @yield('team-open')">
                    <a href="#" class="nav-link @yield('team')">
                        <i class="fas fa-users nav-icon"></i>
                        <p>
                            Our Team
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('team.index') }}" class="nav-link @yield('team_list')">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Team List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @yield('feature-open')">
                    <a href="#" class="nav-link @yield('feature')">
                        <i class="fas fa-hotel nav-icon"></i>
                        <p>
                            Our Feature
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('feature.index') }}" class="nav-link @yield('feature_list')">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Feature List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @yield('open_contact')">
                    <a href="#" class="nav-link @yield('contact')">
                      
                        <i class="far fa-address-book nav-icon"></i>
                        <p>
                            Contact Us
                            <i class="fas fa-angle-left right"></i>
                            
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('contact.index') }}" class="nav-link @yield('contact_list')">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Contact Us List</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
