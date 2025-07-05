<footer class="main-footer">
    <div class="container" style="display:none;">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-links footer-newsletter-form">
                    <h3>{{ config('app.name') }}</h3>
                    <p>{{ config('app.slogan') }}</p>
                </div>
            </div>
            <div class="col-lg-6">
            </div>

            <div class="col-lg-3">
                <div class="footer-links">
                    <h3>Contact</h3>
                    <ul>
                        <li>{{ config('app.name') }}, LLC.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Copyright Start -->
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="footer-copyright-text">
                        <p>{{ __('Copyright') }} &copy; {{ date('Y') }} <span class="logo-text">{{ config('app.name') }}</span>, SaRL. {{ __('All rights reserved') }}.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Copyright End -->
</footer>
