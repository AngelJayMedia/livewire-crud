<x-guest-layout>
    <section class="relative block" style="height: 500px;">
        <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80");'>
            <span id="blackOverlay" class="absolute w-full h-full bg-black opacity-50"></span>
        </div>
        <div class="absolute bottom-0 left-0 right-0 top-auto w-full overflow-hidden pointer-events-none" style="height: 70px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>
    <section class="relative py-16 bg-gray-300">
        <div class="container px-4 mx-auto">
            <div class="relative flex flex-col w-full min-w-0 mb-6 -mt-64 break-words bg-white rounded-lg shadow-xl">
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="flex justify-center w-full px-4 lg:w-3/12 lg:order-2">
                            <div class="relative">
                                <img alt="..." src="{{ asset('img/team-2-800x800.jpg') }}" class="absolute h-auto -m-16 -ml-20 align-middle border-none rounded-full shadow-xl lg:-ml-16" style="max-width: 150px;" />
                            </div>
                        </div>
                        <div class="w-full px-4 lg:w-4/12 lg:order-3 lg:text-right lg:self-center">

                            {{-- Connect button --}}
                            <div class="px-3 py-6 mt-32 sm:mt-0">
                                <livewire:connect-button />
                            </div>
                        </div>
                        <div class="w-full px-4 lg:w-4/12 lg:order-1">
                            <div class="flex justify-center py-4 pt-8 lg:pt-4">
                                <div class="p-3 mr-4 text-center">
                                    <span class="block text-xl font-bold tracking-wide text-gray-700 uppercase">22</span><span class="text-sm text-gray-500">Friends</span>
                                </div>
                                <div class="p-3 mr-4 text-center">
                                    <span class="block text-xl font-bold tracking-wide text-gray-700 uppercase">10</span><span class="text-sm text-gray-500">Photos</span>
                                </div>
                                <div class="p-3 text-center lg:mr-4">
                                    <span class="block text-xl font-bold tracking-wide text-gray-700 uppercase">89</span><span class="text-sm text-gray-500">Comments</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 text-center">
                        {{-- Livewire User Details --}}
                        <livewire:user-details>
                    </div>
                    <div class="py-10 mt-10 text-center border-t border-gray-300">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full px-4 lg:w-9/12">
                                <p class="mb-4 text-lg leading-relaxed text-gray-800">
                                    An artist of considerable range, Jenna the name taken by
                                    Melbourne-raised, Brooklyn-based Nick Murphy writes,
                                    performs and records all of his own music, giving it a
                                    warm, intimate feel with a solid groove structure. An
                                    artist of considerable range.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-5 bg-gray-300">
        <div class="container flex p-4 px-4 mx-auto bg-white rounded shadow-xl">
            <h2 class="text-xl font-bold">Jenna Stones' Latest Post</h2>
        </div>
    </section>

    <section class="relative bg-gray-300">
        <div class="container flex p-4 px-4 mx-auto bg-white rounded shadow-xl">
        </div>
    </section>
</x-guest-layout>

<script>
    Livewire.on('connected', () => {
        console.log('JavaScript event listened to')
    })

</script>
