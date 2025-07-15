<header class="bg-white shadow-md sticky top-0 z-50">
    <nav class="max-w-6xl mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <a href="/" class="text-xl font-bold text-gray-800">Telor Asin Hikmah</a>
            
            <!-- Navigation Links -->
            <div class="flex items-center space-x-6">
                <a href="/" class="text-gray-600 hover:text-blue-600 {{ request()->is('/') ? 'text-blue-600' : '' }}">Home</a>
                <a href="/categories" class="text-gray-600 hover:text-blue-600 {{ request()->is('categories') ? 'text-blue-600' : '' }}">Categories</a>
                <a href="/products" class="text-gray-600 hover:text-blue-600 {{ request()->is('products') ? 'text-blue-600' : '' }}">Products</a>
                
                <!-- Cart -->
                <a href="/cart" class="flex items-center text-gray-600 hover:text-blue-600 {{ request()->is('cart') ? 'text-blue-600' : '' }}">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.5 6M7 13l-1.5 6m0 0h9m-9 0v-2a2 2 0 012-2h5a2 2 0 012 2v2"/>
                    </svg>
                    Cart <span class="bg-blue-600 text-white text-xs px-2 py-1 rounded-full ml-1">{{ $total_count }}</span>
                </a>
                
                <!-- Auth -->
                @guest
                    <a href="/login" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Login</a>
                @endguest
                
                @auth
                    <div class="relative group">
                        <button class="text-gray-600 hover:text-blue-600">{{ auth()->user()->name }}</button>
                        <div class="absolute right-0 mt-2 w-48 bg-white border rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity">
                            <a href="/my-orders" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">My Orders</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">My Account</a>
                            <a href="/logout" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </nav>
</header>