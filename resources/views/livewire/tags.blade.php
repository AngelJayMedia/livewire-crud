<div>
    {{-- Page title --}}
    <x-slot name="title">
        {{ __('Tags') }}
    </x-slot>

    <div class="space-y-6">

        {{-- "R": Read -> INDEX --}}
        <livewire:tags.index />

    </div>
</div>
