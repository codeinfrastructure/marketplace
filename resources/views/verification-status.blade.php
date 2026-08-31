<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verified - Marketplace</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('layouts.nav')

    <div class="max-w-md mx-auto px-4 py-12 text-center">
        <div class="bg-white rounded-lg shadow-lg p-8">
            @if(session('verified'))
                <!-- Success Message -->
                <div class="mb-6">
                    <svg class="w-16 h-16 text-green-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <h1 class="text-3xl font-bold text-green-600 mb-2">Email Verified!</h1>
                    <p class="text-gray-600 mb-6">Your email has been successfully verified. You can now access all features of our marketplace.</p>
                    
                    <a href="{{ route('home') }}" class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition inline-block">
                        Go to Marketplace
                    </a>
                </div>
            @else
                <!-- Error Message -->
                <div class="mb-6">
                    <svg class="w-16 h-16 text-red-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    <h1 class="text-3xl font-bold text-red-600 mb-2">Verification Failed</h1>
                    <p class="text-gray-600 mb-6">The verification link is invalid or has expired. Please try registering again.</p>
                    
                    <a href="{{ route('register') }}" class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition inline-block">
                        Register Again
                    </a>
                </div>
            @endif
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
