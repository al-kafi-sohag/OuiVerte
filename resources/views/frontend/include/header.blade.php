<header class="bg-dark-green text-white shadow-sm py-4">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <a href="#" class="flex items-center space-x-2">
            <!-- Placeholder for Logo - You can replace this with your actual logo -->
            <img src="{{ asset('assets/images/logo.png') }}" alt="OuiVerte Logo" class="rounded-full w-12 h-12">
            <span class="text-2xl font-bold text-white">OuiVerte!</span>
        </a>
        <nav class="hidden md:flex space-x-6">
            <a href="{{ route('home') }}" class="text-gray-200 hover:text-white font-medium transition duration-300">Home</a>
            <a href="#" class="text-gray-200 hover:text-white font-medium transition duration-300 none">Solutions</a>
            <a href="#" class="text-gray-200 hover:text-white font-medium transition duration-300 none">About Us</a>
            <a href="#" class="text-gray-200 hover:text-white font-medium transition duration-300 none">Blog</a>
            <a href="#" class="text-gray-200 hover:text-white font-medium transition duration-300 none">Contact</a>
        </nav>
        <button class="md:hidden p-2 rounded-md text-gray-200 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-white">
            <!-- Hamburger Icon -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
    </div>
</header>
