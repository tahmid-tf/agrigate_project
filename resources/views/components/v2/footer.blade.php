<!-- Start Footer
    ============================================= -->
<footer class="bg-dark text-light" style="background-image: url(assets/img/shape/brush-down.png);">
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">

                <!-- Single Itme -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="footer-item about">
                        <img class="logo" src="{{ asset('assets/img/logos.png') }}" alt="Logo">
                        <p>
                            We supply seeds to a wide range of customers and organizations. You can find our
                            seeds at leading agrodealers across Bangladesh. We are sourcing quality output through
                            direct purchase.
                        </p>
                        <form action="#">
                            <input type="email" placeholder="Your Email" class="form-control" name="email">
                            <button type="submit"> Go</button>
                        </form>
                    </div>
                </div>
                <!-- End Single Itme -->

                <!-- Single Itme -->
                <div class="col-lg-2 col-md-6 item">
                    <div class="footer-item link">
                        <h4 class="widget-title">Explore</h4>
                        <ul>
                            <li>
                                <a href="{{ route('homepage') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('team') }}">Team</a>
                            </li>
                            <li>
                                <a href="{{ route('project') }}">Projects</a>
                            </li>
                            <li>
                                <a href="{{ route('solutions') }}">Solutions</a>
                            </li>
                            <li>
                                <a href="{{ route('app') }}">Services</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">About</a>
                            </li>
                            <li>
                                <a href="{{ route('career') }}">Career</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Single Itme -->

                <!-- Single Itme -->
                <div class="col-lg-3 col-md-6 item">
                    <div class="footer-item recent-post">
                        <h4 class="widget-title">Recent Projects</h4>
                        <ul>
                            @foreach(\App\Project::skip(0)->take(2)->orderBy('id', 'desc')->get() as $n)


                            <li>
                                <div class="thumb">
                                    <a href="blog-single-with-sidebar.html">
                                        <img src="{{ asset('storage/'.$n->image) }}" alt="Thumb">
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="meta-title">
                                        <span class="post-date">{{ $n->created_at->format('d-F-y') }}</span>
                                    </div>
                                    <h5><a href="blog-single-with-sidebar.html">{!! \Illuminate\Support\Str::limit($n->content_en,30,'...')  !!} </a></h5>
                                </div>
                            </li>

                            @endforeach





                        </ul>
                    </div>
                </div>
                <!-- End Single Itme -->

                <!-- Single Itme -->
                <div class="col-lg-3 col-md-6 item">
                    <div class="footer-item contact">
                        <h4 class="widget-title">Contact Info</h4>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="content">
                                    <strong>Address:</strong>
                                    House 78, Level B3, Road 11, Banani,
                                    Dhaka-1212, Bangladesh
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <strong>Email:</strong>
                                    <a href="mailto:info@agrigate.asia">info@agrigate.asia</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="content">
                                    <strong>Phone:</strong>
                                    <a href="tel:2151234567">+88-02-55045117</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Single Itme -->

            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="row">
                <div class="col-lg-6">
                    <p>&copy; Copyright 2022. Design and Developed by <a
                            href="https://www.linkedin.com/in/tahmid-ferdous-7a66b8134/" target="_blank">Tahmid Ferdous</a></p>
                </div>
                <div class="col-lg-6 text-end">
                    <ul>
{{--                        <li>--}}
{{--                            <a href="about-us.html">Terms</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="about-us.html">Privacy</a>--}}
{{--                        </li>--}}
                        <li>
                            <a href="https://www.linkedin.com/in/tahmid-ferdous-7a66b8134/" target="_blank">Support</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </div>
    <div class="shape-right-bottom">
        <img src="{{ asset('assets/img/shape/10.png') }}" alt="Image Not Found">
    </div>
    <div class="shape-left-bottom">
        <img src="{{ asset('assets/img/shape/11.png') }}" alt="Image Not Found">
    </div>
</footer>
<!-- End Footer -->
