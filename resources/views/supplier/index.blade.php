<x-layout>
    <x-header :heading="$heading"></x-header>
    <div class="grid grid-rows-[5rem_1fr] mx-8 mt-4 text-lg">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-4 gap-2">

            <!-- left side buttons -->
            <div class="w-full sm:w-1/3 flex flex-row gap-2">
                <!-- Search with icon -->
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <!-- Heroicons: Magnifying Glass -->
                        <svg class="h-5 w-5 text-neutral-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z" />
                        </svg>
                    </span>
                    <input type="text" placeholder="Search suppliers..."
                        class="pl-10 pr-2 py-2 border border-neutral-400 rounded-sm focus:outline-none focus:ring-2 focus:ring-netural-950">
                </div>

                <!-- Sort button -->
                <button
                    class="flex items-center justify-center gap-2 px-3 py-2 text-neutral-600 font-medium  bg-white border border-neutral-800 rounded-sm hover:bg-gray-300">
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
                <button onclick="toggleModal(true)"
                    class="px-3 py-2 bg-neutral-900 text-white rounded-md hover:bg-neutral-600">
                    Create Supplier
                </button>
            </div>
        </div>
        <div>
            <x-tables :suppliers=$suppliers></x-tables>
        </div>
    </div>

</x-layout>

<!-- Modal -->
<div id="createSupplier" class="hidden fixed inset-0 flex items-center justify-center z-50">

    <!-- backdrop -->
    <div onclick="toggleModal(false)" class="absolute inset-0 bg-gray-500/75"></div>

    <!-- popup -->
    <form id="supplier-create" method="POST" action="{{ route('supplier.store') }}"
        class="relative bg-white p-6 rounded-2xl shadow-lg w-96 space-y-3 z-10">
        @csrf

        <h2 class="text-xl font-semibold text-center mb-4">Add Supplier</h2>

        <div class="flex flex-col">
            <label class="text-sm font-medium text-gray-700">Supplier Name</label>
            <input name="name" type="text" class="border border-gray-300 rounded-md p-2">
        </div>

        <div class="flex flex-col">
            <label class="text-sm font-medium text-gray-700">Supplier Address</label>
            <input name="address" type="text" class="border border-gray-300 rounded-md p-2">
        </div>

        <div class="flex flex-col">
            <label class="text-sm font-medium text-gray-700">Contact Person</label>
            <input name="contact_person" type="text" class="border border-gray-300 rounded-md p-2">
        </div>

        <div class="flex flex-col">
            <label class="text-sm font-medium text-gray-700">Contact Number</label>
            <input name="contact_number" type="text" class="border border-gray-300 rounded-md p-2">
        </div>

        <div class="flex justify-end space-x-3 mt-4">
            <button type="button" onclick="toggleModal(false)"
                class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">
                Cancel
            </button>
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700"
                onsubmit="clearSupplierForm()">
                Save
            </button>
        </div>
    </form>
</div>

<script>
    function toggleModal(show) {
        clearSupplierForm();
        document.getElementById("createSupplier").classList.toggle("hidden", !show);
    }

    function clearSupplierForm() {
        const form = document.querySelector('#supplier-create');
        if (form) {
            form.reset(); // clears all input fields
        }
    }
</script>
