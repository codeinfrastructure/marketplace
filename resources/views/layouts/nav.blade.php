<nav class="bg-black shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-400">
                    Marketplace
                </a>
            </div>

            <div class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" class="text-white hover:text-blue-400 transition">
                    Home
                </a>
                <a href="#" class="text-white hover:text-blue-400 transition">
                    Products
                </a>
                <a href="#" class="text-white hover:text-blue-400 transition">
                    Categories
                </a>
                <a href="{{ route('about') }}" class="text-white hover:text-blue-400 transition">
                    About
                </a>
            </div>

            <div class="hidden md:flex items-center space-x-4">
                <a href="#" class="text-white hover:text-blue-400 transition">
                    Cart
                </a>

                <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    Login
                </a>
            </div>

            <div class="md:hidden">
                <button id="mobile-menu-btn" class="text-white hover:text-blue-400 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden pb-4 border-t border-gray-700">
            <a href="{{ route('home') }}" class="block px-3 py-2 text-white hover:text-blue-400 hover:bg-gray-800 rounded transition">
                Home
            </a>
            <a href="#" class="block px-3 py-2 text-white hover:text-blue-400 hover:bg-gray-800 rounded transition">
                Products
            </a>
            <a href="#" class="block px-3 py-2 text-white hover:text-blue-400 hover:bg-gray-800 rounded transition">
                Categories
            </a>
            <a href="{{ route('about') }}" class="block px-3 py-2 text-white hover:text-blue-400 hover:bg-gray-800 rounded transition">
                About
            </a>
            <a href="#" class="block px-3 py-2 text-white hover:text-blue-400 hover:bg-gray-800 rounded transition">
                Cart
            </a>
            <a href="#" class="block px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition mt-2">
                Login
            </a>
        </div>
    </div>
</nav>

<script>
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuBtn.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
    });

    const mobileLinks = mobileMenu.querySelectorAll('a');

    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
        });
    });
</script>

