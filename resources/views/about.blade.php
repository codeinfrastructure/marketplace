<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Marketplace</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    @include('layouts.nav')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">About Our Marketplace</h1>
            <p class="text-xl text-gray-600">Connecting buyers and sellers in one trusted platform</p>
        </div>

        <!-- About Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-12">
            <div>
                <h2 class="text-2xl font-bold mb-4">Our Mission</h2>
                <p class="text-gray-700 mb-4">
                    We believe in creating a marketplace where quality products meet discerning customers. 
                    Our platform brings together trusted sellers and buyers to create a seamless shopping experience.
                </p>
                <p class="text-gray-700">
                    Every product listed on our marketplace is carefully curated to ensure the highest standards 
                    of quality, authenticity, and customer satisfaction.
                </p>
            </div>
            <div>
</div>

        <!-- Features Section -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold mb-8 text-center">Why Choose Us</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="text-blue-600 text-3xl mb-4">✓</div>
                    <h3 class="text-xl font-bold mb-2">Trusted Sellers</h3>
                    <p class="text-gray-600">
                        All sellers are verified and rated by our community. Shop with confidence knowing 
                        you're buying from trusted sources.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="text-blue-600 text-3xl mb-4">✓</div>
                    <h3 class="text-xl font-bold mb-2">Secure Transactions</h3>
                    <p class="text-gray-600">
                        Your payment and personal information are protected with industry-leading encryption 
                        and security protocols.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="text-blue-600 text-3xl mb-4">✓</div>
                    <h3 class="text-xl font-bold mb-2">Fast Delivery</h3>
                    <p class="text-gray-600">
                        We partner with reliable shipping providers to ensure your orders arrive quickly 
                        and in perfect condition.
                    </p>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="bg-blue-50 rounded-lg p-8 text-center">
            <h2 class="text-2xl font-bold mb-4">Get in Touch</h2>
            <p class="text-gray-700 mb-6">
                Have questions? We'd love to hear from you. Contact our support team anytime.
            </p>
            <a href="#" class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition inline-block">
                Contact Us
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-16 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; 2024 Marketplace. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
