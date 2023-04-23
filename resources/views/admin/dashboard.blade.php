@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>
                    Списък с поръчки
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Потребител</th>
                            <th>Номер за проследяване</th>
                            <th>Име</th>
                            <th>Email</th>
                            <th>Телефон</th>
                            <th>Пощенски код</th>
                            <th>Адрес</th>
                            <th>Статус</th>
                            <th>Начин на плащане</th>
                            <th>ID на плащането</th>
                            <th>Дата на създаване</th>
                            <th>Дата на актуализация</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->user_id }}</td>
                            <td>{{ $order->tracking_no }}</td>
                            <td>{{ $order->fullname }}</td>
                            <td>{{ $order->email }}</td>
                            <td>{{ $order->phone }}</td>
                            <td>{{ $order->pincode }}</td>
                            <td>{{ $order->address }}</td>
                            <td>{{ $order->status_message }}</td>
                            <td>{{ $order->payment_mode }}</td>
                            <td>{{ $order->payment_id }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->updated_at }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="14">Няма намерени поръчки</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div>
                    {{ $orders->links() }}
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection