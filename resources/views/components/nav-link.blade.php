@props(['href' => '#', 'active' => false])

<a href="{{ $href }}"
    {{ $attributes->merge([
       'class' => 'px-4 py-2 rounded-md flex flex-row gap-2 items-center ' .
                 ($active ? 'bg-neutral-950 text-white' : 'bg-white text-black hover:bg-neutral-500 hover:text-white')
   ]) }}>

    {{-- Icon slot (inject full SVG here) --}}
    @if (isset($icon))
    <span class="h-5 w-5 flex-shrink-0">
        {{$icon}}
    </span>
    @endif

    {{-- Text --}}
    <span class="self-baseline">{{ $slot }}</span>
</a>