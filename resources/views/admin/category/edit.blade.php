@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Редактиране на категория</h3>
                <a href="{{url('admin/category/')}}" class="btn btn-primary float-end text-white">Назад</a>
            </div>
            <div class="card-body">
                <form action="{{route('admin.category.edit',$category->id)}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Име</label>
                            <input type="text" name="name" value="{{$category->name}}" class="form-control">
                            @error('name')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" value="{{$category->slug}}" class="form-control">
                            @error('slug')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="description">Описание</label>
                            <textarea name="description" class="form-control">{{$category->description}}</textarea>
                            @error('description')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="status">Статус</label>
                            <input type="checkbox" name="status" {{$category->status == '1' ? 'checked':''}}>
                            @error('status')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <h4>SEO Тагове</h4>
                            <div class="col-md-12 mb-3">
                                <label for="meta_title">Мета заглавие</label>
                                <input type="text" name="meta_title" value="{{$category->meta_title}}"
                                    class="form-control">
                                @error('meta_title')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_keyword">Мета ключова дума</label>
                                <textarea type="text" name="meta_keyword" class="form-control"
                                    rows="3">{{$category->meta_keyword}}</textarea>
                                @error('meta_keyword')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_description">Мета описание</label>
                                <textarea type="text" name="meta_description"
                                    class="form-control">{{$category->meta_description}}</textarea>
                                @error('meta_description')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
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