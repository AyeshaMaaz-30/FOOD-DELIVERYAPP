@extends('layouts.app')

@section('content')
<section class="bg-gradient-to-br from-white to-green-50 py-16">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-green-700 mb-4">Contact Us</h1>
        <p class="text-gray-700 text-lg">
            Have questions, feedback, or partnership ideas? We'd love to hear from you. Reach out to our UK-based team anytime — we're here to help.
        </p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12">
        <!-- Contact Form -->
        <div class="bg-green-50 rounded-2xl p-8 shadow-md">
            <h2 class="text-2xl font-bold text-green-800 mb-6">Send a Message</h2>
            <form action="#" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                    <input type="text" name="name" required
                           class="w-full px-4 py-2 border border-green-300 rounded-md focus:ring-green-500 focus:border-green-500" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" name="email" required
                           class="w-full px-4 py-2 border border-green-300 rounded-md focus:ring-green-500 focus:border-green-500" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                    <textarea name="message" rows="5" required
                              class="w-full px-4 py-2 border border-green-300 rounded-md focus:ring-green-500 focus:border-green-500"></textarea>
                </div>
                <button type="submit"
                        class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-2 rounded-md transition duration-300">
                    Send Message
                </button>
            </form>
        </div>

        <!-- Contact Details -->
        <div class="p-8">
            <h2 class="text-2xl font-bold text-green-800 mb-6">Reach Us Directly</h2>
            <div class="space-y-4 text-gray-700">
                <p><i class="fas fa-map-marker-alt text-green-600 mr-2"></i> 221B Baker Street, London, UK</p>
                <p><i class="fas fa-envelope text-green-600 mr-2"></i> support@foodzone.co.uk</p>
                <p><i class="fas fa-phone text-green-600 mr-2"></i> +44 20 7946 0123</p>
                <p><i class="fas fa-clock text-green-600 mr-2"></i> Mon – Sun: 8:00 AM – 10:00 PM</p>
            </div>

            <div class="mt-8">
                <h3 class="text-lg font-semibold text-green-700 mb-2">Follow us on</h3>
                <div class="flex space-x-4 text-green-600 text-xl">
                    <a href="#"><i class="fab fa-facebook-square hover:text-green-800"></i></a>
                    <a href="#"><i class="fab fa-twitter-square hover:text-green-800"></i></a>
                    <a href="#"><i class="fab fa-instagram hover:text-green-800"></i></a>
                    <a href="#"><i class="fab fa-linkedin hover:text-green-800"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
