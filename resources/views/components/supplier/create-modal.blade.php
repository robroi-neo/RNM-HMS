<!-- Modal -->
<div id="createSupplier" class="hidden fixed inset-0 flex items-center justify-center z-50">

    <!-- backdrop -->
    <div onclick="toggleModal(false)" class="absolute inset-0 bg-gray-500/75"></div>

    <!-- popup -->
    <form id="supplier-create" method="POST" action="{{ route('supplier.store') }}"
        class="relative bg-white p-6 rounded-2xl shadow-lg w-112 space-y-3 z-10">
        @csrf

        <div class="flex justify-center">
            <h2 class="text-xl font-semibold mb-4">Create Supplier</h2>
        </div>

        <div class="flex flex-col">
            <label class="text-sm font-semibold text-gray-700">Supplier Name</label>
            <input name="company_name" type="text" class="border border-gray-300 rounded-md p-2" required>
        </div>

        <div class="flex flex-col">
            <label class="text-sm font-semibold text-gray-700">Supplier Address</label>
            <input name="address" type="text" class="border border-gray-300 rounded-md p-2" required>
        </div>

        <div class="flex flex-col">
            <label class="text-sm font-semibold text-gray-700">Contact Person</label>
            <input name="contact_person" type="text" class="border border-gray-300 rounded-md p-2" required>
        </div>

        <div class="flex flex-col">
            <label class="text-sm font-semibold text-gray-700">Contact Number</label>
            <input name="contact_number" type="text" class="border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="flex">
            <p class="text-neutral-400 italic text-sm"> Please ensure that the item details are correct.</p>
        </div>

        <div class="flex justify-end space-x-3 mt-4">
            <button type="button" onclick="toggleModal(false)"
                class="px-4 py-2 bg-neutral-200 text-neutral-900 rounded-md hover:bg-neutral-300">
                Cancel
            </button>
            <button type="submit" class="px-4 py-2 bg-neutral-900 text-white rounded-md hover:bg-neutral-700">
                Confirm
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
