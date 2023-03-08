@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Редактиране на потребители</h3>
                <a href="{{url('admin/category/')}}" class="btn btn-primary float-end text-white">Назад</a>
            </div>
            <div class="card-body">
                <form action="{{url('admin/users'.$user->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Име</label>
                            <input type="text" name="name" value="{{$user->name}}" class="form-control">
                            @error('name')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="slug">Имейл</label>
                            <input type="text" name="slug" value="{{$user->email}}" class="form-control">
                            @error('slug')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="description">Парола</label>
                            <input type="text" name="password" value="{{$user->password}}" class="form-control">
                            @error('description')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="role_as">Права</label>
                            <input type="text" name="role_as" value="{{$user->role_as}}" class="form-control">
                            @error('image')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <button class="btn btn-primary text-white">Запази промените</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection