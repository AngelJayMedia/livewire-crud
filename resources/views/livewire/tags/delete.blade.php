<div class="p-2">

    <div class="flex gap-4">
        <x-jet-button class="bg-red-500 hover:bg-red-400" wire:click="openModalToDeleteTag">
            <x-far-trash-alt class="w-4 h-4" />
        </x-jet-button>
    </div>

    <x-jet-dialog-modal wire:model="openModal">

        {{-- Title --}}
        <x-slot name="title">
            {{ __("Delete Tag") }}
        </x-slot>

        {{-- Content --}}
        <x-slot name="content">
            {{ __('Are you sure you want to delete this Tag?') }}
        </x-slot>

        {{-- Footer --}}
        <x-slot name="footer">

            {{-- Cancel button --}}
            <x-jet-secondary-button wire:click.prevent="$toggle('openModal')">
                {{ __('Nevermind') }}
            </x-jet-secondary-button>

            {{-- Delete Button --}}
            <x-jet-danger-button wire:click="delete" wire:loading.attr='disabled'>
                {{ __('Delete Tag') }}
            </x-jet-danger-button>

        </x-slot>
    </x-jet-dialog-modal>
</div>
