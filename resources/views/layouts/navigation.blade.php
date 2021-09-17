<nav x-data="{ open: false }"
    class="relative bg-white border-b  lg:bg-white dark:bg-shark-900 border-shark-100 dark:border-shark-600">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto  sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex flex-1">
                <div class="flex items-center flex-shrink-0 py-4">
                    <a href="{{ route('dashboard') }}" class="flex items-center justify-between ">
                        <x-application-logo class="block w-auto h-8 fill-current dark:text-shark-200 text-shark-600" />
                        <span class="ml-2 text-lg font-bold uppercase dark:text-shark-200 text-shark-600">ICare</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="flex justify-center flex-1 py-3 lg:mr-32">
                    <div class="relative hidden w-full max-w-xl mr-6 lg:block focus-within:text-green-500 ">
                        <div class="absolute inset-y-0 flex items-center pl-2">
                            <svg class="w-5 h-5 mb-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input
                            class="w-full pl-8 pr-2 text-sm border-0 rounded-md text-shark-600 placeholder-shark-500 bg-shark-100 dark:placeholder-shark-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50 dark:bg-shark-500"
                            type="text" placeholder="Search for projects" aria-label="Search">
                    </div>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden lg:flex sm:items-center sm:ml-6">
                <x-theme-toggle />
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center text-sm font-medium transition duration-150 ease-in-out text-shark-600 dark:text-shark-400 hover:text-shark-600 hover:border-shark-300 focus:outline-none focus:text-shark-600 focus:border-shark-300">
                            <div class=" capitalize">{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content"
                        class="">
                        <!-- Authentication -->
                        <form method="
                        POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();"
                            class="">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="
                            flex items-center -mr-1 lg:hidden">
                            <x-theme-toggle />

                            <button @click="open = ! open"
                                class="inline-flex items-center justify-center p-2 transition duration-150 ease-in-out rounded-md text-shark-600 dark:text-shark-200 hover:text-shark-500 hover:bg-shark-100 dark:hover:bg-shark-600 focus:outline-none focus:ring-shark-700 focus:text-shark-500">
                                <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': ! open, 'inline-flex': open }"
                                        class="hidden text-shark-600" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden bg-white lg:hidden dark:bg-shark-700">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('doctor')" :active="request()->routeIs('doctor')">
                {{ __('doctor') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('specialization')" :active="request()->routeIs('specialization')">
                {{ __('specialization') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('user')" :active="request()->routeIs('user')">
                {{ __('user') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-shark-200 dark:bg-shark-700 dark:border-shark-800">
            <div class="px-4">
                <div class="text-base font-medium text-shark-600">{{ Auth::user()->name }}</div>
                <div class="text-sm font-medium text-shark-600">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
            <div class="relative max-w-xl m-3 mr-6 focus-within:text-green-500">
                <div class="absolute inset-y-0 flex items-center pl-2">
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input
                    class="w-full pl-8 pr-2 text-sm border-0 rounded-md text-shark-600 placeholder-shark-600 bg-shark-100 dark:placeholder-shark-500 dark:focus:shadow-outline-shark dark:focus:placeholder-shark-600 dark:bg-shark-700 dark:text-shark-200 focus:placeholder-shark-500 focus:bg-white focus:border-green-300 focus:outline-none focus:shadow-outline-green form-input"
                    type="text" placeholder="Search for projects" aria-label="Search">
            </div>
        </div>
    </div>
</nav>
