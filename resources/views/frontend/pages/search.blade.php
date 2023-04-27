@extends('layouts.app')
@section('title','Търсене на продукти')

@section('content')
<div class="col-md-9 container">
    <div class="row">
        <div class="col-md-12 row mt-5">
            <div class="text-center">
                <form action="{{url('search')}}" role="search">
                    <div class="input-group mt-5">
                        <input type="search" placeholder="Търсене..." class="form-control" name="search"
                            value="{{Request::get('search')}}" style="height:60px;" />
                        <button class="btn bg-white" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <h2>Резултати</h2>
        </div>
        @forelse ($searchProducts as $productItem)
        <div class="col-md-4 mt-5">
            <div class="product-card">
                <div class="product-card-img">
                    @if ($productItem->quantity > 0)
                    <label class="stock bg-success">В наличност</label>
                    @else
                    <label class="stock bg-danger">Изчерпано количество</label>
                    @endif

                    @if ($productItem->productImages->count() > 0)
                    <a href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                        <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}">
                    </a>
                    @endif
                </div>
                <div class="product-card-body">
                    <p class="product-brand">{{ $productItem->brand }}</p>
                    <h5 class="product-name">
                        <a href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                            {{ $productItem->name }}
                        </a>
                    </h5>
                    <div>
                        @if ($productItem->selling_price == null)
                        <span class="selling-price">{{ $productItem->original_price*1.79 }}лв.</span>
                        @else
                        <span class="selling-price">{{ $productItem->selling_price*1.79 }}лв.</span>
                        <span class="original-price">{{ $productItem->original_price*1.79 }}лв.</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @empty
        <h4>Няма намерени резултати</h4>
        @endforelse
    </div>
</div>
@endsection