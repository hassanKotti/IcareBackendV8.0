<footer class="relative border-t dark:border-shark-600 mt-8 z-30 bottom-0 lg:relative text-dark-700 dark:text-dark-200">
    <div class="flex flex-col items-center px-8 py-4 mx-auto max-w-7xl sm:flex-row ">
        <!-- Logo -->
        <div class="flex items-center flex-shrink-0">
            <a href="{{ route('dashboard') }}" class="flex items-center justify-between">
                <x-application-logo class="w-auto h-8 mr-1 text-shark-500 dark:text-shark-300 fill-current" />
                <span class="ml-1 text-xs font-semibold uppercase text-dark-400">Icare</span>
            </a>
        </div>
        <span class="flex justify-center mt-4 space-x-5 sm:ml-auto sm:mt-0 sm:justify-start">

            <p
                class="mt-4 text-sm text-center text-dark-500 sm:mr-2 sm:pr-4 sm:border-r lg:text-left sm:border-dark-200 sm:mt-0 dark:text-dark-400 dark:border-dark-400">
                © 2021 rights reserved.
                Made with<br class="block md:hidden" /> ❤️ by<a class="text-green-400"
                    href="https://hassankotti.github.io"> Hassan Kotti</a>
            </p>
        </span>
        <div class="flex items-center justify-between mt-4 lg:mt-0 sm:ml-2 sm:pl-2 sm:mt-0">
            <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 mr-2 text-dark-400">
                <path fill-rule="evenodd"
                    d="M10 2a1 1 0 011 1v1.323l3.954 1.582 1.599-.8a1 1 0 01.894 1.79l-1.233.616 1.738 5.42a1 1 0 01-.285 1.05A3.989 3.989 0 0115 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.715-5.349L11 6.477V16h2a1 1 0 110 2H7a1 1 0 110-2h2V6.477L6.237 7.582l1.715 5.349a1 1 0 01-.285 1.05A3.989 3.989 0 015 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.738-5.42-1.233-.617a1 1 0 01.894-1.788l1.599.799L9 4.323V3a1 1 0 011-1zm-5 8.274l-.818 2.552c.25.112.526.174.818.174.292 0 .569-.062.818-.174L5 10.274zm10 0l-.818 2.552c.25.112.526.174.818.174.292 0 .569-.062.818-.174L15 10.274z"
                    clip-rule="evenodd"></path>
            </svg>
            <a href="https://opensource.org/licenses/MIT" class="text-sm text-dark-500 dark:text-dark-400">
                MIT License
            </a>
        </div>
    </div>
</footer>
