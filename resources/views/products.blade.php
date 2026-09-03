<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace</title>
    @vite('resources/css/app.css')
</head>

<body>

    @include('partials.nav-home')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Search -->
        <div class="mb-8 flex justify-end">
            <form action="{{ route('search') }}" method="GET" class="flex gap-2">

                <!-- Category Dropdown -->
                <select
                    name="category"
                    class="px-4 py-2 border rounded-lg bg-white"
                >
                    <option value="">All Categories</option>
                    <option value="electronics">Electronics</option>
                    <option value="clothing">Clothing</option>
                    <option value="games">Games</option>
                    <option value="furniture">Furniture</option>
                    <option value="books">Books</option>
                </select>

                <!-- Search Input -->
                <input
                    type="text"
                    name="q"
                    placeholder="Search products..."
                    class="w-64 px-4 py-2 border rounded-lg"
                >

                <!-- Search Button -->
                <button
                    type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700"
                >
                    Search
                </button>

            </form>
        </div>

        <!-- Featured Products -->
        <section class="mb-12">

            <h2 class="text-2xl font-bold mb-6">
                Products
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                @forelse($featuredProducts ?? [] as $product)

                    <div class="border rounded-lg p-4 hover:shadow-lg transition">

                        <img
    src="{{ $product->image ?? 'https://via.placeholder.com/600x400?text=No+Image' }}"
    alt="{{ $product->name }}"
    class="w-full h-48 object-cover rounded mb-4"
>


                        <h3 class="font-semibold mb-2">
                            {{ $product->name }}
                        </h3>

                        <p class="text-gray-600 mb-4">
                            {{ $product->description }}
                        </p>

                        <p class="text-lg font-bold text-blue-600 mb-4">
                            €{{ $product->price }}
                        </p>

                    </div>

                @empty

                    <p class="text-gray-500">
                        No products available
                    </p>

                @endforelse

            </div>

        </section>

    </div>

</body>
</html>
