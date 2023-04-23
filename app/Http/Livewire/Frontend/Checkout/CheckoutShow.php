<?php

namespace App\Http\Livewire\Frontend\Checkout;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;
use Illuminate\Support\Str;

class CheckoutShow extends Component
{
    public $carts, $totalAmount = 0;

    public $fullname, $email, $phone, $pincode, $address, $payment_mode = NULL, $payment_id = NULL;

    protected $listeners = [
        'validationForAll',
        'transactionEmit' => 'paidOnlineOrder'
    ];

    public function paidOnlineOrder($value)
    {
        $this->payment_id = $value;
        $this->payment_mode = 'Платено с PayPal';
        $codOrder = $this->placeOrder();

        if ($codOrder) {

            Cart::where('user_id', auth()->user()->id)->delete();

            session()->flash('message', 'Поръчката е направена успешно');
            $this->dispatchBrowserEvent('message', [
                'text' => 'Поръчката е направена успешно',
                'type' => 'success',
                'status' => 200
            ]);
            return redirect()->to('thank-you');
        } else {
            $this->dispatchBrowserEvent('message', [
                'text' => 'Нещо се обърка!',
                'type' => 'error',
                'status' => 500
            ]);
        }
    }

    public function validationForAll()
    {
        $this->validate();
    }

    public function rules()
    {
        return [
            'fullname' => 'required|string|max:121',
            'email' => 'required|email|max:121',
            'phone' => 'required|string|max:12|min:10',
            'pincode' => 'required|string|max:4|min:4',
            'address' => 'required|string|max:500'
        ];
    }

    public function placeOrder()
    {
        $this->validate();
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'tracking_no' => 'cs-' . Str::random(10),
            'fullname' => $this->fullname,
            'email' => $this->email,
            'phone' => $this->phone,
            'pincode' => $this->pincode,
            'address' => $this->address,
            'status_message' => 'обработва се',
            'payment_mode' => $this->payment_mode,
            'payment_id' => $this->payment_id
        ]);

        foreach ($this->carts as $cartItem) {
            if ($cartItem->product->selling_price == null) {
                $price = $cartItem->product->original_price;
            } else {
                $price = $cartItem->product->selling_price;
            }
            $orderItems = OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $price
            ]);

            $cartItem->product()->where('id', $cartItem->product_id)->decrement('quantity', $cartItem->quantity);
        }
        return $order;
    }


    public function codOrder()
    {
        $this->payment_mode = 'Плащане в брой';
        $codOrder = $this->placeOrder();

        if ($codOrder) {

            Cart::where('user_id', auth()->user()->id)->delete();

            session()->flash('message', 'Поръчката е направена успешно');
            $this->dispatchBrowserEvent('message', [
                'text' => 'Поръчката е направена успешно',
                'type' => 'success',
                'status' => 200
            ]);
            return redirect()->to('thank-you');
        } else {
            $this->dispatchBrowserEvent('message', [
                'text' => 'Нещо се обърка!',
                'type' => 'error',
                'status' => 500
            ]);
        }
    }

    public function totalAmount()
    {
        $this->totalAmount = 0;
        $this->carts = Cart::where('user_id', auth()->user()->id)->get();

        foreach ($this->carts as $cartItem) {
            if ($cartItem->product->selling_price == null) {
                $this->totalAmount += $cartItem->product->original_price * $cartItem->quantity;
            } else {
                $this->totalAmount += $cartItem->product->selling_price * $cartItem->quantity;
            }
        }
        return  $this->totalAmount;
    }

    public function render()
    {
        $this->fullname = auth()->user()->name;
        $this->email = auth()->user()->email;
        $this->totalAmount = $this->totalAmount();
        $this->carts = Cart::where('user_id', auth()->user()->id)->get();

        return view('livewire.frontend.checkout.checkout-show', [
            'totalAmount' => $this->totalAmount,
            'carts' => $this->carts
        ]);
    }
}
