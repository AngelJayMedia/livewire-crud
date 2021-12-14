<div class="p-2">

    @php
    $disabled = $errors->any() || empty($this->tag->name);
    @endphp

    <div class="flex gap-4">

        <x-jet-button class="bg-yellow-400 hover:bg-yellow-500" wire:click="openModalToUpdateTag" wire:loading.attr="disabled">
            <x-fas-edit class="w-4 h-4" />
        </x-jet-button>

    </div>

    <x-jet-dialog-modal wire:model="openModal">

        {{-- Title --}}
        <x-slot name="title">
            {{ __("Update Tag") }}
        </x-slot>

        {{-- Content --}}
        <x-slot name="content">
            <section class="w-full p-4 mx-auto space-y-4">

                {{-- Form --}}
                <form wire:submit.prevent='update' class="space-y-4" id="UpdateForm-{{ $this->formId }}">

                    {{-- Name --}}
                    <div class="space-y-4">
                        <x-jet-label for="tag.name" value="{{ __('Name') }}" />
                        <x-jet-input wire:model.debounce.500ms="tag.name" class="block w-full" name=" name" id="name" type="text" />
                        <x-jet-input-error for='tag.name' />
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
            <x-buttons.primary wire:target='update' wire:loading.attr='disabled' type="submit" :disabled="$disabled" form="UpdateForm-{{ $this->formId }}">
                {{ __('Update') }}
            </x-buttons.primary>
        </x-slot>

    </x-jet-dialog-modal>
</div>
