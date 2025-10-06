<!-- Edit Supplier Modal -->
<div id="editSupplierModal" class="hidden fixed inset-0 flex items-center justify-center z-50">
    <!-- Backdrop -->
    <div onclick="toggleEditModal(false)" class="absolute inset-0 bg-gray-500/75"></div>

    <!-- Popup Form -->
    <form id="editSupplierForm" method="POST" action="{{ route('supplier.edit') }}"
        class="relative bg-white p-6 rounded-2xl shadow-lg w-112 z-10 space-y-4">
        @csrf
        @method('PUT')

        <h2 class="text-xl font-semibold mb-4 text-center">Edit Supplier Details</h2>

        <!-- Supplier ID (read-only) -->
        <div class="grid grid-cols-2 gap-2 items-center">
            <label class="font-semibold text-gray-700">Supplier ID:</label>
            <input id="edit_id" name="id" type="text" readonly
                class="border border-gray-300 rounded-md p-2 bg-gray-100 text-gray-700" />
        </div>

        <!-- Old Name -->
        <div class="grid grid-cols-2 gap-2 items-center">
            <label class="font-semibold text-gray-700">Supplier Name:</label>
            <input id="old_name" type="text" readonly
                class="border border-gray-300 rounded-md p-2 bg-gray-100 text-gray-700" />
        </div>

        <!-- New Name -->
        <div class="grid grid-cols-2 gap-2 items-center">
            <label class="font-semibold text-gray-700">New Supplier Name:</label>
            <input id="edit_name" name="name" type="text" required
                class="border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-neutral-500 focus:outline-none" />
        </div>

        <!-- Old Address -->
        <div class="grid grid-cols-2 gap-2 items-center">
            <label class="font-semibold text-gray-700">Supplier Address:</label>
            <input id="old_address" name="address" type="text" readonly
                class="border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-neutral-500 focus:outline-none" />
        </div>

        <!-- New Address -->
        <div class="grid grid-cols-2 gap-2 items-center">
            <label class="font-semibold text-gray-700">New Supplier Address:</label>
            <input id="edit_address" name="address" type="text" required
                class="border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-neutral-500 focus:outline-none" />
        </div>

        <!-- Old Contact Person -->
        <div class="grid grid-cols-2 gap-2 items-center">
            <label class="font-semibold text-gray-700">Contact Person:</label>
            <input id="old_contact" name="address" type="text" readonly
                class="border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-neutral-500 focus:outline-none" />
        </div>

        <!-- New Contact Person -->
        <div class="grid grid-cols-2 gap-2 items-center">
            <label class="font-semibold text-gray-700">New Contact Person:</label>
            <input id="edit_person" name="contact_person" type="text" required
                class="border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-neutral-500 focus:outline-none" />
        </div>

        <!-- Old Contact Number-->
        <div class="grid grid-cols-2 gap-2 items-center">
            <label class="font-semibold text-gray-700">Old Contact Number:</label>
            <input id="old_contact" name="address" type="text" readonly
                class="border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-neutral-500 focus:outline-none" />
        </div>

        <!-- New Contact Number -->
        <div class="grid grid-cols-2 gap-2 items-center">
            <label class="font-semibold text-gray-700">New Contact Number:</label>
            <input id="edit_number" name="contact_number" type="text" required
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
    function editRow(id, supplier) {
        // Fill modal fields with existing supplier data
        document.getElementById('edit_id').value = id;
        document.getElementById('old_name').value = supplier.company_name;
        document.getElementById('edit_name').value = supplier.company_name;
        document.getElementById('edit_address').value = supplier.address;
        document.getElementById('edit_person').value = supplier.contact_person;
        document.getElementById('edit_number').value = supplier.contact_number;

        toggleEditModal(true);
    }

    function toggleEditModal(show) {
        const modal = document.getElementById("editSupplierModal");
        modal.classList.toggle("hidden", !show);
    }
</script>
