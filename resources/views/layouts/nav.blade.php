<!-- STEP 1: Create the main nav container -->
<!-- This is the semantic HTML5 <nav> element that tells browsers "this is navigation" -->
<!-- We use Tailwind classes: bg-white (white background), shadow (adds depth), sticky top-0 (stays at top when scrolling) -->
<nav class="bg-white shadow sticky top-0 z-50">
    <!-- STEP 2: Create a container with max-width and padding -->
    <!-- This centers the navbar content and adds horizontal padding on mobile -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- STEP 3: Create a flex container for horizontal layout -->
        <!-- flex justifies items horizontally, items-center vertically aligns them -->
        <!-- h-16 sets height to 4rem (64px), a standard navbar height -->
        <div class="flex justify-between items-center h-16">
            
            <!-- STEP 4: Left side - Logo/Brand -->
            <!-- This is the branding section on the left -->
            <div class="flex-shrink-0">
                <!-- Link to home page using route() helper -->
                <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">
                    Marketplace
                </a>
            </div>
            
            <!-- STEP 5: Middle section - Navigation Links (hidden on mobile, shown on desktop) -->
            <!-- hidden on mobile with 'hidden', then md:flex shows it on medium screens and up -->
            <div class="hidden md:flex space-x-8">
                <!-- Each link uses route() to generate URLs dynamically -->
                <!-- This means if your routes change, links update automatically -->
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 transition">
                    Home
                </a>
                <a href="#" class="text-gray-700 hover:text-blue-600 transition">
                    Products
                </a>
                <a href="#" class="text-gray-700 hover:text-blue-600 transition">
                    Categories
                </a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 transition">
                    About
                </a>
            </div>
            
            <!-- STEP 6: Right side - User actions (login, cart, etc) -->
            <div class="hidden md:flex items-center space-x-4">
                <!-- Cart icon/link -->
                <a href="#" class="text-gray-700 hover:text-blue-600 transition">
                    Cart
                </a>
                <!-- Login button -->
                <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    Login
                </a>
            </div>
            
            <!-- STEP 7: Mobile Menu Button (hamburger icon) -->
            <!-- This button only shows on mobile (md:hidden), hidden on desktop -->
            <!-- We'll add JavaScript to make this toggle the mobile menu -->
            <div class="md:hidden">
                <button id="mobile-menu-btn" class="text-gray-700 hover:text-blue-600 transition">
                    <!-- Simple hamburger menu icon using text -->
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- STEP 8: Mobile Menu (hidden by default, shown when toggled) -->
        <!-- This menu only appears on mobile devices and is hidden by default with 'hidden' class -->
        <!-- We'll use JavaScript to toggle the 'hidden' class -->
        <div id="mobile-menu" class="hidden md:hidden pb-4 border-t border-gray-200">
            <!-- Mobile navigation links (same as desktop but stacked vertically) -->
            <a href="{{ route('home') }}" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-100 rounded transition">
                Home
            </a>
            <a href="#" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-100 rounded transition">
                Products
            </a>
            <a href="#" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-100 rounded transition">
                Categories
            </a>
            <a href="{{ route('about') }}" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-100 rounded transition">
                About
            </a>
            <a href="#" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-100 rounded transition">
                Cart
            </a>
            <a href="#" class="block px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition mt-2">
                Login
            </a>
        </div>
    </div>
</nav>

<!-- STEP 9: JavaScript for mobile menu toggle -->
<!-- This makes the hamburger button actually work -->
<script>
    // Get the button and mobile menu elements
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    // When button is clicked, toggle (show/hide) the mobile menu
    mobileMenuBtn.addEventListener('click', function() {
        // Toggle 'hidden' class: removes it if present, adds it if not
        mobileMenu.classList.toggle('hidden');
    });
    
    // Optional: Close menu when a link is clicked
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
        });
    });
</script>
