<div class="p-4">
    @php
    $disabled = $errors->any() || empty($this->name);
    @endphp

    <div class="flex gap-4">
        <x-jet-button class="bg-green-600 hover:bg-green-500" wire:click="openModalToCreateTag" wire:loading.attr="disabled">
            {{ __('Create Tag') }}
        </x-jet-button>

        <div class="w-10/12">
            {{-- Alert Message --}}
            <x-alerts.message />
        </div>
    </div>

    <x-jet-dialog-modal wire:model="openModal">
        {{-- Title --}}
        <x-slot name="title">
            {{ __("Create Tag") }}
        </x-slot>

        {{-- Content --}}
        <x-slot name="content">
            <section class="w-full p-4 mx-auto space-y-4">

                {{-- Form --}}
                <form wire:submit.prevent='store' class="space-y-4" id="SubmitForm">
                    @csrf
                    {{-- Name --}}
                    <div class="space-y-4">
                        <x-jet-label for="name" value="{{ __('Name') }}" />
                        <x-jet-input wire:model.debounce.500ms="name" class="block w-full" name=" name" id="name" type="text" />
                        <x-jet-input-error for='name' />
                    </div>

                </form>
            </section>
        </x-slot>

        <x-slot name="footer">
            {{-- Cancel Button --}}
            <x-jet-secondary-button wire:click.prevent="$toggle('openModal')">
                {{ __('Nevermind') }}
            </x-jet-secondary-button>

            {{-- Submit Button --}}
            <x-buttons.primary wire:target='store' wire:loading.attr='disabled' type="submit" :disabled="$disabled" form="SubmitForm">
                {{ __('Create') }}
            </x-buttons.primary>
        </x-slot>


    </x-jet-dialog-modal>
</div>
