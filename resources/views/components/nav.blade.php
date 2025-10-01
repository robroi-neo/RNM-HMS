<aside class="h-screen bg-white text-black border-r-1 border-neutral-200 shadow-sm flex flex-col p-4 space-y-4">
    <!-- Logo + Title -->
    <a href="/" class="flex items-center space-x-3 p-2 rounded-lg mb-20">
        <img src="{{ asset('img/logo.svg') }}" alt="logo" class="w-10 h-10">
        <div>
            <h1 class="text-lg font-bold">RNM Hardware</h1>
            <h2 class="text-sm text-neutral-700">Management System</h2>
        </div>
    </a>

    <!-- Navigation Links -->
    <x-nav-link href="/" :active="request()->is('/')">
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="currentColor" stroke="currentColor" class="h-5 w-5 hover:text-white">
                <g clip-path="url(#clip0_368_29)">
                    <path d="M18.5716 9.28571H12.8574C12.4629 9.28571 12.1431 9.6055 12.1431 9.99999V18.5714C12.1431 18.9659 12.4629 19.2857 12.8574 19.2857H18.5716C18.9661 19.2857 19.2859 18.9659 19.2859 18.5714V9.99999C19.2859 9.6055 18.9661 9.28571 18.5716 9.28571Z" fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M18.5716 0.714294H12.8574C12.4629 0.714294 12.1431 1.03409 12.1431 1.42858V4.30001C12.1431 4.6945 12.4629 5.01429 12.8574 5.01429H18.5716C18.9661 5.01429 19.2859 4.6945 19.2859 4.30001V1.42858C19.2859 1.03409 18.9661 0.714294 18.5716 0.714294Z" fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M7.14293 0.714294H1.42864C1.03415 0.714294 0.714355 1.03409 0.714355 1.42858V10C0.714355 10.3945 1.03415 10.7143 1.42864 10.7143H7.14293C7.53742 10.7143 7.85721 10.3945 7.85721 10V1.42858C7.85721 1.03409 7.53742 0.714294 7.14293 0.714294Z" fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M7.14293 14.9857H1.42864C1.03415 14.9857 0.714355 15.3055 0.714355 15.7V18.5714C0.714355 18.9659 1.03415 19.2857 1.42864 19.2857H7.14293C7.53742 19.2857 7.85721 18.9659 7.85721 18.5714V15.7C7.85721 15.3055 7.53742 14.9857 7.14293 14.9857Z" fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
        </x-slot:icon>
        Dashboard
    </x-nav-link>

    <x-nav-link href="/pos" :active="request()->is('pos')">
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="currentColor" stroke="currentColor" class="h-5 w-5 hover:text-white">
                <g clip-path="url(#clip0_368_29)">
                    <path d="M16 2L14.829 13.3571C14.7773 13.6978 14.6043 14.0083 14.3418 14.2314C14.0793 14.4546 13.7449 14.5753 13.4004 14.5714H4.40043C4.0889 14.5877 3.78062 14.5015 3.52266 14.3261C3.26471 14.1507 3.07125 13.8957 2.97186 13.6L1.07186 7.88571C1.00101 7.67088 0.982206 7.44229 1.01698 7.21876C1.05175 6.99524 1.1391 6.78317 1.27186 6.6C1.41015 6.40526 1.59507 6.2483 1.8097 6.14348C2.02433 6.03866 2.26181 5.98933 2.50043 6H15.5719" fill="currentColor" />
                    <path d="M15.5719 6H2.50043C2.26181 5.98933 2.02433 6.03866 1.8097 6.14348C1.59507 6.2483 1.41015 6.40526 1.27186 6.6C1.1391 6.78317 1.05175 6.99524 1.01698 7.21876C0.982206 7.44229 1.00101 7.67088 1.07186 7.88571L2.97186 13.6C3.07125 13.8957 3.26471 14.1507 3.52266 14.3261C3.78062 14.5015 4.0889 14.5877 4.40043 14.5714H13.4004C13.7449 14.5753 14.0793 14.4546 14.3418 14.2314C14.6043 14.0083 14.7773 13.6978 14.829 13.3571L16 2L19 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M4.28557 19.2857C4.68006 19.2857 4.99986 18.966 4.99986 18.5715C4.99986 18.177 4.68006 17.8572 4.28557 17.8572C3.89109 17.8572 3.57129 18.177 3.57129 18.5715C3.57129 18.966 3.89109 19.2857 4.28557 19.2857Z" fill="currentColor" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M13.5712 19.2857C13.9657 19.2857 14.2855 18.966 14.2855 18.5715C14.2855 18.177 13.9657 17.8572 13.5712 17.8572C13.1767 17.8572 12.8569 18.177 12.8569 18.5715C12.8569 18.966 13.1767 19.2857 13.5712 19.2857Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
        </x-slot:icon>
        POS
    </x-nav-link>

    <x-nav-link href="/purchasing" :active="request()->is('purchasing')">
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="currentColor" stroke="currentColor" class="h-5 w-5 hover:text-white hover:border-black">
                <g clip-path="url(#clip0_368_29)">
                    <path d="M13.5712 2.14285H15.7141C16.093 2.14285 16.4563 2.29336 16.7242 2.56127C16.9921 2.82918 17.1426 3.19254 17.1426 3.57142V17.8571C17.1426 18.236 16.9921 18.5994 16.7242 18.8673C16.4563 19.1352 16.093 19.2857 15.7141 19.2857H4.28551C3.90662 19.2857 3.54326 19.1352 3.27535 18.8673C3.00744 18.5994 2.85693 18.236 2.85693 17.8571V3.57142C2.85693 3.19254 3.00744 2.82918 3.27535 2.56127C3.54326 2.29336 3.90662 2.14285 4.28551 2.14285H6.42836" fill="currentColor" />
                    <path d="M13.5712 2.14285H15.7141C16.093 2.14285 16.4563 2.29336 16.7242 2.56127C16.9921 2.82918 17.1426 3.19254 17.1426 3.57142V17.8571C17.1426 18.236 16.9921 18.5994 16.7242 18.8673C16.4563 19.1352 16.093 19.2857 15.7141 19.2857H4.28551C3.90662 19.2857 3.54326 19.1352 3.27535 18.8673C3.00744 18.5994 2.85693 18.236 2.85693 17.8571V3.57142C2.85693 3.19254 3.00744 2.82918 3.27535 2.56127C3.54326 2.29336 3.90662 2.14285 4.28551 2.14285H6.42836" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12.1425 0.714294H7.85679C7.06782 0.714294 6.42822 1.35389 6.42822 2.14287V2.85715C6.42822 3.64613 7.06782 4.28572 7.85679 4.28572H12.1425C12.9315 4.28572 13.5711 3.64613 13.5711 2.85715V2.14287C13.5711 1.35389 12.9315 0.714294 12.1425 0.714294Z" fill="#F9FAFB" stroke="#1E1E20" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M6.42822 7.85715H13.5711" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M6.42822 11.4286H13.5711" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M6.42822 15H13.5711" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
        </x-slot:icon>
        Purchasing
    </x-nav-link>
    <x-nav-link href="/inventory" :active="request()->is('inventory')">
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="none" class="h-5 w-5 hover:border-white">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 4.6A2.6 2.6 0 0 1 2.6 2h18.8A2.6 2.6 0 0 1 24 4.6v.8A2.6 2.6 0 0 1 21.4 8H21v10.6c0 1.33-1.07 2.4-2.4 2.4H5.4C4.07 21 3 19.93 3 18.6V8h-.4A2.6 2.6 0 0 1 0 5.4v-.8ZM2.6 4a.6.6 0 0 0-.6.6v.8a.6.6 0 0 0 .6.6h18.8a.6.6 0 0 0 .6-.6v-.8a.6.6 0 0 0-.6-.6H2.6ZM8 10a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2H8Z" fill="currentColor" />
            </svg>
        </x-slot:icon>
        Inventory
    </x-nav-link>

    <x-nav-link href="/supplier" :active="request()->is('supplier')">
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="none" class="h-5 w-5 hover:text-white hover:border-white">
                <g clip-path="url(#clip0_368_29)">
                    <path d="M17.1429 10.7143V7.85713C17.1429 7.47825 16.9924 7.11489 16.7245 6.84698C16.4566 6.57907 16.0932 6.42856 15.7144 6.42856H2.14293C1.76405 6.42856 1.40068 6.57907 1.13277 6.84698C0.864865 7.11489 0.714355 7.47825 0.714355 7.85713V17.8571C0.714355 18.236 0.864865 18.5994 1.13277 18.8673C1.40068 19.1352 1.76405 19.2857 2.14293 19.2857H15.7144C16.0932 19.2857 16.4566 19.1352 16.7245 18.8673C16.9924 18.5994 17.1429 18.236 17.1429 17.8571V14.2857" fill="currentColor" />
                    <path d="M17.1429 10.7143V7.85713C17.1429 7.47825 16.9924 7.11489 16.7245 6.84698C16.4566 6.57907 16.0932 6.42856 15.7144 6.42856H2.14293C1.76405 6.42856 1.40068 6.57907 1.13277 6.84698C0.864865 7.11489 0.714355 7.47825 0.714355 7.85713V17.8571C0.714355 18.236 0.864865 18.5994 1.13277 18.8673C1.40068 19.1352 1.76405 19.2857 2.14293 19.2857H15.7144C16.0932 19.2857 16.4566 19.1352 16.7245 18.8673C16.9924 18.5994 17.1429 18.236 17.1429 17.8571V14.2857" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M4.44434 3.88889L13.6554 1.13735C13.7465 1.1117 13.8417 1.10476 13.9355 1.11695C14.0293 1.12914 14.1196 1.16021 14.2011 1.20827C14.2825 1.25633 14.3534 1.3204 14.4094 1.3966C14.4654 1.4728 14.5053 1.55956 14.5269 1.65163L14.9269 3.25163" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M18.5714 10.7143H14.9999C14.6054 10.7143 14.2856 11.0341 14.2856 11.4286V13.5714C14.2856 13.9659 14.6054 14.2857 14.9999 14.2857H18.5714C18.9658 14.2857 19.2856 13.9659 19.2856 13.5714V11.4286C19.2856 11.0341 18.9658 10.7143 18.5714 10.7143Z" fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
        </x-slot:icon>
        Supplier
    </x-nav-link>
    <x-nav-link href="/users" :active="request()->is('users')">
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="none" class="h-5 w-5 hover:text-white hover:border-white">
                <g clip-path="url(#clip0_368_29)">
                    <path d="M9.99979 10C12.564 10 14.6426 7.92133 14.6426 5.35715C14.6426 2.79297 12.564 0.714294 9.99979 0.714294C7.43561 0.714294 5.35693 2.79297 5.35693 5.35715C5.35693 7.92133 7.43561 10 9.99979 10Z" fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M18.8285 19.2857C18.2288 17.4155 17.0506 15.7841 15.4639 14.6266C13.8772 13.4692 11.964 12.8455 9.99996 12.8455C8.03595 12.8455 6.12268 13.4692 4.53598 14.6266C2.94928 15.7841 1.77113 17.4155 1.17139 19.2857H18.8285Z" fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
        </x-slot:icon>
        Users
    </x-nav-link>

</aside>