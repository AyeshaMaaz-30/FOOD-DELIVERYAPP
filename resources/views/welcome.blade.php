@extends('layouts.app')

@section('content')

<!-- ✅ Hero / Welcome Section -->
<section class="bg-teal-50 py-20">
  <div class="max-w-7xl mx-auto px-4 flex flex-col lg:flex-row items-center gap-12">

    <!-- Left Text Content -->
    <div class="flex-1 text-center lg:text-left">
      <p class="text-sm uppercase text-orange-500 font-semibold mb-2">Welcome To FoodZone</p>

      <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
        <span class="text-orange-500">Fastest</span> Online <br>
        Food <span class="text-orange-500">Delivery</span> Service
      </h1>
      <p class="text-gray-600 mb-6">
        Discover our mouth-watering menu filled with the best dishes and delivered hot to your doorstep.
      </p>
      <div class="flex justify-center lg:justify-start space-x-4 mb-10">
        <a href="{{ route('menu') }}" class="px-6 py-3 bg-orange-500 text-white rounded hover:bg-orange-600 transition">Order Now</a>
        <a href="/menu" class="px-6 py-3 border border-orange-500 text-orange-500 rounded hover:bg-orange-100 transition">See Menu</a>
      </div>
    </div>

    <!-- Right Image (Delivery Man) -->
    <div class="relative w-full max-w-md">
      <img src="{{ asset('images/delivery-man.png') }}" alt="Delivery Man" class="w-full rounded-lg shadow-xl">
    </div>

  </div>
</section>

<!-- ✅ Food Items Section (Below Hero Buttons) -->
<section class="max-w-7xl mx-auto px-6 py-12">
  <h2 class="text-2xl font-semibold text-center mb-8">Featured Dishes</h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
    <!-- Burger Item -->
    <div class="group cursor-pointer overflow-hidden rounded-lg shadow-lg bg-white">
      <img src="{{ asset('images/burger.png') }}" alt="Delicious Burger" class="w-full object-contain transition-transform duration-300 group-hover:scale-105">
      <div class="p-4 text-center">
        <h3 class="text-lg font-semibold">Delicious Burger</h3>
        <p class="text-green-600 font-bold mt-1">$5.99</p>
      </div>
    </div>

    <!-- Pasta Item -->
    <div class="group cursor-pointer overflow-hidden rounded-lg shadow-lg bg-white">
      <img src="{{ asset('images/pastac.png') }}" alt="Creamy Pasta" class="w-full object-contain transition-transform duration-300 group-hover:scale-105">
      <div class="p-4 text-center">
        <h3 class="text-lg font-semibold">Creamy Pasta</h3>
        <p class="text-green-600 font-bold mt-1">$7.49</p>
      </div>
    </div>
  </div>
</section>


@endsection
