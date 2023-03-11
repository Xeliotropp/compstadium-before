@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Добави марка</h3>
                <a href="{{url('admin/brands/')}}" class="btn btn-primary float-end text-white">Назад</a>
            </div>
            <div class="card-body">
                <form action="{{url('admin/brands')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Име</label>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" class="form-control">
                            @error('slug')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="status">Статус</label>
                            <input type="checkbox" name="status">
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