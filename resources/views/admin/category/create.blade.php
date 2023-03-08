@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Добави категория</h3>
                <a href="{{url('admin/category/')}}" class="btn btn-primary float-end text-white">Назад</a>
            </div>
            <div class="card-body">
                <form action="{{url('admin/category')}}" method="POST" enctype="multipart/form-data">
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
                            <label for="description">Описание</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="image">Снимка</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="status">Статус</label>
                            <input type="checkbox" name="status">
                        </div>
                        <div class="col-md-12">
                            <h4>SEO Тагове</h4>
                            <div class="col-md-12 mb-3">
                                <label for="meta_title">Мета заглавие</label>
                                <input type="text" name="meta_title" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_keyword">Мета ключова дума</label>
                                <textarea type="text" name="meta_keyword" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_description">Мета описание</label>
                                <textarea type="text" name="meta_description" class="form-control"></textarea>
                            </div>
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