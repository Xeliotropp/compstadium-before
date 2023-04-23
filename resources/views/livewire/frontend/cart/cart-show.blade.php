<div>
    <div class="py-3 py-md-5">
        <div class="container">

            <h4>Количка</h4>
            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div class="shopping-cart">

                        <div class="cart-header d-none d-sm-none d-mb-block d-lg-block">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4>Продукти</h4>
                                </div>
                                <div class="col-md-1">
                                    <h4>Цена</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Количество</h4>
                                </div>
                                <div class="col-md-1">
                                    <h4>Общо</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Премахни</h4>
                                </div>
                            </div>
                        </div>

                        @forelse ($cart as $cartItem)
                        @if ($cartItem->product)
                        <div class="cart-item">
                            <div class="row">
                                <div class="col-md-4 my-auto">
                                    <a
                                        href="{{ url('collections/' . $cartItem->product->category->slug . '/' . $cartItem->product->slug) }}">
                                        <label class="product-name">
                                            @if ($cartItem->product->productImages)
                                            <img src="{{ $cartItem->product->productImages[0]->image }}"
                                                style="width: 50px; height: 50px" alt="">
                                            {{ $cartItem->product->name }}
                                            @else
                                            <img src="" style="width: 50px; height: 50px" alt="">
                                            {{ $cartItem->product->name }}
                                            @endif
                                        </label>
                                    </a>
                                </div>
                                <div class="col-md-1 my-auto">
                                    @if ($cartItem->product->selling_price == null)
                                    <span class="selling-price">{{ $cartItem->product->original_price *1.79}}лв.</span>
                                    @else
                                    <span class="selling-price">{{ $cartItem->product->selling_price *1.79 }}лв.</span>
                                    <span class="original-price">{{ $cartItem->product->original_price *1.79}}лв.</span>
                                    @endif
                                </div>
                                <div class="col-md-2 col-7 my-auto">
                                    <div class="quantity">
                                        <div class="input-group">
                                            <button type="button" wire:loading.attr="disabled"
                                                wire:click="decrementQuantity({{ $cartItem->id }})" class="btn btn1"><i
                                                    class="fa fa-minus"></i>
                                            </button>
                                            <input type="text" value="{{ $cartItem->quantity }}"
                                                class="input-quantity" />
                                            <button type="button" wire:loading.attr="disabled"
                                                wire:click="incrementQuantity({{ $cartItem->id }})" class="btn btn1"><i
                                                    class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1 my-auto">
                                    <label class="price">
                                        @if ($cartItem->product->selling_price == null)
                                        <span class="selling-price">{{ $cartItem->product->original_price
                                            *1.79}}лв.</span>
                                        @else
                                        <span class="selling-price">{{ $cartItem->product->selling_price *1.79
                                            }}лв.</span>
                                        <span class="original-price">{{ $cartItem->product->original_price
                                            *1.79}}лв.</span>
                                        @endif
                                    </label>
                                    @php
                                    if($cartItem->product->selling_price == null){
                                    $totalPrice += $cartItem->product->original_price * $cartItem->quantity;
                                    }
                                    else {
                                    $totalPrice += $cartItem->product->selling_price * $cartItem->quantity;
                                    }
                                    @endphp
                                </div>
                                <div class="col-md-2 col-5 my-auto">
                                    <div class="remove">
                                        <button type="button" wire:loading.attr="disabled"
                                            wire:click="removeCartItem({{ $cartItem->id }})"
                                            class="btn btn-danger btn-sm">
                                            <span wire:loading.remove wire:target="removeCartItem({{ $cartItem->id }})">
                                                <i class="fa fa-trash"></i> Премахни
                                            </span>
                                            <span wire:loading wire:target="removeCartItem({{ $cartItem->id }})">
                                                <i class="fa fa-trash"></i> Премахване
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @empty
                        <div>Няма налични продукти!</div>
                        @endforelse

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mt-3">
                    <div class="shadow-sm bg-white p-3">
                        <h4>Общо:
                            <span class="float-end">{{ $totalPrice*1.79 }}лв.</span>
                        </h4>
                        <hr>
                        <a href="{{ url('/checkout') }}" class="btn btn-primary w-100">Поръчване</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>