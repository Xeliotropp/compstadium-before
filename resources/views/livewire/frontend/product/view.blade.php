<div>
    <div class="py-3 py-md-5">
        <div class="container">
            <div>
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
            </div>
            <div class="row">
                <div class="col-md-5 mt-3">
                    <div class="bg-white border">
                        @if ($product->productImages)
                        <img src="{{ asset($product->productImages[0]->image) }}" class="w-100" alt="Img">
                        @else
                        Няма налична снимка за продукта
                        @endif
                    </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h2 class="product-name">
                            {{ $product->name }}
                        </h2>
                        <hr>
                        <p class="product-path">
                            <a href="{{url('/')}}">Начало</a> / <a
                                href="{{url('/collections/'.$product->category->slug)}}">{{
                                $product->category->name }}</a> / <a
                                href="{{url('/collections/'.$product->category->slug.'/'.$product->name)}}">{{
                                $product->name }}</a>
                        </p>
                        <div>
                            @if ($product->selling_price == null)
                            <span class="selling-price">{{ $product->original_price *1.79}}лв.</span>
                            @else
                            <span class="selling-price">{{ $product->selling_price *1.79 }}лв.</span>
                            <span class="original-price">{{ $product->original_price *1.79}}лв.</span>
                            @endif
                        </div>

                        <div>
                            @if ($product->quantity)
                            <label class="btn btn-sm py-1 mt-2 text-white bg-success">В наличност</label>
                            @else
                            <label class="btn btn-sm py-1 mt-2 text-white bg-danger">Изчерпано количество</label>
                            @endif

                        </div>

                        <div class="mt-2">
                            <div class="input-group">
                                <span class="btn btn1" wire:click="quantityDecrement"><i class="fa fa-minus"></i></span>
                                <input type="text" wire:model="quantityCount" value="{{ $this->quantityCount }}"
                                    readonly class="input-quantity" />
                                <span class="btn btn1" wire:click="quantityIncrement"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="button" wire:click="addToCart({{ $product->id }})" class="btn btn1">
                                <i class="fa fa-shopping-cart"></i> Добави в количката
                            </button>
                            <button type="button" wire:click="addToWishlist({{ $product->id }})" class="btn btn1">
                                <span wire:loading.remove wire:target="addToWishlist">
                                    <i class="fa fa-heart"></i> Добави в списъка със желания
                                </span>
                                <span wire:loading wire:target="addToWishlist">
                                    Добавяне
                                </span>
                            </button>
                        </div>
                        <div class="mt-3">
                            <h3 class="mb-0">Кратко описание</h3>
                            <ul>
                                @foreach(explode("\n", $product->small_description) as $description)
                                <li style="font-size: 16px;">- {{ $description }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="height:5px;">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h3>Описание</h3>
                        </div>
                        <div class="card-body">
                            <p style="font-size: 20px; line-height:30px;">
                                {{ $product->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>