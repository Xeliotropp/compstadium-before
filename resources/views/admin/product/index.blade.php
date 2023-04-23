@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col md-12">
        @if (session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Продукти
                    <a href="{{ url('admin/product/create') }}"
                        class="btn btn-primary btn-sm text-white float-end">Добави продукти</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Категория</th>
                            <th>Продукт</th>
                            <th>Цена</th>
                            <th>Количество</th>
                            <th>Статус</th>
                            <th>Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>
                                @if ($product->category)
                                {{ $product->category->name }}
                                @else
                                Няма налични категории
                                @endif
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->original_price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->status == '1' ? 'Скрит':'Видим' }}</td>
                            <td>
                                <a href="{{ url('admin/product/edit/'.$product->id) }}" class="btn btn-success btn-sm">
                                    Редактиране
                                </a>
                                <a href="{{ url('admin/product/delete/'.$product->id) }}"
                                    onclick="return confirm('Сигурни ли сте, че искате да изтриете информацията?')"
                                    class="btn btn-danger btn-sm">
                                    Изтриване
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">Няма налични продукти</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection