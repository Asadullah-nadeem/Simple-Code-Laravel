<footer class="container-fluid footer_section">
    <!-- Info Section -->
    <section class="info_section layout_padding-top layout_padding2-bottom">
        <div class="container">
            <div class="row">
                <!-- Menu Links -->
                <div class="col-md-6 col-lg-3">
                    <div class="info_links pl-lg-5">
                        <h4>Menu</h4>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/about') }}">About</a></li>
                            <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                            <li><a href="{{ url('/services') }}">Services</a></li>
                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Contact Information -->

                <!-- Social Links -->
                <div class="col-md-6 col-lg-3">
                    <div class="info_social">
                        <h4>Social Link</h4>
                        <div class="social_container">
                            <div><a href="#"><img src="{{ asset('images/facebook-logo.png') }}" alt="Facebook" /></a></div>
                            <div><a href="#"><img src="{{ asset('images/twitter-logo.png') }}" alt="Twitter" /></a></div>
                            <div><a href="#"><img src="{{ asset('images/instagram.png') }}" alt="Instagram" /></a></div>
                            <div><a href="#"><img src="{{ asset('images/linkedin-sign.png') }}" alt="LinkedIn" /></a></div>
                        </div>
                    </div>
                </div>
                <!-- Newsletter Subscription -->
                <div class="col-md-6 col-lg-3">
                    <div class="info_form">
                        <h4>Newsletter</h4>
                        <form action="#">
                            <input type="email" placeholder="Enter Your Email" required />
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Info Section -->

    <!-- Footer -->
    <div class="container-fluid footer_section">
        <p>&copy; {{ date('Y') }} </a></p>
    </div>
</footer>
