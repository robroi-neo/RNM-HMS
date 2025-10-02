@props([
    'value' => '',
    'type' => 'data',
])

@if ($type === 'data')
    <td class="px-4 py-4 text-xl">{{ $value }}</td>
@else
    <td class="flex flex-row px-4 py-4 text-center justify-center space-x-3">
        <a class="text-center">
            <svg class="w-6 h-6 text-neutral-500 hover:text-neutral-900" viewBox="0 0 25 25" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M1.78564 6.25H23.2142" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M4.46436 6.25H20.5358V22.3214C20.5358 22.795 20.3476 23.2492 20.0128 23.5841C19.6779 23.919 19.2237 24.1071 18.7501 24.1071H6.25007C5.77647 24.1071 5.32227 23.919 4.98738 23.5841C4.65249 23.2492 4.46436 22.795 4.46436 22.3214V6.25Z"
                    fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M8.03564 6.25V5.35714C8.03564 4.17314 8.50599 3.03763 9.3432 2.20041C10.1804 1.3632 11.3159 0.892853 12.4999 0.892853C13.6839 0.892853 14.8194 1.3632 15.6567 2.20041C16.4939 3.03763 16.9642 4.17314 16.9642 5.35714V6.25"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M9.82129 9.82141V19.6428" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M15.1787 9.82141V19.6428" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </a>
        <a class="text-center">
            <svg class="w-6 h-6 text-neutral-500 hover:text-neutral-900" viewBox="0 0 25 25" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13.3933 16.0714L8.03613 17.0357L8.92899 11.6071L19.1611 1.41072C19.3271 1.24335 19.5246 1.1105 19.7422 1.01984C19.9599 0.929183 20.1933 0.882507 20.429 0.882507C20.6647 0.882507 20.8981 0.929183 21.1157 1.01984C21.3333 1.1105 21.5308 1.24335 21.6968 1.41072L23.5897 3.30358C23.7571 3.46958 23.8899 3.66708 23.9806 3.88469C24.0712 4.10229 24.1179 4.3357 24.1179 4.57143C24.1179 4.80717 24.0712 5.04057 23.9806 5.25818C23.8899 5.47578 23.7571 5.67328 23.5897 5.83929L13.3933 16.0714Z"
                    fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M21.4288 16.9643V22.3214C21.4288 22.795 21.2406 23.2492 20.9058 23.5841C20.5709 23.919 20.1167 24.1072 19.6431 24.1072H2.67878C2.20518 24.1072 1.75098 23.919 1.41609 23.5841C1.0812 23.2492 0.893066 22.795 0.893066 22.3214V5.35716C0.893066 4.88356 1.0812 4.42935 1.41609 4.09447C1.75098 3.75958 2.20518 3.57144 2.67878 3.57144H8.03592"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </td>
@endif
