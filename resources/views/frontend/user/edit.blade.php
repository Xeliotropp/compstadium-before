@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 550px;">
    <div class="container">
        <div class="row">
            <main class="col-md-12">
                <article class="card">
                    <header class="card-header">
                        <a href="/profile/dashboard" class="btn btn-secondary float-right"><i
                                class="fa fa-arrow-left"></i> Назад</a>
                        <strong class="d-inline-block mr-3">Редактиране на профила</strong>
                    </header>
                    <div class="card-body text-center">
                        <div class="row">
                            <div class="col-md-12">
                                @if(!$users->id)
                                {{abort(404)}}
                                @else
                                @endif
                                <form
                                    action="{{ isset($user) && $users->id != null ? route('frontend.user.edit', $users->id) : url('/error') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <h5 class="card-title">Имейл</h5>
                                                &nbsp;&nbsp;&nbsp;
                                                <input type="text" value="{{isset($user) && $users->email}}">
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <h5 class="card-title">Име</h5>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="text" value="{{isset($user) && $users->name}}">
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <h5 class="card-title">Адрес</h5>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="text" value="{{isset($user) && $users->address}}">
                                            </div>
                                            <a href="#">Преглед на поръчките</a>
                                        </div>
                                    </div>
                                    @if(isset($user) && $users->id != null)
                                    @method('PUT')
                                    @else
                                    {{ url('/error') }}
                                    @endif
                                </form>
                            </div>
                        </div> <!-- row.// -->
                    </div> <!-- card-body .// -->
                </article> <!-- order-group.// -->
            </main>
        </div>
        <!-- row.// -->
    </div>
</div>
@endsection