<div>
    <div wire:ignore.self class="card mb-4">
        <div class="card-header">
            <h1>
                Cadastrar
            </h1>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" wire:model.defer="name">
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group mt-2">
                <label>E-mail</label>
                <input type="email" class="form-control" wire:model.defer="email">
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>

        </div>
        <div class="card-footer">
            <x-jet-action-message on='saved'>
                Salvo com sucesso.
            </x-jet-action-message>
            <button wire:loading.attr="disabled" type="button" class="btn btn-primary btn-block" wire:click="submit">
                <i class="fas fa-cloud-upload-alt"></i>
                SALVAR
            </button>
        </div>
    </div>
</div>

@push('component-scripts')
    <script>
        (function ($) {
            $(document).on('livewire:load', () => {
            });
        });
    </script>
@endpush
