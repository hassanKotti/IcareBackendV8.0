<div class="flex-shrink-0 hidden w-56 min-h-screen bg-white border-r lg:block dark:bg-shark-900 dark:border-shark-700">
    <div class="py-8">
        <x-sidebar-link :active="request()->routeIs('dashboard')">
            <a href="{{ route('dashboard') }}" class="flex items-center space-x-4 ">
                <svg class="w-6 h-6 mr-2 text-shark-600 dark:text-shark-300" aria-hidden="true" fill="none"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                    </path>
                </svg>
                <div class="text-shark-600 dark:text-shark-300 group-hover:text-white">Dashboard</div>
            </a>
        </x-sidebar-link>

        <x-sidebar-link :active="request()->routeIs('doctor')">
            <a class="flex items-center space-x-4 " href="{{ route('doctor') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                </svg>
                <div class="text-shark-600 dark:text-shark-300 group-hover:text-white">Doctor</div>
            </a>
        </x-sidebar-link>
        <x-sidebar-link :active="request()->routeIs('specialization')">
            <a class="flex items-center space-x-4 " href="{{ route('specialization') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
                </svg>
                <div class="text-shark-600 dark:text-shark-300 group-hover:text-white">Specialization</div>
            </a>
        </x-sidebar-link>
        <x-sidebar-link :active="request()->routeIs('user')">
            <a class="flex items-center space-x-4 " href="{{ route('user') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="w-6 h-6 mr-2 text-shark-600 dark:text-shark-300" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <div class="text-shark-600 dark:text-shark-300 group-hover:text-white">Users</div>
            </a>
        </x-sidebar-link>
        <x-sidebar-link :active="request()->routeIs('aricle')">
            <a class="flex items-center space-x-4 " href="{{ route('aricle') }}">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                <div class="text-shark-600 dark:text-shark-300 group-hover:text-white">Aricles</div>
            </a>
        </x-sidebar-link>
    </div>
</div>
