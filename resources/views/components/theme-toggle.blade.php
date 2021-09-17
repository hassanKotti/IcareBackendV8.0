<div x-data="{
            mode: '',
            setColorMode: m => {
                if (m === 'dark') {
                    document.documentElement.classList.add('dark')
                    localStorage.setItem('colorMode', 'dark')
                } else {
                    document.documentElement.classList.remove('dark')
                    localStorage.setItem('colorMode', 'light')
                }
            }
        }" x-init="() => {
            const m = localStorage.getItem('colorMode');
            if (m !== 'dark' && m !== 'light') return;
            mode = m;
        }">
    <button aria-label="Color Mode"
        class="flex items-center justify-center w-10 p-2 m-4 rounded-lg text-shark-600 dark:text-shark-600 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-500">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" x-show="mode == 'dark'"
            class="w-6 h-6 text-shark-200 " @click="mode='light'; setColorMode('light');">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />

        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            x-show="mode == 'light'" @click="mode = 'dark'; setColorMode('dark');" class="w-6 h-6 text-shark-600"
            onclick="">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />

        </svg>

    </button>
</div>
