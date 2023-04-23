@extends('layouts.app')

@section('title')
{{ $category->meta_title }}
@endsection

@section('meta_keyword')
{{ $category->meta_keyword }}
@endsection

@section('meta_description')
{{ $category->meta_description }}
@endsection

@section('content')

<div class="py-3 py-md-3">
    <div class="container">
        <div class="col-md-12 row">
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
        <div class="row mt-5">
            <div class="col-md-12">
                <h4 class="mb-4">Нашите продукти</h4>
            </div>
            <livewire:frontend.product.index :category="$category" />
        </div>
    </div>
</div>

@endsection