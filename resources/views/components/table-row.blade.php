@props(['values'])

<tr class="hover:bg-gray-50 border-neutral-200 border-b-1"
    onclick='showSupplierDetails(this, @json($values))'>

    <!-- populate with database -->
    <x-table-data type="data" :value="$values['id']"></x-table-data>
    <x-table-data type="data" :value="$values['company_name']"></x-table-data>
    <x-table-data type="data" :value="$values['address']"></x-table-data>

    <x-table-data type="action_btns"></x-table-data>
</tr>
