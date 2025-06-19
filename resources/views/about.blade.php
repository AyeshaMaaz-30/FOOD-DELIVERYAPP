@extends('layouts.app')

@section('content')
<section class="bg-gradient-to-br from-white to-green-50 py-16">
    <div class="max-w-5xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-green-700 mb-6">About Us</h1>
        <p class="text-gray-700 text-lg leading-relaxed max-w-3xl mx-auto">
            Welcome to <span class="text-orange-500 font-semibold">FoodZone UK</span> — your trusted partner in delicious, on-demand dining experiences across the United Kingdom. Whether you're in London, Manchester, Birmingham or anywhere in between, we bring your favourite meals right to your doorstep — fast, fresh, and affordable.
        </p>
    </div>
</section>

<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092" alt="Our Mission" class="rounded-2xl shadow-lg" />
        </div>
        <div>
            <h2 class="text-3xl font-bold text-green-800 mb-4">Our Mission</h2>
            <p class="text-gray-700 mb-4">
                We're on a mission to redefine the way the UK eats. By partnering with local restaurants, cloud kitchens, and grocery services, we ensure your cravings are satisfied with quality, speed, and a human touch.
            </p>
            <ul class="list-disc list-inside text-green-700 font-medium">
                <li>Support local food businesses</li>
                <li>Eco-conscious packaging & delivery</li>
                <li>24/7 customer service</li>
                <li>Safe & secure online payments</li>
            </ul>
        </div>
    </div>
</section>

<section class="bg-green-50 py-16">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
        <div class="md:order-2">
            <img src="https://images.unsplash.com/photo-1590080876084-33ca3f81eb6d" alt="Why Choose Us" class="rounded-2xl shadow-lg" />
        </div>
        <div class="md:order-1">
            <h2 class="text-3xl font-bold text-green-800 mb-4">Why Choose FoodZone?</h2>
            <p class="text-gray-700 mb-4">
                We're not just another delivery app — we’re a movement to make quality food more accessible. Whether you're vegan, halal, gluten-free, or on a student budget, there's something for everyone.
            </p>
            <p class="text-gray-700">
                With real-time tracking, scheduled deliveries, and rewards for loyal customers, we're putting you first — every time.
            </p>
        </div>
    </div>
</section>

<section class="bg-white py-16">
    <div class="text-center max-w-3xl mx-auto">
        <h2 class="text-3xl font-bold text-green-800 mb-4">Join Our Journey</h2>
        <p class="text-gray-700 text-lg mb-6">
            Want to become a rider, a restaurant partner, or invest in the UK’s fastest-growing food tech startup?
        </p>
        <a href="{{ route('contact') }}"
           class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-3 rounded-full transition duration-300">
            Contact Us
        </a>
    </div>
</section>
@endsection
