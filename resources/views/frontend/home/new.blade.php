@extends('frontend.layouts.master')

@section('content')
    <!-- Hero Section -->
    <section class="gradient-background text-white py-20 px-4 text-center rounded-b-lg shadow-lg">
        <div class="container mx-auto max-w-4xl">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-6">
                Sustainable & Sovereign Cloud Solutions
            </h1>
            <p class="text-lg sm:text-xl mb-10 opacity-90">
                Empowering Europe's digital future with eco-first, secure, and bespoke cloud infrastructure.
            </p>
            <a href="https://www.youtube.com/watch?v=ey_lEU07N0s" target="_blank"
                class="inline-block bg-white text-emerald-700 hover:bg-gray-100 font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105">
                Discover Our Solutions
            </a>
        </div>
    </section>

    <!-- Key Pillars Section -->
    <section class="py-16 px-4">
        <div class="container mx-auto max-w-6xl">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Our Core Principles</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Pillar 1: Sustainability -->
                <div
                    class="bg-white rounded-xl shadow-md p-8 text-center border-t-4 border-emerald-600 hover:shadow-lg transition duration-300">
                    <div class="text-emerald-600 mb-4">
                        <!-- Renewable Energy Icon (Example: Leaf) -->
                        <svg class="mx-auto w-16 h-16" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2zM12 6c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" />
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M17.66 7.93L12 2.27 6.34 7.93l1.41 1.41L12 5.1l4.25 4.24 1.41-1.41zM6.34 16.07L12 21.73l5.66-5.66-1.41-1.41L12 18.9l-4.25-4.24-1.41 1.41z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-700">100% Renewable Energy</h3>
                    <p class="text-gray-600">
                        Powering your cloud infrastructure with clean, sustainable energy sources for a greener digital
                        future.
                    </p>
                </div>

                <!-- Pillar 2: Sovereignty -->
                <div
                    class="bg-white rounded-xl shadow-md p-8 text-center border-t-4 border-teal-600 hover:shadow-lg transition duration-300">
                    <div class="text-teal-600 mb-4">
                        <!-- European Flag/Shield Icon (Example: Shield) -->
                        <svg class="mx-auto w-16 h-16" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z" />
                            <path fill="none" d="M0 0h24v24H0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-700">European Sovereign Cloud</h3>
                    <p class="text-gray-600">
                        Ensuring your data remains within European borders, adhering to strict privacy and compliance
                        standards.
                    </p>
                </div>

                <!-- Pillar 3: Tailored Solutions -->
                <div
                    class="bg-white rounded-xl shadow-md p-8 text-center border-t-4 border-green-700 hover:shadow-lg transition duration-300">
                    <div class="text-green-700 mb-4">
                        <!-- Customization/Gear Icon (Example: Gear) -->
                        <svg class="mx-auto w-16 h-16" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.09-.75-1.71-1.02L15 2.21c-.05-.25-.23-.45-.48-.52l-4-1c-.25-.07-.5-.02-.67.15L7.7 3.5c-.6.26-1.15.6-1.65 1l-2.49-1c-.22-.08-.49 0-.61.22l-2 3.46c-.12.22-.07.49.12.64l2.11 1.65c-.04.32-.07.64-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.09.75 1.71 1.02L9 21.79c.05.25.23.45.48.52l4 1c.25.07.5.02.67-.15L16.3 20.5c.6-.26 1.15-.6 1.65-1l2.49 1c.22.08.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z" />
                            <path fill="none" d="M0 0h24v24H0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-700">Tailored Hybrid Cloud</h3>
                    <p class="text-gray-600">
                        Crafting bespoke cloud solutions that perfectly align with your unique business requirements and
                        goals.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Infographics Section -->
    <section class="py-16 px-4 bg-gray-50">
        <div class="container mx-auto max-w-6xl">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Our Insights & Innovations</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Infographic 1: The Future is Fractional -->
                <div
                    class="bg-white rounded-xl shadow-md p-8 hover:shadow-lg transition duration-300 border-t-4 border-emerald-600">
                    <h3 class="text-xl font-semibold mb-3 text-gray-700">The Future is Fractional</h3>
                    <p class="text-gray-600 mb-4">
                        Discover how our Fractional Data Centers are revolutionizing urban energy infrastructure and digital
                        sovereignty.
                    </p>
                    <a href="https://staging.ouiverte.fr/the-future-is-fractional" target="_blank"
                        class="text-emerald-600 hover:text-emerald-800 font-medium flex items-center justify-center">
                        View Infographic
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Infographic 2: The European Sovereign Cloud Opportunity -->
                <div
                    class="bg-white rounded-xl shadow-md p-8 hover:shadow-lg transition duration-300 border-t-4 border-teal-600">
                    <h3 class="text-xl font-semibold mb-3 text-gray-700">The European Sovereign Cloud Opportunity</h3>
                    <p class="text-gray-600 mb-4">
                        Explore the critical importance of data sovereignty for European businesses and how we deliver it.
                    </p>
                    <a href="https://staging.ouiverte.fr/the-european-sovereign-cloud-opportunity" target="_blank"
                        class="text-teal-600 hover:text-teal-800 font-medium flex items-center justify-center">
                        View Infographic
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Infographic 3: Future-Proofing the European Grid -->
                <div
                    class="bg-white rounded-xl shadow-md p-8 hover:shadow-lg transition duration-300 border-t-4 border-green-700">
                    <h3 class="text-xl font-semibold mb-3 text-gray-700">Future-Proofing the European Grid</h3>
                    <p class="text-gray-600 mb-4">
                        Understand our vision for a resilient, decarbonized, and economically productive energy future.
                    </p>
                    <a href="https://staging.ouiverte.fr/future-proofing-the-european-grid" target="_blank"
                        class="text-green-700 hover:text-green-800 font-medium flex items-center justify-center">
                        View Infographic
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Snippet -->
    <section class="bg-gray-100 py-16 px-4">
        <div class="container mx-auto max-w-4xl text-center">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">About OuiVerte!</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-8">
                At OuiVerte!, we believe in a digital future that is both powerful and responsible. We provide cutting-edge
                cloud infrastructure built on principles of sustainability, data sovereignty, and unparalleled flexibility.
                Our mission is to empower businesses with secure, high-performance, and eco-friendly cloud solutions that
                drive innovation and growth.
            </p>
            <a href="#"
                class="inline-block bg-emerald-600 text-white hover:bg-emerald-700 font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105">
                Learn More About Us
            </a>
        </div>
    </section>


@endsection
