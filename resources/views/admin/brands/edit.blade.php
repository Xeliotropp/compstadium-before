@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Редактиране на марка</h3>
                <a href="{{url('admin/brands/')}}" class="btn btn-primary float-end text-white">Назад</a>
            </div>
            <div class="card-body">
                <form action="{{route('admin.brands.edit',$brands->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Име</label>
                            <input type="text" name="name" value="{{$brands->name}}" class="form-control">
                            @error('name')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" value="{{$brands->slug}}" class="form-control">
                            @error('slug')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="status">Статус</label>
                            <input type="checkbox" name="status" {{$brands->status == '1' ? 'checked':''}}>
                            @error('status')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary text-white">Запази промените</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection