<x-layout>
    <x-header :heading="$heading"></x-header>
    <x-supplier.create-modal></x-supplier.create-modal>
    <x-supplier.view-modal></x-supplier.view-modal>
    <x-supplier.edit-modal></x-supplier.edit-modal>

    <div class="grid grid-rows-[5rem_1fr] mx-8 mt-4 text-lg">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-2 gap-2">

            <!-- left side buttons -->
            <div class="w-full sm:w-2/3 flex items-center">
                <form method="GET" action="{{ route('supplier.index') }}" class="flex w-9/10 items-center space-x-2">
                    <div class="relative flex-grow">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-neutral-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z" />
                            </svg>
                        </span>
                        <input type="text" name="search" placeholder="Search suppliers..."
                            value="{{ request('search') }}"
                            class="pl-10 pr-2 py-2 border border-neutral-400 rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-900 w-full">
                    </div>
                    <button type="submit"
                        class=" px-4 py-2 bg-neutral-900 text-white rounded-md hover:bg-neutral-700 whitespace-nowrap">
                        Search
                    </button>
                </form>
                <div>

                </div>
                <form method="GET" action="{{ route('supplier.index') }}" class="relative inline-block">
                    <select name="sort" onchange="this.form.submit()"
                        class="border border-neutral-400 rounded-md ml-3 px-3 py-3 focus:ring-2 focus:ring-neutral-900 text-sm bg-white cursor-pointer">
                        <option value="id_desc" {{ request('sort') == 'id_desc' ? 'selected' : '' }}>Newest → Oldest
                        </option>
                        <option value="id_asc" {{ request('sort') == 'id_asc' ? 'selected' : '' }}>Oldest → Newest
                        </option>
                        <option value="company_asc" {{ request('sort') == 'company_asc' ? 'selected' : '' }}>Supplier
                            Name (A–Z)</option>
                        <option value="company_desc" {{ request('sort') == 'company_desc' ? 'selected' : '' }}>Supplier
                            Name (Z–A)</option>
                    </select>
                </form>

            </div>

            <!-- Right-side buttons -->
            <div class="flex gap-2">
                <!-- Create Supplier -->
                <button onclick="toggleModal(true)"
                    class="px-3 py-2 bg-neutral-900 text-white rounded-md hover:bg-neutral-600">
                    Create Supplier
                </button>
            </div>
        </div>
        <x-tables :values=$suppliers></x-tables>
    </div>
</x-layout>
