@if (session()->has('success'))
<div class="flex items-center px-2 py-1 space-x-2 text-white bg-green-400 rounded" x-data="{open: true}" x-init="setTimeout(() => {open = false}, 2000)" x-show="open" x-transition:enter="transition duration-500 transform ease-out" x-transition:enter-start="opacity-1" x-transition:leave="transition duration-500 transform ease-in" x-transition:leave-end="opacity-0">
    <svg class="w-5 pt-1 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
    <span>
        {{ session('success') }}
    </span>
</div>
@endif
