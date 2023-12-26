<div x-cloak :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>
    
<div x-cloak :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">
    <div class="flex items-center justify-center mt-3">
        <div class="flex items-center">
            <x-jet-application-mark class="block h-9 w-auto" />

            <span class="mx-2 text-2xl font-semibold text-white">Site Name</span>
        </div>
    </div>

    <nav class="mt-5">
        <a class="flex items-center px-6 py-4 mt-2 text-gray-100 {{ request()->routeIs('pages_orders') ? 'bg-gray-700' : '' }} bg-opacity-25" href="{{ route('pages_orders') }}">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10a7 7 0 1 0 14 0a7 7 0 1 0-14 0m18 11l-6-6"></path>
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7H9.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3H8m2 0v1m0-8v1"></path>
            </svg>

            <span class="mx-3">{{ __('Orders') }}</span>
        </a>

        <a class="flex items-center px-6 py-4 mt-2 text-gray-100 {{ request()->routeIs('pages_home') ? 'bg-gray-700' : '' }} bg-opacity-25" href="{{ route('pages_home') }}">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
            </svg>

            <span class="mx-3">{{ __('Home') }}</span>
        </a>

        <a class="flex items-center px-6 py-4 mt-2 text-gray-100 {{ request()->routeIs('pages_dashboard') ? 'bg-gray-700' : '' }} bg-opacity-25" href="{{ route('pages_dashboard') }}">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18h5.5v-4H6zm0-5h5.5V6H6zm6.5 5H18v-7h-5.5zm0-8H18V6h-5.5zM5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h14q.825 0 1.413.588T21 5v2h2v2h-2v2h2v2h-2v2h2v2h-2v2q0 .825-.587 1.413T19 21z"></path>
            </svg>

            <span class="mx-3">{{ __('Dashboard') }}</span>
        </a>

        <a class="flex items-center px-6 py-4 text-gray-100 {{ request()->routeIs('pages_accounts') ? 'bg-gray-700' : '' }} bg-opacity-25" href="{{ route('pages_accounts') }}">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"></path>
            </svg>

            <span class="mx-3">{{ __('Accounts') }}</span>
        </a>

        <a class="flex items-center px-6 py-4 text-gray-100 bg-opacity-25" href="/">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"></path>
            </svg>

            <span class="mx-3">{{ __('Stocks') }}</span>
        </a>

        <a class="flex items-center px-6 py-4 text-gray-100 {{ request()->routeIs('pages_reports') ? 'bg-gray-700' : '' }} bg-opacity-25" href="{{ route('pages_reports') }}">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M10 18h8v2h-8zm0-5h12v2H10zm0 10h5v2h-5z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" d="M25 5h-3V4a2 2 0 0 0-2-2h-8a2 2 0 0 0-2 2v1H7a2 2 0 0 0-2 2v21a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2M12 4h8v4h-8Zm13 24H7V7h3v3h12V7h3Z"></path>
            </svg>

            <span class="mx-3">{{ __('Reports') }}</span>
        </a>

        <a class="flex items-center px-6 py-4 text-gray-100 bg-opacity-25" href="{{ route('logout') }}" @click.prevent="$root.submit();">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1012.728 0M12 3v9"></path>
            </svg>

            <span class="mx-3">{{ __('Logout') }}</span>
        </a>
    </nav>
</div>