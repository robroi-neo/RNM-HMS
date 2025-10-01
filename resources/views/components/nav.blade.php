<aside class="w-64 h-screen bg-white text-black border-r-2 border-neutral-300 flex flex-col p-4 space-y-4">
    <!-- Logo + Title -->
    <a href="/" class="flex items-center space-x-3 p-2 rounded-lg">
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
                    <path d="M18.57 9.28H12.86C12.46 9.28 12.14 9.60 12.14 10v8.57c0 .39.32.71.71.71h5.71c.39 0 .71-.32.71-.71V10c0-.39-.32-.71-.71-.71Z" />
                    <path d="M18.57.71H12.86c-.39 0-.71.32-.71.71v2.87c0 .39.32.71.71.71h5.71c.39 0 .71-.32.71-.71V1.43c0-.39-.32-.71-.71-.71Z" />
                    <path d="M7.14.71H1.43c-.39 0-.71.32-.71.71V10c0 .39.32.71.71.71h5.71c.39 0 .71-.32.71-.71V1.43c0-.39-.32-.71-.71-.71Z" />
                    <path d="M7.14 14.99H1.43c-.39 0-.71.32-.71.71v2.86c0 .39.32.71.71.71h5.71c.39 0 .71-.32.71-.71V15.7c0-.39-.32-.71-.71-.71Z" />
                </g>
                <defs>
                    <clipPath id="clip0_368_29">
                        <rect width="20" height="20" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </x-slot:icon>

        Dashboard
    </x-nav-link>

    <x-nav-link href="/pos" :active="request()->is('/pos')">
        <x-slot:icon>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_368_29)">
                    <path d="M18.5716 9.28571H12.8574C12.4629 9.28571 12.1431 9.6055 12.1431 9.99999V18.5714C12.1431 18.9659 12.4629 19.2857 12.8574 19.2857H18.5716C18.9661 19.2857 19.2859 18.9659 19.2859 18.5714V9.99999C19.2859 9.6055 18.9661 9.28571 18.5716 9.28571Z" fill="#1E1E20" stroke="#1E1E20" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M18.5716 0.714294H12.8574C12.4629 0.714294 12.1431 1.03409 12.1431 1.42858V4.30001C12.1431 4.6945 12.4629 5.01429 12.8574 5.01429H18.5716C18.9661 5.01429 19.2859 4.6945 19.2859 4.30001V1.42858C19.2859 1.03409 18.9661 0.714294 18.5716 0.714294Z" fill="#1E1E20" stroke="#1E1E20" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M7.14293 0.714294H1.42864C1.03415 0.714294 0.714355 1.03409 0.714355 1.42858V10C0.714355 10.3945 1.03415 10.7143 1.42864 10.7143H7.14293C7.53742 10.7143 7.85721 10.3945 7.85721 10V1.42858C7.85721 1.03409 7.53742 0.714294 7.14293 0.714294Z" fill="#1E1E20" stroke="#1E1E20" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M7.14293 14.9857H1.42864C1.03415 14.9857 0.714355 15.3055 0.714355 15.7V18.5714C0.714355 18.9659 1.03415 19.2857 1.42864 19.2857H7.14293C7.53742 19.2857 7.85721 18.9659 7.85721 18.5714V15.7C7.85721 15.3055 7.53742 14.9857 7.14293 14.9857Z" fill="#1E1E20" stroke="#1E1E20" stroke-linecap="round" stroke-linejoin="round" />
                </g>
                <defs>
                    <clipPath id="clip0_368_29">
                        <rect width="20" height="20" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </x-slot:icon>
        POS
    </x-nav-link>

</aside>