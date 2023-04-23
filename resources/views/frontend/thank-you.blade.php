@extends('layouts.app')

@section('title', 'Благодаря, че пазарувахте при нас!')

@section('content')

<div class="py-3 pyt-md-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                @if (session('message'))
                <h5 class="alert alert-success">{{ session('message') }}</h5>
                @endif
                <div class="p-4 shadow bg-white">
                    <h2><img src="{{asset('frontend/assets/images/logo.png')}}" style="width:96px; height:72px"></h2>
                    <h4>Благодаря, че пазарувахте при нас!</h4>
                    <a href="{{ url('collections') }}" class="btn btn-primary">Към началната страница</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection