@extends('layouts.app')

@section('content')
<div class="container mt-14">
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2 class="card-header">{{ __('Табло') }}</h2>
                <div class="card-body" style="line-height: 10px;">
                    <span><span style="font-weight: bold;">Потребител:</span> {{ Auth::user()->name }}</span>
                    <div class="card-body text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <h2 class="card-header">Последна поръчка:</h2>
                                    <div class="card-body">
                                        @if (auth()->check())
                                        @php
                                        $order = auth()->user()->orders()->with('items')->latest()->first();
                                        @endphp
                                        @if ($order)
                                        <div>
                                            <p>test</p>
                                            <div>
                                                <p style="font-size: 20px;">Номер на поръчката: {{ $order->tracking_no
                                                    }}
                                                </p>
                                                <p style="font-size: 20px;">Статус на поръчката: {{
                                                    $order->status_message }}</p>
                                                <ul>
                                                    @foreach ($order->items as $item)
                                                    <li style="font-size: 20px;">Продукт: {{ $item->product->name }} -
                                                        {{
                                                        $item->quantity }} x {{
                                                        $item->price * 1.79 }}лв.</li>
                                                    @endforeach
                                                </ul>
                                                @foreach ($order->items as $item)
                                                <p style="font-size: 20px;">Общо: {{$item->price * 1.79 *
                                                    $item->quantity}}лв.</p>
                                                @endforeach
                                            </div>
                                        </div>
                                        @else
                                        <div class="card mb-3">
                                            <h2 class="card-header">Последна поръчка</h2>
                                            <div class="card-body">
                                                <p>Все още не се сте поръчали продукти</p>
                                            </div>
                                        </div>
                                        @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div> <!-- row.// -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
