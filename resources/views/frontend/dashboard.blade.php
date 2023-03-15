@extends('layouts.app')
@section('content')
@include('frontend.alerts')
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
            @include('frontend.dashboard-sidebar')
        </div>
        <!-- row.// -->
    </div>
</div>
@endsection