@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col md-12">
        @if (session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Редактиране на продукти
                    <a href="{{ url('admin/product') }}" class="btn btn-primary btn-sm text-white float-end">Назад</a>
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
                <form action="{{ url('admin/product/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">
                                Начало
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seotag-tab" data-bs-toggle="tab"
                                data-bs-target="#seotag-tab-pane" type="button" role="tab"
                                aria-controls="seotag-tab-pane" aria-selected="false">
                                SEO Тагове
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="details-tab" data-bs-toggle="tab"
                                data-bs-target="#details-tab-pane" type="button" role="tab"
                                aria-controls="details-tab-pane" aria-selected="false">
                                Детайли
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="image-tab" data-bs-toggle="tab"
                                data-bs-target="#image-tab-pane" type="button" role="tab" aria-controls="image-tab-pane"
                                aria-selected="false">
                                Снимка на продукта
                            </button>
                        </li>

                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <div class="mb-3">
                                <label for="category_id">Категория</label>
                                <select name="category_id" class="form-control">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ?
                                        'selected':'' }} >
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="name">Име на продукта</label>
                                <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="slug">Slug на продукта</label>
                                <input type="text" name="slug" value="{{ $product->slug }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="brand">Избери марка</label>
                                <select name="brand" class="form-control">
                                    @foreach ($brands as $brand)
                                    <option value="{{ $brand->name }}" {{ $brand->name == $product->brand ?
                                        'selected':'' }} >
                                        {{ $brand->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="small_description">Кратко описание (500 думи)</label>
                                <textarea name="small_description" class="form-control"
                                    rows="4">{{ $product->small_description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="description">Описание</label>
                                <textarea name="description" class="form-control"
                                    rows="4">{{ $product->description }}</textarea>
                            </div>
                        </div>

                        <div class="tab-pane fade border p-3" id="seotag-tab-pane" role="tabpanel"
                            aria-labelledby="seotag-tab" tabindex="0">
                            <div class="mb-3">
                                <label for="meta_title">Meta Заглавие</label>
                                <input type="text" name="meta_title" value="{{ $product->meta_title }}"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="meta_keyword">Meta Ключова дума</label>
                                <textarea name="meta_keyword" class="form-control"
                                    rows="4">{{ $product->meta_keyword }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="meta_description">Meta Описание</label>
                                <textarea name="meta_description" class="form-control"
                                    rows="4">{{ $product->meta_description }}</textarea>
                            </div>
                        </div>

                        <div class="tab-pane fade border p-3" id="details-tab-pane" role="tabpanel"
                            aria-labelledby="details-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="original_price">Оригинална цена</label>
                                        <input type="number" name="original_price"
                                            value="{{ $product->original_price }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="selling_price">Цена на промоция</label>
                                        <input type="number" name="selling_price" value="{{ $product->selling_price }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="quantity">Количество</label>
                                        <input type="number" name="quantity" value="{{ $product->quantity }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="trending">Набира популярност</label>
                                        <input type="checkbox" name="trending" {{ $product->trending == '1' ?
                                        'checked':'' }} >
                                        (Маркиран = Скрит, Немаркиран = Видим)

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="status">Status</label>
                                        <input type="checkbox" name="status" {{ $product->status == '1' ? 'checked':''
                                        }} >
                                        (Маркиран = Скрит, Немаркиран = Видим)

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade border p-3" id="image-tab-pane" role="tabpanel"
                            aria-labelledby="image-tab" tabindex="0">
                            <div class="mb-3">
                                <label>Качете снимка на продукта</label><br><br>
                                <input type="file" class="form-control" name="image[]" multiple />
                            </div>
                            <div>
                                @if ($product->productImages)
                                <div class="row">
                                    @foreach ($product->productImages as $image)
                                    <div class="col-md-2">
                                        <img src="{{ asset($image->image) }}" style="width:80px; height:80px;"
                                            class="me-4 border" alt="image">
                                        <a href="{{ url('admin/product-image/delete/'.$image->id) }}"
                                            class="d-block">Премахни</a>
                                    </div>
                                    @endforeach
                                </div>
                                @else
                                Няма намерена снимка
                                @endif
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary float-end">Запази</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script>
    $(document).ready(function (){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.updateProductColorBtn', function (){

            var product_id = "{{ $product->id }}";
            var product_color_id = $(this).val();
            var qty = $(this).closest('.product-color-tr').find('.productColorQuantity').val();

            if(qty <= 0){
                alert('Quantity is required!');
                return false;
            }

            var data = {
                'product_id' : product_id,
                'qty' : qty
            };

            $.ajax({
                type: "POST",
                url: "/admin/product-color/"+product_color_id,
                data: data,
                success: function (response) {
                    alert(response.message);
                }
            });
        });

        $(document).on('click', '.deleteProductColorBtn', function (){

            var product_color_id = $(this).val();
            var thisClick = $(this);

            $.ajax({
                type: "GET",
                url: "/admin/product-color/delete/"+product_color_id,
                success: function (response) {
                    thisClick.closest('.product-color-tr').remove();
                    alert(response.message);
                }
            });
        });
    });

</script>

@endsection