<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Добави марка</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent='storeBrand'>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="">Име на марката</label>
                        <input type="text" wire:model.defer='name' class="form-control">
                        @error('name')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Slug на марката</label>
                        <input type="text" wire:model.defer='slug' class="form-control">
                    </div>
                    @error('slug')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                    <div class="mb-3">
                        <label for="">Статус на марката</label> <br>
                        <input type="checkbox" wire:model.defer='status'> Отметнат = Скрит, Без отметка = Видим
                    </div>
                    @error('status')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Затвори</button>
                    <button type="button" class="btn btn-primary">Запази промените</button>
                </div>
            </form>
        </div>
    </div>
</div>