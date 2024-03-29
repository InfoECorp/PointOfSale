<div>
    <div class="w-full px-4">

        <x-validation-errors class="mb-4" :errors="$errors" />

        <form wire:submit.prevent="store">

            <div class="mb-4 flex flex-wrap">
                <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                    <x-label for='customer_id' :value="__('Customer')" required />
                    <x-select2 :options="$this->customer" name="customer_id" id="customer_id" required wire:model="customer_id" />
                    <x-input-error :messages="$errors->get('customer_id')" class="mt-2" />
                </div>
                <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                    <x-label for="date" :value="__('Date')" required />
                    <x-input type="date" wire:model="date" name="date" required value="{{ date('Y-m-d') }}" />
                    <x-input-error :messages="$errors->get('date')" class="mt-2" />
                </div>
            </div>

            <livewire:product-cart :cartInstance="'sale'" />

            <div class="flex flex-row">
                <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                    <label for="total_amount">{{ __('Total Amount') }} <span class="text-red-500">*</span></label>
                    <x-input id="total_amount" type="text" wire:model="total_amount" name="total_amount"
                        value="{{ $total_amount }}" readonly required />
                </div>

                <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                    <label for="paid_amount">{{ __('Received Amount') }} <span class="text-red-500">*</span></label>
                    <x-input id="paid_amount" type="text" wire:model="paid_amount" value="{{ $total_amount }}"
                        name="paid_amount" required />

                </div>

                <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                    <label for="payment_method">{{ __('Payment Method') }} <span class="text-red-500">*</span></label>
                    <select
                        class="block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md mt-1"
                        name="payment_method" id="payment_method" wire:model="payment_method" required>
                        <option value="">{{ __('Select option') }}</option>
                        <option value="Cash">{{ __('Cash') }}</option>
                        <option value="Bank Transfer">{{ __('Bank Transfer') }}</option>
                        <option value="Cheque">{{ __('Cheque') }}</option>
                        <option value="Other">{{ __('Other') }}</option>
                    </select>
                </div>
            </div>

            <div class="mb-4">
                <label for="note">{{ __('Note (If Needed)') }}</label>
                <textarea name="note" id="note" rows="5" wire:model="note"
                    class="block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md mt-1"></textarea>
            </div>

            <div class="flex flex-wrap px-3 space-x-2">
                <x-button danger type="button" wire:click="resetCart" wire:loading.attr="disabled"
                    class="ml-2 font-bold">
                    {{ __('Reset') }}
                </x-button>
                <button
                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-500 disabled:opacity-25 transition ease-in-out duration-150 bg-green-600 hover:bg-green-700"
                    type="submit" wire:click="proceed" wire:loading.attr="disabled"
                    {{ $total_amount == 0 ? 'disabled' : '' }}>
                    {{ __('Proceed') }}
                </button>
            </div>

        </form>
    </div>
</div>
