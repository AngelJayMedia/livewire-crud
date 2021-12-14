<div class="overflow-hidden border border-gray-200 shadow sm:rounded-lg">

    <div class="flex w-full p-3 space-x-2">

        {{-- Search Box --}}
        <div class="w-3/6">
            <span class="absolute z-10 items-center justify-center w-8 h-full py-3 pl-3 text-base font-normal leading-snug text-center text-gray-400 bg-transparent rounded">
                <i class="fas fa-search" aria-hidden="true"></i>
            </span>
            <input type="text" class="relative w-full px-3 py-3 pl-10 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded shadow-inner outline-none focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-theme-pink-50" placeholder="Search Posts...">
        </div>

        {{-- Order By --}}
        <div class="relative w-1/6">
            <select class="relative w-full px-3 py-3 pl-10 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded outline-none focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-theme-pink-50" id="grid-state">
                <option value="id">ID</option>
                <option value="title">Title</option>
                <option value="created_at">Created At</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
            </div>
        </div>

        {{-- Order Asc --}}
        <div class="relative w-1/6">
            <select wire:model="orderAsc" class="relative w-full px-3 py-3 pl-10 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded outline-none focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-theme-pink-50" id="grid-state">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
            </div>
        </div>

        {{-- Amount Per Page --}}
        <div class="relative w-1/6">
            <select class="relative w-full px-3 py-3 pl-10 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded outline-none focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-theme-pink-50" id="grid-state">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
            </div>
        </div>
    </div>

    <div class="overflow-hidden shadow">
        <table class="w-full divide-y divide-gray-200 table-fixed">

            <thead class="font-bold tracking-wide text-gray-500 bg-indigo-200">
                <tr>
                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                    </th>

                    <th class="w-1/12 px-2 py-3 text-xs tracking-wider text-center uppercase">
                        Id
                    </th>

                    <th class="w-1/3 px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Title
                    </th>

                    <th class="w-1/6 px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Categories
                    </th>

                    <th class="w-1/6 px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Created Date
                    </th>

                    <th class="w-1/6 px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="text-xs divide-y divide-gray-200 bg-indigo-50">
                <tr>
                    <td class="px-2 py-4 whitespace-nowrap">
                    </td>

                    <td class="px-2 py-4 text-center whitespace-nowrap">
                    </td>

                    <td class="px-2 py-4 whitespace-nowrap">
                    </td>

                    <td class="px-2 py-4 whitespace-nowrap">
                    </td>

                    <td class="px-2 py-4 whitespace-nowrap">
                    </td>

                    <td class="px-2 py-4 whitespace-nowrap">
                    </td>

                    <td class="px-2 py-2 text-sm text-gray-500 whitespace-nowrap">

                        <div class="flex justify-start space-x-4">

                            View

                            Edit

                            Delete

                        </div>

                    </td>
                </tr>
            </tbody>
        </table>

        <div class="p-2 bg-indigo-100">
            Links
        </div>
    </div>
</div>
