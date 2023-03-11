@extends('layouts.admin')
@section('content')
<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Списък с марки</h4>
                    <a href="/admin/brands/create" class="btn btn-primary float-end">Добави
                        марки</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-stiped">
                        <thead>
                            <tr>
                                <th>Идентификационен номер</th>
                                <th>Име</th>
                                <th>Slug</th>
                                <th>Статус</th>
                                <th>Действие</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($brands as $brand)
                            <tr>
                                <td>{{$brand->id}}</td>
                                <td>{{$brand->name}}</td>
                                <td>{{$brand->slug}}</td>
                                <td>{{$brand->status == '1' ? 'скрит':'видим'}}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-success">Редактиране</a>
                                    <a href="" class="btn btn-sm btn-danger">Изтриване</a>
                                </td>
                            </tr>
                            @empty
                            <tr colspan="5">Няма намерени марки</tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div>{{$brands->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('script')
<script>
    window.addEventListener('close-modal', event=>{
            $('#addBrandModal').modal('hide');
        });
</script>
@endpush
@endsection