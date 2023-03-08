<div>
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Изтрий категория/h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent='destroyCategory'>
                    <div class="modal-body">
                        <h6>Сигурни ли сте, че искате да изтриете информацията?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                                <th>Идентификационен номер</th>
                                <th>Име</th>
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
                    <div>
                        {{$brands->links()}}
                    </div>

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