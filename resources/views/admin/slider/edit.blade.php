@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Добави въртележка
                    <a href="{{ url('admin/slider') }}" class="btn btn-primary btn-sm text-white float-end">Назад</a>
                </h4>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-warning">
                    @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                    @endforeach
                </div>
                @endif
                <form action="{{ url('admin/slider/'.$slider->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="mb-3">
                            <label for="title">Заглавие</label>
                            <input type="text" name="title" value="{{ $slider->title }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="description">Описание</label>
                            <textarea name="description" rows="3"
                                class="form-control">{{ $slider->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image">Снимка</label>
                            <input type="file" name="image" class="form-control"><br>
                            <img src="{{ asset(" $slider->image") }}" height="100px" width="150px" alt="image">
                        </div>
                        <div class="mb-3">
                            <label for="status">Статус</label>
                            <input type="checkbox" name="status" {{ $slider->status == '1' ? 'checked':'' }} >
                            (Маркиран = Скрит, Немаркиран = Видим)
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary btn-sm float-end">Запази</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection