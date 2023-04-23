@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 550px;">
    <div class="container">
        <div class="row">

            <main class="col-md-8">
                <article class="card">
                    <header class="card-header">
                        <strong class="d-inline-block mr-3">Влезли сте като:</strong>
                        <span>{{ Auth::user()->name }}</span>
                    </header>
                    <div class="card-body text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Последна поръчка:</h5>
                                        <h4>последна поръчка</h4>
                                        <a href="#">Преглед на поръчките</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- row.// -->
                    </div> <!-- card-body .// -->
                </article> <!-- order-group.// -->
            </main>
            <aside class="col-md-3">
                <ul class="list-group">
                    <a class="list-group-item" href="/profile">Табло</a>
                    <a class="list-group-item" href="/profile/orders">Моите поръчки</a>
                    <a class="list-group-item" href="/profile/{{Auth::user()->id}}/edit">Редактиране на профила</a>
                    <a class="list-group-item" href="{{route('password.update')}}">Промяна на парола</a>
                </ul>
                <a class="col-md-3 btn btn-danger btn-block" href="{{route('logout')}}"><span
                        class="text">Изход</span></a>
            </aside>
        </div>
        <!-- row.// -->
    </div>
</div>
@endsection