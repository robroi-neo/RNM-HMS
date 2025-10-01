@props([
    'values' => [],
])

<tr class="hover:bg-gray-50  border-neutral-200 border-b-1">
    <!-- populate with database later -->
    @foreach ($values as $value)
        <x-table-data type="data" value="{{ $value }}"></x-table-data>
    @endforeach
    <x-table-data type="action_btns"></x-table-data>
</tr>
