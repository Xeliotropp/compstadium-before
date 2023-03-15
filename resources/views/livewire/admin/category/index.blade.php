<div>
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModal">Изтрий категория</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent='destroyCategory'>
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
            @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3>Категории</h3>
                    <a href="{{url('admin/category/create')}}" class="btn btn-primary float-end">Добави категория</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Име</th>
                                <th>Статус</th>
                                <th>Снимка</th>
                                <th>Действие</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->status == '1' ? 'Скрит':'Видим'}}</td>
                                <td>{{$category->image}}</td>
                                <td>
                                    <a href="{{ route('admin.category.edit', ['category_id' => $category->id]) }}"
                                        class="btn btn-success">Редактирай</a>
                                    <button data-bs-toggle="modal" data-bs-target="#deleteModal"
                                        wire:click="$emit('deleteCategory', {{ $category->id }})"
                                        class="btn btn-danger">Изтрий</button>
                                </td>
                            </tr>
                            @empty
                            <tr colspan="5">Няма намерени категории</tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div>{{$categories->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
<script>
    window.addEventListener('close-modal', event=>{
            $('#deleteModal').modal('hide');
        });
</script>
@endpush