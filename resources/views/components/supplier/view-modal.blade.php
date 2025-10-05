<!-- Supplier Details Modal -->
<div id="supplierDetailsModal" class="hidden fixed inset-0 flex items-center justify-center z-50">
    <!-- Backdrop -->
    <div onclick="toggleSupplierDetails(false)" class="absolute inset-0 bg-gray-500/75"></div>
    <!-- Popup Box -->
    <div class="relative bg-white p-6 rounded-2xl shadow-lg w-96 z-10 space-y-2">
        <h2 class="text-xl font-semibold mb-2">Supplier Details</h2>
        <p><strong>id:</strong> <span id="modalId"></span></p>
        <p><strong>Name:</strong> <span id="modalName"></span></p>
        <p><strong>Address:</strong> <span id="modalAddress"></span></p>
        <p><strong>Contact Person:</strong> <span id="modalPerson"></span></p>
        <p><strong>Contact Number:</strong> <span id="modalNumber"></span></p>

        <div class="flex justify-end mt-4">
            <button onclick="toggleSupplierDetails(false)"
                class="px-4 py-2 bg-neutral-800 text-white rounded-md hover:bg-neutral-700">
                Close
            </button>
        </div>
    </div>
</div>

<script>
    function showSupplierDetails(row, values) {
        console.log(values); // ← this will now be a real JS object

        // Populate modal fields
        document.getElementById('modalId').textContent = values.id;
        document.getElementById('modalName').textContent = values.company_name;
        document.getElementById('modalAddress').textContent = values.address;
        document.getElementById('modalPerson').textContent = values.contact_person;
        document.getElementById('modalNumber').textContent = values.contact_number;

        toggleSupplierDetails(true);
    }

    function toggleSupplierDetails(show) {
        document.getElementById('supplierDetailsModal').classList.toggle('hidden', !show);
    }
</script>
