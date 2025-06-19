@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12 max-w-5xl">
    <h2 class="text-4xl font-extrabold text-orange-500 mb-8 text-center tracking-wide uppercase">Your Cart</h2>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded mb-8 shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    @if(count($cart) > 0)
    <table class="w-full table-auto mb-8 border-collapse border border-gray-300 shadow-sm rounded-md overflow-hidden">
        <thead>
            <tr class="bg-orange-200 text-orange-700 uppercase text-sm tracking-wide">
                <th class="border border-gray-300 px-6 py-3 font-semibold">Item</th>
                <th class="border border-gray-300 px-6 py-3 font-semibold">Price</th>
                <th class="border border-gray-300 px-6 py-3 font-semibold">Quantity</th>
                <th class="border border-gray-300 px-6 py-3 font-semibold">Total</th>
                <th class="border border-gray-300 px-6 py-3 font-semibold">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-700 text-base">
            @php $grandTotal = 0; @endphp
            @foreach ($cart as $id => $item)
                @php
                    $total = $item['price'] * $item['quantity'];
                    $grandTotal += $total;
                @endphp
                <tr class="hover:bg-orange-50 transition-colors">
                    <td class="border border-gray-300 px-6 py-3">{{ $item['name'] }}</td>
                    <td class="border border-gray-300 px-6 py-3">${{ number_format($item['price'], 2) }}</td>
                    <td class="border border-gray-300 px-6 py-3 text-center">{{ $item['quantity'] }}</td>
                    <td class="border border-gray-300 px-6 py-3 font-semibold">${{ number_format($total, 2) }}</td>
                    <td class="border border-gray-300 px-6 py-3 space-x-3 text-center whitespace-nowrap">
                        <!-- Increase Quantity -->
                        <form action="{{ route('cart.update', ['id' => $id, 'action' => 'increase']) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" aria-label="Increase quantity" class="text-gray-600 px-2 py-1 rounded hover:text-orange-500 transition">
                                +
                            </button>
                        </form>
                        <!-- Decrease Quantity -->
                        <form action="{{ route('cart.update', ['id' => $id, 'action' => 'decrease']) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" aria-label="Decrease quantity" class="text-gray-600 px-2 py-1 rounded hover:text-orange-500 transition">
                                -
                            </button>
                        </form>
                        <!-- Remove Item with Trash Bin Icon -->
                        <form action="{{ route('cart.remove', $id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to remove this item?');">
                            @csrf
                            <button type="submit" aria-label="Remove item" class="text-red-600 hover:text-red-800 transition">
                                <!-- Trash bin icon SVG from Heroicons -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5-4h4m-4 0a1 1 0 00-1 1v1h6V4a1 1 0 00-1-1m-4 0h4" />
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr class="font-bold bg-gray-100 text-lg">
                <td colspan="3" class="text-right px-6 py-4">Grand Total:</td>
                <td colspan="2" class="px-6 py-4 text-orange-600">${{ number_format($grandTotal, 2) }}</td>
            </tr>
        </tbody>
    </table>

    <div class="flex justify-center space-x-6">
        <a href="{{ route('menu') }}" 
           class="inline-block bg-orange-100 text-orange-600 border border-orange-600 px-8 py-3 rounded-md font-semibold shadow-sm hover:bg-orange-600 hover:text-white transition">
           Continue Shopping
        </a>

        <a href="{{ route('menu') }}" 
           class="inline-block border border-orange-600 text-orange-600 px-8 py-3 rounded-md font-semibold hover:bg-orange-600 hover:text-white transition">
           Back to Menu
        </a>
        <a href="{{ route('checkout') }}" 
       class="inline-block bg-orange-500 text-white px-8 py-3 rounded-md font-semibold shadow hover:bg-orange-600 transition">
       Proceed to Checkout
    </a>
    </div>

    @else
        <p class="text-center text-gray-600 text-lg mb-6">Your cart is empty.</p>
        <div class="text-center">
            <a href="{{ route('menu') }}" 
               class="inline-block bg-orange-100 text-orange-600 border border-orange-600 px-8 py-3 rounded-md font-semibold shadow-sm hover:bg-orange-600 hover:text-white transition">
               Browse Menu
            </a>
        </div>
    @endif
</div>
@endsection
