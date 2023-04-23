<div>
    <div class="row">

        @include('livewire.admin.brand.modal-form')

        <div class="col-md-12">
            @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>
                        Списък с марки
                        <a href="#" data-bs-toggle="modal" data-bs-target="#addBrandModal"
                            class="btn btn-primary btn-sm float-end">Добави марки</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Име</th>
                                <th>Категория</th>
                                <th>Slug</th>
                                <th>Статус</th>
                                <th>Действие</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($brands as $brand)
                            <tr>
                                <td>{{ $brand->id }}</td>
                                <td>{{ $brand->name }}</td>
                                <td>
                                    @if($brand->category)
                                    {{ $brand->category->name }}
                                    @else
                                    Няма категории
                                    @endif
                                </td>
                                <td>{{ $brand->slug }}</td>
                                <td>{{ $brand->status == '1' ? 'hidden':'visible' }}</td>
                                <td>
                                    <a href="#" wire:click="editBrand({{ $brand->id }})" data-bs-toggle="modal"
                                        data-bs-target="#updateBrandModal" class="btn btn-success btn-sm">Редактирай</a>
                                    <a href="#" wire:click="deleteBrand({{ $brand->id }})" data-bs-toggle="modal"
                                        data-bs-target="#deleteBrandModal" class="btn btn-danger btn-sm">Изтрий</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">Няма намерени марки</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div>
                        {{ $brands->links() }}
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>

        @push('script')
        <script>
            window.addEventListener('close-modal', event => {
            $('#addBrandModal').modal('hide');
            $('#updateBrandModal').modal('hide');
            $('#deleteBrandModal').modal('hide');
        });
        </script>
        @endpush