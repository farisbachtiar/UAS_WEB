<div class="p-4">
  <h1 class="text-2xl font-bold mb-4">Cart</h1>
  
  <div class="flex flex-col lg:flex-row gap-6">
    <!-- Keranjang -->
    <div class="w-full lg:w-3/4">
      <table class="w-full border rounded overflow-hidden">
        <thead class="bg-gray-100">
          <tr>
            <th class="p-2 border">Product</th>
            <th class="p-2 border">Price</th>
            <th class="p-2 border">Qty</th>
            <th class="p-2 border">Total</th>
            <th class="p-2 border">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($cart_items as $item)
          <tr>
            <td class="p-2 border flex items-center">
              <img src="{{ url('storage', $item['image']) }}" alt="{{ $item['name'] }}" class="w-12 h-12 object-cover rounded mr-2">
              {{ $item['name'] }}
            </td>
            <td class="p-2 border">{{ Number::currency($item['unit_amount'], 'IDR') }}</td>
            <td class="p-2 border text-center">
              <div class="inline-flex items-center gap-2">
                <button wire:click='decreaseItem({{ $item['product_id'] }})' class="px-2 py-1 bg-gray-200 rounded hover:bg-gray-300">-</button>
                {{ $item['quantity'] }}
                <button wire:click='increaseItem({{ $item['product_id'] }})' class="px-2 py-1 bg-gray-200 rounded hover:bg-gray-300">+</button>
              </div>
            </td>
            <td class="p-2 border">{{ Number::currency($item['total_amount'], 'IDR') }}</td>
            <td class="p-2 border text-center">
              <button wire:click='removeItem({{ $item['product_id'] }})' class="text-red-500 hover:underline">Remove</button>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="5" class="p-4 text-center text-gray-500">Cart is empty</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <!-- Ringkasan -->
    <div class="w-full lg:w-1/4">
      <div class="border p-4 rounded shadow">
        <h2 class="text-lg font-semibold mb-2">Total</h2>
        <p class="text-xl font-bold text-green-600 mb-4">{{ Number::currency($grand_total, 'IDR') }}</p>
        
        @if (count($cart_items))
        <a href="/checkout" class="block bg-blue-600 text-white text-center py-2 rounded hover:bg-blue-700 transition">Checkout</a>
        @endif
      </div>
    </div>
  </div>
</div>
