<div>
    <x-modal wire:model="editModal">
        <x-slot name="title">
            {{ __('Edit Role') }}
        </x-slot>

        <x-slot name="content">
            <form wire:submit.prevent="update">
                <div class="flex flex-wrap justify-center">
                    <div class="xl:w-1/3 lg:w-1/2 sm:w-full px-3">
                        <label for="title">{{ __('Title') }}</label>
                        <input type="text" class="form-control" id="title" wire:model="role.title">
                        @error('role.title')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="xl:w-1/3 lg:w-1/2 sm:w-full px-3">
                        
                    </div>
                    <div class="w-full px-3">
                        <x-button primary type="submit" class="w-full text-center" wire:loading.attr="disabled">
                            {{ __('Save') }}
                        </x-button>
                    </div>
                </div>
            </form>
        </x-slot>
    </x-modal>
</div>
