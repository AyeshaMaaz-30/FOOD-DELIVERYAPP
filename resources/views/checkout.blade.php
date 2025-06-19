@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-12 px-4">
    <h2 class="text-3xl font-bold text-orange-500 mb-6 text-center">Checkout</h2>

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('checkout.process') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Full Name</label>
            <input type="text" name="name" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-400" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Email Address</label>
            <input type="email" name="email" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-400" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Phone Number</label>
            <input type="text" name="phone" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-400" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Delivery Address</label>
            <textarea name="address" rows="3" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-400" required></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="bg-orange-500 text-white font-semibold px-6 py-2 rounded hover:bg-orange-600 transition">
                Place Order
            </button>
        </div>
    </form>
</div>
@endsection
