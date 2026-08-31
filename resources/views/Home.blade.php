<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace</title>
    @vite('resources/css/app.css')
</head>
<body>

    @include('layouts.nav')
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="mb-12">
            <h1 class="text-4xl font-bold mb-4">Welcome to Our Marketplace</h1>
            <p class="text-xl text-gray-600">Discover amazing products from trusted sellers</p>
        </div>

        <!-- Search Bar -->
        <div class="mb-8">
            <form action="{{ route('search') }}" method="GET" class="flex gap-2">
                <input type="text" name="q" placeholder="Search products..." class="flex-1 px-4 py-2 border rounded-lg">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Search</button>
            </form>
        </div>

        <!-- Featured Products -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6">Featured Products</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @forelse($featuredProducts ?? [] as $product)
                    <div class="border rounded-lg p-4 hover:shadow-lg transition">
                        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded mb-4">
                        <h3 class="font-semibold mb-2">{{ $product->name }}</h3>
                        <p class="text-gray-600 mb-4">{{ $product->description }}</p>
                        <p class="text-lg font-bold text-blue-600 mb-4">${{ $product->price }}</p>
                        <a href="{{ route('products.show', $product->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 w-full text-center block">View</a>
                    </div>
                @empty
                    <p class="text-gray-500">No products available</p>
                @endforelse
            </div>
        </section>

        <!-- Categories -->
        <section>
            <h2 class="text-2xl font-bold mb-6">Browse Categories</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Electronics</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Fashion</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Home & Garden</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Sports</a>
            </div>
        </section>
    </div>
</body>
</html>