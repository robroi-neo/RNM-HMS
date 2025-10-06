<!-- Supplier Details Modal -->
<div id="supplierDetailsModal" class="hidden fixed inset-0 flex items-center justify-center z-50">
    <!-- Backdrop -->
    <div onclick="toggleSupplierDetails(false)" class="absolute inset-0 bg-gray-500/75"></div>
    <!-- Popup Box -->
    <div class="relative bg-white p-6 rounded-2xl shadow-lg w-112 z-10 space-y-2">
        <h2 class="text-xl font-semibold mb-2">Supplier Details</h2>
        <div class="space-y-2 text-lg">
            <div class="grid grid-cols-2 gap-1">
                <p class="font-semibold text-gray-700">Supplier ID:</p>
                <p id="modalId" class="text-left text-gray-800"></p>
            </div>
            <div class="grid grid-cols-2 gap-1">
                <p class="font-semibold text-gray-700">Supplier Name:</p>
                <p id="modalName" class="text-left text-gray-800"></p>
            </div>
            <div class="grid grid-cols-2 gap-1">
                <p class="font-semibold text-gray-700">Supplier Address:</p>
                <p id="modalAddress" class="text-left text-gray-800"></p>
            </div>
            <div class="grid grid-cols-2 gap-1">
                <p class="font-semibold text-gray-700">Contact Person:</p>
                <p id="modalPerson" class="text-left text-gray-800"></p>
            </div>
            <div class="grid grid-cols-2 gap-1">
                <p class="font-semibold text-gray-700">Contact Number:</p>
                <p id="modalNumber" class="text-left text-gray-800"></p>
            </div>
        </div>


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
        // Populate modal fields
        console.log(values)
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
