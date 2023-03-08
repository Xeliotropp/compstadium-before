@extends('layouts.admin')
@section('content')
<div>
    @include('livewire.admin.brand.modal')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Списък с марки</h4>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#AddBrandModal"
                        class="btn btn-primary float-end">Добави
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
                    </table>
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