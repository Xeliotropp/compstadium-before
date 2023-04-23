<!-- Brand Create Modal -->
<div wire:ignore.self class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавяне на марка</h5>
                <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <form wire:submit.prevent="storeBrand">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Изберете категория</label>
                        <select wire:model.defer="category_id" required class="form-control">
                            <option value="">-- Изберете категория --</option>
                            @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Име на марката</label>
                        <input type="text" wire:model.defer="name" class="form-control">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Slug на марката</label>
                        <input type="text" wire:model.defer="slug" class="form-control">
                        @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Статус</label><br>
                        <input type="checkbox" wire:model.defer="status"> (Маркиран = Скрит, Немаркиран = Видим)
                        @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" wire:click="closeModal" class="btn btn-secondary"
                        data-bs-dismiss="modal">Затвори</button>
                    <button type="submit" class="btn btn-primary">Запази</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Brand Update Modal -->
<div wire:ignore.self class="modal fade" id="updateBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Обновяване на марка</h5>
                <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <div wire:loading class="p-2" style="text-align:center">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Зареждане...</span>
                </div>
            </div>

            <div wire:loading.remove>
                <form wire:submit.prevent="updateBrand">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Изберете категория</label>
                            <select wire:model.defer="category_id" required class="form-control">
                                <option value="">-- Изберете категория --</option>
                                @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Име на марката</label>
                            <input type="text" wire:model.defer="name" class="form-control">
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Slug на марката</label>
                            <input type="text" wire:model.defer="slug" class="form-control">
                            @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Статус</label><br>
                            <input type="checkbox" wire:model.defer="status"> (Маркиран = Скрит, Немаркиран = Видим)
                            @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" wire:click="closeModal" class="btn btn-secondary"
                            data-bs-dismiss="modal">Затвори</button>
                        <button type="submit" class="btn btn-primary">Запази</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Brand Delete Modal -->
<div wire:ignore.self class="modal fade" id="deleteBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Изтрийте марка</h5>
                <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <div wire:loading class="p-2" style="text-align:center">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Зареждане...</span>
                </div>
            </div>

            <div wire:loading.remove>
                <form wire:submit.prevent="destroyBrand">
                    <div class="modal-body">
                        <h4>Сигурни ли сте, че искате да изтриете информацията?</h4>
                    </div>

                    <div class="modal-footer">
                        <button type="button" wire:click="closeModal" class="btn btn-secondary"
                            data-bs-dismiss="modal">Затвори</button>
                        <button type="submit" class="btn btn-primary">Да, изтрий!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>