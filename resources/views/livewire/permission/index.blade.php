<div>
    <div class="flex flex-wrap justify-center">
        <div class="lg:w-1/2 md:w-1/2 sm:w-full flex flex-wrap my-2">
            <select wire:model="perPage"
                class="w-20 block p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm focus:shadow-outline-blue focus:border-blue-300 mr-3">
                @foreach ($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>
            @can('permission_delete')
                <button
                    class="text-blue-500 dark:text-gray-300 bg-transparent dark:bg-dark-eval-2 border border-blue-500 dark:border-gray-300 hover:text-blue-700  active:bg-blue-600 font-bold uppercase text-xs p-3 rounded outline-none focus:outline-none ease-linear transition-all duration-150"
                    type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled"
                    {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete') }}
                </button>
            @endcan
            @if ($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
        </div>
        <div class="lg:w-1/2 md:w-1/2 sm:w-full my-2">
            <div class="my-2">
                <x-input wire:model.lazy="search" placeholder="{{ __('Search') }}" autofocus />
            </div>
        </div>
    </div>

    <x-table>
        <x-slot name="thead">
            <x-table.th>#</x-table.th>
            <x-table.th sortable wire:click="sortBy('title')" :direction="$sorts['title'] ?? null">
                {{ __('Title') }}
            </x-table.th>
            <x-table.th>
                {{ __('Actions') }}
            </x-table.th>
        </x-slot>
        <x-table.tbody>
            @forelse($permissions as $permission)
                <x-table.tr wire:loading.class.delay="opacity-50" wire:key="row-{{ $permission->id }}">
                    <x-table.td>
                        <input type="checkbox" value="{{ $permission->id }}" wire:model="selected">
                    </x-table.td>
                    <x-table.td>
                        {{ $permission->name }}
                    </x-table.td>
                    <x-table.td>
                        <div class="inline-flex">
                            @can('permission_show')
                                <x-button primary type="button">
                                    {{ __('Show') }}
                                </x-button>
                            @endcan
                            @can('permission_edit')
                                <x-button alert type="button"
                                    class="btn btn-sm text-white bg-green-500 border-green-800 hover:bg-green-600 active:bg-green-700 focus:ring-green-300mr-2">
                                    {{ __('Edit') }}
                                </x-button>
                            @endcan
                            @can('permission_delete')
                                <x-button
                                    danger
                                    type="button" wire:click="confirm('delete', {{ $permission->id }})"
                                    wire:loading.attr="disabled">
                                    {{ __('Delete') }}
                                </x-button>
                            @endcan
                        </div>
                    </x-table.td>
                </x-table.tr>
            @empty
                <x-table.tr>
                    <x-table.td colspan="10" class="text-center">
                        {{ __('No entries found.') }}
                    </x-table.td>
                </x-table.tr>
            @endforelse
        </x-table.tbody>
    </x-table>

    <div class="p-4">
        <div class="pt-3">

            {{ $permissions->links() }}
        </div>
    </div>
</div>
