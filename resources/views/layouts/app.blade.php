<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Food Delivery Website</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-white text-gray-800">

  <!-- ✅ Header -->
  <header class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <div class="text-2xl font-bold text-orange-500">FoodZone</div>
      <nav class="space-x-6 hidden md:flex">
    <a href="{{ route('home') }}" class="text-gray-600 hover:text-orange-500 transition">Home</a>
    <a href="{{ route('about') }}" class="text-gray-600 hover:text-orange-500 transition">About</a>
    <a href="{{ route('menu') }}" class="text-gray-600 hover:text-orange-500 transition">Menu</a>
    <a href="{{ route('contact') }}" class="text-gray-600 hover:text-orange-500 transition">Contact</a>
</nav>

      <div class="space-x-4">
  @auth
    <span class="text-gray-600">Welcome, {{ Auth::user()->name }}</span>
    <form action="{{ route('logout') }}" method="POST" class="inline">
      @csrf
      <button type="submit" class="px-4 py-2 border border-red-500 text-red-500 rounded hover:bg-red-100 transition">
        Logout
      </button>
    </form>
  @else
    <a href="{{ route('login') }}" class="px-4 py-2 border border-orange-500 text-orange-500 rounded hover:bg-orange-100 transition">Login</a>
    <a href="{{ route('register') }}" class="px-4 py-2 bg-orange-500 text-white rounded hover:bg-orange-600 transition">Sign Up</a>
  @endauth
</div>

    </div>
  </header>

   {{-- Page Content --}}
    <main>
        @yield('content')
    </main>


  <!-- ✅ Footer -->
  <footer class="bg-teal-100 text-gray-800 pt-16 mt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Newsletter -->
      <div class="bg-white shadow-md rounded-xl p-6 mb-10 border-l-8 border-orange-500 flex flex-col lg:flex-row items-center justify-between gap-6">
        <div class="flex items-center gap-4">
          <img src="https://img.freepik.com/free-photo/top-view-skewers-with-vegetables-copy-space_23-2148764383.jpg?w=200" alt="dish" class="w-28 h-20 object-cover rounded-lg shadow-md border-4 border-orange-400">
          <div>
            <p class="text-orange-600 font-bold uppercase tracking-wider">Newsletters</p>
            <h2 class="text-xl font-semibold text-gray-700">Get Our Every Single Menu Notifications</h2>
            <div class="flex gap-3 mt-2 text-sm text-gray-500">
              <span class="bg-gray-100 px-2 py-1 rounded">Regular Updates</span>
              <span class="bg-gray-100 px-2 py-1 rounded">Weekly Updates</span>
              <span class="bg-gray-100 px-2 py-1 rounded">Monthly Updates</span>
            </div>
          </div>
        </div>
        <form class="flex w-full lg:w-auto">
          <input type="email" placeholder="Enter your email" class="w-full px-4 py-2 rounded-l-md border border-gray-300 focus:outline-none">
          <button class="bg-orange-500 text-white px-4 py-2 rounded-r-md hover:bg-orange-600 transition">Subscribe</button>
        </form>
      </div>

      <!-- Footer Links -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 text-sm pb-10 border-b border-gray-300">
        <div>
          <h3 class="text-lg font-semibold mb-4">Food Zone</h3>
          <p class="text-gray-600 mb-4">Delicious food delivered at your door.</p>
          <div class="flex space-x-3">
            <i class="fab fa-facebook-f text-orange-500"></i>
            <i class="fab fa-twitter text-orange-500"></i>
            <i class="fab fa-youtube text-orange-500"></i>
            <i class="fab fa-linkedin-in text-orange-500"></i>
          </div>
        </div>
        <div>
          <h4 class="text-lg font-semibold mb-4">Our Menus</h4>
          <ul class="space-y-2 text-gray-600">
            <li>Chicken Burger</li>
            <li>Brief Pizza</li>
            <li>Fresh Vegetable</li>
            <li>Sea Foods</li>
            <li>Desserts</li>
            <li>Cold Drinks</li>
            <li>Discount</li>
          </ul>
        </div>
        <div>
          <h4 class="text-lg font-semibold mb-4">Useful Links</h4>
          <ul class="space-y-2 text-gray-600">
            <li>About Us</li>
            <li>Restaurant</li>
            <li>Our Chefs</li>
            <li>Testimonials</li>
            <li>Blogs</li>
            <li>FAQs</li>
            <li>Privacy Policy</li>
          </ul>
        </div>
        <div>
          <h4 class="text-lg font-semibold mb-4">Contact Us</h4>
          <ul class="space-y-2 text-gray-600">
            <li>+44 (0) 9856 124 765</li>
            <li>+44 (0) 9411 432 543</li>
            <li>info@yourdomain.com</li>
            <li>11 Beaufort Court, UK</li>
          </ul>
        </div>
        <div>
          <h4 class="text-lg font-semibold mb-4">Download App</h4>
          <p class="mb-2 text-gray-600">Save $5 with app for new users only</p>
          <div class="space-y-2">
            <a href="#" class="block bg-orange-500 text-white text-center py-2 rounded hover:bg-orange-600 transition">Google Play</a>
            <a href="#" class="block bg-orange-500 text-white text-center py-2 rounded hover:bg-orange-600 transition">App Store</a>
          </div>
        </div>
      </div>

      <!-- Bottom bar -->
      <div class="flex flex-col md:flex-row justify-between items-center py-4 text-xs text-gray-500">
        <p>©2025. All rights reserved by <span class="font-semibold text-gray-800">Food Zone</span></p>
        <div class="flex items-center space-x-3 mt-2 md:mt-0">
          <span>Accept For</span>
          <img src="https://img.icons8.com/color/48/visa.png" alt="Visa" class="w-8 h-5">
          <img src="https://img.icons8.com/color/48/mastercard-logo.png" alt="Mastercard" class="w-8 h-5">
          <img src="https://img.icons8.com/color/48/discover.png" alt="Discover" class="w-8 h-5">
          <img src="https://img.icons8.com/color/48/paypal.png" alt="PayPal" class="w-8 h-5">
        </div>
      </div>
    </div>
  </footer>

</body>
</html>
