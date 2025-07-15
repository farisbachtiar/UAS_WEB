<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">
        Checkout
    </h1>
    
    <form wire:submit.prevent="save">
        <div class="grid grid-cols-12 gap-4">
            <!-- Main Content Area -->
            <div class="md:col-span-12 lg:col-span-8 col-span-12">
                <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                    
                    <!-- Shipping Address Section -->
                    <div class="mb-6">
                        <h2 class="text-xl font-bold underline text-gray-700 dark:text-white mb-4">
                            Shipping Address
                        </h2>
                        
                        <!-- Name Fields -->
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 dark:text-white mb-1" for="first_name">
                                    First Name
                                </label>
                                <input 
                                    wire:model="first_name" 
                                    class="w-full rounded-lg border @error('first_name') border-red-500 @enderror py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" 
                                    id="first_name" 
                                    type="text"
                                    placeholder="Enter your first name"
                                >
                                @error('first_name')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div>
                                <label class="block text-gray-700 dark:text-white mb-1" for="last_name">
                                    Last Name
                                </label>
                                <input 
                                    wire:model="last_name" 
                                    class="w-full rounded-lg border @error('last_name') border-red-500 @enderror py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" 
                                    id="last_name" 
                                    type="text"
                                    placeholder="Enter your last name"
                                >
                                @error('last_name')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- Phone Field -->
                        <div class="mt-4">
                            <label class="block text-gray-700 dark:text-white mb-1" for="phone">
                                Phone
                            </label>
                            <input 
                                wire:model="phone" 
                                class="w-full rounded-lg border @error('phone') border-red-500 @enderror py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" 
                                id="phone" 
                                type="tel"
                                placeholder="Enter your phone number"
                            >
                            @error('phone')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- Address Field -->
                        <div class="mt-4">
                            <label class="block text-gray-700 dark:text-white mb-1" for="address">
                                Address
                            </label>
                            <input 
                                wire:model="address" 
                                class="w-full rounded-lg border @error('address') border-red-500 @enderror py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" 
                                id="address" 
                                type="text"
                                placeholder="Enter your street address"
                            >
                            @error('address')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- City Field -->
                        <div class="mt-4">
                            <label class="block text-gray-700 dark:text-white mb-1" for="city">
                                City
                            </label>
                            <input 
                                wire:model="city" 
                                class="w-full rounded-lg border @error('city') border-red-500 @enderror py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" 
                                id="city" 
                                type="text"
                                placeholder="Enter your city"
                            >
                            @error('city')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- State and ZIP Code -->
                        <div class="grid grid-cols-2 gap-4 mt-4">
                            <div>
                                <label class="block text-gray-700 dark:text-white mb-1" for="state">
                                    State
                                </label>
                                <input 
                                    wire:model="state" 
                                    class="w-full rounded-lg border @error('state') border-red-500 @enderror py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" 
                                    id="state" 
                                    type="text"
                                    placeholder="Enter your state"
                                >
                                @error('state')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div>
                                <label class="block text-gray-700 dark:text-white mb-1" for="zip">
                                    ZIP Code
                                </label>
                                <input 
                                    wire:model="zip_code" 
                                    class="w-full rounded-lg border @error('zip_code') border-red-500 @enderror py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" 
                                    id="zip" 
                                    type="text"
                                    placeholder="Enter ZIP code"
                                >
                                @error('zip_code')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Payment Method Section -->
                    <div class="w-full p-5 bg-gray-50 border border-gray-200 rounded-lg dark:border-gray-700 dark:bg-gray-800">
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">
                            Payment via QRIS
                        </h3>

                        <div class="flex flex-col lg:flex-row items-center gap-6">
                            <!-- QR Code -->
                            <div class="flex-shrink-0">
                                <img 
                                    src="{{ asset('images/QRIS.png') }}" 
                                    alt="QRIS Code" 
                                    class="w-64 rounded-lg shadow-md"
                                >
                            </div>

                            <!-- E-wallet Selection -->
                            <div class="flex-1 w-full">
                                <label for="payment_method" class="block text-gray-700 dark:text-white mb-2 font-semibold">
                                    Select E-Wallet
                                </label>
                                <select 
                                    wire:model="payment_method" 
                                    id="payment_method"
                                    class="w-full rounded-lg border @error('payment_method') border-red-500 @enderror py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none"
                                >
                                    <option value="">-- Select E-Wallet --</option>
                                    <option value="DANA">DANA</option>
                                    <option value="OVO">OVO</option>
                                    <option value="GoPay">GoPay</option>
                                    <option value="ShopeePay">ShopeePay</option>
                                    <option value="LinkAja">LinkAja</option>
                                    <option value="Bank Transfer">Bank Transfer</option>
                                    <option value="QRIS Lainnya">Other QRIS</option>
                                </select>
                                @error('payment_method')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 text-center my-4">
                            Please scan the QRIS above using your e-wallet app such as 
                            <strong>OVO, DANA, ShopeePay, GoPay, LinkAja</strong>, 
                            then upload your payment proof below.
                        </p>

                        <!-- Upload Payment Proof -->
                        <div class="mt-4">
                            <label class="block text-gray-700 dark:text-white mb-2 font-semibold">
                                Upload Payment Proof
                            </label>
                            <input 
                                type="file" 
                                wire:model="payment_proof"
                                accept="image/*"
                                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border-0 file:bg-blue-50 file:text-blue-700 file:rounded-lg file:cursor-pointer hover:file:bg-blue-100 dark:file:bg-blue-900 dark:file:text-blue-300"
                            >
                            @error('payment_proof')
                            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="md:col-span-12 lg:col-span-4 col-span-12">
                <!-- Order Summary -->
                <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900 mb-4">
                    <h3 class="text-xl font-bold underline text-gray-700 dark:text-white mb-4">
                        Order Summary
                    </h3>
                    
                    <div class="space-y-2">
                        <div class="flex justify-between text-gray-700 dark:text-gray-300">
                            <span>Subtotal</span>
                            <span class="font-semibold">{{ Number::currency($grand_total, 'IDR') }}</span>
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                             Ongkos kirim akan dihitung berdasarkan metode dan lokasi pengiriman.
                        </div>
                        
                        <!-- <div class="flex justify-between text-gray-700 dark:text-gray-300">
                            <span>Taxes</span>
                            <span class="font-semibold">{{ Number::currency(0, 'IDR') }}</span>
                        </div>
                        
                        <div class="flex justify-between text-gray-700 dark:text-gray-300">
                            <span>Shipping Cost</span>
                            <span class="font-semibold">{{ Number::currency(0, 'IDR') }}</span>
                        </div> -->
                    </div>
                    
                    <hr class="bg-slate-400 my-4 h-1 rounded">
                    
                    <div class="flex justify-between text-lg font-bold text-gray-900 dark:text-white">
                        <span>Grand Total</span>
                        <span>{{ Number::currency($grand_total, 'IDR') }}</span>
                    </div>
                </div>
                
                <!-- Place Order Button -->
                <button 
                    type="submit" 
                    class="bg-green-500 hover:bg-green-600 active:bg-green-700 transition-colors duration-200 w-full p-3 rounded-lg text-lg text-white font-semibold shadow-md hover:shadow-lg"
                >
                    Order Sekarang
                </button>
                
                <!-- Products List -->
                <div class="bg-white mt-4 rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                    <h3 class="text-xl font-bold underline text-gray-700 dark:text-white mb-4">
                        Products
                    </h3>
                    
                    <ul class="divide-y divide-gray-200 dark:divide-gray-700" role="list">
                        @foreach ($cart_items as $item)
                        <li class="py-3 sm:py-4" wire:key="{{ $item['product_id'] }}">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img 
                                        alt="{{ $item['name'] }}" 
                                        class="w-12 h-12 rounded-full object-cover" 
                                        src="{{ url('storage', $item['image']) }}"
                                    >
                                </div>
                                
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        {{ $item['name'] }}
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        Quantity: {{ $item['quantity'] }}
                                    </p>
                                </div>
                                
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ Number::currency($item['total_amount'], 'IDR') }}
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </form>
</div>