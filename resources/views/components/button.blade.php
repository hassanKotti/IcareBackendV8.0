<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-shark-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-shark-700 active:bg-shark-900 focus:outline-none focus:border-shark-900 focus:ring ring-shark-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
