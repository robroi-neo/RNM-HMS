<x-layout>
    <x-header :heading="$heading"></x-header>
    <div class="grid grid-rows-[5rem_1fr] mx-8 mt-5">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-4 gap-2">

            <!-- left side buttons -->
            <div class="w-full sm:w-1/3 flex flex-row gap-2">
                <!-- Search with icon -->
                <div class="relative w-full">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <!-- Heroicons: Magnifying Glass -->
                        <svg class="h-5 w-5 text-neutral-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z" />
                        </svg>
                    </span>
                    <input type="text" placeholder="Search suppliers..."
                        class="w-full pl-10 pr-3 py-2 border border-neutral-400 rounded-sm text-xl focus:outline-none focus:ring-2 focus:ring-netural-950">
                </div>

                <!-- Sort button -->
                <button
                    class="flex items-center justify-center gap-2 px-3 py-2 text-xl text-neutral-600 font-medium  bg-white border border-neutral-800 rounded-sm hover:bg-gray-300">
                    <!-- Sort Icon (Up & Down) -->
                    <svg class="h-4 w-4 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7l4-4 4 4M16 17l-4 4-4-4" />
                    </svg>
                    Sort
                </button>


            </div>

            <!-- Right-side buttons -->
            <div class="flex gap-2">
                <!-- Create Supplier -->
                <button class="px-4 py-3 text-xl bg-neutral-900 text-white rounded-md hover:bg-neutral-600">
                    Create Supplier
                </button>
            </div>
        </div>
        <div>
            <!-- Table -->
            <x-tables :suppliers=$suppliers></x-tables>
            <!-- Pass Array Data to table -->
            <!-- The -->
        </div>
    </div>

</x-layout>
