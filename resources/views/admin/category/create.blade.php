@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>
                    Добавяне на категория
                    <a href="{{ url('admin/category/create') }}"
                        class="btn btn-primary btn-sm text-white float-end">Назад</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Име</label>
                            <input type="text" name="name" class="form-control">
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" class="form-control">
                            @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="description">Описание</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>
                            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="image">Снимка</label>
                            <input type="file" name="image" class="form-control">
                            @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status">Статус</label><br>
                            <input type="checkbox" name="status"> (Маркиран = Скрит, Немаркиран = Видим)
                            @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col md-12 mb-3">
                            <h4 class="card-header">SEO Тагове</h4>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="meta_title">Meta Заглавие</label>
                            <input type="text" name="meta_title" class="form-control">
                            @error('meta_title') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="meta_keyword">Meta Ключова дума</label>
                            <textarea name="meta_keyword" class="form-control" rows="3"></textarea>
                            @error('meta_keyword') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="meta_description">Meta Описание</label>
                            <textarea name="meta_description" class="form-control" rows="3"></textarea>
                            @error('meta_description') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary float-end">Добави</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection