<!-- ...::: Start Footer Section :::... -->
<footer class="footer-section section-bg overflow-hidden pos-relative">
    <div class="footer-inner-shape-top-left"></div>
    <div class="footer-inner-shape-top-right"></div>
    <div class="footer-section-top section-gap-t-165">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Start Section Content -->
                    <div class="section-content pos-relative text-center">
                        <span class="section-tag">Get Latest Updates</span>
                        <h2 class="section-title">Subscribe For Newsletter</h2>
                    </div>
                    <!-- End Section Content -->
                </div>
            </div>
            <div class="footer-top-wrapper text-center">
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="{{route('subscriber.store')}}" class="footer-newsletter">
                            @csrf
                            <input type="email" value="demo@example.com" name="email">
                            <div class="mb-6 mt-6">
                                <div class="default-form-group">
                                    <div class="g-recaptcha" data-sitekey="{{config('services.recaptcha.site_key')}}"></div>
                                </div>
                            </div>

                            <input class="submit-btn" type="submit" value="Subscribe">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-center section-gap-tb-165">
        <div class="container">
            <div class="row justify-content-between align-items-center mb-n5">
                <div class="col-auto mb-5">
                    <!-- Start Single Footer Info -->
                    <div class="footer-single-info">
                        <a href="tel:+0123456789" class="info-box">
                            <span class="icon"><i class="fa-solid fa-phone"></i></span>
                            <span class="text">017 04 519296</span>
                        </a>
                    </div>
                    <!-- Start Single Footer Info -->
                </div>
                <div class="col-auto mb-5">
                    <!-- Start Single Footer Info -->
                    <div class="footer-single-info">
                        <a href="mailto:inzams.hp@gmail.com" class="info-box">
                            <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                            <span class="text">inzams.hp@gmail.com</span>
                        </a>
                    </div>
                    <!-- Start Single Footer Info -->
                </div>
                <div class="col-auto mb-5">
                    <!-- Start Single Footer Info -->
                    <div class="footer-single-info">
                        <ul class="social-link">
                            <li><a href="https://www.facebook.com/developerinzams" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="https://www.youtube.com/c/developerinzams" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/inzams/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <!-- Start Single Footer Info -->
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between align-items-center flex-column-reverse flex-md-row">
                <div class="col-auto">
                    <div class="footer-copyright">
                        <p class="copyright-text">&copy; 2021 All rights reserved <a href="index.html"><i class="fa-solid fa-heart"></i> InZam'S</a></p>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="{{ route('home')}}" class="footer-logo">
                        <div class="logo">
                            <img src="{{asset('assets/images/logo.png')}}" alt="developerinzams">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ...::: End Footer Section :::... -->
