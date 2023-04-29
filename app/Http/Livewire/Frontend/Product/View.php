<?php

namespace App\Http\Livewire\Frontend\Product;

use App\Models\Cart;
use App\Models\Wishlist;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class View extends Component
{
    public $category, $product, $quantityCount = 1;

    public function quantityDecrement()
    {
        if ($this->quantityCount > 1) {
            $this->quantityCount--;
        }
    }

    public function quantityIncrement()
    {
        if ($this->quantityCount < 10) {
            $this->quantityCount++;
        }
    }
    public function addToWishlist($productId)
    {
        if (Auth::check()) {

            if (Wishlist::where('user_id', auth()->user()->id)->where('product_id', $productId)->exists()) {

                session()->flash('message', 'Продуктът вече е в списъка със желания!');
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Продуктът вече е в списъка със желания!',
                    'type' => 'warning',
                    'status' => 409
                ]);
                return false;
            } else {

                Wishlist::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $productId
                ]);
                $this->emit('wishlistAddedUpdated');
                session()->flash('message', 'Успешно добавен продукт към списъка със желания.');
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Успешно добавен продукт към списъка със желания.',
                    'type' => 'success',
                    'status' => 200
                ]);
            }
        } else {
            session()->flash('message', 'Моля влезте, за да добавяте продукти в списъка със желания!');
            $this->dispatchBrowserEvent('message', [
                'text' => 'Моля влезте, за да продължите!',
                'type' => 'info',
                'status' => 401
            ]);
            return false;
        }
    }

    public function addToCart(int $productId)
    {
        if (Auth::check()) {

            if ($this->product->where('id', $productId)->where('status', '0')->exists()) {

                if (Cart::where('user_id', auth()->user()->id)->where('product_id', $productId)->exists()) {

                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Продуктът вече е добавен в количката!',
                        'type' => 'warning',
                        'status' => 404
                    ]);
                } else {

                    if ($this->product->quantity > 0) {

                        if ($this->product->quantity > $this->quantityCount) {

                            // Insert Product to Cart
                            Cart::create([
                                'user_id' => auth()->user()->id,
                                'product_id' => $productId,
                                'quantity' => $this->quantityCount
                            ]);

                            $this->emit('cartAddedUpdated');
                            $this->dispatchBrowserEvent('message', [
                                'text' => 'Продуктът е добавен в количката!',
                                'type' => 'success',
                                'status' => 200
                            ]);
                        } else {
                            $this->dispatchBrowserEvent('message', [
                                'text' => 'Само ' . $this->product->quantity . 'продукта са налични!',
                                'type' => 'warning',
                                'status' => 404
                            ]);
                        }
                    } else {
                        $this->dispatchBrowserEvent('message', [
                            'text' => 'Изчерпано количество!',
                            'type' => 'warning',
                            'status' => 404
                        ]);
                    }
                }
            } else {
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Продуктът не съществува!',
                    'type' => 'warning',
                    'status' => 404
                ]);
            }
        } else {
            $this->dispatchBrowserEvent('message', [
                'text' => 'Моля, влезте, за да добавяте продукти в количката!',
                'type' => 'info',
                'status' => 401
            ]);
        }
    }


    public function mount($category, $product)
    {
        $this->category = $category;
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.frontend.product.view', [
            'category' => $this->category,
            'product' => $this->product
        ]);
    }
}
