@props([
    'value' => '',
    'values' => [],
])

<td class="px-4 py-3 text-lg truncate max-w-xs cursor-pointer">
    {{ $value }}
</td>


<script>
    async function deleteRow(id) {
        if (!confirm('Deleting this supplier will permanently remove them from the system. This cannot be undone.'))
            return;

        try {
            const response = await fetch("{{ route('supplier.delete') }}", {
                method: "DELETE",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                },
                body: JSON.stringify({
                    id: id
                }),
            });

            const data = await response.json();

            if (data.success) {
                alert('Supplier deleted successfully!');
                // Optionally, remove the row from the table:
                window.location.reload();
            } else {
                alert(data.error || 'Failed to delete supplier');
            }
        } catch (error) {
            console.error('Error deleting supplier:', error);
        }
    }
</script>
