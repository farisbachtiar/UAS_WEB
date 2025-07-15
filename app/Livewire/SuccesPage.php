<?php

namespace App\Livewire;

use Stripe\Stripe;
use App\Models\Order;
use Livewire\Component;
use Stripe\Checkout\Session;
use Illuminate\Http\Request;

class SuccesPage extends Component
{
    public $session_id;

    public function mount(Request $request)
    {
        $this->session_id = $request->get('session_id');
    }

    public function render(Request $request)
    {
        // Jika manual, ambil berdasarkan ?order={id}
        if ($request->has('order')) {
            $order = Order::with('address')->where('user_id', auth()->id())->findOrFail($request->order);
        } else {
            // Jika stripe: ambil order terakhir milik user
            $order = Order::with('address')->where('user_id', auth()->id())->latest()->first();
        }

        // Jika Stripe digunakan
        if ($this->session_id) {
            Stripe::setApiKey(env('STRIPE_SECRET'));

            $session_info = Session::retrieve($this->session_id);

            if ($session_info->payment_status != 'paid') {
                $order->payment_status = 'failed';
                $order->save();
                return redirect()->route('cancel');
            } else {
                $order->payment_status = 'paid';
                $order->save();
            }
        }

        return view('livewire.succes-page', [
            'order' => $order,
        ]);
    }
}
