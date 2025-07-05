@extends('frontend.layouts.master')

@section('content')
    <div class="hero parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hero-content">
                        <div class="section-title dark-section">
                            <h3 class="wow fadeInUp">{{ __('Welcome to') }} <span class="logo-text">{{ config('app.name') }}</span></h3>
                            <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">{{ __('Sovereign Cloud') }} <span>{{ __('Powered by Renewable Energy') }}</span></h1>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">{{ __('The best sovereign European data centers should be sustainable, efficient, and resilient.') }} <span class="logo-text">{{ config('app.name') }}'s {{ __('are. Let us prove it to you…') }}</span></p>
                        </div>

                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.6s">
                            <div class="hero-btn">
                                <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSdHZ2B50AAL_VXJCbev9U_G6oGtqGFUjpcy-vJglmDVR039AQ/viewform?usp=header" class="btn-default btn-highlighted">{{ __('Register here to find out more about') }} <span class="logo-text">{{ config('app.name') }}</span></a>
                            </div>
                        </div>
                        <div class="hero-content-footer">
                            <div class="hero-list wow fadeInUp" data-wow-delay="0.8s">
                                <ul>
                                    <li>{{ __('Sovereign cloud solutions') }}</li>
                                    <li>{{ __('100% Renewable energy') }}</li>
                                    <li>{{ __('Urban data centers') }}</li>
                                    <li>{{ __('Ridiculously low latency') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-us-image">
                        <div class="about-image-box about-img-1">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/server-1.png') }}" alt="{{ config('app.name') }} Sustainable Data Center Infrastructure">
                            </figure>
                        </div>
                        <div class="about-image-box">
                            <div class="about-img-2">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/images/server-2.png') }}" alt="Green Energy Powered Cloud Infrastructure">
                                </figure>
                            </div>

                            <div class="about-img-3">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/images/server-3.png') }}" alt="Sustainable Cloud Computing Solutions">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-us-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ __('ABOUT US') }}</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-delay="0.2s" data-cursor="-opaque">{{ __('Pioneering') }} <span>{{ __('sustainable cloud infrastructure') }}</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s"> <span class="logo-text">{{ config('app.name') }}</span> {{ __('is transforming data centers with our innovative approach to sovereign cloud services, powered by 100% renewable energy and designed for maximum resilience and efficiency') }}.</p>
                        </div>
                        <div class="about-us-body wow fadeInUp" data-wow-delay="0.6s">
                            <div class="about-us-body-img">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/server-4.png') }}" alt="Eco-Friendly Data Center Operations">
                                </figure>
                            </div>
                            <div class="about-us-body-content">
                                <h3>{{ __('Sustainable by design') }}</h3>
                                <p style="line-height: 1rem; text-align: justify; font-size: 12px;">{{ __('Our fractional data center fabric captures renewable heat for district heating systems, creating a circular energy economy while ensuring data sovereignty and low latency') }}.</p>
                            </div>
                        </div>
                        <div class="about-us-footer wow fadeInUp" data-wow-delay="0.8s">
                            <div class="about-footer-list">
                                <ul>
                                    <li>{{ __('Sovereign cloud solutions') }}</li>
                                    <li>{{ __('Renewable energy integration') }}</li>
                                    <li>{{ __('AI-optimized operations') }}</li>
                                    <li>{{ __('100% water free') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="our-feature">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="our-feature-images">
                        <div class="feature-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/server-3.webp') }}" alt="">
                            </figure>
                        </div>
                        <div class="company-experience-info">
                            <div class="feature-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/images/feature-image-2.webp') }}" alt="Server with Renewable Energy">
                                </figure>
                            </div>
                            <div class="company-experience-box">
                                <div class="company-experience-content">
                                    <h2><span class="counter">100</span>%</h2>
                                    <p>{{ __('Renewable energy') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="our-feature-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ __('OUR EXPERTISE') }}</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">{{ __('Advanced network solutions') }} <span>{{ __('with unbiased expertise') }}</span></h2>
                        </div>

                        <div class="ferature-list">
                            <div class="ferature-list-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-ferature-1.svg') }}" alt="100% Renewable Energy Icon">
                                </div>
                                <div class="ferature-list-content">
                                    <h3>{{ __('Ultra-sustainable & locally powered') }}</h3>
                                    <p>{{ __('Our neighborhood data centers run on 100% renewable energy and recycle our waste heat into local District Heating systems — zero water usage, zero carbon, no compromises.') }}</p>
                                </div>
                            </div>
                            <div class="ferature-list-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-ferature-2.svg') }}" alt="European Sovereign Cloud Icon">
                                </div>
                                <div class="ferature-list-content">
                                    <h3>{{ __('European-owned, sovereign cloud') }}</h3>
                                    <p>{{ __('Host your data securely with a trusted, EU-based provider offering full data sovereignty, GDPR compliance, and no transatlantic exposure.') }}</p>
                                </div>
                            </div>
                            <div class="ferature-list-item wow fadeInUp" data-wow-delay="0.8s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-ferature-3.svg') }}" alt="Tailored Hybrid Cloud Solutions Icon">
                                </div>
                                <div class="ferature-list-content">
                                    <h3>{{ __('Tailored hybrid cloud solutions') }}</h3>
                                    <p>{{ __('From DIY IaaS to bespoke CaaS/PaaS platforms, we deliver transparent pricing, enterprise-grade SLAs, and expert consulting to meet your exact needs.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="paris-section" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-lg-8 offset-lg-2" bis_skin_checked="1">
                    <div class="cta-content text-center" bis_skin_checked="1">
                        <h2 class="" style="">{{ __('Coming to a Paris arrondissement near you in 2026') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
