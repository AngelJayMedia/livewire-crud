<div>

    @php
    $disabled = $errors->any() || empty($image) || empty($title)
    @endphp


    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Posts: Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">

                {{-- Image preview --}}
                @if ($this->image)
                <div class="relative w-56 pr-6">
                    <img src="{{ $image->temporaryUrl() }}">

                    <div class="absolute top-0 right-0">
                        <a class="text-2xl font-bold cursor-pointer" wire:click="cleanUp">
                            x
                        </a>
                    </div>
                </div>
                @endif

                <form wire:submit.prevent="save" class="space-y-6">

                    {{-- Cover Image --}}
                    <div class="space-y-2">
                        <x-jet-label for="image" value="{{ __('Cover Image') }}" />
                        <x-jet-input wire:model="image" id="{{ $imageId }}" class="block w-full mt-1" type="file" />
                        <x-jet-input-error for="image" />

                        <div wire:loading wire:target="image">
                            <span class="text-green-600">Uploading Image...</span>
                        </div>
                    </div>

                    {{-- Cover Image --}}
                    <div>
                        <x-jet-label for="title" value="{{ __('Title') }}" />
                        <x-jet-input wire:model.defer="title" id="title" class="block w-full mt-1" type="text" />
                        <x-jet-input-error for="title" />
                    </div>

                    <x-jet-button>
                        Create post
                    </x-jet-button>

                </form>

            </div>
        </div>
    </div>
</div>

@push('scripts')

<script>
    window.addEventListener('post-created', function(e) {
        Swal.fire({
            title: e.detail.title
            , icon: e.detail.icon
            , iconColor: e.detail.iconColor
            , timer: 5000
            , timerProgressBar: true
            , toast: true
            , position: 'top-right'
            , showConfirmButton: false
        , });
    });

</script>
@endpush
