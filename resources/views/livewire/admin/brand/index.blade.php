@extends('layouts.admin')
@section('content')
<div>
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModal">Изтрий категория</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent='destroyBrand'>
                    <div class="modal-body">
                        <h6>Сигурни ли сте, че искате да изтриете информацията?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Затвори</button>
                        <button type="submit" class="btn btn-danger">Да. Изтрий</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
                                    <a href="{{ route('admin.brands.edit', ['brand_id' => $brand->id]) }}"
                                        class="btn btn-sm btn-success">Редактиране</a>
                                    <button data-bs-toggle="modal" data-bs-target="#deleteModal"
                                        wire:click="$emit('deleteBrand', {{ $brand->id }})"
                                        class="btn btn-danger">Изтрий</button>
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
    document.addEventListener('DOMContentLoaded', function() {
        Livewire.on('open-delete-modal', function() {
            $('#deleteModal').modal('show');
        });

        Livewire.on('close-delete-modal', function() {
            $('#deleteModal').modal('hide');
        });
    });
</script>
@endpush
@endsection