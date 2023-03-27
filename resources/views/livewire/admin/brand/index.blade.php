@extends('layouts.admin')
@section('content')
<div>
    <div wire:ignore.self class="modal fade" id="deleteBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Brand</h5>
                    <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <div wire:loading class="p-2" style="text-align:center">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>

                <div wire:loading.remove>
                    <form wire:submit.prevent="destroyBrand">
                        <div class="modal-body">
                            <h4>Are you sure you want to delete this data?</h4>
                        </div>

                        <div class="modal-footer">
                            <button type="button" wire:click="closeModal" class="btn btn-secondary"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Yes, Delete!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Списък с марки</h4>
                    <a href="{{url('/admin/brands/create')}}" class="btn btn-primary float-end">Добави
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
                                        class="btn btn-success">Редактиране</a>
                                    <a href="#" wire:click="deleteBrand({{ $brand->id }})" data-bs-toggle="modal"
                                        data-bs-target="#deleteBrandModal" class="btn btn-danger btn-sm">Delete</a>
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
            $('#deleteBrandModal').modal('hide');
        });
</script>
@endpush
@endsection