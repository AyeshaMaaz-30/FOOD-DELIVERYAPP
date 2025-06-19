@extends('layouts.app')

@section('content')
<div class="text-center py-12">
    <h2 class="text-4xl font-bold text-orange-500 mb-4">Our Menu</h2>
    <p class="text-gray-600 mb-8">Explore our delicious meals and order your favourites!</p>

    <!-- Search Bar -->
    <form action="{{ route('menu') }}" method="GET" class="max-w-md mx-auto mb-6">
        <div class="relative">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Find food..."
                class="w-full px-4 py-2 rounded-full border-2 border-orange-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 focus:outline-none transition-colors duration-300" />
            <button type="submit"
                class="absolute right-3 top-2.5 text-orange-500 hover:text-orange-700 transition-colors duration-300">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </form>

    <!-- Success Message -->
    @if(session('success'))
        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded inline-block">
            {{ session('success') }}
        </div>
    @endif

    <!-- View Cart Button -->
    <div class="mb-6">
        @php
            $cart = session('cart', []);
            $cartCount = array_sum(array_column($cart, 'quantity'));
        @endphp

        <a href="{{ route('cart.show') }}" 
           class="inline-block bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600 transition">
            View Cart ({{ $cartCount }})
        </a>
    </div>

    <!-- Menu Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-6">
        @php
            $searchQuery = request('search');
            $allItems = [
                ['id' => 1, 'name' => 'Cheesy Pizza', 'desc' => 'Topped with mozzarella & tomato sauce', 'price' => 9.99, 'image' => 'cheesypizza.png'],
                ['id' => 2, 'name' => 'Juicy Burger', 'desc' => 'Grilled beef with cheese and lettuce', 'price' => 7.49, 'image' => 'burger.png'],
                ['id' => 3, 'name' => 'Creamy Pasta', 'desc' => 'White sauce with mushrooms and herbs', 'price' => 8.50, 'image' => 'pastac.png'],
                ['id' => 4, 'name' => 'Shwarma', 'desc' => 'Tender meat wrapped with sauces and herbs', 'price' => 8.10, 'image' => 'sh.png'],
                ['id' => 5, 'name' => 'Fresh Garden Salad', 'desc' => 'Mixed greens with cherry tomatoes and vinaigrette', 'price' => 6.25, 'image' => 'salad.png'],
                ['id' => 6, 'name' => 'Grilled Ribeye Steak', 'desc' => 'Juicy ribeye served with garlic butter', 'price' => 15.99, 'image' => 'steak.png'],
                ['id' => 7, 'name' => 'Chocolate Lava Cake', 'desc' => 'Warm chocolate cake with a molten center', 'price' => 5.75, 'image' => 'dessert.png'],
                ['id' => 8, 'name' => 'Tomato Basil Soup', 'desc' => 'Creamy tomato soup with fresh basil', 'price' => 4.80, 'image' => 'soup.png'],
                ['id' => 9, 'name' => 'Refreshing Lemonade', 'desc' => 'Freshly squeezed lemons with a hint of mint', 'price' => 3.50, 'image' => 'lemonade.png'],
            ];

            $menuItems = $searchQuery
                ? array_filter($allItems, fn($item) => str_contains(strtolower($item['name']), strtolower($searchQuery)))
                : $allItems;
        @endphp

        @if (empty($menuItems))
            <div class="col-span-full text-center text-red-500 text-lg font-semibold">
                No items found for "{{ $searchQuery }}"
            </div>
        @endif

        @foreach ($menuItems as $item)
        <div
            class="bg-white p-6 shadow rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-lg cursor-pointer hover:border-4 hover:border-orange-500 relative"
        >
            <img src="{{ asset('images/' . $item['image']) }}" 
                 class="w-full h-40 object-cover rounded mb-4" 
                 alt="{{ $item['name'] }}">

            <h3 class="text-lg font-semibold mb-2">{{ $item['name'] }}</h3>
            <p class="text-gray-500 mb-2">{{ $item['desc'] }}</p>

            <!-- Dynamic Price -->
            <span class="text-orange-500 font-bold mb-4 block text-lg" id="price-{{ $item['id'] }}">
                ${{ number_format($item['price'], 2) }}
            </span>

            <!-- Add to Cart -->
            <form action="{{ route('cart.add') }}" method="POST" class="flex flex-col items-center gap-3">
                @csrf
                <input type="hidden" name="id" value="{{ $item['id'] }}">
                <input type="hidden" name="name" value="{{ $item['name'] }}">
                <input type="hidden" name="price" value="{{ $item['price'] }}">

                <div class="flex items-center gap-2">
                    <label class="text-sm font-medium">Qty:</label>
                    <input type="number" name="quantity" min="1" value="1"
                        class="w-16 px-2 py-1 border rounded text-center"
                        oninput="updatePrice({{ $item['id'] }}, {{ $item['price'] }})"
                        id="qty-{{ $item['id'] }}" />
                </div>

                <button type="submit" 
                        class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600 transition w-full">
                    Add to Cart
                </button>
            </form>
        </div>
        @endforeach
    </div>
</div>

<!-- JS for Dynamic Price Update -->
<script>
    function updatePrice(id, unitPrice) {
        const qty = document.getElementById(`qty-${id}`).value;
        const priceField = document.getElementById(`price-${id}`);
        const total = (qty * unitPrice).toFixed(2);
        priceField.innerText = `$${total}`;
    }
</script>
@endsection
