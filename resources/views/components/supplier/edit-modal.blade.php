<!-- Edit Supplier Modal -->
<div id="editSupplierModal" class="hidden fixed inset-0 flex items-center justify-center z-50 w-auto">
    <!-- Backdrop -->
    <div onclick="toggleEditModal(false)" class="absolute inset-0 bg-gray-500/75"></div>

    <!-- Popup Form -->
    <!-- add edit action later -->
    <form id="editSupplierForm" method="POST" class="relative bg-white p-6 rounded-2xl shadow-lg z-10 space-y-4">
        @csrf
        @method('PUT')

        <h2 class="text-xl font-semibold mb-4 text-center">Edit Supplier Details</h2>

        <!-- Supplier ID (read-only) -->
        <div class="grid grid-cols-2 gap-1 items-center">
            <label class="font-semibold text-gray-700">Supplier ID:</label>
            <input id="id" name="id" type="text" readonly
                class="border border-gray-300 rounded-md p-2 bg-gray-100 text-gray-700" />
        </div>

        <!-- edit Name -->
        <div class="grid grid-cols-2 gap-1 items-center">
            <label class="font-semibold text-gray-700">Supplier name:</label>
            <input id="edit_name" name="address" type="text"
                class="border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-neutral-500 focus:outline-none" />
        </div>

        <!-- edit Address -->
        <div class="grid grid-cols-2 gap-1 items-center">
            <label class="font-semibold text-gray-700">Supplier Address:</label>
            <input id="edit_address" name="address" type="text"
                class="border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-neutral-500 focus:outline-none" />
        </div>

        <!-- edit Contact Person -->
        <div class="grid grid-cols-2 gap-1 items-center">
            <label class="font-semibold text-gray-700">Contact Person:</label>
            <input id="edit_person" name="address" type="text"
                class="border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-neutral-500 focus:outline-none" />
        </div>

        <!-- edit Contact Number-->
        <div class="grid grid-cols-2 gap-1 items-center">
            <label class="font-semibold text-gray-700">Contact Number:</label>
            <input id="edit_contact" name="address" type="text"
                class="border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-neutral-500 focus:outline-none" />
        </div>

        <!-- Footer -->
        <div class="flex justify-end space-x-3 mt-4">
            <button type="button" onclick="toggleEditModal(false)"
                class="px-4 py-2 bg-neutral-200 text-neutral-900 rounded-md hover:bg-neutral-300">
                Cancel
            </button>
            <button type="submit" class="px-4 py-2 bg-neutral-900 text-white rounded-md hover:bg-neutral-700">
                Save Changes
            </button>
        </div>
    </form>
</div>


<script>
    async function editRow(values) {
        console.log(values)
        // Fill modal fields with existing supplier data
        document.getElementById('id').value = values.id;
        document.getElementById('edit_name').value = values.company_name;
        document.getElementById('edit_address').value = values.address;
        document.getElementById('edit_person').value = values.contact_person;
        document.getElementById('edit_contact').value = values.contact_number;

        toggleEditModal(true);
    }

    function toggleEditModal(show) {
        const modal = document.getElementById("editSupplierModal");
        modal.classList.toggle("hidden", !show);
    }
</script>
