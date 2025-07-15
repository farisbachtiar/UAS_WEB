<div class="container mx-auto p-4">
    <!-- Produk Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($products as $product)
        <div class="bg-white rounded border overflow-hidden shadow">
            <a href="/products/{{ $product->slug }}" wire:navigate>
                <img src="{{ url('storage', $product->images[0]) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
            </a>

            <div class="p-4">
                <h3 class="font-semibold text-lg mb-2">{{ $product->name }}</h3>
                <p class="text-green-600 font-bold">{{ rupiah($product->price) }}</p>

                <button wire:click="addToCart({{ $product->id }})" class="mt-3 w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
                    <span wire:loading.remove wire:target="addToCart({{ $product->id }})">Add to Cart</span>
                    <span wire:loading wire:target="addToCart({{ $product->id }})">Adding...</span>
                </button>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $products->links() }}
    </div>
</div>
