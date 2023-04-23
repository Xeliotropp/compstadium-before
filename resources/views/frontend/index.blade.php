@extends('layouts.app')

@section('title', 'Начало')

@section('content')

<div id="carouselExampleCaptions" class="carousel slide mt-5" data-bs-ride="false">
    <div class="carousel-inner">

        @foreach ($sliders as $key => $sliderItem)
        <div class="carousel-item {{ $key == 0 ? 'active':'' }}">
            @if ($sliderItem->image)
            <img src="{{ asset($sliderItem->image) }}" class="d-block w-100" alt="Slider">
            @endif

        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Предишен</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Следващ</span>
    </button>
</div>
<div class="container">
    <div class="col-md-12">
        <div class="text-center">
            <form action="{{url('search')}}" role="search">
                <div class="input-group mt-5">
                    <input type="search" placeholder="Търсене..." class="form-control border border-2" name="search"
                        value="{{Request::get('search')}}" style="height:60px;" />
                    <button class="btn bg-white border border-2" type="submit">
                        <i class="fa fa-search "></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-12 mt-5 card-body" id="trending">
        <div class="row">
            <div class="col-md-12">
                <h2>Набиращи популярност</h2>
            </div>
            @foreach ($trendingProducts as $productItem)
            <div class="col-md-4">
                <div class="product-card">
                    <div class="product-card-img">
                        @if ($productItem->quantity > 0)
                        <label class="stock bg-success">В наличност</label>
                        @else
                        <label class="stock bg-danger">Изчерпано количество</label>
                        @endif

                        @if ($productItem->productImages->count() > 0)
                        <a href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                            <img src="{{ asset($productItem->productImages[0]->image) }}"
                                alt="{{ $productItem->name }}">
                        </a>
                        @endif
                    </div>
                    <div class="product-card-body">
                        <p class="product-brand">{{ $productItem->brand }}</p>
                        <h5 class="product-name">
                            <a
                                href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
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
            @endforeach
        </div>
        <div>
            {{$trendingProducts->links()}}
        </div>
    </div>
</div>

@endsection